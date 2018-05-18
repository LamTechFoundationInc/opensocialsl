<?php

/* profiles/contrib/social/modules/social_features/social_landing_page/templates/paragraph--featured--default.html.twig */
class __TwigTemplate_99f5cac17294e85fdf76645f7c0a11f5bc272fb35289c9f310a55a2414eef381 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'paragraph' => array($this, 'block_paragraph'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 44, "block" => 49, "if" => 52);
        $filters = array("clean_class" => 46, "render" => 52);
        $functions = array("attach_library" => 41);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block', 'if'),
                array('clean_class', 'render'),
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

        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("social_landing_page/section.featured"), "html", null, true));
        echo "

";
        // line 44
        $context["classes"] = array(0 => "paragraph", 1 => ("paragraph--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 46
($context["paragraph"] ?? null), "bundle", array()))));
        // line 49
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = array())
    {
        // line 50
        echo "  <section ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
    <div class=\"container\">
      ";
        // line 52
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_featured_title", array())))) {
            // line 53
            echo "      <h2 class=\"title\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_featured_title", array()), "html", null, true));
            echo "</h2>
      ";
        }
        // line 55
        echo "      <div class=\"card__text\">
        ";
        // line 56
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_featured_description", array()), "html", null, true));
        echo "
      </div>
      ";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "      ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_featured_link", array())))) {
            // line 62
            echo "      <footer class=\"card__actionbar\">
          <div class=\"card__link\">
            ";
            // line 64
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_featured_link", array()), "html", null, true));
            echo "
          </div>
      </footer>
      ";
        }
        // line 68
        echo "    </div>
  </section>
";
    }

    // line 58
    public function block_content($context, array $blocks = array())
    {
        // line 59
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_featured_items", array()), "html", null, true));
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/modules/social_features/social_landing_page/templates/paragraph--featured--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 59,  103 => 58,  97 => 68,  90 => 64,  86 => 62,  83 => 61,  81 => 58,  76 => 56,  73 => 55,  67 => 53,  65 => 52,  59 => 50,  53 => 49,  51 => 46,  50 => 44,  45 => 41,);
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
 * Default theme implementation to display a paragraph.
 *
 * Available variables:
 * - paragraph: Full paragraph entity.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - paragraph.getCreatedTime() will return the paragraph creation timestamp.
 *   - paragraph.id(): The paragraph ID.
 *   - paragraph.bundle(): The type of the paragraph, for example, \"image\" or \"text\".
 *   - paragraph.getOwnerId(): The user ID of the paragraph author.
 *   See Drupal\\paragraphs\\Entity\\Paragraph for a full list of public properties
 *   and methods for the paragraph object.
 * - content: All paragraph items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - paragraphs: The current template type (also known as a \"theming hook\").
 *   - paragraphs--type-[type]: The current paragraphs type. For example, if the paragraph is an
 *     \"Image\" it would result in \"paragraphs--type--image\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - paragraphs--view-mode--[view_mode]: The View Mode of the paragraph; for example, a
 *     preview would result in: \"paragraphs--view-mode--preview\", and
 *     default: \"paragraphs--view-mode--default\".
 * - view_mode: View mode; for example, \"preview\" or \"full\".
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_paragraph()
 *
 * @ingroup themeable
 */
#}
{{ attach_library('social_landing_page/section.featured')}}

{%
  set classes = [
    'paragraph',
    'paragraph--' ~ paragraph.bundle|clean_class,
  ]
%}
{% block paragraph %}
  <section {{ attributes.addClass(classes) }}>
    <div class=\"container\">
      {% if (content.field_featured_title|render is not empty) %}
      <h2 class=\"title\">{{ content.field_featured_title }}</h2>
      {% endif %}
      <div class=\"card__text\">
        {{ content.field_featured_description }}
      </div>
      {% block content %}
        {{ content.field_featured_items }}
      {% endblock %}
      {% if (content.field_featured_link|render is not empty) %}
      <footer class=\"card__actionbar\">
          <div class=\"card__link\">
            {{ content.field_featured_link }}
          </div>
      </footer>
      {% endif %}
    </div>
  </section>
{% endblock paragraph %}
", "profiles/contrib/social/modules/social_features/social_landing_page/templates/paragraph--featured--default.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/profiles/contrib/social/modules/social_features/social_landing_page/templates/paragraph--featured--default.html.twig");
    }
}
