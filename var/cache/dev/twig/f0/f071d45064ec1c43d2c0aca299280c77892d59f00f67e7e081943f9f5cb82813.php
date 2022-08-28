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

/* @UVDeskMailbox/manageConfigurations.html.twig */
class __TwigTemplate_8ad188e5003dbb219f197f44ddf02b42362be13690b6f73d27991fd089b14e95 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskMailbox/manageConfigurations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskMailbox/manageConfigurations.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskMailbox/manageConfigurations.html.twig", 1);
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

        echo " 
\t";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mailbox Settings"), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        // line 8
        echo "\t<style>
\t\t.section-heading {
\t\t\tfont-size: 16px;
\t\t\tmargin: 0px;
\t\t\tline-height: 1.4em;
\t\t}

\t\t.section-description {
\t\t\tcolor: #6F6F6F;
\t\t\tmargin-top: unset !important;
\t\t\tmargin-bottom: 20px;
\t\t\tline-height: 1.4em;
\t\t}

\t\t.uv-element-block .uv-field-message {
\t\t\tfont-style: normal;
\t\t\tmargin: 0px 0px 20px 0px;
\t\t}
\t</style>

\t<div class=\"uv-inner-section\">
\t\t";
        // line 30
        echo "\t\t";
        $context["asideTemplate"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\AsideTemplate";
        // line 31
        echo "\t\t";
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Settings";
        // line 32
        echo "
\t\t";
        // line 33
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 33, $this->source); })()), "getRegisteredComponent", [0 => (isset($context["asideTemplate"]) || array_key_exists("asideTemplate", $context) ? $context["asideTemplate"] : (function () { throw new RuntimeError('Variable "asideTemplate" does not exist.', 33, $this->source); })())], "method", false, false, false, 33), "renderSidebar", [0 => (isset($context["asideSidebarReference"]) || array_key_exists("asideSidebarReference", $context) ? $context["asideSidebarReference"] : (function () { throw new RuntimeError('Variable "asideSidebarReference" does not exist.', 33, $this->source); })())], "method", false, false, false, 33);
        echo "

\t\t<div class=\"uv-view ";
        // line 35
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "cookies", [], "any", false, false, false, 35) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "cookies", [], "any", false, false, false, 35), "get", [0 => "uv-asideView"], "method", false, false, false, 35))) {
            echo "uv-aside-view";
        }
        echo "\">
\t\t\t";
        // line 36
        if ((array_key_exists("mailbox", $context) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)))) {
            // line 37
            echo "\t\t\t\t<h1>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update Mailbox"), "html", null, true);
            echo "</h1>
\t\t\t";
        } else {
            // line 39
            echo "\t\t\t\t<h1>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Mailbox"), "html", null, true);
            echo "</h1>
\t\t\t";
        }
        // line 41
        echo "
            <div class=\"uv-hr\"></div>
\t\t\t
\t\t\t<form method=\"post\" action=\"\" id=\"mailbox-settings-view\">
\t\t\t\t";
        // line 46
        echo "\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID"), "html", null, true);
        echo "</label>

\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t";
        // line 50
        if ((array_key_exists("mailbox", $context) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)))) {
            // line 51
            echo "\t\t\t\t\t\t\t<input type=\"text\" name=\"id\" class=\"uv-field\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mailbox ID - Leave blank to automatically create id"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t";
        } else {
            // line 53
            echo "\t\t\t\t\t\t\t<input type=\"text\" name=\"id\" class=\"uv-field\" value=\"\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mailbox ID - Leave blank to automatically create id"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t";
        }
        // line 55
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
        // line 59
        echo "\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        echo "</label>

