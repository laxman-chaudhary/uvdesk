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

/* errors/error.html.twig */
class __TwigTemplate_b00c83c4dafa1f4049453514ecf2bb94dad35eb070cc7016221a5872fc719068 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "errors/error.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "errors/error.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTDXHTML1.0Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html lang=\"en\">
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html;\" charset=\"UTF-8\" />
\t\t<meta name=\"robots\" content=\"INDEX,FOLLOW\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t\t
\t\t<link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">
\t\t<link rel=\"canonical\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase");
        echo "\">
\t\t<link href=\"https://cdn.uvdesk.com/uvdesk/css/main.css\" type=\"text/css\" rel=\"stylesheet\" media=\"all\" />

\t\t<title>
\t\t\t";
        // line 13
        if ((0 === twig_compare((isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 13, $this->source); })()), 404))) {
            // line 14
            echo "\t\t\t\t404 - ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Page not found"), "html", null, true);
            echo "
\t\t\t";
        } elseif ((0 === twig_compare(        // line 15
(isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 15, $this->source); })()), 403))) {
            // line 16
            echo "\t\t\t\t403 - ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forbidden"), "html", null, true);
            echo "
\t\t\t";
        } elseif ((0 === twig_compare(        // line 17
(isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 17, $this->source); })()), 500))) {
            // line 18
            echo "\t\t\t\t500 - ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Internal server error"), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 20
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 20, $this->source); })()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error"), "html", null, true);
            echo "
\t\t\t";
        }
        // line 22
        echo "\t\t</title>

\t\t<style>
\t\t\t.error-dialog {
\t\t\t\tpadding: 25px;
\t\t\t\tposition: fixed;
\t\t\t\ttop: 50%;
\t\t\t\tleft: 50%;
\t\t\t\ttransform: translate(-50%, -50%);
\t\t\t}

\t\t\t.error-dialog h1 {
\t\t\t\tcolor: #6F6F6F;
\t\t\t\tfont-size: 21px;
\t\t\t\tfont-weight: 700;
\t\t\t\ttext-transform: uppercase;
\t\t\t\tmargin: unset;
\t\t\t\tline-height: 1.4em;
\t\t\t}

\t\t\t.section-separator {
\t\t\t\twidth: 50px;
\t\t\t\tborder: 1px solid #6F6F6F;
\t\t\t\tmargin: 14px 0px 20px;
\t\t\t}
\t\t\t.uv-logo {
    \t\t\theight: 70px;
 \t\t\t\tdisplay: table-cell;
\t\t\t}
\t\t</style>

\t</head>
\t<body>
    ";
        // line 55
        $context["websiteDetails"] = twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 55, $this->source); })()), "getWebsiteDetails", [0 => "knowledgebase"], "method", false, false, false, 55);
        echo "\t
    ";
        // line 56
        $context["currentPath"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "request", [], "any", false, false, false, 56), "schemeAndHttpHost", [], "any", false, false, false, 56) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "request", [], "any", false, false, false, 56), "requestUri", [], "any", false, false, false, 56));
        // line 57
        echo "

\t<div class=\"uv-box-server-error\">
\t\t<div class=\"uv-box-server-error-lt\">
\t\t\t";
        // line 61
        if ((isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 61, $this->source); })())) {
            // line 62
            echo "\t\t\t\t<a class=\"uv-logo\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_handle_login");
            echo "\">
