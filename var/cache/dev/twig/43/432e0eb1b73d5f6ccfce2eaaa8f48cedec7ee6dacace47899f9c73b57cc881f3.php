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

/* @UVDeskSupportCenter/Knowledgebase/ticketList.html.twig */
class __TwigTemplate_28910a3e0ee9311785d0967707e86d5c410d2ec896a7fe84ed6fb66bcbd8736a extends Template
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
            'metaDescription' => [$this, 'block_metaDescription'],
            'metaKeywords' => [$this, 'block_metaKeywords'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/ticketList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/ticketList.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskSupportCenter/Templates/layout.html.twig", "@UVDeskSupportCenter/Knowledgebase/ticketList.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets", [], "messages");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_ogtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogtitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogtitle"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets", [], "messages");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_twtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "twtitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "twtitle"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets", [], "messages");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_metaDescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescription"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescription"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ticketlist.metaDescription", [], "messages");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_metaKeywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaKeywords"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaKeywords"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ticketlist.metaKeywords", [], "messages");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_tabHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabHeader"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabHeader"));

        // line 11
        echo "\t<div class=\"uv-nav-bar uv-nav-tab\">
\t\t<div class=\"uv-container\">
\t\t\t<div class=\"uv-nav-bar-lt\">
\t\t\t\t<ul class=\"uv-nav-tab-label\">
\t\t\t\t\t<li><a class=\"uv-nav-tab-active\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_ticket_collection");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket Requests"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "ticketCreateOption", [], "any", true, true, false, 16) && twig_get_attribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 16, $this->source); })()), "ticketCreateOption", [], "any", false, false, false, 16))) {
            // line 17
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_create_ticket");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New Ticket Request"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t";
        }
        // line 19
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"uv-nav-bar-rt\">
\t\t\t\t<form method=\"get\" action=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_front_article_search");
        echo "\">
\t\t\t\t\t<input name=\"s\" class=\"uv-nav-search\" type=\"text\" placeholder=\"";
        // line 23
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

    // line 29
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 30
        echo "\t<style>
\t\t.uv-table td a {
\t\t\tcolor: #333;
\t\t}
\t\t.announcement {
\t\t\tbackground-color:green;
\t\t\tmargin-bottom:10px; 
\t\t\tborder-radius:3px;
\t\t\theight: 48px; 
\t\t\tpadding: 10px;
\t\t}
\t\t.announcement_para {
\t\t\tcolor: #fff;
\t\t\tfloat: left;
\t\t\tfont-style: normal;
\t\t\tfont-weight: 500;
\t\t\tfont-size: 16px;
\t\t\tline-height: 17px;
\t\t}
\t\t.announcement_remove {
\t\t\tborder-radius:50%; 
\t\t\tfloat:right; 
\t\t\tcursor:pointer;
\t\t\tborder: 2px solid #fff; 
\t\t\twidth: 26px; 
\t\t\tpadding-left: 7px; 
\t\t\tpadding-bottom: 3px;
\t\t}
\t\t.announcement_btn_rgt {
\t\t\tfloat: right;
\t\t\tfont-weight:bold;
\t\t\tbackground: #FFFFFF;
\t\t\tcursor: pointer;
\t\t\tcolor: #2B6BE3;
\t\t\tpadding: 4px;
\t\t\tborder-radius: 3px; 
\t\t\tmargin-right: 36px;
\t\t}
\t\t.announcement_btn_left {
\t\t\tfloat: left;
\t\t\tbackground: #EFC556;
\t\t\tfont-weight:bold;
\t\t\tcursor: pointer;
\t\t\tfont: Source Sans Pro;
\t\t\tpadding: 4px;
\t\t\tborder-radius: 4px;
\t\t\tmargin-right: 10px;
\t\t}
\t</style>
\t
\t<div class=\"uv-nav-tab-view\">
\t\t<h1>";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket Requests"), "html", null, true);
        echo "</h1>
\t\t<div class=\"uv-action-view\">
\t\t\t<div class=\"uv-action-view-lt\">

\t\t\t\t<!--Sort by-->
\t\t\t\t<div class=\"uv-dropdown sort\">
\t\t\t\t\t<div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">
\t\t\t\t\t\t";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort By:"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket Id"), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t<label>";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort By"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--Sort by-->

\t\t\t\t<!--Filter By Status-->
\t\t\t\t<div class=\"uv-dropdown filter-by-status\">
\t\t\t\t\t<div class=\"uv-dropdown-btn\">
\t\t\t\t\t\t";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status:"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t<label>";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"uv-drop-list-active\"><a href=\"#\" data-id=\"\">";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t\t";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 110, $this->source); })()), "getStatus", [], "method", false, false, false, 110));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 111
            echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 111), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["status"], "description", [], "any", false, false, false, 111)), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--//Filter By Status-->
