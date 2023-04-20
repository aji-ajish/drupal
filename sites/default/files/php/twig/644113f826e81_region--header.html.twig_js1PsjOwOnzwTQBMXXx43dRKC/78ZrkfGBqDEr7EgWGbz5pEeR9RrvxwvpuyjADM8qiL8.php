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

/* themes/custom/mytheme/templates/layout/region--header.html.twig */
class __TwigTemplate_05482fe2f7d0fe11cbce32b5ddebf753079a85a78b4f72456ff179e099cfd7f2 extends \Twig\Template
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
        echo "<header class=\"site-header\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-8 col-12 d-flex flex-wrap\">
                        <p class=\"d-flex me-4 mb-0\">
                            <i class=\"bi-geo-alt me-2\"></i>
                            Akershusstranda 20, 0150 Oslo, Norway
                        </p>

                        <p class=\"d-flex mb-0\">
                            <i class=\"bi-envelope me-2\"></i>

                            <a href=\"mailto:info@company.com\">
                                info@company.com
                            </a>
                        </p>
                    </div>

                    <div class=\"col-lg-3 col-12 ms-auto d-lg-block d-none\">
                        <ul class=\"social-icon\">
                            <li class=\"social-icon-item\">
                                <a href=\"#\" class=\"social-icon-link bi-twitter\"></a>
                            </li>

                            <li class=\"social-icon-item\">
                                <a href=\"#\" class=\"social-icon-link bi-facebook\"></a>
                            </li>

                            <li class=\"social-icon-item\">
                                <a href=\"#\" class=\"social-icon-link bi-instagram\"></a>
                            </li>

                            <li class=\"social-icon-item\">
                                <a href=\"#\" class=\"social-icon-link bi-youtube\"></a>
                            </li>

                            <li class=\"social-icon-item\">
                                <a href=\"#\" class=\"social-icon-link bi-whatsapp\"></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </header>
<nav class=\"navbar navbar-expand-lg bg-light shadow-lg\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"/\">
                    <img src=\"";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 50, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 50, $this->source)), "html", null, true);
        echo "/images/logo.png\" class=\"logo img-fluid\" alt=\"\">
                    <span>
                        Kind Heart Charity
                        <small>Non-profit Organization</small>
                    </span>
                </a>

                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav ms-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
        // line 64
        if ((($context["current_path"] ?? null) == "/")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_base_url"] ?? null), 64, $this->source), "html", null, true);
        echo "\">Home</a>
                        </li>

                        <li class=\"nav-item \">
                            <a class=\"nav-link ";
        // line 68
        if ((($context["current_path"] ?? null) == "/about")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_base_url"] ?? null), 68, $this->source), "html", null, true);
        echo "/about\">About</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
        // line 72
        if ((($context["current_path"] ?? null) == "/causes")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_base_url"] ?? null), 72, $this->source), "html", null, true);
        echo "/causes\">Causes</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
        // line 76
        if ((($context["current_path"] ?? null) == "/volunteer")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_base_url"] ?? null), 76, $this->source), "html", null, true);
        echo "/volunteer\">Volunteer</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link  ";
        // line 80
        if ((($context["current_path"] ?? null) == "/news")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_base_url"] ?? null), 80, $this->source), "html", null, true);
        echo "/news\" >News</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
        // line 84
        if ((($context["current_path"] ?? null) == "/contact")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_base_url"] ?? null), 84, $this->source), "html", null, true);
        echo "/contact\">Contact</a>
                        </li>

                        <li class=\"nav-item ms-3\">
                            <a class=\"nav-link custom-btn custom-border-btn btn\" href=\"";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_base_url"] ?? null), 88, $this->source), "html", null, true);
        echo "/donate\">Donate</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/layout/region--header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 88,  162 => 84,  151 => 80,  140 => 76,  129 => 72,  118 => 68,  107 => 64,  90 => 50,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"site-header\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-8 col-12 d-flex flex-wrap\">
                        <p class=\"d-flex me-4 mb-0\">
                            <i class=\"bi-geo-alt me-2\"></i>
                            Akershusstranda 20, 0150 Oslo, Norway
                        </p>

                        <p class=\"d-flex mb-0\">
                            <i class=\"bi-envelope me-2\"></i>

                            <a href=\"mailto:info@company.com\">
                                info@company.com
                            </a>
                        </p>
                    </div>

                    <div class=\"col-lg-3 col-12 ms-auto d-lg-block d-none\">
                        <ul class=\"social-icon\">
                            <li class=\"social-icon-item\">
                                <a href=\"#\" class=\"social-icon-link bi-twitter\"></a>
                            </li>

                            <li class=\"social-icon-item\">
                                <a href=\"#\" class=\"social-icon-link bi-facebook\"></a>
                            </li>

                            <li class=\"social-icon-item\">
                                <a href=\"#\" class=\"social-icon-link bi-instagram\"></a>
                            </li>

                            <li class=\"social-icon-item\">
                                <a href=\"#\" class=\"social-icon-link bi-youtube\"></a>
                            </li>

                            <li class=\"social-icon-item\">
                                <a href=\"#\" class=\"social-icon-link bi-whatsapp\"></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </header>
<nav class=\"navbar navbar-expand-lg bg-light shadow-lg\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"/\">
                    <img src=\"{{ base_path ~ directory }}/images/logo.png\" class=\"logo img-fluid\" alt=\"\">
                    <span>
                        Kind Heart Charity
                        <small>Non-profit Organization</small>
                    </span>
                </a>

                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav ms-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link {% if current_path == '/' %}active{% endif %}\" href=\"{{ site_base_url }}\">Home</a>
                        </li>

                        <li class=\"nav-item \">
                            <a class=\"nav-link {% if current_path == '/about' %}active{% endif %}\" href=\"{{ site_base_url }}/about\">About</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link {% if current_path == '/causes' %}active{% endif %}\" href=\"{{ site_base_url }}/causes\">Causes</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link {% if current_path == '/volunteer' %}active{% endif %}\" href=\"{{ site_base_url }}/volunteer\">Volunteer</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link  {% if current_path == '/news' %}active{% endif %}\" href=\"{{ site_base_url }}/news\" >News</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link {% if current_path == '/contact' %}active{% endif %}\" href=\"{{ site_base_url }}/contact\">Contact</a>
                        </li>

                        <li class=\"nav-item ms-3\">
                            <a class=\"nav-link custom-btn custom-border-btn btn\" href=\"{{ site_base_url }}/donate\">Donate</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
", "themes/custom/mytheme/templates/layout/region--header.html.twig", "/opt/lampp/htdocs/drupal/test-site/themes/custom/mytheme/templates/layout/region--header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 64);
        static $filters = array("escape" => 50);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
