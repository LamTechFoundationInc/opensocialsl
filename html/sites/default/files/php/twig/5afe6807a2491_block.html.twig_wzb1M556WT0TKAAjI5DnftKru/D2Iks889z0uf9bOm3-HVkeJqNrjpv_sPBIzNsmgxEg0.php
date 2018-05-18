<?php

/* block.html.twig */
class __TwigTemplate_2f3f597b4b2b490345c2a682c0a8833ae6a19db8e27c941c85d1b4f427b8614c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 50, "if" => 64, "block" => 76);
        $filters = array("clean_class" => 51);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class'),
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

        // line 48
        echo "
";
        // line 50
        $context["classes"] = array(0 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 51
($context["configuration"] ?? null), "provider", array()))), 1 => ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 52
($context["plugin_id"] ?? null))), 2 => ((        // line 53
($context["card"] ?? null)) ? ("card") : ("")));
        // line 56
        echo "
";
        // line 58
        $context["title_classes"] = array(0 => ((        // line 59
($context["card"] ?? null)) ? ("card__title") : ("block-title")));
        // line 62
        echo "

";
        // line 64
        if ( !($context["bare"] ?? null)) {
            // line 65
            echo "
  <section";
            // line 66
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">

    ";
            // line 68
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
            echo "
    ";
            // line 69
            if (($context["label"] ?? null)) {
                // line 70
                echo "      <h2 ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => ($context["title_classes"] ?? null)), "method"), "html", null, true));
                echo ">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
                echo "</h2>
    ";
            }
            // line 72
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "

";
        }
        // line 75
        echo "
  ";
        // line 76
        $this->displayBlock('content', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        if ( !($context["bare"] ?? null)) {
            // line 81
            echo "  </section>

";
        }
    }

    // line 76
    public function block_content($context, array $blocks = array())
    {
        // line 77
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 77,  110 => 76,  103 => 81,  101 => 80,  98 => 79,  96 => 76,  93 => 75,  86 => 72,  78 => 70,  76 => 69,  72 => 68,  67 => 66,  64 => 65,  62 => 64,  58 => 62,  56 => 59,  55 => 58,  52 => 56,  50 => 53,  49 => 52,  48 => 51,  47 => 50,  44 => 48,);
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
 * Default theme implementation to display a block.
 *
 * Available variables:
 * - \$block->subject: Block title.
 * - \$content: Block content.
 * - \$block->module: Module that generated the block.
 * - \$block->delta: An ID for the block, unique within each module.
 * - \$block->region: The block region embedding the current block.
 * - \$classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable \$classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - block: The current template type, i.e., \"theming hook\".
 *   - block-[module]: The module generating the block. For example, the user
 *     module is responsible for handling the default user navigation block. In
 *     that case the class would be 'block-user'.
 * - \$title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - \$title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Helper variables:
 * - \$classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable \$classes.
 * - \$block_zebra: Outputs 'odd' and 'even' dependent on each block region.
 * - \$zebra: Same output as \$block_zebra but independent of any block region.
 * - \$block_id: Counter dependent on each block region.
 * - \$id: Same output as \$block_id but independent of any block region.
 * - \$is_front: Flags true when presented in the front page.
 * - \$logged_in: Flags true when the current user is a logged-in member.
 * - \$is_admin: Flags true when the current user is an administrator.
 * - \$block_html_id: A valid HTML ID and guaranteed unique.
 *
 * @see bootstrap_preprocess_block()
 * @see template_preprocess()
 * @see template_preprocess_block()
 * @see bootstrap_process_block()
 * @see template_process()
 *
 * @ingroup templates
 */
#}

{%
  set classes = [
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
    card ? 'card',
  ]
%}

{%
  set title_classes = [
    card ? 'card__title' : 'block-title',
  ]
%}


{% if not bare %}

  <section{{ attributes.addClass(classes) }}>

    {{ title_prefix }}
    {% if label %}
      <h2 {{ title_attributes.addClass(title_classes) }}>{{ label }}</h2>
    {% endif %}
    {{ title_suffix }}

{% endif %}

  {% block content %}
    {{ content }}
  {% endblock %}

{% if not bare %}
  </section>

{% endif %}
", "block.html.twig", "themes/t4ddiaspora/templates/block/block.html.twig");
    }
}
