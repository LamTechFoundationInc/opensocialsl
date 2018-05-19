<?php

/* themes/t4ddiaspora/templates/file/file-upload-help.html.twig */
class __TwigTemplate_c6c651756f7ff0c6dcb0567ce811ed56e98072f16414faae216c9556c8155345 extends Twig_Template
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
        $tags = array("if" => 15);
        $filters = array("safe_join" => 18);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('safe_join'),
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

        // line 14
        echo "
";
        // line 15
        if (($context["popover"] ?? null)) {
            // line 16
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["popover"] ?? null), "html", null, true));
            echo "
";
        } else {
            // line 18
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, ($context["descriptions"] ?? null), "<br>")));
            echo "
";
        }
        // line 20
        echo "
";
        // line 21
        if ((($context["popover"] ?? null) && ($context["description"] ?? null))) {
            // line 22
            echo "  &bullet;
";
        }
        // line 24
        echo "
";
        // line 25
        if (($context["description"] ?? null)) {
            // line 26
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/file/file-upload-help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 26,  72 => 25,  69 => 24,  65 => 22,  63 => 21,  60 => 20,  54 => 18,  48 => 16,  46 => 15,  43 => 14,);
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
 * Theme override to display help text for file fields.
 *
 * Available variables:
 * - description: The normal description for this field, specified by the user.
 * - descriptions: Lines of help text for uploading a file.
 * - popover: Markup to display the descriptions as a popover instead.
 *
 * @see template_preprocess_file_upload_help()
 */
#}

{% if popover %}
  {{ popover }}
{% else %}
  {{ descriptions|safe_join('<br>') }}
{% endif %}

{% if popover and description %}
  &bullet;
{% endif %}

{% if description %}
  {{ description }}
{% endif %}", "themes/t4ddiaspora/templates/file/file-upload-help.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/file/file-upload-help.html.twig");
    }
}
