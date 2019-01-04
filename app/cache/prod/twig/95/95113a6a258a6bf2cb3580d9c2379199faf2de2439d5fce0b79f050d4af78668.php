<?php

/* UnsecureBundle:Index:subject.html.twig */
class __TwigTemplate_c2900c07b47ecb5b64689af8645d6ac1cfbafdc1633d948e87ebd6bf2ddd2f48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UnsecureBundle::layout.html.twig", "UnsecureBundle:Index:subject.html.twig", 1);
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
        <h1>автор статьи</h1>
    </div>
";
    }

    // line 12
    public function block_index($context, array $blocks = array())
    {
        // line 13
        echo "
<p class=\"lead\">
    ";
        // line 15
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["subject"]) ? $context["subject"] : null), "text", array()), "html", null, true));
        echo "
</p>
<p>
\t<footer>
\t\t<time class=\"readmore\">";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["subject"]) ? $context["subject"] : null), "creationDate", array()), "d/m/Y H:i"), "html", null, true);
        echo "</time> -
\t\t";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subject"]) ? $context["subject"] : null), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subject"]) ? $context["subject"] : null), "lastName", array()), "html", null, true);
        echo "
\t</footer>
</p>
<br />
<br />

";
        // line 26
        if (!(null === (isset($context["sessionUser"]) ? $context["sessionUser"] : null))) {
            // line 27
            echo "    ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["commentForm"]) ? $context["commentForm"] : null), 'form');
            echo "
    <br />
    <br />
";
        }
        // line 31
        echo "
";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 33
            echo "    <blockquote>
        <p>
            ";
            // line 35
            echo nl2br($this->getAttribute($context["comment"], "text", array()));
            echo "
        </p>
        <footer>
        \t<time datetime=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "creationDate", array()), "d/m/Y H:i"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "creationDate", array()), "d/m/Y H:i"), "html", null, true);
            echo "</time> - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "lastName", array()), "html", null, true);
            echo "
        </footer>
    </blockquote>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    

";
    }

    public function getTemplateName()
    {
        return "UnsecureBundle:Index:subject.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(  119 => 42,  103 => 38,  97 => 35,  93 => 33,  89 => 32,  86 => 31,  78 => 27,  76 => 26,  65 => 20,  61 => 19,  54 => 15,  50 => 13,  47 => 12,  40 => 7,  37 => 6,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'UnsecureBundle::layout.html.twig' %}*/
/* */
/* {% block wide %}                */
/* {% endblock %}*/
/* */
/* {% block header %}*/
/*     <div class="page-header">*/
/*         <h1>автор статьи</h1>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block index %}*/
/* */
/* <p class="lead">*/
/*     {{ subject.text|nl2br }}*/
/* </p>*/
/* <p>*/
/* 	<footer>*/
/* 		<time class="readmore">{{ subject.creationDate|date("d/m/Y H:i") }}</time> -*/
/* 		{{ subject.firstName }} {{ subject.lastName }}*/
/* 	</footer>*/
/* </p>*/
/* <br />*/
/* <br />*/
/* */
/* {% if sessionUser is not null %}*/
/*     {{ form(commentForm) }}*/
/*     <br />*/
/*     <br />*/
/* {% endif %}*/
/* */
/* {% for comment in comments %}*/
/*     <blockquote>*/
/*         <p>*/
/*             {{ comment.text|raw|nl2br }}*/
/*         </p>*/
/*         <footer>*/
/*         	<time datetime="{{ comment.creationDate|date('d/m/Y H:i') }}">{{ comment.creationDate|date('d/m/Y H:i') }}</time> - {{ comment.user.firstName }} {{ comment.user.lastName }}*/
/*         </footer>*/
/*     </blockquote>*/
/* {% endfor %}*/
/*     */
/* */
/* {% endblock index %}*/
/* */
