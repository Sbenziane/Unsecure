<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // unsecure_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'unsecure_homepage');
            }

            return array(  '_controller' => 'UnsecureBundle\\Controller\\IndexController::indexAction',  '_route' => 'unsecure_homepage',);
        }

        // unsecure_subject
        if (0 === strpos($pathinfo, '/subject') && preg_match('#^/subject/(?P<subjectId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'unsecure_subject')), array(  '_controller' => 'UnsecureBundle\\Controller\\IndexController::subjectAction',));
        }

        // unsecure_admin
        if ($pathinfo === '/admin') {
            return array(  '_controller' => 'UnsecureBundle\\Controller\\AdminController::indexAction',  '_route' => 'unsecure_admin',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // unsecure_loginpage
            if ($pathinfo === '/login') {
                return array(  '_controller' => 'UnsecureBundle\\Controller\\LoginController::indexAction',  '_route' => 'unsecure_loginpage',);
            }

            // unsecure_logout
            if ($pathinfo === '/logout') {
                return array(  '_controller' => 'UnsecureBundle\\Controller\\LoginController::logoutAction',  '_route' => 'unsecure_logout',);
            }
        }

        // unsecure_contact
        if ($pathinfo === '/contact') {
            return array(  '_controller' => 'UnsecureBundle\\Controller\\ContactController::indexAction',  '_route' => 'unsecure_contact',);
        }

        // unsecure_press
        if ($pathinfo === '/press') {
            return array(  '_controller' => 'UnsecureBundle\\Controller\\ArticleController::indexAction',  '_route' => 'unsecure_press',);
        }

        // unsecure_mynews
        if ($pathinfo === '/my-news') {
            return array(  '_controller' => 'UnsecureBundle\\Controller\\IndexController::myNewsAction',  '_route' => 'unsecure_mynews',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
