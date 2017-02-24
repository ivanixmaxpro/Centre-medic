<?php

namespace BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegistrationController extends Controller
{
    
     public function IndexAction()
    {
     return $this->render('BackBundle:Default:register.html.twig',array('titol' => 'Llistat de Roles', array('form' => $form->creativeView())));
    }
    public function registrationAction(Request $request){
    	//crear la form
    	$user = new User();
    	$form = $this->createForm(Usertype::class, $user);
    	//controla el submit
    	$form->handleRequest($request);
    	if ($form->isSubmitted() && $form->isValid()) {
    		//codificar el pass
    		$password = $this->get('security.password_encoder')->encodePassword($user,$user->getPlainPassword());
    		$user->setPassword($password);
    		//guardar usuari
    		$em = $this->getDoctrine()->getManager();
    		$em->persist($user);
    		$em->flush();
    		return $this->render('BackBundle:Default:objecteAdded.html.twig',array('titol' => 'Usuari registrat', 'name' => $user->getUsername()));
    	}
        return $this->render('FrontBundel:Default:register.html.twig', array('form' => $form->creativeView()));
    }
}