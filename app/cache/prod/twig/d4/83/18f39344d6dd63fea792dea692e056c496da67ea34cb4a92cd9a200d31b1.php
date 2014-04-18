<?php

/* RdgSoccerBundle:Pdf:tcpdf.html.twig */
class __TwigTemplate_d48318f39344d6dd63fea792dea692e056c496da67ea34cb4a92cd9a200d31b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("RdgSoccerBundle::layout.html.twig");

        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RdgSoccerBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "
<div id=\"pdf_preview\">
    
    <object data=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["pdf"]) ? $context["pdf"] : null), "html", null, true);
        echo "\" type=\"application/pdf\" width=\"100%\" height=\"100%\">

    </object>
</div>    

";
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        // line 15
        echo "      ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
      <script>
          \$(document).ready(function(){
            //alert('Werkt');
            //setInterval(function(){
            //     \$('#pdf_preview').load('";
        // line 20
        echo $this->env->getExtension('routing')->getPath("rdg_refresh_pdf");
        echo "');
            //     }, 5000);
          });
      </script>    
";
    }

    public function getTemplateName()
    {
        return "RdgSoccerBundle:Pdf:tcpdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 20,  51 => 15,  48 => 14,  37 => 7,  32 => 4,  29 => 3,);
    }
}
