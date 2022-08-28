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

/* @UVDeskCoreFramework/dashboard.html.twig */
class __TwigTemplate_6e633fa869ffa150beb787c86cd8e4f41ba402ab820ae33d4b49b191bbabc12b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'templateCSS' => [$this, 'block_templateCSS'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskCoreFramework/dashboard.html.twig", 1);
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

        echo "Dashboard";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_templateCSS($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "templateCSS"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "templateCSS"));

        // line 6
        echo "    <style>
\t\t.uv-activity-wrapper {
\t\t\tmargin-top: 60px;
\t\t}
\t\t.uv-activity-wrapper .uv-activity-chart-col-lt {
\t\t\twidth: 80%;
\t\t\tfloat: left;
\t\t}
\t\tul.uv-activity-brick-wrapper {
\t\t\tlist-style: none;
\t\t\tmargin: 0;
\t\t\tpadding: 0;
\t\t\twidth: 100%;
    \t\tdisplay: inline-block;
\t\t}
\t\tul.uv-activity-brick-wrapper li {
\t\t\twidth: 25%;
\t\t\tdisplay: inline-block;
\t\t\tfloat: left;
\t\t\tpadding-left: 10px;
\t\t\tpadding-right: 10px;
\t\t\tcolor: #fff;
\t\t}
\t\tul.uv-activity-brick-wrapper .uv-activity-brick {
\t\t\tborder-radius: 3px;
    \t\tpadding: 10px;
\t\t\ttext-align: center;
\t\t}
\t\tul.uv-activity-brick-wrapper li a {
\t\t\tcolor: #fff;
\t\t\tfont-size: 45px;
\t\t\twidth: 100%;
    \t\tdisplay: inline-block;
\t\t}
\t\tul.uv-activity-brick-wrapper li label {
\t\t\tfont-size: 18px;
\t\t\twidth: 100%;
    \t\tdisplay: inline-block;
\t\t}
\t\t.uv-activity-chart-bottom-row .uv-pannel-body {
\t\t\theight: 450px;
\t\t}
\t\t.kudos-overview {
\t\t\twidth: 40%;
\t\t\tfloat: left;
\t\t\tpadding-right: 10px;
\t\t}
\t\t.recent-notification {
\t\t\twidth: 30%;
\t\t\tfloat: left;
\t\t\tpadding-left: 10px;
\t\t}
\t\t.completion-chart {
\t\t\twidth: 300px;
\t\t\tmargin: 0 auto;
\t\t}
\t\t.progress-meter .background {
\t\t\tfill: #EFEFEF;
\t\t}
\t\t.progress-meter text {
\t\t\tfont-size: 30px;
\t\t}
\t\t.kudos-overview .uv-pannel-body {
\t\t\ttext-align: center;
\t\t\tpadding-top: 50px;
\t\t}
\t\t.kudos-overview .uv-pannel-body label {
\t\t\tmargin-top: 10px;
    \t\tdisplay: inline-block;
\t\t}
\t\t.recent-notification ul {
\t\t\tlist-style: none;
\t\t\tpadding: 0;
\t\t\tmargin: 0;
\t\t\toverflow-y: auto;
\t\t\tmax-height: 400px !important;
\t\t}
\t\t.recent-notification .uv-pannel-body {
\t\t\tpadding: 0;
\t\t}
\t\t.recent-notification ul li {
\t\t\tcolor: #333333;
\t\t\tborder-bottom: solid 1px #D3D3D3;
\t\t\tpadding: 15px 20px;
\t\t}
\t\t.recent-notification ul li:first-child {
\t\t\tborder-top: none;
\t\t}
\t\t.recent-notification ul li:last-child {
\t\t\tborder-bottom: none;
\t\t}
\t\t.recent-notification ul li * {
\t\t\tdisplay: inline-block !important;
\t\t}
\t\t.recent-notification ul li .timeago {
\t\t\tcolor: #9E9E9E;
\t\t\tmargin-top: 5px;
\t\t\tfont-size: 13px;
\t\t}
\t\t.recent-notification label {
\t\t\ttext-align: center;
\t\t\tdisplay: inline-block;
\t\t\twidth: 100%;
\t\t\tpadding-top: 15px;
\t\t\tborder-top: 1px solid #d3d3d3;
\t\t}
\t\t.recent-notification span.uv-notification-message {
\t\t\tfloat: left;
\t\t\twidth: 100%;
\t\t}
\t\t.kudos-count {
\t\t\twidth: 30%;
\t\t\tfloat: left;
\t\t\tpadding-right: 10px;
\t\t\tpadding-left: 10px;
\t\t}
\t\t.kudos-count .uv-pannel-body {
\t\t\tpadding-top: 50px;
\t\t\toverflow-y: auto;
\t\t}
\t\t.kudos-count ul {
\t\t\tlist-style: none;
\t\t\tpadding: 0;
\t\t\tmargin: 0;
\t\t}
\t\t.kudos-count ul li {
\t\t\twidth: 100%;
\t\t\tdisplay: inline-block;
\t\t\tpadding: 15px 0;
\t\t}
\t\t.kudos-count ul li .uv-icon-kudos  {
\t\t\tvertical-align: middle;
\t\t\tmargin-right: 10px;
\t\t}
\t\t.uv-activity-wrapper .uv-activity-chart-col-rt {
\t\t\twidth: 20%;
\t\t\tfloat: left;
\t\t}
\t\t.uv-activity-chart-col-rt ul {
\t\t\tpadding: 0;
\t\t\tmargin: 0;
\t\t\tlist-style: none;
\t\t}
\t\t.uv-activity-chart-col-rt ul li {
\t\t\tmargin-bottom: 10px
\t\t}
\t\t.uv-activity-chart-col-rt ul li span {
\t\t\twidth: 100%;
\t\t\tdisplay: inline-block;
\t\t\tcolor: #6f6f6f;
\t\t}
\t\t.uv-middle {
\t\t\tmargin: 0 auto;
\t\t\tdisplay: inline-block;
\t\t\tmargin-top: 200px;
\t\t\ttext-align: center;
\t\t\twidth: 100%;
\t\t}
\t\t@media screen and (max-width: 1024px) {
\t\t\t.uv-activity-wrapper .uv-activity-chart-col-lt {
\t\t\t\twidth: 100%;
\t\t\t\tpadding: 0;
\t\t\t}
\t\t\t.uv-activity-wrapper .uv-activity-chart-col-rt {
\t\t\t\twidth: 100%;
\t\t\t}
\t\t\t.kudos-overview {
\t\t\t\twidth: 100%;
\t\t\t\tpadding: 0;
\t\t\t}
\t\t\t.kudos-count {
\t\t\t\twidth: 100%;
\t\t\t\tpadding: 0;
\t\t\t}
\t\t\t.recent-notification {
\t\t\t\twidth: 100%;
\t\t\t\tpadding: 0;
\t\t\t}
\t\t\tul.uv-activity-brick-wrapper li {
\t\t\t\twidth: 50%;
\t\t\t\tmargin: 10px 0;
\t\t\t}
\t\t}
\t\t@media screen and (max-width: 768px) {
\t\t\tul.uv-activity-brick-wrapper li {
\t\t\t\twidth: 100%;
\t\t\t}
\t\t}
\t\t@media screen and (max-width: 467px) {
\t\t\t.completion-chart {
\t\t\t\twidth: 100%;
\t\t\t}
\t\t}
\t\tspan.uv-notification-message a:link, span.uv-notification-message a:visited, label a:link, label a:visited {
\t\t\tcolor: #2750C4;
\t\t\tfont-size: 15px;
\t\t}
\t\t.uv-mob-aside {
\t\t\tdisplay: none;
\t\t}
\t\t#btndisclaimer {
  \t\t\tposition: fixed;
  \t\t\tright: 25px;
  \t\t\tbottom: 10px;
