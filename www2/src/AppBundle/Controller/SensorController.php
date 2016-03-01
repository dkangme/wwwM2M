<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Sensor;
use AppBundle\Form\SensorType;

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
        $em = $this->getDoctrine()->getManager();

        $sensors = $em->getRepository('AppBundle:Sensor')->findAll();

        return $this->render('sensor/index.html.twig', array(
            'sensors' => $sensors,
        ));
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
            $em->persist($sensor);
            $em->flush();

            return $this->redirectToRoute('admin_sensor_show', array('id' => $sensor->getId()));
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
        $deleteForm = $this->createDeleteForm($sensor);
        $editForm = $this->createForm('AppBundle\Form\SensorType', $sensor);
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
            ->setAction($this->generateUrl('admin_sensor_delete', array('id' => $sensor->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}