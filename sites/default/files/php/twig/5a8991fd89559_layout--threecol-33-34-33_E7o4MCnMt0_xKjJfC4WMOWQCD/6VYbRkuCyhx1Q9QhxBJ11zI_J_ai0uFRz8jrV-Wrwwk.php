<?php

/* core/modules/layout_discovery/layouts/threecol_33_34_33/layout--threecol-33-34-33.html.twig */
class __TwigTemplate_d46154b8b0bb6d6b85b5d25542be7a400c1ccd3685f9fec935649a7d120cb798 extends Twig_Template
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
        $tags = array("set" => 17, "if" => 21);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 17
        $context["classes"] = array(0 => "layout--threecol-33");
        // line 21
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 22
            echo "<div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
  ";
            // line 23
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "top", array())) {
                // line 24
                echo "  <div class=\"layout-region layout-region--fullwidth\">
    ";
                // line 25
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "top", array()), "html", null, true));
                echo "
  </div>
  ";
            }
            // line 28
            echo "
  <div class=\"layout-region\">
    ";
            // line 30
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "left", array()), "html", null, true));
            echo "
  </div>

  <div class=\"layout-region\">
    ";
            // line 34
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "middle", array()), "html", null, true));
            echo "
  </div>

  <div class=\"layout-region\">
    ";
            // line 38
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "right", array()), "html", null, true));
            echo "
  </div>

  ";
            // line 41
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "bottom", array())) {
                // line 42
                echo "  <div class=\"layout-region layout-region--fullwidth\">
    ";
                // line 43
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "bottom", array()), "html", null, true));
                echo "
  </div>
  ";
            }
            // line 46
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/layout_discovery/layouts/threecol_33_34_33/layout--threecol-33-34-33.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 46,  92 => 43,  89 => 42,  87 => 41,  81 => 38,  74 => 34,  67 => 30,  63 => 28,  57 => 25,  54 => 24,  52 => 23,  47 => 22,  45 => 21,  43 => 17,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation for a three column layout.
 *
 * This template provides a three column 33%-34%-33% display layout, with
 * additional areas for the top and the bottom.
 *
 * Available variables:
 * - content: The content for this layout.
 * - attributes: HTML attributes for the layout <div>.
 *
 * @ingroup themeable
 */
#}
{%
set classes = [
'layout--threecol-33',
]
%}
{% if content %}
<div{{ attributes.addClass(classes) }}>
  {% if content.top %}
  <div class=\"layout-region layout-region--fullwidth\">
    {{ content.top }}
  </div>
  {% endif %}

  <div class=\"layout-region\">
    {{ content.left }}
  </div>

  <div class=\"layout-region\">
    {{ content.middle }}
  </div>

  <div class=\"layout-region\">
    {{ content.right }}
  </div>

  {% if content.bottom %}
  <div class=\"layout-region layout-region--fullwidth\">
    {{ content.bottom }}
  </div>
  {% endif %}
</div>
{% endif %}
";
    }
}
