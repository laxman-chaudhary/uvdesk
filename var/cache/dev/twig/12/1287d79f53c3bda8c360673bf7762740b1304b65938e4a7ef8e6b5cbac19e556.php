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

/* @UVDeskSupportCenter/Knowledgebase/ticket.html.twig */
class __TwigTemplate_70707df73a8d1414cfa388e66c9685a1f9d6ea2acb3fa057f3a5cf0f140a573b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/ticket.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/ticket.html.twig"));

        // line 8
        $context["recaptchaDetail"] = twig_get_attribute($this->env, $this->source, (isset($context["recaptcha_service"]) || array_key_exists("recaptcha_service", $context) ? $context["recaptcha_service"] : (function () { throw new RuntimeError('Variable "recaptcha_service" does not exist.', 8, $this->source); })()), "getRecaptchaDetails", [], "method", false, false, false, 8);
        // line 1
        $this->parent = $this->loadTemplate("@UVDeskSupportCenter/Templates/layout.html.twig", "@UVDeskSupportCenter/Knowledgebase/ticket.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create Ticket", [], "messages");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_ogtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogtitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogtitle"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create Ticket", [], "messages");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_twtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "twtitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "twtitle"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create Ticket", [], "messages");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_metaDescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescription"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescription"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("create.ticket.metaDescription", [], "messages");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_metaKeywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaKeywords"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaKeywords"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("create.ticket.metaKeywords", [], "messages");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<style>
\t\t.uv-field{
\t\t\tpadding: 5px 10px;
\t\t}
\t\t.grammarly-fix-message-container {
\t\t\toverflow: visible !important;
\t\t}
\t\t.grammarly-fix-message {
\t\t\tmax-width: 158%;
\t\t}
\t\t.uv-field-success-icon {
\t\t\tdisplay: none !important;
\t\t}
\t\t.mce-path {
      \t\tdisplay: none !important;
\t\t}
\t\t
\t</style>

\t";
        // line 30
        $context["isTicketViewPage"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 30), "id", [], "any", true, true, false, 30)) ? (true) : (false));
        // line 31
        echo "\t

\t<div class=\"uv-paper-article uv-paper-form\">
\t\t<div class=\"uv-paper-section\">
\t\t\t<section>
\t\t\t\t<h1>";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Ticket Request"), "html", null, true);
        echo "</h1>

\t\t\t\t<div class=\"uv-form\">
\t\t\t\t\t<form action=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_create_ticket");
        echo "\" method=\"post\" id=\"create-ticket-form\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t";
        // line 40
        if ( !(isset($context["isTicketViewPage"]) || array_key_exists("isTicketViewPage", $context) ? $context["isTicketViewPage"] : (function () { throw new RuntimeError('Variable "isTicketViewPage" does not exist.', 40, $this->source); })())) {
            // line 41
            echo "\t\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t<label class=\"uv-field-label\">";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t<input name=\"name\" class=\"uv-field create-ticket\" type=\"text\" value=\"";
            // line 45
            ((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "name", [], "any", true, true, false, 45)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45), "html", null, true))) : (print ("")));
            echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"uv-field-info\">";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enter your name"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t<label class=\"uv-field-label\">";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t<input name=\"from\" class=\"uv-field create-ticket\" type=\"text\" value=\"";
            // line 55
            ((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "from", [], "any", true, true, false, 55)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 55, $this->source); })()), "from", [], "any", false, false, false, 55), "html", null, true))) : (print ("")));
            echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"uv-field-info\">";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enter your email"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- //Field -->
\t\t\t\t\t\t";
        }
        // line 61
        echo "\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t<select name=\"type\" class=\"uv-select create-ticket\" id=\"type\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select type"), "html", null, true);
        echo "</option>

\t\t\t\t\t\t\t\t\t";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 68, $this->source); })()), "getTypes", [], "method", false, false, false, 68));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 69
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 69), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "type", [], "any", true, true, false, 69) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 69, $this->source); })()), "type", [], "any", false, false, false, 69), twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 69))))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 69), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose ticket type"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t<input name=\"subject\" class=\"uv-field create-ticket\" type=\"text\" value=\"";
        // line 81
        ((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "subject", [], "any", true, true, false, 81)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 81, $this->source); })()), "subject", [], "any", false, false, false, 81), "html", null, true))) : (print ("")));
        echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket subject"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Message"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block grammarly-fix-message-container\">
