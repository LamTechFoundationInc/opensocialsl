<?php

/* node--event--teaser.html.twig */
class __TwigTemplate_51c0f54f4a18d555613f5c68cbbbb45fbde9049ca46f407f09083c1815958dc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("node--teaser.html.twig", "node--event--teaser.html.twig", 1);
        $this->blocks = array(
            'card_body' => array($this, 'block_card_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "node--teaser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("embed" => 5, "if" => 15);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('embed', 'if'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_card_body($context, array $blocks = array())
    {
        // line 4
        echo "
  ";
        // line 5
        $this->loadTemplate("node--event--teaser.html.twig", "node--event--teaser.html.twig", 5, "1842391390")->display($context);
        // line 9
        echo "
  ";
        // line 10
        $this->loadTemplate("node--event--teaser.html.twig", "node--event--teaser.html.twig", 10, "1287123842")->display($context);
        // line 14
        echo "
  ";
        // line 15
        if (($context["event_type"] ?? null)) {
            // line 16
            echo "    ";
            $this->loadTemplate("node--event--teaser.html.twig", "node--event--teaser.html.twig", 16, "679783491")->display($context);
            // line 20
            echo "  ";
        }
        // line 21
        echo "
  ";
        // line 22
        if ($this->getAttribute(($context["content"] ?? null), "group_name", array())) {
            // line 23
            echo "    ";
            $this->loadTemplate("node--event--teaser.html.twig", "node--event--teaser.html.twig", 23, "219479641")->display($context);
            // line 27
            echo "  ";
        }
        // line 28
        echo "
";
    }

    public function getTemplateName()
    {
        return "node--event--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 28,  84 => 27,  81 => 23,  79 => 22,  76 => 21,  73 => 20,  70 => 16,  68 => 15,  65 => 14,  63 => 10,  60 => 9,  58 => 5,  55 => 4,  52 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "node--event--teaser.html.twig", "themes/t4ddiaspora/templates/node/event/node--event--teaser.html.twig");
    }
}


/* node--event--teaser.html.twig */
class __TwigTemplate_51c0f54f4a18d555613f5c68cbbbb45fbde9049ca46f407f09083c1815958dc4_1842391390 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--event--teaser.html.twig", 5);
        $this->blocks = array(
            'field_icon' => array($this, 'block_field_icon'),
            'field_value' => array($this, 'block_field_value'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_field_icon($context, array $blocks = array())
    {
        echo "event";
    }

    // line 7
    public function block_field_value($context, array $blocks = array())
    {
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["event_date"] ?? null), "html", null, true));
    }

    public function getTemplateName()
    {
        return "node--event--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 7,  171 => 6,  129 => 5,  87 => 28,  84 => 27,  81 => 23,  79 => 22,  76 => 21,  73 => 20,  70 => 16,  68 => 15,  65 => 14,  63 => 10,  60 => 9,  58 => 5,  55 => 4,  52 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "node--event--teaser.html.twig", "themes/t4ddiaspora/templates/node/event/node--event--teaser.html.twig");
    }
}


/* node--event--teaser.html.twig */
class __TwigTemplate_51c0f54f4a18d555613f5c68cbbbb45fbde9049ca46f407f09083c1815958dc4_1287123842 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 10
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--event--teaser.html.twig", 10);
        $this->blocks = array(
            'field_icon' => array($this, 'block_field_icon'),
            'field_value' => array($this, 'block_field_value'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_field_icon($context, array $blocks = array())
    {
        echo "location";
    }

    // line 12
    public function block_field_value($context, array $blocks = array())
    {
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_event_location", array()), "html", null, true));
    }

    public function getTemplateName()
    {
        return "node--event--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 12,  263 => 11,  221 => 10,  177 => 7,  171 => 6,  129 => 5,  87 => 28,  84 => 27,  81 => 23,  79 => 22,  76 => 21,  73 => 20,  70 => 16,  68 => 15,  65 => 14,  63 => 10,  60 => 9,  58 => 5,  55 => 4,  52 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "node--event--teaser.html.twig", "themes/t4ddiaspora/templates/node/event/node--event--teaser.html.twig");
    }
}


/* node--event--teaser.html.twig */
class __TwigTemplate_51c0f54f4a18d555613f5c68cbbbb45fbde9049ca46f407f09083c1815958dc4_679783491 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 16
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--event--teaser.html.twig", 16);
        $this->blocks = array(
            'field_icon' => array($this, 'block_field_icon'),
            'field_value' => array($this, 'block_field_value'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_field_icon($context, array $blocks = array())
    {
        echo "label";
    }

    // line 18
    public function block_field_value($context, array $blocks = array())
    {
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["event_type"] ?? null), "html", null, true));
    }

    public function getTemplateName()
    {
        return "node--event--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 18,  354 => 17,  312 => 16,  269 => 12,  263 => 11,  221 => 10,  177 => 7,  171 => 6,  129 => 5,  87 => 28,  84 => 27,  81 => 23,  79 => 22,  76 => 21,  73 => 20,  70 => 16,  68 => 15,  65 => 14,  63 => 10,  60 => 9,  58 => 5,  55 => 4,  52 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "node--event--teaser.html.twig", "themes/t4ddiaspora/templates/node/event/node--event--teaser.html.twig");
    }
}


/* node--event--teaser.html.twig */
class __TwigTemplate_51c0f54f4a18d555613f5c68cbbbb45fbde9049ca46f407f09083c1815958dc4_219479641 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 23
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--event--teaser.html.twig", 23);
        $this->blocks = array(
            'field_icon' => array($this, 'block_field_icon'),
            'field_value' => array($this, 'block_field_value'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_field_icon($context, array $blocks = array())
    {
        echo "group";
    }

    // line 25
    public function block_field_value($context, array $blocks = array())
    {
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "group_name", array()), "html", null, true));
    }

    public function getTemplateName()
    {
        return "node--event--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 25,  445 => 24,  403 => 23,  360 => 18,  354 => 17,  312 => 16,  269 => 12,  263 => 11,  221 => 10,  177 => 7,  171 => 6,  129 => 5,  87 => 28,  84 => 27,  81 => 23,  79 => 22,  76 => 21,  73 => 20,  70 => 16,  68 => 15,  65 => 14,  63 => 10,  60 => 9,  58 => 5,  55 => 4,  52 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "node--event--teaser.html.twig", "themes/t4ddiaspora/templates/node/event/node--event--teaser.html.twig");
    }
}
