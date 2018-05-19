<?php

/* node--teaser__field.html.twig */
class __TwigTemplate_1b62ebc31e05415e1f814a229223d1546fbda52fde96daf0c12be29cdd38776a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_icon' => array($this, 'block_field_icon'),
            'field_value' => array($this, 'block_field_value'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 3);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block'),
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

        // line 1
        echo "<div class=\"teaser__content-line\">
  <svg class=\"teaser__content-type-icon\">
      <use xlink:href=\"#icon-";
        // line 3
        $this->displayBlock('field_icon', $context, $blocks);
        echo "\"></use>
  </svg>
  <div class=\"teaser__content-text\">
    ";
        // line 6
        $this->displayBlock('field_value', $context, $blocks);
        // line 7
        echo "  </div>
</div>
";
    }

    // line 3
    public function block_field_icon($context, array $blocks = array())
    {
        echo "label";
    }

    // line 6
    public function block_field_value($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "node--teaser__field.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  69 => 6,  63 => 3,  57 => 7,  55 => 6,  49 => 3,  45 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"teaser__content-line\">
  <svg class=\"teaser__content-type-icon\">
      <use xlink:href=\"#icon-{% block field_icon %}label{% endblock %}\"></use>
  </svg>
  <div class=\"teaser__content-text\">
    {% block field_value %} {% endblock %}
  </div>
</div>
", "node--teaser__field.html.twig", "themes/t4ddiaspora/templates/node/node--teaser__field.html.twig");
    }
}
