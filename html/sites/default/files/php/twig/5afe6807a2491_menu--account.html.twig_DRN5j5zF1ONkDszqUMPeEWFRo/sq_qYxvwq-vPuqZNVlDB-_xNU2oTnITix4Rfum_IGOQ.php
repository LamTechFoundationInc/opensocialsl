<?php

/* themes/t4ddiaspora/templates/navigation/menu--account.html.twig */
class __TwigTemplate_27aafe26a1d256e2460837e0b66cfd845b5f6908e706920b36952f45b07e3118 extends Twig_Template
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
        $tags = array("import" => 22, "macro" => 30, "if" => 32, "trans" => 38, "for" => 45);
        $filters = array();
        $functions = array("link" => 46);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'trans', 'for'),
                array(),
                array('link')
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

        // line 21
        echo "
";
        // line 22
        $context["menus"] = $this;
        // line 23
        echo "
";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0)));
        echo "

";
    }

    // line 30
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 31
            echo "  ";
            $context["menus"] = $this;
            // line 32
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 33
                echo "

  <ul";
                // line 35
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "nav navbar-nav navbar-user"), "method"), "html", null, true));
                echo " role=\"navigation\">

    <li class=\"dropdown profile not-logged-in\">
      <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"true\" aria-haspopup=\"true\" role=\"button\" title=\"";
                // line 38
                echo t("User menu", array());
                echo "\">
        <svg class=\"icon-white icon-medium\">
          <use xlink:href=\"#icon-account_circle\"></use>
        </svg>
        <span class=\"sr-only\">";
                // line 42
                echo t("User menu", array());
                echo "</span>
      </a>
      <ul class=\"dropdown-menu\">
        ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 46
                    echo "          <li> ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                    echo "
            ";
                    // line 47
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 48
                        echo "              ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1))));
                        echo "
            ";
                    }
                    // line 50
                    echo "          </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "      </ul>
    </li>

  </ul>

  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/navigation/menu--account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 52,  118 => 50,  112 => 48,  110 => 47,  105 => 46,  101 => 45,  95 => 42,  88 => 38,  82 => 35,  78 => 33,  75 => 32,  72 => 31,  58 => 30,  51 => 28,  48 => 23,  46 => 22,  43 => 21,);
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
 * Theme override to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 */
#}

{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
  {% import _self as menus %}
  {% if items %}


  <ul{{ attributes.addClass('nav navbar-nav navbar-user') }} role=\"navigation\">

    <li class=\"dropdown profile not-logged-in\">
      <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"true\" aria-haspopup=\"true\" role=\"button\" title=\"{% trans %} User menu {% endtrans %}\">
        <svg class=\"icon-white icon-medium\">
          <use xlink:href=\"#icon-account_circle\"></use>
        </svg>
        <span class=\"sr-only\">{% trans %} User menu {% endtrans %}</span>
      </a>
      <ul class=\"dropdown-menu\">
        {% for item in items %}
          <li> {{ link(item.title, item.url) }}
            {% if item.below %}
              {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
            {% endif %}
          </li>
        {% endfor %}
      </ul>
    </li>

  </ul>

  {% endif %}
{% endmacro %}
", "themes/t4ddiaspora/templates/navigation/menu--account.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/navigation/menu--account.html.twig");
    }
}
