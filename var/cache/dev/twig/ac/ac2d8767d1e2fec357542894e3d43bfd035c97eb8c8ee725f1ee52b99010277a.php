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

/* @UVDeskCoreFramework/Snippets/createMemberTicket.html.twig */
class __TwigTemplate_160d8e07782b8eb9feedd2af872b8d488020b03a2bbd63769bc46a20b254c9b5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Snippets/createMemberTicket.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Snippets/createMemberTicket.html.twig"));

        // line 1
        echo "<style>
    .mce-path {
      \t\tdisplay: none !important;
\t}
</style>
";
        // line 6
        $context["isTicketViewPage"] = (0 === twig_compare("helpdesk_member_ticket", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "attributes", [], "any", false, false, false, 6), "get", [0 => "_route"], "method", false, false, false, 6)));
        // line 7
        echo "
<div class=\"uv-pop-up-overlay uv-no-error-success-icon\" id=\"create-ticket-modal\">
    <div class=\"uv-pop-up-box uv-pop-up-wide\">
        <span class=\"uv-pop-up-close\"></span>
        <h2>Create Ticket</h2>
        <form action=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_create_ticket");
        echo "\" method=\"post\" id=\"create-ticket-form\" enctype=\"multipart/form-data\">
            ";
        // line 14
        echo "            ";
        if ( !(isset($context["isTicketViewPage"]) || array_key_exists("isTicketViewPage", $context) ? $context["isTicketViewPage"] : (function () { throw new RuntimeError('Variable "isTicketViewPage" does not exist.', 14, $this->source); })())) {
            // line 15
            echo "                ";
            // line 16
            echo "                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
            echo "</label>
                    <div class=\"uv-field-block\">
                        <input name=\"name\" class=\"uv-field create-ticket\" type=\"text\" value=\"\">
                    </div>
                    <span class=\"uv-field-info\">";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer full name"), "html", null, true);
            echo "</span>
                </div>

                ";
            // line 25
            echo "                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
            echo "</label>
                    <div class=\"uv-field-block\">
                        <input name=\"from\" class=\"uv-field create-ticket\" type=\"text\" value=\"\">
                    </div>
                    <span class=\"uv-field-info\">";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer email address"), "html", null, true);
            echo "</span>
                </div>
            ";
        } else {
            // line 33
            echo "                ";
            // line 34
            echo "                <span class=\"uv-field-info\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket will be created with current ticket's customer"), "html", null, true);
            echo "</span>
            ";
        }
        // line 36
        echo "
            ";
        // line 38
        echo "            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
        echo "</label>
                <div class=\"uv-field-block\">
                    <select name=\"type\" class=\"uv-select create-ticket\" id=\"type\">
                        <option value=\"\">";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select type"), "html", null, true);
        echo "</option>

                        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ticketTypeCollection"]) || array_key_exists("ticketTypeCollection", $context) ? $context["ticketTypeCollection"] : (function () { throw new RuntimeError('Variable "ticketTypeCollection" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 45
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "description", [], "any", false, false, false, 45), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                    </select>
                </div>
                <span class=\"uv-field-info\">";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose ticket type"), "html", null, true);
        echo "</span>
            </div>

            ";
        // line 53
        echo "            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
        echo "</label>
                <div class=\"uv-field-block\">
                    <input name=\"subject\" class=\"uv-field create-ticket\" type=\"text\" value=\"\">
                </div>

                <span class=\"uv-field-info\">";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket subject"), "html", null, true);
        echo "</span>
            </div>

            ";
        // line 63
        echo "            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Message"), "html", null, true);
        echo "</label>
                <div class=\"uv-field-block\">
                    <textarea name=\"reply\" id=\"create-reply\" class=\"uv-field create-ticket\" type=\"text\">";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 66, $this->source); })()), "getAgentDraftReply", [], "method", false, false, false, 66), "html", null, true);
        echo "</textarea>
                </div>
                
                <span class=\"uv-field-info\">";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket query message"), "html", null, true);
        echo "</span>
            </div>

            ";
        // line 73
        echo "            <div class=\"uv-element-block attachment-block uv-no-error-success-icon\" id=\"uv-attachment-option\">
                <label>
                    <span class=\"uv-file-label\">";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Attachment"), "html", null, true);
        echo "</span>
                </label>
            </div>

            ";
        // line 80
        echo "            ";
        $context["removeMe"] = [];
        // line 81
        echo "            ";
        if ((isset($context["headerCustomFields"]) || array_key_exists("headerCustomFields", $context) ? $context["headerCustomFields"] : (function () { throw new RuntimeError('Variable "headerCustomFields" does not exist.', 81, $this->source); })())) {
            // line 82
            echo "                <div class=\"custom-fields clearfix\">
                    ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["headerCustomFields"]) || array_key_exists("headerCustomFields", $context) ? $context["headerCustomFields"] : (function () { throw new RuntimeError('Variable "headerCustomFields" does not exist.', 83, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["customField"]) {
                // line 84
                echo "                        <div class=\"uv-element-block input-group ";
                echo ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldsDependency", [], "any", false, false, false, 84))) ? ("dependent") : (""));
                echo " ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldsDependency", [], "any", false, false, false, 84));
                foreach ($context['_seq'] as $context["_key"] => $context["customFieldCustomFieldsDependency"]) {
                    echo " dependency";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customFieldCustomFieldsDependency"], "id", [], "any", false, false, false, 84), "html", null, true);
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFieldCustomFieldsDependency'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\" style=\"position: relative; ";
                echo ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldsDependency", [], "any", false, false, false, 84))) ? ("display: none;") : (""));
                echo "\">
                            <label class=\"uv-field-label\" for=\"for";
                // line 85
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 85) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 85)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 85), "html", null, true);
                echo "</label>
                            ";
                // line 86
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["customField"], "fieldType", [], "any", false, false, false, 86), "text"))) {
                    // line 87
                    echo "                                <div class=\"uv-field-block\">
                                    <input type=\"";
                    // line 88
                    ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, true, false, 88), "fieldtype", [], "array", true, true, false, 88)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 88), "fieldtype", [], "array", false, false, false, 88), "html", null, true))) : (print ("text")));
                    echo "\" name=\"customFields[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 88), "html", null, true);
                    echo "]\" class=\"uv-field create-ticket\" value=\"\" ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 88)) ? ("required") : (""));
                    echo " id=\"for";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 88) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 88)), "html", null, true);
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "placeholder", [], "any", false, false, false, 88), "html", null, true);
                    echo "\">
                                </div>

                            ";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source,                 // line 91
$context["customField"], "fieldType", [], "any", false, false, false, 91), [0 => "date", 1 => "time", 2 => "datetime"])) {
                    // line 92
                    echo "                                <div class=\"uv-field-block\">
                                    <input class=\"uv-field form-control create-ticket uv-date-picker ";
                    // line 93
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["customField"], "fieldType", [], "any", false, false, false, 93), "time"))) {
                        echo "time";
                    } else {
                        echo "calendar";
                    }
                    echo " uv-header-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "fieldType", [], "any", false, false, false, 93), "html", null, true);
                    echo "\" type=\"text\" name=\"customFields[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 93), "html", null, true);
                    echo "]\" ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 93)) ? ("required") : (""));
                    echo " id=\"for";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 93) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 93)), "html", null, true);
                    echo "\" value=\"\">
                                </div>
                            ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 95
$context["customField"], "fieldType", [], "any", false, false, false, 95), "textarea"))) {
                    // line 96
                    echo "                                <div class=\"uv-field-block\">
                                    <textarea name=\"customFields[";
                    // line 97
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 97), "html", null, true);
                    echo "]\" class=\"uv-field create-ticket\" ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 97)) ? ("required") : (""));
                    echo " id=\"for";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 97) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 97)), "html", null, true);
                    echo "\"></textarea>
                                </div>

                            ";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source,                 // line 100
