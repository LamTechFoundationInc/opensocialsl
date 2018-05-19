<?php

/* themes/t4ddiaspora/templates/node/topic/node--topic--small-teaser.html.twig */
class __TwigTemplate_06d93edca429b97f06ab95b257272e8106bffdb655813917ed54787dd435ed6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("node--event--small-teaser.html.twig", "themes/t4ddiaspora/templates/node/topic/node--topic--small-teaser.html.twig", 1);
        $this->blocks = array(
            'extra_text' => array($this, 'block_extra_text'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "node--event--small-teaser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_extra_text($context, array $blocks = array())
    {
        // line 4
        echo "
  <div class=\"card__text\">
    <small class=\"text-muted\">
      ";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["date"] ?? null), "html", null, true));
        echo "
    </small>
  </div>

";
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/node/topic/node--topic--small-teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 7,  55 => 4,  52 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"node--event--small-teaser.html.twig\" %}

{% block extra_text %}

  <div class=\"card__text\">
    <small class=\"text-muted\">
      {{ date }}
    </small>
  </div>

{% endblock %}


", "themes/t4ddiaspora/templates/node/topic/node--topic--small-teaser.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/node/topic/node--topic--small-teaser.html.twig");
    }
}
