<?php

/* JAMNotasFrontendBundle:Notas:layout-login-registro.html.twig */
class __TwigTemplate_6126d57857a4577731020bb75e8a579344add85f27fea492c0b2a3878b26a2e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'wrapper' => array($this, 'block_wrapper'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jamnotasfrontend/vendors/jquery/css/ui-lightness/jquery-ui-1.8.17.custom.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
 <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jamnotasfrontend/css/mentornotas.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
 ";
    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        // line 9
        echo "
 ";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "     <div id=\"mentornotas-wrapper\">
          ";
        // line 14
        $this->displayBlock('wrapper', $context, $blocks);
        // line 16
        echo "         
     </div>
     ";
        // line 18
        $this->env->loadTemplate("JAMNotasFrontendBundle:Login:login.html.twig")->display($context);
        // line 19
        echo "
     ";
        // line 20
        $this->env->loadTemplate("JAMNotasFrontendBundle:Login:registro.html.twig")->display($context);
        // line 21
        echo "

 ";
    }

    // line 14
    public function block_wrapper($context, array $blocks = array())
    {
        // line 15
        echo "             
          ";
    }

    public function getTemplateName()
    {
        return "JAMNotasFrontendBundle:Notas:layout-login-registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  78 => 14,  72 => 21,  70 => 20,  67 => 19,  65 => 18,  61 => 16,  59 => 14,  56 => 13,  53 => 12,  48 => 9,  45 => 8,  39 => 5,  34 => 4,  31 => 3,  104 => 46,  87 => 32,  80 => 28,  77 => 27,  71 => 25,  69 => 24,  52 => 10,  47 => 7,  44 => 6,  38 => 48,  36 => 6,  32 => 4,  29 => 3,);
    }
}
