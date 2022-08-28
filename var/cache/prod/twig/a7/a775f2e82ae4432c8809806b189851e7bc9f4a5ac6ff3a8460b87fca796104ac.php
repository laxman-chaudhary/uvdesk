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

/* @UVDeskSupportCenter/Themes/folderView.html.twig */
class __TwigTemplate_98fb7659c428dcb7f55089f520332a74038455f53a7699ee75bcb66da651a83c extends Template
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
        echo "<div class=\"uv-kb-section\">
\t<div class=\"uv-kb-section-head\">
\t\t<h1 class=\"uv-text-center\">";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Browse via Folders"), "html", null, true);
        echo "</h1>
\t\t<p class=\"uv-text-center uv-fixed-width\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Looking for something that is queried generally? Choose a relevant folder from below to explore possible solutions"), "html", null, true);
        echo "</p>
\t</div>
\t<div class=\"uv-kb-section-layout uv-kb-layout-folder\">
    \t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["solutions"] ?? null), "results", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
            // line 8
            echo "\t\t\t<!--Folder-->
\t\t\t<div class=\"uv-kb-folder\">
\t\t\t\t<div class=\"uv-kb-folder-lt\">
\t\t\t\t\t";
            // line 11
            if (twig_get_attribute($this->env, $this->source, $context["folder"], "solutionImage", [], "any", false, false, false, 11)) {
                // line 12
                echo "\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 12), "scheme", [], "any", false, false, false, 12) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 12), "httpHost", [], "any", false, false, false, 12)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "solutionImage", [], "any", false, false, false, 12), "html", null, true);
                echo "\">
\t\t\t\t\t";
            }
            // line 14
            echo "\t\t\t\t</div>
\t\t\t\t<div class=\"uv-kb-folder-rt\">
\t\t\t\t\t<p><span>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "name", [], "any", false, false, false, 16), "html", null, true);
            echo "</span></p>
\t\t\t\t\t<p><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase_folder", ["solution" => twig_get_attribute($this->env, $this->source, $context["folder"], "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "categoriesCount", [], "any", false, false, false, 17), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Categories"), "html", null, true);
            echo "</a></p>
\t\t\t\t\t<p><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase_folder_article_collection", ["solution" => twig_get_attribute($this->env, $this->source, $context["folder"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "articleCount", [], "any", false, false, false, 18), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Articles"), "html", null, true);
            echo "</a></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--//Folder-->
    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "@UVDeskSupportCenter/Themes/folderView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 23,  85 => 18,  77 => 17,  73 => 16,  69 => 14,  62 => 12,  60 => 11,  55 => 8,  51 => 7,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@UVDeskSupportCenter/Themes/folderView.html.twig", "/home/support.telenet.com.np/public_html/vendor/uvdesk/support-center-bundle/Resources/views/Themes/folderView.html.twig");
    }
}
