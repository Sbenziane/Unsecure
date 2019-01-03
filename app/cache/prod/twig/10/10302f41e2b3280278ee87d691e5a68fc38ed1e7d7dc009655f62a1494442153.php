<?php

/* UnsecureBundle::layout.html.twig */
class __TwigTemplate_9c2f98e23a4073fefe03aa3803fe1a7a881ef34f65d075596a0a354977ae595e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'wide' => array($this, 'block_wide'),
            'header' => array($this, 'block_header'),
            'index' => array($this, 'block_index'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        
        <title>Журнал Сити Сириль</title>

        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/bootstrap.min.css\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/bootstrap-theme-readable.min.css\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/unsecure.css\" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
            <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body>
        ";
        // line 22
        $this->loadTemplate("UnsecureBundle:Static:_menu.html.twig", "UnsecureBundle::layout.html.twig", 22)->display($context);
        // line 23
        echo "
\t\t";
        // line 24
        $this->displayBlock('wide', $context, $blocks);
        // line 26
        echo "
        <div class=\"container\">
            ";
        // line 28
        $this->displayBlock('header', $context, $blocks);
        // line 30
        echo "            
            ";
        // line 31
        $this->displayBlock('index', $context, $blocks);
        // line 33
        echo "        </div>

        ";
        // line 35
        $this->loadTemplate("UnsecureBundle:Static:_footer.html.twig", "UnsecureBundle::layout.html.twig", 35)->display($context);
        // line 36
        echo "
        <script src=\"/js/jquery.min.js\" type=\"text/javascript\"></script>
        <script src=\"/js/bootstrap.min.js\" type=\"text/javascript\"></script>
    </body>
</html>
";
    }

    // line 24
    public function block_wide($context, array $blocks = array())
    {
        echo "            
\t\t";
    }

    // line 28
    public function block_header($context, array $blocks = array())
    {
        echo "                
            ";
    }

    // line 31
    public function block_index($context, array $blocks = array())
    {
        // line 32
        echo "            ";
    }

    public function getTemplateName()
    {
        return "UnsecureBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 32,  92 => 31,  85 => 28,  78 => 24,  69 => 36,  67 => 35,  63 => 33,  61 => 31,  58 => 30,  56 => 28,  52 => 26,  50 => 24,  47 => 23,  45 => 22,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         */
/*         <title>Журнал Сити Сириль</title>*/
/* */
/*         <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />*/
/*         <link rel="stylesheet" type="text/css" href="/css/bootstrap-theme-readable.min.css" />*/
/*         <link rel="stylesheet" type="text/css" href="/css/unsecure.css" />*/
/* */
/*         <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*         <!--[if lt IE 9]>*/
/*             <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*             <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
/*     </head>*/
/*     <body>*/
/*         {% include 'UnsecureBundle:Static:_menu.html.twig' %}*/
/* */
/* 		{% block wide %}            */
/* 		{% endblock %}*/
/* */
/*         <div class="container">*/
/*             {% block header %}                */
/*             {% endblock %}*/
/*             */
/*             {% block index %}*/
/*             {% endblock %}*/
/*         </div>*/
/* */
/*         {% include 'UnsecureBundle:Static:_footer.html.twig' %}*/
/* */
/*         <script src="/js/jquery.min.js" type="text/javascript"></script>*/
/*         <script src="/js/bootstrap.min.js" type="text/javascript"></script>*/
/*     </body>*/
/* </html>*/
/* */