$context["customField"], "fieldType", [], "any", false, false, false, 100), [0 => "file"])) {
                    // line 101
                    echo "                                <div class=\"uv-field-block\">
                                    <input type=\"file\" name=\"customFields[";
                    // line 102
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 102), "html", null, true);
                    echo "]\" class=\"uv-field create-ticket\" ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 102)) ? ("required") : (""));
                    echo " id=\"for";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 102) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 102)), "html", null, true);
                    echo "\">
                                </div>

                            ";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source,                 // line 105
$context["customField"], "fieldType", [], "any", false, false, false, 105), [0 => "select"])) {
                    // line 106
                    echo "                                ";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 106))) {
                        // line 107
                        echo "                                    <div class=\"uv-field-block\">
                                        <select name=\"customFields[";
                        // line 108
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 108), "html", null, true);
                        echo "]\" class=\"uv-select create-ticket\" id=\"for";
                        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 108) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 108)), "html", null, true);
                        echo "\" ";
                        echo ((twig_get_attribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 108)) ? ("required") : (""));
                        echo ">
                                            <option value=\"\">";
                        // line 109
                        echo "Select option";
                        echo "</option>
                                            ";
                        // line 110
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 110));
                        foreach ($context['_seq'] as $context["_key"] => $context["customFieldValues"]) {
                            // line 111
                            echo "                                                <option value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 111), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 111), "html", null, true);
                            echo "</option>
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFieldValues'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 113
                        echo "                                        </select>
                                    </div>
                                ";
                    } else {
                        // line 116
                        echo "                                    <!--Hide this beacause choices aren't available-->
                                    ";
                        // line 117
                        $context["removeMe"] = twig_array_merge((isset($context["removeMe"]) || array_key_exists("removeMe", $context) ? $context["removeMe"] : (function () { throw new RuntimeError('Variable "removeMe" does not exist.', 117, $this->source); })()), [0 => (("for" . twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 117)) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 117))]);
                        // line 118
                        echo "                                ";
                    }
                    // line 119
                    echo "
                            ";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source,                 // line 120
$context["customField"], "fieldType", [], "any", false, false, false, 120), [0 => "checkbox"])) {
                    // line 121
                    echo "                                ";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 121))) {
                        // line 122
                        echo "                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 122));
                        foreach ($context['_seq'] as $context["_key"] => $context["customFieldValues"]) {
                            // line 123
                            echo "                                        <div class=\"uv-split-field\">
                                            <label>
                                                <div class=\"uv-checkbox\">
                                                    <input type=\"checkbox\" name=\"customFields[";
                            // line 126
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 126), "html", null, true);
                            echo "][]\" value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 126), "html", null, true);
                            echo "\" id=\"for";
                            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 126) . twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 126)), "html", null, true);
                            echo "\" class=\"create-ticket\"/>
                                                    <span class=\"uv-checkbox-view\"></span>
                                                </div>
                                                <span class=\"uv-radio-label\" for=\"for";
                            // line 129
                            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 129) . twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 129)), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 129), "html", null, true);
                            echo "</span>
                                            </label>
                                        </div>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFieldValues'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 133
                        echo "                                ";
                    } else {
                        // line 134
                        echo "                                    <!--Hide this beacause choices aren't available-->
                                    ";
                        // line 135
                        $context["removeMe"] = twig_array_merge((isset($context["removeMe"]) || array_key_exists("removeMe", $context) ? $context["removeMe"] : (function () { throw new RuntimeError('Variable "removeMe" does not exist.', 135, $this->source); })()), [0 => (("for" . twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 135)) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 135))]);
                        // line 136
                        echo "                                ";
                    }
                    // line 137
                    echo "
                            ";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source,                 // line 138
$context["customField"], "fieldType", [], "any", false, false, false, 138), [0 => "radio"])) {
                    // line 139
                    echo "                                ";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 139))) {
                        // line 140
                        echo "                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 140));
                        foreach ($context['_seq'] as $context["_key"] => $context["customFieldValues"]) {
                            // line 141
                            echo "                                        <div class=\"uv-split-field\">
                                            <label>
                                                <div class=\"uv-radio\">
                                                    <input type=\"radio\" name=\"customFields[";
                            // line 144
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 144), "html", null, true);
                            echo "]\" value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 144), "html", null, true);
                            echo "\" id=\"for";
                            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 144) . twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 144)), "html", null, true);
                            echo "\" class=\"create-ticket\"/>
                                                    <span class=\"uv-radio-view\"></span>
                                                </div>
                                                <span class=\"uv-radio-label\" for=\"for";
                            // line 147
                            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 147) . twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 147)), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 147), "html", null, true);
                            echo "</span>
                                            </label>
                                        </div>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFieldValues'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 151
                        echo "                                ";
                    } else {
                        // line 152
                        echo "                                    <!--Hide this beacause choices aren't available-->
                                    ";
                        // line 153
                        $context["removeMe"] = twig_array_merge((isset($context["removeMe"]) || array_key_exists("removeMe", $context) ? $context["removeMe"] : (function () { throw new RuntimeError('Variable "removeMe" does not exist.', 153, $this->source); })()), [0 => (("for" . twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 153)) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 153))]);
                        // line 154
                        echo "                                ";
                    }
                    // line 155
                    echo "
                            ";
                }
                // line 157
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, ($context["formErrors"] ?? null), (("customFields[" . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 157)) . "]"), [], "array", true, true, false, 157)) {
                    // line 158
                    echo "                                <div class=\"text-danger\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formErrors"]) || array_key_exists("formErrors", $context) ? $context["formErrors"] : (function () { throw new RuntimeError('Variable "formErrors" does not exist.', 158, $this->source); })()), (("customFields[" . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 158)) . "]"), [], "array", false, false, false, 158), "html", null, true);
                    echo "</div>
                            ";
                }
                // line 160
                echo "                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['customField'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "                </div>
            ";
        }
        // line 164
        echo "
            <div class=\"uv-element-block\">
                <button type=\"submit\" id=\"create-ticket-btn\" class=\"uv-btn\">";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Ticket"), "html", null, true);
        echo "</button>
            </div>
        </form>
    </div>
</div>

";
        // line 172
        if ( !twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 172, $this->source); })()), "request", [], "any", false, false, false, 172), "attributes", [], "any", false, false, false, 172), "get", [0 => "_route"], "method", false, false, false, 172), [0 => "helpdesk_member_ticket"])) {
            // line 173
            echo "    ";
            echo twig_include($this->env, $context, "@UVDeskCoreFramework\\Templates\\attachment.html.twig");
            echo "
";
        }
        // line 175
        echo "
