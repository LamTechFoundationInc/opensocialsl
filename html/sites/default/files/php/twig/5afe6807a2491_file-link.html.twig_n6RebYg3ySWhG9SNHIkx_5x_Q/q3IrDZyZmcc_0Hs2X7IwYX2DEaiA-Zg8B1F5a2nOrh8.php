<?php

/* themes/t4ddiaspora/templates/file/file-link.html.twig */
class __TwigTemplate_1b22c5c179d7a505049ebe2d4fefefeb64e01ddd7e3c52b1f95b61780ebba90c extends Twig_Template
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
        $tags = array("spaceless" => 17, "if" => 20);
        $filters = array();
        $functions = array("attach_library" => 16);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('spaceless', 'if'),
                array(),
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

        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/file"), "html", null, true));
        echo "
";
        // line 17
        ob_start();
        // line 18
        echo "  <span";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">

  ";
        // line 20
        if (($context["icon_only"] ?? null)) {
            // line 21
            echo "    <span class=\"file-icon\"><img class=\"node-file__icon\" src=\"/";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path_to_socialbase"] ?? null), "html", null, true));
            echo "/assets/images/mime-icons/icon_1_";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["node_icon"] ?? null), "html", null, true));
            echo "_x16.png\" srcset=\"/";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path_to_socialbase"] ?? null), "html", null, true));
            echo "/assets/images/mime-icons/icon_1_";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["node_icon"] ?? null), "html", null, true));
            echo "_x32.png 2x\" alt=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["node_icon"] ?? null), "html", null, true));
            echo "\" /></span>
    <span class=\"sr-only\">
      <span class=\"file-link\">";
            // line 23
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["link"] ?? null), "html", null, true));
            echo "</span>
      <span class=\"file-size\">";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["file_size"] ?? null), "html", null, true));
            echo "</span>
    </span>
  ";
        } else {
            // line 27
            echo "
      <span class=\"file-icon\"><img class=\"node-file__icon\" src=\"/";
            // line 28
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path_to_socialbase"] ?? null), "html", null, true));
            echo "/assets/images/mime-icons/icon_1_";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["node_icon"] ?? null), "html", null, true));
            echo "_x16.png\" srcset=\"/";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path_to_socialbase"] ?? null), "html", null, true));
            echo "/assets/images/mime-icons/icon_1_";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["node_icon"] ?? null), "html", null, true));
            echo "_x32.png 2x\" alt=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["node_icon"] ?? null), "html", null, true));
            echo "\" /></span><span class=\"file-link\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["link"] ?? null), "html", null, true));
            echo "</span><span class=\"file-size\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["file_size"] ?? null), "html", null, true));
            echo "</span>

  ";
        }
        // line 31
        echo "
  </span>


";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/file/file-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 31,  84 => 28,  81 => 27,  75 => 24,  71 => 23,  57 => 21,  55 => 20,  49 => 18,  47 => 17,  43 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
* @file
* Theme override for a link to a file for forms (default).
*
* Available variables:
* - attributes: The HTML attributes for the containing element.
* - link: A link to the file.
* - node_icon: An icon.
*
* @ingroup templates
*
* @see \\Drupal\\bootstrap\\Plugin\\Preprocess\\FileLink::preprocessVariables
*/
#}
{{ attach_library('socialbase/file') }}
{% spaceless %}
  <span{{ attributes }}>

  {% if icon_only %}
    <span class=\"file-icon\"><img class=\"node-file__icon\" src=\"/{{ path_to_socialbase }}/assets/images/mime-icons/icon_1_{{ node_icon }}_x16.png\" srcset=\"/{{ path_to_socialbase }}/assets/images/mime-icons/icon_1_{{ node_icon }}_x32.png 2x\" alt=\"{{ node_icon }}\" /></span>
    <span class=\"sr-only\">
      <span class=\"file-link\">{{ link }}</span>
      <span class=\"file-size\">{{ file_size }}</span>
    </span>
  {% else %}

      <span class=\"file-icon\"><img class=\"node-file__icon\" src=\"/{{ path_to_socialbase }}/assets/images/mime-icons/icon_1_{{ node_icon }}_x16.png\" srcset=\"/{{ path_to_socialbase }}/assets/images/mime-icons/icon_1_{{ node_icon }}_x32.png 2x\" alt=\"{{ node_icon }}\" /></span><span class=\"file-link\">{{ link }}</span><span class=\"file-size\">{{ file_size }}</span>

  {% endif %}

  </span>


{% endspaceless %}
", "themes/t4ddiaspora/templates/file/file-link.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/file/file-link.html.twig");
    }
}
