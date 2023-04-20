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

/* themes/custom/mytheme/templates/layout/region--footer.html.twig */
class __TwigTemplate_312c0d4fa636015321d3c8a0c1552c57323ef558820d164fab53f11c98977ba9 extends \Twig\Template
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
        echo "        <footer class=\"site-footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-12 mb-4\">
                        <img src=\"";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 5, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 5, $this->source)), "html", null, true);
        echo "/images/logo.png\" class=\"logo img-fluid\" alt=\"\">
                    </div>

                    <div class=\"col-lg-4 col-md-6 col-12 mb-4\">
                        <h5 class=\"site-footer-title mb-3\">Quick Links</h5>

                        <ul class=\"footer-menu\">
                            <li class=\"footer-menu-item\"><a href=\"#\" class=\"footer-menu-link\">Our Story</a></li>

                            <li class=\"footer-menu-item\"><a href=\"#\" class=\"footer-menu-link\">Newsroom</a></li>

                            <li class=\"footer-menu-item\"><a href=\"#\" class=\"footer-menu-link\">Causes</a></li>

                            <li class=\"footer-menu-item\"><a href=\"#\" class=\"footer-menu-link\">Become a volunteer</a></li>

                            <li class=\"footer-menu-item\"><a href=\"#\" class=\"footer-menu-link\">Partner with us</a></li>
                        </ul>
                    </div>

                    <div class=\"col-lg-4 col-md-6 col-12 mx-auto\">
                        <h5 class=\"site-footer-title mb-3\">Contact Infomation</h5>

                        <p class=\"text-white d-flex mb-2\">
                            <i class=\"bi-telephone me-2\"></i>

                            <a href=\"tel: 120-240-9600\" class=\"site-footer-link\">
                                120-240-9600
                            </a>
                        </p>

                        <p class=\"text-white d-flex\">
                            <i class=\"bi-envelope me-2\"></i>

                            <a href=\"mailto:info@yourgmail.com\" class=\"site-footer-link\">
                                donate@charity.org
                            </a>
                        </p>

                        <p class=\"text-white d-flex mt-3\">
                            <i class=\"bi-geo-alt me-2\"></i>
                            Akershusstranda 20, 0150 Oslo, Norway
                        </p>

                        <a href=\"#\" class=\"custom-btn btn mt-3\">Get Direction</a>
                    </div>
                </div>
            </div>

            <div class=\"site-footer-bottom\">
                <div class=\"container\">
                    <div class=\"row\">

                        <div class=\"col-lg-6 col-md-7 col-12\">
                            <p class=\"copyright-text mb-0\">Copyright © 2036 <a href=\"#\">Kind Heart</a> Charity Org.
                        \tDesign: <a href=\"https://templatemo.com\" target=\"_blank\">TemplateMo</a></p>
                        </div>

                        <div class=\"col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto\">
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
                                    <a href=\"#\" class=\"social-icon-link bi-linkedin\"></a>
                                </li>

                                <li class=\"social-icon-item\">
                                    <a href=\"https://youtube.com/templatemo\" class=\"social-icon-link bi-youtube\"></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src=\"";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 92, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 92, $this->source)), "html", null, true);
        echo "/js/jquery.min.js\"></script>
        <script src=\"";
        // line 93
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 93, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 93, $this->source)), "html", null, true);
        echo "/js/bootstrap.min.js\"></script>
        <script src=\"";
        // line 94
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 94, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 94, $this->source)), "html", null, true);
        echo "/js/jquery.sticky.js\"></script>
        <script src=\"";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 95, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 95, $this->source)), "html", null, true);
        echo "/js/click-scroll.js\"></script>
        <script src=\"";
        // line 96
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 96, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 96, $this->source)), "html", null, true);
        echo "/js/counter.js\"></script>
        <script src=\"";
        // line 97
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 97, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 97, $this->source)), "html", null, true);
        echo "/js/custom.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/layout/region--footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 97,  151 => 96,  147 => 95,  143 => 94,  139 => 93,  135 => 92,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("        <footer class=\"site-footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-12 mb-4\">
                        <img src=\"{{ base_path ~ directory }}/images/logo.png\" class=\"logo img-fluid\" alt=\"\">
                    </div>

                    <div class=\"col-lg-4 col-md-6 col-12 mb-4\">
                        <h5 class=\"site-footer-title mb-3\">Quick Links</h5>

                        <ul class=\"footer-menu\">
                            <li class=\"footer-menu-item\"><a href=\"#\" class=\"footer-menu-link\">Our Story</a></li>

                            <li class=\"footer-menu-item\"><a href=\"#\" class=\"footer-menu-link\">Newsroom</a></li>

                            <li class=\"footer-menu-item\"><a href=\"#\" class=\"footer-menu-link\">Causes</a></li>

                            <li class=\"footer-menu-item\"><a href=\"#\" class=\"footer-menu-link\">Become a volunteer</a></li>

                            <li class=\"footer-menu-item\"><a href=\"#\" class=\"footer-menu-link\">Partner with us</a></li>
                        </ul>
                    </div>

                    <div class=\"col-lg-4 col-md-6 col-12 mx-auto\">
                        <h5 class=\"site-footer-title mb-3\">Contact Infomation</h5>

                        <p class=\"text-white d-flex mb-2\">
                            <i class=\"bi-telephone me-2\"></i>

                            <a href=\"tel: 120-240-9600\" class=\"site-footer-link\">
                                120-240-9600
                            </a>
                        </p>

                        <p class=\"text-white d-flex\">
                            <i class=\"bi-envelope me-2\"></i>

                            <a href=\"mailto:info@yourgmail.com\" class=\"site-footer-link\">
                                donate@charity.org
                            </a>
                        </p>

                        <p class=\"text-white d-flex mt-3\">
                            <i class=\"bi-geo-alt me-2\"></i>
                            Akershusstranda 20, 0150 Oslo, Norway
                        </p>

                        <a href=\"#\" class=\"custom-btn btn mt-3\">Get Direction</a>
                    </div>
                </div>
            </div>

            <div class=\"site-footer-bottom\">
                <div class=\"container\">
                    <div class=\"row\">

                        <div class=\"col-lg-6 col-md-7 col-12\">
                            <p class=\"copyright-text mb-0\">Copyright © 2036 <a href=\"#\">Kind Heart</a> Charity Org.
                        \tDesign: <a href=\"https://templatemo.com\" target=\"_blank\">TemplateMo</a></p>
                        </div>

                        <div class=\"col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto\">
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
                                    <a href=\"#\" class=\"social-icon-link bi-linkedin\"></a>
                                </li>

                                <li class=\"social-icon-item\">
                                    <a href=\"https://youtube.com/templatemo\" class=\"social-icon-link bi-youtube\"></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src=\"{{ base_path ~ directory }}/js/jquery.min.js\"></script>
        <script src=\"{{ base_path ~ directory }}/js/bootstrap.min.js\"></script>
        <script src=\"{{ base_path ~ directory }}/js/jquery.sticky.js\"></script>
        <script src=\"{{ base_path ~ directory }}/js/click-scroll.js\"></script>
        <script src=\"{{ base_path ~ directory }}/js/counter.js\"></script>
        <script src=\"{{ base_path ~ directory }}/js/custom.js\"></script>
", "themes/custom/mytheme/templates/layout/region--footer.html.twig", "/opt/lampp/htdocs/drupal/test-site/themes/custom/mytheme/templates/layout/region--footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
