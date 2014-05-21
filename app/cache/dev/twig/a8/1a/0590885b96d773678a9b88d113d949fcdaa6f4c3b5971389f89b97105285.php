<?php

/* SensioDistributionBundle:Configurator:check.html.twig */
class __TwigTemplate_a81a0590885b96d773678a9b88d113d949fcdaa6f4c3b5971389f89b97105285 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
            // line 5
            echo "        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))), "html", null, true);
            echo "</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <li>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ol>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_length_filter($this->env, (isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")))) {
            // line 18
            echo "        <h1>Some Recommendations</h1>

        <p>
            ";
            // line 21
            if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
                // line 22
                echo "            Additionally, we
            ";
            } else {
                // line 24
                echo "            We
            ";
            }
            // line 26
            echo "            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "                    <li>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </ol>
        </p>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ((!twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))))) {
            // line 39
            echo "        <ul class=\"symfony_list\">
            <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\">Configure your Symfony Application online</a></li>
        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  672 => 345,  664 => 342,  651 => 337,  613 => 320,  609 => 319,  602 => 317,  552 => 293,  541 => 290,  533 => 284,  519 => 278,  489 => 262,  483 => 258,  465 => 249,  438 => 236,  397 => 213,  383 => 207,  389 => 160,  386 => 159,  378 => 157,  334 => 141,  328 => 139,  792 => 488,  775 => 485,  727 => 476,  702 => 472,  686 => 468,  677 => 465,  634 => 456,  622 => 323,  606 => 318,  567 => 414,  517 => 404,  462 => 202,  446 => 197,  441 => 196,  394 => 168,  367 => 198,  956 => 271,  953 => 270,  946 => 302,  942 => 300,  933 => 296,  925 => 292,  912 => 289,  909 => 288,  890 => 281,  887 => 280,  879 => 277,  870 => 274,  853 => 261,  840 => 253,  834 => 249,  832 => 248,  820 => 243,  816 => 241,  807 => 491,  805 => 236,  802 => 235,  791 => 262,  788 => 486,  771 => 232,  768 => 231,  732 => 213,  720 => 211,  713 => 209,  688 => 202,  682 => 467,  679 => 466,  663 => 195,  660 => 340,  657 => 193,  632 => 187,  629 => 326,  626 => 325,  610 => 181,  603 => 179,  570 => 164,  561 => 161,  554 => 224,  522 => 279,  479 => 256,  471 => 253,  451 => 120,  418 => 224,  370 => 101,  306 => 107,  303 => 106,  292 => 91,  280 => 87,  12 => 36,  624 => 224,  620 => 451,  601 => 446,  585 => 307,  572 => 204,  566 => 203,  545 => 291,  497 => 267,  485 => 124,  424 => 114,  412 => 222,  410 => 221,  406 => 111,  404 => 90,  401 => 172,  333 => 132,  326 => 138,  318 => 111,  778 => 267,  748 => 242,  745 => 241,  742 => 240,  736 => 238,  734 => 237,  717 => 210,  703 => 226,  700 => 205,  653 => 218,  650 => 192,  633 => 209,  599 => 215,  595 => 205,  587 => 203,  584 => 173,  581 => 305,  578 => 200,  573 => 198,  546 => 175,  521 => 182,  499 => 268,  475 => 169,  468 => 128,  448 => 240,  445 => 152,  422 => 226,  300 => 180,  321 => 135,  295 => 178,  242 => 82,  236 => 42,  692 => 399,  661 => 220,  656 => 219,  652 => 376,  645 => 369,  641 => 189,  631 => 327,  625 => 453,  615 => 354,  607 => 180,  597 => 177,  590 => 204,  579 => 332,  575 => 328,  569 => 300,  536 => 194,  510 => 178,  504 => 155,  482 => 136,  434 => 118,  421 => 90,  310 => 83,  244 => 43,  231 => 83,  226 => 84,  275 => 105,  237 => 71,  563 => 298,  560 => 191,  558 => 160,  549 => 411,  543 => 174,  532 => 410,  528 => 160,  525 => 280,  523 => 189,  514 => 167,  511 => 166,  508 => 165,  487 => 156,  436 => 235,  331 => 140,  325 => 129,  320 => 127,  272 => 91,  267 => 101,  249 => 74,  216 => 79,  152 => 46,  20 => 1,  338 => 135,  323 => 128,  315 => 131,  301 => 80,  277 => 136,  262 => 98,  257 => 103,  239 => 64,  97 => 39,  127 => 35,  167 => 56,  70 => 15,  211 => 81,  137 => 29,  77 => 20,  1414 => 421,  1402 => 417,  1398 => 415,  1394 => 414,  1385 => 413,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1249 => 367,  1246 => 366,  1237 => 360,  1223 => 356,  1221 => 355,  1218 => 354,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1162 => 330,  1159 => 329,  1157 => 328,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1088 => 308,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1027 => 281,  1024 => 280,  1016 => 276,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  950 => 269,  947 => 249,  939 => 243,  936 => 297,  931 => 295,  923 => 236,  918 => 234,  915 => 233,  903 => 286,  900 => 228,  897 => 227,  894 => 226,  892 => 282,  889 => 224,  881 => 278,  876 => 276,  873 => 217,  862 => 212,  857 => 267,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  830 => 198,  828 => 246,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  798 => 184,  793 => 182,  785 => 232,  783 => 177,  780 => 303,  772 => 248,  769 => 247,  767 => 246,  764 => 169,  756 => 165,  753 => 220,  751 => 163,  739 => 239,  729 => 235,  724 => 154,  715 => 151,  712 => 150,  710 => 475,  707 => 208,  699 => 142,  697 => 141,  695 => 139,  694 => 470,  689 => 137,  683 => 223,  680 => 134,  675 => 132,  666 => 222,  662 => 125,  658 => 124,  654 => 123,  643 => 120,  640 => 334,  638 => 210,  635 => 188,  619 => 183,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 310,  576 => 199,  564 => 162,  557 => 295,  555 => 200,  550 => 187,  547 => 93,  527 => 281,  524 => 297,  515 => 276,  509 => 272,  503 => 81,  496 => 172,  493 => 143,  490 => 142,  478 => 74,  459 => 246,  456 => 68,  433 => 149,  428 => 230,  400 => 214,  390 => 136,  344 => 119,  316 => 16,  311 => 83,  308 => 287,  293 => 120,  290 => 119,  288 => 176,  263 => 95,  260 => 98,  255 => 101,  250 => 44,  222 => 83,  207 => 75,  202 => 94,  197 => 104,  194 => 68,  191 => 67,  184 => 101,  181 => 65,  161 => 63,  129 => 67,  104 => 32,  2767 => 862,  2758 => 861,  2756 => 860,  2753 => 859,  2735 => 855,  2728 => 854,  2725 => 853,  2722 => 852,  2719 => 851,  2716 => 850,  2714 => 849,  2711 => 848,  2687 => 844,  2662 => 843,  2660 => 842,  2657 => 841,  2645 => 836,  2642 => 835,  2639 => 834,  2636 => 833,  2633 => 832,  2630 => 831,  2627 => 830,  2624 => 829,  2621 => 828,  2618 => 827,  2615 => 826,  2612 => 825,  2609 => 824,  2606 => 823,  2603 => 822,  2600 => 821,  2597 => 820,  2592 => 819,  2590 => 818,  2587 => 817,  2578 => 811,  2572 => 809,  2569 => 808,  2564 => 807,  2562 => 806,  2559 => 805,  2553 => 801,  2549 => 799,  2547 => 798,  2544 => 797,  2535 => 795,  2531 => 794,  2524 => 793,  2520 => 791,  2517 => 790,  2515 => 789,  2512 => 788,  2509 => 787,  2506 => 786,  2504 => 785,  2501 => 784,  2498 => 783,  2495 => 782,  2493 => 781,  2490 => 780,  2482 => 776,  2479 => 775,  2476 => 774,  2473 => 773,  2465 => 769,  2463 => 768,  2460 => 767,  2451 => 762,  2448 => 761,  2442 => 759,  2439 => 758,  2433 => 756,  2430 => 755,  2424 => 753,  2421 => 752,  2415 => 750,  2413 => 749,  2410 => 748,  2404 => 746,  2401 => 745,  2399 => 744,  2396 => 743,  2387 => 738,  2385 => 737,  2361 => 736,  2358 => 735,  2355 => 734,  2352 => 733,  2350 => 732,  2347 => 731,  2341 => 729,  2339 => 728,  2336 => 727,  2330 => 725,  2328 => 724,  2325 => 723,  2319 => 721,  2317 => 720,  2314 => 719,  2308 => 717,  2306 => 716,  2303 => 715,  2297 => 713,  2294 => 712,  2292 => 711,  2289 => 710,  2286 => 709,  2283 => 708,  2280 => 707,  2277 => 706,  2274 => 705,  2271 => 704,  2269 => 703,  2266 => 702,  2259 => 698,  2255 => 697,  2250 => 696,  2248 => 695,  2245 => 694,  2238 => 689,  2235 => 688,  2228 => 685,  2225 => 684,  2217 => 678,  2215 => 677,  2210 => 675,  2207 => 674,  2196 => 672,  2193 => 671,  2191 => 670,  2188 => 669,  2185 => 668,  2183 => 667,  2180 => 666,  2177 => 665,  2174 => 664,  2171 => 663,  2168 => 662,  2165 => 661,  2162 => 660,  2159 => 659,  2156 => 658,  2153 => 657,  2150 => 656,  2147 => 655,  2145 => 654,  2142 => 653,  2139 => 652,  2136 => 651,  2134 => 650,  2131 => 649,  2122 => 644,  2119 => 643,  2116 => 642,  2113 => 641,  2110 => 640,  2107 => 639,  2105 => 638,  2102 => 637,  2093 => 632,  2089 => 630,  2083 => 628,  2081 => 627,  2076 => 626,  2070 => 624,  2068 => 623,  2063 => 622,  2060 => 621,  2057 => 620,  2054 => 619,  2051 => 618,  2048 => 617,  2045 => 616,  2042 => 615,  2039 => 614,  2036 => 613,  2033 => 612,  2030 => 611,  2027 => 610,  2025 => 609,  2022 => 608,  2015 => 604,  2011 => 602,  2006 => 600,  2002 => 599,  1998 => 598,  1993 => 597,  1987 => 594,  1983 => 593,  1979 => 592,  1973 => 591,  1968 => 590,  1966 => 589,  1960 => 588,  1957 => 587,  1954 => 586,  1952 => 585,  1949 => 584,  1946 => 583,  1943 => 582,  1940 => 581,  1937 => 580,  1934 => 579,  1931 => 578,  1928 => 577,  1925 => 576,  1922 => 575,  1919 => 574,  1916 => 573,  1914 => 572,  1911 => 571,  1908 => 570,  1905 => 569,  1903 => 568,  1900 => 567,  1892 => 563,  1890 => 559,  1888 => 558,  1885 => 557,  1880 => 553,  1858 => 548,  1855 => 547,  1852 => 546,  1849 => 545,  1846 => 544,  1843 => 543,  1840 => 542,  1837 => 541,  1834 => 540,  1832 => 539,  1829 => 538,  1826 => 537,  1823 => 536,  1820 => 535,  1817 => 534,  1814 => 533,  1812 => 532,  1809 => 531,  1806 => 530,  1803 => 529,  1801 => 528,  1798 => 527,  1795 => 526,  1792 => 525,  1790 => 524,  1787 => 523,  1784 => 522,  1781 => 521,  1778 => 520,  1775 => 519,  1772 => 518,  1769 => 517,  1766 => 516,  1763 => 515,  1761 => 514,  1758 => 513,  1755 => 512,  1753 => 511,  1750 => 510,  1742 => 505,  1738 => 504,  1733 => 503,  1730 => 502,  1722 => 498,  1719 => 497,  1717 => 496,  1714 => 495,  1706 => 491,  1703 => 490,  1701 => 489,  1698 => 488,  1683 => 484,  1680 => 483,  1677 => 482,  1674 => 481,  1671 => 480,  1668 => 479,  1665 => 478,  1662 => 477,  1659 => 476,  1657 => 475,  1654 => 474,  1646 => 470,  1643 => 469,  1641 => 468,  1638 => 467,  1630 => 463,  1627 => 462,  1625 => 461,  1622 => 460,  1614 => 456,  1611 => 455,  1609 => 454,  1606 => 453,  1597 => 447,  1594 => 446,  1591 => 445,  1589 => 444,  1586 => 443,  1578 => 439,  1575 => 438,  1573 => 437,  1570 => 436,  1562 => 432,  1559 => 431,  1557 => 430,  1554 => 429,  1547 => 424,  1545 => 420,  1542 => 419,  1540 => 418,  1537 => 417,  1529 => 413,  1526 => 412,  1524 => 411,  1521 => 410,  1513 => 406,  1510 => 405,  1508 => 404,  1506 => 403,  1503 => 402,  1496 => 397,  1490 => 396,  1485 => 395,  1481 => 394,  1476 => 393,  1473 => 392,  1470 => 391,  1464 => 389,  1461 => 388,  1459 => 387,  1456 => 386,  1448 => 380,  1446 => 379,  1445 => 378,  1444 => 377,  1443 => 376,  1438 => 375,  1435 => 374,  1429 => 372,  1426 => 371,  1424 => 370,  1421 => 369,  1412 => 363,  1408 => 419,  1404 => 361,  1400 => 416,  1395 => 359,  1392 => 358,  1386 => 356,  1383 => 412,  1381 => 354,  1378 => 353,  1362 => 349,  1360 => 348,  1357 => 347,  1341 => 397,  1339 => 396,  1336 => 395,  1329 => 336,  1324 => 333,  1322 => 332,  1316 => 330,  1310 => 328,  1304 => 325,  1300 => 324,  1284 => 323,  1281 => 322,  1278 => 321,  1275 => 320,  1272 => 319,  1269 => 318,  1266 => 317,  1263 => 316,  1260 => 315,  1257 => 314,  1255 => 313,  1251 => 368,  1243 => 309,  1238 => 307,  1231 => 358,  1228 => 357,  1225 => 304,  1222 => 303,  1220 => 302,  1217 => 301,  1214 => 300,  1211 => 349,  1208 => 298,  1205 => 297,  1202 => 347,  1199 => 295,  1196 => 294,  1193 => 293,  1191 => 292,  1188 => 291,  1186 => 290,  1183 => 289,  1180 => 288,  1178 => 287,  1175 => 286,  1168 => 332,  1165 => 281,  1161 => 279,  1156 => 276,  1154 => 327,  1148 => 273,  1142 => 271,  1136 => 268,  1132 => 267,  1116 => 266,  1113 => 265,  1110 => 264,  1107 => 263,  1104 => 262,  1101 => 261,  1098 => 313,  1095 => 312,  1092 => 258,  1089 => 257,  1087 => 256,  1084 => 307,  1076 => 253,  1071 => 251,  1064 => 298,  1061 => 249,  1058 => 248,  1055 => 247,  1052 => 246,  1050 => 245,  1047 => 244,  1044 => 243,  1041 => 242,  1038 => 241,  1035 => 240,  1032 => 283,  1029 => 282,  1026 => 237,  1023 => 236,  1020 => 235,  1017 => 234,  1014 => 272,  1012 => 271,  1009 => 270,  1006 => 230,  1003 => 229,  1001 => 228,  998 => 227,  981 => 223,  969 => 221,  962 => 218,  960 => 217,  955 => 252,  952 => 251,  934 => 241,  932 => 213,  929 => 212,  920 => 235,  917 => 291,  914 => 290,  908 => 203,  906 => 202,  901 => 285,  898 => 284,  895 => 199,  880 => 197,  878 => 219,  871 => 195,  868 => 273,  865 => 272,  863 => 269,  860 => 268,  854 => 187,  848 => 258,  842 => 184,  836 => 182,  833 => 199,  829 => 180,  824 => 179,  822 => 244,  819 => 177,  810 => 492,  804 => 170,  801 => 185,  799 => 234,  796 => 489,  789 => 162,  787 => 161,  776 => 159,  773 => 264,  765 => 230,  763 => 244,  760 => 222,  757 => 221,  754 => 152,  752 => 151,  749 => 479,  746 => 478,  743 => 217,  741 => 147,  738 => 214,  735 => 145,  733 => 144,  730 => 143,  723 => 138,  721 => 153,  714 => 232,  711 => 231,  709 => 133,  706 => 473,  698 => 471,  696 => 204,  693 => 128,  690 => 469,  687 => 126,  684 => 125,  681 => 124,  678 => 390,  676 => 199,  673 => 198,  670 => 120,  668 => 344,  665 => 196,  659 => 114,  649 => 462,  647 => 336,  644 => 335,  636 => 107,  628 => 104,  623 => 103,  621 => 102,  616 => 182,  612 => 220,  608 => 98,  604 => 96,  600 => 178,  594 => 176,  591 => 309,  588 => 308,  586 => 90,  583 => 334,  580 => 207,  577 => 303,  574 => 205,  571 => 85,  568 => 84,  565 => 324,  562 => 82,  559 => 296,  556 => 80,  553 => 188,  551 => 221,  548 => 292,  540 => 160,  537 => 159,  534 => 162,  531 => 283,  529 => 409,  526 => 190,  513 => 230,  507 => 156,  505 => 270,  500 => 291,  498 => 57,  495 => 289,  488 => 51,  486 => 286,  470 => 121,  467 => 72,  464 => 125,  458 => 43,  455 => 115,  450 => 114,  447 => 113,  442 => 151,  439 => 195,  429 => 188,  426 => 126,  420 => 146,  414 => 144,  408 => 176,  405 => 108,  396 => 138,  385 => 159,  382 => 17,  380 => 206,  377 => 129,  359 => 144,  357 => 123,  354 => 101,  350 => 327,  347 => 191,  342 => 137,  340 => 145,  335 => 134,  329 => 188,  327 => 114,  324 => 113,  319 => 124,  317 => 185,  307 => 128,  304 => 181,  302 => 125,  299 => 112,  297 => 179,  286 => 112,  284 => 76,  281 => 114,  279 => 77,  276 => 111,  274 => 110,  271 => 108,  266 => 366,  261 => 50,  259 => 103,  253 => 100,  233 => 87,  213 => 78,  210 => 77,  205 => 108,  200 => 72,  188 => 102,  185 => 74,  178 => 59,  175 => 58,  170 => 96,  160 => 38,  155 => 47,  148 => 49,  100 => 39,  14 => 1,  518 => 180,  516 => 294,  512 => 84,  501 => 154,  491 => 157,  481 => 184,  476 => 180,  473 => 254,  463 => 248,  460 => 123,  454 => 244,  452 => 268,  449 => 198,  431 => 189,  419 => 158,  417 => 145,  415 => 180,  411 => 143,  403 => 117,  399 => 139,  395 => 145,  391 => 163,  388 => 42,  376 => 205,  373 => 156,  371 => 156,  369 => 148,  366 => 150,  363 => 153,  361 => 195,  358 => 151,  356 => 126,  353 => 193,  351 => 192,  348 => 140,  345 => 147,  343 => 146,  339 => 191,  336 => 107,  332 => 116,  330 => 103,  313 => 183,  296 => 121,  291 => 102,  289 => 113,  287 => 89,  282 => 161,  270 => 102,  265 => 105,  256 => 96,  251 => 101,  248 => 97,  245 => 83,  232 => 88,  228 => 41,  225 => 67,  223 => 474,  218 => 467,  215 => 126,  212 => 78,  206 => 57,  198 => 55,  195 => 54,  192 => 53,  174 => 65,  165 => 83,  153 => 77,  124 => 25,  84 => 40,  81 => 23,  190 => 76,  186 => 47,  180 => 49,  172 => 57,  150 => 55,  146 => 65,  134 => 39,  126 => 66,  118 => 49,  114 => 44,  90 => 26,  76 => 17,  113 => 48,  110 => 38,  65 => 17,  34 => 5,  58 => 14,  23 => 13,  53 => 12,  480 => 75,  474 => 122,  469 => 158,  461 => 70,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 61,  435 => 146,  430 => 255,  427 => 162,  423 => 250,  413 => 241,  409 => 132,  407 => 238,  402 => 215,  398 => 88,  393 => 211,  387 => 164,  384 => 106,  381 => 105,  379 => 104,  374 => 128,  368 => 126,  365 => 197,  362 => 148,  360 => 128,  355 => 150,  341 => 189,  337 => 90,  322 => 93,  314 => 88,  312 => 130,  309 => 129,  305 => 115,  298 => 120,  294 => 693,  285 => 175,  283 => 115,  278 => 98,  268 => 3,  264 => 82,  258 => 94,  252 => 68,  247 => 75,  241 => 93,  229 => 87,  220 => 81,  214 => 63,  177 => 43,  169 => 78,  140 => 58,  132 => 28,  128 => 47,  107 => 37,  61 => 12,  273 => 174,  269 => 107,  254 => 46,  243 => 92,  240 => 72,  238 => 84,  235 => 89,  230 => 62,  227 => 86,  224 => 81,  221 => 38,  219 => 101,  217 => 56,  208 => 76,  204 => 57,  179 => 98,  159 => 90,  143 => 51,  135 => 51,  119 => 40,  102 => 24,  71 => 13,  67 => 18,  63 => 18,  59 => 16,  28 => 3,  93 => 27,  88 => 30,  78 => 24,  201 => 106,  196 => 92,  183 => 46,  171 => 153,  166 => 95,  163 => 53,  158 => 80,  156 => 62,  151 => 59,  142 => 64,  138 => 63,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 33,  62 => 16,  49 => 12,  87 => 41,  46 => 13,  44 => 10,  25 => 35,  21 => 2,  31 => 4,  94 => 21,  89 => 30,  85 => 23,  75 => 19,  68 => 30,  56 => 16,  27 => 3,  38 => 7,  26 => 6,  24 => 3,  19 => 1,  79 => 21,  72 => 21,  69 => 16,  47 => 11,  40 => 8,  37 => 6,  22 => 2,  246 => 96,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 40,  111 => 47,  108 => 47,  101 => 33,  98 => 45,  96 => 37,  83 => 33,  74 => 22,  66 => 25,  55 => 9,  52 => 12,  50 => 22,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 58,  203 => 73,  199 => 93,  193 => 51,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 55,  162 => 59,  154 => 60,  149 => 62,  147 => 43,  144 => 42,  141 => 73,  133 => 69,  130 => 46,  125 => 51,  122 => 41,  116 => 57,  112 => 39,  109 => 27,  106 => 51,  103 => 63,  99 => 23,  95 => 39,  92 => 31,  86 => 36,  82 => 26,  80 => 27,  73 => 16,  64 => 13,  60 => 20,  57 => 39,  54 => 19,  51 => 13,  48 => 16,  45 => 11,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
