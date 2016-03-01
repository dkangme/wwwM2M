<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Evento;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Evento controller.
 *
 * @Route("/admin/evento")
 */
class EventoController extends Controller
{
    /**
     * Lists all Evento entities.
     *
     * @Route("/", name="admin_evento_index")
     * @Method("GET")
     */
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();

        $eventos = $em->getRepository('AppBundle:Evento')->findAll();

        return $this->render('evento/index.html.twig', array(
            'eventos' => $eventos,
        ));
    }

    /**
     * Lists all Evento entities, return JSON.
     *
     * @Route("/json", name="admin_evento_json_index")
     * @Method("GET")
     */
    public function jsonEventAction()
    {
        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery('
            SELECT p FROM AppBundle:Evento p
            WHERE p.customer = :customerId
            ORDER BY p.fechaevento DESC')
        ->setParameter('customerId', $user->getCustomercustomer()->getId())
        ;

        $eventos = $query->getArrayResult();

        return new JsonResponse($eventos);
    }

    /**
     * Finds and displays a Evento entity.
     *
     * @Route("/{id}", name="admin_evento_show")
     * @Method("GET")
     */
    public function showAction(Evento $evento)
    {

        return $this->render('evento/show.html.twig', array(
            'evento' => $evento,
        ));
    }
}
