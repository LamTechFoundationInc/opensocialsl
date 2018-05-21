<?php

/* themes/t4ddiaspora/templates/activity/activity--notification.html.twig */
class __TwigTemplate_b489307ef97d335c67eee4e230ba9f151e16be1cca68be2ecb25c8a399507a10 extends Twig_Template
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
        $tags = array("if" => 22);
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

        // line 18
        echo "
<a href=\"";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["full_url"] ?? null), "html", null, true));
        echo "\" class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["status_class"] ?? null), "html", null, true));
        echo "\">
  <div";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "media"), "method"), "html", null, true));
        echo ">
    <div class=\"media-left\">
      ";
        // line 22
        if (($context["actor"] ?? null)) {
            // line 23
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["actor"] ?? null), "html", null, true));
        }
        // line 25
        echo "    </div>
    <div class=\"media-body\">
      ";
        // line 27
        if (($context["content"] ?? null)) {
            // line 28
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        }
        // line 30
        echo "      <div class=\"text-gray-light\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["date"] ?? null), "html", null, true));
        echo "</div>
    </div>
  </div>
</a>
";
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/activity/activity--notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 30,  68 => 28,  66 => 27,  62 => 25,  59 => 23,  57 => 22,  52 => 20,  46 => 19,  43 => 18,);
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
 * @file activity.html.twig
 * Default theme implementation to present Activity data.
 *
 * This template is used when viewing Activity pages.
 *
 *
 * Available variables:
 * - content: A list of content items. Use 'content' to print all content, or
 * - attributes: HTML attributes for the container element.
 *
 * @see template_preprocess_activity()
 *
 * @ingroup themeable
 */
#}

<a href=\"{{ full_url }}\" class=\"{{ status_class }}\">
  <div{{ attributes.addClass('media') }}>
    <div class=\"media-left\">
      {% if actor %}
        {{- actor -}}
      {% endif %}
    </div>
    <div class=\"media-body\">
      {% if content %}
        {{- content -}}
      {% endif %}
      <div class=\"text-gray-light\">{{ date }}</div>
    </div>
  </div>
</a>
", "themes/t4ddiaspora/templates/activity/activity--notification.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/activity/activity--notification.html.twig");
    }
}
