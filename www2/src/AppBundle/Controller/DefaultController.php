<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use \AppBundle\Entity\ModweiStatus;
use \AppBundle\Entity\Sensorhistory;
use \AppBundle\Entity\Evento;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * Receive Cai Cai Model Report
     * @Route("/caicai/{imei}/{ch1}/{ch2}/{ch3}/{ch4}", name="caicai_report")
     * @Method({"GET", "POST"})
     */
    public function caicaiAction($imei, $ch1, $ch2, $ch3, $ch4)
    {
        $activity = 0;
        $evalAlarm = false;
        $flagAlarma = false;
        $alarm = "X > 1";
        $countAlarms = 0;


        $logger = $this->get('logger');

        $logger->info('Receiving data from '.$imei);

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('
            SELECT p
            FROM AppBundle:Wei p
            WHERE p.imei = :imei'
        )->setParameter('imei', $imei);

        $WEI = $query->getSingleResult();

        if (count($WEI) == 1) {
            
            $logger->info("ModWei Exist");
            if ($WEI->getModweiStatus()->getDescription() =="Activo") {

                $query = $em->createQuery('
                    SELECT p FROM AppBundle:Sensor p
                    WHERE p.weiwei = :weiid
                    ORDER BY p.channelid ASC')
                ->setParameter('weiid', $WEI->getIdwei() );
                
                $sensores = $query->getResult();

                $logger->info("ModWei is Active");

                foreach ($sensores as $sensor) {
                    $var = 0;
                    $recordDate = new \DateTime();

                    $activity = date_diff($recordDate,$sensor->getLastReport());

                    if ($sensor->getChannelid()==1) {
                        
                        $sensor->setValue($ch1);
                        $expresion = sprintf($sensor->getFormula(), $ch1);

                    } elseif ($sensor->getChannelid()==2) {

                        $sensor->setValue($ch2);
                        $expresion = sprintf($sensor->getFormula(), $ch2);
                        
                    } elseif ($sensor->getChannelid()==3) {

                        $sensor->setValue($ch3);
                        $expresion = sprintf($sensor->getFormula(), $ch3);
                        
                    } elseif ($sensor->getChannelid()==4) {

                        $sensor->setValue($ch4);
                        $expresion = sprintf($sensor->getFormula(), $ch4);
                        
                    }

                    $logger->info("Expresion: ".$expresion);

                    // calculate human value from sensor value in volts
                    $var = $this->calcula_expresion($expresion);

                    $logger->info("Human Value: ".$var);


                    // evaluate alarms

                    $query = $em->createQuery('
                        SELECT p FROM AppBundle:Alarm p
                        WHERE p.sensorsensor = :idSensor
                        ORDER BY p.alarmlevel DESC')
                    ->setParameter('idSensor', $sensor);
                    

                    $alarmas = $query->getResult();

                    if (count($alarmas)>0)
                    {
                        $flagAlarma = false
                        foreach ($alarmas as $alarma) {
                            
                            $logger->info("Alarm configured for this sensor.");

                            $count_X = substr_count($alarma->getExpression(), "X");

                            $xpresion = str_replace("X", strval($var), $alarma->getExpression());

                            $logger->info("Expresion to evaluate:".$xpresion);

                            $evalAlarm = eval("return ".$xpresion.";");

                            $logger->info("Expresion result: ".$evalAlarm);

                            if ($evalAlarm) {

                                // We evaluate whether the alarm has already been notified and if the repetition period has expired.
                                $alarmInterval = date_diff($recordDate, $alarma->getLastalarm());

                                $logger->info("Alarm validation true.");

                                $flagAlarma = true;

                                //We count the number of alarms fit the criteria in order to determine whether the sensor should be restored in an alarm level 0
                                $countAlarms++;

                                if ($alarmInterval->i >= $alarma->getNextalarminterval() || $alarmInterval->h > 0 || $alarmInterval->d > 0 || $alarmInterval->m > 0 || $alarmInterval->y > 0 )
                                {
                                    $logger->info("Alarm can be sended");

                                    // The reporting period has expired, so we sent the alarm.

                                    $sensor->setAlarmlevel($alarma->getAlarmlevel());

                                    // persist new sensor value

                                    $sensor->setLastReport($recordDate);
                                    $sensor->setHumanValue($var);

                                    $em->persist($sensor);

                                    $em->flush();

                                    

                                    if ($alarma->getAlarmlevel()>0) {

                                        $alarma->setLastalarm($recordDate);
                                        $em->persist($alarma);
                                        $em->flush();

                                        // we seek notification lists for the alarm and execute the corresponding action

                                        $query = $em->createQuery('
                                            SELECT p FROM AppBundle:Alarmaction p
                                                WHERE p.alarmalarm = :idAlarm')
                                        ->setParameter('idAlarm', $alarma->getIdAlarm());

                                        $notifList = $query->getResult();

                                        if (count($notifList) > 0) {

                                            $logger->info("Count notification list for alarm:".count($notifList));

                                            foreach ($notifList as $notif) {
                             
                                                if ($notif->getNotificationlistnotificationlist()->getNotificationtypenotificationtype()->getType() == "SMS") {

                                                    $logger->info("Sending SMS");

                                                    $r = $this->sendSMS ("El sensor ".$sensor->getDescription()." ha generado la alarma: ".$alarma->getDescription()." al marcar ".$var."%25"
                                                        , $notif->getNotificationlistnotificationlist()->getList().",");

                                                    //print $r["success"]."|".$r["api_status_code"]."|".$r["api_message"];
                                                    //print $r;
                                                    $logger->info("SMS Sended.");
                                                }
                             
                                                if ($notif->getNotificationlistnotificationlist()->getNotificationtypenotificationtype()->getType() == "e-mail") {

                                                    $this->sendEmail($notif->getNotificationlistnotificationlist()->getList(), 
                                                        $alarma->getAlarmlevel(), $alarma->getDescription(), $WEI->getDescription(), $recordDate, $var, $sensor->getSensortypesensortype()->getMeasurement());
                                                }
                                            } // end foreach $notifList
                                        } // end if exist notifList

                                        // Detected an alarm criterion, we generate and record an event in the system for the client indicated.
                                        
                                        $logger->info("Saving event.");

                                        $evento = new Evento();

                                        $evento->setNivelevento($alarma->getAlarmlevel());
                                        $evento->setFechaevento($recordDate);
                                        $evento->setCustomer($WEI->getCustomer());
                                        $evento->setDescripcion("El sensor ".$sensor->getDescription()." ha generado la alarma: ".$alarma->getDescription()." al marcar ".$var." ".$sensor->getSensortypesensortype()->getMeasurement());

                                        $logger->info("El sensor ".$sensor->getDescription()." asociado a ".$WEI->getDescription()."ha generado la alarma: ".$alarma->getDescription()." al ".$var." ".$sensor->getSensortypesensortype()->getMeasurement());
                                        $em->persist($evento);
                                        $em->flush();

                                        $logger->info("Event saved.");
                                    }

                                }else {
                                    // The alarm has already been sent and should be expected to complete the waiting time for the next prompt, 
                                    // only the sensor value is updated.

                                    if ($alarma->getAlarmlevel()>0) {
                                        $sensor->setHumanValue($var);  
                                        $sensor->setAlarmlevel($alarma->getAlarmlevel());              
                                        $em->persist($sensor);
                                        $em->flush();
                                        $logger->info("Set alarm level to ".$alarma->getAlarmlevel());  
                                    }

                                    $logger->info("The alarm has already been sent. Waiting time is fulfilled configured to forward.");
                                }
                            } // end if eval alarm
                        } // end foreach $alarmas

                        if ($flagAlarma==false) 
                        {

                            $sensor->setHumanValue($var);  
                            $sensor->setAlarmlevel(0);                     
                            $em->persist($sensor);
                            $em->flush();     

                        }
                    }
    
                    // check if need save new value in sensor history

                    if ($activity->i >= $sensor->getSavehistoryevery() || $activity->h > 0 || $activity->d > 0 || $activity->m > 0 || $activity->y > 0)
                    {
                        $history = new Sensorhistory();

                        $history->setHumanValue($var);
                        $history->setTimeStamp($recordDate);
                        $history->setSensorsensor($sensor);

                        $em->persist($history);
                        $em->flush();

                        // persist new sensor value

                        $sensor->setLastReport($recordDate);
                        $sensor->setHumanValue($var);

                        $em->persist($sensor);

                        $em->flush();

                    }

                }
                $returnValue = array(
                    'Response' => 'Success',
                    );

                return new JsonResponse($returnValue);

            }
        }

        $returnValue = array(
            'Response' => 'Fail',
        );

        return new JsonResponse($returnValue);
    }

    public function sendSMS($message, $telefonos) 
    {
        $usuario="dkangme";
        $password="Mies2016";
        $url="https://bulksms.vsms.net/eapi/submission/send_sms/2/2.0";
        $port=443;


        $lista = $telefonos;

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL,$url);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt ($curl, CURLOPT_PORT, $port );
        // Allowing cUrl funtions 20 second to execute
        curl_setopt ( $curl, CURLOPT_TIMEOUT, 20 );
        // Waiting 20 seconds while trying to connect
        curl_setopt ( $curl, CURLOPT_CONNECTTIMEOUT, 20 );
        curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt($curl, CURLOPT_POSTFIELDS, "username=".$usuario."&password=".$password."&message=".$this->cleanString($message)."&msisdn=".$lista);

        //print ("\nusername=".$usuario."&password=".$password."&message=".$message."&msisdn=".$lista."\n");

        $response_string = curl_exec( $curl );
        $curl_info = curl_getinfo( $curl );

        $sms_result = array();
        $sms_result['success'] = 0;
        $sms_result['details'] = '';
        $sms_result['transient_error'] = 0;
        $sms_result['http_status_code'] = $curl_info['http_code'];
        $sms_result['api_status_code'] = '';
        $sms_result['api_message'] = '';
        $sms_result['api_batch_id'] = '';

        if ( $response_string == FALSE ) {
            $sms_result['details'] .= "cURL error: " . curl_error( $curl ) . "\n";
        } elseif ( $curl_info[ 'http_code' ] != 200 ) {
            $sms_result['transient_error'] = 1;
            $sms_result['details'] .= "Error: non-200 HTTP status code: " . $curl_info[ 'http_code' ] . "\n";
        }
        else {
            $sms_result['details'] .= "Response from server: $response_string\n";
            $api_result = explode( '|', $response_string );
            $status_code = $api_result[0];
            $sms_result['api_status_code'] = $status_code;
            $sms_result['api_message'] = $api_result[1];
        
            if ( count( $api_result ) != 3 ) {
                $sms_result['details'] .= "Error: could not parse valid return data from server.\n" . count( $api_result );
            } else {
                if ($status_code == '0') {
                    $sms_result['success'] = 1;
                    $sms_result['api_batch_id'] = $api_result[2];
                    $sms_result['details'] .= "Message sent - batch ID $api_result[2]\n";
                }
                else if ($status_code == '1') {
                    # Success: scheduled for later sending.
                    $sms_result['success'] = 1;
                    $sms_result['api_batch_id'] = $api_result[2];
                }
                else {
                    $sms_result['details'] .= "Error sending: status code [$api_result[0]] description [$api_result[1]]\n";
                }
            }
        }

        curl_close ($curl);

        return $sms_result;

    }

    public function sendEmail($lista, $level, $gas, $puntoRemoto, $ts, $valor, $unidad) {

        $subject = "";
        $nivel = "";


        switch ($level) {
            case "CLevel":
                $subject = "ALARMA - Precaución nivel de ".$gas;
                $nivel = "PRECAUCIÓN";
                break;
            case "WLevel":
                $subject = "ALARMA - Advertencia nivel de ".$gas;
                $nivel = "ADVERTENCIA";
                break;
            case "ALevel":
                $subject = "ALARMA - Crítico nivel de ".$gas;
                $nivel = "NIVEL CRÍTICO";
                break;
        }

        $message = \Swift_Message::newInstance()
        ->setSubject($subject)
        ->setFrom('msa_alarmas@k-group.cl')
        ->setTo($lista)
        ->setBody(
            $this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                'Emails/emailBody.html.twig',
                array(
                    'nivel' => $nivel,
                    'gas' => $gas,
                    'puntoRemoto' => $puntoRemoto,
                    'ts' => $ts,
                    'valor' => sprintf("%0.2f", $valor),
                    'unidad' => $unidad,
                    )
            ),
            'text/html'
        );

        $this->get('mailer')->send($message);

        return;
    }


    private function cleanString($text) {
        $utf8 = array(
            '/[áàâãªä]/u'   =>   'a',
            '/[ÁÀÂÃÄ]/u'    =>   'A',
            '/[ÍÌÎÏ]/u'     =>   'I',
            '/[íìîï]/u'     =>   'i',
            '/[éèêë]/u'     =>   'e',
            '/[ÉÈÊË]/u'     =>   'E',
            '/[óòôõºö]/u'   =>   'o',
            '/[ÓÒÔÕÖ]/u'    =>   'O',
            '/[úùûü]/u'     =>   'u',
            '/[ÚÙÛÜ]/u'     =>   'U',
            '/ç/'           =>   'c',
            '/Ç/'           =>   'C',
            '/ñ/'           =>   'n',
            '/Ñ/'           =>   'N',
            '/–/'           =>   '-', // UTF-8 hyphen to "normal" hyphen
            '/[’‘‹›‚]/u'    =>   ' ', // Literally a single quote
            '/[“”«»„]/u'    =>   ' ', // Double quote
            '/ /'           =>   ' ', // nonbreaking space (equiv. to 0x160)
        );

        return preg_replace(array_keys($utf8), array_values($utf8), $text);
    }

    private function calcula_expresion($formula)
    {
        $logger = $this->get('logger');

        $logger->info("Formula = ".$formula);

        // Remove whitespaces
        $formula = preg_replace('/\s+/', '', $formula);

        $number = '(?:\d+(?:[,.]\d+)?|pi|π)'; // What is a number
        $functions = '(?:sinh?|cosh?|tanh?|abs|acosh?|asinh?|atanh?|exp|log10|deg2rad|rad2deg|sqrt|ceil|floor|round)'; // Allowed PHP functions
        $operators = '[+\/*\^%-]'; // Allowed math operators
        $regexp = '/^(('.$number.'|'.$functions.'\s*\((?1)+\)|\((?1)+\))(?:'.$operators.'(?2))?)+$/'; // Final regexp, heavily using recursive patterns

        if (preg_match($regexp, $formula))
        {
            $formula = preg_replace('!pi|π!', 'pi()', $formula); // Replace pi with pi function
            eval('$result = '.$formula.';');
        }
        else
        {
            $result = false;
        }

        //print("calcula_formula =".$result);
        return $result;

    }
}
