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
        $this->loadTemplate("node--featured.html.twig", "node--featured.html.twig", 119, "1055765976")->display($context);
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
        return new Twig_Source("{#
/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
     Only \"getter\" methods (method names starting with \"get\", \"has\", or \"is\")
     and a few common methods such as \"id\" and \"label\" are available. Calling
     other methods (such as node.delete) will result in an exception.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 *
 * @ingroup themeable
 */
#}
{{ attach_library('socialbase/teaser')}}
{{ attach_library('social_landing_page/featured')}}

{%
  set classes = [
  'card teaser teaser--tile'
]
%}

<div{{ attributes.addClass(classes) }}>

  {% block card_image %}
    <div class=\"teaser__image\" >

    {% block card_hero_image %}

      <div class=\"img_wrapper\">
      {% if content.field_node_image|render %}
        {{ content.field_node_image }}
      {% else %}
        <hr class=\"no-feature-image\">
      {% endif %}
      </div>

    {% endblock %}

    {% block card_teaser_type %}
      <div class=\"teaser__teaser-type\">
        <svg class=\"teaser__teaser-type-icon\">
          <use xlink:href=\"#icon-{{- node.bundle|clean_class -}}\"></use>
        </svg>
      </div>
    {% endblock %}

    </div>
  {% endblock %}

  <div class='teaser__body'>
    <div class=\"teaser__content\">

      {% block card_title %}

        {{ title_prefix }}
        {% if not page %}
          <h4{{ title_attributes }} class=\"teaser__title\">
            <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
          </h4>
        {% endif %}
        {{ title_suffix }}

      {% endblock %}

      {% block card_body %}

        <small class=\"text-muted\">
          {% embed \"node--teaser__field.html.twig\" %}
            {%- block field_icon -%} account_circle {%- endblock -%}
            {%- block field_value %}
              <div class=\"teaser__published\">
                <div class=\"teaser__published-date\"> {{ date }} &bullet; </div>
                <div class=\"teaser__published-author\"> {{ author_name }} </div>
              </div>
            {%- endblock -%}
          {% endembed %}
        </small>

        <div class=\"card__link\">
          <a href=\"{{ url }}\" rel=\"bookmark\">{{ 'Read more'|t }}
            <span class=\"visually-hidden\">{{ 'about'|t }}{{ label }}</span>
          </a>
        </div>

      {% endblock %}

    </div>
  </div>
</div>
", "node--featured.html.twig", "profiles/contrib/social/modules/social_features/social_landing_page/templates/node--featured.html.twig");
    }
}


/* node--featured.html.twig */
class __TwigTemplate_2c75670754720b48ac76ba8efda202ae70bfd60e075dd815d37c280ebdad94f6_1055765976 extends Twig_Template
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
        return array (  448 => 124,  444 => 123,  441 => 122,  438 => 121,  432 => 120,  390 => 119,  203 => 132,  197 => 131,  192 => 128,  190 => 119,  186 => 117,  183 => 116,  175 => 112,  167 => 109,  162 => 108,  160 => 107,  156 => 106,  153 => 105,  150 => 104,  142 => 93,  138 => 91,  135 => 90,  129 => 86,  125 => 84,  119 => 82,  117 => 81,  113 => 79,  110 => 78,  104 => 97,  102 => 90,  99 => 89,  97 => 78,  93 => 76,  90 => 75,  82 => 137,  80 => 116,  77 => 115,  75 => 104,  69 => 100,  67 => 75,  62 => 73,  59 => 72,  57 => 68,  52 => 65,  48 => 64,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
     Only \"getter\" methods (method names starting with \"get\", \"has\", or \"is\")
     and a few common methods such as \"id\" and \"label\" are available. Calling
     other methods (such as node.delete) will result in an exception.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 *
 * @ingroup themeable
 */
#}
{{ attach_library('socialbase/teaser')}}
{{ attach_library('social_landing_page/featured')}}

{%
  set classes = [
  'card teaser teaser--tile'
]
%}

<div{{ attributes.addClass(classes) }}>

  {% block card_image %}
    <div class=\"teaser__image\" >

    {% block card_hero_image %}

      <div class=\"img_wrapper\">
      {% if content.field_node_image|render %}
        {{ content.field_node_image }}
      {% else %}
        <hr class=\"no-feature-image\">
      {% endif %}
      </div>

    {% endblock %}

    {% block card_teaser_type %}
      <div class=\"teaser__teaser-type\">
        <svg class=\"teaser__teaser-type-icon\">
          <use xlink:href=\"#icon-{{- node.bundle|clean_class -}}\"></use>
        </svg>
      </div>
    {% endblock %}

    </div>
  {% endblock %}

  <div class='teaser__body'>
    <div class=\"teaser__content\">

      {% block card_title %}

        {{ title_prefix }}
        {% if not page %}
          <h4{{ title_attributes }} class=\"teaser__title\">
            <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
          </h4>
        {% endif %}
        {{ title_suffix }}

      {% endblock %}

      {% block card_body %}

        <small class=\"text-muted\">
          {% embed \"node--teaser__field.html.twig\" %}
            {%- block field_icon -%} account_circle {%- endblock -%}
            {%- block field_value %}
              <div class=\"teaser__published\">
                <div class=\"teaser__published-date\"> {{ date }} &bullet; </div>
                <div class=\"teaser__published-author\"> {{ author_name }} </div>
              </div>
            {%- endblock -%}
          {% endembed %}
        </small>

        <div class=\"card__link\">
          <a href=\"{{ url }}\" rel=\"bookmark\">{{ 'Read more'|t }}
            <span class=\"visually-hidden\">{{ 'about'|t }}{{ label }}</span>
          </a>
        </div>

      {% endblock %}

    </div>
  </div>
</div>
", "node--featured.html.twig", "profiles/contrib/social/modules/social_features/social_landing_page/templates/node--featured.html.twig");
    }
}