\t\t\t\t\t";
            // line 63
            if (twig_get_attribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 63, $this->source); })()), "logo", [], "any", false, false, false, 63)) {
                // line 64
                echo "\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "request", [], "any", false, false, false, 64), "scheme", [], "any", false, false, false, 64) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "request", [], "any", false, false, false, 64), "httpHost", [], "any", false, false, false, 64)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 64, $this->source); })()), "logo", [], "any", false, false, false, 64), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 64, $this->source); })()), "name", [], "any", false, false, false, 64), "html", null, true);
                echo "\">
\t\t\t\t\t";
            } else {
                // line 66
                echo "\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"122\" height=\"48\" viewBox=\"0 0 122 48\">
                            <defs>
                                <style>
                                .cls-1 {
                                    fill: #9f9f9f;
                                    fill-rule: evenodd;
                                    }
                                </style>
                            </defs>
                            <path id=\"uvdesk-icon\" class=\"cls-1\" d=\"M43.5,23A1.5,1.5,0,0,1,45,24.5V25H42V24.5A1.5,1.5,0,0,1,43.5,23ZM39,31H38V18h1a2.257,2.257,0,0,1,2,2v9A2.257,2.257,0,0,1,39,31Zm6-5H42s1.769,15.329-15,17c0.011-.1-0.027,1.292,0,2C33.324,44.708,45.563,40.575,45,26ZM25.987,44A1.988,1.988,0,1,1,24,41.989,2,2,0,0,1,25.987,44ZM8,41A18.173,18.173,0,0,1,3.386,29.28L3,24a14.906,14.906,0,0,0,9-5,14.838,14.838,0,0,0,5,4,17.2,17.2,0,0,0,16-1l4-3a2.479,2.479,0,0,0,0-1C36.692,8.308,27.872,0,18,0h0A17.913,17.913,0,0,0,0,18V29A21.17,21.17,0,0,0,5,43a16.677,16.677,0,0,0,7,5l1-3C10.936,44.167,9.633,42.824,8,41Zm2.492-15A3.5,3.5,0,1,0,14,29.5,3.5,3.5,0,0,0,10.492,26ZM27.5,33A3.5,3.5,0,1,0,24,29.5,3.5,3.5,0,0,0,27.5,33Z\"/>
                            <path id=\"uvdesk\" class=\"cls-1\" d=\"M53.078,25.329c0,2.976,1.1,4.56,3.576,4.56a4.931,4.931,0,0,0,3.84-2.112h0.072L60.734,29.6h1.632V17.937H60.4v8.281c-1.1,1.368-1.944,1.968-3.144,1.968-1.536,0-2.184-.936-2.184-3.12V17.937H53.078v7.393ZM68.822,29.6h2.3l4.128-11.665H73.31L71.1,24.561c-0.336,1.152-.72,2.328-1.056,3.432h-0.1c-0.36-1.1-.744-2.28-1.08-3.432l-2.208-6.625h-2.04Zm7.752-5.809c0,3.888,1.9,6.1,4.824,6.1a5.262,5.262,0,0,0,3.528-1.656H85L85.166,29.6H86.8V12.512H84.806V17l0.1,1.992a4.806,4.806,0,0,0-3.264-1.344C78.973,17.649,76.573,20,76.573,23.793Zm2.04-.024c0-2.664,1.488-4.464,3.36-4.464a4.06,4.06,0,0,1,2.832,1.224v6.1a3.948,3.948,0,0,1-2.976,1.608C79.789,28.233,78.613,26.553,78.613,23.769Zm11.256,0.024c0,3.816,2.472,6.1,5.593,6.1a6.947,6.947,0,0,0,3.84-1.2l-0.7-1.3a5.271,5.271,0,0,1-2.9.912c-2.232,0-3.744-1.584-3.888-4.1h7.873a6.956,6.956,0,0,0,.072-1.08c0-3.336-1.68-5.472-4.656-5.472C92.437,17.649,89.869,19.977,89.869,23.793Zm1.92-.888c0.24-2.352,1.728-3.7,3.36-3.7,1.824,0,2.88,1.32,2.88,3.7H91.789Zm9.552,5.376a7.021,7.021,0,0,0,4.344,1.608c2.76,0,4.272-1.584,4.272-3.48,0-2.208-1.872-2.9-3.552-3.528-1.32-.5-2.592-0.936-2.592-2.016,0-.888.672-1.68,2.136-1.68a4.331,4.331,0,0,1,2.664,1.032l0.936-1.248a5.822,5.822,0,0,0-3.624-1.32c-2.52,0-4.008,1.44-4.008,3.312,0,1.968,1.824,2.76,3.48,3.36,1.272,0.48,2.664,1.008,2.664,2.208,0,1.008-.768,1.824-2.3,1.824a5.245,5.245,0,0,1-3.432-1.392Zm11.352,1.32h1.944V26.529l2.184-2.544,3.408,5.617h2.16l-4.44-6.985,3.912-4.68h-2.184l-4.968,6.145h-0.072V12.512h-1.944V29.6Z\"/>
                        </svg>
\t\t\t\t\t";
            }
            // line 79
            echo "\t\t\t\t</a>
