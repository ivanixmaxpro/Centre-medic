<?php

namespace BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PacientsController extends Controller
{
	public function indexAction()
	{
		return $this->render('BackBundle:Default:index.html.twig');
	}
	public function llistaPacientsAction()
    {
    	$pacients = $this->getDoctrine()->getRepository('FrontBundle:Pacients')->findAll();
        return $this->render('BackBundle:Default:pacients.html.twig',array('pacients' => $pacients));
    }
	public function newAction()
	{
		$pacient = new Pacient(); 
		$form = $this->createForm(new PacientType(), $pacient );
		$request = $this->getRequest(); 
		$form->handleRequest($request); 
		if($form->isSubmitted()){ 
			if($form->isValid()){ 
				$em = $this->getDoctrine()->getManager();
				$em->persist($pacient); 
				$em->flush();
				return $this->redirect( 
					$this->generateUrl('pacient_view', array('id' => $pacient )),301);
			} 
		} 

		return $this->render('BackBundle:pacient:edit.html.twig', array( 'form' => $form->createView(), 'pacient' => $pacient)); 
		}
		public function viewAction($id)
		{
			$this->getDoctrine()->getRepository('BackBundle:pacient')->find($id); return $this->render('BackBundle:pacient:view.html.twig', array('prueba' => $prueba));
		}
		public function editAction()
		{

		}
		public function deleteAction()
		{

		}
	}
