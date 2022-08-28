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
class __TwigTemplate_922f80c4ed51f174ae8b07a03dacd1b8251aaaba9ef3608daf650dc1a2c32e80 extends Template
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
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 2), "getLocale", [], "method", false, false, false, 2), "html", null, true);
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
        $context["websiteDetails"] = twig_get_attribute($this->env, $this->source, ($context["user_service"] ?? null), "getWebsiteDetails", [0 => "knowledgebase"], "method", false, false, false, 20);
        // line 21
        echo "        ";
        $context["websiteConfiguration"] = twig_get_attribute($this->env, $this->source, ($context["user_service"] ?? null), "getWebsiteConfiguration", [0 => "knowledgebase"], "method", false, false, false, 21);
        // line 22
        echo "        ";
        $context["themeTemplate"] = twig_get_attribute($this->env, $this->source, ($context["user_service"] ?? null), "getWebsiteView", [], "method", false, false, false, 22);
        // line 23
        echo "
        ";
        // line 24
        $context["canonical"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 24), "server", [], "any", false, false, false, 24), "get", [0 => "REQUEST_SCHEME"], "method", false, false, false, 24) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 24), "server", [], "any", false, false, false, 24), "get", [0 => "HTTP_HOST"], "method", false, false, false, 24)) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 24), "server", [], "any", false, false, false, 24), "get", [0 => "PATH_INFO"], "method", false, false, false, 24));
        // line 25
        echo "        <link rel=\"canonical\" href=\"";
        $this->displayBlock('canonical', $context, $blocks);
        echo "\">

        ";
        // line 27
        if ((($context["websiteDetails"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["websiteDetails"] ?? null), "favicon", [], "any", false, false, false, 27))) {
            // line 28
            echo "            <link rel=\"icon\" sizes=\"16x16\" href=\"";
            ((twig_get_attribute($this->env, $this->source, ($context["websiteDetails"] ?? null), "favicon", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["websiteDetails"] ?? null), "favicon", [], "any", false, false, false, 28), "html", null, true))) : (print (null)));
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
        if (($context["websiteDetails"] ?? null)) {
            // line 34
            echo "            <title>";
            $this->displayBlock('title', $context, $blocks);
            echo "</title>
            ";
            // line 35
            if (twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "metaDescription", [], "any", false, false, false, 35)) {
                // line 36
                echo "                <meta name=\"description\" content=\"";
                $this->displayBlock('metaDescription', $context, $blocks);
                echo "\"/>
            ";
            }
            // line 38
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "metaKeywords", [], "any", false, false, false, 38)) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 46), "getLocale", [], "method", false, false, false, 46), "html", null, true);
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
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["websiteDetails"] ?? null), "name", [], "any", false, false, false, 50)) ? (twig_get_attribute($this->env, $this->source, ($context["websiteDetails"] ?? null), "name", [], "any", false, false, false, 50)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Knowledge Base"))), "html", null, true);
            echo "\" />
            ";
            // line 51
            if (twig_get_attribute($this->env, $this->source, ($context["websiteDetails"] ?? null), "logo", [], "any", false, false, false, 51)) {
                // line 52
                echo "                <meta property=\"og:image\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["websiteDetails"] ?? null), "logo", [], "any", false, false, false, 52), "html", null, true);
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
        if (($context["websiteConfiguration"] ?? null)) {
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
        if (($context["websiteConfiguration"] ?? null)) {
            // line 70
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["uvdesk_service"] ?? null), "isDarkSkin", [0 => twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "brandColor", [], "any", false, false, false, 70)], "method", false, false, false, 70)) {
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
        echo twig_escape_filter($this->env, ((($context["bodySkinClass"] ?? null) . " ") . ($context["bodyClass"] ?? null)), "html", null, true);
        echo "\">
        ";
        // line 84
        $context["broadcastMessage"] = twig_get_attribute($this->env, $this->source, ($context["uvdesk_service"] ?? null), "getValidBroadcastMessage", [0 => ((twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "broadcastMessage", [], "any", true, true, false, 84)) ? (twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "broadcastMessage", [], "any", false, false, false, 84)) : (""))], "method", false, false, false, 84);
        // line 85
        echo "        ";
        if (($context["broadcastMessage"] ?? null)) {
            // line 86
            echo "            <div class=\"uv-kb-info\" id=\"uv-kb-info-broadcast\">
                <p>";
            // line 87
            ((twig_get_attribute($this->env, $this->source, ($context["broadcastMessage"] ?? null), "message", [], "any", true, true, false, 87)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["broadcastMessage"] ?? null), "message", [], "any", false, false, false, 87), "html", null, true))) : (print ("")));
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
        if ((twig_get_attribute($this->env, $this->source, ($context["uvdesk_service"] ?? null), "requestHeadersSent", [], "method", false, false, false, 93) == false)) {
            // line 94
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 94), "flashbag", [], "any", false, false, false, 94), "get", [0 => "success"], "method", false, false, false, 94));
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
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 100), "flashbag", [], "any", false, false, false, 100), "get", [0 => "warning"], "method", false, false, false, 100));
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
    }

    // line 25
    public function block_canonical($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["canonical"] ?? null), "html", null, true);
    }

    // line 34
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["websiteDetails"] ?? null), "name", [], "any", false, false, false, 34)) ? (twig_get_attribute($this->env, $this->source, ($context["websiteDetails"] ?? null), "name", [], "any", false, false, false, 34)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Knowledge Base"))), "html", null, true);
        echo " ";
    }

    // line 36
    public function block_metaDescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "metaDescription", [], "any", false, false, false, 36), "html", null, true);
    }

    // line 39
    public function block_metaKeywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "metaKeywords", [], "any", false, false, false, 39), "html", null, true);
    }

    // line 48
    public function block_ogtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("HelpDesk", [], "messages");
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["websiteDetails"] ?? null), "name", [], "any", false, false, false, 48)) ? (twig_get_attribute($this->env, $this->source, ($context["websiteDetails"] ?? null), "name", [], "any", false, false, false, 48)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Knowledge Base"))), "html", null, true);
    }

    // line 49
    public function block_ogcanonical($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["canonical"] ?? null), "html", null, true);
    }

    // line 55
    public function block_twtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("HelpDesk", [], "messages");
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["websiteDetails"] ?? null), "name", [], "any", false, false, false, 55)) ? (twig_get_attribute($this->env, $this->source, ($context["websiteDetails"] ?? null), "name", [], "any", false, false, false, 55)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Knowledge Base"))), "html", null, true);
    }

    // line 64
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "                ";
        $this->loadTemplate("@UVDeskSupportCenter/Knowledgebase/websiteSettings.html.twig", "@UVDeskSupportCenter/Templates/layout.html.twig", 65)->display($context);
        // line 66
        echo "            ";
    }

    // line 77
    public function block_templateCSS($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 117
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 118
        echo "         
            ";
        // line 119
        $this->loadTemplate("@UVDeskSupportCenter/Templates/header.html.twig", "@UVDeskSupportCenter/Templates/layout.html.twig", 119)->display($context);
        // line 120
        echo "        ";
    }

    // line 124
    public function block_tabHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 125
        echo "        ";
    }

    // line 126
    public function block_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        echo "            <div class=\"uv-body\">
                <div class=\"uv-container\">
                    ";
        // line 129
        $this->displayBlock('body', $context, $blocks);
        // line 151
        echo "            </div>
        ";
    }

    // line 129
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 154
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  557 => 196,  555 => 195,  548 => 191,  513 => 158,  511 => 157,  508 => 156,  505 => 155,  501 => 154,  494 => 147,  486 => 145,  484 => 144,  479 => 142,  475 => 141,  462 => 130,  458 => 129,  453 => 151,  451 => 129,  447 => 127,  443 => 126,  439 => 125,  435 => 124,  431 => 120,  429 => 119,  426 => 118,  422 => 117,  416 => 77,  412 => 66,  409 => 65,  405 => 64,  396 => 55,  389 => 49,  380 => 48,  373 => 39,  366 => 36,  358 => 34,  351 => 25,  345 => 197,  343 => 154,  340 => 153,  337 => 126,  335 => 124,  332 => 123,  330 => 122,  327 => 121,  325 => 117,  315 => 110,  310 => 107,  307 => 106,  298 => 103,  294 => 101,  289 => 100,  280 => 97,  276 => 95,  271 => 94,  269 => 93,  265 => 91,  258 => 87,  255 => 86,  252 => 85,  250 => 84,  246 => 83,  243 => 82,  240 => 81,  238 => 80,  234 => 78,  232 => 77,  229 => 76,  226 => 75,  223 => 74,  220 => 73,  217 => 72,  214 => 71,  211 => 70,  209 => 69,  206 => 68,  203 => 67,  200 => 64,  198 => 63,  195 => 62,  185 => 55,  182 => 54,  176 => 52,  174 => 51,  170 => 50,  166 => 49,  162 => 48,  157 => 46,  150 => 42,  147 => 41,  141 => 39,  138 => 38,  132 => 36,  130 => 35,  125 => 34,  123 => 33,  120 => 32,  114 => 30,  108 => 28,  106 => 27,  100 => 25,  98 => 24,  95 => 23,  92 => 22,  89 => 21,  87 => 20,  82 => 18,  78 => 17,  74 => 16,  59 => 4,  54 => 2,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@UVDeskSupportCenter/Templates/layout.html.twig", "/home/support.telenet.com.np/public_html/vendor/uvdesk/support-center-bundle/Resources/views/Templates/layout.html.twig");
    }
}
