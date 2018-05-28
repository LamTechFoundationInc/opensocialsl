<?php

/* themes/t4ddiaspora/templates/form/form-element--switch.html.twig */
class __TwigTemplate_ad076580a687390e5e4a9a5e37bb60c517cd33a8b2a72b93e2c97f422ed1c673 extends Twig_Template
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
        $tags = array("set" => 2, "if" => 17);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
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

        // line 2
        $context["classes"] = array(0 => "form-group", 1 => ((!twig_in_filter(        // line 4
($context["title_display"] ?? null), array(0 => "after", 1 => "before"))) ? ("form-no-label") : ("")), 2 => (((        // line 5
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), 3 => ((        // line 6
($context["errors"] ?? null)) ? ("error has-error") : ("")));
        // line 9
        $context["description_classes"] = array(0 => "help-block", 1 => (((        // line 11
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : ("")));
        // line 14
        echo "
<div";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "removeClass", array(0 => "form-inline"), "method"), "html", null, true));
        echo ">

  ";
        // line 17
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 18
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 20
        echo "
  <label class=\"control-label switch\">
    ";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
        echo "
  </label>


  ";
        // line 26
        if ($this->getAttribute(($context["description"] ?? null), "content", array())) {
            // line 27
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", array()), "addClass", array(0 => ($context["description_classes"] ?? null)), "method"), "html", null, true));
            echo ">
      ";
            // line 28
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 31
        echo "

  ";
        // line 33
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 34
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 36
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/form/form-element--switch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 36,  97 => 34,  95 => 33,  91 => 31,  85 => 28,  80 => 27,  78 => 26,  71 => 22,  67 => 20,  61 => 18,  59 => 17,  54 => 15,  51 => 14,  49 => 11,  48 => 9,  46 => 6,  45 => 5,  44 => 4,  43 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/t4ddiaspora/templates/form/form-element--switch.html.twig", "/var/www/vhosts/mrutimes.com/adiasporai.com/html/themes/t4ddiaspora/templates/form/form-element--switch.html.twig");
    }
}
