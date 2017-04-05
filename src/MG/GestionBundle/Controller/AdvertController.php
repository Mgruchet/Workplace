<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace MG\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()
    {
      $content = $this->get('templating')->render('MGGestionBundle:Advert:index.html.twig');

      return new Response($content);
    }
}