\t\t\t\t\t\t\t\t<textarea name=\"reply\" id=\"create-reply\" class=\"uv-field create-ticket grammarly-fix-message\" type=\"text\">";
        // line 91
        ((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "reply", [], "any", true, true, false, 91)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 91, $this->source); })()), "reply", [], "any", false, false, false, 91), "html", null, true))) : (print ("")));
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket query message"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block attachment-block uv-no-error-success-icon\" id=\"uv-attachment-option\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<span class=\"uv-file-label\">";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Attachment"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->
\t\t\t\t\t\t";
        // line 104
        if (((isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 104, $this->source); })()) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 104, $this->source); })()), "isActive", [], "any", false, false, false, 104), true)))) {
            // line 105
            echo "\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 106, $this->source); })()), "siteKey", [], "any", false, false, false, 106), "html", null, true);
            echo "\"></div>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
                        ";
        } else {
            // line 109
            echo "                            <!-- Recaptcha will not support -->
                        ";
        }
        // line 111
        echo "
\t\t\t\t\t\t";
        // line 113
        echo "\t\t\t\t\t\t";
        $context["CustomerCustomFields"] = twig_get_attribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 113, $this->source); })()), "getCustomerCreateTicketCustomFieldSnippet", [], "method", false, false, false, 113);
        // line 114
        echo "\t\t\t\t\t\t";
        $context["removeMe"] = [];
        // line 115
        echo "\t\t\t\t\t\t";
        if ((isset($context["CustomerCustomFields"]) || array_key_exists("CustomerCustomFields", $context) ? $context["CustomerCustomFields"] : (function () { throw new RuntimeError('Variable "CustomerCustomFields" does not exist.', 115, $this->source); })())) {
            // line 116
            echo "\t\t\t\t\t\t\t<div class=\"custom-fields clearfix\">
\t\t\t\t\t\t\t\t";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["CustomerCustomFields"]) || array_key_exists("CustomerCustomFields", $context) ? $context["CustomerCustomFields"] : (function () { throw new RuntimeError('Variable "CustomerCustomFields" does not exist.', 117, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["customField"]) {
                // line 118
                echo "\t\t\t\t\t\t\t\t\t<div class=\"uv-element-block input-group ";
                echo ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldsDependency", [], "any", false, false, false, 118))) ? ("dependent") : (""));
                echo " ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldsDependency", [], "any", false, false, false, 118));
                foreach ($context['_seq'] as $context["_key"] => $context["customFieldCustomFieldsDependency"]) {
                    echo " dependency";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customFieldCustomFieldsDependency"], "id", [], "any", false, false, false, 118), "html", null, true);
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFieldCustomFieldsDependency'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\" style=\"position: relative; ";
                echo ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldsDependency", [], "any", false, false, false, 118))) ? ("display: none;") : (""));
                echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"uv-field-label\" for=\"for";
                // line 119
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 119) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 119)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 119), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t";
                // line 120
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["customField"], "fieldType", [], "any", false, false, false, 120), "text"))) {
                    // line 121
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"";
                    // line 122
                    ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, true, false, 122), "fieldtype", [], "array", true, true, false, 122)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 122), "fieldtype", [], "array", false, false, false, 122), "html", null, true))) : (print ("text")));
                    echo "\" name=\"customFields[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 122), "html", null, true);
                    echo "]\" class=\"uv-field create-ticket\" value=\"\" ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 122)) ? ("required") : (""));
                    echo " id=\"for";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 122) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 122)), "html", null, true);
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "placeholder", [], "any", false, false, false, 122), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source,                 // line 125
$context["customField"], "fieldType", [], "any", false, false, false, 125), [0 => "date", 1 => "time", 2 => "datetime"])) {
                    // line 126
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"uv-field form-control create-ticket uv-date-picker ";
                    // line 127
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["customField"], "fieldType", [], "any", false, false, false, 127), "time"))) {
                        echo "time";
                    } else {
                        echo "calendar";
                    }
                    echo " uv-header-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "fieldType", [], "any", false, false, false, 127), "html", null, true);
                    echo "\" type=\"text\" name=\"customFields[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 127), "html", null, true);
                    echo "]\" ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 127)) ? ("required") : (""));
                    echo " id=\"for";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 127) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 127)), "html", null, true);
                    echo "\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 129
$context["customField"], "fieldType", [], "any", false, false, false, 129), "textarea"))) {
                    // line 130
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"customFields[";
                    // line 131
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 131), "html", null, true);
                    echo "]\" class=\"uv-field create-ticket\" ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 131)) ? ("required") : (""));
                    echo " id=\"for";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 131) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 131)), "html", null, true);
                    echo "\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source,                 // line 134
$context["customField"], "fieldType", [], "any", false, false, false, 134), [0 => "file"])) {
                    // line 135
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"customFields[";
                    // line 136
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 136), "html", null, true);
                    echo "]\" class=\"uv-field create-ticket\" ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 136)) ? ("required") : (""));
                    echo " id=\"for";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 136) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 136)), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source,                 // line 139
