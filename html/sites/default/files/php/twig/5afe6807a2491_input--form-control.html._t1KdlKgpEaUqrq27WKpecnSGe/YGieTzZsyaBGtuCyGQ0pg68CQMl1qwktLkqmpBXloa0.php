<?php

/* themes/t4ddiaspora/templates/form/input--form-control.html.twig */
class __TwigTemplate_cd9c9be96715f47429c06a82ec5a33ead34cecf5c250198887dd39a6fcf2afad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'input' => array($this, 'block_input'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 24, "spaceless" => 29, "if" => 30, "block" => 40);
        $filters = array();
        $functions = array("attach_library" => 31);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'spaceless', 'if', 'block'),
                array(),
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

        // line 1
        echo "
";
        // line 24
        $context["classes"] = array(0 => "form-control");
        // line 28
        echo "
";
        // line 29
        ob_start();
        // line 30
        echo "  ";
        if (($context["input_group"] ?? null)) {
            // line 31
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/form--input-groups"), "html", null, true));
            echo "

    <div class=\"input-group\">
  ";
        }
        // line 35
        echo "
  ";
        // line 36
        if (($context["prefix"] ?? null)) {
            // line 37
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 39
        echo "
  ";
        // line 40
        $this->displayBlock('input', $context, $blocks);
        // line 43
        echo "
  ";
        // line 44
        if (($context["suffix"] ?? null)) {
            // line 45
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 47
        echo "
  ";
        // line 48
        if (($context["input_group"] ?? null)) {
            // line 49
            echo "    </div>
  ";
        }
        // line 51
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 40
    public function block_input($context, array $blocks = array())
    {
        // line 41
        echo "    <input";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo " />
  ";
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/form/input--form-control.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 41,  107 => 40,  101 => 51,  97 => 49,  95 => 48,  92 => 47,  86 => 45,  84 => 44,  81 => 43,  79 => 40,  76 => 39,  70 => 37,  68 => 36,  65 => 35,  57 => 31,  54 => 30,  52 => 29,  49 => 28,  47 => 24,  44 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{#
/**
 * @file
 * Default theme implementation for an 'input__textfield' #type form element.
 *
 * Available variables:
 * - attributes: A list of HTML attributes for the input element.
 * - children: Optional additional rendered elements.
 * - icon: An icon.
 * - input_group: Flag to display as an input group.
 * - icon_position: Where an icon should be displayed.
 * - prefix: Markup to display before the input element.
 * - suffix: Markup to display after the input element.
 * - type: The type of input.
 *
 * @ingroup templates
 *
 * @see \\Drupal\\bootstrap\\Plugin\\Preprocess\\Input
 * @see template_preprocess_input()
 */
#}
{%
  set classes = [
    'form-control',
  ]
%}

{% spaceless %}
  {% if input_group %}
    {{ attach_library('socialbase/form--input-groups') }}

    <div class=\"input-group\">
  {% endif %}

  {% if prefix %}
    {{ prefix }}
  {% endif %}

  {% block input %}
    <input{{ attributes.addClass(classes) }} />
  {% endblock %}

  {% if suffix %}
    {{ suffix }}
  {% endif %}

  {% if input_group %}
    </div>
  {% endif %}

{% endspaceless %}
", "themes/t4ddiaspora/templates/form/input--form-control.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/form/input--form-control.html.twig");
    }
}
