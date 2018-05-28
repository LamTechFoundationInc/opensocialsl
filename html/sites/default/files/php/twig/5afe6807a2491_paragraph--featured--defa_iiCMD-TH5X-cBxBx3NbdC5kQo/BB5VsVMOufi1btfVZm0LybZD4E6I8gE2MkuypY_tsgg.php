<?php

/* profiles/contrib/social/modules/social_features/social_landing_page/templates/paragraph--featured--default.html.twig */
class __TwigTemplate_99f5cac17294e85fdf76645f7c0a11f5bc272fb35289c9f310a55a2414eef381 extends Twig_Template
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
        $tags = array("set" => 44, "block" => 49, "if" => 52);
        $filters = array("clean_class" => 46, "render" => 52);
        $functions = array("attach_library" => 41);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block', 'if'),
                array('clean_class', 'render'),
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

        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("social_landing_page/section.featured"), "html", null, true));
        echo "

";
        // line 44
        $context["classes"] = array(0 => "paragraph", 1 => ("paragraph--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 46
($context["paragraph"] ?? null), "bundle", array()))));
        // line 49
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = array())
    {
        // line 50
        echo "  <section ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
    <div class=\"container\">
      ";
        // line 52
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_featured_title", array())))) {
            // line 53
            echo "      <h2 class=\"title\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_featured_title", array()), "html", null, true));
            echo "</h2>
      ";
        }
        // line 55
        echo "      <div class=\"card__text\">
        ";
        // line 56
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_featured_description", array()), "html", null, true));
        echo "
      </div>
      ";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "      ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_featured_link", array())))) {
            // line 62
            echo "      <footer class=\"card__actionbar\">
          <div class=\"card__link\">
            ";
            // line 64
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_featured_link", array()), "html", null, true));
            echo "
          </div>
      </footer>
      ";
        }
        // line 68
        echo "    </div>
  </section>
";
    }

    // line 58
    public function block_content($context, array $blocks = array())
    {
        // line 59
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_featured_items", array()), "html", null, true));
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/modules/social_features/social_landing_page/templates/paragraph--featured--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 59,  103 => 58,  97 => 68,  90 => 64,  86 => 62,  83 => 61,  81 => 58,  76 => 56,  73 => 55,  67 => 53,  65 => 52,  59 => 50,  53 => 49,  51 => 46,  50 => 44,  45 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/contrib/social/modules/social_features/social_landing_page/templates/paragraph--featured--default.html.twig", "/var/www/vhosts/mrutimes.com/adiasporai.com/html/profiles/contrib/social/modules/social_features/social_landing_page/templates/paragraph--featured--default.html.twig");
    }
}