\t\t\t";
        } else {
            // line 81
            echo "\t\t\t\t<a href=\"http://uvdesk.com\">

\t\t\t\t\t<img src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/images/uvdesk-logo.svg"), "html", null, true);
            echo "\" title=\"UVdesk\">

\t\t\t\t</a>\t
\t\t\t";
        }
        // line 87
        echo "\t\t\t<div class=\"uv-box-block\">
\t\t\t
\t\t\t\t<p class=\"uv-error-title\">
\t\t\t\t\t";
        // line 90
        if ((0 === twig_compare((isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 90, $this->source); })()), 404))) {
            // line 91
            echo "\t\t\t\t\t\t<span>404</span>
\t\t\t\t\t\t- ";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Page not found"), "html", null, true);
            echo "
\t\t\t\t\t\t<p>";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("We were not able to find the page you are looking for."), "html", null, true);
            echo "</p>
\t\t\t\t\t";
        } elseif ((0 === twig_compare(        // line 94
(isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 94, $this->source); })()), 403))) {
            // line 95
            echo "\t\t\t\t\t\t<span>403</span>
\t\t\t\t\t\t- ";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forbidden"), "html", null, true);
            echo "
\t\t\t\t\t\t<p>";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You don’t have the necessary permissions to access this Web page :("), "html", null, true);
            echo "</p>
\t\t\t\t\t";
        } elseif ((0 === twig_compare(        // line 98
(isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 98, $this->source); })()), 500))) {
            // line 99
            echo "\t\t\t\t\t\t<span>500</span>
\t\t\t\t\t\t- ";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Internal server error"), "html", null, true);
            echo "
\t\t\t\t\t\t<p>";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Our system has goofed up for a while, but good part is it won't last long"), "html", null, true);
            echo "</p>
\t\t\t\t\t";
        } else {
            // line 103
            echo "\t\t\t\t\t\t<span>";
            echo twig_escape_filter($this->env, (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 103, $this->source); })()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t- ";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unknown Error"), "html", null, true);
            echo "
\t\t\t\t\t\t<p>";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("We are quite confused about how did you land here:/"), "html", null, true);
            echo "</p>
\t\t\t\t\t";
        }
        // line 107
        echo "\t\t\t\t</p>
\t\t\t</div>

\t\t\t<div class=\"uv-box-block\">
\t\t\t\t<p>";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Few of the links which may help you to get back on the track -"), "html", null, true);
        echo "</p>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"";
        // line 113
        ((twig_in_filter("public/en/member", (isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 113, $this->source); })()))) ? ((((isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 113, $this->source); })())) ? (print ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_dashboard"))) : (print (twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "request", [], "any", false, false, false, 113), "scheme", [], "any", false, false, false, 113) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "request", [], "any", false, false, false, 113), "httpHost", [], "any", false, false, false, 113)), "html", null, true))))) : (print ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_login"))));
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Home"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Support"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t";
        // line 115
        if ( !(isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 115, $this->source); })())) {
            // line 116
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase");
            echo "\" class=\"uv-box-cta\" data-content=\"Free\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign Up"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t";
        }
        // line 118
        echo "\t\t\t\t\t<li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_create_ticket");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contact Team"), "html", null, true);
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"uv-box-server-error-rt\">
\t\t\t";
        // line 123
        if (twig_in_filter((isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 123, $this->source); })()), [0 => 404, 1 => 500, 2 => 403])) {
            // line 124
            echo "\t\t\t\t";
            if ((0 === twig_compare((isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 124, $this->source); })()), 404))) {
                // line 125
                echo "\t\t\t\t\t\t<img class=\"error-grooves\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/images/404.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 125, $this->source); })()), "html", null, true);
                echo "\" />
\t\t\t\t";
            } elseif ((0 === twig_compare(            // line 126
(isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 126, $this->source); })()), 500))) {
                // line 127
                echo "\t\t\t\t\t\t<img class=\"error-grooves\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/images/500.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 127, $this->source); })()), "html", null, true);
                echo "\" />
\t\t\t\t";
            } else {
                // line 129
                echo "\t\t\t\t\t\t<img class=\"error-grooves\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/images/403.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 129, $this->source); })()), "html", null, true);
                echo "\" />
\t\t\t\t";
            }
            // line 131
            echo "\t\t\t";
        } else {
            // line 132
            echo "\t\t\t\t\t<img class=\"error-grooves\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/images/unkown-error.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 132, $this->source); })()), "html", null, true);
            echo "\" />
\t\t\t";
        }
        // line 134
        echo "\t\t</div>
