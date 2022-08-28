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

/* @UVDeskSupportCenter/Templates/footer.html.twig */
class __TwigTemplate_e1359083bd1d2f91c8286cd0e463900364d16bdb5ab4a630cc3401265c40b656 extends Template
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
        echo "<div class=\"uv-container\">
\t<div class=\"uv-footer\">
\t\t<div class=\"uv-footer-wrapper\">
\t\t\t<div class=\"uv-footer-lt\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase_folder");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Home"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"uv-open-popup\" data-target=\"cookie-dialog-modal\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cookie Policy"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "footerLinks", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["footerLink"]) {
            // line 9
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["footerLink"], "url", [], "any", false, false, false, 9), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["footerLink"], "label", [], "any", false, false, false, 9), "html", null, true);
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footerLink'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"uv-footer-rt\">
\t\t\t\t<!-- Google Translation  -->
\t\t\t\t<div id=\"google_translate_element\"></div>
\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\tfunction googleTranslateElementInit() {
\t\t\t\t\t\t\tnew google.translate.TranslateElement({layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
\t\t\t\t\t\t\t\$(document).click(function(e) {
\t\t\t\t\t\t\t\tif(\$('.goog-te-menu-frame.skiptranslate').is(':visible') ) {
\t\t\t\t\t\t\t\t\t\$('.skiptranslate.goog-te-gadget').addClass('uv-no-pointer-events');
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\$('.skiptranslate.goog-te-gadget').removeClass('uv-no-pointer-events');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\$(\$('.goog-te-menu-frame.skiptranslate').contents()[0], window).find('body').bind(\"focusout\", function(e) {
\t\t\t\t\t\t\t\t\t\$('.skiptranslate.goog-te-gadget').removeClass('uv-no-pointer-events');
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t</script>
\t\t\t\t\t<script type=\"text/javascript\" src=\"https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\" async=\"async\"></script>
       \t\t\t\t<!-- Google Translation  -->
\t\t\t\t</div>
\t\t\t</div>
    <div class=\"uv-footer-credit\">
      <span class=\"uv-credit-text\">";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Powered by"), "html", null, true);
        echo " <a href=\"https://www.uvdesk.com\" target=\"_blank\">UVdesk</a></span>
    </div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@UVDeskSupportCenter/Templates/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 36,  69 => 11,  58 => 9,  54 => 8,  50 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@UVDeskSupportCenter/Templates/footer.html.twig", "/home/support.telenet.com.np/public_html/vendor/uvdesk/support-center-bundle/Resources/views/Templates/footer.html.twig");
    }
}
