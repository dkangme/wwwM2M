<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Wei;
use AuthBundle\Entity\User;
use AppBundle\Form\WeiType;

/**
 * Wei controller.
 *
 * @Route("/admin/wei")
 */
class WeiController extends Controller
{
    /**
     * Lists all Wei entities.
     *
     * @Route("/", name="admin_wei_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery('
            SELECT p FROM AppBundle:Wei p
            WHERE p.customer = :customerId
            ORDER BY p.nickname ASC')
        ->setParameter('customerId', $user->getCustomercustomer()->getId());

        $weis = $query->getResult();

        //$weis = $em->getRepository('AppBundle:Wei')->findAll();

        return $this->render('wei/index.html.twig', array(
            'weis' => $weis,
        ));
    }

    /**
     * Creates a new Wei entity.
     *
     * @Route("/new", name="admin_wei_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $wei = new Wei();
        $form = $this->createForm('AppBundle\Form\WeiType', $wei);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($wei);
            $em->flush();

            return $this->redirectToRoute('admin_wei_show', array('id' => $wei->getId()));
        }

        return $this->render('wei/new.html.twig', array(
            'wei' => $wei,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Wei entity.
     *
     * @Route("/{id}", name="admin_wei_show")
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
     * @Route("/{id}/edit", name="admin_wei_edit")
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

            return $this->redirectToRoute('admin_wei_edit', array('id' => $wei->getId()));
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
     * @Route("/{id}", name="admin_wei_delete")
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

        return $this->redirectToRoute('admin_wei_index');
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
            ->setAction($this->generateUrl('admin_wei_delete', array('id' => $wei->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