\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t";
        // line 63
        if ((array_key_exists("mailbox", $context) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 63, $this->source); })()), "name", [], "any", false, false, false, 63)))) {
            // line 64
            echo "\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"uv-field\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 64, $this->source); })()), "name", [], "any", false, false, false, 64), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mailbox Name"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t";
        } else {
            // line 66
            echo "\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"uv-field\" value=\"\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mailbox Name"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t";
        }
        // line 68
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
        // line 72
        echo "\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t";
        // line 75
        if ((twig_get_attribute($this->env, $this->source, ($context["mailbox"] ?? null), "isEnabled", [], "any", true, true, false, 75) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 75, $this->source); })()), "isEnabled", [], "any", false, false, false, 75), true)))) {
            // line 76
            echo "\t\t\t\t\t\t\t\t<input name=\"isEnabled\" type=\"checkbox\" checked=\"\">
\t\t\t\t\t\t\t";
        } else {
            // line 78
            echo "\t\t\t\t\t\t\t\t<input name=\"isEnabled\" type=\"checkbox\">
\t\t\t\t\t\t\t";
        }
        // line 80
        echo "
\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<span class=\"uv-checkbox-label\">";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enable Mailbox"), "html", null, true);
        echo "</span>
\t\t\t\t\t</label>
\t\t\t\t</div>

\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t";
        // line 91
        if ((twig_get_attribute($this->env, $this->source, ($context["mailbox"] ?? null), "isDeleted", [], "any", true, true, false, 91) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 91, $this->source); })()), "isDeleted", [], "any", false, false, false, 91), true)))) {
            // line 92
            echo "\t\t\t\t\t\t\t\t<input name=\"isDeleted\" type=\"checkbox\" checked=\"\">
\t\t\t\t\t\t\t";
        } else {
            // line 94
            echo "\t\t\t\t\t\t\t\t<input name=\"isDeleted\" type=\"checkbox\">
\t\t\t\t\t\t\t";
        }
        // line 96
        echo "
\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<span class=\"uv-checkbox-label\">";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Permanently delete from Inbox"), "html", null, true);
        echo "</span>
\t\t\t\t\t</label>
\t\t\t\t</div>

\t\t\t\t<div class=\"uv-hr\"></div>

\t\t\t\t";
        // line 107
        echo "\t\t\t\t<h3 class=\"section-heading\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Incoming Mail (IMAP) Server"), "html", null, true);
        echo "</h3>
\t\t\t\t<p class=\"section-description\">";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configure your imap settings which will be used to fetch emails from your mailbox."), "html", null, true);
        echo "</p>

\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Transport"), "html", null, true);
        echo "</label>

\t\t\t\t\t";
        // line 113
        if (array_key_exists("mailbox", $context)) {
            // line 114
            echo "\t\t\t\t\t\t<select name=\"imap[transport]\" id=\"cta-mailbox-imap-transport\" class=\"uv-select\">
\t\t\t\t\t\t\t<option value=\"custom\" ";
            // line 115
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 115, $this->source); })()), "imapConfiguration", [], "any", false, false, false, 115), "code", [], "any", false, false, false, 115), "custom"))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("IMAP"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"gmail\" ";
            // line 116
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 116, $this->source); })()), "imapConfiguration", [], "any", false, false, false, 116), "code", [], "any", false, false, false, 116), "gmail"))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Gmail"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"yahoo\" ";
            // line 117
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 117, $this->source); })()), "imapConfiguration", [], "any", false, false, false, 117), "code", [], "any", false, false, false, 117), "yahoo"))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yahoo"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t";
        } else {
            // line 120
            echo "\t\t\t\t\t\t<select name=\"imap[transport]\" id=\"cta-mailbox-imap-transport\" class=\"uv-select\">
\t\t\t\t\t\t\t<option value=\"custom\" selected>";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("IMAP"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"gmail\">";
            // line 122
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Gmail"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"yahoo\">";
            // line 123
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yahoo"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t";
        }
        // line 126
        echo "\t\t\t\t</div>

\t\t\t\t<div class=\"imap-setting-references\"></div>

\t\t\t\t<div class=\"uv-hr\"></div>

\t\t\t\t";
        // line 133
        echo "\t\t\t\t<h3 class=\"section-heading\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Outgoing Mail (SMTP) Server"), "html", null, true);
        echo "</h3>
\t\t\t\t<p class=\"section-description\">";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select a valid Swift Mailer configuration which will be used to send emails through your mailbox."), "html", null, true);
        echo "</p>

\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Swift Mailer ID"), "html", null, true);
        echo "</label>

