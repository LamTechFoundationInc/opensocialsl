<?php

/* themes/t4ddiaspora/templates/post/post.html.twig */
class __TwigTemplate_a2c3c92508cc05a539cec79a6da7c29e0fa010d05cf672e8f5c0b5b4267cf650 extends Twig_Template
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
        $tags = array("if" => 26);
        $filters = array("without" => 45, "render" => 47);
        $functions = array("attach_library" => 19);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('without', 'render'),
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

        // line 18
        echo "
";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/comment"), "html", null, true));
        echo "
<div class=\"card\">
  <div class=\"card__block\">

    <div class=\"media-wrapper\">
      <div class=\"media\">
        <div class=\"media-left avatar\">
          ";
        // line 26
        if (($context["author_picture"] ?? null)) {
            // line 27
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true));
            echo "
          ";
        }
        // line 29
        echo "        </div>
        <div class=\"media-body\">
          <div class=\"media-heading text-m\">
            ";
        // line 32
        if ($this->getAttribute(($context["content"] ?? null), "user_id", array())) {
            // line 33
            echo "              ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "user_id", array()), "html", null, true));
            echo "
            ";
        }
        // line 35
        echo "            <div class=\"post-date\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["date"] ?? null), "html", null, true));
        echo "</div>
          </div>
        </div>
      </div>

      ";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "links", array()), "html", null, true));
        echo "
  </div>

    <div class=\"margin-top-s iframe-container\">

      ";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "links", "field_post_comments", "like_and_dislike", "field_post_image", "user_id"), "html", null, true));
        echo "

      ";
        // line 47
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_post_image", array()))) {
            // line 48
            echo "        <p>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_post_image", array()), "html", null, true));
            echo "</p>
      ";
        }
        // line 50
        echo "
      <div class=\"clearfix\"></div>
      ";
        // line 52
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "like_and_dislike", array()), "html", null, true));
        echo "
    </div>


    ";
        // line 56
        if (($context["logged_in"] ?? null)) {
            // line 57
            echo "      <div class=\"card__nested-section\">
        ";
            // line 58
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_post_comments", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 61
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/post/post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 61,  123 => 58,  120 => 57,  118 => 56,  111 => 52,  107 => 50,  101 => 48,  99 => 47,  94 => 45,  86 => 40,  77 => 35,  71 => 33,  69 => 32,  64 => 29,  58 => 27,  56 => 26,  46 => 19,  43 => 18,);
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
* @file post.html.twig
* Default theme implementation to present Post data.
*
* This template is used when viewing Post pages.
*
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
<div class=\"card\">
  <div class=\"card__block\">

    <div class=\"media-wrapper\">
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

      {{ content.links }}
  </div>

    <div class=\"margin-top-s iframe-container\">

      {{ content|without('links', 'field_post_comments', 'like_and_dislike', 'field_post_image', 'user_id') }}

      {% if content.field_post_image|render %}
        <p>{{ content.field_post_image }}</p>
      {% endif %}

      <div class=\"clearfix\"></div>
      {{ content.like_and_dislike }}
    </div>


    {% if logged_in %}
      <div class=\"card__nested-section\">
        {{ content.field_post_comments }}
      </div>
    {% endif %}

  </div>
</div>
", "themes/t4ddiaspora/templates/post/post.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/post/post.html.twig");
    }
}
