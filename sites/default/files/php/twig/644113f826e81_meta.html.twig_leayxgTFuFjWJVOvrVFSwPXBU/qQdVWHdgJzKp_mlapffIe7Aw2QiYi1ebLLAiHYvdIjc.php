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

/* themes/custom/mytheme/templates/components/meta.html.twig */
class __TwigTemplate_28c5ad3ce83fc363370ffb771a99bf1d279231025248179b0821cec43be5c339 extends \Twig\Template
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
        echo "<meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>Kind Heart Charity - Free Bootstrap 5.2.2 CSS Template</title>

        <!-- CSS FILES -->
        <link href=\"";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 10, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 10, $this->source)), "html", null, true);
        echo "/css/bootstrap.min.css\" rel=\"stylesheet\">

        <link href=\"";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 12, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 12, $this->source)), "html", null, true);
        echo "/css/bootstrap-icons.css\" rel=\"stylesheet\">

        <link href=\"";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 14, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 14, $this->source)), "html", null, true);
        echo "/css/templatemo-kind-heart-charity.css\" rel=\"stylesheet\">
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/components/meta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  55 => 12,  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>Kind Heart Charity - Free Bootstrap 5.2.2 CSS Template</title>

        <!-- CSS FILES -->
        <link href=\"{{ base_path ~ directory }}/css/bootstrap.min.css\" rel=\"stylesheet\">

        <link href=\"{{ base_path ~ directory }}/css/bootstrap-icons.css\" rel=\"stylesheet\">

        <link href=\"{{ base_path ~ directory }}/css/templatemo-kind-heart-charity.css\" rel=\"stylesheet\">
", "themes/custom/mytheme/templates/components/meta.html.twig", "/opt/lampp/htdocs/drupal/test-site/themes/custom/mytheme/templates/components/meta.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 10);
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
