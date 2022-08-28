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

/* @UVDeskSupportCenter/Templates/layout.html.twig */
class __TwigTemplate_b4a9e81fc9b36e197a10bfb183208c58d573edb03792fdf4e8b78adab8aab36e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'canonical' => [$this, 'block_canonical'],
            'title' => [$this, 'block_title'],
            'metaDescription' => [$this, 'block_metaDescription'],
            'metaKeywords' => [$this, 'block_metaKeywords'],
            'ogtitle' => [$this, 'block_ogtitle'],
            'ogcanonical' => [$this, 'block_ogcanonical'],
            'twtitle' => [$this, 'block_twtitle'],
            'head' => [$this, 'block_head'],
            'templateCSS' => [$this, 'block_templateCSS'],
            'header' => [$this, 'block_header'],
            'tabHeader' => [$this, 'block_tabHeader'],
            'wrapper' => [$this, 'block_wrapper'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Templates/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Templates/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "getLocale", [], "method", false, false, false, 2), "html", null, true);
        echo "\">
    <head>
        <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdesksupportcenter/css/knowledgebase.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css\">
        
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.13.1/underscore-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.4.0/backbone-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.validation/0.11.5/backbone-validation-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.paginator/2.0.8/backbone.paginator.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js\"></script>\t
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js\"></script>

        
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdesksupportcenter/js/_common.js"), "html", null, true);
        echo "\"></script>
        <script src = \"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdesksupportcenter/js/uikit.front.js"), "html", null, true);
        echo "\"></script>
        <script src = \"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/js/dropdown.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 20
        $context["websiteDetails"] = twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 20, $this->source); })()), "getWebsiteDetails", [0 => "knowledgebase"], "method", false, false, false, 20);
        // line 21
        echo "        ";
        $context["websiteConfiguration"] = twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 21, $this->source); })()), "getWebsiteConfiguration", [0 => "knowledgebase"], "method", false, false, false, 21);
        // line 22
        echo "        ";
        $context["themeTemplate"] = twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 22, $this->source); })()), "getWebsiteView", [], "method", false, false, false, 22);
        // line 23
        echo "
        ";
        // line 24
        $context["canonical"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "server", [], "any", false, false, false, 24), "get", [0 => "REQUEST_SCHEME"], "method", false, false, false, 24) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "server", [], "any", false, false, false, 24), "get", [0 => "HTTP_HOST"], "method", false, false, false, 24)) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "server", [], "any", false, false, false, 24), "get", [0 => "PATH_INFO"], "method", false, false, false, 24));
        // line 25
        echo "        <link rel=\"canonical\" href=\"";
        $this->displayBlock('canonical', $context, $blocks);
        echo "\">

        ";
        // line 27
        if (((isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 27, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 27, $this->source); })()), "favicon", [], "any", false, false, false, 27))) {
            // line 28
            echo "            <link rel=\"icon\" sizes=\"16x16\" href=\"";
            ((twig_get_attribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 28, $this->source); })()), "favicon", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 28, $this->source); })()), "favicon", [], "any", false, false, false, 28), "html", null, true))) : (print (null)));
            echo "\" />
        ";
        } else {
            // line 30
            echo "            <link rel=\"icon\" sizes=\"16x16\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
            echo "\" />
        ";
        }
        // line 32
        echo "
        ";
        // line 33
        if ((isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 33, $this->source); })())) {
            // line 34
            echo "            <title>";
            $this->displayBlock('title', $context, $blocks);
            echo "</title>
            ";
            // line 35
            if (twig_get_attribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 35, $this->source); })()), "metaDescription", [], "any", false, false, false, 35)) {
                // line 36
                echo "                <meta name=\"description\" content=\"";
                $this->displayBlock('metaDescription', $context, $blocks);
                echo "\"/>
            ";
            }
            // line 38
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 38, $this->source); })()), "metaKeywords", [], "any", false, false, false, 38)) {
                // line 39
                echo "                <meta name=\"keywords\" content=\"";
                $this->displayBlock('metaKeywords', $context, $blocks);
                echo "\"/>
            ";
            }
            // line 41
            echo "
            <meta http-equiv=\"Content-Type\" content=\"text/html;\" charset=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
            echo "\"/>
            <meta name=\"robots\" content=\"INDEX,FOLLOW\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

            <meta property=\"og:locale\" content=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "request", [], "any", false, false, false, 46), "getLocale", [], "method", false, false, false, 46), "html", null, true);
            echo "\" />
            <meta property=\"og:type\" content=\"article\" />
            <meta property=\"og:title\" content=\"";
            // line 48
            $this->displayBlock('ogtitle', $context, $blocks);
            echo "\" />
            <meta property=\"og:url\" content=\"";
            // line 49
            $this->displayBlock('ogcanonical', $context, $blocks);
            echo "\" />
            <meta property=\"og:site_name\" content=\"";
            // line 50
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, false, 50)) ? (twig_get_attribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, false, 50)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Knowledge Base"))), "html", null, true);
            echo "\" />
            ";
            // line 51
            if (twig_get_attribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 51, $this->source); })()), "logo", [], "any", false, false, false, 51)) {
                // line 52
                echo "                <meta property=\"og:image\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 52, $this->source); })()), "logo", [], "any", false, false, false, 52), "html", null, true);
                echo "\" />
            ";
            }
            // line 54
            echo "            <meta name=\"twitter:card\" content=\"summary\" />
            <meta name=\"twitter:title\" content=\"";
            // line 55
            $this->displayBlock('twtitle', $context, $blocks);
            echo "\" />

            <link rel='dns-prefetch' href='//www.google.com' />
            <link rel='dns-prefetch' href='//fonts.googleapis.com' />
            <link rel='dns-prefetch' href='//fonts.gstatic.com' />
            <link rel='dns-prefetch' href='//cdn.uvdesk.com' />
        ";
        }
        // line 62
        echo "
        ";
        // line 63
        if ((isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 63, $this->source); })())) {
            // line 64
            echo "            ";
            $this->displayBlock('head', $context, $blocks);
            // line 67
            echo "        ";
        }
        // line 68
        echo "
        ";
        // line 69
        if ((isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 69, $this->source); })())) {
            // line 70
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["uvdesk_service"]) || array_key_exists("uvdesk_service", $context) ? $context["uvdesk_service"] : (function () { throw new RuntimeError('Variable "uvdesk_service" does not exist.', 70, $this->source); })()), "isDarkSkin", [0 => twig_get_attribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 70, $this->source); })()), "brandColor", [], "any", false, false, false, 70)], "method", false, false, false, 70)) {
                // line 71
                echo "                ";
                $this->loadTemplate("@UVDeskSupportCenter/Knowledgebase/darkSkin.html.twig", "@UVDeskSupportCenter/Templates/layout.html.twig", 71)->display($context);
                // line 72
                echo "            ";
            } else {
                // line 73
                echo "                ";
                $this->loadTemplate("@UVDeskSupportCenter/Knowledgebase/lightSkin.html.twig", "@UVDeskSupportCenter/Templates/layout.html.twig", 73)->display($context);
                // line 74
                echo "            ";
            }
            // line 75
            echo "        ";
        }
        // line 76
        echo "
        ";
        // line 77
        $this->displayBlock('templateCSS', $context, $blocks);
        // line 78
        echo "    </head>

    ";
        // line 80
        $context["bodyClass"] = "";
        // line 81
        echo "    ";
        $context["bodySkinClass"] = "";
        // line 82
        echo "   
    <body class=\"";
        // line 83
        echo twig_escape_filter($this->env, (((isset($context["bodySkinClass"]) || array_key_exists("bodySkinClass", $context) ? $context["bodySkinClass"] : (function () { throw new RuntimeError('Variable "bodySkinClass" does not exist.', 83, $this->source); })()) . " ") . (isset($context["bodyClass"]) || array_key_exists("bodyClass", $context) ? $context["bodyClass"] : (function () { throw new RuntimeError('Variable "bodyClass" does not exist.', 83, $this->source); })())), "html", null, true);
        echo "\">
        ";
        // line 84
        $context["broadcastMessage"] = twig_get_attribute($this->env, $this->source, (isset($context["uvdesk_service"]) || array_key_exists("uvdesk_service", $context) ? $context["uvdesk_service"] : (function () { throw new RuntimeError('Variable "uvdesk_service" does not exist.', 84, $this->source); })()), "getValidBroadcastMessage", [0 => ((twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "broadcastMessage", [], "any", true, true, false, 84)) ? (twig_get_attribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 84, $this->source); })()), "broadcastMessage", [], "any", false, false, false, 84)) : (""))], "method", false, false, false, 84);
        // line 85
        echo "        ";
        if ((isset($context["broadcastMessage"]) || array_key_exists("broadcastMessage", $context) ? $context["broadcastMessage"] : (function () { throw new RuntimeError('Variable "broadcastMessage" does not exist.', 85, $this->source); })())) {
            // line 86
            echo "            <div class=\"uv-kb-info\" id=\"uv-kb-info-broadcast\">
                <p>";
            // line 87
            ((twig_get_attribute($this->env, $this->source, ($context["broadcastMessage"] ?? null), "message", [], "any", true, true, false, 87)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["broadcastMessage"]) || array_key_exists("broadcastMessage", $context) ? $context["broadcastMessage"] : (function () { throw new RuntimeError('Variable "broadcastMessage" does not exist.', 87, $this->source); })()), "message", [], "any", false, false, false, 87), "html", null, true))) : (print ("")));
            echo "</p>
                <span class=\"uv-kb-info-remove\" onclick=\"document.getElementById('uv-kb-info-broadcast').remove()\"></span>
            </div>
        ";
        }
        // line 91
        echo "
        <div class=\"uv-notifications-wrapper\">
            ";
        // line 93
        if ((twig_get_attribute($this->env, $this->source, (isset($context["uvdesk_service"]) || array_key_exists("uvdesk_service", $context) ? $context["uvdesk_service"] : (function () { throw new RuntimeError('Variable "uvdesk_service" does not exist.', 93, $this->source); })()), "requestHeadersSent", [], "method", false, false, false, 93) == false)) {
            // line 94
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "session", [], "any", false, false, false, 94), "flashbag", [], "any", false, false, false, 94), "get", [0 => "success"], "method", false, false, false, 94));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 95
                echo "                    <div class=\"uv-notification page-load uv-success\">
                        <span class=\"uv-notification-close\"></span>
                        <p>";
                // line 97
                echo $context["flashMessage"];
                echo "</p>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "session", [], "any", false, false, false, 100), "flashbag", [], "any", false, false, false, 100), "get", [0 => "warning"], "method", false, false, false, 100));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 101
                echo "                    <div class=\"uv-notification page-load uv-error\">
                        <span class=\"uv-notification-close\"></span>
                        <p>";
                // line 103
                echo $context["flashMessage"];
                echo "</p>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "            ";
        }
        // line 107
        echo "            
            <noscript>
                <div class=\"uv-notification uv-error\">
                    <p>";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your browser does not support JavaScript or You disabled JavaScript, Please enable those !", [], "messages");
        echo "</p>
                </div>
                <style>.uv-loader-view {display: none;}</style>
            </noscript>
        </div>


        ";
        // line 117
        $this->displayBlock('header', $context, $blocks);
        // line 121
        echo "
        ";
        // line 122
        $this->loadTemplate("@UVDeskSupportCenter/Templates/breadcrumbs.html.twig", "@UVDeskSupportCenter/Templates/layout.html.twig", 122)->display($context);
        // line 123
        echo "
        ";
        // line 124
        $this->displayBlock('tabHeader', $context, $blocks);
        // line 126
        echo "        ";
        $this->displayBlock('wrapper', $context, $blocks);
        // line 153
        echo "
        ";
        // line 154
        $this->displayBlock('footer', $context, $blocks);
        // line 197
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_canonical($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "canonical"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "canonical"));

        echo twig_escape_filter($this->env, (isset($context["canonical"]) || array_key_exists("canonical", $context) ? $context["canonical"] : (function () { throw new RuntimeError('Variable "canonical" does not exist.', 25, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34)) ? (twig_get_attribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Knowledge Base"))), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_metaDescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescription"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescription"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 36, $this->source); })()), "metaDescription", [], "any", false, false, false, 36), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_metaKeywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaKeywords"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaKeywords"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 39, $this->source); })()), "metaKeywords", [], "any", false, false, false, 39), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_ogtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogtitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogtitle"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("HelpDesk", [], "messages");
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 48, $this->source); })()), "name", [], "any", false, false, false, 48)) ? (twig_get_attribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 48, $this->source); })()), "name", [], "any", false, false, false, 48)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Knowledge Base"))), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_ogcanonical($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogcanonical"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogcanonical"));

        echo twig_escape_filter($this->env, (isset($context["canonical"]) || array_key_exists("canonical", $context) ? $context["canonical"] : (function () { throw new RuntimeError('Variable "canonical" does not exist.', 49, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_twtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "twtitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "twtitle"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("HelpDesk", [], "messages");
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 55, $this->source); })()), "name", [], "any", false, false, false, 55)) ? (twig_get_attribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 55, $this->source); })()), "name", [], "any", false, false, false, 55)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Knowledge Base"))), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 65
        echo "                ";
        $this->loadTemplate("@UVDeskSupportCenter/Knowledgebase/websiteSettings.html.twig", "@UVDeskSupportCenter/Templates/layout.html.twig", 65)->display($context);
        // line 66
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_templateCSS($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "templateCSS"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "templateCSS"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 117
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 118
        echo "         
            ";
        // line 119
        $this->loadTemplate("@UVDeskSupportCenter/Templates/header.html.twig", "@UVDeskSupportCenter/Templates/layout.html.twig", 119)->display($context);
        // line 120
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 124
    public function block_tabHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabHeader"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabHeader"));

        // line 125
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 126
    public function block_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper"));

        // line 127
        echo "            <div class=\"uv-body\">
                <div class=\"uv-container\">
                    ";
        // line 129
        $this->displayBlock('body', $context, $blocks);
        // line 151
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 129
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 130
        echo "                        <div class=\"uv-cta-wrapper\">
                            <div class=\"uv-cta-lt\">
                                <svg
                                xmlns=\"http://www.w3.org/2000/svg\"
                                xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                width=\"60px\" height=\"60px\">
                                <path fill-rule=\"evenodd\"  fill=\"rgb(124, 116, 241)\"
                                d=\"M57.000,12.000 L51.000,12.000 L50.984,38.993 L12.000,39.000 L12.000,45.000 C12.000,46.649 13.351,48.000 15.000,48.000 L48.000,48.000 L60.000,60.000 L60.000,15.000 C60.000,13.351 58.649,12.000 57.000,12.000 ZM45.000,30.000 L45.000,3.000 C45.000,1.351 43.649,0.000 42.000,0.000 L3.000,0.000 C1.351,0.000 -0.000,1.351 -0.000,3.000 L-0.000,45.000 L12.000,33.000 L42.000,33.000 C43.649,33.000 45.000,31.649 45.000,30.000 Z\"/>
                                </svg>
                            </div>
                            <div class=\"uv-cta-rt\">
                                <h2>";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unable to find an answer?"), "html", null, true);
        echo "</h2>
                                <p>";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Looking for anything specific article which resides in general queries? Just browse the various relevant folders and categories and then you will find the desired article."), "html", null, true);
        echo "
                                </p>
            \t\t\t\t\t";
        // line 144
        if ((array_key_exists("websiteConfiguration", $context) && twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "ticketCreateOption", [], "any", true, true, false, 144))) {
            // line 145
            echo "                                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_create_ticket");
            echo "\" class=\"uv-btn uv-margin-top-15\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contact Us"), "html", null, true);
            echo "</a>
                                ";
        }
        // line 147
        echo "                            </div>
                        </div>
                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 154
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 155
        echo "            ";
        $this->loadTemplate("@UVDeskSupportCenter/Templates/footer.html.twig", "@UVDeskSupportCenter/Templates/layout.html.twig", 155)->display($context);
        // line 156
        echo "
            ";
        // line 157
        $this->loadTemplate("@UVDeskSupportCenter/Templates/pagination.html.twig", "@UVDeskSupportCenter/Templates/layout.html.twig", 157)->display($context);
        // line 158
        echo "
            <!-- Loader Template-->
            <script type=\"text/template\" id=\"loader-tmp\">
                <div class=\"uv-loader\">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </script>
            <!-- Loader Template-->

            <!-- Full View Loader Template-->
            <script type=\"text/template\" id=\"full-view-loader\">
                <div class=\"uv-loader-view\">
                    <div class=\"uv-loader\">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </script>
            <!-- //Full View Loader Template-->

            <!-- Notification Template -->
            <script type=\"text/template\" id=\"notification-template\">
                <div class=\"uv-notification <% if(alertClass == 'danger') { %>uv-error<% } else { %> <%= 'uv-' + alertClass %> <% } %>\">
                    <span class=\"uv-notification-close\"></span>
                    <p><%= alertMessage %> </p>
                </div>
            </script>
            <script type=\"text/javascript\">
                var warningResponse = {
                    'alertClass' : 'danger',
                    'alertMessage' : '";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error : Something went wrong, please try again later"), "html", null, true);
        echo "',
                };
            </script>

            ";
        // line 195
        $this->loadTemplate("@UVDeskSupportCenter/Themes/cookiePolicy.html.twig", "@UVDeskSupportCenter/Templates/layout.html.twig", 195)->display($context);
        // line 196
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@UVDeskSupportCenter/Templates/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  731 => 196,  729 => 195,  722 => 191,  687 => 158,  685 => 157,  682 => 156,  679 => 155,  669 => 154,  656 => 147,  648 => 145,  646 => 144,  641 => 142,  637 => 141,  624 => 130,  614 => 129,  603 => 151,  601 => 129,  597 => 127,  587 => 126,  577 => 125,  567 => 124,  557 => 120,  555 => 119,  552 => 118,  542 => 117,  524 => 77,  514 => 66,  511 => 65,  501 => 64,  480 => 55,  461 => 49,  440 => 48,  421 => 39,  402 => 36,  382 => 34,  363 => 25,  351 => 197,  349 => 154,  346 => 153,  343 => 126,  341 => 124,  338 => 123,  336 => 122,  333 => 121,  331 => 117,  321 => 110,  316 => 107,  313 => 106,  304 => 103,  300 => 101,  295 => 100,  286 => 97,  282 => 95,  277 => 94,  275 => 93,  271 => 91,  264 => 87,  261 => 86,  258 => 85,  256 => 84,  252 => 83,  249 => 82,  246 => 81,  244 => 80,  240 => 78,  238 => 77,  235 => 76,  232 => 75,  229 => 74,  226 => 73,  223 => 72,  220 => 71,  217 => 70,  215 => 69,  212 => 68,  209 => 67,  206 => 64,  204 => 63,  201 => 62,  191 => 55,  188 => 54,  182 => 52,  180 => 51,  176 => 50,  172 => 49,  168 => 48,  163 => 46,  156 => 42,  153 => 41,  147 => 39,  144 => 38,  138 => 36,  136 => 35,  131 => 34,  129 => 33,  126 => 32,  120 => 30,  114 => 28,  112 => 27,  106 => 25,  104 => 24,  101 => 23,  98 => 22,  95 => 21,  93 => 20,  88 => 18,  84 => 17,  80 => 16,  65 => 4,  60 => 2,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html lang=\"{{app.request.getLocale()}}\">
    <head>
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/uvdesksupportcenter/css/knowledgebase.css') }}\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css\">
        
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.13.1/underscore-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.4.0/backbone-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.validation/0.11.5/backbone-validation-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.paginator/2.0.8/backbone.paginator.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js\"></script>\t
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js\"></script>

        
        <script src=\"{{ asset('bundles/uvdesksupportcenter/js/_common.js') }}\"></script>
        <script src = \"{{ asset('bundles/uvdesksupportcenter/js/uikit.front.js') }}\"></script>
        <script src = \"{{ asset('bundles/uvdeskcoreframework/js/dropdown.js') }}\"></script>

        {% set websiteDetails = user_service.getWebsiteDetails('knowledgebase') %}
        {% set websiteConfiguration = user_service.getWebsiteConfiguration('knowledgebase') %}
        {% set themeTemplate = user_service.getWebsiteView() %}

        {% set canonical = app.request.server.get('REQUEST_SCHEME')~'://'~app.request.server.get('HTTP_HOST')~app.request.server.get('PATH_INFO') %}
        <link rel=\"canonical\" href=\"{% block canonical %}{{canonical}}{% endblock %}\">

        {% if websiteDetails and (websiteDetails.favicon) %}
            <link rel=\"icon\" sizes=\"16x16\" href=\"{{websiteDetails.favicon ? websiteDetails.favicon : null}}\" />
        {% else %}
            <link rel=\"icon\" sizes=\"16x16\" href=\"{{ asset('favicon.ico') }}\" />
        {% endif %}

        {% if websiteDetails %}
            <title>{% block title %}{{ websiteDetails.name ? websiteDetails.name : 'Knowledge Base'|trans }} {% endblock %}</title>
            {% if websiteConfiguration.metaDescription %}
                <meta name=\"description\" content=\"{% block metaDescription %}{{ websiteConfiguration.metaDescription }}{% endblock %}\"/>
            {% endif %}
            {% if websiteConfiguration.metaKeywords %}
                <meta name=\"keywords\" content=\"{% block metaKeywords %}{{ websiteConfiguration.metaKeywords }}{% endblock %}\"/>
            {% endif %}

            <meta http-equiv=\"Content-Type\" content=\"text/html;\" charset=\"{{ _charset }}\"/>
            <meta name=\"robots\" content=\"INDEX,FOLLOW\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

            <meta property=\"og:locale\" content=\"{{app.request.getLocale()}}\" />
            <meta property=\"og:type\" content=\"article\" />
            <meta property=\"og:title\" content=\"{% block ogtitle %}{% trans %}HelpDesk{% endtrans %} {{ websiteDetails.name ? websiteDetails.name : 'Knowledge Base'|trans }}{% endblock %}\" />
            <meta property=\"og:url\" content=\"{% block ogcanonical %}{{canonical}}{% endblock %}\" />
            <meta property=\"og:site_name\" content=\"{{ websiteDetails.name ? websiteDetails.name : 'Knowledge Base'|trans }}\" />
            {% if websiteDetails.logo %}
                <meta property=\"og:image\" content=\"{{ websiteDetails.logo }}\" />
            {% endif %}
            <meta name=\"twitter:card\" content=\"summary\" />
            <meta name=\"twitter:title\" content=\"{% block twtitle %}{% trans %}HelpDesk{% endtrans %} {{ websiteDetails.name ? websiteDetails.name : 'Knowledge Base'|trans }}{% endblock %}\" />

            <link rel='dns-prefetch' href='//www.google.com' />
            <link rel='dns-prefetch' href='//fonts.googleapis.com' />
            <link rel='dns-prefetch' href='//fonts.gstatic.com' />
            <link rel='dns-prefetch' href='//cdn.uvdesk.com' />
        {% endif %}

        {% if websiteConfiguration %}
            {% block head %}
                {% include \"@UVDeskSupportCenter/Knowledgebase/websiteSettings.html.twig\" %}
            {% endblock %}
        {% endif %}

        {% if websiteConfiguration %}
            {% if uvdesk_service.isDarkSkin(websiteConfiguration.brandColor) %}
                {% include '@UVDeskSupportCenter/Knowledgebase/darkSkin.html.twig' %}
            {% else %}
                {% include '@UVDeskSupportCenter/Knowledgebase/lightSkin.html.twig' %}
            {% endif %}
        {% endif %}

        {% block templateCSS %}{% endblock %}
    </head>

    {% set bodyClass = '' %}
    {% set bodySkinClass = '' %}
   
    <body class=\"{{ bodySkinClass ~ ' ' ~ bodyClass }}\">
        {% set broadcastMessage = uvdesk_service.getValidBroadcastMessage(websiteConfiguration.broadcastMessage is defined ? websiteConfiguration.broadcastMessage : '') %}
        {% if broadcastMessage %}
            <div class=\"uv-kb-info\" id=\"uv-kb-info-broadcast\">
                <p>{{ broadcastMessage.message is defined ? broadcastMessage.message : '' }}</p>
                <span class=\"uv-kb-info-remove\" onclick=\"document.getElementById('uv-kb-info-broadcast').remove()\"></span>
            </div>
        {% endif %}

        <div class=\"uv-notifications-wrapper\">
            {% if uvdesk_service.requestHeadersSent() == false %}
                {% for flashMessage in app.session.flashbag.get('success') %}
                    <div class=\"uv-notification page-load uv-success\">
                        <span class=\"uv-notification-close\"></span>
                        <p>{{ flashMessage|raw }}</p>
                    </div>
                {% endfor %}
                {% for flashMessage in app.session.flashbag.get('warning') %}
                    <div class=\"uv-notification page-load uv-error\">
                        <span class=\"uv-notification-close\"></span>
                        <p>{{ flashMessage|raw }}</p>
                    </div>
                {% endfor %}
            {% endif %}
            
            <noscript>
                <div class=\"uv-notification uv-error\">
                    <p>{% trans %}Your browser does not support JavaScript or You disabled JavaScript, Please enable those !{% endtrans %}</p>
                </div>
                <style>.uv-loader-view {display: none;}</style>
            </noscript>
        </div>


        {% block header %}
         
            {% include \"@UVDeskSupportCenter/Templates/header.html.twig\" %}
        {% endblock %}

        {% include \"@UVDeskSupportCenter/Templates/breadcrumbs.html.twig\" %}

        {% block tabHeader %}
        {% endblock %}
        {% block wrapper %}
            <div class=\"uv-body\">
                <div class=\"uv-container\">
                    {% block body %}
                        <div class=\"uv-cta-wrapper\">
                            <div class=\"uv-cta-lt\">
                                <svg
                                xmlns=\"http://www.w3.org/2000/svg\"
                                xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                width=\"60px\" height=\"60px\">
                                <path fill-rule=\"evenodd\"  fill=\"rgb(124, 116, 241)\"
                                d=\"M57.000,12.000 L51.000,12.000 L50.984,38.993 L12.000,39.000 L12.000,45.000 C12.000,46.649 13.351,48.000 15.000,48.000 L48.000,48.000 L60.000,60.000 L60.000,15.000 C60.000,13.351 58.649,12.000 57.000,12.000 ZM45.000,30.000 L45.000,3.000 C45.000,1.351 43.649,0.000 42.000,0.000 L3.000,0.000 C1.351,0.000 -0.000,1.351 -0.000,3.000 L-0.000,45.000 L12.000,33.000 L42.000,33.000 C43.649,33.000 45.000,31.649 45.000,30.000 Z\"/>
                                </svg>
                            </div>
                            <div class=\"uv-cta-rt\">
                                <h2>{{\"Unable to find an answer?\"|trans}}</h2>
                                <p>{{\"Looking for anything specific article which resides in general queries? Just browse the various relevant folders and categories and then you will find the desired article.\"|trans}}
                                </p>
            \t\t\t\t\t{% if websiteConfiguration is defined and websiteConfiguration.ticketCreateOption is defined %}
                                    <a href=\"{{ path('helpdesk_customer_create_ticket') }}\" class=\"uv-btn uv-margin-top-15\">{{'Contact Us'|trans}}</a>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                {% endblock %}
            </div>
        {% endblock %}

        {% block footer %}
            {% include \"@UVDeskSupportCenter/Templates/footer.html.twig\" %}

            {% include \"@UVDeskSupportCenter/Templates/pagination.html.twig\" %}

            <!-- Loader Template-->
            <script type=\"text/template\" id=\"loader-tmp\">
                <div class=\"uv-loader\">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </script>
            <!-- Loader Template-->

            <!-- Full View Loader Template-->
            <script type=\"text/template\" id=\"full-view-loader\">
                <div class=\"uv-loader-view\">
                    <div class=\"uv-loader\">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </script>
            <!-- //Full View Loader Template-->

            <!-- Notification Template -->
            <script type=\"text/template\" id=\"notification-template\">
                <div class=\"uv-notification <% if(alertClass == 'danger') { %>uv-error<% } else { %> <%= 'uv-' + alertClass %> <% } %>\">
                    <span class=\"uv-notification-close\"></span>
                    <p><%= alertMessage %> </p>
                </div>
            </script>
            <script type=\"text/javascript\">
                var warningResponse = {
                    'alertClass' : 'danger',
                    'alertMessage' : '{{ \"Error : Something went wrong, please try again later\"|trans }}',
                };
            </script>

            {% include('@UVDeskSupportCenter/Themes/cookiePolicy.html.twig') %}
        {% endblock %}
    </body>
</html>
", "@UVDeskSupportCenter/Templates/layout.html.twig", "/home/support.telenet.com.np/public_html/vendor/uvdesk/support-center-bundle/Resources/views/Templates/layout.html.twig");
    }
}
