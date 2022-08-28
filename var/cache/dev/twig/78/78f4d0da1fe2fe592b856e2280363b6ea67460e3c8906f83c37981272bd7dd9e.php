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

/* @UVDeskSupportCenter/Knowledgebase/darkSkin.html.twig */
class __TwigTemplate_10debc5248916f99a634abb7d4f9d908060189bc7c0b8e18a45b4928f6061ea0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/darkSkin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/darkSkin.html.twig"));

        // line 1
        $context["brandColor"] = ((twig_get_attribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 1, $this->source); })()), "brandColor", [], "any", false, false, false, 1)) ? (twig_get_attribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 1, $this->source); })()), "brandColor", [], "any", false, false, false, 1)) : ("#7C70F4"));
        // line 2
        if (((0 !== twig_compare((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 2, $this->source); })()), "#7C70F4")) && (0 !== twig_compare((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 2, $this->source); })()), "#7c70f4")))) {
            // line 3
            echo "<style>
    .uv-btn-small,
    .uv-btn,
    .uv-btn-large,
    .uv-btn-action,
    .uv-btn-label {
        background: ";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 9, $this->source); })()), "html", null, true);
            echo ";
    }
    .uv-btn-small:hover,
    .uv-btn:hover,
    .uv-btn-large:hover,
    .uv-btn-action:hover,
    .btn:hover,
    .uv-btn-label:hover {
        background: ";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 17, $this->source); })()), "html", null, true);
            echo ";
        opacity: .85;
    }
    .uv-btn-small:active,
    .uv-btn:active,
    .uv-btn-large:active,
    .uv-btn-action:active,
    .btn:active,
    .uv-btn-label:active {
        background: ";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 26, $this->source); })()), "html", null, true);
            echo ";
        opacity: .65;
    }
    .uv-btn-stroke:active {
        border-color: ";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 30, $this->source); })()), "html", null, true);
            echo ";
    }
    .uv-dropdown .uv-dropdown-btn-active {
        border: solid 1px ";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 33, $this->source); })()), "html", null, true);
            echo ";
    }
    .uv-cta-wrapper .uv-cta-lt svg path {
        fill: ";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 36, $this->source); })()), "html", null, true);
            echo ";
    }
    .uv-skin-dark .uv-btn-small,
    .uv-skin-dark .uv-btn,
    .uv-skin-dark .uv-btn-large,
    .uv-skin-dark .uv-btn-action,
    .uv-skin-dark .uv-btn-label {
        background: ";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 43, $this->source); })()), "html", null, true);
            echo ";
        color: #333333 !important;
    }
    .uv-skin-dark .uv-btn-small:hover,
    .uv-skin-dark .uv-btn:hover,
    .uv-skin-dark .uv-btn-large:hover,
    .uv-skin-dark .uv-btn-action:hover,
    .uv-skin-dark .btn:hover,
    .uv-skin-dark .uv-btn-label:hover {
        background: ";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 52, $this->source); })()), "html", null, true);
            echo ";
        opacity: .85;
    }
    .uv-skin-dark .uv-btn-small:active,
    .uv-skin-dark .uv-btn:active,
    .uv-skin-dark .uv-btn-large:active,
    .uv-skin-dark .uv-btn-action:active,
    .uv-skin-dark .btn:active,
    .uv-skin-dark .uv-btn-label:active {
        background: ";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 61, $this->source); })()), "html", null, true);
            echo ";
        opacity: .65;
    }
    .uv-skin-dark .uv-btn-stroke:active {
        border-color: ";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 65, $this->source); })()), "html", null, true);
            echo ";
    }
    .uv-skin-dark .uv-dropdown .uv-dropdown-btn-active {
        border: solid 1px ";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 68, $this->source); })()), "html", null, true);
            echo ";
    }
    .uv-skin-dark .uv-select:focus,
    .uv-skin-dark .uv-field:focus,
    .uv-skin-dark .uv-search-inline:focus {
        border-color: ";
            // line 73
            echo twig_escape_filter($this->env, (isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 73, $this->source); })()), "html", null, true);
            echo ";
    }
    .uv-skin-dark .uv-loader span:before,
    .uv-skin-dark .uv-loader span:after {
        background: ";
            // line 77
            echo twig_escape_filter($this->env, (isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 77, $this->source); })()), "html", null, true);
            echo ";
    }
    .uv-skin-dark .bootstrap-datetimepicker-widget table td.active,
    .uv-skin-dark .bootstrap-datetimepicker-widget table td.active:hover {
        background-color: ";
            // line 81
            echo twig_escape_filter($this->env, (isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 81, $this->source); })()), "html", null, true);
            echo ";
    }
    .uv-skin-dark .btn-primary,
    .uv-skin-dark .btn-primary:hover,
    .uv-skin-dark .btn-primary:active {
        background-color: ";
            // line 86
            echo twig_escape_filter($this->env, (isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 86, $this->source); })()), "html", null, true);
            echo ";
    }
    .uv-skin-dark .uv-hero {
        background-color: ";
            // line 89
            echo twig_escape_filter($this->env, (isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 89, $this->source); })()), "html", null, true);
            echo ";
    }
    .uv-skin-dark .uv-cta-wrapper .uv-cta-lt svg path {
        fill: ";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 92, $this->source); })()), "html", null, true);
            echo ";
        opacity: .85;
    }
    .uv-kb-layout-folder .uv-kb-folder {
        border-color: ";
            // line 96
            echo twig_escape_filter($this->env, (isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 96, $this->source); })()), "html", null, true);
            echo ";
    }
    .uv-kb-layout-grid .uv-kb-folder{
        border-color: ";
            // line 99
            echo twig_escape_filter($this->env, (isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 99, $this->source); })()), "html", null, true);
            echo ";
    }
    .uv-kb-layout-folder .uv-kb-folder .uv-kb-folder-lt {
        background-position: -180px 0px;
        background-color: ";
            // line 103
            echo twig_escape_filter($this->env, (isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 103, $this->source); })()), "html", null, true);
            echo ";
        opacity: .85;
    }
    .uv-skin-dark .uv-paper-article .uv-paper-section .uv-folder-title:after {
        background-color: ";
            // line 107
            echo twig_escape_filter($this->env, (isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 107, $this->source); })()), "html", null, true);
            echo ";
        color: #333333;
    }
    .uv-skin-dark .uv-kb-layout-category .uv-kb-folder {
        border-bottom-color: ";
            // line 111
            echo twig_escape_filter($this->env, (isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 111, $this->source); })()), "html", null, true);
            echo ";
    }
    .uv-skin-dark .uv-brand {
        color: ";
            // line 114
            echo twig_escape_filter($this->env, (isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 114, $this->source); })()), "html", null, true);
            echo ";
    }
    .uv-skin-dark .uv-pagination a:hover {
        background-color: ";
            // line 117
            echo twig_escape_filter($this->env, (isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 117, $this->source); })()), "html", null, true);
            echo ";
        border-color: ";
            // line 118
            echo twig_escape_filter($this->env, (isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 118, $this->source); })()), "html", null, true);
            echo ";
    }
    .uv-skin-dark .uv-nav-tab ul.uv-nav-tab-label li .uv-nav-tab-active,
    .uv-skin-dark .uv-nav-tab ul.uv-nav-tab-label li a:hover {
        border-bottom-color: ";
            // line 122
            echo twig_escape_filter($this->env, (isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 122, $this->source); })()), "html", null, true);
            echo ";
    }
    .uv-skin-dark .uv-icon-down-light {
            background-image: url(\"";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/images/arrow-down-dark.svg"), "html", null, true);
            echo "\");
    }
    .uv-skin-dark .uv-ticket-view .uv-ticket-accordion .uv-ticket-count-stat,
    .uv-skin-dark .uv-ticket-view .uv-ticket-accordion .uv-ticket-count-stat:hover {
        background: ";
            // line 129
            echo twig_escape_filter($this->env, (isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 129, $this->source); })()), "html", null, true);
            echo ";
        color: #333333;
    }