\t\t\t\t\t";
        // line 139
        if ((array_key_exists("swiftmailerConfigurations", $context) &&  !twig_test_empty((isset($context["swiftmailerConfigurations"]) || array_key_exists("swiftmailerConfigurations", $context) ? $context["swiftmailerConfigurations"] : (function () { throw new RuntimeError('Variable "swiftmailerConfigurations" does not exist.', 139, $this->source); })())))) {
            // line 140
            echo "\t\t\t\t\t\t<select name=\"swiftmailer_id\" class=\"uv-select\">
\t\t\t\t\t\t\t<option value=\"none\">";
            // line 141
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("None Selected"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["swiftmailerConfigurations"]) || array_key_exists("swiftmailerConfigurations", $context) ? $context["swiftmailerConfigurations"] : (function () { throw new RuntimeError('Variable "swiftmailerConfigurations" does not exist.', 142, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["configuration"]) {
                // line 143
                echo "\t\t\t\t\t\t\t\t";
                if (((array_key_exists("mailbox", $context) && twig_get_attribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 143, $this->source); })()), "swiftmailerConfiguration", [], "any", false, false, false, 143)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 143, $this->source); })()), "swiftmailerConfiguration", [], "any", false, false, false, 143), "id", [], "any", false, false, false, 143), twig_get_attribute($this->env, $this->source, $context["configuration"], "id", [], "any", false, false, false, 143))))) {
                    // line 144
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["configuration"], "id", [], "any", false, false, false, 144), "html", null, true);
                    echo "\" selected>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["configuration"], "id", [], "any", false, false, false, 144), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 146
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["configuration"], "id", [], "any", false, false, false, 146), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["configuration"], "id", [], "any", false, false, false, 146), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 148
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['configuration'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t";
        } else {
            // line 151
            echo "\t\t\t\t\t\t<select name=\"swiftmailer_id\" class=\"uv-select\">
\t\t\t\t\t\t\t<option value=\"none\">";
            // line 152
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("None Selected"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t";
        }
        // line 155
        echo "\t\t\t\t</div>

\t\t\t\t<div class=\"uv-hr\"></div>
\t\t\t\t
\t\t\t\t";
        // line 159
        if ((array_key_exists("mailbox", $context) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 159, $this->source); })()), "id", [], "any", false, false, false, 159)))) {
            // line 160
            echo "\t\t\t\t\t<input class=\"uv-btn\" href=\"#\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update Mailbox"), "html", null, true);
            echo "\" type=\"submit\">
\t\t\t\t";
        } else {
            // line 162
            echo "\t\t\t\t\t<input class=\"uv-btn\" href=\"#\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Mailbox"), "html", null, true);
            echo "\" type=\"submit\">
\t\t\t\t";
        }
        // line 164
        echo "\t\t\t</form>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 169
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 170
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "

    <script id=\"imap_conf_template_predefined\" type=\"text/template\">
        <div class=\"uv-element-block\">
\t\t\t<label class=\"uv-field-label\">";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Username/Email"), "html", null, true);
        echo "</label>
\t\t\t
\t\t\t<div class=\"uv-field-block\">
\t\t\t\t<% if (typeof(username) != 'undefined' && username != '') { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[username]\" value=\"<%- username %>\" placeholder=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("username@domain.com"), "html", null, true);
        echo "\">
\t\t\t\t<% } else { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[username]\" value=\"\" placeholder=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("username@domain.com"), "html", null, true);
        echo "\">
                <% } %>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"uv-element-block\">
\t\t\t<label class=\"uv-field-label\">";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
        echo "</label>

\t\t\t<div class=\"uv-field-block\">
\t\t\t\t<input class=\"uv-field\" type=\"password\" name=\"imap[password]\" placeholder=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Associated Password"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t</div>
\t</script>

    <script id=\"imap_conf_template_custom\" type=\"text/template\">
        <div class=\"uv-element-block\">
\t\t\t<label class=\"uv-field-label\">";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Host"), "html", null, true);
        echo "</label>
