<?php

/* themes/t4ddiaspora/templates/profile/profile--profile--default.html.twig */
class __TwigTemplate_0d9aae0c26bdbff1ab8739689d2d0cc519e7e4b8ad6db6f8c240f756c8ce33e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 71, "trans" => 72, "for" => 106);
        $filters = array("render" => 71);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'trans', 'for'),
                array('render'),
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

        // line 68
        echo "
<div class=\"card\">
  <div class=\"card__body\">
    ";
        // line 71
        if ((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_phone_number", array())) || ($context["user_mail"] ?? null)) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_address", array())))) {
            // line 72
            echo "      <h4>";
            echo t("Contact information", array());
            echo "</h4>
    ";
        }
        // line 74
        echo "
    ";
        // line 75
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_phone_number", array()))) {
            // line 76
            echo "      <div class=\"list-item list-item--withlabel\">
          <div class=\"list-item__label\">";
            // line 77
            echo t("Phone", array());
            echo "</div>
          <div class=\"list-item__text\">";
            // line 78
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_profile_phone_number", array()), "html", null, true));
            echo "</div>
      </div>
    ";
        }
        // line 81
        echo "
    ";
        // line 82
        if (($context["user_mail"] ?? null)) {
            // line 83
            echo "      <div class=\"list-item list-item--withlabel\">
          <div class=\"list-item__label\">";
            // line 84
            echo t("E-mail", array());
            echo "</div>
          <div class=\"list-item__text\">";
            // line 85
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["user_mail"] ?? null), "html", null, true));
            echo "</a></div>
      </div>
    ";
        }
        // line 88
        echo "
    ";
        // line 89
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_address", array()))) {
            // line 90
            echo "      <div class=\"list-item list-item--withlabel\">
          <div class=\"list-item__label\">";
            // line 91
            echo t("Address", array());
            echo "</div>
          <div class=\"list-item__text\">
              ";
            // line 93
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_profile_address", array()), "html", null, true));
            echo "
          </div>
      </div>
    ";
        }
        // line 97
        echo "

    ";
        // line 99
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_self_introduction", array()))) {
            // line 100
            echo "      <h5>";
            echo t("Intro", array());
            echo "</h5>
      ";
            // line 101
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_profile_self_introduction", array()), "html", null, true));
            echo "
    ";
        }
        // line 103
        echo "
    ";
        // line 104
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_profile_interests", array()), "#items", array(), "array")) {
            // line 105
            echo "      <h5>";
            echo t("Your interests", array());
            echo "</h5>
      ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_profile_interests", array()), "#items", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 107
                echo "        <div class=\"badge badge--pill badge--large badge-default\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "entity", array()), "label", array()), "html", null, true));
                echo "</div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "    ";
        }
        // line 110
        echo "
    ";
        // line 111
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_profile_expertise", array()), "#items", array(), "array")) {
            // line 112
            echo "      <h5>";
            echo t("Your expertise", array());
            echo "</h5>
      ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_profile_expertise", array()), "#items", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 114
                echo "        <div class=\"badge badge--pill badge--large badge-default\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "entity", array()), "label", array()), "html", null, true));
                echo "</div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "    ";
        }
        // line 117
        echo "
    ";
        // line 118
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_profile_profile_tag", array()), "#items", array(), "array")) {
            // line 119
            echo "      <h5>";
            echo t("Profile tags", array());
            echo "</h5>
      ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_profile_profile_tag", array()), "#items", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 121
                echo "        <div class=\"badge badge--pill badge--large badge-default\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "entity", array()), "label", array()), "html", null, true));
                echo "</div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "    ";
        }
        // line 124
        echo "
    ";
        // line 125
        if ((twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["content"] ?? null))) && twig_test_empty(($context["user_mail"] ?? null)))) {
            // line 126
            echo "        ";
            echo t("@profile_name has not shared profile information.", array("@profile_name" => ($context["profile_name"] ?? null), ));
            // line 127
            echo "    ";
        }
        // line 128
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/profile/profile--profile--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 128,  214 => 127,  211 => 126,  209 => 125,  206 => 124,  203 => 123,  194 => 121,  190 => 120,  185 => 119,  183 => 118,  180 => 117,  177 => 116,  168 => 114,  164 => 113,  159 => 112,  157 => 111,  154 => 110,  151 => 109,  142 => 107,  138 => 106,  133 => 105,  131 => 104,  128 => 103,  123 => 101,  118 => 100,  116 => 99,  112 => 97,  105 => 93,  100 => 91,  97 => 90,  95 => 89,  92 => 88,  86 => 85,  82 => 84,  79 => 83,  77 => 82,  74 => 81,  68 => 78,  64 => 77,  61 => 76,  59 => 75,  56 => 74,  50 => 72,  48 => 71,  43 => 68,);
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

<div class=\"card\">
  <div class=\"card__body\">
    {% if (content.field_profile_phone_number|render or user_mail or content.field_profile_address|render) %}
      <h4>{% trans %}Contact information{% endtrans %}</h4>
    {% endif %}

    {% if content.field_profile_phone_number|render %}
      <div class=\"list-item list-item--withlabel\">
          <div class=\"list-item__label\">{% trans %}Phone{% endtrans %}</div>
          <div class=\"list-item__text\">{{ content.field_profile_phone_number }}</div>
      </div>
    {% endif %}

    {% if user_mail %}
      <div class=\"list-item list-item--withlabel\">
          <div class=\"list-item__label\">{% trans %}E-mail{% endtrans %}</div>
          <div class=\"list-item__text\">{{ user_mail }}</a></div>
      </div>
    {% endif %}

    {% if content.field_profile_address|render %}
      <div class=\"list-item list-item--withlabel\">
          <div class=\"list-item__label\">{% trans %}Address{% endtrans %}</div>
          <div class=\"list-item__text\">
              {{ content.field_profile_address }}
          </div>
      </div>
    {% endif %}


    {% if content.field_profile_self_introduction|render %}
      <h5>{% trans %}Intro{% endtrans %}</h5>
      {{ content.field_profile_self_introduction }}
    {% endif %}

    {% if content.field_profile_interests['#items'] %}
      <h5>{% trans %}Your interests{% endtrans %}</h5>
      {% for item in content.field_profile_interests['#items'] %}
        <div class=\"badge badge--pill badge--large badge-default\">{{ item.entity.label }}</div>
      {% endfor %}
    {% endif %}

    {% if content.field_profile_expertise['#items'] %}
      <h5>{% trans %}Your expertise{% endtrans %}</h5>
      {% for item in content.field_profile_expertise['#items'] %}
        <div class=\"badge badge--pill badge--large badge-default\">{{ item.entity.label }}</div>
      {% endfor %}
    {% endif %}

    {% if content.field_profile_profile_tag['#items'] %}
      <h5>{% trans %}Profile tags{% endtrans %}</h5>
      {% for item in content.field_profile_profile_tag['#items'] %}
        <div class=\"badge badge--pill badge--large badge-default\">{{ item.entity.label }}</div>
      {% endfor %}
    {% endif %}

    {% if (content|render is empty and user_mail is empty)%}
        {% trans %}{{ profile_name }} has not shared profile information.{% endtrans %}
    {% endif %}

  </div>
</div>
", "themes/t4ddiaspora/templates/profile/profile--profile--default.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/profile/profile--profile--default.html.twig");
    }
}
