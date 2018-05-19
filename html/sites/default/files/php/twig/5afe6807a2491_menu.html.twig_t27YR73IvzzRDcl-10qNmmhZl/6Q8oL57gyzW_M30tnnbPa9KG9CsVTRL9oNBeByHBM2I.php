<?php

/* menu.html.twig */
class __TwigTemplate_d4d6fc7c29a5c72d463bd7f44f2b3a29c16e5ddd0187bd8f18c5b112dbf720c2 extends Twig_Template
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
        $tags = array("import" => 24, "macro" => 32, "if" => 35, "for" => 41, "set" => 43);
        $filters = array("clean_class" => 22);
        $functions = array("link" => 54);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'for', 'set'),
                array('clean_class'),
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
<div class=\"navbar ";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("menu-" . \Drupal\Component\Utility\Html::getClass(($context["menu_name"] ?? null))), "html", null, true));
        echo "\">

";
        // line 24
        $context["menus"] = $this;
        // line 25
        echo "
";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0, \Drupal\Component\Utility\Html::getClass(($context["menu_name"] ?? null)))));
        echo "

";
        // line 64
        echo "
</div>
";
    }

    // line 32
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 33
            echo "  ";
            $context["menus"] = $this;
            // line 34
            echo "
  ";
            // line 35
            if (($context["items"] ?? null)) {
                // line 36
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 37
                    echo "      <ul role=\"navigation\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "nav", 1 => "navbar-nav", 2 => ($context["menu_name"] ?? null)), "method"), "html", null, true));
                    echo ">
    ";
                } else {
                    // line 39
                    echo "      <ul";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "dropdown-menu", 1 => ($context["menu_name"] ?? null)), "method"), "html", null, true));
                    echo ">
    ";
                }
                // line 41
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 42
                    echo "      ";
                    // line 43
                    $context["item_classes"] = array(0 => "expanded", 1 => "dropdown", 2 => (($this->getAttribute(                    // line 46
$context["item"], "in_active_trail", array())) ? ("active") : ("")));
                    // line 49
                    echo "      ";
                    if (((($context["menu_level"] ?? null) == 0) && $this->getAttribute($context["item"], "is_expanded", array()))) {
                        // line 50
                        echo "        <li";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => ($context["item_classes"] ?? null)), "method"), "html", null, true));
                        echo ">
        <a href=\"";
                        // line 51
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                        echo " <span class=\"caret\"></span></a>
      ";
                    } else {
                        // line 53
                        echo "        <li>
        ";
                        // line 54
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                        echo "
      ";
                    }
                    // line 56
                    echo "      ";
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 57
                        echo "        ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), $this->getAttribute(($context["attributes"] ?? null), "removeClass", array(0 => "nav", 1 => "navbar-nav"), "method"), (($context["menu_level"] ?? null) + 1), ($context["menu_name"] ?? null))));
                        echo "
      ";
                    }
                    // line 59
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "    </ul>
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
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 61,  147 => 59,  141 => 57,  138 => 56,  133 => 54,  130 => 53,  123 => 51,  118 => 50,  115 => 49,  113 => 46,  112 => 43,  110 => 42,  105 => 41,  99 => 39,  93 => 37,  90 => 36,  88 => 35,  85 => 34,  82 => 33,  67 => 32,  61 => 64,  56 => 30,  53 => 25,  51 => 24,  46 => 22,  43 => 21,);
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

<div class=\"navbar {{'menu-' ~ menu_name|clean_class}}\">

{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0, menu_name|clean_class) }}

{% macro menu_links(items, attributes, menu_level, menu_name) %}
  {% import _self as menus %}

  {% if items %}
    {% if menu_level == 0 %}
      <ul role=\"navigation\"{{ attributes.addClass('nav', 'navbar-nav', menu_name) }}>
    {% else %}
      <ul{{ attributes.addClass('dropdown-menu', menu_name) }}>
    {% endif %}
    {% for item in items %}
      {%
        set item_classes = [
          'expanded',
          'dropdown',
          item.in_active_trail ? 'active',
        ]
      %}
      {% if menu_level == 0 and item.is_expanded %}
        <li{{ item.attributes.addClass(item_classes) }}>
        <a href=\"{{ item.url }}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ item.title }} <span class=\"caret\"></span></a>
      {% else %}
        <li>
        {{ link(item.title, item.url) }}
      {% endif %}
      {% if item.below %}
        {{ menus.menu_links(item.below, attributes.removeClass('nav', 'navbar-nav'), menu_level + 1, menu_name) }}
      {% endif %}
      </li>
    {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}

</div>
", "menu.html.twig", "themes/t4ddiaspora/templates/navigation/menu.html.twig");
    }
}
