<?php

/* profiles/contrib/social/modules/social_features/social_landing_page/templates/page--node--landing-page.html.twig */
class __TwigTemplate_120d9737bbd541192adb10f303d22a0526db4acdbbefeccface2f78ffe9d7598 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 30, "block" => 49);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'block'),
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

        // line 29
        echo "
";
        // line 30
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 31
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
";
        }
        // line 33
        echo "
<main id=\"content\" class=\"main-container\" role=\"main\">

  ";
        // line 37
        echo "  ";
        // line 38
        echo "  ";
        // line 39
        echo "  ";
        if ($this->getAttribute(($context["page"] ?? null), "secondary_navigation", array())) {
            // line 40
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "secondary_navigation", array()), "html", null, true));
            echo "
  ";
        }
        // line 42
        echo "  ";
        if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
            // line 43
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
            echo "
  ";
        }
        // line 45
        echo "  ";
        // line 46
        echo "  <section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "removeClass", array(0 => "with-title-region", 1 => "layout--with-complementary"), "method"), "html", null, true));
        echo ">
    ";
        // line 48
        echo "    ";
        // line 49
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "
  </section>

</main>

";
        // line 58
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 59
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
";
        }
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
        // line 50
        echo "      <a id=\"main-content\" tabindex=\"-1\"></a>
      ";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/modules/social_features/social_landing_page/templates/page--node--landing-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 51,  114 => 50,  111 => 49,  103 => 59,  101 => 58,  94 => 53,  91 => 49,  89 => 48,  84 => 46,  82 => 45,  76 => 43,  73 => 42,  67 => 40,  64 => 39,  62 => 38,  60 => 37,  55 => 33,  49 => 31,  47 => 30,  44 => 29,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/contrib/social/modules/social_features/social_landing_page/templates/page--node--landing-page.html.twig", "/var/www/vhosts/mrutimes.com/adiasporai.com/html/profiles/contrib/social/modules/social_features/social_landing_page/templates/page--node--landing-page.html.twig");
    }
}
