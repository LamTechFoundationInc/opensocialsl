<?php

/* themes/t4ddiaspora/templates/group/group--default.html.twig */
class __TwigTemplate_ef79a8a257096702974994459af50c9e7b46bfd704f2362b742fe94f21c37815 extends Twig_Template
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
        $tags = array("if" => 42);
        $filters = array("render" => 42);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 42
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_group_description", array()))) {
            // line 43
            echo "  <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "card"), "method"), "html", null, true));
            echo ">
    <div";
            // line 44
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "card__body body-text"), "method"), "html", null, true));
            echo ">
      ";
            // line 45
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_group_description", array()), "html", null, true));
            echo "
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/group/group--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 45,  50 => 44,  45 => 43,  43 => 42,);
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
 * Default theme implementation to display a group.
 *
 * Available variables:
 * - group: The group entity with limited access to object properties and
 *   methods. Only \"getter\" methods (method names starting with \"get\", \"has\",
 *   or \"is\") and a few common methods such as \"id\" and \"label\" are available.
 *   Calling other methods (such as group.delete) will result in an exception.
 * - label: The title of the group.
 * - content: All group items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the
 *   printing of a given child element.
 * - url: Direct URL of the current group.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - group: The current template type (also known as a \"theming hook\").
 *   - group--[type]: The current group type. For example, if the group is a
 *     \"Classroom\" it would result in \"group--classroom\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - group--[view_mode]: The View Mode of the group; for example, a
 *     teaser would result in: \"group--teaser\", and full: \"group--full\".
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 *
 * @see template_preprocess_group()
 *
 * @ingroup themeable
 */
#}
{% if content.field_group_description|render %}
  <div{{ attributes.addClass('card') }}>
    <div{{ content_attributes.addClass('card__body body-text') }}>
      {{ content.field_group_description }}
    </div>
  </div>
{% endif %}
", "themes/t4ddiaspora/templates/group/group--default.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/group/group--default.html.twig");
    }
}
