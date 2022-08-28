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

/* @UVDeskCoreFramework//profile.html.twig */
class __TwigTemplate_8e3f29edd3fa3e5af54af787a56a0eb1302637a103d35a0d73dca8c9f4f175b9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework//profile.html.twig"));

        // line 7
        $context["recaptchaDetail"] = twig_get_attribute($this->env, $this->source, (isset($context["recaptcha_service"]) || array_key_exists("recaptcha_service", $context) ? $context["recaptcha_service"] : (function () { throw new RuntimeError('Variable "recaptcha_service" does not exist.', 7, $this->source); })()), "getRecaptchaDetails", [], "method", false, false, false, 7);
        // line 1
        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskCoreFramework//profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Profile"), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_templateCSS($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "templateCSS"));

        // line 10
        echo "    <style>
        span.uv-app-list-flag-active {
        font-size: 15px;
        color: #FFFFFF;
        background-color: #2ED04C;
        display: inline-block;
        padding: 0px 7px 1px 7px;
        margin-bottom: 2px;
        border-radius: 3px;
        }
        .uv-tab-error {
            border-bottom: 3px solid #FF5656 !important;
        }
        span.uv-app-list-flag-inactive {
        font-size: 15px;
        color: #FFFFFF;
        background-color: #FF5656;
        display: inline-block;
        padding: 0px 7px 1px 7px;
        margin-bottom: 2px;
        border-radius: 3px;
        }
        .token-list {
            padding-left: 20px;
        }
        .add-token {
            position: absolute;
            right: 10px;
        }
        .token-item .uv-hr {
            margin: 25px 0 15px -20px;
        }
        .token-name {
            margin-right: 5px;
        }
        .mar-right-5 {
            margin-right: 5px;
        }
    </style>  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 51
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        // line 52
        echo "    <div class=\"uv-inner-section\">
        ";
        // line 54
        echo "\t\t";
        $context["asideTemplate"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\AsideTemplate";
        // line 55
        echo "\t\t";
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Account";
        // line 56
        echo "
\t\t";
        // line 57
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 57, $this->source); })()), "getRegisteredComponent", [0 => (isset($context["asideTemplate"]) || array_key_exists("asideTemplate", $context) ? $context["asideTemplate"] : (function () { throw new RuntimeError('Variable "asideTemplate" does not exist.', 57, $this->source); })())], "method", false, false, false, 57), "renderSidebar", [0 => (isset($context["asideSidebarReference"]) || array_key_exists("asideSidebarReference", $context) ? $context["asideSidebarReference"] : (function () { throw new RuntimeError('Variable "asideSidebarReference" does not exist.', 57, $this->source); })())], "method", false, false, false, 57);
        echo "

\t\t<div class=\"uv-view ";
        // line 59
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "request", [], "any", false, false, false, 59), "cookies", [], "any", false, false, false, 59) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "request", [], "any", false, false, false, 59), "cookies", [], "any", false, false, false, 59), "get", [0 => "uv-asideView"], "method", false, false, false, 59))) {
            echo "uv-aside-view";
        }
        echo "\">
