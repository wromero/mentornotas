<?php

/* BraincraftedBootstrapBundle::layout.html.twig */
class __TwigTemplate_2dd980321f4f18f6757470da0fc593cffcad005fb306812543062a8642ccc5be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>

<head>

<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

<!-- Bootstrap -->
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">

</head>

<body>

";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "
<!-- JavaScript plugins (requires jQuery) -->
<script src=\"//code.jquery.com/jquery.js\"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/css/bootstrap.js"), "html", null, true);
        echo "\"></script>

<!-- Optionally enable responsive features in IE8 -->
<script src=\"js/respond.js\"></script>

</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "BraincraftedBootstrapBundle by Florian Eckerstorfer";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  518 => 4,  516 => 3,  512 => 2,  501 => 1,  491 => 186,  481 => 184,  476 => 180,  473 => 179,  463 => 175,  460 => 174,  454 => 172,  452 => 171,  449 => 170,  431 => 164,  419 => 158,  417 => 157,  415 => 156,  411 => 154,  403 => 149,  399 => 147,  395 => 145,  391 => 143,  388 => 141,  376 => 133,  373 => 131,  371 => 130,  369 => 128,  366 => 125,  363 => 123,  361 => 122,  358 => 120,  356 => 119,  353 => 117,  351 => 116,  348 => 114,  345 => 112,  343 => 111,  339 => 108,  336 => 107,  332 => 104,  330 => 103,  313 => 100,  296 => 99,  291 => 96,  289 => 95,  287 => 93,  282 => 90,  270 => 84,  265 => 82,  256 => 76,  251 => 75,  248 => 74,  245 => 73,  232 => 66,  228 => 65,  225 => 64,  223 => 63,  218 => 61,  215 => 60,  212 => 59,  206 => 57,  198 => 54,  195 => 53,  192 => 52,  174 => 46,  165 => 43,  153 => 39,  124 => 27,  84 => 184,  81 => 183,  190 => 59,  186 => 50,  180 => 48,  172 => 53,  150 => 38,  146 => 45,  134 => 42,  126 => 40,  118 => 38,  114 => 37,  90 => 31,  76 => 178,  113 => 31,  110 => 21,  65 => 17,  34 => 9,  58 => 15,  23 => 1,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 173,  453 => 151,  444 => 149,  440 => 148,  437 => 168,  435 => 146,  430 => 144,  427 => 162,  423 => 160,  413 => 155,  409 => 132,  407 => 151,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 140,  381 => 137,  379 => 136,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 110,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 98,  285 => 92,  283 => 88,  278 => 86,  268 => 83,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 62,  214 => 69,  177 => 47,  169 => 60,  140 => 55,  132 => 51,  128 => 30,  107 => 36,  61 => 106,  273 => 85,  269 => 94,  254 => 92,  243 => 72,  240 => 71,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 41,  143 => 56,  135 => 53,  119 => 25,  102 => 34,  71 => 169,  67 => 17,  63 => 6,  59 => 90,  28 => 6,  93 => 9,  88 => 6,  78 => 21,  201 => 55,  196 => 90,  183 => 49,  171 => 45,  166 => 71,  163 => 62,  158 => 48,  156 => 40,  151 => 63,  142 => 44,  138 => 43,  136 => 33,  121 => 46,  117 => 32,  105 => 15,  91 => 27,  62 => 16,  49 => 71,  87 => 25,  46 => 17,  44 => 16,  25 => 4,  21 => 1,  31 => 8,  94 => 32,  89 => 186,  85 => 25,  75 => 17,  68 => 24,  56 => 89,  27 => 5,  38 => 9,  26 => 6,  24 => 2,  19 => 1,  79 => 179,  72 => 25,  69 => 16,  47 => 12,  40 => 8,  37 => 5,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 34,  131 => 31,  123 => 47,  120 => 40,  115 => 23,  111 => 37,  108 => 20,  101 => 32,  98 => 11,  96 => 10,  83 => 25,  74 => 170,  66 => 167,  55 => 14,  52 => 21,  50 => 10,  43 => 7,  41 => 29,  35 => 10,  32 => 12,  29 => 5,  209 => 58,  203 => 56,  199 => 67,  193 => 73,  189 => 51,  187 => 84,  182 => 66,  176 => 54,  173 => 65,  168 => 44,  164 => 59,  162 => 42,  154 => 47,  149 => 51,  147 => 37,  144 => 36,  141 => 35,  133 => 32,  130 => 41,  125 => 44,  122 => 26,  116 => 41,  112 => 22,  109 => 34,  106 => 35,  103 => 28,  99 => 31,  95 => 28,  92 => 21,  86 => 185,  82 => 29,  80 => 41,  73 => 19,  64 => 107,  60 => 22,  57 => 11,  54 => 82,  51 => 81,  48 => 13,  45 => 11,  42 => 16,  39 => 15,  36 => 14,  33 => 6,  30 => 7,);
    }
}
