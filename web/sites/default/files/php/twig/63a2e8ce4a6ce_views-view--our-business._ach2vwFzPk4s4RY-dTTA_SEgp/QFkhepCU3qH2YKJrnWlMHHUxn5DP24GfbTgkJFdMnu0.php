<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/myproject/templates/views/views-view--our-business.html.twig */
class __TwigTemplate_be31f972296aacbe2d30a4b1e617e69512656caf9660fbfea73bd4ff92b87246 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "
";
        // line 74
        $context["classes"] = [0 => ((        // line 75
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 75, $this->source))) : ("")), 1 => "our-business__container"];
        // line 79
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "our-business__container"], "method", false, false, true, 79), 79, $this->source), "html", null, true);
        echo ">
 <div class='our-business__bgimg'></div>
  ";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 81, $this->source), "html", null, true);
        echo "
  ";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 82, $this->source), "html", null, true);
        echo "
  ";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 83, $this->source), "html", null, true);
        echo "

  ";
        // line 85
        if (($context["header"] ?? null)) {
            // line 86
            echo "    <header>
      ";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 87, $this->source), "html", null, true);
            echo "
    </header>
  ";
        }
        // line 90
        echo "
  ";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 91, $this->source), "html", null, true);
        echo "
  ";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 92, $this->source), "html", null, true);
        echo "

  ";
        // line 94
        if (($context["rows"] ?? null)) {
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 95, $this->source), "html", null, true);
            echo "
  ";
        } elseif (        // line 96
($context["empty"] ?? null)) {
            // line 97
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 97, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 99
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 99, $this->source), "html", null, true);
        echo "

  ";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 101, $this->source), "html", null, true);
        echo "
  ";
        // line 102
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 102, $this->source), "html", null, true);
        echo "

  ";
        // line 104
        if (($context["footer"] ?? null)) {
            // line 105
            echo "    <footer>
      ";
            // line 106
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 106, $this->source), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 109
        echo "
  ";
        // line 110
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 110, $this->source), "html", null, true);
        echo "

</div>
";
    }

    public function getTemplateName()
    {
        return "themes/myproject/templates/views/views-view--our-business.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 110,  126 => 109,  120 => 106,  117 => 105,  115 => 104,  110 => 102,  106 => 101,  100 => 99,  95 => 97,  93 => 96,  89 => 95,  87 => 94,  82 => 92,  78 => 91,  75 => 90,  69 => 87,  66 => 86,  64 => 85,  59 => 83,  55 => 82,  51 => 81,  45 => 79,  43 => 75,  42 => 74,  39 => 72,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for main view template.
 *
 * Available variables:
 * - attributes: Remaining HTML attributes for the element.
 * - css_name: A CSS-safe version of the view name.
 * - css_class: The user-specified classes names, if any.
 * - header: The optional header.
 * - footer: The optional footer.
 * - rows: The results of the view query, if any.
 * - empty: The content to display if there are no rows.
 * - pager: The optional pager next/prev links to display.
 * - exposed: Exposed widget form/info to display.
 * - feed_icons: Optional feed icons to display.
 * - more: An optional link to the next page of results.
 * - title: Title of the view, only used when displaying in the admin preview.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the view title.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the view title.
 * - attachment_before: An optional attachment view to be displayed before the
 *   view content.
 * - attachment_after: An optional attachment view to be displayed after the
 *   view content.
 * - dom_id: Unique id for every view being printed to give unique class for
 *   JavaScript.
 *
 * @see template_preprocess_views_view()
 *
 * @ingroup themeable
 */
#}
{# {%
  set classes = [
    dom_id ? 'js-view-dom-id-' ~ dom_id,
  ]
%}
<div{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {{ title }}
  {{ title_suffix }}

  {% if header %}
    <header>
      {{ header }}
    </header>
  {% endif %}

  {{ exposed }}
  {{ attachment_before }}

  {% if rows -%}
    {{ rows }}
  {% elseif empty -%}
    {{ empty }}
  {% endif %}
  {{ pager }}

  {{ attachment_after }}
  {{ more }}

  {% if footer %}
    <footer>
      {{ footer }}
    </footer>
  {% endif %}

  {{ feed_icons }}
</div> #}

{%
  set classes = [
    dom_id ? 'js-view-dom-id-' ~ dom_id,
    'our-business__container'
  ]
%}
<div{{ attributes.addClass('our-business__container') }}>
 <div class='our-business__bgimg'></div>
  {{ title_prefix }}
  {{ title }}
  {{ title_suffix }}

  {% if header %}
    <header>
      {{ header }}
    </header>
  {% endif %}

  {{ exposed }}
  {{ attachment_before }}

  {% if rows -%}
    {{ rows }}
  {% elseif empty -%}
    {{ empty }}
  {% endif %}
  {{ pager }}

  {{ attachment_after }}
  {{ more }}

  {% if footer %}
    <footer>
      {{ footer }}
    </footer>
  {% endif %}

  {{ feed_icons }}

</div>
", "themes/myproject/templates/views/views-view--our-business.html.twig", "/var/www/html/web/themes/myproject/templates/views/views-view--our-business.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 74, "if" => 85);
        static $filters = array("escape" => 79);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