\t\t\t<h1>";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Profile"), "html", null, true);
        echo "</h1>
            ";
        // line 61
        $context["agentDetails"] = twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 61, $this->source); })()), "getAgentDetailById", [0 => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61)], "method", false, false, false, 61);
        // line 62
        echo "           
            <div class=\"uv-tabs\">
                <ul>
                    <li for=\"profile\" class=\"uv-tab-active\">";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Profile"), "html", null, true);
        echo "</li>
                    ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 66, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_ADMIN"], "method", false, false, false, 66)) {
            // line 67
            echo "                        <li for=\"recaptcha\" class=\"uv-tab\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("reCAPTCHA Setting"), "html", null, true);
            echo "</li>
                    ";
        }
        // line 69
        echo "                </ul>
            </div>
            ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 71));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 72
            echo "                <div class=\"flash-notice\">
                    ";
            // line 73
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 76));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 77
            echo "                <div class=\"flash-notice\">
                    ";
            // line 78
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "            <!--Form-->
           
            <!--Form-->
            <form method=\"post\" action=\"\" id=\"user-form\" enctype=\"multipart/form-data\">
                <div class=\"uv-tab-view uv-tab-view-active\" id=\"profile\">
                    <!-- Profile image -->
                     <div class=\"uv-image-upload-wrapper\">
                        ";
        // line 88
        $context["isHaveImage"] = ((((isset($context["agentDetails"]) || array_key_exists("agentDetails", $context) ? $context["agentDetails"] : (function () { throw new RuntimeError('Variable "agentDetails" does not exist.', 88, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["agentDetails"]) || array_key_exists("agentDetails", $context) ? $context["agentDetails"] : (function () { throw new RuntimeError('Variable "agentDetails" does not exist.', 88, $this->source); })()), "profileImagePath", [], "any", false, false, false, 88))) ? (1) : (0));
        // line 89
        echo "                        <div class=\"uv-image-upload-brick ";
        if ((isset($context["isHaveImage"]) || array_key_exists("isHaveImage", $context) ? $context["isHaveImage"] : (function () { throw new RuntimeError('Variable "isHaveImage" does not exist.', 89, $this->source); })())) {
            echo "uv-on-drop-shadow";
        }
        echo "\" ";
        if ((isset($context["isHaveImage"]) || array_key_exists("isHaveImage", $context) ? $context["isHaveImage"] : (function () { throw new RuntimeError('Variable "isHaveImage" does not exist.', 89, $this->source); })())) {
            echo "style=\"border-color: transparent;\"";
        }
        echo ">
                            <input type=\"file\" name=\"user_form[profileImage]\" id=\"uv-upload-profile\">
                            <div class=\"uv-image-upload-placeholder\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"48px\" height=\"32px\">
                                <path fill-rule=\"evenodd\" d=\"M28.026,26.003 L19.964,26.003 L19.964,17.962 L13.964,17.962 L23.995,8.050 L34.025,17.962 L28.026,17.962 L28.026,26.003 ZM33.557,3.421 C30.806,1.146 27.619,0.008 23.995,0.008 C21.182,0.008 18.588,0.756 16.214,2.252 C13.838,3.749 11.996,5.712 10.683,8.143 C7.683,8.456 5.152,9.749 3.090,12.024 C1.027,14.300 -0.004,16.965 -0.004,20.019 C-0.004,23.324 1.168,26.144 3.512,28.481 C5.855,30.819 8.682,31.988 11.996,31.988 L37.963,31.988 C40.712,31.988 43.072,31.006 45.040,29.042 C47.009,27.079 47.993,24.726 47.993,21.983 C47.993,19.364 47.087,17.106 45.275,15.203 C43.461,13.302 41.275,12.258 38.713,12.071 C38.024,8.580 36.306,5.698 33.557,3.421 Z\"></path>
                                </svg>
                            </div>
                            <img id=\"dynamic-image-upload\" ";
        // line 96
        if ((isset($context["isHaveImage"]) || array_key_exists("isHaveImage", $context) ? $context["isHaveImage"] : (function () { throw new RuntimeError('Variable "isHaveImage" does not exist.', 96, $this->source); })())) {
            echo "src=\"";
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "request", [], "any", false, false, false, 96), "scheme", [], "any", false, false, false, 96) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "request", [], "any", false, false, false, 96), "httpHost", [], "any", false, false, false, 96)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agentDetails"]) || array_key_exists("agentDetails", $context) ? $context["agentDetails"] : (function () { throw new RuntimeError('Variable "agentDetails" does not exist.', 96, $this->source); })()), "profileImagePath", [], "any", false, false, false, 96), "html", null, true);
            echo "\"";
        }
        echo ">
                        </div>
                        <div class=\"uv-image-info-brick\">
                            <span class=\"uv-field-info\">";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upload a Profile Image (100px x 100px)<br> in PNG or JPG Format");
        echo "</span>
                        </div>
                    </div>
                    
                    ";
        // line 103
        if ((isset($context["isHaveImage"]) || array_key_exists("isHaveImage", $context) ? $context["isHaveImage"] : (function () { throw new RuntimeError('Variable "isHaveImage" does not exist.', 103, $this->source); })())) {
            echo "\t\t\t\t\t\t
                        <div class=\"uv-element-block\"> 
                            <label>
                                <div class=\"uv-checkbox\">
                                    <input name=\"removeImage\" id=\"removeImage\" type=\"checkbox\">
                                    <span class=\"uv-checkbox-view\"></span>
                                </div><span class=\"uv-checkbox-label\">";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove profile picture"), "html", null, true);
            echo "</span>
                            </label>
                        </div>
                    ";
        }
        // line 113
        echo "
                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("First Name"), "html", null, true);
        echo "</label>
                        <div class=\"uv-field-block\">
                            <input type=\"text\" name=\"user_form[firstName]\" class=\"uv-field\" value=\"";
        // line 118
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 118, $this->source); })()), "firstName", [], "any", false, false, false, 118)) ? (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 118, $this->source); })()), "firstName", [], "any", false, false, false, 118)) : (twig_get_attribute($this->env, $this->source, (isset($context["agentDetails"]) || array_key_exists("agentDetails", $context) ? $context["agentDetails"] : (function () { throw new RuntimeError('Variable "agentDetails" does not exist.', 118, $this->source); })()), "firstName", [], "any", false, false, false, 118))), "html", null, true);
        echo "\" />
                        </div>
                    </div>

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last Name"), "html", null, true);
        echo "</label>
                        <div class=\"uv-field-block\">
                            <input type=\"text\" name=\"user_form[lastName]\" class=\"uv-field\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 126, $this->source); })()), "lastName", [], "any", false, false, false, 126)) ? (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 126, $this->source); })()), "lastName", [], "any", false, false, false, 126)) : (twig_get_attribute($this->env, $this->source, (isset($context["agentDetails"]) || array_key_exists("agentDetails", $context) ? $context["agentDetails"] : (function () { throw new RuntimeError('Variable "agentDetails" does not exist.', 126, $this->source); })()), "lastName", [], "any", false, false, false, 126))), "html", null, true);
        echo "\" />
                        </div>
                    </div>

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        echo "</label>
                        <div class=\"uv-field-block\">
                            <input type=\"text\" name=\"user_form[email]\" class=\"uv-field\" value=\"";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 134, $this->source); })()), "email", [], "any", false, false, false, 134), "html", null, true);
        echo "\" />
                        </div>
                    </div>

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contact Number"), "html", null, true);
        echo "</label>
                        <div class=\"uv-field-block\">
                            <input type=\"text\" name=\"user_form[contactNumber]\" class=\"uv-field\" value=\"";
        // line 142
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["agentDetails"]) || array_key_exists("agentDetails", $context) ? $context["agentDetails"] : (function () { throw new RuntimeError('Variable "agentDetails" does not exist.', 142, $this->source); })()), "contactNumber", [], "any", false, false, false, 142)) ? (twig_get_attribute($this->env, $this->source, (isset($context["agentDetails"]) || array_key_exists("agentDetails", $context) ? $context["agentDetails"] : (function () { throw new RuntimeError('Variable "agentDetails" does not exist.', 142, $this->source); })()), "contactNumber", [], "any", false, false, false, 142)) : (twig_get_attribute($this->env, $this->source, (isset($context["agentDetails"]) || array_key_exists("agentDetails", $context) ? $context["agentDetails"] : (function () { throw new RuntimeError('Variable "agentDetails" does not exist.', 142, $this->source); })()), "contactNumber", [], "any", false, false, false, 142))), "html", null, true);
        echo "\" />
                        </div>
                    </div>
                   
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Timezone"), "html", null, true);
        echo "</label>
                        <div class=\"uv-field-block\">
                            <select name=\"user_form[timezone]\" class=\"uv-select\">
                                ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["uvdesk_service"]) || array_key_exists("uvdesk_service", $context) ? $context["uvdesk_service"] : (function () { throw new RuntimeError('Variable "uvdesk_service" does not exist.', 150, $this->source); })()), "getTimezones", [], "method", false, false, false, 150));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 151
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["timezone"], "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 151, $this->source); })()), "timezone", [], "any", false, false, false, 151) == $context["timezone"])) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["timezone"], "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "                            </select>
                        </div>
                        <span class=\"uv-field-info\">";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose your default timezone"), "html", null, true);
        echo "</span>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Time Format"), "html", null, true);
        echo "</label>
                        <div class=\"uv-field-block\">
                            <select name=\"user_form[timeformat]\" class=\"uv-select\">
                                ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["uvdesk_service"]) || array_key_exists("uvdesk_service", $context) ? $context["uvdesk_service"] : (function () { throw new RuntimeError('Variable "uvdesk_service" does not exist.', 162, $this->source); })()), "getTimeFormats", [], "method", false, false, false, 162));
        foreach ($context['_seq'] as $context["key"] => $context["timeformat"]) {
            echo "   
                                    <option value=\"";
            // line 163
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 163, $this->source); })()), "timeformat", [], "any", false, false, false, 163) == $context["key"])) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["timeformat"], "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['timeformat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "                            </select>
                        </div>
                        <span class=\"uv-field-info\">";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose your default timezone"), "html", null, true);
        echo "</span>
                    </div>

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Signature"), "html", null, true);
        echo "</label>
                        <div class=\"uv-field-block\">
                            <textarea name=\"user_form[signature]\" class=\"uv-field\">";
        // line 174
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["agentDetails"]) || array_key_exists("agentDetails", $context) ? $context["agentDetails"] : (function () { throw new RuntimeError('Variable "agentDetails" does not exist.', 174, $this->source); })()), "signature", [], "any", false, false, false, 174)) ? (twig_get_attribute($this->env, $this->source, (isset($context["agentDetails"]) || array_key_exists("agentDetails", $context) ? $context["agentDetails"] : (function () { throw new RuntimeError('Variable "agentDetails" does not exist.', 174, $this->source); })()), "signature", [], "any", false, false, false, 174)) : (twig_get_attribute($this->env, $this->source, (isset($context["agentDetails"]) || array_key_exists("agentDetails", $context) ? $context["agentDetails"] : (function () { throw new RuntimeError('Variable "agentDetails" does not exist.', 174, $this->source); })()), "signature", [], "any", false, false, false, 174))), "html", null, true);
        echo "</textarea>
                        </div>
                        <span class=\"uv-field-info\">";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("User signature will be append at the bottom of ticket reply box"), "html", null, true);
        echo "</span>
                    </div>

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
        echo "</label>
                        <div class=\"uv-field-block\">
                            <input type=\"password\" name=\"user_form[password][first]\" class=\"uv-field\"  />
                            <span class=\"uv-field-info\">";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password will remain same if you are not entering something in this field"), "html", null, true);
        echo "</span>
                        </div>
                    </div>

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirm Password"), "html", null, true);
        echo "</label>
                        <div class=\"uv-field-block\">
                            <input type=\"password\" name=\"user_form[password][second]\" class=\"uv-field\"  />
                        </div>
                    </div>

                    <!-- CSRF token Field -->
                    <input type=\"hidden\" name=\"user_form[_token]\" value=\"";
        // line 197
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["uvdesk_service"]) || array_key_exists("uvdesk_service", $context) ? $context["uvdesk_service"] : (function () { throw new RuntimeError('Variable "uvdesk_service" does not exist.', 197, $this->source); })()), "generateCsrfToken", [0 => "user_form"], "method", false, false, false, 197), "html", null, true);
        echo "\"/>
                    <!-- //CSRF token Field -->
                </div>

                ";
        // line 201
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 201, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_ADMIN"], "method", false, false, false, 201)) {
            // line 202
            echo "                    <!--Tab View Recaptcha-->
                    <div class=\"uv-tab-view\" id=\"recaptcha\">
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">";
            // line 205
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("reCAPTCHA Site Key"), "html", null, true);
            echo "</label>
                            <div class=\"uv-field-block\">
                                <input name=\"user_form[recaptcha_site_key]\" class=\"uv-field grammarly-fix-broadcast\" value=\"";
            // line 207
            (((isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 207, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 207, $this->source); })()), "siteKey", [], "any", false, false, false, 207), "html", null, true))) : (print ("")));
            echo "\">
                            </div>
                        </div>
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">";
            // line 211
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("reCAPTCHA Secret key"), "html", null, true);
            echo "</label>
                            <div class=\"uv-field-block\">
                                <input name=\"user_form[recaptcha_secret_key]\" class=\"uv-field grammarly-fix-broadcast\" value=\"";
            // line 213
            (((isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 213, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 213, $this->source); })()), "secretKey", [], "any", false, false, false, 213), "html", null, true))) : (print ("")));
            echo "\">
                            </div>
                        </div>
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">";
            // line 217
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("reCAPTCHA Status"), "html", null, true);
            echo "</label>
                            <div class=\"uv-element-block\">
                                <label>
                                    <div class=\"uv-checkbox\">
                                        <input type=\"checkbox\" name=\"user_form[recaptcha_status]\" value=\"";
            // line 221
            echo ((( !twig_test_empty((isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 221, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 221, $this->source); })()), "isActive", [], "any", false, false, false, 221))) ? (1) : (0));
            echo "\" ";
            echo ((( !twig_test_empty((isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 221, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 221, $this->source); })()), "isActive", [], "any", false, false, false, 221))) ? ("checked") : (""));
            echo ">
                                        <span class=\"uv-checkbox-view\"></span>
                                    </div>
                                    <span class=\"uv-checkbox-label\">";
            // line 224
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("reCAPTCHA is Active"), "html", null, true);
            echo "</span>
                                </label>
                            </div>
                        </div>
                    </div>
                     <!--//Tab View Recaptcha-->
                ";
        }
        // line 231
        echo "
                <div class=\"uv-pop-up-overlay\" id=\"confirm-password\">
                    <div class=\"uv-pop-up-box uv-pop-up-slim\">
                        <span class=\"uv-pop-up-close\"></span>
                        <p>";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enter your current Password to continue"), "html", null, true);
        echo "</p>
                        <div class=\"uv-element-block\">
                            <input type=\"password\" name=\"user_form[oldPassword]\" class=\"uv-field uv-margin-0\">
                        </div>
                        <div class=\"uv-pop-up-actions\">
                            <a href=\"#\" class=\"uv-btn proceed\">";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Continue"), "html", null, true);
        echo "</a>
                        </div>
                    </div>
                </div>
                <!--Tab View Recaptcha-->

                <input class=\"uv-btn\" id=\"uv-save-profile\" href=\"#\" value=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save Changes"), "html", null, true);
        echo "\" type=\"submit\">
            </form>