\t\t\t
\t\t\t<div class=\"uv-field-block\">
\t\t\t\t<% if (typeof(host) != 'undefined' && host != '') { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[host]\" value=\"<%- host %>\" placeholder=\"<%- host %>\">
\t\t\t\t<% } else { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[host]\" value=\"\" placeholder=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("IMAP Host"), "html", null, true);
        echo "\">
                <% } %>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"uv-element-block\">
\t\t\t<label class=\"uv-field-label\">";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Username/Email"), "html", null, true);
        echo "</label>
\t\t\t
\t\t\t<div class=\"uv-field-block\">
\t\t\t\t<% if (typeof(username) != 'undefined' && username != '') { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[username]\" value=\"<%- username %>\" placeholder=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("username@domain.com"), "html", null, true);
        echo "\">
\t\t\t\t<% } else { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[username]\" value=\"\" placeholder=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("username@domain.com"), "html", null, true);
        echo "\">
                <% } %>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"uv-element-block\">
\t\t\t<label class=\"uv-field-label\">";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
        echo "</label>

\t\t\t<div class=\"uv-field-block\">
\t\t\t\t<input class=\"uv-field\" type=\"password\" name=\"imap[password]\" placeholder=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Associated Password"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t</div>
\t</script>

\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar MailboxConfigurationModel = Backbone.Model.extend({
                idAttribute: \"id\",
                validation: {
\t\t\t\t\tname: function(value) {
\t\t\t\t\t\tif (value == undefined || value == '') {
\t\t\t\t\t\t\treturn \"Please specify a valid name for your mailbox.\";
\t\t\t\t\t\t}
                    },
\t\t\t\t\tswiftmailer_id: function(value) {
\t\t\t\t\t\tif (value == undefined || value == '' || value == 'none') {
\t\t\t\t\t\t\treturn \"Please select a valid swift-mailer configuration.\";
\t\t\t\t\t\t}
                    },
\t\t\t\t\t\"imap[host]\": function(value) {
                        if ('custom' == this.get('transport') || 'imap' == this.get('transport')) {
                            if (value == undefined || value == '') {
                                return \"Please specify a valid host address.\";
                            }
                        }
                    },
                    \"imap[username]\": [
                        {
                            required: true,
                            msg: 'Please specify a valid email address.'
                        },
                        {
                            pattern: /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                            msg: 'Please specify a valid email address.'
                        }
                    ],
                    \"imap[password]\": function(value) {
                        if (value == undefined || value == '') {
                            return \"Please enter the associated account password.\";
                        }
                    }
\t\t\t\t}
\t\t\t});

\t\t\tvar MailboxConfigurationView = Backbone.View.extend({
                imap_conf_template_custom: _.template(\$(\"#imap_conf_template_custom\").html()),
                imap_conf_template_predefined: _.template(\$(\"#imap_conf_template_predefined\").html()),
\t\t\t\tevents: {
                    'change #cta-mailbox-imap-transport': 'changeImapTransportType',
\t\t\t\t\t'click .uv-btn' : \"validateSubmission\",
\t\t\t\t},
\t\t\t\tinitialize: function() {
                    Backbone.Validation.bind(this);
                    this.renderTransportConfigurations();
\t\t\t\t},
                changeImapTransportType: function(e) {
                    if (true) {
                        this.model.set('transport', \$(e.target).val());
                    }

                    this.renderTransportConfigurations();
                },
                renderTransportConfigurations: function() {
                    switch (this.model.get('transport')) {
                        case 'custom':
                            \$('.imap-setting-references').html(this.imap_conf_template_custom(this.model.attributes));
                            break;
                        case 'gmail':
                            \$('.imap-setting-references').html(this.imap_conf_template_predefined(this.model.attributes));
                            break;
                        case 'yahoo':
                            \$('.imap-setting-references').html(this.imap_conf_template_predefined(this.model.attributes));
                            break;
                        default:
                            break;
                    }
                },
                validateSubmission: function(e) {
                    e.preventDefault();
                    this.model.set(this.\$el.serializeObject());

\t\t\t        if (this.model.isValid(true)) {
\t\t\t            this.\$el.submit();
\t\t\t        }
                }
\t\t\t});

            ";
        // line 311
        if (array_key_exists("mailbox", $context)) {
            // line 312
            echo "                new MailboxConfigurationView({
                    el: \$(\"#mailbox-settings-view\"),
                    model: new MailboxConfigurationModel({
\t\t\t\t\t\ttransport: \"";
            // line 315
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 315, $this->source); })()), "imapConfiguration", [], "any", false, false, false, 315), "code", [], "any", false, false, false, 315), "html", null, true);
            echo "\",
\t\t\t\t\t\thost: \"";
            // line 316
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 316, $this->source); })()), "imapConfiguration", [], "any", false, false, false, 316), "host", [], "any", false, false, false, 316), "html", null, true);
            echo "\",
