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
class __TwigTemplate_0691bde694d016646d78991eb390ae3244c668ef1f94c9428adfd72cfba072c0 extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["websiteDetails"] ?? null), "favicon", [], "any", false, false, false, 1)) {
            // line 2
            echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["websiteDetails"] ?? null), "favicon", [], "any", false, false, false, 2), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "pageBackgroundColor", [], "any", false, false, false, 8)) {
            // line 9
            echo "\t\tbody {
\t\t\tbackground: ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "pageBackgroundColor", [], "any", false, false, false, 10), "html", null, true);
            echo ";
\t\t}
\t";
        }
        // line 13
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "headerBackgroundColor", [], "any", false, false, false, 13)) {
            // line 14
            echo "\t\t.uv-header {
\t\t\tbackground-color: ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "headerBackgroundColor", [], "any", false, false, false, 15), "html", null, true);
            echo ";
\t\t}
\t";
        }
        // line 18
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "bannerBackgroundColor", [], "any", false, false, false, 18)) {
            // line 19
            echo "\t\t.uv-hero {
\t\t\tbackground-color: ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "bannerBackgroundColor", [], "any", false, false, false, 20), "html", null, true);
            echo ";
\t\t}
\t";
        }
        // line 23
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "linkColor", [], "any", false, false, false, 23)) {
            // line 24
            echo "\t\ta:not(.uv-btn):not(.uv-btn-small):not(.uv-table td a) {
\t\t\tcolor: ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "linkColor", [], "any", false, false, false, 25), "html", null, true);
            echo " !important;
\t\t}
\t";
        }
        // line 28
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "linkHoverColor", [], "any", false, false, false, 28)) {
            // line 29
            echo "\t\ta:hover:not(.uv-btn):not(.uv-btn-small):not(.uv-table td a) {
\t\t\tcolor: ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "linkHoverColor", [], "any", false, false, false, 30), "html", null, true);
            echo " !important;
\t\t}
\t";
        }
        // line 33
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "articleTextColor", [], "any", false, false, false, 33)) {
            // line 34
            echo "\t\t.uv-editor p {
\t\t\tcolor: ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "articleTextColor", [], "any", false, false, false, 35), "html", null, true);
            echo ";
\t\t}
\t";
        }
        // line 38
        echo "</style>
";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "customCSS", [], "any", false, false, false, 39)) {
            // line 40
            echo "\t<style>
\t\t";
            // line 41
            echo twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "customCSS", [], "any", false, false, false, 41);
            echo "
\t</style>
";
        }
        // line 44
        echo "
";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "script", [], "any", false, false, false, 45)) {
            // line 46
            echo "\t";
            if ((twig_in_filter("<script", twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "script", [], "any", false, false, false, 46)) && twig_in_filter("</script>", twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "script", [], "any", false, false, false, 46)))) {
                // line 47
                echo "\t\t";
                echo twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "script", [], "any", false, false, false, 47);
                echo "
\t";
            } else {
                // line 49
                echo "\t\t<script type=\"text/javascript\">
\t\t\t";
                // line 50
                echo twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "script", [], "any", false, false, false, 50);
                echo "
\t\t</script>
\t";
            }
            // line 52
            echo "\t\t\t
";
        }
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
        return array (  163 => 52,  157 => 50,  154 => 49,  148 => 47,  145 => 46,  143 => 45,  140 => 44,  134 => 41,  131 => 40,  129 => 39,  126 => 38,  120 => 35,  117 => 34,  114 => 33,  108 => 30,  105 => 29,  102 => 28,  96 => 25,  93 => 24,  90 => 23,  84 => 20,  81 => 19,  78 => 18,  72 => 15,  69 => 14,  66 => 13,  60 => 10,  57 => 9,  55 => 8,  51 => 6,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@UVDeskSupportCenter/Knowledgebase/websiteSettings.html.twig", "/home/support.telenet.com.np/public_html/vendor/uvdesk/support-center-bundle/Resources/views/Knowledgebase/websiteSettings.html.twig");
    }
}
