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

/* @UVDeskSupportCenter/Templates/header.html.twig */
class __TwigTemplate_199ff3cf4bcb3cf91a5622738eff53446294b9b81211d4a3408ebd4bd49ce414 extends Template
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
        // line 1
        $context["currentUser"] = ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 1)) ? (twig_get_attribute($this->env, $this->source, ($context["user_service"] ?? null), "getCustomerPartialDetailById", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 1), "id", [], "any", false, false, false, 1)], "method", false, false, false, 1)) : (null));
        // line 2
        echo "<!--Header-->
<style>
    .uv-dropdown-list  {
        text-align: left;
    }
    .uv-dropdown-list ul li {
        width: 100%;
    }
    .uv-header .uv-header-rt .uv-dropdown-list ul li a {
        color: #333;
        font-size: 16px;
        padding: 0;
    }
    .uv-header .uv-header-rt .uv-dropdown-list ul li a:hover {
        color: #2750C4;
        text-decoration: none;
    }
    .uv-profile-block .uv-bottom-right{
        top: auto !important;
    }
    .uv-rtl header .uv-header-rt > span {
        display: block;
    }
    .uv-rtl header .uv-header-rt > span > .uv-dropdown-list {
        right: unset;
        left: 0px;
        top: 70px;
        text-align: right;
    }
    ";
        // line 31
        if ((array_key_exists("websiteConfiguration", $context) && twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "bannerBackgroundColor", [], "any", false, false, false, 31))) {
            // line 32
            echo "\t\t.uv-hero {
\t\t\tbackground-color: ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "bannerBackgroundColor", [], "any", false, false, false, 33), "html", null, true);
            echo ";
\t\t}
        .uv-header .uv-header-rt .uv-hamburger svg path {
            fill: ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "bannerBackgroundColor", [], "any", false, false, false, 36), "html", null, true);
            echo ";
        }
        .uv-skin-dark .uv-hero {
\t\t\tbackground-color: ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "bannerBackgroundColor", [], "any", false, false, false, 39), "html", null, true);
            echo ";
\t\t}
\t";
        }
        // line 42
        echo "    ";
        if ((array_key_exists("websiteConfiguration", $context) && twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "linkColor", [], "any", true, true, false, 42))) {
            // line 43
            echo "        a:not(.uv-btn):not(.uv-btn-small):not(.uv-btn-social):not(.uv-table):not(.not-shiny) {
            color: ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "linkColor", [], "any", false, false, false, 44), "html", null, true);
            echo " !important;
        }
    ";
        }
        // line 47
        echo "    ";
        if ((array_key_exists("websiteConfiguration", $context) && twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "linkHoverColor", [], "any", true, true, false, 47))) {
            // line 48
            echo "        a:not(.uv-btn):not(.uv-btn-small):not(.uv-btn-social):not(.uv-table):not(.not-shiny):hover {
            color: ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "linkHoverColor", [], "any", false, false, false, 49), "html", null, true);
            echo " !important;
        }
    ";
        }
        // line 52
        echo "    ";
        if ((array_key_exists("websiteConfiguration", $context) && twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "articleTextColor", [], "any", true, true, false, 52))) {
            // line 53
            echo "        .uv-paper-article .uv-paper-section > section > p {
            color: ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "articleTextColor", [], "any", false, false, false, 54), "html", null, true);
            echo " !important;
        }
        .uv-paper-article .uv-paper-section > section > ul {
            color: ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "articleTextColor", [], "any", false, false, false, 57), "html", null, true);
            echo " !important;
        }
    ";
        }
        // line 60
        echo "    .goog-te-gadget-simple .goog-te-menu-value, .goog-te-gadget-simple .goog-te-menu-value:hover {
        color: #333!important;
    }
