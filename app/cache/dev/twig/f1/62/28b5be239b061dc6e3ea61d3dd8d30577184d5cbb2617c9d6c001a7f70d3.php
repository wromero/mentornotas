<?php

/* JAMNotasFrontendBundle:Login:login.html.twig */
class __TwigTemplate_f16228b5be239b061dc6e3ea61d3dd8d30577184d5cbb2617c9d6c001a7f70d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JAMNotasFrontendBundle:Notas:layout-login-registro.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'wrapper' => array($this, 'block_wrapper'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JAMNotasFrontendBundle:Notas:layout-login-registro.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "     
    
     ";
        // line 6
        $this->displayBlock('wrapper', $context, $blocks);
        // line 48
        echo " 

   ";
    }

    // line 6
    public function block_wrapper($context, array $blocks = array())
    {
        // line 7
        echo "              <div id=\"mentornotas-header\">
                   <div style=\"float: left;\">
                    <a href=\"\">
                        <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jamnotasfrontend/images/mentor.png"), "html", null, true);
        echo "\" alt=\"mentornotas\"/>
                    </a>
                </div>
                <div style=\"text-align: center; font-style: italic\">
                    <h1>MentorNotas</h1>
                    <h2>tu block de notas inteligente</h2>
                </div>
                    
                   
              </div>
                    <div class=\"mentornotas-content-login\">
                        
                   
    <h1>Login</h1>
     ";
        // line 24
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 25
            echo "         <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
     ";
        }
        // line 27
        echo "
     <form action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("jamn_login_check");
        echo "\" method=\"post\" id=\"login\">
         <div>
             <label for=\"username\">Username</label>
             <input type=\"text\" id=\"username\" name=\"_username\"
              value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
         </div>

         <div>
             <label for=\"password\">Password</label>
             <input type=\"password\" id=\"password\" name=\"_password\" />
         </div>

         <input type=\"submit\" class=\"symfony-button-grey\" value=\"LOGIN\" />
     </form>
  
                                           
                    </div>
          <ul id=\"menu\">
                <li>¿Aún no tienes una cuenta? <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("jamn_registro");
        echo "\">¡Registrate!</a></li>
            </ul>
          ";
    }

    public function getTemplateName()
    {
        return "JAMNotasFrontendBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 46,  87 => 32,  80 => 28,  77 => 27,  71 => 25,  69 => 24,  52 => 10,  47 => 7,  44 => 6,  38 => 48,  36 => 6,  32 => 4,  29 => 3,);
    }
}
