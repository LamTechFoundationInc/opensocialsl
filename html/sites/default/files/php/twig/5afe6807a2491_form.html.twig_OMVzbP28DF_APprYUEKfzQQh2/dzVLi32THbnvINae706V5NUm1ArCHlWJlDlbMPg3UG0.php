<?php

/* themes/t4ddiaspora/templates/form/form.html.twig */
class __TwigTemplate_f1e701241c8ed68ccd745313e02abd4f5421136b666bdbf2e343e288889817e2 extends Twig_Template
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
        $tags = array("if" => 16);
        $filters = array();
        $functions = array("attach_library" => 17);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 15
        echo "
";
        // line 16
        if ($this->getAttribute(($context["attributes"] ?? null), "hasClass", array(0 => "form--default"), "method")) {
            // line 17
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/form-default"), "html", null, true));
            echo "
";
        }
        // line 19
        echo "
";
        // line 20
        if ($this->getAttribute(($context["attributes"] ?? null), "hasClass", array(0 => "card"), "method")) {
            // line 21
            echo "  <form";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "removeClass", array(0 => "card"), "method"), "html", null, true));
            echo ">
    <div class=\"card\">
      <div class=\"card__block\">
        ";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
            echo "
    </form>

    ";
            // line 30
            echo "
";
        } elseif (        // line 31
($context["is_search_form"] ?? null)) {
            // line 32
            echo "
  ";
            // line 33
            if (($context["in_hero_region"] ?? null)) {
                // line 34
                echo "
    <form";
                // line 35
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
      <div class=\"form-group\">
        ";
                // line 37
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
                echo "
      </div>
    </form>

  ";
            } elseif (            // line 41
($context["in_content_top_region"] ?? null)) {
                // line 42
                echo "
    <form";
                // line 43
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "search-take-over"), "method"), "html", null, true));
                echo ">
      <div class=\"form-group\">
        <button class=\"btn--close-search-take-over\" type=\"button\">
          <svg class=\"icon-search-form-close\">
            <use xlink:href=\"#icon-close\"></use>
          </svg>
        </button>
        ";
                // line 50
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
                echo "
      </div>
    </form>

  ";
            } else {
                // line 55
                echo "
    <form";
                // line 56
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
      <div class=\"form-group form--navbar-search\" id=\"navbar-search\">
        ";
                // line 58
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
                echo "
      </div>
    </form>

  ";
            }
            // line 63
            echo "
";
        } else {
            // line 65
            echo "
  <form";
            // line 66
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
            echo ">
    ";
            // line 67
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
            echo "
  </form>

";
        }
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/form/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 67,  143 => 66,  140 => 65,  136 => 63,  128 => 58,  123 => 56,  120 => 55,  112 => 50,  102 => 43,  99 => 42,  97 => 41,  90 => 37,  85 => 35,  82 => 34,  80 => 33,  77 => 32,  75 => 31,  72 => 30,  66 => 24,  59 => 21,  57 => 20,  54 => 19,  48 => 17,  46 => 16,  43 => 15,);
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
 * Default theme implementation for a 'form' element.
 *
 * Available variables
 * - attributes: A list of HTML attributes for the wrapper element.
 * - children: The child elements of the form.
 *
 * @see template_preprocess_form()
 *
 * @ingroup themeable
 */
#}

{% if attributes.hasClass('form--default') %}
  {{ attach_library('socialbase/form-default') }}
{% endif %}

{% if attributes.hasClass('card') %}
  <form{{ attributes.removeClass('card') }}>
    <div class=\"card\">
      <div class=\"card__block\">
        {{ children }}
    </form>

    {#
      The card is closed function socialbase_form_alter in the info_text suffix
    #}

{% elseif is_search_form %}

  {% if in_hero_region %}

    <form{{ attributes }}>
      <div class=\"form-group\">
        {{ children }}
      </div>
    </form>

  {% elseif in_content_top_region %}

    <form{{ attributes.addClass('search-take-over') }}>
      <div class=\"form-group\">
        <button class=\"btn--close-search-take-over\" type=\"button\">
          <svg class=\"icon-search-form-close\">
            <use xlink:href=\"#icon-close\"></use>
          </svg>
        </button>
        {{ children }}
      </div>
    </form>

  {% else %}

    <form{{ attributes }}>
      <div class=\"form-group form--navbar-search\" id=\"navbar-search\">
        {{ children }}
      </div>
    </form>

  {% endif %}

{% else %}

  <form{{ attributes }}>
    {{ children }}
  </form>

{% endif %}
", "themes/t4ddiaspora/templates/form/form.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/form/form.html.twig");
    }
}