<?php

/* profiles/contrib/social/modules/social_features/social_landing_page/templates/paragraph--button--default.html.twig */
class __TwigTemplate_23876ce929a2d676986e3134df3fb512c51ba3d137529855410ddbb16eb5c48b extends Twig_Template
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
        $tags = array("set" => 42, "block" => 47, "if" => 48);
        $filters = array("clean_class" => 44, "render" => 48, "trim" => 52, "striptags" => 52);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block', 'if'),
                array('clean_class', 'render', 'trim', 'striptags'),
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
        echo "  ";
        if (((($context["logged_in"] ?? null) &&  !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_button_link_lu", array())))) || ( !($context["logged_in"] ?? null) &&  !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_button_link_an", array())))))) {
            // line 49
            echo "    <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">
    ";
            // line 50
            $this->displayBlock('content', $context, $blocks);
            // line 61
            echo "    </div>
  ";
        }
    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
        // line 51
        echo "      <div class=\"card__actionbar\">
        <div class=\"btn btn-lg ";
        // line 52
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_button_style", array())))), "html", null, true));
        echo "\">
          ";
        // line 53
        if (($context["logged_in"] ?? null)) {
            // line 54
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_button_link_lu", array()), "html", null, true));
            echo "
          ";
        } else {
            // line 56
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_button_link_an", array()), "html", null, true));
            echo "
          ";
        }
        // line 58
        echo "        </div>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/modules/social_features/social_landing_page/templates/paragraph--button--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 58,  88 => 56,  82 => 54,  80 => 53,  76 => 52,  73 => 51,  70 => 50,  64 => 61,  62 => 50,  57 => 49,  54 => 48,  48 => 47,  46 => 44,  45 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/contrib/social/modules/social_features/social_landing_page/templates/paragraph--button--default.html.twig", "/var/www/vhosts/mrutimes.com/adiasporai.com/html/profiles/contrib/social/modules/social_features/social_landing_page/templates/paragraph--button--default.html.twig");
    }
}
