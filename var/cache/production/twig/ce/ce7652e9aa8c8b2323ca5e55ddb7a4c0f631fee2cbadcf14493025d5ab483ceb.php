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

/* @UVDeskSupportCenter/Knowledgebase/websiteSettings.html.twig */
class __TwigTemplate_5f784f5e7a90e3e6a904ac07605ff4e85f9726d7f9805129a76d8c4296531f04 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/websiteSettings.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 1, $this->source); })()), "favicon", [], "any", false, false, false, 1)) {
            // line 2
            echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 2, $this->source); })()), "favicon", [], "any", false, false, false, 2), "html", null, true);
            echo "\" />
";
        } else {
            // line 4
            echo "\t<link rel=\"icon\" sizes=\"16x16\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
            echo "\" />
";
        }
        // line 6
        echo "
<style>
\t";
        // line 8
        if (twig_get_attribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 8, $this->source); })()), "pageBackgroundColor", [], "any", false, false, false, 8)) {
            // line 9
            echo "\t\tbody {
\t\t\tbackground: ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 10, $this->source); })()), "pageBackgroundColor", [], "any", false, false, false, 10), "html", null, true);
            echo ";
\t\t}
\t";
        }
        // line 13
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 13, $this->source); })()), "headerBackgroundColor", [], "any", false, false, false, 13)) {
            // line 14
            echo "\t\t.uv-header {
\t\t\tbackground-color: ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 15, $this->source); })()), "headerBackgroundColor", [], "any", false, false, false, 15), "html", null, true);
            echo ";
\t\t}
\t";
        }
        // line 18
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 18, $this->source); })()), "bannerBackgroundColor", [], "any", false, false, false, 18)) {
            // line 19
            echo "\t\t.uv-hero {
\t\t\tbackground-color: ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 20, $this->source); })()), "bannerBackgroundColor", [], "any", false, false, false, 20), "html", null, true);
            echo ";
\t\t}
\t";
        }
        // line 23
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 23, $this->source); })()), "linkColor", [], "any", false, false, false, 23)) {
            // line 24
            echo "\t\ta:not(.uv-btn):not(.uv-btn-small):not(.uv-table td a) {
\t\t\tcolor: ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 25, $this->source); })()), "linkColor", [], "any", false, false, false, 25), "html", null, true);
            echo " !important;
\t\t}
\t";
        }
        // line 28
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 28, $this->source); })()), "linkHoverColor", [], "any", false, false, false, 28)) {
            // line 29
            echo "\t\ta:hover:not(.uv-btn):not(.uv-btn-small):not(.uv-table td a) {
\t\t\tcolor: ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 30, $this->source); })()), "linkHoverColor", [], "any", false, false, false, 30), "html", null, true);
            echo " !important;
\t\t}
\t";
        }
        // line 33
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 33, $this->source); })()), "articleTextColor", [], "any", false, false, false, 33)) {
            // line 34
            echo "\t\t.uv-editor p {
\t\t\tcolor: ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 35, $this->source); })()), "articleTextColor", [], "any", false, false, false, 35), "html", null, true);
            echo ";
\t\t}
\t";
        }
        // line 38
        echo "</style>
";
        // line 39
        if (twig_get_attribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 39, $this->source); })()), "customCSS", [], "any", false, false, false, 39)) {
            // line 40
            echo "\t<style>
\t\t";
            // line 41
            echo twig_get_attribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 41, $this->source); })()), "customCSS", [], "any", false, false, false, 41);
            echo "
\t</style>
";
        }
        // line 44
        echo "
";
        // line 45
        if (twig_get_attribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 45, $this->source); })()), "script", [], "any", false, false, false, 45)) {
            // line 46
            echo "\t";
            if ((twig_in_filter("<script", twig_get_attribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 46, $this->source); })()), "script", [], "any", false, false, false, 46)) && twig_in_filter("</script>", twig_get_attribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 46, $this->source); })()), "script", [], "any", false, false, false, 46)))) {
                // line 47
                echo "\t\t";
                echo twig_get_attribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 47, $this->source); })()), "script", [], "any", false, false, false, 47);
                echo "
\t";
            } else {
                // line 49
                echo "\t\t<script type=\"text/javascript\">
\t\t\t";
                // line 50
                echo twig_get_attribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 50, $this->source); })()), "script", [], "any", false, false, false, 50);
                echo "
\t\t</script>
\t";
            }
            // line 52
            echo "\t\t\t
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@UVDeskSupportCenter/Knowledgebase/websiteSettings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 52,  160 => 50,  157 => 49,  151 => 47,  148 => 46,  146 => 45,  143 => 44,  137 => 41,  134 => 40,  132 => 39,  129 => 38,  123 => 35,  120 => 34,  117 => 33,  111 => 30,  108 => 29,  105 => 28,  99 => 25,  96 => 24,  93 => 23,  87 => 20,  84 => 19,  81 => 18,  75 => 15,  72 => 14,  69 => 13,  63 => 10,  60 => 9,  58 => 8,  54 => 6,  48 => 4,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if websiteDetails.favicon %}
    <link rel=\"icon\" sizes=\"16x16\" href=\"{{ websiteDetails.favicon }}\" />
{% else %}
\t<link rel=\"icon\" sizes=\"16x16\" href=\"{{ asset('favicon.ico') }}\" />
{% endif %}

<style>
\t{% if websiteConfiguration.pageBackgroundColor %}
\t\tbody {
\t\t\tbackground: {{websiteConfiguration.pageBackgroundColor}};
\t\t}
\t{% endif %}
\t{% if websiteConfiguration.headerBackgroundColor %}
\t\t.uv-header {
\t\t\tbackground-color: {{websiteConfiguration.headerBackgroundColor}};
\t\t}
\t{% endif %}
\t{% if websiteConfiguration.bannerBackgroundColor %}
\t\t.uv-hero {
\t\t\tbackground-color: {{websiteConfiguration.bannerBackgroundColor}};
\t\t}
\t{% endif %}
\t{% if websiteConfiguration.linkColor %}
\t\ta:not(.uv-btn):not(.uv-btn-small):not(.uv-table td a) {
\t\t\tcolor: {{websiteConfiguration.linkColor}} !important;
\t\t}
\t{% endif %}
\t{% if websiteConfiguration.linkHoverColor %}
\t\ta:hover:not(.uv-btn):not(.uv-btn-small):not(.uv-table td a) {
\t\t\tcolor: {{websiteConfiguration.linkHoverColor}} !important;
\t\t}
\t{% endif %}
\t{% if websiteConfiguration.articleTextColor %}
\t\t.uv-editor p {
\t\t\tcolor: {{websiteConfiguration.articleTextColor}};
\t\t}
\t{% endif %}
</style>
{% if websiteConfiguration.customCSS %}
\t<style>
\t\t{{ websiteConfiguration.customCSS|raw }}
\t</style>
{% endif %}

{% if websiteConfiguration.script %}
\t{% if '<script' in websiteConfiguration.script and '</script>' in websiteConfiguration.script %}
\t\t{{ websiteConfiguration.script|raw }}
\t{% else %}
\t\t<script type=\"text/javascript\">
\t\t\t{{ websiteConfiguration.script|raw }}
\t\t</script>
\t{% endif %}\t\t\t
{% endif %}", "@UVDeskSupportCenter/Knowledgebase/websiteSettings.html.twig", "/home/support.telenet.com.np/public_html/vendor/uvdesk/support-center-bundle/Resources/views/Knowledgebase/websiteSettings.html.twig");
    }
}
