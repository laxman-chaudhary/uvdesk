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

/* @UVDeskSupportCenter/Knowledgebase/ticketView.html.twig */
class __TwigTemplate_78e5737b6e42f8ac0bd5788f01ff36974fb4e8b1694d7060f4b99d60a55bd883 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'ogtitle' => [$this, 'block_ogtitle'],
            'twtitle' => [$this, 'block_twtitle'],
            'tabHeader' => [$this, 'block_tabHeader'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@UVDeskSupportCenter/Templates/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/ticketView.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/ticketView.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskSupportCenter/Templates/layout.html.twig", "@UVDeskSupportCenter/Knowledgebase/ticketView.html.twig", 1);
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

        echo "#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3, $this->source); })()), "subject", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_ogtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogtitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogtitle"));

        echo "#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 4, $this->source); })()), "subject", [], "any", false, false, false, 4), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_twtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "twtitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "twtitle"));

        echo "#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 5, $this->source); })()), "subject", [], "any", false, false, false, 5), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_tabHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabHeader"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabHeader"));

        // line 8
        echo "\t<div class=\"uv-nav-bar uv-nav-tab\">
\t\t<div class=\"uv-container\">
\t\t\t<div class=\"uv-nav-bar-lt\">
\t\t\t\t<ul class=\"uv-nav-tab-label\">
\t\t\t\t\t<li><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_ticket_collection");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket Requests"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t";
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 13, $this->source); })()), "ticketCreateOption", [], "any", false, false, false, 13)) {
            // line 14
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_create_ticket");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New Ticket Request"), "html", null, true);
            echo "</a></li>
                    ";
        }
        // line 16
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"uv-nav-bar-rt\">
\t\t\t\t<form method=\"get\" action=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_front_article_search");
        echo "\">
\t\t\t\t\t<input name=\"s\" class=\"uv-nav-search\" type=\"text\" placeholder=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        echo "\">
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "    <style>
        .uv-btn-tag {
            margin-right: 5px;
        }
        .uv-group-field {
            width: 80%;
        }
        .uv-element-block .mce-tinymce {
            margin-top: 10px;
        }
        .uv-ticket-view .uv-ticket-accordion .uv-ticket-wrapper {
            display: block;
        }
        .message {
            font-size: 15px;
        }
        .message img {
            max-width: 100%;
        }
        .uv-dropdown.reply .uv-dropdown-btn-active {
            border: none;
        }
        .uv-dropdown.reply .uv-dropdown-list {
            width: 220px;
            bottom: 47px;
        }

\t\t.uv-rtl .uv-top-left {
\t\t\tleft: unset;
\t\t}

\t\t.uv-rtl .uv-dropdown-list {
\t\t\ttext-align: right;
\t\t}

        .uv-action-buttons {
            margin: 10px 0px;
        }

        .uv-action-buttons .uv-btn:first-child {
            margin-left: 0px;
        }

\t\t.uv-rtl .uv-action-buttons .uv-btn:first-child {
\t\t\tmargin-left: 5px;
\t\t\tmargin-right: 0px;
\t\t}

        .uv-action-buttons .uv-btn {
            margin: 5px;
        }

        form #customFieldCollection .uv-field-error-icon, form #customFieldCollection .uv-field-success-icon {
            display: none;
        }

        .custom-field-field-display .uv-field-block {
            width: 100%;
            color: #333333;
            word-wrap: break-word;
        }

        .custom-field-field-display .uv-field-block span {
            display: inline;
        }
        .uv-submit-left-side {
            margin: 0!important;
            padding-right: 5px;
            border-bottom-right-radius: 0;
            border-top-right-radius: 0;
        }
\t\t.uv-rtl .uv-submit-left-side {
\t\t\tpadding-right: 10px;
            border-bottom-right-radius: 3px;
            border-top-right-radius: 3px;
\t\t\tpadding-left: 5px;
\t\t\tborder-bottom-left-radius: 0;
            border-top-left-radius: 0;
\t\t}
        .uv-submit-right-side {
            margin: 0!important;
        }
        .no-left-padding {
            padding-left: 0;
            border-bottom-left-radius: 0;
            border-top-left-radius: 0;
        }
\t\t.uv-rtl .no-left-padding {
\t\t\tpadding-left: 10px;
            border-bottom-left-radius: 3px;
            border-top-left-radius: 3px;
\t\t\tpadding-right: 0;
\t\t\tborder-bottom-right-radius: 0;
\t\t\tborder-top-right-radius: 0;
\t\t}
        .uv-btn-error {
            background-color: #FF5656!important;
        }
        .uv-pull-rightside {
            float: right;
            font-size: 15px;
            cursor: pointer;
        }
