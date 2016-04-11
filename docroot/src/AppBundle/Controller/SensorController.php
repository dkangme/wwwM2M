<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Sensor;
use AppBundle\Form\SensorType;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Sensor controller.
 *
 * @Route("/data/sensor")
 */
class SensorController extends Controller
{
    /**
     * Lists all Sensor entities.
     *
     * @Route("/", name="data_sensor_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery('
            SELECT p FROM AppBundle:Sensor p
            LEFT JOIN AppBundle:Wei r WITH p.weiwei = r.idwei
            WHERE r.customer = :customerId
            ORDER BY r.nickname')
        ->setParameter('customerId', $user->getCustomercustomer()->getId());

        $sensors = $query->getResult();

        return $this->render('sensor/index.html.twig', array(
            'sensors' => $sensors,
        ));
    }

    /**
     * Show Sensor Dashboard 
     * @Route("/dashboard", name="data_sensor_dashboard")
     * @Method("GET")
     */
    public function dashboardAction()
    {
        return $this->render('sensor/dashboard.html.twig');
    }


    /**
     * Export Sensor Data
     * @Route("/exportdata", name="data_sensor_export")
     * @Method("GET")
     */
    public function exportDataAction()
    {
        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery('
            SELECT p, q.nickname
            FROM AppBundle:Sensor p
            JOIN LEFT p.weiwei = q.idwei
            WHERE q.customer = :customerId
            OREDER BY q.nickname ASC'
            );

        
        return $this->render('sensor/exportdata.html.twig');
    }


    /**
     * Lists all Sensor entities, return JSON.
     *
     * @Route("/json", name="data_sensor_json_index")
     * @Method("GET")
     */
    public function jsonSensorAction()
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        // $query = $em->createQuery('
        //     SELECT p FROM AppBundle:Sensor p
        //     LEFT JOIN AppBundle:Wei q WITH p.weiwei = q.idwei
        //     WHERE q.customer = :customerId
        // ')
        // ->setParameter('customerId', $user->getCustomercustomer()->getId())
        // ;

        $query = $em->createQuery('
            SELECT p.idsensor, p.humanvalue, p.value, p.lastreport, p.description, p.alarmlevel, q.minvalue, q.maxvalue, 
                q.measurement, q.description as st_desc, r.nickname 
            FROM AppBundle:Sensor p
            LEFT JOIN AppBundle:Sensortype q WITH q.idsensortype = p.sensortypesensortype
            LEFT JOIN AppBundle:Wei r WITH p.weiwei = r.idwei
            WHERE r.customer = :customerId
            ORDER BY p.alarmlevel DESC
            ')
            ->setParameter('customerId', $user->getCustomercustomer()->getId());

        $sensores = $query->getArrayResult();

        $returnValue = [];

        foreach ($sensores as $value) {
            $returnValue[] = [
                'idsensor' => $value['idsensor'],
                'humanvalue' => number_format($value['humanvalue'], 2, ',', '.'),
                'value' => $value['value'],
                'lastreport' => $value['lastreport']->format('d-m-Y H:i'),
                'description' => $value['description'],
                'alarmlevel' => $value['alarmlevel'],
                'minvalue' => $value['minvalue'],
                'maxvalue' => $value['maxvalue'],
                'measurement' => $value['measurement'],
                'st_desc' => $value['st_desc'],
                'nickname' => $value['nickname'],
            ];
        }

      /*  $respuesta = array (
            'usuario' => $user->getCustomercustomer()->getId(),
            'sensores' => $sensores,
            );*/

        return new JsonResponse($returnValue);
    }

    /**
     * Show line chart for last 24 hours history
     *
     * @Route("/chart/{id}", name="data_sensor_linechart")
     * @Method("GET")
     */

    public function viewChartAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery('
            SELECT p FROM AppBundle:Sensor p
            WHERE p.idsensor = :id
        ')
        ->setParameter('id', $id);

        $sensor = $query->getSingleResult();

        return $this->render('sensor/linechart.html.twig', array('sensor' => $sensor));
    }

    /**
     * Get last 24 hours history record of desired sensor.
     * json to draw line chart
     * @Route("/get24/{id}", name="data_last24h_sensor")
     * @Method("GET")
     */

