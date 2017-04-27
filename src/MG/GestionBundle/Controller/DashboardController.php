<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace MG\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class DashboardController extends Controller
{
    public function dashboardAction()
    {

      $em = $this->getDoctrine()->getManager();

      $projets = $em->getRepository('MGGestionBundle:projet')->findProjet($this->getUser());
      $clients = $em->getRepository('MGGestionBundle:clients')->findClient($this->getUser());

      return $this->render('MGGestionBundle:Dashboard:dashboard.html.twig', array('projets' => $projets, 'clients' => $clients));

    }
}