\t\t.uv-rtl .uv-pull-rightside {
            float: left;
        }
        .uv-print-icon {
            display: inline-block;
            width: 20px;
            height: 20px;
            background-image: url(\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/images/uvdesk-kb-sprite.svg"), "html", null, true);
        echo "\");
            background-position: -176px -91px;
            vertical-align: middle;
        }
        @media print {
            .uv-navbar,.uv-ticket-action-bar, .uv-kudo, .uv-aside-back, .uv-footer, .uv-ticket-main.uv-ticket-reply, .uv-nav-bar,input, .uv-dropdown-list>.uv-dropdown-container,.uv-notifications-wrapper,.uv-pop-up-overlay,.uv-loader-view, .uv-loader,.uv-header,.uv-upload-actions,.uv-pull-rightside {
                display: none !important;
            }
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
    </style>

    ";
        // line 167
        $context["ticketAgent"] = ((twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 167, $this->source); })()), "agent", [], "any", false, false, false, 167)) ? (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 167, $this->source); })()), "getAgentDetailById", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 167, $this->source); })()), "agent", [], "any", false, false, false, 167), "id", [], "any", false, false, false, 167)], "method", false, false, false, 167)) : (null));
        // line 168
        echo "    ";
        $context["totalThreads"] = twig_get_attribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 168, $this->source); })()), "getTicketTotalThreads", [0 => twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 168, $this->source); })()), "id", [], "any", false, false, false, 168)], "method", false, false, false, 168);
        // line 169
        echo "    ";
        $context["customer"] = twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 169, $this->source); })()), "getCustomerPartialDetailById", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 169, $this->source); })()), "customer", [], "any", false, false, false, 169), "id", [], "any", false, false, false, 169)], "method", false, false, false, 169);
        // line 170
        echo "    ";
        $context["createThread"] = twig_get_attribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 170, $this->source); })()), "getCreateReply", [0 => twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 170, $this->source); })()), "id", [], "any", false, false, false, 170), 1 => "customer"], "method", false, false, false, 170);
        // line 171
        echo "    ";
        $context["currentUser"] = twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 171, $this->source); })()), "getCustomerPartialDetailById", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 171, $this->source); })()), "user", [], "any", false, false, false, 171), "id", [], "any", false, false, false, 171)], "method", false, false, false, 171);
        // line 172
        echo "
    <div class=\"uv-thread\">
        <div class=\"uv-thread-lt\">
            <aside>
                <h6>";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket Information"), "html", null, true);
        echo "</h6>
                <div class=\"uv-aside-brick\">
                    <h6>";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total Replies"), "html", null, true);
        echo "</h6>
                    <span class=\"uv-icon-replies\"></span>
                    <span>";
        // line 180
        echo twig_escape_filter($this->env, (isset($context["totalThreads"]) || array_key_exists("totalThreads", $context) ? $context["totalThreads"] : (function () { throw new RuntimeError('Variable "totalThreads" does not exist.', 180, $this->source); })()), "html", null, true);
        echo "</span>
                </div>
                <div class=\"uv-aside-brick\">
                    <h6>";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Timestamp"), "html", null, true);
        echo "</h6>
                    <span class=\"uv-icon-timestamp\"></span>
                    <span>";
        // line 185
        echo twig_escape_filter($this->env, (isset($context["localizedCreateAtTime"]) || array_key_exists("localizedCreateAtTime", $context) ? $context["localizedCreateAtTime"] : (function () { throw new RuntimeError('Variable "localizedCreateAtTime" does not exist.', 185, $this->source); })()), "html", null, true);
        echo "</span>
                </div>

                <div class=\"uv-hr\"></div>
                ";
        // line 189
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 189, $this->source); })()), "customer", [], "any", false, false, false, 189), twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 189, $this->source); })()), "user", [], "any", false, false, false, 189)))) {
            // line 190
            echo "                    <div class=\"uv-aside-brick\">
                        <h6>";
            // line 191
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer"), "html", null, true);
            echo "</h6>
                        <span>";
            // line 192
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 192, $this->source); })()), "name", [], "any", false, false, false, 192), "html", null, true);
            echo "</span>
                    </div>
                ";
        }
        // line 195
        echo "                ";
        if ((isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 195, $this->source); })())) {
            // line 196
            echo "                    <div class=\"uv-aside-brick\">
                        <h6>";
            // line 197
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
            echo "</h6>
                        <span>";
            // line 198
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 198, $this->source); })()), "name", [], "any", false, false, false, 198), "html", null, true);
            echo "</span>
                    </div>
                ";
        }
        // line 201
        echo "                <div class=\"uv-aside-brick\">
                    <h6>";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        echo "</h6>
                    <span>";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 203, $this->source); })()), "status", [], "any", false, false, false, 203), "description", [], "any", false, false, false, 203)), "html", null, true);
        echo "</span>
                </div>
                ";
        // line 205
        if (twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 205, $this->source); })()), "type", [], "any", false, false, false, 205)) {
            // line 206
            echo "                    <div class=\"uv-aside-brick\">
                        <h6>";
            // line 207
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
            echo "</h6>
                        <span>";
            // line 208
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 208, $this->source); })()), "type", [], "any", false, false, false, 208), "code", [], "any", false, false, false, 208), "html", null, true);
            echo "</span>
                    </div>
                ";
        }
        // line 211
        echo "
                ";
        // line 212
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 212, $this->source); })()), "customer", [], "any", false, false, false, 212), twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 212, $this->source); })()), "user", [], "any", false, false, false, 212)))) {
            // line 213
            echo "                    <div class=\"uv-hr\"></div>
                    <div class=\"uv-aside-brick collaborator-list-block\">
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">";
            // line 216
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Collaborators"), "html", null, true);
            echo "</label>
                            <div class=\"uv-field-block\">
                                <input class=\"uv-field\" type=\"text\" name=\"email\" type=\"text\" value=\"\" placeholder=\"";
            // line 218
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type email to add"), "html", null, true);
            echo "\">
                            </div>
                        </div>
                        <div class=\"collaborator-list\" style=\"margin-top: 10px\">
                        </div>
                    </div>
                ";
        }
        // line 225
        echo "            </aside>
            ";
        // line 226
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 226, $this->source); })()), "isfileExists", [0 => "apps/uvdesk/form-component"], "method", false, false, false, 226)) {
            // line 227
            echo "                ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 227, $this->source); })()), "getCustomFieldTemplateCustomer", [], "method", false, false, false, 227);
            echo "
            ";
        }
        // line 229
        echo "        </div>
        <div class=\"uv-thread-rt\">
            <section>
                <div class=\"uv-ticket-view\">
                    <div class=\"uv-ticket-head\">
                        <h1>
                            ";
        // line 235
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 235, $this->source); })()), "subject", [], "any", false, false, false, 235), "html", null, true);
        echo "
                            <span class=\"uv-pull-rightside uv-print-icon\" onclick=\"window.print()\"></span>
                        </h1>
                        <div class=\"uv-ticket-strip\">
                            <span>
                                <span class=\"uv-ticket-strip-label\">";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Created"), "html", null, true);
        echo " -</span>
                                <span class=\"timeago\" data-timestamp=\"";
        // line 241
        echo twig_escape_filter($this->env, (isset($context["localizedCreateAtTime"]) || array_key_exists("localizedCreateAtTime", $context) ? $context["localizedCreateAtTime"] : (function () { throw new RuntimeError('Variable "localizedCreateAtTime" does not exist.', 241, $this->source); })()), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, (isset($context["localizedCreateAtTime"]) || array_key_exists("localizedCreateAtTime", $context) ? $context["localizedCreateAtTime"] : (function () { throw new RuntimeError('Variable "localizedCreateAtTime" does not exist.', 241, $this->source); })()), "html", null, true);
        echo "\">
                                    ";
        // line 242
        echo twig_escape_filter($this->env, (isset($context["localizedCreateAtTime"]) || array_key_exists("localizedCreateAtTime", $context) ? $context["localizedCreateAtTime"] : (function () { throw new RuntimeError('Variable "localizedCreateAtTime" does not exist.', 242, $this->source); })()), "html", null, true);
        echo " 
                                </span>
                            </span>
                            <span>
                                <span class=\"uv-ticket-strip-label\">";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("By"), "html", null, true);
        echo " -</span>
                                ";
        // line 247
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["createThread"]) || array_key_exists("createThread", $context) ? $context["createThread"] : (function () { throw new RuntimeError('Variable "createThread" does not exist.', 247, $this->source); })()), "user", [], "any", false, false, false, 247), "name", [], "any", false, false, false, 247), "html", null, true);
        echo "
                            </span>
                            ";
        // line 249
        if ((isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 249, $this->source); })())) {
            // line 250
            echo "                                <span>
                                    <span class=\"uv-ticket-strip-label\">";
            // line 251
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
            echo " -</span>
                                    ";
            // line 252
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 252, $this->source); })()), "name", [], "any", false, false, false, 252), "html", null, true);
            echo "
                                </span>
                            ";
        }
        // line 255
        echo "                        </div>
                    </div>

                    <div class=\"uv-tab-view\">
                        <div class=\"uv-ticket-section\">
                            <div class=\"uv-ticket-main create\">
                                <div class=\"uv-ticket-strip\">
                                    <span>
                                        <span class=\"timeago uv-margin-0\" data-timestamp=\"ticket.createdAt\" title=\"";
        // line 263
        echo twig_escape_filter($this->env, (isset($context["localizedCreateAtTime"]) || array_key_exists("localizedCreateAtTime", $context) ? $context["localizedCreateAtTime"] : (function () { throw new RuntimeError('Variable "localizedCreateAtTime" does not exist.', 263, $this->source); })()), "html", null, true);
        echo "\">
                                            ";
        // line 264
        echo twig_escape_filter($this->env, (isset($context["localizedCreateAtTime"]) || array_key_exists("localizedCreateAtTime", $context) ? $context["localizedCreateAtTime"] : (function () { throw new RuntimeError('Variable "localizedCreateAtTime" does not exist.', 264, $this->source); })()), "html", null, true);
        echo "
                                        </span>
                                        - ";
        // line 266
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["createThread"]) || array_key_exists("createThread", $context) ? $context["createThread"] : (function () { throw new RuntimeError('Variable "createThread" does not exist.', 266, $this->source); })()), "user", [], "any", false, false, false, 266), "name", [], "any", false, false, false, 266), "html", null, true);
        echo "
                                        <span class=\"uv-ticket-strip-label\">
                                        ";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("created Ticket"), "html", null, true);
        echo "
                                        ";
        // line 272
        echo "                                    </span>
                                </span>
                                </div>
                                <div class=\"uv-ticket-main-lt\">
                                   <img src=\"";
        // line 276
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 276, $this->source); })()), "user", [], "any", false, false, false, 276), "thumbnail", [], "any", false, false, false, 276)) ? (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 276, $this->source); })()), "request", [], "any", false, false, false, 276), "scheme", [], "any", false, false, false, 276) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 276, $this->source); })()), "request", [], "any", false, false, false, 276), "httpHost", [], "any", false, false, false, 276)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 276, $this->source); })()), "user", [], "any", false, false, false, 276), "thumbnail", [], "any", false, false, false, 276))) : ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 276, $this->source); })()), "createdBy", [], "any", false, false, false, 276), "customer"))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_customer_image_path"]) || array_key_exists("default_customer_image_path", $context) ? $context["default_customer_image_path"] : (function () { throw new RuntimeError('Variable "default_customer_image_path" does not exist.', 276, $this->source); })()))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 276, $this->source); })())))))), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"uv-ticket-main-rt\">
                                    <span class=\"uv-ticket-member-name\">
                                        ";
        // line 280
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["createThread"]) || array_key_exists("createThread", $context) ? $context["createThread"] : (function () { throw new RuntimeError('Variable "createThread" does not exist.', 280, $this->source); })()), "user", [], "any", false, false, false, 280), "name", [], "any", false, false, false, 280), "html", null, true);
        echo "
                                    </span>

                                    <!-- Message Block -->
                                    <div class=\"message\">
                                        <p>
                                            ";
        // line 286
        if ((0 === twig_compare(twig_striptags(twig_get_attribute($this->env, $this->source, (isset($context["createThread"]) || array_key_exists("createThread", $context) ? $context["createThread"] : (function () { throw new RuntimeError('Variable "createThread" does not exist.', 286, $this->source); })()), "reply", [], "any", false, false, false, 286)), twig_get_attribute($this->env, $this->source, (isset($context["createThread"]) || array_key_exists("createThread", $context) ? $context["createThread"] : (function () { throw new RuntimeError('Variable "createThread" does not exist.', 286, $this->source); })()), "reply", [], "any", false, false, false, 286)))) {
            // line 287
            echo "                                                ";
            echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["createThread"]) || array_key_exists("createThread", $context) ? $context["createThread"] : (function () { throw new RuntimeError('Variable "createThread" does not exist.', 287, $this->source); })()), "reply", [], "any", false, false, false, 287), "html", null, true));
            echo "
                                            ";
        } else {
            // line 289
            echo "                                                ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["createThread"]) || array_key_exists("createThread", $context) ? $context["createThread"] : (function () { throw new RuntimeError('Variable "createThread" does not exist.', 289, $this->source); })()), "reply", [], "any", false, false, false, 289);
            echo "
                                            ";
        }
        // line 291
        echo "                                        </p>
                                    </div>
                                    <!-- //Message Block -->

                                    <!-- Attachment Block -->
                                    ";
        // line 296
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["createThread"]) || array_key_exists("createThread", $context) ? $context["createThread"] : (function () { throw new RuntimeError('Variable "createThread" does not exist.', 296, $this->source); })()), "attachments", [], "any", false, false, false, 296))) {
            // line 297
            echo "                                        <div class=\"uv-ticket-uploads\">
                                            <h4>";
            // line 298
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Uploaded Files"), "html", null, true);
            echo "</h4>
                                            <div class=\"uv-ticket-uploads-strip uv-viewer-images\">
                                                ";
            // line 300
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["createThread"]) || array_key_exists("createThread", $context) ? $context["createThread"] : (function () { throw new RuntimeError('Variable "createThread" does not exist.', 300, $this->source); })()), "attachments", [], "any", false, false, false, 300));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 301
                echo "                                                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "downloadURL", [], "any", false, false, false, 301), "html", null, true);
                echo "\" target = \"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "name", [], "any", false, false, false, 301), "html", null, true);
                echo "\">
                                                        <img src=\"";
                // line 302
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "iconURL", [], "any", false, false, false, 302), "html", null, true);
                echo "\"  class=\"uv-auto-pointer-events\"/>
                                                    </a>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 305
            echo "                                            </div>
                                            ";
            // line 306
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["createThread"]) || array_key_exists("createThread", $context) ? $context["createThread"] : (function () { throw new RuntimeError('Variable "createThread" does not exist.', 306, $this->source); })()), "attachments", [], "any", false, false, false, 306)), 1))) {
                // line 307
                echo "                                                <div class=\"uv-upload-actions\">
                                                    <!-- <a href=\"#\"><span class=\"uv-icon-open-in-files\"></span>Open in Files</a> -->
                                                    <a href=\"";
                // line 309
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_download_ticket_attachment_zip");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["createThread"]) || array_key_exists("createThread", $context) ? $context["createThread"] : (function () { throw new RuntimeError('Variable "createThread" does not exist.', 309, $this->source); })()), "id", [], "any", false, false, false, 309), "html", null, true);
                echo "\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download (as .zip)"), "html", null, true);
                echo "</a>
                                                </div>
                                            ";
            }
            // line 312
            echo "                                        </div>
                                    ";
        }
        // line 314
        echo "                                    <!-- //Attachment Block -->
                                </div>
                            </div>

                            <!-- uv-ticket-accordion-expanded uv-ticket-accordion-no-count-->
                            <div class=\"uv-ticket-accordion\">
                                <div class=\"uv-ticket-count-wrapper\">
                                    <span class=\"uv-ticket-count-stat\">";
        // line 321
        echo twig_escape_filter($this->env, (isset($context["totalThreads"]) || array_key_exists("totalThreads", $context) ? $context["totalThreads"] : (function () { throw new RuntimeError('Variable "totalThreads" does not exist.', 321, $this->source); })()), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"uv-ticket-wrapper thread-list\">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Reply Form Block -->
                    <div class=\"uv-ticket-main uv-ticket-reply uv-no-error-success-icon\">
                        <div class=\"uv-ticket-main-lt\">
                            <span class=\"uv-icon-ellipsis\"></span>
                            ";
        // line 333
        if (twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 333, $this->source); })()), "smallThumbnail", [], "any", false, false, false, 333)) {
            // line 334
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 334, $this->source); })()), "request", [], "any", false, false, false, 334), "scheme", [], "any", false, false, false, 334) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 334, $this->source); })()), "request", [], "any", false, false, false, 334), "httpHost", [], "any", false, false, false, 334)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 334, $this->source); })()), "smallThumbnail", [], "any", false, false, false, 334), "html", null, true);
            echo "\" />
                            ";
        } else {
            // line 336
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_customer_image_path"]) || array_key_exists("default_customer_image_path", $context) ? $context["default_customer_image_path"] : (function () { throw new RuntimeError('Variable "default_customer_image_path" does not exist.', 336, $this->source); })())), "html", null, true);
            echo "\" />
                            ";
        }
        // line 338
        echo "                        </div>
                        <div class=\"uv-ticket-main-rt\">
                            <span class=\"uv-ticket-member-name\">";
        // line 340
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 340, $this->source); })()), "name", [], "any", false, false, false, 340), "html", null, true);
        echo "</span>

                            <!-- Reply Tab View -->
                            <div class=\"uv-tab-view uv-tab-view-active\" id=\"reply\">
                                <form enctype=\"multipart/form-data\" method=\"post\" action=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_add_ticket_thread", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 344, $this->source); })()), "id", [], "any", false, false, false, 344)]), "html", null, true);
        echo "\" id=\"ticket-form\">
                                    <input name=\"threadType\" value=\"reply\" type=\"hidden\">
                                    <input class=\"reply-status\" name=\"status\" value=\"\" type=\"hidden\">
                                    <div class=\"uv-element-block collaborators\" style=\"display: none\">
                                        <label class=\"uv-field-label\">";
        // line 348
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Collaborators"), "html", null, true);
        echo "</label>
                                        <div class=\"uv-field-block\">
                                        </div>
                                    </div>

                                    <div class=\"uv-element-block cc-bcc\">
                                    ";
        // line 354
        if ((0 !== twig_compare((isset($context["isCollaborator"]) || array_key_exists("isCollaborator", $context) ? $context["isCollaborator"] : (function () { throw new RuntimeError('Variable "isCollaborator" does not exist.', 354, $this->source); })()), true))) {
            // line 355
            echo "                                        <label>
                                            <div class=\"uv-checkbox\">
                                                <input type=\"checkbox\" class=\"cc-bcc-toggle\">
                                                <span class=\"uv-checkbox-view\"></span>
                                            </div>
                                            <span class=\"uv-checkbox-label\">";
            // line 360
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CC/BCC"), "html", null, true);
            echo "</span>
                                        </label>
                                    ";
        }
        // line 363
        echo "                                        <div class=\"uv-field-block\" style=\"display: none\">
                                            <div class=\"uv-group\">
                                                <input class=\"uv-group-field\" type=\"text\">
                                                <select class=\"uv-group-select cc-bcc-select\">
                                                    <option value=\"bcc\">";
        // line 367
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("BCC"), "html", null, true);
        echo "</option>
                                                    <option value=\"cc\">";
        // line 368
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CC"), "html", null, true);
        echo "</option>
                                                </select>
                                            </div>
                                            <div class=\"cc-bcc-list\">
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"uv-element-block uv-element-block-textarea\">
                                        <label class=\"uv-field-label\">";
        // line 377
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Write a reply"), "html", null, true);
        echo "</label>
                                        <div class=\"uv-field-block\">
                                            <textarea class=\"uv-field\" name=\"message\" id=\"reply-area\">";
        // line 379
        echo "</textarea>
                                        </div>
                                    </div>

                                    <!-- Field -->
                                    <div class=\"uv-element-block attachment-block\">
                                        <label>
                                            <span class=\"uv-file-label\">";
        // line 386
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Attachment"), "html", null, true);
        echo "</span>
                                        </label>
                                    </div>
                                    <!-- //Field -->

                                    <div class=\"uv-action-buttons\">
                                        <div id=\"reply-btn\" class=\"uv-btn uv-submit-left-side\">";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reply"), "html", null, true);
        echo "</div>
                                        <div class=\"uv-dropdown reply uv-submit-right-side\">
                                            <div class=\"uv-btn uv-dropdown-other no-left-padding\">
                                                <span class=\"uv-icon-down-light\"></span>
                                            </div>
                                            <div class=\"uv-dropdown-list uv-top-left\">
                                                <div class=\"uv-dropdown-container\">
                                                    <label>";
        // line 399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reply"), "html", null, true);
        echo "</label>
                                                    <ul>
                                                        <li data-id=\"\">";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit"), "html", null, true);
        echo "</li>
                                                        <li class=\"confirm-close-ticket\" data-id=\"closed\">";
        // line 402
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Closed"), "html", null, true);
        echo "</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- //Reply Tab View -->
                        </div>
                    </div>
                    <!-- Reply Form Block -->
                </div>
            </section>
        </div>
        </div>
    </div>

        <div class=\"uv-kudo\">
        <div class=\"uv-kudo-button\">
            <!--uv-kudo-button-active-->
            <div class=\"uv-kudo-icon\"></div>
            <span>";
        // line 424
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Rate Support"), "html", null, true);
        echo "</span>
        </div>

        <div class=\"uv-kudo-plank\">
            ";
        // line 428
        $context["count"] = 0;
        // line 429
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 429, $this->source); })()), "ratings", [], "any", false, false, false, 429));
        foreach ($context['_seq'] as $context["_key"] => $context["rating"]) {
            // line 430
            echo "                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rating"], "getCustomer", [], "any", false, false, false, 430), "id", [], "any", false, false, false, 430), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 430, $this->source); })()), "user", [], "any", false, false, false, 430), "id", [], "any", false, false, false, 430)))) {
                // line 431
                echo "                    ";
                $context["count"] = twig_get_attribute($this->env, $this->source, $context["rating"], "getStars", [], "any", false, false, false, 431);
                // line 432
                echo "                ";
            }
            // line 433
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rating'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 434
        echo "            <div class=\"uv-kudo-response-wrapper\">
                <span class=\"uv-kudo-response uv-kudo-very-sad ";
        // line 435
        if ((0 === twig_compare((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 435, $this->source); })()), 1))) {
            echo "uv-kudo-done";
        }
        echo "\" data-id=\"1\"></span>
                <span class=\"uv-kudo-response uv-kudo-sad ";
        // line 436
        if ((0 === twig_compare((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 436, $this->source); })()), 2))) {
            echo "uv-kudo-done";
        }
        echo "\" data-id=\"2\"></span>
                <span class=\"uv-kudo-response uv-kudo-neutral ";
        // line 437
        if ((0 === twig_compare((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 437, $this->source); })()), 3))) {
            echo "uv-kudo-done";
        }
        echo "\" data-id=\"3\"></span>
                <span class=\"uv-kudo-response uv-kudo-happy ";
        // line 438
        if ((0 === twig_compare((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 438, $this->source); })()), 4))) {
            echo "uv-kudo-done";
        }
        echo "\" data-id=\"4\"></span>
                <span class=\"uv-kudo-response uv-kudo-very-happy  ";
        // line 439
        if ((0 === twig_compare((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 439, $this->source); })()), 5))) {
            echo "uv-kudo-done";
        }
        echo "\" data-id=\"5\"></span>
            </div>

            <span class=\"uv-kudo-message\">
                ";
        // line 443
        if ((0 === twig_compare((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 443, $this->source); })()), 1))) {
            // line 444
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("I am very Sad"), "html", null, true);
            echo "
                ";
        } elseif ((0 === twig_compare(        // line 445
(isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 445, $this->source); })()), 2))) {
            // line 446
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("I am Sad"), "html", null, true);
            echo "
                ";
        } elseif ((0 === twig_compare(        // line 447
(isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 447, $this->source); })()), 3))) {
            // line 448
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("I am Neutral"), "html", null, true);
            echo "
                ";
        } elseif ((0 === twig_compare(        // line 449
(isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 449, $this->source); })()), 4))) {
            // line 450
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("I am Happy"), "html", null, true);
            echo "
                ";
        } elseif ((0 === twig_compare(        // line 451
(isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 451, $this->source); })()), 5))) {
            // line 452
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("I am Very Happy"), "html", null, true);
            echo "
                ";
        }
        // line 454
        echo "            </span>
        </div>
    </div>

    <div class=\"uv-pop-up-overlay\" id=\"confirm-ticket-close-modal\" style=\"display: none;\">
        <div class=\"uv-pop-up-box uv-pop-up-slim\">
            <span class=\"uv-pop-up-close\"></span>
            <h2>";
        // line 461
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirm Close Ticket"), "html", null, true);
        echo "</h2>
            <p>";
        // line 462
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure? You want to reply and close ticket."), "html", null, true);
        echo "</p>

            <div class=\"uv-pop-up-actions\">
                <a href=\"#\" class=\"uv-btn uv-btn-error\" id=\"confirmed-close-ticket\" data-id=\"closed\">";
        // line 465
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirm"), "html", null, true);
        echo "</a>
                <a href=\"#\" class=\"uv-btn cancel\">";
        // line 466
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "</a>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 472
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 473
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
        // line 474
        echo twig_include($this->env, $context, "@UVDeskCoreFramework/Templates/attachment.html.twig");
        echo "

    <script id=\"thread_list_item_tmp\" type=\"text/template\">
        <div class=\"uv-ticket-strip\">
            <span>
                <span class=\"timeago uv-margin-0\" data-timestamp=\"<%= timestamp %>\" title=\"<%= formatedCreatedAt %>\">
                    <%= formatedCreatedAt %>
                </span>
                - <%- fullname %>
                <span class=\"uv-ticket-strip-label\">
                    ";
        // line 484
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("replied"), "html", null, true);
        echo "
                </span>
            </span>
            <% if(cc || bcc) { %>
                <div class=\"uv-ticket-strip\">
                    <% if(cc) { %>
                        <span><span class=\"uv-ticket-strip-label\">";
        // line 490
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CC"), "html", null, true);
        echo " -</span> <%- cc %></span>
                    <% } if(bcc) { %>
                        <span><span class=\"uv-ticket-strip-label\">";
        // line 492
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("BCC"), "html", null, true);
        echo " -</span> <%- bcc %></span>
                    <% } %>
                </div>
            <% } %>
        </div>
        <div class=\"uv-ticket-main-lt\">
            <% if(user && smallThumbnail != null) { %>
                <img src=\"";
        // line 499
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 499, $this->source); })()), "request", [], "any", false, false, false, 499), "scheme", [], "any", false, false, false, 499) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 499, $this->source); })()), "request", [], "any", false, false, false, 499), "httpHost", [], "any", false, false, false, 499)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
        echo "<%= smallThumbnail.slice(1) %>\" />
            <% } else { %>
                <img src=\"<% if(userType == 'agent') { %> ";
        // line 501
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 501, $this->source); })())), "html", null, true);
        echo " <% } else { %> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_customer_image_path"]) || array_key_exists("default_customer_image_path", $context) ? $context["default_customer_image_path"] : (function () { throw new RuntimeError('Variable "default_customer_image_path" does not exist.', 501, $this->source); })())), "html", null, true);
        echo " <% } %>\" />
            <% } %>
        </div>
        <div class=\"uv-ticket-main-rt\">
            <span class=\"uv-ticket-member-name\">
                <%- fullname %>
            </span>
            <!-- Message Block -->
            <div class=\"message\">
                <%= reply %>
            </div>
            <!-- //Message Block -->

            <!-- Attachment Block -->
            <% if(attachments.length) { %>
                <div class=\"uv-ticket-uploads\">
                    <h4>";
        // line 517
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Uploaded Files"), "html", null, true);
        echo "</h4>
                    <div class=\"uv-ticket-uploads-strip uv-viewer-images\">
                        <% _.each(attachments, function(file) { %>
                            <a href=\"<%-file.downloadURL.replace(\"member\",\"customer\") %>\" target =\"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"<%- file.name %>\">
                                <img src=\"<%-file.iconURL %>\" class=\"uv-auto-pointer-events\">
                            </a>
                        <% }) %>
                    </div>

                    <% if (attachments.length > 1) { %>
                        <div class=\"thread-attachments-zip pull-left\">
                            <div class=\"uv-upload-actions\">
                                ";
        // line 530
        echo "                                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_download_ticket_attachment_zip");
        echo "/<%= id %>\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download (as .zip)"), "html", null, true);
        echo "</a>
                            </div>
                        </div>
                    <% } %>
                </div>
            <% } %>
            <!-- //Attachment Block -->
        </div>
    </script>

    <script type=\"text/javascript\">

        var ticketApp = {};
        \$(function () {
            
            var TicketModel = Backbone.Model.extend({
                idAttribute : \"id\",
                validation: {
                    'email': [{
                        required: true,
                        msg: '";
        // line 550
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "'
                    },{
                        pattern: 'email',
                        msg: '";
        // line 553
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please enter a valid email"), "html", null, true);
        echo "'
                    }],
                },
            });

            var TicketView = Backbone.View.extend({
                el: \$('.uv-body'),
                stopDraftSaveFlag: 0,
                events: {
                    'click .uv-kudo-response-wrapper .uv-kudo-response': 'rateTicket',
                    'click .collaborator-list .uv-btn-tag': 'removeCcCollaborator',
                    'change .uv-element-block.cc-bcc .cc-bcc-toggle': 'showCcBccBlock',
                    'keypress .uv-element-block.cc-bcc .uv-group-field': 'addCcBccInput',
                    'click .cc-bcc-list .uv-btn-tag, .to-list .uv-btn-tag': 'removeEmail',
                    'click .uv-dropdown.reply .uv-dropdown-list li:not(.confirm-close-ticket)': 'validateForm',
                    'click #reply-btn': 'validateForm',
                    'click #confirmed-close-ticket': 'confirmedAction',
                    'click .confirm-close-ticket': 'confirmClose',
                },
                confirmClose: function(e) {
                    \$('#confirm-ticket-close-modal').show();
                },
                confirmedAction: function(e) {
                    \$('#confirm-ticket-close-modal').hide();
                    this.validateForm(e);
                },
                ratingText: {
                    '1' : \"";
        // line 580
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("I am very Sad"), "html", null, true);
        echo "\",
                    '2' : \"";
        // line 581
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("I am Sad"), "html", null, true);
        echo "\",
                    '3' : \"";
        // line 582
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("I am Neutral"), "html", null, true);
        echo "\",
                    '4' : \"";
        // line 583
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("I am Happy"), "html", null, true);
        echo "\",
                    '5' : \"";
        // line 584
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("I am Very Happy"), "html", null, true);
        echo "\",
                },
                loaderTemplate : _.template(\$(\"#loader-tmp\").html()),
                rateTicket : function(e) {
                    var element = Backbone.\$(e.currentTarget);
                    var count = element.attr('data-id');
                    this.model.set('rating', count);

                    var self = this;
                    app.appView.showLoader()
                    this.model.save({}, {
                        url : \"";
        // line 595
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_rate_ticket", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 595, $this->source); })()), "id", [], "any", false, false, false, 595)]), "html", null, true);
        echo "\",
                        success: function (model, response, options) {
                            app.appView.hideLoader()
                            if(response.alertClass == 'success') {
                                \$('.uv-kudo-response').removeClass('uv-kudo-done');
                                element.addClass('uv-kudo-done');
                                \$('.uv-kudo-message').text(self.ratingText[count])
                                \$('.uv-kudo-button').trigger('click')
                            } else {
                                app.appView.renderResponseAlert(response);
                            }
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
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
                    if (Backbone.\$(e.currentTarget).parent()[0]) {
                        Backbone.\$(e.currentTarget).parent()[0].removeChild(e.currentTarget);
                        var collaboratorContainer = \$('.uv-element-block.collaborators');
                    }

                    if(!collaboratorContainer.find('.uv-btn-tag').length)
                        collaboratorContainer.hide()
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
                removeEmail: function(e) {
                    e.preventDefault()
                    Backbone.\$(e.currentTarget).parent().remove();
                },
                validateForm : function(e) {
                    e.preventDefault();
                    var element = Backbone.\$(e.currentTarget);
                    form = \$('#ticket-form');
                    form.find('.reply-status').val(element.attr('data-id'));
                    form.find('.uv-field-message').remove()

                    var html = tinyMCE.get(\"reply-area\").getContent();
                    if(app.appView.htmlText(html) != '' || -1 != html.indexOf('<img')) {
                        this.stopDraftSaveFlag = 1;

\t\t\t\t\t\tapp.appView.showLoader();
                        tinyMCE.activeEditor.uploadImages(function(response) {
                            app.appView.hideLoader();

\t\t\t\t\t\t\tform.submit();
\t                        \$('.uv-dropdown.reply').find('.uv-btn').attr('disabled', 'disabled');
\t                        \$('#reply-btn,#confirmed-close-ticket').attr('disabled', 'disabled');
                        });
                    } else {
                        form.find('.uv-element-block-textarea').append(\"<span class='uv-field-message'>";
        // line 686
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "</span>\");
                    }
                }
            });

            var ThreadModel = Backbone.Model.extend({
                idAttribute : \"id\",
                defaults : {
                    hasTask : 0,
                    task: null
                }
            });

            var ThreadCollection = AppCollection.extend({
                model : ThreadModel,
                mode: \"infinite\",
                url : \"";
        // line 702
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_thread_collection_xhr", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 702, $this->source); })()), "id", [], "any", false, false, false, 702)]), "html", null, true);
        echo "\",
                parseRecords: function (resp, options) {
                    return resp.threads;
                },
                syncData : function() {
                    app.appView.showLoader()
                    this.fetch({
                        remove: false,
                        success: function(model, response) {
                            app.appView.hideLoader()
                            pagination.renderPagination(response.pagination);
                            threadCollection.state.currentPage = parseInt(response.pagination.current) + 1;
                        },
                        error: function (model, xhr, options) {
                            app.appView.hideLoader()
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                }
            });

            var ThreadItem = Backbone.View.extend({
                tagName : \"div\",
                className : \"uv-ticket-main\",
                template : _.template(\$(\"#thread_list_item_tmp\").html()),
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));
                    this.\$el.addClass(\"thread-\" + this.model.id)

                    return this;
                }
            });

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
                    //viewerImages();
                    //convertForImages(this.\$el);
                    this.\$el.find('div.message a').attr('target', '_blank');
                    app.appView.relativeTime()
                }
            });

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

            //Collaborator Code starts here
            _.extend(Backbone.Model.prototype, Backbone.Validation.mixin);
            var CollaboratorModel = Backbone.Model.extend({
                idAttribute : \"id\",
                validation: {
                    'email': [{
                        required: true,
                        msg: '";
        // line 785
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "'
                    },{
                        pattern: 'email',
                        msg: '";
        // line 788
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please enter a valid email"), "html", null, true);
        echo "'
                    }]
                },
                defaults : {
                    ticketId : ";
        // line 792
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 792, $this->source); })()), "id", [], "any", false, false, false, 792), "html", null, true);
        echo ",
                    email: ''
                },
                parse: function (resp, options) {
                    return resp.collaborator;
                },
                urlRoot : \"";
        // line 798
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_update_ticket_collaborators_xhr");
        echo "\"
            });

            var CollaboratorCollection = Backbone.PageableCollection.extend({
                model : CollaboratorModel
            });

            var CollaboratorItem = Backbone.View.extend({
                tagName : \"a\",
                className: 'uv-btn-tag',
                template : _.template(\"<span class='uv-tag'><span class='uv-icon-remove-dark-before'></span><%- name %></span>\"),
                events : {
                    'click .uv-tag' : 'removeItem'
                },
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));
                    return this;
                },
                unrender : function(response) {
                    if(response.alertMessage != undefined) {
                        collaboratorListView.render();
                        app.appView.renderResponseAlert(response);
                    }
                },
                removeItem: function() {
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
                }
            });

            var CollaboratorList = Backbone.View.extend({
                el : \$(\".collaborator-list-block\"),
                events : {
                    'keypress .uv-field' : 'addCollaborator',
                    'focusout .uv-field' : 'removeErrorClass',
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
                                inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>";
        // line 914
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email address is invalid"), "html", null, true);
        echo "</span>\");
                        }
                    }
                }
            });
            //Collaborator Code ends here

            ticketModel = new TicketModel({
                id : \"";
        // line 922
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 922, $this->source); })()), "id", [], "any", false, false, false, 922), "html", null, true);
        echo "\",
            });

            ticketApp.ticketView = ticketView = new TicketView({
                model: ticketModel
            });

            var threadCollection = new ThreadCollection();
