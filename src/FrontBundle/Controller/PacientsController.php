<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PacientsController extends Controller
{
	 public function indexAction()
    {
        return $this->render('FrontBundle:Default:index.html.twig');
    }
    public function llistaPacientsAction()
    {
    	$pacients = $this->getDoctrine()->getRepository('FrontBundle:Pacient')->findAll();
        return $this->render('FrontBundle:Default:pacients.html.twig',array('pacients' => $pacients));
    }
}
