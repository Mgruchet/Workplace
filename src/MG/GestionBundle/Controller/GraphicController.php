<?php

namespace MG\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GraphicController extends Controller
{
    public function graphicAction()
    {
        return $this->render('MGGestionBundle:Graphic:graphic.html.twig');
    }
}
