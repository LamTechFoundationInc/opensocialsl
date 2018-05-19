<?php

/* themes/t4ddiaspora/templates/form/form-element.html.twig */
class __TwigTemplate_0be3dce6205ff7b72233f61ef2ec1e102e4c7de92385d5963d30a1dc0902e5a7 extends Twig_Template
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
        $tags = array("set" => 49, "if" => 77);
        $filters = array("clean_class" => 52, "t" => 100);
        $functions = array("attach_library" => 78);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class', 't'),
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

        // line 49
        $context["classes"] = array(0 => "form-item", 1 => "js-form-item", 2 => ("form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 52
($context["type"] ?? null))), 3 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 53
($context["type"] ?? null))), 4 => ("form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 54
($context["name"] ?? null))), 5 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 55
($context["name"] ?? null))), 6 => ((!twig_in_filter(        // line 56
($context["title_display"] ?? null), array(0 => "after", 1 => "before"))) ? ("form-no-label") : ("")), 7 => (((        // line 57
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), 8 => ((        // line 58
($context["is_form_group"] ?? null)) ? ("form-group") : ("")), 9 => (((        // line 59
($context["type"] ?? null) == "textarea")) ? ("form-group") : ("")), 10 => ((        // line 60
($context["is_radio"] ?? null)) ? ("radio form-group") : ("")), 11 => ((        // line 61
($context["is_checkbox"] ?? null)) ? ("checkbox form-group") : ("")), 12 => ((        // line 62
($context["is_autocomplete"] ?? null)) ? ("form-autocomplete") : ("")), 13 => ((        // line 63
($context["errors"] ?? null)) ? ("error has-error") : ("")), 14 => ((((        // line 64
($context["name"] ?? null) == "pass") && ($context["logged_in"] ?? null))) ? ("section-password") : ("")), 15 => (((        // line 65
($context["name"] ?? null) == "pass[pass1]")) ? ("form-group--password") : ("")), 16 => (((        // line 66
($context["name"] ?? null) == "pass[pass2]")) ? ("form-group--password form-group--confirm-password") : ("")));
        // line 69
        $context["description_classes"] = array(0 => "help-block", 1 => ((((        // line 71
($context["name"] ?? null) == "pass") && ($context["logged_in"] ?? null))) ? ("form-group--password__help-block") : ("")), 2 => (((        // line 72
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : ("")));
        // line 75
        echo "
";
        // line 77
        if ((($context["name"] ?? null) == "pass")) {
            // line 78
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/form--password"), "html", null, true));
            echo "
";
        }
        // line 80
        echo "
<div";
        // line 81
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "removeClass", array(0 => "form-inline"), "method"), "html", null, true));
        echo ">
  ";
        // line 82
        if (twig_in_filter(($context["label_display"] ?? null), array(0 => "before", 1 => "invisible"))) {
            // line 83
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 85
        echo "
  ";
        // line 86
        if (((($context["description_display"] ?? null) == "before") && $this->getAttribute(($context["description"] ?? null), "content", array()))) {
            // line 87
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "attributes", array()), "html", null, true));
            echo ">
      ";
            // line 88
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 91
        echo "
  ";
        // line 92
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        echo "

  ";
        // line 94
        if ((($context["label_display"] ?? null) == "after")) {
            // line 95
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 97
        echo "
  ";
        // line 98
        if (($context["errors"] ?? null)) {
            // line 99
            echo "    <div class=\"form-item--error-message alert alert-danger alert-sm alert-dismissible form-control-radius\">
      <a href=\"#\" role=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"";
            // line 100
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close")));
            echo "\"><span aria-hidden=\"true\">&times;</span></a>
      ";
            // line 101
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 104
        echo "
  ";
        // line 105
        if ((twig_in_filter(($context["description_display"] ?? null), array(0 => "after", 1 => "invisible")) && $this->getAttribute(($context["description"] ?? null), "content", array()))) {
            // line 106
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", array()), "addClass", array(0 => ($context["description_classes"] ?? null)), "method"), "html", null, true));
            echo ">
      ";
            // line 107
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 110
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 110,  150 => 107,  145 => 106,  143 => 105,  140 => 104,  134 => 101,  130 => 100,  127 => 99,  125 => 98,  122 => 97,  116 => 95,  114 => 94,  109 => 92,  106 => 91,  100 => 88,  95 => 87,  93 => 86,  90 => 85,  84 => 83,  82 => 82,  78 => 81,  75 => 80,  69 => 78,  67 => 77,  64 => 75,  62 => 72,  61 => 71,  60 => 69,  58 => 66,  57 => 65,  56 => 64,  55 => 63,  54 => 62,  53 => 61,  52 => 60,  51 => 59,  50 => 58,  49 => 57,  48 => 56,  47 => 55,  46 => 54,  45 => 53,  44 => 52,  43 => 49,);
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
 * Default theme implementation for a form element.
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - prefix: (optional) The form element prefix, may not be set.
 * - suffix: (optional) The form element suffix, may not be set.
 * - required: The required marker, or empty if the associated form element is
 *   not required.
 * - type: The type of the element.
 * - name: The name of the element.
 * - label: A rendered label element.
 * - label_display: Label display setting. It can have these values:
 *   - before: The label is output before the element. This is the default.
 *     The label includes the #title and the required marker, if #required.
 *   - after: The label is output after the element. For example, this is used
 *     for radio and checkbox #type elements. If the #title is empty but the
 *     field is #required, the label will contain only the required marker.
 *   - invisible: Labels are critical for screen readers to enable them to
 *     properly navigate through forms but can be visually distracting. This
 *     property hides the label for everyone except screen readers.
 *   - attribute: Set the title attribute on the element to create a tooltip but
 *     output no label element. This is supported only for checkboxes and radios
 *     in \\Drupal\\Core\\Render\\Element\\CompositeFormElementTrait::preRenderCompositeFormElement().
 *     It is used where a visual label is not needed, such as a table of
 *     checkboxes where the row and column provide the context. The tooltip will
 *     include the title and required marker.
 * - description: (optional) A list of description properties containing:
 *    - content: A description of the form element, may not be set.
 *    - attributes: (optional) A list of HTML attributes to apply to the
 *      description content wrapper. Will only be set when description is set.
 * - description_display: Description display setting. It can have these values:
 *   - before: The description is output before the element.
 *   - after: The description is output after the element. This is the default
 *     value.
 *   - invisible: The description is output after the element, hidden visually
 *     but available to screen readers.
 * - disabled: True if the element is disabled.
 * - title_display: Title display setting.
 *
 * @see template_preprocess_form_element()
 *
 * @ingroup templates
 */
#}
{%
  set classes = [
    'form-item',
    'js-form-item',
    'form-type-' ~ type|clean_class,
    'js-form-type-' ~ type|clean_class,
    'form-item-' ~ name|clean_class,
    'js-form-item-' ~ name|clean_class,
    title_display not in ['after', 'before'] ? 'form-no-label',
    disabled == 'disabled' ? 'form-disabled',
    is_form_group ? 'form-group',
    type == 'textarea' ? 'form-group',
    is_radio ? 'radio form-group',
    is_checkbox ? 'checkbox form-group',
    is_autocomplete ? 'form-autocomplete',
    errors ? 'error has-error',
    name == 'pass' and logged_in ? 'section-password',
    name == 'pass[pass1]' ? 'form-group--password',
    name == 'pass[pass2]' ? 'form-group--password form-group--confirm-password',
  ]
%}{%
  set description_classes = [
    'help-block',
    name == 'pass' and logged_in ? 'form-group--password__help-block',
    description_display == 'invisible' ? 'visually-hidden',
  ]
%}

{# For element of type password we need to load the password library #}
{% if name == 'pass' %}
  {{ attach_library('socialbase/form--password') }}
{% endif %}

<div{{ attributes.addClass(classes).removeClass('form-inline') }}>
  {% if label_display in ['before', 'invisible'] %}
    {{ label }}
  {% endif %}

  {% if description_display == 'before' and description.content %}
    <div{{ description.attributes }}>
      {{ description.content }}
    </div>
  {% endif %}

  {{ children }}

  {% if label_display == 'after' %}
    {{ label }}
  {% endif %}

  {% if errors %}
    <div class=\"form-item--error-message alert alert-danger alert-sm alert-dismissible form-control-radius\">
      <a href=\"#\" role=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"{{ 'Close'|t }}\"><span aria-hidden=\"true\">&times;</span></a>
      {{ errors }}
    </div>
  {% endif %}

  {% if description_display in ['after', 'invisible'] and description.content %}
    <div{{ description.attributes.addClass(description_classes) }}>
      {{ description.content }}
    </div>
  {% endif %}
</div>
", "themes/t4ddiaspora/templates/form/form-element.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/form/form-element.html.twig");
    }
}