    public function last24hAction($id)
    {
        $currentDate = date('y-m-d h:i');
        $lastDay = strtotime('-1 day', strtotime($currentDate));
        $lastDay = date('y-m-d h:i', $lastDay);

        $logger = $this->get('logger');

        $logger->info("lastDay =".$lastDay);

        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        // $query = $em->createQuery('
        //     SELECT p FROM AppBundle:Sensor p
        //     LEFT JOIN AppBundle:Wei q WITH p.weiwei = q.idwei
        //     WHERE q.customer = :customerId
        // ')
        // ->setParameter('customerId', $user->getCustomercustomer()->getId())
        // ;

        $query = $em->createQuery('
            SELECT p.humanvalue, p.timestamp FROM AppBundle:Sensorhistory p
            WHERE p.sensorsensor = :idsensor and 
                p.timestamp >= :hlimit
            ORDER BY p.timestamp ASC
            ')
            ->setParameter('idsensor', $id)
            ->setParameter('hlimit', new \DateTime('-24 hour'), \Doctrine\DBAL\Types\Type::DATETIME);

        $historia = $query->getArrayResult();

        $rows = array();
        $table = array();
        $table['cols'] = array(
            array('label' => 'date', 'type' => 'string'),
            array('label' => 'measurement', 'type' => 'number')
        );

        $rows = [];

        foreach ($historia as $value) {
            $temp = array();

            $temp[] = array('v' => (string)$value['timestamp']->format('H:i'));
            $temp[] = array('v' => (double) $value['humanvalue']);
            $rows[] = array('c' => $temp);
        }

        $table['rows'] = $rows;
    
        return new JsonResponse($table);
    } 


        /**
     * Get last 24 hours history record of desired sensor.
     * json to draw line chart
     * @Route("/get24csv/{id}", name="data_last24csv_sensor")
     * @Method("GET")
     */

    public function last24csvAction($id)
    {
        $currentDate = date('y-m-d h:i');
        $lastDay = strtotime('-1 day', strtotime($currentDate));
        $lastDay = date('y-m-d h:i', $lastDay);

        $logger = $this->get('logger');

        $logger->info("lastDay =".$lastDay);

        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        // $query = $em->createQuery('
        //     SELECT p FROM AppBundle:Sensor p
        //     LEFT JOIN AppBundle:Wei q WITH p.weiwei = q.idwei
        //     WHERE q.customer = :customerId
        // ')
        // ->setParameter('customerId', $user->getCustomercustomer()->getId())
        // ;

        $query = $em->createQuery('
            SELECT p.humanvalue as value, p.timestamp FROM AppBundle:Sensorhistory p
            WHERE p.sensorsensor = :idsensor and 
                p.timestamp >= :hlimit
            ORDER BY p.timestamp ASC
            ')
            ->setParameter('idsensor', $id)
            ->setParameter('hlimit', new \DateTime('-24 hour'), \Doctrine\DBAL\Types\Type::DATETIME);

        $historia = $query->getResult();

        $filename = "export_".date("Y_m_d_His").".csv";

        $response = $this->render('default/adminCsv.html.twig', array('data' => $historia)); 
        
        $response->headers->set('Content-Type', 'text/csv');

        $response->headers->set('Content-Disposition', 'attachment; filename='.$filename); 
        
        return $response; 
    }

    /**
     * Creates a new Sensor entity.
     *
     * @Route("/new", name="data_sensor_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {

        $logger = $this->get('logger');

        $user = $this->getUser();
        $sensor = new Sensor();

        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery('
            SELECT a
            FROM AppBundle:Wei a
            WHERE a.customer = :customerId')
            ->setParameter('customerId', $user->getCustomercustomer())
            ->setMaxResults(1);

        $Weis = $query->getResult();

        foreach ($Weis as $wei)
        {
            $logger->info("WEI: ".$wei->getDescription());

            $sensor->setWeiwei($wei);            
        }


        $form = $this->createForm('AppBundle\Form\SensorType', $sensor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $sensor->setLastreport(new \DateTime());
            $em->persist($sensor);
            $em->flush();

            return $this->redirectToRoute('data_sensor_show', array('id' => $sensor->getIdsensor()));
        }

        return $this->render('sensor/new.html.twig', array(
            'sensor' => $sensor,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Sensor entity.
     *
     * @Route("/{id}", name="data_sensor_show")
     * @Method("GET")
     */
    public function showAction(Sensor $sensor)
    {
        $deleteForm = $this->createDeleteForm($sensor);

        return $this->render('sensor/show.html.twig', array(
            'sensor' => $sensor,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Sensor entity.
     *
     * @Route("/{id}/edit", name="data_sensor_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Sensor $sensor)
    {

        $deleteForm = $this->createDeleteForm($sensor);
        $editForm = $this->createForm('AppBundle\Form\SensorType', $sensor);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sensor);
            $em->flush();

            return $this->redirectToRoute('data_sensor_edit', array('id' => $sensor->getIdsensor()));
        }

        return $this->render('sensor/edit.html.twig', array(
            'sensor' => $sensor,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Sensor entity.
     *
     * @Route("/{id}", name="data_sensor_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Sensor $sensor)
    {
        $form = $this->createDeleteForm($sensor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($sensor);
            $em->flush();
        }

        return $this->redirectToRoute('data_sensor_index');
    }

    /**
     * Creates a form to delete a Sensor entity.
     *
     * @param Sensor $sensor The Sensor entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Sensor $sensor)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('data_sensor_delete', array('id' => $sensor->getIdsensor())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
