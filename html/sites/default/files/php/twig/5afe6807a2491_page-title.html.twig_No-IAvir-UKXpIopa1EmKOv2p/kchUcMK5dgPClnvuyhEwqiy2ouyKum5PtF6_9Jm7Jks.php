<?php

/* themes/t4ddiaspora/templates/system/page-title.html.twig */
class __TwigTemplate_2a5f74d6d0679155d360229b793b2a450c1f0f8adacccf66320ada1479ad58ae extends Twig_Template
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
        $tags = array("set" => 21, "if" => 27);
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

        // line 19
        echo "
";
        // line 21
        $context["classes"] = array(0 => "h4 section-title", 1 => ((        // line 23
($context["stream"] ?? null)) ? ("section-title-stream") : ("")));
        // line 26
        echo "
";
        // line 27
        if ((($context["node"] ?? null) &&  !($context["edit"] ?? null))) {
            // line 28
            echo "
  ";
            // line 29
            $context["extra_classes"] = array(0 => "section-title-node");
            // line 33
            echo "
";
        }
        // line 35
        echo "

";
        // line 37
        if (($context["title"] ?? null)) {
            // line 38
            echo "  <h1";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null), 1 => ($context["extra_classes"] ?? null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h1>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/system/page-title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 38,  67 => 37,  63 => 35,  59 => 33,  57 => 29,  54 => 28,  52 => 27,  49 => 26,  47 => 23,  46 => 21,  43 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/t4ddiaspora/templates/system/page-title.html.twig", "/var/www/vhosts/mrutimes.com/adiasporai.com/html/themes/t4ddiaspora/templates/system/page-title.html.twig");
    }
}
