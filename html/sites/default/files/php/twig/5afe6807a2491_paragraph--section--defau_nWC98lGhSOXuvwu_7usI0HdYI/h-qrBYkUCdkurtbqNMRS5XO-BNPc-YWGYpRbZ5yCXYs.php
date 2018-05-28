<?php

/* profiles/contrib/social/modules/social_features/social_landing_page/templates/paragraph--section--default.html.twig */
class __TwigTemplate_50792796ea2aa21d8ca72b6bd84cb31e5334854cbae18f6435b9a7b23f03dae8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'paragraph' => array($this, 'block_paragraph'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 42, "block" => 47);
        $filters = array("clean_class" => 44);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block'),
                array('clean_class'),
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

        // line 42
        $context["classes"] = array(0 => "paragraph", 1 => ("paragraph--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 44
($context["paragraph"] ?? null), "bundle", array()))));
        // line 47
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = array())
    {
        // line 48
        echo "  <section ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
    ";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "  </section>
";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
        // line 50
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/modules/social_features/social_landing_page/templates/paragraph--section--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 50,  66 => 49,  61 => 52,  59 => 49,  54 => 48,  48 => 47,  46 => 44,  45 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/contrib/social/modules/social_features/social_landing_page/templates/paragraph--section--default.html.twig", "/var/www/vhosts/mrutimes.com/adiasporai.com/html/profiles/contrib/social/modules/social_features/social_landing_page/templates/paragraph--section--default.html.twig");
    }
}
