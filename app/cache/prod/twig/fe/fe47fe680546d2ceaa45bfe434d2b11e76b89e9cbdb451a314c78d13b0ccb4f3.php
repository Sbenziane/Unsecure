<?php

/* UnsecureBundle:Article:index.html.twig */
class __TwigTemplate_bf99020a6fb65c9f9d247616f67ce86ca488ffdeed09a3700315a224622cf174 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UnsecureBundle::layout.html.twig", "UnsecureBundle:Article:index.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'index' => array($this, 'block_index'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UnsecureBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"page-header\">
        <h1>Les articles</h1>
    </div>
";
    }

    // line 9
    public function block_index($context, array $blocks = array())
    {
        // line 10
        echo "    <p>";
        echo nl2br(twig_escape_filter($this->env, (isset($context["article"]) ? $context["article"] : null), "html", null, true));
        echo "</p>
    <br />
    <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("unsecure_article");
        echo "?fileName=bulabulabula.txt\">Bulabulabula</a>
    <br />
    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("unsecure_article");
        echo "?fileName=yesYouCan.txt\">Yes you can</a>
    <br />
    <br />
";
    }

    public function getTemplateName()
    {
        return "UnsecureBundle:Article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(  53 => 14,  48 => 12,  42 => 10,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'UnsecureBundle::layout.html.twig' %}*/
/* */
/* {% block header %}*/
/*     <div class="page-header">*/
/*         <h1>Les articles</h1>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block index %}*/
/*     <p>{{article|nl2br}}</p>*/
/*     <br />*/
/*     <a href="{{ path('unsecure_article')}}?fileName=bulabulabula.txt">Bulabulabula</a>*/
/*     <br />*/
/*     <a href="{{ path('unsecure_article')}}?fileName=yesYouCan.txt">Yes you can</a>*/
/*     <br />*/
/*     <br />*/
/* {% endblock index %}*/
/* */
