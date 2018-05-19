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
        $this->loadTemplate("node--teaser.html.twig", "node--teaser.html.twig", 128, "361756165")->display($context);
        // line 137
        echo "
        ";
        // line 138
        if ($this->getAttribute(($context["content"] ?? null), "group_name", array())) {
            // line 139
            echo "          ";
            $this->loadTemplate("node--teaser.html.twig", "node--teaser.html.twig", 139, "1455589092")->display($context);
            // line 143
            echo "        ";
        }
        // line 144
        echo "
        ";
        // line 145
        $this->loadTemplate("node--teaser.html.twig", "node--teaser.html.twig", 145, "784939706")->display($context);
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
 * @todo Remove the id attribute (or make it a class), because if that gets
 *   rendered twice on a page this is invalid CSS for example: two lists
 *   in different view modes.
 *
 * @ingroup themeable
 */
#}

{{ attach_library('socialbase/teaser')}}

{%
  set classes = [
    'teaser',
    view_mode == 'teaser' ? 'card',
    view_mode == 'activity' ? 'teaser--stream',
    view_mode == 'activity_comment' ? 'teaser--stream',
    node.isPromoted() ? 'promoted',
    node.isSticky() ? 'sticky',
    not node.isPublished() ? 'teaser--unpublished',
  ]
%}

