<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace MG\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use MG\GestionBundle\Entity\clients;

class ClientController extends Controller
{
    public function clientAction()
    {

      $em = $this->getDoctrine()->getEntityManager();
      $client = $em->getRepository("MGGestionBundle:clients")->findAll();

      return $this->render('MGGestionBundle:Client:client.html.twig', array(
        'clients' => $client,
      )
    );

      return new Response($content);
    }
}
