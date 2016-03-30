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
 * @Route("/data/notificationlist")
 */
class NotificationlistController extends Controller
{
    /**
     * Lists all Notificationlist entities.
     *
     * @Route("/", name="data_notificationlist_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery('
            SELECT p
            FROM AppBundle:Notificationlist p
            WHERE p.customer = :customerId
            ORDER BY p.name ASC
            ')
            ->setParameter('customerId', $user->getCustomercustomer());

        $notificationlists = $query->getResult();

        return $this->render('notificationlist/index.html.twig', array(
            'notificationlists' => $notificationlists,
        ));
    }

    /**
     * Creates a new Notificationlist entity.
     *
     * @Route("/new", name="data_notificationlist_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $notificationlist = new Notificationlist();
        $form = $this->createForm('AppBundle\Form\NotificationlistType', $notificationlist);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $notificationlist->setCustomer($this->getUser()->getCustomercustomer());
            $em->persist($notificationlist);
            $em->flush();

            return $this->redirectToRoute('data_notificationlist_show', array('id' => $notificationlist->getIdnotificationlist()));
        }

        return $this->render('notificationlist/new.html.twig', array(
            'notificationlist' => $notificationlist,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Notificationlist entity.
     *
     * @Route("/{id}", name="data_notificationlist_show")
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
     * @Route("/{id}/edit", name="data_notificationlist_edit")
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

            return $this->redirectToRoute('data_notificationlist_edit', array('id' => $notificationlist->getIdnotificationlist()));
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
     * @Route("/{id}", name="data_notificationlist_delete")
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

        return $this->redirectToRoute('data_notificationlist_index');
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
            ->setAction($this->generateUrl('data_notificationlist_delete', array('id' => $notificationlist->getIdnotificationlist())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
