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

/* @UVDeskSupportCenter/Knowledgebase/lightSkin.html.twig */
class __TwigTemplate_c2474a36dc1eb7ab3505078b0dc2d7d562ba856556e17895ed120fcf263b054a extends Template
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
        $context["brandColor"] = ((twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "brandColor", [], "any", false, false, false, 1)) ? (twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "brandColor", [], "any", false, false, false, 1)) : ("#7C70F4"));
        // line 2
        if (((($context["brandColor"] ?? null) != "#7C70F4") && (($context["brandColor"] ?? null) != "#7c70f4"))) {
            // line 3
            echo "<style>
    .uv-btn-small,
    .uv-btn,
    .uv-btn-large,
    .uv-btn-action,
    .uv-btn-label {
        background: ";
            // line 9
            echo twig_escape_filter($this->env, ($context["brandColor"] ?? null), "html", null, true);
            echo ";
    }

    .uv-btn-small:hover,
    .uv-btn:hover,
    .uv-btn-large:hover,
    .uv-btn-action:hover,
    .btn:hover,
    .uv-btn-label:hover {
        background: ";
            // line 18
            echo twig_escape_filter($this->env, ($context["brandColor"] ?? null), "html", null, true);
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
            // line 28
            echo twig_escape_filter($this->env, ($context["brandColor"] ?? null), "html", null, true);
            echo ";
        opacity: .65;
    }

    .uv-btn-stroke:active {
        border-color: ";
            // line 33
            echo twig_escape_filter($this->env, ($context["brandColor"] ?? null), "html", null, true);
            echo ";
    }

    .uv-dropdown .uv-dropdown-btn-active {
        border: solid 1px ";
            // line 37
            echo twig_escape_filter($this->env, ($context["brandColor"] ?? null), "html", null, true);
            echo ";
    }

    .uv-select:focus,
    .uv-field:focus,
    .uv-search-inline:focus {
        border-color: ";
            // line 43
            echo twig_escape_filter($this->env, ($context["brandColor"] ?? null), "html", null, true);
            echo ";
    }

    .uv-loader span:before,
    .uv-loader span:after {
        background: ";
            // line 48
            echo twig_escape_filter($this->env, ($context["brandColor"] ?? null), "html", null, true);
            echo ";
    }

    .bootstrap-datetimepicker-widget table td.active,
    .bootstrap-datetimepicker-widget table td.active:hover {
        background-color: ";
            // line 53
            echo twig_escape_filter($this->env, ($context["brandColor"] ?? null), "html", null, true);
            echo ";
    }

    .btn-primary,
    .btn-primary:hover,
    .btn-primary:active {
        background-color: ";
            // line 59
            echo twig_escape_filter($this->env, ($context["brandColor"] ?? null), "html", null, true);
            echo ";
    }

    .uv-hero {
        background-color: ";
            // line 63
            echo twig_escape_filter($this->env, ($context["brandColor"] ?? null), "html", null, true);
            echo ";
    }
    
    .uv-cta-wrapper .uv-cta-lt svg path {
        fill: ";
            // line 67
            echo twig_escape_filter($this->env, ($context["brandColor"] ?? null), "html", null, true);
            echo ";
    }
    .uv-kb-layout-folder .uv-kb-folder {
        border-color: ";
            // line 70
            echo twig_escape_filter($this->env, ($context["brandColor"] ?? null), "html", null, true);
            echo ";
    }

    .uv-kb-layout-grid .uv-kb-folder{
        border-color: ";
            // line 74
            echo twig_escape_filter($this->env, ($context["brandColor"] ?? null), "html", null, true);
            echo ";
    }

    .uv-kb-layout-folder .uv-kb-folder .uv-kb-folder-lt {
        background-position: -90px 0px;
        background-color: ";
            // line 79
            echo twig_escape_filter($this->env, ($context["brandColor"] ?? null), "html", null, true);
            echo ";
    }
    
    .uv-paper-article .uv-paper-section .uv-folder-title:after {
        background-color: ";
            // line 83
            echo twig_escape_filter($this->env, ($context["brandColor"] ?? null), "html", null, true);
            echo ";
    }

    .uv-kb-layout-category .uv-kb-folder {
        border-bottom-color: ";
            // line 87
            echo twig_escape_filter($this->env, ($context["brandColor"] ?? null), "html", null, true);
            echo ";
    }

    .uv-brand {
        color: ";
            // line 91
            echo twig_escape_filter($this->env, ($context["brandColor"] ?? null), "html", null, true);
            echo ";
    }

    .uv-pagination a:hover {
        background-color: ";
            // line 95
            echo twig_escape_filter($this->env, ($context["brandColor"] ?? null), "html", null, true);
            echo ";
        border-color: rgba(0,0,0,.1);
    }

    .uv-nav-tab ul.uv-nav-tab-label li .uv-nav-tab-active,
    .uv-nav-tab ul.uv-nav-tab-label li a:hover {
        border-bottom-color: ";
            // line 101
            echo twig_escape_filter($this->env, ($context["brandColor"] ?? null), "html", null, true);
            echo ";
    }
    .uv-skin-dark .uv-ticket-view .uv-ticket-accordion .uv-ticket-count-stat,
    .uv-skin-dark .uv-ticket-view .uv-ticket-accordion .uv-ticket-count-stat:hover {
        background: ";
            // line 105
            echo twig_escape_filter($this->env, ($context["brandColor"] ?? null), "html", null, true);
            echo ";
    }
</style>
";
        }
    }

    public function getTemplateName()
    {
        return "@UVDeskSupportCenter/Knowledgebase/lightSkin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 105,  195 => 101,  186 => 95,  179 => 91,  172 => 87,  165 => 83,  158 => 79,  150 => 74,  143 => 70,  137 => 67,  130 => 63,  123 => 59,  114 => 53,  106 => 48,  98 => 43,  89 => 37,  82 => 33,  74 => 28,  61 => 18,  49 => 9,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@UVDeskSupportCenter/Knowledgebase/lightSkin.html.twig", "/home/support.telenet.com.np/public_html/vendor/uvdesk/support-center-bundle/Resources/views/Knowledgebase/lightSkin.html.twig");
    }
}
