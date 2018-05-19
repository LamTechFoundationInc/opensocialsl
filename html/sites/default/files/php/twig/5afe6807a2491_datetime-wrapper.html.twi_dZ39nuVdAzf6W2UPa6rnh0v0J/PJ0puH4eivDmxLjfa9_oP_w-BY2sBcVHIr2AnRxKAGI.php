<?php

/* themes/t4ddiaspora/templates/form/datetime-wrapper.html.twig */
class __TwigTemplate_970a181573ff8576eb5932e10db5e1fefb4c2a671151e05d521e6321651fac25 extends Twig_Template
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
        $tags = array("set" => 19, "if" => 32);
        $filters = array("t" => 41);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('t'),
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

        // line 19
        $context["title_classes"] = array(0 => "control-label", 1 => ((        // line 21
($context["required"] ?? null)) ? ("form-required") : ("")));
        // line 24
        echo "
";
        // line 26
        $context["classes"] = array(0 => ((        // line 27
($context["errors"] ?? null)) ? ("error has-error") : ("")));
        // line 30
        echo "
<div";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
";
        // line 32
        if (($context["title"] ?? null)) {
            // line 33
            echo "  <label";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => ($context["title_classes"] ?? null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</label>
  ";
            // line 34
            if (($context["required"] ?? null)) {
                // line 35
                echo "    <span class=\"form-required\">*</span>
  ";
            }
        }
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
";
        // line 39
        if (($context["errors"] ?? null)) {
            // line 40
            echo "  <div class=\"form-item--error-message alert alert-danger alert-sm alert-dismissible form-control-radius\">
    <a href=\"#\" role=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"";
            // line 41
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close")));
            echo "\"><span aria-hidden=\"true\">&times;</span></a>
    ";
            // line 42
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true));
            echo "
  </div>
  <br />
";
        }
        // line 46
        if (($context["description"] ?? null)) {
            // line 47
            echo "  <div class=\"help-block\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true));
            echo "</div>
";
        }
        // line 49
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/form/datetime-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 49,  97 => 47,  95 => 46,  88 => 42,  84 => 41,  81 => 40,  79 => 39,  75 => 38,  70 => 35,  68 => 34,  61 => 33,  59 => 32,  55 => 31,  52 => 30,  50 => 27,  49 => 26,  46 => 24,  44 => 21,  43 => 19,);
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
 * Default theme implementation of a datetime form wrapper.
 *
 * Available variables:
 * - content: The form element to be output, usually a datelist, or datetime.
 * - title: The title of the form element.
 * - title_attributes: HTML attributes for the title wrapper.
 * - description: Description text for the form element.
 * - required: An indicator for whether the associated form element is required.
 *
 * @ingroup templates
 *
 * @see template_preprocess_datetime_wrapper()
 */
#}
{%
  set title_classes = [
    'control-label',
    required ? 'form-required',
  ]
%}

{%
  set classes = [
    errors ? 'error has-error',
  ]
%}

<div{{ attributes.addClass(classes) }}>
{% if title %}
  <label{{ title_attributes.addClass(title_classes) }}>{{ title }}</label>
  {% if required %}
    <span class=\"form-required\">*</span>
  {% endif %}
{% endif %}
{{ content }}
{% if errors %}
  <div class=\"form-item--error-message alert alert-danger alert-sm alert-dismissible form-control-radius\">
    <a href=\"#\" role=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"{{ 'Close'|t }}\"><span aria-hidden=\"true\">&times;</span></a>
    {{ errors }}
  </div>
  <br />
{% endif %}
{% if description %}
  <div class=\"help-block\">{{ description }}</div>
{% endif %}
</div>", "themes/t4ddiaspora/templates/form/datetime-wrapper.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/form/datetime-wrapper.html.twig");
    }
}
