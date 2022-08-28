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

/* @UVDeskCoreFramework//login.html.twig */
class __TwigTemplate_8a4197676a5a671006727c7831714f4ebf31dd41d62c5d5c150000f6f3b316cc extends Template
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
            'pageWrapper' => [$this, 'block_pageWrapper'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework//login.html.twig"));

        // line 5
        $context["recaptchaDetail"] = twig_get_attribute($this->env, $this->source, (isset($context["recaptcha_service"]) || array_key_exists("recaptcha_service", $context) ? $context["recaptcha_service"] : (function () { throw new RuntimeError('Variable "recaptcha_service" does not exist.', 5, $this->source); })()), "getRecaptchaDetails", [], "method", false, false, false, 5);
        // line 1
        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskCoreFramework//login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_templateCSS($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "templateCSS"));

        // line 8
        echo "<style>
    #loginForm h1 {
        font-size: 28px;
        color: #6F6F6F;
        font-weight: 600;
        margin: 0px 0px 10px 0px;
    }

    .forgot-password-cta {
        position: absolute;
        font-size: 15px !important;
        right: 0px;
        top: 0px;
    }
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_pageWrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageWrapper"));

        // line 26
        echo "    <div class=\"uv-large-box-plank\">
\t\t<div class=\"uv-large-box-rt\">
\t\t\t<div class=\"uv-center-box uv-text-center\">
                <form action=\"\" method=\"post\" id=\"loginForm\">
                    <div class=\"uv-adjacent-center\">
                        <h1>";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Log in to your"), "html", null, true);
        echo " <span class=\"uv-brand\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), "html", null, true);
        echo "</span></h1>
                        <p>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enter your credentials below to gain access to your helpdesk account."), "html", null, true);
        echo "</p>
                        <div class=\"uv-adjacent-form\">
                            <div class=\"uv-adjacent-element-block\">
                                <label>";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        echo "</label>
                                <div class=\"uv-max-field\">
                                    <input type=\"email\" name=\"_username\">
                                </div>
                            </div>
                            <div class=\"uv-adjacent-element-block\" style=\"position: relative;\">
                                <label>";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
        echo "</label>
                                <div class=\"uv-max-field\">
                                    <a class=\"forgot-password-cta\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_forgot_account_password");
        echo "\" tabindex=\"-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forgot Password?"), "html", null, true);
        echo "</a>
                                    <input type=\"password\"  name=\"_password\">
                                </div>
                            </div>

                            <div class=\"uv-adjacent-element-block\">
                                <label>
                                    <div class=\"uv-checkbox\">
                                        <input type=\"checkbox\" name=\"_remember_me\" checked>
                                        <span class=\"uv-checkbox-view\"></span>
                                    </div>
                                    <span class=\"uv-checkbox-label\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Keep me logged in"), "html", null, true);
        echo "</span>
                                </label>
                            </div>
                            <div class=\"uv-adjacent-element-block\">
                                ";
        // line 58
        if (((isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 58, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 58, $this->source); })()), "isActive", [], "any", false, false, false, 58) == true))) {
            // line 59
            echo "                                    <div class=\"clearfix\"></div>
                                    <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 60, $this->source); })()), "siteKey", [], "any", false, false, false, 60), "html", null, true);
            echo "\"></div>
                                    <div class=\"clearfix\"></div>
                                ";
        } else {
            // line 63
            echo "                                    <!-- Recaptcha will not support -->
                                ";
        }
        // line 65
        echo "                            </div>
                            <button class=\"uv-btn\">";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign In"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </div>
            </form>
\t\t</div>

\t\t<div class=\"uv-large-box-lt\">
\t\t\t<div class=\"uv-center-box uv-text-center\">
\t\t\t\t<a href=\"https://www.uvdesk.com\">
                    <img alt=\"UVdesk\" title=\"UVdesk\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/images/uvdesk-logo-symbol.svg"), "html", null, true);
        echo "\">
