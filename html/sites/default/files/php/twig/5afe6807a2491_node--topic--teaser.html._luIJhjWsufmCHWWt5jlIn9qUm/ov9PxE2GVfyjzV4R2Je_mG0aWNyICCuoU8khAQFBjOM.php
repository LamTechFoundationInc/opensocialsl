<?php

/* themes/t4ddiaspora/templates/node/topic/node--topic--teaser.html.twig */
class __TwigTemplate_f0da2bf16d306105cde6b9b2a7861bc0a73468215785c536eee94c97d6356b9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("node--teaser.html.twig", "themes/t4ddiaspora/templates/node/topic/node--topic--teaser.html.twig", 1);
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
        $this->loadTemplate("themes/t4ddiaspora/templates/node/topic/node--topic--teaser.html.twig", "themes/t4ddiaspora/templates/node/topic/node--topic--teaser.html.twig", 5, "285547068")->display($context);
        // line 14
        echo "
  ";
        // line 15
        if (($context["topic_type"] ?? null)) {
            // line 16
            echo "    ";
            $this->loadTemplate("themes/t4ddiaspora/templates/node/topic/node--topic--teaser.html.twig", "themes/t4ddiaspora/templates/node/topic/node--topic--teaser.html.twig", 16, "260519805")->display($context);
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
            $this->loadTemplate("themes/t4ddiaspora/templates/node/topic/node--topic--teaser.html.twig", "themes/t4ddiaspora/templates/node/topic/node--topic--teaser.html.twig", 23, "274364365")->display($context);
            // line 27
            echo "  ";
        }
        // line 28
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/node/topic/node--topic--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 28,  79 => 27,  76 => 23,  74 => 22,  71 => 21,  68 => 20,  65 => 16,  63 => 15,  60 => 14,  58 => 5,  55 => 4,  52 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"node--teaser.html.twig\" %}

{% block card_body %}

  {% embed \"node--teaser__field.html.twig\" %}
    {%- block field_icon -%} account_circle {%- endblock -%}
    {%- block field_value %}
      <div class=\"teaser__published\">
        <div class=\"teaser__published-date\"> {{ date }} &bullet; </div>
        <div class=\"teaser__published-author\"> {{ author_name }} </div>
      </div>
    {%- endblock -%}
  {% endembed %}

  {% if topic_type %}
    {% embed \"node--teaser__field.html.twig\" %}
      {%- block field_icon -%} label {%- endblock -%}
      {%- block field_value -%} {{ topic_type }} {%- endblock -%}
    {% endembed %}
  {% endif %}

  {% if content.group_name %}
    {% embed \"node--teaser__field.html.twig\" %}
      {%- block field_icon -%} group {%- endblock -%}
      {%- block field_value -%} {{ content.group_name }} {%- endblock -%}
    {% endembed %}
  {% endif %}

{% endblock %}
", "themes/t4ddiaspora/templates/node/topic/node--topic--teaser.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/node/topic/node--topic--teaser.html.twig");
    }
}


/* themes/t4ddiaspora/templates/node/topic/node--topic--teaser.html.twig */
class __TwigTemplate_f0da2bf16d306105cde6b9b2a7861bc0a73468215785c536eee94c97d6356b9d_285547068 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "themes/t4ddiaspora/templates/node/topic/node--topic--teaser.html.twig", 5);
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
        echo "account_circle";
    }

    // line 7
    public function block_field_value($context, array $blocks = array())
    {
        // line 8
        echo "      <div class=\"teaser__published\">
        <div class=\"teaser__published-date\"> ";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["date"] ?? null), "html", null, true));
        echo " &bullet; </div>
        <div class=\"teaser__published-author\"> ";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_name"] ?? null), "html", null, true));
        echo " </div>
      </div>";
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/node/topic/node--topic--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 10,  207 => 9,  204 => 8,  201 => 7,  195 => 6,  153 => 5,  82 => 28,  79 => 27,  76 => 23,  74 => 22,  71 => 21,  68 => 20,  65 => 16,  63 => 15,  60 => 14,  58 => 5,  55 => 4,  52 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"node--teaser.html.twig\" %}

