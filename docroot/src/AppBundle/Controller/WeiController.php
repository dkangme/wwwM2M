<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Wei;
use AppBundle\Form\WeiType;

/**
 * Wei controller.
 *
 * @Route("/data/modwei")
 */
class WeiController extends Controller
{
    /**
     * Lists all Wei entities.
     *
     * @Route("/", name="data_modwei_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery('
            SELECT p
            FROM AppBundle:Wei p
            WHERE p.customer = :customer
            ORDER BY p.nickname ASC
            ')
            ->setParameter('customer', $user->getCustomercustomer());


        $weis = $query->getResult();

        return $this->render('wei/index.html.twig', array(
            'weis' => $weis,
        ));
    }

    /**
     * Creates a new Wei entity.
     *
     * @Route("/new", name="data_modwei_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $user = $this->getUser();

        $wei = new Wei();
        $form = $this->createForm('AppBundle\Form\WeiType', $wei);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $wei->setCustomer($user->getCustomercustomer());
            $em->persist($wei);
            $em->flush();

            return $this->redirectToRoute('data_modwei_show', array('id' => $wei->getIdwei()));
        }

        return $this->render('wei/new.html.twig', array(
            'wei' => $wei,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Wei entity.
     *
     * @Route("/{id}", name="data_modwei_show")
     * @Method("GET")
     */
    public function showAction(Wei $wei)
    {
        $deleteForm = $this->createDeleteForm($wei);

        return $this->render('wei/show.html.twig', array(
            'wei' => $wei,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Wei entity.
     *
     * @Route("/{id}/edit", name="data_modwei_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Wei $wei)
    {
        $deleteForm = $this->createDeleteForm($wei);
        $editForm = $this->createForm('AppBundle\Form\WeiType', $wei);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($wei);
            $em->flush();

            return $this->redirectToRoute('data_modwei_edit', array('id' => $wei->getIdwei()));
        }

        return $this->render('wei/edit.html.twig', array(
            'wei' => $wei,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Wei entity.
     *
     * @Route("/{id}", name="data_modwei_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Wei $wei)
    {
        $form = $this->createDeleteForm($wei);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($wei);
            $em->flush();
        }

        return $this->redirectToRoute('data_modwei_index');
    }

    /**
     * Creates a form to delete a Wei entity.
     *
     * @param Wei $wei The Wei entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Wei $wei)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('data_modwei_delete', array('id' => $wei->getIdwei())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
