<?php

/* profiles/contrib/social/modules/social_features/social_landing_page/templates/paragraph--hero--default.html.twig */
class __TwigTemplate_1e8ce9d8fa9efcb59f2a9a707da73a481b2d06119e757f21fdd6428f2b375137 extends Twig_Template
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
        $tags = array("set" => 45, "if" => 55);
        $filters = array("clean_class" => 46);
        $functions = array("attach_library" => 41);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class'),
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/hero"), "html", null, true));
        echo "
";
        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("social_landing_page/section.hero"), "html", null, true));
        echo "

";
        // line 45
        $context["cover_classes"] = array(0 => ("paragraph--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 46
($context["paragraph"] ?? null), "bundle", array()))), 1 => "cover", 2 => "brand-bg-primary", 3 => "cover--landing", 4 => "hero", 5 => ((        // line 51
($context["hero_styled_image_url"] ?? null)) ? ("cover-img cover-img-gradient") : ("")));
        // line 54
        echo "
<div";
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["cover_classes"] ?? null)), "method"), "html", null, true));
        echo " ";
        if (($context["hero_styled_image_url"] ?? null)) {
            echo " style=\"background-image: url('";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["hero_styled_image_url"] ?? null), "html", null, true));
            echo "');\" ";
        }
        echo ">
  <div class=\"hero__bgimage-overlay\"></div>
  ";
        // line 57
        if (($context["node_edit_url"] ?? null)) {
            // line 58
            echo "    <div class=\"hero-action-button\">
      <a href=\"";
            // line 59
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["node_edit_url"] ?? null), "html", null, true));
            echo "\"  title=\"Edit content\" class=\"btn btn-default btn-floating waves-effect waves-circle\">
        <svg class=\"icon-gray icon-medium\">
          <use xlink:href=\"#icon-edit\"></use>
        </svg>
      </a>
    </div>
  ";
        }
        // line 66
        echo "
  <div class=\"cover-wrap container\">
    <div class=\"cover-small\">
      <h1 class=\"page-title\">";
        // line 69
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_hero_title", array()), "html", null, true));
        echo "</h1>
      <h3 class=\"page-subtitle\">";
        // line 70
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_hero_subtitle", array()), "html", null, true));
        echo "</h3>
      <footer class=\"hero-footer\">
        ";
        // line 72
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_hero_buttons", array()), "html", null, true));
        echo "
      </footer>
    </div>
  </div> ";
        // line 76
        echo "</div> ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/modules/social_features/social_landing_page/templates/paragraph--hero--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 76,  99 => 72,  94 => 70,  90 => 69,  85 => 66,  75 => 59,  72 => 58,  70 => 57,  59 => 55,  56 => 54,  54 => 51,  53 => 46,  52 => 45,  47 => 42,  43 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/contrib/social/modules/social_features/social_landing_page/templates/paragraph--hero--default.html.twig", "/var/www/vhosts/mrutimes.com/adiasporai.com/html/profiles/contrib/social/modules/social_features/social_landing_page/templates/paragraph--hero--default.html.twig");
    }
}
