<?php

/* comicvisorBundle:Default:index.html.twig */
class __TwigTemplate_e523d4f21f38bc7e227691519d4384e1b1994d425c65ac5f335b9d4bc10d6c70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::plantilla1.html.twig", "comicvisorBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'body2' => array($this, 'block_body2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::plantilla1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Inicio";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t\t<h3>Ultimas subidas</h3>
\t\t
\t\t<div class=\"card-deck-wrapper\">
  \t\t<div class=\"card-deck col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dato"]) {
            // line 10
            echo "\t\t\t<!-- card -->
                <div class=\"card col-xs-3 col-sm-3 col-md-4 col-lg-2 col-xl-2\">
                  <div class=\"card-block\">
                    <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "portadaNombre", array()), "html", null, true);
            echo "\" class=\"enlace1\"><h6 class=\"card-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "nombre", array()), "html", null, true);
            echo "</h6></a>
                    <h6 class=\"card-subtitle\">capitulo ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "numero", array()), "html", null, true);
            echo "</h6>
                  </div>
                  <a href=\"\"><img class=\"center-block portada\" src=\"img/portada.jpg\" alt=\"Card image cap\"></a>
                  <!--<div class=\"card-block\">
                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href=\"#\" class=\"card-link\">Card link</a>
                    <a href=\"#\" class=\"card-link\">Another link</a>
                  </div>-->
                </div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"card-deck-wrapper\">
  \t\t<div class=\"card-deck col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos2"]) ? $context["datos2"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dato2"]) {
            // line 30
            echo "\t\t\t<!-- card -->
                <div class=\"card col-xs-3 col-sm-3 col-md-4 col-lg-2 col-xl-2\">
                  <div class=\"card-block\">
                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato2"], "portadaNombre", array()), "html", null, true);
            echo "\" class=\"enlace1\"><h6 class=\"card-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato2"], "nombre", array()), "html", null, true);
            echo "</h6></a>
                    <h6 class=\"card-subtitle\">capitulo ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato2"], "numero", array()), "html", null, true);
            echo "</h6>
                  </div>
                  <a href=\"\"><img class=\"center-block portada\" src=\"img/portada2.jpg\" alt=\"Card image cap\"></a>
                  <!--<div class=\"card-block\">
                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href=\"#\" class=\"card-link\">Card link</a>
                    <a href=\"#\" class=\"card-link\">Another link</a>
                  </div>-->
                </div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dato2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t</div>
\t\t</div>

";
    }

    // line 49
    public function block_body2($context, array $blocks = array())
    {
        // line 50
        echo "\t\t<h3>Ultimos Comics</h3>
\t\t
\t\t<div class=\"card-deck-wrapper\">
  \t\t<div class=\"card-deck col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos3"]) ? $context["datos3"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dato3"]) {
            // line 55
            echo "\t\t\t<!-- card -->
                <div class=\"card col-xs-3 col-sm-3 col-md-4 col-lg-2 col-xl-2\">
                  <div class=\"card-block\">
                    <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato3"], "portadaNombre", array()), "html", null, true);
            echo "\" class=\"enlace1\"><h6 class=\"card-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato3"], "nombre", array()), "html", null, true);
            echo "</h6></a>
                  </div>
                  <a href=\"\"><img class=\"center-block portada\" src=\"img/portada2.jpg\" alt=\"Card image cap\"></a>
                  <!--<div class=\"card-block\">
                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href=\"#\" class=\"card-link\">Card link</a>
                    <a href=\"#\" class=\"card-link\">Another link</a>
                  </div>-->
                </div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dato3'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"card-deck-wrapper\">
  \t\t<div class=\"card-deck col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t    ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos4"]) ? $context["datos4"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dato4"]) {
            // line 74
            echo "\t\t\t<!-- card -->
                <div class=\"card col-xs-3 col-sm-3 col-md-4 col-lg-2 col-xl-2\">
                  <div class=\"card-block\">
                    <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato4"], "portadaNombre", array()), "html", null, true);
            echo "\" class=\"enlace1\"><h6 class=\"card-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato4"], "nombre", array()), "html", null, true);
            echo "</h6></a>
                  </div>
                  <a href=\"\"><img class=\"center-block portada\" src=\"img/portada2.jpg\" alt=\"Card image cap\"></a>
                  <!--<div class=\"card-block\">
                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href=\"#\" class=\"card-link\">Card link</a>
                    <a href=\"#\" class=\"card-link\">Another link</a>
                  </div>-->
                </div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dato4'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "\t\t</div>
\t\t</div>

