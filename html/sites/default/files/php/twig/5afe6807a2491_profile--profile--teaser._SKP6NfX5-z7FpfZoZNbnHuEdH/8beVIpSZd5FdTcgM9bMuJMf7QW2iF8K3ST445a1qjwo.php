<?php

/* themes/t4ddiaspora/templates/profile/profile--profile--teaser.html.twig */
class __TwigTemplate_a4c340ab38243500de4d9917ef415940955ad726c87068a342835fd135e870c5 extends Twig_Template
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
        $tags = array("if" => 25, "for" => 53, "set" => 54, "trans" => 68);
        $filters = array("render" => 36, "t" => 43, "merge" => 54);
        $functions = array("attach_library" => 22);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for', 'set', 'trans'),
                array('render', 't', 'merge'),
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

        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/teaser"), "html", null, true));
        echo "
<div class=\"card teaser\">
  <a href=\"";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["profile_stream_url"] ?? null), "html", null, true));
        echo "\" class=\"teaser__image\">
    ";
        // line 25
        if ($this->getAttribute(($context["content"] ?? null), "field_profile_image", array())) {
            // line 26
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_profile_image", array()), "html", null, true));
            echo "
    ";
        }
        // line 28
        echo "  </a>
  <div class=\"teaser__body\">
    <div class=\"teaser__content\">
      <h4 class=\"teaser__title\">
       <a href=\"";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["profile_stream_url"] ?? null), "html", null, true));
        echo "\">
          ";
        // line 33
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["profile_name"] ?? null), "html", null, true));
        echo "
        </a>
      </h4>
        ";
        // line 36
        if (($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_function", array())) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_organization", array())))) {
            // line 37
            echo "        <div class=\"teaser__content-line\">
          <svg class=\"teaser__content-type-icon\">
            <use xlink:href=\"#icon-business_center\"></use>
          </svg>
          <span class=\"teaser__content-text\">
            ";
            // line 42
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_organization", array()))) {
                // line 43
                echo "              ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("@function at @organization", array("@function" => $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_function", array())), "@organization" => $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_organization", array()))))));
                echo "
            ";
            } else {
                // line 45
                echo "              ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_profile_function", array()), "html", null, true));
                echo "
            ";
            }
            // line 47
            echo "          </span>
        </div>
        ";
        }
        // line 50
        echo "
        ";
        // line 51
        if (($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_profile_profile_tag", array()), "#items", array(), "array") || ($context["badges"] ?? null))) {
            // line 52
            echo "          <div style=\"margin-left: 30px; margin-top: 5px;\">
            ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["badges"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
                // line 54
                echo "              ";
                $context["badge_classes"] = twig_array_merge($this->getAttribute($context["badge"], "classes", array()), array(0 => "badge"));
                // line 55
                echo "              <div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["badge_classes"] ?? null)), "method"), "html", null, true));
                echo ">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["badge"], "label", array()), "html", null, true));
                echo "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_profile_profile_tag", array()), "#items", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 58
                echo "              <div class=\"badge badge-default\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "entity", array()), "label", array()), "html", null, true));
                echo "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "          </div>
        ";
        }
        // line 62
        echo "
    </div>

    <div class=\"card__actionbar\">
      <a href=\"";
        // line 66
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["profile_contact_url"] ?? null), "html", null, true));
        echo "\" class=\"card__link\">
        ";
        // line 67
        if ((($context["profile_contact_label"] ?? null) == "private_message")) {
            // line 68
            echo "          ";
            echo t("Private message", array());
            // line 69
            echo "        ";
        } else {
            // line 70
            echo "          ";
            echo t("View profile", array());
            // line 71
            echo "        ";
        }
        // line 72
        echo "      </a>
      <a href=\"";
        // line 73
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["profile_stream_url"] ?? null), "html", null, true));
        echo "\" class=\"card__link hidden-for-phone-only\">
        ";
        // line 74
        echo t("View activities", array());
        // line 75
        echo "      </a>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/profile/profile--profile--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 75,  179 => 74,  175 => 73,  172 => 72,  169 => 71,  166 => 70,  163 => 69,  160 => 68,  158 => 67,  154 => 66,  148 => 62,  144 => 60,  135 => 58,  130 => 57,  119 => 55,  116 => 54,  112 => 53,  109 => 52,  107 => 51,  104 => 50,  99 => 47,  93 => 45,  87 => 43,  85 => 42,  78 => 37,  76 => 36,  70 => 33,  66 => 32,  60 => 28,  54 => 26,  52 => 25,  48 => 24,  43 => 22,);
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
 *
 * Default theme implementation for profiles.
 *
 * Available variables:
 * - content: Items for the content of the profile.
 *   Use 'content' to print them all, or print a subset such as
 *   'content.title'. Use the following code to exclude the
 *   printing of a given child element:
 *   @code
 *   {{ content|without('title') }}
 *   @endcode
 * - attributes: HTML attributes for the wrapper.
 * - profile: The profile object.
 * - url: The profile URL.
 *
 * @ingroup themeable
 */
#}
{{ attach_library('socialbase/teaser')}}
<div class=\"card teaser\">
  <a href=\"{{ profile_stream_url }}\" class=\"teaser__image\">
    {% if content.field_profile_image %}
        {{ content.field_profile_image }}
    {% endif %}
  </a>
  <div class=\"teaser__body\">
    <div class=\"teaser__content\">
      <h4 class=\"teaser__title\">
       <a href=\"{{ profile_stream_url }}\">
          {{ profile_name }}
        </a>
      </h4>
        {% if content.field_profile_function|render or content.field_profile_organization|render %}
        <div class=\"teaser__content-line\">
          <svg class=\"teaser__content-type-icon\">
            <use xlink:href=\"#icon-business_center\"></use>
          </svg>
          <span class=\"teaser__content-text\">
            {% if content.field_profile_organization|render %}
              {{ '@function at @organization'|t({'@function': content.field_profile_function|render, '@organization': content.field_profile_organization|render}) }}
            {% else %}
              {{ content.field_profile_function }}
            {% endif %}
          </span>
        </div>
        {% endif %}

        {% if content.field_profile_profile_tag['#items'] or badges %}
          <div style=\"margin-left: 30px; margin-top: 5px;\">
            {% for badge in badges %}
              {% set badge_classes = badge.classes|merge(['badge']) %}
              <div{{ attributes.addClass(badge_classes) }}>{{ badge.label }}</div>
            {% endfor %}
            {% for item in content.field_profile_profile_tag['#items'] %}
              <div class=\"badge badge-default\">{{ item.entity.label }}</div>
            {% endfor %}
          </div>
        {% endif %}

    </div>

    <div class=\"card__actionbar\">
      <a href=\"{{ profile_contact_url }}\" class=\"card__link\">
        {% if profile_contact_label == 'private_message' %}
          {% trans %}Private message{% endtrans %}
        {% else %}
          {% trans %}View profile{% endtrans %}
        {% endif %}
      </a>
      <a href=\"{{ profile_stream_url }}\" class=\"card__link hidden-for-phone-only\">
        {% trans %}View activities{% endtrans %}
      </a>
    </div>
  </div>
</div>
", "themes/t4ddiaspora/templates/profile/profile--profile--teaser.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/profile/profile--profile--teaser.html.twig");
    }
}
