<?php

/* themes/t4ddiaspora/templates/views/views-view-unformatted--activity-stream-notifications--block.html.twig */
class __TwigTemplate_a218dbd13d3a14f1b00c1a53a0aab2731d71386cfc1c5c32c4408010f897e4a9 extends Twig_Template
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
        $tags = array("trans" => 22, "for" => 28);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('trans', 'for'),
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

        // line 20
        echo "<li>
  <div class=\"dropdown-header\">
    ";
        // line 22
        echo t("Notification Centre", array());
        // line 23
        echo "  </div>
</li>
<li class=\"divider\"></li>
<li>
  <ul class=\"scrollable-menu\">
  ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 29
            echo "    <li>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "</li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "  </ul>
</li>
<li class=\"divider\"></li>
<li>
  <div class=\"dropdown-header\">
    <a href=\"";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["notification_url"] ?? null), "html", null, true));
        echo "\" class=\"block clearfix\">
      ";
        // line 37
        echo t("All notifications", array());
        // line 38
        echo "      <svg class=\"btn-icon icon-black pull-right\">
        <use xlink:href=\"#icon-navigate_next\"></use>
      </svg>
    </a>
  </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/views/views-view-unformatted--activity-stream-notifications--block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 38,  80 => 37,  76 => 36,  69 => 31,  60 => 29,  56 => 28,  49 => 23,  47 => 22,  43 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/t4ddiaspora/templates/views/views-view-unformatted--activity-stream-notifications--block.html.twig", "/var/www/vhosts/mrutimes.com/adiasporai.com/html/themes/t4ddiaspora/templates/views/views-view-unformatted--activity-stream-notifications--block.html.twig");
    }
}
