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

/* @UVDeskCoreFramework/ticket.html.twig */
class __TwigTemplate_35a2ea2293f4e333be1eadb30b37448592f45d71b0500725395bb0ff01d0a8b2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'templateCSS' => [$this, 'block_templateCSS'],
            'pageContent' => [$this, 'block_pageContent'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@UVDeskCoreFramework//Templates//layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/ticket.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/ticket.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskCoreFramework/ticket.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ((("#" . twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3, $this->source); })()), "subject", [], "any", false, false, false, 3)), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_templateCSS($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "templateCSS"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "templateCSS"));

        // line 6
        echo "    <style>
        .uv-aside-ticket-labels.label-list-block .uv-btn-label {
            cursor: pointer;
        }
        .uv-main-info-update-block .uv-element-block {
            margin: 10px 0px !important;
        }
        .uv-tab-ellipsis {
            position: relative;
        }
        .uv-inner-section .uv-view .uv-ticket-section .uv-ticket-accordion .uv-ticket-wrapper {
            display: block;
        }
        .uv-element-block.cc-bcc .uv-dropdown-container {
            padding: 10px 20px 10px 20px;
        }
        .uv-action-buttons .uv-dropdown-list ul li {
            padding: 5px 0px !important;
        }
        .uv-action-buttons{
            margin-bottom: 40px !important;
        }
        .uv-ticket-reply .uv-element-block-textarea, .thread-edit-container .uv-element-block-textarea {
            width: 100% !important;
            max-width: 100% !important;
        }
        .thread-edit-container .uv-field-message {
            color: #FF5656 !important;
        }
        .uv-element-block .mce-tinymce {
            margin-top: 10px;
        }
        .uv-ticket-reply .uv-element-block-textarea .uv-field-message, .thread-edit-container .uv-element-block-textarea .uv-field-message {
            margin-top: 15px;
        }
        .thread-edit-container {
            margin-top: 10px;
        }
        .uv-ticket-viewer-bar{
            transition: 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            height: 0px;
        }
        .uv-ticket-viewer-bar.active{
            height: 50px;
            margin-bottom: 10px;
            border-bottom: 1px dotted #f97278;
        }
        .uv-ticket-viewer-single {
            display: inline-block;
            margin-right: 5px;
        }
        .uv-ticket-viewer-single img {
            width: 40px;
            border-radius: 3px;
            display: inline-block;
            vertical-align: middle;
        }
        .uv-ticket-viewer-single.uv-first {
            width: 40px;
            height: 40px;
            background-image: linear-gradient(to right, #f97278 0%, #f181bf 100%);
            text-align: center;
            vertical-align: top;
            line-height: 30px;
            border-radius: 20px;
        }
        .uv-ticket-viewer-close {
            position: absolute;
            top: 0px;
            width: 40px;
            height: 40px;
            background: #f1f1f1;
            text-align: center;
            line-height: 35px;
            border-radius: 2px;
            opacity: .6;
            text-indent: 6px;
        }
        .uv-ticket-viewer-list {
            display: inline;
        }
        span.viewer-firstletter.img-thumbnail {
            width: 40px;
            height: 40px;
            display: block;
            text-align: center;
            font-size: 20px;
            font-style: italic;
            border: 1px dotted;
            border-radius: 4px;
            line-height: 35px;
        }
        .uv-ticket-viewer-close {
            display:none;
        }
        .uv-ticket-viewer-single:hover .uv-ticket-viewer-close {
            display: block;
        }
        .uv-hide{
            display: none;
        }
        .uv-info{
            background: #7C70F4;
        }
        .uv-ticket-viewer-list .uv-icon-eye-light{
            animation: jelly 0.8s infinite alternate ease-in-out;
        }
        .uv-aside-brick .uv-loader {
            position: absolute;
            transform: scale(0.5);
            top: 22px;
            right: 45px;
        }
        .uv-app-glyph-customfields {
            width: 20px;
            height: 20px;
            background-position: center center;
            background-repeat: no-repeat;
            cursor: pointer;
            display: inline-block;
            vertical-align: middle;
            margin: 5px 0px 5px 10px;
            background-image: url(\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/images/app-glyph-custom.svg"), "html", null, true);
        echo "\");
        }
        .uv-no-threads {
            padding: 80px 20px;
            text-align: center;
        }
        .uv-ticket-strip-label {
            position: relative;
        }
        input.input-copy-thread-link {
            position: absolute;
            bottom: 10px;
            width: 400px;
        }
        .uv-ticket-action-bar-fixed{
            position: fixed;
            width: 100%;
            background: #fff;
            z-index: 999;
        }
        .uv-ticket-action-bar-fixed .uv-ticket-action-bar-rt{
            position: fixed;
            right: 0px;
            margin-top: 10px;
        }
        .uv-ticket-action-bar-fixed + .uv-ticket-viewer-bar{
            margin-top: 70px;
        }
        .uv-ticket-main {
            word-wrap: break-word;
        }
        @media only screen and (max-width: 900px) {
            .uv-ticket-action-bar-fixed{
                position: relative;
            }
            .uv-ticket-action-bar-fixed + .uv-ticket-viewer-bar{
                margin-top: 0px;
            }
            .uv-ticket-action-bar-fixed .uv-ticket-action-bar-rt{
                position: relative;
            }
        }
        .uv-icon-pin {
            width: 18px;
            height: 18px;
            display: inline-block;
            vertical-align: middle;
            background-image: url(\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/images/uvdesk-sprite.svg"), "html", null, true);
        echo "\");
            background-position: 0px -396px;
            transition: transform .15s;
            transform: scale(1);
        }
        .uv-icon-pinned {
            background-position: -19px -396px;
        }
        .uv-header-fix{
            display: inline-block;
            margin: 0px 10px 0px 5px;
        }
        .uv-header-fix + .uv-tabs{
            display: inline-block;
        }
        .uv-ticket-section span.uv-mail-status {
            width: 16px;
            height: 16px;
            background: url('../../../../../bundles/webkuldefault/images/mail-status.png');
            cursor: help;
        }
        .uv-ticket-section .uv-mail-status.uv-mail-processed {
            background-position: 0 0;
        }
        .uv-ticket-section .uv-mail-status.uv-mail-open,.uv-ticket-section .uv-mail-status.uv-mail-delivered,.uv-ticket-section .uv-mail-status.uv-mail-click {
            background-position: -38px 0;
        }
        .uv-ticket-section .uv-mail-status.uv-mail-spam,.uv-ticket-section .uv-mail-status.uv-mail-deferred,.uv-ticket-section .uv-mail-spamreport {
            background-position: -55px 0;
        }
        .uv-ticket-section .uv-mail-status.uv-mail-bounce,.uv-ticket-section .uv-mail-status.uv-mail-dropped {
            background-position: -73px 0;
        }
        @media only screen and (max-width: 1480px) {
            .uv-inner-section .uv-view .uv-ticket-action-bar-fixed.uv-ticket-action-bar .uv-ticket-action-bar-rt{
                width: auto;
            }
        }
        @media only screen and (max-width: 1300px) {
            .uv-header-fix{
                margin: 0px 10px 0px 10px;
            }
        }

        @media only screen and (max-width: 900px) {
            .uv-ticket-action-bar-fixed{
                position: relative;
            }
            .uv-ticket-action-bar-fixed + .uv-ticket-viewer-bar{
                margin-top: 0px;
            }
            .uv-ticket-action-bar-fixed .uv-ticket-action-bar-rt{
                position: relative;
            }
            .uv-inner-section .uv-view .uv-ticket-action-bar.uv-ticket-action-bar-fixed .uv-ticket-action-bar-lt{
                width: 70%;
            }
            .uv-inner-section .uv-view .uv-ticket-action-bar.uv-ticket-action-bar-fixed .uv-ticket-action-bar-rt {
                width: 21%;
                padding-right: 33px;
            }
            .uv-header-fix{
                display: none;
            }
        }

        .uv-inner-section .uv-view .uv-ticket-scroll-region {
            margin-bottom: 0px;
        }

        .uv-inner-section .uv-view .uv-ticket-action-bar.uv-ticket-action-bar-fixed .uv-ticket-action-bar-rt {
            width: 21%;
            padding-right: 33px;
        }
        @media print {
            .uv-navbar,.uv-ticket-action-bar, .uv-sidebar, .uv-aside>.uv-aside-brick, .uv-aside-back, .uv-ticket-fixed-region, .uv-ticket-main.uv-ticket-reply, .uv-upload-actions, .uv-filter-view, .uv-dropdown-list>.uv-dropdown-container,.uv-notifications-wrapper,.uv-pop-up-overlay,.uv-loader-view, .uv-loader, .uv-navbar,.uv-ticket-count-wrapper {
                display: none !important;
            }
            .uv-ticket-scroll-region {
                overflow: visible;
                margin-bottom: 0 !important;
            }
            .uv-paper {
                padding-left: 0px !important; /* uv-view */
            }
            .uv-wrapper {
                left: 0 !important;
                margin: 0 !important;
            }
            .uv-inner-section .uv-view .uv-ticket-scroll-region  .uv-ticket-main-rt {
                width: 80%;
            }
            .uv-paper,.uv-view ,.uv-ticket-scroll-region, .uv-wrapper  {
                position: initial !important;
            }
        }

        .uv-ticket-action-bar-rt .app-glyph {
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
            cursor: pointer;
            height: 20px;
            width: 20px;
        }

        .uv-ticket-action-bar-rt .app-glyph:last-child {
            margin-right: 0px;
        }

        blockquote {
            background: #f9f9f9;
            border-left: 4px solid #ccc;
            margin: 1.5em 10px;
            padding: 0.5em 10px;
            quotes: \"\\201C\"\"\\201D\"\"\\2018\"\"\\2019\";
        }

        blockquote:before {
            color: #ccc;
            content: open-quote;
            font-size: 3em;
            line-height: 0.1em;
            margin-right: 0.05em;
            vertical-align: -0.4em;
        }

        blockquote p {
            display: inline;
        }

        .uv-dropdown-list ul li {
            padding : 8px 0px !important;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        }
        ::-webkit-scrollbar-thumb {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        }

        .uv-aside-select.search .uv-dropdown-list.uv-bottom-left, .uv-aside-select .uv-dropdown-list.uv-bottom-right {
            top: 25px;
            width: 100%;
        }

        .uv-aside-select.search .uv-dropdown-list ul{
            padding: 0px 10px;
        }

        .uv-aside-select.search .uv-dropdown-container {
            padding: 8px 10px 4px;
            overflow-y: auto;
            max-height: 280px;
            border-bottom: solid 1px #D3D3D3;
        }

        .uv-aside-select.search .uv-dropdown-list ul.uv-agents-list li {
            border-bottom: solid 1px #D3D3D3;
            border-top:0px;
        }

        .uv-search-inline{
            width: 100%;
        }

        .uv-dropdown-list ul.uv-search-list li:first-child {
            border-top: none;
        }

        .uv-search-sm input.uv-search-field { 
           border: solid 1px #B1B1AE;
           border-radius: 3px;
           color: #333333;
           font-size: 15px;
           box-sizing: border-box;
           padding: 7px 10px 9px 33px;
           width: 100%;
        }
        
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 364
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        // line 365
        echo "    <div class=\"uv-inner-section\">
        ";
        // line 367
        echo "        <div class=\"uv-aside\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 367, $this->source); })()), "request", [], "any", false, false, false, 367), "cookies", [], "any", false, false, false, 367) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 367, $this->source); })()), "request", [], "any", false, false, false, 367), "cookies", [], "any", false, false, false, 367), "get", [0 => "uv-asideView"], "method", false, false, false, 367))) {
            echo "style=\"display: none;\"";
        }
        echo " >
            <div class=\"uv-main-info-block\">
                <div class=\"uv-aside-head\">
                    <div class=\"uv-aside-title\">
                        <h6>";
        // line 371
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket"), "html", null, true);
        echo " #";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 371, $this->source); })()), "id", [], "any", false, false, false, 371), "html", null, true);
        echo "</h6>
                    </div>
                    <div class=\"uv-aside-back\">
                        <span onclick=\"history.length > 1 ? history.go(-1) : window.location = '";
        // line 374
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_collection");
        echo "';\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back"), "html", null, true);
        echo "</span>
                    </div>
                </div>

                ";
        // line 379
        echo "                <div class=\"uv-aside-brick\">
                    ";
        // line 381
        echo "                    <div class=\"uv-aside-customer-block\">
                        <h3>";
        // line 382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Information"), "html", null, true);
        echo "</h3>
                        <div class=\"uv-aside-avatar\">
                            ";
        // line 384
        if (twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 384, $this->source); })()), "thumbnail", [], "any", false, false, false, 384)) {
            // line 385
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 385, $this->source); })()), "request", [], "any", false, false, false, 385), "scheme", [], "any", false, false, false, 385) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 385, $this->source); })()), "request", [], "any", false, false, false, 385), "httpHost", [], "any", false, false, false, 385)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 385, $this->source); })()), "thumbnail", [], "any", false, false, false, 385), "html", null, true);
            echo "\">
                            ";
        } else {
            // line 387
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_customer_image_path"]) || array_key_exists("default_customer_image_path", $context) ? $context["default_customer_image_path"] : (function () { throw new RuntimeError('Variable "default_customer_image_path" does not exist.', 387, $this->source); })())), "html", null, true);
            echo "\">
                            ";
        }
        // line 389
        echo "                        </div>

                        <div class=\"uv-aside-customer-info\">
                            <span>";
        // line 392
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 392, $this->source); })()), "name", [], "any", false, false, false, 392), "html", null, true);
        echo "</span>
                            <span>";
        // line 393
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 393, $this->source); })()), "email", [], "any", false, false, false, 393), "html", null, true);
        echo "</span>
                            ";
        // line 394
        if (twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 394, $this->source); })()), "contactNumber", [], "any", false, false, false, 394)) {
            // line 395
            echo "                                <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 395, $this->source); })()), "contactNumber", [], "any", false, false, false, 395), "html", null, true);
            echo "</span>
                            ";
        }
        // line 397
        echo "
                            ";
        // line 398
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 398, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_MANAGE_CUSTOMER"], "method", false, false, false, 398)) {
            // line 399
            echo "                                <span class=\"uv-customize\" data-toggle=\"tooltip\" title=\"Edit Customer Information\"></span>
                            ";
        }
        // line 401
        echo "                        </div>
                    </div>

                    ";
        // line 405
        echo "                    <div class=\"uv-aside-ticket-block\">
                        <div class=\"uv-aside-ticket-brick\">
                            <h3>";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total Replies"), "html", null, true);
        echo "</h3>
                            <span class=\"uv-icon-replies\"></span> <span>";
        // line 408
        echo twig_escape_filter($this->env, (isset($context["totalReplies"]) || array_key_exists("totalReplies", $context) ? $context["totalReplies"] : (function () { throw new RuntimeError('Variable "totalReplies" does not exist.', 408, $this->source); })()), "html", null, true);
        echo "</span>
                        </div>

                        <div class=\"uv-aside-ticket-brick\">
                            <h3>";
        // line 412
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TimeStamp"), "html", null, true);
        echo "</h3>
                            <span class=\"uv-icon-timestamp\"></span> <span>";
        // line 413
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 413, $this->source); })()), "timeZoneConverter", [0 => twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 413, $this->source); })()), "createdAt", [], "any", false, false, false, 413)], "method", false, false, false, 413), "html", null, true);
        echo "</span>
                        </div>

                        <div class=\"uv-aside-ticket-brick\">
                            <h3>";
        // line 417
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Channel"), "html", null, true);
        echo "</h3>
                            ";
        // line 418
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 418, $this->source); })()), "source", [], "any", false, false, false, 418), "email"))) {
            // line 419
            echo "                                <span class=\"uv-icon-channel uv-channel-email\"></span> <span>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
            echo "</span>
                            ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 420
(isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 420, $this->source); })()), "source", [], "any", false, false, false, 420), "formbuilder"))) {
            // line 421
            echo "                                <span class=\"uv-icon-channel uv-channel-form\"></span> <span>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Formbuilder"), "html", null, true);
            echo "</span>
                            ";
        } else {
            // line 423
            echo "                            <span class=\"uv-icon-channel uv-channel-web\"></span> <span>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Website"), "html", null, true);
            echo "</span>
                            ";
        }
        // line 425
        echo "                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 431
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 431, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_MANAGE_CUSTOMER"], "method", false, false, false, 431)) {
            // line 432
            echo "                <div class=\"uv-main-info-update-block uv-no-error-success-icon\" style=\"display: none\">
                    <div class=\"uv-aside-head\">
                        <div class=\"uv-aside-title\"><h6>";
            // line 434
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Customer"), "html", null, true);
            echo "</h6></div>
                        <div class=\"uv-aside-back\"><span>";
            // line 435
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back"), "html", null, true);
            echo "</span></div>
                    </div>

                    <div class=\"uv-aside-brick\">
                        <form method=\"post\">
                            <input class=\"uv-field\" name=\"id\" type=\"hidden\" value=\"";
            // line 440
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 440, $this->source); })()), "id", [], "any", false, false, false, 440), "html", null, true);
            echo "\">

                            <div class=\"uv-element-block\">
                                <label class=\"uv-field-label\">";
            // line 443
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
            echo "</label>
                                <div class=\"uv-field-block\">
                                    <input class=\"uv-field\" name=\"name\" type=\"text\" value=\"";
            // line 445
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 445, $this->source); })()), "name", [], "any", false, false, false, 445), "html", null, true);
            echo "\">
                                </div>
                            </div>

                            <div class=\"uv-element-block\">
                                <label class=\"uv-field-label\">";
            // line 450
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
            echo "</label>
                                <div class=\"uv-field-block\">
                                    <input class=\"uv-field\" name=\"email\" type=\"text\" value=\"";
            // line 452
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 452, $this->source); })()), "email", [], "any", false, false, false, 452), "html", null, true);
            echo "\">
                                </div>
                            </div>

                            <div class=\"uv-element-block\">
                                <label class=\"uv-field-label\">";
            // line 457
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contact Number"), "html", null, true);
            echo "</label>
                                <div class=\"uv-field-block\">
                                    <input class=\"uv-field\" name=\"contactNumber\" type=\"text\" value=\"";
            // line 459
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 459, $this->source); })()), "contactNumber", [], "any", false, false, false, 459), "html", null, true);
            echo "\">
                                </div>
                            </div>

                            <div class=\"uv-action-buttons\">
                                <a class=\"uv-btn update-btn\" href=\"#\">";
            // line 464
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update"), "html", null, true);
            echo "</a>
                                <a class=\"uv-btn cancel-btn\" href=\"#\">";
            // line 465
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
            echo "</a>
                            </div>

                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 468
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["csrf_token_generator"]) || array_key_exists("csrf_token_generator", $context) ? $context["csrf_token_generator"] : (function () { throw new RuntimeError('Variable "csrf_token_generator" does not exist.', 468, $this->source); })()), "refreshToken", [0 => ""], "method", false, false, false, 468), "html", null, true);
            echo "\"/>
                        </form>
                    </div>
                </div>
            ";
        }
        // line 473
        echo "
            ";
        // line 475
        echo "            <div class=\"uv-aside-brick\">
                <div class=\"uv-aside-ticket-actions\">
                    ";
        // line 478
        echo "                    <div class=\"uv-aside-select search\">
                        <label class=\"uv-aside-select-label\">";
        // line 479
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        echo "</label>
                        <div>
                            ";
        // line 481
        $context["agentName"] = (((isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 481, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, (isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 481, $this->source); })()), "name", [], "any", false, false, false, 481)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned")));
        // line 482
        echo "                            ";
        if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 482, $this->source); })()), "isTrashed", [], "any", false, false, false, 482), false)) && twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 482, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_ASSIGN_TICKET"], "method", false, false, false, 482))) {
            // line 483
            echo "                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"";
            (((isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 483, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 483, $this->source); })()), "id", [], "any", false, false, false, 483), "html", null, true))) : (print ("")));
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["agentName"]) || array_key_exists("agentName", $context) ? $context["agentName"] : (function () { throw new RuntimeError('Variable "agentName" does not exist.', 483, $this->source); })()), "html", null, true);
            echo "</span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>";
            // line 486
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
            echo "</label>
                                        <div class=\"uv-search-sm\">
                                            <input type=\"text\" class=\"uv-search-field uv-search-inline\" placeholder=\"";
            // line 488
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
            echo "\">
                                        </div>
                                    </div>

                                    <ul class=\"uv-agents-list agent\" data-action=\"agent\">
                                        ";
            // line 493
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 493, $this->source); })()), "getAgentPartialDataCollection", [], "method", false, false, false, 493));
            foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
                // line 494
                echo "                                            <li data-index=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 494), "html", null, true);
                echo "\">
                                                <img src=\"";
                // line 495
                echo twig_escape_filter($this->env, (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 495), null))) ? (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 495, $this->source); })()), "request", [], "any", false, false, false, 495), "scheme", [], "any", false, false, false, 495) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 495, $this->source); })()), "request", [], "any", false, false, false, 495), "httpHost", [], "any", false, false, false, 495)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")) . twig_get_attribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 495))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 495, $this->source); })())))), "html", null, true);
                echo "\"/> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 495), "html", null, true);
                echo "
                                            </li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 498
            echo "                                    </ul>
                                </div>
                            ";
        } else {
            // line 501
            echo "                                <span class=\"uv-aside-select-value\">";
            echo twig_escape_filter($this->env, (isset($context["agentName"]) || array_key_exists("agentName", $context) ? $context["agentName"] : (function () { throw new RuntimeError('Variable "agentName" does not exist.', 501, $this->source); })()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 503
        echo "                        </div>
                    </div>

                    ";
        // line 507
        echo "                    <div class=\"uv-aside-select\">
                        <label class=\"uv-aside-select-label\">";
        // line 508
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Priority"), "html", null, true);
        echo "</label>
                        <div>
                            <span class=\"uv-list-ticket-priority\" style=\"background: ";
        // line 510
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 510, $this->source); })()), "priority", [], "any", false, false, false, 510), "colorCode", [], "any", false, false, false, 510), "html", null, true);
        echo "\"></span>
                            ";
        // line 511
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 511, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_UPDATE_TICKET_PRIORITY"], "method", false, false, false, 511)) {
            // line 512
            echo "                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 512, $this->source); })()), "priority", [], "any", false, false, false, 512), "id", [], "any", false, false, false, 512), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 512, $this->source); })()), "priority", [], "any", false, false, false, 512), "description", [], "any", false, false, false, 512)), "html", null, true);
            echo "</span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>";
            // line 515
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Priority"), "html", null, true);
            echo "</label>
                                        <ul class=\"priority\" data-action=\"priority\">
                                            ";
            // line 517
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ticketPriorityCollection"]) || array_key_exists("ticketPriorityCollection", $context) ? $context["ticketPriorityCollection"] : (function () { throw new RuntimeError('Variable "ticketPriorityCollection" does not exist.', 517, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["priority"]) {
                // line 518
                echo "                                                <li data-index=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["priority"], "id", [], "any", false, false, false, 518), "html", null, true);
                echo "\" data-color=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["priority"], "colorCode", [], "any", false, false, false, 518), "html", null, true);
                echo "\"><a href=\"#\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["priority"], "description", [], "any", false, false, false, 518)), "html", null, true);
                echo "</a></li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priority'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 520
            echo "                                        </ul>
                                    </div>
                                </div>
                            ";
        } else {
            // line 524
            echo "                                <span class=\"uv-aside-select-value\">
                                    ";
            // line 525
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 525, $this->source); })()), "priority", [], "any", false, false, false, 525), "description", [], "any", false, false, false, 525)), "html", null, true);
            echo "
                                </span>
                            ";
        }
        // line 528
        echo "                        </div>
                    </div>

                    ";
        // line 532
        echo "                    <div class=\"uv-aside-select\">
                        <label class=\"uv-aside-select-label\">";
        // line 533
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        echo "</label>
                        <div>
                            ";
        // line 535
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 535, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_UPDATE_TICKET_STATUS"], "method", false, false, false, 535)) {
            // line 536
            echo "                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 536, $this->source); })()), "status", [], "any", false, false, false, 536), "id", [], "any", false, false, false, 536), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 536, $this->source); })()), "status", [], "any", false, false, false, 536), "description", [], "any", false, false, false, 536)), "html", null, true);
            echo "</span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>";
            // line 539
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
            echo "</label>
                                        <ul class=\"status\" data-action=\"status\">
                                            ";
            // line 541
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ticketStatusCollection"]) || array_key_exists("ticketStatusCollection", $context) ? $context["ticketStatusCollection"] : (function () { throw new RuntimeError('Variable "ticketStatusCollection" does not exist.', 541, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 542
                echo "                                                <li data-index=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 542), "html", null, true);
                echo "\"><a href=\"#\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["status"], "description", [], "any", false, false, false, 542)), "html", null, true);
                echo "</a></li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 544
            echo "                                        </ul>
                                    </div>
                                </div>
                            ";
        } else {
            // line 548
            echo "                                <span class=\"uv-aside-select-value\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 548, $this->source); })()), "status", [], "any", false, false, false, 548), "description", [], "any", false, false, false, 548)), "html", null, true);
            echo "</span>
                            ";
        }
        // line 550
        echo "                        </div>
                    </div>

                    ";
        // line 554
        echo "                    <div class=\"uv-aside-select search\">
                        <label class=\"uv-aside-select-label\">";
        // line 555
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
        echo "</label>
                        <div>
                            ";
        // line 557
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 557, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_UPDATE_TICKET_TYPE"], "method", false, false, false, 557)) {
            // line 558
            echo "                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"";
            ((twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 558, $this->source); })()), "type", [], "any", false, false, false, 558)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 558, $this->source); })()), "type", [], "any", false, false, false, 558), "id", [], "any", false, false, false, 558), "html", null, true))) : (print ("-- --")));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 558, $this->source); })()), "type", [], "any", false, false, false, 558)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 558, $this->source); })()), "type", [], "any", false, false, false, 558), "description", [], "any", false, false, false, 558)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"))), "html", null, true);
            echo "</span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>";
            // line 561
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
            echo "</label>
                                        <div class=\"uv-search-sm\">
                                            <input type=\"text\" class=\"uv-search-field uv-search-inline\" placeholder=\"";
            // line 563
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
            echo "\">
                                        </div>
                                    </div>

                                    <ul class=\"uv-search-list type\" data-action=\"type\">
                                        ";
            // line 568
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ticketTypeCollection"]) || array_key_exists("ticketTypeCollection", $context) ? $context["ticketTypeCollection"] : (function () { throw new RuntimeError('Variable "ticketTypeCollection" does not exist.', 568, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 569
                echo "                                            <li data-index=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 569), "html", null, true);
                echo "\"><a href=\"#\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "code", [], "any", false, false, false, 569), "html", null, true);
                echo "</a></li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 571
            echo "                                    </ul>
                                </div>
                            ";
        } else {
            // line 574
            echo "                                <span class=\"uv-aside-select-value\">
                                    ";
            // line 575
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 575, $this->source); })()), "type", [], "any", false, false, false, 575)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 575, $this->source); })()), "type", [], "any", false, false, false, 575), "description", [], "any", false, false, false, 575)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"))), "html", null, true);
            echo "
                                </span>
                            ";
        }
        // line 578
        echo "                        </div>
                    </div>

                    ";
        // line 582
        echo "                    <div class=\"uv-aside-select search\">
                        <label class=\"uv-aside-select-label\">";
        // line 583
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
        echo "</label>
                        <div>
                            ";
        // line 585
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 585, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_ASSIGN_TICKET_GROUP"], "method", false, false, false, 585)) {
            // line 586
            echo "                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"";
            ((twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 586, $this->source); })()), "supportGroup", [], "any", false, false, false, 586)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 586, $this->source); })()), "supportGroup", [], "any", false, false, false, 586), "id", [], "any", false, false, false, 586), "html", null, true))) : (print ("-- --")));
            echo "\">
                                    ";
            // line 587
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 587, $this->source); })()), "supportGroup", [], "any", false, false, false, 587)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 587, $this->source); })()), "supportGroup", [], "any", false, false, false, 587), "name", [], "any", false, false, false, 587)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"))), "html", null, true);
            echo "
                                </span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>";
            // line 591
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
            echo "</label>
                                        <div class=\"uv-search-sm\">
                                            <input type=\"text\" class=\"uv-search-field uv-search-inline\" placeholder=\"";
            // line 593
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
            echo "\">
                                        </div>
                                    </div>
                                    <ul class=\"uv-search-list group\" data-action=\"group\">
                                        <li data-index=\"\"><a href=\"#\">";
            // line 597
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true);
            echo "</a></li>

                                        ";
            // line 599
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["supportGroupCollection"]) || array_key_exists("supportGroupCollection", $context) ? $context["supportGroupCollection"] : (function () { throw new RuntimeError('Variable "supportGroupCollection" does not exist.', 599, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 600
                echo "                                            <li data-index=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 600), "html", null, true);
                echo "\"><a href=\"#\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 600), "html", null, true);
                echo "</a></li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 602
            echo "                                    </ul>
                                </div>
                            ";
        } else {
            // line 605
            echo "                                <span class=\"uv-aside-select-value\">
                                    ";
            // line 606
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 606, $this->source); })()), "supportGroup", [], "any", false, false, false, 606)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 606, $this->source); })()), "supportGroup", [], "any", false, false, false, 606), "name", [], "any", false, false, false, 606)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"))), "html", null, true);
            echo "
                                </span>
                            ";
        }
        // line 609
        echo "                        </div>
                    </div>

                    ";
        // line 613
        echo "                    <div class=\"uv-aside-select search\">
                        <label class=\"uv-aside-select-label\">";
        // line 614
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team"), "html", null, true);
        echo "</label>
                        <div>
                            ";
        // line 616
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 616, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_ASSIGN_TICKET_GROUP"], "method", false, false, false, 616)) {
            // line 617
            echo "                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"";
            ((twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 617, $this->source); })()), "supportTeam", [], "any", false, false, false, 617)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 617, $this->source); })()), "supportTeam", [], "any", false, false, false, 617), "id", [], "any", false, false, false, 617), "html", null, true))) : (print ("-- --")));
            echo "\">
                                    ";
            // line 618
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 618, $this->source); })()), "supportTeam", [], "any", false, false, false, 618)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 618, $this->source); })()), "supportTeam", [], "any", false, false, false, 618), "name", [], "any", false, false, false, 618)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"))), "html", null, true);
            echo "
                                </span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>";
            // line 622
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team"), "html", null, true);
            echo "</label>
                                        <div class=\"uv-search-sm\">
                                            <input type=\"text\" class=\"uv-search-field uv-search-inline\" placeholder=\"";
            // line 624
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
            echo "\">
                                        </div>
                                    </div>
                                    <ul class=\"uv-search-list team\" data-action=\"team\">
                                        <li data-index=\"\"><a href=\"#\">";
            // line 628
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true);
            echo "</a></li>
                                        ";
            // line 629
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["supportTeamCollection"]) || array_key_exists("supportTeamCollection", $context) ? $context["supportTeamCollection"] : (function () { throw new RuntimeError('Variable "supportTeamCollection" does not exist.', 629, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 630
                echo "                                            <li data-index=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 630), "html", null, true);
                echo "\"><a href=\"#\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 630), "html", null, true);
                echo "</a></li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 632
            echo "                                    </ul>
                                </div>
                            ";
        } else {
            // line 635
            echo "                                <span class=\"uv-aside-select-value\">
                                    ";
            // line 636
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 636, $this->source); })()), "supportTeam", [], "any", false, false, false, 636)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 636, $this->source); })()), "supportTeam", [], "any", false, false, false, 636), "name", [], "any", false, false, false, 636)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"))), "html", null, true);
            echo "
                                </span>
                            ";
        }
        // line 639
        echo "                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 645
        echo "            <div class=\"uv-aside-brick\">
                <div class=\"uv-aside-ticket-labels label-list-block\">
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 648
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Labels"), "html", null, true);
        echo "</label>

                        <div class=\"uv-field-block\">
                            <input class=\"uv-field uv-dropdown-other\" type=\"text\" data-type=\"label\">
                            <div class=\"uv-dropdown-list uv-top-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 654
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        echo "</label>
                                    <ul class=\"\">
                                        <span class=\"uv-filter-info\">";
        // line 656
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        echo "</span>
                                        <span class=\"uv-no-results\" style=\"display: none;\">";
        // line 657
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        echo "</span>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"label-list\"></div>
                </div>
            </div>

            ";
        // line 669
        echo "            <div class=\"uv-aside-brick collaborator-list-block\">
                <div class=\"uv-aside-ticket-labels\">
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 672
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Collaborators"), "html", null, true);
        echo "</label>

                        ";
        // line 674
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 674, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_ADD_COLLABORATOR_TO_TICKET"], "method", false, false, false, 674)) {
            // line 675
            echo "                            <div class=\"uv-field-block\">
                                <input class=\"uv-field\" type=\"text\" name=\"email\" type=\"text\" value=\"\" placeholder=\"";
            // line 676
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type email to add"), "html", null, true);
            echo "\">
                            </div>
                        ";
        }
        // line 679
        echo "                    </div>
                    <div class=\"collaborator-list\" style=\"margin-top: 10px\"></div>
                </div>
            </div>

            ";
        // line 685
        echo "            <div class=\"uv-aside-brick tag-list-block\">
                <div class=\"uv-aside-ticket-labels\">
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 688
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tags"), "html", null, true);
        echo "</label>

                        ";
        // line 690
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 690, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_ADD_TAG"], "method", false, false, false, 690)) {
            // line 691
            echo "                            <div class=\"uv-field-block\">
                                <input class=\"uv-field uv-dropdown-other\" name=\"tag-name\" type=\"text\" data-type=\"tag\" value=\"\">
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>";
            // line 695
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
            echo "</label>
                                        <ul class=\"\">
                                            <span class=\"uv-filter-info\">";
            // line 697
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
            echo "</span>
                                            <span class=\"uv-no-results\" style=\"display: none;\">";
            // line 698
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
            echo "</span>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        // line 704
        echo "                    </div>

                    <div class=\"tag-list\" style=\"margin-top: 10px\"></div>
                </div>
            </div>
        </div>

        <div class=\"uv-view ";
        // line 711
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 711, $this->source); })()), "request", [], "any", false, false, false, 711), "cookies", [], "any", false, false, false, 711) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 711, $this->source); })()), "request", [], "any", false, false, false, 711), "cookies", [], "any", false, false, false, 711), "get", [0 => "uv-asideView"], "method", false, false, false, 711))) {
            echo "uv-aside-view";
        }
        echo "\" >
            <div class=\"uv-ticket-scroll-region ";
        // line 712
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 712, $this->source); })()), "request", [], "any", false, false, false, 712), "cookies", [], "any", false, false, false, 712) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 712, $this->source); })()), "request", [], "any", false, false, false, 712), "cookies", [], "any", false, false, false, 712), "get", [0 => "uv-asideView"], "method", false, false, false, 712))) {
            echo "uv-aside-view-tv";
        }
        echo "\" >
                ";
        // line 714
        echo "                <div class=\"uv-ticket-action-bar\">
                    <div class=\"uv-ticket-action-bar-lt\">
                        <div class=\"uv-header-fix\"><a href=\"#\" class=\"uv-icon-pin\"></a></div>

                        ";
        // line 719
        echo "                        <div class=\"uv-tabs\">
                            <ul>
                                ";
        // line 722
        echo "                                <li for=\"default\" data-type=\"all\" class=\"uv-tab-active\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All Threads"), "html", null, true);
        echo "</li>
                                <li for=\"default\" data-type=\"reply\">";
        // line 723
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Replies"), "html", null, true);
        echo "</li>
                                <li for=\"default\" data-type=\"forward\">";
        // line 724
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forwards"), "html", null, true);
        echo "</li>
                                <li for=\"default\" data-type=\"note\">";
        // line 725
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Notes"), "html", null, true);
        echo "</li>
                                <li for=\"default\" data-type=\"pinned\">";
        // line 726
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pinned"), "html", null, true);
        echo "</li>

                                ";
        // line 729
        echo "                                ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 729, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_EDIT_TICKET"], "method", false, false, false, 729) || twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 729, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_DELETE_TICKET"], "method", false, false, false, 729))) {
            // line 730
            echo "                                    <li class=\"uv-tab-ellipsis uv-ticket-action\">
                                        <span class=\"uv-icon-ellipsis uv-dropdown-other\"></span>

                                        <div class=\"uv-dropdown-list uv-bottom-right\">
                                            <div class=\"uv-dropdown-container\">
                                                <ul class=\"priority\" data-action=\"priority\">
                                                    ";
            // line 736
            if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 736, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_EDIT_TICKET"], "method", false, false, false, 736)) {
                // line 737
                echo "                                                        <li data-action=\"edit\" class=\"uv-open-popup\" data-target=\"edit-ticket-modal\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Ticket"), "html", null, true);
                echo "</li>
                                                    ";
            }
            // line 739
            echo "
                                                    <li data-action=\"print\">";
            // line 740
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Print Ticket"), "html", null, true);
            echo "</li>

                                                    ";
            // line 742
            if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 742, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_UPDATE_TICKET_STATUS"], "method", false, false, false, 742)) {
                // line 743
                echo "                                                        <li data-action=\"spam\" data-index=\"6\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mark as Spam"), "html", null, true);
                echo "</li>
                                                        <li data-action=\"closed\" data-index=\"5\">";
                // line 744
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mark as Closed"), "html", null, true);
                echo "</li>
                                                    ";
            }
            // line 746
            echo "
                                                    ";
            // line 747
            if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 747, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_DELETE_TICKET"], "method", false, false, false, 747)) {
                // line 748
                echo "                                                        <li data-action=\"delete\" class=\"uv-text-danger\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete Ticket"), "html", null, true);
                echo "</li>
                                                    ";
            }
            // line 750
            echo "                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                ";
        }
        // line 755
        echo "                            </ul>
                        </div>
                    </div>

                    <div class=\"uv-ticket-action-bar-rt\">
                        ";
        // line 760
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 760, $this->source); })()), "getRegisteredComponent", [0 => "Webkul\\UVDesk\\CoreFrameworkBundle\\Tickets\\WidgetCollection"], "method", false, false, false, 760), "embedSideFilterIcons", [], "method", false, false, false, 760);
        echo "
                    </div>
                </div>

                ";
        // line 765
        echo "                <div class=\"uv-ticket-viewer-bar\">
                    <div class=\"uv-ticket-viewer-list\">
                        <div class=\"uv-ticket-viewer-single uv-first\" title=\"Currently active agents on ticket...\">
                            <span class=\"uv-icon-eye-light\"></span>
                        </div>
                    </div>
                </div>

                ";
        // line 774
        echo "                <div class=\"uv-ticket-head\">
                    <div class=\"uv-ticket-head-lt\">
                        <span class=\"uv-star-large ";
        // line 776
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 776, $this->source); })()), "isStarred", [], "any", false, false, false, 776)) ? ("uv-star-active") : (""));
        echo " uv-star uv-margin-right-5\"></span>
                    </div>

                    <div class=\"uv-ticket-head-rt\">
                        <h1>";
        // line 780
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 780, $this->source); })()), "subject", [], "any", false, false, false, 780), "html", null, true);
        echo "</h1>
                    </div>
                </div>

                <div class=\"uv-ticket-strip\">
                    <span>
                        <span class=\"uv-ticket-strip-label\">";
        // line 786
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Created"), "html", null, true);
        echo " - </span>
                        <span class=\"timeago uv-margin-0\" data-timestamp=\"";
        // line 787
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 787, $this->source); })()), "createdAt", [], "any", false, false, false, 787), "getTimestamp", [], "method", false, false, false, 787), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 787, $this->source); })()), "createdAt", [], "any", false, false, false, 787), "format", [0 => "d-m-Y h:ia"], "method", false, false, false, 787), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 787, $this->source); })()), "timeZoneConverter", [0 => twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 787, $this->source); })()), "createdAt", [], "any", false, false, false, 787)], "method", false, false, false, 787), "html", null, true);
        echo "</span>
                    </span>

                    <span>
                        <span class=\"uv-ticket-strip-label\">";
        // line 791
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("By"), "html", null, true);
        echo " - </span> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 791, $this->source); })()), "user", [], "any", false, false, false, 791), "name", [], "any", false, false, false, 791), "html", null, true);
        echo "
                        ";
        // line 792
        if ((isset($context["totalCustomerTickets"]) || array_key_exists("totalCustomerTickets", $context) ? $context["totalCustomerTickets"] : (function () { throw new RuntimeError('Variable "totalCustomerTickets" does not exist.', 792, $this->source); })())) {
            // line 793
            echo "                            (<a id=\"more-tickets-btn\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_collection");
            echo "#customer/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 793, $this->source); })()), "id", [], "any", false, false, false, 793), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("count more tickets", ["count" => (isset($context["totalCustomerTickets"]) || array_key_exists("totalCustomerTickets", $context) ? $context["totalCustomerTickets"] : (function () { throw new RuntimeError('Variable "totalCustomerTickets" does not exist.', 793, $this->source); })())]), "html", null, true);
            echo "</a>)
                        ";
        }
        // line 795
        echo "                    </span>

                    <span class=\"agent-info\" style=\"";
        // line 797
        echo (((isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 797, $this->source); })())) ? ("") : ("display: none"));
        echo "\">
                        <span class=\"uv-ticket-strip-label\">";
        // line 798
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        echo " - </span>
                        <span class=\"name\">";
        // line 799
        (((isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 799, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 799, $this->source); })()), "name", [], "any", false, false, false, 799), "html", null, true))) : (print ("")));
        echo "</span>
                    </span>
                </div>

                ";
        // line 804
        echo "                <div class=\"uv-tab-view uv-tab-view-active\" id=\"default\">
                    <div class=\"uv-ticket-section\">
                        <div class=\"uv-ticket-main create\">
                            <div class=\"uv-ticket-strip\">
                                <span>
                                    <span class=\"timeago uv-margin-0\" data-timestamp=\"";
        // line 809
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 809, $this->source); })()), "createdAt", [], "any", false, false, false, 809), "getTimestamp", [], "method", false, false, false, 809), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 809, $this->source); })()), "createdAt", [], "any", false, false, false, 809), "format", [0 => "d-m-Y h:ia"], "method", false, false, false, 809), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 809, $this->source); })()), "timeZoneConverter", [0 => twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 809, $this->source); })()), "createdAt", [], "any", false, false, false, 809)], "method", false, false, false, 809), "html", null, true);
        echo "</span>
                                    - ";
        // line 810
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 810, $this->source); })()), "user", [], "any", false, false, false, 810), "name", [], "any", false, false, false, 810), "html", null, true);
        echo " <span class=\"uv-ticket-strip-label\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("created Ticket"), "html", null, true);
        echo "</span>
                                </span>
                                ";
        // line 812
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 812, $this->source); })()), "cc", [], "any", false, false, false, 812), ""))) {
            // line 813
            echo "\t\t\t\t\t\t\t\t\t<div class=\"uv-ticket-strip\">
\t\t\t\t\t\t\t\t\t\t<span><span class=\"uv-ticket-strip-label\">";
            // line 814
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CC"), "html", null, true);
            echo " -</span> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 814, $this->source); })()), "cc", [], "any", false, false, false, 814), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 816
        echo "      
                            </div>

                            <div class=\"uv-ticket-main-lt\">
                               <img src=\"";
        // line 820
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 820, $this->source); })()), "user", [], "any", false, false, false, 820), "thumbnail", [], "any", false, false, false, 820)) ? (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 820, $this->source); })()), "request", [], "any", false, false, false, 820), "scheme", [], "any", false, false, false, 820) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 820, $this->source); })()), "request", [], "any", false, false, false, 820), "httpHost", [], "any", false, false, false, 820)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 820, $this->source); })()), "user", [], "any", false, false, false, 820), "thumbnail", [], "any", false, false, false, 820))) : ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 820, $this->source); })()), "createdBy", [], "any", false, false, false, 820), "customer"))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_customer_image_path"]) || array_key_exists("default_customer_image_path", $context) ? $context["default_customer_image_path"] : (function () { throw new RuntimeError('Variable "default_customer_image_path" does not exist.', 820, $this->source); })()))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 820, $this->source); })())))))), "html", null, true);
        echo "\">
                            </div>

                            <div class=\"uv-ticket-main-rt\">
                                ";
        // line 824
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 824, $this->source); })()), "createdBy", [], "any", false, false, false, 824), "customer"))) {
            // line 825
            echo "                                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_manage_customer_account");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 825, $this->source); })()), "user", [], "any", false, false, false, 825), "id", [], "any", false, false, false, 825), "html", null, true);
            echo "\" class=\"uv-ticket-member-name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 825, $this->source); })()), "user", [], "any", false, false, false, 825), "name", [], "any", false, false, false, 825), "html", null, true);
            echo "</a>
                                ";
        } else {
            // line 827
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 827, $this->source); })()), "user", [], "any", false, false, false, 827)) {
                // line 828
                echo "                                        <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_account");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 828, $this->source); })()), "user", [], "any", false, false, false, 828), "id", [], "any", false, false, false, 828), "html", null, true);
                echo "\" class=\"uv-ticket-member-name\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 828, $this->source); })()), "user", [], "any", false, false, false, 828), "name", [], "any", false, false, false, 828), "html", null, true);
                echo "</a>
                                    ";
            } else {
                // line 830
                echo "                                        <a class=\"uv-ticket-member-name\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 830, $this->source); })()), "user", [], "any", false, false, false, 830), "name", [], "any", false, false, false, 830), "html", null, true);
                echo "</a>
                                    ";
            }
            // line 832
            echo "                                ";
        }
        // line 833
        echo "
                                ";
        // line 835
        echo "                                <div class=\"message\">
                                    <p>
                                        ";
        // line 837
        if ((0 === twig_compare(twig_striptags(twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 837, $this->source); })()), "message", [], "any", false, false, false, 837)), twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 837, $this->source); })()), "message", [], "any", false, false, false, 837)))) {
            // line 838
            echo "                                            ";
            echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 838, $this->source); })()), "message", [], "any", false, false, false, 838), "html", null, true));
            echo "
                                        ";
        } else {
            // line 840
            echo "                                            ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 840, $this->source); })()), "message", [], "any", false, false, false, 840);
            echo "
                                        ";
        }
        // line 842
        echo "                                    </p>
                                </div>

                                ";
        // line 846
        echo "                                ";
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 846, $this->source); })()), "attachments", [], "any", false, false, false, 846))) {
            // line 847
            echo "                                    <div class=\"uv-ticket-uploads\">
                                        <h4>";
            // line 848
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Uploaded Files"), "html", null, true);
            echo "</h4>
                                        <div class=\"uv-ticket-uploads-strip\">
                                            ";
            // line 850
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 850, $this->source); })()), "attachments", [], "any", false, false, false, 850));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 851
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "downloadURL", [], "any", false, false, false, 851), "html", null, true);
                echo "\" target = \"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "name", [], "any", false, false, false, 851), "html", null, true);
                echo "\">
                                                    <img src=\"";
                // line 852
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "iconURL", [], "any", false, false, false, 852), "html", null, true);
                echo "\"  class=\"uv-auto-pointer-events\"/>
                                                </a>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 855
            echo "                                        </div>

                                        ";
            // line 857
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 857, $this->source); })()), "attachments", [], "any", false, false, false, 857)), 1))) {
                // line 858
                echo "                                            <div class=\"uv-upload-actions\">
                                                <a href=\"#\" class=\"uv-open-in-files\" data-thread=\"";
                // line 859
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 859, $this->source); })()), "id", [], "any", false, false, false, 859), "html", null, true);
                echo "\" style=\"display: none\"><span class=\"uv-icon-open-in-files\"></span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Open in Files"), "html", null, true);
                echo "</a>
                                                ";
                // line 860
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 860, $this->source); })()), "attachments", [], "any", false, false, false, 860))) {
                    // line 861
                    echo "                                                    <a href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_download_attachment_zip");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 861, $this->source); })()), "id", [], "any", false, false, false, 861), "html", null, true);
                    echo "\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> Download (as .zip)</a>
                                                ";
                }
                // line 863
                echo "                                            </div>
                                        ";
            }
            // line 865
            echo "                                    </div>
                                ";
        }
        // line 867
        echo "                            </div>
                        </div>

                        <div class=\"uv-ticket-accordion\">
                            <div class=\"uv-ticket-count-wrapper\">
                                <span class=\"uv-ticket-count-stat\">";
        // line 872
        echo twig_escape_filter($this->env, (isset($context["totalReplies"]) || array_key_exists("totalReplies", $context) ? $context["totalReplies"] : (function () { throw new RuntimeError('Variable "totalReplies" does not exist.', 872, $this->source); })()), "html", null, true);
        echo "</span>
                            </div>

                            <div class=\"uv-ticket-wrapper thread-list\"></div>
                        </div>
                    </div>
                </div>

                ";
        // line 881
        echo "                <div class=\"uv-ticket-main uv-ticket-reply uv-no-error-success-icon\">
                    <div class=\"uv-ticket-main-lt\">
                        <span class=\"uv-icon-ellipsis\"></span>
                        <img src=\"";
        // line 884
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["currentUserDetails"]) || array_key_exists("currentUserDetails", $context) ? $context["currentUserDetails"] : (function () { throw new RuntimeError('Variable "currentUserDetails" does not exist.', 884, $this->source); })()), "thumbnail", [], "any", false, false, false, 884)) ? (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 884, $this->source); })()), "request", [], "any", false, false, false, 884), "scheme", [], "any", false, false, false, 884) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 884, $this->source); })()), "request", [], "any", false, false, false, 884), "httpHost", [], "any", false, false, false, 884)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")) . twig_get_attribute($this->env, $this->source, (isset($context["currentUserDetails"]) || array_key_exists("currentUserDetails", $context) ? $context["currentUserDetails"] : (function () { throw new RuntimeError('Variable "currentUserDetails" does not exist.', 884, $this->source); })()), "thumbnail", [], "any", false, false, false, 884))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 884, $this->source); })())))), "html", null, true);
        echo "\" />
                    </div>

                    <div class=\"uv-ticket-main-rt\">
                        <span class=\"uv-ticket-member-name\">";
        // line 888
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentUserDetails"]) || array_key_exists("currentUserDetails", $context) ? $context["currentUserDetails"] : (function () { throw new RuntimeError('Variable "currentUserDetails" does not exist.', 888, $this->source); })()), "name", [], "any", false, false, false, 888), "html", null, true);
        echo "</span>
                        <div class=\"uv-tabs\">
                            <ul>
                                <li for=\"reply\" class=\"uv-tab-active\">";
        // line 891
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reply"), "html", null, true);
        echo "</li>
                                <li for=\"forward\">";
        // line 892
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forward"), "html", null, true);
        echo "</li>
                                ";
        // line 893
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 893, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_ADD_NOTE"], "method", false, false, false, 893)) {
            // line 894
            echo "                                    <li for='note'>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Note"), "html", null, true);
            echo "</li>
                                ";
        }
        // line 896
        echo "                            </ul>
                        </div>

                        ";
        // line 900
        echo "                        <div class=\"uv-tab-view uv-tab-view-active\" id=\"reply\">
                            <form enctype=\"multipart/form-data\" method=\"post\" action=\"";
        // line 901
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_add_ticket_thread", ["ticketId" => twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 901, $this->source); })()), "id", [], "any", false, false, false, 901)]), "html", null, true);
        echo "\">
                                <input name=\"threadType\" value=\"reply\" type=\"hidden\">
                                <input name=\"status\" value=\"\" type=\"hidden\" ";
        // line 903
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 903, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_UPDATE_TICKET_STATUS"], "method", false, false, false, 903)) {
            echo "class=\"reply-status\"";
        }
        echo ">
                                <div class=\"uv-element-block collaborators\" style=\"display: none\">
                                    <label class=\"uv-field-label\">";
        // line 905
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Collaborators"), "html", null, true);
        echo "</label>
                                    <div class=\"uv-field-block\"></div>
                                </div>

                                <div class=\"uv-element-block cc-bcc\">
                                    <label>
                                        <div class=\"uv-checkbox\">
                                            <input type=\"checkbox\" class=\"cc-bcc-toggle\">
                                            <span class=\"uv-checkbox-view\"></span>
                                        </div>
                                        <span class=\"uv-checkbox-label\">CC/BCC</span>
                                    </label>

                                    <div class=\"uv-field-block\" style=\"display: none\">
                                        <div class=\"uv-group\">
                                            <input class=\"uv-group-field uv-dropdown-other preloaded uv-manual-enter\" type=\"text\">
                                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                                <div class=\"uv-dropdown-container\">
                                                    <label>";
        // line 923
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        echo "</label>
                                                </div>

                                                <ul class=\"uv-agents-list\">
                                                    ";
        // line 927
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 927, $this->source); })()), "getAgentPartialDataCollection", [], "any", false, false, false, 927));
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 928
            echo "                                                        <li data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "email", [], "any", false, false, false, 928), "html", null, true);
            echo "\">
                                                            <img src=\"";
            // line 929
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 929)) ? (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 929, $this->source); })()), "request", [], "any", false, false, false, 929), "scheme", [], "any", false, false, false, 929) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 929, $this->source); })()), "request", [], "any", false, false, false, 929), "httpHost", [], "any", false, false, false, 929)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")) . twig_get_attribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 929))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 929, $this->source); })())))), "html", null, true);
            echo "\"/> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 929), "html", null, true);
            echo "
                                                        </li>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 932
        echo "
                                                    <li class=\"uv-no-results\" style=\"display: none;\">";
        // line 933
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        echo "</li>
                                                </ul>
                                            </div>
                                            <select class=\"uv-group-select cc-bcc-select\">
                                                <option value=\"bcc\">";
        // line 937
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("BCC"), "html", null, true);
        echo "</option>
                                                <option value=\"cc\">";
        // line 938
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CC"), "html", null, true);
        echo "</option>
                                            </select>
                                        </div>

                                        <div class=\"cc-bcc-list\"></div>
                                    </div>
                                </div>

                                <div class=\"uv-element-block uv-element-block-textarea\">
                                    <label class=\"uv-field-label\">";
        // line 947
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Write a reply"), "html", null, true);
        echo "</label>
                                    <div class=\"uv-field-block\">
                                        <textarea class=\"uv-field\" name=\"reply\" id=\"reply-area\">";
        // line 949
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 949, $this->source); })()), "getAgentDraftReply", [], "method", false, false, false, 949), "html", null, true);
        echo "</textarea>
                                    </div>
                                </div>

                                <div class=\"uv-element-block attachment-block\">
                                    <label>
                                        <span class=\"uv-file-label\">";
        // line 955
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Attachment"), "html", null, true);
        echo "</span>
                                    </label>
                                </div>

                                <div class=\"uv-action-buttons\">
                                    <div class=\"uv-dropdown next-view\">
                                        <input type=\"hidden\" name=\"nextView\" value=\"stay\"/>
                                        <div class=\"uv-dropdown-btn\" style=\"padding: 9px 27px 9px 10px;\">";
        // line 962
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stay on ticket"), "html", null, true);
        echo "</div>
                                        <div class=\"uv-dropdown-list uv-top-left\" style=\"opacity: 1;\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>";
        // line 965
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("After Reply"), "html", null, true);
        echo "</label>
                                                <ul>
                                                    <li data-value=\"stay\">";
        // line 967
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stay on ticket"), "html", null, true);
        echo "</li>
                                                    <li data-value=\"redirect\">";
        // line 968
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Redirect to list"), "html", null, true);
        echo "</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"uv-dropdown reply\">
                                        <div class=\"uv-btn uv-dropdown-other\">";
        // line 975
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reply"), "html", null, true);
        echo " <span class=\"uv-icon-down-light\"></span></div>
                                        <div class=\"uv-dropdown-list uv-top-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>";
        // line 978
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reply"), "html", null, true);
        echo "</label>
                                                <ul>
                                                    <li data-id=\"\">";
        // line 980
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit"), "html", null, true);
        echo "</li>
                                                    ";
        // line 981
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 981, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_UPDATE_TICKET_STATUS"], "method", false, false, false, 981)) {
            // line 982
            echo "                                                        <li data-id=\"open\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Open"), "html", null, true);
            echo "</li>
                                                        <li data-id=\"pending\">";
            // line 983
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Pending"), "html", null, true);
            echo "</li>
                                                        <li data-id=\"answered\">";
            // line 984
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Answered"), "html", null, true);
            echo "</li>
                                                        <li data-id=\"resolved\">";
            // line 985
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Resolved"), "html", null, true);
            echo "</li>
                                                        <li data-id=\"closed\">";
            // line 986
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Closed"), "html", null, true);
            echo "</li>
                                                    ";
        }
        // line 988
        echo "                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        ";
        // line 997
        echo "                        <div class=\"uv-tab-view\" id=\"forward\">
                            <form enctype=\"multipart/form-data\" method=\"post\" action=\"";
        // line 998
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_add_ticket_thread", ["ticketId" => twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 998, $this->source); })()), "id", [], "any", false, false, false, 998)]), "html", null, true);
        echo "\">
                                <input name=\"threadType\" value=\"forward\" type=\"hidden\">
                                <input name=\"status\" value=\"\" type=\"hidden\" ";
        // line 1000
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1000, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_UPDATE_TICKET_STATUS"], "method", false, false, false, 1000)) {
            echo "class=\"reply-status\"";
        }
        echo ">

                                <div class=\"uv-element-block\">
                                    <label class=\"uv-field-label\">";
        // line 1003
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
        echo "</label>
                                    <div class=\"uv-field-block\">
                                        <input class=\"uv-field\" type=\"text\" name=\"subject\">
                                    </div>
                                </div>

                                <div class=\"uv-element-block to\">
                                    <label class=\"uv-field-label\">";
        // line 1010
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To"), "html", null, true);
        echo "</label>
                                    <div class=\"uv-field-block\">
                                        <input class=\"uv-field uv-dropdown-other preloaded uv-to-message uv-manual-enter\" type=\"text\">

                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>";
        // line 1016
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        echo "</label>
                                            </div>

                                            <ul class=\"uv-agents-list\">
                                                ";
        // line 1020
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1020, $this->source); })()), "getAgentPartialDataCollection", [], "any", false, false, false, 1020));
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 1021
            echo "                                                    <li data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "email", [], "any", false, false, false, 1021), "html", null, true);
            echo "\">
                                                        <img src=\"";
            // line 1022
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 1022)) ? (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1022, $this->source); })()), "request", [], "any", false, false, false, 1022), "scheme", [], "any", false, false, false, 1022) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1022, $this->source); })()), "request", [], "any", false, false, false, 1022), "httpHost", [], "any", false, false, false, 1022)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")) . twig_get_attribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 1022))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 1022, $this->source); })())))), "html", null, true);
            echo "\"/> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 1022), "html", null, true);
            echo "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1025
        echo "
                                                <li class=\"uv-no-results\" style=\"display: none;\">";
        // line 1026
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        echo "</li>
                                            </ul>
                                        </div>

                                        <div class=\"to-list\"></div>
                                    </div>
                                </div>

                                <div class=\"uv-element-block cc-bcc\">
                                    <label>
                                        <div class=\"uv-checkbox\">
                                            <input type=\"checkbox\" class=\"cc-bcc-toggle\">
                                            <span class=\"uv-checkbox-view\"></span>
                                        </div>
                                        <span class=\"uv-checkbox-label\">CC/BCC</span>
                                    </label>
                                    <div class=\"uv-field-block\" style=\"display: none\">
                                        <div class=\"uv-group\">
                                            <input class=\"uv-group-field uv-dropdown-other preloaded uv-manual-enter\" type=\"text\">
                                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                                <div class=\"uv-dropdown-container\"><label>";
        // line 1046
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        echo "</label></div>

                                                <ul class=\"uv-agents-list\">
                                                    ";
        // line 1049
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1049, $this->source); })()), "getAgentPartialDataCollection", [], "any", false, false, false, 1049));
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 1050
            echo "                                                        <li data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "email", [], "any", false, false, false, 1050), "html", null, true);
            echo "\">
                                                            <img src=\"";
            // line 1051
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 1051)) ? (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1051, $this->source); })()), "request", [], "any", false, false, false, 1051), "scheme", [], "any", false, false, false, 1051) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1051, $this->source); })()), "request", [], "any", false, false, false, 1051), "httpHost", [], "any", false, false, false, 1051)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")) . twig_get_attribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 1051))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 1051, $this->source); })())))), "html", null, true);
            echo "\"/> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 1051), "html", null, true);
            echo "
                                                        </li>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1054
        echo "
                                                    <li class=\"uv-no-results\" style=\"display: none;\">";
        // line 1055
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        echo "</li>
                                                </ul>
                                            </div>
                                            <select class=\"uv-group-select cc-bcc-select\">
                                                <option value=\"bcc\">";
        // line 1059
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("BCC"), "html", null, true);
        echo "</option>
                                                <option value=\"cc\">";
        // line 1060
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CC"), "html", null, true);
        echo "</option>
                                            </select>
                                        </div>

                                        <div class=\"cc-bcc-list\"></div>
                                    </div>
                                </div>

                                <div class=\"uv-element-block uv-element-block-textarea\">
                                    <label class=\"uv-field-label\">";
        // line 1069
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Write a reply"), "html", null, true);
        echo "</label>
                                    <div class=\"uv-field-block\">
                                        <textarea class=\"uv-field\" name=\"reply\" id=\"forward-area\">";
        // line 1071
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 1071, $this->source); })()), "getAgentDraftReply", [], "method", false, false, false, 1071), "html", null, true);
        echo "</textarea>
                                    </div>
                                </div>

                                <div class=\"uv-element-block attachment-block\">
                                    <label><span class=\"uv-file-label\">";
        // line 1076
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Attachment"), "html", null, true);
        echo "</span></label>
                                </div>

                                <div class=\"uv-action-buttons\">
                                    <div class=\"uv-dropdown next-view\">
                                        <input type=\"hidden\" name=\"nextView\" value=\"stay\"/>
                                        <div class=\"uv-dropdown-btn\" style=\"padding: 9px 27px 9px 10px;\">";
        // line 1082
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stay on ticket"), "html", null, true);
        echo "</div>
                                        <div class=\"uv-dropdown-list uv-top-left\" style=\"opacity: 1;\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>";
        // line 1085
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("After Reply"), "html", null, true);
        echo "</label>
                                                <ul>
                                                    <li data-value=\"stay\">";
        // line 1087
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stay on ticket"), "html", null, true);
        echo "</li>
                                                    <li data-value=\"redirect\">";
        // line 1088
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Redirect to list"), "html", null, true);
        echo "</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"uv-btn forward\">";
        // line 1094
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forward"), "html", null, true);
        echo "</div>
                                </div>
                            </form>
                        </div>

                        ";
        // line 1100
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1100, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_ADD_NOTE"], "method", false, false, false, 1100)) {
            // line 1101
            echo "                            <div class=\"uv-tab-view\" id=\"note\">
                                <form enctype=\"multipart/form-data\" method=\"post\" action=\"";
            // line 1102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_add_ticket_thread", ["ticketId" => twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1102, $this->source); })()), "id", [], "any", false, false, false, 1102)]), "html", null, true);
            echo "\">
                                    <input name=\"threadType\" value=\"note\" type=\"hidden\">
                                    <input name=\"status\" value=\"\" type=\"hidden\" ";
            // line 1104
            if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1104, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_UPDATE_TICKET_STATUS"], "method", false, false, false, 1104)) {
                echo "class=\"reply-status\"";
            }
            echo ">

                                    <div class=\"uv-element-block uv-element-block-textarea\">
                                        <label class=\"uv-field-label\">";
            // line 1107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Write a reply"), "html", null, true);
            echo "</label>
                                        <div class=\"uv-field-block\">
                                            <textarea class=\"uv-field\" name=\"reply\" id=\"note-area\">";
            // line 1109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 1109, $this->source); })()), "getAgentDraftReply", [], "method", false, false, false, 1109), "html", null, true);
            echo "</textarea>
                                        </div>
                                    </div>

                                    <div class=\"uv-element-block attachment-block\">
                                        <label><span class=\"uv-file-label\">";
            // line 1114
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Attachment"), "html", null, true);
            echo "</span></label>
                                    </div>

                                    <div class=\"uv-action-buttons\">
                                        <div class=\"uv-dropdown next-view\">
                                            <input type=\"hidden\" name=\"nextView\" value=\"stay\"/>
                                            <div class=\"uv-dropdown-btn\" style=\"padding: 9px 27px 9px 10px;\">";
            // line 1120
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stay on ticket"), "html", null, true);
            echo "</div>
                                            <div class=\"uv-dropdown-list uv-top-left\" style=\"opacity: 1;\">
                                                <div class=\"uv-dropdown-container\">
                                                    <label>";
            // line 1123
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("After Reply"), "html", null, true);
            echo "</label>
                                                    <ul>
                                                        <li data-value=\"stay\">";
            // line 1125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stay on ticket"), "html", null, true);
            echo "</li>
                                                        <li data-value=\"redirect\">";
            // line 1126
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Redirect to list"), "html", null, true);
            echo "</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"uv-dropdown reply\">
                                            <div class=\"uv-btn uv-dropdown-other\">";
            // line 1133
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reply"), "html", null, true);
            echo "<span class=\"uv-icon-down-light\"></span></div>

                                            <div class=\"uv-dropdown-list uv-top-left\">
                                                <div class=\"uv-dropdown-container\">
                                                    <label>";
            // line 1137
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Note"), "html", null, true);
            echo "</label>
                                                    <ul>
                                                        <li data-id=\"\">";
            // line 1139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit"), "html", null, true);
            echo "</li>
                                                        ";
            // line 1140
            if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1140, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_UPDATE_TICKET_STATUS"], "method", false, false, false, 1140)) {
                // line 1141
                echo "                                                            <li data-id=\"open\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Open"), "html", null, true);
                echo "</li>
                                                            <li data-id=\"pending\">";
                // line 1142
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Pending"), "html", null, true);
                echo "</li>
                                                            <li data-id=\"answered\">";
                // line 1143
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Answered"), "html", null, true);
                echo "</li>
                                                            <li data-id=\"resolved\">";
                // line 1144
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Resolved"), "html", null, true);
                echo "</li>
                                                            <li data-id=\"closed\">";
                // line 1145
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Closed"), "html", null, true);
                echo "</li>
                                                        ";
            }
            // line 1147
            echo "                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        ";
        }
        // line 1155
        echo "                    </div>
                </div>
            </div>

            <!-- Bottom Action Block -->
            <div class=\"uv-ticket-fixed-region\">
                <div class=\"uv-ticket-fixed-region-lt\">
                    ";
        // line 1162
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 1162, $this->source); })()), "getRegisteredComponent", [0 => "Webkul\\UVDesk\\CoreFrameworkBundle\\Tickets\\QuickActionButtonCollection"], "method", false, false, false, 1162), "injectTemplates", [], "method", false, false, false, 1162);
        echo "

                    ";
        // line 1184
        echo "
                    ";
        // line 1208
        echo "                </div>

                <div class=\"uv-ticket-fixed-region-rt\"></div>
            </div>
            <!-- //Bottom Action Block -->
        </div>
    </div>

    ";
        // line 1217
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1217, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_EDIT_TICKET"], "method", false, false, false, 1217)) {
            // line 1218
            echo "        <div class=\"uv-pop-up-overlay uv-no-error-success-icon\" id=\"edit-ticket-modal\">
            <div class=\"uv-pop-up-box uv-pop-up-wide\">
                <span class=\"uv-pop-up-close\"></span>
                <h2>";
            // line 1221
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Ticket"), "html", null, true);
            echo "</h2>

                ";
            // line 1224
            echo "                <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_update_ticket_details_xhr", ["ticketId" => twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1224, $this->source); })()), "id", [], "any", false, false, false, 1224)]), "html", null, true);
            echo "\" id=\"edit-ticket-form\">
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
            // line 1226
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
            echo "</label>
                        <div class=\"uv-field-block\">
                            <input type=\"text\" name=\"subject\" class=\"uv-field\" value=\"";
            // line 1228
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1228, $this->source); })()), "subject", [], "any", false, false, false, 1228), "html", null, true);
            echo "\" />
                        </div>
                    </div>
                    
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
            // line 1233
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reply"), "html", null, true);
            echo "</label>
                        <div class=\"uv-field-block\">
                            ";
            // line 1235
            if ((0 === twig_compare(twig_striptags(twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1235, $this->source); })()), "message", [], "any", false, false, false, 1235)), twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1235, $this->source); })()), "message", [], "any", false, false, false, 1235)))) {
                // line 1236
                echo "                                <textarea name=\"reply\" id=\"uv-edit-create-thread\" class=\"uv-field\">";
                echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1236, $this->source); })()), "message", [], "any", false, false, false, 1236), "html", null, true));
                echo "</textarea>
                            %} ";
            } else {
                // line 1238
                echo "                                <textarea name=\"reply\" id=\"uv-edit-create-thread\" class=\"uv-field\">";
                echo twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1238, $this->source); })()), "message", [], "any", false, false, false, 1238);
                echo "</textarea>
                            ";
            }
            // line 1240
            echo "                        </div>
                    </div>

                    <div class=\"uv-pop-up-actions\">
                        <input class=\"uv-btn update\" href=\"#\" value=\"Update\" type=\"submit\">
                        <input class=\"uv-btn cancel\" href=\"#\" value=\"Discard\" type=\"button\">
                    </div>
                </form>
            </div>
        </div>
    ";
        }
        // line 1251
        echo "
    ";
        // line 1252
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 1252, $this->source); })()), "getRegisteredComponent", [0 => "Webkul\\UVDesk\\CoreFrameworkBundle\\Tickets\\WidgetCollection"], "method", false, false, false, 1252), "embedSideFilterContent", [], "method", false, false, false, 1252);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1255
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 1256
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "

    ";
        // line 1258
        echo twig_include($this->env, $context, "@UVDeskCoreFramework\\Templates\\attachment.html.twig");
        echo "
    ";
        // line 1259
        echo twig_include($this->env, $context, "@UVDeskCoreFramework/Templates/tinyMCE.html.twig");
        echo "

    <script id=\"thread_list_empty_tmp\" type=\"text/template\">
        <div class=\"uv-no-threads\">";
        // line 1262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nothing interesting here..."), "html", null, true);
        echo "</div>
    </script>

    <script> 
        \$(document).ready(function() {
            \$(\"#filterSavedreplies\").on(\"keyup\", function() {
                if (this.value.length && this.value.length != '') {
                    var that = this;
                    \$(\"#listSavedReplies li\").hide().filter(function() {
                        return \$(this).html().toLowerCase().indexOf(that.value.toLowerCase()) !== -1;
                    }).show();
                } else {
                    \$(\"#listSavedReplies li\").show()
                }
            });

            \$(\".uv-dropdown-btn\").click(function(event) {
                setTimeout(function() {
                    \$(\".uv-search-inline\").focus();
                }, 100);
            });
        });
    </script>

    <script id=\"thread_list_item_tmp\" type=\"text/template\">
        <div class=\"uv-ticket-strip\">
            <span>
                <% if(typeof(mailStatus) != 'undefined' && mailStatus) { %>
                    <a href=\"https://support.uvdesk.com/en/blog/uvdesk-ticket-delivery-status\" target=\"_blank\">
                        <span class=\"uv-mail-status uv-mail-<%- mailStatus.split(',')[0] %>\" <% if(mailStatus !== 'pending') { %>data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
        // line 1291
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mail status:"), "html", null, true);
        echo " <%- mailStatus.split(',')[0] %> <% if(mailStatus.split(',').length > 1) { print('Reason:' + mailStatus.split(',')[1] ); } %> \"<% } %> ></span>
            </a>
            <% } %>
            <span class=\"timeago uv-margin-0\" data-timestamp=\"<%- timestamp %>\" title=\"<%- formatedCreatedAt %>\">
                    <%- formatedCreatedAt %>
                </span>
            - <%- fullname %>
            <span class=\"uv-ticket-strip-label\">
                <% if(threadType == 'reply') { %>
                    ";
        // line 1300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("replied"), "html", null, true);
        echo "
                <% } else if(threadType == 'note') { %>
                    ";
        // line 1302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("added note"), "html", null, true);
        echo "
                <% } else if(threadType == 'forward') { %>
                    ";
        // line 1304
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("forwarded"), "html", null, true);
        echo "
                <% } %>
                - <a href=\"#thread/<%- id %>\" id=\"thread<%- id %>\" class=\"copy-thread-link\">#<%- id %></a>
                </span>
            </span>

            <% if((replyTo && threadType ==  'forward') || cc || bcc) { %>
                <div class=\"uv-ticket-strip\">
                    <% if(replyTo && threadType ==  'forward') { %>
                    <span><span class=\"uv-ticket-strip-label\">";
        // line 1313
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TO"), "html", null, true);
        echo " -</span> <%- replyTo %></span>
                    <% } if(cc) { %>
                    <span><span class=\"uv-ticket-strip-label\">";
        // line 1315
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CC"), "html", null, true);
        echo " -</span> <%- cc %></span>
                    <% } if(bcc) { %>
                    <span><span class=\"uv-ticket-strip-label\">";
        // line 1317
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("BCC"), "html", null, true);
        echo " -</span> <%- bcc %></span>
                    <% } %>
                </div>
            <% } %>
        </div>

        <div class=\"uv-ticket-strip uv-margin-top-5\" <% if(!bookmark && !isLocked) { %>style=\"display: none\"<% } %> >
            <span <% if(!bookmark) { %>style=\"display: none\"<% } %> >
                    <span class=\"uv-icon-pinned\"></span>
                    ";
        // line 1326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pinned"), "html", null, true);
        echo "
                    </span>
            <span <% if(!isLocked) { %>style=\"display: none\"<% } %> >
                <span class=\"uv-icon-locked\"></span>
                ";
        // line 1330
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Locked"), "html", null, true);
        echo "
            </span>
        </div>
        <div class=\"uv-ticket-main-lt\">
            <span class=\"uv-thread-action\">
                <span class=\"uv-icon-ellipsis uv-dropdown-other\"></span>
                <div class=\"uv-dropdown-list uv-bottom-left\">
                    <div class=\"uv-dropdown-container\">
                        <ul>
                            ";
        // line 1339
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1339, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_EDIT_THREAD_NOTE"], "method", false, false, false, 1339)) {
            // line 1340
            echo "                                <% if (userType != 'system' && userType != 'System') { %>
                                    <li data-action=\"edit\">";
            // line 1341
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Thread"), "html", null, true);
            echo "</li>
                                <% } %>
                            ";
        }
        // line 1344
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1344, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_DELETE_THREAD_NOTE"], "method", false, false, false, 1344)) {
            // line 1345
            echo "                                <li data-action=\"delete\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete Thread"), "html", null, true);
            echo "</li>
                            ";
        }
        // line 1347
        echo "                            <li data-action=\"forward\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forward"), "html", null, true);
        echo "</li>
                            <% if(bookmark) { %>
                                <li data-action=\"pin\" data-id=\"1\">";
        // line 1349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unpin Thread"), "html", null, true);
        echo "</li>
                            <% } else { %>
                                <li data-action=\"pin\" data-id=\"0\">";
        // line 1351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pin Thread"), "html", null, true);
        echo "</li>
                            <% } %>
                            <% if(threadType != 'note') { %>
                                ";
        // line 1354
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1354, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_MANAGE_LOCK_AND_UNLOCK_THREAD"], "method", false, false, false, 1354)) {
            // line 1355
            echo "                                    <% if(isLocked) { %>
                                        <li data-action=\"lock\" data-id=\"1\">";
            // line 1356
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unlock Thread"), "html", null, true);
            echo "</li>
                                    <% } else { %>
                                        <li data-action=\"lock\" data-id=\"0\">";
            // line 1358
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Lock Thread"), "html", null, true);
            echo "</li>
                                    <% } %>
                                ";
        }
        // line 1361
        echo "                            <% } %>
                            <li style=\"display: none;\" data-action=\"translate\">";
        // line 1362
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Translate Thread"), "html", null, true);
        echo "</li>
                        </ul>
                    </div>
                </div>
            </span>
            <span class=\"p-relative\">
                
            </span>
            <% if (userType != 'system' && userType != 'System') { %>
                <% if(user && user.smallThumbnail != null) { %>
                    <img src=\"";
        // line 1372
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1372, $this->source); })()), "request", [], "any", false, false, false, 1372), "scheme", [], "any", false, false, false, 1372) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1372, $this->source); })()), "request", [], "any", false, false, false, 1372), "httpHost", [], "any", false, false, false, 1372)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
        echo "<%- user.smallThumbnail %>\" />
                <% } else { %>
                    <img src=\"<% if(userType == 'agent') { %> ";
        // line 1374
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 1374, $this->source); })())), "html", null, true);
        echo " <% } else { %> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_customer_image_path"]) || array_key_exists("default_customer_image_path", $context) ? $context["default_customer_image_path"] : (function () { throw new RuntimeError('Variable "default_customer_image_path" does not exist.', 1374, $this->source); })())), "html", null, true);
        echo " <% } %>\" />
                <% } %>
            <% } else { %>
                <img src=\"";
        // line 1377
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_helpdesk_image_path"]) || array_key_exists("default_helpdesk_image_path", $context) ? $context["default_helpdesk_image_path"] : (function () { throw new RuntimeError('Variable "default_helpdesk_image_path" does not exist.', 1377, $this->source); })())), "html", null, true);
        echo "\" />
            <% } %>
        </div>
        <div class=\"uv-ticket-main-rt\">
            <% if(userType == 'customer') { %>
                <a <% if(user) { %>href=\"";
        // line 1382
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_manage_customer_account");
        echo "/<%- user.id %>\"<% } %> class=\"uv-ticket-member-name\">
                <%- fullname %>
                </a>
            <% } else if(userType == 'agent') { %>
                <a <% if(user) { %>href=\"";
        // line 1386
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_account");
        echo "/<%- user.id %>\"<% } %> class=\"uv-ticket-member-name\">
                <%- fullname %>
                </a>
            <% } else { %>
                <span class=\"uv-ticket-member-name\">
                    <%- fullname %>
                </span>
            <% } %>

            <!-- Message Block -->
            <div class=\"message\">
                <%= reply %>
            </div>

            <!-- Attachment Block -->
            <% if(attachments.length) { %>
            <div class=\"uv-ticket-uploads\">
                <h4>";
        // line 1403
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Uploaded Files"), "html", null, true);
        echo "</h4>
                <div class=\"uv-ticket-uploads-strip\">
                    <% _.each(attachments, function(file) { %>
                    <a href=\"<%-file.downloadURL %>\" target =\"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"<%- file.name %>\">
                        <img src=\"<%-file.iconURL %>\" class=\"uv-auto-pointer-events\">
                    </a>
                    <% }) %>
                </div>

                <% if (attachments.length > 1) { %>
                <div class=\"thread-attachments-zip pull-left\">
                    <div class=\"uv-upload-actions\">
                        <a href=\"#\" class=\"uv-open-in-files\" data-thread=\"<%- id %>\" style=\"display: none\"><span class=\"uv-icon-open-in-files\"></span>";
        // line 1415
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Open in Files"), "html", null, true);
        echo "</a>
                        <% if(attachments.length > 0) { %>
                        <a href=\"";
        // line 1417
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_download_attachment_zip");
        echo "/<%- id %>\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download (as .zip)"), "html", null, true);
        echo "</a>
                        <% } %>
                    </div>
                </div>
                <% } %>

            </div>
            <% } %>
        </div>
    </script>

    <script id=\"edit_thread_tmp\" type=\"text/template\">
        <div class=\"thread-edit-container\">
            <div class=\"uv-element-block uv-element-block-textarea\">
                <div class=\"uv-field-block\">
                    <textarea id=\"uv-edit-thread\">
                    </textarea>
                </div>
            </div>
            <div class=\"uv-action-buttons\">
                <a class=\"uv-btn cancel-edit\" type=\"button\">";
        // line 1437
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "</a>
                <a class=\"uv-btn saveThread\" type=\"button\" style=\"margin-right: 10px;\">";
        // line 1438
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update"), "html", null, true);
        echo "</a>
            </div>
        </div>
    </script>

    <script id=\"ticket_quick_navigation_tmp\" type=\"text/template\">
        <% if(prev) { %>
            <a class=\"uv-btn-stroke\" href=\"";
        // line 1445
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket");
        echo "/<%- prev %>\">
                <span class=\"uv-icon-previous\"></span>
                ";
        // line 1447
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Previous Ticket"), "html", null, true);
        echo "
            </a>
        <% } else { %>
            <a class=\"uv-btn-stroke\" disabled=\"disabled\">
                <span class=\"uv-icon-previous\"></span>
                ";
        // line 1452
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Previous Ticket"), "html", null, true);
        echo "
            </a>
        <% } %>

        <% if(next) { %>
            <a class=\"uv-btn-stroke\" href=\"";
        // line 1457
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket");
        echo "/<%- next %>\">
                ";
        // line 1458
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next Ticket"), "html", null, true);
        echo "
                <span class=\"uv-icon-next\"></span>
            </a>
        <% } else { %>
            <a class=\"uv-btn-stroke\" disabled=\"disabled\">
                ";
        // line 1463
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next Ticket"), "html", null, true);
        echo "
                <span class=\"uv-icon-next\"></span>
            </a>
        <% } %>
    </script>

    <script type=\"text/javascript\">
        uvdesk = {
            ticket: {}
        };

        var ticketApp = {};

        viewerImages = function() {
            if (typeof(\$().viewer == 'function')) {
                \$('.uv-ticket-uploads .uv-ticket-uploads-strip').viewer({
                    'url': 'data-url',
                    'downloadBase': \"";
        // line 1480
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_download_attachment");
        echo "\",
                    'download': 'data-download',
                });
            }
        };

        \$(function () {
            var threadIds = [];
            viewerImages();

            _.extend(Backbone.Model.prototype, Backbone.Validation.mixin);

            // Ticket Model
            var TicketModel = Backbone.Model.extend({
                idAttribute : \"id\",
                urlRoot : \"";
        // line 1495
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_update_ticket_attributes_xhr");
        echo "\",
                validation: {
                    'email': [{
                        required: true,
                        msg: '";
        // line 1499
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "'
                    },{
                        pattern: /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                        msg: 'Please enter a valid email'
                    }],
                    'subject' : {
                        required : true,
                        msg : '";
        // line 1506
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "'
                    },
                    'reply' : {
                        fn: function(value) {
                            if(!tinyMCE.get(\"uv-edit-create-thread\"))
                                return false;
                            var html = tinyMCE.get(\"uv-edit-create-thread\").getContent();
                            if(app.appView.stripHTML(html) != '') {
                                return false;
                            }
                            return true;
                        },
                        msg : '";
        // line 1518
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "'
                    }
                },
            });

            // Thread Model
            var ThreadModel = Backbone.Model.extend({
                idAttribute : \"id\",
                defaults : {
                    hasTask : 0,
                    task: null
                }
            });

            // Customer Model
            var CustomerModel = Backbone.Model.extend({
                validation: {
                    'name': [{
                        required: true,
                        msg: '";
        // line 1537
        echo "This field is mandatory";
        echo "'
                    }, {
                        pattern: /^((?![!@#\$%^&*()<_+]).)*\$/,
                        msg: '";
        // line 1540
        echo "This field must have characters only";
        echo "'
                    }],
                    'email': [{
                        required: true,
                        msg: '";
        // line 1544
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "'
                    },{
                        pattern: /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                        msg: '";
        // line 1547
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email address is invalid"), "html", null, true);
        echo "'
                    }],
                    'contactNumber': function(value) {
                        if(value != undefined && value !== '') {
                            if (!value.match('^\\\\s*(?:\\\\+?(\\\\d{1,3}))?[-. (]*(\\\\d{3})[-. )]*(\\\\d{3})[-. ]*(\\\\d{4})(?: *x(\\\\d+))?\\\\s*\$'))
                                return 'Contact number is invalid';
                        }
                    }
                },
                urlRoot : \"";
        // line 1556
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_manage_customer_account");
        echo "\"
            });

            // Ticket Collaborator Model
            var CollaboratorModel = Backbone.Model.extend({
                idAttribute : \"id\",
                validation: {
                    'email': [{
                        required: true,
                        msg: '";
        // line 1565
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "'
                    },{
                        pattern: /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                        msg: '";
        // line 1568
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please enter a valid email"), "html", null, true);
        echo "'
                    }]
                },
                defaults : {
                    ticketId : ";
        // line 1572
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1572, $this->source); })()), "id", [], "any", false, false, false, 1572), "html", null, true);
        echo ",
                    email: ''
                },
                parse: function (resp, options) {
                    return resp.collaborator;
                },
                urlRoot : \"";
        // line 1578
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_manage_collaborators_xhr");
        echo "\"
            });

            // Ticket Tag Model
            var TagModel = Backbone.Model.extend({
                idAttribute : \"id\",
                defaults : {
                    ticketId : ";
        // line 1585
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1585, $this->source); })()), "id", [], "any", false, false, false, 1585), "html", null, true);
        echo "
                },
                parse: function (resp, options) {
                    return resp.tag;
                },
                urlRoot : \"";
        // line 1590
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_create_tag_xhr");
        echo "\"
            });

            // Ticket Label Model
            var LabelModel = Backbone.Model.extend({
                idAttribute : \"id\",
                defaults : {
                    ticketId : ";
        // line 1597
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1597, $this->source); })()), "id", [], "any", false, false, false, 1597), "html", null, true);
        echo "
                },
                parse: function (resp, options) {
                    return resp.label;
                },
                urlRoot : \"";
        // line 1602
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_add_label_xhr");
        echo "\"
            });

            // Ticket Thread Collection
            var ThreadCollection = AppCollection.extend({
                model : ThreadModel,
                mode: \"infinite\",
                url : \"";
        // line 1609
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_thread_collection_xhr", ["ticketId" => twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1609, $this->source); })()), "id", [], "any", false, false, false, 1609)]), "html", null, true);
        echo "\",
                firstScrollCheck: false,
                threadRequestedId: false,
                template : \$(\"#thread_list_empty_tmp\").html(),
                parseRecords: function (resp, options) {
                    return resp.threads;
                },
                syncData : function() {
                    type = \$(\".uv-ticket-action-bar-lt .uv-tabs .uv-tab-active\").attr('data-type')
                    var self = this;
                    var data = {
                        threadType: type
                    };

                    if(this.threadRequestedId)
                        data.threadRequestedId = this.threadRequestedId;

                    app.appView.showLoader()
                    this.fetch({
                        data : data,
                        remove: false,
                        success: function(model, response) {
                            app.appView.hideLoader();
                            self.threadRequestedId = false;
                            pagination.renderPagination(response.pagination);
                            threadCollection.state.currentPage = parseInt(response.pagination.current) + 1;
                            if(response.pagination.totalCount <= 0){
                                this.\$('.uv-ticket-wrapper.thread-list').html(self.template);
                            }
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    }).done(function(){
                        viewerImages();
                        if(!self.firstScrollCheck){
                            self.firstScrollCheck = true;
                            var fragment = Backbone.history.fragment.trim();
                            if(fragment == '') {
                                router.scrollPage('#reply');
                            } else
                                router.scrollPage('#' + fragment.replace('thread/', 'thread'));
                        }
                    });
                }
            });

            // Ticket Collaborator Collection
            var CollaboratorCollection = Backbone.PageableCollection.extend({
                model : CollaboratorModel
            });

            // Ticket Tag Collection
            var TagCollection = Backbone.PageableCollection.extend({
                model : TagModel,
                isTagExist : function(name) {
                    var flag = 1;
                    _.each(tagCollection.models, function (item) {
                        if(item.get('name').toUpperCase() == name.toUpperCase())
                            flag = 0;
                    }, this);

                    return flag;
                }
            });

            // Ticket Label Collection
            var LabelCollection = Backbone.PageableCollection.extend({
                model : TagModel,
                isLabelExist : function(name) {
                    var flag = 1;
                    _.each(labelCollection.models, function (item) {
                        if(item.get('name').toUpperCase() == name.toUpperCase())
                            flag = 0;
                    }, this);
                    return flag;
                }
            });

            // Customer Form View
            var CustomerForm = Backbone.View.extend({
                events : {
                    'click .uv-btn.update-btn' : \"saveCustomer\",
                    'blur input': 'formChanegd',
                    'click .cancel-btn': 'backToInfo',
                    'click .uv-aside-back': 'backToInfo'
                },
                initialize : function() {
                    Backbone.Validation.bind(this);
                },
                formChanegd: function(e) {
                    this.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
                    this.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
                },
                saveCustomer: function (e) {
                    e.preventDefault();
                    currentElement = Backbone.\$(e.currentTarget);
                    this.model.clear();
                    this.model.set(this.\$el.find('form').serializeObject());
                    self = this;
                    if(this.model.isValid(true)) {
                        app.appView.showLoader();
                        currentElement.attr('disabled', 'disabled');
                        this.model.save({}, {
                            success: function (model, response, options) {
                                app.appView.hideLoader();
                                currentElement.removeAttr(\"disabled\");
                                if(response.alertClass == \"success\") {
                                    app.appView.renderResponseAlert(response);
                                    \$('.uv-aside-customer-info').html(\"<span>\" + self.model.attributes.name + \"</span><span>\" + self.model.attributes.email + \"</span><span>\" + self.model.attributes.contactNumber + \"</span><span class='uv-customize'></span>\")
                                    self.backToInfo();
                                } else if(response.errors) {
                                    self.addErrors(JSON.parse(response.errors));
                                } else if(response.alertMessage) {
                                    app.appView.renderResponseAlert(response);
                                }
                            },
                            error: function (model, xhr, options) {
                                if(url = xhr.getResponseHeader('Location'))
                                    window.location = url;

                                app.appView.hideLoader();
                                app.appView.renderResponseAlert(warningResponse);
                            }
                        });
                    }
                },
                addErrors: function(jsonContext) {
                    for (var field in jsonContext) {
                        Backbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
                    }
                },
                backToInfo: function(e) {
                    if(e)
                        e.preventDefault()

                    \$('.uv-main-info-update-block').hide()
                    \$('.uv-main-info-block').show()
                },
            });

            // Ticket View
            var TicketView = Backbone.View.extend({
                el: \$('.uv-wrapper'),
                stopDraftSaveFlag: 0,
                events: {
                    'click .uv-ticket-action .uv-dropdown-list li[data-action=\"spam\"], .uv-ticket-action .uv-dropdown-list li[data-action=\"closed\"]': 'masrkSpamAndClosed',
                    'click .uv-aside-ticket-actions .uv-aside-select .uv-dropdown-list li': 'editTicketProperty',
                    'click .uv-aside-customer-info .uv-customize': 'showCustomerUpdateBlock',
                    'click .uv-ticket-head .uv-star-large': 'updateStar',
                    'click .uv-ticket-action-bar .uv-tabs li': 'filterThread',
                    'click .uv-ticket-action .uv-dropdown-list li[data-action=\"delete\"]': 'confirmRemove',
                    'click .uv-ticket-action .uv-dropdown-list li[data-action=\"lock\"]': 'lockAndUnlockThread',
                    'click .uv-element-block.collaborators .uv-btn-tag': 'removeCcCollaborator',
                    'keypress .uv-element-block.to .uv-dropdown-other': 'addToInput',
                    'click .uv-element-block.to .uv-dropdown-list li': 'addTo',
                    'click .to-list .uv-btn-tag': 'removeTo',
                    'change .uv-element-block.cc-bcc .cc-bcc-toggle': 'showCcBccBlock',
                    'keypress .uv-element-block.cc-bcc .uv-group-field.uv-dropdown-other': 'addCcBccInput',
                    'click .uv-element-block.cc-bcc .uv-dropdown-list li': 'addCcBcc',
                    'click .cc-bcc-list .uv-btn-tag, .to-list .uv-btn-tag': 'removeEmail',
                    'click .next-view .uv-dropdown-list li': 'setNextView',
                    'click .uv-dropdown.reply .uv-dropdown-list li, .uv-btn.forward': 'validateForm',
                    'click #edit-ticket-modal .uv-btn.update': 'updateTicket',
                    'click .message .uv-icon-ellipsis': 'showReplyQuote',
                    'input .uv-aside-brick .uv-field.uv-dropdown-other': 'searchFilterXhr',
                    'click .uv-dropdown-container.prepared-responses a:not(.create-new)': 'confirmPreparedResponses',

                    'click .uv-header-fix': 'fixheader',
                    'click .uv-ticket-action .uv-dropdown-list li[data-action=\"print\"]': 'printTicket',
                    'blur .uv-manual-enter': 'enterManualAdd',
                },
                ticketNavigationTemplate : _.template(\$(\"#ticket_quick_navigation_tmp\").html()),
                loaderTemplate : _.template(\$(\"#loader-tmp\").html()),
                targetPreparedResponseUrl: '',
                initialize: function() {
                    Backbone.Validation.bind(this);
                    InitTinyMce('#uv-edit-create-thread');
                    \$('.uv-ticket-fixed-region .uv-ticket-fixed-region-rt').html(this.ticketNavigationTemplate(ticketNavigation))
                    var threadTab = localStorage.getItem(\"threadTab\");
                    if(threadTab){
                        \$('.uv-ticket-action-bar-lt .uv-tabs li').removeClass('uv-tab-active');
                        \$('.uv-ticket-action-bar-lt .uv-tabs [data-type=\"' + threadTab + '\"]').addClass('uv-tab-active');
                    }
                    nextView = localStorage.getItem(\"nextView\");
                    if(nextView) {
                        \$(\".next-view input\").val(nextView)
                        \$(\".next-view .uv-dropdown-btn\").text(\$(\"#reply .next-view .uv-dropdown-list li[data-value='\" + nextView + \"']\").text())
                    }
                    if(!localStorage.getItem('ticketTour')) {
                        \$('.uv-ticket-tour').show()
                    }
                    this.fixheaderInit();
                },
                printTicket: function(e) {
                    window.print();
                },
                enterManualAdd: function(e) {
                    var target = \$(e.target);
                    if(target.val()) {
                        var e = \$.Event(\"keypress\");
                        e.which = 13; //choose the one you want
                        target.trigger(e);
                    }
                },
                fixheader: function(e){
                    e.preventDefault();
                    var header = localStorage.getItem(\"fixHeader\");
                    header = !(header == 'true');
                    localStorage.setItem(\"fixHeader\", header);
                    this.fixheaderInit();
                },
                fixheaderInit: function(){
                    var header = localStorage.getItem(\"fixHeader\");
                    if(header == 'true'){
                        \$('a.uv-icon-pin').addClass('uv-icon-pinned');
                        \$('.uv-ticket-action-bar').addClass('uv-ticket-action-bar-fixed');
                    }else{
                        \$('a.uv-icon-pin').removeClass('uv-icon-pinned');
                        \$('.uv-ticket-action-bar').removeClass('uv-ticket-action-bar-fixed');
                    }
                },
                masrkSpamAndClosed: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    var value = currentElement.attr('data-index');
                    \$(\".uv-aside-select .uv-dropdown-list ul.status li[data-index='\" + value + \"']\").trigger('click')
                },
                editTicketProperty: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    var uvSelect = currentElement.parents('.uv-aside-select');
                    var field = currentElement.parent().attr('data-action');
                    var value = currentElement.attr('data-index');
                    if(uvSelect.find('.uv-aside-select-value').attr('data-id') != value) {
                        var name = currentElement.text().trim();
                        app.appView.showLoader();
                        this.model.save({attribute: field, value: value, id: this.model.id}, {
                            patch: true,
                            success: function (model, response, options) {
                                uvSelect.find('.uv-aside-select-value').attr('data-id', value).text(name)
                                if(field == 'priority') {
                                    uvSelect.find('.uv-list-ticket-priority').attr('style', 'background:' + currentElement.attr('data-color'));
                                } else if(field == 'agent') {
                                    \$('.uv-ticket-strip .agent-info').show()
                                    \$('.uv-ticket-strip .agent-info .name').text(name)
                                }
                                app.appView.hideLoader();
                                app.appView.renderResponseAlert(response);
                            },
                            error: function (model, xhr, options) {
                                if(url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                                var response = warningResponse;
                                if(xhr.responseJSON)
                                    response = xhr.responseJSON;

                                app.appView.hideLoader();
                                app.appView.renderResponseAlert(response);
                            }
                        });
                    }
                },
                showCustomerUpdateBlock: function() {
                    \$('.uv-main-info-update-block').show()
                    \$('.uv-main-info-block').hide()
                },
                updateStar: function(e) {
                    e.preventDefault();
                    var currentElement = Backbone.\$(e.currentTarget);
                    currentElement.toggleClass('uv-star-active')
                    this.model.save({id: this.model.id}, {
                        patch: true,
                        url : \"";
        // line 1881
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_bookmark_ticket_xhr");
        echo "\",
                        success: function (model, response, options) {
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                },
                filterThread: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    if(type = currentElement.attr('data-type')) {
                        localStorage.setItem(\"threadTab\", type);
                        if(type != 'all')
                            \$('.uv-ticket-main.create').hide()
                        else
                            \$('.uv-ticket-main.create').show()
                        \$('.uv-ticket-wrapper.thread-list').html('')
                        models = []
                        threadCollection.each(function(model) {
                            models.push(model)
                        })
                        total = threadCollection.models.length;
                        count = 0;
                        if(total) {
                            _.each(models, function (model) {
                                threadCollection.remove(model)
                                count++;
                                if(total == count) {
                                    threadCollection.reset()
                                    threadCollection.state.currentPage = 1;
                                    threadCollection.syncData()
                                }
                            });
                        } else {
                            threadCollection.reset()
                            threadCollection.state.currentPage = 1;
                            threadCollection.syncData()
                        }
                    }
                },
                confirmRemove: function(e) {
                    app.appView.openConfirmModal(this);
                },
                removeItem : function() {
                    if(this.model.attributes.isTrashed)
                        window.location.href = \"";
        // line 1927
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_delete_ticket", ["ticketId" => twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1927, $this->source); })()), "id", [], "any", false, false, false, 1927)]), "html", null, true);
        echo "\";
                    else
                        window.location.href = \"";
        // line 1929
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_trash_ticket", ["ticketId" => twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1929, $this->source); })()), "id", [], "any", false, false, false, 1929)]), "html", null, true);
        echo "\";
                },
                addCCCollaborators: function() {
                    if(collaboratorCollection.length) {
                        var collaboratorContainer = \$('.uv-element-block.collaborators');
                        collaboratorContainer.find('.uv-field-block').html('');
                        collaboratorContainer.show()
                        _.each(collaboratorCollection.models, function (item) {
                            var json = item.attributes;
                            collaboratorContainer.find('.uv-field-block').append(\"<span><input type='hidden' name='cccol[]' value='\" + json.email + \"'/><a class='uv-btn-tag' href='#'><span class='uv-icon-remove-dark-before'></span>\" + json.name + \"</a></span>\")
                        }, this);
                    }
                },
                removeCcCollaborator: function(e) {
                    e.preventDefault()
                    Backbone.\$(e.currentTarget).parent().remove();
                    var collaboratorContainer = \$('.uv-element-block.collaborators');
                    if(!collaboratorContainer.find('.uv-btn-tag').length)
                        collaboratorContainer.hide()
                },
                addToInput: function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    var currentTab = inputElement.parents('.uv-tab-view');
                    var email = inputElement.val().trim();
                    if (e.which === 13 && email) {
                        e.preventDefault()
                        if(!this.model.preValidate({name: 'email', email: email})) {
                            inputElement.val('').trigger('input')
                            inputElement.removeClass('uv-dropdown-btn-active')
                            inputElement.siblings('.uv-dropdown-list').hide()
                            if(!currentTab.find(\".to-list input[value='\" + email + \"'].to\").length) {
                                currentTab.find('.to-list').append(\"<span><input type='hidden' name='to[]' value='\" + email + \"' class='to'/><a class='uv-btn-tag' href='#'><span class='uv-icon-remove-dark-before'></span>\" + email + \"</span></a></span>\")
                            }
                        }
                    }
                },
                addTo: function(e) {
                    var currentTab = Backbone.\$(e.currentTarget).parents('.uv-tab-view');
                    var email =  Backbone.\$(e.currentTarget).attr('data-id');
                    if(!currentTab.find(\".to-list input[value='\" + email + \"'].to\").length) {
                        currentTab.find('.to-list').append(\"<span><input type='hidden' name='to[]' value='\" + email + \"' class='to'/><a class='uv-btn-tag' href='#'><span class='uv-icon-remove-dark-before'></span>\" + email + \"</span></a></span>\")
                    }
                },
                showCcBccBlock: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    var currentTab = currentElement.parents('.uv-tab-view');
                    if(currentElement.is(':checked')) {
                        currentTab.find('.uv-element-block.cc-bcc').find('.uv-field-block').show()
                    } else {
                        currentTab.find('.uv-element-block.cc-bcc').find('.uv-field-block').hide()
                        currentTab.find('.uv-element-block .cc-bcc-list').html('')
                    }
                },
                addCcBccInput: function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    var currentTab = inputElement.parents('.uv-tab-view');
                    var email = inputElement.val().trim();
                    if (e.which === 13 && email) {
                        e.preventDefault()
                        type = currentTab.find('.cc-bcc-select option:selected').text()
                        if(!this.model.preValidate({name: 'email', email: email})) {
                            inputName = \$('.cc-bcc-select').val()
                            inputElement.val('').trigger('input')
                            inputElement.removeClass('uv-dropdown-btn-active')
                            inputElement.siblings('.uv-dropdown-list').hide()
                            if(!currentTab.find(\".cc-bcc-list input[value='\" + email + \"'].\" + inputName).length) {
                                currentTab.find('.cc-bcc-list').append(\"<span><input type='hidden' name='\" + inputName + \"[]' value='\" + email + \"' class='\" + inputName + \"'/><a class=uv-btn-tag uv-lowercase' href='#'><span class='uv-icon-remove-dark-before'></span>\" + email + \" : <span class='uv-uppercase'>\" + type + \"</span></a></span>\")
                            }
                        }
                    }
                },
                addCcBcc: function(e) {
                    var currentTab = Backbone.\$(e.currentTarget).parents('.uv-tab-view');
                    var email =  Backbone.\$(e.currentTarget).attr('data-id');
                    type = currentTab.find('.cc-bcc-select option:selected').text()
                    inputName = currentTab.find('.cc-bcc-select').val()
                    if(!currentTab.find(\".cc-bcc-list input[value='\" + email + \"'].\" + inputName).length) {
                        currentTab.find('.uv-element-block.cc-bcc .uv-group-field.uv-dropdown-other').val('').trigger('input')
                        currentTab.find('.cc-bcc-list').append(\"<span><input type='hidden' name='\" + inputName + \"[]' value='\" + email + \"' class='\" + inputName + \"'/><a class=uv-btn-tag uv-lowercase' href='#'><span class='uv-icon-remove-dark-before'></span>\" + email + \" : <span class='uv-uppercase'>\" + type + \"</span></a></span>\")
                    }
                },
                removeEmail: function(e) {
                    e.preventDefault()
                    Backbone.\$(e.currentTarget).parent().remove();
                },
                setNextView: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    var nextView = currentElement.attr('data-value');
                    localStorage.setItem(\"nextView\", nextView);
                    \$(\".next-view input\").val(nextView)
                    \$(\".next-view .uv-dropdown-btn\").text(currentElement.text())
                },
                validateForm : function(e) {
                    e.preventDefault();
                    var element = Backbone.\$(e.currentTarget);
                    formType = element.parents('.uv-tab-view.uv-tab-view-active').attr('id');
                    form = element.parents('form');
                    form.find('.reply-status').val(element.attr('data-id'));
                    form.find('.uv-field-message').remove()

                    var html = tinyMCE.get(formType + \"-area\").getContent();
                    if(app.appView.htmlText(html) != '' || -1 != html.indexOf('<img')) {
                        if(formType == 'forward') {
                            if(!form.find(\".to-list input.to\").length) {
                                \$('.uv-element-block.to').append(\"<span class='uv-field-message'>";
        // line 2033
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "</span>\")
                            } else {
                                this.stopDraftSaveFlag = 1;

                                app.appView.showLoader();
                                tinyMCE.activeEditor.uploadImages(function(response) {
                                    app.appView.hideLoader();

                                    form.submit();
                                    \$('.uv-btn.forward').attr('disabled', 'disabled');
                                });
                            }
                        } else {
                            this.stopDraftSaveFlag = 1;
                            if(localStorage) {
                                localStorage.setItem(\"threadTab\", \"all\");
                            }

                            app.appView.showLoader();
                            tinyMCE.activeEditor.uploadImages(function(response) {
                                app.appView.hideLoader();

                                form.submit();
                                \$('.uv-dropdown.reply').find('.uv-btn').attr('disabled', 'disabled');
                            });
                        }
                    } else {
                        form.find('.uv-element-block-textarea').append(\"<span class='uv-field-message'>";
        // line 2060
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "</span>\");
                        if(formType == 'forward') {
                            if(!form.find(\".to-list input.to\").length) {
                                \$('.uv-element-block.to').append(\"<span class='uv-field-message'>";
        // line 2063
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "</span>\")
                            }
                        }
                    }
                },
                updateTicket: function(e) {
                    e.preventDefault();
                    this.model.set(\$('#edit-ticket-modal form').serializeObject());
                    if(this.model.isValid(['subject', 'reply'])) {
                        \$('#edit-ticket-modal form').find('.uv-btn').attr('disabled', 'disabled');
                        \$('#edit-ticket-modal form').submit();
                    }
                },
                showReplyQuote: function(e) {
                    Backbone.\$(e.currentTarget).next().toggle();
                },
                searchFilterXhr: _.debounce(function(e) {
                    currentElement = Backbone.\$(e.currentTarget);
                    var parent = currentElement.parent();
                    if(\$('.uv-dropdown-other.uv-dropdown-btn-active').parent().attr('id') != parent.attr('id'))
                        return;
                    parent.find(\"li:not(.uv-no-results, .uv-filter-info)\").remove();
                    parent.find(\".uv-filter-info\").show()
                    if(currentElement.val().length > 1) {
                        parent.append(this.loaderTemplate())
                        parent.find('.uv-filter-info').text(\"";
        // line 2088
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Searching", [], "messages");
        echo " ...\")
                        if(self.xhrReq)
                            self.xhrReq.abort();

                        self.xhrReq = \$.ajax({
                            url : \"";
        // line 2093
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_search_filter_options");
        echo "\",
                            type : 'GET',
                            data: {\"type\" : currentElement.attr('data-type'), \"query\": currentElement.val()},
                            dataType : 'json',
                            success : function(response) {
                                self.xhrReq = 0;
                                parent.find('.uv-loader').remove()
                                parent.find('.uv-filter-info').text(\"";
        // line 2100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        echo "\").hide();
                                if(response.length == 0) {
                                    parent.find('.uv-no-results').show();
                                    parent.find('.uv-no-results').disabled = true;
                                } else {
                                    parent.find('.uv-no-results').hide();
                                    _.each(response, function(item) {
                                        parent.find('.uv-dropdown-list ul').append(\"<li data-id='\" + item.id + \"'>\" + item.name + \"</li>\")
                                    });
                                }
                            },
                            error: function (xhr) {
                                self.xhrReq = 0;
                                parent.find('.uv-loader').remove()
                                parent.find('.uv-no-results').hide();
                                parent.find('.uv-filter-info').text(\"";
        // line 2115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        echo "\").show();

                                if(url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                            }
                        });
                    } else {
                        parent.find('.uv-no-results').hide();
                    }
                },1000)
            });

            // Ticket Thread View
            var ThreadItem = Backbone.View.extend({
                tagName : \"div\",
                className : \"uv-ticket-main\",
                template : _.template(\$(\"#thread_list_item_tmp\").html()),
                editThreadTemplate : _.template(\$(\"#edit_thread_tmp\").html()),
                events : {
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"delete\"]': 'confirmRemove',
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"lock\"]': 'lockAndUnlockThread',
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"pin\"]': 'pinThread',
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"mark\"]': 'markForTask',
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"forward\"]' : 'forwardThread',
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"edit\"]' : 'editThread',
                    'click .uv-btn.cancel-edit' : 'cancelEdit',
                    'click .uv-btn.saveThread' : 'updateThread',
                    'click .copy-thread-link' : 'copyThreadLink',
                    'blur .input-copy-thread-link': 'removeCopyThreadLink'
                },
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));

                    this.\$el.addClass(\"thread-\" + this.model.id)
                    if(this.model.attributes.threadType == 'note')
                        this.\$el.addClass('uv-ticket-note')
                    return this;
                },
                unrender : function(response) {
                    if(response.alertMessage != undefined) {
                        var self = this;
                        ";
        // line 2157
        echo "                        threadCollection.models = threadCollection.models.filter(thread => {
                            if(thread.id == self.model.id) {
                                return false;
                            }

                            return true;
                        });
                        this.remove();
                        threadCollection.syncData();
                        app.appView.renderResponseAlert(response);
                    }
                },
                confirmRemove: function(e) {
                    app.appView.openConfirmModal(this);
                },
                removeItem : function() {
                    self = this;
                    var index = threadIds.indexOf(this.model.id);
                    if (index > -1)
                        threadIds.splice(index, 1);
                    app.appView.showLoader();
                    this.model.destroy({
                        url : \"";
        // line 2179
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_thread_xhr");
        echo "/\" + this.model.id,
                        data : { 'ticketId' : ticketModel.attributes.id },
                        success : function (model, response, options) {
                            app.appView.hideLoader();
                            self.unrender(response);
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                },
                lockAndUnlockThread :function(e) {
                    self = this;
                    currentElement = Backbone.\$(e.currentTarget);
                    var isLocked = 0;
                    if(this.model.get('isLocked')) {
                        this.model.set('isLocked', 0);
                        currentElement.attr('data-id', isLocked).text(\"";
        // line 2203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Lock Thread"), "html", null, true);
        echo "\");
                    } else {
                        isLocked = 1;
                        this.model.set('isLocked', 1);
                        currentElement.attr('data-id', isLocked).text(\"";
        // line 2207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unlock Thread"), "html", null, true);
        echo "\");
                    }
                    app.appView.showLoader();
                    this.model.save({
                        isLocked: isLocked,
                        id: this.model.id,
                        ticketId: ticketModel.attributes.id,
                        updateType: 'lock'
                    }, {
                        patch: true,
                        url : \"";
        // line 2217
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_thread_xhr");
        echo "/\" + this.model.id,
                        success : function (model, response, options) {
                            self.toggleThreadPropertyIcon()
                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                },
                pinThread :function(e) {
                    self = this;
                    currentElement = Backbone.\$(e.currentTarget);
                    var bookmark = 0;
                    if(this.model.get('bookmark')) {
                        this.model.set('bookmark', 0);
                        currentElement.attr('data-id', bookmark).text(\"";
        // line 2241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pin Thread"), "html", null, true);
        echo "\");
                    } else {
                        bookmark = 1;
                        this.model.set('bookmark', 1);
                        currentElement.attr('data-id', bookmark).text(\"";
        // line 2245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unpin Thread"), "html", null, true);
        echo "\");
                    }
                    app.appView.showLoader();
                    this.model.save({
                        bookmark: bookmark,
                        id: this.model.id,
                        ticketId: ticketModel.attributes.id,
                        updateType: 'bookmark'
                    }, {
                        patch: true,
                        url : \"";
        // line 2255
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_thread_xhr");
        echo "/\" + this.model.id,
                        success : function (model, response, options) {
                            self.toggleThreadPropertyIcon()
                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                },
                forwardThread : function(e) {
                    var element = Backbone.\$(e.currentTarget);
                    tinymce.get('forward-area').setContent(this.model.attributes.reply);
                    \$('#forward-area').parent().find('img').removeAttr('crossorigin');
                    \$(\".uv-tabs li[for='forward']\").trigger('click');

                    \$('.uv-ticket-scroll-region').animate({
                        scrollTop: \$('#default').outerHeight()
                    }, 'slow');
                },
                cancelEdit : function(e) {
                    this.initEditThread();
                    tinymce.get('uv-edit-thread').destroy()
                },
                editThread : function(e) {
                    \$('.thread-edit-container .cancel-edit').trigger('click');
                    this.initEditThread();
                    this.\$el.find('.message').hide().after(this.editThreadTemplate());
                    this.\$el.find('.uv-ticket-uploads').hide()

                    InitTinyMce('#uv-edit-thread');
                    tinymce.get('uv-edit-thread').setContent(this.model.attributes.reply);
                    this.\$el.find('img').removeAttr('crossorigin');
                },
                initEditThread: function() {
                    \$('.thread-edit-container').remove();
                    messageElement = this.\$el.find('.message');
                    messageElement.show();
                    this.\$el.find('.uv-ticket-uploads').show()
                },
                updateThread : function(e) {
                    e.preventDefault();
                    var currentElement = Backbone.\$(e.currentTarget);
                    parent = currentElement.parents('.thread-edit-container')
                    parent.find('.uv-field-message').remove()

                    var html = tinyMCE.get(\"uv-edit-thread\").getContent();
                    if(app.appView.stripHTML(html) != '') {
                        var self = this;
                        currentElement.attr(\"disabled\", \"disabled\");
                        this.model.set('reply', html);
                        app.appView.showLoader()
                        this.model.save({}, {
                            url : \"";
        // line 2316
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_thread_update_xhr");
        echo "/\" + this.model.id,
                            success : function (model, response, options) {
                                app.appView.hideLoader()
                                messageElement = self.\$el.find('.message');
                                if(response.alertClass == 'success') {
                                    messageElement.html(self.model.attributes.reply).show();
                                    messageElement.find('.uv-icon-ellipsis').remove();
                                    messageElement.find('.helpdesk_blockquote').eq(0).before(\"<span class='uv-icon-ellipsis uv-ellipsis-mirror'></span>\").hide();
                                }

                                self.initEditThread();
                                tinymce.get('uv-edit-thread').destroy()
                                app.appView.renderResponseAlert(response);
                            },
                            error: function (model, xhr, options) {
                                self.initEditThread();
                                tinymce.get('uv-edit-thread').destroy()
                                if(url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                                var response = warningResponse;
                                if(xhr.responseJSON)
                                    response = xhr.responseJSON;
                                app.appView.hideLoader()
                                app.appView.renderResponseAlert(response);
                            }
                        });
                    } else {
                        this.\$el.find('.uv-element-block-textarea').append(\"<span class='uv-field-message'>";
        // line 2343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "</span>\");
                    }
                },
                toggleCreateTaskBar : function() {
                    if(threadIds.length) {
                        \$(\"#uv-task-view\").css('right', '0px');
                        \$(\"#uv-task-view .uv-create-task\").show()
                        \$(\"#uv-task-view .uv-task-list\").hide()
                    } else {
                        \$(\"#uv-task-view\").css('right', '-300px');
                        \$(\"#uv-task-view .uv-create-task\").hide()
                        \$(\"#uv-task-view .uv-task-list\").show()
                    }
                },
                copyThreadLink: function(e){
                    _.delay(function(){
                        \$(e.currentTarget).before('<input type=\"text\" class=\"input-copy-thread-link uv-field\" value=\"' + window.location.href + '\"/>');
                        \$(e.currentTarget).prev().focus().select();
                    }, 100);
                },
                removeCopyThreadLink: function(e){
                    \$(e.currentTarget).remove();
                },
                toggleThreadPropertyIcon: function(e) {
                    if(jQuery.inArray(this.model.id, threadIds) !== -1 || this.model.get('bookmark') || this.model.get('isLocked')) {
                        this.\$el.find('.uv-icon-pinned').parents('.uv-ticket-strip').show()
                    } else {
                        this.\$el.find('.uv-icon-pinned').parents('.uv-ticket-strip').hide()
                    }

                    if(jQuery.inArray(this.model.id, threadIds) !== -1)
                        this.\$el.find('.uv-icon-marked-task').parent().show()
                    else
                        this.\$el.find('.uv-icon-marked-task').parent().hide()

                    if(this.model.get('bookmark'))
                        this.\$el.find('.uv-icon-pinned').parent().show()
                    else
                        this.\$el.find('.uv-icon-pinned').parent().hide()

                    if(this.model.get('isLocked'))
                        this.\$el.find('.uv-icon-locked').parent().show()
                    else
                        this.\$el.find('.uv-icon-locked').parent().hide()
                }
            });

            // Ticket Thread List
            var ThreadList = Backbone.View.extend({
                el : \$(\".thread-list\"),
                initialize : function() {
                    this.listenTo(threadCollection.fullCollection, \"add\", this.renderThread);
                },
                renderThread : function (item) {
                    var threadItem = new ThreadItem({
                        model: item
                    });
                    if(item.id < threadCollection.fullCollection.at(0).id)
                        this.\$el.prepend(threadItem.render().el);
                    else
                        this.\$el.append(threadItem.render().el);
                    threadItem.\$el.find('.helpdesk_blockquote').eq(0).before(\"<span class='uv-icon-ellipsis uv-ellipsis-mirror'></span>\").hide();
                    //emojifyRun();
                    this.\$el.find('img').removeAttr('crossorigin');
                    this.\$el.find('div.message a').attr('target', '_blank');
                    app.appView.relativeTime();
                }
            });

            // Ticket Pagination View
            var Pagination = Backbone.View.extend({
                el: \$('.uv-ticket-accordion'),
                events: {
                    'click .uv-ticket-count-stat': 'loadMore',
                },
                renderPagination: function(pagination) {
                    if(pagination.totalCount - pagination.lastItemNumber > 0 && pagination.lastItemNumber > 0) {
                        var remain = pagination.totalCount - pagination.lastItemNumber;
                        \$('.uv-ticket-count-stat').text(remain)
                        \$('.uv-ticket-accordion').removeClass('uv-ticket-accordion-expanded').removeClass('uv-ticket-accordion-no-count')
                    } else {
                        \$('.uv-ticket-accordion').addClass('uv-ticket-accordion-expanded').addClass('uv-ticket-accordion-no-count')
                    }
                },
                loadMore: function() {
                    threadCollection.syncData();
                }
            });

            // Ticket collaborator Item View
            var CollaboratorItem = Backbone.View.extend({
                tagName : \"a\",
                className: 'uv-btn-tag',
                template : _.template(\"";
        // line 2436
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 2436, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_DELETE_COLLABORATOR_FROM_TICKET"], "method", false, false, false, 2436)) {
            echo "<span class='uv-tag'><span class='uv-icon-remove-dark-before'></span><%- name %></span>";
        } else {
            echo "<span class='uv-tag-delete'><%- name %></span>";
        }
        echo "\"),
                events : {
                    'click .uv-tag' : 'confirmRemove'
                },
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));
                    return this;
                },
                unrender : function(response) {
                    if(response.alertMessage != undefined) {
                        app.appView.renderResponseAlert(response);
                    }
                },
                removeItem: function() {
                    ";
        // line 2450
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 2450, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_ADD_COLLABORATOR_TO_TICKET"], "method", false, false, false, 2450)) {
            // line 2451
            echo "                        self = this;
                        app.appView.showLoader();
                        this.model.destroy({
                            data : { 'ticketId' : this.model.attributes.ticketId },
                            success : function (model, response, options) {
                                app.appView.hideLoader();
                                self.\$el.remove();
                                self.unrender(response);
                            },
                            error: function (model, xhr, options) {
                                if(url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                                var response = warningResponse;
                                if(xhr.responseJSON)
                                    response = xhr.responseJSON;

                                app.appView.hideLoader();
                                app.appView.renderResponseAlert(response);
                            }
                        });
                    ";
        }
        // line 2472
        echo "                },
                confirmRemove: function(e) {
                    e.preventDefault();
                    ";
        // line 2475
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 2475, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_ADD_COLLABORATOR_TO_TICKET"], "method", false, false, false, 2475)) {
            // line 2476
            echo "                        app.appView.openConfirmModal(this);
                    ";
        }
        // line 2478
        echo "                }
            });

            // Ticket Collaborator View
            var CollaboratorList = Backbone.View.extend({
                el : \$(\".collaborator-list-block\"),
                events : {
                    'keypress .uv-field' : 'addCollaborator',
                    'focusout .uv-field' : 'removeErrorClass'
                },
                initialize : function() {
                    //Backbone.Validation.bind(this);
                },
                render : function() {
                    this.\$el.find(\".collaborator-list\").html('');
                    var self = this;
                    collaboratorOptionHtml = '';

                    if(collaboratorCollection.length) {
                        _.each(collaboratorCollection.models, function (item) {
                            this.renderCollaborator(item);
                        }, this);
                    }
                    ticketView.addCCCollaborators()
                },
                renderCollaborator : function (item) {
                    var collaborator = new CollaboratorItem({
                        model: item
                    });
                    this.\$el.find('.collaborator-list').append(collaborator.render().el);
                },
                removeErrorClass: function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    inputElement.removeClass('uv-field-error');
                    inputElement.parents('.uv-element-block').find('.uv-field-message').remove()
                },
                addCollaborator : function(e) {
                    ";
        // line 2515
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 2515, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_ADD_COLLABORATOR_TO_TICKET"], "method", false, false, false, 2515)) {
            // line 2516
            echo "                        var inputElement = Backbone.\$(e.currentTarget);
                        inputElement.removeClass('uv-field-error');
                        inputElement.parents('.uv-element-block').find('.uv-field-message').remove()
                        var text = inputElement.val().trim();

                        if (e.which === 13 && text) {
                            this.model = new CollaboratorModel();
                            self = this;
                            this.model.set({email: text})

                            if(this.model.isValid(true)) {
                                app.appView.showLoader();
                                this.model.save({},{
                                    success : function (model, response, options) {
                                        inputElement.val('');
                                        if(response.alertClass == \"success\") {
                                            collaboratorCollection.add(model);
                                        }
                                        self.render();
                                        app.appView.hideLoader();
                                        app.appView.renderResponseAlert(response);
                                    },
                                    error: function (model, xhr, options) {
                                        if(url = xhr.getResponseHeader('Location'))
                                            window.location = url;
                                        var response = warningResponse;
                                        if(xhr.responseJSON)
                                            response = xhr.responseJSON;

                                        app.appView.hideLoader();
                                        app.appView.renderResponseAlert(response);
                                    }
                                });
                            } else {
                                inputElement.addClass('uv-field-error');
                                if(text)
                                    inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>";
            // line 2552
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email address is invalid"), "html", null, true);
            echo "</span>\");
                            }
                        }
                    ";
        }
        // line 2556
        echo "                }
            });


            // Ticket Tag Item View
            var TagItem = Backbone.View.extend({
                tagName : \"a\",
                className : \"uv-btn-tag\",
                template : _.template(\"<span class='uv-tag'>";
        // line 2564
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 2564, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_DELETE_TAG"], "method", false, false, false, 2564)) {
            echo "<span class='uv-icon-remove-dark-before'></span>";
        }
        echo "<%- name %></span>\"),
                events : {
                    'click .uv-tag' : \"confirmRemove\"
                },
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));
                    return this;
                },
                unrender : function(response) {
                    if(response.alertMessage != undefined) {
                        tagListView.render();
                        app.appView.renderResponseAlert(response);
                    }
                },
                removeItem : function () {
                    ";
        // line 2579
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 2579, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_DELETE_TAG"], "method", false, false, false, 2579)) {
            // line 2580
            echo "                    self = this;
                    app.appView.showLoader();
                    this.model.destroy({
                        data : { 'ticketId' : ticketModel.id } ,
                        success : function (model, response, options) {
                            app.appView.hideLoader();
                            self.\$el.remove();
                            self.unrender(response);
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                    ";
        }
        // line 2601
        echo "                },
                confirmRemove: function(e) {
                    e.preventDefault();
                    ";
        // line 2604
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 2604, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_DELETE_TAG"], "method", false, false, false, 2604)) {
            // line 2605
            echo "                    app.appView.openConfirmModal(this)
                    ";
        }
        // line 2607
        echo "                }
            });

            // Ticket Tag View
            var TagList = Backbone.View.extend({
                el : \$(\".tag-list-block\"),
                events : {
                    'keypress .uv-field' : 'addTag',
                    'focusout .uv-field' : 'removeErrorClass',
                    'click .uv-dropdown-list li': 'addTag'
                },
                render : function() {
                    var self = this;
                    this.\$el.find(\".tag-list\").html('');
                    if(tagCollection.length) {
                        _.each(tagCollection.models, function (item) {
                            this.renderTag(item);
                        }, this);
                    }
                },
                renderTag : function (item) {
                    var tag = new TagItem({
                        model: item
                    });
                    this.\$el.find('.tag-list').append(tag.render().el);
                },
                addTag : function(e) {
                    ";
        // line 2634
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 2634, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_ADD_TAG"], "method", false, false, false, 2634)) {
            // line 2635
            echo "                        var currentElement = Backbone.\$(e.currentTarget);
                        if(currentElement.is('li')) {
                            var inputElement = currentElement.parents('.uv-field-block').find('.uv-dropdown-other');
                            var text = currentElement.text().trim();
                        } else {
                            var inputElement = currentElement;
                            var text = inputElement.val().trim();
                        }
                        inputElement.removeClass('uv-field-error');
                        inputElement.parents('.uv-element-block').find('.uv-field-message').remove()

                        if (currentElement.is('li') || (e.which === 13 && text)) {
                            if(text.length <= 20) {
                                if(tagCollection.isTagExist(text)) {
                                    var self = this;
                                    inputElement.val('');
                                    this.model = new TagModel();
                                    this.model.set({name:text});
                                    self = this;

                                    app.appView.showLoader();
                                    this.model.save({}, {
                                        success: function (model, response, options) {
                                            inputElement.parent().find(\"li:not(.uv-no-results)\").remove()
                                            inputElement.parent().find(\".uv-no-results\").show()
                                            if(!currentElement.is('li')) {
                                                inputElement.trigger('click')
                                            }
                                            if(response.alertClass == \"success\") {
                                                tagCollection.add(model);
                                                self.render();
                                            }

                                            app.appView.hideLoader();
                                            app.appView.renderResponseAlert(response);
                                        },
                                        error: function (model, xhr, options) {
                                            if(url = xhr.getResponseHeader('Location'))
                                                window.location = url;
                                            var response = warningResponse;
                                            if(xhr.responseJSON)
                                                response = xhr.responseJSON;

                                            app.appView.hideLoader();
                                            app.appView.renderResponseAlert(response);
                                        }
                                    });
                                } else {
                                    inputElement.addClass('uv-field-error');
                                    inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>";
            // line 2684
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tag with same name already exist"), "html", null, true);
            echo "</span>\");
                                }
                            } else {
                                inputElement.addClass('uv-field-error');
                                inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>";
            // line 2688
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Text length should be less than 20 charactors"), "html", null, true);
            echo "</span>\");
                            }
                        }
                    ";
        }
        // line 2692
        echo "                },
                removeErrorClass: function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    inputElement.removeClass('uv-field-error');
                    inputElement.parents('.uv-element-block').find('.uv-field-message').remove()
                },
            });

            // Ticket Label Item View
            var LabelItem = Backbone.View.extend({
                tagName : \"a\",
                className : \"uv-btn-label\",
                template : _.template(\"<span class='uv-tag'><span class='uv-icon-remove-before'></span><%- name %></span>\"),
                events : {
                    'click .uv-tag' : \"confirmRemove\"
                },
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));
                    return this;
                },
                unrender : function(response) {
                    if(response.alertMessage != undefined) {
                        labelListView.render();
                        app.appView.renderResponseAlert(response);
                    }
                },
                removeItem : function () {
                    self = this;
                    app.appView.showLoader();

                    this.model.destroy({
                        url : \"";
        // line 2723
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_update_ticket_attributes_xhr");
        echo "\",
                        data : { attribute :'label', 'ticketId': ticketModel.id, 'labelId': this.model.get('id') },
                        success : function (model, response, options) {
                            app.appView.hideLoader();
                            self.\$el.remove();
                            self.unrender(response);
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                },
                confirmRemove: function(e) {
                    e.preventDefault();
                    app.appView.openConfirmModal(this)
                }
            });

            // Ticket Label View
            var LabelList = Backbone.View.extend({
                el : \$(\".label-list-block\"),
                events : {
                    'keypress .uv-field' : 'addLabel',
                    'focusout .uv-field' : 'removeErrorClass',
                    'click .uv-dropdown-list li': 'addLabel'
                },
                render : function() {
                    var self = this;
                    this.\$el.find(\".label-list\").html('');
                    if(labelCollection.length) {
                        _.each(labelCollection.models, function (item) {
                            this.renderLabel(item);
                        }, this);
                    }
                },
                renderLabel : function (item) {
                    var label = new LabelItem({
                        model: item
                    });
                    lavelItem = label.render().el;
                    \$(lavelItem).attr('style', 'background:' + item.attributes.color)
                    this.\$el.find('.label-list').append(lavelItem);
                },
                addLabel : function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    if(currentElement.is('li')) {
                        var inputElement = currentElement.parents('.uv-field-block').find('.uv-dropdown-other');
                        var text = currentElement.text().trim();
                    } else {
                        var inputElement = currentElement;
                        var text = inputElement.val().trim();
                    }
                    inputElement.removeClass('uv-field-error');
                    inputElement.parents('.uv-element-block').find('.uv-field-message').remove()

                    if (currentElement.is('li') || (e.which === 13 && text)) {
                        if(text.length <= 20) {
                            if(labelCollection.isLabelExist(text)) {
                                var self = this;
                                inputElement.val('');
                                this.model = new LabelModel();
                                this.model.set({name:text});
                                self = this;

                                app.appView.showLoader();
                                this.model.save({}, {
                                    success: function (model, response, options) {
                                        inputElement.parent().find(\"li:not(.uv-no-results)\").remove()
                                        inputElement.parent().find(\".uv-no-results\").show()
                                        if(!currentElement.is('li')) {
                                            inputElement.trigger('click')
                                        }
                                        if(response.alertClass == \"success\") {
                                            labelCollection.add(model);
                                            self.render();
                                        }

                                        app.appView.hideLoader();
                                        app.appView.renderResponseAlert(response);
                                    },
                                    error: function (model, xhr, options) {
                                        if(url = xhr.getResponseHeader('Location'))
                                            window.location = url;
                                        var response = warningResponse;
                                        if(xhr.responseJSON)
                                            response = xhr.responseJSON;

                                        app.appView.hideLoader();
                                        app.appView.renderResponseAlert(response);
                                    }
                                });
                            } else {
                                inputElement.addClass('uv-field-error');
                                inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>";
        // line 2823
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label with same name already exist"), "html", null, true);
        echo "</span>\");
                            }
                        } else {
                            inputElement.addClass('uv-field-error');
                            inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>";
        // line 2827
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Text length should be less than 20 charactors"), "html", null, true);
        echo "</span>\");
                        }
                    }
                },
                removeErrorClass: function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    inputElement.removeClass('uv-field-error');
                    inputElement.parents('.uv-element-block').find('.uv-field-message').remove()
                },
            });

            // Ticket Router
            var Router = Backbone.Router.extend({
                routes: {
                    'thread/:thread' : 'threadRequestedId'
                },
                threadRequestedId: function(thread){
                    threadCollection.threadRequestedId = thread;
                },
                scrollPage : function(divId) {
                    if(\$(divId).length){
                        \$('li a[href=\"'+divId+'\"]').trigger('click');
                        \$('.uv-ticket-scroll-region').animate({
                            scrollTop: \$(divId).offset().top
                        }, 'slow');
                    } else if(divId == '#') { //scroll to last thread added
                        if(threadCollection.fullCollection.length)
                            this.scrollPage('#thread' + threadCollection.fullCollection.at(0).id);
                    }
                }
            });

            var customerForm = new CustomerForm({
                el : \$(\".uv-main-info-update-block\"),
                model : new CustomerModel()
            });

            var ticketNavigation = \$.parseJSON('";
        // line 2864
        echo json_encode((isset($context["ticketNavigationIteration"]) || array_key_exists("ticketNavigationIteration", $context) ? $context["ticketNavigationIteration"] : (function () { throw new RuntimeError('Variable "ticketNavigationIteration" does not exist.', 2864, $this->source); })()));
        echo "');

            var ticketModel = new TicketModel({
                id : \"";
        // line 2867
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2867, $this->source); })()), "id", [], "any", false, false, false, 2867), "html", null, true);
        echo "\",
                status : \"";
        // line 2868
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2868, $this->source); })()), "status", [], "any", false, false, false, 2868), "id", [], "any", false, false, false, 2868), "html", null, true);
        echo "\",
                priority : \"";
        // line 2869
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2869, $this->source); })()), "priority", [], "any", false, false, false, 2869), "id", [], "any", false, false, false, 2869), "html", null, true);
        echo "\",
                group : \"";
        // line 2870
        ((twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2870, $this->source); })()), "supportGroup", [], "any", false, false, false, 2870)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2870, $this->source); })()), "supportGroup", [], "any", false, false, false, 2870), "id", [], "any", false, false, false, 2870), "html", null, true))) : (print ("")));
        echo "\",
                subGroup : \"";
        // line 2871
        ((twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2871, $this->source); })()), "supportTeam", [], "any", false, false, false, 2871)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2871, $this->source); })()), "supportTeam", [], "any", false, false, false, 2871), "id", [], "any", false, false, false, 2871), "html", null, true))) : (print ("")));
        echo "\",
                agent : \"\",
                profileImage : \"\",
                isTrashed : \"";
        // line 2874
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2874, $this->source); })()), "isTrashed", [], "any", false, false, false, 2874), "html", null, true);
        echo "\"
            });

            ticketApp.ticketView = ticketView = new TicketView({
                model: ticketModel
            });

            uvdesk.ticket.model = ticketModel;

            threadCollection = new ThreadCollection();
            var threadList = new ThreadList();
            var pagination = new Pagination();

            var collaboratorCollection = new CollaboratorCollection(\$.parseJSON('";
        // line 2887
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 2887, $this->source); })()), "getTicketCollaborators", [0 => twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2887, $this->source); })()), "id", [], "any", false, false, false, 2887)], "method", false, false, false, 2887));
        echo "'));
            var collaboratorList = new CollaboratorList();
            collaboratorList.render();

            var tagCollection = new TagCollection(\$.parseJSON('";
        // line 2891
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 2891, $this->source); })()), "getTicketTagsById", [0 => twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2891, $this->source); })()), "id", [], "any", false, false, false, 2891)], "method", false, false, false, 2891));
        echo "'));
            var tagListView = new TagList();
            tagListView.render();

            var labelCollection = new LabelCollection(\$.parseJSON('";
        // line 2895
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 2895, $this->source); })()), "getTicketLabels", [0 => twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2895, $this->source); })()), "id", [], "any", false, false, false, 2895)], "method", false, false, false, 2895));
        echo "'));
            var labelListView = new LabelList();
            labelListView.render();

            var router = new Router();
            Backbone.history.start({push_state:true});

            threadCollection.syncData();
        });
    </script>

    <script>
        var sfTinyMceNew = \$.extend({}, sfTinyMce);
        var toolbarOptions = sfTinyMce.options.toolbar;

        sfTinyMce.init({
            selector : '.uv-ticket-reply textarea',
            toolbar: toolbarOptions + ' | translate',
            mentions : getMentions(),
            images_upload_url: \"\",
            setup: function(editor) {
                editor.on('keydown', function(e) { /** for pageup, pagedown keys **/
                    if(e.keyCode == 34 || e.keyCode == 33){
                        e.preventDefault();
                    }
                });
                addTranslateButton(editor);
            }
        });

        function InitTinyMce(selector) {
            let sfTinyMceNew2 = \$.extend({}, sfTinyMceNew);
            sfTinyMceNew2.init({
                selector : selector,
                mentions : getMentions(),
                setup: function(editor) {
                    addTranslateButton(editor);
                }
            });
        }

        function getMentions(){
            return {
                delimiter: ['#'],
                items: 15,
                source: function(){
                    return [
                        {
                            name : \"";
        // line 2943
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket Id"), "html", null, true);
        echo "\",
                            value : \"";
        // line 2944
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2944, $this->source); })()), "id", [], "any", false, false, false, 2944), "html", null, true);
        echo "\",
                        },
                        {
                            name : \"";
        // line 2947
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
        echo "\",
                            value : \"";
        // line 2948
        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2948, $this->source); })()), "subject", [], "any", false, false, false, 2948), ["
" => " ", "" => " "]), "html", null, true);
        echo "\",
                        },
                        {
                            name : \"";
        // line 2951
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        echo "\",
                            value : \"";
        // line 2952
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2952, $this->source); })()), "status", [], "any", false, false, false, 2952), "description", [], "any", false, false, false, 2952), "html", null, true);
        echo "\",
                        },
                        {
                            name : \"";
        // line 2955
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Priority"), "html", null, true);
        echo "\",
                            value : \"";
        // line 2956
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2956, $this->source); })()), "priority", [], "any", false, false, false, 2956), "description", [], "any", false, false, false, 2956)), "html", null, true);
        echo "\",
                        },
                        {
                            name : \"";
        // line 2959
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
        echo "\",
                            value : \"";
        // line 2960
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2960, $this->source); })()), "type", [], "any", false, false, false, 2960)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2960, $this->source); })()), "type", [], "any", false, false, false, 2960), "description", [], "any", false, false, false, 2960)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"))), "html", null, true);
        echo "\",
                        },
                        {
                            name : \"";
        // line 2963
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
        echo "\",
                            value : \"";
        // line 2964
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2964, $this->source); })()), "supportGroup", [], "any", false, false, false, 2964)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2964, $this->source); })()), "supportGroup", [], "any", false, false, false, 2964), "description", [], "any", false, false, false, 2964)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"))), "html", null, true);
        echo "\",
                        },
                        {
                            name : \"";
        // line 2967
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team"), "html", null, true);
        echo "\",
                            value : \"";
        // line 2968
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2968, $this->source); })()), "supportTeam", [], "any", false, false, false, 2968)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2968, $this->source); })()), "supportTeam", [], "any", false, false, false, 2968), "description", [], "any", false, false, false, 2968)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"))), "html", null, true);
        echo "\",
                        },
                        {
                            name : \"";
        // line 2971
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Name"), "html", null, true);
        echo "\",
                            value : \"";
        // line 2972
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 2972, $this->source); })()), "name", [], "any", false, false, false, 2972), "html", null, true);
        echo "\",
                        },
                        {
                            name : \"";
        // line 2975
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Email"), "html", null, true);
        echo "\",
                            value : \"";
        // line 2976
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 2976, $this->source); })()), "email", [], "any", false, false, false, 2976), "html", null, true);
        echo "\",
                        },
                        {
                            name : \"";
        // line 2979
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent Name"), "html", null, true);
        echo "\",
                            value : \"";
        // line 2980
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["ticketAgent"] ?? null), "name", [], "any", true, true, false, 2980)) ? (twig_get_attribute($this->env, $this->source, (isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 2980, $this->source); })()), "name", [], "any", false, false, false, 2980)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"))), "html", null, true);
        echo "\",
                        },
                        {
                            name : \"";
        // line 2983
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent Email"), "html", null, true);
        echo "\",
                            value : \"";
        // line 2984
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["ticketAgent"] ?? null), "email", [], "any", true, true, false, 2984)) ? (twig_get_attribute($this->env, $this->source, (isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 2984, $this->source); })()), "email", [], "any", false, false, false, 2984)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"))), "html", null, true);
        echo "\",
                        }
                    ];
                },
                insert: function(item) {
                    return '<span>' + item.value + '</span>';
                }
            };
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@UVDeskCoreFramework/ticket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4389 => 2984,  4385 => 2983,  4379 => 2980,  4375 => 2979,  4369 => 2976,  4365 => 2975,  4359 => 2972,  4355 => 2971,  4349 => 2968,  4345 => 2967,  4339 => 2964,  4335 => 2963,  4329 => 2960,  4325 => 2959,  4319 => 2956,  4315 => 2955,  4309 => 2952,  4305 => 2951,  4298 => 2948,  4294 => 2947,  4288 => 2944,  4284 => 2943,  4233 => 2895,  4226 => 2891,  4219 => 2887,  4203 => 2874,  4197 => 2871,  4193 => 2870,  4189 => 2869,  4185 => 2868,  4181 => 2867,  4175 => 2864,  4135 => 2827,  4128 => 2823,  4025 => 2723,  3992 => 2692,  3985 => 2688,  3978 => 2684,  3927 => 2635,  3925 => 2634,  3896 => 2607,  3892 => 2605,  3890 => 2604,  3885 => 2601,  3862 => 2580,  3860 => 2579,  3840 => 2564,  3830 => 2556,  3823 => 2552,  3785 => 2516,  3783 => 2515,  3744 => 2478,  3740 => 2476,  3738 => 2475,  3733 => 2472,  3710 => 2451,  3708 => 2450,  3687 => 2436,  3591 => 2343,  3561 => 2316,  3497 => 2255,  3484 => 2245,  3477 => 2241,  3450 => 2217,  3437 => 2207,  3430 => 2203,  3403 => 2179,  3379 => 2157,  3335 => 2115,  3317 => 2100,  3307 => 2093,  3299 => 2088,  3271 => 2063,  3265 => 2060,  3235 => 2033,  3128 => 1929,  3123 => 1927,  3074 => 1881,  2799 => 1609,  2789 => 1602,  2781 => 1597,  2771 => 1590,  2763 => 1585,  2753 => 1578,  2744 => 1572,  2737 => 1568,  2731 => 1565,  2719 => 1556,  2707 => 1547,  2701 => 1544,  2694 => 1540,  2688 => 1537,  2666 => 1518,  2651 => 1506,  2641 => 1499,  2634 => 1495,  2616 => 1480,  2596 => 1463,  2588 => 1458,  2584 => 1457,  2576 => 1452,  2568 => 1447,  2563 => 1445,  2553 => 1438,  2549 => 1437,  2524 => 1417,  2519 => 1415,  2504 => 1403,  2484 => 1386,  2477 => 1382,  2469 => 1377,  2461 => 1374,  2456 => 1372,  2443 => 1362,  2440 => 1361,  2434 => 1358,  2429 => 1356,  2426 => 1355,  2424 => 1354,  2418 => 1351,  2413 => 1349,  2407 => 1347,  2401 => 1345,  2398 => 1344,  2392 => 1341,  2389 => 1340,  2387 => 1339,  2375 => 1330,  2368 => 1326,  2356 => 1317,  2351 => 1315,  2346 => 1313,  2334 => 1304,  2329 => 1302,  2324 => 1300,  2312 => 1291,  2280 => 1262,  2274 => 1259,  2270 => 1258,  2264 => 1256,  2254 => 1255,  2242 => 1252,  2239 => 1251,  2226 => 1240,  2220 => 1238,  2214 => 1236,  2212 => 1235,  2207 => 1233,  2199 => 1228,  2194 => 1226,  2188 => 1224,  2183 => 1221,  2178 => 1218,  2175 => 1217,  2165 => 1208,  2162 => 1184,  2157 => 1162,  2148 => 1155,  2138 => 1147,  2133 => 1145,  2129 => 1144,  2125 => 1143,  2121 => 1142,  2116 => 1141,  2114 => 1140,  2110 => 1139,  2105 => 1137,  2098 => 1133,  2088 => 1126,  2084 => 1125,  2079 => 1123,  2073 => 1120,  2064 => 1114,  2056 => 1109,  2051 => 1107,  2043 => 1104,  2038 => 1102,  2035 => 1101,  2032 => 1100,  2024 => 1094,  2015 => 1088,  2011 => 1087,  2006 => 1085,  2000 => 1082,  1991 => 1076,  1983 => 1071,  1978 => 1069,  1966 => 1060,  1962 => 1059,  1955 => 1055,  1952 => 1054,  1941 => 1051,  1936 => 1050,  1932 => 1049,  1926 => 1046,  1903 => 1026,  1900 => 1025,  1889 => 1022,  1884 => 1021,  1880 => 1020,  1873 => 1016,  1864 => 1010,  1854 => 1003,  1846 => 1000,  1841 => 998,  1838 => 997,  1828 => 988,  1823 => 986,  1819 => 985,  1815 => 984,  1811 => 983,  1806 => 982,  1804 => 981,  1800 => 980,  1795 => 978,  1789 => 975,  1779 => 968,  1775 => 967,  1770 => 965,  1764 => 962,  1754 => 955,  1745 => 949,  1740 => 947,  1728 => 938,  1724 => 937,  1717 => 933,  1714 => 932,  1703 => 929,  1698 => 928,  1694 => 927,  1687 => 923,  1666 => 905,  1659 => 903,  1654 => 901,  1651 => 900,  1646 => 896,  1640 => 894,  1638 => 893,  1634 => 892,  1630 => 891,  1624 => 888,  1617 => 884,  1612 => 881,  1601 => 872,  1594 => 867,  1590 => 865,  1586 => 863,  1578 => 861,  1576 => 860,  1570 => 859,  1567 => 858,  1565 => 857,  1561 => 855,  1552 => 852,  1545 => 851,  1541 => 850,  1536 => 848,  1533 => 847,  1530 => 846,  1525 => 842,  1519 => 840,  1513 => 838,  1511 => 837,  1507 => 835,  1504 => 833,  1501 => 832,  1495 => 830,  1485 => 828,  1482 => 827,  1472 => 825,  1470 => 824,  1463 => 820,  1457 => 816,  1449 => 814,  1446 => 813,  1444 => 812,  1437 => 810,  1429 => 809,  1422 => 804,  1415 => 799,  1411 => 798,  1407 => 797,  1403 => 795,  1393 => 793,  1391 => 792,  1385 => 791,  1374 => 787,  1370 => 786,  1361 => 780,  1354 => 776,  1350 => 774,  1340 => 765,  1333 => 760,  1326 => 755,  1319 => 750,  1313 => 748,  1311 => 747,  1308 => 746,  1303 => 744,  1298 => 743,  1296 => 742,  1291 => 740,  1288 => 739,  1282 => 737,  1280 => 736,  1272 => 730,  1269 => 729,  1264 => 726,  1260 => 725,  1256 => 724,  1252 => 723,  1247 => 722,  1243 => 719,  1237 => 714,  1231 => 712,  1225 => 711,  1216 => 704,  1207 => 698,  1203 => 697,  1198 => 695,  1192 => 691,  1190 => 690,  1185 => 688,  1180 => 685,  1173 => 679,  1167 => 676,  1164 => 675,  1162 => 674,  1157 => 672,  1152 => 669,  1138 => 657,  1134 => 656,  1129 => 654,  1120 => 648,  1115 => 645,  1108 => 639,  1102 => 636,  1099 => 635,  1094 => 632,  1083 => 630,  1079 => 629,  1075 => 628,  1068 => 624,  1063 => 622,  1056 => 618,  1051 => 617,  1049 => 616,  1044 => 614,  1041 => 613,  1036 => 609,  1030 => 606,  1027 => 605,  1022 => 602,  1011 => 600,  1007 => 599,  1002 => 597,  995 => 593,  990 => 591,  983 => 587,  978 => 586,  976 => 585,  971 => 583,  968 => 582,  963 => 578,  957 => 575,  954 => 574,  949 => 571,  938 => 569,  934 => 568,  926 => 563,  921 => 561,  912 => 558,  910 => 557,  905 => 555,  902 => 554,  897 => 550,  891 => 548,  885 => 544,  874 => 542,  870 => 541,  865 => 539,  856 => 536,  854 => 535,  849 => 533,  846 => 532,  841 => 528,  835 => 525,  832 => 524,  826 => 520,  813 => 518,  809 => 517,  804 => 515,  795 => 512,  793 => 511,  789 => 510,  784 => 508,  781 => 507,  776 => 503,  770 => 501,  765 => 498,  754 => 495,  749 => 494,  745 => 493,  737 => 488,  732 => 486,  723 => 483,  720 => 482,  718 => 481,  713 => 479,  710 => 478,  706 => 475,  703 => 473,  695 => 468,  689 => 465,  685 => 464,  677 => 459,  672 => 457,  664 => 452,  659 => 450,  651 => 445,  646 => 443,  640 => 440,  632 => 435,  628 => 434,  624 => 432,  621 => 431,  614 => 425,  608 => 423,  602 => 421,  600 => 420,  595 => 419,  593 => 418,  589 => 417,  582 => 413,  578 => 412,  571 => 408,  567 => 407,  563 => 405,  558 => 401,  554 => 399,  552 => 398,  549 => 397,  543 => 395,  541 => 394,  537 => 393,  533 => 392,  528 => 389,  522 => 387,  515 => 385,  513 => 384,  508 => 382,  505 => 381,  502 => 379,  493 => 374,  485 => 371,  475 => 367,  472 => 365,  462 => 364,  266 => 177,  216 => 130,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}{{ '#' ~ ticket.id ~ ' ' ~ ticket.subject }}{% endblock %}

