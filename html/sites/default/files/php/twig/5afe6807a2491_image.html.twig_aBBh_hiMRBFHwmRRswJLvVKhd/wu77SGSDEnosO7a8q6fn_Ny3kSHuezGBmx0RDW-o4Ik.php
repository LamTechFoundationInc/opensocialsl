<?php

/* themes/t4ddiaspora/templates/system/image.html.twig */
class __TwigTemplate_2b78868abf097cf1db3d5c5af8240b8ddf5f0cb139de1af2d81cdd0561b5e05d extends Twig_Template
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
        $tags = array("if" => 16, "set" => 18);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
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

        // line 15
        echo "
";
        // line 16
        if ((($context["style_name"] ?? null) == "social_large")) {
            // line 17
            echo "
  ";
            // line 18
            $context["classes"] = array(0 => "hero-avatar");
            // line 21
            echo "
";
        } else {
            // line 23
            echo "
  ";
            // line 24
            $context["classes"] = array(0 => (($this->getAttribute($this->getAttribute(            // line 25
($context["theme"] ?? null), "settings", array()), "image_shape", array())) ? ($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "image_shape", array())) : ("")), 1 => (($this->getAttribute($this->getAttribute(            // line 26
($context["theme"] ?? null), "settings", array()), "image_responsive", array())) ? ("img-responsive") : ("")));
            // line 28
            echo "
";
        }
        // line 30
        echo "
  <img";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo " />
";
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/system/image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 31,  68 => 30,  64 => 28,  62 => 26,  61 => 25,  60 => 24,  57 => 23,  53 => 21,  51 => 18,  48 => 17,  46 => 16,  43 => 15,);
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
 * Default theme implementation of an image.
 *
 * Available variables:
 * - attributes: HTML attributes for the img tag.
 * - style_name: (optional) The name of the image style applied.
 *
 * @see template_preprocess_image()
 *
 * @ingroup themeable
 */
#}

{% if style_name == 'social_large' %}

  {% set classes = [
    'hero-avatar'
  ] %}

{% else %}

  {% set classes = [
    theme.settings.image_shape ? theme.settings.image_shape,
    theme.settings.image_responsive ? 'img-responsive',
  ] %}

{% endif %}

  <img{{ attributes.addClass(classes) }} />
", "themes/t4ddiaspora/templates/system/image.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/system/image.html.twig");
    }
}
