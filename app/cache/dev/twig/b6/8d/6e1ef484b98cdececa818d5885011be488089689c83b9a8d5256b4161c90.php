<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_b68d6e1ef484b98cdececa818d5885011be488089689c83b9a8d5256b4161c90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id"), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        echo "EMPTY CONTENT";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 12,  27 => 13,  25 => 12,  20 => 11,  175 => 74,  168 => 69,  156 => 64,  152 => 62,  150 => 61,  138 => 57,  134 => 55,  109 => 46,  105 => 44,  101 => 42,  99 => 41,  93 => 39,  90 => 38,  88 => 37,  74 => 30,  70 => 29,  62 => 24,  58 => 22,  56 => 21,  46 => 19,  37 => 17,  29 => 15,  26 => 14,  956 => 271,  953 => 270,  950 => 269,  946 => 302,  942 => 300,  936 => 297,  933 => 296,  931 => 295,  925 => 292,  917 => 291,  914 => 290,  912 => 289,  909 => 288,  903 => 286,  901 => 285,  898 => 284,  892 => 282,  890 => 281,  887 => 280,  881 => 278,  879 => 277,  876 => 276,  870 => 274,  868 => 273,  865 => 272,  863 => 269,  860 => 268,  857 => 267,  853 => 261,  848 => 258,  840 => 253,  834 => 249,  832 => 248,  828 => 246,  822 => 244,  820 => 243,  816 => 241,  810 => 238,  807 => 237,  805 => 236,  802 => 235,  799 => 234,  796 => 233,  791 => 262,  788 => 233,  785 => 232,  780 => 303,  778 => 267,  773 => 264,  771 => 232,  768 => 231,  765 => 230,  760 => 222,  757 => 221,  753 => 220,  749 => 218,  743 => 217,  738 => 214,  732 => 213,  720 => 211,  717 => 210,  713 => 209,  707 => 208,  700 => 205,  696 => 204,  688 => 202,  682 => 201,  679 => 200,  676 => 199,  673 => 198,  668 => 197,  665 => 196,  663 => 195,  660 => 194,  657 => 193,  650 => 192,  647 => 191,  644 => 190,  641 => 189,  635 => 188,  632 => 187,  629 => 186,  626 => 184,  619 => 183,  616 => 182,  610 => 181,  607 => 180,  603 => 179,  600 => 178,  597 => 177,  594 => 176,  588 => 175,  584 => 173,  570 => 164,  564 => 162,  561 => 161,  558 => 160,  554 => 224,  551 => 221,  548 => 176,  546 => 175,  543 => 174,  540 => 160,  537 => 159,  531 => 225,  529 => 159,  525 => 157,  522 => 156,  515 => 305,  513 => 230,  509 => 228,  507 => 156,  504 => 155,  501 => 154,  493 => 143,  490 => 142,  482 => 136,  479 => 135,  471 => 129,  468 => 128,  464 => 125,  460 => 123,  454 => 121,  451 => 120,  448 => 119,  434 => 118,  428 => 116,  424 => 114,  418 => 112,  410 => 110,  408 => 109,  405 => 108,  402 => 107,  384 => 106,  381 => 105,  379 => 104,  376 => 103,  373 => 102,  370 => 101,  366 => 150,  362 => 148,  360 => 128,  356 => 126,  354 => 101,  343 => 92,  340 => 91,  337 => 90,  332 => 88,  326 => 86,  323 => 85,  320 => 84,  311 => 83,  309 => 82,  304 => 81,  301 => 80,  296 => 151,  293 => 90,  291 => 80,  288 => 79,  285 => 78,  279 => 77,  274 => 53,  265 => 51,  261 => 50,  254 => 46,  250 => 44,  244 => 43,  236 => 42,  228 => 41,  224 => 39,  221 => 38,  216 => 35,  207 => 33,  203 => 32,  200 => 31,  197 => 30,  191 => 26,  188 => 25,  182 => 23,  174 => 154,  169 => 78,  165 => 77,  161 => 75,  158 => 74,  155 => 73,  141 => 58,  126 => 66,  123 => 52,  106 => 64,  103 => 63,  100 => 62,  92 => 59,  87 => 57,  78 => 37,  76 => 30,  71 => 25,  66 => 23,  63 => 22,  61 => 21,  57 => 19,  53 => 20,  51 => 16,  49 => 15,  47 => 14,  43 => 18,  41 => 11,  194 => 66,  189 => 63,  185 => 61,  176 => 309,  171 => 153,  167 => 56,  164 => 55,  162 => 68,  157 => 51,  148 => 49,  144 => 59,  136 => 70,  133 => 69,  129 => 67,  120 => 51,  116 => 50,  113 => 40,  111 => 47,  107 => 37,  98 => 35,  94 => 60,  86 => 33,  83 => 55,  81 => 33,  77 => 31,  73 => 29,  64 => 24,  59 => 20,  55 => 18,  52 => 21,  50 => 20,  45 => 13,  42 => 17,  39 => 16,  34 => 16,  28 => 14,);
    }
}
