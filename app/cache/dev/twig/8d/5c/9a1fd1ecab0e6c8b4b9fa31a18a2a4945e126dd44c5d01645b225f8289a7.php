<?php

/* ::base.html.twig */
class __TwigTemplate_8d5c9a1fd1ecab0e6c8b4b9fa31a18a2a4945e126dd44c5d01645b225f8289a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <!-- Nav Bar -->

        <div class=\"row\">
        <div class=\"large-12 columns\">
          
          <h1>Hello <small>Welcome to my baseapp Symfony2 application.</small></h1>
          
        </div>
        <div class=\"large-12 columns\">
          <div class=\"nav-bar left\">
           <ul class=\"button-group\">
             <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("rdg_soccer_homepage");
        echo "\" class=\"button small\">Home</a></li>
             <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("rdg_test_pdf");
        echo "\" class=\"button small\">Test fPDF</a></li>
             <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("rdg_tcpdf_pdf");
        echo "\" class=\"button small\">Test TCPDF</a></li>
            </ul>
          </div>
          <hr />
        </div>
        </div>

        <!-- End Nav -->

        ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "        
        ";
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "
        <!-- Footer -->

        <footer class=\"row\">
        <div class=\"large-12 columns\">
          <hr />
          <div class=\"row\">
            <div class=\"large-6 columns\">
              <p>© Copyright no one at all. Go to town.</p>
            </div>
            <div class=\"large-6 columns\">
                
            </div>
          </div>
        </div>
        </footer>    
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Baseapp";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bmatznerfoundation/css/foundation.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        // line 38
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bmatznerjquery/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bmatznerfoundation/js/foundation.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 39,  130 => 38,  127 => 37,  122 => 35,  116 => 8,  111 => 7,  108 => 6,  102 => 5,  80 => 41,  78 => 37,  75 => 36,  73 => 35,  61 => 26,  57 => 25,  53 => 24,  35 => 10,  23 => 1,  99 => 46,  96 => 45,  92 => 36,  89 => 35,  64 => 9,  54 => 37,  52 => 35,  43 => 28,  41 => 9,  34 => 4,  32 => 4,  29 => 5,  72 => 22,  67 => 10,  60 => 16,  55 => 14,  51 => 13,  46 => 11,  42 => 10,  39 => 9,  33 => 6,  31 => 3,  28 => 5,);
    }
}
