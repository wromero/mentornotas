<?php

/* ::base.html.twig */
class __TwigTemplate_9e254c4cea0e27ec93d3ba17b1abdd7bd0fa342e847e0d9b0579d5a3d2de0b12 extends Twig_Template
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
         <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
         <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
         ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "         <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
     </head>
     <body>
         ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "         ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "     </body>
 </html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  68 => 11,  63 => 10,  58 => 6,  42 => 10,  35 => 7,  33 => 6,  23 => 1,  81 => 15,  78 => 14,  72 => 21,  70 => 20,  67 => 19,  65 => 18,  61 => 16,  59 => 14,  56 => 13,  53 => 12,  48 => 9,  45 => 8,  39 => 5,  34 => 4,  31 => 3,  104 => 46,  87 => 32,  80 => 28,  77 => 27,  71 => 25,  69 => 24,  52 => 5,  47 => 12,  44 => 11,  38 => 48,  36 => 6,  32 => 4,  29 => 5,);
    }
}
