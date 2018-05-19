<?php

/* themes/t4ddiaspora/templates/profile/profile--profile--teaser--anonymous.html.twig */
class __TwigTemplate_0cc2a5d0861d1f31cc9f222084bb6e705ab54cadb745c915d1ad755ef2564942 extends Twig_Template
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
        $tags = array("if" => 25, "for" => 51, "set" => 52);
        $filters = array("render" => 34, "t" => 41, "merge" => 52);
        $functions = array("attach_library" => 22);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for', 'set'),
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
  <div class=\"teaser__image\">
    ";
        // line 25
        if ($this->getAttribute(($context["content"] ?? null), "field_profile_image", array())) {
            // line 26
            echo "      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_profile_image", array()), "html", null, true));
            echo "
    ";
        }
        // line 28
        echo "  </div>
  <div class=\"teaser__body\">
    <div class=\"teaser__content\">
      <h4 class=\"teaser__title\">
        ";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["profile_name"] ?? null), "html", null, true));
        echo "
      </h4>
      ";
        // line 34
        if (($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_function", array())) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_organization", array())))) {
            // line 35
            echo "        <div class=\"teaser__content-line\">
          <svg class=\"teaser__content-type-icon\">
            <use xlink:href=\"#icon-business_center\"></use>
          </svg>
          <span class=\"teaser__content-text\">
            ";
            // line 40
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_organization", array()))) {
                // line 41
                echo "              ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("@function at @organization", array("@function" => $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_function", array())), "@organization" => $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_organization", array()))))));
                echo "
            ";
            } else {
                // line 43
                echo "              ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_profile_function", array()), "html", null, true));
                echo "
            ";
            }
            // line 45
            echo "          </span>
        </div>
      ";
        }
        // line 48
        echo "
      ";
        // line 49
        if (($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_profile_profile_tag", array()), "#items", array(), "array") || ($context["badges"] ?? null))) {
            // line 50
            echo "        <div style=\"margin-left: 30px; margin-top: 5px;\">
          ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["badges"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
                // line 52
                echo "            ";
                $context["badge_classes"] = twig_array_merge($this->getAttribute($context["badge"], "classes", array()), array(0 => "badge"));
                // line 53
                echo "            <div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["badge_classes"] ?? null)), "method"), "html", null, true));
                echo ">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["badge"], "label", array()), "html", null, true));
                echo "</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_profile_profile_tag", array()), "#items", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 56
                echo "            <div class=\"badge badge-default\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "entity", array()), "label", array()), "html", null, true));
                echo "</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "        </div>
      ";
        }
        // line 60
        echo "
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/profile/profile--profile--teaser--anonymous.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 60,  136 => 58,  127 => 56,  122 => 55,  111 => 53,  108 => 52,  104 => 51,  101 => 50,  99 => 49,  96 => 48,  91 => 45,  85 => 43,  79 => 41,  77 => 40,  70 => 35,  68 => 34,  63 => 32,  57 => 28,  51 => 26,  49 => 25,  43 => 22,);
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
  <div class=\"teaser__image\">
    {% if content.field_profile_image %}
      {{ content.field_profile_image }}
    {% endif %}
  </div>
  <div class=\"teaser__body\">
    <div class=\"teaser__content\">
      <h4 class=\"teaser__title\">
        {{ profile_name }}
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
  </div>
</div>
", "themes/t4ddiaspora/templates/profile/profile--profile--teaser--anonymous.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/profile/profile--profile--teaser--anonymous.html.twig");
    }
}