\t\t\t\t</a>
            </div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 83
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 84
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "

    ";
        // line 86
        if (((isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 86, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 86, $this->source); })()), "isActive", [], "any", false, false, false, 86) == true))) {
            // line 87
            echo "        <script src='https://www.google.com/recaptcha/api.js'></script>
    ";
        }
        // line 89
        echo "
    <script type=\"text/javascript\">
        \$(function () {
             _.extend(Backbone.Validation.callbacks, {
                valid : function (view, attr, selector) {
                    var \$el = view.\$('[name=\"' + attr + '\"]');
                    \$el.removeClass('uv-field-error');
                    \$el.parents('.uv-adjacent-element-block').find('.uv-field-message').remove();
                },
                invalid : function (view, attr, error, selector) {
                    var \$el = view.\$('[name=\"' + attr + '\"]');
                    \$el.addClass('uv-field-error');
                    \$el.parents('.uv-adjacent-element-block').find('.uv-field-message').remove();
                    \$el.parents('.uv-adjacent-element-block').append(\"<span class='uv-field-message'>\" + error + \"</span>\");
                }
            });

            var LoginModel = Backbone.Model.extend({
                validation: {
                    '_username': [{
                        required: true,
                        msg: '";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "'
                    },{
                        pattern: 'email',
                        msg: '";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This is not a valid email address"), "html", null, true);
        echo "'
                    }],
                    '_password': [{
                        required: true,
                        msg: '";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "'
                    },{
                        minLength: 8,
                        msg: '";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password must contains 8 Characters"), "html", null, true);
        echo "'
                    }],
                    ";
        // line 122
        if (((isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 122, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 122, $this->source); })()), "isActive", [], "any", false, false, false, 122) == true))) {
            // line 123
            echo "                        'g-recaptcha-response' : {
                            fn: function(value) {
                                if(grecaptcha.getResponse().length > 0)
                                    return false;
                                else
                                    return true;
                            },
                            msg : '";
            // line 130
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please select CAPTCHA"), "html", null, true);
            echo "'
                        }
\t\t\t\t    ";
        }
        // line 133
        echo "                }
            });

            var LoginForm = Backbone.View.extend({
                events: {
                    'click .uv-btn': 'submit',
                    'blur input': 'formChanegd'
                },
                initialize: function () {
                    Backbone.Validation.bind(this);
                    ";
        // line 143
        if (twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", true, true, false, 143)) {
            // line 144
            echo "                        app.appView.renderResponseAlert({'alertClass': 'danger', 'alertMessage': '";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 144, $this->source); })()), "messageKey", [], "any", false, false, false, 144)), "html", null, true);
            echo "'})
                    ";
        }
        // line 146
        echo "                },
                formChanegd: function(e) {
\t\t\t    \tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t    \tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t    },
                submit: function (e) {
                    e.preventDefault();

                    var data = this.\$el.serializeObject();
                    this.model.set(data);
                    if(this.model.isValid(true)){
                        this.\$el.submit();
                    }
                }
            });

            var Login = new LoginForm({
\t\t        el: \$('#loginForm'),
\t\t        model: new LoginModel()
\t\t    });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@UVDeskCoreFramework//login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 146,  304 => 144,  302 => 143,  290 => 133,  284 => 130,  275 => 123,  273 => 122,  268 => 120,  262 => 117,  255 => 113,  249 => 110,  226 => 89,  222 => 87,  220 => 86,  214 => 84,  207 => 83,  194 => 76,  181 => 66,  178 => 65,  174 => 63,  168 => 60,  165 => 59,  163 => 58,  156 => 54,  140 => 43,  135 => 41,  126 => 35,  120 => 32,  114 => 31,  107 => 26,  100 => 25,  78 => 8,  71 => 7,  58 => 3,  50 => 1,  48 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}Login{% endblock %}

{% set recaptchaDetail = recaptcha_service.getRecaptchaDetails() %}

{% block templateCSS %}
<style>
    #loginForm h1 {
        font-size: 28px;
        color: #6F6F6F;
        font-weight: 600;
        margin: 0px 0px 10px 0px;
    }

    .forgot-password-cta {
        position: absolute;
        font-size: 15px !important;
        right: 0px;
        top: 0px;
    }
</style>
{% endblock %}

{% block pageWrapper %}
    <div class=\"uv-large-box-plank\">
