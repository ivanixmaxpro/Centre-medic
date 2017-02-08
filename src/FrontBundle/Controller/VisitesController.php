<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VisitesController extends Controller
{
    public function llistaVisitesAction()
    {
        return $this->render('FrontBundle:Default:visites.html.twig');
    }
}