\t\t\t</div>
\t\t\t<div class=\"uv-action-view-rt\">
\t\t\t\t<input type=\"text\" class=\"uv-search-inline uv-search-inline-full\" placeholder=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search Tickets"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--//Action Bar-->

\t<!-- Announcement Section-->
\t";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groupAnnouncement"]) || array_key_exists("groupAnnouncement", $context) ? $context["groupAnnouncement"] : (function () { throw new RuntimeError('Variable "groupAnnouncement" does not exist.', 127, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
            // line 128
            echo "\t\t<div class=\"announcement\" id= \"uv-kb-info-announcement_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["announcement"], "id", [], "any", false, false, false, 128), "html", null, true);
            echo "\">
\t\t\t<a class=\"announcement_btn_left\" style=\"background:";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["announcement"], "tagColor", [], "any", false, false, false, 129), "html", null, true);
            echo " !important; color:#333333 !important\" href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["announcement"], "title", [], "any", false, false, false, 129), "html", null, true);
            echo "</a>
\t\t\t<p class=\"announcement_para\">";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["announcement"], "promoText", [], "any", false, false, false, 130), "html", null, true);
            echo "</p>
\t\t\t<a class =\"announcement_remove\" style=\"color: #fff !important;\" onclick=\"document.getElementById('uv-kb-info-announcement_";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["announcement"], "id", [], "any", false, false, false, 131), "html", null, true);
            echo "').remove()\">x</a>
\t\t\t<a class=\"announcement_btn_rgt\" target=\"_blank\" href=\"";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["announcement"], "linkUrl", [], "any", false, false, false, 132), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["announcement"], "linkText", [], "any", false, false, false, 132), "html", null, true);
            echo "</a>
\t\t</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "\t<div class=\"uv-hl-ring\"></div>
\t<!-- Announcement Section-->

\t<div class=\"uv-table uv-list-view\">
\t\t<table>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket Id"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th>";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th>";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th>";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Timestamp"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th class=\"uv-last\">";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t</tbody>
\t\t</table>
\t\t<div class=\"navigation\"></div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 157
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 158
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
\t<!-- Sorting Template -->
\t<script id=\"ticket_list_sorting_tmp\" type=\"text/template\">
        <li class=\"<% if(sort == 't.id') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%- queryString %>/<% } %><% if(page) { %>page/<%- page %><% } else { %>page/1<% } %>/sort/t.id/<% if(sort == 't.id') { %><% if(direction) { %>direction/<%- direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"t.id\">
                ";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket Id"), "html", null, true);
        echo "
            </a>
            <% if(sort == 't.id') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>

            <% } %>
        </li>
        <li class=\"<% if(sort == 'name') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%- queryString %>/<% } %><% if(page) { %>page/<%- page %><% } else { %>page/1<% } %>/sort/name/<% if(sort == 'name') { %><% if(direction) { %>direction/<%- direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"name\">
                ";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent Name"), "html", null, true);
        echo "
            </a>
            <% if(sort == 'name') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>

            <% } %>
        </li>
\t\t<li class=\"<% if(sort == 't.updatedAt') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%- queryString %>/<% } %><% if(page) { %>page/<%- page %><% } else { %>page/1<% } %>/sort/t.updatedAt/<% if(sort == 't.updatedAt') { %><% if(direction) { %>direction/<%- direction %><% } else { %>direction/asc<% } %><% } else { %>direction/desc<% } %>\" data-field=\"t.updatedAt\">
                ";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last Updated"), "html", null, true);
        echo "
            </a>
            <% if(sort == 't.updatedAt') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>

            <% } %>
        </li>
\t</script>
\t<!-- //Sorting Template -->

\t<script id=\"ticket_list_item_tmp\" type=\"text/template\">
\t\t<td data-value=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket Id"), "html", null, true);
        echo "\">
\t       <a class=\"not-shiny\" href=\"<%- path %>\">
\t    \t\t#<%- id %>
\t    \t</a>
        </td>
        <td data-value=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
        echo "\">
\t       <a class=\"not-shiny\" href=\"<%- path %>\">
\t    \t\t<%- subject %>
\t    \t</a>
        </td>
        <td data-value=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        echo "\">
\t       \t<a class=\"not-shiny\" href=\"<%- path %>\">
\t       \t\t<% if (status.description == 'Open') { %>
\t\t\t\t   \t\t";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Open"), "html", null, true);
        echo "
