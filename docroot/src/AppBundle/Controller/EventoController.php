<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Evento;
use Symfony\Component\HttpFoundation\Request;

/**
 * Evento controller.
 *
 * @Route("/data/evento")
 */
class EventoController extends Controller
{
    /**
     * Lists all Evento entities.
     *
     * @Route("/", name="data_evento_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery('
            SELECT p FROM AppBundle:Evento p
            ORDER BY p.fechaevento DESC'
        );

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            10
            );

        return $this->render('evento/index.html.twig', array(
            'eventos' => $pagination,
        ));
    }

    /**
     * Finds and displays a Evento entity.
     *
     * @Route("/{id}", name="data_evento_show")
     * @Method("GET")
     */
    public function showAction(Evento $evento)
    {

        return $this->render('evento/show.html.twig', array(
            'evento' => $evento,
        ));
    }
}