{% block card_body %}

  {% embed \"node--teaser__field.html.twig\" %}
    {%- block field_icon -%} account_circle {%- endblock -%}
    {%- block field_value %}
      <div class=\"teaser__published\">
        <div class=\"teaser__published-date\"> {{ date }} &bullet; </div>
        <div class=\"teaser__published-author\"> {{ author_name }} </div>
      </div>
    {%- endblock -%}
  {% endembed %}

  {% if topic_type %}
    {% embed \"node--teaser__field.html.twig\" %}
      {%- block field_icon -%} label {%- endblock -%}
      {%- block field_value -%} {{ topic_type }} {%- endblock -%}
    {% endembed %}
  {% endif %}

  {% if content.group_name %}
    {% embed \"node--teaser__field.html.twig\" %}
      {%- block field_icon -%} group {%- endblock -%}
      {%- block field_value -%} {{ content.group_name }} {%- endblock -%}
    {% endembed %}
  {% endif %}

{% endblock %}
", "themes/t4ddiaspora/templates/node/topic/node--topic--teaser.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/node/topic/node--topic--teaser.html.twig");
    }
}


/* themes/t4ddiaspora/templates/node/topic/node--topic--teaser.html.twig */
class __TwigTemplate_f0da2bf16d306105cde6b9b2a7861bc0a73468215785c536eee94c97d6356b9d_260519805 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 16
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "themes/t4ddiaspora/templates/node/topic/node--topic--teaser.html.twig", 16);
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topic_type"] ?? null), "html", null, true));
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/node/topic/node--topic--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 18,  325 => 17,  283 => 16,  211 => 10,  207 => 9,  204 => 8,  201 => 7,  195 => 6,  153 => 5,  82 => 28,  79 => 27,  76 => 23,  74 => 22,  71 => 21,  68 => 20,  65 => 16,  63 => 15,  60 => 14,  58 => 5,  55 => 4,  52 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"node--teaser.html.twig\" %}

{% block card_body %}

  {% embed \"node--teaser__field.html.twig\" %}
    {%- block field_icon -%} account_circle {%- endblock -%}
    {%- block field_value %}
      <div class=\"teaser__published\">
        <div class=\"teaser__published-date\"> {{ date }} &bullet; </div>
        <div class=\"teaser__published-author\"> {{ author_name }} </div>
      </div>
    {%- endblock -%}
  {% endembed %}

  {% if topic_type %}
    {% embed \"node--teaser__field.html.twig\" %}
      {%- block field_icon -%} label {%- endblock -%}
      {%- block field_value -%} {{ topic_type }} {%- endblock -%}
    {% endembed %}
  {% endif %}

  {% if content.group_name %}
    {% embed \"node--teaser__field.html.twig\" %}
      {%- block field_icon -%} group {%- endblock -%}
      {%- block field_value -%} {{ content.group_name }} {%- endblock -%}
    {% endembed %}
  {% endif %}

{% endblock %}
", "themes/t4ddiaspora/templates/node/topic/node--topic--teaser.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/node/topic/node--topic--teaser.html.twig");
    }
}


/* themes/t4ddiaspora/templates/node/topic/node--topic--teaser.html.twig */
class __TwigTemplate_f0da2bf16d306105cde6b9b2a7861bc0a73468215785c536eee94c97d6356b9d_274364365 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 23
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "themes/t4ddiaspora/templates/node/topic/node--topic--teaser.html.twig", 23);
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
        return "themes/t4ddiaspora/templates/node/topic/node--topic--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 25,  445 => 24,  403 => 23,  331 => 18,  325 => 17,  283 => 16,  211 => 10,  207 => 9,  204 => 8,  201 => 7,  195 => 6,  153 => 5,  82 => 28,  79 => 27,  76 => 23,  74 => 22,  71 => 21,  68 => 20,  65 => 16,  63 => 15,  60 => 14,  58 => 5,  55 => 4,  52 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"node--teaser.html.twig\" %}

{% block card_body %}

  {% embed \"node--teaser__field.html.twig\" %}
    {%- block field_icon -%} account_circle {%- endblock -%}
    {%- block field_value %}
      <div class=\"teaser__published\">
        <div class=\"teaser__published-date\"> {{ date }} &bullet; </div>
        <div class=\"teaser__published-author\"> {{ author_name }} </div>
      </div>
    {%- endblock -%}
  {% endembed %}

  {% if topic_type %}
    {% embed \"node--teaser__field.html.twig\" %}
      {%- block field_icon -%} label {%- endblock -%}
      {%- block field_value -%} {{ topic_type }} {%- endblock -%}
    {% endembed %}
  {% endif %}

  {% if content.group_name %}
    {% embed \"node--teaser__field.html.twig\" %}
      {%- block field_icon -%} group {%- endblock -%}
      {%- block field_value -%} {{ content.group_name }} {%- endblock -%}
    {% endembed %}
  {% endif %}

{% endblock %}
", "themes/t4ddiaspora/templates/node/topic/node--topic--teaser.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/node/topic/node--topic--teaser.html.twig");
    }
}
