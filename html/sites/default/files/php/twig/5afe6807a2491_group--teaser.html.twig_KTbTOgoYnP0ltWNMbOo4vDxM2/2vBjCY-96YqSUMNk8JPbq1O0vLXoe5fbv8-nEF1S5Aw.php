<?php

/* themes/t4ddiaspora/templates/group/group--teaser.html.twig */
class __TwigTemplate_31abdc8fb1e10d93e9bc9aece37bd454b4675a210a760282abf6224657870adf extends Twig_Template
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
        $tags = array("if" => 50, "trans" => 66);
        $filters = array("render" => 74);
        $functions = array("attach_library" => 42);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'trans'),
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

        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/teaser"), "html", null, true));
        echo "
<div class=\"card teaser\">
  <div class='teaser__image'>
      ";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_group_image", array()), "html", null, true));
        echo "
  </div>
  <div class='teaser__body'>
    <div class=\"teaser__content\">
      ";
        // line 49
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
      ";
        // line 50
        if ( !($context["page"] ?? null)) {
            // line 51
            echo "        <h4";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_attributes"] ?? null), "html", null, true));
            echo " class=\"teaser__title\">
          ";
            // line 52
            if (($context["closed_group_lock"] ?? null)) {
                // line 53
                echo "            <svg class=\"icon-gray icon-small\">
              <use xlink:href=\"#icon-lock\"></use>
            </svg>
          ";
            }
            // line 57
            echo "          <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</a>
        </h4>
      ";
        }
        // line 60
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
      <div class=\"teaser__content-line\">
        <svg class=\"teaser__content-type-icon\">
          <use xlink:href=\"#icon-group\"></use>
        </svg>
        <span class=\"teaser__content-text\">
          ";
        // line 66
        echo \Drupal::translation()->formatPlural(abs(        // line 68
($context["group_members"] ?? null)), "1 member", "@count members", array());
        // line 71
        echo "          &nbsp;
        </span>
      </div>
      ";
        // line 74
        if (($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_group_location", array())) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_group_address", array())))) {
            // line 75
            echo "          <div class=\"teaser__content-line\">
              <svg class=\"teaser__content-type-icon\">
                  <use xlink:href=\"#icon-location\"></use>
              </svg>
            <span class=\"teaser__content-text\">
              ";
            // line 80
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_group_location", array()), "html", null, true));
            echo "
              ";
            // line 81
            if (( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_group_location", array()))) &&  !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_group_address", array()))))) {
                echo " &bullet;";
            }
            // line 82
            echo "              ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_group_address", array()), "html", null, true));
            echo "
            </span>
          </div>
      ";
        }
        // line 86
        echo "    </div>

    <div class=\"card__actionbar\">
      ";
        // line 89
        if (($context["joined"] ?? null)) {
            // line 90
            echo "        <span class=\"badge teaser__badge badge-secondary\">
          ";
            // line 91
            echo t("Joined", array());
            // line 92
            echo "        </span>
      ";
        }
        // line 94
        echo "
      <a href=\"";
        // line 95
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
        echo "\" class=\"card__link\" title=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
        echo "\">
        ";
        // line 96
        echo t("Read more", array());
        // line 97
        echo "      </a>
    </div>

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/group/group--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 97,  152 => 96,  146 => 95,  143 => 94,  139 => 92,  137 => 91,  134 => 90,  132 => 89,  127 => 86,  119 => 82,  115 => 81,  111 => 80,  104 => 75,  102 => 74,  97 => 71,  95 => 68,  94 => 66,  84 => 60,  75 => 57,  69 => 53,  67 => 52,  62 => 51,  60 => 50,  56 => 49,  49 => 45,  43 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/t4ddiaspora/templates/group/group--teaser.html.twig", "/var/www/vhosts/mrutimes.com/adiasporai.com/html/themes/t4ddiaspora/templates/group/group--teaser.html.twig");
    }
}
