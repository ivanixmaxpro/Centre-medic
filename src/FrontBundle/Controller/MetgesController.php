<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MetgesController extends Controller
{
    public function llistaMetgesAction()
    {
        return $this->render('FrontBundle:Default:metges.html.twig');
    }
}
