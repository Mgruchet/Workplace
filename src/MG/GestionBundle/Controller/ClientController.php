<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace MG\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ClientController extends Controller
{
    public function clientAction()
    {
      $content = $this->get('templating')->render('MGGestionBundle:Client:client.html.twig');

      return new Response($content);
    }
}
