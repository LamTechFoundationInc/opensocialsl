<?php

/* themes/t4ddiaspora/templates/group/group--hero.html.twig */
class __TwigTemplate_d7d7b62a309bc4afcf45e69849a5b0c558b351321155ec05f349d8d2a8b5776d extends Twig_Template
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
        $tags = array("set" => 25, "if" => 31, "trans" => 47);
        $filters = array("render" => 56);
        $functions = array("attach_library" => 22);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'trans'),
                array('render'),
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

        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/hero"), "html", null, true));
        echo "

";
        // line 25
        $context["cover_classes"] = array(0 => "cover", 1 => ((        // line 27
($context["group_hero_styled_image_url"] ?? null)) ? ("cover-img cover-img-gradient") : ("")));
        // line 30
        echo "
<div";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["cover_classes"] ?? null)), "method"), "html", null, true));
        echo " ";
        if (($context["group_hero_styled_image_url"] ?? null)) {
            echo " style=\"background-image: url('";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["group_hero_styled_image_url"] ?? null), "html", null, true));
            echo "');\" ";
        }
        echo ">
  <div class=\"hero__bgimage-overlay\"></div>
  ";
        // line 33
        if (($context["group_edit_url"] ?? null)) {
            // line 34
            echo "    <div class=\"hero-action-button\">
      <a href=\"";
            // line 35
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["group_edit_url"] ?? null), "html", null, true));
            echo "\"  title=\"Edit group\" class=\"btn btn-default btn-floating\">
        <svg class=\"icon-gray icon-medium\">
          <use xlink:href=\"#icon-edit\"></use>
        </svg>
      </a>
    </div>
  ";
        }
        // line 42
        echo "  <div class=\"cover-wrap\">
    <header class=\"page-title\">
      <h1>";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "label", array()), "html", null, true));
        echo "</h1>
      <p>
        ";
        // line 46
        if (($context["closed_group_lock"] ?? null)) {
            // line 47
            echo "          <span>";
            echo t("Closed group", array());
            echo "</span> &bullet;
        ";
        }
        // line 49
        echo "        <span>
          ";
        // line 50
        echo \Drupal::translation()->formatPlural(abs(($context["group_members"] ?? null)), "1 member", "@count members", array());
        // line 51
        echo "        </span>
      </p>
    </header>
    <footer class=\"hero-footer\">
      <div class=\"hero-footer__text\">
        ";
        // line 56
        if (( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_group_location", array()))) &&  !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_group_address", array()))))) {
            // line 57
            echo "          <svg class=\"hero-footer-icon\">
            <use xlink:href=\"#icon-location\"></use>
          </svg>
        ";
        }
        // line 61
        echo "        <span class=\"inline-center\">
          ";
        // line 62
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_group_location", array()), "html", null, true));
        echo "
          ";
        // line 63
        if (( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_group_location", array()))) &&  !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_group_address", array()))))) {
            echo " &bullet;";
        }
        // line 64
        echo "          ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_group_address", array()), "html", null, true));
        echo " </span>
      </div>

      ";
        // line 67
        if (($context["group_operations_url"] ?? null)) {
            // line 68
            echo "        <div class=\"hero-footer__cta\">
          <div class=\"btn-group\">
            ";
            // line 70
            if (($context["joined"] ?? null)) {
                // line 71
                echo "              <button type=\"button\" autocomplete=\"off\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"btn btn-accent btn-lg btn-raised dropdown-toggle\">";
                echo t("Joined", array());
                echo "<span class=\"caret\"></span></button>
              <ul class=\"dropdown-menu dropdown-menu-right\">
                <li><a href=\"";
                // line 73
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["group_operations_url"] ?? null), "html", null, true));
                echo "\">";
                echo t("Leave group", array());
                echo "</a></li>
              </ul>
            ";
            } elseif (            // line 75
($context["closed_group"] ?? null)) {
                // line 76
                echo "              <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["group_operations_url"] ?? null), "html", null, true));
                echo "\" class=\"btn btn-accent btn-lg btn-raised dropdown-toggle disabled\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["cta"] ?? null), "html", null, true));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["cta"] ?? null), "html", null, true));
                echo "</a>
            ";
            } else {
                // line 78
                echo "              <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["group_operations_url"] ?? null), "html", null, true));
                echo "\" class=\"btn btn-accent btn-lg btn-raised dropdown-toggle\" title=\"Join\">";
                echo t("Join", array());
                echo "</a>
            ";
            }
            // line 80
            echo "          </div>
        </div>
      ";
        }
        // line 83
        echo "    </footer>
  </div> ";
        // line 85
        echo "</div> ";
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/group/group--hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 85,  181 => 83,  176 => 80,  168 => 78,  158 => 76,  156 => 75,  149 => 73,  143 => 71,  141 => 70,  137 => 68,  135 => 67,  128 => 64,  124 => 63,  120 => 62,  117 => 61,  111 => 57,  109 => 56,  102 => 51,  100 => 50,  97 => 49,  91 => 47,  89 => 46,  84 => 44,  80 => 42,  70 => 35,  67 => 34,  65 => 33,  54 => 31,  51 => 30,  49 => 27,  48 => 25,  43 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/t4ddiaspora/templates/group/group--hero.html.twig", "/var/www/vhosts/mrutimes.com/adiasporai.com/html/themes/t4ddiaspora/templates/group/group--hero.html.twig");
    }
}
