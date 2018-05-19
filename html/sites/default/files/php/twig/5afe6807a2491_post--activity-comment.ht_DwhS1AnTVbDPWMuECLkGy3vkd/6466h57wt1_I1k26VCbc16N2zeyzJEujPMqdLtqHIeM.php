<?php

/* themes/t4ddiaspora/templates/post/post--activity-comment.html.twig */
class __TwigTemplate_378173e3a92b64a14f67435581e2983dc4962d2ee240ca7b1795a197a93154a4 extends Twig_Template
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
        $tags = array("set" => 22, "if" => 32);
        $filters = array();
        $functions = array("attach_library" => 19);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array(),
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

        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/comment"), "html", null, true));
        echo "

";
        // line 22
        $context["classes"] = array(0 => "margin-top-s", 1 => ((        // line 24
($context["logged_in"] ?? null)) ? ("margin-bottom-m") : ("")));
        // line 27
        echo "
  <hr class=\"ruler-sm\">

  <div class=\"media\">
    <div class=\"media-left avatar\">
      ";
        // line 32
        if (($context["author_picture"] ?? null)) {
            // line 33
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true));
            echo "
      ";
        }
        // line 35
        echo "    </div>
    <div class=\"media-body\">
      <div class=\"media-heading text-m\">
        ";
        // line 38
        if ($this->getAttribute(($context["content"] ?? null), "user_id", array())) {
            // line 39
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "user_id", array()), "html", null, true));
            echo "
        ";
        }
        // line 41
        echo "        <div class=\"post-date\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["date"] ?? null), "html", null, true));
        echo "</div>
      </div>
    </div>
  </div>

<div";
        // line 46
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 47
        if ($this->getAttribute(($context["content"] ?? null), "field_post", array())) {
            // line 48
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_post", array()), "html", null, true));
            echo "
  ";
        }
        // line 50
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/post/post--activity-comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 50,  94 => 48,  92 => 47,  88 => 46,  79 => 41,  73 => 39,  71 => 38,  66 => 35,  60 => 33,  58 => 32,  51 => 27,  49 => 24,  48 => 22,  43 => 19,);
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
* @file post-activity-comment.html.twig
* @deprecated
*
* The template is not used anymore since comments are aggegrated with
* the post itself. If a developer disables aggegration of comments
* this template will be used again.
*
* Available variables:
* - content: A list of content items. Use 'content' to print all content, or
* - attributes: HTML attributes for the container element.
*
* @see template_preprocess_post()
*
* @ingroup themeable
*/
#}
{{ attach_library('socialbase/comment') }}

{%
  set classes = [
    'margin-top-s',
    logged_in ? 'margin-bottom-m',
  ]
%}

  <hr class=\"ruler-sm\">

  <div class=\"media\">
    <div class=\"media-left avatar\">
      {% if author_picture %}
        {{ author_picture }}
      {% endif %}
    </div>
    <div class=\"media-body\">
      <div class=\"media-heading text-m\">
        {% if content.user_id %}
          {{ content.user_id }}
        {% endif %}
        <div class=\"post-date\">{{ date }}</div>
      </div>
    </div>
  </div>

<div{{ attributes.addClass(classes) }}>
  {% if content.field_post %}
    {{ content.field_post }}
  {% endif %}
</div>
", "themes/t4ddiaspora/templates/post/post--activity-comment.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/post/post--activity-comment.html.twig");
    }
}
