<?php

/* themes/t4ddiaspora/templates/node/book/book-navigation.html.twig */
class __TwigTemplate_24b6cf264d84a1ecb1029781d2b41023c62bdaac9fe5fcbe16c1c8592103efb8 extends Twig_Template
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
        $tags = array("if" => 37);
        $filters = array("t" => 41);
        $functions = array("attach_library" => 35);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
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

        // line 33
        echo "
";
        // line 35
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/nav-book"), "html", null, true));
        echo "

";
        // line 37
        if ((($context["tree"] ?? null) || ($context["has_links"] ?? null))) {
            // line 38
            echo "    <nav role=\"navigation\" class=\"navigation-book\" aria-labelledby=\"book-label-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["book_id"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 39
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["tree"] ?? null), "html", null, true));
            echo "
        ";
            // line 40
            if (($context["has_links"] ?? null)) {
                // line 41
                echo "            <h2 class=\"sr-only\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Book traversal links for")));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["book_title"] ?? null), "html", null, true));
                echo "</h2>
            <div class=\"page-links clearfix\">
                ";
                // line 43
                if (($context["prev_url"] ?? null)) {
                    // line 44
                    echo "                    <a class=\"pager__item pager__item--previous btn btn-flat btn-iconized\" href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["prev_url"] ?? null), "html", null, true));
                    echo "\" rel=\"prev\" title=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to previous page")));
                    echo "\" role=\"button\">
                      <svg class=\"icon-inline icon-navigate_before\" aria-hidden=\"true\">
                        <use xlink:href=\"#icon-navigate_before\"></use>
                      </svg>
                      <span>";
                    // line 48
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["prev_title"] ?? null), "html", null, true));
                    echo "</span>
                    </a>
                ";
                }
                // line 51
                echo "                ";
                if (($context["next_url"] ?? null)) {
                    // line 52
                    echo "                    <a class=\"pager__item pager__item--next btn btn-flat btn-iconized\" href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["next_url"] ?? null), "html", null, true));
                    echo "\" rel=\"next\" title=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to next page")));
                    echo "\" role=\"button\">
                      <svg class=\"icon-inline icon-navigate_next\" aria-hidden=\"true\">
                        <use xlink:href=\"#icon-navigate_next\"></use>
                      </svg>
                      <span>";
                    // line 56
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["next_title"] ?? null), "html", null, true));
                    echo "</span>
                    </a>
                ";
                }
                // line 59
                echo "            </div>
        ";
            }
            // line 61
            echo "    </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/node/book/book-navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 61,  109 => 59,  103 => 56,  93 => 52,  90 => 51,  84 => 48,  74 => 44,  72 => 43,  64 => 41,  62 => 40,  58 => 39,  53 => 38,  51 => 37,  46 => 35,  43 => 33,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/t4ddiaspora/templates/node/book/book-navigation.html.twig", "/var/www/vhosts/mrutimes.com/adiasporai.com/html/themes/t4ddiaspora/templates/node/book/book-navigation.html.twig");
    }
}