</style>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@UVDeskSupportCenter/Knowledgebase/darkSkin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 129,  249 => 125,  243 => 122,  236 => 118,  232 => 117,  226 => 114,  220 => 111,  213 => 107,  206 => 103,  199 => 99,  193 => 96,  186 => 92,  180 => 89,  174 => 86,  166 => 81,  159 => 77,  152 => 73,  144 => 68,  138 => 65,  131 => 61,  119 => 52,  107 => 43,  97 => 36,  91 => 33,  85 => 30,  78 => 26,  66 => 17,  55 => 9,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set brandColor = websiteConfiguration.brandColor ?: '#7C70F4' %}
{% if brandColor != '#7C70F4' and brandColor != '#7c70f4' %}
<style>
    .uv-btn-small,
    .uv-btn,
    .uv-btn-large,
    .uv-btn-action,
    .uv-btn-label {
        background: {{ brandColor }};
    }
    .uv-btn-small:hover,
    .uv-btn:hover,
    .uv-btn-large:hover,
    .uv-btn-action:hover,
    .btn:hover,
    .uv-btn-label:hover {
        background: {{ brandColor }};
        opacity: .85;
    }
    .uv-btn-small:active,
    .uv-btn:active,
    .uv-btn-large:active,
    .uv-btn-action:active,
    .btn:active,
    .uv-btn-label:active {
        background: {{ brandColor }};
        opacity: .65;
    }
    .uv-btn-stroke:active {
        border-color: {{ brandColor }};
    }
    .uv-dropdown .uv-dropdown-btn-active {
        border: solid 1px {{ brandColor }};
    }
    .uv-cta-wrapper .uv-cta-lt svg path {
        fill: {{ brandColor }};
    }
    .uv-skin-dark .uv-btn-small,
    .uv-skin-dark .uv-btn,
    .uv-skin-dark .uv-btn-large,
    .uv-skin-dark .uv-btn-action,
    .uv-skin-dark .uv-btn-label {
        background: {{ brandColor }};
        color: #333333 !important;
    }
    .uv-skin-dark .uv-btn-small:hover,
    .uv-skin-dark .uv-btn:hover,
    .uv-skin-dark .uv-btn-large:hover,
    .uv-skin-dark .uv-btn-action:hover,
    .uv-skin-dark .btn:hover,
    .uv-skin-dark .uv-btn-label:hover {
        background: {{ brandColor }};
        opacity: .85;
    }
    .uv-skin-dark .uv-btn-small:active,
    .uv-skin-dark .uv-btn:active,
    .uv-skin-dark .uv-btn-large:active,
    .uv-skin-dark .uv-btn-action:active,
    .uv-skin-dark .btn:active,
    .uv-skin-dark .uv-btn-label:active {
        background: {{ brandColor }};
        opacity: .65;
    }
    .uv-skin-dark .uv-btn-stroke:active {
        border-color: {{ brandColor }};
    }
    .uv-skin-dark .uv-dropdown .uv-dropdown-btn-active {
        border: solid 1px {{ brandColor }};
    }
    .uv-skin-dark .uv-select:focus,
    .uv-skin-dark .uv-field:focus,
    .uv-skin-dark .uv-search-inline:focus {
        border-color: {{ brandColor }};
    }
    .uv-skin-dark .uv-loader span:before,
    .uv-skin-dark .uv-loader span:after {
        background: {{ brandColor }};
    }
    .uv-skin-dark .bootstrap-datetimepicker-widget table td.active,
    .uv-skin-dark .bootstrap-datetimepicker-widget table td.active:hover {
        background-color: {{ brandColor }};
    }
    .uv-skin-dark .btn-primary,
    .uv-skin-dark .btn-primary:hover,
    .uv-skin-dark .btn-primary:active {
        background-color: {{ brandColor }};
    }
    .uv-skin-dark .uv-hero {
        background-color: {{ brandColor }};
    }
    .uv-skin-dark .uv-cta-wrapper .uv-cta-lt svg path {
        fill: {{ brandColor }};
        opacity: .85;
    }
    .uv-kb-layout-folder .uv-kb-folder {
        border-color: {{ brandColor }};
    }
    .uv-kb-layout-grid .uv-kb-folder{
        border-color: {{ brandColor }};
    }
    .uv-kb-layout-folder .uv-kb-folder .uv-kb-folder-lt {
        background-position: -180px 0px;
        background-color: {{ brandColor }};
        opacity: .85;
    }
    .uv-skin-dark .uv-paper-article .uv-paper-section .uv-folder-title:after {
        background-color: {{ brandColor }};
        color: #333333;
    }
    .uv-skin-dark .uv-kb-layout-category .uv-kb-folder {
        border-bottom-color: {{ brandColor }};
    }
    .uv-skin-dark .uv-brand {
        color: {{ brandColor }};
    }
    .uv-skin-dark .uv-pagination a:hover {
        background-color: {{ brandColor }};
        border-color: {{ brandColor }};
    }
    .uv-skin-dark .uv-nav-tab ul.uv-nav-tab-label li .uv-nav-tab-active,
    .uv-skin-dark .uv-nav-tab ul.uv-nav-tab-label li a:hover {
        border-bottom-color: {{ brandColor }};
    }
    .uv-skin-dark .uv-icon-down-light {
            background-image: url(\"{{ asset('bundles/uvdeskcoreframework/images/arrow-down-dark.svg')}}\");
    }
    .uv-skin-dark .uv-ticket-view .uv-ticket-accordion .uv-ticket-count-stat,
    .uv-skin-dark .uv-ticket-view .uv-ticket-accordion .uv-ticket-count-stat:hover {
        background: {{ brandColor }};
        color: #333333;
    }
</style>
{% endif %}", "@UVDeskSupportCenter/Knowledgebase/darkSkin.html.twig", "/home/lexcorp.xyz/public_html/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Knowledgebase/darkSkin.html.twig");
    }
}
