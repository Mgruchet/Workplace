<?php

namespace MG\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MGGestionBundle:Default:index.html.twig');
    }
}