\t\t    var threadList = new ThreadList();
            var pagination = new Pagination();
            threadCollection.syncData();

            ";
        // line 934
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 934, $this->source); })()), "customer", [], "any", false, false, false, 934), twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 934, $this->source); })()), "user", [], "any", false, false, false, 934)))) {
            // line 935
            echo "                var collaboratorCollection = new CollaboratorCollection(\$.parseJSON('";
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 935, $this->source); })()), "getTicketCollaborators", [0 => twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 935, $this->source); })()), "id", [], "any", false, false, false, 935)], "method", false, false, false, 935));
            echo "'));
                var collaboratorListView = new CollaboratorList();
                collaboratorListView.render();
            ";
        }
        // line 939
        echo "        });
    </script>

    ";
        // line 942
        echo twig_include($this->env, $context, "@UVDeskCoreFramework/Templates/tinyMCE.html.twig");
        echo "

\t<script>
\t\tsfTinyMce.init({
            height: '250px',
\t\t\tselector : '.uv-ticket-reply textarea',
\t\t\timages_upload_url: \"\",
            setup: function(editor) {
            }
\t\t});
\t</script>

    <script>
        document.addEventListener(\"DOMContentLoaded\", function(){
            var uvKudoButton = document.querySelector(\".uv-kudo-button\");
            var uvKudoIcon = document.querySelector(\".uv-kudo-icon\");
            var uvKudoPlank = document.querySelector(\".uv-kudo-plank\");
            var uvKudoMessage = document.querySelector(\".uv-kudo-message\");
            var uvKudoResponse = document.querySelector(\".uv-kudo-response\");

            uvKudoButton.addEventListener(\"click\", function(){
                uvKudoButton.classList.toggle(\"uv-kudo-button-active\");
                uvKudoPlank.classList.toggle(\"uv-kudo-plank-active\");
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@UVDeskSupportCenter/Knowledgebase/ticketView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1538 => 942,  1533 => 939,  1525 => 935,  1523 => 934,  1508 => 922,  1497 => 914,  1378 => 798,  1369 => 792,  1362 => 788,  1356 => 785,  1270 => 702,  1251 => 686,  1157 => 595,  1143 => 584,  1139 => 583,  1135 => 582,  1131 => 581,  1127 => 580,  1097 => 553,  1091 => 550,  1065 => 530,  1050 => 517,  1029 => 501,  1024 => 499,  1014 => 492,  1009 => 490,  1000 => 484,  987 => 474,  982 => 473,  972 => 472,  957 => 466,  953 => 465,  947 => 462,  943 => 461,  934 => 454,  928 => 452,  926 => 451,  921 => 450,  919 => 449,  914 => 448,  912 => 447,  907 => 446,  905 => 445,  900 => 444,  898 => 443,  889 => 439,  883 => 438,  877 => 437,  871 => 436,  865 => 435,  862 => 434,  856 => 433,  853 => 432,  850 => 431,  847 => 430,  842 => 429,  840 => 428,  833 => 424,  808 => 402,  804 => 401,  799 => 399,  789 => 392,  780 => 386,  771 => 379,  766 => 377,  754 => 368,  750 => 367,  744 => 363,  738 => 360,  731 => 355,  729 => 354,  720 => 348,  713 => 344,  706 => 340,  702 => 338,  696 => 336,  689 => 334,  687 => 333,  672 => 321,  663 => 314,  659 => 312,  649 => 309,  645 => 307,  643 => 306,  640 => 305,  631 => 302,  624 => 301,  620 => 300,  615 => 298,  612 => 297,  610 => 296,  603 => 291,  597 => 289,  591 => 287,  589 => 286,  580 => 280,  573 => 276,  567 => 272,  563 => 268,  558 => 266,  553 => 264,  549 => 263,  539 => 255,  533 => 252,  529 => 251,  526 => 250,  524 => 249,  519 => 247,  515 => 246,  508 => 242,  502 => 241,  498 => 240,  490 => 235,  482 => 229,  476 => 227,  474 => 226,  471 => 225,  461 => 218,  456 => 216,  451 => 213,  449 => 212,  446 => 211,  440 => 208,  436 => 207,  433 => 206,  431 => 205,  426 => 203,  422 => 202,  419 => 201,  413 => 198,  409 => 197,  406 => 196,  403 => 195,  397 => 192,  393 => 191,  390 => 190,  388 => 189,  381 => 185,  376 => 183,  370 => 180,  365 => 178,  360 => 176,  354 => 172,  351 => 171,  348 => 170,  345 => 169,  342 => 168,  340 => 167,  308 => 138,  196 => 28,  186 => 27,  170 => 20,  166 => 19,  161 => 16,  153 => 14,  151 => 13,  145 => 12,  139 => 8,  129 => 7,  107 => 5,  85 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@UVDeskSupportCenter/Templates/layout.html.twig\" %}

{% block title %}#{{ ticket.id }} {{ ticket.subject }}{% endblock %}
{% block ogtitle %}#{{ ticket.id }} {{ ticket.subject }}{% endblock %}
{% block twtitle %}#{{ ticket.id }} {{ ticket.subject }}{% endblock %}

{% block tabHeader %}
\t<div class=\"uv-nav-bar uv-nav-tab\">
\t\t<div class=\"uv-container\">
\t\t\t<div class=\"uv-nav-bar-lt\">
\t\t\t\t<ul class=\"uv-nav-tab-label\">
\t\t\t\t\t<li><a href=\"{{ path('helpdesk_customer_ticket_collection') }}\">{{ 'Ticket Requests'|trans }}</a></li>
\t\t\t\t\t{% if websiteConfiguration.ticketCreateOption %}
                        <li><a href=\"{{ path('helpdesk_customer_create_ticket') }}\">{{ 'New Ticket Request'|trans }}</a></li>
                    {% endif %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"uv-nav-bar-rt\">
\t\t\t\t<form method=\"get\" action=\"{{path('helpdesk_customer_front_article_search')}}\">
\t\t\t\t\t<input name=\"s\" class=\"uv-nav-search\" type=\"text\" placeholder=\"{{ 'Search'|trans }}\">
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}

{% block body %}
    <style>
        .uv-btn-tag {
            margin-right: 5px;
        }
        .uv-group-field {
            width: 80%;
        }
        .uv-element-block .mce-tinymce {
            margin-top: 10px;
        }
        .uv-ticket-view .uv-ticket-accordion .uv-ticket-wrapper {
            display: block;
        }
        .message {
            font-size: 15px;
        }
        .message img {
            max-width: 100%;
        }
        .uv-dropdown.reply .uv-dropdown-btn-active {
            border: none;
        }
        .uv-dropdown.reply .uv-dropdown-list {
            width: 220px;
            bottom: 47px;
        }

\t\t.uv-rtl .uv-top-left {
\t\t\tleft: unset;
\t\t}

\t\t.uv-rtl .uv-dropdown-list {
\t\t\ttext-align: right;
\t\t}

        .uv-action-buttons {
            margin: 10px 0px;
        }

        .uv-action-buttons .uv-btn:first-child {
            margin-left: 0px;
        }

\t\t.uv-rtl .uv-action-buttons .uv-btn:first-child {
\t\t\tmargin-left: 5px;
\t\t\tmargin-right: 0px;
\t\t}

        .uv-action-buttons .uv-btn {
            margin: 5px;
        }

        form #customFieldCollection .uv-field-error-icon, form #customFieldCollection .uv-field-success-icon {
            display: none;
        }

        .custom-field-field-display .uv-field-block {
            width: 100%;
            color: #333333;
            word-wrap: break-word;
        }

        .custom-field-field-display .uv-field-block span {
            display: inline;
        }
        .uv-submit-left-side {
            margin: 0!important;
            padding-right: 5px;
            border-bottom-right-radius: 0;
            border-top-right-radius: 0;
        }
\t\t.uv-rtl .uv-submit-left-side {
\t\t\tpadding-right: 10px;
            border-bottom-right-radius: 3px;
            border-top-right-radius: 3px;
\t\t\tpadding-left: 5px;
\t\t\tborder-bottom-left-radius: 0;
            border-top-left-radius: 0;
\t\t}
        .uv-submit-right-side {
            margin: 0!important;
        }
        .no-left-padding {
            padding-left: 0;
            border-bottom-left-radius: 0;
            border-top-left-radius: 0;
        }
\t\t.uv-rtl .no-left-padding {
\t\t\tpadding-left: 10px;
            border-bottom-left-radius: 3px;
            border-top-left-radius: 3px;
\t\t\tpadding-right: 0;
\t\t\tborder-bottom-right-radius: 0;
\t\t\tborder-top-right-radius: 0;
\t\t}
        .uv-btn-error {
            background-color: #FF5656!important;
        }
        .uv-pull-rightside {
            float: right;
            font-size: 15px;
            cursor: pointer;
        }
\t\t.uv-rtl .uv-pull-rightside {
            float: left;
        }
        .uv-print-icon {
            display: inline-block;
            width: 20px;
            height: 20px;
            background-image: url(\"{{ asset('bundles/uvdeskcoreframework/images/uvdesk-kb-sprite.svg') }}\");
            background-position: -176px -91px;
            vertical-align: middle;
        }
        @media print {
            .uv-navbar,.uv-ticket-action-bar, .uv-kudo, .uv-aside-back, .uv-footer, .uv-ticket-main.uv-ticket-reply, .uv-nav-bar,input, .uv-dropdown-list>.uv-dropdown-container,.uv-notifications-wrapper,.uv-pop-up-overlay,.uv-loader-view, .uv-loader,.uv-header,.uv-upload-actions,.uv-pull-rightside {
                display: none !important;
            }
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
    </style>

    {% set ticketAgent = ticket.agent ? user_service.getAgentDetailById(ticket.agent.id) : null %}
    {% set totalThreads = ticket_service.getTicketTotalThreads(ticket.id) %}
    {% set customer = user_service.getCustomerPartialDetailById(ticket.customer.id)  %}
    {% set createThread = ticket_service.getCreateReply(ticket.id, 'customer') %}
    {% set currentUser = user_service.getCustomerPartialDetailById(app.user.id)  %}

    <div class=\"uv-thread\">
        <div class=\"uv-thread-lt\">
            <aside>
                <h6>{{ 'Ticket Information'|trans }}</h6>
                <div class=\"uv-aside-brick\">
                    <h6>{{ 'Total Replies'|trans }}</h6>
                    <span class=\"uv-icon-replies\"></span>
                    <span>{{ totalThreads }}</span>
                </div>
                <div class=\"uv-aside-brick\">
                    <h6>{{ 'Timestamp'|trans }}</h6>
                    <span class=\"uv-icon-timestamp\"></span>
                    <span>{{ localizedCreateAtTime }}</span>
                </div>

                <div class=\"uv-hr\"></div>
                {% if ticket.customer != app.user %}
                    <div class=\"uv-aside-brick\">
                        <h6>{{ 'Customer'|trans }}</h6>
                        <span>{{ customer.name }}</span>
                    </div>
                {% endif %}
                {% if ticketAgent %}
                    <div class=\"uv-aside-brick\">
                        <h6>{{ 'Agent'|trans }}</h6>
                        <span>{{ ticketAgent.name }}</span>
                    </div>
                {% endif %}
                <div class=\"uv-aside-brick\">
                    <h6>{{ 'Status'|trans }}</h6>
                    <span>{{ ticket.status.description|trans }}</span>
                </div>
                {% if ticket.type %}
                    <div class=\"uv-aside-brick\">
                        <h6>{{ 'Type'|trans }}</h6>
                        <span>{{ ticket.type.code }}</span>
                    </div>
                {% endif %}

                {% if ticket.customer == app.user %}
                    <div class=\"uv-hr\"></div>
                    <div class=\"uv-aside-brick collaborator-list-block\">
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">{{ 'Collaborators'|trans }}</label>
                            <div class=\"uv-field-block\">
                                <input class=\"uv-field\" type=\"text\" name=\"email\" type=\"text\" value=\"\" placeholder=\"{{ 'Type email to add'|trans }}\">
                            </div>
                        </div>
                        <div class=\"collaborator-list\" style=\"margin-top: 10px\">
                        </div>
                    </div>
                {% endif %}
            </aside>
            {% if user_service.isfileExists('apps/uvdesk/form-component') %}
                {{ user_service.getCustomFieldTemplateCustomer() | raw }}
            {% endif %}
        </div>
        <div class=\"uv-thread-rt\">
            <section>
                <div class=\"uv-ticket-view\">
                    <div class=\"uv-ticket-head\">
                        <h1>
                            {{ ticket.subject }}
                            <span class=\"uv-pull-rightside uv-print-icon\" onclick=\"window.print()\"></span>
                        </h1>
                        <div class=\"uv-ticket-strip\">
                            <span>
                                <span class=\"uv-ticket-strip-label\">{{ 'Created'|trans }} -</span>
                                <span class=\"timeago\" data-timestamp=\"{{ localizedCreateAtTime }}\" title=\"{{ localizedCreateAtTime }}\">
                                    {{ localizedCreateAtTime }} 
                                </span>
                            </span>
                            <span>
                                <span class=\"uv-ticket-strip-label\">{{ 'By'|trans }} -</span>
                                {{ createThread.user.name }}
                            </span>
                            {% if ticketAgent %}
                                <span>
                                    <span class=\"uv-ticket-strip-label\">{{ 'Agent'|trans }} -</span>
                                    {{ ticketAgent.name }}
                                </span>
                            {% endif %}
                        </div>
                    </div>

                    <div class=\"uv-tab-view\">
                        <div class=\"uv-ticket-section\">
                            <div class=\"uv-ticket-main create\">
                                <div class=\"uv-ticket-strip\">
                                    <span>
                                        <span class=\"timeago uv-margin-0\" data-timestamp=\"ticket.createdAt\" title=\"{{ localizedCreateAtTime }}\">
                                            {{ localizedCreateAtTime }}
                                        </span>
                                        - {{ createThread.user.name }}
                                        <span class=\"uv-ticket-strip-label\">
                                        {{ 'created Ticket'|trans }}
                                        {# {% if ticket.ipAddress %}
                                            ({{ 'IP'|trans }} -{{ ticket.ipAddress }})
                                        {% endif %} #}
                                    </span>
                                </span>
                                </div>
                                <div class=\"uv-ticket-main-lt\">
                                   <img src=\"{{ initialThread.user.thumbnail ? app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') ~ (initialThread.user.thumbnail) : initialThread.createdBy == 'customer' ? asset(default_customer_image_path) : asset(default_agent_image_path) }}\">
                                </div>
                                <div class=\"uv-ticket-main-rt\">
                                    <span class=\"uv-ticket-member-name\">
                                        {{ createThread.user.name }}
                                    </span>

                                    <!-- Message Block -->
                                    <div class=\"message\">
                                        <p>
                                            {% if createThread.reply|striptags == createThread.reply %}
                                                {{ createThread.reply|nl2br }}
                                            {% else %}
                                                {{ createThread.reply|raw }}
                                            {% endif %}
                                        </p>
                                    </div>
                                    <!-- //Message Block -->

                                    <!-- Attachment Block -->
                                    {% if createThread.attachments|length %}
                                        <div class=\"uv-ticket-uploads\">
                                            <h4>{{ 'Uploaded Files'|trans }}</h4>
                                            <div class=\"uv-ticket-uploads-strip uv-viewer-images\">
                                                {% for attachment in createThread.attachments %}
                                                    <a href=\"{{ attachment.downloadURL }}\" target = \"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"{{ attachment.name }}\">
                                                        <img src=\"{{ attachment.iconURL }}\"  class=\"uv-auto-pointer-events\"/>
                                                    </a>
                                                {% endfor %}
                                            </div>
                                            {% if createThread.attachments|length > 1 %}
                                                <div class=\"uv-upload-actions\">
                                                    <!-- <a href=\"#\"><span class=\"uv-icon-open-in-files\"></span>Open in Files</a> -->
                                                    <a href=\"{{ path('helpdesk_customer_download_ticket_attachment_zip') }}/{{createThread.id}}\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> {{ 'Download (as .zip)'|trans }}</a>
                                                </div>
                                            {% endif %}
                                        </div>
                                    {% endif %}
                                    <!-- //Attachment Block -->
                                </div>
                            </div>

                            <!-- uv-ticket-accordion-expanded uv-ticket-accordion-no-count-->
                            <div class=\"uv-ticket-accordion\">
                                <div class=\"uv-ticket-count-wrapper\">
                                    <span class=\"uv-ticket-count-stat\">{{ totalThreads }}</span>
                                </div>
                                <div class=\"uv-ticket-wrapper thread-list\">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Reply Form Block -->
                    <div class=\"uv-ticket-main uv-ticket-reply uv-no-error-success-icon\">
                        <div class=\"uv-ticket-main-lt\">
                            <span class=\"uv-icon-ellipsis\"></span>
                            {% if currentUser.smallThumbnail %}
                                <img src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}{{ currentUser.smallThumbnail }}\" />
                            {% else %}
                                <img src=\"{{ asset(default_customer_image_path) }}\" />
                            {% endif %}
                        </div>
                        <div class=\"uv-ticket-main-rt\">
                            <span class=\"uv-ticket-member-name\">{{ currentUser.name }}</span>

                            <!-- Reply Tab View -->
                            <div class=\"uv-tab-view uv-tab-view-active\" id=\"reply\">
                                <form enctype=\"multipart/form-data\" method=\"post\" action=\"{{ path('helpdesk_customer_add_ticket_thread', {'id': ticket.id }) }}\" id=\"ticket-form\">
                                    <input name=\"threadType\" value=\"reply\" type=\"hidden\">
                                    <input class=\"reply-status\" name=\"status\" value=\"\" type=\"hidden\">
                                    <div class=\"uv-element-block collaborators\" style=\"display: none\">
                                        <label class=\"uv-field-label\">{{ 'Collaborators'|trans }}</label>
                                        <div class=\"uv-field-block\">
                                        </div>
                                    </div>

                                    <div class=\"uv-element-block cc-bcc\">
                                    {% if isCollaborator != true %}
                                        <label>
                                            <div class=\"uv-checkbox\">
                                                <input type=\"checkbox\" class=\"cc-bcc-toggle\">
                                                <span class=\"uv-checkbox-view\"></span>
                                            </div>
                                            <span class=\"uv-checkbox-label\">{{ 'CC/BCC'|trans }}</span>
                                        </label>
                                    {% endif %}
                                        <div class=\"uv-field-block\" style=\"display: none\">
                                            <div class=\"uv-group\">
                                                <input class=\"uv-group-field\" type=\"text\">
                                                <select class=\"uv-group-select cc-bcc-select\">
                                                    <option value=\"bcc\">{{ 'BCC'|trans }}</option>
                                                    <option value=\"cc\">{{ 'CC'|trans }}</option>
                                                </select>
                                            </div>
                                            <div class=\"cc-bcc-list\">
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"uv-element-block uv-element-block-textarea\">
                                        <label class=\"uv-field-label\">{{ 'Write a reply'|trans }}</label>
                                        <div class=\"uv-field-block\">
                                            <textarea class=\"uv-field\" name=\"message\" id=\"reply-area\">{# {{ ticket_service.getCustomerDraft(ticket.id, 'reply') }} #}</textarea>
                                        </div>
                                    </div>

                                    <!-- Field -->
                                    <div class=\"uv-element-block attachment-block\">
                                        <label>
                                            <span class=\"uv-file-label\">{{ 'Add Attachment'|trans }}</span>
                                        </label>
                                    </div>
                                    <!-- //Field -->

                                    <div class=\"uv-action-buttons\">
                                        <div id=\"reply-btn\" class=\"uv-btn uv-submit-left-side\">{{ 'Reply'|trans }}</div>
                                        <div class=\"uv-dropdown reply uv-submit-right-side\">
                                            <div class=\"uv-btn uv-dropdown-other no-left-padding\">
                                                <span class=\"uv-icon-down-light\"></span>
                                            </div>
                                            <div class=\"uv-dropdown-list uv-top-left\">
                                                <div class=\"uv-dropdown-container\">
                                                    <label>{{ 'Reply'|trans }}</label>
                                                    <ul>
                                                        <li data-id=\"\">{{ 'Submit'|trans }}</li>
                                                        <li class=\"confirm-close-ticket\" data-id=\"closed\">{{ 'Submit And Closed'|trans }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- //Reply Tab View -->
                        </div>
                    </div>
                    <!-- Reply Form Block -->
                </div>
            </section>
        </div>
        </div>
    </div>

        <div class=\"uv-kudo\">
        <div class=\"uv-kudo-button\">
            <!--uv-kudo-button-active-->
            <div class=\"uv-kudo-icon\"></div>
            <span>{{ 'Rate Support'|trans }}</span>
        </div>

        <div class=\"uv-kudo-plank\">
            {% set count = 0 %}
            {% for rating in ticket.ratings %}
                {% if rating.getCustomer.id == app.user.id %}
                    {% set count = rating.getStars %}
                {% endif %}
            {% endfor %}
            <div class=\"uv-kudo-response-wrapper\">
                <span class=\"uv-kudo-response uv-kudo-very-sad {% if count == 1 %}uv-kudo-done{% endif %}\" data-id=\"1\"></span>
                <span class=\"uv-kudo-response uv-kudo-sad {% if count == 2 %}uv-kudo-done{% endif %}\" data-id=\"2\"></span>
                <span class=\"uv-kudo-response uv-kudo-neutral {% if count == 3 %}uv-kudo-done{% endif %}\" data-id=\"3\"></span>
                <span class=\"uv-kudo-response uv-kudo-happy {% if count == 4 %}uv-kudo-done{% endif %}\" data-id=\"4\"></span>
                <span class=\"uv-kudo-response uv-kudo-very-happy  {% if count == 5 %}uv-kudo-done{% endif %}\" data-id=\"5\"></span>
            </div>

            <span class=\"uv-kudo-message\">
                {% if count == 1 %}
                    {{ 'I am very Sad'|trans }}
                {% elseif count == 2 %}
                    {{ 'I am Sad'|trans }}
                {% elseif count == 3 %}
                    {{ 'I am Neutral'|trans }}
                {% elseif count == 4 %}
                    {{ 'I am Happy'|trans }}
                {% elseif count == 5 %}
                    {{ 'I am Very Happy'|trans }}
                {% endif %}
            </span>
        </div>
    </div>

    <div class=\"uv-pop-up-overlay\" id=\"confirm-ticket-close-modal\" style=\"display: none;\">
        <div class=\"uv-pop-up-box uv-pop-up-slim\">
            <span class=\"uv-pop-up-close\"></span>
            <h2>{{ 'Confirm Close Ticket'|trans }}</h2>
            <p>{{ 'Are you sure? You want to reply and close ticket.'|trans }}</p>

            <div class=\"uv-pop-up-actions\">
                <a href=\"#\" class=\"uv-btn uv-btn-error\" id=\"confirmed-close-ticket\" data-id=\"closed\">{{ 'Confirm'|trans }}</a>
                <a href=\"#\" class=\"uv-btn cancel\">{{ 'Cancel'|trans }}</a>
            </div>
        </div>
    </div>
{% endblock %}

{% block footer %}
    {{ parent() }}
    {{ include('@UVDeskCoreFramework/Templates/attachment.html.twig') }}

    <script id=\"thread_list_item_tmp\" type=\"text/template\">
        <div class=\"uv-ticket-strip\">
            <span>
                <span class=\"timeago uv-margin-0\" data-timestamp=\"<%= timestamp %>\" title=\"<%= formatedCreatedAt %>\">
                    <%= formatedCreatedAt %>
                </span>
                - <%- fullname %>
                <span class=\"uv-ticket-strip-label\">
                    {{ 'replied'|trans }}
                </span>
            </span>
            <% if(cc || bcc) { %>
                <div class=\"uv-ticket-strip\">
                    <% if(cc) { %>
                        <span><span class=\"uv-ticket-strip-label\">{{ 'CC'|trans }} -</span> <%- cc %></span>
                    <% } if(bcc) { %>
                        <span><span class=\"uv-ticket-strip-label\">{{ 'BCC'|trans }} -</span> <%- bcc %></span>
                    <% } %>
                </div>
            <% } %>
        </div>
        <div class=\"uv-ticket-main-lt\">
            <% if(user && smallThumbnail != null) { %>
                <img src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}<%= smallThumbnail.slice(1) %>\" />
            <% } else { %>
                <img src=\"<% if(userType == 'agent') { %> {{ asset(default_agent_image_path) }} <% } else { %> {{ asset(default_customer_image_path) }} <% } %>\" />
            <% } %>
        </div>
        <div class=\"uv-ticket-main-rt\">
            <span class=\"uv-ticket-member-name\">
                <%- fullname %>
            </span>
            <!-- Message Block -->
            <div class=\"message\">
                <%= reply %>
            </div>
            <!-- //Message Block -->

            <!-- Attachment Block -->
            <% if(attachments.length) { %>
                <div class=\"uv-ticket-uploads\">
                    <h4>{{ 'Uploaded Files'|trans }}</h4>
                    <div class=\"uv-ticket-uploads-strip uv-viewer-images\">
                        <% _.each(attachments, function(file) { %>
                            <a href=\"<%-file.downloadURL.replace(\"member\",\"customer\") %>\" target =\"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"<%- file.name %>\">
                                <img src=\"<%-file.iconURL %>\" class=\"uv-auto-pointer-events\">
                            </a>
                        <% }) %>
                    </div>

                    <% if (attachments.length > 1) { %>
                        <div class=\"thread-attachments-zip pull-left\">
                            <div class=\"uv-upload-actions\">
                                {#<a href=\"#\"><span class=\"uv-icon-open-in-files\"></span>Open in Files</a>#}
                                <a href=\"{{ path('helpdesk_customer_download_ticket_attachment_zip') }}/<%= id %>\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> {{ 'Download (as .zip)'|trans }}</a>
                            </div>
                        </div>
                    <% } %>
                </div>
            <% } %>
            <!-- //Attachment Block -->
        </div>
    </script>

    <script type=\"text/javascript\">

        var ticketApp = {};
        \$(function () {
            
            var TicketModel = Backbone.Model.extend({
                idAttribute : \"id\",
                validation: {
                    'email': [{
                        required: true,
                        msg: '{{ \"This field is mandatory\"|trans }}'
                    },{
                        pattern: 'email',
                        msg: '{{ \"Please enter a valid email\"|trans }}'
                    }],
                },
            });

            var TicketView = Backbone.View.extend({
                el: \$('.uv-body'),
                stopDraftSaveFlag: 0,
                events: {
                    'click .uv-kudo-response-wrapper .uv-kudo-response': 'rateTicket',
                    'click .collaborator-list .uv-btn-tag': 'removeCcCollaborator',
                    'change .uv-element-block.cc-bcc .cc-bcc-toggle': 'showCcBccBlock',
                    'keypress .uv-element-block.cc-bcc .uv-group-field': 'addCcBccInput',
                    'click .cc-bcc-list .uv-btn-tag, .to-list .uv-btn-tag': 'removeEmail',
                    'click .uv-dropdown.reply .uv-dropdown-list li:not(.confirm-close-ticket)': 'validateForm',
                    'click #reply-btn': 'validateForm',
                    'click #confirmed-close-ticket': 'confirmedAction',
                    'click .confirm-close-ticket': 'confirmClose',
                },
                confirmClose: function(e) {
                    \$('#confirm-ticket-close-modal').show();
                },
                confirmedAction: function(e) {
                    \$('#confirm-ticket-close-modal').hide();
                    this.validateForm(e);
                },
                ratingText: {
                    '1' : \"{{ 'I am very Sad'|trans }}\",
                    '2' : \"{{ 'I am Sad'|trans }}\",
                    '3' : \"{{ 'I am Neutral'|trans }}\",
                    '4' : \"{{ 'I am Happy'|trans }}\",
                    '5' : \"{{ 'I am Very Happy'|trans }}\",
                },
                loaderTemplate : _.template(\$(\"#loader-tmp\").html()),
                rateTicket : function(e) {
                    var element = Backbone.\$(e.currentTarget);
                    var count = element.attr('data-id');
                    this.model.set('rating', count);

                    var self = this;
                    app.appView.showLoader()
                    this.model.save({}, {
                        url : \"{{ path('helpdesk_customer_rate_ticket', {'id': ticket.id}) }}\",
                        success: function (model, response, options) {
                            app.appView.hideLoader()
                            if(response.alertClass == 'success') {
                                \$('.uv-kudo-response').removeClass('uv-kudo-done');
                                element.addClass('uv-kudo-done');
                                \$('.uv-kudo-message').text(self.ratingText[count])
                                \$('.uv-kudo-button').trigger('click')
                            } else {
                                app.appView.renderResponseAlert(response);
                            }
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
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
                    if (Backbone.\$(e.currentTarget).parent()[0]) {
                        Backbone.\$(e.currentTarget).parent()[0].removeChild(e.currentTarget);
                        var collaboratorContainer = \$('.uv-element-block.collaborators');
                    }

                    if(!collaboratorContainer.find('.uv-btn-tag').length)
                        collaboratorContainer.hide()
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
                removeEmail: function(e) {
                    e.preventDefault()
                    Backbone.\$(e.currentTarget).parent().remove();
                },
                validateForm : function(e) {
                    e.preventDefault();
                    var element = Backbone.\$(e.currentTarget);
                    form = \$('#ticket-form');
                    form.find('.reply-status').val(element.attr('data-id'));
                    form.find('.uv-field-message').remove()

                    var html = tinyMCE.get(\"reply-area\").getContent();
                    if(app.appView.htmlText(html) != '' || -1 != html.indexOf('<img')) {
                        this.stopDraftSaveFlag = 1;

\t\t\t\t\t\tapp.appView.showLoader();
                        tinyMCE.activeEditor.uploadImages(function(response) {
                            app.appView.hideLoader();

\t\t\t\t\t\t\tform.submit();
\t                        \$('.uv-dropdown.reply').find('.uv-btn').attr('disabled', 'disabled');
\t                        \$('#reply-btn,#confirmed-close-ticket').attr('disabled', 'disabled');
                        });
                    } else {
                        form.find('.uv-element-block-textarea').append(\"<span class='uv-field-message'>{{ 'This field is mandatory'|trans }}</span>\");
                    }
                }
            });

            var ThreadModel = Backbone.Model.extend({
                idAttribute : \"id\",
                defaults : {
                    hasTask : 0,
                    task: null
                }
            });

            var ThreadCollection = AppCollection.extend({
                model : ThreadModel,
                mode: \"infinite\",
                url : \"{{ path('helpdesk_customer_thread_collection_xhr', {'id': ticket.id}) }}\",
                parseRecords: function (resp, options) {
                    return resp.threads;
                },
                syncData : function() {
                    app.appView.showLoader()
                    this.fetch({
                        remove: false,
                        success: function(model, response) {
                            app.appView.hideLoader()
                            pagination.renderPagination(response.pagination);
                            threadCollection.state.currentPage = parseInt(response.pagination.current) + 1;
                        },
                        error: function (model, xhr, options) {
                            app.appView.hideLoader()
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                }
            });

            var ThreadItem = Backbone.View.extend({
                tagName : \"div\",
                className : \"uv-ticket-main\",
                template : _.template(\$(\"#thread_list_item_tmp\").html()),
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));
                    this.\$el.addClass(\"thread-\" + this.model.id)

                    return this;
                }
            });

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
                    //viewerImages();
                    //convertForImages(this.\$el);
                    this.\$el.find('div.message a').attr('target', '_blank');
                    app.appView.relativeTime()
                }
            });

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

            //Collaborator Code starts here
            _.extend(Backbone.Model.prototype, Backbone.Validation.mixin);
            var CollaboratorModel = Backbone.Model.extend({
                idAttribute : \"id\",
                validation: {
                    'email': [{
                        required: true,
                        msg: '{{ \"This field is mandatory\"|trans }}'
                    },{
                        pattern: 'email',
                        msg: '{{ \"Please enter a valid email\"|trans }}'
                    }]
                },
                defaults : {
                    ticketId : {{ ticket.id }},
                    email: ''
                },
                parse: function (resp, options) {
                    return resp.collaborator;
                },
                urlRoot : \"{{ path('helpdesk_customer_update_ticket_collaborators_xhr') }}\"
            });

            var CollaboratorCollection = Backbone.PageableCollection.extend({
                model : CollaboratorModel
            });

            var CollaboratorItem = Backbone.View.extend({
                tagName : \"a\",
                className: 'uv-btn-tag',
                template : _.template(\"<span class='uv-tag'><span class='uv-icon-remove-dark-before'></span><%- name %></span>\"),
                events : {
                    'click .uv-tag' : 'removeItem'
                },
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));
                    return this;
                },
                unrender : function(response) {
                    if(response.alertMessage != undefined) {
                        collaboratorListView.render();
                        app.appView.renderResponseAlert(response);
                    }
                },
                removeItem: function() {
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
                }
            });

            var CollaboratorList = Backbone.View.extend({
                el : \$(\".collaborator-list-block\"),
                events : {
                    'keypress .uv-field' : 'addCollaborator',
                    'focusout .uv-field' : 'removeErrorClass',
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
                }
            });
            //Collaborator Code ends here

            ticketModel = new TicketModel({
                id : \"{{ ticket.id }}\",
            });

            ticketApp.ticketView = ticketView = new TicketView({
                model: ticketModel
            });

            var threadCollection = new ThreadCollection();
\t\t    var threadList = new ThreadList();
            var pagination = new Pagination();
            threadCollection.syncData();

            {% if ticket.customer == app.user %}
                var collaboratorCollection = new CollaboratorCollection(\$.parseJSON('{{ ticket_service.getTicketCollaborators(ticket.id)|json_encode|raw }}'));
                var collaboratorListView = new CollaboratorList();
                collaboratorListView.render();
            {% endif %}
        });
    </script>

    {{ include(\"@UVDeskCoreFramework/Templates/tinyMCE.html.twig\") }}

\t<script>
\t\tsfTinyMce.init({
            height: '250px',
\t\t\tselector : '.uv-ticket-reply textarea',
\t\t\timages_upload_url: \"\",
            setup: function(editor) {
            }
\t\t});
\t</script>

    <script>
        document.addEventListener(\"DOMContentLoaded\", function(){
            var uvKudoButton = document.querySelector(\".uv-kudo-button\");
            var uvKudoIcon = document.querySelector(\".uv-kudo-icon\");
            var uvKudoPlank = document.querySelector(\".uv-kudo-plank\");
            var uvKudoMessage = document.querySelector(\".uv-kudo-message\");
            var uvKudoResponse = document.querySelector(\".uv-kudo-response\");

            uvKudoButton.addEventListener(\"click\", function(){
                uvKudoButton.classList.toggle(\"uv-kudo-button-active\");
                uvKudoPlank.classList.toggle(\"uv-kudo-plank-active\");
            });
        });
    </script>
{% endblock %}
", "@UVDeskSupportCenter/Knowledgebase/ticketView.html.twig", "/home/lexcorp.xyz/public_html/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Knowledgebase/ticketView.html.twig");
    }
}
