<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PacientsController extends Controller
{
    public function llistaAction()
    {
        return $this->render('FrontBundle:Default:pacients.html.twig');
    }
}
