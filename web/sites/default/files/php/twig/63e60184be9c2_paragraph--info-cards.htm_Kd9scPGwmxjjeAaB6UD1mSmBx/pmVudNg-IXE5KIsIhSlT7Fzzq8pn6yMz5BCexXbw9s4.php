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

/* themes/myproject/templates/paragraphs/paragraph--info-cards.html.twig */
class __TwigTemplate_bcdd74a698406c3d5fa7bfef1e604d658f75c8061af5936c2e5861717a8da04b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "

";
        // line 61
        echo "  <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "img"], "method", false, false, true, 61), 61, $this->source), "html", null, true);
        echo ">
    ";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 75
        echo "  </div>
";
    }

    // line 62
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "  <div class='astudio__business-container'>
   <div class='astudio__business-title'>
   <div class='astudio__business-trImg'></div>
   <h2>";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_title", [], "any", false, false, true, 66), "value", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
        echo "</h2>
   <p> ";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_body", [], "any", false, false, true, 67), "value", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "</p>
   <div class='astudio__business-dotgroupImg'></div>
   </div>
    <div class='astudio__business-cards'>
      ";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 71, $this->source), "field_title", "field_body"), "html", null, true);
        echo "
    </div>
  </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/myproject/templates/paragraphs/paragraph--info-cards.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 71,  69 => 67,  65 => 66,  60 => 63,  56 => 62,  51 => 75,  49 => 62,  44 => 61,  40 => 50,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a paragraph.
 *
 * Available variables:
 * - paragraph: Full paragraph entity.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - paragraph.getCreatedTime() will return the paragraph creation timestamp.
 *   - paragraph.id(): The paragraph ID.
 *   - paragraph.bundle(): The type of the paragraph, for example, \"image\" or \"text\".
 *   - paragraph.getOwnerId(): The user ID of the paragraph author.
 *   See Drupal\\paragraphs\\Entity\\Paragraph for a full list of public properties
 *   and methods for the paragraph object.
 * - content: All paragraph items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - paragraphs: The current template type (also known as a \"theming hook\").
 *   - paragraphs--type-[type]: The current paragraphs type. For example, if the paragraph is an
 *     \"Image\" it would result in \"paragraphs--type--image\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - paragraphs--view-mode--[view_mode]: The View Mode of the paragraph; for example, a
 *     preview would result in: \"paragraphs--view-mode--preview\", and
 *     default: \"paragraphs--view-mode--default\".
 * - view_mode: View mode; for example, \"preview\" or \"full\".
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_paragraph()
 *
 * @ingroup themeable
 */
#}
{# {{ attach_library('myproject/businesscards')}}

<div class='astudio__business-card'>
  <div class='astudio__business-card-img'>
    <div class='astudio__business-card-img-img1'>{{ content.field_business_card_image.0 }}</div>
  </div>
  <h2>{{ content.field_business_card_title.0 }}</h2>
  <p>{{ content.field_business_card_body.0 }}</p>
</div> #}


{# {%
  set classes = [
    'paragraph',
    'paragraph--type--' ~ paragraph.bundle|clean_class,
    view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
    not paragraph.isPublished() ? 'paragraph--unpublished'
  ]
%} #}
{# {% block paragraph %} #}
  <div{{ attributes.addClass('img') }}>
    {% block content %}
  <div class='astudio__business-container'>
   <div class='astudio__business-title'>
   <div class='astudio__business-trImg'></div>
   <h2>{{ paragraph.field_title.value }}</h2>
   <p> {{ paragraph.field_body.value }}</p>
   <div class='astudio__business-dotgroupImg'></div>
   </div>
    <div class='astudio__business-cards'>
      {{ content|without('field_title', 'field_body') }}
    </div>
  </div>
    {% endblock %}
  </div>
{# {% endblock paragraph %} #}
", "themes/myproject/templates/paragraphs/paragraph--info-cards.html.twig", "/var/www/html/web/themes/myproject/templates/paragraphs/paragraph--info-cards.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 62);
        static $filters = array("escape" => 61, "without" => 71);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block'],
                ['escape', 'without'],
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
