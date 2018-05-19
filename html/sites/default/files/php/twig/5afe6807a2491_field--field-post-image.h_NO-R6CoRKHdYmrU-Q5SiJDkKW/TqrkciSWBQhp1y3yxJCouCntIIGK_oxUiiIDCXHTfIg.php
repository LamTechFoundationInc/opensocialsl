<?php

/* themes/t4ddiaspora/templates/field/field--field-post-image.html.twig */
class __TwigTemplate_7358eb0f01b429cf585d38b06b45cf0e6e8b11a2cb975afdba47b8c4597b404e extends Twig_Template
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
        $tags = array("for" => 44);
        $filters = array();
        $functions = array("attach_library" => 41, "file_url" => 45);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for'),
                array(),
                array('attach_library', 'file_url')
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

        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/photoswipe.image"), "html", null, true));
        echo "

<div class=\"photoswipe-gallery\" itemscope itemtype=\"http://schema.org/ImageGallery\">
  ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 45
            echo "    <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#item", array(), "array"), "entity", array()), "uri", array()), "value", array()))), "html", null, true));
            echo "\"
       data-med=\"";
            // line 46
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#item", array(), "array"), "entity", array()), "uri", array()), "value", array()))), "html", null, true));
            echo "\"
       data-med-size=\"";
            // line 47
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#item", array(), "array"), "width", array()), "html", null, true));
            echo "x";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#item", array(), "array"), "height", array()), "html", null, true));
            echo "\"
       data-size=\"";
            // line 48
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#item", array(), "array"), "width", array()), "html", null, true));
            echo "x";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#item", array(), "array"), "height", array()), "html", null, true));
            echo "\">
      ";
            // line 49
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
            echo "
    </a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "</div>
<div class=\"pswp\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"pswp__bg\"></div>
  <div class=\"pswp__scroll-wrap\">
    <div class=\"pswp__container\">
      <div class=\"pswp__item\"></div>
      <div class=\"pswp__item\"></div>
      <div class=\"pswp__item\"></div>
    </div>
    <div class=\"pswp__ui pswp__ui--hidden\">
      <div class=\"pswp__top-bar\">
        <div class=\"pswp__counter\"></div>
        <button class=\"pswp__button pswp__button--close\" title=\"Close (Esc)\"></button>
        <button class=\"pswp__button pswp__button--fs\" title=\"Toggle fullscreen\"></button>
        <button class=\"pswp__button pswp__button--zoom\" title=\"Zoom in/out\"></button>
        <div class=\"pswp__preloader\">
          <div class=\"pswp__preloader__icn\">
            <div class=\"pswp__preloader__cut\">
              <div class=\"pswp__preloader__donut\"></div>
            </div>
          </div>
        </div>
      </div>
      <button class=\"pswp__button pswp__button--arrow--left\" title=\"Previous (arrow left)\"></button>
      <button class=\"pswp__button pswp__button--arrow--right\" title=\"Next (arrow right)\"></button>
      <div class=\"pswp__caption\">
        <div class=\"pswp__caption__center\">
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/field/field--field-post-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 52,  74 => 49,  68 => 48,  62 => 47,  58 => 46,  53 => 45,  49 => 44,  43 => 41,);
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
 * Theme override for a field.
 *
 * To override output, copy the \"field.html.twig\" from the templates directory
 * to your theme's directory and customize it, just like customizing other
 * Drupal templates such as page.html.twig or node.html.twig.
 *
 * Instead of overriding the theming for all fields, you can also just override
 * theming for a subset of fields using
 * @link themeable Theme hook suggestions. @endlink For example,
 * here are some theme hook suggestions that can be used for a field_foo field
 * on an article node type:
 * - field--node--field-foo--article.html.twig
 * - field--node--field-foo.html.twig
 * - field--node--article.html.twig
 * - field--field-foo.html.twig
 * - field--text-with-summary.html.twig
 * - field.html.twig
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - label_hidden: Whether to show the field label or not.
 * - title_attributes: HTML attributes for the title.
 * - label: The label for the field.
 * - multiple: TRUE if a field can contain multiple items.
 * - items: List of all the field items. Each item contains:
 *   - attributes: List of HTML attributes for each item.
 *   - content: The field item's content.
 * - entity_type: The entity type to which the field belongs.
 * - field_name: The name of the field.
 * - field_type: The type of the field.
 * - label_display: The display settings for the label.
 *
 *
 * @see template_preprocess_field()
 */
#}
{# Fields in the event teaser need to render without a div, because it is a child element of a tag that cannot have a div such as an anchor or paragraph #}
{{ attach_library('socialbase/photoswipe.image') }}

<div class=\"photoswipe-gallery\" itemscope itemtype=\"http://schema.org/ImageGallery\">
  {% for item in items %}
    <a href=\"{{ file_url(item.content['#item'].entity.uri.value) }}\"
       data-med=\"{{ file_url(item.content['#item'].entity.uri.value) }}\"
       data-med-size=\"{{ item.content['#item'].width }}x{{ item.content['#item'].height }}\"
       data-size=\"{{ item.content['#item'].width }}x{{ item.content['#item'].height }}\">
      {{ item.content }}
    </a>
  {% endfor %}
</div>
<div class=\"pswp\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"pswp__bg\"></div>
  <div class=\"pswp__scroll-wrap\">
    <div class=\"pswp__container\">
      <div class=\"pswp__item\"></div>
      <div class=\"pswp__item\"></div>
      <div class=\"pswp__item\"></div>
    </div>
    <div class=\"pswp__ui pswp__ui--hidden\">
      <div class=\"pswp__top-bar\">
        <div class=\"pswp__counter\"></div>
        <button class=\"pswp__button pswp__button--close\" title=\"Close (Esc)\"></button>
        <button class=\"pswp__button pswp__button--fs\" title=\"Toggle fullscreen\"></button>
        <button class=\"pswp__button pswp__button--zoom\" title=\"Zoom in/out\"></button>
        <div class=\"pswp__preloader\">
          <div class=\"pswp__preloader__icn\">
            <div class=\"pswp__preloader__cut\">
              <div class=\"pswp__preloader__donut\"></div>
            </div>
          </div>
        </div>
      </div>
      <button class=\"pswp__button pswp__button--arrow--left\" title=\"Previous (arrow left)\"></button>
      <button class=\"pswp__button pswp__button--arrow--right\" title=\"Next (arrow right)\"></button>
      <div class=\"pswp__caption\">
        <div class=\"pswp__caption__center\">
        </div>
      </div>
    </div>
  </div>
</div>
", "themes/t4ddiaspora/templates/field/field--field-post-image.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/field/field--field-post-image.html.twig");
    }
}