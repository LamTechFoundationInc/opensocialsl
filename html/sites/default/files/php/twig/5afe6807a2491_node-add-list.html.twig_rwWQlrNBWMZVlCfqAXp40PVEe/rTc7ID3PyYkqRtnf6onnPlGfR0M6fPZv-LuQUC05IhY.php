<?php

/* themes/t4ddiaspora/templates/node/node-add-list.html.twig */
class __TwigTemplate_ef928254913d95172d760caa533ef16f16db78419e57d751b7222021923a0235 extends Twig_Template
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
        $tags = array("if" => 21, "for" => 23, "set" => 32, "trans" => 33);
        $filters = array();
        $functions = array("path" => 32);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for', 'set', 'trans'),
                array(),
                array('path')
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

        // line 18
        echo "<div class=\"card\">
  <div class=\"card__block\">

    ";
        // line 21
        if ( !twig_test_empty(($context["types"] ?? null))) {
            // line 22
            echo "
      ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 24
                echo "        <dl class=\"list-item list-item--withlabel\">
          <dt class=\"list-item__label\"><span class=\"btn btn-flat\">";
                // line 25
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["type"], "add_link", array()), "html", null, true));
                echo "</span></dt>
          <dd class=\"list-item__text\">";
                // line 26
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["type"], "description", array()), "html", null, true));
                echo "</dd>
        </dl>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "
    ";
        } else {
            // line 31
            echo "      <div class=\"list-item\">
        ";
            // line 32
            $context["create_content"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("node.type_add");
            // line 33
            echo "          ";
            echo t("You have not created any content types yet. Go to the <a href=\"@create_content\">content type creation page</a> to add a new content type.", array("@create_content" =>             // line 34
($context["create_content"] ?? null), ));
            // line 36
            echo "      </div>
    ";
        }
        // line 38
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/node/node-add-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 38,  86 => 36,  84 => 34,  82 => 33,  80 => 32,  77 => 31,  73 => 29,  64 => 26,  60 => 25,  57 => 24,  53 => 23,  50 => 22,  48 => 21,  43 => 18,);
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
 * Default theme implementation to list node types available for adding content.
 *
 * This list is displayed on the Add content admin page.
 *
 * Available variables:
 * - types: A list of content types, each with the following properties:
 *   - add_link: Link to create a piece of content of this type.
 *   - description: Description of this type of content.
 *
 * @see template_preprocess_node_add_list()
 *
 * @ingroup themeable
 */
#}
<div class=\"card\">
  <div class=\"card__block\">

    {% if types is not empty %}

      {% for type in types %}
        <dl class=\"list-item list-item--withlabel\">
          <dt class=\"list-item__label\"><span class=\"btn btn-flat\">{{ type.add_link }}</span></dt>
          <dd class=\"list-item__text\">{{ type.description }}</dd>
        </dl>
      {% endfor %}

    {% else %}
      <div class=\"list-item\">
        {% set create_content = path('node.type_add') %}
          {% trans %}
            You have not created any content types yet. Go to the <a href=\"{{ create_content }}\">content type creation page</a> to add a new content type.
          {% endtrans %}
      </div>
    {% endif %}
  </div>
</div>", "themes/t4ddiaspora/templates/node/node-add-list.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/node/node-add-list.html.twig");
    }
}
