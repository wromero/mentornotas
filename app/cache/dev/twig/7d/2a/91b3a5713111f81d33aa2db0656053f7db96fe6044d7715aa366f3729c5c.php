<?php

/* SonataAdminBundle:CRUD:show_array.html.twig */
class __TwigTemplate_7d2a91b3a5713111f81d33aa2db0656053f7db96fe6044d7715aa366f3729c5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 16
            echo "        ";
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "safe")) {
                // line 17
                echo "            [";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo " => ";
                echo (isset($context["val"]) ? $context["val"] : $this->getContext($context, "val"));
                echo "]
        ";
            } else {
                // line 19
                echo "            [";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo " => ";
                echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : $this->getContext($context, "val")), "html", null, true);
                echo "]
        ";
            }
            // line 21
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 95,  303 => 94,  292 => 91,  280 => 87,  12 => 36,  624 => 224,  620 => 223,  601 => 216,  585 => 209,  572 => 204,  566 => 203,  545 => 198,  497 => 156,  485 => 124,  424 => 91,  412 => 126,  410 => 113,  406 => 111,  404 => 90,  401 => 89,  333 => 132,  326 => 129,  318 => 86,  778 => 251,  748 => 242,  745 => 241,  742 => 240,  736 => 238,  734 => 237,  717 => 233,  703 => 226,  700 => 225,  653 => 218,  650 => 217,  633 => 209,  599 => 215,  595 => 205,  587 => 203,  584 => 202,  581 => 201,  578 => 200,  573 => 198,  546 => 166,  521 => 182,  499 => 173,  475 => 169,  468 => 160,  448 => 153,  445 => 152,  422 => 147,  300 => 93,  321 => 100,  295 => 100,  242 => 82,  236 => 109,  692 => 399,  661 => 220,  656 => 219,  652 => 376,  645 => 369,  641 => 368,  631 => 364,  625 => 361,  615 => 354,  607 => 218,  597 => 342,  590 => 204,  579 => 332,  575 => 328,  569 => 325,  536 => 194,  510 => 178,  504 => 164,  482 => 285,  434 => 256,  421 => 90,  310 => 83,  244 => 140,  231 => 69,  226 => 131,  275 => 86,  237 => 71,  563 => 202,  560 => 191,  558 => 190,  549 => 182,  543 => 179,  532 => 192,  528 => 160,  525 => 172,  523 => 189,  514 => 167,  511 => 166,  508 => 165,  487 => 156,  436 => 132,  331 => 96,  325 => 94,  320 => 87,  272 => 91,  267 => 78,  249 => 74,  216 => 100,  152 => 61,  20 => 11,  338 => 113,  323 => 88,  315 => 98,  301 => 144,  277 => 136,  262 => 81,  257 => 103,  239 => 64,  97 => 56,  127 => 52,  167 => 57,  70 => 27,  211 => 81,  137 => 29,  77 => 31,  1414 => 421,  1402 => 417,  1398 => 415,  1394 => 414,  1385 => 413,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1249 => 367,  1246 => 366,  1237 => 360,  1223 => 356,  1221 => 355,  1218 => 354,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1162 => 330,  1159 => 329,  1157 => 328,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1088 => 308,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1027 => 281,  1024 => 280,  1016 => 276,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  931 => 240,  923 => 236,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  876 => 218,  873 => 217,  862 => 212,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  798 => 184,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 248,  769 => 247,  767 => 246,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  739 => 239,  729 => 235,  724 => 154,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  695 => 139,  694 => 138,  689 => 137,  683 => 223,  680 => 134,  675 => 132,  666 => 222,  662 => 125,  658 => 124,  654 => 123,  643 => 120,  640 => 211,  638 => 210,  635 => 226,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 199,  564 => 193,  557 => 96,  555 => 200,  550 => 187,  547 => 93,  527 => 91,  524 => 297,  515 => 180,  509 => 83,  503 => 81,  496 => 172,  493 => 155,  490 => 154,  478 => 74,  459 => 116,  456 => 68,  433 => 149,  428 => 59,  400 => 233,  390 => 136,  344 => 193,  316 => 16,  311 => 118,  308 => 86,  293 => 109,  290 => 90,  288 => 107,  263 => 365,  260 => 98,  255 => 353,  250 => 93,  222 => 66,  207 => 58,  202 => 55,  197 => 72,  194 => 52,  191 => 69,  184 => 48,  181 => 80,  161 => 57,  129 => 56,  104 => 40,  2767 => 862,  2758 => 861,  2756 => 860,  2753 => 859,  2735 => 855,  2728 => 854,  2725 => 853,  2722 => 852,  2719 => 851,  2716 => 850,  2714 => 849,  2711 => 848,  2687 => 844,  2662 => 843,  2660 => 842,  2657 => 841,  2645 => 836,  2642 => 835,  2639 => 834,  2636 => 833,  2633 => 832,  2630 => 831,  2627 => 830,  2624 => 829,  2621 => 828,  2618 => 827,  2615 => 826,  2612 => 825,  2609 => 824,  2606 => 823,  2603 => 822,  2600 => 821,  2597 => 820,  2592 => 819,  2590 => 818,  2587 => 817,  2578 => 811,  2572 => 809,  2569 => 808,  2564 => 807,  2562 => 806,  2559 => 805,  2553 => 801,  2549 => 799,  2547 => 798,  2544 => 797,  2535 => 795,  2531 => 794,  2524 => 793,  2520 => 791,  2517 => 790,  2515 => 789,  2512 => 788,  2509 => 787,  2506 => 786,  2504 => 785,  2501 => 784,  2498 => 783,  2495 => 782,  2493 => 781,  2490 => 780,  2482 => 776,  2479 => 775,  2476 => 774,  2473 => 773,  2465 => 769,  2463 => 768,  2460 => 767,  2451 => 762,  2448 => 761,  2442 => 759,  2439 => 758,  2433 => 756,  2430 => 755,  2424 => 753,  2421 => 752,  2415 => 750,  2413 => 749,  2410 => 748,  2404 => 746,  2401 => 745,  2399 => 744,  2396 => 743,  2387 => 738,  2385 => 737,  2361 => 736,  2358 => 735,  2355 => 734,  2352 => 733,  2350 => 732,  2347 => 731,  2341 => 729,  2339 => 728,  2336 => 727,  2330 => 725,  2328 => 724,  2325 => 723,  2319 => 721,  2317 => 720,  2314 => 719,  2308 => 717,  2306 => 716,  2303 => 715,  2297 => 713,  2294 => 712,  2292 => 711,  2289 => 710,  2286 => 709,  2283 => 708,  2280 => 707,  2277 => 706,  2274 => 705,  2271 => 704,  2269 => 703,  2266 => 702,  2259 => 698,  2255 => 697,  2250 => 696,  2248 => 695,  2245 => 694,  2238 => 689,  2235 => 688,  2228 => 685,  2225 => 684,  2217 => 678,  2215 => 677,  2210 => 675,  2207 => 674,  2196 => 672,  2193 => 671,  2191 => 670,  2188 => 669,  2185 => 668,  2183 => 667,  2180 => 666,  2177 => 665,  2174 => 664,  2171 => 663,  2168 => 662,  2165 => 661,  2162 => 660,  2159 => 659,  2156 => 658,  2153 => 657,  2150 => 656,  2147 => 655,  2145 => 654,  2142 => 653,  2139 => 652,  2136 => 651,  2134 => 650,  2131 => 649,  2122 => 644,  2119 => 643,  2116 => 642,  2113 => 641,  2110 => 640,  2107 => 639,  2105 => 638,  2102 => 637,  2093 => 632,  2089 => 630,  2083 => 628,  2081 => 627,  2076 => 626,  2070 => 624,  2068 => 623,  2063 => 622,  2060 => 621,  2057 => 620,  2054 => 619,  2051 => 618,  2048 => 617,  2045 => 616,  2042 => 615,  2039 => 614,  2036 => 613,  2033 => 612,  2030 => 611,  2027 => 610,  2025 => 609,  2022 => 608,  2015 => 604,  2011 => 602,  2006 => 600,  2002 => 599,  1998 => 598,  1993 => 597,  1987 => 594,  1983 => 593,  1979 => 592,  1973 => 591,  1968 => 590,  1966 => 589,  1960 => 588,  1957 => 587,  1954 => 586,  1952 => 585,  1949 => 584,  1946 => 583,  1943 => 582,  1940 => 581,  1937 => 580,  1934 => 579,  1931 => 578,  1928 => 577,  1925 => 576,  1922 => 575,  1919 => 574,  1916 => 573,  1914 => 572,  1911 => 571,  1908 => 570,  1905 => 569,  1903 => 568,  1900 => 567,  1892 => 563,  1890 => 559,  1888 => 558,  1885 => 557,  1880 => 553,  1858 => 548,  1855 => 547,  1852 => 546,  1849 => 545,  1846 => 544,  1843 => 543,  1840 => 542,  1837 => 541,  1834 => 540,  1832 => 539,  1829 => 538,  1826 => 537,  1823 => 536,  1820 => 535,  1817 => 534,  1814 => 533,  1812 => 532,  1809 => 531,  1806 => 530,  1803 => 529,  1801 => 528,  1798 => 527,  1795 => 526,  1792 => 525,  1790 => 524,  1787 => 523,  1784 => 522,  1781 => 521,  1778 => 520,  1775 => 519,  1772 => 518,  1769 => 517,  1766 => 516,  1763 => 515,  1761 => 514,  1758 => 513,  1755 => 512,  1753 => 511,  1750 => 510,  1742 => 505,  1738 => 504,  1733 => 503,  1730 => 502,  1722 => 498,  1719 => 497,  1717 => 496,  1714 => 495,  1706 => 491,  1703 => 490,  1701 => 489,  1698 => 488,  1683 => 484,  1680 => 483,  1677 => 482,  1674 => 481,  1671 => 480,  1668 => 479,  1665 => 478,  1662 => 477,  1659 => 476,  1657 => 475,  1654 => 474,  1646 => 470,  1643 => 469,  1641 => 468,  1638 => 467,  1630 => 463,  1627 => 462,  1625 => 461,  1622 => 460,  1614 => 456,  1611 => 455,  1609 => 454,  1606 => 453,  1597 => 447,  1594 => 446,  1591 => 445,  1589 => 444,  1586 => 443,  1578 => 439,  1575 => 438,  1573 => 437,  1570 => 436,  1562 => 432,  1559 => 431,  1557 => 430,  1554 => 429,  1547 => 424,  1545 => 420,  1542 => 419,  1540 => 418,  1537 => 417,  1529 => 413,  1526 => 412,  1524 => 411,  1521 => 410,  1513 => 406,  1510 => 405,  1508 => 404,  1506 => 403,  1503 => 402,  1496 => 397,  1490 => 396,  1485 => 395,  1481 => 394,  1476 => 393,  1473 => 392,  1470 => 391,  1464 => 389,  1461 => 388,  1459 => 387,  1456 => 386,  1448 => 380,  1446 => 379,  1445 => 378,  1444 => 377,  1443 => 376,  1438 => 375,  1435 => 374,  1429 => 372,  1426 => 371,  1424 => 370,  1421 => 369,  1412 => 363,  1408 => 419,  1404 => 361,  1400 => 416,  1395 => 359,  1392 => 358,  1386 => 356,  1383 => 412,  1381 => 354,  1378 => 353,  1362 => 349,  1360 => 348,  1357 => 347,  1341 => 397,  1339 => 396,  1336 => 395,  1329 => 336,  1324 => 333,  1322 => 332,  1316 => 330,  1310 => 328,  1304 => 325,  1300 => 324,  1284 => 323,  1281 => 322,  1278 => 321,  1275 => 320,  1272 => 319,  1269 => 318,  1266 => 317,  1263 => 316,  1260 => 315,  1257 => 314,  1255 => 313,  1251 => 368,  1243 => 309,  1238 => 307,  1231 => 358,  1228 => 357,  1225 => 304,  1222 => 303,  1220 => 302,  1217 => 301,  1214 => 300,  1211 => 349,  1208 => 298,  1205 => 297,  1202 => 347,  1199 => 295,  1196 => 294,  1193 => 293,  1191 => 292,  1188 => 291,  1186 => 290,  1183 => 289,  1180 => 288,  1178 => 287,  1175 => 286,  1168 => 332,  1165 => 281,  1161 => 279,  1156 => 276,  1154 => 327,  1148 => 273,  1142 => 271,  1136 => 268,  1132 => 267,  1116 => 266,  1113 => 265,  1110 => 264,  1107 => 263,  1104 => 262,  1101 => 261,  1098 => 313,  1095 => 312,  1092 => 258,  1089 => 257,  1087 => 256,  1084 => 307,  1076 => 253,  1071 => 251,  1064 => 298,  1061 => 249,  1058 => 248,  1055 => 247,  1052 => 246,  1050 => 245,  1047 => 244,  1044 => 243,  1041 => 242,  1038 => 241,  1035 => 240,  1032 => 283,  1029 => 282,  1026 => 237,  1023 => 236,  1020 => 235,  1017 => 234,  1014 => 272,  1012 => 271,  1009 => 270,  1006 => 230,  1003 => 229,  1001 => 228,  998 => 227,  981 => 223,  969 => 221,  962 => 218,  960 => 217,  955 => 252,  952 => 251,  934 => 241,  932 => 213,  929 => 212,  920 => 235,  917 => 206,  914 => 205,  908 => 203,  906 => 202,  901 => 201,  898 => 200,  895 => 199,  880 => 197,  878 => 219,  871 => 195,  868 => 194,  865 => 213,  863 => 192,  860 => 211,  854 => 187,  848 => 186,  842 => 184,  836 => 182,  833 => 199,  829 => 180,  824 => 179,  822 => 178,  819 => 177,  810 => 172,  804 => 170,  801 => 185,  799 => 168,  796 => 183,  789 => 162,  787 => 161,  776 => 159,  773 => 158,  765 => 156,  763 => 244,  760 => 243,  757 => 153,  754 => 152,  752 => 151,  749 => 162,  746 => 161,  743 => 148,  741 => 147,  738 => 146,  735 => 145,  733 => 144,  730 => 143,  723 => 138,  721 => 153,  714 => 232,  711 => 231,  709 => 133,  706 => 132,  698 => 130,  696 => 140,  693 => 128,  690 => 127,  687 => 126,  684 => 125,  681 => 124,  678 => 390,  676 => 385,  673 => 121,  670 => 120,  668 => 119,  665 => 118,  659 => 114,  649 => 122,  647 => 111,  644 => 213,  636 => 107,  628 => 104,  623 => 103,  621 => 102,  616 => 207,  612 => 220,  608 => 98,  604 => 96,  600 => 95,  594 => 212,  591 => 92,  588 => 91,  586 => 90,  583 => 334,  580 => 207,  577 => 206,  574 => 205,  571 => 85,  568 => 84,  565 => 324,  562 => 82,  559 => 201,  556 => 80,  553 => 188,  551 => 199,  548 => 313,  540 => 164,  537 => 176,  534 => 162,  531 => 161,  529 => 191,  526 => 190,  513 => 179,  507 => 165,  505 => 59,  500 => 291,  498 => 57,  495 => 289,  488 => 51,  486 => 286,  470 => 121,  467 => 72,  464 => 275,  458 => 43,  455 => 115,  450 => 114,  447 => 113,  442 => 151,  439 => 150,  429 => 148,  426 => 126,  420 => 146,  414 => 144,  408 => 142,  405 => 141,  396 => 138,  385 => 159,  382 => 17,  380 => 130,  377 => 129,  359 => 144,  357 => 6,  354 => 142,  350 => 26,  347 => 140,  342 => 23,  340 => 136,  335 => 133,  329 => 130,  327 => 102,  324 => 110,  319 => 124,  317 => 107,  307 => 82,  304 => 103,  302 => 79,  299 => 112,  297 => 694,  286 => 98,  284 => 76,  281 => 75,  279 => 104,  276 => 395,  274 => 135,  271 => 108,  266 => 366,  261 => 73,  259 => 87,  253 => 78,  233 => 82,  213 => 69,  210 => 59,  205 => 452,  200 => 73,  188 => 84,  185 => 63,  178 => 46,  175 => 45,  170 => 79,  160 => 57,  155 => 52,  148 => 64,  100 => 43,  14 => 1,  518 => 180,  516 => 294,  512 => 84,  501 => 163,  491 => 157,  481 => 184,  476 => 180,  473 => 168,  463 => 117,  460 => 143,  454 => 156,  452 => 268,  449 => 138,  431 => 34,  419 => 158,  417 => 145,  415 => 127,  411 => 143,  403 => 117,  399 => 139,  395 => 145,  391 => 163,  388 => 42,  376 => 153,  373 => 131,  371 => 35,  369 => 148,  366 => 125,  363 => 32,  361 => 124,  358 => 123,  356 => 119,  353 => 117,  351 => 141,  348 => 118,  345 => 116,  343 => 115,  339 => 191,  336 => 107,  332 => 20,  330 => 103,  313 => 84,  296 => 167,  291 => 99,  289 => 140,  287 => 89,  282 => 161,  270 => 84,  265 => 130,  256 => 79,  251 => 101,  248 => 116,  245 => 83,  232 => 78,  228 => 83,  225 => 67,  223 => 474,  218 => 467,  215 => 126,  212 => 60,  206 => 57,  198 => 55,  195 => 54,  192 => 53,  174 => 64,  165 => 61,  153 => 55,  124 => 51,  84 => 32,  81 => 32,  190 => 49,  186 => 51,  180 => 49,  172 => 51,  150 => 56,  146 => 53,  134 => 28,  126 => 55,  118 => 51,  114 => 50,  90 => 39,  76 => 35,  113 => 44,  110 => 63,  65 => 29,  34 => 15,  58 => 22,  23 => 12,  53 => 22,  480 => 75,  474 => 122,  469 => 158,  461 => 70,  457 => 173,  453 => 151,  444 => 263,  440 => 148,  437 => 61,  435 => 146,  430 => 255,  427 => 162,  423 => 250,  413 => 241,  409 => 132,  407 => 238,  402 => 140,  398 => 88,  393 => 168,  387 => 110,  384 => 109,  381 => 157,  379 => 154,  374 => 128,  368 => 126,  365 => 141,  362 => 8,  360 => 104,  355 => 122,  341 => 131,  337 => 97,  322 => 93,  314 => 88,  312 => 97,  309 => 148,  305 => 115,  298 => 101,  294 => 693,  285 => 111,  283 => 97,  278 => 95,  268 => 3,  264 => 82,  258 => 72,  252 => 68,  247 => 75,  241 => 77,  229 => 73,  220 => 65,  214 => 63,  177 => 65,  169 => 44,  140 => 51,  132 => 57,  128 => 58,  107 => 48,  61 => 27,  273 => 85,  269 => 133,  254 => 147,  243 => 73,  240 => 72,  238 => 84,  235 => 63,  230 => 62,  227 => 80,  224 => 61,  221 => 79,  219 => 101,  217 => 64,  208 => 124,  204 => 57,  179 => 107,  159 => 70,  143 => 59,  135 => 51,  119 => 108,  102 => 37,  71 => 30,  67 => 26,  63 => 17,  59 => 24,  28 => 14,  93 => 35,  88 => 60,  78 => 36,  201 => 56,  196 => 68,  183 => 50,  171 => 44,  166 => 100,  163 => 58,  158 => 55,  156 => 38,  151 => 54,  142 => 30,  138 => 61,  136 => 50,  121 => 52,  117 => 175,  105 => 45,  91 => 37,  62 => 14,  49 => 23,  87 => 36,  46 => 20,  44 => 18,  25 => 12,  21 => 12,  31 => 15,  94 => 41,  89 => 42,  85 => 32,  75 => 21,  68 => 28,  56 => 27,  27 => 14,  38 => 14,  26 => 14,  24 => 13,  19 => 11,  79 => 37,  72 => 29,  69 => 19,  47 => 19,  40 => 17,  37 => 23,  22 => 12,  246 => 67,  157 => 56,  145 => 54,  139 => 60,  131 => 181,  123 => 57,  120 => 46,  115 => 47,  111 => 46,  108 => 171,  101 => 46,  98 => 42,  96 => 44,  83 => 37,  74 => 29,  66 => 32,  55 => 21,  52 => 20,  50 => 21,  43 => 26,  41 => 25,  35 => 20,  32 => 14,  29 => 15,  209 => 58,  203 => 93,  199 => 265,  193 => 429,  189 => 52,  187 => 69,  182 => 85,  176 => 82,  173 => 46,  168 => 43,  164 => 59,  162 => 41,  154 => 67,  149 => 35,  147 => 69,  144 => 26,  141 => 67,  133 => 49,  130 => 49,  125 => 46,  122 => 46,  116 => 48,  112 => 105,  109 => 46,  106 => 54,  103 => 44,  99 => 45,  95 => 38,  92 => 43,  86 => 25,  82 => 38,  80 => 25,  73 => 34,  64 => 19,  60 => 16,  57 => 15,  54 => 23,  51 => 14,  48 => 21,  45 => 21,  42 => 20,  39 => 17,  36 => 16,  33 => 16,  30 => 15,);
    }
}
