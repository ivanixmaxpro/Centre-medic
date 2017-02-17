<?php

namespace BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VisitesController extends Controller
{
    public function llistaVisitesAction()
    {
    	$visites = $this->getDoctrine()->getRepository('FrontBundle:Visites')->findAll();
        return $this->render('BackBundle:Default:visites.html.twig',array('visites' => $visites));
    }
}
