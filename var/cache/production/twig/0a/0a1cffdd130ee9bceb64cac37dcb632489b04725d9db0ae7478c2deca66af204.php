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

/* @UVDeskCoreFramework//Templates//layout.html.twig */
class __TwigTemplate_16ff3fe7750ec36503ac309a88b7d09df18eb169eccf8671d9c35114ecf4e432 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'templateCSS' => [$this, 'block_templateCSS'],
            'sidebar' => [$this, 'block_sidebar'],
            'pageWrapper' => [$this, 'block_pageWrapper'],
            'pageHeader' => [$this, 'block_pageHeader'],
            'pageContent' => [$this, 'block_pageContent'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework//Templates//layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16 32x32 48x48\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\">
        <!-- Stylesheets -->
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/css/_uikit.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"all\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/css/_custom.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"all\" />
        <link href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\" type=\"text/css\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        ";
        // line 13
        $context["websiteConfiguration"] = twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 13, $this->source); })()), "getWebsiteConfiguration", [0 => "knowledgebase"], "method", false, false, false, 13);
        // line 14
        echo "        ";
        $context["website"] = twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 14, $this->source); })()), "getWebsiteDetails", [0 => "helpdesk"], "method", false, false, false, 14);
        // line 15
        echo "
        ";
        // line 16
        echo twig_include($this->env, $context, "@UVDeskCoreFramework/Templates/lightskin.html.twig");
        echo "

        <!-- Custom Stylesheets -->
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 19, $this->source); })()), "getRegisteredComponent", [0 => "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\Dashboard"], "method", false, false, false, 19), "getDashboardTemplate", [], "method", false, false, false, 19), "getStylesheetResources", [], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 20
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"all\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        
        ";
        // line 23
        $this->displayBlock('templateCSS', $context, $blocks);
        // line 24
        echo "
        <!-- Scripts -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.13.1/underscore-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.4.0/backbone-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.validation/0.11.5/backbone-validation-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.paginator/2.0.8/backbone.paginator.min.js\"></script>
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/js/_common.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/js/_dropdown.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/d3/6.2.0/d3.min.js\"></script>
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/js/viewer.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js\"></script>\t
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js\"></script>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker-standalone.css\"> 
    </head>

    <body>
        <div class=\"uv-notifications-wrapper\">
            <noscript>
                <div class=\"uv-notification page-load uv-error\">
                    <p>";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your browser does not support JavaScript or You disabled JavaScript, Please enable those !", [], "messages");
        echo "</p>
                </div>
                <style>.uv-loader-view {display: none;}</style>
            </noscript>

            ";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, (isset($context["uvdesk_service"]) || array_key_exists("uvdesk_service", $context) ? $context["uvdesk_service"] : (function () { throw new RuntimeError('Variable "uvdesk_service" does not exist.', 50, $this->source); })()), "requestHeadersSent", [], "method", false, false, false, 50) == false)) {
            // line 51
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "session", [], "any", false, false, false, 51), "flashbag", [], "any", false, false, false, 51), "get", [0 => "success"], "method", false, false, false, 51));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 52
                echo "                    <div class=\"uv-notification page-load uv-success\">
                        <span class=\"uv-notification-close\"></span>
                        <p>";
                // line 54
                echo $context["flashMessage"];
                echo "</p>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                
                ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "session", [], "any", false, false, false, 58), "flashbag", [], "any", false, false, false, 58), "get", [0 => "warning"], "method", false, false, false, 58));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 59
                echo "                    <div class=\"uv-notification page-load uv-error\">
                        <span class=\"uv-notification-close\"></span>
                        <p>";
                // line 61
                echo $context["flashMessage"];
                echo "</p>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "            ";
        }
        // line 65
        echo "        </div>

        <div class=\"uv-pop-up-overlay\" id=\"confirm-modal\">
            <div class=\"uv-pop-up-box uv-pop-up-slim\">
                <span class=\"uv-pop-up-close\"></span>
                <h2>";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirm Action"), "html", null, true);
        echo "</h2>
                <p>";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure? You want to perform this action."), "html", null, true);
        echo "</p>

                <div class=\"uv-pop-up-actions\">
                    <a href=\"#\" class=\"uv-btn uv-btn-error confirm\">";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirm"), "html", null, true);
        echo "</a>
                    <a href=\"#\" class=\"uv-btn cancel\">";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "</a>
                </div>
            </div>
        </div>

        ";
        // line 80
        $context["currentUser"] = twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 80, $this->source); })()), "getSessionUser", [], "method", false, false, false, 80);
        // line 81
        echo "        ";
        if (( !twig_test_empty((isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 81, $this->source); })())) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 81, $this->source); })()), "getAgentInstance", [], "method", false, false, false, 81)))) {
            // line 82
            echo "            ";
            $context["currentUserDetails"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 82, $this->source); })()), "getAgentInstance", [], "method", false, false, false, 82), "getPartialDetails", [], "method", false, false, false, 82);
            // line 83
            echo "        ";
        }
        // line 84
        echo "
        ";
        // line 85
        $this->displayBlock('sidebar', $context, $blocks);
        // line 90
        echo "
        ";
        // line 91
        $this->displayBlock('pageWrapper', $context, $blocks);
        // line 104
        echo "        
        ";
        // line 105
        $this->displayBlock('footer', $context, $blocks);
        // line 158
        echo "
        ";
        // line 160
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 160, $this->source); })()), "getRegisteredComponent", [0 => "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\Dashboard"], "method", false, false, false, 160), "getDashboardTemplate", [], "method", false, false, false, 160), "getJavascriptResources", [], "method", false, false, false, 160));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 161
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "HelpDesk";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_templateCSS($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "templateCSS"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 85
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 86
        echo "            ";
        if ((array_key_exists("currentUser", $context) &&  !twig_test_empty((isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 86, $this->source); })())))) {
            // line 87
            echo "                ";
            $this->loadTemplate("@UVDeskCoreFramework/Templates/sidebar.html.twig", "@UVDeskCoreFramework//Templates//layout.html.twig", 87)->display($context);
            // line 88
            echo "            ";
        }
        // line 89
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 91
    public function block_pageWrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageWrapper"));

        // line 92
        echo "            <div class=\"uv-paper\">
                ";
        // line 93
        $this->displayBlock('pageHeader', $context, $blocks);
        // line 96
        echo "
                <div class=\"uv-wrapper\">
                    <div class=\"uv-container\">
                        ";
        // line 99
        $this->displayBlock('pageContent', $context, $blocks);
        // line 100
        echo "                    </div>
                </div>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 93
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 94
        echo "                    ";
        $this->loadTemplate("@UVDeskCoreFramework/Templates/header.html.twig", "@UVDeskCoreFramework//Templates//layout.html.twig", 94)->display($context);
        // line 95
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 99
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 105
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 106
        echo "            ";
        $this->loadTemplate("@UVDeskCoreFramework/Templates/pagination.html.twig", "@UVDeskCoreFramework//Templates//layout.html.twig", 106)->display($context);
        // line 107
        echo "
            ";
        // line 109
        echo "            <div class=\"uv-pop-up-overlay\" id=\"confirm-modal\">
                <div class=\"uv-pop-up-box uv-pop-up-slim\">
                    <span class=\"uv-pop-up-close\"></span>
                    <h2>";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirm Action"), "html", null, true);
        echo "</h2>
                    <p>";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure? You want to perform this action."), "html", null, true);
        echo "</p>

                    <div class=\"uv-pop-up-actions\">
                        <a href=\"#\" class=\"uv-btn uv-btn-error confirm\">";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirm"), "html", null, true);
        echo "</a>
                        <a href=\"#\" class=\"uv-btn cancel\">";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "</a>
                    </div>
                </div>
            </div>

            ";
        // line 123
        echo "            <script type=\"text/template\" id=\"loader-tmp\">
                <div class=\"uv-loader\">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </script>

            ";
        // line 132
        echo "            <script type=\"text/template\" id=\"full-view-loader\">
                <div class=\"uv-loader-view\">
                    <div class=\"uv-loader\">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </script>

            ";
        // line 143
        echo "            <script type=\"text/template\" id=\"notification-template\">
                <div class=\"uv-notification <% if(alertClass == 'danger') { %>uv-error<% } else { %> <%= 'uv-' + alertClass %> <% } %>\">
                    <span class=\"uv-notification-close\"></span>
                    <p><%= alertMessage %> </p>
                </div>
            </script>

            <script type=\"text/javascript\">
                var warningResponse = {
                    'alertClass' : 'danger',
                    'alertMessage' : '";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error : Something went wrong, please try again later"), "html", null, true);
        echo "',
                };
            </script>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@UVDeskCoreFramework//Templates//layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 153,  437 => 143,  425 => 132,  415 => 123,  407 => 117,  403 => 116,  397 => 113,  393 => 112,  388 => 109,  385 => 107,  382 => 106,  375 => 105,  363 => 99,  356 => 95,  353 => 94,  346 => 93,  336 => 100,  334 => 99,  329 => 96,  327 => 93,  324 => 92,  317 => 91,  310 => 89,  307 => 88,  304 => 87,  301 => 86,  294 => 85,  282 => 23,  269 => 4,  260 => 163,  251 => 161,  246 => 160,  243 => 158,  241 => 105,  238 => 104,  236 => 91,  233 => 90,  231 => 85,  228 => 84,  225 => 83,  222 => 82,  219 => 81,  217 => 80,  209 => 75,  205 => 74,  199 => 71,  195 => 70,  188 => 65,  185 => 64,  176 => 61,  172 => 59,  168 => 58,  165 => 57,  156 => 54,  152 => 52,  147 => 51,  145 => 50,  137 => 45,  123 => 34,  118 => 32,  114 => 31,  105 => 24,  103 => 23,  100 => 22,  91 => 20,  87 => 19,  81 => 16,  78 => 15,  75 => 14,  73 => 13,  66 => 9,  62 => 8,  56 => 5,  52 => 4,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <title>{% block title %}HelpDesk{% endblock %}</title>
        <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16 32x32 48x48\" href=\"{{ asset('favicon.ico') }}\" />
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\">
        <!-- Stylesheets -->
        <link href=\"{{ asset('bundles/uvdeskcoreframework/css/_uikit.css') }}\" type=\"text/css\" rel=\"stylesheet\" media=\"all\" />
        <link href=\"{{ asset('bundles/uvdeskcoreframework/css/_custom.css') }}\" type=\"text/css\" rel=\"stylesheet\" media=\"all\" />
        <link href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\" type=\"text/css\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        {% set websiteConfiguration = user_service.getWebsiteConfiguration('knowledgebase') %}
        {% set website = user_service.getWebsiteDetails('helpdesk') %}

        {{ include('@UVDeskCoreFramework/Templates/lightskin.html.twig') }}

        <!-- Custom Stylesheets -->
        {% for stylesheet in uvdesk_extensibles.getRegisteredComponent('Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\Dashboard').getDashboardTemplate().getStylesheetResources() %}
            <link href=\"{{ asset(stylesheet) }}\" type=\"text/css\" rel=\"stylesheet\" media=\"all\" />
        {% endfor %}
        
        {% block templateCSS %}{% endblock %}

        <!-- Scripts -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.13.1/underscore-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.4.0/backbone-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.validation/0.11.5/backbone-validation-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.paginator/2.0.8/backbone.paginator.min.js\"></script>
        <script src=\"{{ asset('bundles/uvdeskcoreframework/js/_common.js') }}\"></script>
        <script src=\"{{ asset('bundles/uvdeskcoreframework/js/_dropdown.js') }}\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/d3/6.2.0/d3.min.js\"></script>
        <script src=\"{{ asset('bundles/uvdeskcoreframework/js/viewer.js') }}\"></script>
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js\"></script>\t
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js\"></script>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker-standalone.css\"> 
    </head>

    <body>
        <div class=\"uv-notifications-wrapper\">
            <noscript>
                <div class=\"uv-notification page-load uv-error\">
                    <p>{% trans %}Your browser does not support JavaScript or You disabled JavaScript, Please enable those !{% endtrans %}</p>
                </div>
                <style>.uv-loader-view {display: none;}</style>
            </noscript>

            {% if uvdesk_service.requestHeadersSent() == false %}
                {% for flashMessage in app.session.flashbag.get('success') %}
                    <div class=\"uv-notification page-load uv-success\">
                        <span class=\"uv-notification-close\"></span>
                        <p>{{ flashMessage|raw }}</p>
                    </div>
                {% endfor %}
                
                {% for flashMessage in app.session.flashbag.get('warning') %}
                    <div class=\"uv-notification page-load uv-error\">
                        <span class=\"uv-notification-close\"></span>
                        <p>{{ flashMessage|raw }}</p>
                    </div>
                {% endfor %}
            {% endif %}
        </div>

        <div class=\"uv-pop-up-overlay\" id=\"confirm-modal\">
            <div class=\"uv-pop-up-box uv-pop-up-slim\">
                <span class=\"uv-pop-up-close\"></span>
                <h2>{{ 'Confirm Action'|trans }}</h2>
                <p>{{ 'Are you sure? You want to perform this action.'|trans }}</p>

                <div class=\"uv-pop-up-actions\">
                    <a href=\"#\" class=\"uv-btn uv-btn-error confirm\">{{ 'Confirm'|trans }}</a>
                    <a href=\"#\" class=\"uv-btn cancel\">{{ 'Cancel'|trans }}</a>
                </div>
            </div>
        </div>

        {% set currentUser = user_service.getSessionUser() %}
        {% if currentUser is not empty and currentUser.getAgentInstance() is not empty %}
            {% set currentUserDetails = currentUser.getAgentInstance().getPartialDetails() %}
        {% endif %}

        {% block sidebar %}
            {% if currentUser is defined and currentUser is not empty %}
                {% include \"@UVDeskCoreFramework/Templates/sidebar.html.twig\" %}
            {% endif %}
        {% endblock %}

        {% block pageWrapper %}
            <div class=\"uv-paper\">
                {% block pageHeader %}
                    {% include \"@UVDeskCoreFramework/Templates/header.html.twig\" %}
                {% endblock %}

                <div class=\"uv-wrapper\">
                    <div class=\"uv-container\">
                        {% block pageContent %}{% endblock %}
                    </div>
                </div>
            </div>
        {% endblock %}
        
        {% block footer %}
            {% include \"@UVDeskCoreFramework/Templates/pagination.html.twig\" %}

            {# Confirm Action Dialog #}
            <div class=\"uv-pop-up-overlay\" id=\"confirm-modal\">
                <div class=\"uv-pop-up-box uv-pop-up-slim\">
                    <span class=\"uv-pop-up-close\"></span>
                    <h2>{{ 'Confirm Action'|trans }}</h2>
                    <p>{{ 'Are you sure? You want to perform this action.'|trans }}</p>

                    <div class=\"uv-pop-up-actions\">
                        <a href=\"#\" class=\"uv-btn uv-btn-error confirm\">{{ 'Confirm'|trans }}</a>
                        <a href=\"#\" class=\"uv-btn cancel\">{{ 'Cancel'|trans }}</a>
                    </div>
                </div>
            </div>

            {# Loader Template #}
            <script type=\"text/template\" id=\"loader-tmp\">
                <div class=\"uv-loader\">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </script>

            {# Full View Loader Template #}
            <script type=\"text/template\" id=\"full-view-loader\">
                <div class=\"uv-loader-view\">
                    <div class=\"uv-loader\">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </script>

            {# Notification Template #}
            <script type=\"text/template\" id=\"notification-template\">
                <div class=\"uv-notification <% if(alertClass == 'danger') { %>uv-error<% } else { %> <%= 'uv-' + alertClass %> <% } %>\">
                    <span class=\"uv-notification-close\"></span>
                    <p><%= alertMessage %> </p>
                </div>
            </script>

            <script type=\"text/javascript\">
                var warningResponse = {
                    'alertClass' : 'danger',
                    'alertMessage' : '{{ \"Error : Something went wrong, please try again later\"|trans }}',
                };
            </script>

        {% endblock %}

        {# Custom Javascript #}
        {% for javascript in uvdesk_extensibles.getRegisteredComponent('Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\Dashboard').getDashboardTemplate().getJavascriptResources() %}
            <script src=\"{{ asset(javascript) }}\" type=\"text/javascript\"></script>
        {% endfor %}
    </body>
</html>
", "@UVDeskCoreFramework//Templates//layout.html.twig", "/home/support.telenet.com.np/public_html/vendor/uvdesk/core-framework/Resources/views/Templates/layout.html.twig");
    }
}
