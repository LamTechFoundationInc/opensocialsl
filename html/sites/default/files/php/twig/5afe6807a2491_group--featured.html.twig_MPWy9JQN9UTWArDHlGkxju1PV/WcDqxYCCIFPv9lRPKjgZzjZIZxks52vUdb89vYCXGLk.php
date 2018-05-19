<?php

/* profiles/contrib/social/modules/social_features/social_landing_page/templates/group--featured.html.twig */
class __TwigTemplate_06c095c7e571d11317d7b6dee7e4bbd7084334955a5950043865e149b80d9b3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("node--featured.html.twig", "profiles/contrib/social/modules/social_features/social_landing_page/templates/group--featured.html.twig", 1);
        $this->blocks = array(
            'card_hero_image' => array($this, 'block_card_hero_image'),
            'card_teaser_type' => array($this, 'block_card_teaser_type'),
            'card_body' => array($this, 'block_card_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "node--featured.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 6, "trans" => 30);
        $filters = array("render" => 6, "t" => 48);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'trans'),
                array('render', 't'),
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

    // line 3
    public function block_card_hero_image($context, array $blocks = array())
    {
        // line 4
        echo "
  <div class=\"img_wrapper\">
    ";
        // line 6
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_group_image", array()))) {
            // line 7
            echo "      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_group_image", array()), "html", null, true));
            echo "
    ";
        } else {
            // line 9
            echo "      <hr class=\"no-feature-image\">
    ";
        }
        // line 11
        echo "  </div>

";
    }

    // line 15
    public function block_card_teaser_type($context, array $blocks = array())
    {
        // line 16
        echo "  <div class=\"teaser__teaser-type\">
    <svg class=\"teaser__teaser-type-icon\">
      <use xlink:href=\"#icon-group-white\"></use>
    </svg>
  </div>
";
    }

    // line 23
    public function block_card_body($context, array $blocks = array())
    {
        // line 24
        echo "  <small class=\"text-muted\">
    <div class=\"teaser__content-line\">
      <svg class=\"teaser__content-type-icon\">
        <use xlink:href=\"#icon-group\"></use>
      </svg>
      <span class=\"teaser__content-text\">
        ";
        // line 30
        echo \Drupal::translation()->formatPlural(abs(($context["group_members"] ?? null)), "1 member", "@count members", array());
        echo "&nbsp;
      </span>
    </div>
    ";
        // line 33
        if (($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_group_location", array())) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_group_address", array())))) {
            // line 34
            echo "      <div class=\"teaser__content-line\">
        <svg class=\"teaser__content-type-icon\">
          <use xlink:href=\"#icon-location\"></use>
        </svg>
        <span class=\"teaser__content-text\">
              ";
            // line 39
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_group_location", array()), "html", null, true));
            echo "
          ";
            // line 40
            if (( !twig_test_empty($this->getAttribute(($context["content"] ?? null), "field_group_location", array())) &&  !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_group_address", array()))))) {
                echo " &bullet;";
            }
            // line 41
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_group_address", array()), "html", null, true));
            echo "
            </span>
      </div>
    ";
        }
        // line 45
        echo "  </small>

  <div class=\"card__link\">
    <a href=\"";
        // line 48
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
        echo "\" rel=\"bookmark\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Read more")));
        echo "
      <span class=\"visually-hidden\">";
        // line 49
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("about")));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
        echo "</span>
    </a>
  </div>

";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/modules/social_features/social_landing_page/templates/group--featured.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 49,  138 => 48,  133 => 45,  125 => 41,  121 => 40,  117 => 39,  110 => 34,  108 => 33,  102 => 30,  94 => 24,  91 => 23,  82 => 16,  79 => 15,  73 => 11,  69 => 9,  63 => 7,  61 => 6,  57 => 4,  54 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'node--featured.html.twig' %}

{% block card_hero_image %}

  <div class=\"img_wrapper\">
    {% if content.field_group_image|render %}
      {{ content.field_group_image }}
    {% else %}
      <hr class=\"no-feature-image\">
    {% endif %}
  </div>

{% endblock %}

{% block card_teaser_type %}
  <div class=\"teaser__teaser-type\">
    <svg class=\"teaser__teaser-type-icon\">
      <use xlink:href=\"#icon-group-white\"></use>
    </svg>
  </div>
{% endblock %}

{% block card_body %}
  <small class=\"text-muted\">
    <div class=\"teaser__content-line\">
      <svg class=\"teaser__content-type-icon\">
        <use xlink:href=\"#icon-group\"></use>
      </svg>
      <span class=\"teaser__content-text\">
        {% trans %}1 member{% plural group_members %}@count members{% endtrans %}&nbsp;
      </span>
    </div>
    {% if content.field_group_location|render or content.field_group_address|render %}
      <div class=\"teaser__content-line\">
        <svg class=\"teaser__content-type-icon\">
          <use xlink:href=\"#icon-location\"></use>
        </svg>
        <span class=\"teaser__content-text\">
              {{ content.field_group_location }}
          {% if content.field_group_location is not empty and content.field_group_address|render is not empty %} &bullet;{% endif %}
          {{ content.field_group_address }}
            </span>
      </div>
    {% endif %}
  </small>

  <div class=\"card__link\">
    <a href=\"{{ url }}\" rel=\"bookmark\">{{ 'Read more'|t }}
      <span class=\"visually-hidden\">{{ 'about'|t }}{{ label }}</span>
    </a>
  </div>

{% endblock %}
", "profiles/contrib/social/modules/social_features/social_landing_page/templates/group--featured.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/profiles/contrib/social/modules/social_features/social_landing_page/templates/group--featured.html.twig");
    }
}
