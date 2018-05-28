<?php

/* themes/t4ddiaspora/templates/node/event/node--event--full.html.twig */
class __TwigTemplate_3e302f44426ae58bd60940bf9d03e1606a71e2b31e298a846c94cb979365439d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("node--full.html.twig", "themes/t4ddiaspora/templates/node/event/node--event--full.html.twig", 1);
        $this->blocks = array(
            'nodefull_specialfields' => array($this, 'block_nodefull_specialfields'),
            'nodefull_body' => array($this, 'block_nodefull_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "node--full.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("trans" => 9, "if" => 14);
        $filters = array("render" => 14, "without" => 31);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('trans', 'if'),
                array('render', 'without'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_nodefull_specialfields($context, array $blocks = array())
    {
        // line 5
        echo "
  <div class=\"article__special-fields\">
    <div class=\"article__special-field\">
      <svg class=\"article__special-fields-icon\"><use xlink:href=\"#icon-event\"></use></svg>
      <span class=\"sr-only\">";
        // line 9
        echo t("Event date", array());
        echo "</span>
      <span class=\"inline-center\">
        <strong>";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["event_date"] ?? null), "html", null, true));
        echo "</strong>
      </span>
    </div>
    ";
        // line 14
        if (($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_event_address", array())) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_event_location", array())))) {
            // line 15
            echo "      <div class=\"article__special-field\">
        <svg class=\"article__special-fields-icon\"><use xlink:href=\"#icon-location\"></use></svg>
        <span class=\"sr-only\">";
            // line 17
            echo t("Event location", array());
            echo "</span>
        <span class=\"inline-center\">
          <strong>";
            // line 19
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_event_location", array()), "html", null, true));
            echo "</strong>
          ";
            // line 20
            if (( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_event_address", array()))) &&  !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_event_location", array()))))) {
                echo " &bullet; ";
            }
            // line 21
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_event_address", array()), "html", null, true));
            echo "
        </span>
      </div>
    ";
        }
        // line 25
        echo "  </div>

";
    }

    // line 29
    public function block_nodefull_body($context, array $blocks = array())
    {
        // line 30
        echo "
  ";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "field_event_address", "field_event_location", "field_event_type", "book_navigation", "flag_follow_content"), "html", null, true));
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/node/event/node--event--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 31,  109 => 30,  106 => 29,  100 => 25,  92 => 21,  88 => 20,  84 => 19,  79 => 17,  75 => 15,  73 => 14,  67 => 11,  62 => 9,  56 => 5,  53 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/t4ddiaspora/templates/node/event/node--event--full.html.twig", "/var/www/vhosts/mrutimes.com/adiasporai.com/html/themes/t4ddiaspora/templates/node/event/node--event--full.html.twig");
    }
}
