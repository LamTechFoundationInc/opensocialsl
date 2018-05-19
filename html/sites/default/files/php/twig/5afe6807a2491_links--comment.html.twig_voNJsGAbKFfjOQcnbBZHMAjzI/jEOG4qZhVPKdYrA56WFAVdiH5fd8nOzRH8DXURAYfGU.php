<?php

/* themes/t4ddiaspora/templates/comment/links--comment.html.twig */
class __TwigTemplate_05064d97f39b61e48699ce7260b1f2d689b8e4955bf1de527fa51d30606c977a extends Twig_Template
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
        $tags = array("if" => 36, "for" => 53);
        $filters = array("reverse" => 53, "clean_class" => 54);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
                array('reverse', 'clean_class'),
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

        // line 35
        echo "
";
        // line 36
        if (($context["links"] ?? null)) {
            // line 37
            if (($context["heading"] ?? null)) {
                // line 38
                if ($this->getAttribute(($context["heading"] ?? null), "level", array())) {
                    // line 39
                    echo "<";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["heading"] ?? null), "level", array()), "html", null, true));
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["heading"] ?? null), "attributes", array()), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["heading"] ?? null), "text", array()), "html", null, true));
                    echo "</";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["heading"] ?? null), "level", array()), "html", null, true));
                    echo ">";
                } else {
                    // line 41
                    echo "<h2";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["heading"] ?? null), "attributes", array()), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["heading"] ?? null), "text", array()), "html", null, true));
                    echo "</h2>";
                }
            }
            // line 45
            if (($this->getAttribute(($context["links"] ?? null), "comment-edit", array(), "array") || $this->getAttribute(($context["links"] ?? null), "comment-delete", array(), "array"))) {
                // line 46
                echo "    <div class=\"comment__actions btn-group pull-right\">
      <button type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\" aria-haspopup=\"true\" class=\"btn btn-icon-toggle dropdown-toggle\">
        <svg class=\"btn-icon icon-gray\">
          <use xlink:href=\"#icon-expand_more\"></use>
        </svg>
      </button>
      <ul";
                // line 52
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "dropdown-menu"), "method"), "html", null, true));
                echo ">";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["links"] ?? null)));
                foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                    if (($context["key"] != "comment-reply")) {
                        // line 54
                        echo "<li";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => \Drupal\Component\Utility\Html::getClass($context["key"])), "method"), "html", null, true));
                        echo ">";
                        // line 55
                        if ($this->getAttribute($context["item"], "link", array())) {
                            // line 56
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true));
                        } elseif ($this->getAttribute(                        // line 57
$context["item"], "text_attributes", array())) {
                            // line 58
                            echo "<span";
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "text_attributes", array()), "html", null, true));
                            echo ">";
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true));
                            echo "</span>";
                        } else {
                            // line 60
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true));
                        }
                        // line 62
                        echo "</li>";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "</ul>
    </div>
  ";
            } else {
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                    if (($context["key"] != "comment-reply")) {
                        // line 69
                        echo "<li";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => \Drupal\Component\Utility\Html::getClass($context["key"])), "method"), "html", null, true));
                        echo ">";
                        // line 70
                        if ($this->getAttribute($context["item"], "link", array())) {
                            // line 71
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true));
                        } elseif ($this->getAttribute(                        // line 72
$context["item"], "text_attributes", array())) {
                            // line 73
                            echo "<span";
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "text_attributes", array()), "html", null, true));
                            echo ">";
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true));
                            echo "</span>";
                        } else {
                            // line 75
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true));
                        }
                        // line 77
                        echo "</li>";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        }
        // line 83
        echo "