\t\t<div class=\"uv-large-box-rt\">
\t\t\t<div class=\"uv-center-box uv-text-center\">
                <form action=\"\" method=\"post\" id=\"loginForm\">
                    <div class=\"uv-adjacent-center\">
                        <h1>{{ \"Log in to your\"|trans }} <span class=\"uv-brand\">{{ website.name }}</span></h1>
                        <p>{{ \"Enter your credentials below to gain access to your helpdesk account.\"|trans }}</p>
                        <div class=\"uv-adjacent-form\">
                            <div class=\"uv-adjacent-element-block\">
                                <label>{{ \"Email\" |trans}}</label>
                                <div class=\"uv-max-field\">
                                    <input type=\"email\" name=\"_username\">
                                </div>
                            </div>
                            <div class=\"uv-adjacent-element-block\" style=\"position: relative;\">
                                <label>{{ \"Password\" |trans}}</label>
                                <div class=\"uv-max-field\">
                                    <a class=\"forgot-password-cta\" href=\"{{ path('helpdesk_forgot_account_password') }}\" tabindex=\"-1\">{{ \"Forgot Password?\" |trans}}</a>
                                    <input type=\"password\"  name=\"_password\">
                                </div>
                            </div>

                            <div class=\"uv-adjacent-element-block\">
                                <label>
                                    <div class=\"uv-checkbox\">
                                        <input type=\"checkbox\" name=\"_remember_me\" checked>
                                        <span class=\"uv-checkbox-view\"></span>
                                    </div>
                                    <span class=\"uv-checkbox-label\">{{ \"Keep me logged in\" |trans}}</span>
                                </label>
                            </div>
                            <div class=\"uv-adjacent-element-block\">
                                {% if recaptchaDetail and recaptchaDetail.isActive == true %}
                                    <div class=\"clearfix\"></div>
                                    <div class=\"g-recaptcha\" data-sitekey=\"{{ recaptchaDetail.siteKey }}\"></div>
                                    <div class=\"clearfix\"></div>
                                {% else %}
                                    <!-- Recaptcha will not support -->
                                {% endif %}
                            </div>
                            <button class=\"uv-btn\">{{ 'Sign In'|trans }}</button>
                        </div>
                    </div>
                </div>
            </form>
\t\t</div>

\t\t<div class=\"uv-large-box-lt\">
\t\t\t<div class=\"uv-center-box uv-text-center\">
\t\t\t\t<a href=\"https://www.uvdesk.com\">
                    <img alt=\"UVdesk\" title=\"UVdesk\" src=\"{{ asset('bundles/uvdeskcoreframework/images/uvdesk-logo-symbol.svg') }}\">
\t\t\t\t</a>
            </div>
\t\t</div>
\t</div>
{% endblock %}

{% block footer %}
    {{ parent() }}

    {% if recaptchaDetail and recaptchaDetail.isActive == true %}
        <script src='https://www.google.com/recaptcha/api.js'></script>
    {% endif %}

    <script type=\"text/javascript\">
        \$(function () {
             _.extend(Backbone.Validation.callbacks, {
                valid : function (view, attr, selector) {
                    var \$el = view.\$('[name=\"' + attr + '\"]');
                    \$el.removeClass('uv-field-error');
                    \$el.parents('.uv-adjacent-element-block').find('.uv-field-message').remove();
                },
                invalid : function (view, attr, error, selector) {
                    var \$el = view.\$('[name=\"' + attr + '\"]');
                    \$el.addClass('uv-field-error');
                    \$el.parents('.uv-adjacent-element-block').find('.uv-field-message').remove();
                    \$el.parents('.uv-adjacent-element-block').append(\"<span class='uv-field-message'>\" + error + \"</span>\");
                }
            });

            var LoginModel = Backbone.Model.extend({
                validation: {
                    '_username': [{
                        required: true,
                        msg: '{{ \"This field is mandatory\"|trans }}'
                    },{
                        pattern: 'email',
                        msg: '{{ \"This is not a valid email address\"|trans }}'
                    }],
                    '_password': [{
                        required: true,
                        msg: '{{\"This field is mandatory\"|trans }}'
                    },{
                        minLength: 8,
                        msg: '{{\"Password must contains 8 Characters\"|trans }}'
                    }],
                    {% if recaptchaDetail and recaptchaDetail.isActive == true %}
                        'g-recaptcha-response' : {
                            fn: function(value) {
                                if(grecaptcha.getResponse().length > 0)
                                    return false;
                                else
                                    return true;
                            },
                            msg : '{{ \"Please select CAPTCHA\"|trans }}'
                        }
\t\t\t\t    {% endif %}
                }
            });

            var LoginForm = Backbone.View.extend({
                events: {
                    'click .uv-btn': 'submit',
                    'blur input': 'formChanegd'
                },
                initialize: function () {
                    Backbone.Validation.bind(this);
                    {% if error.messageKey is defined %}
                        app.appView.renderResponseAlert({'alertClass': 'danger', 'alertMessage': '{{ error.messageKey|trans}}'})
                    {% endif %}
                },
                formChanegd: function(e) {
\t\t\t    \tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t    \tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t    },
                submit: function (e) {
                    e.preventDefault();

                    var data = this.\$el.serializeObject();
                    this.model.set(data);
                    if(this.model.isValid(true)){
                        this.\$el.submit();
                    }
                }
            });

            var Login = new LoginForm({
\t\t        el: \$('#loginForm'),
\t\t        model: new LoginModel()
\t\t    });
        });
    </script>
{% endblock %}
", "@UVDeskCoreFramework//login.html.twig", "/home/support.telenet.com.np/public_html/vendor/uvdesk/core-framework/Resources/views/login.html.twig");
    }
}