$context["customField"], "fieldType", [], "any", false, false, false, 139), [0 => "select"])) {
                    // line 140
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 140))) {
                        // line 141
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"customFields[";
                        // line 142
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 142), "html", null, true);
                        echo "]\" class=\"uv-select create-ticket\" id=\"for";
                        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 142) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 142)), "html", null, true);
                        echo "\" ";
                        echo ((twig_get_attribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 142)) ? ("required") : (""));
                        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                        // line 143
                        echo "Select option";
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 144
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 144));
                        foreach ($context['_seq'] as $context["_key"] => $context["customFieldValues"]) {
                            // line 145
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 145), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 145), "html", null, true);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFieldValues'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 147
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 150
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<!--Hide this beacause choices aren't available-->
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 151
                        $context["removeMe"] = twig_array_merge((isset($context["removeMe"]) || array_key_exists("removeMe", $context) ? $context["removeMe"] : (function () { throw new RuntimeError('Variable "removeMe" does not exist.', 151, $this->source); })()), [0 => (("for" . twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 151)) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 151))]);
                        // line 152
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 153
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source,                 // line 154
$context["customField"], "fieldType", [], "any", false, false, false, 154), [0 => "checkbox"])) {
                    // line 155
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 155))) {
                        // line 156
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 156));
                        foreach ($context['_seq'] as $context["_key"] => $context["customFieldValues"]) {
                            // line 157
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-split-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"customFields[";
                            // line 160
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 160), "html", null, true);
                            echo "][]\" value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 160), "html", null, true);
                            echo "\" id=\"for";
                            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 160) . twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 160)), "html", null, true);
                            echo "\" class=\"create-ticket\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-radio-label\" for=\"for";
                            // line 163
                            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 163) . twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 163)), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 163), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFieldValues'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 167
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 168
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<!--Hide this beacause choices aren't available-->
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 169
                        $context["removeMe"] = twig_array_merge((isset($context["removeMe"]) || array_key_exists("removeMe", $context) ? $context["removeMe"] : (function () { throw new RuntimeError('Variable "removeMe" does not exist.', 169, $this->source); })()), [0 => (("for" . twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 169)) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 169))]);
                        // line 170
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 171
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source,                 // line 172
$context["customField"], "fieldType", [], "any", false, false, false, 172), [0 => "radio"])) {
                    // line 173
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 173))) {
                        // line 174
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 174));
                        foreach ($context['_seq'] as $context["_key"] => $context["customFieldValues"]) {
                            // line 175
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-split-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"customFields[";
                            // line 178
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 178), "html", null, true);
                            echo "]\" value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 178), "html", null, true);
                            echo "\" id=\"for";
                            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 178) . twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 178)), "html", null, true);
                            echo "\" class=\"create-ticket\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-radio-view\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-radio-label\" for=\"for";
                            // line 181
                            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 181) . twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 181)), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 181), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFieldValues'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 185
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 186
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<!--Hide this beacause choices aren't available-->
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 187
                        $context["removeMe"] = twig_array_merge((isset($context["removeMe"]) || array_key_exists("removeMe", $context) ? $context["removeMe"] : (function () { throw new RuntimeError('Variable "removeMe" does not exist.', 187, $this->source); })()), [0 => (("for" . twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 187)) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 187))]);
                        // line 188
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 189
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 191
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["formErrors"] ?? null), (("customFields[" . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 191)) . "]"), [], "array", true, true, false, 191)) {
                    // line 192
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formErrors"]) || array_key_exists("formErrors", $context) ? $context["formErrors"] : (function () { throw new RuntimeError('Variable "formErrors" does not exist.', 192, $this->source); })()), (("customFields[" . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 192)) . "]"), [], "array", false, false, false, 192), "html", null, true);
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 194
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['customField'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 198
        echo "
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<button type=\"submit\" id=\"create-ticket-btn\" class=\"uv-btn\">";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Ticket"), "html", null, true);
        echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t</div>

\t    ";
        // line 208
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 208, $this->source); })()), "isfileExists", [0 => "apps/uvdesk/form-component"], "method", false, false, false, 208)) {
            // line 209
            echo "            ";
            echo twig_include($this->env, $context, "@_uvdesk_extension_uvdesk_form_component/CustomFields/customFieldValidation.html.twig");
            echo " 
        ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 213
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 214
        echo "    
\t";
        // line 215
        $context["isTicketViewPage"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 215), "id", [], "any", true, true, false, 215)) ? (true) : (false));
        // line 216
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "

\t";
        // line 218
        if (((isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 218, $this->source); })()) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 218, $this->source); })()), "isActive", [], "any", false, false, false, 218), true)))) {
            // line 219
            echo "        <script src='https://www.google.com/recaptcha/api.js'></script>
    ";
        }
        // line 221
        echo "    ";
        echo twig_include($this->env, $context, "@UVDeskSupportCenter/Templates/tinyMCE.html.twig");
        echo "
\t";
        // line 222
        echo twig_include($this->env, $context, "@UVDeskCoreFramework/Templates/attachment.html.twig");
        echo "