</style>
<div class=\"uv-header\">
    <div class=\"uv-container\">
        <header>
            <div class=\"uv-header-lt\">
                <a class=\"uv-logo\" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase_folder");
        echo "\">
                    ";
        // line 69
        if ((array_key_exists("websiteConfiguration", $context) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "website", [], "any", false, false, false, 69), "logo", [], "any", false, false, false, 69)))) {
            // line 70
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 70), "scheme", [], "any", false, false, false, 70) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 70), "httpHost", [], "any", false, false, false, 70)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "website", [], "any", false, false, false, 70), "logo", [], "any", false, false, false, 70), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "website", [], "any", false, false, false, 70), "name", [], "any", false, false, false, 70), "html", null, true);
            echo "\" />
                    ";
        } else {
            // line 72
            echo "                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"122\" height=\"48\" viewBox=\"0 0 122 48\">
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
                    ";
        }
        // line 85
        echo "                </a>
            </div>
            <div class=\"uv-header-rt\">
                ";
        // line 88
        if (($context["currentUser"] ?? null)) {
            // line 89
            echo "                    <span style=\"position: relative\" class=\"uv-profile-block\">
                        <div class=\"uv-profile-wrapper uv-dropdown-other\">
                            <div class=\"uv-profile-avatar\">
                                <img src=\"";
            // line 92
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "smallThumbnail", [], "any", false, false, false, 92)) ? (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 92), "scheme", [], "any", false, false, false, 92) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 92), "httpHost", [], "any", false, false, false, 92)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")) . twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "smallThumbnail", [], "any", false, false, false, 92))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["default_customer_image_path"] ?? null)))), "html", null, true);
            echo "\">                       
                            </div>
                            <div class=\"uv-profile-howdy\">
                                <span>";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Howdy!"), "html", null, true);
            echo "</span>
                                <span class=\"uv-username\">";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "firstName", [], "any", false, false, false, 96), "html", null, true);
            echo "</span>
                            </div>
                            <div class=\"uv-drop-icon\"></div>
                        </div>
                        <div class=\"uv-dropdown-list uv-bottom-right uv-text-left\">
                            <div class=\"uv-dropdown-container\">
                                <label>";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Account"), "html", null, true);
            echo "</label>
                                <ul>
                                    <li>
                                        <a href=\"";
            // line 105
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_ticket_collection");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tickets"), "html", null, true);
            echo "</a>
                                    </li>
                                    ";
            // line 107
            if ((twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "ticketCreateOption", [], "any", false, false, false, 107) == 1)) {
                // line 108
                echo "                                        <li>
                                            <a href=\"";
                // line 109
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_create_ticket");
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New Ticket Request"), "html", null, true);
                echo "</a>
                                        </li>
                                    ";
            }
            // line 112
            echo "                                    <li>
                                        <a href=\"";
            // line 113
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_account");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Profile"), "html", null, true);
            echo "</a>
                                    </li>
                                    <li>
                                        <a class=\"uv-text-danger\" href=\"";
            // line 116
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign Out"), "html", null, true);
            echo "</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </span>
                ";
        } else {
            // line 123
            echo "                    <nav id=\"front_nav\">
                        <ul>
                            <li><a href=\"";
            // line 125
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase_folder");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Home"), "html", null, true);
            echo "</a></li>
                            ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "headerLinks", [], "any", false, false, false, 126));
            foreach ($context['_seq'] as $context["_key"] => $context["headerLink"]) {
                // line 127
                echo "                                <li><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["headerLink"], "url", [], "any", false, false, false, 127), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["headerLink"], "label", [], "any", false, false, false, 127), "html", null, true);
                echo "</a></li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['headerLink'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "
                            ";
            // line 130
            if ((array_key_exists("websiteConfiguration", $context) && twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "ticketCreateOption", [], "any", false, false, false, 130))) {
                // line 131
                echo "                                ";
                if (( !twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "loginRequiredToCreate", [], "any", false, false, false, 131) || twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 131))) {
                    // line 132
                    echo "                                    <li><a href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_create_ticket");
                    echo "\" class=\"uv-btn-small\">";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contact Us", [], "messages");
                    echo "</a></li>
                                ";
                }
                // line 134
                echo "                            ";
            }
            // line 135
            echo "
                            ";
            // line 136
            if ((array_key_exists("websiteConfiguration", $context) && twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "removeCustomerLoginButton", [], "any", true, true, false, 136))) {
                // line 137
                echo "                                ";
                if ( !twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "removeCustomerLoginButton", [], "any", false, false, false, 137)) {
                    // line 138
                    echo "                                    <li><a href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_login");
                    echo "\" class=\"uv-btn-small\">";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign In", [], "messages");
                    echo "</a></li>
                                ";
                }
                // line 139
                echo "  
                            ";
            }
            // line 141
            echo "                        </ul>
                    </nav>
                    <div class=\"uv-hamburger\">
                        <svg
                        xmlns=\"http://www.w3.org/2000/svg\"
                        xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                        width=\"20px\" height=\"15px\">
                        <path fill-rule=\"evenodd\"
                        d=\"M18.500,9.000 L1.500,9.000 C0.672,9.000 0.000,8.328 0.000,7.500 C0.000,6.672 0.672,6.000 1.500,6.000 L18.500,6.000 C19.328,6.000 20.000,6.672 20.000,7.500 C20.000,8.328 19.328,9.000 18.500,9.000 ZM18.500,3.000 L1.500,3.000 C0.672,3.000 0.000,2.328 0.000,1.500 C0.000,0.672 0.672,-0.000 1.500,-0.000 L18.500,-0.000 C19.328,-0.000 20.000,0.672 20.000,1.500 C20.000,2.328 19.328,3.000 18.500,3.000 ZM1.500,12.000 L18.500,12.000 C19.328,12.000 20.000,12.672 20.000,13.500 C20.000,14.328 19.328,15.000 18.500,15.000 L1.500,15.000 C0.672,15.000 0.000,14.328 0.000,13.500 C0.000,12.672 0.672,12.000 1.500,12.000 Z\"/>
                        </svg>
                    </div>
                ";
        }
        // line 153
        echo "            </div>
        </header>
    </div>
