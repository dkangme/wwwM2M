<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Notificationlist;
use AppBundle\Form\NotificationlistType;

/**
 * Notificationlist controller.
 *
 * @Route("/admin/notificationlist")
 */
class NotificationlistController extends Controller
{
    /**
     * Lists all Notificationlist entities.
     *
     * @Route("/", name="admin_notificationlist_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $notificationlists = $em->getRepository('AppBundle:Notificationlist')->findAll();

        return $this->render('notificationlist/index.html.twig', array(
            'notificationlists' => $notificationlists,
        ));
    }

    /**
     * Creates a new Notificationlist entity.
     *
     * @Route("/new", name="admin_notificationlist_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $notificationlist = new Notificationlist();
        $form = $this->createForm('AppBundle\Form\NotificationlistType', $notificationlist);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($notificationlist);
            $em->flush();

            return $this->redirectToRoute('admin_notificationlist_show', array('id' => $notificationlist->getIdnotificationlist()));
        }

        return $this->render('notificationlist/new.html.twig', array(
            'notificationlist' => $notificationlist,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Notificationlist entity.
     *
     * @Route("/{id}", name="admin_notificationlist_show")
     * @Method("GET")
     */
    public function showAction(Notificationlist $notificationlist)
    {
        $deleteForm = $this->createDeleteForm($notificationlist);

        return $this->render('notificationlist/show.html.twig', array(
            'notificationlist' => $notificationlist,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Notificationlist entity.
     *
     * @Route("/{id}/edit", name="admin_notificationlist_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Notificationlist $notificationlist)
    {
        $deleteForm = $this->createDeleteForm($notificationlist);
        $editForm = $this->createForm('AppBundle\Form\NotificationlistType', $notificationlist);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($notificationlist);
            $em->flush();

            return $this->redirectToRoute('admin_notificationlist_edit', array('id' => $notificationlist->getId()));
        }

        return $this->render('notificationlist/edit.html.twig', array(
            'notificationlist' => $notificationlist,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Notificationlist entity.
     *
     * @Route("/{id}", name="admin_notificationlist_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Notificationlist $notificationlist)
    {
        $form = $this->createDeleteForm($notificationlist);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($notificationlist);
            $em->flush();
        }

        return $this->redirectToRoute('admin_notificationlist_index');
    }

    /**
     * Creates a form to delete a Notificationlist entity.
     *
     * @param Notificationlist $notificationlist The Notificationlist entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Notificationlist $notificationlist)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_notificationlist_delete', array('id' => $notificationlist->getIdnotificationlist())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