\t<script type=\"text/javascript\">
\t";
        // line 225
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 225, $this->source); })()), "isfileExists", [0 => "apps/uvdesk/form-component"], "method", false, false, false, 225), false))) {
            // line 226
            echo "\tcustomFieldValidation = {};
\t";
        }
        // line 228
        echo "\t\t\$(function () {
\t\tsfTinyMce.init({
            height: '155px',
\t\t\tselector : '#create-reply',
\t\t\timages_upload_url: \"\",
            setup: function(editor) {
            },
\t\t\tplugins: [
            ],
\t\t\ttoolbar: '| undo redo | bold italic forecolor ',
\t\t});
\t\t\t";
        // line 239
        if (array_key_exists("removeMe", $context)) {
            // line 240
            echo "\t\t\t\t\$.each(";
            echo json_encode((isset($context["removeMe"]) || array_key_exists("removeMe", $context) ? $context["removeMe"] : (function () { throw new RuntimeError('Variable "removeMe" does not exist.', 240, $this->source); })()));
            echo ", function(key, value){
\t\t\t\t\t\$('label[for=\"' + value + '\"]').parent().hide();
\t\t\t\t});
\t\t\t";
        }
        // line 244
        echo "\t\t\t\$('.uv-header-date').datetimepicker({
            \tformat: 'YYYY-MM-DD',
        \t});
        \t\$('.uv-header-time').datetimepicker({
            \tformat: 'LT',
        \t});
        \t\$('.uv-header-datetime').datetimepicker({
            \tformat: 'YYYY-MM-DD H:m:s'
        \t});
\t\t\tvar CreateTicketModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\",
\t\t\t\tdefaults : {
\t\t\t\t\tpath : \"\",
\t\t\t\t},
\t\t\t\tvalidation: _.extend(customFieldValidation, {
\t\t\t\t\t";
        // line 259
        if ( !(isset($context["isTicketViewPage"]) || array_key_exists("isTicketViewPage", $context) ? $context["isTicketViewPage"] : (function () { throw new RuntimeError('Variable "isTicketViewPage" does not exist.', 259, $this->source); })())) {
            // line 260
            echo "\t\t\t\t\t\t'name' : {
\t\t\t\t\t\t\trequired : true,
\t\t\t\t\t\t\tmsg : '";
            // line 262
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
            echo "'
\t\t\t\t\t\t},
\t\t\t\t\t\t'from' :
\t\t\t\t\t\t[{
\t\t\t\t\t\t\trequired : true,
\t\t\t\t\t\t\tmsg : '";
            // line 267
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
            echo "'
\t\t\t\t\t\t},{
\t\t\t\t\t\t\tpattern : 'email',
\t\t\t\t\t\t\tmsg : '";
            // line 270
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email address is invalid"), "html", null, true);
            echo "'
\t\t\t\t\t\t}],
\t\t\t\t\t";
        }
        // line 273
        echo "\t\t\t\t\t'type' : {
\t\t\t\t\t\trequired : true,
\t\t\t\t\t\tmsg : '";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "'
\t\t\t\t\t},
\t\t\t\t\t'subject' : {
\t\t\t\t\t\trequired : true,
\t\t\t\t\t\tmsg : '";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "'
\t\t\t\t\t},
\t\t\t\t\t'reply' : {
\t\t\t\t\t\tfn: function(value) {
                            if(!tinyMCE.get(\"uv-edit-create-thread\"))
                                return false;
                            var html = tinyMCE.get(\"uv-edit-create-thread\").getContent();
                            if(app.appView.stripHTML(html) != '') {
                                return false;
                            }
                            return true;
                        },
\t\t\t\t\t\tmsg : '";
        // line 291
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "'
\t\t\t\t\t},
\t\t\t\t\t";
        // line 293
        if (((isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 293, $this->source); })()) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 293, $this->source); })()), "isActive", [], "any", false, false, false, 293), true)))) {
            // line 294
            echo "                        'g-recaptcha-response' : {
                            fn: function(value) {
                                if(grecaptcha.getResponse().length > 0)
                                    return false;
                                else
                                    return true;
                            },
                            msg : '";
            // line 301
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please select CAPTCHA"), "html", null, true);
            echo "'
                        }
\t\t\t\t    ";
        }
        // line 304
        echo "\t\t\t\t}),
\t\t\t\turlRoot : \"";
        // line 305
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_create_ticket");
        echo "\"