";
    }

    public function getTemplateName()
    {
        return "comicvisorBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 87,  173 => 77,  168 => 74,  164 => 73,  157 => 68,  139 => 58,  134 => 55,  130 => 54,  124 => 50,  121 => 49,  114 => 44,  98 => 34,  92 => 33,  87 => 30,  83 => 29,  76 => 24,  60 => 14,  54 => 13,  49 => 10,  45 => 9,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends '::plantilla1.html.twig' %} */
/* */
/* {% block title%}Inicio{% endblock %}*/
/* {% block body%}*/
/* 		<h3>Ultimas subidas</h3>*/
/* 		*/
/* 		<div class="card-deck-wrapper">*/
/*   		<div class="card-deck col-xs-12 col-sm-12 col-md-12 col-lg-12">*/
/* 		    {% for dato in datos %}*/
/* 			<!-- card -->*/
/*                 <div class="card col-xs-3 col-sm-3 col-md-4 col-lg-2 col-xl-2">*/
/*                   <div class="card-block">*/
/*                     <a href="{{dato.portadaNombre}}" class="enlace1"><h6 class="card-title">{{dato.nombre}}</h6></a>*/
/*                     <h6 class="card-subtitle">capitulo {{dato.numero}}</h6>*/
/*                   </div>*/
/*                   <a href=""><img class="center-block portada" src="img/portada.jpg" alt="Card image cap"></a>*/
/*                   <!--<div class="card-block">*/
/*                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>*/
/*                     <a href="#" class="card-link">Card link</a>*/
/*                     <a href="#" class="card-link">Another link</a>*/
/*                   </div>-->*/
/*                 </div>*/
/* 			{% endfor %}*/
/* 		</div>*/
/* 		</div>*/
/* 		*/
/* 		<div class="card-deck-wrapper">*/
/*   		<div class="card-deck col-xs-12 col-sm-12 col-md-12 col-lg-12">*/
/* 		    {% for dato2 in datos2 %}*/
/* 			<!-- card -->*/
/*                 <div class="card col-xs-3 col-sm-3 col-md-4 col-lg-2 col-xl-2">*/
/*                   <div class="card-block">*/
/*                     <a href="{{dato2.portadaNombre}}" class="enlace1"><h6 class="card-title">{{dato2.nombre}}</h6></a>*/
/*                     <h6 class="card-subtitle">capitulo {{dato2.numero}}</h6>*/
/*                   </div>*/
/*                   <a href=""><img class="center-block portada" src="img/portada2.jpg" alt="Card image cap"></a>*/
/*                   <!--<div class="card-block">*/
/*                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>*/
/*                     <a href="#" class="card-link">Card link</a>*/
/*                     <a href="#" class="card-link">Another link</a>*/
/*                   </div>-->*/
/*                 </div>*/
/* 			{% endfor %}*/
/* 		</div>*/
/* 		</div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block body2%}*/
/* 		<h3>Ultimos Comics</h3>*/
/* 		*/
/* 		<div class="card-deck-wrapper">*/
/*   		<div class="card-deck col-xs-12 col-sm-12 col-md-12 col-lg-12">*/
/* 		    {% for dato3 in datos3 %}*/
/* 			<!-- card -->*/
/*                 <div class="card col-xs-3 col-sm-3 col-md-4 col-lg-2 col-xl-2">*/
/*                   <div class="card-block">*/
/*                     <a href="{{dato3.portadaNombre}}" class="enlace1"><h6 class="card-title">{{dato3.nombre}}</h6></a>*/
/*                   </div>*/
/*                   <a href=""><img class="center-block portada" src="img/portada2.jpg" alt="Card image cap"></a>*/
/*                   <!--<div class="card-block">*/
/*                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>*/
/*                     <a href="#" class="card-link">Card link</a>*/
/*                     <a href="#" class="card-link">Another link</a>*/
/*                   </div>-->*/
/*                 </div>*/
/* 			{% endfor %}*/
/* 		</div>*/
/* 		</div>*/
/* 		*/
/* 		<div class="card-deck-wrapper">*/
/*   		<div class="card-deck col-xs-12 col-sm-12 col-md-12 col-lg-12">*/
/* 		    {% for dato4 in datos4 %}*/
/* 			<!-- card -->*/
/*                 <div class="card col-xs-3 col-sm-3 col-md-4 col-lg-2 col-xl-2">*/
/*                   <div class="card-block">*/
/*                     <a href="{{dato4.portadaNombre}}" class="enlace1"><h6 class="card-title">{{dato4.nombre}}</h6></a>*/
/*                   </div>*/
/*                   <a href=""><img class="center-block portada" src="img/portada2.jpg" alt="Card image cap"></a>*/
/*                   <!--<div class="card-block">*/
/*                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>*/
/*                     <a href="#" class="card-link">Card link</a>*/
/*                     <a href="#" class="card-link">Another link</a>*/
/*                   </div>-->*/
/*                 </div>*/
/* 			{% endfor %}*/
/* 		</div>*/
/* 		</div>*/
/* */
/* {% endblock %}*/