\t\t\t\t\t\tusername: \"";
            // line 317
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 317, $this->source); })()), "imapConfiguration", [], "any", false, false, false, 317), "username", [], "any", false, false, false, 317), "html", null, true);
            echo "\",
\t\t\t\t\t})
                });
            ";
        } else {
            // line 321
            echo "                new MailboxConfigurationView({
                    el: \$(\"#mailbox-settings-view\"),
                    model: new MailboxConfigurationModel({ transport: 'custom' })
                });
            ";
        }
        // line 326
        echo "\t\t});
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@UVDeskMailbox/manageConfigurations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  665 => 326,  658 => 321,  651 => 317,  647 => 316,  643 => 315,  638 => 312,  636 => 311,  545 => 223,  539 => 220,  530 => 214,  525 => 212,  518 => 208,  509 => 202,  500 => 196,  490 => 189,  484 => 186,  475 => 180,  470 => 178,  463 => 174,  455 => 170,  445 => 169,  432 => 164,  426 => 162,  420 => 160,  418 => 159,  412 => 155,  406 => 152,  403 => 151,  399 => 149,  393 => 148,  385 => 146,  377 => 144,  374 => 143,  370 => 142,  366 => 141,  363 => 140,  361 => 139,  356 => 137,  350 => 134,  345 => 133,  337 => 126,  331 => 123,  327 => 122,  323 => 121,  320 => 120,  310 => 117,  302 => 116,  294 => 115,  291 => 114,  289 => 113,  284 => 111,  278 => 108,  273 => 107,  264 => 100,  258 => 96,  254 => 94,  250 => 92,  248 => 91,  238 => 84,  232 => 80,  228 => 78,  224 => 76,  222 => 75,  217 => 72,  212 => 68,  206 => 66,  198 => 64,  196 => 63,  190 => 60,  187 => 59,  182 => 55,  176 => 53,  168 => 51,  166 => 50,  160 => 47,  157 => 46,  151 => 41,  145 => 39,  139 => 37,  137 => 36,  131 => 35,  126 => 33,  123 => 32,  120 => 31,  117 => 30,  94 => 8,  84 => 7,  72 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %} 
\t{{ 'Mailbox Settings'|trans }}
{% endblock %}

{% block pageContent %}
\t<style>
\t\t.section-heading {
\t\t\tfont-size: 16px;
\t\t\tmargin: 0px;
\t\t\tline-height: 1.4em;
\t\t}

\t\t.section-description {
\t\t\tcolor: #6F6F6F;
\t\t\tmargin-top: unset !important;
\t\t\tmargin-bottom: 20px;
\t\t\tline-height: 1.4em;
\t\t}

\t\t.uv-element-block .uv-field-message {
\t\t\tfont-style: normal;
\t\t\tmargin: 0px 0px 20px 0px;
\t\t}
\t</style>

\t<div class=\"uv-inner-section\">
\t\t{# Append Panel Aside #}
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Settings' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}

\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t{% if mailbox is defined and mailbox.id is not empty %}
\t\t\t\t<h1>{{ 'Update Mailbox'|trans }}</h1>
\t\t\t{% else %}
\t\t\t\t<h1>{{ 'Add Mailbox'|trans }}</h1>
\t\t\t{% endif %}

            <div class=\"uv-hr\"></div>
\t\t\t
\t\t\t<form method=\"post\" action=\"\" id=\"mailbox-settings-view\">
\t\t\t\t{# Mailer Id #}
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'ID'|trans }}</label>

