<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Alarm;
use AppBundle\Form\AlarmType;

/**
 * Alarm controller.
 *
 * @Route("/admin/alarm")
 */
class AlarmController extends Controller
{
    /**
     * Lists all Alarm entities.
     *
     * @Route("/", name="admin_alarm_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $alarms = $em->getRepository('AppBundle:Alarm')->findAll();

        return $this->render('alarm/index.html.twig', array(
            'alarms' => $alarms,
        ));
    }

    /**
     * Creates a new Alarm entity.
     *
     * @Route("/new", name="admin_alarm_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $alarm = new Alarm();
        $form = $this->createForm('AppBundle\Form\AlarmType', $alarm);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($alarm);
            $em->flush();

            return $this->redirectToRoute('admin_alarm_show', array('id' => $alarm->getIdalarm()));
        }

        return $this->render('alarm/new.html.twig', array(
            'alarm' => $alarm,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Alarm entity.
     *
     * @Route("/{id}", name="admin_alarm_show")
     * @Method("GET")
     */
    public function showAction(Alarm $alarm)
    {
        $deleteForm = $this->createDeleteForm($alarm);

        return $this->render('alarm/show.html.twig', array(
            'alarm' => $alarm,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Alarm entity.
     *
     * @Route("/{id}/edit", name="admin_alarm_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Alarm $alarm)
    {
        $deleteForm = $this->createDeleteForm($alarm);
        $editForm = $this->createForm('AppBundle\Form\AlarmType', $alarm);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($alarm);
            $em->flush();

            return $this->redirectToRoute('admin_alarm_edit', array('id' => $alarm->getId()));
        }

        return $this->render('alarm/edit.html.twig', array(
            'alarm' => $alarm,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Alarm entity.
     *
     * @Route("/{id}", name="admin_alarm_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Alarm $alarm)
    {
        $form = $this->createDeleteForm($alarm);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($alarm);
            $em->flush();
        }

        return $this->redirectToRoute('admin_alarm_index');
    }

    /**
     * Creates a form to delete a Alarm entity.
     *
     * @param Alarm $alarm The Alarm entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Alarm $alarm)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_alarm_delete', array('id' => $alarm->getIdalarm())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