\t\t</div>
\t</div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 252
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 253
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar UserModel = Backbone.Model.extend({
\t\t\t\tvalidation: {
\t\t\t\t\t'user_form[firstName]': {
                        required: true,
                        msg: '";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "'
                    },
                    'user_form[lastName]': function(value) {
                        if(value != undefined && value !== '') {
                            [{
                                pattern: /^[A-Za-z][A-Za-z]*[\\sA-Za-z]*\$/,
                                msg: '";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field must have characters only"), "html", null, true);
        echo "'
                            },{
                                maxLength:40,
                                msg: '";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Maximum character length is 40"), "html", null, true);
        echo "'
                            }]
                        }
                    },
                    'user_form[email]': [{
                        required: true,
                        msg: '";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "'
                    },{
                        pattern: 'email',
                        msg: '";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email address is invalid"), "html", null, true);
        echo "'
                    }],
                    'user_form[contactNumber]': function(value) {
                        if(value != undefined && value !== '') {
                            if(!value.match('^\\\\s*(?:\\\\+?(\\\\d{1,3}))?[-. (]*(\\\\d{3})[-. )]*(\\\\d{3})[-. ]*(\\\\d{4})(?: *x(\\\\d+))?\\\\s*\$'))
                                return '";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contact number is invalid"), "html", null, true);
        echo "';
                        }
                    },
                    'user_form[password][first]': [{
                        required: true,
                        msg: '";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "'
                        },{
                        pattern: /^(?=(.*[a-zA-Z].*){2,})(?=.*\\d.*)(?=.*\\W.*)[a-zA-Z0-9\\S]{8,}\$/,
                        msg: '";
        // line 291
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("passwords must contain maximum 8 character length, at least two letters (not case sensitive), one number, one special character(space is not allowed.)"), "html", null, true);
        echo "'
                    }],
                    'user_form[password][second]': {
                        equalTo: 'user_form[password][first]',
                        msg: '";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The passwords does not match"), "html", null, true);
        echo "'
                    }
\t\t\t\t}
\t\t\t});

