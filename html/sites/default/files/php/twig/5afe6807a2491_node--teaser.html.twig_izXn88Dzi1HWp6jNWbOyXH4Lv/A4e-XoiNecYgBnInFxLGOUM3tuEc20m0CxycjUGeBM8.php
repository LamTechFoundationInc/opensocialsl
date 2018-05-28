<?php

/* node--teaser.html.twig */
class __TwigTemplate_56b763da28339bcfe73d478a482d7c38950dfe49c209001ca4dae21c1cc26dce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'card_teaser_type' => array($this, 'block_card_teaser_type'),
            'card_image' => array($this, 'block_card_image'),
            'card_body' => array($this, 'block_card_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 72, "if" => 87, "block" => 88, "trans" => 166, "embed" => 128);
        $filters = array("clean_class" => 92);
        $functions = array("attach_library" => 69);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block', 'trans', 'embed'),
                array('clean_class'),
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

        // line 68
        echo "
";
        // line 69
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/teaser"), "html", null, true));
        echo "

";
        // line 72
        $context["classes"] = array(0 => "teaser", 1 => (((        // line 74
($context["view_mode"] ?? null) == "teaser")) ? ("card") : ("")), 2 => (((        // line 75
($context["view_mode"] ?? null) == "activity")) ? ("teaser--stream") : ("")), 3 => (((        // line 76
($context["view_mode"] ?? null) == "activity_comment")) ? ("teaser--stream") : ("")), 4 => (($this->getAttribute(        // line 77
($context["node"] ?? null), "isPromoted", array(), "method")) ? ("promoted") : ("")), 5 => (($this->getAttribute(        // line 78
($context["node"] ?? null), "isSticky", array(), "method")) ? ("sticky") : ("")), 6 => (( !$this->getAttribute(        // line 79
($context["node"] ?? null), "isPublished", array(), "method")) ? ("teaser--unpublished") : ("")));
        // line 82
        echo "
<div";
        // line 83
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">

  <div class='teaser__image'>

    ";
        // line 87
        if ((($context["view_mode"] ?? null) == "teaser")) {
            // line 88
            echo "      ";
            $this->displayBlock('card_teaser_type', $context, $blocks);
            // line 97
            echo "    ";
        }
        // line 98
        echo "
    ";
        // line 100
        echo "    ";
        $this->displayBlock('card_image', $context, $blocks);
        // line 107
        echo "
    ";
        // line 108
        if (($context["status_label"] ?? null)) {
            // line 109
            echo "      <div class=\"status\">
        ";
            // line 110
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["status_label"] ?? null), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 113
        echo "
  </div>

  <div class='teaser__body'>
    <div class=\"teaser__content\">
      ";
        // line 118
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
      ";
        // line 119
        if ( !($context["page"] ?? null)) {
            // line 120
            echo "        <h4";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_attributes"] ?? null), "html", null, true));
            echo " class=\"teaser__title\">
            <a href=\"";
            // line 121
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</a>
        </h4>
      ";
        }
        // line 124
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

      ";
        // line 126
        $this->displayBlock('card_body', $context, $blocks);
        // line 150
        echo "    </div>

    <div class=\"card__actionbar\">

        ";
        // line 154
        if ((($context["comment_count"] ?? null) > 0)) {
            // line 155
            echo "          <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "#section-comments\" class=\"badge badge--pill badge-default teaser__badge\">
            <span class=\"badge__container\">
              <svg class=\"badge__icon\">
                <use xlink:href=\"#icon-comment\"></use>
              </svg>
              <span class=\"badge__label\">";
            // line 160
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["comment_count"] ?? null), "html", null, true));
            echo "</span>
            </span>
          </a>
        ";
        }
        // line 164
        echo "
        ";
        // line 165
        if ((($context["visibility_icon"] ?? null) && ($context["visibility_label"] ?? null))) {
            // line 166
            echo "          <div class=\"badge teaser__badge\" title=\"";
            echo t("The visibility of this content is set to", array());
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["visibility_label"] ?? null), "html", null, true));
            echo "\">
              <svg class=\"badge__icon\">
                <use xlink:href=\"#icon-";
            // line 168
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["visibility_icon"] ?? null), "html", null, true));
            echo "\"></use>
              </svg>
          </div>
        ";
        }
        // line 172
        echo "
        ";
        // line 173
        if ($this->getAttribute(($context["content"] ?? null), "enrolled", array())) {
            // line 174
            echo "          <span class=\"badge badge-secondary teaser__badge\">";
            // line 175
            echo t("Enrolled", array());
            // line 176
            echo "</span>
        ";
        }
        // line 178
        echo "
      ";
        // line 179
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "links", array()), "html", null, true));
        echo "
    </div>

  </div>

</div>

