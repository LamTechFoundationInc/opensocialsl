<?php

/* themes/t4ddiaspora/templates/activity/activity.html.twig */
class __TwigTemplate_04d2d6d313b30e053013f1aaf6853ba69c06578d3072a1c94897cc7be797c260 extends Twig_Template
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
        $tags = array("if" => 32);
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
<li ";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "stream-item"), "method"), "html", null, true));
        echo ">

  <i class=\"stream-icon\"></i>

  <div class=\"card card--stream\">

    <div class=\"card__block\">

      <div class=\"media-wrapper\">

        <div class=\"media\">

          <div class=\"media-left avatar\">
            ";
        // line 32
        if (($context["actor"] ?? null)) {
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["actor"] ?? null), "html", null, true));
        }
        // line 35
        echo "          </div>

          <div class=\"media-body\">
            <div class=\"media-heading text-m\">
              ";
        // line 39
        if ($this->getAttribute(($context["content"] ?? null), "field_activity_output_text", array())) {
            // line 40
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_activity_output_text", array()), "html", null, true));
        }
        // line 42
        echo "
              <div class=\"post-date\">";
        // line 43
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["date"] ?? null), "html", null, true));
        echo "</div>
            </div>

          </div>

        </div>

        ";
        // line 50
        if ($this->getAttribute(($context["content"] ?? null), "field_activity_entity", array())) {
            // line 51
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_activity_entity", array()), "html", null, true));
            echo "
        ";
        }
        // line 53
        echo "
      </div>

    </div>

  </div>


</li>
";
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/activity/activity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 53,  93 => 51,  91 => 50,  81 => 43,  78 => 42,  75 => 40,  73 => 39,  67 => 35,  64 => 33,  62 => 32,  46 => 19,  43 => 18,);
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

<li {{ attributes.addClass('stream-item') }}>

  <i class=\"stream-icon\"></i>

  <div class=\"card card--stream\">

    <div class=\"card__block\">

      <div class=\"media-wrapper\">

        <div class=\"media\">

          <div class=\"media-left avatar\">
            {% if actor %}
              {{- actor -}}
            {% endif %}
          </div>

          <div class=\"media-body\">
            <div class=\"media-heading text-m\">
              {% if content.field_activity_output_text %}
                {{- content.field_activity_output_text -}}
              {% endif %}

              <div class=\"post-date\">{{ date }}</div>
            </div>

          </div>

        </div>

        {% if content.field_activity_entity %}
          {{ content.field_activity_entity }}
        {% endif %}

      </div>

    </div>

  </div>


</li>
", "themes/t4ddiaspora/templates/activity/activity.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/activity/activity.html.twig");
    }
}