\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t{% if mailbox is defined and mailbox.id is not empty %}
\t\t\t\t\t\t\t<input type=\"text\" name=\"id\" class=\"uv-field\" value=\"{{ mailbox.id }}\" placeholder=\"{{ 'Mailbox ID - Leave blank to automatically create id'|trans }}\" />
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<input type=\"text\" name=\"id\" class=\"uv-field\" value=\"\" placeholder=\"{{ 'Mailbox ID - Leave blank to automatically create id'|trans }}\" />
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t{# Mailer Name #}
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Name'|trans }}</label>

\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t{% if mailbox is defined and mailbox.name is not empty %}
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"uv-field\" value=\"{{ mailbox.name }}\" placeholder=\"{{ 'Mailbox Name'|trans }}\" />
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"uv-field\" value=\"\" placeholder=\"{{ 'Mailbox Name'|trans }}\" />
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t{# Status #}
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t{% if mailbox.isEnabled is defined and mailbox.isEnabled == true %}
\t\t\t\t\t\t\t\t<input name=\"isEnabled\" type=\"checkbox\" checked=\"\">
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<input name=\"isEnabled\" type=\"checkbox\">
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<span class=\"uv-checkbox-label\">{{ 'Enable Mailbox'|trans }}</span>
\t\t\t\t\t</label>
\t\t\t\t</div>

\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t{% if mailbox.isDeleted is defined and mailbox.isDeleted == true %}
\t\t\t\t\t\t\t\t<input name=\"isDeleted\" type=\"checkbox\" checked=\"\">
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<input name=\"isDeleted\" type=\"checkbox\">
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<span class=\"uv-checkbox-label\">{{ 'Permanently delete from Inbox'|trans }}</span>
\t\t\t\t\t</label>
\t\t\t\t</div>

\t\t\t\t<div class=\"uv-hr\"></div>

\t\t\t\t{# IMAP Settings #}
\t\t\t\t<h3 class=\"section-heading\">{{ 'Incoming Mail (IMAP) Server'|trans }}</h3>
\t\t\t\t<p class=\"section-description\">{{ 'Configure your imap settings which will be used to fetch emails from your mailbox.'|trans }}</p>

\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Transport'|trans }}</label>

\t\t\t\t\t{% if mailbox is defined %}
\t\t\t\t\t\t<select name=\"imap[transport]\" id=\"cta-mailbox-imap-transport\" class=\"uv-select\">
\t\t\t\t\t\t\t<option value=\"custom\" {% if mailbox.imapConfiguration.code == 'custom' %}selected{% endif %}>{{ 'IMAP'|trans }}</option>
\t\t\t\t\t\t\t<option value=\"gmail\" {% if mailbox.imapConfiguration.code == 'gmail' %}selected{% endif %}>{{ 'Gmail'|trans }}</option>
\t\t\t\t\t\t\t<option value=\"yahoo\" {% if mailbox.imapConfiguration.code == 'yahoo' %}selected{% endif %}>{{ 'Yahoo'|trans }}</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<select name=\"imap[transport]\" id=\"cta-mailbox-imap-transport\" class=\"uv-select\">
\t\t\t\t\t\t\t<option value=\"custom\" selected>{{ 'IMAP'|trans }}</option>
\t\t\t\t\t\t\t<option value=\"gmail\">{{ 'Gmail'|trans }}</option>
\t\t\t\t\t\t\t<option value=\"yahoo\">{{ 'Yahoo'|trans }}</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>

\t\t\t\t<div class=\"imap-setting-references\"></div>

\t\t\t\t<div class=\"uv-hr\"></div>

\t\t\t\t{# SwiftMailer Settings #}
\t\t\t\t<h3 class=\"section-heading\">{{ 'Outgoing Mail (SMTP) Server'|trans }}</h3>
\t\t\t\t<p class=\"section-description\">{{ 'Select a valid Swift Mailer configuration which will be used to send emails through your mailbox.'|trans }}</p>

\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Swift Mailer ID'|trans }}</label>

\t\t\t\t\t{% if swiftmailerConfigurations is defined and swiftmailerConfigurations is not empty %}
\t\t\t\t\t\t<select name=\"swiftmailer_id\" class=\"uv-select\">
\t\t\t\t\t\t\t<option value=\"none\">{{ 'None Selected'|trans }}</option>
\t\t\t\t\t\t\t{% for configuration in swiftmailerConfigurations %}
\t\t\t\t\t\t\t\t{% if mailbox is defined and mailbox.swiftmailerConfiguration and mailbox.swiftmailerConfiguration.id == configuration.id %}
\t\t\t\t\t\t\t\t\t<option value=\"{{ configuration.id }}\" selected>{{ configuration.id }}</option>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<option value=\"{{ configuration.id }}\">{{ configuration.id }}</option>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</select>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<select name=\"swiftmailer_id\" class=\"uv-select\">
\t\t\t\t\t\t\t<option value=\"none\">{{ 'None Selected'|trans }}</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>

\t\t\t\t<div class=\"uv-hr\"></div>
\t\t\t\t
\t\t\t\t{% if mailbox is defined and mailbox.id is not empty %}
\t\t\t\t\t<input class=\"uv-btn\" href=\"#\" value=\"{{ 'Update Mailbox'|trans }}\" type=\"submit\">
\t\t\t\t{% else %}
\t\t\t\t\t<input class=\"uv-btn\" href=\"#\" value=\"{{ 'Create Mailbox'|trans }}\" type=\"submit\">
\t\t\t\t{% endif %}
\t\t\t</form>
\t\t</div>
\t</div>
{% endblock %}

{% block footer %}
\t{{ parent() }}

    <script id=\"imap_conf_template_predefined\" type=\"text/template\">
        <div class=\"uv-element-block\">
\t\t\t<label class=\"uv-field-label\">{{ 'Username/Email' |trans }}</label>
\t\t\t
\t\t\t<div class=\"uv-field-block\">
\t\t\t\t<% if (typeof(username) != 'undefined' && username != '') { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[username]\" value=\"<%- username %>\" placeholder=\"{{ 'username@domain.com'|trans }}\">
\t\t\t\t<% } else { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[username]\" value=\"\" placeholder=\"{{ 'username@domain.com'|trans }}\">
                <% } %>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"uv-element-block\">
\t\t\t<label class=\"uv-field-label\">{{ 'Password' |trans }}</label>

\t\t\t<div class=\"uv-field-block\">
\t\t\t\t<input class=\"uv-field\" type=\"password\" name=\"imap[password]\" placeholder=\"{{ 'Associated Password'|trans }}\">
\t\t\t</div>
\t\t</div>
\t</script>

    <script id=\"imap_conf_template_custom\" type=\"text/template\">
        <div class=\"uv-element-block\">
\t\t\t<label class=\"uv-field-label\">{{ 'Host'|trans }}</label>
\t\t\t
\t\t\t<div class=\"uv-field-block\">
\t\t\t\t<% if (typeof(host) != 'undefined' && host != '') { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[host]\" value=\"<%- host %>\" placeholder=\"<%- host %>\">
\t\t\t\t<% } else { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[host]\" value=\"\" placeholder=\"{{'IMAP Host'|trans }}\">
                <% } %>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"uv-element-block\">
\t\t\t<label class=\"uv-field-label\">{{ 'Username/Email'|trans }}</label>
\t\t\t
\t\t\t<div class=\"uv-field-block\">
\t\t\t\t<% if (typeof(username) != 'undefined' && username != '') { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[username]\" value=\"<%- username %>\" placeholder=\"{{'username@domain.com'|trans }}\">
\t\t\t\t<% } else { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[username]\" value=\"\" placeholder=\"{{'username@domain.com'|trans }}\">
                <% } %>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"uv-element-block\">
\t\t\t<label class=\"uv-field-label\">{{'Password'|trans }}</label>

\t\t\t<div class=\"uv-field-block\">
\t\t\t\t<input class=\"uv-field\" type=\"password\" name=\"imap[password]\" placeholder=\"{{'Associated Password'|trans }}\">
\t\t\t</div>
\t\t</div>
\t</script>

\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar MailboxConfigurationModel = Backbone.Model.extend({
                idAttribute: \"id\",
                validation: {
\t\t\t\t\tname: function(value) {
\t\t\t\t\t\tif (value == undefined || value == '') {
\t\t\t\t\t\t\treturn \"Please specify a valid name for your mailbox.\";
\t\t\t\t\t\t}
                    },
\t\t\t\t\tswiftmailer_id: function(value) {
\t\t\t\t\t\tif (value == undefined || value == '' || value == 'none') {
\t\t\t\t\t\t\treturn \"Please select a valid swift-mailer configuration.\";
\t\t\t\t\t\t}
                    },
\t\t\t\t\t\"imap[host]\": function(value) {
                        if ('custom' == this.get('transport') || 'imap' == this.get('transport')) {
                            if (value == undefined || value == '') {
                                return \"Please specify a valid host address.\";
                            }
                        }
                    },
                    \"imap[username]\": [
                        {
                            required: true,
                            msg: 'Please specify a valid email address.'
                        },
                        {
                            pattern: /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                            msg: 'Please specify a valid email address.'
                        }
                    ],
                    \"imap[password]\": function(value) {
                        if (value == undefined || value == '') {
                            return \"Please enter the associated account password.\";
                        }
                    }
\t\t\t\t}
\t\t\t});

\t\t\tvar MailboxConfigurationView = Backbone.View.extend({
                imap_conf_template_custom: _.template(\$(\"#imap_conf_template_custom\").html()),
                imap_conf_template_predefined: _.template(\$(\"#imap_conf_template_predefined\").html()),
\t\t\t\tevents: {
                    'change #cta-mailbox-imap-transport': 'changeImapTransportType',
\t\t\t\t\t'click .uv-btn' : \"validateSubmission\",
\t\t\t\t},
\t\t\t\tinitialize: function() {
                    Backbone.Validation.bind(this);
                    this.renderTransportConfigurations();
\t\t\t\t},
                changeImapTransportType: function(e) {
                    if (true) {
                        this.model.set('transport', \$(e.target).val());
                    }

                    this.renderTransportConfigurations();
                },
                renderTransportConfigurations: function() {
                    switch (this.model.get('transport')) {
                        case 'custom':
                            \$('.imap-setting-references').html(this.imap_conf_template_custom(this.model.attributes));
                            break;
                        case 'gmail':
                            \$('.imap-setting-references').html(this.imap_conf_template_predefined(this.model.attributes));
                            break;
                        case 'yahoo':
                            \$('.imap-setting-references').html(this.imap_conf_template_predefined(this.model.attributes));
                            break;
                        default:
                            break;
                    }
                },
                validateSubmission: function(e) {
                    e.preventDefault();
                    this.model.set(this.\$el.serializeObject());

\t\t\t        if (this.model.isValid(true)) {
\t\t\t            this.\$el.submit();
\t\t\t        }
                }
\t\t\t});

            {% if mailbox is defined %}
                new MailboxConfigurationView({
                    el: \$(\"#mailbox-settings-view\"),
                    model: new MailboxConfigurationModel({
\t\t\t\t\t\ttransport: \"{{ mailbox.imapConfiguration.code }}\",
\t\t\t\t\t\thost: \"{{ mailbox.imapConfiguration.host }}\",
\t\t\t\t\t\tusername: \"{{ mailbox.imapConfiguration.username }}\",
\t\t\t\t\t})
                });
            {% else %}
                new MailboxConfigurationView({
                    el: \$(\"#mailbox-settings-view\"),
                    model: new MailboxConfigurationModel({ transport: 'custom' })
                });
            {% endif %}
\t\t});
\t</script>
{% endblock %}
", "@UVDeskMailbox/manageConfigurations.html.twig", "/home/lexcorp.xyz/public_html/uvdesk/vendor/uvdesk/mailbox-component/Resources/views/manageConfigurations.html.twig");
    }
}
