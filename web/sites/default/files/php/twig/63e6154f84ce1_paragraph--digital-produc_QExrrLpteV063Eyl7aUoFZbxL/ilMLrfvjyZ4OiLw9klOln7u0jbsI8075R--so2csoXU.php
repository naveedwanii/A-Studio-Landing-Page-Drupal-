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

/* themes/myproject/templates/paragraphs/paragraph--digital-product.html.twig */
class __TwigTemplate_a956d69c8e5690ebbb20fe8e1b343f226847cb540f13f54c2cc2045399f3dedb extends \Twig\Template
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
        // line 41
        echo "
";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("myproject/digitalproduct"), "html", null, true);
        echo "
 <div class='roundImg'></div>
<div class='astudio__dp'>
  <div class='astudio__dp-block1'>
    <a href='https://www.youtube.com/'><div class='astudio__dp-block1-videoIcon'></div></a>
    <div class='astudio__dp-block1-img'>";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_digital_product_image", [], "any", false, false, true, 47), 0, [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "</div>
  </div>
  <div class='astudio__dp-block2'>
   <div class='astudio__dp-block2-trimImg'></div>
   <div class='astudio__dp-block2-trimImg'>
    <h2>";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_digital_product_title", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "</h2>
    <p>";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_digital_product_body", [], "any", false, false, true, 53), 0, [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
        echo "</p>
   </div>
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "themes/myproject/templates/paragraphs/paragraph--digital-product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 53,  58 => 52,  50 => 47,  42 => 42,  39 => 41,);
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

{{ attach_library('myproject/digitalproduct')}}
 <div class='roundImg'></div>
<div class='astudio__dp'>
  <div class='astudio__dp-block1'>
    <a href='https://www.youtube.com/'><div class='astudio__dp-block1-videoIcon'></div></a>
    <div class='astudio__dp-block1-img'>{{ content.field_digital_product_image.0 }}</div>
  </div>
  <div class='astudio__dp-block2'>
   <div class='astudio__dp-block2-trimImg'></div>
   <div class='astudio__dp-block2-trimImg'>
    <h2>{{ content.field_digital_product_title }}</h2>
    <p>{{ content.field_digital_product_body.0 }}</p>
   </div>
  </div>

</div>
", "themes/myproject/templates/paragraphs/paragraph--digital-product.html.twig", "/var/www/html/web/themes/myproject/templates/paragraphs/paragraph--digital-product.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 42);
        static $functions = array("attach_library" => 42);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['attach_library']
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
