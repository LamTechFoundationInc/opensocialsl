<?php

/* themes/t4ddiaspora/templates/block/block--views-exposed-filter-block.html.twig */
class __TwigTemplate_c314ba77f0a435cce3a23353260d0be6691bf9f556de317e390304a700e3d648 extends Twig_Template
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
        $tags = array("trans" => 56, "if" => 63, "block" => 80);
        $filters = array();
        $functions = array("attach_library" => 48);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('trans', 'if', 'block'),
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

        // line 48
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/offcanvas"), "html", null, true));
        echo "

<div";
        // line 50
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">
  <div class=\"btn--offcanvas-trigger\">
    <a href=\"#block-filter\" class=\"btn btn-default btn-raised \">
      <svg class=\"btn-icon\">
        <use xlink:href=\"#icon-filter_list\"></use>
      </svg>
      ";
        // line 56
        echo t("Filter", array());
        // line 57
        echo "    </a>
  </div>
  <div id=\"block-filter\" class=\"off-canvas off-canvas-right off-canvas-xs-only\">
    <div class=\"offcanvas-head\">

    ";
        // line 62
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
    ";
        // line 63
        if (($context["label"] ?? null)) {
            // line 64
            echo "      <header";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "complementary-title"), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</header>
    ";
        }
        // line 66
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

      <div class=\"offcanvas-tools\">
        <a href=\"#\" class=\"btn btn-icon-toggle pull-right\">
          <svg class=\"pull-left btn-icon icon-black\">
            <title> Close</title>
            <use xlink:href=\"#icon-close\"></use>
          </svg>
        </a>
      </div>
    </div>

    <div class=\"offcanvas-body\">

      ";
        // line 80
        $this->displayBlock('content', $context, $blocks);
        // line 83
        echo "
    </div>
  </div>
</div>
";
    }

    // line 80
    public function block_content($context, array $blocks = array())
    {
        // line 81
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/block/block--views-exposed-filter-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 81,  109 => 80,  101 => 83,  99 => 80,  81 => 66,  73 => 64,  71 => 63,  67 => 62,  60 => 57,  58 => 56,  49 => 50,  44 => 48,);
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
{{ attach_library('socialbase/offcanvas')}}

<div{{ attributes }}>
  <div class=\"btn--offcanvas-trigger\">
    <a href=\"#block-filter\" class=\"btn btn-default btn-raised \">
      <svg class=\"btn-icon\">
        <use xlink:href=\"#icon-filter_list\"></use>
      </svg>
      {% trans %}Filter{% endtrans %}
    </a>
  </div>
  <div id=\"block-filter\" class=\"off-canvas off-canvas-right off-canvas-xs-only\">
    <div class=\"offcanvas-head\">

    {{ title_prefix }}
    {% if label %}
      <header{{ title_attributes.addClass('complementary-title') }}>{{ label }}</header>
    {% endif %}
    {{ title_suffix }}

      <div class=\"offcanvas-tools\">
        <a href=\"#\" class=\"btn btn-icon-toggle pull-right\">
          <svg class=\"pull-left btn-icon icon-black\">
            <title> Close</title>
            <use xlink:href=\"#icon-close\"></use>
          </svg>
        </a>
      </div>
    </div>

    <div class=\"offcanvas-body\">

      {% block content %}
        {{ content }}
      {% endblock %}

    </div>
  </div>
</div>
", "themes/t4ddiaspora/templates/block/block--views-exposed-filter-block.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/block/block--views-exposed-filter-block.html.twig");
    }
}
