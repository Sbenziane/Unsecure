<?php

/* UnsecureBundle:Static:_menu.html.twig */
class __TwigTemplate_a2bdc37e187010583ece92f435a316c7502833d04aca34658efe0d2ad3b6f1b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"navbar navbar-inverse navbar-fixed-top\">
  <div class=\"container\">
    <div class=\"navbar-header\">
\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t</button>
      \t<a class=\"navbar-brand\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("unsecure_homepage");
        echo "\">Последние новости</a>
\t    <a class=\"navbar-brand\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("unsecure_contact");
        echo "\">связаться с нами</a>
\t    ";
        // line 11
        if (!(null === (isset($context["sessionUser"]) ? $context["sessionUser"] : null))) {
            // line 12
            echo "            <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('routing')->getPath("unsecure_mynews");
            echo "\">Мои статьи</a>
    \t";
        }
        // line 14
        echo "    </div>
    <div class=\"collapse navbar-collapse\">
      <ul class=\"nav navbar-nav navbar-right\">
        ";
        // line 17
        if ((null === (isset($context["sessionUser"]) ? $context["sessionUser"] : null))) {
            // line 18
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("unsecure_loginpage");
            echo "\">войти</a></li>
        ";
        } else {
            // line 20
            echo "            <li><a href=\"#\">привет ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sessionUser"]) ? $context["sessionUser"] : null), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sessionUser"]) ? $context["sessionUser"] : null), "lastName", array()), "html", null, true);
            echo "</a></li>
            <li><a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("unsecure_logout");
            echo "\">Выйти</a></li>
        ";
        }
        // line 23
        echo "      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "UnsecureBundle:Static:_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(  70 => 23,  65 => 21,  58 => 20,  52 => 18,  50 => 17,  45 => 14,  39 => 12,  37 => 11,  33 => 10,  29 => 9,  19 => 1,);
    }
}
/* <div class="navbar navbar-inverse navbar-fixed-top">*/
/*   <div class="container">*/
/*     <div class="navbar-header">*/
/* 		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/* 			<span class="icon-bar"></span>*/
/* 			<span class="icon-bar"></span>*/
/* 			<span class="icon-bar"></span>*/
/* 		</button>*/
/*       	<a class="navbar-brand" href="{{ path('unsecure_homepage') }}">Последние новости</a>*/
/* 	    <a class="navbar-brand" href="{{ path('unsecure_contact') }}">связаться с нами</a>*/
/* 	    {% if sessionUser is not null %}*/
/*             <a class="navbar-brand" href="{{ path('unsecure_mynews') }}">Мои статьи</a>*/
/*     	{% endif %}*/
/*     </div>*/
/*     <div class="collapse navbar-collapse">*/
/*       <ul class="nav navbar-nav navbar-right">*/
/*         {% if sessionUser is null %}*/
/*             <li><a href="{{ path('unsecure_loginpage') }}">войти</a></li>*/
/*         {% else %}*/
/*             <li><a href="#">привет {{ sessionUser.firstName }} {{ sessionUser.lastName }}</a></li>*/
/*             <li><a href="{{ path('unsecure_logout') }}">Выйти</a></li>*/
/*         {% endif %}*/
/*       </ul>*/
/*     </div><!--/.nav-collapse -->*/
/*   </div>*/
/* </div>*/
