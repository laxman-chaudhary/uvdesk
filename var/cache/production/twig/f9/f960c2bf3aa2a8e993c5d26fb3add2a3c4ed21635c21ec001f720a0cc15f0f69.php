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

/* @UVDeskSupportCenter//Knowledgebase//index.html.twig */
class __TwigTemplate_f84abc7f6668ff881c9b8664289105d2d995f7ac70a9eaf8c6d5d83cf9332a54 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter//Knowledgebase//index.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskSupportCenter/Templates/layout.html.twig", "@UVDeskSupportCenter//Knowledgebase//index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<style>
\t\t.uv-kb-info {
\t\t\tword-break: break-all;
\t\t}
\t</style>
\t
\t";
        // line 10
        $context["themeTemplate"] = (((isset($context["themeTemplate"]) || array_key_exists("themeTemplate", $context) ? $context["themeTemplate"] : (function () { throw new RuntimeError('Variable "themeTemplate" does not exist.', 10, $this->source); })())) ? ((isset($context["themeTemplate"]) || array_key_exists("themeTemplate", $context) ? $context["themeTemplate"] : (function () { throw new RuntimeError('Variable "themeTemplate" does not exist.', 10, $this->source); })())) : ("masonryView"));
        // line 11
        echo "\t";
        $this->loadTemplate((("@UVDeskSupportCenter/Themes/" . (isset($context["themeTemplate"]) || array_key_exists("themeTemplate", $context) ? $context["themeTemplate"] : (function () { throw new RuntimeError('Variable "themeTemplate" does not exist.', 11, $this->source); })())) . ".html.twig"), "@UVDeskSupportCenter//Knowledgebase//index.html.twig", 11)->display($context);
        // line 12
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 16
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@UVDeskSupportCenter//Knowledgebase//index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 16,  83 => 15,  73 => 12,  70 => 11,  68 => 10,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@UVDeskSupportCenter/Templates/layout.html.twig\" %}

{% block body %}
\t<style>
\t\t.uv-kb-info {
\t\t\tword-break: break-all;
\t\t}
\t</style>
\t
\t{% set themeTemplate = themeTemplate ? themeTemplate : 'masonryView' %}
\t{% include \"@UVDeskSupportCenter/Themes/\" ~ themeTemplate ~ \".html.twig\" %}
\t{{parent()}}
{% endblock %}

{% block footer %}
\t{{ parent() }}
{% endblock %}
", "@UVDeskSupportCenter//Knowledgebase//index.html.twig", "/home/support.telenet.com.np/public_html/vendor/uvdesk/support-center-bundle/Resources/views/Knowledgebase/index.html.twig");
    }
}
