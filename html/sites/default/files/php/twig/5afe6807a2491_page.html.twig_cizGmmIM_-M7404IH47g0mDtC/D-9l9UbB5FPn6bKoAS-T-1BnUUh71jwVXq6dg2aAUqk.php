<?php

/* themes/t4ddiaspora/templates/layout/page.html.twig */
class __TwigTemplate_0e1ec8e59a264a724471ed899a1a69c7c0bfe26a9565d9756f108db397a98584 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'section' => array($this, 'block_section'),
            'content' => array($this, 'block_content'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 36, "block" => 91);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'block'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 35
        echo "
";
        // line 36
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 37
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
";
        }
        // line 39
        echo "
<main id=\"content\" class=\"main-container\" role=\"main\">

  ";
        // line 42
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", array())) {
            // line 43
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
            echo "
  ";
        }
        // line 45
        echo "
  ";
        // line 46
        if ($this->getAttribute(($context["page"] ?? null), "hero", array())) {
            // line 47
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "hero", array()), "html", null, true));
            echo "
  ";
        }
        // line 49
        echo "
  ";
        // line 50
        if ($this->getAttribute(($context["page"] ?? null), "secondary_navigation", array())) {
            // line 51
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "secondary_navigation", array()), "html", null, true));
            echo "
  ";
        }
        // line 53
        echo "
  ";
        // line 54
        if ($this->getAttribute(($context["page"] ?? null), "content_top_cta", array())) {
            // line 55
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top_cta", array()), "html", null, true));
            echo "
  ";
        }
        // line 57
        echo "
  ";
        // line 58
        if ($this->getAttribute(($context["page"] ?? null), "content_top_two", array())) {
            // line 59
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top_two", array()), "html", null, true));
            echo "
  ";
        }
        // line 61
        echo "
  <div class=\"row\"
    ";
        // line 63
        if ($this->getAttribute(($context["page"] ?? null), "content_top_three_first", array())) {
            // line 64
            echo "      <div class=\"col-md-4 card\">
        ";
            // line 65
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top_three_first", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 68
        echo "
    ";
        // line 69
        if ($this->getAttribute(($context["page"] ?? null), "content_top_three_second", array())) {
            // line 70
            echo "      <div class=\"col-md-4 card\">
        ";
            // line 71
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top_three_second", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 74
        echo "
    ";
        // line 75
        if ($this->getAttribute(($context["page"] ?? null), "content_top_three_third", array())) {
            // line 76
            echo "      <div class=\"col-md-4 card\">
        ";
            // line 77
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top_three_third", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 80
        echo "  </div>

  ";
        // line 82
        if ($this->getAttribute(($context["page"] ?? null), "content_top_three", array())) {
            // line 83
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top_three", array()), "html", null, true));
            echo "
  ";
        }
        // line 85
        echo "
  ";
        // line 86
        if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
            // line 87
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
            echo "
  ";
        }
        // line 89
        echo "
  ";
        // line 91
        echo "  ";
        $this->displayBlock('section', $context, $blocks);
        // line 130
        echo "
  ";
        // line 131
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom_cta", array())) {
            // line 132
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom_cta", array()), "html", null, true));
            echo "
  ";
        }
        // line 134
        echo "
  ";
        // line 135
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom_two", array())) {
            // line 136
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom_two", array()), "html", null, true));
            echo "
  ";
        }
        // line 138
        echo "
  ";
        // line 139
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom_three", array())) {
            // line 140
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom_three", array()), "html", null, true));
            echo "
  ";
        }
        // line 142
        echo "
  ";
        // line 143
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", array())) {
            // line 144
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom", array()), "html", null, true));
            echo "
  ";
        }
        // line 146
        echo "
</main>

