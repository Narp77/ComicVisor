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
            'body2' => array($this, 'block_body2'),
            'scripts' => array($this, 'block_scripts'),
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
        echo "ComicVisor - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "nombre", array()), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"col-md-4\">
    <img src=\"img/portada.jpg\" class=\"center-block portada2\" alt=\"portada comic\">
</div>
<div class=\"col-md-7 contenedorpr\">
    <div class=\"row\">
        <h2><span class=\"ion-information-circled verde\">  </span>  Datos sobre ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "nombre", array()), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"row margintop\">
        <p><span class=\"ion-edit informacion2\" >  autor  </span> <span class=\"informacion1\"> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "autor", array()), "html", null, true);
        echo " </span></p>
        <hr>
    </div>
    <div class=\"row\">
        <p><span class=\"ion-calendar informacion2\">  Fecha de salida </span> <span class=\"informacion1\"> ";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "fechaSalida", array()), "d-m-Y"), "html", null, true);
        echo " </span></p>
         <hr>
    </div>
    <div class=\"row\">
        <p><span class=\"ion-checkmark informacion2\">  Estado </span>  <span class=\"informacion1\"> ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "estado", array()), "html", null, true);
        echo " </span></p>
         <hr>
    </div>
    <div class=\"row\">
        <p><span class=\"ion-document-text informacion2\">  Sipnosis </span>  <span class=\"informacion1\"> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "descripcion", array()), "html", null, true);
        echo " </span></p>
         <hr>
    </div>
    <div class=\"row\">
        <p><span class=\"ion-pricetags informacion2\">      Categorias </span> <span class=\"informacion1\"> </span>  </p>
        <hr>
    </div>
</div> 

";
    }

    // line 37
    public function block_body2($context, array $blocks = array())
    {
        // line 38
        echo "<h2>Lista de capitulos</h2>
<div id=\"manita\" class=\"list-group\">
    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos2"]) ? $context["datos2"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dato"]) {
            // line 41
            echo "    <a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "portadaNombre", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "numero", array()), "html", null, true);
            echo "\" class=\"list-group-item lista\" onclick=\"hola()\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "nombre", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "numero", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "titulo", array()), "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</div>
";
    }

    // line 46
    public function block_scripts($context, array $blocks = array())
    {
        // line 47
        echo "<script>
    document.getElementById(\"manita\").style.cursor = \"pointer\";
    function hola(){
    }
</script>
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
        return array (  125 => 47,  122 => 46,  117 => 43,  100 => 41,  96 => 40,  92 => 38,  89 => 37,  75 => 26,  68 => 22,  61 => 18,  54 => 14,  48 => 11,  41 => 6,  38 => 5,  31 => 3,  11 => 1,);
    }
}
/* {% extends '::plantilla1.html.twig' %} */
/* */
/* {% block title%}ComicVisor - {{datos.nombre}}{% endblock %}*/
/* */
/* {% block body%}*/
/* <div class="col-md-4">*/
/*     <img src="img/portada.jpg" class="center-block portada2" alt="portada comic">*/
/* </div>*/
/* <div class="col-md-7 contenedorpr">*/
/*     <div class="row">*/
/*         <h2><span class="ion-information-circled verde">  </span>  Datos sobre {{datos.nombre}}</h2>*/
/*     </div>*/
/*     <div class="row margintop">*/
/*         <p><span class="ion-edit informacion2" >  autor  </span> <span class="informacion1"> {{datos.autor}} </span></p>*/
/*         <hr>*/
/*     </div>*/
/*     <div class="row">*/
/*         <p><span class="ion-calendar informacion2">  Fecha de salida </span> <span class="informacion1"> {{datos.fechaSalida|date('d-m-Y')}} </span></p>*/
/*          <hr>*/
/*     </div>*/
/*     <div class="row">*/
/*         <p><span class="ion-checkmark informacion2">  Estado </span>  <span class="informacion1"> {{datos.estado}} </span></p>*/
/*          <hr>*/
/*     </div>*/
/*     <div class="row">*/
/*         <p><span class="ion-document-text informacion2">  Sipnosis </span>  <span class="informacion1"> {{datos.descripcion}} </span></p>*/
/*          <hr>*/
/*     </div>*/
/*     <div class="row">*/
/*         <p><span class="ion-pricetags informacion2">      Categorias </span> <span class="informacion1"> </span>  </p>*/
/*         <hr>*/
/*     </div>*/
/* </div> */
/* */
/* {% endblock %}*/
/* */
/* {% block body2%}*/
/* <h2>Lista de capitulos</h2>*/
/* <div id="manita" class="list-group">*/
/*     {% for dato in datos2 %}*/
/*     <a  href="{{dato.portadaNombre}}/{{dato.numero}}" class="list-group-item lista" onclick="hola()">{{dato.nombre}} - {{dato.numero}} - {{dato.titulo}}</a>*/
/*     {% endfor %}*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block scripts%}*/
/* <script>*/
/*     document.getElementById("manita").style.cursor = "pointer";*/
/*     function hola(){*/
/*     }*/
/* </script>*/
/* {% endblock %}*/
