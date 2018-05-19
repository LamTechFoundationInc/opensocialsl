<?php

/* themes/t4ddiaspora/templates/post/field--field-post-comments.html.twig */
class __TwigTemplate_f5b866906cc42474095a4d10e09afd21ca8c7a9fcea05821ce78d17a4346b995 extends Twig_Template
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
        $tags = array("if" => 30);
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

        // line 29
        echo "
";
        // line 30
        if ((($context["comments"] ?? null) &&  !($context["label_hidden"] ?? null))) {
            // line 31
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
            echo "
    <h2";
            // line 32
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_attributes"] ?? null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</h2>
    ";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "
";
        }
        // line 35
        echo "
";
        // line 36
        if (($context["comment_form"] ?? null)) {
            // line 37
            echo "
  ";
            // line 38
            if (($context["more_link"] ?? null)) {
                // line 39
                echo "    <div class=\"margin-bottom-xl\">
  ";
            }
            // line 41
            echo "
  ";
            // line 42
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["comment_form"] ?? null), "html", null, true));
            echo "

  ";
            // line 44
            if (($context["more_link"] ?? null)) {
                // line 45
                echo "    </div>
  ";
            }
            // line 47
            echo "
";
        }
        // line 49
        echo "
";
        // line 50
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["comments"] ?? null), "html", null, true));
        echo "

";
        // line 52
        if ((($context["logged_in"] ?? null) && ($context["more_link"] ?? null))) {
            // line 53
            echo "  <div class=\"margin-top-l text-center\">
    ";
            // line 54
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["more_link"] ?? null), "html", null, true));
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/post/field--field-post-comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 54,  106 => 53,  104 => 52,  99 => 50,  96 => 49,  92 => 47,  88 => 45,  86 => 44,  81 => 42,  78 => 41,  74 => 39,  72 => 38,  69 => 37,  67 => 36,  64 => 35,  59 => 33,  53 => 32,  48 => 31,  46 => 30,  43 => 29,);
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
 * Default theme override for comment fields.
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - label_hidden: Whether to show the field label or not.
 * - title_attributes: HTML attributes for the title.
 * - label: The label for the field.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional title output populated by modules, intended to
 *   be displayed after the main title tag that appears in the template.
 * - comments: List of comments rendered through comment.html.twig.
 * - content_attributes: HTML attributes for the form title.
 * - comment_form: The 'Add new comment' form.
 * - comment_display_mode: Is the comments are threaded.
 * - comment_type: The comment type bundle ID for the comment field.
 * - entity_type: The entity type to which the field belongs.
 * - field_name: The name of the field.
 * - field_type: The type of the field.
 * - label_display: The display settings for the label.
 *
 * @see template_preprocess_field()
 * @see comment_preprocess_field()
 */
#}

{% if comments and not label_hidden %}
    {{ title_prefix }}
    <h2{{ title_attributes }}>{{ label }}</h2>
    {{ title_suffix }}
{% endif %}

{% if comment_form %}

  {% if more_link %}
    <div class=\"margin-bottom-xl\">
  {% endif %}

  {{ comment_form }}

  {% if more_link %}
    </div>
  {% endif %}

{% endif %}

{{ comments }}

{% if logged_in and more_link %}
  <div class=\"margin-top-l text-center\">
    {{ more_link }}
  </div>
{% endif %}
", "themes/t4ddiaspora/templates/post/field--field-post-comments.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/post/field--field-post-comments.html.twig");
    }
}