<div{{ attributes.addClass(classes) }}>

  <div class='teaser__image'>

    {% if view_mode == 'teaser' %}
      {% block card_teaser_type %}

        <div class=\"teaser__teaser-type\">
          <svg class=\"teaser__teaser-type-icon\">
            <use xlink:href=\"#icon-{{- node.bundle|clean_class -}}\"></use>
          </svg>
        </div>

      {% endblock %}
    {% endif %}

    {# allows for new content types to just use the plain field_image name #}
    {% block card_image %}
      {{ content.field_event_image }}
      {{ content.field_topic_image }}
      {{ content.field_page_image }}
      {{ content.field_book_image }}
      {{ content.field_image }}
    {% endblock %}

    {% if status_label %}
      <div class=\"status\">
        {{ status_label }}
      </div>
    {% endif %}

  </div>

  <div class='teaser__body'>
    <div class=\"teaser__content\">
      {{ title_prefix }}
      {% if not page %}
        <h4{{ title_attributes }} class=\"teaser__title\">
            <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
        </h4>
      {% endif %}
      {{ title_suffix }}

      {% block card_body %}

        {% embed \"node--teaser__field.html.twig\" %}
          {%- block field_icon -%} account_circle {%- endblock -%}
          {%- block field_value %}
            <div class=\"teaser__published\">
              <div class=\"teaser__published-date\"> {{ date }} &bullet; </div>
              <div class=\"teaser__published-author\"> {{ author_name }} </div>
            </div>
          {%- endblock -%}
        {% endembed %}

        {% if content.group_name %}
          {% embed \"node--teaser__field.html.twig\" %}
            {%- block field_icon -%} group {%- endblock -%}
            {%- block field_value -%} {{ content.group_name }} {%- endblock -%}
          {% endembed %}
        {% endif %}

        {% embed \"node--teaser__body.html.twig\" %}
          {% block field_body %} {{ content.body }} {% endblock %}
        {% endembed %}

      {% endblock %}
    </div>

    <div class=\"card__actionbar\">

        {% if comment_count > 0 %}
          <a href=\"{{ url }}#section-comments\" class=\"badge badge--pill badge-default teaser__badge\">
            <span class=\"badge__container\">
              <svg class=\"badge__icon\">
                <use xlink:href=\"#icon-comment\"></use>
              </svg>
              <span class=\"badge__label\">{{ comment_count }}</span>
            </span>
          </a>
        {% endif %}

        {% if visibility_icon and visibility_label %}
          <div class=\"badge teaser__badge\" title=\"{% trans %}The visibility of this content is set to {% endtrans %} {{ visibility_label }}\">
              <svg class=\"badge__icon\">
                <use xlink:href=\"#icon-{{ visibility_icon }}\"></use>
              </svg>
          </div>
        {% endif %}

        {% if content.enrolled %}
          <span class=\"badge badge-secondary teaser__badge\">
            {%- trans -%} Enrolled {%- endtrans -%}
          </span>
        {% endif %}

      {{ content.links }}
    </div>

  </div>

</div>

{% if view_mode == 'activity' and content.field_book_comments %}
  {{ content.field_book_comments }}
{% endif %}
", "node--teaser.html.twig", "themes/t4ddiaspora/templates/node/node--teaser.html.twig");
    }
}


/* node--teaser.html.twig */
class __TwigTemplate_56b763da28339bcfe73d478a482d7c38950dfe49c209001ca4dae21c1cc26dce_361756165 extends Twig_Template
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
        return array (  569 => 133,  565 => 132,  562 => 131,  559 => 130,  553 => 129,  511 => 128,  281 => 148,  279 => 145,  276 => 144,  273 => 143,  270 => 139,  268 => 138,  265 => 137,  263 => 128,  260 => 127,  257 => 126,  251 => 105,  247 => 104,  243 => 103,  239 => 102,  234 => 101,  231 => 100,  222 => 92,  217 => 89,  214 => 88,  206 => 187,  204 => 186,  194 => 179,  191 => 178,  187 => 176,  185 => 175,  183 => 174,  181 => 173,  178 => 172,  171 => 168,  163 => 166,  161 => 165,  158 => 164,  151 => 160,  142 => 155,  140 => 154,  134 => 150,  132 => 126,  126 => 124,  118 => 121,  113 => 120,  111 => 119,  107 => 118,  100 => 113,  94 => 110,  91 => 109,  89 => 108,  86 => 107,  83 => 100,  80 => 98,  77 => 97,  74 => 88,  72 => 87,  65 => 83,  62 => 82,  60 => 79,  59 => 78,  58 => 77,  57 => 76,  56 => 75,  55 => 74,  54 => 72,  49 => 69,  46 => 68,);
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
 * @todo Remove the id attribute (or make it a class), because if that gets
 *   rendered twice on a page this is invalid CSS for example: two lists
 *   in different view modes.
 *
 * @ingroup themeable
 */
#}

{{ attach_library('socialbase/teaser')}}

{%
  set classes = [
    'teaser',
    view_mode == 'teaser' ? 'card',
    view_mode == 'activity' ? 'teaser--stream',
    view_mode == 'activity_comment' ? 'teaser--stream',
    node.isPromoted() ? 'promoted',
    node.isSticky() ? 'sticky',
    not node.isPublished() ? 'teaser--unpublished',
  ]
%}

<div{{ attributes.addClass(classes) }}>

  <div class='teaser__image'>

    {% if view_mode == 'teaser' %}
      {% block card_teaser_type %}

        <div class=\"teaser__teaser-type\">
          <svg class=\"teaser__teaser-type-icon\">
            <use xlink:href=\"#icon-{{- node.bundle|clean_class -}}\"></use>
          </svg>
        </div>

      {% endblock %}
    {% endif %}

    {# allows for new content types to just use the plain field_image name #}
    {% block card_image %}
      {{ content.field_event_image }}
      {{ content.field_topic_image }}
      {{ content.field_page_image }}
      {{ content.field_book_image }}
      {{ content.field_image }}
    {% endblock %}

    {% if status_label %}
      <div class=\"status\">
        {{ status_label }}
      </div>
    {% endif %}

  </div>

  <div class='teaser__body'>
    <div class=\"teaser__content\">
      {{ title_prefix }}
      {% if not page %}
        <h4{{ title_attributes }} class=\"teaser__title\">
            <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
        </h4>
      {% endif %}
      {{ title_suffix }}

      {% block card_body %}

        {% embed \"node--teaser__field.html.twig\" %}
          {%- block field_icon -%} account_circle {%- endblock -%}
          {%- block field_value %}
            <div class=\"teaser__published\">
              <div class=\"teaser__published-date\"> {{ date }} &bullet; </div>
              <div class=\"teaser__published-author\"> {{ author_name }} </div>
            </div>
          {%- endblock -%}
        {% endembed %}

        {% if content.group_name %}
          {% embed \"node--teaser__field.html.twig\" %}
            {%- block field_icon -%} group {%- endblock -%}
            {%- block field_value -%} {{ content.group_name }} {%- endblock -%}
          {% endembed %}
        {% endif %}

        {% embed \"node--teaser__body.html.twig\" %}
          {% block field_body %} {{ content.body }} {% endblock %}
        {% endembed %}

      {% endblock %}
    </div>

    <div class=\"card__actionbar\">

        {% if comment_count > 0 %}
          <a href=\"{{ url }}#section-comments\" class=\"badge badge--pill badge-default teaser__badge\">
            <span class=\"badge__container\">
              <svg class=\"badge__icon\">
                <use xlink:href=\"#icon-comment\"></use>
              </svg>
              <span class=\"badge__label\">{{ comment_count }}</span>
            </span>
          </a>
        {% endif %}

        {% if visibility_icon and visibility_label %}
          <div class=\"badge teaser__badge\" title=\"{% trans %}The visibility of this content is set to {% endtrans %} {{ visibility_label }}\">
              <svg class=\"badge__icon\">
                <use xlink:href=\"#icon-{{ visibility_icon }}\"></use>
              </svg>
          </div>
        {% endif %}

        {% if content.enrolled %}
          <span class=\"badge badge-secondary teaser__badge\">
            {%- trans -%} Enrolled {%- endtrans -%}
          </span>
        {% endif %}

      {{ content.links }}
    </div>

  </div>

</div>

{% if view_mode == 'activity' and content.field_book_comments %}
  {{ content.field_book_comments }}
{% endif %}
", "node--teaser.html.twig", "themes/t4ddiaspora/templates/node/node--teaser.html.twig");
    }
}


/* node--teaser.html.twig */
class __TwigTemplate_56b763da28339bcfe73d478a482d7c38950dfe49c209001ca4dae21c1cc26dce_1455589092 extends Twig_Template
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
        return array (  848 => 141,  842 => 140,  800 => 139,  569 => 133,  565 => 132,  562 => 131,  559 => 130,  553 => 129,  511 => 128,  281 => 148,  279 => 145,  276 => 144,  273 => 143,  270 => 139,  268 => 138,  265 => 137,  263 => 128,  260 => 127,  257 => 126,  251 => 105,  247 => 104,  243 => 103,  239 => 102,  234 => 101,  231 => 100,  222 => 92,  217 => 89,  214 => 88,  206 => 187,  204 => 186,  194 => 179,  191 => 178,  187 => 176,  185 => 175,  183 => 174,  181 => 173,  178 => 172,  171 => 168,  163 => 166,  161 => 165,  158 => 164,  151 => 160,  142 => 155,  140 => 154,  134 => 150,  132 => 126,  126 => 124,  118 => 121,  113 => 120,  111 => 119,  107 => 118,  100 => 113,  94 => 110,  91 => 109,  89 => 108,  86 => 107,  83 => 100,  80 => 98,  77 => 97,  74 => 88,  72 => 87,  65 => 83,  62 => 82,  60 => 79,  59 => 78,  58 => 77,  57 => 76,  56 => 75,  55 => 74,  54 => 72,  49 => 69,  46 => 68,);
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
 * @todo Remove the id attribute (or make it a class), because if that gets
 *   rendered twice on a page this is invalid CSS for example: two lists
 *   in different view modes.
 *
 * @ingroup themeable
 */
#}

{{ attach_library('socialbase/teaser')}}

{%
  set classes = [
    'teaser',
    view_mode == 'teaser' ? 'card',
    view_mode == 'activity' ? 'teaser--stream',
    view_mode == 'activity_comment' ? 'teaser--stream',
    node.isPromoted() ? 'promoted',
    node.isSticky() ? 'sticky',
    not node.isPublished() ? 'teaser--unpublished',
  ]
%}

<div{{ attributes.addClass(classes) }}>

  <div class='teaser__image'>

    {% if view_mode == 'teaser' %}
      {% block card_teaser_type %}

        <div class=\"teaser__teaser-type\">
          <svg class=\"teaser__teaser-type-icon\">
            <use xlink:href=\"#icon-{{- node.bundle|clean_class -}}\"></use>
          </svg>
        </div>

      {% endblock %}
    {% endif %}

    {# allows for new content types to just use the plain field_image name #}
    {% block card_image %}
      {{ content.field_event_image }}
      {{ content.field_topic_image }}
      {{ content.field_page_image }}
      {{ content.field_book_image }}
      {{ content.field_image }}
    {% endblock %}

    {% if status_label %}
      <div class=\"status\">
        {{ status_label }}
      </div>
    {% endif %}

  </div>

  <div class='teaser__body'>
    <div class=\"teaser__content\">
      {{ title_prefix }}
      {% if not page %}
        <h4{{ title_attributes }} class=\"teaser__title\">
            <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
        </h4>
      {% endif %}
      {{ title_suffix }}

      {% block card_body %}

        {% embed \"node--teaser__field.html.twig\" %}
          {%- block field_icon -%} account_circle {%- endblock -%}
          {%- block field_value %}
            <div class=\"teaser__published\">
              <div class=\"teaser__published-date\"> {{ date }} &bullet; </div>
              <div class=\"teaser__published-author\"> {{ author_name }} </div>
            </div>
          {%- endblock -%}
        {% endembed %}

        {% if content.group_name %}
          {% embed \"node--teaser__field.html.twig\" %}
            {%- block field_icon -%} group {%- endblock -%}
            {%- block field_value -%} {{ content.group_name }} {%- endblock -%}
          {% endembed %}
        {% endif %}

        {% embed \"node--teaser__body.html.twig\" %}
          {% block field_body %} {{ content.body }} {% endblock %}
        {% endembed %}

      {% endblock %}
    </div>

    <div class=\"card__actionbar\">

        {% if comment_count > 0 %}
          <a href=\"{{ url }}#section-comments\" class=\"badge badge--pill badge-default teaser__badge\">
            <span class=\"badge__container\">
              <svg class=\"badge__icon\">
                <use xlink:href=\"#icon-comment\"></use>
              </svg>
              <span class=\"badge__label\">{{ comment_count }}</span>
            </span>
          </a>
        {% endif %}

        {% if visibility_icon and visibility_label %}
          <div class=\"badge teaser__badge\" title=\"{% trans %}The visibility of this content is set to {% endtrans %} {{ visibility_label }}\">
              <svg class=\"badge__icon\">
                <use xlink:href=\"#icon-{{ visibility_icon }}\"></use>
              </svg>
          </div>
        {% endif %}

        {% if content.enrolled %}
          <span class=\"badge badge-secondary teaser__badge\">
            {%- trans -%} Enrolled {%- endtrans -%}
          </span>
        {% endif %}

      {{ content.links }}
    </div>

  </div>

</div>

{% if view_mode == 'activity' and content.field_book_comments %}
  {{ content.field_book_comments }}
{% endif %}
", "node--teaser.html.twig", "themes/t4ddiaspora/templates/node/node--teaser.html.twig");
    }
}


/* node--teaser.html.twig */
class __TwigTemplate_56b763da28339bcfe73d478a482d7c38950dfe49c209001ca4dae21c1cc26dce_784939706 extends Twig_Template
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
        return array (  1120 => 146,  1079 => 145,  848 => 141,  842 => 140,  800 => 139,  569 => 133,  565 => 132,  562 => 131,  559 => 130,  553 => 129,  511 => 128,  281 => 148,  279 => 145,  276 => 144,  273 => 143,  270 => 139,  268 => 138,  265 => 137,  263 => 128,  260 => 127,  257 => 126,  251 => 105,  247 => 104,  243 => 103,  239 => 102,  234 => 101,  231 => 100,  222 => 92,  217 => 89,  214 => 88,  206 => 187,  204 => 186,  194 => 179,  191 => 178,  187 => 176,  185 => 175,  183 => 174,  181 => 173,  178 => 172,  171 => 168,  163 => 166,  161 => 165,  158 => 164,  151 => 160,  142 => 155,  140 => 154,  134 => 150,  132 => 126,  126 => 124,  118 => 121,  113 => 120,  111 => 119,  107 => 118,  100 => 113,  94 => 110,  91 => 109,  89 => 108,  86 => 107,  83 => 100,  80 => 98,  77 => 97,  74 => 88,  72 => 87,  65 => 83,  62 => 82,  60 => 79,  59 => 78,  58 => 77,  57 => 76,  56 => 75,  55 => 74,  54 => 72,  49 => 69,  46 => 68,);
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
 * @todo Remove the id attribute (or make it a class), because if that gets
 *   rendered twice on a page this is invalid CSS for example: two lists
 *   in different view modes.
 *
 * @ingroup themeable
 */
#}

{{ attach_library('socialbase/teaser')}}

{%
  set classes = [
    'teaser',
    view_mode == 'teaser' ? 'card',
    view_mode == 'activity' ? 'teaser--stream',
    view_mode == 'activity_comment' ? 'teaser--stream',
    node.isPromoted() ? 'promoted',
    node.isSticky() ? 'sticky',
    not node.isPublished() ? 'teaser--unpublished',
  ]
%}

<div{{ attributes.addClass(classes) }}>

  <div class='teaser__image'>

    {% if view_mode == 'teaser' %}
      {% block card_teaser_type %}

        <div class=\"teaser__teaser-type\">
          <svg class=\"teaser__teaser-type-icon\">
            <use xlink:href=\"#icon-{{- node.bundle|clean_class -}}\"></use>
          </svg>
        </div>

      {% endblock %}
    {% endif %}

    {# allows for new content types to just use the plain field_image name #}
    {% block card_image %}
      {{ content.field_event_image }}
      {{ content.field_topic_image }}
      {{ content.field_page_image }}
      {{ content.field_book_image }}
      {{ content.field_image }}
    {% endblock %}

    {% if status_label %}
      <div class=\"status\">
        {{ status_label }}
      </div>
    {% endif %}

  </div>

  <div class='teaser__body'>
    <div class=\"teaser__content\">
      {{ title_prefix }}
      {% if not page %}
        <h4{{ title_attributes }} class=\"teaser__title\">
            <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
        </h4>
      {% endif %}
      {{ title_suffix }}

      {% block card_body %}

        {% embed \"node--teaser__field.html.twig\" %}
          {%- block field_icon -%} account_circle {%- endblock -%}
          {%- block field_value %}
            <div class=\"teaser__published\">
              <div class=\"teaser__published-date\"> {{ date }} &bullet; </div>
              <div class=\"teaser__published-author\"> {{ author_name }} </div>
            </div>
          {%- endblock -%}
        {% endembed %}

        {% if content.group_name %}
          {% embed \"node--teaser__field.html.twig\" %}
            {%- block field_icon -%} group {%- endblock -%}
            {%- block field_value -%} {{ content.group_name }} {%- endblock -%}
          {% endembed %}
        {% endif %}

        {% embed \"node--teaser__body.html.twig\" %}
          {% block field_body %} {{ content.body }} {% endblock %}
        {% endembed %}

      {% endblock %}
    </div>

    <div class=\"card__actionbar\">

        {% if comment_count > 0 %}
          <a href=\"{{ url }}#section-comments\" class=\"badge badge--pill badge-default teaser__badge\">
            <span class=\"badge__container\">
              <svg class=\"badge__icon\">
                <use xlink:href=\"#icon-comment\"></use>
              </svg>
              <span class=\"badge__label\">{{ comment_count }}</span>
            </span>
          </a>
        {% endif %}

        {% if visibility_icon and visibility_label %}
          <div class=\"badge teaser__badge\" title=\"{% trans %}The visibility of this content is set to {% endtrans %} {{ visibility_label }}\">
              <svg class=\"badge__icon\">
                <use xlink:href=\"#icon-{{ visibility_icon }}\"></use>
              </svg>
          </div>
        {% endif %}

        {% if content.enrolled %}
          <span class=\"badge badge-secondary teaser__badge\">
            {%- trans -%} Enrolled {%- endtrans -%}
          </span>
        {% endif %}

      {{ content.links }}
    </div>

  </div>

</div>

{% if view_mode == 'activity' and content.field_book_comments %}
  {{ content.field_book_comments }}
{% endif %}
", "node--teaser.html.twig", "themes/t4ddiaspora/templates/node/node--teaser.html.twig");
    }
}
