<?php

/* UnsecureBundle:Static:_footer.html.twig */
class __TwigTemplate_9ceeb95ff1a8b3006483116450b29783749a39bfa6afcde57dafabe15691d0ff extends Twig_Template
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
        echo "<footer class=\"footer\">
    <div class=\"container\">
        <p class=\"text-muted\">
        \tЖурнал Сити Сириль © 2016 -
        \t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("unsecure_press");
        echo "\">Пресс-файл</a>
        </p>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "UnsecureBundle:Static:_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }
}
/* <footer class="footer">*/
/*     <div class="container">*/
/*         <p class="text-muted">*/
/*         	Журнал Сити Сириль © 2016 -*/
/*         	<a href="{{ path('unsecure_press') }}">Пресс-файл</a>*/
/*         </p>*/
/*     </div>*/
/* </footer>*/
