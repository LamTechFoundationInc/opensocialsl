<?php

/* themes/t4ddiaspora/templates/field/address-plain.html.twig */
class __TwigTemplate_2e158dc59612f4fc6e4f566c925ce6673fea245de3a5d4cc84f837d6e1d466d1 extends Twig_Template
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
        $tags = array("if" => 34);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 33
        echo "
";
        // line 34
        if (($context["recipient"] ?? null)) {
            // line 35
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["recipient"] ?? null), "html", null, true));
            echo ",
";
        }
        // line 37
        echo "
";
        // line 38
        if (($context["organization"] ?? null)) {
            // line 39
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["organization"] ?? null), "html", null, true));
            echo ",
";
        }
        // line 41
        echo "
";
        // line 42
        if (($context["address_line1"] ?? null)) {
            // line 43
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["address_line1"] ?? null), "html", null, true));
            echo ",
";
        }
        // line 45
        echo "
";
        // line 46
        if (($context["address_line2"] ?? null)) {
            // line 47
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["address_line2"] ?? null), "html", null, true));
            echo ",
";
        }
        // line 49
        echo "
";
        // line 50
        if ($this->getAttribute(($context["dependent_locality"] ?? null), "name", array())) {
            // line 51
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute(($context["dependent_locality"] ?? null), "code", array())) ? ($this->getAttribute(($context["dependent_locality"] ?? null), "code", array())) : ($this->getAttribute(($context["dependent_locality"] ?? null), "name", array()))), "html", null, true));
            echo ",
";
        }
        // line 53
        echo "
";
        // line 54
        if ($this->getAttribute(($context["locality"] ?? null), "name", array())) {
            // line 55
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["locality"] ?? null), "name", array()), "html", null, true));
            echo ",
";
        } elseif ($this->getAttribute(        // line 56
($context["locality"] ?? null), "code", array())) {
            // line 57
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["locality"] ?? null), "code", array()), "html", null, true));
            echo ",
";
        } elseif ( !twig_test_iterable(        // line 58
($context["locality"] ?? null))) {
            // line 59
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["locality"] ?? null), "html", null, true));
            echo ",
";
        }
        // line 61
        echo "
";
        // line 62
        if (($context["postal_code"] ?? null)) {
            // line 63
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["postal_code"] ?? null), "html", null, true));
            echo ",
";
        }
        // line 65
        echo "
";
        // line 66
        if ($this->getAttribute(($context["administrative_area"] ?? null), "name", array())) {
            // line 67
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute(($context["administrative_area"] ?? null), "code", array())) ? ($this->getAttribute(($context["administrative_area"] ?? null), "code", array())) : ($this->getAttribute(($context["administrative_area"] ?? null), "name", array()))), "html", null, true));
            echo ",
";
        }
        // line 70
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["country"] ?? null), "name", array()), "html", null, true));
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/field/address-plain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 70,  131 => 67,  129 => 66,  126 => 65,  120 => 63,  118 => 62,  115 => 61,  110 => 59,  108 => 58,  104 => 57,  102 => 56,  98 => 55,  96 => 54,  93 => 53,  88 => 51,  86 => 50,  83 => 49,  78 => 47,  76 => 46,  73 => 45,  68 => 43,  66 => 42,  63 => 41,  58 => 39,  56 => 38,  53 => 37,  48 => 35,  46 => 34,  43 => 33,);
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
 * Default template for the 'plain' address formatter.
 *
 * Available variables:
 *   - recipient: Recipient.
 *   - organization: Organization.
 *   - address_line1: First address line.
 *   - address_line2: Second address line.
 *   - postal_code: Postal code.
 *   - sorting_code: Sorting code.
 *   - dependent_locality: The dependent locality.
 *     - dependent_locality.code: Dependent locality code.
 *     - dependent_locality.name: Dependent locality name.
 *   - locality: The locality subdivision.
 *     - locality.code: Locality code.
 *     - locality.name: Locality name.
 *   - administrative_area: The administrative area subdivision.
 *     - administrative_area.code: Administrative area code.
 *     - administrative_area.name: Administrative area name.
 *   - country: The country.
 *     - country.code: Country code.
 *     - country.name: Country name.
 *
 * if a subdivision (dependent_locality, locality, administrative_area) was
 * entered, the array will always have a name. If it's a predefined subdivision,
 * it will also have a code (e.g. 'CA' for California), which is preferred.
 *
 * @ingroup themeable
 */
#}

{% if recipient %}
  {{- recipient -}},
{% endif %}

{% if organization %}
  {{- organization -}},
{% endif %}

{% if address_line1 %}
  {{- address_line1 -}},
{% endif %}

{% if address_line2 %}
  {{- address_line2 -}},
{% endif %}

{% if dependent_locality.name %}
  {{- dependent_locality.code ?: dependent_locality.name -}},
{% endif %}

{% if locality.name %}
  {{- locality.name -}},
{% elseif locality.code %}
  {{- locality.code -}},
{% elseif locality is not iterable %}
  {{- locality -}},
{% endif %}

{% if postal_code %}
  {{ postal_code }},
{% endif %}

{% if administrative_area.name %}
  {{ administrative_area.code ?: administrative_area.name -}},
{% endif %}

{{- country.name -}}
", "themes/t4ddiaspora/templates/field/address-plain.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/field/address-plain.html.twig");
    }
}
