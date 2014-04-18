<?php

/* RdgSoccerBundle::layout.html.twig */
class __TwigTemplate_5206921d3314079dac936d39069123c775c15bb26a1b6122ec047e5c83347f53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"row\">
 
    <!-- Sidebar -->
 
    <aside class=\"large-3 columns\">
      ";
        // line 9
        $this->displayBlock('sidebar', $context, $blocks);
        // line 28
        echo "     
    </aside>
 
    <!-- End Sidebar -->
    
    <!-- Main Content -->
    <div class=\"large-9 columns\" role=\"content\">
        ";
        // line 35
        $this->displayBlock('main', $context, $blocks);
        // line 37
        echo "    </div>
 
    <!-- End Main Content -->
  </div>
 
  <!-- End Main Content and Sidebar -->
  ";
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        echo "            <div class=\"panel\">
                <h5>Categories</h5>
                  <ul class=\"side-nav\">
                    <li><a href=\"#\">News</a></li>
                    <li><a href=\"#\">Code</a></li>
                    <li><a href=\"#\">Design</a></li>
                    <li><a href=\"#\">Fun</a></li>
                    <li><a href=\"#\">Weasels</a></li>
                  </ul>
            </div>  
          

          <div class=\"panel\">
            <h5>Featured</h5>
            <p>- Test Doctrine database on Home</p>
            <p>- Test with fPDF library document</p>
            <p>- Tcpdf library also available</p>
          </div>
      ";
    }

    // line 35
    public function block_main($context, array $blocks = array())
    {
        // line 36
        echo "        ";
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        // line 46
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "RdgSoccerBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 46,  96 => 45,  92 => 36,  89 => 35,  64 => 9,  54 => 37,  52 => 35,  43 => 28,  41 => 9,  34 => 4,  32 => 4,  29 => 3,  72 => 22,  67 => 10,  60 => 16,  55 => 14,  51 => 13,  46 => 11,  42 => 10,  39 => 9,  33 => 7,  31 => 3,  28 => 5,);
    }
}