";
        // line 149
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 150
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
";
        }
    }

    // line 91
    public function block_section($context, array $blocks = array())
    {
        // line 92
        echo "    <section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_attributes"] ?? null), "html", null, true));
        echo ">

      ";
        // line 94
        if (($this->getAttribute(($context["page"] ?? null), "title", array()) && ($context["display_page_title"] ?? null))) {
            // line 95
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "title", array()), "html", null, true));
            echo "
      ";
        }
        // line 97
        echo "
      ";
        // line 98
        if (($this->getAttribute(($context["page"] ?? null), "complementary_top", array()) || $this->getAttribute(($context["page"] ?? null), "complementary_bottom", array()))) {
            // line 99
            echo "        <aside class=\"region--complementary\" role=\"complementary\">
          ";
            // line 100
            if ($this->getAttribute(($context["page"] ?? null), "complementary_top", array())) {
                // line 101
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "complementary_top", array()), "html", null, true));
                echo "
          ";
            }
            // line 103
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "complementary_bottom", array())) {
                // line 104
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "complementary_bottom", array()), "html", null, true));
                echo "
          ";
            }
            // line 106
            echo "        </aside>
      ";
        }
        // line 108
        echo "
      ";
        // line 109
        $this->displayBlock('content', $context, $blocks);
        // line 113
        echo "
      ";
        // line 115
        echo "      ";
        if ((($this->getAttribute(($context["page"] ?? null), "sidebar_first", array()) &&  !$this->getAttribute(($context["page"] ?? null), "complementary_top", array())) &&  !$this->getAttribute(($context["page"] ?? null), "complementary_bottom", array()))) {
            // line 116
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 119
            echo "      ";
        }
        // line 120
        echo "
      ";
        // line 122
        echo "      ";
        if ((($this->getAttribute(($context["page"] ?? null), "sidebar_second", array()) &&  !$this->getAttribute(($context["page"] ?? null), "complementary_top", array())) &&  !$this->getAttribute(($context["page"] ?? null), "complementary_bottom", array()))) {
            // line 123
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 126
            echo "      ";
        }
        // line 127
        echo "
    </section>
  ";
    }

    // line 109
    public function block_content($context, array $blocks = array())
    {
        // line 110
        echo "        <a id=\"main-content\" tabindex=\"-1\"></a>
        ";
        // line 111
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
      ";
    }

    // line 116
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 117
        echo "          ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
        echo "
        ";
    }

    // line 123
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 124
        echo "          ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 124,  349 => 123,  342 => 117,  339 => 116,  333 => 111,  330 => 110,  327 => 109,  321 => 127,  318 => 126,  315 => 123,  312 => 122,  309 => 120,  306 => 119,  303 => 116,  300 => 115,  297 => 113,  295 => 109,  292 => 108,  288 => 106,  282 => 104,  279 => 103,  273 => 101,  271 => 100,  268 => 99,  266 => 98,  263 => 97,  257 => 95,  255 => 94,  249 => 92,  246 => 91,  238 => 150,  236 => 149,  231 => 146,  225 => 144,  223 => 143,  220 => 142,  214 => 140,  212 => 139,  209 => 138,  203 => 136,  201 => 135,  198 => 134,  192 => 132,  190 => 131,  187 => 130,  184 => 91,  181 => 89,  175 => 87,  173 => 86,  170 => 85,  164 => 83,  162 => 82,  158 => 80,  152 => 77,  149 => 76,  147 => 75,  144 => 74,  138 => 71,  135 => 70,  133 => 69,  130 => 68,  124 => 65,  121 => 64,  119 => 63,  115 => 61,  109 => 59,  107 => 58,  104 => 57,  98 => 55,  96 => 54,  93 => 53,  87 => 51,  85 => 50,  82 => 49,  76 => 47,  74 => 46,  71 => 45,  65 => 43,  63 => 42,  58 => 39,  52 => 37,  50 => 36,  47 => 35,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/t4ddiaspora/templates/layout/page.html.twig", "/var/www/vhosts/mrutimes.com/adiasporai.com/html/themes/t4ddiaspora/templates/layout/page.html.twig");
    }
}