\t\t\tvar UserForm = Backbone.View.extend({
\t\t\t\tevents : {
\t\t\t\t\t'click #uv-save-profile' : \"saveUser\",
\t\t\t\t\t'blur input, textarea': 'formChanged',
                    'click a.select': 'selectAll',
                    'click a.deselect': 'deselectAll',
                    'click #confirm-password .proceed': 'confirmChange',
                },
\t\t\t\tinitialize : function() {
\t\t\t\t\tBackbone.Validation.bind(this);
\t\t\t\t\tvar jsonContext = JSON.parse('";
        // line 310
        echo (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 310, $this->source); })());
        echo "');
\t\t    \t\tfor (var field in jsonContext) {
                        if(field == 'first') {
                            Backbone.Validation.callbacks.invalid(this, \"user_form[password][\" + field + \"]\", jsonContext[field], 'input');
                        } else {
\t\t    \t\t\t    Backbone.Validation.callbacks.invalid(this, \"user_form[\" + field + \"]\", jsonContext[field], 'input');
                        }
\t\t\t\t\t}

                    \$('#notifications .uv-scroll-plank .uv-scroll-block').each(function() {
                        if(!\$(this).find('.uv-element-block').length) {
                            \$(this).parents('.uv-scroll-plank').remove()
                        }
                    })
                },
                confirmChange: function(e) {
                    var target = \$('#confirm-password input[name=\"user_form[oldPassword]\"]');
                    var oldPass = target.val();
                    var that = this;
                    if(oldPass && oldPass.length > 7) {
                        \$('#confirm-password .uv-pop-up-close,#uv-save-profile').trigger('click');
                        target.next('.uv-field-message').remove();
                    } else {                    
                        target.addClass('uv-field-error');
                        if(!(target.next() && target.next().hasClass('uv-field-message')) ) {
                            target.after('<span class=\"uv-field-message\">'+ '";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password must contains 8 Characters"), "html", null, true);
        echo "'+ '</span>');
                        }
                    }
                },
\t\t\t\tformChanged: function(e) {
                    var fieldName = Backbone.\$(e.currentTarget).attr('name');
                    \$(\".uv-tabs li.uv-tab-active\").removeClass('uv-tab-error')
                    if(fieldName == 'user_form[password][second]') {
                        if(\$(\"input[name='user_form[password][first]']\").val().length) {
                            this.model.set(fieldName, Backbone.\$(e.currentTarget).val())
                            this.model.isValid([fieldName])
                        } else {
                            if(\$(\"input[name='user_form[password][second]']\").val().length) {
\t\t    \t\t\t        this.model.set(fieldName, Backbone.\$(e.currentTarget).val())
                                this.model.isValid([fieldName])
                            } else {
\t\t    \t\t\t        Backbone.Validation.callbacks.valid(this, fieldName, 'input');
                            }
                        }
                    } else {
                        this.model.set(fieldName, Backbone.\$(e.currentTarget).val())
                        this.model.isValid([fieldName])
                        if(fieldName == 'user_form[password][first]' && !\$(\"input[name='user_form[password][second]']\").val().length) {
\t\t    \t\t\t    Backbone.Validation.callbacks.valid(this, 'user_form[password][second]', 'input');
                        }
                    }
\t\t\t    },
\t\t\t\tsaveUser : function (e) {
                    e.preventDefault();
                    var data = this.\$el.serializeObject();
                    this.model.set(data);

\t\t\t        if (this.model.isValid(true)) {
                        this.\$el.find('.uv-btn').attr('disabled', 'disabled');
                        this.\$el.submit();
\t\t\t        } else {
                        \$('.uv-field-message').each(function(e) {
                            \$(\".uv-tabs li[for='\" + \$(this).parents('.uv-tab-view').attr('id') + \"']:not(.uv-tab-active)\").addClass('uv-tab-error')

                            if(\$(\".uv-tabs li[for='\" + \$(this).parents('.uv-tab-view').attr('id') + \"']:not(.uv-tab-active)\").length ) {
                                \$('.uv-view').animate({
                                    scrollTop: 0
                                }, 'slow');
                            }
                        });
                    }
\t\t\t\t},
                selectAll: function (e) {
                    e.preventDefault();
                    this.\$(e.currentTarget).parents('.uv-scroll-plank')
                            .find('input')
                            .prop('checked', true)
                },
                deselectAll: function (e) {
                    e.preventDefault();
                    this.\$(e.currentTarget).parents('.uv-scroll-plank')
                            .find('input')
                            .prop('checked', false);
\t\t        },
\t\t\t});

\t\t\tuserForm = new UserForm({
\t\t\t\tel : \$(\"#user-form\"),
\t\t\t\tmodel : new UserModel()
\t\t\t});
\t\t});
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@UVDeskCoreFramework//profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  679 => 335,  651 => 310,  633 => 295,  626 => 291,  620 => 288,  612 => 283,  604 => 278,  598 => 275,  589 => 269,  583 => 266,  574 => 260,  563 => 253,  556 => 252,  543 => 246,  534 => 240,  526 => 235,  520 => 231,  510 => 224,  502 => 221,  495 => 217,  488 => 213,  483 => 211,  476 => 207,  471 => 205,  466 => 202,  464 => 201,  457 => 197,  447 => 190,  438 => 184,  432 => 181,  424 => 176,  419 => 174,  414 => 172,  406 => 167,  402 => 165,  388 => 163,  382 => 162,  376 => 159,  369 => 155,  365 => 153,  350 => 151,  346 => 150,  340 => 147,  332 => 142,  327 => 140,  318 => 134,  313 => 132,  304 => 126,  299 => 124,  290 => 118,  285 => 116,  280 => 113,  273 => 109,  264 => 103,  257 => 99,  246 => 96,  229 => 89,  227 => 88,  218 => 81,  209 => 78,  206 => 77,  201 => 76,  192 => 73,  189 => 72,  185 => 71,  181 => 69,  175 => 67,  173 => 66,  169 => 65,  164 => 62,  162 => 61,  158 => 60,  152 => 59,  147 => 57,  144 => 56,  141 => 55,  138 => 54,  135 => 52,  128 => 51,  82 => 10,  75 => 9,  65 => 4,  58 => 3,  50 => 1,  48 => 7,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}
\t{{ 'Profile'|trans }}
{% endblock %}

{% set recaptchaDetail = recaptcha_service.getRecaptchaDetails() %}

{% block templateCSS %}
    <style>
        span.uv-app-list-flag-active {
        font-size: 15px;
        color: #FFFFFF;
        background-color: #2ED04C;
        display: inline-block;
        padding: 0px 7px 1px 7px;
        margin-bottom: 2px;
        border-radius: 3px;
        }
        .uv-tab-error {
            border-bottom: 3px solid #FF5656 !important;
        }
        span.uv-app-list-flag-inactive {
        font-size: 15px;
        color: #FFFFFF;
        background-color: #FF5656;
        display: inline-block;
        padding: 0px 7px 1px 7px;
        margin-bottom: 2px;
        border-radius: 3px;
        }
        .token-list {
            padding-left: 20px;
        }
        .add-token {
            position: absolute;
            right: 10px;
        }
        .token-item .uv-hr {
            margin: 25px 0 15px -20px;
        }
        .token-name {
            margin-right: 5px;
        }
        .mar-right-5 {
            margin-right: 5px;
        }
    </style>  
{% endblock %}

{% block pageContent %}
    <div class=\"uv-inner-section\">
        {# Append Panel Aside #}
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Account' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}

\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t<h1>{{ 'Profile'|trans }}</h1>
            {%  set agentDetails = user_service.getAgentDetailById(user.id) %}
           
            <div class=\"uv-tabs\">
                <ul>
                    <li for=\"profile\" class=\"uv-tab-active\">{{ 'Edit Profile'|trans }}</li>
                    {% if user_service.isAccessAuthorized('ROLE_ADMIN') %}
                        <li for=\"recaptcha\" class=\"uv-tab\">{{ 'reCAPTCHA Setting'|trans }}</li>
                    {% endif %}
                </ul>
            </div>
            {% for message in app.flashes('warning') %}
                <div class=\"flash-notice\">
                    {{ message }}
                </div>
            {% endfor %}
            {% for message in app.flashes('success') %}
                <div class=\"flash-notice\">
                    {{ message }}
                </div>
            {% endfor %}
            <!--Form-->
           
            <!--Form-->
            <form method=\"post\" action=\"\" id=\"user-form\" enctype=\"multipart/form-data\">
                <div class=\"uv-tab-view uv-tab-view-active\" id=\"profile\">
                    <!-- Profile image -->
                     <div class=\"uv-image-upload-wrapper\">
                        {% set isHaveImage =  agentDetails and agentDetails.profileImagePath ? 1 : 0 %}
                        <div class=\"uv-image-upload-brick {% if isHaveImage %}uv-on-drop-shadow{% endif %}\" {% if isHaveImage %}style=\"border-color: transparent;\"{% endif %}>
                            <input type=\"file\" name=\"user_form[profileImage]\" id=\"uv-upload-profile\">
                            <div class=\"uv-image-upload-placeholder\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"48px\" height=\"32px\">
                                <path fill-rule=\"evenodd\" d=\"M28.026,26.003 L19.964,26.003 L19.964,17.962 L13.964,17.962 L23.995,8.050 L34.025,17.962 L28.026,17.962 L28.026,26.003 ZM33.557,3.421 C30.806,1.146 27.619,0.008 23.995,0.008 C21.182,0.008 18.588,0.756 16.214,2.252 C13.838,3.749 11.996,5.712 10.683,8.143 C7.683,8.456 5.152,9.749 3.090,12.024 C1.027,14.300 -0.004,16.965 -0.004,20.019 C-0.004,23.324 1.168,26.144 3.512,28.481 C5.855,30.819 8.682,31.988 11.996,31.988 L37.963,31.988 C40.712,31.988 43.072,31.006 45.040,29.042 C47.009,27.079 47.993,24.726 47.993,21.983 C47.993,19.364 47.087,17.106 45.275,15.203 C43.461,13.302 41.275,12.258 38.713,12.071 C38.024,8.580 36.306,5.698 33.557,3.421 Z\"></path>
                                </svg>
                            </div>
                            <img id=\"dynamic-image-upload\" {% if isHaveImage %}src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}{{ agentDetails.profileImagePath }}\"{% endif %}>
                        </div>
                        <div class=\"uv-image-info-brick\">
                            <span class=\"uv-field-info\">{{ 'Upload a Profile Image (100px x 100px)<br> in PNG or JPG Format'|trans|raw }}</span>
                        </div>
                    </div>
                    
                    {% if isHaveImage %}\t\t\t\t\t\t
                        <div class=\"uv-element-block\"> 
                            <label>
                                <div class=\"uv-checkbox\">
                                    <input name=\"removeImage\" id=\"removeImage\" type=\"checkbox\">
                                    <span class=\"uv-checkbox-view\"></span>
                                </div><span class=\"uv-checkbox-label\">{{ 'Remove profile picture'|trans }}</span>
                            </label>
                        </div>
                    {% endif %}

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'First Name'|trans }}</label>
                        <div class=\"uv-field-block\">
                            <input type=\"text\" name=\"user_form[firstName]\" class=\"uv-field\" value=\"{{ user.firstName ?: agentDetails.firstName }}\" />
                        </div>
                    </div>

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Last Name'|trans }}</label>
                        <div class=\"uv-field-block\">
                            <input type=\"text\" name=\"user_form[lastName]\" class=\"uv-field\" value=\"{{ user.lastName ?:agentDetails.lastName }}\" />
                        </div>
                    </div>

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Email'|trans }}</label>
                        <div class=\"uv-field-block\">
                            <input type=\"text\" name=\"user_form[email]\" class=\"uv-field\" value=\"{{ user.email}}\" />
                        </div>
                    </div>

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Contact Number'|trans }}</label>
                        <div class=\"uv-field-block\">
                            <input type=\"text\" name=\"user_form[contactNumber]\" class=\"uv-field\" value=\"{{ agentDetails.contactNumber ?: agentDetails.contactNumber }}\" />
                        </div>
                    </div>
                   
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Timezone'|trans }}</label>
                        <div class=\"uv-field-block\">
                            <select name=\"user_form[timezone]\" class=\"uv-select\">
                                {% for timezone in uvdesk_service.getTimezones() %}
                                    <option value=\"{{ timezone }}\" {% if user.timezone == timezone %}selected{% endif %}>{{ timezone }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <span class=\"uv-field-info\">{{ \"Choose your default timezone\"|trans }}</span>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Time Format'|trans }}</label>
                        <div class=\"uv-field-block\">
                            <select name=\"user_form[timeformat]\" class=\"uv-select\">
                                {% for key, timeformat in uvdesk_service.getTimeFormats() %}   
                                    <option value=\"{{ key }}\" {% if user.timeformat == key %}selected{% endif %}>{{ timeformat }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <span class=\"uv-field-info\">{{ \"Choose your default timezone\"|trans }}</span>
                    </div>

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Signature'|trans }}</label>
                        <div class=\"uv-field-block\">
                            <textarea name=\"user_form[signature]\" class=\"uv-field\">{{ agentDetails.signature ?: agentDetails.signature }}</textarea>
                        </div>
                        <span class=\"uv-field-info\">{{ 'User signature will be append at the bottom of ticket reply box'|trans }}</span>
                    </div>

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Password'|trans }}</label>
                        <div class=\"uv-field-block\">
                            <input type=\"password\" name=\"user_form[password][first]\" class=\"uv-field\"  />
                            <span class=\"uv-field-info\">{{ 'Password will remain same if you are not entering something in this field'|trans }}</span>
                        </div>
                    </div>

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Confirm Password'|trans }}</label>
                        <div class=\"uv-field-block\">
                            <input type=\"password\" name=\"user_form[password][second]\" class=\"uv-field\"  />
                        </div>
                    </div>

                    <!-- CSRF token Field -->
                    <input type=\"hidden\" name=\"user_form[_token]\" value=\"{{ uvdesk_service.generateCsrfToken('user_form') }}\"/>
                    <!-- //CSRF token Field -->
                </div>

                {% if user_service.isAccessAuthorized('ROLE_ADMIN') %}
                    <!--Tab View Recaptcha-->
                    <div class=\"uv-tab-view\" id=\"recaptcha\">
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">{{ 'reCAPTCHA Site Key'|trans }}</label>
                            <div class=\"uv-field-block\">
                                <input name=\"user_form[recaptcha_site_key]\" class=\"uv-field grammarly-fix-broadcast\" value=\"{{ recaptchaDetail ? recaptchaDetail.siteKey : '' }}\">
                            </div>
                        </div>
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">{{ 'reCAPTCHA Secret key'|trans }}</label>
                            <div class=\"uv-field-block\">
                                <input name=\"user_form[recaptcha_secret_key]\" class=\"uv-field grammarly-fix-broadcast\" value=\"{{ recaptchaDetail ? recaptchaDetail.secretKey : ''}}\">
                            </div>
                        </div>
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">{{'reCAPTCHA Status'|trans}}</label>
                            <div class=\"uv-element-block\">
                                <label>
                                    <div class=\"uv-checkbox\">
                                        <input type=\"checkbox\" name=\"user_form[recaptcha_status]\" value=\"{{ recaptchaDetail is not empty and recaptchaDetail.isActive ? 1 : 0 }}\" {{ recaptchaDetail is not empty and recaptchaDetail.isActive ? 'checked' : '' }}>
                                        <span class=\"uv-checkbox-view\"></span>
                                    </div>
                                    <span class=\"uv-checkbox-label\">{{'reCAPTCHA is Active'|trans}}</span>
                                </label>
                            </div>
                        </div>
                    </div>
                     <!--//Tab View Recaptcha-->
                {% endif %}

                <div class=\"uv-pop-up-overlay\" id=\"confirm-password\">
                    <div class=\"uv-pop-up-box uv-pop-up-slim\">
                        <span class=\"uv-pop-up-close\"></span>
                        <p>{{ 'Enter your current Password to continue'|trans }}</p>
                        <div class=\"uv-element-block\">
                            <input type=\"password\" name=\"user_form[oldPassword]\" class=\"uv-field uv-margin-0\">
                        </div>
                        <div class=\"uv-pop-up-actions\">
                            <a href=\"#\" class=\"uv-btn proceed\">{{ 'Continue'|trans }}</a>
                        </div>
                    </div>
                </div>
                <!--Tab View Recaptcha-->

                <input class=\"uv-btn\" id=\"uv-save-profile\" href=\"#\" value=\"{{ 'Save Changes'|trans }}\" type=\"submit\">
            </form>
\t\t</div>
\t</div>
    
{% endblock %}
{% block footer %}
\t{{ parent() }}
\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar UserModel = Backbone.Model.extend({
\t\t\t\tvalidation: {
\t\t\t\t\t'user_form[firstName]': {
                        required: true,
                        msg: '{{ \"This field is mandatory\"|trans }}'
                    },
                    'user_form[lastName]': function(value) {
                        if(value != undefined && value !== '') {
                            [{
                                pattern: /^[A-Za-z][A-Za-z]*[\\sA-Za-z]*\$/,
                                msg: '{{ \"This field must have characters only\"|trans }}'
                            },{
                                maxLength:40,
                                msg: '{{ \"Maximum character length is 40\"|trans }}'
                            }]
                        }
                    },
                    'user_form[email]': [{
                        required: true,
                        msg: '{{ \"This field is mandatory\"|trans }}'
                    },{
                        pattern: 'email',
                        msg: '{{ \"Email address is invalid\"|trans }}'
                    }],
                    'user_form[contactNumber]': function(value) {
                        if(value != undefined && value !== '') {
                            if(!value.match('^\\\\s*(?:\\\\+?(\\\\d{1,3}))?[-. (]*(\\\\d{3})[-. )]*(\\\\d{3})[-. ]*(\\\\d{4})(?: *x(\\\\d+))?\\\\s*\$'))
                                return '{{ \"Contact number is invalid\"|trans }}';
                        }
                    },
                    'user_form[password][first]': [{
                        required: true,
                        msg: '{{ \"This field is mandatory\"|trans }}'
                        },{
                        pattern: /^(?=(.*[a-zA-Z].*){2,})(?=.*\\d.*)(?=.*\\W.*)[a-zA-Z0-9\\S]{8,}\$/,
                        msg: '{{ \"passwords must contain maximum 8 character length, at least two letters (not case sensitive), one number, one special character(space is not allowed.)\"|trans }}'
                    }],
                    'user_form[password][second]': {
                        equalTo: 'user_form[password][first]',
                        msg: '{{ \"The passwords does not match\"|trans }}'
                    }
\t\t\t\t}
\t\t\t});

\t\t\tvar UserForm = Backbone.View.extend({
\t\t\t\tevents : {
\t\t\t\t\t'click #uv-save-profile' : \"saveUser\",
\t\t\t\t\t'blur input, textarea': 'formChanged',
                    'click a.select': 'selectAll',
                    'click a.deselect': 'deselectAll',
                    'click #confirm-password .proceed': 'confirmChange',
                },
\t\t\t\tinitialize : function() {
\t\t\t\t\tBackbone.Validation.bind(this);
\t\t\t\t\tvar jsonContext = JSON.parse('{{ errors|raw }}');
\t\t    \t\tfor (var field in jsonContext) {
                        if(field == 'first') {
                            Backbone.Validation.callbacks.invalid(this, \"user_form[password][\" + field + \"]\", jsonContext[field], 'input');
                        } else {
\t\t    \t\t\t    Backbone.Validation.callbacks.invalid(this, \"user_form[\" + field + \"]\", jsonContext[field], 'input');
                        }
\t\t\t\t\t}

                    \$('#notifications .uv-scroll-plank .uv-scroll-block').each(function() {
                        if(!\$(this).find('.uv-element-block').length) {
                            \$(this).parents('.uv-scroll-plank').remove()
                        }
                    })
                },
                confirmChange: function(e) {
                    var target = \$('#confirm-password input[name=\"user_form[oldPassword]\"]');
                    var oldPass = target.val();
                    var that = this;
                    if(oldPass && oldPass.length > 7) {
                        \$('#confirm-password .uv-pop-up-close,#uv-save-profile').trigger('click');
                        target.next('.uv-field-message').remove();
                    } else {                    
                        target.addClass('uv-field-error');
                        if(!(target.next() && target.next().hasClass('uv-field-message')) ) {
                            target.after('<span class=\"uv-field-message\">'+ '{{ \"Password must contains 8 Characters\"|trans }}'+ '</span>');
                        }
                    }
                },
\t\t\t\tformChanged: function(e) {
                    var fieldName = Backbone.\$(e.currentTarget).attr('name');
                    \$(\".uv-tabs li.uv-tab-active\").removeClass('uv-tab-error')
                    if(fieldName == 'user_form[password][second]') {
                        if(\$(\"input[name='user_form[password][first]']\").val().length) {
                            this.model.set(fieldName, Backbone.\$(e.currentTarget).val())
                            this.model.isValid([fieldName])
                        } else {
                            if(\$(\"input[name='user_form[password][second]']\").val().length) {
\t\t    \t\t\t        this.model.set(fieldName, Backbone.\$(e.currentTarget).val())
                                this.model.isValid([fieldName])
                            } else {
\t\t    \t\t\t        Backbone.Validation.callbacks.valid(this, fieldName, 'input');
                            }
                        }
                    } else {
                        this.model.set(fieldName, Backbone.\$(e.currentTarget).val())
                        this.model.isValid([fieldName])
                        if(fieldName == 'user_form[password][first]' && !\$(\"input[name='user_form[password][second]']\").val().length) {
\t\t    \t\t\t    Backbone.Validation.callbacks.valid(this, 'user_form[password][second]', 'input');
                        }
                    }
\t\t\t    },
\t\t\t\tsaveUser : function (e) {
                    e.preventDefault();
                    var data = this.\$el.serializeObject();
                    this.model.set(data);

\t\t\t        if (this.model.isValid(true)) {
                        this.\$el.find('.uv-btn').attr('disabled', 'disabled');
                        this.\$el.submit();
\t\t\t        } else {
                        \$('.uv-field-message').each(function(e) {
                            \$(\".uv-tabs li[for='\" + \$(this).parents('.uv-tab-view').attr('id') + \"']:not(.uv-tab-active)\").addClass('uv-tab-error')

                            if(\$(\".uv-tabs li[for='\" + \$(this).parents('.uv-tab-view').attr('id') + \"']:not(.uv-tab-active)\").length ) {
                                \$('.uv-view').animate({
                                    scrollTop: 0
                                }, 'slow');
                            }
                        });
                    }
\t\t\t\t},
                selectAll: function (e) {
                    e.preventDefault();
                    this.\$(e.currentTarget).parents('.uv-scroll-plank')
                            .find('input')
                            .prop('checked', true)
                },
                deselectAll: function (e) {
                    e.preventDefault();
                    this.\$(e.currentTarget).parents('.uv-scroll-plank')
                            .find('input')
                            .prop('checked', false);
\t\t        },
\t\t\t});

\t\t\tuserForm = new UserForm({
\t\t\t\tel : \$(\"#user-form\"),
\t\t\t\tmodel : new UserModel()
\t\t\t});
\t\t});
\t</script>
{% endblock %}", "@UVDeskCoreFramework//profile.html.twig", "/home/support.telenet.com.np/public_html/vendor/uvdesk/core-framework/Resources/views/profile.html.twig");
    }
}