\t\t\tbackground: url(\"\");
\t\t}
\t</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 215
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        // line 216
        echo "    <div class=\"uv-area\">
        ";
        // line 217
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 217, $this->source); })()), "getRegisteredComponent", [0 => "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\Dashboard"], "method", false, false, false, 217), "getHomepageTemplate", [], "method", false, false, false, 217), "render", [], "method", false, false, false, 217);
        echo "

        <div class=\"uv-copyright\">
            <span class=\"uv-credit-text\">";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Powered by"), "html", null, true);
        echo " <a href=\"https://www.uvdesk.com\" target=\"_blank\">UVdesk</a></span> | <span class=\"uv-credit-text\">V -1.1.0</span>
        </div>
\t\t<div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
    \t\t<button type=\"submit\" class=\"btn btn-primary btn-md\" id=\"btndisclaimer\" title=";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("clear cache"), "html", null, true);
        echo "><img src=\"https://api.iconify.design/mdi:delete-restore.svg?height=24\" aria-hidden=\"true\"></button>
  \t\t</div>
    </div>

<script>
\t\$('#btndisclaimer').click(function(e){

    \t\$.ajax({
        \turl : \"";
        // line 231
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_cache_clear");
        echo "\",
        \tmethod: 'POST',
        \tdata: \"\",
        \tsuccess : function(response) {
\t\t\t\tapp.appView.renderResponseAlert(response);
        \t},
        \terror: function (xhr) {
            \tapp.appView.renderResponseAlert(xhr);
        \t}
    \t});
    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 245
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 246
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@UVDeskCoreFramework/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 246,  366 => 245,  343 => 231,  332 => 223,  326 => 220,  320 => 217,  317 => 216,  307 => 215,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}Dashboard{% endblock %}

{% block templateCSS %}
    <style>
\t\t.uv-activity-wrapper {
\t\t\tmargin-top: 60px;
\t\t}
\t\t.uv-activity-wrapper .uv-activity-chart-col-lt {
\t\t\twidth: 80%;
\t\t\tfloat: left;
\t\t}
\t\tul.uv-activity-brick-wrapper {
\t\t\tlist-style: none;
\t\t\tmargin: 0;
\t\t\tpadding: 0;
\t\t\twidth: 100%;
    \t\tdisplay: inline-block;
\t\t}
\t\tul.uv-activity-brick-wrapper li {
\t\t\twidth: 25%;
\t\t\tdisplay: inline-block;
\t\t\tfloat: left;
\t\t\tpadding-left: 10px;
\t\t\tpadding-right: 10px;
\t\t\tcolor: #fff;
\t\t}
\t\tul.uv-activity-brick-wrapper .uv-activity-brick {
\t\t\tborder-radius: 3px;
    \t\tpadding: 10px;
\t\t\ttext-align: center;
\t\t}
\t\tul.uv-activity-brick-wrapper li a {
\t\t\tcolor: #fff;
\t\t\tfont-size: 45px;
\t\t\twidth: 100%;
    \t\tdisplay: inline-block;
\t\t}
\t\tul.uv-activity-brick-wrapper li label {
\t\t\tfont-size: 18px;
\t\t\twidth: 100%;
    \t\tdisplay: inline-block;
\t\t}
\t\t.uv-activity-chart-bottom-row .uv-pannel-body {
\t\t\theight: 450px;
\t\t}
\t\t.kudos-overview {
\t\t\twidth: 40%;
\t\t\tfloat: left;
\t\t\tpadding-right: 10px;
\t\t}
\t\t.recent-notification {
\t\t\twidth: 30%;
\t\t\tfloat: left;
\t\t\tpadding-left: 10px;
\t\t}
\t\t.completion-chart {
\t\t\twidth: 300px;
\t\t\tmargin: 0 auto;
\t\t}
\t\t.progress-meter .background {
\t\t\tfill: #EFEFEF;
\t\t}
\t\t.progress-meter text {
\t\t\tfont-size: 30px;
\t\t}
\t\t.kudos-overview .uv-pannel-body {
\t\t\ttext-align: center;
\t\t\tpadding-top: 50px;
\t\t}
\t\t.kudos-overview .uv-pannel-body label {
\t\t\tmargin-top: 10px;
    \t\tdisplay: inline-block;
\t\t}
\t\t.recent-notification ul {
\t\t\tlist-style: none;
\t\t\tpadding: 0;
\t\t\tmargin: 0;
\t\t\toverflow-y: auto;
\t\t\tmax-height: 400px !important;
\t\t}
\t\t.recent-notification .uv-pannel-body {
\t\t\tpadding: 0;
\t\t}
\t\t.recent-notification ul li {
\t\t\tcolor: #333333;
\t\t\tborder-bottom: solid 1px #D3D3D3;
\t\t\tpadding: 15px 20px;
\t\t}
\t\t.recent-notification ul li:first-child {
\t\t\tborder-top: none;
\t\t}
\t\t.recent-notification ul li:last-child {
\t\t\tborder-bottom: none;
\t\t}
\t\t.recent-notification ul li * {
\t\t\tdisplay: inline-block !important;
\t\t}
\t\t.recent-notification ul li .timeago {
\t\t\tcolor: #9E9E9E;
\t\t\tmargin-top: 5px;
\t\t\tfont-size: 13px;
\t\t}
\t\t.recent-notification label {
\t\t\ttext-align: center;
\t\t\tdisplay: inline-block;
\t\t\twidth: 100%;
\t\t\tpadding-top: 15px;
\t\t\tborder-top: 1px solid #d3d3d3;
\t\t}
\t\t.recent-notification span.uv-notification-message {
\t\t\tfloat: left;
\t\t\twidth: 100%;
\t\t}
\t\t.kudos-count {
\t\t\twidth: 30%;
\t\t\tfloat: left;
\t\t\tpadding-right: 10px;
\t\t\tpadding-left: 10px;
\t\t}
\t\t.kudos-count .uv-pannel-body {
\t\t\tpadding-top: 50px;
\t\t\toverflow-y: auto;
\t\t}
\t\t.kudos-count ul {
\t\t\tlist-style: none;
\t\t\tpadding: 0;
\t\t\tmargin: 0;
\t\t}
\t\t.kudos-count ul li {
\t\t\twidth: 100%;
\t\t\tdisplay: inline-block;
\t\t\tpadding: 15px 0;
\t\t}
\t\t.kudos-count ul li .uv-icon-kudos  {
\t\t\tvertical-align: middle;
\t\t\tmargin-right: 10px;
\t\t}
\t\t.uv-activity-wrapper .uv-activity-chart-col-rt {
\t\t\twidth: 20%;
\t\t\tfloat: left;
\t\t}
\t\t.uv-activity-chart-col-rt ul {
\t\t\tpadding: 0;
\t\t\tmargin: 0;
\t\t\tlist-style: none;
\t\t}
\t\t.uv-activity-chart-col-rt ul li {
\t\t\tmargin-bottom: 10px
\t\t}
\t\t.uv-activity-chart-col-rt ul li span {
\t\t\twidth: 100%;
\t\t\tdisplay: inline-block;
\t\t\tcolor: #6f6f6f;
\t\t}
\t\t.uv-middle {
\t\t\tmargin: 0 auto;
\t\t\tdisplay: inline-block;
\t\t\tmargin-top: 200px;
\t\t\ttext-align: center;
\t\t\twidth: 100%;
\t\t}
\t\t@media screen and (max-width: 1024px) {
\t\t\t.uv-activity-wrapper .uv-activity-chart-col-lt {
\t\t\t\twidth: 100%;
\t\t\t\tpadding: 0;
\t\t\t}
\t\t\t.uv-activity-wrapper .uv-activity-chart-col-rt {
\t\t\t\twidth: 100%;
\t\t\t}
\t\t\t.kudos-overview {
\t\t\t\twidth: 100%;
\t\t\t\tpadding: 0;
\t\t\t}
\t\t\t.kudos-count {
\t\t\t\twidth: 100%;
\t\t\t\tpadding: 0;
\t\t\t}
\t\t\t.recent-notification {
\t\t\t\twidth: 100%;
\t\t\t\tpadding: 0;
\t\t\t}
\t\t\tul.uv-activity-brick-wrapper li {
\t\t\t\twidth: 50%;
\t\t\t\tmargin: 10px 0;
\t\t\t}
\t\t}
\t\t@media screen and (max-width: 768px) {
\t\t\tul.uv-activity-brick-wrapper li {
\t\t\t\twidth: 100%;
\t\t\t}
\t\t}
\t\t@media screen and (max-width: 467px) {
\t\t\t.completion-chart {
\t\t\t\twidth: 100%;
\t\t\t}
\t\t}
\t\tspan.uv-notification-message a:link, span.uv-notification-message a:visited, label a:link, label a:visited {
\t\t\tcolor: #2750C4;
\t\t\tfont-size: 15px;
\t\t}
\t\t.uv-mob-aside {
\t\t\tdisplay: none;
\t\t}
\t\t#btndisclaimer {
  \t\t\tposition: fixed;
  \t\t\tright: 25px;
  \t\t\tbottom: 10px;
\t\t\tbackground: url(\"\");
\t\t}
\t</style>
{% endblock %}

{% block pageContent %}
    <div class=\"uv-area\">
        {{ uvdesk_extensibles.getRegisteredComponent('Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\Dashboard').getHomepageTemplate().render()|raw }}

        <div class=\"uv-copyright\">
            <span class=\"uv-credit-text\">{{ 'Powered by'|trans }} <a href=\"https://www.uvdesk.com\" target=\"_blank\">UVdesk</a></span> | <span class=\"uv-credit-text\">V -1.1.0</span>
        </div>
\t\t<div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
    \t\t<button type=\"submit\" class=\"btn btn-primary btn-md\" id=\"btndisclaimer\" title={{'clear cache'|trans }}><img src=\"https://api.iconify.design/mdi:delete-restore.svg?height=24\" aria-hidden=\"true\"></button>
  \t\t</div>
    </div>

<script>
\t\$('#btndisclaimer').click(function(e){

    \t\$.ajax({
        \turl : \"{{ path('helpdesk_member_cache_clear') }}\",
        \tmethod: 'POST',
        \tdata: \"\",
        \tsuccess : function(response) {
\t\t\t\tapp.appView.renderResponseAlert(response);
        \t},
        \terror: function (xhr) {
            \tapp.appView.renderResponseAlert(xhr);
        \t}
    \t});
    });
</script>
{% endblock %}

{% block footer %}
    {{ parent() }}
{% endblock %}
", "@UVDeskCoreFramework/dashboard.html.twig", "/home/lexcorp.xyz/public_html/uvdesk/vendor/uvdesk/core-framework/Resources/views/dashboard.html.twig");
    }
}