\t\t\t});
\t\t\tvar CreateTicketForm = Backbone.View.extend({
\t\t\t\tinitialize : function() {
\t\t\t\t\tBackbone.Validation.bind(this);
\t\t\t\t\tvar jsonContext = JSON.parse('";
        // line 310
        echo ((array_key_exists("errors", $context)) ? ((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 310, $this->source); })())) : ("{}"));
        echo "');
\t\t\t\t\tfor (var field in jsonContext) {
\t\t\t\t\t\tBackbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tevents : {
\t\t\t\t\t'click #create-ticket-btn' : \"saveTicket\",
\t\t\t\t\t'change #type' : \"updateCustomFields\",
\t\t\t\t\t'blur input:not(input[type=file]), textarea, select, checkbox': 'formChanegd',
\t\t\t\t\t'change input[type=file]': 'formChanegd',
\t\t\t\t},
\t\t\t\tformChanegd: function(e) {
\t\t\t\t\tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t\t\tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t\t},
\t\t\t\tsaveTicket : function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\tvar currentElement = Backbone.\$(e.currentTarget);
\t\t\t\t\tvar data = currentElement.closest('form').serializeObject();
\t\t\t\t\tthis.model.set(data);
\t\t\t\t\tif(this.model.isValid(true)) {
\t\t\t\t\t\t\$('#create-ticket-form').submit();
\t\t\t\t\t\t\$('form').find('#create-ticket-btn').attr('disabled', 'disabled');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tupdateCustomFields : function (e) {
\t\t\t\t\tvar dependentFields = e.currentTarget.value;
\t\t\t\t\tthis.\$('.dependent').hide();
\t\t\t\t\tthis.\$('.dependency' + dependentFields).show();
\t\t\t\t}
\t\t\t});
\t\t\tvar createticketForm = new CreateTicketForm({
\t\t\t\tel : \$(\"#create-ticket-form\"),
\t\t\t\tmodel : new CreateTicketModel()
\t\t\t});
\t\t});
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@UVDeskSupportCenter/Knowledgebase/ticket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  847 => 310,  839 => 305,  836 => 304,  830 => 301,  821 => 294,  819 => 293,  814 => 291,  799 => 279,  792 => 275,  788 => 273,  782 => 270,  776 => 267,  768 => 262,  764 => 260,  762 => 259,  745 => 244,  737 => 240,  735 => 239,  722 => 228,  718 => 226,  716 => 225,  710 => 222,  705 => 221,  701 => 219,  699 => 218,  693 => 216,  691 => 215,  688 => 214,  678 => 213,  664 => 209,  662 => 208,  651 => 200,  647 => 198,  643 => 196,  636 => 194,  630 => 192,  627 => 191,  623 => 189,  620 => 188,  618 => 187,  615 => 186,  612 => 185,  600 => 181,  590 => 178,  585 => 175,  580 => 174,  577 => 173,  575 => 172,  572 => 171,  569 => 170,  567 => 169,  564 => 168,  561 => 167,  549 => 163,  539 => 160,  534 => 157,  529 => 156,  526 => 155,  524 => 154,  521 => 153,  518 => 152,  516 => 151,  513 => 150,  508 => 147,  497 => 145,  493 => 144,  489 => 143,  481 => 142,  478 => 141,  475 => 140,  473 => 139,  463 => 136,  460 => 135,  458 => 134,  448 => 131,  445 => 130,  443 => 129,  426 => 127,  423 => 126,  421 => 125,  407 => 122,  404 => 121,  402 => 120,  396 => 119,  379 => 118,  375 => 117,  372 => 116,  369 => 115,  366 => 114,  363 => 113,  360 => 111,  356 => 109,  350 => 106,  347 => 105,  345 => 104,  338 => 100,  328 => 93,  323 => 91,  318 => 89,  309 => 83,  304 => 81,  299 => 79,  290 => 73,  286 => 71,  273 => 69,  269 => 68,  264 => 66,  258 => 63,  254 => 61,  247 => 57,  242 => 55,  237 => 53,  228 => 47,  223 => 45,  218 => 43,  214 => 41,  212 => 40,  208 => 39,  202 => 36,  195 => 31,  193 => 30,  172 => 11,  162 => 10,  143 => 6,  124 => 5,  105 => 4,  86 => 3,  67 => 2,  56 => 1,  54 => 8,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@UVDeskSupportCenter/Templates/layout.html.twig\" %}
{% block title %}{% trans %}Create Ticket{% endtrans %}{% endblock %}
{% block ogtitle %}{% trans %}Create Ticket{% endtrans %}{% endblock %}
{% block twtitle %}{% trans %}Create Ticket{% endtrans %}{% endblock %}
{% block metaDescription %}{% trans %}create.ticket.metaDescription{% endtrans %}{% endblock %}
{% block metaKeywords %}{% trans %}create.ticket.metaKeywords{% endtrans %}{% endblock %}

{% set recaptchaDetail = recaptcha_service.getRecaptchaDetails() %}

