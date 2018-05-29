<?php

/* themes/t4ddiaspora/templates/system/table.html.twig */
class __TwigTemplate_a9018ce517c0af9cdceb4e8410ec6465272e1b43eb64dba8428bb5ab96d42255 extends Twig_Template
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
        $tags = array("set" => 48, "if" => 57, "for" => 61);
        $filters = array();
        $functions = array("cycle" => 95);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array(),
                array('cycle')
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

        // line 44
        echo "
<div class=\"table-responsive\">

  ";
        // line 48
        $context["classes"] = array(0 => "table", 1 => "table-hover", 2 => "table-striped", 3 => ((        // line 52
($context["sticky"] ?? null)) ? ("sticky-enabled") : ("")));
        // line 55
        echo "
  <table";
        // line 56
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
    ";
        // line 57
        if (($context["caption"] ?? null)) {
            // line 58
            echo "      <caption>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["caption"] ?? null), "html", null, true));
            echo "</caption>
    ";
        }
        // line 60
        echo "
    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["colgroups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["colgroup"]) {
            // line 62
            echo "      ";
            if ($this->getAttribute($context["colgroup"], "cols", array())) {
                // line 63
                echo "        <colgroup";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["colgroup"], "attributes", array()), "html", null, true));
                echo ">
          ";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["colgroup"], "cols", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                    // line 65
                    echo "            <col";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["col"], "attributes", array()), "html", null, true));
                    echo " />
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "        </colgroup>
      ";
            } else {
                // line 69
                echo "        <colgroup";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["colgroup"], "attributes", array()), "html", null, true));
                echo " />
      ";
            }
            // line 71
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['colgroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "
    ";
        // line 73
        if (($context["header"] ?? null)) {
            // line 74
            echo "      <thead>
        <tr>
          ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["header"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                // line 77
                echo "            ";
                // line 78
                $context["cell_classes"] = array(0 => (($this->getAttribute(                // line 79
$context["cell"], "active_table_sort", array())) ? ("active") : ("")));
                // line 82
                echo "           <";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["cell"], "attributes", array()), "addClass", array(0 => ($context["cell_classes"] ?? null)), "method"), "html", null, true));
                echo ">";
                // line 83
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["cell"], "content", array()), "html", null, true));
                // line 84
                echo "</";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true));
                echo ">
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "        </tr>
      </thead>
    ";
        }
        // line 89
        echo "
    ";
        // line 90
        if (($context["rows"] ?? null)) {
            // line 91
            echo "      <tbody>
        ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 93
                echo "          ";
                // line 94
                $context["row_classes"] = array(0 => (( !                // line 95
($context["no_striping"] ?? null)) ? (twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index0", array()))) : ("")));
                // line 98
                echo "          <tr";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["row"], "attributes", array()), "addClass", array(0 => ($context["row_classes"] ?? null)), "method"), "html", null, true));
                echo ">
            ";
                // line 99
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "cells", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                    // line 100
                    echo "              <";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true));
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["cell"], "attributes", array()), "html", null, true));
                    echo ">";
                    // line 101
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["cell"], "content", array()), "html", null, true));
                    // line 102
                    echo "</";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true));
                    echo ">
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 104
                echo "          </tr>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "      </tbody>
    ";
        } elseif (        // line 107
($context["empty"] ?? null)) {
            // line 108
            echo "      <tbody>
        <tr class=\"odd\">
          <td colspan=\"";
            // line 110
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_columns"] ?? null), "html", null, true));
            echo "\" class=\"empty message\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
            echo "</td>
        </tr>
      </tbody>
    ";
        }
        // line 114
        echo "    ";
        if (($context["footer"] ?? null)) {
            // line 115
            echo "      <tfoot>
        ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["footer"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 117
                echo "          <tr";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true));
                echo ">
            ";
                // line 118
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "cells", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                    // line 119
                    echo "              <";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true));
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["cell"], "attributes", array()), "html", null, true));
                    echo ">";
                    // line 120
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["cell"], "content", array()), "html", null, true));
                    // line 121
                    echo "</";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true));
                    echo ">
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 123
                echo "          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "      </tfoot>
    ";
        }
        // line 127
        echo "  </table>

</div>
";
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/system/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 127,  279 => 125,  272 => 123,  263 => 121,  261 => 120,  256 => 119,  252 => 118,  247 => 117,  243 => 116,  240 => 115,  237 => 114,  228 => 110,  224 => 108,  222 => 107,  219 => 106,  204 => 104,  195 => 102,  193 => 101,  188 => 100,  184 => 99,  179 => 98,  177 => 95,  176 => 94,  174 => 93,  157 => 92,  154 => 91,  152 => 90,  149 => 89,  144 => 86,  135 => 84,  133 => 83,  128 => 82,  126 => 79,  125 => 78,  123 => 77,  119 => 76,  115 => 74,  113 => 73,  110 => 72,  104 => 71,  98 => 69,  94 => 67,  85 => 65,  81 => 64,  76 => 63,  73 => 62,  69 => 61,  66 => 60,  60 => 58,  58 => 57,  54 => 56,  51 => 55,  49 => 52,  48 => 48,  43 => 44,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/t4ddiaspora/templates/system/table.html.twig", "/var/www/vhosts/mrutimes.com/adiasporai.com/html/themes/t4ddiaspora/templates/system/table.html.twig");
    }
}
