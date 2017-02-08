<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VisitesController extends Controller
{
    public function llistaVisitesAction()
    {
    	$visites = $this->getDoctrine()->getRepository('FrontBundle:Visita')->findAll();
        return $this->render('FrontBundle:Default:visites.html.twig',array('visites' => $visites));
    }
}