";
        // line 186
        if (((($context["view_mode"] ?? null) == "activity") && $this->getAttribute(($context["content"] ?? null), "field_book_comments", array()))) {
            // line 187
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_book_comments", array()), "html", null, true));
            echo "
";
        }
    }

    // line 88
    public function block_card_teaser_type($context, array $blocks = array())
    {
        // line 89
        echo "
        <div class=\"teaser__teaser-type\">
          <svg class=\"teaser__teaser-type-icon\">
            <use xlink:href=\"#icon-";
        // line 92
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->getAttribute(($context["node"] ?? null), "bundle", array())), "html", null, true));
        echo "\"></use>
          </svg>
        </div>

      ";
    }

    // line 100
    public function block_card_image($context, array $blocks = array())
    {
        // line 101
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_event_image", array()), "html", null, true));
        echo "
      ";
        // line 102
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_topic_image", array()), "html", null, true));
        echo "
      ";
        // line 103
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_page_image", array()), "html", null, true));
        echo "
      ";
        // line 104
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_book_image", array()), "html", null, true));
        echo "
      ";
        // line 105
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_image", array()), "html", null, true));
        echo "
    ";
    }

    // line 126
    public function block_card_body($context, array $blocks = array())
    {
        // line 127
        echo "
        ";
        // line 128
        $this->loadTemplate("node--teaser.html.twig", "node--teaser.html.twig", 128, "1528436860")->display($context);
        // line 137
        echo "
        ";
        // line 138
        if ($this->getAttribute(($context["content"] ?? null), "group_name", array())) {
            // line 139
            echo "          ";
            $this->loadTemplate("node--teaser.html.twig", "node--teaser.html.twig", 139, "1614846874")->display($context);
            // line 143
            echo "        ";
        }
        // line 144
        echo "
        ";
        // line 145
        $this->loadTemplate("node--teaser.html.twig", "node--teaser.html.twig", 145, "857149173")->display($context);
        // line 148
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "node--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 148,  279 => 145,  276 => 144,  273 => 143,  270 => 139,  268 => 138,  265 => 137,  263 => 128,  260 => 127,  257 => 126,  251 => 105,  247 => 104,  243 => 103,  239 => 102,  234 => 101,  231 => 100,  222 => 92,  217 => 89,  214 => 88,  206 => 187,  204 => 186,  194 => 179,  191 => 178,  187 => 176,  185 => 175,  183 => 174,  181 => 173,  178 => 172,  171 => 168,  163 => 166,  161 => 165,  158 => 164,  151 => 160,  142 => 155,  140 => 154,  134 => 150,  132 => 126,  126 => 124,  118 => 121,  113 => 120,  111 => 119,  107 => 118,  100 => 113,  94 => 110,  91 => 109,  89 => 108,  86 => 107,  83 => 100,  80 => 98,  77 => 97,  74 => 88,  72 => 87,  65 => 83,  62 => 82,  60 => 79,  59 => 78,  58 => 77,  57 => 76,  56 => 75,  55 => 74,  54 => 72,  49 => 69,  46 => 68,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "node--teaser.html.twig", "themes/t4ddiaspora/templates/node/node--teaser.html.twig");
    }
}


/* node--teaser.html.twig */
class __TwigTemplate_56b763da28339bcfe73d478a482d7c38950dfe49c209001ca4dae21c1cc26dce_1528436860 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 128
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--teaser.html.twig", 128);
        $this->blocks = array(
            'field_icon' => array($this, 'block_field_icon'),
            'field_value' => array($this, 'block_field_value'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 129
    public function block_field_icon($context, array $blocks = array())
    {
        echo "account_circle";
    }

    // line 130
    public function block_field_value($context, array $blocks = array())
    {
        // line 131
        echo "            <div class=\"teaser__published\">
              <div class=\"teaser__published-date\"> ";
        // line 132
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["date"] ?? null), "html", null, true));
        echo " &bullet; </div>
              <div class=\"teaser__published-author\"> ";
        // line 133
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_name"] ?? null), "html", null, true));
        echo " </div>
            </div>";
    }

    public function getTemplateName()
    {
        return "node--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 133,  377 => 132,  374 => 131,  371 => 130,  365 => 129,  323 => 128,  281 => 148,  279 => 145,  276 => 144,  273 => 143,  270 => 139,  268 => 138,  265 => 137,  263 => 128,  260 => 127,  257 => 126,  251 => 105,  247 => 104,  243 => 103,  239 => 102,  234 => 101,  231 => 100,  222 => 92,  217 => 89,  214 => 88,  206 => 187,  204 => 186,  194 => 179,  191 => 178,  187 => 176,  185 => 175,  183 => 174,  181 => 173,  178 => 172,  171 => 168,  163 => 166,  161 => 165,  158 => 164,  151 => 160,  142 => 155,  140 => 154,  134 => 150,  132 => 126,  126 => 124,  118 => 121,  113 => 120,  111 => 119,  107 => 118,  100 => 113,  94 => 110,  91 => 109,  89 => 108,  86 => 107,  83 => 100,  80 => 98,  77 => 97,  74 => 88,  72 => 87,  65 => 83,  62 => 82,  60 => 79,  59 => 78,  58 => 77,  57 => 76,  56 => 75,  55 => 74,  54 => 72,  49 => 69,  46 => 68,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "node--teaser.html.twig", "themes/t4ddiaspora/templates/node/node--teaser.html.twig");
    }
}


