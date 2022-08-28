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

/* @UVDeskSupportCenter/Themes/cookiePolicy.html.twig */
class __TwigTemplate_628e1302be209319db256a34c0a752271a2d18fc24cba8ab740462f17f1abf92 extends Template
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
        echo "<div class=\"uv-pop-up-overlay uv-no-error-success-icon\" id=\"cookie-dialog-modal\" style=\"display:none;\">
    <div class=\"uv-pop-up-box uv-pop-up-wide\">
        <span class=\"uv-pop-up-close\"></span>
        <h2 style=\"text-align: center; margin-bottom: 30px;\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cookie Usage Policy"), "html", null, true);
        echo "</h2>
        <div class=\"uv-element-block\" style=\"line-height: 1.8em;\">
            <p>";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Some of our site pages utilize %cookies% and other tracking technologies. A %cookie% is a small text file that may be used, for example, to collect information about site activity. Some cookies and other technologies may serve to recall personal information previously indicated by a site user. You may block cookies, or delete existing cookies, by adjusting the appropriate setting on your browser. Please consult the %help% menu of your browser to learn how to do this. If you block or delete %cookies% you may find the usefulness of our site to be impaired.", ["%cookie%" => (("<em>" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie")) . "</em>"), "%cookies%" => (("<em>" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookies")) . "</em>"), "%help%" => (("<b>" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("HELP")) . "</b>")]);
        echo "</p>
            <p>";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To know more about how our privacy policy works, please %websiteLink%.", ["%websiteLink%" => (("<a href=\"https://www.uvdesk.com/en/privacy-policy/\" target=\"_blank\">" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("visit our website")) . "</a>")]);
        echo "</p>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@UVDeskSupportCenter/Themes/cookiePolicy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@UVDeskSupportCenter/Themes/cookiePolicy.html.twig", "/home/support.telenet.com.np/public_html/vendor/uvdesk/support-center-bundle/Resources/views/Themes/cookiePolicy.html.twig");
    }
}
