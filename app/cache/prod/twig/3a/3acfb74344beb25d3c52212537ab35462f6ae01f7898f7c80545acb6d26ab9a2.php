<?php

/* UnsecureBundle:Index:index.html.twig */
class __TwigTemplate_35fff6969658e903e02d2efee0db74d54ec579df7e3790b7ae11f638732a64de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UnsecureBundle::layout.html.twig", "UnsecureBundle:Index:index.html.twig", 1);
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
\t<div class=\"wide\">
    \t<div class=\"col-xs-12 logo\">Добро пожаловать на новый сайт нашего города</div>
\t</div>
";
    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"page-header\">
        <h1>Последние новости</h1>
    </div>
";
    }

    // line 15
    public function block_index($context, array $blocks = array())
    {
        // line 16
        echo "\t<div class=\"col-xs-5\" style=\"text-align: center;\">
\t\t<img src=\"/ivanovitch.jpg\" width=\"350\" height=\"350\" />
\t\t<p style=\"text-align: left; margin-top: 20px;\">
\t    \t<a class=\"readmore\" href=\"\">
\t        \t<time class=\"readmore\">18/08/2016 08:16</time>
\t        \tВ ходе одного из этапов ед шэа 25/08/2016 рыбюм мэнтётюм через громкоговорители призывал «ельлюд нихйл долорэж». рэформйданч прё но! Вы дэчырюёжжэ не! йн, омнэжквюы алёквюам ... Бросайте оружие, ыюм но мандамюч дйжпютандо!
\t        </a>
\t    </p>
\t    <footer style=\"border-bottom: 1px solid #ddd; padding-bottom: 30px;\">полностью Турции</footer>
\t    
\t    <img style=\"margin-top: 20px;\" src=\"/ruska.jpg\" width=\"350\" height=\"350\" />
\t\t<p style=\"text-align: left; margin-top: 20px;\">
\t    \t<a class=\"readmore\" href=\"\">
\t        \t<time class=\"readmore\">10/08/2016 17:00</time>
\t        \tЕюж жплэндидэ майыжтатйж инкедыринт ут. Вяш ут мэльиорэ ылоквюэнтиам. Шэа тантаз мандамюч йн, ыюм эи ырант либриз докэндё. Жольюта пхаэдрум прё йн, фырре прима жкряпшэрит дуо ан. Квюандо долорэж ут нам, нонумй жольюта патриоквюы ты вяш.
\t        </a>
\t    </p>
\t    <footer>полностью Турции</footer>
\t</div>
\t<div class=\"col-xs-7\">
\t    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) ? $context["subjects"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
            // line 37
            echo "\t        <blockquote>
\t            <p>
\t            \t<a class=\"readmore\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("unsecure_subject", array("subjectId" => $this->getAttribute($context["subject"], "id", array()))), "html", null, true);
            echo "\">
\t                \t<time class=\"readmore\">";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["subject"], "creationDate", array()), "d/m/Y H:i"), "html", null, true);
            echo "</time>
\t                \t";
            // line 41
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["subject"], "text", array()), 0, 110), "html", null, true);
            echo "
\t                </a>
\t            </p>
\t            <footer>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["subject"], "user", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["subject"], "user", array()), "lastName", array()), "html", null, true);
            echo "</footer>
\t        </blockquote>
\t        <hr />
\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "UnsecureBundle:Index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(  109 => 48,  97 => 44,  91 => 41,  87 => 40,  83 => 39,  79 => 37,  75 => 36,  53 => 16,  50 => 15,  43 => 10,  40 => 9,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'UnsecureBundle::layout.html.twig' %}*/
/* */
/* {% block wide %}            */
/* 	<div class="wide">*/
/*     	<div class="col-xs-12 logo">Добро пожаловать на новый сайт нашего города</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
/* {% block header %}*/
/*     <div class="page-header">*/
/*         <h1>Последние новости</h1>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block index %}*/
/* 	<div class="col-xs-5" style="text-align: center;">*/
/* 		<img src="/ivanovitch.jpg" width="350" height="350" />*/
/* 		<p style="text-align: left; margin-top: 20px;">*/
/* 	    	<a class="readmore" href="">*/
/* 	        	<time class="readmore">18/08/2016 08:16</time>*/
/* 	        	В ходе одного из этапов ед шэа 25/08/2016 рыбюм мэнтётюм через громкоговорители призывал «ельлюд нихйл долорэж». рэформйданч прё но! Вы дэчырюёжжэ не! йн, омнэжквюы алёквюам ... Бросайте оружие, ыюм но мандамюч дйжпютандо!*/
/* 	        </a>*/
/* 	    </p>*/
/* 	    <footer style="border-bottom: 1px solid #ddd; padding-bottom: 30px;">полностью Турции</footer>*/
/* 	    */
/* 	    <img style="margin-top: 20px;" src="/ruska.jpg" width="350" height="350" />*/
/* 		<p style="text-align: left; margin-top: 20px;">*/
/* 	    	<a class="readmore" href="">*/
/* 	        	<time class="readmore">10/08/2016 17:00</time>*/
/* 	        	Еюж жплэндидэ майыжтатйж инкедыринт ут. Вяш ут мэльиорэ ылоквюэнтиам. Шэа тантаз мандамюч йн, ыюм эи ырант либриз докэндё. Жольюта пхаэдрум прё йн, фырре прима жкряпшэрит дуо ан. Квюандо долорэж ут нам, нонумй жольюта патриоквюы ты вяш.*/
/* 	        </a>*/
/* 	    </p>*/
/* 	    <footer>полностью Турции</footer>*/
/* 	</div>*/
/* 	<div class="col-xs-7">*/
/* 	    {% for subject in subjects %}*/
/* 	        <blockquote>*/
/* 	            <p>*/
/* 	            	<a class="readmore" href="{{ path('unsecure_subject', { subjectId: subject.id }) }}">*/
/* 	                	<time class="readmore">{{ subject.creationDate|date("d/m/Y H:i") }}</time>*/
/* 	                	{{ subject.text|slice(0, 110) }}*/
/* 	                </a>*/
/* 	            </p>*/
/* 	            <footer>{{ subject.user.firstName }} {{ subject.user.lastName }}</footer>*/
/* 	        </blockquote>*/
/* 	        <hr />*/
/* 	    {% endfor %}*/
/* 	</div>*/
/* {% endblock index %}*/
/* */
