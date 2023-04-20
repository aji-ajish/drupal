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

/* themes/custom/mytheme/templates/layout/html.html.twig */
class __TwigTemplate_b7ef5fca35ad10c99d1f0e75e767108b80db703eb2511e2c66d0743f76529d8f extends \Twig\Template
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
        // line 28
        echo "<!DOCTYPE html>
<html";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 29, $this->source), "html", null, true);
        echo ">

  <head>
    ";
        // line 33
        echo "
      ";
        // line 34
        $this->loadTemplate("themes/custom/mytheme/templates/components/meta.html.twig", "themes/custom/mytheme/templates/layout/html.html.twig", 34)->display($context);
        // line 35
        echo "

      <css-placeholder token=\"";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 37, $this->source), "html", null, true);
        echo "\">
        <js-placeholder token=\"";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 38, $this->source), "html", null, true);
        echo "\">


  </head>
  <body";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 42, $this->source), "html", null, true);
        echo ">

    ";
        // line 48
        echo "    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 51, $this->source), "html", null, true);
        echo "
    ";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 52, $this->source), "html", null, true);
        echo "
    ";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 53, $this->source), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 54, $this->source), "html", null, true);
        echo "\">
      </body>

      </html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 54,  89 => 53,  85 => 52,  81 => 51,  76 => 49,  73 => 48,  68 => 42,  61 => 38,  57 => 37,  53 => 35,  51 => 34,  48 => 33,  42 => 29,  39 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
* @file
* Default theme implementation for the basic structure of a single Drupal page.
*
* Variables:
* - logged_in: A flag indicating if user is logged in.
* - root_path: The root path of the current page (e.g., node, admin, user).
* - node_type: The content type for the current node, if the page is a node.
* - head_title: List of text elements that make up the head_title variable.
* May contain one or more of the following:
* - title: The title of the page.
* - name: The name of the site.
* - slogan: The slogan of the site.
* - page_top: Initial rendered markup. This should be printed before 'page'.
* - page: The rendered page markup.
* - page_bottom: Closing rendered markup. This variable should be printed after
* 'page'.
* - db_offline: A flag indicating if the database is offline.
* - placeholder_token: The token for generating head, css, js and js-bottom
* placeholders.
*
* @see template_preprocess_html()
*
* @ingroup themeable
*/
#}
<!DOCTYPE html>
<html{{ html_attributes }}>

  <head>
    {# <head-placeholder token=\"{{ placeholder_token }}\"> #}

      {% include \"themes/custom/mytheme/templates/components/meta.html.twig\" %}


      <css-placeholder token=\"{{ placeholder_token }}\">
        <js-placeholder token=\"{{ placeholder_token }}\">


  </head>
  <body{{ attributes }}>

    {#
    Keyboard navigation/accessibility link to main content section in
    page.html.twig.
    #}
    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      {{ 'Skip to main content'|t }}
    </a>
    {{ page_top }}
    {{ page }}
    {{ page_bottom }}
    <js-bottom-placeholder token=\"{{ placeholder_token }}\">
      </body>

      </html>
", "themes/custom/mytheme/templates/layout/html.html.twig", "/opt/lampp/htdocs/drupal/test-site/themes/custom/mytheme/templates/layout/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 34);
        static $filters = array("escape" => 29, "t" => 49);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['escape', 't'],
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
