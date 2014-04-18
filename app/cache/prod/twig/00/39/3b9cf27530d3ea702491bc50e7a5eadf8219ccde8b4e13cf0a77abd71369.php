<?php

/* RdgSoccerBundle:Pdf:test.html.twig */
class __TwigTemplate_00393b9cf27530d3ea702491bc50e7a5eadf8219ccde8b4e13cf0a77abd71369 extends Twig_Template
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
<form id=\"myForm\" method=\"POST\" >
    Kopregel: 
    <input type=\"text\" name=\"headline\" id=\"headline\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["headline"]) ? $context["headline"] : null), "html", null, true);
        echo "\" /><br />
    Tekst: 
    <textarea name=\"text\" id=\"text\" rows=\"10\">";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
        echo "</textarea><br />
    <input type=\"submit\" value=\"Send\" />
</form>

<div id=\"pdf_preview\">
    
    <object data=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["pdf"]) ? $context["pdf"] : null), "html", null, true);
        echo "\" type=\"application/pdf\" width=\"100%\" height=\"100%\">

    </object>
</div>    

";
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        // line 23
        echo "      ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
      <script>
          \$(document).ready(function(){
            //alert('Werkt');
            //setInterval(function(){
            //     \$('#pdf_preview').load('";
        // line 28
        echo $this->env->getExtension('routing')->getPath("rdg_refresh_pdf");
        echo "');
            //     }, 5000);
          });
      </script>    
";
    }

    public function getTemplateName()
    {
        return "RdgSoccerBundle:Pdf:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  65 => 23,  62 => 22,  51 => 15,  42 => 9,  37 => 7,  32 => 4,  29 => 3,);
    }
}