\t\t\t\t<% } else if (status.description == 'Closed') { %>
\t\t\t\t\t\t";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Closed"), "html", null, true);
        echo "
\t\t\t\t<% } else if (status.description == 'Pending') { %>
\t\t\t\t\t\t";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pending"), "html", null, true);
        echo "
\t\t\t\t<% } else if (status.description == 'Answered') { %>
\t\t\t\t\t\t";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Answered"), "html", null, true);
        echo "
\t\t\t\t<% } else if(status.description == 'Resolved') { %>
\t\t\t\t\t\t";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Resolved"), "html", null, true);
        echo "
\t\t\t\t<% } else if(status.description == 'UnAnswered') { %>
\t\t\t\t\t\t";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("UnAnswered"), "html", null, true);
        echo "
\t\t\t\t<% } else if(status.description == 'UnAssigned') { %>
\t\t\t\t\t\t";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("UnAssigned"), "html", null, true);
        echo "
\t\t\t\t<% } %>
\t    \t</a>
        </td>
        <td data-value=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Timestamp"), "html", null, true);
        echo "\">
\t       \t<a class=\"not-shiny\" href=\"<%- path %>\">
\t       \t\t<%= formatedCreatedAt %>
\t    \t</a>
        </td>
        <td data-value=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        echo "\">
        \t<a class=\"not-shiny\" href=\"<%- path %>\">
\t\t\t\t<%  if(agent) { %>
                    <% if(agent.smallThumbnail != null) { %>
                        <img class=\"uv-table-agent\" src=\"";
        // line 230
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 230, $this->source); })()), "request", [], "any", false, false, false, 230), "scheme", [], "any", false, false, false, 230) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 230, $this->source); })()), "request", [], "any", false, false, false, 230), "httpHost", [], "any", false, false, false, 230)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
        echo "<%- agent.smallThumbnail %>\" alt=\"\"/>
                    <% } else { %>
                        <img class=\"uv-table-agent\" src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 232, $this->source); })())), "html", null, true);
        echo "\" alt=\"\"/>
                    <% } %>
                    <%- agent.firstName + ' ' + (agent.lastName == null ? '' : agent.lastName) %>
                <% } else { %>
                    ";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unassigned"), "html", null, true);
        echo "
                <% } %>
        \t</a>
        </td>
    </script>

    <script type=\"text/javascript\">
\t\t\$(function() {
\t\t\tvar ticketPath = \"";
        // line 244
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_ticket", ["id" => "replaceId"]);
        echo "\";
\t\t\tvar TicketModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\",
\t\t\t\tdefaults : {
\t\t\t\t\tpath : \"\",
\t\t\t\t}
\t\t\t});

