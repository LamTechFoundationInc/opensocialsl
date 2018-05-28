<?php

/* node--featured.html.twig */
class __TwigTemplate_2c75670754720b48ac76ba8efda202ae70bfd60e075dd815d37c280ebdad94f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'card_image' => array($this, 'block_card_image'),
            'card_hero_image' => array($this, 'block_card_hero_image'),
            'card_teaser_type' => array($this, 'block_card_teaser_type'),
            'card_title' => array($this, 'block_card_title'),
            'card_body' => array($this, 'block_card_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 68, "block" => 75, "if" => 81, "embed" => 119);
        $filters = array("render" => 81, "clean_class" => 93, "t" => 131);
        $functions = array("attach_library" => 64);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block', 'if', 'embed'),
                array('render', 'clean_class', 't'),
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

        // line 64
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/teaser"), "html", null, true));
        echo "
";
        // line 65
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("social_landing_page/featured"), "html", null, true));
        echo "

";
        // line 68
        $context["classes"] = array(0 => "card teaser teaser--tile");
        // line 72
        echo "
<div";
        // line 73
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">

  ";
        // line 75
        $this->displayBlock('card_image', $context, $blocks);
        // line 100
        echo "
  <div class='teaser__body'>
    <div class=\"teaser__content\">

      ";
        // line 104
        $this->displayBlock('card_title', $context, $blocks);
        // line 115
        echo "
      ";
        // line 116
        $this->displayBlock('card_body', $context, $blocks);
        // line 137
        echo "
    </div>
  </div>
</div>
";
    }

    // line 75
    public function block_card_image($context, array $blocks = array())
    {
        // line 76
        echo "    <div class=\"teaser__image\" >

    ";
        // line 78
        $this->displayBlock('card_hero_image', $context, $blocks);
        // line 89
        echo "
    ";
        // line 90
        $this->displayBlock('card_teaser_type', $context, $blocks);
        // line 97
        echo "
    </div>
  ";
    }

    // line 78
    public function block_card_hero_image($context, array $blocks = array())
    {
        // line 79
        echo "
      <div class=\"img_wrapper\">
      ";
        // line 81
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_node_image", array()))) {
            // line 82
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_node_image", array()), "html", null, true));
            echo "
      ";
        } else {
            // line 84
            echo "        <hr class=\"no-feature-image\">
      ";
        }
        // line 86
        echo "      </div>

    ";
    }

    // line 90
    public function block_card_teaser_type($context, array $blocks = array())
    {
        // line 91
        echo "      <div class=\"teaser__teaser-type\">
        <svg class=\"teaser__teaser-type-icon\">
          <use xlink:href=\"#icon-";
        // line 93
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->getAttribute(($context["node"] ?? null), "bundle", array())), "html", null, true));
        echo "\"></use>
        </svg>
      </div>
    ";
    }

    // line 104
    public function block_card_title($context, array $blocks = array())
    {
        // line 105
        echo "
        ";
        // line 106
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
        ";
        // line 107
        if ( !($context["page"] ?? null)) {
            // line 108
            echo "          <h4";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_attributes"] ?? null), "html", null, true));
            echo " class=\"teaser__title\">
            <a href=\"";
            // line 109
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</a>
          </h4>
        ";
        }
        // line 112
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

      ";
    }

    // line 116
    public function block_card_body($context, array $blocks = array())
    {
        // line 117
        echo "
        <small class=\"text-muted\">
          ";
        // line 119
        $this->loadTemplate("node--featured.html.twig", "node--featured.html.twig", 119, "931715509")->display($context);
        // line 128
        echo "        </small>

        <div class=\"card__link\">
          <a href=\"";
        // line 131
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
        echo "\" rel=\"bookmark\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Read more")));
        echo "
            <span class=\"visually-hidden\">";
        // line 132
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("about")));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
        echo "</span>
          </a>
        </div>

      ";
    }

    public function getTemplateName()
    {
        return "node--featured.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 132,  197 => 131,  192 => 128,  190 => 119,  186 => 117,  183 => 116,  175 => 112,  167 => 109,  162 => 108,  160 => 107,  156 => 106,  153 => 105,  150 => 104,  142 => 93,  138 => 91,  135 => 90,  129 => 86,  125 => 84,  119 => 82,  117 => 81,  113 => 79,  110 => 78,  104 => 97,  102 => 90,  99 => 89,  97 => 78,  93 => 76,  90 => 75,  82 => 137,  80 => 116,  77 => 115,  75 => 104,  69 => 100,  67 => 75,  62 => 73,  59 => 72,  57 => 68,  52 => 65,  48 => 64,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "node--featured.html.twig", "profiles/contrib/social/modules/social_features/social_landing_page/templates/node--featured.html.twig");
    }
}


/* node--featured.html.twig */
class __TwigTemplate_2c75670754720b48ac76ba8efda202ae70bfd60e075dd815d37c280ebdad94f6_931715509 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 119
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--featured.html.twig", 119);
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

    // line 120
    public function block_field_icon($context, array $blocks = array())
    {
        echo "account_circle";
    }

    // line 121
    public function block_field_value($context, array $blocks = array())
    {
        // line 122
        echo "              <div class=\"teaser__published\">
                <div class=\"teaser__published-date\"> ";
        // line 123
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["date"] ?? null), "html", null, true));
        echo " &bullet; </div>
                <div class=\"teaser__published-author\"> ";
        // line 124
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_name"] ?? null), "html", null, true));
        echo " </div>
              </div>";
    }

    public function getTemplateName()
    {
        return "node--featured.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 124,  304 => 123,  301 => 122,  298 => 121,  292 => 120,  250 => 119,  203 => 132,  197 => 131,  192 => 128,  190 => 119,  186 => 117,  183 => 116,  175 => 112,  167 => 109,  162 => 108,  160 => 107,  156 => 106,  153 => 105,  150 => 104,  142 => 93,  138 => 91,  135 => 90,  129 => 86,  125 => 84,  119 => 82,  117 => 81,  113 => 79,  110 => 78,  104 => 97,  102 => 90,  99 => 89,  97 => 78,  93 => 76,  90 => 75,  82 => 137,  80 => 116,  77 => 115,  75 => 104,  69 => 100,  67 => 75,  62 => 73,  59 => 72,  57 => 68,  52 => 65,  48 => 64,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "node--featured.html.twig", "profiles/contrib/social/modules/social_features/social_landing_page/templates/node--featured.html.twig");
    }
}
