<?php

/* themes/t4ddiaspora/templates/node/node--full.html.twig */
class __TwigTemplate_f336c9907ec8ba360d75964b77754288009151476d0520a5efae82d95faea954 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'metainfo' => array($this, 'block_metainfo'),
            'nodefull_specialfields' => array($this, 'block_nodefull_specialfields'),
            'metaengage' => array($this, 'block_metaengage'),
            'nodefull_body' => array($this, 'block_nodefull_body'),
            'nodefull_below_content' => array($this, 'block_nodefull_below_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 70, "if" => 77, "trans" => 88, "block" => 92);
        $filters = array("render" => 133, "without" => 196);
        $functions = array("attach_library" => 67);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'trans', 'block'),
                array('render', 'without'),
                array('attach_library')
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

        // line 66
        echo "
";
        // line 67
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/page-node"), "html", null, true));
        echo "

";
        // line 70
        $context["classes"] = array(0 => "card", 1 => (($this->getAttribute(        // line 72
($context["node"] ?? null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 2 => (( !$this->getAttribute(        // line 73
($context["node"] ?? null), "isPublished", array(), "method")) ? ("node--unpublished") : ("")));
        // line 76
        echo "
";
        // line 77
        if (($context["details_label"] ?? null)) {
            // line 78
            echo "  <h4 class=\"section-title section-title-node\">
    ";
            // line 79
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["details_label"] ?? null), "html", null, true));
            echo "
  </h4>
";
        }
        // line 82
        echo "
<article";
        // line 83
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">

  <div";
        // line 85
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "card__body"), "method"), "html", null, true));
        echo ">

    ";
        // line 87
        if ( !$this->getAttribute(($context["node"] ?? null), "isPublished", array(), "method")) {
            // line 88
            echo "      <div class=\"node--unpublished__label\">";
            echo t("unpublished", array());
            echo "</div>
    ";
        }
        // line 90
        echo "
    ";
        // line 91
        if (($context["display_submitted"] ?? null)) {
            // line 92
            echo "      ";
            $this->displayBlock('metainfo', $context, $blocks);
            // line 120
            echo "    ";
        }
        // line 121
        echo "
    ";
        // line 122
        if (($context["event_date"] ?? null)) {
            // line 123
            echo "      ";
            $this->displayBlock('nodefull_specialfields', $context, $blocks);
            // line 126
            echo "    ";
        }
        // line 127
        echo "

    ";
        // line 129
        if ((($this->getAttribute(($context["node"] ?? null), "isSticky", array(), "method") ||  !twig_test_empty(($context["comment_field_status"] ?? null))) || ($context["logged_in"] ?? null))) {
            // line 130
            echo "      ";
            $this->displayBlock('metaengage', $context, $blocks);
            // line 193
            echo "    ";
        }
        // line 194
        echo "
    ";
        // line 195
        $this->displayBlock('nodefull_body', $context, $blocks);
        // line 198
        echo "

  </div>

</article>

