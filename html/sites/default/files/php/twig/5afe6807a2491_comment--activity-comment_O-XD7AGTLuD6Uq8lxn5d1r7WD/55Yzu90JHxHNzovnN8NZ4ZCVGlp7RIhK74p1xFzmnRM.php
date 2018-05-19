<?php

/* themes/t4ddiaspora/templates/comment/comment--activity-comment.html.twig */
class __TwigTemplate_c0eb3a70f84250e1c466c160f846315bb424630245836b72286b5443233d3ef0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("comment.html.twig", "themes/t4ddiaspora/templates/comment/comment--activity-comment.html.twig", 1);
        $this->blocks = array(
            'comment_author' => array($this, 'block_comment_author'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "comment.html.twig";
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

    // line 3
    public function block_comment_author($context, array $blocks = array())
    {
        // line 4
        echo "   <div class=\"comment__author\"> ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author"] ?? null), "html", null, true));
        echo "
     <span class=\"comment__metadata\">&bullet; ";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["submitted"] ?? null), "html", null, true));
        echo " </span>
   </div>
 ";
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/comment/comment--activity-comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 5,  55 => 4,  52 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"comment.html.twig\" %}

 {% block comment_author %}
   <div class=\"comment__author\"> {{ author }}
     <span class=\"comment__metadata\">&bullet; {{ submitted }} </span>
   </div>
 {% endblock %}
", "themes/t4ddiaspora/templates/comment/comment--activity-comment.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/comment/comment--activity-comment.html.twig");
    }
}