\t\t\tvar TicketCollection = AppCollection.extend({
\t\t\t\tmodel : TicketModel,
\t\t\t\turl : \"";
        // line 254
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_ticket_collection_xhr");
        echo "\",
\t\t\t\tfilterParameters : {
\t\t\t\t\t\"status\" : \"\",
\t\t\t\t\t\"search\" : \"\",
\t\t\t\t},
\t\t\t\tparseRecords: function (resp, options) {
\t\t\t\t\treturn resp.tickets;
\t\t\t\t},
\t\t\t\tsyncData : function() {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\tthis.fetch({
\t\t\t\t\t\tdata : this.getValidParameters(),
\t\t\t\t\t\treset: true,
\t\t\t\t\t\tsuccess: function(model, response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tvar ticketListView = new TicketList();

                            app.pager.paginationData = response.pagination;
\t\t\t\t\t\t\tapp.pager.url = response.pagination.url;
\t\t\t\t\t\t\tif(ticketCollection.length == 0 && app.pager.paginationData.current != \"0\")
\t\t\t\t\t\t\t\trouter.navigate(url.replace('replacePage', app.pager.paginationData.last),{trigger: true});
\t\t\t\t\t\t\telse {
\t\t\t\t\t\t\t\tapp.pager.render();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function (model, xhr, options) {
\t\t\t\t\t\t\tif(url = xhr.getResponseHeader('Location'))
\t\t\t\t\t\t\t\twindow.location = url;
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});

\t\t\tvar TicketItem = Backbone.View.extend({
\t\t\t\ttagName : \"tr\",
\t\t\t\ttemplate : _.template(\$(\"#ticket_list_item_tmp\").html()),
\t\t\t\trender : function () {
\t\t\t\t\tthis.model.set({path:ticketPath.replace('replaceId', this.model.attributes.id)})
\t\t\t\t\tthis.\$el.html(this.template(this.model.toJSON()));

\t\t\t\t\tif(this.model.attributes.isCustomerView != true)
\t\t\t\t\t\tthis.\$el.addClass('unread')

\t\t\t\t\treturn this;
\t\t\t\t}
\t\t\t});

\t\t\tvar TicketList = Backbone.View.extend({
\t\t\t\tel : \$(\".uv-list-view table tbody\"),
\t\t\t\tinitialize : function() {
\t\t\t\t\tthis.render();
\t\t\t\t},
\t\t\t\trender : function () {
\t\t\t\t\tthis.\$el.html('');
\t\t\t\t\tif(ticketCollection.length) {
\t\t\t\t\t\t_.each(ticketCollection.models, function (item) {
\t\t\t\t\t\t\tthis.renderTicket(item);
\t\t\t\t\t\t}, this);
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.\$el.append(\"<tr style='text-align: center;float: none;'><td colspan='5'>";
        // line 313
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Record Found", [], "messages");
        echo "</td></tr>\")
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\trenderTicket : function (item) {
\t\t\t\t\tvar ticketItem = new TicketItem({
\t\t\t\t\t\tmodel: item
\t\t\t\t\t});
\t\t\t\t\tthis.\$el.append(ticketItem.render().el);
\t\t\t\t}
\t\t\t});

\t\t\tvar Filter = app.Filter.extend({
\t\t\t\tdefaultSortIndex: 't.id',
\t\t\t\tsortText: \"";
        // line 326
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort By:", [], "messages");
        echo " \",
\t\t\t\tdefaultSortText: \"";
        // line 327
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort By:", [], "messages");
        echo " ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ticket Id", [], "messages");
        echo "\",
\t\t\t\ttemplate : _.template(\$(\"#ticket_list_sorting_tmp\").html()),
\t\t\t\tfilterByStatus : function(e) {
\t\t\t\t\te.preventDefault()
\t\t\t\t\tthis.collection.reset();
\t\t\t\t\tthis.collection.state.currentPage = null;
\t\t\t\t\tthis.collection.setSorting(null, null, {full: false});
\t\t\t\t\tthis.collection.filterParameters.status = Backbone.\$(e.currentTarget).find('a').attr('data-id');
\t\t\t\t\tvar queryString = app.appView.buildQuery(\$.param(this.collection.getValidParameters()));
\t\t\t\t\trouter.navigate(queryString, {trigger: true});
\t\t\t\t},
\t\t\t})

\t\t\tvar ticketCollection = new TicketCollection();

\t\t\tvar filter = new Filter({
\t\t\t\tel: \$('.uv-action-view'),
\t\t\t\tcollection : ticketCollection
\t\t\t});

\t\t\tRouter = Backbone.Router.extend({
\t\t    \troutes: {
                \t'page/:number(/sort/:sortField)(/direction/:order)' : 'paginate',
                \t'search/:query(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterByQuery',
                \t'status/:status(/search/:query)(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterByStatus',
                \t'' : 'initializeList',
                \t'_=_' : 'initializeList',
                },
                initializeList : function() {
                \tthis.resetParams('','');
                \tthis.fetch(null, null, null);
                },
                paginate : function(number, sortField, order) {
                \tthis.resetParams('', '');
                \tthis.fetch(number, sortField, order);
                },
                filterByQuery : function(query, number, sortField, order) {
                \tif(query != null)
                \t\tquery = query.replace(/\\+/g,' ');

                \tthis.resetParams(query, '');
                \tthis.fetch(number, sortField, order);
                },
                filterByStatus : function(status, query, number, sortField, order) {
                \tif(query != null)
                \t\tquery = query.replace(/\\+/g,' ');

                \tthis.resetParams(query, status);

                \tthis.fetch(number, sortField, order);
                },
                fetch : function(number, sortField, order) {
                \tticketCollection.state.currentPage = number;
                \tfilter.sortCollection(sortField, order);
                \tticketCollection.syncData();
                },
                resetParams : function(query, status) {
                \tticketCollection.filterParameters.search = query;
                \t\$(\".uv-search-inline \").val(query);
                \tticketCollection.filterParameters.status = status;
                    var statusText = status ? \$(\".filter-by-status a[data-id='\" + status + \"']\").text() : \"";
        // line 387
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All", [], "messages");
        echo "\";
\t\t\t\t\t\$(\".filter-by-status .uv-dropdown-btn\").text(\"";
        // line 388
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status:", [], "messages");
        echo " \" + statusText);
                }
            });

\t\t\trouter = new Router();
            Backbone.history.start({push_state:true});
\t\t});
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@UVDeskSupportCenter/Knowledgebase/ticketList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  761 => 388,  757 => 387,  692 => 327,  688 => 326,  672 => 313,  610 => 254,  597 => 244,  586 => 236,  579 => 232,  574 => 230,  567 => 226,  559 => 221,  552 => 217,  547 => 215,  542 => 213,  537 => 211,  532 => 209,  527 => 207,  522 => 205,  516 => 202,  508 => 197,  500 => 192,  486 => 181,  474 => 172,  462 => 163,  453 => 158,  443 => 157,  424 => 146,  420 => 145,  416 => 144,  412 => 143,  408 => 142,  399 => 135,  388 => 132,  384 => 131,  380 => 130,  374 => 129,  369 => 128,  365 => 127,  355 => 120,  346 => 113,  335 => 111,  331 => 110,  327 => 109,  322 => 107,  313 => 103,  299 => 92,  290 => 88,  280 => 81,  227 => 30,  217 => 29,  201 => 23,  197 => 22,  192 => 19,  184 => 17,  182 => 16,  176 => 15,  170 => 11,  160 => 10,  141 => 8,  122 => 7,  103 => 6,  84 => 5,  65 => 4,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@UVDeskSupportCenter/Templates/layout.html.twig\" %}

{# WebkulUVDeskSupportCenterBundle/Resources/views/Front/ticketList.html.twig #}
{% block title %}{% trans %}Tickets{% endtrans %}{% endblock %}
{% block ogtitle %}{% trans %}Tickets{% endtrans %}{% endblock %}
{% block twtitle %}{% trans %}Tickets{% endtrans %}{% endblock %}
{% block metaDescription %}{% trans %}ticketlist.metaDescription{% endtrans %}{% endblock %}
{% block metaKeywords %}{% trans %}ticketlist.metaKeywords{% endtrans %}{% endblock %}

{% block tabHeader %}
\t<div class=\"uv-nav-bar uv-nav-tab\">
\t\t<div class=\"uv-container\">
\t\t\t<div class=\"uv-nav-bar-lt\">
\t\t\t\t<ul class=\"uv-nav-tab-label\">
\t\t\t\t\t<li><a class=\"uv-nav-tab-active\" href=\"{{ path('helpdesk_customer_ticket_collection') }}\">{{ 'Ticket Requests'|trans }}</a></li>
\t\t\t\t\t{% if websiteConfiguration.ticketCreateOption is defined and websiteConfiguration.ticketCreateOption %}
\t\t\t\t\t\t<li><a href=\"{{ path('helpdesk_customer_create_ticket') }}\">{{ 'New Ticket Request'|trans }}</a></li>
\t\t\t\t\t{% endif %}
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
\t<style>
\t\t.uv-table td a {
\t\t\tcolor: #333;
\t\t}
\t\t.announcement {
\t\t\tbackground-color:green;
\t\t\tmargin-bottom:10px; 
\t\t\tborder-radius:3px;
\t\t\theight: 48px; 
\t\t\tpadding: 10px;
\t\t}
\t\t.announcement_para {
\t\t\tcolor: #fff;
\t\t\tfloat: left;
\t\t\tfont-style: normal;
\t\t\tfont-weight: 500;
\t\t\tfont-size: 16px;
\t\t\tline-height: 17px;
\t\t}
\t\t.announcement_remove {
\t\t\tborder-radius:50%; 
\t\t\tfloat:right; 
\t\t\tcursor:pointer;
\t\t\tborder: 2px solid #fff; 
\t\t\twidth: 26px; 
\t\t\tpadding-left: 7px; 
\t\t\tpadding-bottom: 3px;
\t\t}
\t\t.announcement_btn_rgt {
\t\t\tfloat: right;
\t\t\tfont-weight:bold;
\t\t\tbackground: #FFFFFF;
\t\t\tcursor: pointer;
\t\t\tcolor: #2B6BE3;
\t\t\tpadding: 4px;
\t\t\tborder-radius: 3px; 
\t\t\tmargin-right: 36px;
\t\t}
\t\t.announcement_btn_left {
\t\t\tfloat: left;
\t\t\tbackground: #EFC556;
\t\t\tfont-weight:bold;
\t\t\tcursor: pointer;
\t\t\tfont: Source Sans Pro;
\t\t\tpadding: 4px;
\t\t\tborder-radius: 4px;
\t\t\tmargin-right: 10px;
\t\t}
\t</style>
\t
\t<div class=\"uv-nav-tab-view\">
\t\t<h1>{{ 'Ticket Requests'|trans }}</h1>
\t\t<div class=\"uv-action-view\">
\t\t\t<div class=\"uv-action-view-lt\">

\t\t\t\t<!--Sort by-->
\t\t\t\t<div class=\"uv-dropdown sort\">
\t\t\t\t\t<div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">
\t\t\t\t\t\t{{ 'Sort By:'|trans }} {{ 'Ticket Id'|trans }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t<label>{{ 'Sort By'|trans }}</label>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--Sort by-->

\t\t\t\t<!--Filter By Status-->
\t\t\t\t<div class=\"uv-dropdown filter-by-status\">
\t\t\t\t\t<div class=\"uv-dropdown-btn\">
\t\t\t\t\t\t{{ 'Status:'|trans }} {{ 'All'|trans }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t<label>{{ 'Status'|trans }}</label>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"uv-drop-list-active\"><a href=\"#\" data-id=\"\">{{ 'All'|trans }}</a></li>
\t\t\t\t\t\t\t\t{% for status in ticket_service.getStatus() %}
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-id=\"{{status.id}}\">{{ status.description|trans }}</a></li>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--//Filter By Status-->
\t\t\t</div>
\t\t\t<div class=\"uv-action-view-rt\">
\t\t\t\t<input type=\"text\" class=\"uv-search-inline uv-search-inline-full\" placeholder=\"{{ 'Search Tickets'|trans }}\">
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--//Action Bar-->

\t<!-- Announcement Section-->
\t{% for announcement in groupAnnouncement %}
\t\t<div class=\"announcement\" id= \"uv-kb-info-announcement_{{ announcement.id }}\">
\t\t\t<a class=\"announcement_btn_left\" style=\"background:{{ announcement.tagColor }} !important; color:#333333 !important\" href=\"#\">{{ announcement.title }}</a>
\t\t\t<p class=\"announcement_para\">{{ announcement.promoText }}</p>
\t\t\t<a class =\"announcement_remove\" style=\"color: #fff !important;\" onclick=\"document.getElementById('uv-kb-info-announcement_{{ announcement.id }}').remove()\">x</a>
\t\t\t<a class=\"announcement_btn_rgt\" target=\"_blank\" href=\"{{ announcement.linkUrl }}\">{{ announcement.linkText }}</a>
\t\t</div>
    {% endfor %}
\t<div class=\"uv-hl-ring\"></div>
\t<!-- Announcement Section-->

\t<div class=\"uv-table uv-list-view\">
\t\t<table>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>{{ \"Ticket Id\"|trans }}</th>
\t\t\t\t\t<th>{{ \"Subject\"|trans }}</th>
\t\t\t\t\t<th>{{ \"Status\"|trans }}</th>
\t\t\t\t\t<th>{{ \"Timestamp\"|trans }}</th>
\t\t\t\t\t<th class=\"uv-last\">{{ \"Agent\"|trans }}</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t</tbody>
\t\t</table>
\t\t<div class=\"navigation\"></div>
\t</div>
{% endblock %}


{% block footer %}
\t{{ parent() }}
\t<!-- Sorting Template -->
\t<script id=\"ticket_list_sorting_tmp\" type=\"text/template\">
        <li class=\"<% if(sort == 't.id') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%- queryString %>/<% } %><% if(page) { %>page/<%- page %><% } else { %>page/1<% } %>/sort/t.id/<% if(sort == 't.id') { %><% if(direction) { %>direction/<%- direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"t.id\">
                {{ 'Ticket Id'|trans }}
            </a>
            <% if(sort == 't.id') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>

            <% } %>
        </li>
        <li class=\"<% if(sort == 'name') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%- queryString %>/<% } %><% if(page) { %>page/<%- page %><% } else { %>page/1<% } %>/sort/name/<% if(sort == 'name') { %><% if(direction) { %>direction/<%- direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"name\">
                {{ 'Agent Name'|trans }}
            </a>
            <% if(sort == 'name') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>

            <% } %>
        </li>
\t\t<li class=\"<% if(sort == 't.updatedAt') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%- queryString %>/<% } %><% if(page) { %>page/<%- page %><% } else { %>page/1<% } %>/sort/t.updatedAt/<% if(sort == 't.updatedAt') { %><% if(direction) { %>direction/<%- direction %><% } else { %>direction/asc<% } %><% } else { %>direction/desc<% } %>\" data-field=\"t.updatedAt\">
                {{ 'Last Updated'|trans }}
            </a>
            <% if(sort == 't.updatedAt') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>

            <% } %>
        </li>
\t</script>
\t<!-- //Sorting Template -->

\t<script id=\"ticket_list_item_tmp\" type=\"text/template\">
\t\t<td data-value=\"{{ 'Ticket Id'|trans }}\">
\t       <a class=\"not-shiny\" href=\"<%- path %>\">
\t    \t\t#<%- id %>
\t    \t</a>
        </td>
        <td data-value=\"{{ 'Subject'|trans }}\">
\t       <a class=\"not-shiny\" href=\"<%- path %>\">
\t    \t\t<%- subject %>
\t    \t</a>
        </td>
        <td data-value=\"{{ 'Status'|trans }}\">
\t       \t<a class=\"not-shiny\" href=\"<%- path %>\">
\t       \t\t<% if (status.description == 'Open') { %>
\t\t\t\t   \t\t{{ 'Open'|trans }}
\t\t\t\t<% } else if (status.description == 'Closed') { %>
\t\t\t\t\t\t{{ 'Closed'|trans }}
\t\t\t\t<% } else if (status.description == 'Pending') { %>
\t\t\t\t\t\t{{ 'Pending'|trans }}
\t\t\t\t<% } else if (status.description == 'Answered') { %>
\t\t\t\t\t\t{{ 'Answered'|trans }}
\t\t\t\t<% } else if(status.description == 'Resolved') { %>
\t\t\t\t\t\t{{ 'Resolved'|trans }}
\t\t\t\t<% } else if(status.description == 'UnAnswered') { %>
\t\t\t\t\t\t{{ 'UnAnswered'|trans }}
\t\t\t\t<% } else if(status.description == 'UnAssigned') { %>
\t\t\t\t\t\t{{ 'UnAssigned'|trans }}
\t\t\t\t<% } %>
\t    \t</a>
        </td>
        <td data-value=\"{{ 'Timestamp'|trans }}\">
\t       \t<a class=\"not-shiny\" href=\"<%- path %>\">
\t       \t\t<%= formatedCreatedAt %>
\t    \t</a>
        </td>
        <td data-value=\"{{ 'Agent'|trans }}\">
        \t<a class=\"not-shiny\" href=\"<%- path %>\">
\t\t\t\t<%  if(agent) { %>
                    <% if(agent.smallThumbnail != null) { %>
                        <img class=\"uv-table-agent\" src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}<%- agent.smallThumbnail %>\" alt=\"\"/>
                    <% } else { %>
                        <img class=\"uv-table-agent\" src=\"{{ asset(default_agent_image_path) }}\" alt=\"\"/>
                    <% } %>
                    <%- agent.firstName + ' ' + (agent.lastName == null ? '' : agent.lastName) %>
                <% } else { %>
                    {{ 'Unassigned'|trans }}
                <% } %>
        \t</a>
        </td>
    </script>

    <script type=\"text/javascript\">
\t\t\$(function() {
\t\t\tvar ticketPath = \"{{ path('helpdesk_customer_ticket', {'id': 'replaceId' }) }}\";
\t\t\tvar TicketModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\",
\t\t\t\tdefaults : {
\t\t\t\t\tpath : \"\",
\t\t\t\t}
\t\t\t});

\t\t\tvar TicketCollection = AppCollection.extend({
\t\t\t\tmodel : TicketModel,
\t\t\t\turl : \"{{ path('helpdesk_customer_ticket_collection_xhr') }}\",
\t\t\t\tfilterParameters : {
\t\t\t\t\t\"status\" : \"\",
\t\t\t\t\t\"search\" : \"\",
\t\t\t\t},
\t\t\t\tparseRecords: function (resp, options) {
\t\t\t\t\treturn resp.tickets;
\t\t\t\t},
\t\t\t\tsyncData : function() {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\tthis.fetch({
\t\t\t\t\t\tdata : this.getValidParameters(),
\t\t\t\t\t\treset: true,
\t\t\t\t\t\tsuccess: function(model, response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tvar ticketListView = new TicketList();

                            app.pager.paginationData = response.pagination;
\t\t\t\t\t\t\tapp.pager.url = response.pagination.url;
\t\t\t\t\t\t\tif(ticketCollection.length == 0 && app.pager.paginationData.current != \"0\")
\t\t\t\t\t\t\t\trouter.navigate(url.replace('replacePage', app.pager.paginationData.last),{trigger: true});
\t\t\t\t\t\t\telse {
\t\t\t\t\t\t\t\tapp.pager.render();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function (model, xhr, options) {
\t\t\t\t\t\t\tif(url = xhr.getResponseHeader('Location'))
\t\t\t\t\t\t\t\twindow.location = url;
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});

\t\t\tvar TicketItem = Backbone.View.extend({
\t\t\t\ttagName : \"tr\",
\t\t\t\ttemplate : _.template(\$(\"#ticket_list_item_tmp\").html()),
\t\t\t\trender : function () {
\t\t\t\t\tthis.model.set({path:ticketPath.replace('replaceId', this.model.attributes.id)})
\t\t\t\t\tthis.\$el.html(this.template(this.model.toJSON()));

\t\t\t\t\tif(this.model.attributes.isCustomerView != true)
\t\t\t\t\t\tthis.\$el.addClass('unread')

\t\t\t\t\treturn this;
\t\t\t\t}
\t\t\t});

\t\t\tvar TicketList = Backbone.View.extend({
\t\t\t\tel : \$(\".uv-list-view table tbody\"),
\t\t\t\tinitialize : function() {
\t\t\t\t\tthis.render();
\t\t\t\t},
\t\t\t\trender : function () {
\t\t\t\t\tthis.\$el.html('');
\t\t\t\t\tif(ticketCollection.length) {
\t\t\t\t\t\t_.each(ticketCollection.models, function (item) {
\t\t\t\t\t\t\tthis.renderTicket(item);
\t\t\t\t\t\t}, this);
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.\$el.append(\"<tr style='text-align: center;float: none;'><td colspan='5'>{% trans %}No Record Found{% endtrans %}</td></tr>\")
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\trenderTicket : function (item) {
\t\t\t\t\tvar ticketItem = new TicketItem({
\t\t\t\t\t\tmodel: item
\t\t\t\t\t});
\t\t\t\t\tthis.\$el.append(ticketItem.render().el);
\t\t\t\t}
\t\t\t});

\t\t\tvar Filter = app.Filter.extend({
\t\t\t\tdefaultSortIndex: 't.id',
\t\t\t\tsortText: \"{% trans %}Sort By:{% endtrans %} \",
\t\t\t\tdefaultSortText: \"{% trans %}Sort By:{% endtrans %} {% trans %}Ticket Id{% endtrans %}\",
\t\t\t\ttemplate : _.template(\$(\"#ticket_list_sorting_tmp\").html()),
\t\t\t\tfilterByStatus : function(e) {
\t\t\t\t\te.preventDefault()
\t\t\t\t\tthis.collection.reset();
\t\t\t\t\tthis.collection.state.currentPage = null;
\t\t\t\t\tthis.collection.setSorting(null, null, {full: false});
\t\t\t\t\tthis.collection.filterParameters.status = Backbone.\$(e.currentTarget).find('a').attr('data-id');
\t\t\t\t\tvar queryString = app.appView.buildQuery(\$.param(this.collection.getValidParameters()));
\t\t\t\t\trouter.navigate(queryString, {trigger: true});
\t\t\t\t},
\t\t\t})

\t\t\tvar ticketCollection = new TicketCollection();

\t\t\tvar filter = new Filter({
\t\t\t\tel: \$('.uv-action-view'),
\t\t\t\tcollection : ticketCollection
\t\t\t});

\t\t\tRouter = Backbone.Router.extend({
\t\t    \troutes: {
                \t'page/:number(/sort/:sortField)(/direction/:order)' : 'paginate',
                \t'search/:query(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterByQuery',
                \t'status/:status(/search/:query)(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterByStatus',
                \t'' : 'initializeList',
                \t'_=_' : 'initializeList',
                },
                initializeList : function() {
                \tthis.resetParams('','');
                \tthis.fetch(null, null, null);
                },
                paginate : function(number, sortField, order) {
                \tthis.resetParams('', '');
                \tthis.fetch(number, sortField, order);
                },
                filterByQuery : function(query, number, sortField, order) {
                \tif(query != null)
                \t\tquery = query.replace(/\\+/g,' ');

                \tthis.resetParams(query, '');
                \tthis.fetch(number, sortField, order);
                },
                filterByStatus : function(status, query, number, sortField, order) {
                \tif(query != null)
                \t\tquery = query.replace(/\\+/g,' ');

                \tthis.resetParams(query, status);

                \tthis.fetch(number, sortField, order);
                },
                fetch : function(number, sortField, order) {
                \tticketCollection.state.currentPage = number;
                \tfilter.sortCollection(sortField, order);
                \tticketCollection.syncData();
                },
                resetParams : function(query, status) {
                \tticketCollection.filterParameters.search = query;
                \t\$(\".uv-search-inline \").val(query);
                \tticketCollection.filterParameters.status = status;
                    var statusText = status ? \$(\".filter-by-status a[data-id='\" + status + \"']\").text() : \"{% trans %}All{% endtrans %}\";
\t\t\t\t\t\$(\".filter-by-status .uv-dropdown-btn\").text(\"{% trans %}Status:{% endtrans %} \" + statusText);
                }
            });

\t\t\trouter = new Router();
            Backbone.history.start({push_state:true});
\t\t});
\t</script>
{% endblock %}
", "@UVDeskSupportCenter/Knowledgebase/ticketList.html.twig", "/home/lexcorp.xyz/public_html/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Knowledgebase/ticketList.html.twig");
    }
}
