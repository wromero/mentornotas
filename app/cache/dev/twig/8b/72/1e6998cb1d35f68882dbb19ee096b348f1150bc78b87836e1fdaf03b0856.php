<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_one.html.twig */
class __TwigTemplate_8b721e6998cb1d35f68882dbb19ee096b348f1150bc78b87836e1fdaf03b0856 extends Twig_Template
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
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 16
            echo "        ";
            if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasAssociationAdmin") && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "isGranted", array(0 => "EDIT"), "method"))) {
                // line 17
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 19
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "
        ";
            }
            // line 21
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 11,  338 => 130,  323 => 125,  315 => 123,  301 => 117,  277 => 109,  262 => 105,  257 => 103,  239 => 97,  97 => 47,  127 => 54,  167 => 48,  70 => 24,  211 => 81,  137 => 37,  77 => 27,  1414 => 421,  1402 => 417,  1398 => 415,  1394 => 414,  1385 => 413,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1249 => 367,  1246 => 366,  1237 => 360,  1223 => 356,  1221 => 355,  1218 => 354,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1162 => 330,  1159 => 329,  1157 => 328,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1088 => 308,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1027 => 281,  1024 => 280,  1016 => 276,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  931 => 240,  923 => 236,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  876 => 218,  873 => 217,  862 => 212,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  798 => 184,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  739 => 156,  729 => 155,  724 => 154,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  695 => 139,  694 => 138,  689 => 137,  683 => 135,  680 => 134,  675 => 132,  666 => 126,  662 => 125,  658 => 124,  654 => 123,  643 => 120,  640 => 119,  638 => 118,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  550 => 94,  547 => 93,  527 => 91,  524 => 90,  515 => 85,  509 => 83,  503 => 81,  496 => 79,  493 => 78,  490 => 77,  478 => 74,  459 => 69,  456 => 68,  433 => 60,  428 => 59,  400 => 47,  390 => 43,  344 => 24,  316 => 16,  311 => 14,  308 => 13,  293 => 113,  290 => 5,  288 => 4,  263 => 365,  260 => 104,  255 => 353,  250 => 341,  222 => 297,  207 => 269,  202 => 68,  197 => 74,  194 => 248,  191 => 81,  184 => 233,  181 => 232,  161 => 202,  129 => 59,  104 => 46,  2767 => 862,  2758 => 861,  2756 => 860,  2753 => 859,  2735 => 855,  2728 => 854,  2725 => 853,  2722 => 852,  2719 => 851,  2716 => 850,  2714 => 849,  2711 => 848,  2687 => 844,  2662 => 843,  2660 => 842,  2657 => 841,  2645 => 836,  2642 => 835,  2639 => 834,  2636 => 833,  2633 => 832,  2630 => 831,  2627 => 830,  2624 => 829,  2621 => 828,  2618 => 827,  2615 => 826,  2612 => 825,  2609 => 824,  2606 => 823,  2603 => 822,  2600 => 821,  2597 => 820,  2592 => 819,  2590 => 818,  2587 => 817,  2578 => 811,  2572 => 809,  2569 => 808,  2564 => 807,  2562 => 806,  2559 => 805,  2553 => 801,  2549 => 799,  2547 => 798,  2544 => 797,  2535 => 795,  2531 => 794,  2524 => 793,  2520 => 791,  2517 => 790,  2515 => 789,  2512 => 788,  2509 => 787,  2506 => 786,  2504 => 785,  2501 => 784,  2498 => 783,  2495 => 782,  2493 => 781,  2490 => 780,  2482 => 776,  2479 => 775,  2476 => 774,  2473 => 773,  2465 => 769,  2463 => 768,  2460 => 767,  2451 => 762,  2448 => 761,  2442 => 759,  2439 => 758,  2433 => 756,  2430 => 755,  2424 => 753,  2421 => 752,  2415 => 750,  2413 => 749,  2410 => 748,  2404 => 746,  2401 => 745,  2399 => 744,  2396 => 743,  2387 => 738,  2385 => 737,  2361 => 736,  2358 => 735,  2355 => 734,  2352 => 733,  2350 => 732,  2347 => 731,  2341 => 729,  2339 => 728,  2336 => 727,  2330 => 725,  2328 => 724,  2325 => 723,  2319 => 721,  2317 => 720,  2314 => 719,  2308 => 717,  2306 => 716,  2303 => 715,  2297 => 713,  2294 => 712,  2292 => 711,  2289 => 710,  2286 => 709,  2283 => 708,  2280 => 707,  2277 => 706,  2274 => 705,  2271 => 704,  2269 => 703,  2266 => 702,  2259 => 698,  2255 => 697,  2250 => 696,  2248 => 695,  2245 => 694,  2238 => 689,  2235 => 688,  2228 => 685,  2225 => 684,  2217 => 678,  2215 => 677,  2210 => 675,  2207 => 674,  2196 => 672,  2193 => 671,  2191 => 670,  2188 => 669,  2185 => 668,  2183 => 667,  2180 => 666,  2177 => 665,  2174 => 664,  2171 => 663,  2168 => 662,  2165 => 661,  2162 => 660,  2159 => 659,  2156 => 658,  2153 => 657,  2150 => 656,  2147 => 655,  2145 => 654,  2142 => 653,  2139 => 652,  2136 => 651,  2134 => 650,  2131 => 649,  2122 => 644,  2119 => 643,  2116 => 642,  2113 => 641,  2110 => 640,  2107 => 639,  2105 => 638,  2102 => 637,  2093 => 632,  2089 => 630,  2083 => 628,  2081 => 627,  2076 => 626,  2070 => 624,  2068 => 623,  2063 => 622,  2060 => 621,  2057 => 620,  2054 => 619,  2051 => 618,  2048 => 617,  2045 => 616,  2042 => 615,  2039 => 614,  2036 => 613,  2033 => 612,  2030 => 611,  2027 => 610,  2025 => 609,  2022 => 608,  2015 => 604,  2011 => 602,  2006 => 600,  2002 => 599,  1998 => 598,  1993 => 597,  1987 => 594,  1983 => 593,  1979 => 592,  1973 => 591,  1968 => 590,  1966 => 589,  1960 => 588,  1957 => 587,  1954 => 586,  1952 => 585,  1949 => 584,  1946 => 583,  1943 => 582,  1940 => 581,  1937 => 580,  1934 => 579,  1931 => 578,  1928 => 577,  1925 => 576,  1922 => 575,  1919 => 574,  1916 => 573,  1914 => 572,  1911 => 571,  1908 => 570,  1905 => 569,  1903 => 568,  1900 => 567,  1892 => 563,  1890 => 559,  1888 => 558,  1885 => 557,  1880 => 553,  1858 => 548,  1855 => 547,  1852 => 546,  1849 => 545,  1846 => 544,  1843 => 543,  1840 => 542,  1837 => 541,  1834 => 540,  1832 => 539,  1829 => 538,  1826 => 537,  1823 => 536,  1820 => 535,  1817 => 534,  1814 => 533,  1812 => 532,  1809 => 531,  1806 => 530,  1803 => 529,  1801 => 528,  1798 => 527,  1795 => 526,  1792 => 525,  1790 => 524,  1787 => 523,  1784 => 522,  1781 => 521,  1778 => 520,  1775 => 519,  1772 => 518,  1769 => 517,  1766 => 516,  1763 => 515,  1761 => 514,  1758 => 513,  1755 => 512,  1753 => 511,  1750 => 510,  1742 => 505,  1738 => 504,  1733 => 503,  1730 => 502,  1722 => 498,  1719 => 497,  1717 => 496,  1714 => 495,  1706 => 491,  1703 => 490,  1701 => 489,  1698 => 488,  1683 => 484,  1680 => 483,  1677 => 482,  1674 => 481,  1671 => 480,  1668 => 479,  1665 => 478,  1662 => 477,  1659 => 476,  1657 => 475,  1654 => 474,  1646 => 470,  1643 => 469,  1641 => 468,  1638 => 467,  1630 => 463,  1627 => 462,  1625 => 461,  1622 => 460,  1614 => 456,  1611 => 455,  1609 => 454,  1606 => 453,  1597 => 447,  1594 => 446,  1591 => 445,  1589 => 444,  1586 => 443,  1578 => 439,  1575 => 438,  1573 => 437,  1570 => 436,  1562 => 432,  1559 => 431,  1557 => 430,  1554 => 429,  1547 => 424,  1545 => 420,  1542 => 419,  1540 => 418,  1537 => 417,  1529 => 413,  1526 => 412,  1524 => 411,  1521 => 410,  1513 => 406,  1510 => 405,  1508 => 404,  1506 => 403,  1503 => 402,  1496 => 397,  1490 => 396,  1485 => 395,  1481 => 394,  1476 => 393,  1473 => 392,  1470 => 391,  1464 => 389,  1461 => 388,  1459 => 387,  1456 => 386,  1448 => 380,  1446 => 379,  1445 => 378,  1444 => 377,  1443 => 376,  1438 => 375,  1435 => 374,  1429 => 372,  1426 => 371,  1424 => 370,  1421 => 369,  1412 => 363,  1408 => 419,  1404 => 361,  1400 => 416,  1395 => 359,  1392 => 358,  1386 => 356,  1383 => 412,  1381 => 354,  1378 => 353,  1362 => 349,  1360 => 348,  1357 => 347,  1341 => 397,  1339 => 396,  1336 => 395,  1329 => 336,  1324 => 333,  1322 => 332,  1316 => 330,  1310 => 328,  1304 => 325,  1300 => 324,  1284 => 323,  1281 => 322,  1278 => 321,  1275 => 320,  1272 => 319,  1269 => 318,  1266 => 317,  1263 => 316,  1260 => 315,  1257 => 314,  1255 => 313,  1251 => 368,  1243 => 309,  1238 => 307,  1231 => 358,  1228 => 357,  1225 => 304,  1222 => 303,  1220 => 302,  1217 => 301,  1214 => 300,  1211 => 349,  1208 => 298,  1205 => 297,  1202 => 347,  1199 => 295,  1196 => 294,  1193 => 293,  1191 => 292,  1188 => 291,  1186 => 290,  1183 => 289,  1180 => 288,  1178 => 287,  1175 => 286,  1168 => 332,  1165 => 281,  1161 => 279,  1156 => 276,  1154 => 327,  1148 => 273,  1142 => 271,  1136 => 268,  1132 => 267,  1116 => 266,  1113 => 265,  1110 => 264,  1107 => 263,  1104 => 262,  1101 => 261,  1098 => 313,  1095 => 312,  1092 => 258,  1089 => 257,  1087 => 256,  1084 => 307,  1076 => 253,  1071 => 251,  1064 => 298,  1061 => 249,  1058 => 248,  1055 => 247,  1052 => 246,  1050 => 245,  1047 => 244,  1044 => 243,  1041 => 242,  1038 => 241,  1035 => 240,  1032 => 283,  1029 => 282,  1026 => 237,  1023 => 236,  1020 => 235,  1017 => 234,  1014 => 272,  1012 => 271,  1009 => 270,  1006 => 230,  1003 => 229,  1001 => 228,  998 => 227,  981 => 223,  969 => 221,  962 => 218,  960 => 217,  955 => 252,  952 => 251,  934 => 241,  932 => 213,  929 => 212,  920 => 235,  917 => 206,  914 => 205,  908 => 203,  906 => 202,  901 => 201,  898 => 200,  895 => 199,  880 => 197,  878 => 219,  871 => 195,  868 => 194,  865 => 213,  863 => 192,  860 => 211,  854 => 187,  848 => 186,  842 => 184,  836 => 182,  833 => 199,  829 => 180,  824 => 179,  822 => 178,  819 => 177,  810 => 172,  804 => 170,  801 => 185,  799 => 168,  796 => 183,  789 => 162,  787 => 161,  776 => 159,  773 => 158,  765 => 156,  763 => 155,  760 => 154,  757 => 153,  754 => 152,  752 => 151,  749 => 162,  746 => 161,  743 => 148,  741 => 147,  738 => 146,  735 => 145,  733 => 144,  730 => 143,  723 => 138,  721 => 153,  714 => 135,  711 => 134,  709 => 133,  706 => 132,  698 => 130,  696 => 140,  693 => 128,  690 => 127,  687 => 126,  684 => 125,  681 => 124,  678 => 133,  676 => 122,  673 => 121,  670 => 120,  668 => 119,  665 => 118,  659 => 114,  649 => 122,  647 => 111,  644 => 110,  636 => 107,  628 => 104,  623 => 103,  621 => 102,  616 => 100,  612 => 99,  608 => 98,  604 => 96,  600 => 95,  594 => 93,  591 => 92,  588 => 91,  586 => 90,  583 => 89,  580 => 88,  577 => 87,  574 => 86,  571 => 85,  568 => 84,  565 => 83,  562 => 82,  559 => 81,  556 => 80,  553 => 79,  551 => 78,  548 => 77,  540 => 73,  537 => 72,  534 => 71,  531 => 70,  529 => 92,  526 => 68,  513 => 62,  507 => 60,  505 => 59,  500 => 58,  498 => 57,  495 => 56,  488 => 51,  486 => 50,  470 => 73,  467 => 72,  464 => 71,  458 => 43,  455 => 42,  450 => 64,  447 => 39,  442 => 62,  439 => 36,  429 => 33,  426 => 58,  420 => 30,  414 => 52,  408 => 50,  405 => 49,  396 => 22,  385 => 41,  382 => 17,  380 => 16,  377 => 37,  359 => 7,  357 => 6,  354 => 5,  350 => 26,  347 => 134,  342 => 23,  340 => 841,  335 => 21,  329 => 814,  327 => 126,  324 => 804,  319 => 124,  317 => 773,  307 => 743,  304 => 742,  302 => 702,  299 => 116,  297 => 694,  286 => 687,  284 => 684,  281 => 110,  279 => 649,  276 => 395,  274 => 637,  271 => 108,  266 => 366,  261 => 566,  259 => 557,  253 => 1,  233 => 81,  213 => 82,  210 => 73,  205 => 452,  200 => 52,  188 => 417,  185 => 59,  178 => 402,  175 => 53,  170 => 95,  160 => 44,  155 => 346,  148 => 60,  100 => 23,  14 => 1,  518 => 63,  516 => 3,  512 => 84,  501 => 80,  491 => 186,  481 => 184,  476 => 180,  473 => 48,  463 => 175,  460 => 174,  454 => 172,  452 => 41,  449 => 170,  431 => 34,  419 => 158,  417 => 29,  415 => 156,  411 => 27,  403 => 48,  399 => 23,  395 => 145,  391 => 20,  388 => 42,  376 => 133,  373 => 131,  371 => 35,  369 => 128,  366 => 33,  363 => 32,  361 => 122,  358 => 139,  356 => 119,  353 => 117,  351 => 135,  348 => 114,  345 => 848,  343 => 132,  339 => 108,  336 => 107,  332 => 20,  330 => 103,  313 => 15,  296 => 99,  291 => 691,  289 => 112,  287 => 93,  282 => 90,  270 => 4,  265 => 106,  256 => 556,  251 => 101,  248 => 100,  245 => 335,  232 => 66,  228 => 88,  225 => 87,  223 => 474,  218 => 467,  215 => 280,  212 => 74,  206 => 71,  198 => 66,  195 => 83,  192 => 64,  174 => 67,  165 => 47,  153 => 341,  124 => 59,  84 => 16,  81 => 15,  190 => 92,  186 => 90,  180 => 56,  172 => 51,  150 => 60,  146 => 181,  134 => 56,  126 => 147,  118 => 51,  114 => 50,  90 => 20,  76 => 37,  113 => 31,  110 => 55,  65 => 83,  34 => 16,  58 => 29,  23 => 12,  53 => 23,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 173,  453 => 151,  444 => 38,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 162,  423 => 57,  413 => 155,  409 => 132,  407 => 151,  402 => 24,  398 => 129,  393 => 21,  387 => 122,  384 => 140,  381 => 137,  379 => 136,  374 => 36,  368 => 34,  365 => 141,  362 => 8,  360 => 109,  355 => 27,  341 => 131,  337 => 22,  322 => 780,  314 => 772,  312 => 767,  309 => 120,  305 => 119,  298 => 91,  294 => 693,  285 => 111,  283 => 88,  278 => 410,  268 => 3,  264 => 2,  258 => 354,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 290,  214 => 69,  177 => 54,  169 => 49,  140 => 56,  132 => 51,  128 => 50,  107 => 52,  61 => 32,  273 => 394,  269 => 608,  254 => 102,  243 => 83,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 71,  221 => 79,  219 => 84,  217 => 289,  208 => 72,  204 => 78,  179 => 224,  159 => 91,  143 => 59,  135 => 211,  119 => 46,  102 => 38,  71 => 25,  67 => 25,  63 => 30,  59 => 20,  28 => 14,  93 => 21,  88 => 22,  78 => 27,  201 => 55,  196 => 65,  183 => 410,  171 => 84,  166 => 42,  163 => 45,  158 => 62,  156 => 41,  151 => 188,  142 => 35,  138 => 57,  136 => 168,  121 => 47,  117 => 34,  105 => 51,  91 => 28,  62 => 82,  49 => 9,  87 => 32,  46 => 20,  44 => 19,  25 => 12,  21 => 11,  31 => 15,  94 => 35,  89 => 43,  85 => 41,  75 => 34,  68 => 34,  56 => 23,  27 => 8,  38 => 6,  26 => 14,  24 => 12,  19 => 11,  79 => 37,  72 => 25,  69 => 24,  47 => 43,  40 => 18,  37 => 17,  22 => 1,  246 => 99,  157 => 56,  145 => 72,  139 => 70,  131 => 55,  123 => 29,  120 => 36,  115 => 33,  111 => 30,  108 => 28,  101 => 25,  98 => 24,  96 => 25,  83 => 41,  74 => 24,  66 => 29,  55 => 21,  52 => 20,  50 => 22,  43 => 5,  41 => 18,  35 => 15,  32 => 16,  29 => 15,  209 => 55,  203 => 443,  199 => 265,  193 => 429,  189 => 61,  187 => 60,  182 => 57,  176 => 97,  173 => 96,  168 => 369,  164 => 93,  162 => 92,  154 => 40,  149 => 85,  147 => 59,  144 => 83,  141 => 175,  133 => 64,  130 => 78,  125 => 61,  122 => 26,  116 => 45,  112 => 42,  109 => 53,  106 => 54,  103 => 50,  99 => 47,  95 => 22,  92 => 45,  86 => 17,  82 => 39,  80 => 28,  73 => 36,  64 => 28,  60 => 22,  57 => 80,  54 => 15,  51 => 21,  48 => 21,  45 => 19,  42 => 18,  39 => 17,  36 => 17,  33 => 13,  30 => 9,);
    }
}
