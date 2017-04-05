<?php

namespace MG\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MGUserBundle:Default:index.html.twig');
    }
}
