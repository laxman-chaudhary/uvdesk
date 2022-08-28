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
class __TwigTemplate_7f388a3ba8710ebc3176c2e77714020ccb268d571907002854f169e50dd4f63a extends Template
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
        $this->parent = $this->loadTemplate("@UVDeskSupportCenter/Templates/layout.html.twig", "@UVDeskSupportCenter//Knowledgebase//index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<style>
\t\t.uv-kb-info {
\t\t\tword-break: break-all;
\t\t}
\t</style>
\t
\t";
        // line 10
        $context["themeTemplate"] = ((($context["themeTemplate"] ?? null)) ? (($context["themeTemplate"] ?? null)) : ("masonryView"));
        // line 11
        echo "\t";
        $this->loadTemplate((("@UVDeskSupportCenter/Themes/" . ($context["themeTemplate"] ?? null)) . ".html.twig"), "@UVDeskSupportCenter//Knowledgebase//index.html.twig", 11)->display($context);
        // line 12
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
    }

    // line 15
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
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
        return array (  75 => 16,  71 => 15,  64 => 12,  61 => 11,  59 => 10,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@UVDeskSupportCenter//Knowledgebase//index.html.twig", "/home/support.telenet.com.np/public_html/vendor/uvdesk/support-center-bundle/Resources/views/Knowledgebase/index.html.twig");
    }
}
