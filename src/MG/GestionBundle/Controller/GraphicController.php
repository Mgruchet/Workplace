<?php

namespace MG\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Graphic controller.
 *
 * @Route("app/graphic")
 */
class GraphicController extends Controller
{
    /**
     * @Route("/", name="graphic_index")
     * @Method("GET")
     */
    public function graphicAction()
    {
        return $this->render('MGGestionBundle:Graphic:graphic.html.twig');
    }

    /**
     * @Route("/data", name="graphic_data")
     * @Method("GET")
     */
    public function dataAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('MGGestionBundle:categories')->findCategories($this->getUser());

        $serializer = $this->container->get('serializer');
        $reports = $serializer->serialize($categories, 'json');

        return new Response($reports);
    }
}
