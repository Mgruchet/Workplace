<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace MG\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;



/**
 * dashboard controller.
 *
 * @Route("app/dashboard")
 */

class DashboardController extends Controller
{

    /**
     * @Route("/", name="dashboard_index")
     * @Method("GET")
     */

    public function dashboardAction()
    {

      $em = $this->getDoctrine()->getManager();

      $projets = $em->getRepository('MGGestionBundle:projet')->findProjet($this->getUser());
      $clients = $em->getRepository('MGGestionBundle:clients')->findClient($this->getUser());

      return $this->render('MGGestionBundle:Dashboard:dashboard.html.twig', array('projets' => $projets, 'clients' => $clients));

    }
}
