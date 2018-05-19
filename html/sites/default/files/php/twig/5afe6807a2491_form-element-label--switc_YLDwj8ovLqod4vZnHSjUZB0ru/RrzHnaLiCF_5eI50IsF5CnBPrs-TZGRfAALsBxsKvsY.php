<?php

/* themes/t4ddiaspora/templates/form/form-element-label--switch.html.twig */
class __TwigTemplate_ad92abc97013edb543af94fe30839d46b33f094fb17cc3c6aecc85b638371fa2 extends Twig_Template
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
        $tags = array("if" => 21, "trans" => 29);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'trans'),
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

        // line 21
        if ( !twig_test_empty(($context["title"] ?? null))) {
            // line 22
            echo "<div class=\"switch__label\">
    ";
            // line 23
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            // line 24
            if (($context["required"] ?? null)) {
                // line 25
                echo "<span class=\"form-required\">*</span>";
            }
            // line 27
            echo "</div>
  <div class=\"switch__options\">";
            // line 29
            echo t("Off", array());
            // line 30
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["element"] ?? null), "html", null, true));
            echo "
    <span class=\"lever\"></span>";
            // line 32
            echo t("On", array());
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
            echo "
  </div>";
        }
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/form/form-element-label--switch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 33,  64 => 32,  60 => 30,  58 => 29,  55 => 27,  52 => 25,  50 => 24,  48 => 23,  45 => 22,  43 => 21,);
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
 * Default theme implementation for a form element label.
 *
 * Available variables:
 * - element: an input element.
 * - title: The label's text.
 * - title_display: Elements title_display setting.
 * - description: element description.
 * - required: An indicator for whether the associated form element is required.
 * - attributes: A list of HTML attributes for the label.
 *
 * @see template_preprocess_form_element_label()
 *
 * @ingroup templates
 */
#}


{%- if title is not empty -%}
  <div class=\"switch__label\">
    {{ title }}
    {%- if required -%}
      <span class=\"form-required\">*</span>
    {%- endif -%}
  </div>
  <div class=\"switch__options\">
    {%- trans -%} Off {%- endtrans -%}
    {{ element }}
    <span class=\"lever\"></span>
    {%- trans -%} On {%- endtrans -%}
    {{ children }}
  </div>

{%- endif -%}
", "themes/t4ddiaspora/templates/form/form-element-label--switch.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/form/form-element-label--switch.html.twig");
    }
}
