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

/* @UVDeskSupportCenter/Templates/breadcrumbs.html.twig */
class __TwigTemplate_d933aa785c8a9db755a97848a3c1690483d79ea1d27ccc460470e2fc7a84080b extends Template
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
        if (array_key_exists("breadcrumbs", $context)) {
            // line 2
            echo "    <form method=\"get\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase_search");
            echo "\">
        <div class=\"uv-nav-bar\">
            <div class=\"uv-container\">
                <div class=\"uv-nav-bar-lt\">
                    <ul>
                        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["breadcrumb"]) {
                // line 8
                echo "                            ";
                if (($context["key"] == (twig_length_filter($this->env, ($context["breadcrumbs"] ?? null)) - 1))) {
                    // line 9
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 9), "headers", [], "any", false, false, false, 9), "get", [0 => "referer"], "method", false, false, false, 9) && twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 9), "headers", [], "any", false, false, false, 9), "get", [0 => "host"], "method", false, false, false, 9), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 9), "headers", [], "any", false, false, false, 9), "get", [0 => "referer"], "method", false, false, false, 9)))) {
                        // line 10
                        echo "                                    <li><a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 10), "headers", [], "any", false, false, false, 10), "get", [0 => "referer"], "method", false, false, false, 10), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Prev"), "html", null, true);
                        echo "</a></li>
                                ";
                    }
                    // line 12
                    echo "                            ";
                }
                // line 13
                echo "                            <li><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "url", [], "any", false, false, false, 13), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "label", [], "any", false, false, false, 13), "html", null, true);
                echo "</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "                    </ul>  
                </div>
                <div class=\"uv-nav-bar-rt\">
                    <input class=\"uv-nav-search\" name=\"s\" type=\"text\" placeholder=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search KnowledgeBase"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 18), "query", [], "any", false, false, false, 18), "get", [0 => "s"], "method", false, false, false, 18), "html", null, true);
            echo "\"> 
                </div>
            </div>
        </div>
    </form>
";
        }
    }

    public function getTemplateName()
    {
        return "@UVDeskSupportCenter/Templates/breadcrumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 18,  80 => 15,  69 => 13,  66 => 12,  58 => 10,  55 => 9,  52 => 8,  48 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@UVDeskSupportCenter/Templates/breadcrumbs.html.twig", "/home/support.telenet.com.np/public_html/vendor/uvdesk/support-center-bundle/Resources/views/Templates/breadcrumbs.html.twig");
    }
}
