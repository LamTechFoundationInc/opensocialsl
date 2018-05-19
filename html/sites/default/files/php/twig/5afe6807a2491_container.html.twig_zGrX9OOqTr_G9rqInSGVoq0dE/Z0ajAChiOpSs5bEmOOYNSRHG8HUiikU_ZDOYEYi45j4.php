<?php

/* themes/t4ddiaspora/templates/system/container.html.twig */
class __TwigTemplate_2d7b59ddc65c1cd93b9f833f72308b9efdddf32ba71a21782214ca00f76e53f3 extends Twig_Template
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
        $tags = array("set" => 23, "if" => 32);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
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

        // line 1
        echo "
";
        // line 21
        echo "
";
        // line 23
        $context["classes"] = array(0 => (( !$this->getAttribute(        // line 24
($context["attributes"] ?? null), "hasClass", array(0 => "toolbar-menu-administration"), "method")) ? ("form-group") : ("")), 1 => ((        // line 25
($context["has_parent"] ?? null)) ? ("js-form-wrapper form-wrapper") : ("")), 2 => ((        // line 26
($context["exposed_form"] ?? null)) ? ("views-exposed-form__actions") : ("")), 3 => (($this->getAttribute(        // line 27
($context["attributes"] ?? null), "hasClass", array(0 => "field--name-field-comment-body"), "method")) ? ("media-body") : ("")), 4 => (($this->getAttribute(        // line 28
($context["attributes"] ?? null), "hasClass", array(0 => "field--name-message"), "method")) ? ("media-body") : ("")), 5 => (($this->getAttribute(        // line 29
($context["attributes"] ?? null), "hasClass", array(0 => "more-link"), "method")) ? ("btn btn-flat") : ("")));
        // line 32
        if (($context["bare"] ?? null)) {
            // line 33
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
            echo "
";
        } else {
            // line 35
            echo "  <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">
   ";
            // line 36
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/system/container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 36,  65 => 35,  59 => 33,  57 => 32,  55 => 29,  54 => 28,  53 => 27,  52 => 26,  51 => 25,  50 => 24,  49 => 23,  46 => 21,  43 => 1,);
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
 * Theme override of a container used to wrap child elements.
 *
 * Used for grouped form items. Can also be used as a theme wrapper for any
 * renderable element, to surround it with a <div> and HTML attributes.
 * See the @link forms_api_reference.html Form API reference @endlink for more
 * information on the #theme_wrappers render array property.
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - children: The rendered child elements of the container.
 * - has_parent: A flag to indicate that the container has one or more parent
     containers.
 *
 * @see template_preprocess_container()
 */
#}

{%
  set classes = [
    not attributes.hasClass('toolbar-menu-administration') ? 'form-group',
    has_parent ? 'js-form-wrapper form-wrapper',
    exposed_form ? 'views-exposed-form__actions',
    attributes.hasClass('field--name-field-comment-body') ? 'media-body',
    attributes.hasClass('field--name-message') ? 'media-body',
    attributes.hasClass('more-link') ? 'btn btn-flat',
  ]
%}
{% if bare %}
  {{ children }}
{% else %}
  <div{{ attributes.addClass(classes) }}>
   {{ children }}
  </div>
{% endif %}
", "themes/t4ddiaspora/templates/system/container.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/system/container.html.twig");
    }
}