{% block templateCSS %}
    <style>
        .uv-aside-ticket-labels.label-list-block .uv-btn-label {
            cursor: pointer;
        }
        .uv-main-info-update-block .uv-element-block {
            margin: 10px 0px !important;
        }
        .uv-tab-ellipsis {
            position: relative;
        }
        .uv-inner-section .uv-view .uv-ticket-section .uv-ticket-accordion .uv-ticket-wrapper {
            display: block;
        }
        .uv-element-block.cc-bcc .uv-dropdown-container {
            padding: 10px 20px 10px 20px;
        }
        .uv-action-buttons .uv-dropdown-list ul li {
            padding: 5px 0px !important;
        }
        .uv-action-buttons{
            margin-bottom: 40px !important;
        }
        .uv-ticket-reply .uv-element-block-textarea, .thread-edit-container .uv-element-block-textarea {
            width: 100% !important;
            max-width: 100% !important;
        }
        .thread-edit-container .uv-field-message {
            color: #FF5656 !important;
        }
        .uv-element-block .mce-tinymce {
            margin-top: 10px;
        }
        .uv-ticket-reply .uv-element-block-textarea .uv-field-message, .thread-edit-container .uv-element-block-textarea .uv-field-message {
            margin-top: 15px;
        }
        .thread-edit-container {
            margin-top: 10px;
        }
        .uv-ticket-viewer-bar{
            transition: 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            height: 0px;
        }
        .uv-ticket-viewer-bar.active{
            height: 50px;
            margin-bottom: 10px;
            border-bottom: 1px dotted #f97278;
        }
        .uv-ticket-viewer-single {
            display: inline-block;
            margin-right: 5px;
        }
        .uv-ticket-viewer-single img {
            width: 40px;
            border-radius: 3px;
            display: inline-block;
            vertical-align: middle;
        }
        .uv-ticket-viewer-single.uv-first {
            width: 40px;
            height: 40px;
            background-image: linear-gradient(to right, #f97278 0%, #f181bf 100%);
            text-align: center;
            vertical-align: top;
            line-height: 30px;
            border-radius: 20px;
        }
        .uv-ticket-viewer-close {
            position: absolute;
            top: 0px;
            width: 40px;
            height: 40px;
            background: #f1f1f1;
            text-align: center;
            line-height: 35px;
            border-radius: 2px;
            opacity: .6;
            text-indent: 6px;
        }
        .uv-ticket-viewer-list {
            display: inline;
        }
        span.viewer-firstletter.img-thumbnail {
            width: 40px;
            height: 40px;
            display: block;
            text-align: center;
            font-size: 20px;
            font-style: italic;
            border: 1px dotted;
            border-radius: 4px;
            line-height: 35px;
        }
        .uv-ticket-viewer-close {
            display:none;
        }
        .uv-ticket-viewer-single:hover .uv-ticket-viewer-close {
            display: block;
        }
        .uv-hide{
            display: none;
        }
        .uv-info{
            background: #7C70F4;
        }
        .uv-ticket-viewer-list .uv-icon-eye-light{
            animation: jelly 0.8s infinite alternate ease-in-out;
        }
        .uv-aside-brick .uv-loader {
            position: absolute;
            transform: scale(0.5);
            top: 22px;
            right: 45px;
        }
        .uv-app-glyph-customfields {
            width: 20px;
            height: 20px;
            background-position: center center;
            background-repeat: no-repeat;
            cursor: pointer;
            display: inline-block;
            vertical-align: middle;
            margin: 5px 0px 5px 10px;
            background-image: url(\"{{ asset('bundles/uvdeskcoreframework/images/app-glyph-custom.svg') }}\");
        }
        .uv-no-threads {
            padding: 80px 20px;
            text-align: center;
        }
        .uv-ticket-strip-label {
            position: relative;
        }
        input.input-copy-thread-link {
            position: absolute;
            bottom: 10px;
            width: 400px;
        }
        .uv-ticket-action-bar-fixed{
            position: fixed;
            width: 100%;
            background: #fff;
            z-index: 999;
        }
        .uv-ticket-action-bar-fixed .uv-ticket-action-bar-rt{
            position: fixed;
            right: 0px;
            margin-top: 10px;
        }
        .uv-ticket-action-bar-fixed + .uv-ticket-viewer-bar{
            margin-top: 70px;
        }
        .uv-ticket-main {
            word-wrap: break-word;
        }
        @media only screen and (max-width: 900px) {
            .uv-ticket-action-bar-fixed{
                position: relative;
            }
            .uv-ticket-action-bar-fixed + .uv-ticket-viewer-bar{
                margin-top: 0px;
            }
            .uv-ticket-action-bar-fixed .uv-ticket-action-bar-rt{
                position: relative;
            }
        }
        .uv-icon-pin {
            width: 18px;
            height: 18px;
            display: inline-block;
            vertical-align: middle;
            background-image: url(\"{{ asset('bundles/uvdeskcoreframework/images/uvdesk-sprite.svg') }}\");
            background-position: 0px -396px;
            transition: transform .15s;
            transform: scale(1);
        }
        .uv-icon-pinned {
            background-position: -19px -396px;
        }
        .uv-header-fix{
            display: inline-block;
            margin: 0px 10px 0px 5px;
        }
        .uv-header-fix + .uv-tabs{
            display: inline-block;
        }
        .uv-ticket-section span.uv-mail-status {
            width: 16px;
            height: 16px;
            background: url('../../../../../bundles/webkuldefault/images/mail-status.png');
            cursor: help;
        }
        .uv-ticket-section .uv-mail-status.uv-mail-processed {
            background-position: 0 0;
        }
        .uv-ticket-section .uv-mail-status.uv-mail-open,.uv-ticket-section .uv-mail-status.uv-mail-delivered,.uv-ticket-section .uv-mail-status.uv-mail-click {
            background-position: -38px 0;
        }
        .uv-ticket-section .uv-mail-status.uv-mail-spam,.uv-ticket-section .uv-mail-status.uv-mail-deferred,.uv-ticket-section .uv-mail-spamreport {
            background-position: -55px 0;
        }
        .uv-ticket-section .uv-mail-status.uv-mail-bounce,.uv-ticket-section .uv-mail-status.uv-mail-dropped {
            background-position: -73px 0;
        }
        @media only screen and (max-width: 1480px) {
            .uv-inner-section .uv-view .uv-ticket-action-bar-fixed.uv-ticket-action-bar .uv-ticket-action-bar-rt{
                width: auto;
            }
        }
        @media only screen and (max-width: 1300px) {
            .uv-header-fix{
                margin: 0px 10px 0px 10px;
            }
        }

        @media only screen and (max-width: 900px) {
            .uv-ticket-action-bar-fixed{
                position: relative;
            }
            .uv-ticket-action-bar-fixed + .uv-ticket-viewer-bar{
                margin-top: 0px;
            }
            .uv-ticket-action-bar-fixed .uv-ticket-action-bar-rt{
                position: relative;
            }
            .uv-inner-section .uv-view .uv-ticket-action-bar.uv-ticket-action-bar-fixed .uv-ticket-action-bar-lt{
                width: 70%;
            }
            .uv-inner-section .uv-view .uv-ticket-action-bar.uv-ticket-action-bar-fixed .uv-ticket-action-bar-rt {
                width: 21%;
                padding-right: 33px;
            }
            .uv-header-fix{
                display: none;
            }
        }

        .uv-inner-section .uv-view .uv-ticket-scroll-region {
            margin-bottom: 0px;
        }

        .uv-inner-section .uv-view .uv-ticket-action-bar.uv-ticket-action-bar-fixed .uv-ticket-action-bar-rt {
            width: 21%;
            padding-right: 33px;
        }
        @media print {
            .uv-navbar,.uv-ticket-action-bar, .uv-sidebar, .uv-aside>.uv-aside-brick, .uv-aside-back, .uv-ticket-fixed-region, .uv-ticket-main.uv-ticket-reply, .uv-upload-actions, .uv-filter-view, .uv-dropdown-list>.uv-dropdown-container,.uv-notifications-wrapper,.uv-pop-up-overlay,.uv-loader-view, .uv-loader, .uv-navbar,.uv-ticket-count-wrapper {
                display: none !important;
            }
            .uv-ticket-scroll-region {
                overflow: visible;
                margin-bottom: 0 !important;
            }
            .uv-paper {
                padding-left: 0px !important; /* uv-view */
            }
            .uv-wrapper {
                left: 0 !important;
                margin: 0 !important;
            }
            .uv-inner-section .uv-view .uv-ticket-scroll-region  .uv-ticket-main-rt {
                width: 80%;
            }
            .uv-paper,.uv-view ,.uv-ticket-scroll-region, .uv-wrapper  {
                position: initial !important;
            }
        }

        .uv-ticket-action-bar-rt .app-glyph {
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
            cursor: pointer;
            height: 20px;
            width: 20px;
        }

        .uv-ticket-action-bar-rt .app-glyph:last-child {
            margin-right: 0px;
        }

        blockquote {
            background: #f9f9f9;
            border-left: 4px solid #ccc;
            margin: 1.5em 10px;
            padding: 0.5em 10px;
            quotes: \"\\201C\"\"\\201D\"\"\\2018\"\"\\2019\";
        }

        blockquote:before {
            color: #ccc;
            content: open-quote;
            font-size: 3em;
            line-height: 0.1em;
            margin-right: 0.05em;
            vertical-align: -0.4em;
        }

        blockquote p {
            display: inline;
        }

        .uv-dropdown-list ul li {
            padding : 8px 0px !important;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        }
        ::-webkit-scrollbar-thumb {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        }

        .uv-aside-select.search .uv-dropdown-list.uv-bottom-left, .uv-aside-select .uv-dropdown-list.uv-bottom-right {
            top: 25px;
            width: 100%;
        }

        .uv-aside-select.search .uv-dropdown-list ul{
            padding: 0px 10px;
        }

        .uv-aside-select.search .uv-dropdown-container {
            padding: 8px 10px 4px;
            overflow-y: auto;
            max-height: 280px;
            border-bottom: solid 1px #D3D3D3;
        }

        .uv-aside-select.search .uv-dropdown-list ul.uv-agents-list li {
            border-bottom: solid 1px #D3D3D3;
            border-top:0px;
        }

        .uv-search-inline{
            width: 100%;
        }

        .uv-dropdown-list ul.uv-search-list li:first-child {
            border-top: none;
        }

        .uv-search-sm input.uv-search-field { 
           border: solid 1px #B1B1AE;
           border-radius: 3px;
           color: #333333;
           font-size: 15px;
           box-sizing: border-box;
           padding: 7px 10px 9px 33px;
           width: 100%;
        }
        
    </style>
{% endblock %}

{% block pageContent %}
    <div class=\"uv-inner-section\">
        {# Ticket Sidebar #}
        <div class=\"uv-aside\" {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}style=\"display: none;\"{% endif %} >
            <div class=\"uv-main-info-block\">
                <div class=\"uv-aside-head\">
                    <div class=\"uv-aside-title\">
                        <h6>{{ 'Ticket'|trans }} #{{ ticket.id }}</h6>
                    </div>
                    <div class=\"uv-aside-back\">
                        <span onclick=\"history.length > 1 ? history.go(-1) : window.location = '{{ path(\"helpdesk_member_ticket_collection\") }}';\">{{ 'Back'|trans }}</span>
                    </div>
                </div>

                {# Ticket Information #}
                <div class=\"uv-aside-brick\">
                    {# Customer Details #}
                    <div class=\"uv-aside-customer-block\">
                        <h3>{{ 'Customer Information'|trans }}</h3>
                        <div class=\"uv-aside-avatar\">
                            {% if customer.thumbnail %}
                                <img src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}{{ customer.thumbnail }}\">
                            {% else %}
                                <img src=\"{{ asset(default_customer_image_path) }}\">
                            {% endif %}
                        </div>

                        <div class=\"uv-aside-customer-info\">
                            <span>{{ customer.name }}</span>
                            <span>{{ customer.email }}</span>
                            {% if customer.contactNumber %}
                                <span>{{ customer.contactNumber }}</span>
                            {% endif %}

                            {% if user_service.isAccessAuthorized('ROLE_AGENT_MANAGE_CUSTOMER') %}
                                <span class=\"uv-customize\" data-toggle=\"tooltip\" title=\"Edit Customer Information\"></span>
                            {% endif %}
                        </div>
                    </div>

                    {# Ticket Details #}
                    <div class=\"uv-aside-ticket-block\">
                        <div class=\"uv-aside-ticket-brick\">
                            <h3>{{ 'Total Replies'|trans }}</h3>
                            <span class=\"uv-icon-replies\"></span> <span>{{ totalReplies }}</span>
                        </div>

                        <div class=\"uv-aside-ticket-brick\">
                            <h3>{{ 'TimeStamp'|trans }}</h3>
                            <span class=\"uv-icon-timestamp\"></span> <span>{{ ticket_service.timeZoneConverter(initialThread.createdAt) }}</span>
                        </div>

                        <div class=\"uv-aside-ticket-brick\">
                            <h3>{{ 'Channel'|trans }}</h3>
                            {% if ticket.source == 'email' %}
                                <span class=\"uv-icon-channel uv-channel-email\"></span> <span>{{ 'Email'|trans }}</span>
                            {% elseif ticket.source == 'formbuilder' %}
                                <span class=\"uv-icon-channel uv-channel-form\"></span> <span>{{ 'Formbuilder'|trans }}</span>
                            {% else %}
                            <span class=\"uv-icon-channel uv-channel-web\"></span> <span>{{ 'Website'|trans }}</span>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>

            {# Edit Customer Info #}
            {% if user_service.isAccessAuthorized('ROLE_AGENT_MANAGE_CUSTOMER') %}
                <div class=\"uv-main-info-update-block uv-no-error-success-icon\" style=\"display: none\">
                    <div class=\"uv-aside-head\">
                        <div class=\"uv-aside-title\"><h6>{{ 'Edit Customer'|trans }}</h6></div>
                        <div class=\"uv-aside-back\"><span>{{ 'Back'|trans }}</span></div>
                    </div>

                    <div class=\"uv-aside-brick\">
                        <form method=\"post\">
                            <input class=\"uv-field\" name=\"id\" type=\"hidden\" value=\"{{ customer.id }}\">

                            <div class=\"uv-element-block\">
                                <label class=\"uv-field-label\">{{ 'Name'|trans }}</label>
                                <div class=\"uv-field-block\">
                                    <input class=\"uv-field\" name=\"name\" type=\"text\" value=\"{{ customer.name }}\">
                                </div>
                            </div>

                            <div class=\"uv-element-block\">
                                <label class=\"uv-field-label\">{{ 'Email'|trans }}</label>
                                <div class=\"uv-field-block\">
                                    <input class=\"uv-field\" name=\"email\" type=\"text\" value=\"{{ customer.email }}\">
                                </div>
                            </div>

                            <div class=\"uv-element-block\">
                                <label class=\"uv-field-label\">{{ 'Contact Number'|trans }}</label>
                                <div class=\"uv-field-block\">
                                    <input class=\"uv-field\" name=\"contactNumber\" type=\"text\" value=\"{{ customer.contactNumber }}\">
                                </div>
                            </div>

                            <div class=\"uv-action-buttons\">
                                <a class=\"uv-btn update-btn\" href=\"#\">{{ 'Update'|trans }}</a>
                                <a class=\"uv-btn cancel-btn\" href=\"#\">{{ 'Cancel'|trans }}</a>
                            </div>

                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token_generator.refreshToken('') }}\"/>
                        </form>
                    </div>
                </div>
            {% endif %}

            {# Edit Ticket #}
            <div class=\"uv-aside-brick\">
                <div class=\"uv-aside-ticket-actions\">
                    {# Update Ticket Agent #}
                    <div class=\"uv-aside-select search\">
                        <label class=\"uv-aside-select-label\">{{ 'Agent'|trans }}</label>
                        <div>
                            {% set agentName = ticketAgent ? ticketAgent.name : 'Not Assigned'|trans %}
                            {% if ticket.isTrashed == false and user_service.isAccessAuthorized('ROLE_AGENT_ASSIGN_TICKET') %}
                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"{{ ticketAgent ? ticketAgent.id : '' }}\">{{ agentName }}</span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>{{ 'Agent'|trans }}</label>
                                        <div class=\"uv-search-sm\">
                                            <input type=\"text\" class=\"uv-search-field uv-search-inline\" placeholder=\"{{ 'Search'|trans }}\">
                                        </div>
                                    </div>

                                    <ul class=\"uv-agents-list agent\" data-action=\"agent\">
                                        {% for agent in user_service.getAgentPartialDataCollection() %}
                                            <li data-index=\"{{ agent.id }}\">
                                                <img src=\"{{ agent.smallThumbnail != null ? app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') ~ agent.smallThumbnail : asset(default_agent_image_path) }}\"/> {{ agent.name }}
                                            </li>
                                        {% endfor %}
                                    </ul>
                                </div>
                            {% else %}
                                <span class=\"uv-aside-select-value\">{{ agentName }}</span>
                            {% endif %}
                        </div>
                    </div>

                    {# Update Ticket Priority #}
                    <div class=\"uv-aside-select\">
                        <label class=\"uv-aside-select-label\">{{ 'Priority'|trans }}</label>
                        <div>
                            <span class=\"uv-list-ticket-priority\" style=\"background: {{ ticket.priority.colorCode }}\"></span>
                            {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_PRIORITY') %}
                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"{{ ticket.priority.id }}\">{{ ticket.priority.description|trans }}</span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>{{ 'Priority'|trans }}</label>
                                        <ul class=\"priority\" data-action=\"priority\">
                                            {% for priority in ticketPriorityCollection %}
                                                <li data-index=\"{{ priority.id }}\" data-color=\"{{ priority.colorCode }}\"><a href=\"#\">{{ priority.description|trans }}</a></li>
                                            {% endfor %}
                                        </ul>
                                    </div>
                                </div>
                            {% else %}
                                <span class=\"uv-aside-select-value\">
                                    {{ ticket.priority.description|trans }}
                                </span>
                            {% endif %}
                        </div>
                    </div>

                    {# Update Ticket Status #}
                    <div class=\"uv-aside-select\">
                        <label class=\"uv-aside-select-label\">{{ 'Status'|trans }}</label>
                        <div>
                            {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_STATUS') %}
                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"{{ ticket.status.id }}\">{{ ticket.status.description|trans }}</span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>{{ 'Status'|trans }}</label>
                                        <ul class=\"status\" data-action=\"status\">
                                            {% for status in ticketStatusCollection %}
                                                <li data-index=\"{{ status.id }}\"><a href=\"#\">{{ status.description|trans }}</a></li>
                                            {% endfor %}
                                        </ul>
                                    </div>
                                </div>
                            {% else %}
                                <span class=\"uv-aside-select-value\">{{ ticket.status.description|trans }}</span>
                            {% endif %}
                        </div>
                    </div>

                    {# Update Ticket Type #}
                    <div class=\"uv-aside-select search\">
                        <label class=\"uv-aside-select-label\">{{ 'Type'|trans }}</label>
                        <div>
                            {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_TYPE') %}
                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"{{ ticket.type ? ticket.type.id : '-- --' }}\">{{ ticket.type ? ticket.type.description : 'Not Assigned'|trans }}</span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>{{ 'Type'|trans }}</label>
                                        <div class=\"uv-search-sm\">
                                            <input type=\"text\" class=\"uv-search-field uv-search-inline\" placeholder=\"{{ 'Search'|trans }}\">
                                        </div>
                                    </div>

                                    <ul class=\"uv-search-list type\" data-action=\"type\">
                                        {% for type in ticketTypeCollection %}
                                            <li data-index=\"{{ type.id }}\"><a href=\"#\">{{ type.code }}</a></li>
                                        {% endfor %}
                                    </ul>
                                </div>
                            {% else %}
                                <span class=\"uv-aside-select-value\">
                                    {{ ticket.type ? ticket.type.description : 'Not Assigned'|trans }}
                                </span>
                            {% endif %}
                        </div>
                    </div>

                    {# Update Ticket Support Group #}
                    <div class=\"uv-aside-select search\">
                        <label class=\"uv-aside-select-label\">{{ 'Group'|trans }}</label>
                        <div>
                            {% if user_service.isAccessAuthorized('ROLE_AGENT_ASSIGN_TICKET_GROUP') %}
                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"{{ ticket.supportGroup ? ticket.supportGroup.id : '-- --' }}\">
                                    {{ ticket.supportGroup ? ticket.supportGroup.name : 'Not Assigned'|trans }}
                                </span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>{{ 'Group'|trans }}</label>
                                        <div class=\"uv-search-sm\">
                                            <input type=\"text\" class=\"uv-search-field uv-search-inline\" placeholder=\"{{ 'Search'|trans }}\">
                                        </div>
                                    </div>
                                    <ul class=\"uv-search-list group\" data-action=\"group\">
                                        <li data-index=\"\"><a href=\"#\">{{ 'Not Assigned'|trans }}</a></li>

                                        {% for group in supportGroupCollection %}
                                            <li data-index=\"{{ group.id }}\"><a href=\"#\">{{ group.name }}</a></li>
                                        {% endfor %}
                                    </ul>
                                </div>
                            {% else %}
                                <span class=\"uv-aside-select-value\">
                                    {{ ticket.supportGroup ? ticket.supportGroup.name : 'Not Assigned'|trans }}
                                </span>
                            {% endif %}
                        </div>
                    </div>

                    {# Update Ticket Support Team #}
                    <div class=\"uv-aside-select search\">
                        <label class=\"uv-aside-select-label\">{{ 'Team'|trans }}</label>
                        <div>
                            {% if user_service.isAccessAuthorized('ROLE_AGENT_ASSIGN_TICKET_GROUP') %}
                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"{{ ticket.supportTeam ? ticket.supportTeam.id : '-- --' }}\">
                                    {{ ticket.supportTeam ? ticket.supportTeam.name : 'Not Assigned'|trans }}
                                </span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>{{ 'Team'|trans }}</label>
                                        <div class=\"uv-search-sm\">
                                            <input type=\"text\" class=\"uv-search-field uv-search-inline\" placeholder=\"{{ 'Search'|trans }}\">
                                        </div>
                                    </div>
                                    <ul class=\"uv-search-list team\" data-action=\"team\">
                                        <li data-index=\"\"><a href=\"#\">{{ 'Not Assigned'|trans }}</a></li>
                                        {% for team in supportTeamCollection %}
                                            <li data-index=\"{{ team.id }}\"><a href=\"#\">{{ team.name }}</a></li>
                                        {% endfor %}
                                    </ul>
                                </div>
                            {% else %}
                                <span class=\"uv-aside-select-value\">
                                    {{ ticket.supportTeam ? ticket.supportTeam.name : 'Not Assigned'|trans }}
                                </span>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>

            {# Ticket Labels #}
            <div class=\"uv-aside-brick\">
                <div class=\"uv-aside-ticket-labels label-list-block\">
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Labels'|trans }}</label>

                        <div class=\"uv-field-block\">
                            <input class=\"uv-field uv-dropdown-other\" type=\"text\" data-type=\"label\">
                            <div class=\"uv-dropdown-list uv-top-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                    <ul class=\"\">
                                        <span class=\"uv-filter-info\">{{ 'Type atleast 2 letters'|trans }}</span>
                                        <span class=\"uv-no-results\" style=\"display: none;\">{{ 'No result found'|trans }}</span>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"label-list\"></div>
                </div>
            </div>

            {# Ticket Collaborators #}
            <div class=\"uv-aside-brick collaborator-list-block\">
                <div class=\"uv-aside-ticket-labels\">
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Collaborators'|trans }}</label>

                        {% if user_service.isAccessAuthorized('ROLE_AGENT_ADD_COLLABORATOR_TO_TICKET') %}
                            <div class=\"uv-field-block\">
                                <input class=\"uv-field\" type=\"text\" name=\"email\" type=\"text\" value=\"\" placeholder=\"{{ 'Type email to add'|trans }}\">
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"collaborator-list\" style=\"margin-top: 10px\"></div>
                </div>
            </div>

            {# Ticket Tags #}
            <div class=\"uv-aside-brick tag-list-block\">
                <div class=\"uv-aside-ticket-labels\">
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Tags'|trans }}</label>

                        {% if user_service.isAccessAuthorized('ROLE_AGENT_ADD_TAG') %}
                            <div class=\"uv-field-block\">
                                <input class=\"uv-field uv-dropdown-other\" name=\"tag-name\" type=\"text\" data-type=\"tag\" value=\"\">
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>{{ 'Filter With'|trans }}</label>
                                        <ul class=\"\">
                                            <span class=\"uv-filter-info\">{{ 'Type atleast 2 letters'|trans }}</span>
                                            <span class=\"uv-no-results\" style=\"display: none;\">{{ 'No result found'|trans }}</span>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                    </div>

                    <div class=\"tag-list\" style=\"margin-top: 10px\"></div>
                </div>
            </div>
        </div>

        <div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\" >
            <div class=\"uv-ticket-scroll-region {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view-tv{% endif %}\" >
                {# Ticket Header CTA #}
                <div class=\"uv-ticket-action-bar\">
                    <div class=\"uv-ticket-action-bar-lt\">
                        <div class=\"uv-header-fix\"><a href=\"#\" class=\"uv-icon-pin\"></a></div>

                        {# Thread Actions #}
                        <div class=\"uv-tabs\">
                            <ul>
                                {# Filter Threads #}
                                <li for=\"default\" data-type=\"all\" class=\"uv-tab-active\">{{ 'All Threads'|trans }}</li>
                                <li for=\"default\" data-type=\"reply\">{{ 'Replies'|trans }}</li>
                                <li for=\"default\" data-type=\"forward\">{{ 'Forwards'|trans }}</li>
                                <li for=\"default\" data-type=\"note\">{{ 'Notes'|trans }}</li>
                                <li for=\"default\" data-type=\"pinned\">{{ 'Pinned'|trans }}</li>

                                {# Update Threads #}
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_EDIT_TICKET') or user_service.isAccessAuthorized('ROLE_AGENT_DELETE_TICKET') %}
                                    <li class=\"uv-tab-ellipsis uv-ticket-action\">
                                        <span class=\"uv-icon-ellipsis uv-dropdown-other\"></span>

                                        <div class=\"uv-dropdown-list uv-bottom-right\">
                                            <div class=\"uv-dropdown-container\">
                                                <ul class=\"priority\" data-action=\"priority\">
                                                    {% if user_service.isAccessAuthorized('ROLE_AGENT_EDIT_TICKET') %}
                                                        <li data-action=\"edit\" class=\"uv-open-popup\" data-target=\"edit-ticket-modal\">{{ 'Edit Ticket'|trans }}</li>
                                                    {% endif %}

                                                    <li data-action=\"print\">{{ 'Print Ticket'|trans }}</li>

                                                    {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_STATUS') %}
                                                        <li data-action=\"spam\" data-index=\"6\">{{ 'Mark as Spam'|trans }}</li>
                                                        <li data-action=\"closed\" data-index=\"5\">{{ 'Mark as Closed'|trans }}</li>
                                                    {% endif %}

                                                    {% if user_service.isAccessAuthorized('ROLE_AGENT_DELETE_TICKET') %}
                                                        <li data-action=\"delete\" class=\"uv-text-danger\">{{ 'Delete Ticket'|trans }}</li>
                                                    {% endif %}
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                {% endif %}
                            </ul>
                        </div>
                    </div>

                    <div class=\"uv-ticket-action-bar-rt\">
                        {{ uvdesk_extensibles.getRegisteredComponent(\"Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Tickets\\\\WidgetCollection\").embedSideFilterIcons()|raw }}
                    </div>
                </div>

                {# Ticket Active Users #}
                <div class=\"uv-ticket-viewer-bar\">
                    <div class=\"uv-ticket-viewer-list\">
                        <div class=\"uv-ticket-viewer-single uv-first\" title=\"Currently active agents on ticket...\">
                            <span class=\"uv-icon-eye-light\"></span>
                        </div>
                    </div>
                </div>

                {# Ticket Header #}
                <div class=\"uv-ticket-head\">
                    <div class=\"uv-ticket-head-lt\">
                        <span class=\"uv-star-large {{ ticket.isStarred ? 'uv-star-active' : '' }} uv-star uv-margin-right-5\"></span>
                    </div>

                    <div class=\"uv-ticket-head-rt\">
                        <h1>{{ ticket.subject }}</h1>
                    </div>
                </div>

                <div class=\"uv-ticket-strip\">
                    <span>
                        <span class=\"uv-ticket-strip-label\">{{ 'Created'|trans }} - </span>
                        <span class=\"timeago uv-margin-0\" data-timestamp=\"{{ ticket.createdAt.getTimestamp() }}\" title=\"{{ ticket.createdAt.format('d-m-Y h:ia') }}\">{{ ticket_service.timeZoneConverter(initialThread.createdAt) }}</span>
                    </span>

                    <span>
                        <span class=\"uv-ticket-strip-label\">{{ 'By'|trans }} - </span> {{ initialThread.user.name }}
                        {% if totalCustomerTickets %}
                            (<a id=\"more-tickets-btn\" href=\"{{ path('helpdesk_member_ticket_collection') }}#customer/{{customer.id}}\" target=\"_blank\">{{ 'count more tickets'|trans({'count': totalCustomerTickets}) }}</a>)
                        {% endif %}
                    </span>

                    <span class=\"agent-info\" style=\"{{ ticketAgent ? '' : 'display: none' }}\">
                        <span class=\"uv-ticket-strip-label\">{{ 'Agent'|trans }} - </span>
                        <span class=\"name\">{{ ticketAgent ? ticketAgent.name : '' }}</span>
                    </span>
                </div>

                {# Thread Tab View #}
                <div class=\"uv-tab-view uv-tab-view-active\" id=\"default\">
                    <div class=\"uv-ticket-section\">
                        <div class=\"uv-ticket-main create\">
                            <div class=\"uv-ticket-strip\">
                                <span>
                                    <span class=\"timeago uv-margin-0\" data-timestamp=\"{{ ticket.createdAt.getTimestamp() }}\" title=\"{{ ticket.createdAt.format('d-m-Y h:ia') }}\">{{ ticket_service.timeZoneConverter(ticket.createdAt) }}</span>
                                    - {{ initialThread.user.name }} <span class=\"uv-ticket-strip-label\">{{ 'created Ticket'|trans }}</span>
                                </span>
                                {% if initialThread.cc != '' %}
\t\t\t\t\t\t\t\t\t<div class=\"uv-ticket-strip\">
\t\t\t\t\t\t\t\t\t\t<span><span class=\"uv-ticket-strip-label\">{{ 'CC'|trans }} -</span> {{ initialThread.cc }}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}      
                            </div>

                            <div class=\"uv-ticket-main-lt\">
                               <img src=\"{{ initialThread.user.thumbnail ? app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') ~ (initialThread.user.thumbnail) : initialThread.createdBy == 'customer' ? asset(default_customer_image_path) : asset(default_agent_image_path) }}\">
                            </div>

                            <div class=\"uv-ticket-main-rt\">
                                {% if initialThread.createdBy == 'customer' %}
                                    <a href=\"{{ path('helpdesk_member_manage_customer_account') }}/{{ initialThread.user.id}}\" class=\"uv-ticket-member-name\">{{ initialThread.user.name }}</a>
                                {% else %}
                                    {% if initialThread.user %}
                                        <a href=\"{{ path('helpdesk_member_account') }}/{{ initialThread.user.id}}\" class=\"uv-ticket-member-name\">{{ initialThread.user.name }}</a>
                                    {% else %}
                                        <a class=\"uv-ticket-member-name\">{{ initialThread.user.name }}</a>
                                    {% endif %}
                                {% endif %}

                                {# Ticket Message #}
                                <div class=\"message\">
                                    <p>
                                        {% if initialThread.message|striptags == initialThread.message %}
                                            {{ initialThread.message|nl2br }}
                                        {% else %}
                                            {{ initialThread.message|raw }}
                                        {% endif %}
                                    </p>
                                </div>

                                {# Ticket Attachments #}
                                {% if initialThread.attachments|length %}
                                    <div class=\"uv-ticket-uploads\">
                                        <h4>{{ 'Uploaded Files'|trans }}</h4>
                                        <div class=\"uv-ticket-uploads-strip\">
                                            {% for attachment in initialThread.attachments %}
                                                <a href=\"{{ attachment.downloadURL }}\" target = \"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"{{ attachment.name }}\">
                                                    <img src=\"{{ attachment.iconURL }}\"  class=\"uv-auto-pointer-events\"/>
                                                </a>
                                            {% endfor %}
                                        </div>

                                        {% if initialThread.attachments|length > 1 %}
                                            <div class=\"uv-upload-actions\">
                                                <a href=\"#\" class=\"uv-open-in-files\" data-thread=\"{{ initialThread.id }}\" style=\"display: none\"><span class=\"uv-icon-open-in-files\"></span>{{ 'Open in Files'|trans }}</a>
                                                {% if initialThread.attachments|length %}
                                                    <a href=\"{{ path('helpdesk_member_ticket_download_attachment_zip') }}/{{ initialThread.id }}\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> Download (as .zip)</a>
                                                {% endif %}
                                            </div>
                                        {% endif %}
                                    </div>
                                {% endif %}
                            </div>
                        </div>

                        <div class=\"uv-ticket-accordion\">
                            <div class=\"uv-ticket-count-wrapper\">
                                <span class=\"uv-ticket-count-stat\">{{ totalReplies }}</span>
                            </div>

                            <div class=\"uv-ticket-wrapper thread-list\"></div>
                        </div>
                    </div>
                </div>

                {# Reply Ticket View #}
                <div class=\"uv-ticket-main uv-ticket-reply uv-no-error-success-icon\">
                    <div class=\"uv-ticket-main-lt\">
                        <span class=\"uv-icon-ellipsis\"></span>
                        <img src=\"{{ currentUserDetails.thumbnail ? app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') ~ currentUserDetails.thumbnail : asset(default_agent_image_path) }}\" />
                    </div>

                    <div class=\"uv-ticket-main-rt\">
                        <span class=\"uv-ticket-member-name\">{{ currentUserDetails.name }}</span>
                        <div class=\"uv-tabs\">
                            <ul>
                                <li for=\"reply\" class=\"uv-tab-active\">{{ 'Reply'|trans }}</li>
                                <li for=\"forward\">{{ 'Forward'|trans }}</li>
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_ADD_NOTE') %}
                                    <li for='note'>{{ 'Note'|trans }}</li>
                                {% endif %}
                            </ul>
                        </div>

                        {# Ticket Thread | Add Reply #}
                        <div class=\"uv-tab-view uv-tab-view-active\" id=\"reply\">
                            <form enctype=\"multipart/form-data\" method=\"post\" action=\"{{ path('helpdesk_member_add_ticket_thread', {'ticketId': ticket.id }) }}\">
                                <input name=\"threadType\" value=\"reply\" type=\"hidden\">
                                <input name=\"status\" value=\"\" type=\"hidden\" {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_STATUS') %}class=\"reply-status\"{% endif %}>
                                <div class=\"uv-element-block collaborators\" style=\"display: none\">
                                    <label class=\"uv-field-label\">{{ 'Collaborators'|trans }}</label>
                                    <div class=\"uv-field-block\"></div>
                                </div>

                                <div class=\"uv-element-block cc-bcc\">
                                    <label>
                                        <div class=\"uv-checkbox\">
                                            <input type=\"checkbox\" class=\"cc-bcc-toggle\">
                                            <span class=\"uv-checkbox-view\"></span>
                                        </div>
                                        <span class=\"uv-checkbox-label\">CC/BCC</span>
                                    </label>

                                    <div class=\"uv-field-block\" style=\"display: none\">
                                        <div class=\"uv-group\">
                                            <input class=\"uv-group-field uv-dropdown-other preloaded uv-manual-enter\" type=\"text\">
                                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                                <div class=\"uv-dropdown-container\">
                                                    <label>{{ 'Agent'|trans }}</label>
                                                </div>

                                                <ul class=\"uv-agents-list\">
                                                    {% for agent in user_service.getAgentPartialDataCollection %}
                                                        <li data-id=\"{{ agent.email }}\">
                                                            <img src=\"{{ agent.smallThumbnail ? app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') ~ agent.smallThumbnail : asset(default_agent_image_path) }}\"/> {{agent.name}}
                                                        </li>
                                                    {% endfor %}

                                                    <li class=\"uv-no-results\" style=\"display: none;\">{{ 'No result found'|trans }}</li>
                                                </ul>
                                            </div>
                                            <select class=\"uv-group-select cc-bcc-select\">
                                                <option value=\"bcc\">{{ 'BCC'|trans }}</option>
                                                <option value=\"cc\">{{ 'CC'|trans }}</option>
                                            </select>
                                        </div>

                                        <div class=\"cc-bcc-list\"></div>
                                    </div>
                                </div>

                                <div class=\"uv-element-block uv-element-block-textarea\">
                                    <label class=\"uv-field-label\">{{ 'Write a reply'|trans }}</label>
                                    <div class=\"uv-field-block\">
                                        <textarea class=\"uv-field\" name=\"reply\" id=\"reply-area\">{{ ticket_service.getAgentDraftReply() }}</textarea>
                                    </div>
                                </div>

                                <div class=\"uv-element-block attachment-block\">
                                    <label>
                                        <span class=\"uv-file-label\">{{ 'Add Attachment'|trans }}</span>
                                    </label>
                                </div>

                                <div class=\"uv-action-buttons\">
                                    <div class=\"uv-dropdown next-view\">
                                        <input type=\"hidden\" name=\"nextView\" value=\"stay\"/>
                                        <div class=\"uv-dropdown-btn\" style=\"padding: 9px 27px 9px 10px;\">{{ 'Stay on ticket'|trans }}</div>
                                        <div class=\"uv-dropdown-list uv-top-left\" style=\"opacity: 1;\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>{{ 'After Reply'|trans }}</label>
                                                <ul>
                                                    <li data-value=\"stay\">{{ 'Stay on ticket'|trans }}</li>
                                                    <li data-value=\"redirect\">{{ 'Redirect to list'|trans }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"uv-dropdown reply\">
                                        <div class=\"uv-btn uv-dropdown-other\">{{ 'Reply'|trans }} <span class=\"uv-icon-down-light\"></span></div>
                                        <div class=\"uv-dropdown-list uv-top-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>{{ 'Reply'|trans }}</label>
                                                <ul>
                                                    <li data-id=\"\">{{ 'Submit'|trans }}</li>
                                                    {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_STATUS') %}
                                                        <li data-id=\"open\">{{ 'Submit And Open'|trans }}</li>
                                                        <li data-id=\"pending\">{{ 'Submit And Pending'|trans }}</li>
                                                        <li data-id=\"answered\">{{ 'Submit And Answered'|trans }}</li>
                                                        <li data-id=\"resolved\">{{ 'Submit And Resolved'|trans }}</li>
                                                        <li data-id=\"closed\">{{ 'Submit And Closed'|trans }}</li>
                                                    {% endif %}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        {# Ticket Thread | Forward Thread #}
                        <div class=\"uv-tab-view\" id=\"forward\">
                            <form enctype=\"multipart/form-data\" method=\"post\" action=\"{{ path('helpdesk_member_add_ticket_thread', {'ticketId': ticket.id }) }}\">
                                <input name=\"threadType\" value=\"forward\" type=\"hidden\">
                                <input name=\"status\" value=\"\" type=\"hidden\" {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_STATUS') %}class=\"reply-status\"{% endif %}>

                                <div class=\"uv-element-block\">
                                    <label class=\"uv-field-label\">{{ 'Subject'|trans }}</label>
                                    <div class=\"uv-field-block\">
                                        <input class=\"uv-field\" type=\"text\" name=\"subject\">
                                    </div>
                                </div>

                                <div class=\"uv-element-block to\">
                                    <label class=\"uv-field-label\">{{ 'To'|trans }}</label>
                                    <div class=\"uv-field-block\">
                                        <input class=\"uv-field uv-dropdown-other preloaded uv-to-message uv-manual-enter\" type=\"text\">

                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>{{ 'Agent'|trans }}</label>
                                            </div>

                                            <ul class=\"uv-agents-list\">
                                                {% for agent in user_service.getAgentPartialDataCollection %}
                                                    <li data-id=\"{{ agent.email }}\">
                                                        <img src=\"{{ agent.smallThumbnail ? app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') ~ agent.smallThumbnail : asset(default_agent_image_path) }}\"/> {{agent.name}}
                                                    </li>
                                                {% endfor %}

                                                <li class=\"uv-no-results\" style=\"display: none;\">{{ 'No result found'|trans }}</li>
                                            </ul>
                                        </div>

                                        <div class=\"to-list\"></div>
                                    </div>
                                </div>

                                <div class=\"uv-element-block cc-bcc\">
                                    <label>
                                        <div class=\"uv-checkbox\">
                                            <input type=\"checkbox\" class=\"cc-bcc-toggle\">
                                            <span class=\"uv-checkbox-view\"></span>
                                        </div>
                                        <span class=\"uv-checkbox-label\">CC/BCC</span>
                                    </label>
                                    <div class=\"uv-field-block\" style=\"display: none\">
                                        <div class=\"uv-group\">
                                            <input class=\"uv-group-field uv-dropdown-other preloaded uv-manual-enter\" type=\"text\">
                                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                                <div class=\"uv-dropdown-container\"><label>{{ 'Agent'|trans }}</label></div>

                                                <ul class=\"uv-agents-list\">
                                                    {% for agent in user_service.getAgentPartialDataCollection %}
                                                        <li data-id=\"{{ agent.email }}\">
                                                            <img src=\"{{ agent.smallThumbnail ? app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') ~ agent.smallThumbnail : asset(default_agent_image_path) }}\"/> {{agent.name}}
                                                        </li>
                                                    {% endfor %}

                                                    <li class=\"uv-no-results\" style=\"display: none;\">{{ 'No result found'|trans }}</li>
                                                </ul>
                                            </div>
                                            <select class=\"uv-group-select cc-bcc-select\">
                                                <option value=\"bcc\">{{ 'BCC'|trans }}</option>
                                                <option value=\"cc\">{{ 'CC'|trans }}</option>
                                            </select>
                                        </div>

                                        <div class=\"cc-bcc-list\"></div>
                                    </div>
                                </div>

                                <div class=\"uv-element-block uv-element-block-textarea\">
                                    <label class=\"uv-field-label\">{{ 'Write a reply'|trans }}</label>
                                    <div class=\"uv-field-block\">
                                        <textarea class=\"uv-field\" name=\"reply\" id=\"forward-area\">{{ ticket_service.getAgentDraftReply() }}</textarea>
                                    </div>
                                </div>

                                <div class=\"uv-element-block attachment-block\">
                                    <label><span class=\"uv-file-label\">{{ 'Add Attachment'|trans }}</span></label>
                                </div>

                                <div class=\"uv-action-buttons\">
                                    <div class=\"uv-dropdown next-view\">
                                        <input type=\"hidden\" name=\"nextView\" value=\"stay\"/>
                                        <div class=\"uv-dropdown-btn\" style=\"padding: 9px 27px 9px 10px;\">{{ 'Stay on ticket'|trans }}</div>
                                        <div class=\"uv-dropdown-list uv-top-left\" style=\"opacity: 1;\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>{{ 'After Reply'|trans }}</label>
                                                <ul>
                                                    <li data-value=\"stay\">{{ 'Stay on ticket'|trans }}</li>
                                                    <li data-value=\"redirect\">{{ 'Redirect to list'|trans }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"uv-btn forward\">{{ 'Forward'|trans }}</div>
                                </div>
                            </form>
                        </div>

                        {# Ticket Thread | Add Note #}
                        {% if user_service.isAccessAuthorized('ROLE_AGENT_ADD_NOTE') %}
                            <div class=\"uv-tab-view\" id=\"note\">
                                <form enctype=\"multipart/form-data\" method=\"post\" action=\"{{ path('helpdesk_member_add_ticket_thread', {'ticketId': ticket.id }) }}\">
                                    <input name=\"threadType\" value=\"note\" type=\"hidden\">
                                    <input name=\"status\" value=\"\" type=\"hidden\" {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_STATUS') %}class=\"reply-status\"{% endif %}>

                                    <div class=\"uv-element-block uv-element-block-textarea\">
                                        <label class=\"uv-field-label\">{{ 'Write a reply'|trans }}</label>
                                        <div class=\"uv-field-block\">
                                            <textarea class=\"uv-field\" name=\"reply\" id=\"note-area\">{{ ticket_service.getAgentDraftReply() }}</textarea>
                                        </div>
                                    </div>

                                    <div class=\"uv-element-block attachment-block\">
                                        <label><span class=\"uv-file-label\">{{ 'Add Attachment'|trans }}</span></label>
                                    </div>

                                    <div class=\"uv-action-buttons\">
                                        <div class=\"uv-dropdown next-view\">
                                            <input type=\"hidden\" name=\"nextView\" value=\"stay\"/>
                                            <div class=\"uv-dropdown-btn\" style=\"padding: 9px 27px 9px 10px;\">{{ 'Stay on ticket'|trans }}</div>
                                            <div class=\"uv-dropdown-list uv-top-left\" style=\"opacity: 1;\">
                                                <div class=\"uv-dropdown-container\">
                                                    <label>{{ 'After Reply'|trans }}</label>
                                                    <ul>
                                                        <li data-value=\"stay\">{{ 'Stay on ticket'|trans }}</li>
                                                        <li data-value=\"redirect\">{{ 'Redirect to list'|trans }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"uv-dropdown reply\">
                                            <div class=\"uv-btn uv-dropdown-other\">{{ 'Reply'|trans}}<span class=\"uv-icon-down-light\"></span></div>

                                            <div class=\"uv-dropdown-list uv-top-left\">
                                                <div class=\"uv-dropdown-container\">
                                                    <label>{{ 'Add Note'|trans }}</label>
                                                    <ul>
                                                        <li data-id=\"\">{{ 'Submit'|trans }}</li>
                                                        {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_STATUS') %}
                                                            <li data-id=\"open\">{{ 'Submit And Open'|trans }}</li>
                                                            <li data-id=\"pending\">{{ 'Submit And Pending'|trans }}</li>
                                                            <li data-id=\"answered\">{{ 'Submit And Answered'|trans }}</li>
                                                            <li data-id=\"resolved\">{{ 'Submit And Resolved'|trans }}</li>
                                                            <li data-id=\"closed\">{{ 'Submit And Closed'|trans }}</li>
                                                        {% endif %}
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>

            <!-- Bottom Action Block -->
            <div class=\"uv-ticket-fixed-region\">
                <div class=\"uv-ticket-fixed-region-lt\">
                    {{ uvdesk_extensibles.getRegisteredComponent(\"Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Tickets\\\\QuickActionButtonCollection\").injectTemplates()|raw }}

                    {# <!-- Saved Replied-->
                    <div class=\"uv-dropdown saved-reply\">
                        <div class=\"uv-dropdown-btn\">{{ 'Saved Replies'|trans }}</div>
                        <div class=\"uv-dropdown-list uv-top-left\">
                            <div class=\"uv-dropdown-container\">
                                <label>{{ 'Saved Replies'|trans }}</label>
                                <ul>
                                    <li data-id=\"\">
                                        <a href=\"{{ path('helpdesk_member_saved_replies') }}\" target=\"_blank\" style=\"color: #2750C4\">{{ 'Create New'|trans }}</a>
                                    </li>
                                    {% for savedReply in ticket_service.getSavedReplies() %}
                                        <li data-id=\"{{ savedReply.id }}\">
                                            {{ savedReply.name }}
                                        </li>
                                    {% endfor %}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- //Saved Replied--> #}

                    {# <!--Code-->
                    <div class=\"uv-dropdown\">
                        <div class=\"uv-dropdown-btn\">{{ 'Prepared Responses'|trans }}</div>
                        <div class=\"uv-dropdown-list uv-top-left\">
                        <div class=\"uv-dropdown-container prepared-responses\">
                            <label>{{ 'Prepared Responses'|trans }}</label>
                            <ul>
                                <li>
                                    <a class=\"create-new\" href=\"{{path('prepare_response_action')}}\" target=\"_blank\" style=\"color: #2750C4\">{{ 'Create New'|trans }}</a>
                                </li>
                                {% set preparedResponses = ticket_service.getManualWorkflow() %}
                                {% for workflow in preparedResponses %}
                                    <li>
                                        <a href=\"{{ path('helpdesk_member_ticket_prepared_response_xhr') }}/{{ ticket.id }}/{{ workflow.id }}\">
                                            {{ workflow.name }}
                                        </a>
                                    </li>
                                {% endfor %}
                            </ul>
                        </div>
                        </div>
                    </div>
                    <!--//Code--> #}
                </div>

                <div class=\"uv-ticket-fixed-region-rt\"></div>
            </div>
            <!-- //Bottom Action Block -->
        </div>
    </div>

    {# Edit Ticket #}
    {% if user_service.isAccessAuthorized('ROLE_AGENT_EDIT_TICKET') %}
        <div class=\"uv-pop-up-overlay uv-no-error-success-icon\" id=\"edit-ticket-modal\">
            <div class=\"uv-pop-up-box uv-pop-up-wide\">
                <span class=\"uv-pop-up-close\"></span>
                <h2>{{ 'Edit Ticket'|trans }}</h2>

                {# Edit Ticket Form #}
                <form method=\"post\" action=\"{{ path('helpdesk_member_update_ticket_details_xhr', {'ticketId': ticket.id}) }}\" id=\"edit-ticket-form\">
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Subject'|trans }}</label>
                        <div class=\"uv-field-block\">
                            <input type=\"text\" name=\"subject\" class=\"uv-field\" value=\"{{ ticket.subject }}\" />
                        </div>
                    </div>
                    
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Reply'|trans }}</label>
                        <div class=\"uv-field-block\">
                            {% if initialThread.message|striptags == initialThread.message %}
                                <textarea name=\"reply\" id=\"uv-edit-create-thread\" class=\"uv-field\">{{ initialThread.message|nl2br }}</textarea>
                            %} {% else %}
                                <textarea name=\"reply\" id=\"uv-edit-create-thread\" class=\"uv-field\">{{ initialThread.message|raw }}</textarea>
                            {% endif %}
                        </div>
                    </div>

                    <div class=\"uv-pop-up-actions\">
                        <input class=\"uv-btn update\" href=\"#\" value=\"Update\" type=\"submit\">
                        <input class=\"uv-btn cancel\" href=\"#\" value=\"Discard\" type=\"button\">
                    </div>
                </form>
            </div>
        </div>
    {% endif %}

    {{ uvdesk_extensibles.getRegisteredComponent(\"Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Tickets\\\\WidgetCollection\").embedSideFilterContent()|raw }}
{% endblock %}

{% block footer %}
    {{ parent() }}

    {{ include('@UVDeskCoreFramework\\\\Templates\\\\attachment.html.twig') }}
    {{ include(\"@UVDeskCoreFramework/Templates/tinyMCE.html.twig\") }}

    <script id=\"thread_list_empty_tmp\" type=\"text/template\">
        <div class=\"uv-no-threads\">{{ 'Nothing interesting here...'|trans }}</div>
    </script>

    <script> 
        \$(document).ready(function() {
            \$(\"#filterSavedreplies\").on(\"keyup\", function() {
                if (this.value.length && this.value.length != '') {
                    var that = this;
                    \$(\"#listSavedReplies li\").hide().filter(function() {
                        return \$(this).html().toLowerCase().indexOf(that.value.toLowerCase()) !== -1;
                    }).show();
                } else {
                    \$(\"#listSavedReplies li\").show()
                }
            });

            \$(\".uv-dropdown-btn\").click(function(event) {
                setTimeout(function() {
                    \$(\".uv-search-inline\").focus();
                }, 100);
            });
        });
    </script>

    <script id=\"thread_list_item_tmp\" type=\"text/template\">
        <div class=\"uv-ticket-strip\">
            <span>
                <% if(typeof(mailStatus) != 'undefined' && mailStatus) { %>
                    <a href=\"https://support.uvdesk.com/en/blog/uvdesk-ticket-delivery-status\" target=\"_blank\">
                        <span class=\"uv-mail-status uv-mail-<%- mailStatus.split(',')[0] %>\" <% if(mailStatus !== 'pending') { %>data-toggle=\"tooltip\" data-placement=\"right\" title=\"{{ 'Mail status:'|trans }} <%- mailStatus.split(',')[0] %> <% if(mailStatus.split(',').length > 1) { print('Reason:' + mailStatus.split(',')[1] ); } %> \"<% } %> ></span>
            </a>
            <% } %>
            <span class=\"timeago uv-margin-0\" data-timestamp=\"<%- timestamp %>\" title=\"<%- formatedCreatedAt %>\">
                    <%- formatedCreatedAt %>
                </span>
            - <%- fullname %>
            <span class=\"uv-ticket-strip-label\">
                <% if(threadType == 'reply') { %>
                    {{ 'replied'|trans }}
                <% } else if(threadType == 'note') { %>
                    {{ 'added note'|trans }}
                <% } else if(threadType == 'forward') { %>
                    {{ 'forwarded'|trans }}
                <% } %>
                - <a href=\"#thread/<%- id %>\" id=\"thread<%- id %>\" class=\"copy-thread-link\">#<%- id %></a>
                </span>
            </span>

            <% if((replyTo && threadType ==  'forward') || cc || bcc) { %>
                <div class=\"uv-ticket-strip\">
                    <% if(replyTo && threadType ==  'forward') { %>
                    <span><span class=\"uv-ticket-strip-label\">{{ 'TO'|trans }} -</span> <%- replyTo %></span>
                    <% } if(cc) { %>
                    <span><span class=\"uv-ticket-strip-label\">{{ 'CC'|trans }} -</span> <%- cc %></span>
                    <% } if(bcc) { %>
                    <span><span class=\"uv-ticket-strip-label\">{{ 'BCC'|trans }} -</span> <%- bcc %></span>
                    <% } %>
                </div>
            <% } %>
        </div>

        <div class=\"uv-ticket-strip uv-margin-top-5\" <% if(!bookmark && !isLocked) { %>style=\"display: none\"<% } %> >
            <span <% if(!bookmark) { %>style=\"display: none\"<% } %> >
                    <span class=\"uv-icon-pinned\"></span>
                    {{ 'Pinned'|trans }}
                    </span>
            <span <% if(!isLocked) { %>style=\"display: none\"<% } %> >
                <span class=\"uv-icon-locked\"></span>
                {{ 'Locked'|trans }}
            </span>
        </div>
        <div class=\"uv-ticket-main-lt\">
            <span class=\"uv-thread-action\">
                <span class=\"uv-icon-ellipsis uv-dropdown-other\"></span>
                <div class=\"uv-dropdown-list uv-bottom-left\">
                    <div class=\"uv-dropdown-container\">
                        <ul>
                            {% if user_service.isAccessAuthorized('ROLE_AGENT_EDIT_THREAD_NOTE') %}
                                <% if (userType != 'system' && userType != 'System') { %>
                                    <li data-action=\"edit\">{{ 'Edit Thread'|trans }}</li>
                                <% } %>
                            {% endif %}
                            {% if user_service.isAccessAuthorized('ROLE_AGENT_DELETE_THREAD_NOTE') %}
                                <li data-action=\"delete\">{{ 'Delete Thread'|trans }}</li>
                            {% endif %}
                            <li data-action=\"forward\">{{ 'Forward'|trans }}</li>
                            <% if(bookmark) { %>
                                <li data-action=\"pin\" data-id=\"1\">{{ 'Unpin Thread'|trans }}</li>
                            <% } else { %>
                                <li data-action=\"pin\" data-id=\"0\">{{ 'Pin Thread'|trans }}</li>
                            <% } %>
                            <% if(threadType != 'note') { %>
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_MANAGE_LOCK_AND_UNLOCK_THREAD') %}
                                    <% if(isLocked) { %>
                                        <li data-action=\"lock\" data-id=\"1\">{{ 'Unlock Thread'|trans }}</li>
                                    <% } else { %>
                                        <li data-action=\"lock\" data-id=\"0\">{{ 'Lock Thread'|trans }}</li>
                                    <% } %>
                                {% endif %}
                            <% } %>
                            <li style=\"display: none;\" data-action=\"translate\">{{ 'Translate Thread'|trans }}</li>
                        </ul>
                    </div>
                </div>
            </span>
            <span class=\"p-relative\">
                
            </span>
            <% if (userType != 'system' && userType != 'System') { %>
                <% if(user && user.smallThumbnail != null) { %>
                    <img src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}<%- user.smallThumbnail %>\" />
                <% } else { %>
                    <img src=\"<% if(userType == 'agent') { %> {{ asset(default_agent_image_path) }} <% } else { %> {{ asset(default_customer_image_path) }} <% } %>\" />
                <% } %>
            <% } else { %>
                <img src=\"{{ asset(default_helpdesk_image_path) }}\" />
            <% } %>
        </div>
        <div class=\"uv-ticket-main-rt\">
            <% if(userType == 'customer') { %>
                <a <% if(user) { %>href=\"{{ path('helpdesk_member_manage_customer_account') }}/<%- user.id %>\"<% } %> class=\"uv-ticket-member-name\">
                <%- fullname %>
                </a>
            <% } else if(userType == 'agent') { %>
                <a <% if(user) { %>href=\"{{ path('helpdesk_member_account') }}/<%- user.id %>\"<% } %> class=\"uv-ticket-member-name\">
                <%- fullname %>
                </a>
            <% } else { %>
                <span class=\"uv-ticket-member-name\">
                    <%- fullname %>
                </span>
            <% } %>

            <!-- Message Block -->
            <div class=\"message\">
                <%= reply %>
            </div>

            <!-- Attachment Block -->
            <% if(attachments.length) { %>
            <div class=\"uv-ticket-uploads\">
                <h4>{{ 'Uploaded Files'|trans }}</h4>
                <div class=\"uv-ticket-uploads-strip\">
                    <% _.each(attachments, function(file) { %>
                    <a href=\"<%-file.downloadURL %>\" target =\"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"<%- file.name %>\">
                        <img src=\"<%-file.iconURL %>\" class=\"uv-auto-pointer-events\">
                    </a>
                    <% }) %>
                </div>

                <% if (attachments.length > 1) { %>
                <div class=\"thread-attachments-zip pull-left\">
                    <div class=\"uv-upload-actions\">
                        <a href=\"#\" class=\"uv-open-in-files\" data-thread=\"<%- id %>\" style=\"display: none\"><span class=\"uv-icon-open-in-files\"></span>{{ 'Open in Files'|trans }}</a>
                        <% if(attachments.length > 0) { %>
                        <a href=\"{{ path('helpdesk_member_ticket_download_attachment_zip') }}/<%- id %>\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> {{ 'Download (as .zip)'|trans }}</a>
                        <% } %>
                    </div>
                </div>
                <% } %>

            </div>
            <% } %>
        </div>
    </script>

    <script id=\"edit_thread_tmp\" type=\"text/template\">
        <div class=\"thread-edit-container\">
            <div class=\"uv-element-block uv-element-block-textarea\">
                <div class=\"uv-field-block\">
                    <textarea id=\"uv-edit-thread\">
                    </textarea>
                </div>
            </div>
            <div class=\"uv-action-buttons\">
                <a class=\"uv-btn cancel-edit\" type=\"button\">{{ 'Cancel'|trans }}</a>
                <a class=\"uv-btn saveThread\" type=\"button\" style=\"margin-right: 10px;\">{{ 'Update'|trans }}</a>
            </div>
        </div>
    </script>

    <script id=\"ticket_quick_navigation_tmp\" type=\"text/template\">
        <% if(prev) { %>
            <a class=\"uv-btn-stroke\" href=\"{{ path('helpdesk_member_ticket') }}/<%- prev %>\">
                <span class=\"uv-icon-previous\"></span>
                {{ 'Previous Ticket'|trans }}
            </a>
        <% } else { %>
            <a class=\"uv-btn-stroke\" disabled=\"disabled\">
                <span class=\"uv-icon-previous\"></span>
                {{ 'Previous Ticket'|trans }}
            </a>
        <% } %>

        <% if(next) { %>
            <a class=\"uv-btn-stroke\" href=\"{{ path('helpdesk_member_ticket') }}/<%- next %>\">
                {{ 'Next Ticket'|trans }}
                <span class=\"uv-icon-next\"></span>
            </a>
        <% } else { %>
            <a class=\"uv-btn-stroke\" disabled=\"disabled\">
                {{ 'Next Ticket'|trans }}
                <span class=\"uv-icon-next\"></span>
            </a>
        <% } %>
    </script>

    <script type=\"text/javascript\">
        uvdesk = {
            ticket: {}
        };

        var ticketApp = {};

        viewerImages = function() {
            if (typeof(\$().viewer == 'function')) {
                \$('.uv-ticket-uploads .uv-ticket-uploads-strip').viewer({
                    'url': 'data-url',
                    'downloadBase': \"{{ path('helpdesk_member_ticket_download_attachment') }}\",
                    'download': 'data-download',
                });
            }
        };

        \$(function () {
            var threadIds = [];
            viewerImages();

            _.extend(Backbone.Model.prototype, Backbone.Validation.mixin);

            // Ticket Model
            var TicketModel = Backbone.Model.extend({
                idAttribute : \"id\",
                urlRoot : \"{{ path('helpdesk_member_update_ticket_attributes_xhr') }}\",
                validation: {
                    'email': [{
                        required: true,
                        msg: '{{ \"This field is mandatory\" | trans}}'
                    },{
                        pattern: /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                        msg: 'Please enter a valid email'
                    }],
                    'subject' : {
                        required : true,
                        msg : '{{ \"This field is mandatory\" | trans}}'
                    },
                    'reply' : {
                        fn: function(value) {
                            if(!tinyMCE.get(\"uv-edit-create-thread\"))
                                return false;
                            var html = tinyMCE.get(\"uv-edit-create-thread\").getContent();
                            if(app.appView.stripHTML(html) != '') {
                                return false;
                            }
                            return true;
                        },
                        msg : '{{ \"This field is mandatory\" | trans}}'
                    }
                },
            });

            // Thread Model
            var ThreadModel = Backbone.Model.extend({
                idAttribute : \"id\",
                defaults : {
                    hasTask : 0,
                    task: null
                }
            });

            // Customer Model
            var CustomerModel = Backbone.Model.extend({
                validation: {
                    'name': [{
                        required: true,
                        msg: '{{ \"This field is mandatory\" }}'
                    }, {
                        pattern: /^((?![!@#\$%^&*()<_+]).)*\$/,
                        msg: '{{ \"This field must have characters only\"}}'
                    }],
                    'email': [{
                        required: true,
                        msg: '{{ \"This field is mandatory\" | trans}}'
                    },{
                        pattern: /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                        msg: '{{ \"Email address is invalid\" | trans}}'
                    }],
                    'contactNumber': function(value) {
                        if(value != undefined && value !== '') {
                            if (!value.match('^\\\\s*(?:\\\\+?(\\\\d{1,3}))?[-. (]*(\\\\d{3})[-. )]*(\\\\d{3})[-. ]*(\\\\d{4})(?: *x(\\\\d+))?\\\\s*\$'))
                                return 'Contact number is invalid';
                        }
                    }
                },
                urlRoot : \"{{ path('helpdesk_member_manage_customer_account') }}\"
            });

            // Ticket Collaborator Model
            var CollaboratorModel = Backbone.Model.extend({
                idAttribute : \"id\",
                validation: {
                    'email': [{
                        required: true,
                        msg: '{{ \"This field is mandatory\" | trans}}'
                    },{
                        pattern: /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                        msg: '{{ \"Please enter a valid email\" | trans}}'
                    }]
                },
                defaults : {
                    ticketId : {{ ticket.id }},
                    email: ''
                },
                parse: function (resp, options) {
                    return resp.collaborator;
                },
                urlRoot : \"{{ path('helpdesk_member_ticket_manage_collaborators_xhr') }}\"
            });

            // Ticket Tag Model
            var TagModel = Backbone.Model.extend({
                idAttribute : \"id\",
                defaults : {
                    ticketId : {{ ticket.id }}
                },
                parse: function (resp, options) {
                    return resp.tag;
                },
                urlRoot : \"{{ path('helpdesk_member_ticket_create_tag_xhr') }}\"
            });

            // Ticket Label Model
            var LabelModel = Backbone.Model.extend({
                idAttribute : \"id\",
                defaults : {
                    ticketId : {{ ticket.id }}
                },
                parse: function (resp, options) {
                    return resp.label;
                },
                urlRoot : \"{{ path('helpdesk_member_ticket_add_label_xhr') }}\"
            });

            // Ticket Thread Collection
            var ThreadCollection = AppCollection.extend({
                model : ThreadModel,
                mode: \"infinite\",
                url : \"{{ path('helpdesk_member_thread_collection_xhr', {'ticketId': ticket.id}) }}\",
                firstScrollCheck: false,
                threadRequestedId: false,
                template : \$(\"#thread_list_empty_tmp\").html(),
                parseRecords: function (resp, options) {
                    return resp.threads;
                },
                syncData : function() {
                    type = \$(\".uv-ticket-action-bar-lt .uv-tabs .uv-tab-active\").attr('data-type')
                    var self = this;
                    var data = {
                        threadType: type
                    };

                    if(this.threadRequestedId)
                        data.threadRequestedId = this.threadRequestedId;

                    app.appView.showLoader()
                    this.fetch({
                        data : data,
                        remove: false,
                        success: function(model, response) {
                            app.appView.hideLoader();
                            self.threadRequestedId = false;
                            pagination.renderPagination(response.pagination);
                            threadCollection.state.currentPage = parseInt(response.pagination.current) + 1;
                            if(response.pagination.totalCount <= 0){
                                this.\$('.uv-ticket-wrapper.thread-list').html(self.template);
                            }
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    }).done(function(){
                        viewerImages();
                        if(!self.firstScrollCheck){
                            self.firstScrollCheck = true;
                            var fragment = Backbone.history.fragment.trim();
                            if(fragment == '') {
                                router.scrollPage('#reply');
                            } else
                                router.scrollPage('#' + fragment.replace('thread/', 'thread'));
                        }
                    });
                }
            });

            // Ticket Collaborator Collection
            var CollaboratorCollection = Backbone.PageableCollection.extend({
                model : CollaboratorModel
            });

            // Ticket Tag Collection
            var TagCollection = Backbone.PageableCollection.extend({
                model : TagModel,
                isTagExist : function(name) {
                    var flag = 1;
                    _.each(tagCollection.models, function (item) {
                        if(item.get('name').toUpperCase() == name.toUpperCase())
                            flag = 0;
                    }, this);

                    return flag;
                }
            });

            // Ticket Label Collection
            var LabelCollection = Backbone.PageableCollection.extend({
                model : TagModel,
                isLabelExist : function(name) {
                    var flag = 1;
                    _.each(labelCollection.models, function (item) {
                        if(item.get('name').toUpperCase() == name.toUpperCase())
                            flag = 0;
                    }, this);
                    return flag;
                }
            });

            // Customer Form View
            var CustomerForm = Backbone.View.extend({
                events : {
                    'click .uv-btn.update-btn' : \"saveCustomer\",
                    'blur input': 'formChanegd',
                    'click .cancel-btn': 'backToInfo',
                    'click .uv-aside-back': 'backToInfo'
                },
                initialize : function() {
                    Backbone.Validation.bind(this);
                },
                formChanegd: function(e) {
                    this.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
                    this.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
                },
                saveCustomer: function (e) {
                    e.preventDefault();
                    currentElement = Backbone.\$(e.currentTarget);
                    this.model.clear();
                    this.model.set(this.\$el.find('form').serializeObject());
                    self = this;
                    if(this.model.isValid(true)) {
                        app.appView.showLoader();
                        currentElement.attr('disabled', 'disabled');
                        this.model.save({}, {
                            success: function (model, response, options) {
                                app.appView.hideLoader();
                                currentElement.removeAttr(\"disabled\");
                                if(response.alertClass == \"success\") {
                                    app.appView.renderResponseAlert(response);
                                    \$('.uv-aside-customer-info').html(\"<span>\" + self.model.attributes.name + \"</span><span>\" + self.model.attributes.email + \"</span><span>\" + self.model.attributes.contactNumber + \"</span><span class='uv-customize'></span>\")
                                    self.backToInfo();
                                } else if(response.errors) {
                                    self.addErrors(JSON.parse(response.errors));
                                } else if(response.alertMessage) {
                                    app.appView.renderResponseAlert(response);
                                }
                            },
                            error: function (model, xhr, options) {
                                if(url = xhr.getResponseHeader('Location'))
                                    window.location = url;

                                app.appView.hideLoader();
                                app.appView.renderResponseAlert(warningResponse);
                            }
                        });
                    }
                },
                addErrors: function(jsonContext) {
                    for (var field in jsonContext) {
                        Backbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
                    }
                },
                backToInfo: function(e) {
                    if(e)
                        e.preventDefault()

                    \$('.uv-main-info-update-block').hide()
                    \$('.uv-main-info-block').show()
                },
            });

            // Ticket View
            var TicketView = Backbone.View.extend({
                el: \$('.uv-wrapper'),
                stopDraftSaveFlag: 0,
                events: {
                    'click .uv-ticket-action .uv-dropdown-list li[data-action=\"spam\"], .uv-ticket-action .uv-dropdown-list li[data-action=\"closed\"]': 'masrkSpamAndClosed',
                    'click .uv-aside-ticket-actions .uv-aside-select .uv-dropdown-list li': 'editTicketProperty',
                    'click .uv-aside-customer-info .uv-customize': 'showCustomerUpdateBlock',
                    'click .uv-ticket-head .uv-star-large': 'updateStar',
                    'click .uv-ticket-action-bar .uv-tabs li': 'filterThread',
                    'click .uv-ticket-action .uv-dropdown-list li[data-action=\"delete\"]': 'confirmRemove',
                    'click .uv-ticket-action .uv-dropdown-list li[data-action=\"lock\"]': 'lockAndUnlockThread',
                    'click .uv-element-block.collaborators .uv-btn-tag': 'removeCcCollaborator',
                    'keypress .uv-element-block.to .uv-dropdown-other': 'addToInput',
                    'click .uv-element-block.to .uv-dropdown-list li': 'addTo',
                    'click .to-list .uv-btn-tag': 'removeTo',
                    'change .uv-element-block.cc-bcc .cc-bcc-toggle': 'showCcBccBlock',
                    'keypress .uv-element-block.cc-bcc .uv-group-field.uv-dropdown-other': 'addCcBccInput',
                    'click .uv-element-block.cc-bcc .uv-dropdown-list li': 'addCcBcc',
                    'click .cc-bcc-list .uv-btn-tag, .to-list .uv-btn-tag': 'removeEmail',
                    'click .next-view .uv-dropdown-list li': 'setNextView',
                    'click .uv-dropdown.reply .uv-dropdown-list li, .uv-btn.forward': 'validateForm',
                    'click #edit-ticket-modal .uv-btn.update': 'updateTicket',
                    'click .message .uv-icon-ellipsis': 'showReplyQuote',
                    'input .uv-aside-brick .uv-field.uv-dropdown-other': 'searchFilterXhr',
                    'click .uv-dropdown-container.prepared-responses a:not(.create-new)': 'confirmPreparedResponses',

                    'click .uv-header-fix': 'fixheader',
                    'click .uv-ticket-action .uv-dropdown-list li[data-action=\"print\"]': 'printTicket',
                    'blur .uv-manual-enter': 'enterManualAdd',
                },
                ticketNavigationTemplate : _.template(\$(\"#ticket_quick_navigation_tmp\").html()),
                loaderTemplate : _.template(\$(\"#loader-tmp\").html()),
                targetPreparedResponseUrl: '',
                initialize: function() {
                    Backbone.Validation.bind(this);
                    InitTinyMce('#uv-edit-create-thread');
                    \$('.uv-ticket-fixed-region .uv-ticket-fixed-region-rt').html(this.ticketNavigationTemplate(ticketNavigation))
                    var threadTab = localStorage.getItem(\"threadTab\");
                    if(threadTab){
                        \$('.uv-ticket-action-bar-lt .uv-tabs li').removeClass('uv-tab-active');
                        \$('.uv-ticket-action-bar-lt .uv-tabs [data-type=\"' + threadTab + '\"]').addClass('uv-tab-active');
                    }
                    nextView = localStorage.getItem(\"nextView\");
                    if(nextView) {
                        \$(\".next-view input\").val(nextView)
                        \$(\".next-view .uv-dropdown-btn\").text(\$(\"#reply .next-view .uv-dropdown-list li[data-value='\" + nextView + \"']\").text())
                    }
                    if(!localStorage.getItem('ticketTour')) {
                        \$('.uv-ticket-tour').show()
                    }
                    this.fixheaderInit();
                },
                printTicket: function(e) {
                    window.print();
                },
                enterManualAdd: function(e) {
                    var target = \$(e.target);
                    if(target.val()) {
                        var e = \$.Event(\"keypress\");
                        e.which = 13; //choose the one you want
                        target.trigger(e);
                    }
                },
                fixheader: function(e){
                    e.preventDefault();
                    var header = localStorage.getItem(\"fixHeader\");
                    header = !(header == 'true');
                    localStorage.setItem(\"fixHeader\", header);
                    this.fixheaderInit();
                },
                fixheaderInit: function(){
                    var header = localStorage.getItem(\"fixHeader\");
                    if(header == 'true'){
                        \$('a.uv-icon-pin').addClass('uv-icon-pinned');
                        \$('.uv-ticket-action-bar').addClass('uv-ticket-action-bar-fixed');
                    }else{
                        \$('a.uv-icon-pin').removeClass('uv-icon-pinned');
                        \$('.uv-ticket-action-bar').removeClass('uv-ticket-action-bar-fixed');
                    }
                },
                masrkSpamAndClosed: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    var value = currentElement.attr('data-index');
                    \$(\".uv-aside-select .uv-dropdown-list ul.status li[data-index='\" + value + \"']\").trigger('click')
                },
                editTicketProperty: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    var uvSelect = currentElement.parents('.uv-aside-select');
                    var field = currentElement.parent().attr('data-action');
                    var value = currentElement.attr('data-index');
                    if(uvSelect.find('.uv-aside-select-value').attr('data-id') != value) {
                        var name = currentElement.text().trim();
                        app.appView.showLoader();
                        this.model.save({attribute: field, value: value, id: this.model.id}, {
                            patch: true,
                            success: function (model, response, options) {
                                uvSelect.find('.uv-aside-select-value').attr('data-id', value).text(name)
                                if(field == 'priority') {
                                    uvSelect.find('.uv-list-ticket-priority').attr('style', 'background:' + currentElement.attr('data-color'));
                                } else if(field == 'agent') {
                                    \$('.uv-ticket-strip .agent-info').show()
                                    \$('.uv-ticket-strip .agent-info .name').text(name)
                                }
                                app.appView.hideLoader();
                                app.appView.renderResponseAlert(response);
                            },
                            error: function (model, xhr, options) {
                                if(url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                                var response = warningResponse;
                                if(xhr.responseJSON)
                                    response = xhr.responseJSON;

                                app.appView.hideLoader();
                                app.appView.renderResponseAlert(response);
                            }
                        });
                    }
                },
                showCustomerUpdateBlock: function() {
                    \$('.uv-main-info-update-block').show()
                    \$('.uv-main-info-block').hide()
                },
                updateStar: function(e) {
                    e.preventDefault();
                    var currentElement = Backbone.\$(e.currentTarget);
                    currentElement.toggleClass('uv-star-active')
                    this.model.save({id: this.model.id}, {
                        patch: true,
                        url : \"{{ path('helpdesk_member_bookmark_ticket_xhr') }}\",
                        success: function (model, response, options) {
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                },
                filterThread: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    if(type = currentElement.attr('data-type')) {
                        localStorage.setItem(\"threadTab\", type);
                        if(type != 'all')
                            \$('.uv-ticket-main.create').hide()
                        else
                            \$('.uv-ticket-main.create').show()
                        \$('.uv-ticket-wrapper.thread-list').html('')
                        models = []
                        threadCollection.each(function(model) {
                            models.push(model)
                        })
                        total = threadCollection.models.length;
                        count = 0;
                        if(total) {
                            _.each(models, function (model) {
                                threadCollection.remove(model)
                                count++;
                                if(total == count) {
                                    threadCollection.reset()
                                    threadCollection.state.currentPage = 1;
                                    threadCollection.syncData()
                                }
                            });
                        } else {
                            threadCollection.reset()
                            threadCollection.state.currentPage = 1;
                            threadCollection.syncData()
                        }
                    }
                },
                confirmRemove: function(e) {
                    app.appView.openConfirmModal(this);
                },
                removeItem : function() {
                    if(this.model.attributes.isTrashed)
                        window.location.href = \"{{ path('helpdesk_member_delete_ticket', {'ticketId': ticket.id}) }}\";
                    else
                        window.location.href = \"{{ path('helpdesk_member_trash_ticket', {'ticketId': ticket.id}) }}\";
                },
                addCCCollaborators: function() {
                    if(collaboratorCollection.length) {
                        var collaboratorContainer = \$('.uv-element-block.collaborators');
                        collaboratorContainer.find('.uv-field-block').html('');
                        collaboratorContainer.show()
                        _.each(collaboratorCollection.models, function (item) {
                            var json = item.attributes;
                            collaboratorContainer.find('.uv-field-block').append(\"<span><input type='hidden' name='cccol[]' value='\" + json.email + \"'/><a class='uv-btn-tag' href='#'><span class='uv-icon-remove-dark-before'></span>\" + json.name + \"</a></span>\")
                        }, this);
                    }
                },
                removeCcCollaborator: function(e) {
                    e.preventDefault()
                    Backbone.\$(e.currentTarget).parent().remove();
                    var collaboratorContainer = \$('.uv-element-block.collaborators');
                    if(!collaboratorContainer.find('.uv-btn-tag').length)
                        collaboratorContainer.hide()
                },
                addToInput: function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    var currentTab = inputElement.parents('.uv-tab-view');
                    var email = inputElement.val().trim();
                    if (e.which === 13 && email) {
                        e.preventDefault()
                        if(!this.model.preValidate({name: 'email', email: email})) {
                            inputElement.val('').trigger('input')
                            inputElement.removeClass('uv-dropdown-btn-active')
                            inputElement.siblings('.uv-dropdown-list').hide()
                            if(!currentTab.find(\".to-list input[value='\" + email + \"'].to\").length) {
                                currentTab.find('.to-list').append(\"<span><input type='hidden' name='to[]' value='\" + email + \"' class='to'/><a class='uv-btn-tag' href='#'><span class='uv-icon-remove-dark-before'></span>\" + email + \"</span></a></span>\")
                            }
                        }
                    }
                },
                addTo: function(e) {
                    var currentTab = Backbone.\$(e.currentTarget).parents('.uv-tab-view');
                    var email =  Backbone.\$(e.currentTarget).attr('data-id');
                    if(!currentTab.find(\".to-list input[value='\" + email + \"'].to\").length) {
                        currentTab.find('.to-list').append(\"<span><input type='hidden' name='to[]' value='\" + email + \"' class='to'/><a class='uv-btn-tag' href='#'><span class='uv-icon-remove-dark-before'></span>\" + email + \"</span></a></span>\")
                    }
                },
                showCcBccBlock: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    var currentTab = currentElement.parents('.uv-tab-view');
                    if(currentElement.is(':checked')) {
                        currentTab.find('.uv-element-block.cc-bcc').find('.uv-field-block').show()
                    } else {
                        currentTab.find('.uv-element-block.cc-bcc').find('.uv-field-block').hide()
                        currentTab.find('.uv-element-block .cc-bcc-list').html('')
                    }
                },
                addCcBccInput: function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    var currentTab = inputElement.parents('.uv-tab-view');
                    var email = inputElement.val().trim();
                    if (e.which === 13 && email) {
                        e.preventDefault()
                        type = currentTab.find('.cc-bcc-select option:selected').text()
                        if(!this.model.preValidate({name: 'email', email: email})) {
                            inputName = \$('.cc-bcc-select').val()
                            inputElement.val('').trigger('input')
                            inputElement.removeClass('uv-dropdown-btn-active')
                            inputElement.siblings('.uv-dropdown-list').hide()
                            if(!currentTab.find(\".cc-bcc-list input[value='\" + email + \"'].\" + inputName).length) {
                                currentTab.find('.cc-bcc-list').append(\"<span><input type='hidden' name='\" + inputName + \"[]' value='\" + email + \"' class='\" + inputName + \"'/><a class=uv-btn-tag uv-lowercase' href='#'><span class='uv-icon-remove-dark-before'></span>\" + email + \" : <span class='uv-uppercase'>\" + type + \"</span></a></span>\")
                            }
                        }
                    }
                },
                addCcBcc: function(e) {
                    var currentTab = Backbone.\$(e.currentTarget).parents('.uv-tab-view');
                    var email =  Backbone.\$(e.currentTarget).attr('data-id');
                    type = currentTab.find('.cc-bcc-select option:selected').text()
                    inputName = currentTab.find('.cc-bcc-select').val()
                    if(!currentTab.find(\".cc-bcc-list input[value='\" + email + \"'].\" + inputName).length) {
                        currentTab.find('.uv-element-block.cc-bcc .uv-group-field.uv-dropdown-other').val('').trigger('input')
                        currentTab.find('.cc-bcc-list').append(\"<span><input type='hidden' name='\" + inputName + \"[]' value='\" + email + \"' class='\" + inputName + \"'/><a class=uv-btn-tag uv-lowercase' href='#'><span class='uv-icon-remove-dark-before'></span>\" + email + \" : <span class='uv-uppercase'>\" + type + \"</span></a></span>\")
                    }
                },
                removeEmail: function(e) {
                    e.preventDefault()
                    Backbone.\$(e.currentTarget).parent().remove();
                },
                setNextView: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    var nextView = currentElement.attr('data-value');
                    localStorage.setItem(\"nextView\", nextView);
                    \$(\".next-view input\").val(nextView)
                    \$(\".next-view .uv-dropdown-btn\").text(currentElement.text())
                },
                validateForm : function(e) {
                    e.preventDefault();
                    var element = Backbone.\$(e.currentTarget);
                    formType = element.parents('.uv-tab-view.uv-tab-view-active').attr('id');
                    form = element.parents('form');
                    form.find('.reply-status').val(element.attr('data-id'));
                    form.find('.uv-field-message').remove()

                    var html = tinyMCE.get(formType + \"-area\").getContent();
                    if(app.appView.htmlText(html) != '' || -1 != html.indexOf('<img')) {
                        if(formType == 'forward') {
                            if(!form.find(\".to-list input.to\").length) {
                                \$('.uv-element-block.to').append(\"<span class='uv-field-message'>{{ 'This field is mandatory'|trans }}</span>\")
                            } else {
                                this.stopDraftSaveFlag = 1;

                                app.appView.showLoader();
                                tinyMCE.activeEditor.uploadImages(function(response) {
                                    app.appView.hideLoader();

                                    form.submit();
                                    \$('.uv-btn.forward').attr('disabled', 'disabled');
                                });
                            }
                        } else {
                            this.stopDraftSaveFlag = 1;
                            if(localStorage) {
                                localStorage.setItem(\"threadTab\", \"all\");
                            }

                            app.appView.showLoader();
                            tinyMCE.activeEditor.uploadImages(function(response) {
                                app.appView.hideLoader();

                                form.submit();
                                \$('.uv-dropdown.reply').find('.uv-btn').attr('disabled', 'disabled');
                            });
                        }
                    } else {
                        form.find('.uv-element-block-textarea').append(\"<span class='uv-field-message'>{{ 'This field is mandatory'|trans }}</span>\");
                        if(formType == 'forward') {
                            if(!form.find(\".to-list input.to\").length) {
                                \$('.uv-element-block.to').append(\"<span class='uv-field-message'>{{ 'This field is mandatory'|trans }}</span>\")
                            }
                        }
                    }
                },
                updateTicket: function(e) {
                    e.preventDefault();
                    this.model.set(\$('#edit-ticket-modal form').serializeObject());
                    if(this.model.isValid(['subject', 'reply'])) {
                        \$('#edit-ticket-modal form').find('.uv-btn').attr('disabled', 'disabled');
                        \$('#edit-ticket-modal form').submit();
                    }
                },
                showReplyQuote: function(e) {
                    Backbone.\$(e.currentTarget).next().toggle();
                },
                searchFilterXhr: _.debounce(function(e) {
                    currentElement = Backbone.\$(e.currentTarget);
                    var parent = currentElement.parent();
                    if(\$('.uv-dropdown-other.uv-dropdown-btn-active').parent().attr('id') != parent.attr('id'))
                        return;
                    parent.find(\"li:not(.uv-no-results, .uv-filter-info)\").remove();
                    parent.find(\".uv-filter-info\").show()
                    if(currentElement.val().length > 1) {
                        parent.append(this.loaderTemplate())
                        parent.find('.uv-filter-info').text(\"{% trans %}Searching{% endtrans %} ...\")
                        if(self.xhrReq)
                            self.xhrReq.abort();

                        self.xhrReq = \$.ajax({
                            url : \"{{ path('helpdesk_member_ticket_search_filter_options') }}\",
                            type : 'GET',
                            data: {\"type\" : currentElement.attr('data-type'), \"query\": currentElement.val()},
                            dataType : 'json',
                            success : function(response) {
                                self.xhrReq = 0;
                                parent.find('.uv-loader').remove()
                                parent.find('.uv-filter-info').text(\"{{ 'Type atleast 2 letters'|trans }}\").hide();
                                if(response.length == 0) {
                                    parent.find('.uv-no-results').show();
                                    parent.find('.uv-no-results').disabled = true;
                                } else {
                                    parent.find('.uv-no-results').hide();
                                    _.each(response, function(item) {
                                        parent.find('.uv-dropdown-list ul').append(\"<li data-id='\" + item.id + \"'>\" + item.name + \"</li>\")
                                    });
                                }
                            },
                            error: function (xhr) {
                                self.xhrReq = 0;
                                parent.find('.uv-loader').remove()
                                parent.find('.uv-no-results').hide();
                                parent.find('.uv-filter-info').text(\"{{ 'Type atleast 2 letters'|trans }}\").show();

                                if(url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                            }
                        });
                    } else {
                        parent.find('.uv-no-results').hide();
                    }
                },1000)
            });

            // Ticket Thread View
            var ThreadItem = Backbone.View.extend({
                tagName : \"div\",
                className : \"uv-ticket-main\",
                template : _.template(\$(\"#thread_list_item_tmp\").html()),
                editThreadTemplate : _.template(\$(\"#edit_thread_tmp\").html()),
                events : {
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"delete\"]': 'confirmRemove',
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"lock\"]': 'lockAndUnlockThread',
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"pin\"]': 'pinThread',
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"mark\"]': 'markForTask',
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"forward\"]' : 'forwardThread',
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"edit\"]' : 'editThread',
                    'click .uv-btn.cancel-edit' : 'cancelEdit',
                    'click .uv-btn.saveThread' : 'updateThread',
                    'click .copy-thread-link' : 'copyThreadLink',
                    'blur .input-copy-thread-link': 'removeCopyThreadLink'
                },
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));

                    this.\$el.addClass(\"thread-\" + this.model.id)
                    if(this.model.attributes.threadType == 'note')
                        this.\$el.addClass('uv-ticket-note')
                    return this;
                },
                unrender : function(response) {
                    if(response.alertMessage != undefined) {
                        var self = this;
                        {# threadCollection.models.remove(this.model); #}
                        threadCollection.models = threadCollection.models.filter(thread => {
                            if(thread.id == self.model.id) {
                                return false;
                            }

                            return true;
                        });
                        this.remove();
                        threadCollection.syncData();
                        app.appView.renderResponseAlert(response);
                    }
                },
                confirmRemove: function(e) {
                    app.appView.openConfirmModal(this);
                },
                removeItem : function() {
                    self = this;
                    var index = threadIds.indexOf(this.model.id);
                    if (index > -1)
                        threadIds.splice(index, 1);
                    app.appView.showLoader();
                    this.model.destroy({
                        url : \"{{ path('helpdesk_member_thread_xhr') }}/\" + this.model.id,
                        data : { 'ticketId' : ticketModel.attributes.id },
                        success : function (model, response, options) {
                            app.appView.hideLoader();
                            self.unrender(response);
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                },
                lockAndUnlockThread :function(e) {
                    self = this;
                    currentElement = Backbone.\$(e.currentTarget);
                    var isLocked = 0;
                    if(this.model.get('isLocked')) {
                        this.model.set('isLocked', 0);
                        currentElement.attr('data-id', isLocked).text(\"{{ 'Lock Thread'|trans }}\");
                    } else {
                        isLocked = 1;
                        this.model.set('isLocked', 1);
                        currentElement.attr('data-id', isLocked).text(\"{{ 'Unlock Thread'|trans }}\");
                    }
                    app.appView.showLoader();
                    this.model.save({
                        isLocked: isLocked,
                        id: this.model.id,
                        ticketId: ticketModel.attributes.id,
                        updateType: 'lock'
                    }, {
                        patch: true,
                        url : \"{{ path('helpdesk_member_thread_xhr') }}/\" + this.model.id,
                        success : function (model, response, options) {
                            self.toggleThreadPropertyIcon()
                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                },
                pinThread :function(e) {
                    self = this;
                    currentElement = Backbone.\$(e.currentTarget);
                    var bookmark = 0;
                    if(this.model.get('bookmark')) {
                        this.model.set('bookmark', 0);
                        currentElement.attr('data-id', bookmark).text(\"{{ 'Pin Thread'|trans }}\");
                    } else {
                        bookmark = 1;
                        this.model.set('bookmark', 1);
                        currentElement.attr('data-id', bookmark).text(\"{{ 'Unpin Thread'|trans }}\");
                    }
                    app.appView.showLoader();
                    this.model.save({
                        bookmark: bookmark,
                        id: this.model.id,
                        ticketId: ticketModel.attributes.id,
                        updateType: 'bookmark'
                    }, {
                        patch: true,
                        url : \"{{ path('helpdesk_member_thread_xhr') }}/\" + this.model.id,
                        success : function (model, response, options) {
                            self.toggleThreadPropertyIcon()
                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                },
                forwardThread : function(e) {
                    var element = Backbone.\$(e.currentTarget);
                    tinymce.get('forward-area').setContent(this.model.attributes.reply);
                    \$('#forward-area').parent().find('img').removeAttr('crossorigin');
                    \$(\".uv-tabs li[for='forward']\").trigger('click');

                    \$('.uv-ticket-scroll-region').animate({
                        scrollTop: \$('#default').outerHeight()
                    }, 'slow');
                },
                cancelEdit : function(e) {
                    this.initEditThread();
                    tinymce.get('uv-edit-thread').destroy()
                },
                editThread : function(e) {
                    \$('.thread-edit-container .cancel-edit').trigger('click');
                    this.initEditThread();
                    this.\$el.find('.message').hide().after(this.editThreadTemplate());
                    this.\$el.find('.uv-ticket-uploads').hide()

                    InitTinyMce('#uv-edit-thread');
                    tinymce.get('uv-edit-thread').setContent(this.model.attributes.reply);
                    this.\$el.find('img').removeAttr('crossorigin');
                },
                initEditThread: function() {
                    \$('.thread-edit-container').remove();
                    messageElement = this.\$el.find('.message');
                    messageElement.show();
                    this.\$el.find('.uv-ticket-uploads').show()
                },
                updateThread : function(e) {
                    e.preventDefault();
                    var currentElement = Backbone.\$(e.currentTarget);
                    parent = currentElement.parents('.thread-edit-container')
                    parent.find('.uv-field-message').remove()

                    var html = tinyMCE.get(\"uv-edit-thread\").getContent();
                    if(app.appView.stripHTML(html) != '') {
                        var self = this;
                        currentElement.attr(\"disabled\", \"disabled\");
                        this.model.set('reply', html);
                        app.appView.showLoader()
                        this.model.save({}, {
                            url : \"{{ path('helpdesk_member_thread_update_xhr') }}/\" + this.model.id,
                            success : function (model, response, options) {
                                app.appView.hideLoader()
                                messageElement = self.\$el.find('.message');
                                if(response.alertClass == 'success') {
                                    messageElement.html(self.model.attributes.reply).show();
                                    messageElement.find('.uv-icon-ellipsis').remove();
                                    messageElement.find('.helpdesk_blockquote').eq(0).before(\"<span class='uv-icon-ellipsis uv-ellipsis-mirror'></span>\").hide();
                                }

                                self.initEditThread();
                                tinymce.get('uv-edit-thread').destroy()
                                app.appView.renderResponseAlert(response);
                            },
                            error: function (model, xhr, options) {
                                self.initEditThread();
                                tinymce.get('uv-edit-thread').destroy()
                                if(url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                                var response = warningResponse;
                                if(xhr.responseJSON)
                                    response = xhr.responseJSON;
                                app.appView.hideLoader()
                                app.appView.renderResponseAlert(response);
                            }
                        });
                    } else {
                        this.\$el.find('.uv-element-block-textarea').append(\"<span class='uv-field-message'>{{ 'This field is mandatory'|trans }}</span>\");
                    }
                },
                toggleCreateTaskBar : function() {
                    if(threadIds.length) {
                        \$(\"#uv-task-view\").css('right', '0px');
                        \$(\"#uv-task-view .uv-create-task\").show()
                        \$(\"#uv-task-view .uv-task-list\").hide()
                    } else {
                        \$(\"#uv-task-view\").css('right', '-300px');
                        \$(\"#uv-task-view .uv-create-task\").hide()
                        \$(\"#uv-task-view .uv-task-list\").show()
                    }
                },
                copyThreadLink: function(e){
                    _.delay(function(){
                        \$(e.currentTarget).before('<input type=\"text\" class=\"input-copy-thread-link uv-field\" value=\"' + window.location.href + '\"/>');
                        \$(e.currentTarget).prev().focus().select();
                    }, 100);
                },
                removeCopyThreadLink: function(e){
                    \$(e.currentTarget).remove();
                },
                toggleThreadPropertyIcon: function(e) {
                    if(jQuery.inArray(this.model.id, threadIds) !== -1 || this.model.get('bookmark') || this.model.get('isLocked')) {
                        this.\$el.find('.uv-icon-pinned').parents('.uv-ticket-strip').show()
                    } else {
                        this.\$el.find('.uv-icon-pinned').parents('.uv-ticket-strip').hide()
                    }

                    if(jQuery.inArray(this.model.id, threadIds) !== -1)
                        this.\$el.find('.uv-icon-marked-task').parent().show()
                    else
                        this.\$el.find('.uv-icon-marked-task').parent().hide()

                    if(this.model.get('bookmark'))
                        this.\$el.find('.uv-icon-pinned').parent().show()
                    else
                        this.\$el.find('.uv-icon-pinned').parent().hide()

                    if(this.model.get('isLocked'))
                        this.\$el.find('.uv-icon-locked').parent().show()
                    else
                        this.\$el.find('.uv-icon-locked').parent().hide()
                }
            });

            // Ticket Thread List
            var ThreadList = Backbone.View.extend({
                el : \$(\".thread-list\"),
                initialize : function() {
                    this.listenTo(threadCollection.fullCollection, \"add\", this.renderThread);
                },
                renderThread : function (item) {
                    var threadItem = new ThreadItem({
                        model: item
                    });
                    if(item.id < threadCollection.fullCollection.at(0).id)
                        this.\$el.prepend(threadItem.render().el);
                    else
                        this.\$el.append(threadItem.render().el);
                    threadItem.\$el.find('.helpdesk_blockquote').eq(0).before(\"<span class='uv-icon-ellipsis uv-ellipsis-mirror'></span>\").hide();
                    //emojifyRun();
                    this.\$el.find('img').removeAttr('crossorigin');
                    this.\$el.find('div.message a').attr('target', '_blank');
                    app.appView.relativeTime();
                }
            });

            // Ticket Pagination View
            var Pagination = Backbone.View.extend({
                el: \$('.uv-ticket-accordion'),
                events: {
                    'click .uv-ticket-count-stat': 'loadMore',
                },
                renderPagination: function(pagination) {
                    if(pagination.totalCount - pagination.lastItemNumber > 0 && pagination.lastItemNumber > 0) {
                        var remain = pagination.totalCount - pagination.lastItemNumber;
                        \$('.uv-ticket-count-stat').text(remain)
                        \$('.uv-ticket-accordion').removeClass('uv-ticket-accordion-expanded').removeClass('uv-ticket-accordion-no-count')
                    } else {
                        \$('.uv-ticket-accordion').addClass('uv-ticket-accordion-expanded').addClass('uv-ticket-accordion-no-count')
                    }
                },
                loadMore: function() {
                    threadCollection.syncData();
                }
            });

            // Ticket collaborator Item View
            var CollaboratorItem = Backbone.View.extend({
                tagName : \"a\",
                className: 'uv-btn-tag',
                template : _.template(\"{% if user_service.isAccessAuthorized('ROLE_AGENT_DELETE_COLLABORATOR_FROM_TICKET') %}<span class='uv-tag'><span class='uv-icon-remove-dark-before'></span><%- name %></span>{% else %}<span class='uv-tag-delete'><%- name %></span>{% endif %}\"),
                events : {
                    'click .uv-tag' : 'confirmRemove'
                },
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));
                    return this;
                },
                unrender : function(response) {
                    if(response.alertMessage != undefined) {
                        app.appView.renderResponseAlert(response);
                    }
                },
                removeItem: function() {
                    {% if user_service.isAccessAuthorized('ROLE_AGENT_ADD_COLLABORATOR_TO_TICKET') %}
                        self = this;
                        app.appView.showLoader();
                        this.model.destroy({
                            data : { 'ticketId' : this.model.attributes.ticketId },
                            success : function (model, response, options) {
                                app.appView.hideLoader();
                                self.\$el.remove();
                                self.unrender(response);
                            },
                            error: function (model, xhr, options) {
                                if(url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                                var response = warningResponse;
                                if(xhr.responseJSON)
                                    response = xhr.responseJSON;

                                app.appView.hideLoader();
                                app.appView.renderResponseAlert(response);
                            }
                        });
                    {% endif %}
                },
                confirmRemove: function(e) {
                    e.preventDefault();
                    {% if user_service.isAccessAuthorized('ROLE_AGENT_ADD_COLLABORATOR_TO_TICKET') %}
                        app.appView.openConfirmModal(this);
                    {% endif %}
                }
            });

            // Ticket Collaborator View
            var CollaboratorList = Backbone.View.extend({
                el : \$(\".collaborator-list-block\"),
                events : {
                    'keypress .uv-field' : 'addCollaborator',
                    'focusout .uv-field' : 'removeErrorClass'
                },
                initialize : function() {
                    //Backbone.Validation.bind(this);
                },
                render : function() {
                    this.\$el.find(\".collaborator-list\").html('');
                    var self = this;
                    collaboratorOptionHtml = '';

                    if(collaboratorCollection.length) {
                        _.each(collaboratorCollection.models, function (item) {
                            this.renderCollaborator(item);
                        }, this);
                    }
                    ticketView.addCCCollaborators()
                },
                renderCollaborator : function (item) {
                    var collaborator = new CollaboratorItem({
                        model: item
                    });
                    this.\$el.find('.collaborator-list').append(collaborator.render().el);
                },
                removeErrorClass: function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    inputElement.removeClass('uv-field-error');
                    inputElement.parents('.uv-element-block').find('.uv-field-message').remove()
                },
                addCollaborator : function(e) {
                    {% if user_service.isAccessAuthorized('ROLE_AGENT_ADD_COLLABORATOR_TO_TICKET') %}
                        var inputElement = Backbone.\$(e.currentTarget);
                        inputElement.removeClass('uv-field-error');
                        inputElement.parents('.uv-element-block').find('.uv-field-message').remove()
                        var text = inputElement.val().trim();

                        if (e.which === 13 && text) {
                            this.model = new CollaboratorModel();
                            self = this;
                            this.model.set({email: text})

                            if(this.model.isValid(true)) {
                                app.appView.showLoader();
                                this.model.save({},{
                                    success : function (model, response, options) {
                                        inputElement.val('');
                                        if(response.alertClass == \"success\") {
                                            collaboratorCollection.add(model);
                                        }
                                        self.render();
                                        app.appView.hideLoader();
                                        app.appView.renderResponseAlert(response);
                                    },
                                    error: function (model, xhr, options) {
                                        if(url = xhr.getResponseHeader('Location'))
                                            window.location = url;
                                        var response = warningResponse;
                                        if(xhr.responseJSON)
                                            response = xhr.responseJSON;

                                        app.appView.hideLoader();
                                        app.appView.renderResponseAlert(response);
                                    }
                                });
                            } else {
                                inputElement.addClass('uv-field-error');
                                if(text)
                                    inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>{{ 'Email address is invalid'|trans }}</span>\");
                            }
                        }
                    {% endif %}
                }
            });


            // Ticket Tag Item View
            var TagItem = Backbone.View.extend({
                tagName : \"a\",
                className : \"uv-btn-tag\",
                template : _.template(\"<span class='uv-tag'>{% if user_service.isAccessAuthorized('ROLE_AGENT_DELETE_TAG') %}<span class='uv-icon-remove-dark-before'></span>{% endif %}<%- name %></span>\"),
                events : {
                    'click .uv-tag' : \"confirmRemove\"
                },
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));
                    return this;
                },
                unrender : function(response) {
                    if(response.alertMessage != undefined) {
                        tagListView.render();
                        app.appView.renderResponseAlert(response);
                    }
                },
                removeItem : function () {
                    {% if user_service.isAccessAuthorized('ROLE_AGENT_DELETE_TAG') %}
                    self = this;
                    app.appView.showLoader();
                    this.model.destroy({
                        data : { 'ticketId' : ticketModel.id } ,
                        success : function (model, response, options) {
                            app.appView.hideLoader();
                            self.\$el.remove();
                            self.unrender(response);
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                    {% endif %}
                },
                confirmRemove: function(e) {
                    e.preventDefault();
                    {% if user_service.isAccessAuthorized('ROLE_AGENT_DELETE_TAG') %}
                    app.appView.openConfirmModal(this)
                    {% endif %}
                }
            });

            // Ticket Tag View
            var TagList = Backbone.View.extend({
                el : \$(\".tag-list-block\"),
                events : {
                    'keypress .uv-field' : 'addTag',
                    'focusout .uv-field' : 'removeErrorClass',
                    'click .uv-dropdown-list li': 'addTag'
                },
                render : function() {
                    var self = this;
                    this.\$el.find(\".tag-list\").html('');
                    if(tagCollection.length) {
                        _.each(tagCollection.models, function (item) {
                            this.renderTag(item);
                        }, this);
                    }
                },
                renderTag : function (item) {
                    var tag = new TagItem({
                        model: item
                    });
                    this.\$el.find('.tag-list').append(tag.render().el);
                },
                addTag : function(e) {
                    {% if user_service.isAccessAuthorized('ROLE_AGENT_ADD_TAG') %}
                        var currentElement = Backbone.\$(e.currentTarget);
                        if(currentElement.is('li')) {
                            var inputElement = currentElement.parents('.uv-field-block').find('.uv-dropdown-other');
                            var text = currentElement.text().trim();
                        } else {
                            var inputElement = currentElement;
                            var text = inputElement.val().trim();
                        }
                        inputElement.removeClass('uv-field-error');
                        inputElement.parents('.uv-element-block').find('.uv-field-message').remove()

                        if (currentElement.is('li') || (e.which === 13 && text)) {
                            if(text.length <= 20) {
                                if(tagCollection.isTagExist(text)) {
                                    var self = this;
                                    inputElement.val('');
                                    this.model = new TagModel();
                                    this.model.set({name:text});
                                    self = this;

                                    app.appView.showLoader();
                                    this.model.save({}, {
                                        success: function (model, response, options) {
                                            inputElement.parent().find(\"li:not(.uv-no-results)\").remove()
                                            inputElement.parent().find(\".uv-no-results\").show()
                                            if(!currentElement.is('li')) {
                                                inputElement.trigger('click')
                                            }
                                            if(response.alertClass == \"success\") {
                                                tagCollection.add(model);
                                                self.render();
                                            }

                                            app.appView.hideLoader();
                                            app.appView.renderResponseAlert(response);
                                        },
                                        error: function (model, xhr, options) {
                                            if(url = xhr.getResponseHeader('Location'))
                                                window.location = url;
                                            var response = warningResponse;
                                            if(xhr.responseJSON)
                                                response = xhr.responseJSON;

                                            app.appView.hideLoader();
                                            app.appView.renderResponseAlert(response);
                                        }
                                    });
                                } else {
                                    inputElement.addClass('uv-field-error');
                                    inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>{{ 'Tag with same name already exist'|trans }}</span>\");
                                }
                            } else {
                                inputElement.addClass('uv-field-error');
                                inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>{{ 'Text length should be less than 20 charactors'|trans }}</span>\");
                            }
                        }
                    {% endif %}
                },
                removeErrorClass: function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    inputElement.removeClass('uv-field-error');
                    inputElement.parents('.uv-element-block').find('.uv-field-message').remove()
                },
            });

            // Ticket Label Item View
            var LabelItem = Backbone.View.extend({
                tagName : \"a\",
                className : \"uv-btn-label\",
                template : _.template(\"<span class='uv-tag'><span class='uv-icon-remove-before'></span><%- name %></span>\"),
                events : {
                    'click .uv-tag' : \"confirmRemove\"
                },
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));
                    return this;
                },
                unrender : function(response) {
                    if(response.alertMessage != undefined) {
                        labelListView.render();
                        app.appView.renderResponseAlert(response);
                    }
                },
                removeItem : function () {
                    self = this;
                    app.appView.showLoader();

                    this.model.destroy({
                        url : \"{{ path('helpdesk_member_update_ticket_attributes_xhr') }}\",
                        data : { attribute :'label', 'ticketId': ticketModel.id, 'labelId': this.model.get('id') },
                        success : function (model, response, options) {
                            app.appView.hideLoader();
                            self.\$el.remove();
                            self.unrender(response);
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                },
                confirmRemove: function(e) {
                    e.preventDefault();
                    app.appView.openConfirmModal(this)
                }
            });

            // Ticket Label View
            var LabelList = Backbone.View.extend({
                el : \$(\".label-list-block\"),
                events : {
                    'keypress .uv-field' : 'addLabel',
                    'focusout .uv-field' : 'removeErrorClass',
                    'click .uv-dropdown-list li': 'addLabel'
                },
                render : function() {
                    var self = this;
                    this.\$el.find(\".label-list\").html('');
                    if(labelCollection.length) {
                        _.each(labelCollection.models, function (item) {
                            this.renderLabel(item);
                        }, this);
                    }
                },
                renderLabel : function (item) {
                    var label = new LabelItem({
                        model: item
                    });
                    lavelItem = label.render().el;
                    \$(lavelItem).attr('style', 'background:' + item.attributes.color)
                    this.\$el.find('.label-list').append(lavelItem);
                },
                addLabel : function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    if(currentElement.is('li')) {
                        var inputElement = currentElement.parents('.uv-field-block').find('.uv-dropdown-other');
                        var text = currentElement.text().trim();
                    } else {
                        var inputElement = currentElement;
                        var text = inputElement.val().trim();
                    }
                    inputElement.removeClass('uv-field-error');
                    inputElement.parents('.uv-element-block').find('.uv-field-message').remove()

                    if (currentElement.is('li') || (e.which === 13 && text)) {
                        if(text.length <= 20) {
                            if(labelCollection.isLabelExist(text)) {
                                var self = this;
                                inputElement.val('');
                                this.model = new LabelModel();
                                this.model.set({name:text});
                                self = this;

                                app.appView.showLoader();
                                this.model.save({}, {
                                    success: function (model, response, options) {
                                        inputElement.parent().find(\"li:not(.uv-no-results)\").remove()
                                        inputElement.parent().find(\".uv-no-results\").show()
                                        if(!currentElement.is('li')) {
                                            inputElement.trigger('click')
                                        }
                                        if(response.alertClass == \"success\") {
                                            labelCollection.add(model);
                                            self.render();
                                        }

                                        app.appView.hideLoader();
                                        app.appView.renderResponseAlert(response);
                                    },
                                    error: function (model, xhr, options) {
                                        if(url = xhr.getResponseHeader('Location'))
                                            window.location = url;
                                        var response = warningResponse;
                                        if(xhr.responseJSON)
                                            response = xhr.responseJSON;

                                        app.appView.hideLoader();
                                        app.appView.renderResponseAlert(response);
                                    }
                                });
                            } else {
                                inputElement.addClass('uv-field-error');
                                inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>{{ 'Label with same name already exist'|trans }}</span>\");
                            }
                        } else {
                            inputElement.addClass('uv-field-error');
                            inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>{{ 'Text length should be less than 20 charactors'|trans }}</span>\");
                        }
                    }
                },
                removeErrorClass: function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    inputElement.removeClass('uv-field-error');
                    inputElement.parents('.uv-element-block').find('.uv-field-message').remove()
                },
            });

            // Ticket Router
            var Router = Backbone.Router.extend({
                routes: {
                    'thread/:thread' : 'threadRequestedId'
                },
                threadRequestedId: function(thread){
                    threadCollection.threadRequestedId = thread;
                },
                scrollPage : function(divId) {
                    if(\$(divId).length){
                        \$('li a[href=\"'+divId+'\"]').trigger('click');
                        \$('.uv-ticket-scroll-region').animate({
                            scrollTop: \$(divId).offset().top
                        }, 'slow');
                    } else if(divId == '#') { //scroll to last thread added
                        if(threadCollection.fullCollection.length)
                            this.scrollPage('#thread' + threadCollection.fullCollection.at(0).id);
                    }
                }
            });

            var customerForm = new CustomerForm({
                el : \$(\".uv-main-info-update-block\"),
                model : new CustomerModel()
            });

            var ticketNavigation = \$.parseJSON('{{ ticketNavigationIteration|json_encode|raw }}');

            var ticketModel = new TicketModel({
                id : \"{{ ticket.id }}\",
                status : \"{{ ticket.status.id }}\",
                priority : \"{{ ticket.priority.id }}\",
                group : \"{{ ticket.supportGroup ? ticket.supportGroup.id : '' }}\",
                subGroup : \"{{ ticket.supportTeam ? ticket.supportTeam.id : '' }}\",
                agent : \"\",
                profileImage : \"\",
                isTrashed : \"{{ ticket.isTrashed }}\"
            });

            ticketApp.ticketView = ticketView = new TicketView({
                model: ticketModel
            });

            uvdesk.ticket.model = ticketModel;

            threadCollection = new ThreadCollection();
            var threadList = new ThreadList();
            var pagination = new Pagination();

            var collaboratorCollection = new CollaboratorCollection(\$.parseJSON('{{ ticket_service.getTicketCollaborators(ticket.id)|json_encode|raw }}'));
            var collaboratorList = new CollaboratorList();
            collaboratorList.render();

            var tagCollection = new TagCollection(\$.parseJSON('{{ ticket_service.getTicketTagsById(ticket.id)|json_encode|raw }}'));
            var tagListView = new TagList();
            tagListView.render();

            var labelCollection = new LabelCollection(\$.parseJSON('{{ ticket_service.getTicketLabels(ticket.id)|json_encode|raw }}'));
            var labelListView = new LabelList();
            labelListView.render();

            var router = new Router();
            Backbone.history.start({push_state:true});

            threadCollection.syncData();
        });
    </script>

    <script>
        var sfTinyMceNew = \$.extend({}, sfTinyMce);
        var toolbarOptions = sfTinyMce.options.toolbar;

        sfTinyMce.init({
            selector : '.uv-ticket-reply textarea',
            toolbar: toolbarOptions + ' | translate',
            mentions : getMentions(),
            images_upload_url: \"\",
            setup: function(editor) {
                editor.on('keydown', function(e) { /** for pageup, pagedown keys **/
                    if(e.keyCode == 34 || e.keyCode == 33){
                        e.preventDefault();
                    }
                });
                addTranslateButton(editor);
            }
        });

        function InitTinyMce(selector) {
            let sfTinyMceNew2 = \$.extend({}, sfTinyMceNew);
            sfTinyMceNew2.init({
                selector : selector,
                mentions : getMentions(),
                setup: function(editor) {
                    addTranslateButton(editor);
                }
            });
        }

        function getMentions(){
            return {
                delimiter: ['#'],
                items: 15,
                source: function(){
                    return [
                        {
                            name : \"{{ 'Ticket Id'|trans }}\",
                            value : \"{{ ticket.id }}\",
                        },
                        {
                            name : \"{{ 'Subject'|trans }}\",
                            value : \"{{ ticket.subject|replace({\"\\n\":' ', \"\\r\":' '}) }}\",
                        },
                        {
                            name : \"{{ 'Status'|trans }}\",
                            value : \"{{ ticket.status.description }}\",
                        },
                        {
                            name : \"{{ 'Priority'|trans }}\",
                            value : \"{{ ticket.priority.description|trans }}\",
                        },
                        {
                            name : \"{{ 'Type'|trans }}\",
                            value : \"{{ ticket.type ? ticket.type.description : 'Not Assigned'|trans }}\",
                        },
                        {
                            name : \"{{ 'Group'|trans }}\",
                            value : \"{{ ticket.supportGroup ? ticket.supportGroup.description : 'Not Assigned'|trans }}\",
                        },
                        {
                            name : \"{{ 'Team'|trans }}\",
                            value : \"{{ ticket.supportTeam ? ticket.supportTeam.description : 'Not Assigned'|trans }}\",
                        },
                        {
                            name : \"{{ 'Customer Name'|trans }}\",
                            value : \"{{ customer.name }}\",
                        },
                        {
                            name : \"{{ 'Customer Email'|trans }}\",
                            value : \"{{ customer.email }}\",
                        },
                        {
                            name : \"{{ 'Agent Name'|trans }}\",
                            value : \"{{ ticketAgent.name is defined ? ticketAgent.name : 'Not Assigned'|trans }}\",
                        },
                        {
                            name : \"{{ 'Agent Email'|trans }}\",
                            value : \"{{ ticketAgent.email is defined ? ticketAgent.email : 'Not Assigned'|trans }}\",
                        }
                    ];
                },
                insert: function(item) {
                    return '<span>' + item.value + '</span>';
                }
            };
        }
    </script>
{% endblock %}
", "@UVDeskCoreFramework/ticket.html.twig", "/home/lexcorp.xyz/public_html/uvdesk/vendor/uvdesk/core-framework/Resources/views/ticket.html.twig");
    }
}
