<?php

/* themes/t4ddiaspora/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_466eb09d2b51972b9253251f3905ec5e160738e02dd9ce7d736c9ef195e678fa extends Twig_Template
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
        $tags = array("set" => 19, "if" => 27, "trans" => 28);
        $filters = array("clean_class" => 20);
        $functions = array("path" => 28);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'trans'),
                array('clean_class'),
                array('path')
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
        // line 19
        $context["classes"] = array(0 => ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 20
($context["plugin_id"] ?? null))), 1 => "navbar-header");
        // line 24
        echo "
<div ";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">

  ";
        // line 27
        if (($context["site_logo"] ?? null)) {
            // line 28
            echo "    <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>")));
            echo "\" title=\"";
            echo t("Home", array());
            echo "\" rel=\"home\">
      <img src=\"";
            // line 29
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true));
            echo "\" />
    </a>
  ";
        }
        // line 32
        echo "
  <button href=\"#\" data-toggle=\"collapse\" data-target=\"#main-navigation\" type=\"button\" aria-expanded=\"false\" class=\"navbar-toggle collapsed\">
    <span>";
        // line 34
        echo t("Menu", array());
        echo "</span>
    <span class=\"sr-only\">
      ";
        // line 36
        echo t("Toggle navigation", array());
        // line 37
        echo "    </span>

  </button>

</div>


";
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 37,  83 => 36,  78 => 34,  74 => 32,  66 => 29,  59 => 28,  57 => 27,  52 => 25,  49 => 24,  47 => 20,  46 => 19,  43 => 1,);
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
 * Default theme implementation for a branding block.
 *
 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 *
 * @ingroup templates
 */
#}
{%
  set classes = [
    'block-' ~ plugin_id|clean_class,
    'navbar-header',
  ]
%}

<div {{ attributes.addClass(classes) }}>

  {% if site_logo %}
    <a class=\"navbar-brand\" href=\"{{ path('<front>') }}\" title=\"{% trans %} Home {% endtrans %}\" rel=\"home\">
      <img src=\"{{ site_logo }}\" alt=\"{{ site_name }}\" />
    </a>
  {% endif %}

  <button href=\"#\" data-toggle=\"collapse\" data-target=\"#main-navigation\" type=\"button\" aria-expanded=\"false\" class=\"navbar-toggle collapsed\">
    <span>{% trans %} Menu {% endtrans %}</span>
    <span class=\"sr-only\">
      {% trans %} Toggle navigation {% endtrans %}
    </span>

  </button>

</div>


", "themes/t4ddiaspora/templates/block/block--system-branding-block.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/block/block--system-branding-block.html.twig");
    }
}