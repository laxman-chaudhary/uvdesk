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

/* @UVDeskCoreFramework/resetPassword.html.twig */
class __TwigTemplate_e9ddb6aef198fd79305bd435a49f2c3e2bc60a30b1a2938c25b129109df794c6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/resetPassword.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/resetPassword.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskCoreFramework/resetPassword.html.twig", 1);
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

        echo "Reset Password";
        
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

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_pageWrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageWrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageWrapper"));

        // line 24
        echo "    <div class=\"uv-large-box-plank\">
\t\t<div class=\"uv-large-box-rt\">
\t\t\t<div class=\"uv-center-box uv-text-center\">
                <form action=\"\" method=\"post\" id=\"resetPasswordForm\">
                    <div class=\"uv-adjacent-center\">
                        <h1>";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset Password"), "html", null, true);
        echo "</h1>
                        <p>";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enter your new password below to update your login credentials"), "html", null, true);
        echo "</p>
                        <div class=\"uv-adjacent-form\">
                            <div class=\"uv-adjacent-element-block\">
                                <label>";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
        echo "</label>
                                <div class=\"uv-max-field\">
                                    <input class=\"uv-field\" type=\"password\" name=\"password\">
                                </div>
                            </div>

                            <div class=\"uv-adjacent-element-block\">
                                <label>";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirm Password"), "html", null, true);
        echo "</label>
                                <div class=\"uv-max-field\">
                                    <input class=\"uv-field\" type=\"password\" name=\"confirmPassword\">
                                </div>
                            </div>

                            <button class=\"uv-btn\">";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save Password"), "html", null, true);
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
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/images/uvdesk-logo-symbol.svg"), "html", null, true);
        echo "\">
\t\t\t\t</a>
            </div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 63
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 64
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
\t\t\$(function () {
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

\t\t\tvar ResetPasswordModel = Backbone.Model.extend({
                validation: {
                    'password': [{
                        required: true,
                        msg: '";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "'
                        },{
                        pattern: /^(?=(.*[a-zA-Z].*){2,})(?=.*\\d.*)(?=.*\\W.*)[a-zA-Z0-9\\S]{8,}\$/,
                        msg: '";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password must contain minimum 8 character length, at least two letters (not case sensitive), one number, one special character(space is not allowed)."), "html", null, true);
        echo "'
                    }],
                    'confirmPassword': [{
                        required: true,
                        msg: '";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "'
                    },{
                        equalTo: 'password',
                        msg: '";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The passwords does not match"), "html", null, true);
        echo "'
                    }]
                }
\t\t\t});

\t\t\tvar ResetPasswordForm = Backbone.View.extend({
                events: {
                    'blur input': 'formChanegd',
                    'click .uv-btn': 'submit'
                },
                initialize: function () {
                    Backbone.Validation.bind(this);

\t\t\t\t\t";
        // line 108
        if (twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", true, true, false, 108)) {
            // line 109
            echo "                        app.appView.renderResponseAlert({'alertClass': 'danger', 'alertMessage': \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 109, $this->source); })()), "messageKey", [], "any", false, false, false, 109), "html", null, true);
            echo "\"})
                    ";
        }
        // line 111
        echo "                },
                formChanegd: function(e) {
\t\t\t    \tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t    \tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t    },
\t\t\t\tsubmit: function (e) {
\t\t\t\t\te.preventDefault();

\t\t\t\t\tvar data = this.\$el.serializeObject();
                    this.model.set(data);
\t\t\t\t\tif(this.model.isValid(true)){
\t\t\t\t\t\tthis.\$el.submit();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});

\t\t    var view = new ResetPasswordForm({
\t\t        el: '#resetPasswordForm',
\t\t        model: new ResetPasswordModel()
\t\t    });
\t\t});
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@UVDeskCoreFramework/resetPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 111,  262 => 109,  260 => 108,  244 => 95,  238 => 92,  231 => 88,  225 => 85,  200 => 64,  190 => 63,  174 => 56,  161 => 46,  152 => 40,  142 => 33,  136 => 30,  132 => 29,  125 => 24,  115 => 23,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}Reset Password{% endblock %}

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
                <form action=\"\" method=\"post\" id=\"resetPasswordForm\">
                    <div class=\"uv-adjacent-center\">
                        <h1>{{ \"Reset Password\" |trans}}</h1>
                        <p>{{ \"Enter your new password below to update your login credentials\" |trans}}</p>
                        <div class=\"uv-adjacent-form\">
                            <div class=\"uv-adjacent-element-block\">
                                <label>{{ \"Password\" |trans}}</label>
                                <div class=\"uv-max-field\">
                                    <input class=\"uv-field\" type=\"password\" name=\"password\">
                                </div>
                            </div>

                            <div class=\"uv-adjacent-element-block\">
                                <label>{{ \"Confirm Password\" |trans}}</label>
                                <div class=\"uv-max-field\">
                                    <input class=\"uv-field\" type=\"password\" name=\"confirmPassword\">
                                </div>
                            </div>

                            <button class=\"uv-btn\">{{ 'Save Password'|trans }}</button>
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
    <script type=\"text/javascript\">
\t\t\$(function () {
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

\t\t\tvar ResetPasswordModel = Backbone.Model.extend({
                validation: {
                    'password': [{
                        required: true,
                        msg: '{{ \"This field is mandatory\"|trans }}'
                        },{
                        pattern: /^(?=(.*[a-zA-Z].*){2,})(?=.*\\d.*)(?=.*\\W.*)[a-zA-Z0-9\\S]{8,}\$/,
                        msg: '{{ \"Password must contain minimum 8 character length, at least two letters (not case sensitive), one number, one special character(space is not allowed).\"|trans }}'
                    }],
                    'confirmPassword': [{
                        required: true,
                        msg: '{{\"This field is mandatory\"|trans }}'
                    },{
                        equalTo: 'password',
                        msg: '{{ \"The passwords does not match\"|trans }}'
                    }]
                }
\t\t\t});

\t\t\tvar ResetPasswordForm = Backbone.View.extend({
                events: {
                    'blur input': 'formChanegd',
                    'click .uv-btn': 'submit'
                },
                initialize: function () {
                    Backbone.Validation.bind(this);

\t\t\t\t\t{% if error.messageKey is defined %}
                        app.appView.renderResponseAlert({'alertClass': 'danger', 'alertMessage': \"{{ error.messageKey }}\"})
                    {% endif %}
                },
                formChanegd: function(e) {
\t\t\t    \tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t    \tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t    },
\t\t\t\tsubmit: function (e) {
\t\t\t\t\te.preventDefault();

\t\t\t\t\tvar data = this.\$el.serializeObject();
                    this.model.set(data);
\t\t\t\t\tif(this.model.isValid(true)){
\t\t\t\t\t\tthis.\$el.submit();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});

\t\t    var view = new ResetPasswordForm({
\t\t        el: '#resetPasswordForm',
\t\t        model: new ResetPasswordModel()
\t\t    });
\t\t});
\t</script>
{% endblock %}", "@UVDeskCoreFramework/resetPassword.html.twig", "/home/lexcorp.xyz/public_html/uvdesk/vendor/uvdesk/core-framework/Resources/views/resetPassword.html.twig");
    }
}
