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
 * @Route("/admin/sensor")
 */
class SensorController extends Controller
{
    /**
     * Lists all Sensor entities.
     *
     * @Route("/", name="admin_sensor_index")
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
            ORDER BY p.description')
        ->setParameter('customerId', $user->getCustomercustomer()->getId());

        $sensors = $query->getResult();

        return $this->render('sensor/index.html.twig', array(
            'sensors' => $sensors,
        ));
    }

    /**
     * Show Sensor Dashboard 
     * @Route("/dashboard", name="admin_sensor_dashboard")
     * @Method("GET")
     */
    public function dashboardAction()
    {
        return $this->render('sensor/dashboard.html.twig');
    }


    /**
     * Lists all Sensor entities, return JSON.
     *
     * @Route("/json", name="admin_sensor_json_index")
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
                q.measurement, q.description as st_desc 
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
                'humanvalue' => $value['humanvalue'],
                'value' => $value['value'],
                'lastreport' => $value['lastreport']->format('d-m-Y H:i'),
                'description' => $value['description'],
                'alarmlevel' => $value['alarmlevel'],
                'minvalue' => $value['minvalue'],
                'maxvalue' => $value['maxvalue'],
                'measurement' => $value['measurement'],
                'st_desc' => $value['st_desc']
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
     * @Route("/chart/{id}", name="admin_sensor_linechart")
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
     *
     * @Route("/get24/{id}", name="admin_last24h_sensor")
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
     * Creates a new Sensor entity.
     *
     * @Route("/new", name="admin_sensor_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $sensor = new Sensor();
        $form = $this->createForm('AppBundle\Form\SensorType', $sensor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $sensor->setLastreport(new \DateTime());
            $em->persist($sensor);
            $em->flush();

            return $this->redirectToRoute('admin_sensor_show', array('id' => $sensor->getIdsensor()));
        }

        return $this->render('sensor/new.html.twig', array(
            'sensor' => $sensor,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Sensor entity.
     *
     * @Route("/{id}", name="admin_sensor_show")
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
     * @Route("/{id}/edit", name="admin_sensor_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Sensor $sensor)
    {
        $user = $this->getUser();

        $deleteForm = $this->createDeleteForm($sensor);
        $editForm = $this->createForm('AppBundle\Form\SensorType', $sensor, array('sensor'=>$sensor));
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sensor);
            $em->flush();

            return $this->redirectToRoute('admin_sensor_edit', array('id' => $sensor->getId()));
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
     * @Route("/{id}", name="admin_sensor_delete")
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

        return $this->redirectToRoute('admin_sensor_index');
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
            ->setAction($this->generateUrl('admin_sensor_delete', array('id' => $sensor->getIdsensor())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
