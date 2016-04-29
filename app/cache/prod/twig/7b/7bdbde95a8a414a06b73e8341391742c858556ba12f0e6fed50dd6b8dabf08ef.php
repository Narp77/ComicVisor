<?php

/* comicvisorBundle:Default:comic.html.twig */
class __TwigTemplate_4db29467a184661393befafe77bc72848bc57edff2d399cc1826d88e23b8c24a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::plantilla1.html.twig", "comicvisorBundle:Default:comic.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "nombre", array()), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"col-md-4\">
    <img src=\"img/portada.jpg\" class=\"center-block portada\" alt=\"portada comic\">
</div>
<div class=\"col-md-8\">
    <div class=\"row\">
        <h2><span class=\"ion-information-circled\">  </span>  Información</h2>
    </div>
    <div class=\"row\">
        <p><span class=\"ion-edit\">  </span>  autor: ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "autor", array()), "html", null, true);
        echo "</p>
    </div>
    <div class=\"row\">
        <p><span class=\"ion-calendar\">  </span>  Fecha de salida: ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "fechaSalida", array()), "d-m-Y"), "html", null, true);
        echo "</p>
    </div>
    <div class=\"row\">
        <p><span class=\"ion-checkmark\">  </span>  Estado: ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "estado", array()), "html", null, true);
        echo "</p>
    </div>
    <div class=\"row\">
        <p><span class=\"ion-document-text\">  </span>  Sipnosis: ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "descripcion", array()), "html", null, true);
        echo "</p>
    </div>
    <div class=\"row\">
        <p><span class=\"ion-pricetags\">  </span>   Categorias: </p>
    </div>
</div> 

";
    }

    public function getTemplateName()
    {
        return "comicvisorBundle:Default:comic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 23,  60 => 20,  54 => 17,  48 => 14,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends '::plantilla1.html.twig' %} */
/* */
/* {% block title%}{{datos.nombre}}{% endblock %}*/
/* */
/* {% block body%}*/
/* <div class="col-md-4">*/
/*     <img src="img/portada.jpg" class="center-block portada" alt="portada comic">*/
/* </div>*/
/* <div class="col-md-8">*/
/*     <div class="row">*/
/*         <h2><span class="ion-information-circled">  </span>  Información</h2>*/
/*     </div>*/
/*     <div class="row">*/
/*         <p><span class="ion-edit">  </span>  autor: {{datos.autor}}</p>*/
/*     </div>*/
/*     <div class="row">*/
/*         <p><span class="ion-calendar">  </span>  Fecha de salida: {{datos.fechaSalida|date('d-m-Y')}}</p>*/
/*     </div>*/
/*     <div class="row">*/
/*         <p><span class="ion-checkmark">  </span>  Estado: {{datos.estado}}</p>*/
/*     </div>*/
/*     <div class="row">*/
/*         <p><span class="ion-document-text">  </span>  Sipnosis: {{datos.descripcion}}</p>*/
/*     </div>*/
/*     <div class="row">*/
/*         <p><span class="ion-pricetags">  </span>   Categorias: </p>*/
/*     </div>*/
/* </div> */
/* */
/* {% endblock %}*/
