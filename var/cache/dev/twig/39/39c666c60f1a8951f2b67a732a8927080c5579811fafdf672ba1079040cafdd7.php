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

/* @UVDeskCoreFramework/ticketList.html.twig */
class __TwigTemplate_dfd176f14b76e00900eeef72fd2cb60bfe07b0a543d5e1bb616e7064f6184747 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/ticketList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/ticketList.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskCoreFramework/ticketList.html.twig", 1);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tickets"), "html", null, true);
        
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
        .uv-dropdown.asset-visibility li input {
            z-index: 100;
        }
        .uv-dropdown.asset-visibility ul li label {
            color: #333333;
            font-size: 17px;
            font-weight: 500;
            text-transform: capitalize;
            cursor: pointer;
            margin: auto;
        }
        .uv-table td a {
            color: #333333;
        }
        .uv-table.uv-list-view table tbody td.uv-width-100 {
            width: 100px !important;
        }
        .uv-table.uv-list-view td[data-index=\"agent\"] {
            white-space: nowrap;
        }
        .uv-view:not(.uv-stack-view) .uv-table td a {
            display: inline-block;
            width: 100%;
        }
        .uv-action-bar-col-lt.uv-width-100 {
            width: 100% !important;
        }
        #quick-view-modal .uv-view {
            padding: 0;
            overflow-y: visible;
            display: inline-block;
            position: relative;
        }
        #quick-view-modal .uv-view .uv-ticket-section {
            margin-top: 0;
        }
        #quick-view-modal .uv-ticket-head {
            border-top: 1px solid #d3d3d3;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #quick-view-modal .uv-ticket-strip {
            padding-bottom: 0;
        }
        #quick-view-modal .uv-ticket-strip .uv-btn-tag {
            margin-bottom: 0;
        }
        #quick-view-modal .quick-view-navigation {
            position: absolute;
            right: 50px;
            top: 9px;
        }
        #quick-view-modal .quick-view-navigation ~ a {
            width: calc(100% - 100px);
            display: inline-block;
        }
        #quick-view-modal .uv-btn-tag[disabled=\"disabled\"] {
            opacity: .4;
            cursor: not-allowed;
            border-color: #B1B1AE !important;
        }
        #quick-view-modal .uv-loader {
            transform: scale(0.5);
            top: 14px;
            right: 60px;
        }
        tr.unread {
            background: #f1f1f1;
        }
        .uv-table table tbody tr.not-assigned td {
            border-bottom: 1px solid #ffcacc;
        }
        @media screen and (max-width: 500px) {
            .uv-action-bar label {
                display: inline-block;
            }
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        // line 88
        echo "    ";
        // line 89
        echo "    <div class=\"uv-pop-up-overlay\" id=\"quick-view-modal\">
        <div class=\"uv-pop-up-box uv-pop-up-wide\"></div>
    </div>

    <div class=\"uv-inner-section\">
        ";
        // line 95
        echo "        <div class=\"uv-aside\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "request", [], "any", false, false, false, 95), "cookies", [], "any", false, false, false, 95) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "request", [], "any", false, false, false, 95), "cookies", [], "any", false, false, false, 95), "get", [0 => "uv-asideView"], "method", false, false, false, 95))) {
            echo " style=\"display: none;\" ";
        }
        echo " >
            <div class=\"uv-aside-default\">
                <div class=\"uv-aside-head\">
                    <div class=\"uv-aside-title\">
                        <h6>";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tickets"), "html", null, true);
        echo "</h6>
                    </div>

                    <div class=\"uv-aside-back\">
                        <span onclick=\"history.length > 1 ? history.go(-1) : window.location = '";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_dashboard");
        echo "';\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back"), "html", null, true);
        echo "</span>
                    </div>
                </div>

                <div class=\"uv-aside-nav\">
                    <ul>
                        ";
        // line 110
        echo "                        <ul class=\"predefined-label-list uv-aside-list\">
                            <li>
                                <a href=\"#\" class=\"uv-aside-active\">";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        echo " <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>

                                ";
        // line 115
        echo "                                <ul class=\"status-list\">
                                    <li>
                                        <a href=\"#\" data-id=\"1\" class=\"uv-aside-nav-active\"><span class=\"name\">";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Open"), "html", null, true);
        echo "</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-id=\"2\"><span class=\"name\">";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pending"), "html", null, true);
        echo "</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-id=\"6\"><span class=\"name\">";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Answered"), "html", null, true);
        echo "</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-id=\"3\"><span class=\"name\">";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Resolved"), "html", null, true);
        echo "</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-id=\"4\"><span class=\"name\">";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Closed"), "html", null, true);
        echo "</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-id=\"5\"><span class=\"name\">";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Spam"), "html", null, true);
        echo "</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#new\">";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New"), "html", null, true);
        echo " <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                            <li>
                                <a href=\"#unassigned\">";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("UnAssigned"), "html", null, true);
        echo " <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                            <li>
                                <a href=\"#notreplied\">";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("UnAnswered"), "html", null, true);
        echo " <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                            <li>
                                <a href=\"#mine\">";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My Tickets"), "html", null, true);
        echo " <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                            <li>
                                <a href=\"#starred\">";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Starred"), "html", null, true);
        echo " <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                            <li>
                                <a href=\"#trashed\" style=\"border-bottom: none\">";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Trashed"), "html", null, true);
        echo " <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                        </ul>

                        ";
        // line 157
        echo "                        <ul class=\"uv-aside-custom\"></ul>
                    </ul>
                </div>

                <a class=\"uv-btn-small add-new-label\" href=\"#\"><span class=\"uv-icon-add\"></span> ";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label"), "html", null, true);
        echo "</a>
            </div>

            <!-- Label add and edit -->
            <div class=\"uv-add-edit-label\" style=\"display: block\"></div>
        </div>

        ";
        // line 169
        echo "        <div class=\"uv-view ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 169, $this->source); })()), "request", [], "any", false, false, false, 169), "cookies", [], "any", false, false, false, 169) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 169, $this->source); })()), "request", [], "any", false, false, false, 169), "cookies", [], "any", false, false, false, 169), "get", [0 => "uv-asideView"], "method", false, false, false, 169))) {
            echo " uv-aside-view ";
        }
        echo "\">
            <h1>";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tickets"), "html", null, true);
        echo "</h1>

            ";
        // line 173
        echo "            <div class=\"uv-action-bar\">
                ";
        // line 175
        echo "                <div class=\"uv-action-select-wrapper\">
                    <label class=\"uv-vertical-align uv-margin-left-27\">
                        <div class=\"uv-checkbox\">
                            <input type=\"checkbox\" class=\"select-all-checkbox\"><span class=\"uv-checkbox-view\"></span>
                        </div>
                    </label>
                </div>
                ";
        // line 183
        echo "                <div class=\"uv-action-col-wrapper\">
                    ";
        // line 185
        echo "                    <div class=\"uv-action-bar-col-lt\">
                        <div class=\"filter\">
                            ";
        // line 188
        echo "                            <div class=\"uv-dropdown sort\">
                                <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort By:"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last Replied"), "html", null, true);
        echo "</div>

                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort By"), "html", null, true);
        echo "</label>
                                        <ul></ul>
                                    </div>
                                </div>
                            </div>

                            ";
        // line 200
        echo "                            <div class=\"uv-dropdown asset-visibility\">
                                <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Assets Visibility"), "html", null, true);
        echo "</div>

                                <div class=\"uv-dropdown-list uv-bottom-left\" style=\"width: 215px;\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Assets Visibility"), "html", null, true);
        echo "</label>

                                        <ul>
                                            ";
        // line 209
        echo "                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"source\" name=\"assetVisibility[]\" value=\"source\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"source\">";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Channel/Source"), "html", null, true);
        echo "</label>
                                            </li>

                                            ";
        // line 221
        echo "                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"customer-name\" name=\"assetVisibility[]\" value=\"customer-name\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"customer-name\">";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Name"), "html", null, true);
        echo "</label>
                                            </li>

                                            ";
        // line 233
        echo "                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"customer-email\" name=\"assetVisibility[]\" value=\"customer-email\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"customer-email\">";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Email"), "html", null, true);
        echo "</label>
                                            </li>

                                            ";
        // line 245
        echo "                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"timestamp\" name=\"assetVisibility[]\" value=\"timestamp\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"timestamp\">";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Timestamp"), "html", null, true);
        echo "</label>
                                            </li>

                                            ";
        // line 257
        echo "                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"group\" name=\"assetVisibility[]\" value=\"group\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"group\">";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
        echo "</label>
                                            </li>

                                            ";
        // line 269
        echo "                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"team\" name=\"assetVisibility[]\" value=\"team\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"team\">";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team"), "html", null, true);
        echo "</label>
                                            </li>

                                            ";
        // line 281
        echo "                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"type1\" name=\"assetVisibility[]\" value=\"type1\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"type1\">";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
        echo "</label>
                                            </li>

                                            ";
        // line 293
        echo "                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"replies\" name=\"assetVisibility[]\" value=\"replies\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"replies\">";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Replies"), "html", null, true);
        echo "</label>
                                            </li>

                                            ";
        // line 305
        echo "                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"agent\" name=\"assetVisibility[]\" value=\"agent\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"agent\">";
        // line 313
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        echo "</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    ";
        // line 323
        echo "                    <div class=\"uv-action-bar-col-lt\" style=\"display: none\">
                        <!-- Mass action -->
                        <div class=\"mass-action\">
                            <div class=\"property-block\">
                                ";
        // line 328
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 328, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_ASSIGN_TICKET"], "method", false, false, false, 328)) {
            // line 329
            echo "                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">";
            // line 330
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
            echo "</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>";
            // line 333
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
            echo "</label>
                                                <div class=\"uv-search-sm\">
                                                    <input type=\"text\" class=\"uv-search-field\" placeholder=\"Search\">
                                                </div>
                                            </div>

                                            <ul class=\"uv-agents-list agent\" data-action=\"agent\">
                                                ";
            // line 340
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 340, $this->source); })()), "getAgentPartialDataCollection", [], "method", false, false, false, 340));
            foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
                // line 341
                echo "                                                    <li data-index=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 341), "html", null, true);
                echo "\">
                                                        ";
                // line 342
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 342), null))) {
                    // line 343
                    echo "                                                            <img src=\"";
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 343, $this->source); })()), "request", [], "any", false, false, false, 343), "scheme", [], "any", false, false, false, 343) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 343, $this->source); })()), "request", [], "any", false, false, false, 343), "httpHost", [], "any", false, false, false, 343)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 343), "html", null, true);
                    echo "\"/>
                                                        ";
                } else {
                    // line 345
                    echo "                                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 345, $this->source); })())), "html", null, true);
                    echo "\" alt=\"\"/>
                                                        ";
                }
                // line 347
                echo "                                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 347), "html", null, true);
                echo "
                                                    </li>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 350
            echo "                                            </ul>
                                        </div>
                                    </div>
                                ";
        }
        // line 354
        echo "
                                ";
        // line 356
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 356, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_ASSIGN_TICKET_GROUP"], "method", false, false, false, 356)) {
            // line 357
            echo "                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">";
            // line 358
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
            echo "</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>";
            // line 361
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
            echo "</label>
                                                <div class=\"uv-search-sm\">
                                                    <input type=\"text\" class=\"uv-search-field\" placeholder=\"Search\">
                                                </div>
                                            </div>

                                            <ul class=\"uv-search-list group\" data-action=\"group\">
                                                ";
            // line 368
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 368, $this->source); })()), "getSupportGroups", [], "method", false, false, false, 368));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 369
                echo "                                                    <li data-index=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 369), "html", null, true);
                echo "\"><a href=\"#\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 369), "html", null, true);
                echo "</a></li>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 371
            echo "                                            </ul>
                                        </div>
                                    </div>
                                ";
        }
        // line 375
        echo "
                                ";
        // line 377
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 377, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_ASSIGN_TICKET_GROUP"], "method", false, false, false, 377)) {
            // line 378
            echo "                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">";
            // line 379
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team"), "html", null, true);
            echo "</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>";
            // line 382
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team"), "html", null, true);
            echo "</label>
                                                <div class=\"uv-search-sm\">
                                                    <input type=\"text\" class=\"uv-search-field\" placeholder=\"Search\">
                                                </div>
                                            </div>

                                            <ul class=\"uv-search-list team\" data-action=\"team\">
                                                ";
            // line 389
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 389, $this->source); })()), "getSupportTeams", [], "method", false, false, false, 389));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 390
                echo "                                                    <li data-index=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 390), "html", null, true);
                echo "\"><a href=\"#\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 390), "html", null, true);
                echo "</a></li>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 392
            echo "                                            </ul>
                                        </div>
                                    </div>
                                ";
        }
        // line 396
        echo "
                                ";
        // line 398
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 398, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_UPDATE_TICKET_STATUS"], "method", false, false, false, 398)) {
            // line 399
            echo "                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">";
            // line 400
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
            echo "</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>";
            // line 403
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
            echo "</label>

                                                <ul class=\"status\" data-action=\"status\">
                                                    ";
            // line 406
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ticketStatusCollection"]) || array_key_exists("ticketStatusCollection", $context) ? $context["ticketStatusCollection"] : (function () { throw new RuntimeError('Variable "ticketStatusCollection" does not exist.', 406, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 407
                echo "                                                        <li data-index=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 407), "html", null, true);
                echo "\"><a href=\"#\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["status"], "description", [], "any", false, false, false, 407)), "html", null, true);
                echo "</a></li>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 409
            echo "                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 414
        echo "
                                ";
        // line 416
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 416, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_UPDATE_TICKET_TYPE"], "method", false, false, false, 416)) {
            // line 417
            echo "                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">";
            // line 418
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
            echo "</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>";
            // line 421
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
            echo "</label>
                                                <div class=\"uv-search-sm\">
                                                    <input type=\"text\" class=\"uv-search-field\" placeholder=\"";
            // line 423
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
            echo "\">
                                                </div>
                                            </div>

                                            <ul class=\"uv-search-list type\" data-action=\"type\">
                                                ";
            // line 428
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ticketTypeCollection"]) || array_key_exists("ticketTypeCollection", $context) ? $context["ticketTypeCollection"] : (function () { throw new RuntimeError('Variable "ticketTypeCollection" does not exist.', 428, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 429
                echo "                                                    <li data-index=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 429), "html", null, true);
                echo "\"><a href=\"#\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "description", [], "any", false, false, false, 429), "html", null, true);
                echo "</a></li>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 431
            echo "                                            </ul>
                                        </div>
                                    </div>
                                ";
        }
        // line 435
        echo "
                                ";
        // line 437
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 437, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_UPDATE_TICKET_PRIORITY"], "method", false, false, false, 437)) {
            // line 438
            echo "                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">";
            // line 439
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Priority"), "html", null, true);
            echo "</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>";
            // line 442
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Priority"), "html", null, true);
            echo "</label>

                                                <ul class=\"priority\" data-action=\"priority\">
                                                    ";
            // line 445
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ticketPriorityCollection"]) || array_key_exists("ticketPriorityCollection", $context) ? $context["ticketPriorityCollection"] : (function () { throw new RuntimeError('Variable "ticketPriorityCollection" does not exist.', 445, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["priority"]) {
                // line 446
                echo "                                                        <li data-index=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["priority"], "id", [], "any", false, false, false, 446), "html", null, true);
                echo "\"><a href=\"#\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["priority"], "description", [], "any", false, false, false, 446)), "html", null, true);
                echo "</a></li>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priority'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 448
            echo "                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 453
        echo "
                                ";
        // line 455
        echo "                                <div class=\"uv-dropdown\">
                                    <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">";
        // line 456
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label"), "html", null, true);
        echo "</div>
                                    <div class=\"uv-dropdown-list uv-bottom-left\">
                                        <div class=\"uv-dropdown-container\">
                                            <label>";
        // line 459
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label"), "html", null, true);
        echo "</label>

                                            <div class=\"uv-search-sm\">
                                                <input type=\"text\" class=\"uv-search-field\" placeholder=\"Search\">
                                            </div>
                                        </div>

                                        <ul class=\"uv-search-list label\" data-action=\"label\"></ul>
                                    </div>
                                </div>

                                ";
        // line 471
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 471, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_DELETE_TICKET"], "method", false, false, false, 471)) {
            // line 472
            echo "                                    <a class=\"uv-btn-stroke uv-margin-right-5\" id=\"mass-delete\" data-action=\"trashed\" style=\"margin-left: 5px;\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
            echo "</a>
                                ";
        }
        // line 474
        echo "                            </div>

                            ";
        // line 477
        echo "                            <div class=\"trashed-block\" style=\"display: none\">
                                ";
        // line 479
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 479, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_RESTORE_TICKET"], "method", false, false, false, 479)) {
            // line 480
            echo "                                    <a class=\"uv-btn-stroke uv-margin-right-5\" id=\"mass-restore\" data-action=\"restore\" style=\"margin-left: 5px;\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Restore"), "html", null, true);
            echo "</a>
                                ";
        }
        // line 482
        echo "
                                ";
        // line 484
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 484, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_DELETE_TICKET"], "method", false, false, false, 484)) {
            // line 485
            echo "                                    <a class=\"uv-btn-stroke uv-margin-right-5\" id=\"mass-delete-forever\" data-action=\"delete\" style=\"margin-left: 5px;\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete Forever"), "html", null, true);
            echo "</a>
                                ";
        }
        // line 487
        echo "                            </div>
                        </div>
                    </div>

                    ";
        // line 492
        echo "                    <div class=\"uv-action-bar-col-rt\">
                        <!-- Search Tickets -->
                        <input type=\"text\" class=\"uv-search-inline\" placeholder=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        echo "\">

                        <!-- Extra Filters -->
                        <div class=\"uv-btn-stroke uv-margin-left-15 filter-view-trigger\" data-target=\"uv-filter-view\"><span class=\"uv-icon-filter\"></span>";
        // line 497
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter View"), "html", null, true);
        echo "</div>
                    </div>
                </div>
            </div>

            ";
        // line 503
        echo "            <div class=\"uv-table uv-list-view\">
                <table>
                    <thead>
                    <tr>
                        <th class=\"uv-width-140\"></th>
                        <th>";
        // line 508
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID"), "html", null, true);
        echo "</th>
                        <th class=\"uv-min-width-300\">";
        // line 509
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
        echo "</th>
                        <th data-index=\"customer-name\">";
        // line 510
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Name"), "html", null, true);
        echo "</th>
                        <th data-index=\"customer-email\">";
        // line 511
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Email"), "html", null, true);
        echo "</th>
                        <th data-index=\"timestamp\">";
        // line 512
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Timestamp"), "html", null, true);
        echo "</th>
                        <th style =\"min-width:100px\" data-index=\"lastReply\">";
        // line 513
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last Reply"), "html", null, true);
        echo "</th>
                        <th data-index=\"group\">";
        // line 514
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
        echo "</th>
                        <th data-index=\"team\">";
        // line 515
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team"), "html", null, true);
        echo "</th>
                        <th data-index=\"type1\">";
        // line 516
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
        echo "</th>
                        <th data-index=\"replies\">";
        // line 517
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Replies"), "html", null, true);
        echo "</th>
                        <th data-index=\"agent\">";
        // line 518
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        echo "</th>
                    </tr>
                    </thead>

                    <tbody></tbody>
                </table>

                <div class=\"navigation\"></div>
            </div>
        </div>

        ";
        // line 530
        echo "        <div class=\"uv-filter-view\" id=\"uv-filter-view\">
            ";
        // line 532
        echo "            <div class=\"uv-filter-head\">
                <div class=\"uv-filter-title\">
                    <h6>";
        // line 534
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tickets"), "html", null, true);
        echo "</h6>
                    <span>";
        // line 535
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save set of filters as a preset to stay more productive"), "html", null, true);
        echo "</span>
                </div>

                <div class=\"uv-filter-toggle\" id=\"filter-close-trigger\"><span></span></div>
            </div>

            ";
        // line 542
        echo "            <div class=\"uv-filter-paper\">
                ";
        // line 544
        echo "                <div class=\"uv-filter-options\">
                    <script>
                        var userFilters = {};
                    </script>

                    ";
        // line 550
        echo "                    <div class=\"uv-element-block\" style=\"border-bottom: 1px solid #D3D3D3; padding-bottom: 5px;\">
                        <label class=\"uv-field-label\">";
        // line 551
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Saved Filters"), "html", null, true);
        echo "</label>
                        <div class=\"uv-field-block\">
                            <div class=\"uv-customize-wrapper\">
                                <select class=\"uv-select uv-select-70\" id=\"saved-filter\">
                                    ";
        // line 555
        $context["filters"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 555, $this->source); })()), "user", [], "any", false, false, false, 555), "agentInstance", [], "any", false, false, false, 555), "userSavedFilters", [], "any", false, false, false, 555);
        // line 556
        echo "                                    ";
        if (twig_length_filter($this->env, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 556, $this->source); })()))) {
            // line 557
            echo "                                        <option value=\"\">-- Saved Filter --</option>
                                        ";
            // line 558
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 558, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["userFilter"]) {
                // line 559
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["userFilter"], "id", [], "any", false, false, false, 559), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["userFilter"], "name", [], "any", false, false, false, 559), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userFilter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 561
            echo "                                    ";
        } else {
            // line 562
            echo "                                        <option value=\"\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No saved filter created"), "html", null, true);
            echo "</option>
                                    ";
        }
        // line 564
        echo "                                </select>
                                ";
        // line 565
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 565, $this->source); })()), "user", [], "any", false, false, false, 565), "agentInstance", [], "any", false, false, false, 565), "userSavedFilters", [], "any", false, false, false, 565));
        foreach ($context['_seq'] as $context["_key"] => $context["userFilter"]) {
            // line 566
            echo "                                    <script>
                                        ";
            // line 567
            $context["isDefault"] = 0;
            // line 568
            echo "                                        ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 568, $this->source); })()), "user", [], "any", false, false, false, 568), "agentInstance", [], "any", false, false, false, 568), "defaultFiltering", [], "any", false, false, false, 568), twig_get_attribute($this->env, $this->source, $context["userFilter"], "id", [], "any", false, false, false, 568)))) {
                // line 569
                echo "                                        ";
                $context["isDefault"] = 1;
                // line 570
                echo "                                        ";
            }
            // line 571
            echo "                                        userFilters[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["userFilter"], "id", [], "any", false, false, false, 571), "html", null, true);
            echo "] = ";
            echo json_encode(["id" => twig_get_attribute($this->env, $this->source, $context["userFilter"], "id", [], "any", false, false, false, 571), "name" => twig_get_attribute($this->env, $this->source, $context["userFilter"], "name", [], "any", false, false, false, 571), "route" => twig_get_attribute($this->env, $this->source, $context["userFilter"], "route", [], "any", false, false, false, 571), "is_default" => (isset($context["isDefault"]) || array_key_exists("isDefault", $context) ? $context["isDefault"] : (function () { throw new RuntimeError('Variable "isDefault" does not exist.', 571, $this->source); })())]);
            echo ";
                                    </script>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userFilter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 574
        echo "                                <span class=\"uv-customize\" style=\"display: none\" data-toggle=\"tooltip\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Saved Filter"), "html", null, true);
        echo "\"></span>
                            </div>
                        </div>
                    </div>

                    ";
        // line 579
        $context["filterContext"] = [];
        // line 580
        echo "                    ";
        // line 581
        echo "                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 582
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        echo "</label>
                        <div class=\"uv-field-block\" id=\"agent-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"agent\" id=\"agent-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 587
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        echo "</label>
                                </div>
                                <ul class=\"uv-agents-list\">
                                    ";
        // line 590
        $context["options"] = [];
        // line 591
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 591, $this->source); })()), "getAgentsPartialDetails", [], "any", false, false, false, 591));
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 592
            echo "                                        ";
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 592, $this->source); })()), [0 => ["id" => twig_get_attribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 592), "name" => twig_get_attribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 592)]]);
            // line 593
            echo "                                        <li data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 593), "html", null, true);
            echo "\">
                                            ";
            // line 594
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 594), null))) {
                // line 595
                echo "                                                <img src=\"";
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 595, $this->source); })()), "request", [], "any", false, false, false, 595), "scheme", [], "any", false, false, false, 595) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 595, $this->source); })()), "request", [], "any", false, false, false, 595), "httpHost", [], "any", false, false, false, 595)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 595), "html", null, true);
                echo "\"/>
                                            ";
            } else {
                // line 597
                echo "                                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 597, $this->source); })())), "html", null, true);
                echo "\"/>
                                            ";
            }
            // line 599
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 599), "html", null, true);
            echo "
                                        </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 602
        echo "                                    <li class=\"uv-no-results\" style=\"display: none;\">
                                        ";
        // line 603
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        echo "
                                    </li>
                                    ";
        // line 605
        $context["filterContext"] = twig_array_merge((isset($context["filterContext"]) || array_key_exists("filterContext", $context) ? $context["filterContext"] : (function () { throw new RuntimeError('Variable "filterContext" does not exist.', 605, $this->source); })()), ["agent" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 605, $this->source); })())]);
        // line 606
        echo "                                </ul>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 613
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer"), "html", null, true);
        echo "</label>
                        <div class=\"uv-field-block\" id=\"customer-filter\">
                            <input class=\"uv-field uv-dropdown-other\" type=\"text\" data-filter-type=\"customer\" id=\"customer-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 618
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        echo "</label>
                                </div>
                                <ul class=\"uv-agents-list\">
                                    <li class=\"uv-filter-info\">
                                        ";
        // line 622
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        echo "
                                    </li>
                                    <li class=\"uv-no-results\" style=\"display: none;\">
                                        ";
        // line 625
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        echo "
                                    </li>
                                </ul>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 634
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
        echo "</label>
                        <div class=\"uv-field-block\" id=\"group-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"group\" id=\"group-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 639
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        echo "</label>
                                    <ul class=\"\">
                                        ";
        // line 641
        $context["options"] = [];
        // line 642
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 642, $this->source); })()), "getSupportGroups", [], "method", false, false, false, 642));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 643
            echo "                                            ";
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 643, $this->source); })()), [0 => ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 643), "name" => twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 643)]]);
            // line 644
            echo "                                            <li data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 644), "html", null, true);
            echo "\">
                                                ";
            // line 645
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 645), "html", null, true);
            echo "
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 648
        echo "                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            ";
        // line 649
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        echo "
                                        </li>
                                        ";
        // line 651
        $context["filterContext"] = twig_array_merge((isset($context["filterContext"]) || array_key_exists("filterContext", $context) ? $context["filterContext"] : (function () { throw new RuntimeError('Variable "filterContext" does not exist.', 651, $this->source); })()), ["group" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 651, $this->source); })())]);
        // line 652
        echo "                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 660
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team"), "html", null, true);
        echo "</label>
                        <div class=\"uv-field-block\" id=\"team-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"team\" id=\"team-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 665
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        echo "</label>
                                    <ul class=\"\">
                                        ";
        // line 667
        $context["options"] = [];
        // line 668
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 668, $this->source); })()), "getSupportTeams", [], "method", false, false, false, 668));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 669
            echo "                                            ";
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 669, $this->source); })()), [0 => ["id" => twig_get_attribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 669), "name" => twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 669)]]);
            // line 670
            echo "                                            <li data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 670), "html", null, true);
            echo "\">
                                                ";
            // line 671
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 671), "html", null, true);
            echo "
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 674
        echo "                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            ";
        // line 675
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        echo "
                                        </li>
                                        ";
        // line 677
        $context["filterContext"] = twig_array_merge((isset($context["filterContext"]) || array_key_exists("filterContext", $context) ? $context["filterContext"] : (function () { throw new RuntimeError('Variable "filterContext" does not exist.', 677, $this->source); })()), ["team" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 677, $this->source); })())]);
        // line 678
        echo "                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 686
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
        echo "</label>
                        <div class=\"uv-field-block\" id=\"type-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"type\" id=\"type-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 691
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        echo "</label>
                                    <ul class=\"\">
                                        ";
        // line 693
        $context["options"] = [];
        // line 694
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 694, $this->source); })()), "getTypes", [], "method", false, false, false, 694));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 695
            echo "                                            ";
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 695, $this->source); })()), [0 => ["id" => twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 695), "name" => twig_get_attribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 695)]]);
            // line 696
            echo "                                            <li data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 696), "html", null, true);
            echo "\">
                                                ";
            // line 697
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 697), "html", null, true);
            echo "
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 700
        echo "                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            ";
        // line 701
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        echo "
                                        </li>
                                        ";
        // line 703
        $context["filterContext"] = twig_array_merge((isset($context["filterContext"]) || array_key_exists("filterContext", $context) ? $context["filterContext"] : (function () { throw new RuntimeError('Variable "filterContext" does not exist.', 703, $this->source); })()), ["type" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 703, $this->source); })())]);
        // line 704
        echo "                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 712
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Priority"), "html", null, true);
        echo "</label>
                        <div class=\"uv-field-block\" id=\"priority-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"priority\" id=\"priority-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 717
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        echo "</label>
                                    <ul class=\"\">
                                        ";
        // line 719
        $context["options"] = [];
        // line 720
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 720, $this->source); })()), "getPriorities", [], "method", false, false, false, 720));
        foreach ($context['_seq'] as $context["_key"] => $context["priority"]) {
            // line 721
            echo "                                            ";
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 721, $this->source); })()), [0 => ["id" => twig_get_attribute($this->env, $this->source, $context["priority"], "id", [], "any", false, false, false, 721), "name" => twig_get_attribute($this->env, $this->source, $context["priority"], "code", [], "any", false, false, false, 721), "color" => twig_get_attribute($this->env, $this->source, $context["priority"], "colorCode", [], "any", false, false, false, 721)]]);
            // line 722
            echo "                                            <li data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["priority"], "id", [], "any", false, false, false, 722), "html", null, true);
            echo "\">
                                                ";
            // line 723
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["priority"], "code", [], "any", false, false, false, 723)), "html", null, true);
            echo "
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priority'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 726
        echo "                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            ";
        // line 727
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        echo "
                                        </li>
                                        ";
        // line 729
        $context["filterContext"] = twig_array_merge((isset($context["filterContext"]) || array_key_exists("filterContext", $context) ? $context["filterContext"] : (function () { throw new RuntimeError('Variable "filterContext" does not exist.', 729, $this->source); })()), ["priority" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 729, $this->source); })())]);
        // line 730
        echo "                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 738
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tag"), "html", null, true);
        echo "</label>
                        <div class=\"uv-field-block\" id=\"tag-filter\">
                            <input class=\"uv-field uv-dropdown-other\" type=\"text\" data-filter-type=\"tag\" id=\"tag-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 743
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        echo "</label>
                                    <ul class=\"\">
                                        <li class=\"uv-filter-info\">
                                            ";
        // line 746
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        echo "
                                        </li>
                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            ";
        // line 749
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        echo "
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 758
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Source"), "html", null, true);
        echo "</label>
                        <div class=\"uv-field-block\" id=\"source-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"source\" id=\"source-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 763
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        echo "</label>
                                    <ul class=\"\">
                                        ";
        // line 765
        $context["options"] = [];
        // line 766
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 766, $this->source); })()), "getAllSources", [], "method", false, false, false, 766));
        foreach ($context['_seq'] as $context["key"] => $context["source"]) {
            // line 767
            echo "                                            ";
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 767, $this->source); })()), [0 => ["id" => $context["key"], "name" => $context["source"]]]);
            // line 768
            echo "                                            <li data-id=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
                                                ";
            // line 769
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["source"]), "html", null, true);
            echo "
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['source'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 772
        echo "                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            ";
        // line 773
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        echo "
                                        </li>
                                        ";
        // line 775
        $context["filterContext"] = twig_array_merge((isset($context["filterContext"]) || array_key_exists("filterContext", $context) ? $context["filterContext"] : (function () { throw new RuntimeError('Variable "filterContext" does not exist.', 775, $this->source); })()), ["source" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 775, $this->source); })())]);
        // line 776
        echo "                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 783
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mailbox"), "html", null, true);
        echo "</label>
                        <div class=\"uv-field-block\" id=\"mailbox-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"mailbox\" id=\"mailbox-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 788
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        echo "</label>
                                    <ul class=\"\">
                                        ";
        // line 790
        $context["options"] = [];
        // line 791
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 791, $this->source); })()), "getAllMailboxes", [], "method", false, false, false, 791));
        foreach ($context['_seq'] as $context["_key"] => $context["mailbox"]) {
            // line 792
            echo "                                            ";
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 792, $this->source); })()), [0 => ["id" => twig_get_attribute($this->env, $this->source, $context["mailbox"], "email", [], "any", false, false, false, 792), "name" => twig_get_attribute($this->env, $this->source, $context["mailbox"], "name", [], "any", false, false, false, 792)]]);
            // line 793
            echo "                                            <li data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mailbox"], "email", [], "any", false, false, false, 793), "html", null, true);
            echo "\">
                                                ";
            // line 794
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["mailbox"], "name", [], "any", false, false, false, 794)), "html", null, true);
            echo "
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mailbox'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 797
        echo "                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            ";
        // line 798
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        echo "
                                        </li>
                                        ";
        // line 800
        $context["filterContext"] = twig_array_merge((isset($context["filterContext"]) || array_key_exists("filterContext", $context) ? $context["filterContext"] : (function () { throw new RuntimeError('Variable "filterContext" does not exist.', 800, $this->source); })()), ["mailbox" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 800, $this->source); })())]);
        // line 801
        echo "                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 809
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Before"), "html", null, true);
        echo "</label>
                        <div class=\"uv-field-block range\" id=\"before-filter\">
                            <input class=\"uv-field uv-date-picker\" type=\"text\" data-filter-type=\"before\" id=\"before-filter-input\">
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 816
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("After"), "html", null, true);
        echo "</label>
                        <div class=\"uv-field-block range\" id=\"after-filter\">
                            <input class=\"uv-field uv-date-picker\" type=\"text\" data-filter-type=\"after\" id=\"after-filter-input\">
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 823
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Replies less than"), "html", null, true);
        echo "</label>
                        <div class=\"uv-field-block\" id=\"reply-filter\">
                            <input class=\"uv-field\" type=\"number\" min=\"1\" data-filter-type=\"replies-less\" id=\"repliesLess-filter-input\">
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 830
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Replies more than"), "html", null, true);
        echo "</label>
                        <div class=\"uv-field-block\" id=\"reply-filter\">
                            <input class=\"uv-field\" type=\"number\" min=\"0\" data-filter-type=\"replies-more\" id=\"repliesMore-filter-input\">
                        </div>
                    </div>

                    <div class=\"uv-action-buttons\">
                    </div>

                    ";
        // line 840
        echo "                    <a class=\"uv-btn-remove\" href=\"#\"><span class=\"uv-icon-discard\"></span> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Clear All"), "html", null, true);
        echo "</a>
                </div>

                ";
        // line 844
        echo "                <div class=\"uv-filter-edit\" style=\"display: none;\"></div>
            </div>

            <script type=\"text/javascript\">
                var filterContext = ";
        // line 848
        echo json_encode((isset($context["filterContext"]) || array_key_exists("filterContext", $context) ? $context["filterContext"] : (function () { throw new RuntimeError('Variable "filterContext" does not exist.', 848, $this->source); })()));
        echo "
            </script>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 854
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 855
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "

    ";
        // line 858
        echo "    <script id=\"ticket_list_sorting_tmp\" type=\"text/template\">
        <li class=\"<% if(sort == 'ticket.id') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/ticket.id/<% if(sort == 'ticket.id') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"ticket.id\">
                ";
        // line 861
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ticket Id", [], "messages");
        // line 862
        echo "                <% if(sort == 'ticket.id') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
                <% } %>
            </a>
        </li>

        <li class=\"<% if(sort == 'ticket.updatedAt') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/ticket.updatedAt/<% if(sort == 'ticket.updatedAt') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"ticket.updatedAt\">
                ";
        // line 870
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last Replied", [], "messages");
        // line 871
        echo "                <% if(sort == 'ticket.updatedAt') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
                <% } %>
            </a>
        </li>

        <li class=\"<% if(sort == 'agentName') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/agentName/<% if(sort == 'agentName') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"agentName\">
                ";
        // line 879
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Assign To", [], "messages");
        // line 880
        echo "                <% if(sort == 'agentName') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
                <% } %>
            </a>
        </li>

        <li class=\"<% if(sort == 'customerEmail') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/customerEmail/<% if(sort == 'customerEmail') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"customerEmail\">
                ";
        // line 888
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer Email", [], "messages");
        // line 889
        echo "                <% if(sort == 'customerEmail') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
                <% } %>
            </a>
        </li>

        <li class=\"<% if(sort == 'customerName') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/customerName/<% if(sort == 'customerName') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"customerName\">
                ";
        // line 897
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer Name", [], "messages");
        // line 898
        echo "                <% if(sort == 'customerName') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
                <% } %>
            </a>
        </li>
    </script>

    ";
        // line 906
        echo "    <script id=\"ticket_status_list_tmp\" type=\"text/template\">
        <ul class=\"status-list\">
            ";
        // line 908
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ticketStatusCollection"]) || array_key_exists("ticketStatusCollection", $context) ? $context["ticketStatusCollection"] : (function () { throw new RuntimeError('Variable "ticketStatusCollection" does not exist.', 908, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 909
            echo "                <li>
                    <a href=\"#\" class=\"<% if(active == ";
            // line 910
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 910), "html", null, true);
            echo " ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 910), 1))) {
                echo " || active == 0";
            }
            echo ") { %>uv-aside-nav-active<% } %>\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 910), "html", null, true);
            echo "\">
                        <span class=\"name\">";
            // line 911
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["status"], "description", [], "any", false, false, false, 911)), "html", null, true);
            echo "</span>
                        <span class=\"uv-flag-gray\">
                            <% if(status && status[1] != undefined) { %>
                                <%= status[";
            // line 914
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 914), "html", null, true);
            echo "] %>
                            <% } else { %>
                                0
                            <% } %>
                        </span>
                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 922
        echo "        </ul>
    </script>

    ";
        // line 926
        echo "    <script id=\"predefined_label_tmp\" type=\"text/template\">
        <li>
            <a href=\"#\" <% if (active == '') { %> class=\"uv-aside-active\" <% } %>>
            ";
        // line 929
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        echo "
            <span class=\"uv-flag-gray uv-flag-dark\"><%= labelDetails.predefind.all %></span>
            </a>
        </li>
        <li>
            <a href=\"#new\" <% if(active == 'new') { %> class=\"uv-aside-active\" <% } %> >
            ";
        // line 935
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New"), "html", null, true);
        echo "
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.new %>
                </span>
            </a>
        </li>
        <li>
            <a href=\"#unassigned\" <% if(active == 'unassigned') { %> class=\"uv-aside-active\" <% } %> >
            ";
        // line 943
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("UnAssigned"), "html", null, true);
        echo "
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.unassigned %>
                </span>
            </a>
        </li>
        <li>
            <a href=\"#notreplied\" <% if(active == 'notreplied') { %> class=\"uv-aside-active\" <% } %> >
            ";
        // line 951
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("UnAnswered"), "html", null, true);
        echo "
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.notreplied %>
                </span>
            </a>
        </li>
        <li>
            <a href=\"#mine\" <% if(active == 'mine') { %> class=\"uv-aside-active\" <% } %> >
            ";
        // line 959
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My Tickets"), "html", null, true);
        echo "
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.mine %>
                </span>
            </a>
        </li>
        <li>
            <a href=\"#starred\" <% if(active == 'starred') { %> class=\"uv-aside-active\" <% } %> >
            ";
        // line 967
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Starred"), "html", null, true);
        echo "
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.starred %>
                </span>
            </a>
        </li>
        <li>
            <a href=\"#trashed\" <% if(active == 'trashed') { %> class=\"uv-aside-active\" <% } %>>
            ";
        // line 975
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Trashed"), "html", null, true);
        echo "
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.trashed %>
                </span>
            </a>
        </li>
    </script>

    ";
        // line 984
        echo "    <script id=\"custom_label_tmp\" type=\"text/template\">
        <a href=\"#label/<%= id %>\"  data-id=\"<%= id %>\">
            <%- name %>
            <span class=\"uv-flag-gray\" style=\"<% if(colorCode) { %>background-color:<%= colorCode %><% } %>\">
                <%= count %>
            </span>
        </a>
        <span class=\"uv-customize\" data-target=\"uv-task-view\" data-toggle=\"tooltip\" title=\"";
        // line 991
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Label"), "html", null, true);
        echo "\"></span>
    </script>

    ";
        // line 995
        echo "    <script id=\"add_edit_label_tmp\" type=\"text/template\">
        <div class=\"uv-aside-head\">
            <div class=\"uv-aside-title\">
                <% if(id) { %>
                <h6>";
        // line 999
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Label"), "html", null, true);
        echo "</h6>
                <% } else { %>
                <h6>";
        // line 1001
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Label"), "html", null, true);
        echo "</h6>
                <% } %>
            </div>
            <div class=\"uv-aside-back\" id=\"back-to-labels\">
                <span>";
        // line 1005
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back"), "html", null, true);
        echo "</span>
            </div>
        </div>
        <div class=\"uv-aside-option\" data-id=\"<%= id %>\">

            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">";
        // line 1011
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        echo "</label>
                <div class=\"uv-field-block\">
                    <input class=\"uv-field\" type=\"text\" value=\"<%- name %>\" />
                </div>
            </div>

            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">";
        // line 1018
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose a Color"), "html", null, true);
        echo "</label>
                <div class=\"uv-field-block\">
                    <% colors = ['#337CFF','#FEBF00','#E5549F','#27B6BB','#FB8A3F','#43AF52'] %>
                    <% for(var colorTemp in colors) { %>
                    <span class=\"uv-color-block <% if(colorCode == colors[colorTemp]) { %>uv-color-active<% } %>\" data-color=\"<%- colors[colorTemp] %>\" style=\"background:<%- colors[colorTemp] %>\"></span>
                    <% } %>
                </div>
            </div>
            <div>
                <a class=\"uv-btn add-update-btn\" href=\"#\">
                    <% if(id) { %>
                    ";
        // line 1029
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update"), "html", null, true);
        echo "
                    <% } else { %>
                    ";
        // line 1031
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create"), "html", null, true);
        echo "
                    <% } %>
                </a>
            </div>
            <% if(id) { %>
            <a class=\"uv-btn-remove\"><span class=\"uv-icon-discard\"></span>";
        // line 1036
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove Label"), "html", null, true);
        echo "</a>
            <% } %>
        </div>
    </script>

    ";
        // line 1042
        echo "    <script id=\"add_edit_saved_filter_tmp\" type=\"text/template\">
        <form>
            <div class=\"uv-filter-edit-head\">
                <div class=\"uv-filter-edit-title\">
                    <h6>
                        <% if(id) { %>
                        <input type=\"hidden\" name=\"id\" id=\"filter-id\" value=\"<%= id %>\"/>
                        ";
        // line 1049
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Saved Filter"), "html", null, true);
        echo "
                        <% } else { %>
                        ";
        // line 1051
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New Saved Filter"), "html", null, true);
        echo "
                        <% } %>
                    </h6>
                </div>
                <div class=\"uv-filter-edit-back back-to-filter\">
                    <span>";
        // line 1056
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back"), "html", null, true);
        echo "</span>
                </div>
            </div>
            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">";
        // line 1060
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        echo "</label>
                <div class=\"uv-field-block\">
                    <input class=\"uv-field name\" name=\"name\" type=\"text\" value=\"<%- name %>\" />
                </div>
            </div>

            <div class=\"uv-element-block\">
                <label>
                    <div class=\"uv-checkbox\">
                        <input type=\"checkbox\" name=\"is_default\" <% if(is_default) { %>checked<% } %> />
                        <span class=\"uv-checkbox-view\"></span>
                    </div>
                    <span class=\"uv-checkbox-label\">";
        // line 1072
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Is Default"), "html", null, true);
        echo "</span>
                </label>
            </div>

            <div class=\"uv-filters-group\">
                <% _.each(filters, function(filter, key){ %>
                <div class=\"uv-element-block\" data-filter=\"<%= key %>\">
                    <label class=\"uv-field-label\"><%- filter.name %></label>
                    <div class=\"uv-field-block\">
                        <% _.each(filter.options, function(option){ %>
                        <a class=\"uv-btn-tag\" href=\"#\" data-id=\"<%= option.id %>\">
                            <%- option.name %>
                            <span class=\"uv-icon-remove-dark\"></span>
                        </a>
                        <% }); %>
                    </div>
                </div>
                <% }); %>

                <div class=\"uv-action-buttons\">
                    <% if(id) { %>
                    <a class=\"uv-btn-remove\"><span class=\"uv-icon-discard\"></span>";
        // line 1093
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove Saved Filter"), "html", null, true);
        echo "</a>
                    <% } %>
                </div>
            </div>
            <div class=\"uv-action-buttons\">
                <a class=\"uv-btn <% if(id) { %>update-filter<% } else { %>save-filter<% } %>\" href=\"#\">
                    <% if(id) { %>
                    ";
        // line 1100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update"), "html", null, true);
        echo "
                    <% } else { %>
                    ";
        // line 1102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create"), "html", null, true);
        echo "
                    <% } %>
                </a>
                <a class=\"uv-btn back-to-filter\" href=\"#\">";
        // line 1105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "</a>
            </div>
        </form>
    </script>

    ";
        // line 1111
        echo "    <script id=\"ticket_quick_view_tmp\" type=\"text/template\">
        <div class=\"uv-pull-right quick-view-navigation\">
            <div class=\"uv-loader\" style=\"display: none\">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <% if(previous) { %>
            <span class=\"uv-btn-tag uv-icon-nav-pre\" data-id=\"<%= previous %>\">
                </span>
            <% } else { %>
            <span class=\"uv-btn-tag uv-icon-nav-pre\" disabled=\"disabled\">
                </span>
            <% } %>
            <% if(next) { %>
            <span class=\"uv-btn-tag uv-icon-nav-nxt\"  data-id=\"<%= next %>\">
                </span>
            <% } else { %>
            <span class=\"uv-btn-tag uv-icon-nav-nxt\" disabled=\"disabled\">
                </span>
            <% } %>
        </div>
        <span class=\"uv-pop-up-close\"></span>
        <a href=\"<%= path %>\"><h2>";
        // line 1134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket Info"), "html", null, true);
        echo " #<%= id %></h2></a>
        <div class=\"uv-pop-up-body uv-inner-section\">
            <div class=\"uv-view\">
                <div class=\"uv-ticket-head\">
                    <div class=\"uv-ticket-strip\">
                        <span>
                            <span class=\"uv-ticket-strip-label\">
                                ";
        // line 1141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Timestamp"), "html", null, true);
        echo " -
                            </span>
                            <span class=\"uv-margin-0\">
                                <%= formatedCreatedAt %>
                            </span>
                        </span>
                        <span>
                            <span class=\"uv-ticket-strip-label\">
                                ";
        // line 1149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("By"), "html", null, true);
        echo " -
                            </span>
                            <%- createThread.user.name %>
                        </span>
                        <% if(agent) { %>
                        <span class=\"agent-info\" style=\"\">
                                <span class=\"uv-ticket-strip-label\">
                                    ";
        // line 1156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        echo " -
                                </span>
                                <span class=\"name\"><%- agent.name %></span>
                            </span>
                        <% } %>
                    </div>
                    <div class=\"uv-ticket-strip\">
                        <span class=\"uv-btn-tag\">
                            ";
        // line 1164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Priority"), "html", null, true);
        echo "
                            - <%- priority.description %>
                        </span>
                        <span class=\"uv-btn-tag\">
                            ";
        // line 1168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        echo "
                            - <%- status.description %>
                        </span>
                        <% if(lastReplyAgentName) { %>
                        <span class=\"uv-btn-tag\">
                                ";
        // line 1173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last Replied Agent"), "html", null, true);
        echo "
                                - <%- lastReplyAgentName.name.split(\" \")[0] %>
                            </span>
                        <% } %>
                    </div>
                </div>
                <div class=\"uv-ticket-head\">
                    <h1><%- subject %></h1>
                </div>

                <div class=\"uv-ticket-section\">
                    <div class=\"uv-ticket-main create\">
                        <div class=\"uv-ticket-strip\">
                            <span>
                                <span class=\"uv-margin-0 timeago\" data-timestamp=\"<%= createThread.timestamp %>\" title=\"<%= createThread.formatedCreatedAt %>\"><%= createThread.formatedCreatedAt %></span>
                                - <%- createThread.user.name %>
                                <span class=\"uv-ticket-strip-label\">
                                    ";
        // line 1190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("created Ticket"), "html", null, true);
        echo "
                                </span>
                            </span>
                        </div>
                        <div class=\"uv-ticket-main-lt\">
                            <% if (createThread.user.smallThumbnail != null) { %>
                                <img class='border' src=\"";
        // line 1196
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1196, $this->source); })()), "request", [], "any", false, false, false, 1196), "scheme", [], "any", false, false, false, 1196) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1196, $this->source); })()), "request", [], "any", false, false, false, 1196), "httpHost", [], "any", false, false, false, 1196)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
        echo "<%= createThread.user.smallThumbnail %>\"/>
                            <% } else { %>
                                <% if (createThread.createdBy == 'customer') { %>
                                    <img class='border' src=\"";
        // line 1199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_customer_image_path"]) || array_key_exists("default_customer_image_path", $context) ? $context["default_customer_image_path"] : (function () { throw new RuntimeError('Variable "default_customer_image_path" does not exist.', 1199, $this->source); })())), "html", null, true);
        echo "\"/>
                                <% } else { %>
                                    <img class='border' src=\"";
        // line 1201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 1201, $this->source); })())), "html", null, true);
        echo "\"/>
                                <% } %>
                            <% } %>
                        </div>
                        <div class=\"uv-ticket-main-rt\">
                            <% if(createThread.createdBy == 'customer') { %>
                            <a href=\"";
        // line 1207
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_manage_customer_account");
        echo "/<%= createThread.user.id %>\" class=\"uv-ticket-member-name\">
                                <% } else { %>
                                <% if(createThread.user) { %>
                                <a href=\"";
        // line 1210
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_account");
        echo "/<%= createThread.user.id %>\" class=\"uv-ticket-member-name\">
                                    <% } else { %>
                                    <a class=\"uv-ticket-member-name\">
                                        <% } %>
                                        <% } %>
                                        <%- createThread.user.name %>
                                    </a>

                                    <div class=\"message\">
                                        <p>
                                            <%= createThread.reply %>
                                        </p>
                                    </div>
                                    <!-- Attachment Block -->
                                    <% if(createThread.attachments.length) { %>
                                    <div class=\"uv-ticket-uploads\">
                                        <h4>";
        // line 1226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Uploaded Files"), "html", null, true);
        echo "</h4>
                                        <div class=\"uv-ticket-uploads-strip\">
                                            <% _.each(createThread.attachments, function(file) { %>
                                            <a href=\"<%-file.downloadURL %>\" target =\"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"<%- file.name %>\">
                                                <img src=\"<%-file.iconURL %>\" class=\"uv-auto-pointer-events\">
                                            </a>
                                            <% }) %>
                                        </div>
                                        <% if(createThread.attachments.length >1) { %>
                                        <div class=\"thread-attachments-zip pull-left\">
                                            <div class=\"uv-upload-actions\">
                                                <a href=\"";
        // line 1237
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_download_attachment_zip");
        echo "/<%= createThread.id %>\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download (as .zip)"), "html", null, true);
        echo "</a>
                                            </div>
                                        </div>
                                        <% } %>

                                    </div>
                                    <% } %>
                                    <!-- //Attachment Block -->
                        </div>
                    </div>
                    <% if(lastReply) { %>
                    <div class=\"uv-ticket-main\">
                        <div class=\"uv-ticket-strip\">
                                <span>
                                    <span class=\"uv-margin-0 timeago\" data-timestamp=\"<%= lastReply.timestamp %>\" title=\"<%= lastReply.formatedCreatedAt %>\"><%= lastReply.formatedCreatedAt %></span>
                                    - <%- lastReply.user.name %>
                                    <span class=\"uv-ticket-strip-label\">
                                        ";
        // line 1254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("made last reply"), "html", null, true);
        echo "
                                    </span>
                                </span>
                        </div>
                        <div class=\"uv-ticket-main-lt\">
                            <% if (lastReply.user.smallThumbnail != null) { %>
                                <img class='border' src=\"";
        // line 1260
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1260, $this->source); })()), "request", [], "any", false, false, false, 1260), "scheme", [], "any", false, false, false, 1260) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1260, $this->source); })()), "request", [], "any", false, false, false, 1260), "httpHost", [], "any", false, false, false, 1260)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
        echo "<%= lastReply.user.smallThumbnail %>\"/>
                            <% } else { %>
                                <% if (lastReply.createdBy == 'customer') { %>
                                    <img class='border' src=\"";
        // line 1263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_customer_image_path"]) || array_key_exists("default_customer_image_path", $context) ? $context["default_customer_image_path"] : (function () { throw new RuntimeError('Variable "default_customer_image_path" does not exist.', 1263, $this->source); })())), "html", null, true);
        echo "\"/>
                                <% } else { %>
                                    <img class='border' src=\"";
        // line 1265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 1265, $this->source); })())), "html", null, true);
        echo "\"/>
                                <% } %>
                            <% } %>
                        </div>
                        <div class=\"uv-ticket-main-rt\">
                            <% if(lastReply.createdBy == 'customer') { %>
                            <a href=\"";
        // line 1271
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_manage_customer_account");
        echo "/<%= lastReply.user.id %>\" class=\"uv-ticket-member-name\">
                                <% } else { %>
                                <% if(lastReply.user) { %>
                                <a href=\"";
        // line 1274
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_account");
        echo "/<%= lastReply.user.id %>\" class=\"uv-ticket-member-name\">
                                    <% } else { %>
                                    <a class=\"uv-ticket-member-name\">
                                        <% } %>
                                        <% } %>
                                        <%- lastReply.user.name %>
                                    </a>

                                    <div class=\"message\">
                                        <p>
                                            <%= lastReply.reply %>
                                        </p>
                                    </div>
                                    <!-- Attachment Block -->
                                    <% if(lastReply.attachments.length) { %>
                                    <div class=\"uv-ticket-uploads\">
                                        <h4>";
        // line 1290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Uploaded Files"), "html", null, true);
        echo "</h4>
                                        <div class=\"uv-ticket-uploads-strip\">
                                            <% _.each(lastReply.attachments, function(file) { %>
                                            <a href=\"<%-file.downloadURL %>\" target =\"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"<%- file.name %>\">
                                                <img src=\"<%-file.iconURL %>\" class=\"uv-auto-pointer-events\">
                                            </a>
                                            <% }) %>
                                        </div>
                                        <% if(lastReply.attachments.length> 1) { %>
                                        <div class=\"thread-attachments-zip pull-left\">
                                            <div class=\"uv-upload-actions\">
                                                <a href=\"";
        // line 1301
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_download_attachment_zip");
        echo "/<%= lastReply.id %>\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download (as .zip)"), "html", null, true);
        echo "</a>
                                            </div>
                                        </div>
                                        <% } %>

                                    </div>
                                    <% } %>
                                    <!-- //Attachment Block -->
                        </div>
                    </div>
                    <% } %>
                </div>
            </div>
        </div>
    </script>

    ";
        // line 1318
        echo "    <script id=\"ticket_list_item_tmp\" type=\"text/template\">
        <td class=\"uv-width-140 uv-no-content\">
            <span class=\"uv-list-ticket-priority\" style=\"<% if(priority) { %>background: <%=priority.colorCode %><% } %>;\"></span>
            <label class=\"uv-vertical-align uv-margin-right-5\">
                <div class=\"uv-checkbox\">
                    <input type=\"checkbox\" class=\"mass-action-checkbox\" value=\"<%= id %>\"/>
                    <span class=\"uv-checkbox-view\"></span>
                </div>
            </label>
            <span class=\"uv-star <% if(isStarred) { %>uv-star-active<% } %> uv-margin-right-5\"></span>
            <span data-index=\"source\">
                <% if(source == 'email') {  %>
                    <span class=\"uv-channel uv-channel-email uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Email\"></span>
                <% } else if(source == 'facebook') {  %>
                    <span class=\"uv-channel uv-channel-facebook uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"></span>
                <% } else if(source == 'twitter') {  %>
                    <span class=\"uv-channel uv-channel-twitter uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"></span>
                <% } else if(source == 'binaka' || source == 'knock') {  %>
                    <span class=\"uv-channel uv-channel-binaka uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Binaka\"></span>
                <% } else if(source == 'api') { %>
                    <span class=\"uv-channel uv-channel-api uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"API\"></span>
                <% } else if(source == 'formbuilder') { %>
                    <span class=\"uv-channel uv-channel-form-builder uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Formbuilder\"></span>
\t\t\t\t<% } else if(source == 'disqus-engage') { %>
                    <span class=\"uv-channel uv-channel-disqus-engage uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Disqus\"></span>
\t\t\t\t<% } else if(source == 'ebay') { %>
                    <span class=\"uv-channel uv-channel-ebay uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Ebay\"></span>
\t\t\t\t<% } else if(source == 'youtube') { %>
                    <span class=\"uv-channel uv-channel-youtube uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Youtube\"></span>
                <% } else { %>
                    <span class=\"uv-channel uv-channel-web uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"<%- source %>\"></span>
                <% } %>

            </span>
            <span class=\"uv-quick-view-trigger\" data-id=\"<%= id %>\"></span>
        </td>
        <td data-value=\"";
        // line 1354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID"), "html", null, true);
        echo "\" class=\"uv-width-100\">
            <a href=\"<%= path %>\">
                #<%= id %>
            </a>
        </td>
        <td data-value=\"";
        // line 1359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
        echo "\">
            <a href=\"<%= path %>\">
                <%- subject && subject.length <= 300 ? subject : subject.substr(0, 300) + '...'  %>
            </a>
        </td>
        <td data-value=\"";
        // line 1364
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Name"), "html", null, true);
        echo "\" data-index=\"customer-name\">
            <a href=\"<%= path %>\">
                <%- customer.name %>
            </a>
        </td>
        <td data-value=\"";
        // line 1369
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Email"), "html", null, true);
        echo "\" data-index=\"customer-email\">
            <a href=\"<%= path %>\">
                <%- customer.email %>
            </a>
        </td>
        <td data-value=\"";
        // line 1374
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Timestamp"), "html", null, true);
        echo "\" data-index=\"timestamp\">
            <a href=\"<%= path %>\" class=\"timeago\" data-timestamp=\"<%= timestamp %>\" title=\"<%= formatedCreatedAt %>\">
                <%= formatedCreatedAt %>
            </a>
        </td>
        <td data-value=\"";
        // line 1379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last Reply"), "html", null, true);
        echo "\" data-index=\"last-reply\">
            <% if(lastReplyTime) { %>
                <a href=\"<%= path %>\">
                    <%= lastReplyTime %>
                </a>
            <% } else { %>
                    ";
        // line 1385
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"), "html", null, true);
        echo "
            <% } %>
        </td>
        <td data-value=\"";
        // line 1388
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
        echo "\" data-index=\"group\">
            <a href=\"<%= path %>\">
                <% if(group) { %>
                <%- group %>
                <% } else { %>
                ";
        // line 1393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"), "html", null, true);
        echo "
                <% } %>
            </a>
        </td>
        <td data-value=\"";
        // line 1397
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team"), "html", null, true);
        echo "\" data-index=\"team\">
            <a href=\"<%= path %>\">
                <% if(team) { %>
                <%- team %>
                <% } else { %>
                ";
        // line 1402
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"), "html", null, true);
        echo "
                <% } %>
            </a>
        </td>
        <td data-value=\"";
        // line 1406
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
        echo "\" data-index=\"type1\">
            <a href=\"<%= path %>\">
                <% if(type) { %>
                <%- type %>
                <% } else { %>
                ";
        // line 1411
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"), "html", null, true);
        echo "
                <% } %>
            </a>
        </td>
        <td data-value=\"";
        // line 1415
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Replies"), "html", null, true);
        echo "\" data-index=\"replies\">
            <a href=\"<%= path %>\">
                <%= totalThreads %>
            </a>
        </td>
        <td data-value=\"";
        // line 1420
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        echo "\" data-index=\"agent\">
            <a href=\"<%= path %>\">
                <% if(agent) { %>
                <% if(agent.smallThumbnail != null) { %>
                <img src=\"";
        // line 1424
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1424, $this->source); })()), "request", [], "any", false, false, false, 1424), "scheme", [], "any", false, false, false, 1424) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1424, $this->source); })()), "request", [], "any", false, false, false, 1424), "httpHost", [], "any", false, false, false, 1424)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
        echo "<%= agent.smallThumbnail %>\" alt=\"\"/>
                <% } else { %>
                <img src=\"";
        // line 1426
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 1426, $this->source); })())), "html", null, true);
        echo "\" alt=\"\"/>
                <% } %>
                <%- agent.name %>
                <% } else { %>
                ";
        // line 1430
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unassigned"), "html", null, true);
        echo "
                <% } %>
            </a>
        </td>
    </script>

    <script type=\"text/javascript\">
        var isPageJustLoaded = true;
        var globalMessageResponse = \"\";
        var currentUserId = \"";
        // line 1439
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1439, $this->source); })()), "getCurrentUser", [], "method", false, false, false, 1439), "id", [], "any", false, false, false, 1439), "html", null, true);
        echo "\";
        var pathToTicket = \"";
        // line 1440
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket", ["ticketId" => "replaceId"]);
        echo "\";

        \$(() => {
            \$('#before-filter-input').datetimepicker({
                format: 'DD-MM-YYYY',
                maxDate: 'now',
                useCurrent: false,
            });

            \$('#after-filter-input').datetimepicker({
                format: 'DD-MM-YYYY',
                maxDate: 'now',
                useCurrent: false,
            });

            // Ticket Model
            var TicketModel = Backbone.Model.extend({
                idAttribute: \"id\",
                defaults: {
                    path: \"\",
                },
                urlRoot: \"";
        // line 1461
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_xhr");
        echo "\"
            });

            // Ticket Label Model
            var LabelModel = Backbone.Model.extend({
                idAttribute: \"id\",
                defaults: {
                    count: 0,
                },
                parse: function (resp, options) {
                    return JSON.parse(resp.label);
                },
                urlRoot: \"";
        // line 1473
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_label_xhr");
        echo "\"
            });

            // Ticket Quick View Model
            var TicketQuickViewModel = Backbone.Model.extend({
                idAttribute: \"id\",
                defaults: {
                    path: \"\",
                    isSynced: false
                }
            });

            // Side Filter Model
            var SideFilterModel = Backbone.Model.extend({
                updateModel: function(type,json) {
                    if(this.has(type)) {
                        context = this.get(type)

                        savedOptionsIds = [];
                        _.each(context, function (option) {
                            savedOptionsIds.push(parseInt(option.id))
                        })

                        if(jQuery.inArray(parseInt(json.id), savedOptionsIds) == -1) {
                            context.push(json);
                            this.set(type, context)
                        }
                    } else {
                        this.set(type, [json])
                    }
                },
                loadFilterOptions: function(data) {
                    var self = this;
                    \$.ajax({
                        url : \"";
        // line 1507
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_collection_load_filter_options_xhr");
        echo "\",
                        type : 'POST',
                        data: data,
                        dataType : 'json',
                        success : function(response) {
                            _.each(response,function(filter,key) {
                                _.each(filter, function (item) {
                                    self.updateModel(key,item)
                                })
                            })
                            sideFilter.render();
                        },
                        error: function (xhr) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                }
            });

            // Ticket Label Collection
            var LabelCollection = Backbone.Collection.extend({
                model: LabelModel,
                isLabelExist: function(labelName, labelId) {
                    var flag = 1;
                    _.each(this.models, function (item) {
                        if(item.get('name').toUpperCase() == labelName.toUpperCase() && item.id != labelId)
                            flag = 0;
                    }, this);
                    return flag;
                }
            });

            // Ticket Collection
            var TicketCollection = AppCollection.extend({
                model: TicketModel,
                url: \"";
        // line 1543
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_collection_xhr");
        echo "\",
                filterParameters: {
                    label: \"\",
                    new: \"\",
                    unassigned: \"\",
                    notreplied: \"\",
                    mine: \"\",
                    starred: \"\",
                    trashed: \"\",
                    label: \"\",
                    status: \"\",
                    search: \"\",
                    agent: \"\",
                    customer: \"\",
                    priority: \"\",
                    type: \"\",
                    group: \"\",
                    team: \"\",
                    tag: \"\",
                    mailbox : \"\",
                    source : \"\",
                    after: \"\",
                    before: \"\",
                    repliesLess: \"\",
                    repliesMore: \"\",
                },
                parseRecords: function (response, options) {
                    return response.tickets;
                },
                syncData: function() {
                    app.appView.showLoader();
                    \$('.select-all-checkbox').prop('checked', false);

                    this.fetch({
                        data: this.getValidParameters(),
                        reset: true,
                        success: function(model, response) {
                            ticketQuickViewCollection.reset()
                            app.appView.hideLoader();
                            var ticketListView = new TicketList();

                            app.pager.paginationData = response.pagination;
                            var url = app.pager.paginationData.url;
                            if(ticketCollection.length == 0 && app.pager.paginationData.current != \"0\")
                                router.navigate(url.replace('replacePage', app.pager.paginationData.last),{trigger: true});
                            else {
                                app.pager.render();
                                statusListDetails = response.tabs;
                                labelDetails = response.labels;
                                labelListView.render();
                            }

                            if (globalMessageResponse) {
                                app.appView.renderResponseAlert(globalMessageResponse);
                            }

                            globalMessageResponse = null;
                            sideFilter.backToFilter()
                        },
                        error: function (model, xhr, options) {
                            app.appView.hideLoader();
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                },
                batchOperation: function(data) {
                    var self = this;
                    app.appView.showLoader();
                    \$.ajax({
                        url : \"";
        // line 1613
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_collection_mass_action_xhr");
        echo "\",
                        type : 'POST',
                        data : {data : data},
                        dataType : 'json',
                        success : function(response) {
                            app.appView.hideLoader();
                            globalMessageResponse = response;
                            self.syncData();
                        },
                        error: function (xhr) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                            \$('.mass-action-checkbox').prop('checked', false);
                        }
                    });
                }
            });

            // Ticket Quick View Collection
            var TicketQuickViewCollection = Backbone.Collection.extend({
                model: TicketQuickViewModel,
                isModelSynced: function(id) {
                    if (model = this.get(id)) {
                        if (parseInt(model.attributes.isSynced)) {
                            return model;
                        }
                    }

                    return false;
                },
                initialize: function() {
                    _.bindAll(this, 'getNextPrev', 'nextElement', 'previousElement');
                },
                getNextPrev : function(id) {
                    var data = {};
                    currentModel = ticketQuickViewCollection.get(id)
                    data['next'] = (model = this.nextElement(currentModel)) ? model.id : 0;
                    data['previous'] = (model = this.previousElement(currentModel)) ? model.id : 0;

                    return data;
                },
                nextElement: function(model) {
                    var index = ticketQuickViewCollection.indexOf(model);
                    if ((index + 1) === ticketQuickViewCollection.length)
                        return 0;

                    return ticketQuickViewCollection.at(index + 1);
                },
                previousElement: function(model) {
                    var index = ticketQuickViewCollection.indexOf(model);
                    if (index === 0 )
                        return 0;

                    return ticketQuickViewCollection.at(index - 1);
                }
            });

            // Filter
            var Filter = app.Filter.extend({
                defaultSortIndex: 'ticket.updatedAt',
                sortText: \"";
        // line 1679
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort By:", [], "messages");
        echo " \",
                defaultSortText: \"";
        // line 1680
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort By:", [], "messages");
        echo " ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last Replied", [], "messages");
        echo "\",
                template : _.template(\$(\"#ticket_list_sorting_tmp\").html()),
                events : {
                    'keyup .uv-search-inline' : 'search',
                    'change .asset-visibility input[type=\"checkbox\"]': 'filterAssetsVisibility'
                },
                filterAssetsVisibilityOnLoad: function() {
                    if(localStorage.getItem('assets-visibility')) {
                        var assets = JSON.parse(localStorage.getItem('assets-visibility'));
                        \$.each(assets, function(asset, assetVal) {
                            if(assetVal) {
                                \$('span[data-index=\"' + asset + '\"], td[data-index=\"' +asset + '\"], th[data-index=\"' + asset + '\"]').show()
                                \$('#' + asset).prop('checked', true);
                            } else {
                                \$('span[data-index=\"' + asset + '\"], td[data-index=\"' +asset + '\"], th[data-index=\"' + asset + '\"]').hide()
                                \$('#' + asset).prop('checked', false);
                            }
                        })
                    }
                },
                filterAssetsVisibility: function(e) {
                    var assets = {};
                    \$('.asset-visibility input').each(function() {
                        var asset = \$(this).val();
                        if(\$(this).is(':checked')) {
                            assets[asset] = 1;
                            \$('span[data-index=\"' + asset + '\"], td[data-index=\"' + asset + '\"], th[data-index=\"' + asset + '\"]').show()
                        } else {
                            assets[asset] = 0;
                            \$('span[data-index=\"' + asset + '\"], td[data-index=\"' + asset + '\"], th[data-index=\"' + asset + '\"]').hide()
                        }
                    });

                    localStorage.setItem('assets-visibility', JSON.stringify(assets));
                },
                search : _.debounce(function(e) {
                    this.collection.reset();
                    this.collection.state.currentPage = null;
                    this.collection.filterParameters.search = Backbone.\$(e.target).val();
                    var queryString = app.appView.buildQuery(\$.param(this.collection.getValidParameters()));
                    router.navigate(queryString,{trigger: true});
                }, 1000)
            });

            // Side Filter View
            var SideFilter = Backbone.View.extend({
                el: \$(\".uv-filter-view\"),
                isRecurrsiveCalls: 0,
                isReadyFlag: 0,
                appliedFilterOptions: {},
                tempAppliedFilterOptions: {},
                events: {
                    'change #saved-filter': 'applySavedFilter',
                    'input .uv-field-block input' : 'searchFilterOption',
                    'click .uv-dropdown-list li' : 'applyFilter',
                    'dp.change .range input': 'applyFilter',
                    'click .uv-filtered-tags .uv-btn-tag' : 'removeFilter',
                    'change .custom-filter' : 'filterByCustom',
                    'change #repliesLess-filter-input' : 'filterByRepliesLessThan',
                    'change #repliesMore-filter-input' : 'filterByRepliesMoreThan',
                    'keyup .search-custom, change .search-custom' : 'filterByCustom',
                    'click .new-saved-reply, .edit-saved-reply, .uv-filter-paper .uv-customize': 'addEditSavedReply',
                    'click .back-to-filter': 'backToFilter',
                    'click .uv-filter-edit .uv-btn-tag': 'removeSavedFilterOption',
                    'click .uv-filter-edit .save-filter, .uv-filter-edit .update-filter' : \"saveSavedFilter\",
                    'click .uv-filter-edit .uv-action-buttons .uv-btn-remove': 'removeSavedFilter'
                },
                loaderTemplate: _.template(\$(\"#loader-tmp\").html()),
                addEditSavedReplyTemplate: _.template(\$(\"#add_edit_saved_filter_tmp\").html()),
                checkOptionAvailable: function() {
                    this.isReadyFlag = 0;
                    var self = this;
                    var fetchOptions = {};

                    _.each(ticketCollection.filterParameters, function (filter,key) {
                        if(jQuery.inArray(key, ['customer','tag','label']) !== -1) {
                            if(filter != null && filter != '') {
                                filter = filter.split(',');

                                if(typeof fetchOptions[key] === 'undefined')
                                    fetchOptions[key] = [];

                                savedOptionsIds = [];
                                if(sideFilterModel.has(key)) {
                                    _.each(sideFilterModel.get(key), function (option) {
                                        savedOptionsIds.push(parseInt(option.id))
                                    })
                                }

                                _.each(filter, function (item) {
                                    if(jQuery.inArray(parseInt(item), savedOptionsIds) == -1) {
                                        fetchOptions[key].push(parseInt(item));
                                        self.isReadyFlag = 1;
                                    }
                                })
                            }
                        }
                    });

                    return fetchOptions;
                },
                render: function() {
                    fetchOptions = this.checkOptionAvailable();

                    if(this.isReadyFlag && !this.isRecurrsiveCalls) {
                        this.isReadyFlag = 0;
                        this.isRecurrsiveCalls = 1;
                        sideFilterModel.loadFilterOptions(fetchOptions)
                    } else {
                        var appliedFilterOptions = {};
                        \$('.uv-filtered-tags').html(\"\")
                        var self = this;
                        var displayFlag = 0;
                        _.each(ticketCollection.filterParameters, function (filter, key) {
                            if(jQuery.inArray(key, ['customer', 'agent', 'priority', 'type', 'group', 'team', 'tag', 'mailbox', 'source', 'after', 'before', 'repliesLess', 'repliesMore']) !== -1) {
                                if(filter != null && filter != '') {
                                    displayFlag = 1;
                                    filter = filter.split(',');

                                    appliedFilterOptions[key] = {'name': key.charAt(0).toUpperCase() + key.slice(1)};
                                    appliedFilterOptions[key]['options'] = [];

                                    _.each(filter, function (value) {
                                        if(key == 'after' || key == 'before' || key == 'repliesLess' || key == 'repliesMore') {
                                            \$(\"#\" + key + \"-filter-input\").val(filter)
                                            appliedFilterOptions[key]['options'].push({'id': filter, 'name': filter});
                                        } else {
                                            savedOptions = sideFilterModel.get(key)
                                            _.each(savedOptions, function (item) {
                                                if(item.id == value) {
                                                    appliedFilterOptions[key]['options'].push({'id': item.id, 'name': item.name});

                                                    parent = \$('#'+key+'-filter')
                                                    parent.find('.uv-filtered-tags').append(\"<a class='uv-btn-tag' href='#' data-id='\" + item.id + \"'>\" + item.name + \"<span class='uv-icon-remove-dark'></span></a>\")
                                                    parent.find('input').val('')
                                                }
                                            })
                                        }
                                    });
                                }
                            } else if(jQuery.inArray(key, ['new','unassigned','notreplied','mine','starred','trashed']) !== -1) {
                                if(filter != null && filter != '') {
                                    displayFlag = 1;
                                    appliedFilterOptions[key] = {'name': \"";
        // line 1823
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label"), "html", null, true);
        echo "\"};
                                    appliedFilterOptions[key]['options'] = [];
                                    var optionName = (key == 'mine') ? \"";
        // line 1825
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Assigned to me", [], "messages");
        echo "\" : key.charAt(0).toUpperCase() + key.slice(1);
                                    appliedFilterOptions[key]['options'].push({'id': key, 'name': optionName});
                                } else {
                                    if(!ticketCollection.filterParameters.new && !ticketCollection.filterParameters.unassigned && !ticketCollection.filterParameters.notreplied && !ticketCollection.filterParameters.mine && !ticketCollection.filterParameters.starred && !ticketCollection.filterParameters.trashed &&! ticketCollection.filterParameters.label) {
                                        appliedFilterOptions['all'] = {'name': \"";
        // line 1829
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label"), "html", null, true);
        echo "\"};
                                        appliedFilterOptions['all']['options'] = [];
                                        appliedFilterOptions['all']['options'].push({'id': 1, 'name': \"";
        // line 1831
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        echo "\"});
                                    }
                                }
                            } else if(key == 'label') {
                                if(filter != null && filter != '') {
                                    displayFlag = 1;
                                    var labelModel = labelCollection.get(filter);
                                    appliedFilterOptions[key] = {'name': \"";
        // line 1838
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label"), "html", null, true);
        echo "\"};
                                    appliedFilterOptions[key]['options'] = [];
                                    if(labelModel) {
                                        appliedFilterOptions[key]['options'] = [];
                                        appliedFilterOptions[key]['options'].push({'id': labelModel.attributes.id, 'name': labelModel.attributes.name});
                                    } else {
                                        savedOptions = sideFilterModel.get(key)
                                        _.each(savedOptions, function (item) {
                                            if(item.id == filter) {
                                                appliedFilterOptions[key]['options'].push({'id': item.id, 'name': item.name});
                                            }
                                        });
                                    }
                                } else {
                                    if(!ticketCollection.filterParameters.new && !ticketCollection.filterParameters.unassigned && !ticketCollection.filterParameters.notreplied && !ticketCollection.filterParameters.mine && !ticketCollection.filterParameters.starred && !ticketCollection.filterParameters.trashed &&! ticketCollection.filterParameters.label) {
                                        appliedFilterOptions['all'] = {'name': \"";
        // line 1853
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label"), "html", null, true);
        echo "\"};
                                        appliedFilterOptions['all']['options'] = [];
                                        appliedFilterOptions['all']['options'].push({'id': 1, 'name': \"";
        // line 1855
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        echo "\"});
                                    }
                                }
                            } else if(key == 'status') {
                                appliedFilterOptions[key] = {'name': \"";
        // line 1859
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        echo "\"};
                                appliedFilterOptions[key]['options'] = []
                                if(filter != null && filter != '' && filter != 1) {
                                    displayFlag = 1;
                                    appliedFilterOptions[key]['options'].push({'id': filter, 'name': \$(\".status-list li a[data-id='\" + filter + \"'] .name\").text().trim()});
                                } else {
                                    appliedFilterOptions[key]['options'].push({'id': 1,'name': \"";
        // line 1865
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Open"), "html", null, true);
        echo "\"});
                                }


                            } else if(key == 'search') {
                                if(filter != null && filter != '') {
                                    displayFlag = 1;
                                    appliedFilterOptions[key] = {'name': \"";
        // line 1872
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search Query"), "html", null, true);
        echo "\"};
                                    appliedFilterOptions[key]['options'] = [];
                                    appliedFilterOptions[key]['options'].push({'id': filter, 'name': filter});
                                }
                            } else if(key == 'custom') {
                                if(filter != null && filter != '') {
                                    self.\$el.find('[data-filter=\"custom\"]').remove();

                                    displayFlag = 1;

                                    var realKey = key;
                                    var checkBoxStore = Array();
                                    var dataValueValueSeprator = '_';
                                    var columnSeperator = '|';

                                    var multiOptions = filter.split(columnSeperator);
                                    var multiKeyValue, multiKeyValueValue, ele, newEle;

                                    _.each(multiOptions, function(valueData, indexData) {
                                        if(!valueData)
                                            return;

                                        multiKeyValue = valueData.split(dataValueValueSeprator);

                                        multiKeyValueValue = multiKeyValue[1].split(',');

                                        eleSelector = '[data-value=\"' + multiKeyValue[0] + '\"]';
                                        ele = \$(eleSelector);

                                        if(ele[0].type == 'radio') {
                                            var dataValue = multiKeyValue[0];
                                            name = ele.parents('.uv-element-block:not(.radio)').find('label:first').text().trim()
                                            value =  \$(eleSelector + '[value=\"' + multiKeyValue[1] + '\"]').parent().next().text();

                                            appliedFilterOptions['z-'+dataValue] = {'name': name, 'type': 'radio'};
                                            appliedFilterOptions['z-'+dataValue]['options'] = [];
                                            appliedFilterOptions['z-'+dataValue]['options'].push({'id': multiKeyValue[1], 'name': value});
                                        } else if(ele[0].type == 'checkbox') {

                                            var dataValue = multiKeyValue[0];
                                            if(\$.inArray(dataValue, checkBoxStore) >= 0)
                                                return;
                                            checkBoxStore.push(dataValue);

                                            name = ele.parents('.uv-element-block:not(.checkbox)').find('label:first').text().trim()

                                            appliedFilterOptions['z-'+dataValue] = {'name': name, 'type': 'checkbox'};
                                            appliedFilterOptions['z-'+dataValue]['options'] = [];
                                            var optionName, optionValue;
                                            _.each(multiKeyValueValue, function(value) {
                                                newEle = \$(eleSelector + '[value=\"' + value + '\"]')
                                                optionValue = dataValue + dataValueValueSeprator + newEle.val();
                                                optionName = newEle.parent().next().text();
                                                if(optionValue && optionName) {
                                                    appliedFilterOptions['z-'+dataValue]['options'].push({'id': value, 'name': optionName});
                                                }
                                            });
                                        } else if(ele[0].type == 'select-multiple') {
                                            var dataValue = multiKeyValue[0];
                                            filter = multiKeyValueValue;
                                            key = ele.attr('id');
                                            name = ele.parents('.uv-element-block').find('label:first').text().trim()

                                            appliedFilterOptions['z-'+dataValue] = {'name': name, 'type': 'select-multiple'};
                                            appliedFilterOptions['z-'+dataValue]['options'] = [];

                                            _.each(filter, function (value) {
                                                var optionName;
                                                if(optionName = \$(\"#\"+key+\" option[value='\" + value + \"']\").text()) {
                                                    appliedFilterOptions['z-'+dataValue]['options'].push({'id': value, 'name': optionName});
                                                }
                                            });

                                        } else if(ele[0].type == 'text' || ele[0].type == 'number') {
                                            filter = multiKeyValue[1];
                                            if(filter != null && filter != '') {
                                                filter = filter.replace(/\\+/g,' ');
                                                displayFlag = 1;
                                                var dataValue = ele.attr('data-value');
                                                name = ele.parents('.uv-element-block').find('label:first').text().trim()

                                                appliedFilterOptions['z-'+dataValue] = {'name': name, 'type': ele[0].type};
                                                appliedFilterOptions['z-'+dataValue]['options'] = [];
                                                appliedFilterOptions['z-'+dataValue]['options'].push({'id': 1, 'name': filter});

                                            }

                                        }
                                    })
                                }
                            }
                            if('after' == key || 'before' == key || 'repliesLess' == key || 'repliesMore' == key) {
                                \$('#'+ key +'-filter-input').val(filter);
                            }
                        })
                        if(displayFlag) {
                            self.\$el.find('.uv-filter-options .uv-action-buttons').html(\"\")
                            if(\$(\"#saved-filter\").val() != null && \$(\"#saved-filter\").val() != '' && Backbone.history.getFragment() == userFilters[\$(\"#saved-filter\").val()]['route']) {
                                self.\$el.find('.uv-filter-options .uv-action-buttons').append(\"<a class='uv-btn edit-saved-reply' href='#'>";
        // line 1970
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit"), "html", null, true);
        echo "</a>\").show();
                                \$('.uv-filter-paper .uv-customize').show()
                            } else {
                                self.\$el.find('.uv-filter-options .uv-action-buttons').append(\"<a class='uv-btn new-saved-reply' href='#'>";
        // line 1973
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New"), "html", null, true);
        echo "</a>\").show();
                                if(\$(\"#saved-filter\").val() != null && \$(\"#saved-filter\").val() != '') {
                                    self.\$el.find('.uv-filter-options .uv-action-buttons').append(\"<a class='uv-btn edit-saved-reply' href='#'>";
        // line 1975
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update"), "html", null, true);
        echo "</a>\").show();
                                    \$('.uv-filter-paper .uv-customize').show()
                                } else {
                                    \$('.uv-filter-paper .uv-customize').hide()
                                }
                            }
                        } else {
                            \$('.uv-filter-paper .uv-customize').hide()
                        }

                        this.appliedFilterOptions = appliedFilterOptions;
                        this.tempAppliedFilterOptions = jQuery.extend(true, {}, appliedFilterOptions);
                    }
                },
                searchFilterOption: function(e) {
                    self = this;
                    currentElement = Backbone.\$(e.currentTarget);
                    dropdown = currentElement.siblings('.uv-dropdown-list');
                    var filterType =  currentElement.attr('data-filter-type');
                    if(jQuery.inArray(filterType, ['customer', 'tag']) !== -1) {
                        self.searchFilterXhr(currentElement);
                    }
                },
                searchFilterXhr: _.debounce(function(currentElement) {
                    var parent = currentElement.parent();
                    if(\$('.uv-dropdown-other.uv-dropdown-btn-active').parent().attr('id') != parent.attr('id'))
                        return;

                    parent.find(\"li:not(.uv-no-results, .uv-filter-info)\").remove();
                    parent.find(\".uv-filter-info\").show()
                    if(currentElement.val().length > 1) {
                        parent.append(this.loaderTemplate())
                        parent.find('.uv-filter-info').text(\"";
        // line 2007
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Searching", [], "messages");
        echo " ...\")
                        if(self.xhrReq)
                            self.xhrReq.abort();

                        self.xhrReq = \$.ajax({
                            url : \"";
        // line 2012
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_collection_search_filter_options_xhr");
        echo "\",
                            type : 'GET',
                            data: {\"type\" : currentElement.attr('data-filter-type'), \"query\" : currentElement.val(), 'not' : ticketCollection.filterParameters[currentElement.attr('data-filter-type')]},
                            dataType : 'json',
                            success : function(response) {
                                self.xhrReq = 0;
                                parent.find('.uv-loader').remove()
                                parent.find('.uv-filter-info').text(\"";
        // line 2019
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        echo "\").hide();
                                if(response.length == 0) {
                                    parent.find('.uv-no-results').show()
                                } else {
                                    parent.find('.uv-no-results').hide();
                                    _.each(response, function(item) {
                                        if(currentElement.attr('data-filter-type') == 'customer') {
                                            var img = item.smallThumbnail ? \"";
        // line 2026
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2026, $this->source); })()), "request", [], "any", false, false, false, 2026), "scheme", [], "any", false, false, false, 2026) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2026, $this->source); })()), "request", [], "any", false, false, false, 2026), "httpHost", [], "any", false, false, false, 2026)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
        echo "\"+item.smallThumbnail : \"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_customer_image_path"]) || array_key_exists("default_customer_image_path", $context) ? $context["default_customer_image_path"] : (function () { throw new RuntimeError('Variable "default_customer_image_path" does not exist.', 2026, $this->source); })())), "html", null, true);
        echo "\";
                                            parent.find('.uv-dropdown-list ul').append(\"<li data-id='\" + item.id + \"'><img src='\" + img + \"'/>\" + item.name + \"</li>\")
                                        } else
                                            parent.find('.uv-dropdown-list ul').append(\"<li data-id='\" + item.id + \"'>\" + item.name + \"</li>\")
                                    });
                                }
                            },
                            error: function (xhr) {
                                self.xhrReq = 0;
                                parent.find('.uv-loader').remove()
                                parent.find('.uv-no-results').hide();
                                parent.find('.uv-filter-info').text(\"";
        // line 2037
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        echo "\").show();
                                if(url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                            }
                        });
                    } else {
                        parent.find('.uv-no-results').hide();
                    }
                },1000),
                applySavedFilter: function(e) {
                    var element = Backbone.\$(e.currentTarget);
                    if(element.val() != \"\") {
                        var element = Backbone.\$(e.currentTarget);
                        router.navigate(userFilters[element.val()]['route'], {trigger: true});
                    } else {
                        router.navigate('', {trigger: true});
                    }
                },
                applyFilter: function(e) {
                    currentElement = Backbone.\$(e.currentTarget);
                    if(currentElement.attr(\"data-id\")) {
                        var flag = 1;
                        parent = currentElement.parents(\".uv-field-block\");
                        filterType = parent.find('input').attr('data-filter-type');

                        if(filterType == \"customer\" || filterType == 'tag') {
                            sideFilterModel.updateModel(filterType, {'id': currentElement.attr('data-id'), 'name': currentElement.text()})
                            parent.find(\".uv-no-results\").hide()
                            parent.find(\".uv-filter-info\").show().text(\"";
        // line 2065
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        echo "\")
                            parent.find(\"li:not(.uv-no-results, .uv-filter-info)\").remove();
                        } else {
                            if(ticketCollection.filterParameters[filterType]) {
                                ids = ticketCollection.filterParameters[filterType].split(',')
                                if(jQuery.inArray(currentElement.attr('data-id'), ids) !== -1)
                                    flag = 0;
                            }
                        }

                        parent.find('input').val('')
                        if(jQuery.inArray(filterType, ['agent', 'priority', 'type', 'group', 'team', 'mailbox', 'source']) !== -1) {
                            parent.find(\"li:not(.uv-no-results)\").show()
                        }
                        if(flag) {
                            parent.find('.uv-filtered-tags').append(\"<a class='uv-btn-tag' href='#' data-id='\" + currentElement.attr('data-id') + \"'>\"+currentElement.text()+\"<span class='uv-icon-remove-dark'></span></a>\")
                            ticketCollection.state.order = null;
                            ticketCollection.state.sortKey = null;
                            ticketCollection.state.currentPage = null;
                            ticketCollection.filterParameters[filterType] = this.joinTagValues(parent.find(\".uv-filtered-tags\"));
                            var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                            router.navigate(queryString, {trigger: true});
                        }
                    } else {
                        filterType = currentElement.attr('data-filter-type');
                        if(filterType == 'before' || filterType == \"after\") {
                            ticketCollection.state.order = null;
                            ticketCollection.state.sortKey = null;
                            ticketCollection.state.currentPage = null;
                            ticketCollection.filterParameters[filterType] = currentElement.val();
                            var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                            router.navigate(queryString, {trigger: true});
                        }
                    }
                },
                removeFilter: function(e) {
                    e.preventDefault()

                    currentElement = Backbone.\$(e.currentTarget);
                    filterType = currentElement.parents('.uv-field-block').find('input').attr('data-filter-type')
                    var options = ticketCollection.filterParameters[filterType];
                    options = options.split(',');
                    var index = options.indexOf(currentElement.attr('data-id'));
                    options.splice(index, 1);
                    ticketCollection.state.order = null;
                    ticketCollection.state.sortKey = null;
                    ticketCollection.state.currentPage = null;
                    ticketCollection.filterParameters[filterType] = options.join(',');
                    currentElement.remove()

                    var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                    router.navigate(queryString, {trigger: true});
                },
                joinTagValues: function(parent) {
                    var ids = new Array();
                    parent.find('.uv-btn-tag').each(function() {
                        ids.push(\$(this).attr('data-id'))
                    });
                    return ids.join();
                },
                filterByRepliesMoreThan: _.debounce(function(e) {
                    ticketCollection.state.order = null;
                    ticketCollection.state.sortKey = null;
                    ticketCollection.state.currentPage = null;
                    ticketCollection.filterParameters.repliesMore = \$(e.target).val();
                    var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                    router.navigate(queryString, { trigger: true });
                }, 1000),
                filterByRepliesLessThan: _.debounce(function(e) {
                    ticketCollection.state.order = null;
                    ticketCollection.state.sortKey = null;
                    ticketCollection.state.currentPage = null;
                    ticketCollection.filterParameters.repliesLess = \$(e.target).val();
                    var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                    router.navigate(queryString, { trigger: true });
                }, 1000),
                filterByCustom: _.debounce(function(e) {
                    var custom = '';
                    var checkBoxStore = Array();
                    var indexValueSeperator = '_';
                    var columnSeperator = '|';

                    Backbone.\$('.custom-filter').each(function(){
                        if(\$(this).context.type == 'radio' && \$(this).is(':checked')) {
                            custom += \$(this).attr('data-value') + indexValueSeperator + \$(this).val() + columnSeperator;
                        } else if(\$(this).context.type == 'checkbox' && \$(this).is(':checked')) {
                            var checkboxValue = Array();
                            var dataValue = \$(this).attr('data-value');
                            if(\$.inArray(dataValue, checkBoxStore) >= 0)
                                return;
                            \$.each(\$('[data-value=\"'+ dataValue +'\"]:checked'), function() {
                                checkboxValue.push(\$(this).val());
                            });
                            checkBoxStore.push(dataValue);
                            custom += dataValue + indexValueSeperator + checkboxValue.join() + columnSeperator;
                        } else if(\$(this).context.type == 'select-multiple' && \$(this).val()) {
                            custom += \$(this).attr('data-value') + indexValueSeperator + \$(this).val().join() + columnSeperator;
                        }
                    })

                    Backbone.\$('.search-custom').each(function(){
                        if(\$(this).val()){
                            custom += \$(this).attr('data-value') + indexValueSeperator + \$(this).val() + columnSeperator;
                        }
                    })

                    custom = custom.replace(/\\|\$/, '');

                    ticketCollection.state.order = null;
                    ticketCollection.state.sortKey = null;
                    ticketCollection.state.currentPage = null;
                    ticketCollection.filterParameters.custom = custom;
                    var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                    router.navigate(queryString,{trigger: true});
                }, 1000),
                backToFilter: function(e) {
                    if(e)
                        e.preventDefault()
                    this.\$el.find('.uv-filter-options').show()
                    this.\$el.find('.uv-filter-edit').hide()
                },
                addEditSavedReply: function(e) {
                    e.preventDefault()

                    var context = {};
                    this.tempAppliedFilterOptions = jQuery.extend(true, {}, this.appliedFilterOptions);
                    if(Backbone.\$(e.currentTarget).is('.new-saved-reply')) {
                        context = {'id': 0, 'name': '', 'is_default': 0, 'filters': this.tempAppliedFilterOptions};
                    } else {
                        context = userFilters[\$(\"#saved-filter\").val()];
                        context.filters = this.tempAppliedFilterOptions;
                        userFilters[\$(\"#saved-filter\").val()]
                    }
                    \$('.uv-filter-edit').html('')
                    \$('.uv-filter-edit').append(this.addEditSavedReplyTemplate(context));
                    this.\$el.find('.uv-filter-options').hide()
                    this.\$el.find('.uv-filter-edit').show()
                },
                removeSavedFilterOption: function(e) {
                    e.preventDefault()
                    var parent = Backbone.\$(e.currentTarget).parents('.uv-element-block');
                    var elementIndex = Backbone.\$(e.currentTarget).index();
                    var filterType = parent.attr('data-filter');
                    var filterId = Backbone.\$(e.currentTarget).attr('data-id');

                    delete this.tempAppliedFilterOptions[filterType]['options'][elementIndex]
                    Backbone.\$(e.currentTarget).remove()
                    if(!parent.find('.uv-btn-tag').length) {
                        parent.remove()
                        delete this.tempAppliedFilterOptions[filterType];
                    }
                    if(this.getSavedFilterRoute() == '') {
                        this.backToFilter();
                    }
                },
                saveSavedFilter: function(e) {
                    e.preventDefault()

                    if(Backbone.\$(e.currentTarget).hasClass('save-filter'))
                        this.saveFilterAjax('POST')
                    else {
                        this.saveFilterAjax('PUT')
                    }
                },
                saveFilterAjax: function(method) {
                    var inputElement = \$('.uv-filter-edit input.name');
                    inputElement.removeClass('uv-field-error');
                    \$('.uv-field-message').remove()

                    if(inputElement.val() != undefined && inputElement.val() == '') {
                        inputElement.addClass('uv-field-error');
                        inputElement.parent().after(\"<span class='uv-field-message'>";
        // line 2236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "</span>\");
                    } else {
                        var data = \$('.uv-filter-edit form').serializeObject();
                        data['route'] = this.getSavedFilterRoute();
                        app.appView.showLoader();
                        self = this;
                        \$.ajax({
                            url : \"";
        // line 2243
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_saved_filters_xhr");
        echo "\",
                            type : method,
                            data: data,
                            dataType : 'json',
                            success : function(response) {
                                app.appView.hideLoader();
                                userFilters[response.filter.id] = response.filter;
                                \$(\"#saved-filter\").html(\"<option value=''>-- ";
        // line 2250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Saved Filter"), "html", null, true);
        echo " --</option>\")
                                _.each(userFilters, function(filter, key) {
                                    if(response.filter.is_default && filter.id != response.filter.id)
                                        userFilters[key]['is_default'] = 0;

                                    var selected = '';
                                    if(response.filter.id == filter.id)
                                        selected = \"selected\";
                                    \$(\"#saved-filter\").append(\"<option value='\" + filter.id + \"' selected='\" + selected + \"''>\" + filter.name + \"</option>\")
                                })

                                \$(\"#saved-filter\").val(response.filter.id)
                                app.appView.renderResponseAlert(response);
                                self.render();
                                self.backToFilter();
                            },
                            error: function (xhr) {
                                app.appView.hideLoader();
                                if(url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                            }
                        });
                    }
                },
                getSavedFilterRoute: function() {
                    var filterParameters = {};
                    temp = [];
                    _.each(this.tempAppliedFilterOptions, function (filter, key) {
                        if(jQuery.inArray(key, ['customer', 'agent', 'priority', 'type', 'group', 'team', 'tag', 'mailbox', 'source', 'after', 'before', 'repliesLess', 'repliesMore']) !== -1) {
                            var ids = [];
                            _.each(filter['options'], function (item) {
                                ids.push(item.id)
                            });
                            filterParameters[key] = ids.join(',')
                        } else if(jQuery.inArray(key, ['new','unassigned','notreplied','mine','starred','trashed']) !== -1) {
                            filterParameters[key] = 1;
                        } else if(jQuery.inArray(key, ['label', 'status', 'search']) !== -1) {
                            _.each(filter['options'], function (item) {
                                filterParameters[key] = item.id;
                            });
                        } else {
                            custom = key.split(\"z-\")
                            tempKey = custom[1];
                            if(filter.type == 'text' || filter.type == 'number') {
                                _.each(filter['options'], function (item) {
                                    temp.push(tempKey + '_' + item.name)
                                });
                            } else if(filter.type == 'radio') {
                                var ids = [];
                                _.each(filter['options'], function (item) {
                                    ids.push(item.id)
                                });
                                temp.push(tempKey + '_' + ids.join(','))
                            } else if(filter.type == 'checkbox' || filter.type == 'select-multiple') {
                                var ids = [];
                                _.each(filter['options'], function (item) {
                                    ids.push(item.id)
                                });
                                temp.push(tempKey + '_' + ids.join(','))
                            }
                        }
                    })
                    if(temp.length)
                        filterParameters['custom'] = temp.join('|');

                    return app.appView.buildQuery(\$.param(filterParameters));
                },
                removeSavedFilter: function(e) {
                    e.preventDefault()
                    self = this;
                    app.appView.showLoader();
                    \$.ajax({
                        url : \"";
        // line 2322
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_saved_filters_xhr");
        echo "/\" + \$(\"#saved-filter\").val(),
                        type : 'DELETE',
                        dataType : 'json',
                        success : function(response) {
                            app.appView.hideLoader();
                            delete userFilters[\$(\"#saved-filter\").val()];

                            \$(\"#saved-filter\").html(\"<option value=''>-- ";
        // line 2329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Saved Filter"), "html", null, true);
        echo " --</option>\")
                            _.each(userFilters, function(filter, key) {
                                \$(\"#saved-filter\").append(\"<option value='\" + filter.id + \"'>\" + filter.name + \"</option>\")
                            })

                            \$(\"#saved-filter\").val('')
                            app.appView.renderResponseAlert(response);
                            self.render();
                            self.backToFilter();
                        },
                        error: function (xhr) {
                            app.appView.hideLoader();
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                }
            });

            // Ticket Label Item View
            var LabelItemView = Backbone.View.extend({
                tagName: 'li',
                className: 'uv-customize-wrapper',
                template: _.template(\$(\"#custom_label_tmp\").html()),
                events: {
                    'click .delete': 'confirmRemove',
                    'click .label-color.dropdown .fa-caret-down' : 'showUpdateLabelPopup'
                },
                render: function() {
                    this.\$el.html(this.template(this.model.toJSON()));

                    if (ticketCollection.filterParameters.label != '') {
                        if (ticketCollection.filterParameters.label == this.model.id) {
                            this.\$el.find('a').addClass('uv-aside-active');
                        }
                    }

                    return this;
                }
            });

            // Ticket List Item View
            var TicketItem = Backbone.View.extend({
                tagName: \"tr\",
                template: _.template(\$(\"#ticket_list_item_tmp\").html()),
                events: {
                    'click .uv-star': \"updateStar\",
                },
                render: function () {
                    this.model.set({
                        path: pathToTicket.replace('replaceId', this.model.attributes.id)
                    });
                    this.\$el.html(this.template(this.model.toJSON()));

                    if (this.model.attributes.isAgentView != true) {
                        this.\$el.addClass('unread')
                    }

                    if (!this.model.attributes.agent) {
                        this.\$el.addClass('not-assigned')
                    }

                    return this;
                },
                updateStar: function(e) {
                    e.preventDefault();
                    if (Backbone.\$(e.currentTarget).hasClass('uv-star-active')) {
                        Backbone.\$(e.currentTarget).removeClass('uv-star-active');
                    } else {
                        Backbone.\$(e.currentTarget).addClass('uv-star-active');
                    }

                    this.model.save({
                        id: this.model.id
                    }, {
                        patch: true,
                        url: \"";
        // line 2405
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_bookmark_ticket_xhr");
        echo "\",
                        success: function (model, response, options) {},
                        error: function (model, xhr, options) {
                            if (url = xhr.getResponseHeader('Location')) {
                                window.location = url;
                            }
                        }
                    });
                }
            });

            // Ticket List View
            var TicketList = Backbone.View.extend({
                el: \$(\".uv-table table\"),
                initialize: function() {
                    this.render();
                },
                events: {
                    'change .mass-action-checkbox' : 'showBulkOptions',
                },
                showBulkOptions: function() {
                    var count = 0;
                    this.\$el.find('.mass-action-checkbox').each(function() {
                        if (\$(this).is(':checked')) {
                            count++;
                        }
                    });

                    if (count == \$('.mass-action-checkbox').length) {
                        \$('.select-all-checkbox').prop('checked', true);
                    } else {
                        \$('.select-all-checkbox').prop('checked', false);
                    }

                    if (count) {
                        \$('.uv-action-bar .filter').parent().hide();
                        \$('.uv-action-bar .mass-action').parent().addClass(\"uv-width-100\").show();
                        \$('.uv-action-bar-col-rt').hide()
                    } else {
                        \$('.uv-action-bar .mass-action').parent().removeClass(\"uv-width-100\").hide();
                        \$('.uv-action-bar .filter').parent().show();
                        \$('.uv-action-bar-col-rt').show();
                    }
                },
                render: function () {
                    this.\$el.find('tbody').html('');
                    if (ticketCollection.length) {
                        \$('.select-all-checkbox').prop( \"disabled\", false );
                        _.each(ticketCollection.models, function (item) {
                            ticketQuickViewCollection.add(new TicketQuickViewModel({id: item.id}))
                            this.renderTicket(item);
                        }, this);
                    } else {
                        \$('.select-all-checkbox').prop( \"disabled\", true );
                        this.\$el.find('tbody').append(\"<tr style='text-align: center;'><td colspan='11'>";
        // line 2459
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Record Found", [], "messages");
        echo "</td></tr>\")
                    }

                    filter.filterAssetsVisibilityOnLoad()
                    app.appView.relativeTime()
                },
                renderTicket: function (item) {
                    var ticketItem = new TicketItem({
                        model: item
                    });

                    this.\$el.find('tbody').append(ticketItem.render().el);
                }
            });

            // Ticket Label List View
            var LabelListView = Backbone.View.extend({
                el: \$(\".uv-aside\"),
                template: _.template(\$(\"#predefined_label_tmp\").html()),
                statusTemplate: _.template(\$(\"#ticket_status_list_tmp\").html()),
                addEditLabelTemplate: _.template(\$(\"#add_edit_label_tmp\").html()),
                events: {
                    'click .status-list li a': \"filterByStatus\",
                    'click .add-new-label, .uv-customize': 'addEditLabel',
                    'click #back-to-labels': 'backToLabels',
                    'click .uv-color-block': 'setLabelColor',
                    'click .add-update-btn': 'saveLabel',
                    'click .uv-add-edit-label .uv-btn-remove': 'removeLabel'
                },
                render: function() {
                    var active = \"\";

                    if (ticketCollection.filterParameters.new != '') {
                        active = \"new\";
                    } else if (ticketCollection.filterParameters.unassigned != '') {
                        active = \"unassigned\";
                    } else if (ticketCollection.filterParameters.notreplied != '') {
                        active = \"notreplied\";
                    }

                    if (ticketCollection.filterParameters.mine != '') {
                        active = \"mine\";
                    } else if (ticketCollection.filterParameters.starred != '') {
                        active = \"starred\";
                    } else if (ticketCollection.filterParameters.trashed != '') {
                        active = \"trashed\";
                    } else if (ticketCollection.filterParameters.label != '') {
                        active = \"label\";
                    }

                    var data = {
                        'labelDetails' : labelDetails,
                        'active' : active
                    }
                    this.\$el.find('.predefined-label-list').html(this.template(data));

                    labelCollection.reset();
                    labelCollection.set(labelDetails.custom);
                    this.updateMassLabelList()
                },
                updateMassLabelList: function() {
                    this.\$el.find('.uv-aside-custom').html('');
                    var labelOptionHtml = \"\";
                    if(labelCollection.length) {
                        _.each(labelCollection.models, function (item) {
                            this.renderLabelItem(item);
                            labelOptionHtml = labelOptionHtml + \"<li data-index='\" + item.id + \"'><a href='#'>\" + item.attributes.name + \"</a></li>\";
                        }, this);
                    }
                    labelOptionHtml = labelOptionHtml ? labelOptionHtml : \"<li data-index='0'>";
        // line 2528
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No Label Created"), "html", null, true);
        echo "</li>\";
                    \$(\".mass-action ul.label\").html(labelOptionHtml);
                    this.renderStatus();
                },
                renderLabelItem : function (item) {
                    var labelItem = new LabelItemView({
                        model: item
                    });
                    this.\$el.find('.uv-aside-custom').append(labelItem.render().el);
                },
                renderStatus : function() {
                    if(typeof ticketCollection.filterParameters.status == \"undefined\" || ticketCollection.filterParameters.status == null)
                        var active = 0;
                    else
                        var active = ticketCollection.filterParameters.status;

                    this.\$el.find('.uv-aside-active').parent().find('.status-list').remove()
                    this.\$el.find('.uv-aside-active').parent().append(this.statusTemplate({status : statusListDetails, active : active}));
                },
                filterByStatus : function(e) {
                    e.preventDefault()

                    ticketCollection.reset();
                    ticketCollection.state.order = null;
                    ticketCollection.state.sortKey = null;
                    ticketCollection.state.currentPage = null;
                    ticketCollection.filterParameters.status = Backbone.\$(e.currentTarget).attr('data-id');
                    var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                    router.navigate(queryString, {trigger: true});
                },
                addEditLabel: function(e) {
                    e.preventDefault()
                    currentElement = Backbone.\$(e.currentTarget);
                    if(currentElement.hasClass('add-new-label'))
                        \$('.uv-add-edit-label').html(this.addEditLabelTemplate({id : 0, name : '', colorCode: ''}))
                    else
                        \$('.uv-add-edit-label').html(this.addEditLabelTemplate(labelCollection.get(currentElement.siblings('a').attr('data-id')).toJSON()))

                    \$('.uv-aside-default').hide()
                    \$('.uv-add-edit-label').show()
                },
                backToLabels: function(e) {
                    if(e)
                        e.preventDefault()
                    \$('.uv-aside-default').show()
                    \$('.uv-add-edit-label').hide()
                },
                setLabelColor: function(e) {
                    \$('.uv-color-block').removeClass('uv-color-active');
                    Backbone.\$(e.currentTarget).addClass('uv-color-active');
                },
                saveLabel : function(e) {
                    e.preventDefault()
                    var inputElement = \$('.uv-add-edit-label input');
                    inputElement.removeClass('uv-field-error');
                    \$('.uv-field-message').remove()

                    var labelName = app.appView.stripHTML(inputElement.val());
                    if(labelName == \"\") {
                        inputElement.addClass('uv-field-error');
                        inputElement.parent().after(\"<span class='uv-field-message'>";
        // line 2588
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "</span>\");
                    } else {
                        var labelId = parseInt(\$('.uv-aside-option').attr('data-id'))

                        model = labelId ? labelCollection.get(labelId) : new LabelModel()
                        model.set({name: labelName, colorCode: \$('.uv-color-block.uv-color-active').attr('data-color')});
                        self = this;
                        var flag = labelCollection.isLabelExist(labelName, labelId);
                        if(flag) {
                            app.appView.showLoader();
                            model.save({}, {
                                success: function (model, response, options) {
                                    app.appView.hideLoader();
                                    if(response.alertClass == \"success\") {
                                        if(!labelId) {
                                            labelCollection.add(model);
                                        }
                                        self.updateMassLabelList()
                                        app.appView.renderResponseAlert(response);
                                    } else {
                                        inputElement.addClass('uv-field-error');
                                        inputElement.parent().after(\"<span class='uv-field-message'>\" + response.alertMessage + \"</span>\");
                                    }

                                    self.backToLabels();
                                },
                                error: function (model, xhr, options) {
                                    if(url = xhr.getResponseHeader('Location'))
                                        window.location = url;
                                    app.appView.hideLoader();
                                    app.appView.renderResponseAlert(warningResponse);
                                }
                            });
                        } else {
                            inputElement.parent().after(\"<span class='uv-field-message'>";
        // line 2622
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label with same name already exist."), "html", null, true);
        echo "</span>\");
                        }
                    }
                },
                removeLabel: function(e) {
                    e.preventDefault()
                    self = this;
                    app.appView.showLoader();
                    model = labelCollection.get(\$('.uv-aside-option').attr('data-id'))
                    model.destroy({
                        success : function (model, response, options) {
                            app.appView.hideLoader();
                            self.updateMassLabelList()
                            app.appView.renderResponseAlert(response);
                            self.backToLabels();
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(warningResponse);
                        }
                    });
                }
            });

            // Bulk Action View
            var BulkActionView = Backbone.View.extend({
                el: \$(\".mass-action\"),
                currentEvent: null,
                events: {
                    'click ul li, #mass-restore': 'massAction',
                    'click #mass-delete, #mass-delete-forever': 'confirmRemove',
                    'click #mass-restore': 'confirmRestore'
                },
                massAction: function(e) {
                    e.preventDefault();
                    if(!parseInt(Backbone.\$(e.currentTarget).attr('data-index')))
                        return;

                    var data = {};
                    data['actionType'] = Backbone.\$(e.currentTarget).parents('ul').attr('data-action') ? Backbone.\$(e.currentTarget).parents('ul').attr('data-action') : Backbone.\$(e.currentTarget).attr('data-action');
                    data['targetId'] = Backbone.\$(e.currentTarget).attr('data-index');
                    data['ids'] = this.getCheckedTicketIds();
                    ticketCollection.batchOperation(data);
                    this.hideBulkOptions();
                },
                removeItem: function(e) {
                    var data = {};

                    if(Backbone.\$(this.currentEvent.currentTarget).is(\"#mass-delete\"))
                        data['actionType'] = \"trashed\";
                    else if(Backbone.\$(this.currentEvent.currentTarget).is(\"#mass-delete-forever\"))
                        data['actionType'] = \"delete\";

                    data['ids'] = this.getCheckedTicketIds();
                    ticketCollection.batchOperation(data);
                    this.hideBulkOptions();
                },
                restoreItem: function(e) {
                    var data = {};
                    data['actionType'] = \"restored\";

                    data['ids'] = this.getCheckedTicketIds();
                    ticketCollection.batchOperation(data);
                    this.hideBulkOptions();
                },
                getCheckedTicketIds: function() {
                    var ids = new Array();
                    \$('.mass-action-checkbox').each(function() {
                        if(\$(this).is(':checked')) {
                            ids.push(\$(this).val());
                        }
                    });

                    return ids;
                },
                confirmRemove: function(e) {
                    e.preventDefault();
                    this.currentEvent = e;
                    app.appView.openConfirmModal(this)
                },
                confirmRestore: function(e) {
                    e.preventDefault();
                    app.appView.openConfirmModal(this, 'restoreItem')
                },
                hideBulkOptions : function() {
                    \$('.uv-action-bar .mass-action').parent().removeClass(\"uv-width-100\").hide();
                    \$('.uv-action-bar .filter').parent().show();
                    \$('.uv-action-bar-col-rt').show()
                }
            });

            var PageView = Backbone.View.extend({
                el: '.uv-paper',
                events : {
                    'change .select-all-checkbox' : 'selectAll',
                    'click .uv-quick-view-trigger, .quick-view-navigation .uv-btn-tag': 'navigateQuickView',
                },
                quickViewTemplate: _.template(\$(\"#ticket_quick_view_tmp\").html()),
                navigateQuickView : function(e) {
                    e.preventDefault();
                    //\$(\"#quick-view-modal .uv-loader\").hide()
                    var currentElement = Backbone.\$(e.currentTarget);
                    ticketId = currentElement.attr('data-id');
                    if(ticketId) {
                        if(model = ticketQuickViewCollection.isModelSynced(ticketId)) {
                            this.renderQuickView(model.toJSON())
                        } else {
                            var self = this;
                            if(currentElement.hasClass(\"uv-quick-view-trigger\"))
                                app.appView.showLoader();

                            if(ticketQuickViewCollection.get(ticketId)) {
                                navData = ticketQuickViewCollection.getNextPrev(ticketId);
                                requiredNext = (!navData.next && app.pager.paginationData.next) ? 1 : 0;
                                requiredPrev = (!navData.previous && app.pager.paginationData.previous) ? 1 : 0;
                            } else
                                requiredNext = requiredPrev = 1;

                            if(self.xhrReq)
                                self.xhrReq.abort();

                            \$(\"#quick-view-modal .uv-loader\").show()
                            self.xhrReq = \$.ajax({
                                url : \"";
        // line 2747
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_quick_view_xhr");
        echo "\",
                                type : 'GET',
                                data : {ticketId : ticketId, next: requiredNext, previous: requiredPrev},
                                dataType : 'json',
                                success : function(response) {
                                    self.xhrReq = 0;
                                    if(currentElement.hasClass(\"uv-quick-view-trigger\"))
                                        app.appView.hideLoader();

                                    if(response.next == undefined)
                                        response.next = navData.next
                                    if(response.previous == undefined)
                                        response.previous = navData.previous

                                    response.isSynced = 1
                                    response.path = pathToTicket.replace('replaceId', response.incrementId);

                                    if(ticketQuickViewCollection.get(ticketId))
                                        ticketQuickViewCollection.set(response,{remove: false})
                                    else
                                        ticketQuickViewCollection.add(new TicketQuickViewModel(response))

                                    self.renderQuickView(response)
                                },
                                error: function (xhr) {
                                    self.xhrReq = 0;
                                    if(url = xhr.getResponseHeader('Location'))
                                        window.location = url;
                                    app.appView.hideLoader();
                                }
                            });
                        }
                    }
                },
                renderQuickView: function(response) {
                    \$('#quick-view-modal .uv-pop-up-box').html(this.quickViewTemplate(response));
                    app.appView.openModal('quick-view-modal')
                    \$('#quick-view-modal .message').find('img').removeAttr('crossorigin');

                    \$('#quick-view-modal .message').find('.uv-icon-ellipsis').remove();
                    \$('#quick-view-modal .message').find('.helpdesk_blockquote').eq(0).before(\"<span class='uv-icon-ellipsis uv-ellipsis-mirror'></span>\").hide();
                    app.appView.relativeTime();
                },
                selectAll : function(e) {
                    if(Backbone.\$(e.currentTarget).is(':checked')) {
                        \$('.mass-action-checkbox').prop('checked', true);
                        \$('.uv-action-bar .filter').parent().hide();
                        \$('.uv-action-bar .mass-action').parent().addClass(\"uv-width-100\").show();
                        \$('.uv-action-bar-col-rt').hide()
                    } else {
                        var count = 0;
                        \$('.mass-action-checkbox').each(function() {
                            if(\$(this).is(':checked'))
                                count++;
                        });
                        if(count == \$('.mass-action-checkbox').length) {
                            \$('.mass-action-checkbox').prop('checked', false);
                            \$('.uv-action-bar .filter').parent().show();
                            \$('.uv-action-bar .mass-action').parent().removeClass(\"uv-width-100\").hide();
                            \$('.uv-action-bar-col-rt').show()
                        }
                    }
                },
            });

            // Ticket Router
            Router = Backbone.Router.extend({
                routes: {
                    'page/:number(/sort/:sortField)(/direction/:order)' : 'paginate',
                    'status/:status(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByStatus',
                    'search/:query(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByQuery',
                    'agent/:agent(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByAgent',
                    'customer/:customer(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByCustomer',
                    'priority/:priority(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByPriority',
                    'type/:type(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByType',
                    'group/:group(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByGroup',
                    'team/:team(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterBySubGroup',
                    'tag/:tag(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByTags',
                    'mailbox/:mailbox(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByMailbox',
                    'source/:source(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterBySource',
                    'after/:after(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByAfter',
                    'before/:before(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByBefore',
                    'repliesLess/:repliesLess(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByRepliesLesserCount',
                    'repliesMore/:repliesMore(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByRepliesGreaterCount',
                    'custom/:custom(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByCustom',
                    'label/:labelId(/status/:status)(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByLabel',
                    'new(/status/:status)(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterNew',
                    'unassigned(/status/:status)(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterUnassigned',
                    'notreplied(/status/:status)(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterNotReplied',
                    'mine(/status/:status)(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterMine',
                    'starred(/status/:status)(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterstarred',
                    'trashed(/status/:status)(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterTrashed',
                    '': 'initializeList'
                },
                initializeList : function() {
                    \$(\"#saved-filter\").val('');
                    this.resetParams('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
                    this.fetch(null, null, null);
                },
                paginate : function(number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','','','', '');
                    this.fetch(number,sortField,order);
                },
                filterByLabel : function(labelId,status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams(labelId,'','','','','','',status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterNew : function(status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('',1,'','','','','',status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterUnassigned : function(status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','',1,'','','','',status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterNotReplied: function(status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','',1,'','','',status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);

                },
                filterMine : function(status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','',1,'','',status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterstarred : function(status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','',1,'',status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterTrashed : function(status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','',1,status,query,agent,customer,priority,type,group,team,tag,mailbox,source,custom);
                    this.fetch(number,sortField,order);
                },
                filterByStatus : function(status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','',status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByQuery : function(query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','',query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByAgent : function(agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','',agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByCustomer : function(customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','',customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByPriority : function(priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','',priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByType : function(type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','',type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByGroup : function(group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','',group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterBySubGroup : function(team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','',team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByTags : function(tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','',tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByMailbox : function(mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','',mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterBySource: function(source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','','',source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByAfter: function(after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','',after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByBefore: function(before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','',before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByRepliesLesserCount: function(repliesLess, repliesMore, custom, number, sortField, order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','','',repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByRepliesGreaterCount: function(repliesMore, custom, number, sortField, order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','','','',repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByCustom : function(custom, number, sortField, order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','','','','',custom);
                    this.fetch(number,sortField,order);
                },
                fetch: function(number, sortField, order) {
                    ticketCollection.state.currentPage = number;
                    filter.sortCollection(sortField, order);
                    ticketCollection.syncData();
                },
                resetParams : function(labelId,newLabel,unassigned,notreplied,mine,starred,trashed,status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom) {
                    _.each(userFilters, function(filter, index) {
                        if(Backbone.history.getFragment() == filter['route']) {
                            \$(\"#saved-filter\").val(index);
                        }
                    });

                    isPageJustLoaded = false;
                    if(query != null)
                        query = query.replace(/\\+/g,' ');
                    bulkAction.hideBulkOptions();
                    ticketCollection.filterParameters.label = labelId;
                    ticketCollection.filterParameters.new = newLabel;
                    ticketCollection.filterParameters.unassigned = unassigned;
                    ticketCollection.filterParameters.notreplied = notreplied;
                    ticketCollection.filterParameters.mine = mine;
                    ticketCollection.filterParameters.starred = starred;
                    ticketCollection.filterParameters.trashed = trashed;
                    ticketCollection.filterParameters.search = query;
                    \$(\".uv-search-inline\").val(query);
                    ticketCollection.filterParameters.status = status;
                    ticketCollection.filterParameters.agent = agent;
                    ticketCollection.filterParameters.customer = customer;
                    ticketCollection.filterParameters.priority = priority;
                    ticketCollection.filterParameters.type = type;
                    ticketCollection.filterParameters.group = group;
                    ticketCollection.filterParameters.team = team;
                    ticketCollection.filterParameters.tag = tag;
                    ticketCollection.filterParameters.mailbox = mailbox;
                    ticketCollection.filterParameters.source = source;
                    ticketCollection.filterParameters.after = after;
                    ticketCollection.filterParameters.before = before;
                    ticketCollection.filterParameters.repliesLess = repliesLess;
                    ticketCollection.filterParameters.repliesMore = repliesMore;

                    ticketCollection.filterParameters.custom = custom;
                    \$('.custom-fields').find('input[type=\"text\"]').val('');
                    \$('.custom-fields').find('select').val('');
                    \$('.custom-fields').find('input[type=\"radio\"]').prop('checked', false);
                    \$('.custom-fields').find('input[type=\"checkbox\"]').prop('checked', false);

                    if(custom) {
                        custom = custom.replace(/\\+/g,' ');

                        var indexValueSeperator = '_';
                        var columnSeperator = '|';

                        var multiOptions = custom.split(columnSeperator);
                        var multiKeyValue, multiKeyValueValue, ele;

                        _.each(multiOptions, function(valueData, indexData) {
                            if(!valueData)
                                return;

                            multiKeyValue = valueData.split(indexValueSeperator);

                            multiKeyValueValue = multiKeyValue[1].split(',');

                            ele = \$('[data-value=\"' + multiKeyValue[0] + '\"]');

                            if(ele[0].type == 'radio') {
                                \$('[data-value=\"' + multiKeyValue[0] + '\"][value=\"' + multiKeyValue[1] + '\"]').prop('checked', true);

                            } else if(ele[0].type == 'checkbox') {
                                _.each(ele, function(eleElements) {
                                    if(multiKeyValueValue.indexOf(eleElements.value) > -1) {
                                        \$(eleElements).prop('checked', true);
                                    }
                                });

                            } else if(ele[0].type == 'select-multiple') {
                                ele.val(multiKeyValueValue);

                            } else if(ele[0].type == 'text') {
                                ele.val(multiKeyValue[1]);
                            }
                        })

                    }

                    if(trashed) {
                        \$('.property-block').hide();
                        \$('.trashed-block').show();
                    } else {
                        \$('.property-block').show();
                        \$('.trashed-block').hide();
                    }

                    sideFilter.isRecurrsiveCalls = 0;
                    sideFilter.render();
                }
            });

            var router = new Router();
            var pageview = new PageView;
            var bulkAction = new BulkActionView();
            var sideFilterModel = new SideFilterModel(filterContext)
            var sideFilter = new SideFilter();
            var ticketCollection = new TicketCollection();
            var ticketQuickViewCollection = new TicketQuickViewCollection();
            var labelCollection = new LabelCollection();
            var labelListView = new LabelListView()
            var filter = new Filter({collection : ticketCollection});

            Backbone.history.start({
                push_state:true
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@UVDeskCoreFramework/ticketList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3935 => 2747,  3807 => 2622,  3770 => 2588,  3707 => 2528,  3635 => 2459,  3578 => 2405,  3499 => 2329,  3489 => 2322,  3414 => 2250,  3404 => 2243,  3394 => 2236,  3220 => 2065,  3189 => 2037,  3173 => 2026,  3163 => 2019,  3153 => 2012,  3145 => 2007,  3110 => 1975,  3105 => 1973,  3099 => 1970,  2998 => 1872,  2988 => 1865,  2979 => 1859,  2972 => 1855,  2967 => 1853,  2949 => 1838,  2939 => 1831,  2934 => 1829,  2927 => 1825,  2922 => 1823,  2774 => 1680,  2770 => 1679,  2701 => 1613,  2628 => 1543,  2589 => 1507,  2552 => 1473,  2537 => 1461,  2513 => 1440,  2509 => 1439,  2497 => 1430,  2490 => 1426,  2485 => 1424,  2478 => 1420,  2470 => 1415,  2463 => 1411,  2455 => 1406,  2448 => 1402,  2440 => 1397,  2433 => 1393,  2425 => 1388,  2419 => 1385,  2410 => 1379,  2402 => 1374,  2394 => 1369,  2386 => 1364,  2378 => 1359,  2370 => 1354,  2332 => 1318,  2311 => 1301,  2297 => 1290,  2278 => 1274,  2272 => 1271,  2263 => 1265,  2258 => 1263,  2252 => 1260,  2243 => 1254,  2221 => 1237,  2207 => 1226,  2188 => 1210,  2182 => 1207,  2173 => 1201,  2168 => 1199,  2162 => 1196,  2153 => 1190,  2133 => 1173,  2125 => 1168,  2118 => 1164,  2107 => 1156,  2097 => 1149,  2086 => 1141,  2076 => 1134,  2051 => 1111,  2043 => 1105,  2037 => 1102,  2032 => 1100,  2022 => 1093,  1998 => 1072,  1983 => 1060,  1976 => 1056,  1968 => 1051,  1963 => 1049,  1954 => 1042,  1946 => 1036,  1938 => 1031,  1933 => 1029,  1919 => 1018,  1909 => 1011,  1900 => 1005,  1893 => 1001,  1888 => 999,  1882 => 995,  1876 => 991,  1867 => 984,  1856 => 975,  1845 => 967,  1834 => 959,  1823 => 951,  1812 => 943,  1801 => 935,  1792 => 929,  1787 => 926,  1782 => 922,  1768 => 914,  1762 => 911,  1752 => 910,  1749 => 909,  1745 => 908,  1741 => 906,  1732 => 898,  1730 => 897,  1720 => 889,  1718 => 888,  1708 => 880,  1706 => 879,  1696 => 871,  1694 => 870,  1684 => 862,  1682 => 861,  1677 => 858,  1671 => 855,  1661 => 854,  1646 => 848,  1640 => 844,  1633 => 840,  1621 => 830,  1611 => 823,  1601 => 816,  1591 => 809,  1581 => 801,  1579 => 800,  1574 => 798,  1571 => 797,  1562 => 794,  1557 => 793,  1554 => 792,  1549 => 791,  1547 => 790,  1542 => 788,  1534 => 783,  1525 => 776,  1523 => 775,  1518 => 773,  1515 => 772,  1506 => 769,  1501 => 768,  1498 => 767,  1493 => 766,  1491 => 765,  1486 => 763,  1478 => 758,  1466 => 749,  1460 => 746,  1454 => 743,  1446 => 738,  1436 => 730,  1434 => 729,  1429 => 727,  1426 => 726,  1417 => 723,  1412 => 722,  1409 => 721,  1404 => 720,  1402 => 719,  1397 => 717,  1389 => 712,  1379 => 704,  1377 => 703,  1372 => 701,  1369 => 700,  1360 => 697,  1355 => 696,  1352 => 695,  1347 => 694,  1345 => 693,  1340 => 691,  1332 => 686,  1322 => 678,  1320 => 677,  1315 => 675,  1312 => 674,  1303 => 671,  1298 => 670,  1295 => 669,  1290 => 668,  1288 => 667,  1283 => 665,  1275 => 660,  1265 => 652,  1263 => 651,  1258 => 649,  1255 => 648,  1246 => 645,  1241 => 644,  1238 => 643,  1233 => 642,  1231 => 641,  1226 => 639,  1218 => 634,  1206 => 625,  1200 => 622,  1193 => 618,  1185 => 613,  1176 => 606,  1174 => 605,  1169 => 603,  1166 => 602,  1156 => 599,  1150 => 597,  1143 => 595,  1141 => 594,  1136 => 593,  1133 => 592,  1128 => 591,  1126 => 590,  1120 => 587,  1112 => 582,  1109 => 581,  1107 => 580,  1105 => 579,  1096 => 574,  1084 => 571,  1081 => 570,  1078 => 569,  1075 => 568,  1073 => 567,  1070 => 566,  1066 => 565,  1063 => 564,  1057 => 562,  1054 => 561,  1043 => 559,  1039 => 558,  1036 => 557,  1033 => 556,  1031 => 555,  1024 => 551,  1021 => 550,  1014 => 544,  1011 => 542,  1002 => 535,  998 => 534,  994 => 532,  991 => 530,  977 => 518,  973 => 517,  969 => 516,  965 => 515,  961 => 514,  957 => 513,  953 => 512,  949 => 511,  945 => 510,  941 => 509,  937 => 508,  930 => 503,  922 => 497,  916 => 494,  912 => 492,  906 => 487,  900 => 485,  897 => 484,  894 => 482,  888 => 480,  885 => 479,  882 => 477,  878 => 474,  872 => 472,  869 => 471,  855 => 459,  849 => 456,  846 => 455,  843 => 453,  836 => 448,  825 => 446,  821 => 445,  815 => 442,  809 => 439,  806 => 438,  803 => 437,  800 => 435,  794 => 431,  783 => 429,  779 => 428,  771 => 423,  766 => 421,  760 => 418,  757 => 417,  754 => 416,  751 => 414,  744 => 409,  733 => 407,  729 => 406,  723 => 403,  717 => 400,  714 => 399,  711 => 398,  708 => 396,  702 => 392,  691 => 390,  687 => 389,  677 => 382,  671 => 379,  668 => 378,  665 => 377,  662 => 375,  656 => 371,  645 => 369,  641 => 368,  631 => 361,  625 => 358,  622 => 357,  619 => 356,  616 => 354,  610 => 350,  600 => 347,  594 => 345,  587 => 343,  585 => 342,  580 => 341,  576 => 340,  566 => 333,  560 => 330,  557 => 329,  554 => 328,  548 => 323,  536 => 313,  526 => 305,  520 => 301,  510 => 293,  504 => 289,  494 => 281,  488 => 277,  478 => 269,  472 => 265,  462 => 257,  456 => 253,  446 => 245,  440 => 241,  430 => 233,  424 => 229,  414 => 221,  408 => 217,  398 => 209,  392 => 205,  385 => 201,  382 => 200,  373 => 193,  364 => 189,  361 => 188,  357 => 185,  354 => 183,  345 => 175,  342 => 173,  337 => 170,  330 => 169,  320 => 161,  314 => 157,  307 => 152,  301 => 149,  295 => 146,  289 => 143,  283 => 140,  277 => 137,  269 => 132,  263 => 129,  257 => 126,  251 => 123,  245 => 120,  239 => 117,  235 => 115,  230 => 112,  226 => 110,  215 => 103,  208 => 99,  198 => 95,  191 => 89,  189 => 88,  179 => 87,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}{{ 'Tickets'|trans }}{% endblock %}

{% block templateCSS %}
    <style>
        .uv-dropdown.asset-visibility li input {
            z-index: 100;
        }
        .uv-dropdown.asset-visibility ul li label {
            color: #333333;
            font-size: 17px;
            font-weight: 500;
            text-transform: capitalize;
            cursor: pointer;
            margin: auto;
        }
        .uv-table td a {
            color: #333333;
        }
        .uv-table.uv-list-view table tbody td.uv-width-100 {
            width: 100px !important;
        }
        .uv-table.uv-list-view td[data-index=\"agent\"] {
            white-space: nowrap;
        }
        .uv-view:not(.uv-stack-view) .uv-table td a {
            display: inline-block;
            width: 100%;
        }
        .uv-action-bar-col-lt.uv-width-100 {
            width: 100% !important;
        }
        #quick-view-modal .uv-view {
            padding: 0;
            overflow-y: visible;
            display: inline-block;
            position: relative;
        }
        #quick-view-modal .uv-view .uv-ticket-section {
            margin-top: 0;
        }
        #quick-view-modal .uv-ticket-head {
            border-top: 1px solid #d3d3d3;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #quick-view-modal .uv-ticket-strip {
            padding-bottom: 0;
        }
        #quick-view-modal .uv-ticket-strip .uv-btn-tag {
            margin-bottom: 0;
        }
        #quick-view-modal .quick-view-navigation {
            position: absolute;
            right: 50px;
            top: 9px;
        }
        #quick-view-modal .quick-view-navigation ~ a {
            width: calc(100% - 100px);
            display: inline-block;
        }
        #quick-view-modal .uv-btn-tag[disabled=\"disabled\"] {
            opacity: .4;
            cursor: not-allowed;
            border-color: #B1B1AE !important;
        }
        #quick-view-modal .uv-loader {
            transform: scale(0.5);
            top: 14px;
            right: 60px;
        }
        tr.unread {
            background: #f1f1f1;
        }
        .uv-table table tbody tr.not-assigned td {
            border-bottom: 1px solid #ffcacc;
        }
        @media screen and (max-width: 500px) {
            .uv-action-bar label {
                display: inline-block;
            }
        }
    </style>
{% endblock %}

{% block pageContent %}
    {# Quick View Popup #}
    <div class=\"uv-pop-up-overlay\" id=\"quick-view-modal\">
        <div class=\"uv-pop-up-box uv-pop-up-wide\"></div>
    </div>

    <div class=\"uv-inner-section\">
        {# Ticket Sidebar #}
        <div class=\"uv-aside\" {% if app.request.cookies and app.request.cookies.get('uv-asideView') %} style=\"display: none;\" {% endif %} >
            <div class=\"uv-aside-default\">
                <div class=\"uv-aside-head\">
                    <div class=\"uv-aside-title\">
                        <h6>{{ 'Tickets'|trans }}</h6>
                    </div>

                    <div class=\"uv-aside-back\">
                        <span onclick=\"history.length > 1 ? history.go(-1) : window.location = '{{ path(\"helpdesk_member_dashboard\") }}';\">{{ 'Back'|trans }}</span>
                    </div>
                </div>

                <div class=\"uv-aside-nav\">
                    <ul>
                        {# Predefined Label List #}
                        <ul class=\"predefined-label-list uv-aside-list\">
                            <li>
                                <a href=\"#\" class=\"uv-aside-active\">{{ 'All'|trans }} <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>

                                {# Status ticket count list #}
                                <ul class=\"status-list\">
                                    <li>
                                        <a href=\"#\" data-id=\"1\" class=\"uv-aside-nav-active\"><span class=\"name\">{{ 'Open'|trans }}</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-id=\"2\"><span class=\"name\">{{ 'Pending'|trans }}</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-id=\"6\"><span class=\"name\">{{ 'Answered'|trans }}</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-id=\"3\"><span class=\"name\">{{ 'Resolved'|trans }}</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-id=\"4\"><span class=\"name\">{{ 'Closed'|trans }}</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-id=\"5\"><span class=\"name\">{{ 'Spam'|trans }}</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#new\">{{ 'New'|trans }} <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                            <li>
                                <a href=\"#unassigned\">{{ 'UnAssigned'|trans }} <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                            <li>
                                <a href=\"#notreplied\">{{ 'UnAnswered'|trans }} <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                            <li>
                                <a href=\"#mine\">{{ 'My Tickets'|trans }} <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                            <li>
                                <a href=\"#starred\">{{ 'Starred'|trans }} <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                            <li>
                                <a href=\"#trashed\" style=\"border-bottom: none\">{{ 'Trashed'|trans }} <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                        </ul>

                        {# Custom Label List #}
                        <ul class=\"uv-aside-custom\"></ul>
                    </ul>
                </div>

                <a class=\"uv-btn-small add-new-label\" href=\"#\"><span class=\"uv-icon-add\"></span> {{ 'Label'|trans }}</a>
            </div>

            <!-- Label add and edit -->
            <div class=\"uv-add-edit-label\" style=\"display: block\"></div>
        </div>

        {# Ticket List #}
        <div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %} uv-aside-view {% endif %}\">
            <h1>{{ 'Tickets'|trans }}</h1>

            {# Action Bar #}
            <div class=\"uv-action-bar\">
                {# Select all checkbox #}
                <div class=\"uv-action-select-wrapper\">
                    <label class=\"uv-vertical-align uv-margin-left-27\">
                        <div class=\"uv-checkbox\">
                            <input type=\"checkbox\" class=\"select-all-checkbox\"><span class=\"uv-checkbox-view\"></span>
                        </div>
                    </label>
                </div>
                {# Filter Options #}
                <div class=\"uv-action-col-wrapper\">
                    {# Ticket Sort | Asset Visibility #}
                    <div class=\"uv-action-bar-col-lt\">
                        <div class=\"filter\">
                            {# Sort By #}
                            <div class=\"uv-dropdown sort\">
                                <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">{{ 'Sort By:'|trans }} {{ 'Last Replied'|trans }}</div>

                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>{{ 'Sort By'|trans }}</label>
                                        <ul></ul>
                                    </div>
                                </div>
                            </div>

                            {# Assets Visibilities #}
                            <div class=\"uv-dropdown asset-visibility\">
                                <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">{{ 'Assets Visibility'|trans }}</div>

                                <div class=\"uv-dropdown-list uv-bottom-left\" style=\"width: 215px;\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>{{ 'Assets Visibility'|trans }}</label>

                                        <ul>
                                            {# Ticket Source #}
                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"source\" name=\"assetVisibility[]\" value=\"source\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"source\">{{ 'Channel/Source'|trans }}</label>
                                            </li>

                                            {# Ticket Customer Name #}
                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"customer-name\" name=\"assetVisibility[]\" value=\"customer-name\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"customer-name\">{{ 'Customer Name'|trans }}</label>
                                            </li>

                                            {# Ticket Customer Email #}
                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"customer-email\" name=\"assetVisibility[]\" value=\"customer-email\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"customer-email\">{{ 'Customer Email'|trans }}</label>
                                            </li>

                                            {# Ticket Timestamp #}
                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"timestamp\" name=\"assetVisibility[]\" value=\"timestamp\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"timestamp\">{{ 'Timestamp'|trans }}</label>
                                            </li>

                                            {# Ticket Group #}
                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"group\" name=\"assetVisibility[]\" value=\"group\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"group\">{{ 'Group'|trans }}</label>
                                            </li>

                                            {# Ticket Team #}
                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"team\" name=\"assetVisibility[]\" value=\"team\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"team\">{{ 'Team'|trans }}</label>
                                            </li>

                                            {# Ticket Type #}
                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"type1\" name=\"assetVisibility[]\" value=\"type1\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"type1\">{{ 'Type'|trans }}</label>
                                            </li>

                                            {# Ticket Replies #}
                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"replies\" name=\"assetVisibility[]\" value=\"replies\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"replies\">{{ 'Replies'|trans }}</label>
                                            </li>

                                            {# Ticket Agent #}
                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"agent\" name=\"assetVisibility[]\" value=\"agent\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"agent\">{{ 'Agent'|trans }}</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {# Ticket Mass Action #}
                    <div class=\"uv-action-bar-col-lt\" style=\"display: none\">
                        <!-- Mass action -->
                        <div class=\"mass-action\">
                            <div class=\"property-block\">
                                {# Update Assigned Support Agent #}
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_ASSIGN_TICKET') %}
                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">{{ 'Agent'|trans }}</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>{{ 'Agent'|trans }}</label>
                                                <div class=\"uv-search-sm\">
                                                    <input type=\"text\" class=\"uv-search-field\" placeholder=\"Search\">
                                                </div>
                                            </div>

                                            <ul class=\"uv-agents-list agent\" data-action=\"agent\">
                                                {% for agent in user_service.getAgentPartialDataCollection() %}
                                                    <li data-index=\"{{ agent.id }}\">
                                                        {% if agent.smallThumbnail != null %}
                                                            <img src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}{{ agent.smallThumbnail }}\"/>
                                                        {% else %}
                                                            <img src=\"{{ asset(default_agent_image_path) }}\" alt=\"\"/>
                                                        {% endif %}
                                                        {{ agent.name }}
                                                    </li>
                                                {% endfor %}
                                            </ul>
                                        </div>
                                    </div>
                                {% endif %}

                                {# Update Assigned Support Group #}
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_ASSIGN_TICKET_GROUP') %}
                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">{{ 'Group'|trans }}</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>{{ 'Group'|trans }}</label>
                                                <div class=\"uv-search-sm\">
                                                    <input type=\"text\" class=\"uv-search-field\" placeholder=\"Search\">
                                                </div>
                                            </div>

                                            <ul class=\"uv-search-list group\" data-action=\"group\">
                                                {% for group in user_service.getSupportGroups() %}
                                                    <li data-index=\"{{ group.id }}\"><a href=\"#\">{{ group.name }}</a></li>
                                                {% endfor %}
                                            </ul>
                                        </div>
                                    </div>
                                {% endif %}

                                {# Update Assigned Support Team #}
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_ASSIGN_TICKET_GROUP') %}
                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">{{ 'Team'|trans }}</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>{{ 'Team'|trans }}</label>
                                                <div class=\"uv-search-sm\">
                                                    <input type=\"text\" class=\"uv-search-field\" placeholder=\"Search\">
                                                </div>
                                            </div>

                                            <ul class=\"uv-search-list team\" data-action=\"team\">
                                                {% for team in user_service.getSupportTeams() %}
                                                    <li data-index=\"{{ team.id }}\"><a href=\"#\">{{ team.name }}</a></li>
                                                {% endfor %}
                                            </ul>
                                        </div>
                                    </div>
                                {% endif %}

                                {# Update Ticket Status #}
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_STATUS') %}
                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">{{ 'Status'|trans }}</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>{{ 'Status'|trans }}</label>

                                                <ul class=\"status\" data-action=\"status\">
                                                    {% for status in ticketStatusCollection %}
                                                        <li data-index=\"{{ status.id }}\"><a href=\"#\">{{ status.description|trans }}</a></li>
                                                    {% endfor %}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}

                                {# Update Ticket Type #}
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_TYPE') %}
                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">{{ 'Type'|trans }}</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>{{ 'Type'|trans }}</label>
                                                <div class=\"uv-search-sm\">
                                                    <input type=\"text\" class=\"uv-search-field\" placeholder=\"{{ 'Search'|trans }}\">
                                                </div>
                                            </div>

                                            <ul class=\"uv-search-list type\" data-action=\"type\">
                                                {% for type in ticketTypeCollection %}
                                                    <li data-index=\"{{ type.id }}\"><a href=\"#\">{{ type.description }}</a></li>
                                                {% endfor %}
                                            </ul>
                                        </div>
                                    </div>
                                {% endif %}

                                {# Update Priority #}
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_PRIORITY') %}
                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">{{ 'Priority'|trans }}</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>{{ 'Priority'|trans }}</label>

                                                <ul class=\"priority\" data-action=\"priority\">
                                                    {% for priority in ticketPriorityCollection %}
                                                        <li data-index=\"{{ priority.id }}\"><a href=\"#\">{{ priority.description|trans }}</a></li>
                                                    {% endfor %}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}

                                {# Update Label #}
                                <div class=\"uv-dropdown\">
                                    <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">{{ 'Label'|trans }}</div>
                                    <div class=\"uv-dropdown-list uv-bottom-left\">
                                        <div class=\"uv-dropdown-container\">
                                            <label>{{ 'Label'|trans }}</label>

                                            <div class=\"uv-search-sm\">
                                                <input type=\"text\" class=\"uv-search-field\" placeholder=\"Search\">
                                            </div>
                                        </div>

                                        <ul class=\"uv-search-list label\" data-action=\"label\"></ul>
                                    </div>
                                </div>

                                {# Trashe Tickets #}
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_DELETE_TICKET') %}
                                    <a class=\"uv-btn-stroke uv-margin-right-5\" id=\"mass-delete\" data-action=\"trashed\" style=\"margin-left: 5px;\">{{ 'Delete'|trans }}</a>
                                {% endif %}
                            </div>

                            {# For Trashed Tickets #}
                            <div class=\"trashed-block\" style=\"display: none\">
                                {# Restore Tickets #}
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_RESTORE_TICKET') %}
                                    <a class=\"uv-btn-stroke uv-margin-right-5\" id=\"mass-restore\" data-action=\"restore\" style=\"margin-left: 5px;\">{{ 'Restore'|trans }}</a>
                                {% endif %}

                                {# Delete Tickets Forever #}
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_DELETE_TICKET') %}
                                    <a class=\"uv-btn-stroke uv-margin-right-5\" id=\"mass-delete-forever\" data-action=\"delete\" style=\"margin-left: 5px;\">{{ 'Delete Forever'|trans }}</a>
                                {% endif %}
                            </div>
                        </div>
                    </div>

                    {# Ticket Search | Filter Extras #}
                    <div class=\"uv-action-bar-col-rt\">
                        <!-- Search Tickets -->
                        <input type=\"text\" class=\"uv-search-inline\" placeholder=\"{{ 'Search'|trans }}\">

                        <!-- Extra Filters -->
                        <div class=\"uv-btn-stroke uv-margin-left-15 filter-view-trigger\" data-target=\"uv-filter-view\"><span class=\"uv-icon-filter\"></span>{{ 'Filter View'|trans }}</div>
                    </div>
                </div>
            </div>

            {# Ticket List #}
            <div class=\"uv-table uv-list-view\">
                <table>
                    <thead>
                    <tr>
                        <th class=\"uv-width-140\"></th>
                        <th>{{ 'ID'|trans }}</th>
                        <th class=\"uv-min-width-300\">{{ 'Subject'|trans }}</th>
                        <th data-index=\"customer-name\">{{ 'Customer Name'|trans }}</th>
                        <th data-index=\"customer-email\">{{ 'Customer Email'|trans }}</th>
                        <th data-index=\"timestamp\">{{ 'Timestamp'|trans }}</th>
                        <th style =\"min-width:100px\" data-index=\"lastReply\">{{ \"Last Reply\"|trans }}</th>
                        <th data-index=\"group\">{{ 'Group'|trans }}</th>
                        <th data-index=\"team\">{{ 'Team'|trans }}</th>
                        <th data-index=\"type1\">{{ 'Type'|trans }}</th>
                        <th data-index=\"replies\">{{ 'Replies'|trans }}</th>
                        <th data-index=\"agent\">{{ 'Agent'|trans }}</th>
                    </tr>
                    </thead>

                    <tbody></tbody>
                </table>

                <div class=\"navigation\"></div>
            </div>
        </div>

        {# Extra Filters #}
        <div class=\"uv-filter-view\" id=\"uv-filter-view\">
            {# Filter Head #}
            <div class=\"uv-filter-head\">
                <div class=\"uv-filter-title\">
                    <h6>{{ 'Tickets'|trans }}</h6>
                    <span>{{ 'Save set of filters as a preset to stay more productive'|trans }}</span>
                </div>

                <div class=\"uv-filter-toggle\" id=\"filter-close-trigger\"><span></span></div>
            </div>

            {# Filter Content #}
            <div class=\"uv-filter-paper\">
                {# Filters #}
                <div class=\"uv-filter-options\">
                    <script>
                        var userFilters = {};
                    </script>

                    {# Saved Filters #}
                    <div class=\"uv-element-block\" style=\"border-bottom: 1px solid #D3D3D3; padding-bottom: 5px;\">
                        <label class=\"uv-field-label\">{{ 'Saved Filters'|trans }}</label>
                        <div class=\"uv-field-block\">
                            <div class=\"uv-customize-wrapper\">
                                <select class=\"uv-select uv-select-70\" id=\"saved-filter\">
                                    {% set filters = app.user.agentInstance.userSavedFilters %}
                                    {% if filters|length %}
                                        <option value=\"\">-- Saved Filter --</option>
                                        {% for userFilter in filters %}
                                            <option value=\"{{userFilter.id}}\">{{userFilter.name}}</option>
                                        {% endfor %}
                                    {% else %}
                                        <option value=\"\">{{ 'No saved filter created'|trans }}</option>
                                    {% endif %}
                                </select>
                                {% for userFilter in app.user.agentInstance.userSavedFilters %}
                                    <script>
                                        {% set isDefault = 0 %}
                                        {% if app.user.agentInstance.defaultFiltering == userFilter.id %}
                                        {% set isDefault = 1 %}
                                        {% endif %}
                                        userFilters[{{userFilter.id}}] = {{ {'id': userFilter.id, 'name': userFilter.name, 'route': userFilter.route, 'is_default': isDefault}|json_encode|raw }};
                                    </script>
                                {% endfor %}
                                <span class=\"uv-customize\" style=\"display: none\" data-toggle=\"tooltip\" title=\"{{ 'Edit Saved Filter'|trans }}\"></span>
                            </div>
                        </div>
                    </div>

                    {% set filterContext = {} %}
                    {# agent #}
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Agent'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"agent-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"agent\" id=\"agent-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                </div>
                                <ul class=\"uv-agents-list\">
                                    {% set options = [] %}
                                    {% for agent in user_service.getAgentsPartialDetails %}
                                        {% set options = options|merge([{'id': agent.id, 'name': agent.name}]) %}
                                        <li data-id=\"{{agent.id}}\">
                                            {% if agent.smallThumbnail != null %}
                                                <img src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}{{ agent.smallThumbnail }}\"/>
                                            {% else %}
                                                <img src=\"{{ asset(default_agent_image_path) }}\"/>
                                            {% endif %}
                                            {{agent.name}}
                                        </li>
                                    {% endfor %}
                                    <li class=\"uv-no-results\" style=\"display: none;\">
                                        {{ 'No result found'|trans }}
                                    </li>
                                    {% set filterContext = filterContext|merge({'agent':options}) %}
                                </ul>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Customer'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"customer-filter\">
                            <input class=\"uv-field uv-dropdown-other\" type=\"text\" data-filter-type=\"customer\" id=\"customer-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                </div>
                                <ul class=\"uv-agents-list\">
                                    <li class=\"uv-filter-info\">
                                        {{ 'Type atleast 2 letters'|trans }}
                                    </li>
                                    <li class=\"uv-no-results\" style=\"display: none;\">
                                        {{ 'No result found'|trans }}
                                    </li>
                                </ul>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Group'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"group-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"group\" id=\"group-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                    <ul class=\"\">
                                        {% set options = [] %}
                                        {% for group in user_service.getSupportGroups() %}
                                            {% set options = options|merge([{'id': group.id, 'name': group.name}]) %}
                                            <li data-id=\"{{group.id}}\">
                                                {{group.name}}
                                            </li>
                                        {% endfor %}
                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            {{ 'No result found'|trans }}
                                        </li>
                                        {% set filterContext = filterContext|merge({'group':options}) %}
                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Team'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"team-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"team\" id=\"team-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                    <ul class=\"\">
                                        {% set options = [] %}
                                        {% for team in user_service.getSupportTeams() %}
                                            {% set options = options|merge([{'id': team.id, 'name': team.name}]) %}
                                            <li data-id=\"{{team.id}}\">
                                                {{team.name}}
                                            </li>
                                        {% endfor %}
                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            {{ 'No result found'|trans }}
                                        </li>
                                        {% set filterContext = filterContext|merge({'team':options}) %}
                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Type'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"type-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"type\" id=\"type-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                    <ul class=\"\">
                                        {% set options = [] %}
                                        {% for type in ticket_service.getTypes() %}
                                            {% set options = options|merge([{'id': type.id, 'name': type.name}]) %}
                                            <li data-id=\"{{type.id}}\">
                                                {{type.name}}
                                            </li>
                                        {% endfor %}
                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            {{ 'No result found'|trans }}
                                        </li>
                                        {% set filterContext = filterContext|merge({'type':options}) %}
                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Priority'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"priority-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"priority\" id=\"priority-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                    <ul class=\"\">
                                        {% set options = [] %}
                                        {% for priority in ticket_service.getPriorities() %}
                                            {% set options = options|merge([{'id': priority.id, 'name': priority.code, 'color': priority.colorCode}]) %}
                                            <li data-id=\"{{priority.id}}\">
                                                {{ priority.code|trans }}
                                            </li>
                                        {% endfor %}
                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            {{ 'No result found'|trans }}
                                        </li>
                                        {% set filterContext = filterContext|merge({'priority':options}) %}
                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Tag'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"tag-filter\">
                            <input class=\"uv-field uv-dropdown-other\" type=\"text\" data-filter-type=\"tag\" id=\"tag-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                    <ul class=\"\">
                                        <li class=\"uv-filter-info\">
                                            {{ 'Type atleast 2 letters'|trans }}
                                        </li>
                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            {{ 'No result found'|trans }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Source'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"source-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"source\" id=\"source-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                    <ul class=\"\">
                                        {% set options = [] %}
                                        {% for key, source in ticket_service.getAllSources() %}
                                            {% set options = options|merge([{'id': key, 'name': source}]) %}
                                            <li data-id=\"{{key}}\">
                                                {{ source|trans }}
                                            </li>
                                        {% endfor %}
                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            {{ 'No result found'|trans }}
                                        </li>
                                        {% set filterContext = filterContext|merge({'source': options}) %}
                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Mailbox'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"mailbox-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"mailbox\" id=\"mailbox-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                    <ul class=\"\">
                                        {% set options = [] %}
                                        {% for mailbox in ticket_service.getAllMailboxes() %}
                                            {% set options = options|merge([{'id': mailbox.email, 'name': mailbox.name}]) %}
                                            <li data-id=\"{{mailbox.email}}\">
                                                {{ mailbox.name|trans }}
                                            </li>
                                        {% endfor %}
                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            {{ 'No result found'|trans }}
                                        </li>
                                        {% set filterContext = filterContext|merge({'mailbox': options}) %}
                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Before'|trans }}</label>
                        <div class=\"uv-field-block range\" id=\"before-filter\">
                            <input class=\"uv-field uv-date-picker\" type=\"text\" data-filter-type=\"before\" id=\"before-filter-input\">
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'After'|trans }}</label>
                        <div class=\"uv-field-block range\" id=\"after-filter\">
                            <input class=\"uv-field uv-date-picker\" type=\"text\" data-filter-type=\"after\" id=\"after-filter-input\">
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Replies less than'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"reply-filter\">
                            <input class=\"uv-field\" type=\"number\" min=\"1\" data-filter-type=\"replies-less\" id=\"repliesLess-filter-input\">
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Replies more than'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"reply-filter\">
                            <input class=\"uv-field\" type=\"number\" min=\"0\" data-filter-type=\"replies-more\" id=\"repliesMore-filter-input\">
                        </div>
                    </div>

                    <div class=\"uv-action-buttons\">
                    </div>

                    {# Clear Filters #}
                    <a class=\"uv-btn-remove\" href=\"#\"><span class=\"uv-icon-discard\"></span> {{ 'Clear All'|trans }}</a>
                </div>

                {# Add|Edit Filter #}
                <div class=\"uv-filter-edit\" style=\"display: none;\"></div>
            </div>

            <script type=\"text/javascript\">
                var filterContext = {{ filterContext|json_encode|raw }}
            </script>
        </div>
    </div>
{% endblock %}

{% block footer %}
    {{ parent() }}

    {# Sort Ticket View Template #}
    <script id=\"ticket_list_sorting_tmp\" type=\"text/template\">
        <li class=\"<% if(sort == 'ticket.id') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/ticket.id/<% if(sort == 'ticket.id') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"ticket.id\">
                {% trans %}Ticket Id{% endtrans %}
                <% if(sort == 'ticket.id') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
                <% } %>
            </a>
        </li>

        <li class=\"<% if(sort == 'ticket.updatedAt') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/ticket.updatedAt/<% if(sort == 'ticket.updatedAt') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"ticket.updatedAt\">
                {% trans %}Last Replied{% endtrans %}
                <% if(sort == 'ticket.updatedAt') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
                <% } %>
            </a>
        </li>

        <li class=\"<% if(sort == 'agentName') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/agentName/<% if(sort == 'agentName') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"agentName\">
                {% trans %}Assign To{% endtrans %}
                <% if(sort == 'agentName') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
                <% } %>
            </a>
        </li>

        <li class=\"<% if(sort == 'customerEmail') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/customerEmail/<% if(sort == 'customerEmail') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"customerEmail\">
                {% trans %}Customer Email{% endtrans %}
                <% if(sort == 'customerEmail') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
                <% } %>
            </a>
        </li>

        <li class=\"<% if(sort == 'customerName') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/customerName/<% if(sort == 'customerName') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"customerName\">
                {% trans %}Customer Name{% endtrans %}
                <% if(sort == 'customerName') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
                <% } %>
            </a>
        </li>
    </script>

    {# Ticket Status List Template #}
    <script id=\"ticket_status_list_tmp\" type=\"text/template\">
        <ul class=\"status-list\">
            {% for status in ticketStatusCollection %}
                <li>
                    <a href=\"#\" class=\"<% if(active == {{ status.id }} {% if status.id == 1 %} || active == 0{% endif %}) { %>uv-aside-nav-active<% } %>\" data-id=\"{{ status.id }}\">
                        <span class=\"name\">{{ status.description|trans }}</span>
                        <span class=\"uv-flag-gray\">
                            <% if(status && status[1] != undefined) { %>
                                <%= status[{{ status.id }}] %>
                            <% } else { %>
                                0
                            <% } %>
                        </span>
                    </a>
                </li>
            {% endfor %}
        </ul>
    </script>

    {# Default Ticket Label View Template #}
    <script id=\"predefined_label_tmp\" type=\"text/template\">
        <li>
            <a href=\"#\" <% if (active == '') { %> class=\"uv-aside-active\" <% } %>>
            {{ 'All'|trans }}
            <span class=\"uv-flag-gray uv-flag-dark\"><%= labelDetails.predefind.all %></span>
            </a>
        </li>
        <li>
            <a href=\"#new\" <% if(active == 'new') { %> class=\"uv-aside-active\" <% } %> >
            {{ 'New'|trans }}
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.new %>
                </span>
            </a>
        </li>
        <li>
            <a href=\"#unassigned\" <% if(active == 'unassigned') { %> class=\"uv-aside-active\" <% } %> >
            {{ 'UnAssigned'|trans }}
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.unassigned %>
                </span>
            </a>
        </li>
        <li>
            <a href=\"#notreplied\" <% if(active == 'notreplied') { %> class=\"uv-aside-active\" <% } %> >
            {{ 'UnAnswered'|trans }}
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.notreplied %>
                </span>
            </a>
        </li>
        <li>
            <a href=\"#mine\" <% if(active == 'mine') { %> class=\"uv-aside-active\" <% } %> >
            {{ 'My Tickets'|trans }}
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.mine %>
                </span>
            </a>
        </li>
        <li>
            <a href=\"#starred\" <% if(active == 'starred') { %> class=\"uv-aside-active\" <% } %> >
            {{ 'Starred'|trans }}
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.starred %>
                </span>
            </a>
        </li>
        <li>
            <a href=\"#trashed\" <% if(active == 'trashed') { %> class=\"uv-aside-active\" <% } %>>
            {{ 'Trashed'|trans }}
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.trashed %>
                </span>
            </a>
        </li>
    </script>

    {# Custom Ticket Label View Template #}
    <script id=\"custom_label_tmp\" type=\"text/template\">
        <a href=\"#label/<%= id %>\"  data-id=\"<%= id %>\">
            <%- name %>
            <span class=\"uv-flag-gray\" style=\"<% if(colorCode) { %>background-color:<%= colorCode %><% } %>\">
                <%= count %>
            </span>
        </a>
        <span class=\"uv-customize\" data-target=\"uv-task-view\" data-toggle=\"tooltip\" title=\"{{ 'Edit Label'|trans }}\"></span>
    </script>

    {# Add|Edit Ticket Label View Template #}
    <script id=\"add_edit_label_tmp\" type=\"text/template\">
        <div class=\"uv-aside-head\">
            <div class=\"uv-aside-title\">
                <% if(id) { %>
                <h6>{{ 'Edit Label'|trans }}</h6>
                <% } else { %>
                <h6>{{ 'Add Label'|trans }}</h6>
                <% } %>
            </div>
            <div class=\"uv-aside-back\" id=\"back-to-labels\">
                <span>{{ 'Back'|trans }}</span>
            </div>
        </div>
        <div class=\"uv-aside-option\" data-id=\"<%= id %>\">

            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">{{ 'Name'|trans }}</label>
                <div class=\"uv-field-block\">
                    <input class=\"uv-field\" type=\"text\" value=\"<%- name %>\" />
                </div>
            </div>

            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">{{ 'Choose a Color'|trans }}</label>
                <div class=\"uv-field-block\">
                    <% colors = ['#337CFF','#FEBF00','#E5549F','#27B6BB','#FB8A3F','#43AF52'] %>
                    <% for(var colorTemp in colors) { %>
                    <span class=\"uv-color-block <% if(colorCode == colors[colorTemp]) { %>uv-color-active<% } %>\" data-color=\"<%- colors[colorTemp] %>\" style=\"background:<%- colors[colorTemp] %>\"></span>
                    <% } %>
                </div>
            </div>
            <div>
                <a class=\"uv-btn add-update-btn\" href=\"#\">
                    <% if(id) { %>
                    {{ 'Update'|trans }}
                    <% } else { %>
                    {{ 'Create'|trans }}
                    <% } %>
                </a>
            </div>
            <% if(id) { %>
            <a class=\"uv-btn-remove\"><span class=\"uv-icon-discard\"></span>{{ 'Remove Label'|trans }}</a>
            <% } %>
        </div>
    </script>

    {# Add|Edit Saved Ticket Filter View Template #}
    <script id=\"add_edit_saved_filter_tmp\" type=\"text/template\">
        <form>
            <div class=\"uv-filter-edit-head\">
                <div class=\"uv-filter-edit-title\">
                    <h6>
                        <% if(id) { %>
                        <input type=\"hidden\" name=\"id\" id=\"filter-id\" value=\"<%= id %>\"/>
                        {{ 'Edit Saved Filter'|trans }}
                        <% } else { %>
                        {{ 'New Saved Filter'|trans }}
                        <% } %>
                    </h6>
                </div>
                <div class=\"uv-filter-edit-back back-to-filter\">
                    <span>{{ 'Back'|trans }}</span>
                </div>
            </div>
            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">{{ 'Name'|trans }}</label>
                <div class=\"uv-field-block\">
                    <input class=\"uv-field name\" name=\"name\" type=\"text\" value=\"<%- name %>\" />
                </div>
            </div>

            <div class=\"uv-element-block\">
                <label>
                    <div class=\"uv-checkbox\">
                        <input type=\"checkbox\" name=\"is_default\" <% if(is_default) { %>checked<% } %> />
                        <span class=\"uv-checkbox-view\"></span>
                    </div>
                    <span class=\"uv-checkbox-label\">{{ 'Is Default'|trans }}</span>
                </label>
            </div>

            <div class=\"uv-filters-group\">
                <% _.each(filters, function(filter, key){ %>
                <div class=\"uv-element-block\" data-filter=\"<%= key %>\">
                    <label class=\"uv-field-label\"><%- filter.name %></label>
                    <div class=\"uv-field-block\">
                        <% _.each(filter.options, function(option){ %>
                        <a class=\"uv-btn-tag\" href=\"#\" data-id=\"<%= option.id %>\">
                            <%- option.name %>
                            <span class=\"uv-icon-remove-dark\"></span>
                        </a>
                        <% }); %>
                    </div>
                </div>
                <% }); %>

                <div class=\"uv-action-buttons\">
                    <% if(id) { %>
                    <a class=\"uv-btn-remove\"><span class=\"uv-icon-discard\"></span>{{ 'Remove Saved Filter'|trans }}</a>
                    <% } %>
                </div>
            </div>
            <div class=\"uv-action-buttons\">
                <a class=\"uv-btn <% if(id) { %>update-filter<% } else { %>save-filter<% } %>\" href=\"#\">
                    <% if(id) { %>
                    {{ 'Update'|trans }}
                    <% } else { %>
                    {{ 'Create'|trans }}
                    <% } %>
                </a>
                <a class=\"uv-btn back-to-filter\" href=\"#\">{{ 'Cancel'|trans }}</a>
            </div>
        </form>
    </script>

    {# Quick View Ticket View Template #}
    <script id=\"ticket_quick_view_tmp\" type=\"text/template\">
        <div class=\"uv-pull-right quick-view-navigation\">
            <div class=\"uv-loader\" style=\"display: none\">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <% if(previous) { %>
            <span class=\"uv-btn-tag uv-icon-nav-pre\" data-id=\"<%= previous %>\">
                </span>
            <% } else { %>
            <span class=\"uv-btn-tag uv-icon-nav-pre\" disabled=\"disabled\">
                </span>
            <% } %>
            <% if(next) { %>
            <span class=\"uv-btn-tag uv-icon-nav-nxt\"  data-id=\"<%= next %>\">
                </span>
            <% } else { %>
            <span class=\"uv-btn-tag uv-icon-nav-nxt\" disabled=\"disabled\">
                </span>
            <% } %>
        </div>
        <span class=\"uv-pop-up-close\"></span>
        <a href=\"<%= path %>\"><h2>{{ 'Ticket Info'|trans }} #<%= id %></h2></a>
        <div class=\"uv-pop-up-body uv-inner-section\">
            <div class=\"uv-view\">
                <div class=\"uv-ticket-head\">
                    <div class=\"uv-ticket-strip\">
                        <span>
                            <span class=\"uv-ticket-strip-label\">
                                {{ 'Timestamp'|trans }} -
                            </span>
                            <span class=\"uv-margin-0\">
                                <%= formatedCreatedAt %>
                            </span>
                        </span>
                        <span>
                            <span class=\"uv-ticket-strip-label\">
                                {{ 'By'|trans }} -
                            </span>
                            <%- createThread.user.name %>
                        </span>
                        <% if(agent) { %>
                        <span class=\"agent-info\" style=\"\">
                                <span class=\"uv-ticket-strip-label\">
                                    {{ 'Agent'|trans }} -
                                </span>
                                <span class=\"name\"><%- agent.name %></span>
                            </span>
                        <% } %>
                    </div>
                    <div class=\"uv-ticket-strip\">
                        <span class=\"uv-btn-tag\">
                            {{ 'Priority'|trans }}
                            - <%- priority.description %>
                        </span>
                        <span class=\"uv-btn-tag\">
                            {{ 'Status'|trans }}
                            - <%- status.description %>
                        </span>
                        <% if(lastReplyAgentName) { %>
                        <span class=\"uv-btn-tag\">
                                {{ 'Last Replied Agent'|trans }}
                                - <%- lastReplyAgentName.name.split(\" \")[0] %>
                            </span>
                        <% } %>
                    </div>
                </div>
                <div class=\"uv-ticket-head\">
                    <h1><%- subject %></h1>
                </div>

                <div class=\"uv-ticket-section\">
                    <div class=\"uv-ticket-main create\">
                        <div class=\"uv-ticket-strip\">
                            <span>
                                <span class=\"uv-margin-0 timeago\" data-timestamp=\"<%= createThread.timestamp %>\" title=\"<%= createThread.formatedCreatedAt %>\"><%= createThread.formatedCreatedAt %></span>
                                - <%- createThread.user.name %>
                                <span class=\"uv-ticket-strip-label\">
                                    {{ 'created Ticket'|trans }}
                                </span>
                            </span>
                        </div>
                        <div class=\"uv-ticket-main-lt\">
                            <% if (createThread.user.smallThumbnail != null) { %>
                                <img class='border' src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}<%= createThread.user.smallThumbnail %>\"/>
                            <% } else { %>
                                <% if (createThread.createdBy == 'customer') { %>
                                    <img class='border' src=\"{{ asset(default_customer_image_path) }}\"/>
                                <% } else { %>
                                    <img class='border' src=\"{{ asset(default_agent_image_path) }}\"/>
                                <% } %>
                            <% } %>
                        </div>
                        <div class=\"uv-ticket-main-rt\">
                            <% if(createThread.createdBy == 'customer') { %>
                            <a href=\"{{ path('helpdesk_member_manage_customer_account') }}/<%= createThread.user.id %>\" class=\"uv-ticket-member-name\">
                                <% } else { %>
                                <% if(createThread.user) { %>
                                <a href=\"{{ path('helpdesk_member_account') }}/<%= createThread.user.id %>\" class=\"uv-ticket-member-name\">
                                    <% } else { %>
                                    <a class=\"uv-ticket-member-name\">
                                        <% } %>
                                        <% } %>
                                        <%- createThread.user.name %>
                                    </a>

                                    <div class=\"message\">
                                        <p>
                                            <%= createThread.reply %>
                                        </p>
                                    </div>
                                    <!-- Attachment Block -->
                                    <% if(createThread.attachments.length) { %>
                                    <div class=\"uv-ticket-uploads\">
                                        <h4>{{ 'Uploaded Files'|trans }}</h4>
                                        <div class=\"uv-ticket-uploads-strip\">
                                            <% _.each(createThread.attachments, function(file) { %>
                                            <a href=\"<%-file.downloadURL %>\" target =\"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"<%- file.name %>\">
                                                <img src=\"<%-file.iconURL %>\" class=\"uv-auto-pointer-events\">
                                            </a>
                                            <% }) %>
                                        </div>
                                        <% if(createThread.attachments.length >1) { %>
                                        <div class=\"thread-attachments-zip pull-left\">
                                            <div class=\"uv-upload-actions\">
                                                <a href=\"{{ path('helpdesk_member_ticket_download_attachment_zip') }}/<%= createThread.id %>\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> {{ 'Download (as .zip)'|trans }}</a>
                                            </div>
                                        </div>
                                        <% } %>

                                    </div>
                                    <% } %>
                                    <!-- //Attachment Block -->
                        </div>
                    </div>
                    <% if(lastReply) { %>
                    <div class=\"uv-ticket-main\">
                        <div class=\"uv-ticket-strip\">
                                <span>
                                    <span class=\"uv-margin-0 timeago\" data-timestamp=\"<%= lastReply.timestamp %>\" title=\"<%= lastReply.formatedCreatedAt %>\"><%= lastReply.formatedCreatedAt %></span>
                                    - <%- lastReply.user.name %>
                                    <span class=\"uv-ticket-strip-label\">
                                        {{ 'made last reply'|trans }}
                                    </span>
                                </span>
                        </div>
                        <div class=\"uv-ticket-main-lt\">
                            <% if (lastReply.user.smallThumbnail != null) { %>
                                <img class='border' src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}<%= lastReply.user.smallThumbnail %>\"/>
                            <% } else { %>
                                <% if (lastReply.createdBy == 'customer') { %>
                                    <img class='border' src=\"{{ asset(default_customer_image_path) }}\"/>
                                <% } else { %>
                                    <img class='border' src=\"{{ asset(default_agent_image_path) }}\"/>
                                <% } %>
                            <% } %>
                        </div>
                        <div class=\"uv-ticket-main-rt\">
                            <% if(lastReply.createdBy == 'customer') { %>
                            <a href=\"{{ path('helpdesk_member_manage_customer_account') }}/<%= lastReply.user.id %>\" class=\"uv-ticket-member-name\">
                                <% } else { %>
                                <% if(lastReply.user) { %>
                                <a href=\"{{ path('helpdesk_member_account') }}/<%= lastReply.user.id %>\" class=\"uv-ticket-member-name\">
                                    <% } else { %>
                                    <a class=\"uv-ticket-member-name\">
                                        <% } %>
                                        <% } %>
                                        <%- lastReply.user.name %>
                                    </a>

                                    <div class=\"message\">
                                        <p>
                                            <%= lastReply.reply %>
                                        </p>
                                    </div>
                                    <!-- Attachment Block -->
                                    <% if(lastReply.attachments.length) { %>
                                    <div class=\"uv-ticket-uploads\">
                                        <h4>{{ 'Uploaded Files'|trans }}</h4>
                                        <div class=\"uv-ticket-uploads-strip\">
                                            <% _.each(lastReply.attachments, function(file) { %>
                                            <a href=\"<%-file.downloadURL %>\" target =\"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"<%- file.name %>\">
                                                <img src=\"<%-file.iconURL %>\" class=\"uv-auto-pointer-events\">
                                            </a>
                                            <% }) %>
                                        </div>
                                        <% if(lastReply.attachments.length> 1) { %>
                                        <div class=\"thread-attachments-zip pull-left\">
                                            <div class=\"uv-upload-actions\">
                                                <a href=\"{{ path('helpdesk_member_ticket_download_attachment_zip') }}/<%= lastReply.id %>\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> {{ 'Download (as .zip)'|trans }}</a>
                                            </div>
                                        </div>
                                        <% } %>

                                    </div>
                                    <% } %>
                                    <!-- //Attachment Block -->
                        </div>
                    </div>
                    <% } %>
                </div>
            </div>
        </div>
    </script>

    {# Ticket List Item View Template #}
    <script id=\"ticket_list_item_tmp\" type=\"text/template\">
        <td class=\"uv-width-140 uv-no-content\">
            <span class=\"uv-list-ticket-priority\" style=\"<% if(priority) { %>background: <%=priority.colorCode %><% } %>;\"></span>
            <label class=\"uv-vertical-align uv-margin-right-5\">
                <div class=\"uv-checkbox\">
                    <input type=\"checkbox\" class=\"mass-action-checkbox\" value=\"<%= id %>\"/>
                    <span class=\"uv-checkbox-view\"></span>
                </div>
            </label>
            <span class=\"uv-star <% if(isStarred) { %>uv-star-active<% } %> uv-margin-right-5\"></span>
            <span data-index=\"source\">
                <% if(source == 'email') {  %>
                    <span class=\"uv-channel uv-channel-email uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Email\"></span>
                <% } else if(source == 'facebook') {  %>
                    <span class=\"uv-channel uv-channel-facebook uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"></span>
                <% } else if(source == 'twitter') {  %>
                    <span class=\"uv-channel uv-channel-twitter uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"></span>
                <% } else if(source == 'binaka' || source == 'knock') {  %>
                    <span class=\"uv-channel uv-channel-binaka uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Binaka\"></span>
                <% } else if(source == 'api') { %>
                    <span class=\"uv-channel uv-channel-api uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"API\"></span>
                <% } else if(source == 'formbuilder') { %>
                    <span class=\"uv-channel uv-channel-form-builder uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Formbuilder\"></span>
\t\t\t\t<% } else if(source == 'disqus-engage') { %>
                    <span class=\"uv-channel uv-channel-disqus-engage uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Disqus\"></span>
\t\t\t\t<% } else if(source == 'ebay') { %>
                    <span class=\"uv-channel uv-channel-ebay uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Ebay\"></span>
\t\t\t\t<% } else if(source == 'youtube') { %>
                    <span class=\"uv-channel uv-channel-youtube uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Youtube\"></span>
                <% } else { %>
                    <span class=\"uv-channel uv-channel-web uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"<%- source %>\"></span>
                <% } %>

            </span>
            <span class=\"uv-quick-view-trigger\" data-id=\"<%= id %>\"></span>
        </td>
        <td data-value=\"{{ 'ID'|trans }}\" class=\"uv-width-100\">
            <a href=\"<%= path %>\">
                #<%= id %>
            </a>
        </td>
        <td data-value=\"{{ 'Subject'|trans }}\">
            <a href=\"<%= path %>\">
                <%- subject && subject.length <= 300 ? subject : subject.substr(0, 300) + '...'  %>
            </a>
        </td>
        <td data-value=\"{{ 'Customer Name'|trans }}\" data-index=\"customer-name\">
            <a href=\"<%= path %>\">
                <%- customer.name %>
            </a>
        </td>
        <td data-value=\"{{ 'Customer Email'|trans }}\" data-index=\"customer-email\">
            <a href=\"<%= path %>\">
                <%- customer.email %>
            </a>
        </td>
        <td data-value=\"{{ 'Timestamp'|trans }}\" data-index=\"timestamp\">
            <a href=\"<%= path %>\" class=\"timeago\" data-timestamp=\"<%= timestamp %>\" title=\"<%= formatedCreatedAt %>\">
                <%= formatedCreatedAt %>
            </a>
        </td>
        <td data-value=\"{{ 'Last Reply'|trans }}\" data-index=\"last-reply\">
            <% if(lastReplyTime) { %>
                <a href=\"<%= path %>\">
                    <%= lastReplyTime %>
                </a>
            <% } else { %>
                    {{ 'N/A'|trans }}
            <% } %>
        </td>
        <td data-value=\"{{ 'Group'|trans }}\" data-index=\"group\">
            <a href=\"<%= path %>\">
                <% if(group) { %>
                <%- group %>
                <% } else { %>
                {{ 'N/A'|trans }}
                <% } %>
            </a>
        </td>
        <td data-value=\"{{ 'Team'|trans }}\" data-index=\"team\">
            <a href=\"<%= path %>\">
                <% if(team) { %>
                <%- team %>
                <% } else { %>
                {{ 'N/A'|trans }}
                <% } %>
            </a>
        </td>
        <td data-value=\"{{ 'Type'|trans }}\" data-index=\"type1\">
            <a href=\"<%= path %>\">
                <% if(type) { %>
                <%- type %>
                <% } else { %>
                {{ 'N/A'|trans }}
                <% } %>
            </a>
        </td>
        <td data-value=\"{{ 'Replies'|trans }}\" data-index=\"replies\">
            <a href=\"<%= path %>\">
                <%= totalThreads %>
            </a>
        </td>
        <td data-value=\"{{ 'Agent'|trans }}\" data-index=\"agent\">
            <a href=\"<%= path %>\">
                <% if(agent) { %>
                <% if(agent.smallThumbnail != null) { %>
                <img src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}<%= agent.smallThumbnail %>\" alt=\"\"/>
                <% } else { %>
                <img src=\"{{ asset(default_agent_image_path) }}\" alt=\"\"/>
                <% } %>
                <%- agent.name %>
                <% } else { %>
                {{ 'Unassigned'|trans }}
                <% } %>
            </a>
        </td>
    </script>

    <script type=\"text/javascript\">
        var isPageJustLoaded = true;
        var globalMessageResponse = \"\";
        var currentUserId = \"{{ user_service.getCurrentUser().id }}\";
        var pathToTicket = \"{{ path('helpdesk_member_ticket', {'ticketId': 'replaceId' }) }}\";

        \$(() => {
            \$('#before-filter-input').datetimepicker({
                format: 'DD-MM-YYYY',
                maxDate: 'now',
                useCurrent: false,
            });

            \$('#after-filter-input').datetimepicker({
                format: 'DD-MM-YYYY',
                maxDate: 'now',
                useCurrent: false,
            });

            // Ticket Model
            var TicketModel = Backbone.Model.extend({
                idAttribute: \"id\",
                defaults: {
                    path: \"\",
                },
                urlRoot: \"{{ path('helpdesk_member_ticket_xhr') }}\"
            });

            // Ticket Label Model
            var LabelModel = Backbone.Model.extend({
                idAttribute: \"id\",
                defaults: {
                    count: 0,
                },
                parse: function (resp, options) {
                    return JSON.parse(resp.label);
                },
                urlRoot: \"{{ path('helpdesk_member_ticket_label_xhr') }}\"
            });

            // Ticket Quick View Model
            var TicketQuickViewModel = Backbone.Model.extend({
                idAttribute: \"id\",
                defaults: {
                    path: \"\",
                    isSynced: false
                }
            });

            // Side Filter Model
            var SideFilterModel = Backbone.Model.extend({
                updateModel: function(type,json) {
                    if(this.has(type)) {
                        context = this.get(type)

                        savedOptionsIds = [];
                        _.each(context, function (option) {
                            savedOptionsIds.push(parseInt(option.id))
                        })

                        if(jQuery.inArray(parseInt(json.id), savedOptionsIds) == -1) {
                            context.push(json);
                            this.set(type, context)
                        }
                    } else {
                        this.set(type, [json])
                    }
                },
                loadFilterOptions: function(data) {
                    var self = this;
                    \$.ajax({
                        url : \"{{ path('helpdesk_member_ticket_collection_load_filter_options_xhr') }}\",
                        type : 'POST',
                        data: data,
                        dataType : 'json',
                        success : function(response) {
                            _.each(response,function(filter,key) {
                                _.each(filter, function (item) {
                                    self.updateModel(key,item)
                                })
                            })
                            sideFilter.render();
                        },
                        error: function (xhr) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                }
            });

            // Ticket Label Collection
            var LabelCollection = Backbone.Collection.extend({
                model: LabelModel,
                isLabelExist: function(labelName, labelId) {
                    var flag = 1;
                    _.each(this.models, function (item) {
                        if(item.get('name').toUpperCase() == labelName.toUpperCase() && item.id != labelId)
                            flag = 0;
                    }, this);
                    return flag;
                }
            });

            // Ticket Collection
            var TicketCollection = AppCollection.extend({
                model: TicketModel,
                url: \"{{ path('helpdesk_member_ticket_collection_xhr') }}\",
                filterParameters: {
                    label: \"\",
                    new: \"\",
                    unassigned: \"\",
                    notreplied: \"\",
                    mine: \"\",
                    starred: \"\",
                    trashed: \"\",
                    label: \"\",
                    status: \"\",
                    search: \"\",
                    agent: \"\",
                    customer: \"\",
                    priority: \"\",
                    type: \"\",
                    group: \"\",
                    team: \"\",
                    tag: \"\",
                    mailbox : \"\",
                    source : \"\",
                    after: \"\",
                    before: \"\",
                    repliesLess: \"\",
                    repliesMore: \"\",
                },
                parseRecords: function (response, options) {
                    return response.tickets;
                },
                syncData: function() {
                    app.appView.showLoader();
                    \$('.select-all-checkbox').prop('checked', false);

                    this.fetch({
                        data: this.getValidParameters(),
                        reset: true,
                        success: function(model, response) {
                            ticketQuickViewCollection.reset()
                            app.appView.hideLoader();
                            var ticketListView = new TicketList();

                            app.pager.paginationData = response.pagination;
                            var url = app.pager.paginationData.url;
                            if(ticketCollection.length == 0 && app.pager.paginationData.current != \"0\")
                                router.navigate(url.replace('replacePage', app.pager.paginationData.last),{trigger: true});
                            else {
                                app.pager.render();
                                statusListDetails = response.tabs;
                                labelDetails = response.labels;
                                labelListView.render();
                            }

                            if (globalMessageResponse) {
                                app.appView.renderResponseAlert(globalMessageResponse);
                            }

                            globalMessageResponse = null;
                            sideFilter.backToFilter()
                        },
                        error: function (model, xhr, options) {
                            app.appView.hideLoader();
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                },
                batchOperation: function(data) {
                    var self = this;
                    app.appView.showLoader();
                    \$.ajax({
                        url : \"{{ path('helpdesk_member_ticket_collection_mass_action_xhr') }}\",
                        type : 'POST',
                        data : {data : data},
                        dataType : 'json',
                        success : function(response) {
                            app.appView.hideLoader();
                            globalMessageResponse = response;
                            self.syncData();
                        },
                        error: function (xhr) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                            \$('.mass-action-checkbox').prop('checked', false);
                        }
                    });
                }
            });

            // Ticket Quick View Collection
            var TicketQuickViewCollection = Backbone.Collection.extend({
                model: TicketQuickViewModel,
                isModelSynced: function(id) {
                    if (model = this.get(id)) {
                        if (parseInt(model.attributes.isSynced)) {
                            return model;
                        }
                    }

                    return false;
                },
                initialize: function() {
                    _.bindAll(this, 'getNextPrev', 'nextElement', 'previousElement');
                },
                getNextPrev : function(id) {
                    var data = {};
                    currentModel = ticketQuickViewCollection.get(id)
                    data['next'] = (model = this.nextElement(currentModel)) ? model.id : 0;
                    data['previous'] = (model = this.previousElement(currentModel)) ? model.id : 0;

                    return data;
                },
                nextElement: function(model) {
                    var index = ticketQuickViewCollection.indexOf(model);
                    if ((index + 1) === ticketQuickViewCollection.length)
                        return 0;

                    return ticketQuickViewCollection.at(index + 1);
                },
                previousElement: function(model) {
                    var index = ticketQuickViewCollection.indexOf(model);
                    if (index === 0 )
                        return 0;

                    return ticketQuickViewCollection.at(index - 1);
                }
            });

            // Filter
            var Filter = app.Filter.extend({
                defaultSortIndex: 'ticket.updatedAt',
                sortText: \"{% trans %}Sort By:{% endtrans %} \",
                defaultSortText: \"{% trans %}Sort By:{% endtrans %} {% trans %}Last Replied{% endtrans %}\",
                template : _.template(\$(\"#ticket_list_sorting_tmp\").html()),
                events : {
                    'keyup .uv-search-inline' : 'search',
                    'change .asset-visibility input[type=\"checkbox\"]': 'filterAssetsVisibility'
                },
                filterAssetsVisibilityOnLoad: function() {
                    if(localStorage.getItem('assets-visibility')) {
                        var assets = JSON.parse(localStorage.getItem('assets-visibility'));
                        \$.each(assets, function(asset, assetVal) {
                            if(assetVal) {
                                \$('span[data-index=\"' + asset + '\"], td[data-index=\"' +asset + '\"], th[data-index=\"' + asset + '\"]').show()
                                \$('#' + asset).prop('checked', true);
                            } else {
                                \$('span[data-index=\"' + asset + '\"], td[data-index=\"' +asset + '\"], th[data-index=\"' + asset + '\"]').hide()
                                \$('#' + asset).prop('checked', false);
                            }
                        })
                    }
                },
                filterAssetsVisibility: function(e) {
                    var assets = {};
                    \$('.asset-visibility input').each(function() {
                        var asset = \$(this).val();
                        if(\$(this).is(':checked')) {
                            assets[asset] = 1;
                            \$('span[data-index=\"' + asset + '\"], td[data-index=\"' + asset + '\"], th[data-index=\"' + asset + '\"]').show()
                        } else {
                            assets[asset] = 0;
                            \$('span[data-index=\"' + asset + '\"], td[data-index=\"' + asset + '\"], th[data-index=\"' + asset + '\"]').hide()
                        }
                    });

                    localStorage.setItem('assets-visibility', JSON.stringify(assets));
                },
                search : _.debounce(function(e) {
                    this.collection.reset();
                    this.collection.state.currentPage = null;
                    this.collection.filterParameters.search = Backbone.\$(e.target).val();
                    var queryString = app.appView.buildQuery(\$.param(this.collection.getValidParameters()));
                    router.navigate(queryString,{trigger: true});
                }, 1000)
            });

            // Side Filter View
            var SideFilter = Backbone.View.extend({
                el: \$(\".uv-filter-view\"),
                isRecurrsiveCalls: 0,
                isReadyFlag: 0,
                appliedFilterOptions: {},
                tempAppliedFilterOptions: {},
                events: {
                    'change #saved-filter': 'applySavedFilter',
                    'input .uv-field-block input' : 'searchFilterOption',
                    'click .uv-dropdown-list li' : 'applyFilter',
                    'dp.change .range input': 'applyFilter',
                    'click .uv-filtered-tags .uv-btn-tag' : 'removeFilter',
                    'change .custom-filter' : 'filterByCustom',
                    'change #repliesLess-filter-input' : 'filterByRepliesLessThan',
                    'change #repliesMore-filter-input' : 'filterByRepliesMoreThan',
                    'keyup .search-custom, change .search-custom' : 'filterByCustom',
                    'click .new-saved-reply, .edit-saved-reply, .uv-filter-paper .uv-customize': 'addEditSavedReply',
                    'click .back-to-filter': 'backToFilter',
                    'click .uv-filter-edit .uv-btn-tag': 'removeSavedFilterOption',
                    'click .uv-filter-edit .save-filter, .uv-filter-edit .update-filter' : \"saveSavedFilter\",
                    'click .uv-filter-edit .uv-action-buttons .uv-btn-remove': 'removeSavedFilter'
                },
                loaderTemplate: _.template(\$(\"#loader-tmp\").html()),
                addEditSavedReplyTemplate: _.template(\$(\"#add_edit_saved_filter_tmp\").html()),
                checkOptionAvailable: function() {
                    this.isReadyFlag = 0;
                    var self = this;
                    var fetchOptions = {};

                    _.each(ticketCollection.filterParameters, function (filter,key) {
                        if(jQuery.inArray(key, ['customer','tag','label']) !== -1) {
                            if(filter != null && filter != '') {
                                filter = filter.split(',');

                                if(typeof fetchOptions[key] === 'undefined')
                                    fetchOptions[key] = [];

                                savedOptionsIds = [];
                                if(sideFilterModel.has(key)) {
                                    _.each(sideFilterModel.get(key), function (option) {
                                        savedOptionsIds.push(parseInt(option.id))
                                    })
                                }

                                _.each(filter, function (item) {
                                    if(jQuery.inArray(parseInt(item), savedOptionsIds) == -1) {
                                        fetchOptions[key].push(parseInt(item));
                                        self.isReadyFlag = 1;
                                    }
                                })
                            }
                        }
                    });

                    return fetchOptions;
                },
                render: function() {
                    fetchOptions = this.checkOptionAvailable();

                    if(this.isReadyFlag && !this.isRecurrsiveCalls) {
                        this.isReadyFlag = 0;
                        this.isRecurrsiveCalls = 1;
                        sideFilterModel.loadFilterOptions(fetchOptions)
                    } else {
                        var appliedFilterOptions = {};
                        \$('.uv-filtered-tags').html(\"\")
                        var self = this;
                        var displayFlag = 0;
                        _.each(ticketCollection.filterParameters, function (filter, key) {
                            if(jQuery.inArray(key, ['customer', 'agent', 'priority', 'type', 'group', 'team', 'tag', 'mailbox', 'source', 'after', 'before', 'repliesLess', 'repliesMore']) !== -1) {
                                if(filter != null && filter != '') {
                                    displayFlag = 1;
                                    filter = filter.split(',');

                                    appliedFilterOptions[key] = {'name': key.charAt(0).toUpperCase() + key.slice(1)};
                                    appliedFilterOptions[key]['options'] = [];

                                    _.each(filter, function (value) {
                                        if(key == 'after' || key == 'before' || key == 'repliesLess' || key == 'repliesMore') {
                                            \$(\"#\" + key + \"-filter-input\").val(filter)
                                            appliedFilterOptions[key]['options'].push({'id': filter, 'name': filter});
                                        } else {
                                            savedOptions = sideFilterModel.get(key)
                                            _.each(savedOptions, function (item) {
                                                if(item.id == value) {
                                                    appliedFilterOptions[key]['options'].push({'id': item.id, 'name': item.name});

                                                    parent = \$('#'+key+'-filter')
                                                    parent.find('.uv-filtered-tags').append(\"<a class='uv-btn-tag' href='#' data-id='\" + item.id + \"'>\" + item.name + \"<span class='uv-icon-remove-dark'></span></a>\")
                                                    parent.find('input').val('')
                                                }
                                            })
                                        }
                                    });
                                }
                            } else if(jQuery.inArray(key, ['new','unassigned','notreplied','mine','starred','trashed']) !== -1) {
                                if(filter != null && filter != '') {
                                    displayFlag = 1;
                                    appliedFilterOptions[key] = {'name': \"{{ 'Label'|trans }}\"};
                                    appliedFilterOptions[key]['options'] = [];
                                    var optionName = (key == 'mine') ? \"{% trans %}Assigned to me{% endtrans %}\" : key.charAt(0).toUpperCase() + key.slice(1);
                                    appliedFilterOptions[key]['options'].push({'id': key, 'name': optionName});
                                } else {
                                    if(!ticketCollection.filterParameters.new && !ticketCollection.filterParameters.unassigned && !ticketCollection.filterParameters.notreplied && !ticketCollection.filterParameters.mine && !ticketCollection.filterParameters.starred && !ticketCollection.filterParameters.trashed &&! ticketCollection.filterParameters.label) {
                                        appliedFilterOptions['all'] = {'name': \"{{ 'Label'|trans }}\"};
                                        appliedFilterOptions['all']['options'] = [];
                                        appliedFilterOptions['all']['options'].push({'id': 1, 'name': \"{{ 'All'|trans }}\"});
                                    }
                                }
                            } else if(key == 'label') {
                                if(filter != null && filter != '') {
                                    displayFlag = 1;
                                    var labelModel = labelCollection.get(filter);
                                    appliedFilterOptions[key] = {'name': \"{{ 'Label'|trans }}\"};
                                    appliedFilterOptions[key]['options'] = [];
                                    if(labelModel) {
                                        appliedFilterOptions[key]['options'] = [];
                                        appliedFilterOptions[key]['options'].push({'id': labelModel.attributes.id, 'name': labelModel.attributes.name});
                                    } else {
                                        savedOptions = sideFilterModel.get(key)
                                        _.each(savedOptions, function (item) {
                                            if(item.id == filter) {
                                                appliedFilterOptions[key]['options'].push({'id': item.id, 'name': item.name});
                                            }
                                        });
                                    }
                                } else {
                                    if(!ticketCollection.filterParameters.new && !ticketCollection.filterParameters.unassigned && !ticketCollection.filterParameters.notreplied && !ticketCollection.filterParameters.mine && !ticketCollection.filterParameters.starred && !ticketCollection.filterParameters.trashed &&! ticketCollection.filterParameters.label) {
                                        appliedFilterOptions['all'] = {'name': \"{{ 'Label'|trans }}\"};
                                        appliedFilterOptions['all']['options'] = [];
                                        appliedFilterOptions['all']['options'].push({'id': 1, 'name': \"{{ 'All'|trans }}\"});
                                    }
                                }
                            } else if(key == 'status') {
                                appliedFilterOptions[key] = {'name': \"{{ 'Status'|trans }}\"};
                                appliedFilterOptions[key]['options'] = []
                                if(filter != null && filter != '' && filter != 1) {
                                    displayFlag = 1;
                                    appliedFilterOptions[key]['options'].push({'id': filter, 'name': \$(\".status-list li a[data-id='\" + filter + \"'] .name\").text().trim()});
                                } else {
                                    appliedFilterOptions[key]['options'].push({'id': 1,'name': \"{{ 'Open'|trans }}\"});
                                }


                            } else if(key == 'search') {
                                if(filter != null && filter != '') {
                                    displayFlag = 1;
                                    appliedFilterOptions[key] = {'name': \"{{ 'Search Query'|trans }}\"};
                                    appliedFilterOptions[key]['options'] = [];
                                    appliedFilterOptions[key]['options'].push({'id': filter, 'name': filter});
                                }
                            } else if(key == 'custom') {
                                if(filter != null && filter != '') {
                                    self.\$el.find('[data-filter=\"custom\"]').remove();

                                    displayFlag = 1;

                                    var realKey = key;
                                    var checkBoxStore = Array();
                                    var dataValueValueSeprator = '_';
                                    var columnSeperator = '|';

                                    var multiOptions = filter.split(columnSeperator);
                                    var multiKeyValue, multiKeyValueValue, ele, newEle;

                                    _.each(multiOptions, function(valueData, indexData) {
                                        if(!valueData)
                                            return;

                                        multiKeyValue = valueData.split(dataValueValueSeprator);

                                        multiKeyValueValue = multiKeyValue[1].split(',');

                                        eleSelector = '[data-value=\"' + multiKeyValue[0] + '\"]';
                                        ele = \$(eleSelector);

                                        if(ele[0].type == 'radio') {
                                            var dataValue = multiKeyValue[0];
                                            name = ele.parents('.uv-element-block:not(.radio)').find('label:first').text().trim()
                                            value =  \$(eleSelector + '[value=\"' + multiKeyValue[1] + '\"]').parent().next().text();

                                            appliedFilterOptions['z-'+dataValue] = {'name': name, 'type': 'radio'};
                                            appliedFilterOptions['z-'+dataValue]['options'] = [];
                                            appliedFilterOptions['z-'+dataValue]['options'].push({'id': multiKeyValue[1], 'name': value});
                                        } else if(ele[0].type == 'checkbox') {

                                            var dataValue = multiKeyValue[0];
                                            if(\$.inArray(dataValue, checkBoxStore) >= 0)
                                                return;
                                            checkBoxStore.push(dataValue);

                                            name = ele.parents('.uv-element-block:not(.checkbox)').find('label:first').text().trim()

                                            appliedFilterOptions['z-'+dataValue] = {'name': name, 'type': 'checkbox'};
                                            appliedFilterOptions['z-'+dataValue]['options'] = [];
                                            var optionName, optionValue;
                                            _.each(multiKeyValueValue, function(value) {
                                                newEle = \$(eleSelector + '[value=\"' + value + '\"]')
                                                optionValue = dataValue + dataValueValueSeprator + newEle.val();
                                                optionName = newEle.parent().next().text();
                                                if(optionValue && optionName) {
                                                    appliedFilterOptions['z-'+dataValue]['options'].push({'id': value, 'name': optionName});
                                                }
                                            });
                                        } else if(ele[0].type == 'select-multiple') {
                                            var dataValue = multiKeyValue[0];
                                            filter = multiKeyValueValue;
                                            key = ele.attr('id');
                                            name = ele.parents('.uv-element-block').find('label:first').text().trim()

                                            appliedFilterOptions['z-'+dataValue] = {'name': name, 'type': 'select-multiple'};
                                            appliedFilterOptions['z-'+dataValue]['options'] = [];

                                            _.each(filter, function (value) {
                                                var optionName;
                                                if(optionName = \$(\"#\"+key+\" option[value='\" + value + \"']\").text()) {
                                                    appliedFilterOptions['z-'+dataValue]['options'].push({'id': value, 'name': optionName});
                                                }
                                            });

                                        } else if(ele[0].type == 'text' || ele[0].type == 'number') {
                                            filter = multiKeyValue[1];
                                            if(filter != null && filter != '') {
                                                filter = filter.replace(/\\+/g,' ');
                                                displayFlag = 1;
                                                var dataValue = ele.attr('data-value');
                                                name = ele.parents('.uv-element-block').find('label:first').text().trim()

                                                appliedFilterOptions['z-'+dataValue] = {'name': name, 'type': ele[0].type};
                                                appliedFilterOptions['z-'+dataValue]['options'] = [];
                                                appliedFilterOptions['z-'+dataValue]['options'].push({'id': 1, 'name': filter});

                                            }

                                        }
                                    })
                                }
                            }
                            if('after' == key || 'before' == key || 'repliesLess' == key || 'repliesMore' == key) {
                                \$('#'+ key +'-filter-input').val(filter);
                            }
                        })
                        if(displayFlag) {
                            self.\$el.find('.uv-filter-options .uv-action-buttons').html(\"\")
                            if(\$(\"#saved-filter\").val() != null && \$(\"#saved-filter\").val() != '' && Backbone.history.getFragment() == userFilters[\$(\"#saved-filter\").val()]['route']) {
                                self.\$el.find('.uv-filter-options .uv-action-buttons').append(\"<a class='uv-btn edit-saved-reply' href='#'>{{ 'Edit'|trans }}</a>\").show();
                                \$('.uv-filter-paper .uv-customize').show()
                            } else {
                                self.\$el.find('.uv-filter-options .uv-action-buttons').append(\"<a class='uv-btn new-saved-reply' href='#'>{{ 'New'|trans }}</a>\").show();
                                if(\$(\"#saved-filter\").val() != null && \$(\"#saved-filter\").val() != '') {
                                    self.\$el.find('.uv-filter-options .uv-action-buttons').append(\"<a class='uv-btn edit-saved-reply' href='#'>{{ 'Update'|trans }}</a>\").show();
                                    \$('.uv-filter-paper .uv-customize').show()
                                } else {
                                    \$('.uv-filter-paper .uv-customize').hide()
                                }
                            }
                        } else {
                            \$('.uv-filter-paper .uv-customize').hide()
                        }

                        this.appliedFilterOptions = appliedFilterOptions;
                        this.tempAppliedFilterOptions = jQuery.extend(true, {}, appliedFilterOptions);
                    }
                },
                searchFilterOption: function(e) {
                    self = this;
                    currentElement = Backbone.\$(e.currentTarget);
                    dropdown = currentElement.siblings('.uv-dropdown-list');
                    var filterType =  currentElement.attr('data-filter-type');
                    if(jQuery.inArray(filterType, ['customer', 'tag']) !== -1) {
                        self.searchFilterXhr(currentElement);
                    }
                },
                searchFilterXhr: _.debounce(function(currentElement) {
                    var parent = currentElement.parent();
                    if(\$('.uv-dropdown-other.uv-dropdown-btn-active').parent().attr('id') != parent.attr('id'))
                        return;

                    parent.find(\"li:not(.uv-no-results, .uv-filter-info)\").remove();
                    parent.find(\".uv-filter-info\").show()
                    if(currentElement.val().length > 1) {
                        parent.append(this.loaderTemplate())
                        parent.find('.uv-filter-info').text(\"{% trans %}Searching{% endtrans %} ...\")
                        if(self.xhrReq)
                            self.xhrReq.abort();

                        self.xhrReq = \$.ajax({
                            url : \"{{ path('helpdesk_member_ticket_collection_search_filter_options_xhr') }}\",
                            type : 'GET',
                            data: {\"type\" : currentElement.attr('data-filter-type'), \"query\" : currentElement.val(), 'not' : ticketCollection.filterParameters[currentElement.attr('data-filter-type')]},
                            dataType : 'json',
                            success : function(response) {
                                self.xhrReq = 0;
                                parent.find('.uv-loader').remove()
                                parent.find('.uv-filter-info').text(\"{{ 'Type atleast 2 letters'|trans }}\").hide();
                                if(response.length == 0) {
                                    parent.find('.uv-no-results').show()
                                } else {
                                    parent.find('.uv-no-results').hide();
                                    _.each(response, function(item) {
                                        if(currentElement.attr('data-filter-type') == 'customer') {
                                            var img = item.smallThumbnail ? \"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}\"+item.smallThumbnail : \"{{ asset(default_customer_image_path)}}\";
                                            parent.find('.uv-dropdown-list ul').append(\"<li data-id='\" + item.id + \"'><img src='\" + img + \"'/>\" + item.name + \"</li>\")
                                        } else
                                            parent.find('.uv-dropdown-list ul').append(\"<li data-id='\" + item.id + \"'>\" + item.name + \"</li>\")
                                    });
                                }
                            },
                            error: function (xhr) {
                                self.xhrReq = 0;
                                parent.find('.uv-loader').remove()
                                parent.find('.uv-no-results').hide();
                                parent.find('.uv-filter-info').text(\"{{ 'Type atleast 2 letters'|trans }}\").show();
                                if(url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                            }
                        });
                    } else {
                        parent.find('.uv-no-results').hide();
                    }
                },1000),
                applySavedFilter: function(e) {
                    var element = Backbone.\$(e.currentTarget);
                    if(element.val() != \"\") {
                        var element = Backbone.\$(e.currentTarget);
                        router.navigate(userFilters[element.val()]['route'], {trigger: true});
                    } else {
                        router.navigate('', {trigger: true});
                    }
                },
                applyFilter: function(e) {
                    currentElement = Backbone.\$(e.currentTarget);
                    if(currentElement.attr(\"data-id\")) {
                        var flag = 1;
                        parent = currentElement.parents(\".uv-field-block\");
                        filterType = parent.find('input').attr('data-filter-type');

                        if(filterType == \"customer\" || filterType == 'tag') {
                            sideFilterModel.updateModel(filterType, {'id': currentElement.attr('data-id'), 'name': currentElement.text()})
                            parent.find(\".uv-no-results\").hide()
                            parent.find(\".uv-filter-info\").show().text(\"{{ 'Type atleast 2 letters'|trans }}\")
                            parent.find(\"li:not(.uv-no-results, .uv-filter-info)\").remove();
                        } else {
                            if(ticketCollection.filterParameters[filterType]) {
                                ids = ticketCollection.filterParameters[filterType].split(',')
                                if(jQuery.inArray(currentElement.attr('data-id'), ids) !== -1)
                                    flag = 0;
                            }
                        }

                        parent.find('input').val('')
                        if(jQuery.inArray(filterType, ['agent', 'priority', 'type', 'group', 'team', 'mailbox', 'source']) !== -1) {
                            parent.find(\"li:not(.uv-no-results)\").show()
                        }
                        if(flag) {
                            parent.find('.uv-filtered-tags').append(\"<a class='uv-btn-tag' href='#' data-id='\" + currentElement.attr('data-id') + \"'>\"+currentElement.text()+\"<span class='uv-icon-remove-dark'></span></a>\")
                            ticketCollection.state.order = null;
                            ticketCollection.state.sortKey = null;
                            ticketCollection.state.currentPage = null;
                            ticketCollection.filterParameters[filterType] = this.joinTagValues(parent.find(\".uv-filtered-tags\"));
                            var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                            router.navigate(queryString, {trigger: true});
                        }
                    } else {
                        filterType = currentElement.attr('data-filter-type');
                        if(filterType == 'before' || filterType == \"after\") {
                            ticketCollection.state.order = null;
                            ticketCollection.state.sortKey = null;
                            ticketCollection.state.currentPage = null;
                            ticketCollection.filterParameters[filterType] = currentElement.val();
                            var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                            router.navigate(queryString, {trigger: true});
                        }
                    }
                },
                removeFilter: function(e) {
                    e.preventDefault()

                    currentElement = Backbone.\$(e.currentTarget);
                    filterType = currentElement.parents('.uv-field-block').find('input').attr('data-filter-type')
                    var options = ticketCollection.filterParameters[filterType];
                    options = options.split(',');
                    var index = options.indexOf(currentElement.attr('data-id'));
                    options.splice(index, 1);
                    ticketCollection.state.order = null;
                    ticketCollection.state.sortKey = null;
                    ticketCollection.state.currentPage = null;
                    ticketCollection.filterParameters[filterType] = options.join(',');
                    currentElement.remove()

                    var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                    router.navigate(queryString, {trigger: true});
                },
                joinTagValues: function(parent) {
                    var ids = new Array();
                    parent.find('.uv-btn-tag').each(function() {
                        ids.push(\$(this).attr('data-id'))
                    });
                    return ids.join();
                },
                filterByRepliesMoreThan: _.debounce(function(e) {
                    ticketCollection.state.order = null;
                    ticketCollection.state.sortKey = null;
                    ticketCollection.state.currentPage = null;
                    ticketCollection.filterParameters.repliesMore = \$(e.target).val();
                    var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                    router.navigate(queryString, { trigger: true });
                }, 1000),
                filterByRepliesLessThan: _.debounce(function(e) {
                    ticketCollection.state.order = null;
                    ticketCollection.state.sortKey = null;
                    ticketCollection.state.currentPage = null;
                    ticketCollection.filterParameters.repliesLess = \$(e.target).val();
                    var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                    router.navigate(queryString, { trigger: true });
                }, 1000),
                filterByCustom: _.debounce(function(e) {
                    var custom = '';
                    var checkBoxStore = Array();
                    var indexValueSeperator = '_';
                    var columnSeperator = '|';

                    Backbone.\$('.custom-filter').each(function(){
                        if(\$(this).context.type == 'radio' && \$(this).is(':checked')) {
                            custom += \$(this).attr('data-value') + indexValueSeperator + \$(this).val() + columnSeperator;
                        } else if(\$(this).context.type == 'checkbox' && \$(this).is(':checked')) {
                            var checkboxValue = Array();
                            var dataValue = \$(this).attr('data-value');
                            if(\$.inArray(dataValue, checkBoxStore) >= 0)
                                return;
                            \$.each(\$('[data-value=\"'+ dataValue +'\"]:checked'), function() {
                                checkboxValue.push(\$(this).val());
                            });
                            checkBoxStore.push(dataValue);
                            custom += dataValue + indexValueSeperator + checkboxValue.join() + columnSeperator;
                        } else if(\$(this).context.type == 'select-multiple' && \$(this).val()) {
                            custom += \$(this).attr('data-value') + indexValueSeperator + \$(this).val().join() + columnSeperator;
                        }
                    })

                    Backbone.\$('.search-custom').each(function(){
                        if(\$(this).val()){
                            custom += \$(this).attr('data-value') + indexValueSeperator + \$(this).val() + columnSeperator;
                        }
                    })

                    custom = custom.replace(/\\|\$/, '');

                    ticketCollection.state.order = null;
                    ticketCollection.state.sortKey = null;
                    ticketCollection.state.currentPage = null;
                    ticketCollection.filterParameters.custom = custom;
                    var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                    router.navigate(queryString,{trigger: true});
                }, 1000),
                backToFilter: function(e) {
                    if(e)
                        e.preventDefault()
                    this.\$el.find('.uv-filter-options').show()
                    this.\$el.find('.uv-filter-edit').hide()
                },
                addEditSavedReply: function(e) {
                    e.preventDefault()

                    var context = {};
                    this.tempAppliedFilterOptions = jQuery.extend(true, {}, this.appliedFilterOptions);
                    if(Backbone.\$(e.currentTarget).is('.new-saved-reply')) {
                        context = {'id': 0, 'name': '', 'is_default': 0, 'filters': this.tempAppliedFilterOptions};
                    } else {
                        context = userFilters[\$(\"#saved-filter\").val()];
                        context.filters = this.tempAppliedFilterOptions;
                        userFilters[\$(\"#saved-filter\").val()]
                    }
                    \$('.uv-filter-edit').html('')
                    \$('.uv-filter-edit').append(this.addEditSavedReplyTemplate(context));
                    this.\$el.find('.uv-filter-options').hide()
                    this.\$el.find('.uv-filter-edit').show()
                },
                removeSavedFilterOption: function(e) {
                    e.preventDefault()
                    var parent = Backbone.\$(e.currentTarget).parents('.uv-element-block');
                    var elementIndex = Backbone.\$(e.currentTarget).index();
                    var filterType = parent.attr('data-filter');
                    var filterId = Backbone.\$(e.currentTarget).attr('data-id');

                    delete this.tempAppliedFilterOptions[filterType]['options'][elementIndex]
                    Backbone.\$(e.currentTarget).remove()
                    if(!parent.find('.uv-btn-tag').length) {
                        parent.remove()
                        delete this.tempAppliedFilterOptions[filterType];
                    }
                    if(this.getSavedFilterRoute() == '') {
                        this.backToFilter();
                    }
                },
                saveSavedFilter: function(e) {
                    e.preventDefault()

                    if(Backbone.\$(e.currentTarget).hasClass('save-filter'))
                        this.saveFilterAjax('POST')
                    else {
                        this.saveFilterAjax('PUT')
                    }
                },
                saveFilterAjax: function(method) {
                    var inputElement = \$('.uv-filter-edit input.name');
                    inputElement.removeClass('uv-field-error');
                    \$('.uv-field-message').remove()

                    if(inputElement.val() != undefined && inputElement.val() == '') {
                        inputElement.addClass('uv-field-error');
                        inputElement.parent().after(\"<span class='uv-field-message'>{{ 'This field is mandatory'|trans }}</span>\");
                    } else {
                        var data = \$('.uv-filter-edit form').serializeObject();
                        data['route'] = this.getSavedFilterRoute();
                        app.appView.showLoader();
                        self = this;
                        \$.ajax({
                            url : \"{{ path('helpdesk_member_saved_filters_xhr') }}\",
                            type : method,
                            data: data,
                            dataType : 'json',
                            success : function(response) {
                                app.appView.hideLoader();
                                userFilters[response.filter.id] = response.filter;
                                \$(\"#saved-filter\").html(\"<option value=''>-- {{ 'Saved Filter'|trans }} --</option>\")
                                _.each(userFilters, function(filter, key) {
                                    if(response.filter.is_default && filter.id != response.filter.id)
                                        userFilters[key]['is_default'] = 0;

                                    var selected = '';
                                    if(response.filter.id == filter.id)
                                        selected = \"selected\";
                                    \$(\"#saved-filter\").append(\"<option value='\" + filter.id + \"' selected='\" + selected + \"''>\" + filter.name + \"</option>\")
                                })

                                \$(\"#saved-filter\").val(response.filter.id)
                                app.appView.renderResponseAlert(response);
                                self.render();
                                self.backToFilter();
                            },
                            error: function (xhr) {
                                app.appView.hideLoader();
                                if(url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                            }
                        });
                    }
                },
                getSavedFilterRoute: function() {
                    var filterParameters = {};
                    temp = [];
                    _.each(this.tempAppliedFilterOptions, function (filter, key) {
                        if(jQuery.inArray(key, ['customer', 'agent', 'priority', 'type', 'group', 'team', 'tag', 'mailbox', 'source', 'after', 'before', 'repliesLess', 'repliesMore']) !== -1) {
                            var ids = [];
                            _.each(filter['options'], function (item) {
                                ids.push(item.id)
                            });
                            filterParameters[key] = ids.join(',')
                        } else if(jQuery.inArray(key, ['new','unassigned','notreplied','mine','starred','trashed']) !== -1) {
                            filterParameters[key] = 1;
                        } else if(jQuery.inArray(key, ['label', 'status', 'search']) !== -1) {
                            _.each(filter['options'], function (item) {
                                filterParameters[key] = item.id;
                            });
                        } else {
                            custom = key.split(\"z-\")
                            tempKey = custom[1];
                            if(filter.type == 'text' || filter.type == 'number') {
                                _.each(filter['options'], function (item) {
                                    temp.push(tempKey + '_' + item.name)
                                });
                            } else if(filter.type == 'radio') {
                                var ids = [];
                                _.each(filter['options'], function (item) {
                                    ids.push(item.id)
                                });
                                temp.push(tempKey + '_' + ids.join(','))
                            } else if(filter.type == 'checkbox' || filter.type == 'select-multiple') {
                                var ids = [];
                                _.each(filter['options'], function (item) {
                                    ids.push(item.id)
                                });
                                temp.push(tempKey + '_' + ids.join(','))
                            }
                        }
                    })
                    if(temp.length)
                        filterParameters['custom'] = temp.join('|');

                    return app.appView.buildQuery(\$.param(filterParameters));
                },
                removeSavedFilter: function(e) {
                    e.preventDefault()
                    self = this;
                    app.appView.showLoader();
                    \$.ajax({
                        url : \"{{ path('helpdesk_member_saved_filters_xhr') }}/\" + \$(\"#saved-filter\").val(),
                        type : 'DELETE',
                        dataType : 'json',
                        success : function(response) {
                            app.appView.hideLoader();
                            delete userFilters[\$(\"#saved-filter\").val()];

                            \$(\"#saved-filter\").html(\"<option value=''>-- {{ 'Saved Filter'|trans }} --</option>\")
                            _.each(userFilters, function(filter, key) {
                                \$(\"#saved-filter\").append(\"<option value='\" + filter.id + \"'>\" + filter.name + \"</option>\")
                            })

                            \$(\"#saved-filter\").val('')
                            app.appView.renderResponseAlert(response);
                            self.render();
                            self.backToFilter();
                        },
                        error: function (xhr) {
                            app.appView.hideLoader();
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                }
            });

            // Ticket Label Item View
            var LabelItemView = Backbone.View.extend({
                tagName: 'li',
                className: 'uv-customize-wrapper',
                template: _.template(\$(\"#custom_label_tmp\").html()),
                events: {
                    'click .delete': 'confirmRemove',
                    'click .label-color.dropdown .fa-caret-down' : 'showUpdateLabelPopup'
                },
                render: function() {
                    this.\$el.html(this.template(this.model.toJSON()));

                    if (ticketCollection.filterParameters.label != '') {
                        if (ticketCollection.filterParameters.label == this.model.id) {
                            this.\$el.find('a').addClass('uv-aside-active');
                        }
                    }

                    return this;
                }
            });

            // Ticket List Item View
            var TicketItem = Backbone.View.extend({
                tagName: \"tr\",
                template: _.template(\$(\"#ticket_list_item_tmp\").html()),
                events: {
                    'click .uv-star': \"updateStar\",
                },
                render: function () {
                    this.model.set({
                        path: pathToTicket.replace('replaceId', this.model.attributes.id)
                    });
                    this.\$el.html(this.template(this.model.toJSON()));

                    if (this.model.attributes.isAgentView != true) {
                        this.\$el.addClass('unread')
                    }

                    if (!this.model.attributes.agent) {
                        this.\$el.addClass('not-assigned')
                    }

                    return this;
                },
                updateStar: function(e) {
                    e.preventDefault();
                    if (Backbone.\$(e.currentTarget).hasClass('uv-star-active')) {
                        Backbone.\$(e.currentTarget).removeClass('uv-star-active');
                    } else {
                        Backbone.\$(e.currentTarget).addClass('uv-star-active');
                    }

                    this.model.save({
                        id: this.model.id
                    }, {
                        patch: true,
                        url: \"{{ path('helpdesk_member_bookmark_ticket_xhr') }}\",
                        success: function (model, response, options) {},
                        error: function (model, xhr, options) {
                            if (url = xhr.getResponseHeader('Location')) {
                                window.location = url;
                            }
                        }
                    });
                }
            });

            // Ticket List View
            var TicketList = Backbone.View.extend({
                el: \$(\".uv-table table\"),
                initialize: function() {
                    this.render();
                },
                events: {
                    'change .mass-action-checkbox' : 'showBulkOptions',
                },
                showBulkOptions: function() {
                    var count = 0;
                    this.\$el.find('.mass-action-checkbox').each(function() {
                        if (\$(this).is(':checked')) {
                            count++;
                        }
                    });

                    if (count == \$('.mass-action-checkbox').length) {
                        \$('.select-all-checkbox').prop('checked', true);
                    } else {
                        \$('.select-all-checkbox').prop('checked', false);
                    }

                    if (count) {
                        \$('.uv-action-bar .filter').parent().hide();
                        \$('.uv-action-bar .mass-action').parent().addClass(\"uv-width-100\").show();
                        \$('.uv-action-bar-col-rt').hide()
                    } else {
                        \$('.uv-action-bar .mass-action').parent().removeClass(\"uv-width-100\").hide();
                        \$('.uv-action-bar .filter').parent().show();
                        \$('.uv-action-bar-col-rt').show();
                    }
                },
                render: function () {
                    this.\$el.find('tbody').html('');
                    if (ticketCollection.length) {
                        \$('.select-all-checkbox').prop( \"disabled\", false );
                        _.each(ticketCollection.models, function (item) {
                            ticketQuickViewCollection.add(new TicketQuickViewModel({id: item.id}))
                            this.renderTicket(item);
                        }, this);
                    } else {
                        \$('.select-all-checkbox').prop( \"disabled\", true );
                        this.\$el.find('tbody').append(\"<tr style='text-align: center;'><td colspan='11'>{% trans %}No Record Found{% endtrans %}</td></tr>\")
                    }

                    filter.filterAssetsVisibilityOnLoad()
                    app.appView.relativeTime()
                },
                renderTicket: function (item) {
                    var ticketItem = new TicketItem({
                        model: item
                    });

                    this.\$el.find('tbody').append(ticketItem.render().el);
                }
            });

            // Ticket Label List View
            var LabelListView = Backbone.View.extend({
                el: \$(\".uv-aside\"),
                template: _.template(\$(\"#predefined_label_tmp\").html()),
                statusTemplate: _.template(\$(\"#ticket_status_list_tmp\").html()),
                addEditLabelTemplate: _.template(\$(\"#add_edit_label_tmp\").html()),
                events: {
                    'click .status-list li a': \"filterByStatus\",
                    'click .add-new-label, .uv-customize': 'addEditLabel',
                    'click #back-to-labels': 'backToLabels',
                    'click .uv-color-block': 'setLabelColor',
                    'click .add-update-btn': 'saveLabel',
                    'click .uv-add-edit-label .uv-btn-remove': 'removeLabel'
                },
                render: function() {
                    var active = \"\";

                    if (ticketCollection.filterParameters.new != '') {
                        active = \"new\";
                    } else if (ticketCollection.filterParameters.unassigned != '') {
                        active = \"unassigned\";
                    } else if (ticketCollection.filterParameters.notreplied != '') {
                        active = \"notreplied\";
                    }

                    if (ticketCollection.filterParameters.mine != '') {
                        active = \"mine\";
                    } else if (ticketCollection.filterParameters.starred != '') {
                        active = \"starred\";
                    } else if (ticketCollection.filterParameters.trashed != '') {
                        active = \"trashed\";
                    } else if (ticketCollection.filterParameters.label != '') {
                        active = \"label\";
                    }

                    var data = {
                        'labelDetails' : labelDetails,
                        'active' : active
                    }
                    this.\$el.find('.predefined-label-list').html(this.template(data));

                    labelCollection.reset();
                    labelCollection.set(labelDetails.custom);
                    this.updateMassLabelList()
                },
                updateMassLabelList: function() {
                    this.\$el.find('.uv-aside-custom').html('');
                    var labelOptionHtml = \"\";
                    if(labelCollection.length) {
                        _.each(labelCollection.models, function (item) {
                            this.renderLabelItem(item);
                            labelOptionHtml = labelOptionHtml + \"<li data-index='\" + item.id + \"'><a href='#'>\" + item.attributes.name + \"</a></li>\";
                        }, this);
                    }
                    labelOptionHtml = labelOptionHtml ? labelOptionHtml : \"<li data-index='0'>{{ 'No Label Created'|trans }}</li>\";
                    \$(\".mass-action ul.label\").html(labelOptionHtml);
                    this.renderStatus();
                },
                renderLabelItem : function (item) {
                    var labelItem = new LabelItemView({
                        model: item
                    });
                    this.\$el.find('.uv-aside-custom').append(labelItem.render().el);
                },
                renderStatus : function() {
                    if(typeof ticketCollection.filterParameters.status == \"undefined\" || ticketCollection.filterParameters.status == null)
                        var active = 0;
                    else
                        var active = ticketCollection.filterParameters.status;

                    this.\$el.find('.uv-aside-active').parent().find('.status-list').remove()
                    this.\$el.find('.uv-aside-active').parent().append(this.statusTemplate({status : statusListDetails, active : active}));
                },
                filterByStatus : function(e) {
                    e.preventDefault()

                    ticketCollection.reset();
                    ticketCollection.state.order = null;
                    ticketCollection.state.sortKey = null;
                    ticketCollection.state.currentPage = null;
                    ticketCollection.filterParameters.status = Backbone.\$(e.currentTarget).attr('data-id');
                    var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                    router.navigate(queryString, {trigger: true});
                },
                addEditLabel: function(e) {
                    e.preventDefault()
                    currentElement = Backbone.\$(e.currentTarget);
                    if(currentElement.hasClass('add-new-label'))
                        \$('.uv-add-edit-label').html(this.addEditLabelTemplate({id : 0, name : '', colorCode: ''}))
                    else
                        \$('.uv-add-edit-label').html(this.addEditLabelTemplate(labelCollection.get(currentElement.siblings('a').attr('data-id')).toJSON()))

                    \$('.uv-aside-default').hide()
                    \$('.uv-add-edit-label').show()
                },
                backToLabels: function(e) {
                    if(e)
                        e.preventDefault()
                    \$('.uv-aside-default').show()
                    \$('.uv-add-edit-label').hide()
                },
                setLabelColor: function(e) {
                    \$('.uv-color-block').removeClass('uv-color-active');
                    Backbone.\$(e.currentTarget).addClass('uv-color-active');
                },
                saveLabel : function(e) {
                    e.preventDefault()
                    var inputElement = \$('.uv-add-edit-label input');
                    inputElement.removeClass('uv-field-error');
                    \$('.uv-field-message').remove()

                    var labelName = app.appView.stripHTML(inputElement.val());
                    if(labelName == \"\") {
                        inputElement.addClass('uv-field-error');
                        inputElement.parent().after(\"<span class='uv-field-message'>{{ 'This field is mandatory'|trans }}</span>\");
                    } else {
                        var labelId = parseInt(\$('.uv-aside-option').attr('data-id'))

                        model = labelId ? labelCollection.get(labelId) : new LabelModel()
                        model.set({name: labelName, colorCode: \$('.uv-color-block.uv-color-active').attr('data-color')});
                        self = this;
                        var flag = labelCollection.isLabelExist(labelName, labelId);
                        if(flag) {
                            app.appView.showLoader();
                            model.save({}, {
                                success: function (model, response, options) {
                                    app.appView.hideLoader();
                                    if(response.alertClass == \"success\") {
                                        if(!labelId) {
                                            labelCollection.add(model);
                                        }
                                        self.updateMassLabelList()
                                        app.appView.renderResponseAlert(response);
                                    } else {
                                        inputElement.addClass('uv-field-error');
                                        inputElement.parent().after(\"<span class='uv-field-message'>\" + response.alertMessage + \"</span>\");
                                    }

                                    self.backToLabels();
                                },
                                error: function (model, xhr, options) {
                                    if(url = xhr.getResponseHeader('Location'))
                                        window.location = url;
                                    app.appView.hideLoader();
                                    app.appView.renderResponseAlert(warningResponse);
                                }
                            });
                        } else {
                            inputElement.parent().after(\"<span class='uv-field-message'>{{ 'Label with same name already exist.'|trans }}</span>\");
                        }
                    }
                },
                removeLabel: function(e) {
                    e.preventDefault()
                    self = this;
                    app.appView.showLoader();
                    model = labelCollection.get(\$('.uv-aside-option').attr('data-id'))
                    model.destroy({
                        success : function (model, response, options) {
                            app.appView.hideLoader();
                            self.updateMassLabelList()
                            app.appView.renderResponseAlert(response);
                            self.backToLabels();
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(warningResponse);
                        }
                    });
                }
            });

            // Bulk Action View
            var BulkActionView = Backbone.View.extend({
                el: \$(\".mass-action\"),
                currentEvent: null,
                events: {
                    'click ul li, #mass-restore': 'massAction',
                    'click #mass-delete, #mass-delete-forever': 'confirmRemove',
                    'click #mass-restore': 'confirmRestore'
                },
                massAction: function(e) {
                    e.preventDefault();
                    if(!parseInt(Backbone.\$(e.currentTarget).attr('data-index')))
                        return;

                    var data = {};
                    data['actionType'] = Backbone.\$(e.currentTarget).parents('ul').attr('data-action') ? Backbone.\$(e.currentTarget).parents('ul').attr('data-action') : Backbone.\$(e.currentTarget).attr('data-action');
                    data['targetId'] = Backbone.\$(e.currentTarget).attr('data-index');
                    data['ids'] = this.getCheckedTicketIds();
                    ticketCollection.batchOperation(data);
                    this.hideBulkOptions();
                },
                removeItem: function(e) {
                    var data = {};

                    if(Backbone.\$(this.currentEvent.currentTarget).is(\"#mass-delete\"))
                        data['actionType'] = \"trashed\";
                    else if(Backbone.\$(this.currentEvent.currentTarget).is(\"#mass-delete-forever\"))
                        data['actionType'] = \"delete\";

                    data['ids'] = this.getCheckedTicketIds();
                    ticketCollection.batchOperation(data);
                    this.hideBulkOptions();
                },
                restoreItem: function(e) {
                    var data = {};
                    data['actionType'] = \"restored\";

                    data['ids'] = this.getCheckedTicketIds();
                    ticketCollection.batchOperation(data);
                    this.hideBulkOptions();
                },
                getCheckedTicketIds: function() {
                    var ids = new Array();
                    \$('.mass-action-checkbox').each(function() {
                        if(\$(this).is(':checked')) {
                            ids.push(\$(this).val());
                        }
                    });

                    return ids;
                },
                confirmRemove: function(e) {
                    e.preventDefault();
                    this.currentEvent = e;
                    app.appView.openConfirmModal(this)
                },
                confirmRestore: function(e) {
                    e.preventDefault();
                    app.appView.openConfirmModal(this, 'restoreItem')
                },
                hideBulkOptions : function() {
                    \$('.uv-action-bar .mass-action').parent().removeClass(\"uv-width-100\").hide();
                    \$('.uv-action-bar .filter').parent().show();
                    \$('.uv-action-bar-col-rt').show()
                }
            });

            var PageView = Backbone.View.extend({
                el: '.uv-paper',
                events : {
                    'change .select-all-checkbox' : 'selectAll',
                    'click .uv-quick-view-trigger, .quick-view-navigation .uv-btn-tag': 'navigateQuickView',
                },
                quickViewTemplate: _.template(\$(\"#ticket_quick_view_tmp\").html()),
                navigateQuickView : function(e) {
                    e.preventDefault();
                    //\$(\"#quick-view-modal .uv-loader\").hide()
                    var currentElement = Backbone.\$(e.currentTarget);
                    ticketId = currentElement.attr('data-id');
                    if(ticketId) {
                        if(model = ticketQuickViewCollection.isModelSynced(ticketId)) {
                            this.renderQuickView(model.toJSON())
                        } else {
                            var self = this;
                            if(currentElement.hasClass(\"uv-quick-view-trigger\"))
                                app.appView.showLoader();

                            if(ticketQuickViewCollection.get(ticketId)) {
                                navData = ticketQuickViewCollection.getNextPrev(ticketId);
                                requiredNext = (!navData.next && app.pager.paginationData.next) ? 1 : 0;
                                requiredPrev = (!navData.previous && app.pager.paginationData.previous) ? 1 : 0;
                            } else
                                requiredNext = requiredPrev = 1;

                            if(self.xhrReq)
                                self.xhrReq.abort();

                            \$(\"#quick-view-modal .uv-loader\").show()
                            self.xhrReq = \$.ajax({
                                url : \"{{ path('helpdesk_member_ticket_quick_view_xhr') }}\",
                                type : 'GET',
                                data : {ticketId : ticketId, next: requiredNext, previous: requiredPrev},
                                dataType : 'json',
                                success : function(response) {
                                    self.xhrReq = 0;
                                    if(currentElement.hasClass(\"uv-quick-view-trigger\"))
                                        app.appView.hideLoader();

                                    if(response.next == undefined)
                                        response.next = navData.next
                                    if(response.previous == undefined)
                                        response.previous = navData.previous

                                    response.isSynced = 1
                                    response.path = pathToTicket.replace('replaceId', response.incrementId);

                                    if(ticketQuickViewCollection.get(ticketId))
                                        ticketQuickViewCollection.set(response,{remove: false})
                                    else
                                        ticketQuickViewCollection.add(new TicketQuickViewModel(response))

                                    self.renderQuickView(response)
                                },
                                error: function (xhr) {
                                    self.xhrReq = 0;
                                    if(url = xhr.getResponseHeader('Location'))
                                        window.location = url;
                                    app.appView.hideLoader();
                                }
                            });
                        }
                    }
                },
                renderQuickView: function(response) {
                    \$('#quick-view-modal .uv-pop-up-box').html(this.quickViewTemplate(response));
                    app.appView.openModal('quick-view-modal')
                    \$('#quick-view-modal .message').find('img').removeAttr('crossorigin');

                    \$('#quick-view-modal .message').find('.uv-icon-ellipsis').remove();
                    \$('#quick-view-modal .message').find('.helpdesk_blockquote').eq(0).before(\"<span class='uv-icon-ellipsis uv-ellipsis-mirror'></span>\").hide();
                    app.appView.relativeTime();
                },
                selectAll : function(e) {
                    if(Backbone.\$(e.currentTarget).is(':checked')) {
                        \$('.mass-action-checkbox').prop('checked', true);
                        \$('.uv-action-bar .filter').parent().hide();
                        \$('.uv-action-bar .mass-action').parent().addClass(\"uv-width-100\").show();
                        \$('.uv-action-bar-col-rt').hide()
                    } else {
                        var count = 0;
                        \$('.mass-action-checkbox').each(function() {
                            if(\$(this).is(':checked'))
                                count++;
                        });
                        if(count == \$('.mass-action-checkbox').length) {
                            \$('.mass-action-checkbox').prop('checked', false);
                            \$('.uv-action-bar .filter').parent().show();
                            \$('.uv-action-bar .mass-action').parent().removeClass(\"uv-width-100\").hide();
                            \$('.uv-action-bar-col-rt').show()
                        }
                    }
                },
            });

            // Ticket Router
            Router = Backbone.Router.extend({
                routes: {
                    'page/:number(/sort/:sortField)(/direction/:order)' : 'paginate',
                    'status/:status(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByStatus',
                    'search/:query(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByQuery',
                    'agent/:agent(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByAgent',
                    'customer/:customer(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByCustomer',
                    'priority/:priority(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByPriority',
                    'type/:type(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByType',
                    'group/:group(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByGroup',
                    'team/:team(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterBySubGroup',
                    'tag/:tag(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByTags',
                    'mailbox/:mailbox(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByMailbox',
                    'source/:source(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterBySource',
                    'after/:after(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByAfter',
                    'before/:before(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByBefore',
                    'repliesLess/:repliesLess(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByRepliesLesserCount',
                    'repliesMore/:repliesMore(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByRepliesGreaterCount',
                    'custom/:custom(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByCustom',
                    'label/:labelId(/status/:status)(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByLabel',
                    'new(/status/:status)(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterNew',
                    'unassigned(/status/:status)(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterUnassigned',
                    'notreplied(/status/:status)(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterNotReplied',
                    'mine(/status/:status)(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterMine',
                    'starred(/status/:status)(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterstarred',
                    'trashed(/status/:status)(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterTrashed',
                    '': 'initializeList'
                },
                initializeList : function() {
                    \$(\"#saved-filter\").val('');
                    this.resetParams('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
                    this.fetch(null, null, null);
                },
                paginate : function(number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','','','', '');
                    this.fetch(number,sortField,order);
                },
                filterByLabel : function(labelId,status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams(labelId,'','','','','','',status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterNew : function(status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('',1,'','','','','',status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterUnassigned : function(status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','',1,'','','','',status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterNotReplied: function(status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','',1,'','','',status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);

                },
                filterMine : function(status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','',1,'','',status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterstarred : function(status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','',1,'',status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterTrashed : function(status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','',1,status,query,agent,customer,priority,type,group,team,tag,mailbox,source,custom);
                    this.fetch(number,sortField,order);
                },
                filterByStatus : function(status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','',status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByQuery : function(query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','',query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByAgent : function(agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','',agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByCustomer : function(customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','',customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByPriority : function(priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','',priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByType : function(type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','',type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByGroup : function(group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','',group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterBySubGroup : function(team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','',team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByTags : function(tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','',tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByMailbox : function(mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','',mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterBySource: function(source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','','',source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByAfter: function(after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','',after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByBefore: function(before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','',before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByRepliesLesserCount: function(repliesLess, repliesMore, custom, number, sortField, order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','','',repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByRepliesGreaterCount: function(repliesMore, custom, number, sortField, order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','','','',repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByCustom : function(custom, number, sortField, order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','','','','',custom);
                    this.fetch(number,sortField,order);
                },
                fetch: function(number, sortField, order) {
                    ticketCollection.state.currentPage = number;
                    filter.sortCollection(sortField, order);
                    ticketCollection.syncData();
                },
                resetParams : function(labelId,newLabel,unassigned,notreplied,mine,starred,trashed,status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom) {
                    _.each(userFilters, function(filter, index) {
                        if(Backbone.history.getFragment() == filter['route']) {
                            \$(\"#saved-filter\").val(index);
                        }
                    });

                    isPageJustLoaded = false;
                    if(query != null)
                        query = query.replace(/\\+/g,' ');
                    bulkAction.hideBulkOptions();
                    ticketCollection.filterParameters.label = labelId;
                    ticketCollection.filterParameters.new = newLabel;
                    ticketCollection.filterParameters.unassigned = unassigned;
                    ticketCollection.filterParameters.notreplied = notreplied;
                    ticketCollection.filterParameters.mine = mine;
                    ticketCollection.filterParameters.starred = starred;
                    ticketCollection.filterParameters.trashed = trashed;
                    ticketCollection.filterParameters.search = query;
                    \$(\".uv-search-inline\").val(query);
                    ticketCollection.filterParameters.status = status;
                    ticketCollection.filterParameters.agent = agent;
                    ticketCollection.filterParameters.customer = customer;
                    ticketCollection.filterParameters.priority = priority;
                    ticketCollection.filterParameters.type = type;
                    ticketCollection.filterParameters.group = group;
                    ticketCollection.filterParameters.team = team;
                    ticketCollection.filterParameters.tag = tag;
                    ticketCollection.filterParameters.mailbox = mailbox;
                    ticketCollection.filterParameters.source = source;
                    ticketCollection.filterParameters.after = after;
                    ticketCollection.filterParameters.before = before;
                    ticketCollection.filterParameters.repliesLess = repliesLess;
                    ticketCollection.filterParameters.repliesMore = repliesMore;

                    ticketCollection.filterParameters.custom = custom;
                    \$('.custom-fields').find('input[type=\"text\"]').val('');
                    \$('.custom-fields').find('select').val('');
                    \$('.custom-fields').find('input[type=\"radio\"]').prop('checked', false);
                    \$('.custom-fields').find('input[type=\"checkbox\"]').prop('checked', false);

                    if(custom) {
                        custom = custom.replace(/\\+/g,' ');

                        var indexValueSeperator = '_';
                        var columnSeperator = '|';

                        var multiOptions = custom.split(columnSeperator);
                        var multiKeyValue, multiKeyValueValue, ele;

                        _.each(multiOptions, function(valueData, indexData) {
                            if(!valueData)
                                return;

                            multiKeyValue = valueData.split(indexValueSeperator);

                            multiKeyValueValue = multiKeyValue[1].split(',');

                            ele = \$('[data-value=\"' + multiKeyValue[0] + '\"]');

                            if(ele[0].type == 'radio') {
                                \$('[data-value=\"' + multiKeyValue[0] + '\"][value=\"' + multiKeyValue[1] + '\"]').prop('checked', true);

                            } else if(ele[0].type == 'checkbox') {
                                _.each(ele, function(eleElements) {
                                    if(multiKeyValueValue.indexOf(eleElements.value) > -1) {
                                        \$(eleElements).prop('checked', true);
                                    }
                                });

                            } else if(ele[0].type == 'select-multiple') {
                                ele.val(multiKeyValueValue);

                            } else if(ele[0].type == 'text') {
                                ele.val(multiKeyValue[1]);
                            }
                        })

                    }

                    if(trashed) {
                        \$('.property-block').hide();
                        \$('.trashed-block').show();
                    } else {
                        \$('.property-block').show();
                        \$('.trashed-block').hide();
                    }

                    sideFilter.isRecurrsiveCalls = 0;
                    sideFilter.render();
                }
            });

            var router = new Router();
            var pageview = new PageView;
            var bulkAction = new BulkActionView();
            var sideFilterModel = new SideFilterModel(filterContext)
            var sideFilter = new SideFilter();
            var ticketCollection = new TicketCollection();
            var ticketQuickViewCollection = new TicketQuickViewCollection();
            var labelCollection = new LabelCollection();
            var labelListView = new LabelListView()
            var filter = new Filter({collection : ticketCollection});

            Backbone.history.start({
                push_state:true
            });
        });
    </script>
{% endblock %}", "@UVDeskCoreFramework/ticketList.html.twig", "/home/lexcorp.xyz/public_html/uvdesk/vendor/uvdesk/core-framework/Resources/views/ticketList.html.twig");
    }
}