{% block body %}
\t<style>
\t\t.uv-field{
\t\t\tpadding: 5px 10px;
\t\t}
\t\t.grammarly-fix-message-container {
\t\t\toverflow: visible !important;
\t\t}
\t\t.grammarly-fix-message {
\t\t\tmax-width: 158%;
\t\t}
\t\t.uv-field-success-icon {
\t\t\tdisplay: none !important;
\t\t}
\t\t.mce-path {
      \t\tdisplay: none !important;
\t\t}
\t\t
\t</style>

\t{% set isTicketViewPage = (app.user.id is defined ? true : false) %}
\t

\t<div class=\"uv-paper-article uv-paper-form\">
\t\t<div class=\"uv-paper-section\">
\t\t\t<section>
\t\t\t\t<h1>{{ 'Create Ticket Request'|trans }}</h1>

\t\t\t\t<div class=\"uv-form\">
\t\t\t\t\t<form action=\"{{ path('helpdesk_customer_create_ticket') }}\" method=\"post\" id=\"create-ticket-form\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t{% if not isTicketViewPage %}
\t\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Name'|trans }}</label>
\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t<input name=\"name\" class=\"uv-field create-ticket\" type=\"text\" value=\"{{ post.name is defined ? post.name : '' }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"uv-field-info\">{{ 'Enter your name'|trans }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Email'|trans }}</label>
\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t<input name=\"from\" class=\"uv-field create-ticket\" type=\"text\" value=\"{{ post.from is defined ? post.from : '' }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"uv-field-info\">{{ 'Enter your email'|trans }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- //Field -->
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Type'|trans }}</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t<select name=\"type\" class=\"uv-select create-ticket\" id=\"type\">
\t\t\t\t\t\t\t\t\t<option value=\"\">{{ 'Select type'|trans }}</option>

\t\t\t\t\t\t\t\t\t{% for type in ticket_service.getTypes() %}
\t\t\t\t\t\t\t\t\t\t<option value=\"{{ type.id }}\" {{ post.type is defined and post.type == type.id ? 'selected' : '' }}>{{ type.name }}</option>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-field-info\">{{ 'Choose ticket type'|trans }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Subject'|trans }}</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t<input name=\"subject\" class=\"uv-field create-ticket\" type=\"text\" value=\"{{ post.subject is defined ? post.subject : '' }}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-field-info\">{{ 'Ticket subject'|trans }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Message'|trans }}</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block grammarly-fix-message-container\">
\t\t\t\t\t\t\t\t<textarea name=\"reply\" id=\"create-reply\" class=\"uv-field create-ticket grammarly-fix-message\" type=\"text\">{{ post.reply is defined ? post.reply : '' }}</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-field-info\">{{ 'Ticket query message'|trans }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block attachment-block uv-no-error-success-icon\" id=\"uv-attachment-option\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<span class=\"uv-file-label\">{{ 'Add Attachment'|trans }}</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->
\t\t\t\t\t\t{% if recaptchaDetail and recaptchaDetail.isActive == true %}
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"{{ recaptchaDetail.siteKey }}\"></div>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
                        {% else %}
                            <!-- Recaptcha will not support -->
                        {% endif %}