\t\t<div class=\"uv-box-footer\">
\t\t\t<p>";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Powered by", [], "messages");
        echo " <a target=\"_blank\" href=\"https://www.uvdesk.com/en/\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("UVdesk", [], "messages");
        echo "</a></p>
\t\t</div>
\t</div>
\t</body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "errors/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 136,  332 => 134,  324 => 132,  321 => 131,  313 => 129,  305 => 127,  303 => 126,  296 => 125,  293 => 124,  291 => 123,  280 => 118,  272 => 116,  270 => 115,  264 => 114,  258 => 113,  253 => 111,  247 => 107,  242 => 105,  238 => 104,  233 => 103,  228 => 101,  224 => 100,  221 => 99,  219 => 98,  215 => 97,  211 => 96,  208 => 95,  206 => 94,  202 => 93,  198 => 92,  195 => 91,  193 => 90,  188 => 87,  181 => 83,  177 => 81,  173 => 79,  158 => 66,  149 => 64,  147 => 63,  142 => 62,  140 => 61,  134 => 57,  132 => 56,  128 => 55,  93 => 22,  85 => 20,  79 => 18,  77 => 17,  72 => 16,  70 => 15,  65 => 14,  63 => 13,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html PUBLIC \"-//W3C//DTDXHTML1.0Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html lang=\"en\">
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html;\" charset=\"UTF-8\" />
\t\t<meta name=\"robots\" content=\"INDEX,FOLLOW\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t\t
\t\t<link rel=\"icon\" sizes=\"16x16\" href=\"{{ asset('favicon.ico') }}\">
\t\t<link rel=\"canonical\" href=\"{{ path('helpdesk_knowledgebase') }}\">
\t\t<link href=\"https://cdn.uvdesk.com/uvdesk/css/main.css\" type=\"text/css\" rel=\"stylesheet\" media=\"all\" />

\t\t<title>
\t\t\t{% if code == 404 %}
\t\t\t\t404 - {{ 'Page not found'|trans }}
\t\t\t{% elseif code == 403 %}
\t\t\t\t403 - {{ 'Forbidden'|trans }}
\t\t\t{% elseif code == 500 %}
\t\t\t\t500 - {{ 'Internal server error'|trans }}
\t\t\t{% else %}
\t\t\t\t{{ code }} - {{ 'Error'|trans }}
\t\t\t{% endif %}
\t\t</title>

\t\t<style>
\t\t\t.error-dialog {
\t\t\t\tpadding: 25px;
\t\t\t\tposition: fixed;
\t\t\t\ttop: 50%;
\t\t\t\tleft: 50%;
\t\t\t\ttransform: translate(-50%, -50%);
\t\t\t}

\t\t\t.error-dialog h1 {
\t\t\t\tcolor: #6F6F6F;
\t\t\t\tfont-size: 21px;
\t\t\t\tfont-weight: 700;
\t\t\t\ttext-transform: uppercase;
\t\t\t\tmargin: unset;
\t\t\t\tline-height: 1.4em;
\t\t\t}

\t\t\t.section-separator {
\t\t\t\twidth: 50px;
\t\t\t\tborder: 1px solid #6F6F6F;
\t\t\t\tmargin: 14px 0px 20px;
\t\t\t}
\t\t\t.uv-logo {
    \t\t\theight: 70px;
 \t\t\t\tdisplay: table-cell;
\t\t\t}
\t\t</style>

\t</head>
\t<body>
    {% set websiteDetails = user_service.getWebsiteDetails('knowledgebase') %}\t
    {% set currentPath = app.request.schemeAndHttpHost ~ app.request.requestUri %}