";
        // line 176
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 176, $this->source); })()), "isfileExists", [0 => "apps/uvdesk/form-component"], "method", false, false, false, 176)) {
            // line 177
            echo "<script>
    customFieldValidation = {};
    customHandler = function(value, attr, computedState) {
        if(!\$('[name=\"'+ attr + '\"]').parents('.uv-element-block').is(':visible') && !\$('[name=\"'+ attr + '[]' + '\"]').parents('.uv-element-block').is(':visible')) {
            return false;
        } else {
            var ele = \$('[name=\"'+ attr + '\"]');
            ele = ele.length ? ele : \$('[name=\"'+ attr + '[]' + '\"]');
            if(ele[0].type == 'radio') {
                var returnMe = true;
                \$.each(ele, function(key, eleChild) {
                    if(\$(eleChild).is(':checked')) {
                        returnMe = false;
                    }
                });
                return returnMe;
            } else if(ele[0].type == 'checkbox') {
                var returnMe = true;
                \$.each(ele, function(key, eleChild) {
                    if(\$(eleChild).is(':checked')) {
                        returnMe = false;
                    }
                });
                return returnMe;
            } else if(!\$('#create-ticket-form [name=\"'+ attr + '\"]').val()) {
                return true;
            }
        }
    };
    _.extend(Backbone.Validation.validators, {
        checkAllowedDomain: function(value, attr, customValue, model) {
            if(!\$('[name=\"'+ attr + '\"]').parents('.uv-element-block').is(':visible'))
                return false;
            domain = value.substring(value.indexOf(\"@\") + 1);
            if(customValue && customValue.indexOf(domain) === -1) {
                return true; //return error
            }
        },
        checkRestrictedDomain: function(value, attr, customValue, model) {
            if(!\$('[name=\"'+ attr + '\"]').parents('.uv-element-block').is(':visible'))
                return false;
            domain = value.substring(value.indexOf(\"@\") + 1);
            if(customValue && customValue.indexOf(domain) !== -1) {
                return true; //return error
            }
        },
        checkMaxFileSize: function(value, attr, customValue, model) {
            if(!\$('[name=\"'+ attr + '\"]').parents('.uv-element-block').is(':visible'))
                return false;
            fileInput = \$('input[name=\"' + attr + '\"]')[0] ? \$('input[name=\"' + attr + '\"]')[0] : \$('input[name=\"' + attr + '\"]');
            file = fileInput.files? fileInput.files[0] : '';
            filesize = file ? file.size / 1024 : 0;
            maxSize = (customValue && parseInt(customValue)) ? parseInt(customValue) : 5120;
            
            if(filesize > maxSize) {
                return true; //return error
            }
        },
        patternOrEmpty: function(value, attr, pattern, model) {
            defaultPatterns = Backbone.Validation.patterns;
            if (value && !value.toString().match(defaultPatterns[pattern] || pattern)) {
                return true; //error
            }
        },
      minOrEmpty: function(value, attr, minValue, model) {
        if (value && (value < minValue)) {
          return true; //error
        }
      },
      maxOrEmpty: function(value, attr, maxValue, model) {
        if (value && (value > maxValue)) {
          return true; //error
        }
      },
      patternCheck: function(value, attr, pattern, model) {
        if (value && !value.toString().match(pattern)) {
            return true; //error
        }
      },
    });
        ";
            // line 257
            if ((array_key_exists("headerCustomFields", $context) && (isset($context["headerCustomFields"]) || array_key_exists("headerCustomFields", $context) ? $context["headerCustomFields"] : (function () { throw new RuntimeError('Variable "headerCustomFields" does not exist.', 257, $this->source); })()))) {
                // line 258
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["headerCustomFields"]) || array_key_exists("headerCustomFields", $context) ? $context["headerCustomFields"] : (function () { throw new RuntimeError('Variable "headerCustomFields" does not exist.', 258, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["customField"]) {
                    // line 259
                    echo "                ";
                    $context["fieldtype"] = (((0 !== twig_compare("text", twig_get_attribute($this->env, $this->source, $context["customField"], "fieldType", [], "array", false, false, false, 259)))) ? (twig_get_attribute($this->env, $this->source, $context["customField"], "fieldType", [], "array", false, false, false, 259)) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, true, false, 259), "fieldtype", [], "array", true, true, false, 259)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 259), "fieldtype", [], "array", false, false, false, 259)) : ("text"))));
                    // line 260
                    echo "                    customFieldValidation['customFields[' + ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 260), "html", null, true);
                    echo " + ']'] = [
                    ";
                    // line 261
                    if (( !(twig_in_filter((isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 261, $this->source); })()), [0 => "checkbox", 1 => "radio", 2 => "select"]) && twig_test_empty(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "array", false, false, false, 261))) && twig_get_attribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 261))) {
                        // line 262
                        echo "                        {
                        fn : customHandler,
                        msg : '";
                        // line 264
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
                        echo "'
                    },
                    ";
                    }
                    // line 267
                    echo "                    ";
                    if ((0 === twig_compare("number", (isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 267, $this->source); })())))) {
                        // line 268
                        echo "                        {
                            patternOrEmpty : 'number',
                            msg: '";
                        // line 270
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Value is not valid number"), "html", null, true);
                        echo "',
                        },
                        ";
                        // line 272
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 272), "minNo", [], "array", false, false, false, 272)) {
                            echo " 
                            {
                                minOrEmpty: ";
                            // line 274
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 274), "minNo", [], "array", false, false, false, 274), "html", null, true);
                            echo ",
                                msg: '";
                            // line 275
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Provide number greater than %min%", ["%min%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 275), "minNo", [], "array", false, false, false, 275)]), "html", null, true);
                            echo "',
                            },
                        ";
                        }
                        // line 278
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 278), "maxNo", [], "array", false, false, false, 278)) {
                            echo " 
                        {
                            maxOrEmpty: ";
                            // line 280
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 280), "maxNo", [], "array", false, false, false, 280), "html", null, true);
                            echo ",
                            msg: '";
                            // line 281
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Provide number smaller than %max%", ["%max%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 281), "maxNo", [], "array", false, false, false, 281)]), "html", null, true);
                            echo "',
                        },
                        ";
                        }
                        // line 284
                        echo "                    ";
                    } elseif ((0 === twig_compare("email", (isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 284, $this->source); })())))) {
                        // line 285
                        echo "                        {
                            patternOrEmpty: /^((([a-z]|\\d|[!#\\\$%&'\\*\\+\\-\\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+(\\.([a-z]|\\d|[!#\\\$%&'\\*\\+\\-\\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+)*)|((\\x22)((((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(([\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x7f]|\\x21|[\\x23-\\x5b]|[\\x5d-\\x7e]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(\\\\([\\x01-\\x09\\x0b\\x0c\\x0d-\\x7f]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF]))))*(((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(\\x22)))@((([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\\.)+(([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\$/i,
                            msg: '";
                        // line 287
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email Address is invalid"), "html", null, true);
                        echo "',
                        },
                        ";
                        // line 289
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 289), "allowedDomain", [], "array", false, false, false, 289)) {
                            // line 290
                            echo "                            {
                                checkAllowedDomain: \"";
                            // line 291
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 291), "allowedDomain", [], "array", false, false, false, 291), "html", null, true);
                            echo "\",
                                msg: '";
                            // line 292
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Domain name should be in accepted domains"), "html", null, true);
                            echo "',
                            },
                        ";
                        }
                        // line 295
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 295), "restrictedDomain", [], "array", false, false, false, 295)) {
                            // line 296
                            echo "                            {
                                checkRestrictedDomain: \"";
                            // line 297
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 297), "restrictedDomain", [], "array", false, false, false, 297), "html", null, true);
                            echo "\",
                                msg: '";
                            // line 298
                            echo "Domain name should not be in restricted domains";
                            echo "',
                            } ,
                        ";
                        }
                        // line 301
                        echo "                    ";
                    } elseif ((0 === twig_compare("url", (isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 301, $this->source); })())))) {
                        // line 302
                        echo "                        {
                            patternOrEmpty: 'url',
                            msg: '";
                        // line 304
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Provide a valid url(with protocol)"), "html", null, true);
                        echo "',
                        } ,
                    ";
                    } elseif ((0 === twig_compare("file",                     // line 306
(isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 306, $this->source); })())))) {
                        // line 307
                        echo "                        {
                            checkMaxFileSize: \"";
                        // line 308
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 308), "maxFileSize", [], "array", false, false, false, 308), "html", null, true);
                        echo "\",
                            msg: '";
                        // line 309
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("file size should not exceed %value% KB", ["%value%" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 309), "maxFileSize", [], "array", false, false, false, 309)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 309), "maxFileSize", [], "array", false, false, false, 309)) : ("5120"))]), "html", null, true);
                        echo "',
                        } ,
                    ";
                    }
                    // line 312
                    echo "                    ";
                    if ((( !twig_in_filter((isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 312, $this->source); })()), [0 => "checkbox", 1 => "radio", 2 => "select"]) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, true, false, 312), "regex", [], "array", true, true, false, 312)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 312), "regex", [], "array", false, false, false, 312))) {
                        // line 313
                        echo "                        {
                            patternCheck: \"";
                        // line 314
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 314), "regex", [], "array", false, false, false, 314), "html", null, true);
                        echo "\",
                            msg: \"";
                        // line 315
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This Field Value is not Valid"), "html", null, true);
                        echo "\",
                        } ,
                    ";
                    }
                    // line 318
                    echo "                ];
                Array.isArray(validationParameters) ? validationParameters.push(value) : false;
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customField'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 321
                echo "        ";
            }
            // line 322
            echo "        ";
            if ((array_key_exists("CustomerCustomFields", $context) && (isset($context["CustomerCustomFields"]) || array_key_exists("CustomerCustomFields", $context) ? $context["CustomerCustomFields"] : (function () { throw new RuntimeError('Variable "CustomerCustomFields" does not exist.', 322, $this->source); })()))) {
                // line 323
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["CustomerCustomFields"]) || array_key_exists("CustomerCustomFields", $context) ? $context["CustomerCustomFields"] : (function () { throw new RuntimeError('Variable "CustomerCustomFields" does not exist.', 323, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["customField"]) {
                    // line 324
                    echo "                ";
                    $context["fieldtype"] = (((0 !== twig_compare("text", twig_get_attribute($this->env, $this->source, $context["customField"], "fieldType", [], "array", false, false, false, 324)))) ? (twig_get_attribute($this->env, $this->source, $context["customField"], "fieldType", [], "array", false, false, false, 324)) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, true, false, 324), "fieldtype", [], "array", true, true, false, 324)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 324), "fieldtype", [], "array", false, false, false, 324)) : ("text"))));
                    // line 325
                    echo "                    customFieldValidation['customFields[' + ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 325), "html", null, true);
                    echo " + ']'] = [
                    ";
                    // line 326
                    if (( !(twig_in_filter((isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 326, $this->source); })()), [0 => "checkbox", 1 => "radio", 2 => "select"]) && twig_test_empty(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "array", false, false, false, 326))) && twig_get_attribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 326))) {
                        // line 327
                        echo "                        {
                        fn : customHandler,
                        msg : '";
                        // line 329
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
                        echo "'
                    },
                    ";
                    }
                    // line 332
                    echo "                    ";
                    if ((0 === twig_compare("number", (isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 332, $this->source); })())))) {
                        // line 333
                        echo "                        {
                            patternOrEmpty : 'number',
                            msg: '";
                        // line 335
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Value is not valid number"), "html", null, true);
                        echo "',
                        },
                        ";
                        // line 337
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 337), "minNo", [], "array", false, false, false, 337)) {
                            echo " 
                            {
                                minOrEmpty: ";
                            // line 339
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 339), "minNo", [], "array", false, false, false, 339), "html", null, true);
                            echo ",
                                msg: '";
                            // line 340
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Provide number greater than %min%", ["%min%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 340), "minNo", [], "array", false, false, false, 340)]), "html", null, true);
                            echo "',
                            },
                        ";
                        }
                        // line 343
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 343), "maxNo", [], "array", false, false, false, 343)) {
                            echo " 
                        {
                            maxOrEmpty: ";
                            // line 345
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 345), "maxNo", [], "array", false, false, false, 345), "html", null, true);
                            echo ",
                            msg: '";
                            // line 346
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Provide number smaller than %max%", ["%max%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 346), "maxNo", [], "array", false, false, false, 346)]), "html", null, true);
                            echo "',
                        },
                        ";
                        }
                        // line 349
                        echo "                    ";
                    } elseif ((0 === twig_compare("email", (isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 349, $this->source); })())))) {
                        // line 350
                        echo "                        {
                            patternOrEmpty: /^((([a-z]|\\d|[!#\\\$%&'\\*\\+\\-\\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+(\\.([a-z]|\\d|[!#\\\$%&'\\*\\+\\-\\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+)*)|((\\x22)((((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(([\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x7f]|\\x21|[\\x23-\\x5b]|[\\x5d-\\x7e]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(\\\\([\\x01-\\x09\\x0b\\x0c\\x0d-\\x7f]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF]))))*(((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(\\x22)))@((([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\\.)+(([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\$/i,
                            msg: '";
                        // line 352
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email Address is invalid"), "html", null, true);
                        echo "',
                        },
                        ";
                        // line 354
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 354), "allowedDomain", [], "array", false, false, false, 354)) {
                            // line 355
                            echo "                            {
                                checkAllowedDomain: \"";
                            // line 356
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 356), "allowedDomain", [], "array", false, false, false, 356), "html", null, true);
                            echo "\",
                                msg: '";
                            // line 357
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Domain name should be in accepted domains"), "html", null, true);
                            echo "',
                            },
                        ";
                        }
                        // line 360
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 360), "restrictedDomain", [], "array", false, false, false, 360)) {
                            // line 361
                            echo "                            {
                                checkRestrictedDomain: \"";
                            // line 362
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 362), "restrictedDomain", [], "array", false, false, false, 362), "html", null, true);
                            echo "\",
                                msg: '";
                            // line 363
                            echo "Domain name should not be in restricted domains";
                            echo "',
                            } ,
                        ";
                        }
                        // line 366
                        echo "                    ";
                    } elseif ((0 === twig_compare("url", (isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 366, $this->source); })())))) {
                        // line 367
                        echo "                        {
                            patternOrEmpty: 'url',
                            msg: '";
                        // line 369
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Provide a valid url(with protocol)"), "html", null, true);
                        echo "',
                        } ,
                    ";
                    } elseif ((0 === twig_compare("file",                     // line 371
(isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 371, $this->source); })())))) {
                        // line 372
                        echo "                        {
                            checkMaxFileSize: \"";
                        // line 373
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 373), "maxFileSize", [], "array", false, false, false, 373), "html", null, true);
                        echo "\",
                            msg: '";
                        // line 374
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("file size should not exceed %value% KB", ["%value%" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 374), "maxFileSize", [], "array", false, false, false, 374)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 374), "maxFileSize", [], "array", false, false, false, 374)) : ("5120"))]), "html", null, true);
                        echo "',
                        } ,
                    ";
                    }
                    // line 377
                    echo "                    ";
                    if ((( !twig_in_filter((isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 377, $this->source); })()), [0 => "checkbox", 1 => "radio", 2 => "select"]) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, true, false, 377), "regex", [], "array", true, true, false, 377)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 377), "regex", [], "array", false, false, false, 377))) {
                        // line 378
                        echo "                        {
                            patternCheck: \"";
                        // line 379
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 379), "regex", [], "array", false, false, false, 379), "html", null, true);
                        echo "\",
                            msg: \"";
                        // line 380
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This Field Value is not Valid"), "html", null, true);
                        echo "\",
                        } ,
                    ";
                    }
                    // line 383
                    echo "                ];
                Array.isArray(validationParameters) ? validationParameters.push(value) : false;
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customField'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 386
                echo "        ";
            }
            // line 387
            echo "    var validationParameters = true;
