<?php

/* themes/t4ddiaspora/templates/profile/profile--profile--small_teaser.html.twig */
class __TwigTemplate_e6385cc3c73cf464469cc26642fbae8f5d9171c67506a0b829b345bc423e3394 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        // line 22
        echo "

<div class=\"card__block card__block--list\">

  <a href=\"";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["profile_stream_url"] ?? null), "html", null, true));
        echo "\" class=\"card__text list-item\">
    <span class=\"list-item__avatar\">
      ";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_profile_image", array()), "html", null, true));
        echo "
    </span>

    <span class=\"list-item__text\">
      ";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["profile_name"] ?? null), "html", null, true));
        echo "
    </span>

  </a>

</div>
";
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/profile/profile--profile--small_teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 32,  54 => 28,  49 => 26,  43 => 22,);
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


<div class=\"card__block card__block--list\">

  <a href=\"{{ profile_stream_url }}\" class=\"card__text list-item\">
    <span class=\"list-item__avatar\">
      {{ content.field_profile_image }}
    </span>

    <span class=\"list-item__text\">
      {{ profile_name }}
    </span>

  </a>

</div>
", "themes/t4ddiaspora/templates/profile/profile--profile--small_teaser.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/profile/profile--profile--small_teaser.html.twig");
    }
}
