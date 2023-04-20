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

/* themes/custom/mytheme/templates/nodes/node--about_page.html.twig */
class __TwigTemplate_70b62d0102d40b36383efba043415eeaec976cbe1b4e84b396e797b7a1542eb8 extends \Twig\Template
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
        echo "<section class=\"news-detail-header-section text-center\">
\t<div class=\"section-overlay\"></div>

\t<div class=\"container\">
\t\t<div class=\"row\">

\t\t\t<div class=\"col-lg-12 col-12\">
\t\t\t\t<h1 class=\"text-white\">About</h1>
\t\t\t</div>

\t\t</div>
\t</div>
</section>
<section class=\"section-padding section-bg\" id=\"section_2\">
                <div class=\"container\">
                    <div class=\"row\">

                        <div class=\"col-lg-6 col-12 mb-5 mb-lg-0\">
                            <img src=\"";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_image", [], "any", false, false, true, 19), "entity", [], "any", false, false, true, 19), "fileuri", [], "any", false, false, true, 19), 19, $this->source)), "html", null, true);
        echo "\" class=\"custom-text-box-image img-fluid\" alt=\"\">
                        </div>

                        <div class=\"col-lg-6 col-12\">
                            <div class=\"custom-text-box\">
                                <h2 class=\"mb-2\">";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_heading", [], "any", false, false, true, 24), "value", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo " </h2>

                                <h5 class=\"mb-3\">";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_sub_heading", [], "any", false, false, true, 26), "value", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "</h5>

                                <p class=\"mb-0\">";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_description", [], "any", false, false, true, 28), "value", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "</p>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-lg-6 col-md-6 col-12\">
                                    <div class=\"custom-text-box mb-lg-0\">
                                        <h5 class=\"mb-3\">Our Mission</h5>

                                        <p>Sed leo nisl, posuere at molestie ac, suscipit auctor quis metus</p>

                                        <ul class=\"custom-list mt-2\">
                                            <li class=\"custom-list-item d-flex\">
                                                <i class=\"bi-check custom-text-box-icon me-2\"></i>
                                                Charity Theme
                                            </li>

                                            <li class=\"custom-list-item d-flex\">
                                                <i class=\"bi-check custom-text-box-icon me-2\"></i>
                                                Semantic HTML
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class=\"col-lg-6 col-md-6 col-12\">
                                    <div class=\"custom-text-box d-flex flex-wrap d-lg-block mb-lg-0\">
                                        <div class=\"counter-thumb\">
                                            <div class=\"d-flex\">
                                                <span class=\"counter-number\" data-from=\"1\" data-to=\"2009\" data-speed=\"1000\"></span>
                                                <span class=\"counter-number-text\"></span>
                                            </div>

                                            <span class=\"counter-text\">Founded</span>
                                        </div>

                                        <div class=\"counter-thumb mt-4\">
                                            <div class=\"d-flex\">
                                                <span class=\"counter-number\" data-from=\"1\" data-to=\"120\" data-speed=\"1000\"></span>
                                                <span class=\"counter-number-text\">B</span>
                                            </div>

                                            <span class=\"counter-text\">Donations</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/nodes/node--about_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 28,  72 => 26,  67 => 24,  59 => 19,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"news-detail-header-section text-center\">
\t<div class=\"section-overlay\"></div>

\t<div class=\"container\">
\t\t<div class=\"row\">

\t\t\t<div class=\"col-lg-12 col-12\">
\t\t\t\t<h1 class=\"text-white\">About</h1>
\t\t\t</div>

\t\t</div>
\t</div>
</section>
<section class=\"section-padding section-bg\" id=\"section_2\">
                <div class=\"container\">
                    <div class=\"row\">

                        <div class=\"col-lg-6 col-12 mb-5 mb-lg-0\">
                            <img src=\"{{ file_url(node.field_image.entity.fileuri) }}\" class=\"custom-text-box-image img-fluid\" alt=\"\">
                        </div>

                        <div class=\"col-lg-6 col-12\">
                            <div class=\"custom-text-box\">
                                <h2 class=\"mb-2\">{{ node.field_heading.value }} </h2>

                                <h5 class=\"mb-3\">{{ node.field_sub_heading.value }}</h5>

                                <p class=\"mb-0\">{{ node.field_description.value }}</p>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-lg-6 col-md-6 col-12\">
                                    <div class=\"custom-text-box mb-lg-0\">
                                        <h5 class=\"mb-3\">Our Mission</h5>

                                        <p>Sed leo nisl, posuere at molestie ac, suscipit auctor quis metus</p>

                                        <ul class=\"custom-list mt-2\">
                                            <li class=\"custom-list-item d-flex\">
                                                <i class=\"bi-check custom-text-box-icon me-2\"></i>
                                                Charity Theme
                                            </li>

                                            <li class=\"custom-list-item d-flex\">
                                                <i class=\"bi-check custom-text-box-icon me-2\"></i>
                                                Semantic HTML
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class=\"col-lg-6 col-md-6 col-12\">
                                    <div class=\"custom-text-box d-flex flex-wrap d-lg-block mb-lg-0\">
                                        <div class=\"counter-thumb\">
                                            <div class=\"d-flex\">
                                                <span class=\"counter-number\" data-from=\"1\" data-to=\"2009\" data-speed=\"1000\"></span>
                                                <span class=\"counter-number-text\"></span>
                                            </div>

                                            <span class=\"counter-text\">Founded</span>
                                        </div>

                                        <div class=\"counter-thumb mt-4\">
                                            <div class=\"d-flex\">
                                                <span class=\"counter-number\" data-from=\"1\" data-to=\"120\" data-speed=\"1000\"></span>
                                                <span class=\"counter-number-text\">B</span>
                                            </div>

                                            <span class=\"counter-text\">Donations</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

", "themes/custom/mytheme/templates/nodes/node--about_page.html.twig", "/opt/lampp/htdocs/drupal/test-site/themes/custom/mytheme/templates/nodes/node--about_page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 19);
        static $functions = array("file_url" => 19);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['file_url']
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