\t\t\t\t\t\t{# CustomFields #}
\t\t\t\t\t\t{% set CustomerCustomFields = ticket_service.getCustomerCreateTicketCustomFieldSnippet() %}
\t\t\t\t\t\t{% set removeMe = [] %}
\t\t\t\t\t\t{% if CustomerCustomFields %}
\t\t\t\t\t\t\t<div class=\"custom-fields clearfix\">
\t\t\t\t\t\t\t\t{% for key, customField in CustomerCustomFields %}
\t\t\t\t\t\t\t\t\t<div class=\"uv-element-block input-group {{ customField.customFieldsDependency|length ? 'dependent' : '' }} {% for customFieldCustomFieldsDependency in customField.customFieldsDependency %} dependency{{customFieldCustomFieldsDependency.id}}{% endfor %}\" style=\"position: relative; {{ customField.customFieldsDependency|length ? 'display: none;' : '' }}\">
\t\t\t\t\t\t\t\t\t\t<label class=\"uv-field-label\" for=\"for{{customField.name~customField.id}}\">{{ customField.name }}</label>
\t\t\t\t\t\t\t\t\t\t{% if customField.fieldType == 'text' %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"{{ customField['validation']['fieldtype'] is defined ? customField['validation']['fieldtype'] :'text' }}\" name=\"customFields[{{customField.id}}]\" class=\"uv-field create-ticket\" value=\"\" {{ customField.required ? \"required\" : \"\" }} id=\"for{{customField.name~customField.id}}\" placeholder=\"{{customField.placeholder}}\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t{% elseif customField.fieldType in ['date', 'time', 'datetime'] %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"uv-field form-control create-ticket uv-date-picker {% if customField.fieldType == 'time' %}time{% else %}calendar{% endif %} uv-header-{{ customField.fieldType }}\" type=\"text\" name=\"customFields[{{customField.id}}]\" {{ customField.required ? \"required\" : \"\" }} id=\"for{{customField.name~customField.id}}\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% elseif customField.fieldType == 'textarea' %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"customFields[{{customField.id}}]\" class=\"uv-field create-ticket\" {{ customField.required ? \"required\" : \"\" }} id=\"for{{customField.name~customField.id}}\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t{% elseif customField.fieldType in ['file'] %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"customFields[{{customField.id}}]\" class=\"uv-field create-ticket\" {{ customField.required ? \"required\" : \"\" }} id=\"for{{customField.name~customField.id}}\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t{% elseif customField.fieldType in ['select'] %}
\t\t\t\t\t\t\t\t\t\t\t{% if customField.customFieldValues is not empty %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"customFields[{{customField.id}}]\" class=\"uv-select create-ticket\" id=\"for{{customField.name~customField.id}}\" {{ customField.required ? \"required\" : \"\" }}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">{{ 'Select option' }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for customFieldValues in customField.customFieldValues %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{customFieldValues.id}}\">{{customFieldValues.name}}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<!--Hide this beacause choices aren't available-->
\t\t\t\t\t\t\t\t\t\t\t\t{% set removeMe = removeMe|merge([\"for\"~customField.name~customField.id]) %}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t{% elseif customField.fieldType in ['checkbox'] %}
\t\t\t\t\t\t\t\t\t\t\t{% if customField.customFieldValues is not empty %}
\t\t\t\t\t\t\t\t\t\t\t\t{% for customFieldValues in customField.customFieldValues %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-split-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"customFields[{{customField.id}}][]\" value=\"{{customFieldValues.id}}\" id=\"for{{customFieldValues.name~customFieldValues.id}}\" class=\"create-ticket\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-radio-label\" for=\"for{{customFieldValues.name~customFieldValues.id}}\">{{ customFieldValues.name }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<!--Hide this beacause choices aren't available-->
\t\t\t\t\t\t\t\t\t\t\t\t{% set removeMe = removeMe|merge([\"for\"~customField.name~customField.id]) %}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t{% elseif customField.fieldType in ['radio'] %}
\t\t\t\t\t\t\t\t\t\t\t{% if customField.customFieldValues is not empty %}
\t\t\t\t\t\t\t\t\t\t\t\t{% for customFieldValues in customField.customFieldValues %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-split-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"customFields[{{customField.id}}]\" value=\"{{customFieldValues.id}}\" id=\"for{{customFieldValues.name~customFieldValues.id}}\" class=\"create-ticket\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-radio-view\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-radio-label\" for=\"for{{customFieldValues.name~customFieldValues.id}}\">{{ customFieldValues.name }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<!--Hide this beacause choices aren't available-->
\t\t\t\t\t\t\t\t\t\t\t\t{% set removeMe = removeMe|merge([\"for\"~customField.name~customField.id]) %}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% if formErrors['customFields['~customField.id~']'] is defined %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">{{formErrors['customFields['~customField.id~']']}}</div>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<button type=\"submit\" id=\"create-ticket-btn\" class=\"uv-btn\">{{ 'Create Ticket'|trans }}</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t</div>

\t    {% if user_service.isfileExists('apps/uvdesk/form-component') %}
            {{ include('@_uvdesk_extension_uvdesk_form_component/CustomFields/customFieldValidation.html.twig') }} 
        {% endif %}
{% endblock %}

{% block footer %}
    
\t{% set isTicketViewPage = (app.user.id is defined ? true : false) %}
\t{{ parent() }}

\t{% if recaptchaDetail and recaptchaDetail.isActive == true %}
        <script src='https://www.google.com/recaptcha/api.js'></script>
    {% endif %}
    {{ include(\"@UVDeskSupportCenter/Templates/tinyMCE.html.twig\") }}
\t{{ include('@UVDeskCoreFramework/Templates/attachment.html.twig') }}

\t<script type=\"text/javascript\">
\t{% if user_service.isfileExists('apps/uvdesk/form-component') == false %}
\tcustomFieldValidation = {};
\t{% endif %}
\t\t\$(function () {
\t\tsfTinyMce.init({
            height: '155px',
\t\t\tselector : '#create-reply',
\t\t\timages_upload_url: \"\",
            setup: function(editor) {
            },
\t\t\tplugins: [
            ],
\t\t\ttoolbar: '| undo redo | bold italic forecolor ',
\t\t});
\t\t\t{% if(removeMe is defined) %}
\t\t\t\t\$.each({{ removeMe | json_encode |raw }}, function(key, value){
\t\t\t\t\t\$('label[for=\"' + value + '\"]').parent().hide();
\t\t\t\t});
\t\t\t{% endif %}
\t\t\t\$('.uv-header-date').datetimepicker({
            \tformat: 'YYYY-MM-DD',
        \t});
        \t\$('.uv-header-time').datetimepicker({
            \tformat: 'LT',
        \t});
        \t\$('.uv-header-datetime').datetimepicker({
            \tformat: 'YYYY-MM-DD H:m:s'
        \t});
\t\t\tvar CreateTicketModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\",
\t\t\t\tdefaults : {
\t\t\t\t\tpath : \"\",
\t\t\t\t},
\t\t\t\tvalidation: _.extend(customFieldValidation, {
\t\t\t\t\t{% if not isTicketViewPage %}
\t\t\t\t\t\t'name' : {
\t\t\t\t\t\t\trequired : true,
\t\t\t\t\t\t\tmsg : '{{ \"This field is mandatory\"|trans }}'
\t\t\t\t\t\t},
\t\t\t\t\t\t'from' :
\t\t\t\t\t\t[{
\t\t\t\t\t\t\trequired : true,
\t\t\t\t\t\t\tmsg : '{{ \"This field is mandatory\"|trans }}'
\t\t\t\t\t\t},{
\t\t\t\t\t\t\tpattern : 'email',
\t\t\t\t\t\t\tmsg : '{{ \"Email address is invalid\"|trans }}'
\t\t\t\t\t\t}],
\t\t\t\t\t{% endif %}
\t\t\t\t\t'type' : {
\t\t\t\t\t\trequired : true,
\t\t\t\t\t\tmsg : '{{ \"This field is mandatory\"|trans }}'
\t\t\t\t\t},
\t\t\t\t\t'subject' : {
\t\t\t\t\t\trequired : true,
\t\t\t\t\t\tmsg : '{{ \"This field is mandatory\"|trans }}'
\t\t\t\t\t},
\t\t\t\t\t'reply' : {
\t\t\t\t\t\tfn: function(value) {
                            if(!tinyMCE.get(\"uv-edit-create-thread\"))
                                return false;
                            var html = tinyMCE.get(\"uv-edit-create-thread\").getContent();
                            if(app.appView.stripHTML(html) != '') {
                                return false;
                            }
                            return true;
                        },
\t\t\t\t\t\tmsg : '{{ \"This field is mandatory\"|trans }}'
\t\t\t\t\t},
\t\t\t\t\t{% if recaptchaDetail and recaptchaDetail.isActive == true %}
                        'g-recaptcha-response' : {
                            fn: function(value) {
                                if(grecaptcha.getResponse().length > 0)
                                    return false;
                                else
                                    return true;
                            },
                            msg : '{{ \"Please select CAPTCHA\"|trans }}'
                        }
\t\t\t\t    {% endif %}
\t\t\t\t}),
\t\t\t\turlRoot : \"{{ path('helpdesk_customer_create_ticket') }}\"
\t\t\t});
\t\t\tvar CreateTicketForm = Backbone.View.extend({
\t\t\t\tinitialize : function() {
\t\t\t\t\tBackbone.Validation.bind(this);
\t\t\t\t\tvar jsonContext = JSON.parse('{{ errors is defined ? errors|raw : \"{}\"  }}');
\t\t\t\t\tfor (var field in jsonContext) {
\t\t\t\t\t\tBackbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tevents : {
\t\t\t\t\t'click #create-ticket-btn' : \"saveTicket\",
\t\t\t\t\t'change #type' : \"updateCustomFields\",
\t\t\t\t\t'blur input:not(input[type=file]), textarea, select, checkbox': 'formChanegd',
\t\t\t\t\t'change input[type=file]': 'formChanegd',
\t\t\t\t},
\t\t\t\tformChanegd: function(e) {
\t\t\t\t\tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t\t\tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t\t},
\t\t\t\tsaveTicket : function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\tvar currentElement = Backbone.\$(e.currentTarget);
\t\t\t\t\tvar data = currentElement.closest('form').serializeObject();
\t\t\t\t\tthis.model.set(data);
\t\t\t\t\tif(this.model.isValid(true)) {
\t\t\t\t\t\t\$('#create-ticket-form').submit();
\t\t\t\t\t\t\$('form').find('#create-ticket-btn').attr('disabled', 'disabled');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tupdateCustomFields : function (e) {
\t\t\t\t\tvar dependentFields = e.currentTarget.value;
\t\t\t\t\tthis.\$('.dependent').hide();
\t\t\t\t\tthis.\$('.dependency' + dependentFields).show();
\t\t\t\t}
\t\t\t});
\t\t\tvar createticketForm = new CreateTicketForm({
\t\t\t\tel : \$(\"#create-ticket-form\"),
\t\t\t\tmodel : new CreateTicketModel()
\t\t\t});
\t\t});
\t</script>
{% endblock %}", "@UVDeskSupportCenter/Knowledgebase/ticket.html.twig", "/home/lexcorp.xyz/public_html/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Knowledgebase/ticket.html.twig");
    }
}
