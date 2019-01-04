<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'unsecure_homepage' => array(  0 =>   array(  ),  1 =>   array(    '_controller' => 'UnsecureBundle\\Controller\\IndexController::indexAction',  ),  2 =>   array(  ),  3 =>   array(    0 =>     array(      0 => 'text',      1 => '/',    ),  ),  4 =>   array(  ),  5 =>   array(  ),),
        'unsecure_subject' => array(  0 =>   array(    0 => 'subjectId',  ),  1 =>   array(    '_controller' => 'UnsecureBundle\\Controller\\IndexController::subjectAction',  ),  2 =>   array(  ),  3 =>   array(    0 =>     array(      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'subjectId',    ),    1 =>     array(      0 => 'text',      1 => '/subject',    ),  ),  4 =>   array(  ),  5 =>   array(  ),),
        'unsecure_admin' => array(  0 =>   array(  ),  1 =>   array(    '_controller' => 'UnsecureBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array(  ),  3 =>   array(    0 =>     array(      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array(  ),  5 =>   array(  ),),
        'unsecure_loginpage' => array(  0 =>   array(  ),  1 =>   array(    '_controller' => 'UnsecureBundle\\Controller\\LoginController::indexAction',  ),  2 =>   array(  ),  3 =>   array(    0 =>     array(      0 => 'text',      1 => '/login',    ),  ),  4 =>   array(  ),  5 =>   array(  ),),
        'unsecure_logout' => array(  0 =>   array(  ),  1 =>   array(    '_controller' => 'UnsecureBundle\\Controller\\LoginController::logoutAction',  ),  2 =>   array(  ),  3 =>   array(    0 =>     array(      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array(  ),  5 =>   array(  ),),
        'unsecure_contact' => array(  0 =>   array(  ),  1 =>   array(    '_controller' => 'UnsecureBundle\\Controller\\ContactController::indexAction',  ),  2 =>   array(  ),  3 =>   array(    0 =>     array(      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array(  ),  5 =>   array(  ),),
        'unsecure_press' => array(  0 =>   array(  ),  1 =>   array(    '_controller' => 'UnsecureBundle\\Controller\\ArticleController::indexAction',  ),  2 =>   array(  ),  3 =>   array(    0 =>     array(      0 => 'text',      1 => '/press',    ),  ),  4 =>   array(  ),  5 =>   array(  ),),
        'unsecure_mynews' => array(  0 =>   array(  ),  1 =>   array(    '_controller' => 'UnsecureBundle\\Controller\\IndexController::myNewsAction',  ),  2 =>   array(  ),  3 =>   array(    0 =>     array(      0 => 'text',      1 => '/my-news',    ),  ),  4 =>   array(  ),  5 =>   array(  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