\t<div class=\"uv-box-server-error\">
\t\t<div class=\"uv-box-server-error-lt\">
\t\t\t{% if websiteDetails %}
\t\t\t\t<a class=\"uv-logo\" href=\"{{ path('helpdesk_member_handle_login') }}\">
\t\t\t\t\t{% if websiteDetails.logo %}
\t\t\t\t\t\t<img src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}{{ websiteDetails.logo }}\" title=\"{{ websiteDetails.name }}\">
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"122\" height=\"48\" viewBox=\"0 0 122 48\">
                            <defs>
                                <style>
                                .cls-1 {
                                    fill: #9f9f9f;
                                    fill-rule: evenodd;
                                    }
                                </style>
                            </defs>
                            <path id=\"uvdesk-icon\" class=\"cls-1\" d=\"M43.5,23A1.5,1.5,0,0,1,45,24.5V25H42V24.5A1.5,1.5,0,0,1,43.5,23ZM39,31H38V18h1a2.257,2.257,0,0,1,2,2v9A2.257,2.257,0,0,1,39,31Zm6-5H42s1.769,15.329-15,17c0.011-.1-0.027,1.292,0,2C33.324,44.708,45.563,40.575,45,26ZM25.987,44A1.988,1.988,0,1,1,24,41.989,2,2,0,0,1,25.987,44ZM8,41A18.173,18.173,0,0,1,3.386,29.28L3,24a14.906,14.906,0,0,0,9-5,14.838,14.838,0,0,0,5,4,17.2,17.2,0,0,0,16-1l4-3a2.479,2.479,0,0,0,0-1C36.692,8.308,27.872,0,18,0h0A17.913,17.913,0,0,0,0,18V29A21.17,21.17,0,0,0,5,43a16.677,16.677,0,0,0,7,5l1-3C10.936,44.167,9.633,42.824,8,41Zm2.492-15A3.5,3.5,0,1,0,14,29.5,3.5,3.5,0,0,0,10.492,26ZM27.5,33A3.5,3.5,0,1,0,24,29.5,3.5,3.5,0,0,0,27.5,33Z\"/>
                            <path id=\"uvdesk\" class=\"cls-1\" d=\"M53.078,25.329c0,2.976,1.1,4.56,3.576,4.56a4.931,4.931,0,0,0,3.84-2.112h0.072L60.734,29.6h1.632V17.937H60.4v8.281c-1.1,1.368-1.944,1.968-3.144,1.968-1.536,0-2.184-.936-2.184-3.12V17.937H53.078v7.393ZM68.822,29.6h2.3l4.128-11.665H73.31L71.1,24.561c-0.336,1.152-.72,2.328-1.056,3.432h-0.1c-0.36-1.1-.744-2.28-1.08-3.432l-2.208-6.625h-2.04Zm7.752-5.809c0,3.888,1.9,6.1,4.824,6.1a5.262,5.262,0,0,0,3.528-1.656H85L85.166,29.6H86.8V12.512H84.806V17l0.1,1.992a4.806,4.806,0,0,0-3.264-1.344C78.973,17.649,76.573,20,76.573,23.793Zm2.04-.024c0-2.664,1.488-4.464,3.36-4.464a4.06,4.06,0,0,1,2.832,1.224v6.1a3.948,3.948,0,0,1-2.976,1.608C79.789,28.233,78.613,26.553,78.613,23.769Zm11.256,0.024c0,3.816,2.472,6.1,5.593,6.1a6.947,6.947,0,0,0,3.84-1.2l-0.7-1.3a5.271,5.271,0,0,1-2.9.912c-2.232,0-3.744-1.584-3.888-4.1h7.873a6.956,6.956,0,0,0,.072-1.08c0-3.336-1.68-5.472-4.656-5.472C92.437,17.649,89.869,19.977,89.869,23.793Zm1.92-.888c0.24-2.352,1.728-3.7,3.36-3.7,1.824,0,2.88,1.32,2.88,3.7H91.789Zm9.552,5.376a7.021,7.021,0,0,0,4.344,1.608c2.76,0,4.272-1.584,4.272-3.48,0-2.208-1.872-2.9-3.552-3.528-1.32-.5-2.592-0.936-2.592-2.016,0-.888.672-1.68,2.136-1.68a4.331,4.331,0,0,1,2.664,1.032l0.936-1.248a5.822,5.822,0,0,0-3.624-1.32c-2.52,0-4.008,1.44-4.008,3.312,0,1.968,1.824,2.76,3.48,3.36,1.272,0.48,2.664,1.008,2.664,2.208,0,1.008-.768,1.824-2.3,1.824a5.245,5.245,0,0,1-3.432-1.392Zm11.352,1.32h1.944V26.529l2.184-2.544,3.408,5.617h2.16l-4.44-6.985,3.912-4.68h-2.184l-4.968,6.145h-0.072V12.512h-1.944V29.6Z\"/>
                        </svg>
