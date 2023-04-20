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

/* themes/custom/mytheme/templates/nodes/node--homepage.html.twig */
class __TwigTemplate_1b67f897e9555ff059d03ebac10895c79f3da7293729429cbf9280037591a324 extends \Twig\Template
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
        // line 1
        echo "<section class=\"hero-section hero-section-full-height\">
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">

\t\t\t<div class=\"col-lg-12 col-12 p-0\">
\t\t\t\t<div id=\"hero-slide\" class=\"carousel carousel-fade slide\" data-bs-ride=\"carousel\">
\t\t\t\t\t<div class=\"carousel-inner\">

\t\t\t\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bannerimageloop"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            // line 10
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["fields"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 11
                echo "
\t\t\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 13
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->extensions['Drupal\functioncreator\TwigFunctions']->tagIDToImage($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "field_banner_image", [], "any", false, false, true, 13), 0, [], "any", false, false, true, 13), "target_id", [], "any", false, false, true, 13), 13, $this->source))), "html", null, true);
                echo "\" class=\"carousel-image img-fluid\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "field_banner_image", [], "any", false, false, true, 13), 0, [], "any", false, false, true, 13), "alt", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                echo "\">

\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption d-flex flex-column justify-content-end\">
\t\t\t\t\t\t\t\t\t\t<h1>";
                // line 16
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "field_banner_heading", [], "any", false, false, true, 16), 0, [], "any", false, false, true, 16), "value", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                echo "</h1>

\t\t\t\t\t\t\t\t\t\t<p>";
                // line 18
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "field_banner_content", [], "any", false, false, true, 18), 0, [], "any", false, false, true, 18), "value", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#hero-slide\" data-bs-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t\t</button>

\t\t\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#hero-slide\" data-bs-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
</section>


<section class=\"section-padding\">
\t<div class=\"container\">
\t\t<div class=\"row\">

\t\t\t<div class=\"col-lg-10 col-12 text-center mx-auto\">
\t\t\t\t<h2 class=\"mb-5\">Welcome to Kind Heart Charity</h2>
\t\t\t</div>

";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["homepageloop"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            // line 51
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["fields"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 52
                echo "\t\t\t<div class=\"col-lg-3 col-md-6 col-12 mb-4 mb-lg-0\">
\t\t\t\t<div class=\"featured-block d-flex justify-content-center align-items-center\">
\t\t\t\t\t<a href=\"donate.html\" class=\"d-block\">
\t\t\t\t\t\t<img src=\"";
                // line 55
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->extensions['Drupal\functioncreator\TwigFunctions']->tagIDToImage($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "field_image", [], "any", false, false, true, 55), 0, [], "any", false, false, true, 55), "target_id", [], "any", false, false, true, 55), 55, $this->source))), "html", null, true);
                echo "\" class=\"featured-block-image img-fluid\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "field_image", [], "any", false, false, true, 55), 0, [], "any", false, false, true, 55), "alt", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                echo "\">

\t\t\t\t\t\t<p class=\"featured-block-text\">";
                // line 57
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "field_description", [], "any", false, false, true, 57), 0, [], "any", false, false, true, 57), "value", [], "any", false, false, true, 57), 57, $this->source));
                echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "

\t\t</div>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/nodes/node--homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 64,  153 => 63,  141 => 57,  134 => 55,  129 => 52,  124 => 51,  120 => 50,  91 => 23,  85 => 22,  75 => 18,  70 => 16,  62 => 13,  58 => 11,  53 => 10,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"hero-section hero-section-full-height\">
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">

\t\t\t<div class=\"col-lg-12 col-12 p-0\">
\t\t\t\t<div id=\"hero-slide\" class=\"carousel carousel-fade slide\" data-bs-ride=\"carousel\">
\t\t\t\t\t<div class=\"carousel-inner\">

\t\t\t\t\t\t{% for fields in bannerimageloop %}
\t\t\t\t\t\t\t{% for item in fields %}

\t\t\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ file_url(id_to_image(item.field_banner_image.0.target_id)) }}\" class=\"carousel-image img-fluid\" alt=\"{{ item.field_banner_image.0.alt }}\">

\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption d-flex flex-column justify-content-end\">
\t\t\t\t\t\t\t\t\t\t<h1>{{ item.field_banner_heading.0.value }}</h1>

\t\t\t\t\t\t\t\t\t\t<p>{{ item.field_banner_content.0.value }}</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>

\t\t\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#hero-slide\" data-bs-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t\t</button>

\t\t\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#hero-slide\" data-bs-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
</section>


<section class=\"section-padding\">
\t<div class=\"container\">
\t\t<div class=\"row\">

\t\t\t<div class=\"col-lg-10 col-12 text-center mx-auto\">
\t\t\t\t<h2 class=\"mb-5\">Welcome to Kind Heart Charity</h2>
\t\t\t</div>

{% for fields in homepageloop %}
\t\t\t\t\t\t\t{% for item in fields %}
\t\t\t<div class=\"col-lg-3 col-md-6 col-12 mb-4 mb-lg-0\">
\t\t\t\t<div class=\"featured-block d-flex justify-content-center align-items-center\">
\t\t\t\t\t<a href=\"donate.html\" class=\"d-block\">
\t\t\t\t\t\t<img src=\"{{ file_url(id_to_image(item.field_image.0.target_id)) }}\" class=\"featured-block-image img-fluid\" alt=\"{{ item.field_image.0.alt }}\">

\t\t\t\t\t\t<p class=\"featured-block-text\">{{ item.field_description.0.value | raw }}
\t\t\t\t\t\t</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t{% endfor %}
\t\t\t\t\t\t{% endfor %}


\t\t</div>
\t</div>
</section>
", "themes/custom/mytheme/templates/nodes/node--homepage.html.twig", "/opt/lampp/htdocs/drupal/test-site/themes/custom/mytheme/templates/nodes/node--homepage.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 9);
        static $filters = array("escape" => 13, "raw" => 57);
        static $functions = array("file_url" => 13, "id_to_image" => 13);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'raw'],
                ['file_url', 'id_to_image']
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