";
        // line 204
        $this->displayBlock('nodefull_below_content', $context, $blocks);
    }

    // line 92
    public function block_metainfo($context, array $blocks = array())
    {
        // line 93
        echo "        <header class=\"metainfo\">

          <div class=\"metainfo__avatar\">
            ";
        // line 96
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true));
        echo "
          </div>

          <div class=\"metainfo__content\">

            ";
        // line 101
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author"] ?? null), "html", null, true));
        echo "
            <span class=\"metainfo__published-date\">&bullet; ";
        // line 102
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["created_date_formatted"] ?? null), "html", null, true));
        echo " </span>
            <div>
              ";
        // line 104
        if (($context["event_type"] ?? null)) {
            // line 105
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["event_type"] ?? null), "html", null, true));
            echo "
              ";
        }
        // line 107
        echo "              ";
        if (($context["topic_type"] ?? null)) {
            // line 108
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topic_type"] ?? null), "html", null, true));
            echo "
              ";
        }
        // line 110
        echo "              ";
        if (($context["group_link"] ?? null)) {
            // line 111
            echo "                ";
            echo t("in group", array());
            // line 112
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["group_link"] ?? null), "html", null, true));
            echo "
              ";
        }
        // line 114
        echo "            </div>

          </div>

        </header>
      ";
    }

    // line 123
    public function block_nodefull_specialfields($context, array $blocks = array())
    {
        // line 124
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
      ";
    }

    // line 130
    public function block_metaengage($context, array $blocks = array())
    {
        // line 131
        echo "        <div class=\"meta-engage\">

          ";
        // line 133
        if (( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "flag_follow_content", array()))) && ($context["logged_in"] ?? null))) {
            // line 134
            echo "            <div class=\"meta-follow\">
              ";
            // line 135
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "flag_follow_content", array()), "html", null, true));
            echo "
            </div>
          ";
        }
        // line 138
        echo "
          ";
        // line 139
        if ($this->getAttribute(($context["node"] ?? null), "isSticky", array(), "method")) {
            // line 140
            echo "            <span class=\"badge badge-accent badge--large\">";
            echo t("Featured", array());
            echo "</span>
          ";
        }
        // line 142
        echo "
          ";
        // line 143
        if ( !twig_test_empty(($context["comment_field_status"] ?? null))) {
            // line 144
            echo "            <a href=\"#section-comments\" class=\"badge badge-default badge--large badge--pill badge--comment-count\" title=\"";
            echo t("Total amount of comments", array());
            echo "\">
              <span class=\"badge__container\">
                <svg class=\"badge__icon\">
                  <use xlink:href=\"#icon-comment\"></use>
                </svg>
                <span class=\"badge__label\">
                  ";
            // line 150
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["comment_count"] ?? null), "html", null, true));
            echo "
                </span>
                <span class=\"badge__label badge__label--description\">
                  ";
            // line 153
            if ((($context["comment_count"] ?? null) == 1)) {
                // line 154
                echo "                    ";
                echo t("comment", array());
                // line 155
                echo "                  ";
            } else {
                // line 156
                echo "                    ";
                echo t("comments", array());
                // line 157
                echo "                  ";
            }
            // line 158
            echo "                </span>
              </span>
            </a>
          ";
        }
        // line 162
        echo "
          ";
        // line 163
        if ( !twig_test_empty(($context["likes_count"] ?? null))) {
            // line 164
            echo "            <div class=\"badge badge-default badge--large badge--pill\">
              <span class=\"badge__container\">
                <svg class=\"badge__icon\">
                  <use xlink:href=\"#icon-like\"></use>
                </svg>
                <span class=\"badge__label\">
                  ";
            // line 170
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["likes_count"] ?? null), "html", null, true));
            echo "
                </span>
                <span class=\"badge__label badge__label--description\">
                  likes
                </span>
              </span>
            </div>
          ";
        }
        // line 178
        echo "
          ";
        // line 179
        if ((($context["visibility_icon"] ?? null) && ($context["visibility_label"] ?? null))) {
            // line 180
            echo "            <div class=\"badge badge-default badge--large badge--pill\" title=\"";
            echo t("The visibility of this content is set to", array());
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["visibility_label"] ?? null), "html", null, true));
            echo "\">
              <span class=\"badge__container\">
                <svg class=\"badge__icon\">
                  <use xlink:href=\"#icon-";
            // line 183
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["visibility_icon"] ?? null), "html", null, true));
            echo "\"></use>
                </svg>
                <span class=\"badge__label\">&nbsp;</span>
                <span class=\"badge__label badge__label--description\">";
            // line 186
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["visibility_label"] ?? null), "html", null, true));
            echo "</span>
              </span>
            </div>
          ";
        }
        // line 190
        echo "
        </div>
        ";
    }

    // line 195
    public function block_nodefull_body($context, array $blocks = array())
    {
        // line 196
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "flag_follow_content"), "html", null, true));
        echo "
    ";
    }

    // line 204
    public function block_nodefull_below_content($context, array $blocks = array())
    {
        // line 205
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["below_content"] ?? null), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/node/node--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 205,  356 => 204,  349 => 196,  346 => 195,  340 => 190,  333 => 186,  327 => 183,  318 => 180,  316 => 179,  313 => 178,  302 => 170,  294 => 164,  292 => 163,  289 => 162,  283 => 158,  280 => 157,  277 => 156,  274 => 155,  271 => 154,  269 => 153,  263 => 150,  253 => 144,  251 => 143,  248 => 142,  242 => 140,  240 => 139,  237 => 138,  231 => 135,  228 => 134,  226 => 133,  222 => 131,  219 => 130,  212 => 124,  209 => 123,  200 => 114,  194 => 112,  191 => 111,  188 => 110,  182 => 108,  179 => 107,  173 => 105,  171 => 104,  166 => 102,  162 => 101,  154 => 96,  149 => 93,  146 => 92,  142 => 204,  134 => 198,  132 => 195,  129 => 194,  126 => 193,  123 => 130,  121 => 129,  117 => 127,  114 => 126,  111 => 123,  109 => 122,  106 => 121,  103 => 120,  100 => 92,  98 => 91,  95 => 90,  89 => 88,  87 => 87,  82 => 85,  77 => 83,  74 => 82,  68 => 79,  65 => 78,  63 => 77,  60 => 76,  58 => 73,  57 => 72,  56 => 70,  51 => 67,  48 => 66,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/t4ddiaspora/templates/node/node--full.html.twig", "/var/www/vhosts/mrutimes.com/adiasporai.com/html/themes/t4ddiaspora/templates/node/node--full.html.twig");
    }
}
