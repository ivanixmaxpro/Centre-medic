<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/back')) {
            // centre_medic_back_homepage
            if (rtrim($pathinfo, '/') === '/back') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'centre_medic_back_homepage');
                }

                return array (  '_controller' => 'BackBundle\\Controller\\DefaultController::indexAction',  '_route' => 'centre_medic_back_homepage',);
            }

            // centre_medic_back_pacients_new
            if (rtrim($pathinfo, '/') === '/back/new') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'centre_medic_back_pacients_new');
                }

                return array (  '_controller' => 'BackBundle\\Controller\\PacientsController::newAction',  '_route' => 'centre_medic_back_pacients_new',);
            }

            // centre_medic_back_pacients_view
            if (0 === strpos($pathinfo, '/back/view') && preg_match('#^/back/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'centre_medic_back_pacients_view')), array (  '_controller' => 'BackBundle\\Controller\\PacientsController::viewAction',));
            }

            // centre_medic_back_pacients_edit
            if (0 === strpos($pathinfo, '/back/edit') && preg_match('#^/back/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'centre_medic_back_pacients_edit')), array (  '_controller' => 'BackBundle\\Controller\\PacientsController::editAction',));
            }

            // centre_medic_back_pacients_delete
            if (0 === strpos($pathinfo, '/back/delete') && preg_match('#^/back/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'centre_medic_back_pacients_delete')), array (  '_controller' => 'BackBundle\\Controller\\PacientsController::deleteAction',));
            }

            if (0 === strpos($pathinfo, '/back/llista_')) {
                // centre_medic_llista_back_pacients
                if ($pathinfo === '/back/llista_pacients') {
                    return array (  '_controller' => 'BackBundle\\Controller\\PacientsController::llistaPacientsAction',  '_route' => 'centre_medic_llista_back_pacients',);
                }

                // centre_medic_llista_back_metges
                if ($pathinfo === '/back/llista_metges') {
                    return array (  '_controller' => 'BackBundle\\Controller\\MetgesController::llistaMetgesAction',  '_route' => 'centre_medic_llista_back_metges',);
                }

                // centre_medic_llista_back_visites
                if ($pathinfo === '/back/llista_visites') {
                    return array (  '_controller' => 'BackBundle\\Controller\\VisitesController::llistaVisitesAction',  '_route' => 'centre_medic_llista_back_visites',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/front')) {
            // centre_medic_front_homepage
            if (rtrim($pathinfo, '/') === '/front') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'centre_medic_front_homepage');
                }

                return array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::indexAction',  '_route' => 'centre_medic_front_homepage',);
            }

            if (0 === strpos($pathinfo, '/front/l')) {
                // centre_medic_front_login
                if ($pathinfo === '/front/login') {
                    return array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::loginAction',  '_route' => 'centre_medic_front_login',);
                }

                if (0 === strpos($pathinfo, '/front/llista_')) {
                    // centre_medic_llista_pacients
                    if ($pathinfo === '/front/llista_pacients') {
                        return array (  '_controller' => 'FrontBundle\\Controller\\PacientsController::llistaPacientsAction',  '_route' => 'centre_medic_llista_pacients',);
                    }

                    // centre_medic_llista_metges
                    if ($pathinfo === '/front/llista_metges') {
                        return array (  '_controller' => 'FrontBundle\\Controller\\MetgesController::llistaMetgesAction',  '_route' => 'centre_medic_llista_metges',);
                    }

                    // centre_medic_llista_visites
                    if ($pathinfo === '/front/llista_visites') {
                        return array (  '_controller' => 'FrontBundle\\Controller\\VisitesController::llistaVisitesAction',  '_route' => 'centre_medic_llista_visites',);
                    }

                }

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
