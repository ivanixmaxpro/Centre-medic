<?php

namespace BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\security\Core\securityContext;
//afegits per la ruta
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SecurityController extends Controller
{
	/**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
    	$authenticationUtils = $this->get('security.authentication_utils');

    // get the login error if there is one
    $error = $authenticationUtils->getLastAuthenticationError();

    // last username entered by the user
    $lastUsername = $authenticationUtils->getLastUsername();

    return $this->render('BackBundle:Default:login.html.twig', array(
        'last_username' => $lastUsername,
        'error'         => $error,
    ));
    }
}