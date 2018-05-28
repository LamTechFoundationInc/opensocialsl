<?php

/* profiles/contrib/social/modules/social_features/social_landing_page/templates/node--landing-page.html.twig */
class __TwigTemplate_bc8965cd6c71f6c3398e3973496579a1fa571d978bc4c1d136524e3f364fc8f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'nodefull_body' => array($this, 'block_nodefull_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 71, "if" => 78, "trans" => 85, "block" => 96);
        $filters = array("without" => 97);
        $functions = array("attach_library" => 67);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'trans', 'block'),
                array('without'),
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

        // line 66
        echo "
";
        // line 67
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/page-node"), "html", null, true));
        echo "
";
        // line 68
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("social_landing_page/landing_page"), "html", null, true));
        echo "

";
        // line 71
        $context["classes"] = array(0 => (($this->getAttribute(        // line 72
($context["node"] ?? null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 1 => (( !$this->getAttribute(        // line 73
($context["node"] ?? null), "isPublished", array(), "method")) ? ("node--unpublished") : ("")));
        // line 76
        echo "
<article";
        // line 77
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 78
        if ( !($context["is_front"] ?? null)) {
            // line 79
            echo "  <h1 class=\"visually-hidden\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</h1>
  ";
        }
        // line 81
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
  ";
        // line 82
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
  <div class=\"hero-action-button\">
    ";
        // line 84
        if (($context["node_edit_url"] ?? null)) {
            // line 85
            echo "    <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["node_edit_url"] ?? null), "html", null, true));
            echo "\" title=\"";
            echo t("Edit content", array());
            echo "\" class=\"waves-effect waves-light btn btn-raised btn-default btn-floating\">
      <svg class=\"icon-gray icon-medium\">
        <use xlink:href=\"#icon-edit\"></use>
      </svg>
    </a>
    ";
        }
        // line 91
        echo "  </div>
  ";
        // line 92
        if ( !$this->getAttribute(($context["node"] ?? null), "isPublished", array(), "method")) {
            // line 93
            echo "    <div class=\"node--unpublished__label\">";
            echo t("unpublished", array());
            echo "</div>
  ";
        }
        // line 95
        echo "
  ";
        // line 96
        $this->displayBlock('nodefull_body', $context, $blocks);
        // line 99
        echo "</article>
";
    }

    // line 96
    public function block_nodefull_body($context, array $blocks = array())
    {
        // line 97
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "flag_follow_content"), "html", null, true));
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/modules/social_features/social_landing_page/templates/node--landing-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 97,  120 => 96,  115 => 99,  113 => 96,  110 => 95,  104 => 93,  102 => 92,  99 => 91,  87 => 85,  85 => 84,  80 => 82,  75 => 81,  69 => 79,  67 => 78,  63 => 77,  60 => 76,  58 => 73,  57 => 72,  56 => 71,  51 => 68,  47 => 67,  44 => 66,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/contrib/social/modules/social_features/social_landing_page/templates/node--landing-page.html.twig", "/var/www/vhosts/mrutimes.com/adiasporai.com/html/profiles/contrib/social/modules/social_features/social_landing_page/templates/node--landing-page.html.twig");
    }
}