";
        // line 84
        if ($this->getAttribute(($context["links"] ?? null), "comment-reply", array(), "array")) {
            // line 85
            echo "
  <div class=\"btn comment__reply-btn\">";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["links"] ?? null)));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                if (($context["key"] == "comment-reply")) {
                    // line 88
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/comment/links--comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 90,  167 => 88,  162 => 87,  159 => 85,  157 => 84,  154 => 83,  145 => 77,  142 => 75,  135 => 73,  133 => 72,  131 => 71,  129 => 70,  125 => 69,  120 => 68,  115 => 64,  108 => 62,  105 => 60,  98 => 58,  96 => 57,  94 => 56,  92 => 55,  88 => 54,  83 => 53,  80 => 52,  72 => 46,  70 => 45,  62 => 41,  52 => 39,  50 => 38,  48 => 37,  46 => 36,  43 => 35,);
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
 * Theme override for a set of links.
 *
 * Available variables:
 * - attributes: Attributes for the UL containing the list of links.
 * - links: Links to be output.
 *   Each link will have the following elements:
 *   - title: The link text.
 *   - href: The link URL. If omitted, the 'title' is shown as a plain text
 *     item in the links list. If 'href' is supplied, the entire link is passed
 *     to l() as its \$options parameter.
 *   - attributes: (optional) HTML attributes for the anchor, or for the <span>
 *     tag if no 'href' is supplied.
 *   - link_key: The link CSS class.
 * - heading: (optional) A heading to precede the links.
 *   - text: The heading text.
 *   - level: The heading level (e.g. 'h2', 'h3').
 *   - attributes: (optional) A keyed list of attributes for the heading.
 *   If the heading is a string, it will be used as the text of the heading and
 *   the level will default to 'h2'.
 *
 *   Headings should be used on navigation menus and any list of links that
 *   consistently appears on multiple pages. To make the heading invisible use
 *   the 'visually-hidden' CSS class. Do not use 'display:none', which
 *   removes it from screen readers and assistive technology. Headings allow
 *   screen reader and keyboard only users to navigate to or skip the links.
 *   See http://juicystudio.com/article/screen-readers-display-none.php and
 *   http://www.w3.org/TR/WCAG-TECHS/H42.html for more information.
 *
 * @see template_preprocess_links()
 */
#}

{% if links -%}
  {%- if heading -%}
    {%- if heading.level -%}
      <{{ heading.level }}{{ heading.attributes }}>{{ heading.text }}</{{ heading.level }}>
    {%- else -%}
      <h2{{ heading.attributes }}>{{ heading.text }}</h2>
    {%- endif -%}
  {%- endif -%}

  {% if links['comment-edit'] or links['comment-delete'] %}
    <div class=\"comment__actions btn-group pull-right\">
      <button type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\" aria-haspopup=\"true\" class=\"btn btn-icon-toggle dropdown-toggle\">
        <svg class=\"btn-icon icon-gray\">
          <use xlink:href=\"#icon-expand_more\"></use>
        </svg>
      </button>
      <ul{{ attributes.addClass('dropdown-menu') }}>
        {%- for key, item in links|reverse if key != \"comment-reply\" -%}
          <li{{ item.attributes.addClass(key|clean_class) }}>
            {%- if item.link -%}
              {{ item.link }}
            {%- elseif item.text_attributes -%}
              <span{{ item.text_attributes }}>{{ item.text }}</span>
            {%- else -%}
              {{ item.text }}
            {%- endif -%}
          </li>
        {%- endfor -%}
      </ul>
    </div>
  {% else %}

    {%- for key, item in links if key != \"comment-reply\" -%}
      <li{{ item.attributes.addClass(key|clean_class) }}>
        {%- if item.link -%}
          {{ item.link }}
        {%- elseif item.text_attributes -%}
          <span{{ item.text_attributes }}>{{ item.text }}</span>
        {%- else -%}
          {{ item.text }}
        {%- endif -%}
      </li>
    {%- endfor -%}

  {% endif %}

{%- endif %}

{% if links['comment-reply'] %}

  <div class=\"btn comment__reply-btn\">
    {%- for key, item in links|reverse if key == \"comment-reply\" -%}
      {{ item.link }}
    {%- endfor -%}
  </div>

{%- endif %}
", "themes/t4ddiaspora/templates/comment/links--comment.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/comment/links--comment.html.twig");
    }
}
