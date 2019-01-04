<?php

/* UnsecureBundle:Contact:index.html.twig */
class __TwigTemplate_3a50bb40bb043ab780e373ecb5a8405abf4b9baa19e73ff23c8a5a0aa7864f3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UnsecureBundle::layout.html.twig", "UnsecureBundle:Contact:index.html.twig", 1);
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
        <h1>Связаться с нами</h1>
        <p>
        \tВяш ан тантаз мюнырэ, йн дикунт пыртенакж еюж. Нам ут апэряря патриоквюы. <strong>Жят нонумй мэнтётюм компрэхэнжам эю, нонумй ножтро инзтруктеор квюо но.</strong><br/><br/>Ыльит попюльо эож экз, клита хомэро эрепюят мыа экз. 
        </p>
    </div>
";
    }

    // line 12
    public function block_index($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["contactForm"]) ? $context["contactForm"] : null), 'form');
        echo "
";
    }

    public function getTemplateName()
    {
        return "UnsecureBundle:Contact:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(  45 => 13,  42 => 12,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'UnsecureBundle::layout.html.twig' %}*/
/* */
/* {% block header %}*/
/*     <div class="page-header">*/
/*         <h1>Связаться с нами</h1>*/
/*         <p>*/
/*         	Вяш ан тантаз мюнырэ, йн дикунт пыртенакж еюж. Нам ут апэряря патриоквюы. <strong>Жят нонумй мэнтётюм компрэхэнжам эю, нонумй ножтро инзтруктеор квюо но.</strong><br/><br/>Ыльит попюльо эож экз, клита хомэро эрепюят мыа экз. */
/*         </p>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block index %}*/
/*     {{ form(contactForm) }}*/
/* {% endblock index %}*/
/* */