\t\t\t\t\t{% endif %}
\t\t\t\t</a>
\t\t\t{% else %}
\t\t\t\t<a href=\"http://uvdesk.com\">

\t\t\t\t\t<img src=\"{{ asset('bundles/uvdeskcoreframework/images/uvdesk-logo.svg') }}\" title=\"UVdesk\">

\t\t\t\t</a>\t
\t\t\t{% endif %}
\t\t\t<div class=\"uv-box-block\">
\t\t\t
\t\t\t\t<p class=\"uv-error-title\">
\t\t\t\t\t{% if code == 404 %}
\t\t\t\t\t\t<span>404</span>
\t\t\t\t\t\t- {{ 'Page not found'|trans }}
\t\t\t\t\t\t<p>{{ 'We were not able to find the page you are looking for.'|trans }}</p>
\t\t\t\t\t{% elseif code == 403 %}
\t\t\t\t\t\t<span>403</span>
\t\t\t\t\t\t- {{ 'Forbidden'|trans }}
\t\t\t\t\t\t<p>{{ 'You don’t have the necessary permissions to access this Web page :('|trans }}</p>
\t\t\t\t\t{% elseif code == 500 %}
\t\t\t\t\t\t<span>500</span>
\t\t\t\t\t\t- {{ 'Internal server error'|trans }}
\t\t\t\t\t\t<p>{{ \"Our system has goofed up for a while, but good part is it won't last long\"|trans }}</p>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<span>{{ code }}</span>
\t\t\t\t\t\t- {{ 'Unknown Error'|trans }}
\t\t\t\t\t\t<p>{{ 'We are quite confused about how did you land here:/'|trans }}</p>
\t\t\t\t\t{% endif %}
\t\t\t\t</p>
\t\t\t</div>

\t\t\t<div class=\"uv-box-block\">
\t\t\t\t<p>{{ 'Few of the links which may help you to get back on the track -'|trans }}</p>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"{{  'public/en/member' in currentPath  ? (websiteDetails ? path('helpdesk_member_dashboard') : app.request.scheme ~'://' ~ app.request.httpHost ) : path('helpdesk_customer_login')}}\">{{ 'Home'|trans }}</a></li>
\t\t\t\t\t<li><a href=\"{{ path('helpdesk_knowledgebase') }}\">{{ 'Support'|trans }}</a></li>
\t\t\t\t\t{% if not(websiteDetails) %}
\t\t\t\t\t\t<li><a href=\"{{ path('helpdesk_knowledgebase') }}\" class=\"uv-box-cta\" data-content=\"Free\">{{ 'Sign Up'|trans }}</a></li>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<li><a href=\"{{ path('helpdesk_customer_create_ticket') }}\">{{ 'Contact Team'|trans }}</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"uv-box-server-error-rt\">
\t\t\t{% if code in [404, 500, 403] %}
\t\t\t\t{% if code == 404 %}
\t\t\t\t\t\t<img class=\"error-grooves\" src=\"{{ asset('bundles/uvdeskcoreframework/images/404.png') }}\" alt=\"{{ code }}\" />
\t\t\t\t{% elseif code == 500 %}
\t\t\t\t\t\t<img class=\"error-grooves\" src=\"{{ asset('bundles/uvdeskcoreframework/images/500.png') }}\" alt=\"{{ code }}\" />
\t\t\t\t{% else %}
\t\t\t\t\t\t<img class=\"error-grooves\" src=\"{{ asset('bundles/uvdeskcoreframework/images/403.png') }}\" alt=\"{{ code }}\" />
\t\t\t\t{% endif %}
\t\t\t{% else %}
\t\t\t\t\t<img class=\"error-grooves\" src=\"{{ asset('bundles/uvdeskcoreframework/images/unkown-error.png') }}\" alt=\"{{ code }}\" />
\t\t\t{% endif %}
\t\t</div>
\t\t<div class=\"uv-box-footer\">
\t\t\t<p>{% trans %}Powered by {% endtrans %} <a target=\"_blank\" href=\"https://www.uvdesk.com/en/\">{% trans %}UVdesk{% endtrans %}</a></p>
\t\t</div>
\t</div>
\t</body>
</html>

", "errors/error.html.twig", "/home/lexcorp.xyz/public_html/uvdesk/templates/errors/error.html.twig");
    }
}