</script>
";
        }
        // line 390
        echo twig_include($this->env, $context, "@UVDeskSupportCenter/Templates/tinyMCE.html.twig");
        echo "

<script type=\"text/javascript\">
    \$(function () {
        if (typeof(customFieldValidation) == 'undefined') {
            customFieldValidation = {};
        }
        ";
        // line 397
        if (array_key_exists("removeMe", $context)) {
            // line 398
            echo "            \$.each(";
            echo json_encode((isset($context["removeMe"]) || array_key_exists("removeMe", $context) ? $context["removeMe"] : (function () { throw new RuntimeError('Variable "removeMe" does not exist.', 398, $this->source); })()));
            echo ", function(key, value){
                \$('label[for=\"' + value + '\"]').parent().hide();
            });
        ";
        }
        // line 402
        echo "
        \$('.uv-header-date').datetimepicker({
            format: 'YYYY-MM-DD',
        });
        \$('.uv-header-time').datetimepicker({
            format: 'LT',
        });
        \$('.uv-header-datetime').datetimepicker({
            format: 'YYYY-MM-DD H:m:s'
        });

        var CreateTicketModel = Backbone.Model.extend({
            idAttribute : \"id\",
            defaults : {
                path : \"\",
            },
            validation: _.extend(customFieldValidation, {
                ";
        // line 419
        if ( !(isset($context["isTicketViewPage"]) || array_key_exists("isTicketViewPage", $context) ? $context["isTicketViewPage"] : (function () { throw new RuntimeError('Variable "isTicketViewPage" does not exist.', 419, $this->source); })())) {
            // line 420
            echo "                    'name' : {
                        required : true,
                        msg : \"";
            // line 422
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
            echo "\"
                    },
                    'from' :
                    [{
                        required : true,
                        msg : \"";
            // line 427
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
            echo "\"
                    },{
                        pattern : /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                        msg : \"";
            // line 430
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email address is invalid"), "html", null, true);
            echo "\"
                    }],
                ";
        }
        // line 433
        echo "                'type' : {
                    required : true,
                    msg : \"";
        // line 435
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "\"
                },
                'subject' : {
                    required : true,
                    msg : \"";
        // line 439
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "\"
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
                    msg : \"";
        // line 451
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "\"
                },
            }),
            urlRoot : \"";
        // line 454
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_create_ticket");
        echo "\"
        });

        sfTinyMce.init({
            height: '155px',
\t\t\tselector : '#create-reply',
\t\t\timages_upload_url: \"\",
            setup: function(editor) {
            },
\t\t\tplugins: [
            ],
\t\t\ttoolbar: '| undo redo | bold italic forecolor ',
\t\t});

        var CreateTicketForm = Backbone.View.extend({
            el : \$(\"#create-ticket-modal #create-ticket-form\"),
            model: new CreateTicketModel(),
            initialize : function() {
                Backbone.Validation.bind(this);
                var jsonContext = JSON.parse('";
        // line 473
        echo ((array_key_exists("errors", $context)) ? ((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 473, $this->source); })())) : ("{}"));
        echo "');
                for (var field in jsonContext) {
                    Backbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
                }
            },
            events : {
                'click #create-ticket-btn': \"saveTicket\",
                'change #type': \"updateCustomFields\",
                'blur input.create-ticket:not(input[type=file]), textarea.create-ticket, select.create-ticket, checkbox.create-ticket': 'formChanegd',
                'change input[type=file].create-ticket': 'formChanegd',
            },
            formChanegd: function(e) {
                this.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
                this.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
            },
            saveTicket: function (e) {
                e.preventDefault();
                var currentElement = Backbone.\$(e.currentTarget);
                var data = currentElement.closest('form').serializeObject();
                this.model = new CreateTicketModel();
                this.model.set(data);
                Backbone.Validation.bind(this);
                
                if (this.model.isValid(true)) {
                    \$('#create-ticket-form').submit();
                    \$('form').find('#create-ticket-btn').attr('disabled', 'disabled');
                }
            },
            updateCustomFields: function (e) {
                const dependentFields = e.currentTarget.value;
                this.\$('.dependent').hide();
                this.\$('.dependency' + dependentFields).show();
            }
        });

        new CreateTicketForm();
    });
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@UVDeskCoreFramework/Snippets/createMemberTicket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1046 => 473,  1024 => 454,  1018 => 451,  1003 => 439,  996 => 435,  992 => 433,  986 => 430,  980 => 427,  972 => 422,  968 => 420,  966 => 419,  947 => 402,  939 => 398,  937 => 397,  927 => 390,  922 => 387,  919 => 386,  911 => 383,  905 => 380,  901 => 379,  898 => 378,  895 => 377,  889 => 374,  885 => 373,  882 => 372,  880 => 371,  875 => 369,  871 => 367,  868 => 366,  862 => 363,  858 => 362,  855 => 361,  852 => 360,  846 => 357,  842 => 356,  839 => 355,  837 => 354,  832 => 352,  828 => 350,  825 => 349,  819 => 346,  815 => 345,  809 => 343,  803 => 340,  799 => 339,  794 => 337,  789 => 335,  785 => 333,  782 => 332,  776 => 329,  772 => 327,  770 => 326,  765 => 325,  762 => 324,  757 => 323,  754 => 322,  751 => 321,  743 => 318,  737 => 315,  733 => 314,  730 => 313,  727 => 312,  721 => 309,  717 => 308,  714 => 307,  712 => 306,  707 => 304,  703 => 302,  700 => 301,  694 => 298,  690 => 297,  687 => 296,  684 => 295,  678 => 292,  674 => 291,  671 => 290,  669 => 289,  664 => 287,  660 => 285,  657 => 284,  651 => 281,  647 => 280,  641 => 278,  635 => 275,  631 => 274,  626 => 272,  621 => 270,  617 => 268,  614 => 267,  608 => 264,  604 => 262,  602 => 261,  597 => 260,  594 => 259,  589 => 258,  587 => 257,  505 => 177,  503 => 176,  500 => 175,  494 => 173,  492 => 172,  483 => 166,  479 => 164,  475 => 162,  468 => 160,  462 => 158,  459 => 157,  455 => 155,  452 => 154,  450 => 153,  447 => 152,  444 => 151,  432 => 147,  422 => 144,  417 => 141,  412 => 140,  409 => 139,  407 => 138,  404 => 137,  401 => 136,  399 => 135,  396 => 134,  393 => 133,  381 => 129,  371 => 126,  366 => 123,  361 => 122,  358 => 121,  356 => 120,  353 => 119,  350 => 118,  348 => 117,  345 => 116,  340 => 113,  329 => 111,  325 => 110,  321 => 109,  313 => 108,  310 => 107,  307 => 106,  305 => 105,  295 => 102,  292 => 101,  290 => 100,  280 => 97,  277 => 96,  275 => 95,  258 => 93,  255 => 92,  253 => 91,  239 => 88,  236 => 87,  234 => 86,  228 => 85,  211 => 84,  207 => 83,  204 => 82,  201 => 81,  198 => 80,  191 => 75,  187 => 73,  181 => 69,  175 => 66,  170 => 64,  167 => 63,  161 => 59,  153 => 54,  150 => 53,  144 => 49,  140 => 47,  129 => 45,  125 => 44,  120 => 42,  114 => 39,  111 => 38,  108 => 36,  102 => 34,  100 => 33,  94 => 30,  87 => 26,  84 => 25,  78 => 21,  71 => 17,  68 => 16,  66 => 15,  63 => 14,  59 => 12,  52 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    .mce-path {
      \t\tdisplay: none !important;
\t}
</style>
{% set isTicketViewPage = ('helpdesk_member_ticket' == app.request.attributes.get('_route')) %}

