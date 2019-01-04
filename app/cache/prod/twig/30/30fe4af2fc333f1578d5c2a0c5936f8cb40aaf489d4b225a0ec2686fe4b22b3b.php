<?php

/* UnsecureBundle:Login:index.html.twig */
class __TwigTemplate_07c741d01254c19ef3a91118c8bf0426ece0aa96fc6ba98ededa99aae05de377 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UnsecureBundle::layout.html.twig", "UnsecureBundle:Login:index.html.twig", 1);
        $this->blocks = array(
            'wide' => array($this, 'block_wide'),
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
    public function block_wide($context, array $blocks = array())
    {
        echo "                
";
    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"page-header\">
        <h1>Войдите в свой аккаунт</h1>
    </div>
";
    }

    // line 12
    public function block_index($context, array $blocks = array())
    {
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["loginForm"]) ? $context["loginForm"] : null), 'form');
        echo "
";
    }

    public function getTemplateName()
    {
        return "UnsecureBundle:Login:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(  50 => 13,  47 => 12,  40 => 7,  37 => 6,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'UnsecureBundle::layout.html.twig' %}*/
/* */
/* {% block wide %}                */
/* {% endblock %}*/
/* */
/* {% block header %}*/
/*     <div class="page-header">*/
/*         <h1>Войдите в свой аккаунт</h1>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block index %}*/
/* {{ form(loginForm) }}*/
/* {% endblock index %}*/
/* */