/* node--teaser.html.twig */
class __TwigTemplate_56b763da28339bcfe73d478a482d7c38950dfe49c209001ca4dae21c1cc26dce_1614846874 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 139
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--teaser.html.twig", 139);
        $this->blocks = array(
            'field_icon' => array($this, 'block_field_icon'),
            'field_value' => array($this, 'block_field_value'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 140
    public function block_field_icon($context, array $blocks = array())
    {
        echo "group";
    }

    // line 141
    public function block_field_value($context, array $blocks = array())
    {
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "group_name", array()), "html", null, true));
    }

    public function getTemplateName()
    {
        return "node--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  472 => 141,  466 => 140,  424 => 139,  381 => 133,  377 => 132,  374 => 131,  371 => 130,  365 => 129,  323 => 128,  281 => 148,  279 => 145,  276 => 144,  273 => 143,  270 => 139,  268 => 138,  265 => 137,  263 => 128,  260 => 127,  257 => 126,  251 => 105,  247 => 104,  243 => 103,  239 => 102,  234 => 101,  231 => 100,  222 => 92,  217 => 89,  214 => 88,  206 => 187,  204 => 186,  194 => 179,  191 => 178,  187 => 176,  185 => 175,  183 => 174,  181 => 173,  178 => 172,  171 => 168,  163 => 166,  161 => 165,  158 => 164,  151 => 160,  142 => 155,  140 => 154,  134 => 150,  132 => 126,  126 => 124,  118 => 121,  113 => 120,  111 => 119,  107 => 118,  100 => 113,  94 => 110,  91 => 109,  89 => 108,  86 => 107,  83 => 100,  80 => 98,  77 => 97,  74 => 88,  72 => 87,  65 => 83,  62 => 82,  60 => 79,  59 => 78,  58 => 77,  57 => 76,  56 => 75,  55 => 74,  54 => 72,  49 => 69,  46 => 68,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "node--teaser.html.twig", "themes/t4ddiaspora/templates/node/node--teaser.html.twig");
    }
}


/* node--teaser.html.twig */
class __TwigTemplate_56b763da28339bcfe73d478a482d7c38950dfe49c209001ca4dae21c1cc26dce_857149173 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 145
        $this->parent = $this->loadTemplate("node--teaser__body.html.twig", "node--teaser.html.twig", 145);
        $this->blocks = array(
            'field_body' => array($this, 'block_field_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "node--teaser__body.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 146
    public function block_field_body($context, array $blocks = array())
    {
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "body", array()), "html", null, true));
        echo " ";
    }

    public function getTemplateName()
    {
        return "node--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  556 => 146,  515 => 145,  472 => 141,  466 => 140,  424 => 139,  381 => 133,  377 => 132,  374 => 131,  371 => 130,  365 => 129,  323 => 128,  281 => 148,  279 => 145,  276 => 144,  273 => 143,  270 => 139,  268 => 138,  265 => 137,  263 => 128,  260 => 127,  257 => 126,  251 => 105,  247 => 104,  243 => 103,  239 => 102,  234 => 101,  231 => 100,  222 => 92,  217 => 89,  214 => 88,  206 => 187,  204 => 186,  194 => 179,  191 => 178,  187 => 176,  185 => 175,  183 => 174,  181 => 173,  178 => 172,  171 => 168,  163 => 166,  161 => 165,  158 => 164,  151 => 160,  142 => 155,  140 => 154,  134 => 150,  132 => 126,  126 => 124,  118 => 121,  113 => 120,  111 => 119,  107 => 118,  100 => 113,  94 => 110,  91 => 109,  89 => 108,  86 => 107,  83 => 100,  80 => 98,  77 => 97,  74 => 88,  72 => 87,  65 => 83,  62 => 82,  60 => 79,  59 => 78,  58 => 77,  57 => 76,  56 => 75,  55 => 74,  54 => 72,  49 => 69,  46 => 68,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "node--teaser.html.twig", "themes/t4ddiaspora/templates/node/node--teaser.html.twig");
    }
}