<div class=\"uv-pop-up-overlay uv-no-error-success-icon\" id=\"create-ticket-modal\">
    <div class=\"uv-pop-up-box uv-pop-up-wide\">
        <span class=\"uv-pop-up-close\"></span>
        <h2>Create Ticket</h2>
        <form action=\"{{ path('helpdesk_member_create_ticket') }}\" method=\"post\" id=\"create-ticket-form\" enctype=\"multipart/form-data\">
            {# Customer Details #}
            {% if not isTicketViewPage %}
                {# Name #}
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">{{ 'Name'|trans }}</label>
                    <div class=\"uv-field-block\">
                        <input name=\"name\" class=\"uv-field create-ticket\" type=\"text\" value=\"\">
                    </div>
                    <span class=\"uv-field-info\">{{ 'Customer full name'|trans }}</span>
                </div>

                {# Email #}
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">{{ 'Email'|trans }}</label>
                    <div class=\"uv-field-block\">
                        <input name=\"from\" class=\"uv-field create-ticket\" type=\"text\" value=\"\">
                    </div>
                    <span class=\"uv-field-info\">{{ 'Customer email address'|trans }}</span>
                </div>
            {% else %}
                {# Retrieve customer details from the current ticket being visited #}
                <span class=\"uv-field-info\">{{ \"Ticket will be created with current ticket's customer\"|trans }}</span>
            {% endif %}

            {# Ticket Type #}
            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">{{ 'Type'|trans }}</label>
                <div class=\"uv-field-block\">
                    <select name=\"type\" class=\"uv-select create-ticket\" id=\"type\">
                        <option value=\"\">{{ 'Select type'|trans }}</option>

                        {% for type in ticketTypeCollection %}
                            <option value=\"{{ type.id }}\">{{ type.description }}</option>
                        {% endfor %}
                    </select>
                </div>
                <span class=\"uv-field-info\">{{ 'Choose ticket type'|trans }}</span>
            </div>

            {# Ticket Subject #}
            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">{{ 'Subject'|trans }}</label>
                <div class=\"uv-field-block\">
                    <input name=\"subject\" class=\"uv-field create-ticket\" type=\"text\" value=\"\">
                </div>

                <span class=\"uv-field-info\">{{ 'Ticket subject'|trans }}</span>
            </div>

            {# Ticket Message #}
            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">{{ 'Message'|trans }}</label>
                <div class=\"uv-field-block\">
                    <textarea name=\"reply\" id=\"create-reply\" class=\"uv-field create-ticket\" type=\"text\">{{ ticket_service.getAgentDraftReply() }}</textarea>
                </div>
                
                <span class=\"uv-field-info\">{{ 'Ticket query message'|trans }}</span>
            </div>

            {# Ticket Attachment #}
            <div class=\"uv-element-block attachment-block uv-no-error-success-icon\" id=\"uv-attachment-option\">
                <label>
                    <span class=\"uv-file-label\">{{ 'Add Attachment'|trans }}</span>
                </label>
            </div>

            {# CustomFields #}
            {% set removeMe = [] %}
            {% if headerCustomFields %}
                <div class=\"custom-fields clearfix\">
                    {% for key, customField in headerCustomFields %}
                        <div class=\"uv-element-block input-group {{ customField.customFieldsDependency|length ? 'dependent' : '' }} {% for customFieldCustomFieldsDependency in customField.customFieldsDependency %} dependency{{customFieldCustomFieldsDependency.id}}{% endfor %}\" style=\"position: relative; {{ customField.customFieldsDependency|length ? 'display: none;' : '' }}\">
                            <label class=\"uv-field-label\" for=\"for{{customField.name~customField.id}}\">{{ customField.name }}</label>
                            {% if customField.fieldType == 'text' %}
                                <div class=\"uv-field-block\">
                                    <input type=\"{{ customField['validation']['fieldtype'] is defined ? customField['validation']['fieldtype'] :'text' }}\" name=\"customFields[{{customField.id}}]\" class=\"uv-field create-ticket\" value=\"\" {{ customField.required ? \"required\" : \"\" }} id=\"for{{customField.name~customField.id}}\" placeholder=\"{{customField.placeholder}}\">
                                </div>

                            {% elseif customField.fieldType in ['date', 'time', 'datetime'] %}
                                <div class=\"uv-field-block\">
                                    <input class=\"uv-field form-control create-ticket uv-date-picker {% if customField.fieldType == 'time' %}time{% else %}calendar{% endif %} uv-header-{{ customField.fieldType }}\" type=\"text\" name=\"customFields[{{customField.id}}]\" {{ customField.required ? \"required\" : \"\" }} id=\"for{{customField.name~customField.id}}\" value=\"\">
                                </div>
                            {% elseif customField.fieldType == 'textarea' %}
                                <div class=\"uv-field-block\">
                                    <textarea name=\"customFields[{{customField.id}}]\" class=\"uv-field create-ticket\" {{ customField.required ? \"required\" : \"\" }} id=\"for{{customField.name~customField.id}}\"></textarea>
                                </div>

                            {% elseif customField.fieldType in ['file'] %}
                                <div class=\"uv-field-block\">
                                    <input type=\"file\" name=\"customFields[{{customField.id}}]\" class=\"uv-field create-ticket\" {{ customField.required ? \"required\" : \"\" }} id=\"for{{customField.name~customField.id}}\">
                                </div>

                            {% elseif customField.fieldType in ['select'] %}
                                {% if customField.customFieldValues is not empty %}
                                    <div class=\"uv-field-block\">
                                        <select name=\"customFields[{{customField.id}}]\" class=\"uv-select create-ticket\" id=\"for{{customField.name~customField.id}}\" {{ customField.required ? \"required\" : \"\" }}>
                                            <option value=\"\">{{ 'Select option' }}</option>
                                            {% for customFieldValues in customField.customFieldValues %}
                                                <option value=\"{{customFieldValues.id}}\">{{customFieldValues.name}}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                {% else %}
                                    <!--Hide this beacause choices aren't available-->
                                    {% set removeMe = removeMe|merge([\"for\"~customField.name~customField.id]) %}
                                {% endif %}

                            {% elseif customField.fieldType in ['checkbox'] %}
                                {% if customField.customFieldValues is not empty %}
                                    {% for customFieldValues in customField.customFieldValues %}
                                        <div class=\"uv-split-field\">
                                            <label>
                                                <div class=\"uv-checkbox\">
                                                    <input type=\"checkbox\" name=\"customFields[{{customField.id}}][]\" value=\"{{customFieldValues.id}}\" id=\"for{{customFieldValues.name~customFieldValues.id}}\" class=\"create-ticket\"/>
                                                    <span class=\"uv-checkbox-view\"></span>
                                                </div>
                                                <span class=\"uv-radio-label\" for=\"for{{customFieldValues.name~customFieldValues.id}}\">{{ customFieldValues.name }}</span>
                                            </label>
                                        </div>
                                    {% endfor %}
                                {% else %}
                                    <!--Hide this beacause choices aren't available-->
                                    {% set removeMe = removeMe|merge([\"for\"~customField.name~customField.id]) %}
                                {% endif %}

                            {% elseif customField.fieldType in ['radio'] %}
                                {% if customField.customFieldValues is not empty %}
                                    {% for customFieldValues in customField.customFieldValues %}
                                        <div class=\"uv-split-field\">
                                            <label>
                                                <div class=\"uv-radio\">
                                                    <input type=\"radio\" name=\"customFields[{{customField.id}}]\" value=\"{{customFieldValues.id}}\" id=\"for{{customFieldValues.name~customFieldValues.id}}\" class=\"create-ticket\"/>
                                                    <span class=\"uv-radio-view\"></span>
                                                </div>
                                                <span class=\"uv-radio-label\" for=\"for{{customFieldValues.name~customFieldValues.id}}\">{{ customFieldValues.name }}</span>
                                            </label>
                                        </div>
                                    {% endfor %}
                                {% else %}
                                    <!--Hide this beacause choices aren't available-->
                                    {% set removeMe = removeMe|merge([\"for\"~customField.name~customField.id]) %}
                                {% endif %}

                            {% endif %}
                            {% if formErrors['customFields['~customField.id~']'] is defined %}
                                <div class=\"text-danger\">{{formErrors['customFields['~customField.id~']']}}</div>
                            {% endif %}
                        </div>
                    {% endfor %}
                </div>
            {% endif %}

            <div class=\"uv-element-block\">
                <button type=\"submit\" id=\"create-ticket-btn\" class=\"uv-btn\">{{ 'Create Ticket'|trans }}</button>
            </div>
        </form>
    </div>
</div>

{% if not(app.request.attributes.get('_route') in ['helpdesk_member_ticket']) %}
    {{ include('@UVDeskCoreFramework\\\\Templates\\\\attachment.html.twig') }}
{% endif %}

{% if user_service.isfileExists('apps/uvdesk/form-component') %}
<script>
    customFieldValidation = {};
    customHandler = function(value, attr, computedState) {
        if(!\$('[name=\"'+ attr + '\"]').parents('.uv-element-block').is(':visible') && !\$('[name=\"'+ attr + '[]' + '\"]').parents('.uv-element-block').is(':visible')) {
            return false;
        } else {
            var ele = \$('[name=\"'+ attr + '\"]');
            ele = ele.length ? ele : \$('[name=\"'+ attr + '[]' + '\"]');
            if(ele[0].type == 'radio') {
                var returnMe = true;
                \$.each(ele, function(key, eleChild) {
                    if(\$(eleChild).is(':checked')) {
                        returnMe = false;
                    }
                });
                return returnMe;
            } else if(ele[0].type == 'checkbox') {
                var returnMe = true;
                \$.each(ele, function(key, eleChild) {
                    if(\$(eleChild).is(':checked')) {
                        returnMe = false;
                    }
                });
                return returnMe;
            } else if(!\$('#create-ticket-form [name=\"'+ attr + '\"]').val()) {
                return true;
            }
        }
    };
    _.extend(Backbone.Validation.validators, {
        checkAllowedDomain: function(value, attr, customValue, model) {
            if(!\$('[name=\"'+ attr + '\"]').parents('.uv-element-block').is(':visible'))
                return false;
            domain = value.substring(value.indexOf(\"@\") + 1);
            if(customValue && customValue.indexOf(domain) === -1) {
                return true; //return error
            }
        },
        checkRestrictedDomain: function(value, attr, customValue, model) {
            if(!\$('[name=\"'+ attr + '\"]').parents('.uv-element-block').is(':visible'))
                return false;
            domain = value.substring(value.indexOf(\"@\") + 1);
            if(customValue && customValue.indexOf(domain) !== -1) {
                return true; //return error
            }
        },
        checkMaxFileSize: function(value, attr, customValue, model) {
            if(!\$('[name=\"'+ attr + '\"]').parents('.uv-element-block').is(':visible'))
                return false;
            fileInput = \$('input[name=\"' + attr + '\"]')[0] ? \$('input[name=\"' + attr + '\"]')[0] : \$('input[name=\"' + attr + '\"]');
            file = fileInput.files? fileInput.files[0] : '';
            filesize = file ? file.size / 1024 : 0;
            maxSize = (customValue && parseInt(customValue)) ? parseInt(customValue) : 5120;
            
            if(filesize > maxSize) {
                return true; //return error
            }
        },
        patternOrEmpty: function(value, attr, pattern, model) {
            defaultPatterns = Backbone.Validation.patterns;
            if (value && !value.toString().match(defaultPatterns[pattern] || pattern)) {
                return true; //error
            }
        },
      minOrEmpty: function(value, attr, minValue, model) {
        if (value && (value < minValue)) {
          return true; //error
        }
      },
      maxOrEmpty: function(value, attr, maxValue, model) {
        if (value && (value > maxValue)) {
          return true; //error
        }
      },
      patternCheck: function(value, attr, pattern, model) {
        if (value && !value.toString().match(pattern)) {
            return true; //error
        }
      },
    });
        {% if headerCustomFields is defined and headerCustomFields %}
            {% for customField in headerCustomFields %}
                {% set fieldtype = ('text' != customField['fieldType']) ? customField['fieldType'] : (customField['validation']['fieldtype'] is defined ? customField['validation']['fieldtype'] : 'text') %}
                    customFieldValidation['customFields[' + {{ customField.id }} + ']'] = [
                    {% if not(fieldtype in ['checkbox', 'radio', 'select'] and customField['customFieldValues'] is empty) and customField.required %}
                        {
                        fn : customHandler,
                        msg : '{{ \"This field is mandatory\"|trans }}'
                    },
                    {% endif %}
                    {% if('number' == fieldtype) %}
                        {
                            patternOrEmpty : 'number',
                            msg: '{{ \"Value is not valid number\"|trans }}',
                        },
                        {% if customField['validation']['minNo'] %} 
                            {
                                minOrEmpty: {{ customField['validation']['minNo'] }},
                                msg: '{{ \"Provide number greater than %min%\"|trans({\"%min%\": customField[\"validation\"][\"minNo\"] }) }}',
                            },
                        {% endif %}
                        {% if customField['validation']['maxNo'] %} 
                        {
                            maxOrEmpty: {{ customField['validation']['maxNo'] }},
                            msg: '{{ \"Provide number smaller than %max%\"|trans({\"%max%\": customField[\"validation\"][\"maxNo\"] }) }}',
                        },
                        {% endif %}
                    {% elseif('email' == fieldtype) %}
                        {
                            patternOrEmpty: /^((([a-z]|\\d|[!#\\\$%&'\\*\\+\\-\\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+(\\.([a-z]|\\d|[!#\\\$%&'\\*\\+\\-\\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+)*)|((\\x22)((((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(([\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x7f]|\\x21|[\\x23-\\x5b]|[\\x5d-\\x7e]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(\\\\([\\x01-\\x09\\x0b\\x0c\\x0d-\\x7f]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF]))))*(((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(\\x22)))@((([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\\.)+(([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\$/i,
                            msg: '{{ \"Email Address is invalid\"|trans }}',
                        },
                        {% if customField['validation']['allowedDomain'] %}
                            {
                                checkAllowedDomain: \"{{ customField['validation']['allowedDomain'] }}\",
                                msg: '{{ \"Domain name should be in accepted domains\"|trans }}',
                            },
                        {% endif %}
                        {% if customField['validation']['restrictedDomain'] %}
                            {
                                checkRestrictedDomain: \"{{ customField['validation']['restrictedDomain'] }}\",
                                msg: '{{ \"Domain name should not be in restricted domains\" }}',
                            } ,
                        {% endif %}
                    {% elseif('url' == fieldtype) %}
                        {
                            patternOrEmpty: 'url',
                            msg: '{{ \"Provide a valid url(with protocol)\"|trans }}',
                        } ,
                    {% elseif('file' == fieldtype) %}
                        {
                            checkMaxFileSize: \"{{ customField['validation']['maxFileSize'] }}\",
                            msg: '{{ \"file size should not exceed %value% KB\"|trans({\"%value%\": customField[\"validation\"][\"maxFileSize\"] ? : \"5120\"}) }}',
                        } ,
                    {% endif %}
                    {% if (not (fieldtype in ['checkbox', 'radio', 'select'])) and customField['validation']['regex'] is defined and customField['validation']['regex'] %}
                        {
                            patternCheck: \"{{ customField['validation']['regex'] }}\",
                            msg: \"{{ 'This Field Value is not Valid'|trans }}\",
                        } ,
                    {% endif %}
                ];
                Array.isArray(validationParameters) ? validationParameters.push(value) : false;
            {% endfor %}
        {% endif %}
        {% if CustomerCustomFields is defined and CustomerCustomFields %}
            {% for customField in CustomerCustomFields %}
                {% set fieldtype = ('text' != customField['fieldType']) ? customField['fieldType'] : (customField['validation']['fieldtype'] is defined ? customField['validation']['fieldtype'] : 'text') %}
                    customFieldValidation['customFields[' + {{ customField.id }} + ']'] = [
                    {% if not(fieldtype in ['checkbox', 'radio', 'select'] and customField['customFieldValues'] is empty) and customField.required %}
                        {
                        fn : customHandler,
                        msg : '{{ \"This field is mandatory\"|trans }}'
                    },
                    {% endif %}
                    {% if('number' == fieldtype) %}
                        {
                            patternOrEmpty : 'number',
                            msg: '{{ \"Value is not valid number\"|trans }}',
                        },
                        {% if customField['validation']['minNo'] %} 
                            {
                                minOrEmpty: {{ customField['validation']['minNo'] }},
                                msg: '{{ \"Provide number greater than %min%\"|trans({\"%min%\": customField[\"validation\"][\"minNo\"] }) }}',
                            },
                        {% endif %}
                        {% if customField['validation']['maxNo'] %} 
                        {
                            maxOrEmpty: {{ customField['validation']['maxNo'] }},
                            msg: '{{ \"Provide number smaller than %max%\"|trans({\"%max%\": customField[\"validation\"][\"maxNo\"] }) }}',
                        },
                        {% endif %}
                    {% elseif('email' == fieldtype) %}
                        {
                            patternOrEmpty: /^((([a-z]|\\d|[!#\\\$%&'\\*\\+\\-\\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+(\\.([a-z]|\\d|[!#\\\$%&'\\*\\+\\-\\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+)*)|((\\x22)((((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(([\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x7f]|\\x21|[\\x23-\\x5b]|[\\x5d-\\x7e]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(\\\\([\\x01-\\x09\\x0b\\x0c\\x0d-\\x7f]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF]))))*(((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(\\x22)))@((([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\\.)+(([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\$/i,
                            msg: '{{ \"Email Address is invalid\"|trans }}',
                        },
                        {% if customField['validation']['allowedDomain'] %}
                            {
                                checkAllowedDomain: \"{{ customField['validation']['allowedDomain'] }}\",
                                msg: '{{ \"Domain name should be in accepted domains\"|trans }}',
                            },
                        {% endif %}
                        {% if customField['validation']['restrictedDomain'] %}
                            {
                                checkRestrictedDomain: \"{{ customField['validation']['restrictedDomain'] }}\",
                                msg: '{{ \"Domain name should not be in restricted domains\" }}',
                            } ,
                        {% endif %}
                    {% elseif('url' == fieldtype) %}
                        {
                            patternOrEmpty: 'url',
                            msg: '{{ \"Provide a valid url(with protocol)\"|trans }}',
                        } ,
                    {% elseif('file' == fieldtype) %}
                        {
                            checkMaxFileSize: \"{{ customField['validation']['maxFileSize'] }}\",
                            msg: '{{ \"file size should not exceed %value% KB\"|trans({\"%value%\": customField[\"validation\"][\"maxFileSize\"] ? : \"5120\"}) }}',
                        } ,
                    {% endif %}
                    {% if (not (fieldtype in ['checkbox', 'radio', 'select'])) and customField['validation']['regex'] is defined and customField['validation']['regex'] %}
                        {
                            patternCheck: \"{{ customField['validation']['regex'] }}\",
                            msg: \"{{ 'This Field Value is not Valid'|trans }}\",
                        } ,
                    {% endif %}
                ];
                Array.isArray(validationParameters) ? validationParameters.push(value) : false;
            {% endfor %}
        {% endif %}
    var validationParameters = true;
</script>
{% endif %}
{{ include(\"@UVDeskSupportCenter/Templates/tinyMCE.html.twig\") }}

<script type=\"text/javascript\">
    \$(function () {
        if (typeof(customFieldValidation) == 'undefined') {
            customFieldValidation = {};
        }
        {% if(removeMe is defined) %}
            \$.each({{ removeMe | json_encode |raw }}, function(key, value){
                \$('label[for=\"' + value + '\"]').parent().hide();
            });
        {% endif %}

        \$('.uv-header-date').datetimepicker({
            format: 'YYYY-MM-DD',
        });
        \$('.uv-header-time').datetimepicker({
            format: 'LT',
        });
        \$('.uv-header-datetime').datetimepicker({
            format: 'YYYY-MM-DD H:m:s'
        });

        var CreateTicketModel = Backbone.Model.extend({
            idAttribute : \"id\",
            defaults : {
                path : \"\",
            },
            validation: _.extend(customFieldValidation, {
                {% if not isTicketViewPage %}
                    'name' : {
                        required : true,
                        msg : \"{{ 'This field is mandatory'|trans }}\"
                    },
                    'from' :
                    [{
                        required : true,
                        msg : \"{{ 'This field is mandatory'|trans }}\"
                    },{
                        pattern : /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                        msg : \"{{ 'Email address is invalid'|trans }}\"
                    }],
                {% endif %}
                'type' : {
                    required : true,
                    msg : \"{{ 'This field is mandatory'|trans }}\"
                },
                'subject' : {
                    required : true,
                    msg : \"{{ 'This field is mandatory'|trans }}\"
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
                    msg : \"{{ 'This field is mandatory'|trans }}\"
                },
            }),
            urlRoot : \"{{ path('helpdesk_member_create_ticket') }}\"
        });

        sfTinyMce.init({
            height: '155px',
\t\t\tselector : '#create-reply',
\t\t\timages_upload_url: \"\",
            setup: function(editor) {
            },
\t\t\tplugins: [
            ],
\t\t\ttoolbar: '| undo redo | bold italic forecolor ',
\t\t});

        var CreateTicketForm = Backbone.View.extend({
            el : \$(\"#create-ticket-modal #create-ticket-form\"),
            model: new CreateTicketModel(),
            initialize : function() {
                Backbone.Validation.bind(this);
                var jsonContext = JSON.parse('{{ errors is defined ? errors|raw : \"{}\"  }}');
                for (var field in jsonContext) {
                    Backbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
                }
            },
            events : {
                'click #create-ticket-btn': \"saveTicket\",
                'change #type': \"updateCustomFields\",
                'blur input.create-ticket:not(input[type=file]), textarea.create-ticket, select.create-ticket, checkbox.create-ticket': 'formChanegd',
                'change input[type=file].create-ticket': 'formChanegd',
            },
            formChanegd: function(e) {
                this.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
                this.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
            },
            saveTicket: function (e) {
                e.preventDefault();
                var currentElement = Backbone.\$(e.currentTarget);
                var data = currentElement.closest('form').serializeObject();
                this.model = new CreateTicketModel();
                this.model.set(data);
                Backbone.Validation.bind(this);
                
                if (this.model.isValid(true)) {
                    \$('#create-ticket-form').submit();
                    \$('form').find('#create-ticket-btn').attr('disabled', 'disabled');
                }
            },
            updateCustomFields: function (e) {
                const dependentFields = e.currentTarget.value;
                this.\$('.dependent').hide();
                this.\$('.dependency' + dependentFields).show();
            }
        });

        new CreateTicketForm();
    });
</script>", "@UVDeskCoreFramework/Snippets/createMemberTicket.html.twig", "/home/lexcorp.xyz/public_html/uvdesk/vendor/uvdesk/core-framework/Resources/views/Snippets/createMemberTicket.html.twig");
    }
}