</div>
<!--//Header-->
";
        // line 158
        if ((array_key_exists("searchDisable", $context) && (($context["searchDisable"] ?? null) == false))) {
            // line 159
            echo "    <form method=\"get\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase_search");
            echo "\">
        <!--Hero-->
        <div class=\"uv-hero\">
            <div class=\"uv-container\">
                <article>
                    <h1>
                        ";
            // line 165
            if ((array_key_exists("websiteConfiguration", $context) && twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "siteDescription", [], "any", true, true, false, 165))) {
                // line 166
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "siteDescription", [], "any", false, false, false, 166), "html", null, true);
                echo "
                        ";
            } else {
                // line 168
                echo "                            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hi! how can we help?", [], "messages");
                // line 169
                echo "                        ";
            }
            // line 170
            echo "                    </h1>
                    <input type=\"text\" name=\"s\" class=\"uv-kb-search-lg\" placeholder=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enter search keyword"), "html", null, true);
            echo "\">
                </article>
            </div>
        </div>
        <!--Hero-->
    </form>
";
        }
    }

    public function getTemplateName()
    {
        return "@UVDeskSupportCenter/Templates/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 171,  366 => 170,  363 => 169,  360 => 168,  354 => 166,  352 => 165,  342 => 159,  340 => 158,  333 => 153,  319 => 141,  315 => 139,  307 => 138,  304 => 137,  302 => 136,  299 => 135,  296 => 134,  288 => 132,  285 => 131,  283 => 130,  280 => 129,  269 => 127,  265 => 126,  259 => 125,  255 => 123,  243 => 116,  235 => 113,  232 => 112,  224 => 109,  221 => 108,  219 => 107,  212 => 105,  206 => 102,  197 => 96,  193 => 95,  187 => 92,  182 => 89,  180 => 88,  175 => 85,  160 => 72,  151 => 70,  149 => 69,  145 => 68,  135 => 60,  129 => 57,  123 => 54,  120 => 53,  117 => 52,  111 => 49,  108 => 48,  105 => 47,  99 => 44,  96 => 43,  93 => 42,  87 => 39,  81 => 36,  75 => 33,  72 => 32,  70 => 31,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@UVDeskSupportCenter/Templates/header.html.twig", "/home/support.telenet.com.np/public_html/vendor/uvdesk/support-center-bundle/Resources/views/Templates/header.html.twig");
    }
}
