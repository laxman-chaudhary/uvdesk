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

/* @UVDeskCoreFramework/Reports/kudos-insights.html.twig */
class __TwigTemplate_3e8100a65aa5808ba3c1c5ce6aba72e2f2485fbe0ecc676c8c8b6915b638fdfb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Reports/kudos-insights.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Reports/kudos-insights.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskCoreFramework/Reports/kudos-insights.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " 
\t";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kudos"), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        // line 9
        echo "    <style>
    .uv-action-bar {
  border-bottom: 1px solid #d3d3d3;
  padding-bottom: 10px;
}
.uv-action-bar .uv-field-block.date {
  display: inline-block;
  margin-right: 10px;
}
.uv-action-bar label {
  font-size: 16px;
  vertical-align: middle;
  margin-right: 10px;
}
.uv-report-wrapper {
  padding-right: 20px;
}
.uv-report-wrapper .uv-middle {
  position: absolute;
  width: 100%;
  left: 0;
  top: 50%;
  text-align: center;
}
.uv-report-wrapper svg {
  width: 100%;
}
.uv-report-wrapper svg text {
  fill: #333;
}
.uv-report-brick-wrapper {
  width: 100%;
  display: inline-block;
  border: 1px solid #d3d3d3;
  margin: 20px 0;
  border-radius: 3px;
}
.uv-report-brick-wrapper {
  width: 100%;
  display: inline-block;
  border: 1px solid #d3d3d3;
  margin: 20px 0;
  border-radius: 3px;
}
.uv-report-brick {
  position: relative;
  display: inline-block;
  float: left;
  width: 20%;
  text-align: center;
  padding: 18px 0;
  border-right: 1px solid #d3d3d3;
}
.uv-report-brick:last-child {
  border-right: none;
}
.uv-report-brick-count {
  width: 100%;
  display: inline-block;
  color: #8473f3;
  font-size: 30px;
}
.uv-report-brick-label {
  width: 100%;
  display: inline-block;
  font-size: 18px;
}
.uv-icon-kudos {
  background-image: url(\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/images/uvdesk-kudo-sprite.svg"), "html", null, true);
        echo "\");
  display: inline-block;
  width: 40px;
  height: 40px;
}
.uv-icon-kudos.kudos-1 {
  background-position: 0px 40px;
}
.uv-icon-kudos.kudos-2 {
  background-position: -40px 40px;
}
.uv-icon-kudos.kudos-3 {
  background-position: -80px 40px;
}
.uv-icon-kudos.kudos-4 {
  background-position: -120px 40px;
}
.uv-icon-kudos.kudos-5 {
  background-position: -160px 40px;
}
.kudos-text-1 {
  color: #FC6E46;
}
.kudos-text-2 {
  color: #FC6E46;
}
.kudos-text-3 {
  color: #FCDA32;
}
.kudos-text-4 {
  color: #01D101;
}
.kudos-text-5 {
  color: #01D101;
}
@media screen and (max-width: 1024px) {
  .uv-report-chart-top-row .uv-report-chart-col-lt {
      width: 100%;
      padding: 0;
  }
  .uv-report-chart-top-row .uv-report-chart-col-rt {
      width: 100%;
  }
  .uv-report-chart-bottom-row .uv-col-4 {
      width: 100%;
      padding: 0;
  }
  .uv-pannel-body.ticket-customer {
      padding: 0 !important;
  }
  .uv-report-brick {
      width: 100%;
      border-right: none;
      border-bottom: 1px solid #d3d3d3;
  }
  .uv-report-brick:last-child {
      border-bottom: none;
  }
}
@media screen and (max-width: 500px) {
  .uv-action-bar label {
      display: none;
  }
  .uv-action-bar .uv-field-block.date {
      width: 100%;
      padding: 0px 0px 0px 5px;
      margin-right: 0;
  }
  .uv-action-bar .uv-field-block.date input {
      width: 100%;
  }
  .uv-inner-section .uv-action-bar .uv-action-bar-col-lt {
      padding-right: 15px;
  }
  .uv-report-chart-col-lt .uv-pannel-body {
      padding: 0;
  }
  .uv-pannel-heading select {
      width: 100px;
  }
}
    </style>

\t<div class=\"uv-inner-section\">
\t\t";
        // line 161
        $context["asideTemplate"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\AsideTemplate";
        // line 162
        echo "\t\t";
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Reports";
        // line 163
        echo "
\t\t";
        // line 164
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 164, $this->source); })()), "getRegisteredComponent", [0 => (isset($context["asideTemplate"]) || array_key_exists("asideTemplate", $context) ? $context["asideTemplate"] : (function () { throw new RuntimeError('Variable "asideTemplate" does not exist.', 164, $this->source); })())], "method", false, false, false, 164), "renderSidebar", [0 => (isset($context["asideSidebarReference"]) || array_key_exists("asideSidebarReference", $context) ? $context["asideSidebarReference"] : (function () { throw new RuntimeError('Variable "asideSidebarReference" does not exist.', 164, $this->source); })())], "method", false, false, false, 164);
        echo "
\t\t<div class=\"uv-view ";
        // line 165
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 165, $this->source); })()), "request", [], "any", false, false, false, 165), "cookies", [], "any", false, false, false, 165) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 165, $this->source); })()), "request", [], "any", false, false, false, 165), "cookies", [], "any", false, false, false, 165), "get", [0 => "uv-asideView"], "method", false, false, false, 165))) {
            echo "uv-aside-view";
        }
        echo "\">
\t\t\t<h1>
\t\t\t\t";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Kudos"), "html", null, true);
        echo "
\t\t\t</h1>
\t\t\t<div class=\"uv-action-bar\">
                <div class=\"uv-action-bar-col-lt\">
                    <label>";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("From"), "html", null, true);
        echo "</label>  
                    <div class=\"uv-field-block date\">
                        <input type=\"text\" class=\"uv-field uv-date-picker date date-from\" value=\"";
        // line 173
        echo twig_escape_filter($this->env, (isset($context["startDate"]) || array_key_exists("startDate", $context) ? $context["startDate"] : (function () { throw new RuntimeError('Variable "startDate" does not exist.', 173, $this->source); })()), "html", null, true);
        echo "\">
                    </div>
                    <label>";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To"), "html", null, true);
        echo "</label>  
                    <div class=\"uv-field-block date\">  
                        <input type=\"text\" class=\"uv-field uv-date-picker date date-to\" value=\"";
        // line 177
        echo twig_escape_filter($this->env, (isset($context["endDate"]) || array_key_exists("endDate", $context) ? $context["endDate"] : (function () { throw new RuntimeError('Variable "endDate" does not exist.', 177, $this->source); })()), "html", null, true);
        echo "\">
                    </div>
                </div>
                
\t\t\t\t<div class=\"uv-action-bar-col-rt\">
\t\t\t\t\t<!-- Filter Button -->
\t\t\t\t\t<div class=\"uv-btn-stroke uv-margin-left-15 filter-view-trigger\"  data-target=\"uv-filter-view\">
                        <span class=\"uv-icon-filter\"></span>
                        ";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter View"), "html", null, true);
        echo "
                    </div>
\t\t\t\t\t<!--// Filter Button -->
\t\t\t\t</div>
            </div>


\t\t\t<div class=\"uv-report-wrapper\">
                <div class=\"uv-report-brick-wrapper\">
                    <span class=\"uv-report-brick\">
\t\t\t\t\t\t<span class=\"uv-icon-kudos kudos-1\"></span>
                        <span class=\"uv-report-brick-count\">
                            0
                        </span>
                        <span class=\"uv-report-brick-label\">
                            ";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Very Sad"), "html", null, true);
        echo "
                        </span>
                    </span>
                    <span class=\"uv-report-brick\">
\t\t\t\t\t\t<span class=\"uv-icon-kudos kudos-2\"></span>
                        <span class=\"uv-report-brick-count\">
                            0
                        </span>
                        <span class=\"uv-report-brick-label\">
                            ";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sad"), "html", null, true);
        echo "
                        </span>
                    </span>
                    <span class=\"uv-report-brick\">
\t\t\t\t\t\t<span class=\"uv-icon-kudos kudos-3\"></span>
                        <span class=\"uv-report-brick-count\">
                            0
                        </span>
                        <span class=\"uv-report-brick-label\">
                            ";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Neutral"), "html", null, true);
        echo "
                        </span>
                    </span>
                    <span class=\"uv-report-brick\">
\t\t\t\t\t\t<span class=\"uv-icon-kudos kudos-4\"></span>
                        <span class=\"uv-report-brick-count\">
                            0
                        </span>
                        <span class=\"uv-report-brick-label\">
                            ";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Happy"), "html", null, true);
        echo "
                        </span>
                    </span>
                    <span class=\"uv-report-brick\">
\t\t\t\t\t\t<span class=\"uv-icon-kudos kudos-5\"></span>
                        <span class=\"uv-report-brick-count\">
                            0
                        </span>
                        <span class=\"uv-report-brick-label\">
                            ";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Very Happy"), "html", null, true);
        echo "
                        </span>
                    </span>
                </div>

                    <div class=\"uv-action-bar\">
                        <div class=\"uv-action-bar-col-lt\">
                            <!--Sort by-->
                            <div class=\"uv-dropdown sort\">
                                <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">
                                    ";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort By:"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Timestamp"), "html", null, true);
        echo "
                                </div>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label> ";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort By"), "html", null, true);
        echo "</label>
                                        <ul>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Sort by-->
                        </div>
                        ";
        // line 261
        echo "                    </div>
                    <div class=\"uv-table uv-list-view\">
                        <table>
                            <thead>
                                <tr>
                                    <th>
                                        ";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket Id"), "html", null, true);
        echo "
                                    </th>
                                    <th>
                                        ";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Name"), "html", null, true);
        echo "
                                    </th>
                                    <th>
                                        ";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Email"), "html", null, true);
        echo "
                                    </th>
                                    <th>
                                        ";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Timestamp"), "html", null, true);
        echo "
                                    </th>
                                    <th class=\"uv-last\">
                                        ";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Kudos Rating"), "html", null, true);
        echo "
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        <div class=\"navigation\"></div>
                    </div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Filter bar -->
        <div class=\"uv-filter-view\" id=\"uv-filter-view\">

            <!--/-->
            <div class=\"uv-filter-head\">\t\t\t
                <div class=\"uv-filter-title\">
                    <h6>";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tickets"), "html", null, true);
        echo "</h6>
                    <span>";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save set of filters as a preset to stay more productive"), "html", null, true);
        echo "</span>
                </div>
                <div class=\"uv-filter-toggle\" id=\"filter-close-trigger\">
                    <span></span>
                </div>
            </div>
            <!--//-->

            <div class=\"uv-filter-paper\">
                <!-- Filter block -->
                <div class=\"uv-filter-options\">
                    ";
        // line 310
        $context["filterContext"] = [];
        // line 311
        echo "                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 312
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        echo "</label>
                        <div class=\"uv-field-block\" id=\"agent-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"agent\" id=\"agent-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 317
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        echo "</label>
                            </div>
                            <ul class=\"uv-agents-list\">
                                <li class=\"uv-filter-info\">
                                    ";
        // line 321
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        echo "
                                </li>
                                <li class=\"uv-no-results\" style=\"display: none;\">
                                    ";
        // line 324
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
        // line 333
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer"), "html", null, true);
        echo "</label>
                        <div class=\"uv-field-block\" id=\"customer-filter\">
                            <input class=\"uv-field uv-dropdown-other\" type=\"text\" data-filter-type=\"customer\" id=\"customer-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        echo "</label>
                                </div>
                                <ul class=\"uv-agents-list\">
                                    <li class=\"uv-filter-info\">
                                        ";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        echo "
                                    </li>
                                    <li class=\"uv-no-results\" style=\"display: none;\">
                                        ";
        // line 345
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
        // line 354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("group"), "html", null, true);
        echo "</label>
                        <div class=\"uv-field-block\" id=\"group-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"group\" id=\"group-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        echo "</label>
                                    <ul>
                                        <li class=\"uv-filter-info\">
                                            ";
        // line 362
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        echo "
                                        </li>
                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            ";
        // line 365
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
        // line 375
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team"), "html", null, true);
        echo "</label>
                        <div class=\"uv-field-block\" id=\"team-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"team\" id=\"team-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 380
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        echo "</label>
                                    <ul>
                                        <li class=\"uv-filter-info\">
                                            ";
        // line 383
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        echo "
                                        </li>
                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            ";
        // line 386
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
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
        echo "</label>
                        <div class=\"uv-field-block\" id=\"type-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"type\" id=\"type-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        echo "</label>
                                    <ul class=\"\">
                                        ";
        // line 403
        $context["options"] = [];
        // line 404
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 404, $this->source); })()), "getTypes", [], "method", false, false, false, 404));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 405
            echo "                                            ";
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 405, $this->source); })()), [0 => ["id" => twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 405), "name" => twig_get_attribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 405)]]);
            // line 406
            echo "                                            <li data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 406), "html", null, true);
            echo "\">
                                                ";
            // line 407
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 407), "html", null, true);
            echo "
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 410
        echo "                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            ";
        // line 411
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        echo "
                                        </li>
                                        ";
        // line 413
        $context["filterContext"] = twig_array_merge((isset($context["filterContext"]) || array_key_exists("filterContext", $context) ? $context["filterContext"] : (function () { throw new RuntimeError('Variable "filterContext" does not exist.', 413, $this->source); })()), ["type" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 413, $this->source); })())]);
        // line 414
        echo "                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 422
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Priority"), "html", null, true);
        echo "</label>
                        <div class=\"uv-field-block\" id=\"priority-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"priority\" id=\"priority-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 427
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        echo "</label>
                                    <ul class=\"\">
                                        ";
        // line 429
        $context["options"] = [];
        // line 430
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 430, $this->source); })()), "getPriorities", [], "method", false, false, false, 430));
        foreach ($context['_seq'] as $context["_key"] => $context["priority"]) {
            // line 431
            echo "                                            ";
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 431, $this->source); })()), [0 => ["id" => twig_get_attribute($this->env, $this->source, $context["priority"], "id", [], "any", false, false, false, 431), "name" => twig_get_attribute($this->env, $this->source, $context["priority"], "description", [], "any", false, false, false, 431), "color" => twig_get_attribute($this->env, $this->source, $context["priority"], "colorCode", [], "any", false, false, false, 431)]]);
            // line 432
            echo "                                            <li data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["priority"], "id", [], "any", false, false, false, 432), "html", null, true);
            echo "\">
                                                ";
            // line 433
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["priority"], "description", [], "any", false, false, false, 433), "html", null, true);
            echo "
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priority'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 436
        echo "                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            ";
        // line 437
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        echo "
                                        </li>
                                        ";
        // line 439
        $context["filterContext"] = twig_array_merge((isset($context["filterContext"]) || array_key_exists("filterContext", $context) ? $context["filterContext"] : (function () { throw new RuntimeError('Variable "filterContext" does not exist.', 439, $this->source); })()), ["priority" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 439, $this->source); })())]);
        // line 440
        echo "                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 448
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Source"), "html", null, true);
        echo "</label>
                        <div class=\"uv-field-block\" id=\"source-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"source\" id=\"source-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 453
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        echo "</label>
                                    <ul class=\"\">
                                        ";
        // line 455
        $context["options"] = [];
        // line 456
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 456, $this->source); })()), "getAllSources", [], "method", false, false, false, 456));
        foreach ($context['_seq'] as $context["key"] => $context["source"]) {
            // line 457
            echo "                                            ";
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 457, $this->source); })()), [0 => ["id" => $context["key"], "name" => $context["source"]]]);
            // line 458
            echo "                                            <li data-id=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
                                                ";
            // line 459
            echo twig_escape_filter($this->env, $context["source"], "html", null, true);
            echo "
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['source'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 462
        echo "                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            ";
        // line 463
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        echo "
                                        </li>
                                        ";
        // line 465
        $context["filterContext"] = twig_array_merge((isset($context["filterContext"]) || array_key_exists("filterContext", $context) ? $context["filterContext"] : (function () { throw new RuntimeError('Variable "filterContext" does not exist.', 465, $this->source); })()), ["source" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 465, $this->source); })())]);
        // line 466
        echo "                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div> 
                </div>
                <script type=\"text/javascript\">
                    var filterContext = ";
        // line 474
        echo json_encode((isset($context["filterContext"]) || array_key_exists("filterContext", $context) ? $context["filterContext"] : (function () { throw new RuntimeError('Variable "filterContext" does not exist.', 474, $this->source); })()));
        echo "
                </script>
            </div>
        </div>
\t\t<!-- //Filter bar -->
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 482
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 483
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "

\t<!-- Sorting Template -->
\t<script id=\"rating_list_sorting_tmp\" type=\"text/template\">
        <li class=\"<% if(sort == 't.id') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/t.id/<% if(sort == 't.id') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"t.id\">
                ";
        // line 489
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket Id"), "html", null, true);
        echo "
            </a>
            <% if(sort == 't.id') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
            <% } %>
        </li>
        <li class=\"<% if(sort == 'name') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/name/<% if(sort == 'name') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"name\">
                ";
        // line 497
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Name"), "html", null, true);
        echo "
            </a>
            <% if(sort == 'name') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
            <% } %>
        </li>
\t\t<li class=\"<% if(sort == 'c.email') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/c.email/<% if(sort == 'c.email') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"c.email\">
                ";
        // line 505
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Email"), "html", null, true);
        echo "
            </a>
            <% if(sort == 'c.email') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
            <% } %>
        </li>
\t\t<li class=\"<% if(sort == 'r.stars') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/r.stars/<% if(sort == 'r.stars') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"r.stars\">
                ";
        // line 513
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Rating"), "html", null, true);
        echo "
            </a>
            <% if(sort == 'r.stars') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
            <% } %>
        </li>
\t\t<li class=\"<% if(sort == 'r.createdAt') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/r.createdAt/<% if(sort == 'r.createdAt') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"r.createdAt\">
                ";
        // line 521
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Timestamp"), "html", null, true);
        echo "
            </a>
            <% if(sort == 'r.createdAt') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
            <% } %>
        </li>
\t</script>
\t<!-- //Sorting Template -->

    <script id=\"rating_brick_tmp\" type=\"text/template\">
        <span class=\"uv-report-brick\">
\t\t\t<span class=\"uv-icon-kudos kudos-1\"></span>
\t\t\t<span class=\"uv-report-brick-count\">
\t\t\t\t<%= rating[1] %>
\t\t\t</span>
\t\t\t<span class=\"uv-report-brick-label\">
\t\t\t\t";
        // line 537
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Very Sad"), "html", null, true);
        echo "
\t\t\t</span>
\t\t</span>
\t\t<span class=\"uv-report-brick\">
\t\t\t<span class=\"uv-icon-kudos kudos-2\"></span>
\t\t\t<span class=\"uv-report-brick-count\">
\t\t\t\t<%= rating[2] %>
\t\t\t</span>
\t\t\t<span class=\"uv-report-brick-label\">
\t\t\t\t";
        // line 546
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sad"), "html", null, true);
        echo "
\t\t\t</span>
\t\t</span>
\t\t<span class=\"uv-report-brick\">
\t\t\t<span class=\"uv-icon-kudos kudos-3\"></span>
\t\t\t<span class=\"uv-report-brick-count\">
\t\t\t\t<%= rating[3] %>
\t\t\t</span>
\t\t\t<span class=\"uv-report-brick-label\">
\t\t\t\t";
        // line 555
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Neutral"), "html", null, true);
        echo "
\t\t\t</span>
\t\t</span>
\t\t<span class=\"uv-report-brick\">
\t\t\t<span class=\"uv-icon-kudos kudos-4\"></span>
\t\t\t<span class=\"uv-report-brick-count\">
\t\t\t\t<%= rating[4] %>
\t\t\t</span>
\t\t\t<span class=\"uv-report-brick-label\">
\t\t\t\t";
        // line 564
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Happy"), "html", null, true);
        echo "
\t\t\t</span>
\t\t</span>
\t\t<span class=\"uv-report-brick\">
\t\t\t<span class=\"uv-icon-kudos kudos-5\"></span>
\t\t\t<span class=\"uv-report-brick-count\">
\t\t\t\t<%= rating[5] %>
\t\t\t</span>
\t\t\t<span class=\"uv-report-brick-label\">
\t\t\t\t";
        // line 573
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Very Happy"), "html", null, true);
        echo "
\t\t\t</span>
\t\t</span>
    </script>

\t<script id=\"rated_ticket_item_tmp\" type=\"text/template\">
        <td data-value=\"";
        // line 579
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket Id"), "html", null, true);
        echo "\">
        \t<a class=\"bold\" href=\"";
        // line 580
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket");
        echo "/<%= ticketId %>\">
            \t#<%= ticketId %>
            </a>
        </td>
        <td data-value=\"";
        // line 584
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Name"), "html", null, true);
        echo "\">
        \t<a href=\"";
        // line 585
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_manage_customer_account");
        echo "/<%= customer.id %>\">
                <% if(customer.smallThumbnail != null) { %>
                    <img src=\"";
        // line 587
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 587, $this->source); })()), "request", [], "any", false, false, false, 587), "scheme", [], "any", false, false, false, 587) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 587, $this->source); })()), "request", [], "any", false, false, false, 587), "httpHost", [], "any", false, false, false, 587)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
        echo "<%= customer.smallThumbnail %>\" alt=\"\"/>
                <% } else { %>
                    <img src=\"";
        // line 589
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_customer_image_path"]) || array_key_exists("default_customer_image_path", $context) ? $context["default_customer_image_path"] : (function () { throw new RuntimeError('Variable "default_customer_image_path" does not exist.', 589, $this->source); })())), "html", null, true);
        echo "\" alt=\"\"/>
                <% } %>
                <%- customer.name %>
            </a>
        </td>
        <td data-value=\"";
        // line 594
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Email"), "html", null, true);
        echo "\">
        \t<%- customer.email %>
        </td>
        <td data-value=\"";
        // line 597
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Timestamp"), "html", null, true);
        echo "\">
        \t<%- formatedRatedAt %>
        </td>
        <td data-value=\"";
        // line 600
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Kudos Rating"), "html", null, true);
        echo "\">
\t\t\t<span class=\"kudos-text-<%= count %>\">
\t\t\t\t<%= count %> ";
        // line 602
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Star(s)"), "html", null, true);
        echo " - 
\t\t\t\t<% if(count == 1) { %>
\t\t\t\t\t";
        // line 604
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Very Sad"), "html", null, true);
        echo "
\t\t\t\t<% } else if(count == 2) { %>
\t\t\t\t\t";
        // line 606
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sad"), "html", null, true);
        echo "
\t\t\t\t<% } else if(count == 3) { %>
\t\t\t\t\t";
        // line 608
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Neutral"), "html", null, true);
        echo "
\t\t\t\t<% } else if(count == 4) { %>
\t\t\t\t\t";
        // line 610
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Happy"), "html", null, true);
        echo "
\t\t\t\t<% } else { %>
\t\t\t\t\t";
        // line 612
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Very Happy"), "html", null, true);
        echo "
\t\t\t\t<% } %>
\t\t\t</span>
        </td>
\t</script>

\t<script>
\t    \$(function() {
\t    \tvar customerPath = \"";
        // line 620
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_manage_customer_account", ["id" => "replaceId"]);
        echo "\";
\t    \tvar startGlobalDate = \"";
        // line 621
        echo twig_escape_filter($this->env, (isset($context["startDate"]) || array_key_exists("startDate", $context) ? $context["startDate"] : (function () { throw new RuntimeError('Variable "startDate" does not exist.', 621, $this->source); })()), "html", null, true);
        echo "\",
\t    \tendGlobalDate = \"";
        // line 622
        echo twig_escape_filter($this->env, (isset($context["endDate"]) || array_key_exists("endDate", $context) ? $context["endDate"] : (function () { throw new RuntimeError('Variable "endDate" does not exist.', 622, $this->source); })()), "html", null, true);
        echo "\";
            var date = new Date();
            var currentMonth = date.getMonth();
            var currentDate = date.getDate();
            var currentYear = date.getFullYear();
\t\t\t\$('.uv-action-bar .date').datetimepicker({
\t\t\t\tmaxDate: new Date(currentYear, currentMonth, currentDate),
                format: 'YYYY-MM-DD',
\t\t\t}).on('dp.change', function(e) {
\t\t\t\t\$('.date').removeClass('uv-field-error');
\t\t\t\tvar element = \$(e.currentTarget);
\t\t\t\tvar date = element.find('input').val();
\t\t\t\tif(new Date(\$(\".date-to\").val()) >= new Date(\$(\".date-from\").val())) {
                    achievementsView.filterReport();
                } else
\t\t\t\t\t\$('.date').addClass('uv-field-error');
\t\t    });
\t    
\t\t\tvar AchievementsView = Backbone.View.extend({
\t\t\t\tel : \$(\".uv-view\"),
\t\t\t\ttemplate : _.template(\$(\"#rating_brick_tmp\").html()),
\t\t\t    events : {
\t\t\t    \t'click .update-date' : \"filterReport\"
\t\t\t    },
\t\t\t\tfilterReport: function(e) {
\t\t\t\t\tif(new Date(\$(\".date-to\").val()) >= new Date(\$(\".date-from\").val())) {
\t\t\t\t\t\tratedTicketCollection.filterParameters.start = \$(\".date-from\").val();
\t\t\t\t\t\tratedTicketCollection.filterParameters.end = \$(\".date-to\").val();
\t\t\t\t\t\tvar queryString = app.appView.buildQuery(\$.param(ratedTicketCollection.getValidParameters()));
\t\t\t\t\t\trouter.navigate(queryString, {trigger: true});
\t\t\t\t\t}
\t\t\t    },
\t\t\t    intializeTiles : function(response) {
\t\t\t\t\tthis.\$el.find('.uv-report-brick-wrapper').html(this.template({'rating': response.data.ratings}));
\t\t\t\t},
\t\t\t});
\t\t\tvar RatedTicketModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\",
\t\t\t});
\t\t\tvar RatedTicketCollection = AppCollection.extend({
\t\t\t\tmodel : RatedTicketModel,
\t\t\t\turl : \"";
        // line 663
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_report_achievements_data_xhr");
        echo "\",
\t\t\t  \tfilterParameters : {
\t\t\t  \t\t\"start\" : \"\",
\t\t\t  \t\t\"end\" : \"\",
\t\t\t  \t\t\"agent\" : \"\",
\t\t\t  \t\t\"customer\" : \"\",
\t\t\t  \t\t\"priority\" : \"\",
\t\t\t  \t\t\"type\" : \"\",
\t\t\t  \t\t\"group\" : \"\",
\t\t\t  \t\t\"team\" : \"\",
\t\t\t  \t},
\t\t\t\tparseRecords: function (resp, options) {
\t\t\t\t    return resp.ratedTickets;
\t\t\t\t},
\t\t\t\tsyncData : function() {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\tthis.fetch({
\t\t\t\t\t\tdata : this.getValidParameters(),
\t\t                reset: true,               
\t\t                success: function(model, response) {
\t\t                \tapp.appView.hideLoader();
\t                \t\tachievementsView.intializeTiles(response)
\t\t\t\t           \tvar ratedTicketListView = new RatedTicketList();
\t\t\t\t           \t
\t\t\t\t           \tapp.pager.paginationData = response.pagination;
\t\t\t\t\t\t\tvar url = app.pager.paginationData.url;
\t\t\t\t           \tif(ratedTicketCollection.length == 0 && app.pager.paginationData.current != \"0\")
\t\t\t        \t\t\trouter.navigate(url.replace('replacePage', app.pager.paginationData.last),{trigger: true});
\t\t\t        \t\telse
\t\t\t\t        \t\tapp.pager.render();
\t\t                },
\t\t                error: function (model, xhr, options) {
\t\t                \tif(url = xhr.getResponseHeader('Location'))
\t                \t\t\twindow.location = url;
\t\t                }
\t\t            });
\t\t\t\t} 
\t\t\t});
\t\t\tvar RatedTicketItem = Backbone.View.extend({
\t\t\t\ttagName : \"tr\",
\t\t\t\ttemplate : _.template(\$(\"#rated_ticket_item_tmp\").html()),
\t\t\t    render : function() {
\t\t\t    \tthis.model.set({path:customerPath.replace('replaceId', this.model.attributes.customer.id)})
\t\t            this.\$el.html(this.template(this.model.toJSON()));
\t\t            return this;
\t\t        }
\t\t\t});
\t\t\tvar RatedTicketList = Backbone.View.extend({
\t\t\t\tel : \$(\".uv-list-view table tbody\"),
\t\t\t\tinitialize : function() {
\t\t\t        this.render();
\t\t\t    },
\t\t        render : function () {
\t\t        \tthis.\$el.html('');
\t\t        \tif(ratedTicketCollection.length) {
\t\t\t            _.each(ratedTicketCollection.models, function (item) {
\t\t\t                this.renderRatedTicket(item);
\t\t\t            }, this);
\t\t\t        } else {
\t\t\t        \tthis.\$el.append(\"<tr style='text-align: center;'><td colspan='6'>";
        // line 722
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Record Found", [], "messages");
        echo "</td></tr>\")
\t\t\t        }
\t\t        },
\t\t        renderRatedTicket : function (item) {
\t\t            var ratedTicketItem = new RatedTicketItem({
\t\t                model: item
\t\t            });
\t\t            this.\$el.append(ratedTicketItem.render().el);
\t\t        }
\t\t\t});
\t\t    var SideFilterModel = Backbone.Model.extend({
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
        // line 751
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
            var SideFilter = Backbone.View.extend({
                el : \$(\".uv-filter-view\"),
                isRecurrsiveCalls: 0,
                isReadyFlag: 0,
                events: {
                    'change #saved-filter': 'applySavedFilter',
                    'input .uv-field-block input' : 'searchFilterOption',
                    'click .uv-dropdown-list li' : 'applyFilter',
                    'dp.change .range input': 'applyFilter',
                    'click .uv-filtered-tags .uv-btn-tag' : 'removeFilter',
                },
                loaderTemplate : _.template(\$(\"#loader-tmp\").html()),
                checkOptionAvailable: function() {
                    this.isReadyFlag = 0;
                    var self = this;
                    var fetchOptions = {};
                    _.each(ratedTicketCollection.filterParameters, function (filter,key) {
                        if(jQuery.inArray(key, ['customer','agent','group','team','source']) !== -1) {
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
                        _.each(ratedTicketCollection.filterParameters, function (filter, key) {
                            if(jQuery.inArray(key, ['customer', 'agent', 'priority', 'type', 'group', 'team', 'source']) !== -1) {
                                if(filter != null && filter != '') {
                                    displayFlag = 1;
                                    filter = filter.split(',');
                                    _.each(filter, function (value) {
                                        savedOptions = sideFilterModel.get(key)
                                        _.each(savedOptions, function (item) {
                                            if(item.id == value) {
                                                parent = \$('#'+key+'-filter')
                                                parent.find('.uv-filtered-tags').append(\"<a class='uv-btn-tag' href='#' data-id='\" + item.id + \"'>\" + item.name + \"<span class='uv-icon-remove-dark'></span></a>\")
                                                parent.find('input').val('')
                                            }
                                        })
                                    });
                                }
                            }
                        })
                    }
                },
                searchFilterOption: function(e) {
                    self = this;
                    currentElement = Backbone.\$(e.currentTarget);
                    dropdown = currentElement.siblings('.uv-dropdown-list');
                    var filterType =  currentElement.attr('data-filter-type');
                    if(jQuery.inArray(filterType, ['customer','agent','group','team']) !== -1) {
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
        // line 858
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Searching", [], "messages");
        echo " ...\")
                        if(self.xhrReq)
                            self.xhrReq.abort();
                        self.xhrReq = \$.ajax({
                            url : \"";
        // line 862
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_collection_search_filter_options_xhr");
        echo "\",
                            type : 'GET',
                            data: {\"type\" : currentElement.attr('data-filter-type'), \"query\" : currentElement.val(), 'not' : ratedTicketCollection.filterParameters[currentElement.attr('data-filter-type')]},
                            dataType : 'json',
                            success : function(response) {
                                self.xhrReq = 0;
                                parent.find('.uv-loader').remove()
                                parent.find('.uv-filter-info').text(\"";
        // line 869
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        echo "\").hide();
                                if(response.length == 0) {
                                    parent.find('.uv-no-results').show()
                                } else {
                                    parent.find('.uv-no-results').hide();
                                    _.each(response, function(item) {
                                        if(currentElement.attr('data-filter-type') == 'customer' || currentElement.attr('data-filter-type') == 'agent') {
                                            var img = item.smallThumbnail ? \"";
        // line 876
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 876, $this->source); })()), "request", [], "any", false, false, false, 876), "scheme", [], "any", false, false, false, 876) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 876, $this->source); })()), "request", [], "any", false, false, false, 876), "httpHost", [], "any", false, false, false, 876)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
        echo "\" + item.smallThumbnail : (currentElement.attr('data-filter-type') == 'customer' ? \"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_customer_image_path"]) || array_key_exists("default_customer_image_path", $context) ? $context["default_customer_image_path"] : (function () { throw new RuntimeError('Variable "default_customer_image_path" does not exist.', 876, $this->source); })())), "html", null, true);
        echo "\" : \"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 876, $this->source); })())), "html", null, true);
        echo "\");
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
        // line 887
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
                applyFilter: function(e) {
                    currentElement = Backbone.\$(e.currentTarget);
                    if(currentElement.attr(\"data-id\")) {
                        var flag = 1;
                        parent = currentElement.parents(\".uv-field-block\");
                        filterType = parent.find('input').attr('data-filter-type');
                        
                        if(filterType == \"customer\" || filterType == 'agent' || filterType == 'group' || filterType == 'team') {
                            sideFilterModel.updateModel(filterType, {'id': currentElement.attr('data-id'), 'name': currentElement.text()})
                            parent.find(\".uv-no-results\").hide()
                            parent.find(\".uv-filter-info\").show().text(\"";
        // line 906
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        echo "\")
                            parent.find(\"li:not(.uv-no-results, .uv-filter-info)\").remove();
                        } else {
                            if(ratedTicketCollection.filterParameters[filterType]) {
                                ids = ratedTicketCollection.filterParameters[filterType].split(',')
                                if(jQuery.inArray(currentElement.attr('data-id'), ids) !== -1)
                                    flag = 0;
                            }
                        }
                        parent.find('input').val('')
                        if(jQuery.inArray(filterType, ['priority', 'type', 'source']) !== -1) {
                            parent.find(\"li:not(.uv-no-results)\").show()
                        }
                        if(flag) {
                            parent.find('.uv-filtered-tags').append(\"<a class='uv-btn-tag' href='#' data-id='\" + currentElement.attr('data-id') + \"'>\"+currentElement.text()+\"<span class='uv-icon-remove-dark'></span></a>\")
                            ratedTicketCollection.filterParameters[filterType] = this.joinTagValues(parent.find(\".uv-filtered-tags\"));
                            var queryString = app.appView.buildQuery(\$.param(ratedTicketCollection.getValidParameters()));
                            router.navigate(queryString, {trigger: true});
                        }
                    }
                },
                removeFilter: function(e) {
                    e.preventDefault()
                    currentElement = Backbone.\$(e.currentTarget);
                    filterType = currentElement.parents('.uv-field-block').find('input').attr('data-filter-type')
                    var options = ratedTicketCollection.filterParameters[filterType];
                    options = options.split(',');
                    var index = options.indexOf(currentElement.attr('data-id'));
                    options.splice(index, 1);
                    ratedTicketCollection.filterParameters[filterType] = options.join(',');
                    currentElement.remove()
                    var queryString = app.appView.buildQuery(\$.param(ratedTicketCollection.getValidParameters()));
                    router.navigate(queryString, {trigger: true});
                },
                joinTagValues: function(parent) {
                    var ids = new Array();
                    parent.find('.uv-btn-tag').each(function() {
                        ids.push(\$(this).attr('data-id'))
                    });
                    return ids.join();
                },
                
            });
\t\t\tvar Filter = app.Filter.extend({
\t\t\t\tdefaultSortIndex: 'r.ratedAt',
\t\t\t\tsortText: \"";
        // line 951
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort By:", [], "messages");
        echo " \",
\t\t\t\tdefaultSortText: \"";
        // line 952
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort By:", [], "messages");
        echo " ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Timestamp", [], "messages");
        echo "\",
\t\t\t\ttemplate : _.template(\$(\"#rating_list_sorting_tmp\").html())
\t\t\t})
\t\t\tvar ratedTicketCollection = new RatedTicketCollection();
\t\t\tvar achievementsView = new AchievementsView({
\t\t\t\tmodel : ratedTicketCollection
\t\t\t});
            var sideFilterModel = new SideFilterModel(filterContext)
            var sideFilter = new SideFilter();
\t\t\tvar filter = new Filter({
\t\t\t\tcollection : ratedTicketCollection
\t\t\t});
\t\t\tRouter = Backbone.Router.extend({
\t\t    \troutes: {
\t            \t'start/:startDate(/end/:endDate)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/source/:source)(/page/:number)(/sort/:sortField)(/direction/:order)' : 'getFilteredReport',
\t            \t'' : 'getDefaultReport',
\t            },
\t            getDefaultReport : function() {
\t            \tthis.resetFilter(startGlobalDate,endGlobalDate);
\t            \tthis.fetch(null,null,null);
\t            },
\t            getFilteredReport : function(startDate,endDate,agent,customer,priority,type,group,team,source,number,sortField,order) {
\t            \tthis.resetFilter(startDate,endDate,agent,customer,priority,type,group,team,source);
\t            \tthis.fetch(number,sortField,order);
\t            },
\t            fetch : function(number,sortField,order) {
                        ratedTicketCollection.state.currentPage = number;
                        filter.sortCollection(sortField, order);
                        ratedTicketCollection.syncData();
                },
\t            resetFilter : function(startDate,endDate,agent,customer,priority,type,group,team,source) {
\t            \tratedTicketCollection.filterParameters.start = startDate;
\t            \t\$('.date-from').val(startDate)//.parent().find('.date').text(startDate);
\t\t\t\t\tratedTicketCollection.filterParameters.end = endDate;
\t\t\t\t\t\$('.date-to').val(endDate)//.parent().find('.date').text(endDate);
\t\t\t\t\tratedTicketCollection.filterParameters.agent = agent;
                \tratedTicketCollection.filterParameters.customer = customer;
                \tratedTicketCollection.filterParameters.priority = priority;
                \tratedTicketCollection.filterParameters.type = type;
                \tratedTicketCollection.filterParameters.group = group;
                \tratedTicketCollection.filterParameters.team = team;
\t\t\t\t\tratedTicketCollection.filterParameters.source = source;
\t\t\t    \tsideFilter.render()
\t            }
\t        });     
\t        router = new Router();
\t        Backbone.history.start({push_state:true});
\t    });
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@UVDeskCoreFramework/Reports/kudos-insights.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1400 => 952,  1396 => 951,  1348 => 906,  1326 => 887,  1308 => 876,  1298 => 869,  1288 => 862,  1281 => 858,  1171 => 751,  1139 => 722,  1077 => 663,  1033 => 622,  1029 => 621,  1025 => 620,  1014 => 612,  1009 => 610,  1004 => 608,  999 => 606,  994 => 604,  989 => 602,  984 => 600,  978 => 597,  972 => 594,  964 => 589,  959 => 587,  954 => 585,  950 => 584,  943 => 580,  939 => 579,  930 => 573,  918 => 564,  906 => 555,  894 => 546,  882 => 537,  863 => 521,  852 => 513,  841 => 505,  830 => 497,  819 => 489,  809 => 483,  799 => 482,  782 => 474,  772 => 466,  770 => 465,  765 => 463,  762 => 462,  753 => 459,  748 => 458,  745 => 457,  740 => 456,  738 => 455,  733 => 453,  725 => 448,  715 => 440,  713 => 439,  708 => 437,  705 => 436,  696 => 433,  691 => 432,  688 => 431,  683 => 430,  681 => 429,  676 => 427,  668 => 422,  658 => 414,  656 => 413,  651 => 411,  648 => 410,  639 => 407,  634 => 406,  631 => 405,  626 => 404,  624 => 403,  619 => 401,  611 => 396,  598 => 386,  592 => 383,  586 => 380,  578 => 375,  565 => 365,  559 => 362,  553 => 359,  545 => 354,  533 => 345,  527 => 342,  520 => 338,  512 => 333,  500 => 324,  494 => 321,  487 => 317,  479 => 312,  476 => 311,  474 => 310,  460 => 299,  456 => 298,  434 => 279,  428 => 276,  422 => 273,  416 => 270,  410 => 267,  402 => 261,  391 => 250,  382 => 246,  369 => 236,  357 => 227,  345 => 218,  333 => 209,  321 => 200,  303 => 185,  292 => 177,  287 => 175,  282 => 173,  277 => 171,  270 => 167,  263 => 165,  259 => 164,  256 => 163,  253 => 162,  251 => 161,  164 => 77,  94 => 9,  84 => 8,  72 => 5,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{# WebkulUserBundle/Resources/views/dashboard.html.twig #}
{% block title %} 
\t{{ 'kudos'|trans }}
{% endblock %}

{% block pageContent %}
    <style>
    .uv-action-bar {
  border-bottom: 1px solid #d3d3d3;
  padding-bottom: 10px;
}
.uv-action-bar .uv-field-block.date {
  display: inline-block;
  margin-right: 10px;
}
.uv-action-bar label {
  font-size: 16px;
  vertical-align: middle;
  margin-right: 10px;
}
.uv-report-wrapper {
  padding-right: 20px;
}
.uv-report-wrapper .uv-middle {
  position: absolute;
  width: 100%;
  left: 0;
  top: 50%;
  text-align: center;
}
.uv-report-wrapper svg {
  width: 100%;
}
.uv-report-wrapper svg text {
  fill: #333;
}
.uv-report-brick-wrapper {
  width: 100%;
  display: inline-block;
  border: 1px solid #d3d3d3;
  margin: 20px 0;
  border-radius: 3px;
}
.uv-report-brick-wrapper {
  width: 100%;
  display: inline-block;
  border: 1px solid #d3d3d3;
  margin: 20px 0;
  border-radius: 3px;
}
.uv-report-brick {
  position: relative;
  display: inline-block;
  float: left;
  width: 20%;
  text-align: center;
  padding: 18px 0;
  border-right: 1px solid #d3d3d3;
}
.uv-report-brick:last-child {
  border-right: none;
}
.uv-report-brick-count {
  width: 100%;
  display: inline-block;
  color: #8473f3;
  font-size: 30px;
}
.uv-report-brick-label {
  width: 100%;
  display: inline-block;
  font-size: 18px;
}
.uv-icon-kudos {
  background-image: url(\"{{ asset('bundles/uvdeskcoreframework/images/uvdesk-kudo-sprite.svg') }}\");
  display: inline-block;
  width: 40px;
  height: 40px;
}
.uv-icon-kudos.kudos-1 {
  background-position: 0px 40px;
}
.uv-icon-kudos.kudos-2 {
  background-position: -40px 40px;
}
.uv-icon-kudos.kudos-3 {
  background-position: -80px 40px;
}
.uv-icon-kudos.kudos-4 {
  background-position: -120px 40px;
}
.uv-icon-kudos.kudos-5 {
  background-position: -160px 40px;
}
.kudos-text-1 {
  color: #FC6E46;
}
.kudos-text-2 {
  color: #FC6E46;
}
.kudos-text-3 {
  color: #FCDA32;
}
.kudos-text-4 {
  color: #01D101;
}
.kudos-text-5 {
  color: #01D101;
}
@media screen and (max-width: 1024px) {
  .uv-report-chart-top-row .uv-report-chart-col-lt {
      width: 100%;
      padding: 0;
  }
  .uv-report-chart-top-row .uv-report-chart-col-rt {
      width: 100%;
  }
  .uv-report-chart-bottom-row .uv-col-4 {
      width: 100%;
      padding: 0;
  }
  .uv-pannel-body.ticket-customer {
      padding: 0 !important;
  }
  .uv-report-brick {
      width: 100%;
      border-right: none;
      border-bottom: 1px solid #d3d3d3;
  }
  .uv-report-brick:last-child {
      border-bottom: none;
  }
}
@media screen and (max-width: 500px) {
  .uv-action-bar label {
      display: none;
  }
  .uv-action-bar .uv-field-block.date {
      width: 100%;
      padding: 0px 0px 0px 5px;
      margin-right: 0;
  }
  .uv-action-bar .uv-field-block.date input {
      width: 100%;
  }
  .uv-inner-section .uv-action-bar .uv-action-bar-col-lt {
      padding-right: 15px;
  }
  .uv-report-chart-col-lt .uv-pannel-body {
      padding: 0;
  }
  .uv-pannel-heading select {
      width: 100px;
  }
}
    </style>

\t<div class=\"uv-inner-section\">
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Reports' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}
\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t<h1>
\t\t\t\t{{ 'Kudos'|trans }}
\t\t\t</h1>
\t\t\t<div class=\"uv-action-bar\">
                <div class=\"uv-action-bar-col-lt\">
                    <label>{{ 'From'|trans }}</label>  
                    <div class=\"uv-field-block date\">
                        <input type=\"text\" class=\"uv-field uv-date-picker date date-from\" value=\"{{ startDate }}\">
                    </div>
                    <label>{{ 'To'|trans }}</label>  
                    <div class=\"uv-field-block date\">  
                        <input type=\"text\" class=\"uv-field uv-date-picker date date-to\" value=\"{{ endDate }}\">
                    </div>
                </div>
                
\t\t\t\t<div class=\"uv-action-bar-col-rt\">
\t\t\t\t\t<!-- Filter Button -->
\t\t\t\t\t<div class=\"uv-btn-stroke uv-margin-left-15 filter-view-trigger\"  data-target=\"uv-filter-view\">
                        <span class=\"uv-icon-filter\"></span>
                        {{ 'Filter View'|trans }}
                    </div>
\t\t\t\t\t<!--// Filter Button -->
\t\t\t\t</div>
            </div>


\t\t\t<div class=\"uv-report-wrapper\">
                <div class=\"uv-report-brick-wrapper\">
                    <span class=\"uv-report-brick\">
\t\t\t\t\t\t<span class=\"uv-icon-kudos kudos-1\"></span>
                        <span class=\"uv-report-brick-count\">
                            0
                        </span>
                        <span class=\"uv-report-brick-label\">
                            {{ 'Very Sad'|trans }}
                        </span>
                    </span>
                    <span class=\"uv-report-brick\">
\t\t\t\t\t\t<span class=\"uv-icon-kudos kudos-2\"></span>
                        <span class=\"uv-report-brick-count\">
                            0
                        </span>
                        <span class=\"uv-report-brick-label\">
                            {{ 'Sad'|trans }}
                        </span>
                    </span>
                    <span class=\"uv-report-brick\">
\t\t\t\t\t\t<span class=\"uv-icon-kudos kudos-3\"></span>
                        <span class=\"uv-report-brick-count\">
                            0
                        </span>
                        <span class=\"uv-report-brick-label\">
                            {{ 'Neutral'|trans }}
                        </span>
                    </span>
                    <span class=\"uv-report-brick\">
\t\t\t\t\t\t<span class=\"uv-icon-kudos kudos-4\"></span>
                        <span class=\"uv-report-brick-count\">
                            0
                        </span>
                        <span class=\"uv-report-brick-label\">
                            {{ 'Happy'|trans }}
                        </span>
                    </span>
                    <span class=\"uv-report-brick\">
\t\t\t\t\t\t<span class=\"uv-icon-kudos kudos-5\"></span>
                        <span class=\"uv-report-brick-count\">
                            0
                        </span>
                        <span class=\"uv-report-brick-label\">
                            {{ 'Very Happy'|trans }}
                        </span>
                    </span>
                </div>

                    <div class=\"uv-action-bar\">
                        <div class=\"uv-action-bar-col-lt\">
                            <!--Sort by-->
                            <div class=\"uv-dropdown sort\">
                                <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">
                                    {{ 'Sort By:'|trans }} {{ 'Timestamp'|trans }}
                                </div>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label> {{ 'Sort By'|trans }}</label>
                                        <ul>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Sort by-->
                        </div>
                        {#<div class=\"uv-action-bar-col-rt\">
                            <input type=\"text\" class=\"uv-search-inline uv-vertical-align uv-margin-right-15\" placeholder=\"{{ 'Search'|trans }}\">
                        </div>#}
                    </div>
                    <div class=\"uv-table uv-list-view\">
                        <table>
                            <thead>
                                <tr>
                                    <th>
                                        {{ 'Ticket Id'|trans }}
                                    </th>
                                    <th>
                                        {{ 'Customer Name'|trans }}
                                    </th>
                                    <th>
                                        {{ 'Customer Email'|trans }}
                                    </th>
                                    <th>
                                        {{ 'Timestamp'|trans }}
                                    </th>
                                    <th class=\"uv-last\">
                                        {{ 'Kudos Rating'|trans }}
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        <div class=\"navigation\"></div>
                    </div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Filter bar -->
        <div class=\"uv-filter-view\" id=\"uv-filter-view\">

            <!--/-->
            <div class=\"uv-filter-head\">\t\t\t
                <div class=\"uv-filter-title\">
                    <h6>{{ 'Tickets'|trans }}</h6>
                    <span>{{ 'Save set of filters as a preset to stay more productive'|trans }}</span>
                </div>
                <div class=\"uv-filter-toggle\" id=\"filter-close-trigger\">
                    <span></span>
                </div>
            </div>
            <!--//-->

            <div class=\"uv-filter-paper\">
                <!-- Filter block -->
                <div class=\"uv-filter-options\">
                    {% set filterContext = {} %}
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Agent'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"agent-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"agent\" id=\"agent-filter-input\">
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
                        <label class=\"uv-field-label\">{{ 'group'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"group-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"group\" id=\"group-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                    <ul>
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
                        <label class=\"uv-field-label\">{{ 'Team'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"team-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"team\" id=\"team-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                    <ul>
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
                                            {% set options = options|merge([{'id': priority.id, 'name': priority.description, 'color': priority.colorCode}]) %}
                                            <li data-id=\"{{priority.id}}\">
                                                {{priority.description}}
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
                                                {{source}}
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
                </div>
                <script type=\"text/javascript\">
                    var filterContext = {{filterContext|json_encode|raw}}
                </script>
            </div>
        </div>
\t\t<!-- //Filter bar -->
\t</div>
{% endblock %}

{% block footer %}
\t{{ parent() }}

\t<!-- Sorting Template -->
\t<script id=\"rating_list_sorting_tmp\" type=\"text/template\">
        <li class=\"<% if(sort == 't.id') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/t.id/<% if(sort == 't.id') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"t.id\">
                {{ 'Ticket Id'|trans }}
            </a>
            <% if(sort == 't.id') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
            <% } %>
        </li>
        <li class=\"<% if(sort == 'name') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/name/<% if(sort == 'name') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"name\">
                {{ 'Customer Name'|trans }}
            </a>
            <% if(sort == 'name') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
            <% } %>
        </li>
\t\t<li class=\"<% if(sort == 'c.email') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/c.email/<% if(sort == 'c.email') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"c.email\">
                {{ 'Customer Email'|trans }}
            </a>
            <% if(sort == 'c.email') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
            <% } %>
        </li>
\t\t<li class=\"<% if(sort == 'r.stars') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/r.stars/<% if(sort == 'r.stars') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"r.stars\">
                {{ 'Rating'|trans }}
            </a>
            <% if(sort == 'r.stars') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
            <% } %>
        </li>
\t\t<li class=\"<% if(sort == 'r.createdAt') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/r.createdAt/<% if(sort == 'r.createdAt') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"r.createdAt\">
                {{ 'Timestamp'|trans }}
            </a>
            <% if(sort == 'r.createdAt') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
            <% } %>
        </li>
\t</script>
\t<!-- //Sorting Template -->

    <script id=\"rating_brick_tmp\" type=\"text/template\">
        <span class=\"uv-report-brick\">
\t\t\t<span class=\"uv-icon-kudos kudos-1\"></span>
\t\t\t<span class=\"uv-report-brick-count\">
\t\t\t\t<%= rating[1] %>
\t\t\t</span>
\t\t\t<span class=\"uv-report-brick-label\">
\t\t\t\t{{ 'Very Sad'|trans }}
\t\t\t</span>
\t\t</span>
\t\t<span class=\"uv-report-brick\">
\t\t\t<span class=\"uv-icon-kudos kudos-2\"></span>
\t\t\t<span class=\"uv-report-brick-count\">
\t\t\t\t<%= rating[2] %>
\t\t\t</span>
\t\t\t<span class=\"uv-report-brick-label\">
\t\t\t\t{{ 'Sad'|trans }}
\t\t\t</span>
\t\t</span>
\t\t<span class=\"uv-report-brick\">
\t\t\t<span class=\"uv-icon-kudos kudos-3\"></span>
\t\t\t<span class=\"uv-report-brick-count\">
\t\t\t\t<%= rating[3] %>
\t\t\t</span>
\t\t\t<span class=\"uv-report-brick-label\">
\t\t\t\t{{ 'Neutral'|trans }}
\t\t\t</span>
\t\t</span>
\t\t<span class=\"uv-report-brick\">
\t\t\t<span class=\"uv-icon-kudos kudos-4\"></span>
\t\t\t<span class=\"uv-report-brick-count\">
\t\t\t\t<%= rating[4] %>
\t\t\t</span>
\t\t\t<span class=\"uv-report-brick-label\">
\t\t\t\t{{ 'Happy'|trans }}
\t\t\t</span>
\t\t</span>
\t\t<span class=\"uv-report-brick\">
\t\t\t<span class=\"uv-icon-kudos kudos-5\"></span>
\t\t\t<span class=\"uv-report-brick-count\">
\t\t\t\t<%= rating[5] %>
\t\t\t</span>
\t\t\t<span class=\"uv-report-brick-label\">
\t\t\t\t{{ 'Very Happy'|trans }}
\t\t\t</span>
\t\t</span>
    </script>

\t<script id=\"rated_ticket_item_tmp\" type=\"text/template\">
        <td data-value=\"{{ 'Ticket Id'|trans }}\">
        \t<a class=\"bold\" href=\"{{path('helpdesk_member_ticket')}}/<%= ticketId %>\">
            \t#<%= ticketId %>
            </a>
        </td>
        <td data-value=\"{{ 'Customer Name'|trans }}\">
        \t<a href=\"{{path('helpdesk_member_manage_customer_account')}}/<%= customer.id %>\">
                <% if(customer.smallThumbnail != null) { %>
                    <img src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}<%= customer.smallThumbnail %>\" alt=\"\"/>
                <% } else { %>
                    <img src=\"{{ asset(default_customer_image_path) }}\" alt=\"\"/>
                <% } %>
                <%- customer.name %>
            </a>
        </td>
        <td data-value=\"{{ 'Customer Email'|trans }}\">
        \t<%- customer.email %>
        </td>
        <td data-value=\"{{ 'Timestamp'|trans }}\">
        \t<%- formatedRatedAt %>
        </td>
        <td data-value=\"{{ 'Kudos Rating'|trans }}\">
\t\t\t<span class=\"kudos-text-<%= count %>\">
\t\t\t\t<%= count %> {{ \"Star(s)\"|trans }} - 
\t\t\t\t<% if(count == 1) { %>
\t\t\t\t\t{{ \"Very Sad\"|trans }}
\t\t\t\t<% } else if(count == 2) { %>
\t\t\t\t\t{{ \"Sad\"|trans }}
\t\t\t\t<% } else if(count == 3) { %>
\t\t\t\t\t{{ \"Neutral\"|trans }}
\t\t\t\t<% } else if(count == 4) { %>
\t\t\t\t\t{{ \"Happy\"|trans }}
\t\t\t\t<% } else { %>
\t\t\t\t\t{{ \"Very Happy\"|trans }}
\t\t\t\t<% } %>
\t\t\t</span>
        </td>
\t</script>

\t<script>
\t    \$(function() {
\t    \tvar customerPath = \"{{ path('helpdesk_member_manage_customer_account', {'id': 'replaceId' }) }}\";
\t    \tvar startGlobalDate = \"{{startDate}}\",
\t    \tendGlobalDate = \"{{endDate}}\";
            var date = new Date();
            var currentMonth = date.getMonth();
            var currentDate = date.getDate();
            var currentYear = date.getFullYear();
\t\t\t\$('.uv-action-bar .date').datetimepicker({
\t\t\t\tmaxDate: new Date(currentYear, currentMonth, currentDate),
                format: 'YYYY-MM-DD',
\t\t\t}).on('dp.change', function(e) {
\t\t\t\t\$('.date').removeClass('uv-field-error');
\t\t\t\tvar element = \$(e.currentTarget);
\t\t\t\tvar date = element.find('input').val();
\t\t\t\tif(new Date(\$(\".date-to\").val()) >= new Date(\$(\".date-from\").val())) {
                    achievementsView.filterReport();
                } else
\t\t\t\t\t\$('.date').addClass('uv-field-error');
\t\t    });
\t    
\t\t\tvar AchievementsView = Backbone.View.extend({
\t\t\t\tel : \$(\".uv-view\"),
\t\t\t\ttemplate : _.template(\$(\"#rating_brick_tmp\").html()),
\t\t\t    events : {
\t\t\t    \t'click .update-date' : \"filterReport\"
\t\t\t    },
\t\t\t\tfilterReport: function(e) {
\t\t\t\t\tif(new Date(\$(\".date-to\").val()) >= new Date(\$(\".date-from\").val())) {
\t\t\t\t\t\tratedTicketCollection.filterParameters.start = \$(\".date-from\").val();
\t\t\t\t\t\tratedTicketCollection.filterParameters.end = \$(\".date-to\").val();
\t\t\t\t\t\tvar queryString = app.appView.buildQuery(\$.param(ratedTicketCollection.getValidParameters()));
\t\t\t\t\t\trouter.navigate(queryString, {trigger: true});
\t\t\t\t\t}
\t\t\t    },
\t\t\t    intializeTiles : function(response) {
\t\t\t\t\tthis.\$el.find('.uv-report-brick-wrapper').html(this.template({'rating': response.data.ratings}));
\t\t\t\t},
\t\t\t});
\t\t\tvar RatedTicketModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\",
\t\t\t});
\t\t\tvar RatedTicketCollection = AppCollection.extend({
\t\t\t\tmodel : RatedTicketModel,
\t\t\t\turl : \"{{ path('helpdesk_report_achievements_data_xhr') }}\",
\t\t\t  \tfilterParameters : {
\t\t\t  \t\t\"start\" : \"\",
\t\t\t  \t\t\"end\" : \"\",
\t\t\t  \t\t\"agent\" : \"\",
\t\t\t  \t\t\"customer\" : \"\",
\t\t\t  \t\t\"priority\" : \"\",
\t\t\t  \t\t\"type\" : \"\",
\t\t\t  \t\t\"group\" : \"\",
\t\t\t  \t\t\"team\" : \"\",
\t\t\t  \t},
\t\t\t\tparseRecords: function (resp, options) {
\t\t\t\t    return resp.ratedTickets;
\t\t\t\t},
\t\t\t\tsyncData : function() {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\tthis.fetch({
\t\t\t\t\t\tdata : this.getValidParameters(),
\t\t                reset: true,               
\t\t                success: function(model, response) {
\t\t                \tapp.appView.hideLoader();
\t                \t\tachievementsView.intializeTiles(response)
\t\t\t\t           \tvar ratedTicketListView = new RatedTicketList();
\t\t\t\t           \t
\t\t\t\t           \tapp.pager.paginationData = response.pagination;
\t\t\t\t\t\t\tvar url = app.pager.paginationData.url;
\t\t\t\t           \tif(ratedTicketCollection.length == 0 && app.pager.paginationData.current != \"0\")
\t\t\t        \t\t\trouter.navigate(url.replace('replacePage', app.pager.paginationData.last),{trigger: true});
\t\t\t        \t\telse
\t\t\t\t        \t\tapp.pager.render();
\t\t                },
\t\t                error: function (model, xhr, options) {
\t\t                \tif(url = xhr.getResponseHeader('Location'))
\t                \t\t\twindow.location = url;
\t\t                }
\t\t            });
\t\t\t\t} 
\t\t\t});
\t\t\tvar RatedTicketItem = Backbone.View.extend({
\t\t\t\ttagName : \"tr\",
\t\t\t\ttemplate : _.template(\$(\"#rated_ticket_item_tmp\").html()),
\t\t\t    render : function() {
\t\t\t    \tthis.model.set({path:customerPath.replace('replaceId', this.model.attributes.customer.id)})
\t\t            this.\$el.html(this.template(this.model.toJSON()));
\t\t            return this;
\t\t        }
\t\t\t});
\t\t\tvar RatedTicketList = Backbone.View.extend({
\t\t\t\tel : \$(\".uv-list-view table tbody\"),
\t\t\t\tinitialize : function() {
\t\t\t        this.render();
\t\t\t    },
\t\t        render : function () {
\t\t        \tthis.\$el.html('');
\t\t        \tif(ratedTicketCollection.length) {
\t\t\t            _.each(ratedTicketCollection.models, function (item) {
\t\t\t                this.renderRatedTicket(item);
\t\t\t            }, this);
\t\t\t        } else {
\t\t\t        \tthis.\$el.append(\"<tr style='text-align: center;'><td colspan='6'>{% trans %}No Record Found{% endtrans %}</td></tr>\")
\t\t\t        }
\t\t        },
\t\t        renderRatedTicket : function (item) {
\t\t            var ratedTicketItem = new RatedTicketItem({
\t\t                model: item
\t\t            });
\t\t            this.\$el.append(ratedTicketItem.render().el);
\t\t        }
\t\t\t});
\t\t    var SideFilterModel = Backbone.Model.extend({
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
            var SideFilter = Backbone.View.extend({
                el : \$(\".uv-filter-view\"),
                isRecurrsiveCalls: 0,
                isReadyFlag: 0,
                events: {
                    'change #saved-filter': 'applySavedFilter',
                    'input .uv-field-block input' : 'searchFilterOption',
                    'click .uv-dropdown-list li' : 'applyFilter',
                    'dp.change .range input': 'applyFilter',
                    'click .uv-filtered-tags .uv-btn-tag' : 'removeFilter',
                },
                loaderTemplate : _.template(\$(\"#loader-tmp\").html()),
                checkOptionAvailable: function() {
                    this.isReadyFlag = 0;
                    var self = this;
                    var fetchOptions = {};
                    _.each(ratedTicketCollection.filterParameters, function (filter,key) {
                        if(jQuery.inArray(key, ['customer','agent','group','team','source']) !== -1) {
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
                        _.each(ratedTicketCollection.filterParameters, function (filter, key) {
                            if(jQuery.inArray(key, ['customer', 'agent', 'priority', 'type', 'group', 'team', 'source']) !== -1) {
                                if(filter != null && filter != '') {
                                    displayFlag = 1;
                                    filter = filter.split(',');
                                    _.each(filter, function (value) {
                                        savedOptions = sideFilterModel.get(key)
                                        _.each(savedOptions, function (item) {
                                            if(item.id == value) {
                                                parent = \$('#'+key+'-filter')
                                                parent.find('.uv-filtered-tags').append(\"<a class='uv-btn-tag' href='#' data-id='\" + item.id + \"'>\" + item.name + \"<span class='uv-icon-remove-dark'></span></a>\")
                                                parent.find('input').val('')
                                            }
                                        })
                                    });
                                }
                            }
                        })
                    }
                },
                searchFilterOption: function(e) {
                    self = this;
                    currentElement = Backbone.\$(e.currentTarget);
                    dropdown = currentElement.siblings('.uv-dropdown-list');
                    var filterType =  currentElement.attr('data-filter-type');
                    if(jQuery.inArray(filterType, ['customer','agent','group','team']) !== -1) {
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
                            data: {\"type\" : currentElement.attr('data-filter-type'), \"query\" : currentElement.val(), 'not' : ratedTicketCollection.filterParameters[currentElement.attr('data-filter-type')]},
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
                                        if(currentElement.attr('data-filter-type') == 'customer' || currentElement.attr('data-filter-type') == 'agent') {
                                            var img = item.smallThumbnail ? \"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}\" + item.smallThumbnail : (currentElement.attr('data-filter-type') == 'customer' ? \"{{ asset(default_customer_image_path) }}\" : \"{{ asset(default_agent_image_path) }}\");
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
                applyFilter: function(e) {
                    currentElement = Backbone.\$(e.currentTarget);
                    if(currentElement.attr(\"data-id\")) {
                        var flag = 1;
                        parent = currentElement.parents(\".uv-field-block\");
                        filterType = parent.find('input').attr('data-filter-type');
                        
                        if(filterType == \"customer\" || filterType == 'agent' || filterType == 'group' || filterType == 'team') {
                            sideFilterModel.updateModel(filterType, {'id': currentElement.attr('data-id'), 'name': currentElement.text()})
                            parent.find(\".uv-no-results\").hide()
                            parent.find(\".uv-filter-info\").show().text(\"{{ 'Type atleast 2 letters'|trans }}\")
                            parent.find(\"li:not(.uv-no-results, .uv-filter-info)\").remove();
                        } else {
                            if(ratedTicketCollection.filterParameters[filterType]) {
                                ids = ratedTicketCollection.filterParameters[filterType].split(',')
                                if(jQuery.inArray(currentElement.attr('data-id'), ids) !== -1)
                                    flag = 0;
                            }
                        }
                        parent.find('input').val('')
                        if(jQuery.inArray(filterType, ['priority', 'type', 'source']) !== -1) {
                            parent.find(\"li:not(.uv-no-results)\").show()
                        }
                        if(flag) {
                            parent.find('.uv-filtered-tags').append(\"<a class='uv-btn-tag' href='#' data-id='\" + currentElement.attr('data-id') + \"'>\"+currentElement.text()+\"<span class='uv-icon-remove-dark'></span></a>\")
                            ratedTicketCollection.filterParameters[filterType] = this.joinTagValues(parent.find(\".uv-filtered-tags\"));
                            var queryString = app.appView.buildQuery(\$.param(ratedTicketCollection.getValidParameters()));
                            router.navigate(queryString, {trigger: true});
                        }
                    }
                },
                removeFilter: function(e) {
                    e.preventDefault()
                    currentElement = Backbone.\$(e.currentTarget);
                    filterType = currentElement.parents('.uv-field-block').find('input').attr('data-filter-type')
                    var options = ratedTicketCollection.filterParameters[filterType];
                    options = options.split(',');
                    var index = options.indexOf(currentElement.attr('data-id'));
                    options.splice(index, 1);
                    ratedTicketCollection.filterParameters[filterType] = options.join(',');
                    currentElement.remove()
                    var queryString = app.appView.buildQuery(\$.param(ratedTicketCollection.getValidParameters()));
                    router.navigate(queryString, {trigger: true});
                },
                joinTagValues: function(parent) {
                    var ids = new Array();
                    parent.find('.uv-btn-tag').each(function() {
                        ids.push(\$(this).attr('data-id'))
                    });
                    return ids.join();
                },
                
            });
\t\t\tvar Filter = app.Filter.extend({
\t\t\t\tdefaultSortIndex: 'r.ratedAt',
\t\t\t\tsortText: \"{% trans %}Sort By:{% endtrans %} \",
\t\t\t\tdefaultSortText: \"{% trans %}Sort By:{% endtrans %} {% trans %}Timestamp{% endtrans %}\",
\t\t\t\ttemplate : _.template(\$(\"#rating_list_sorting_tmp\").html())
\t\t\t})
\t\t\tvar ratedTicketCollection = new RatedTicketCollection();
\t\t\tvar achievementsView = new AchievementsView({
\t\t\t\tmodel : ratedTicketCollection
\t\t\t});
            var sideFilterModel = new SideFilterModel(filterContext)
            var sideFilter = new SideFilter();
\t\t\tvar filter = new Filter({
\t\t\t\tcollection : ratedTicketCollection
\t\t\t});
\t\t\tRouter = Backbone.Router.extend({
\t\t    \troutes: {
\t            \t'start/:startDate(/end/:endDate)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/source/:source)(/page/:number)(/sort/:sortField)(/direction/:order)' : 'getFilteredReport',
\t            \t'' : 'getDefaultReport',
\t            },
\t            getDefaultReport : function() {
\t            \tthis.resetFilter(startGlobalDate,endGlobalDate);
\t            \tthis.fetch(null,null,null);
\t            },
\t            getFilteredReport : function(startDate,endDate,agent,customer,priority,type,group,team,source,number,sortField,order) {
\t            \tthis.resetFilter(startDate,endDate,agent,customer,priority,type,group,team,source);
\t            \tthis.fetch(number,sortField,order);
\t            },
\t            fetch : function(number,sortField,order) {
                        ratedTicketCollection.state.currentPage = number;
                        filter.sortCollection(sortField, order);
                        ratedTicketCollection.syncData();
                },
\t            resetFilter : function(startDate,endDate,agent,customer,priority,type,group,team,source) {
\t            \tratedTicketCollection.filterParameters.start = startDate;
\t            \t\$('.date-from').val(startDate)//.parent().find('.date').text(startDate);
\t\t\t\t\tratedTicketCollection.filterParameters.end = endDate;
\t\t\t\t\t\$('.date-to').val(endDate)//.parent().find('.date').text(endDate);
\t\t\t\t\tratedTicketCollection.filterParameters.agent = agent;
                \tratedTicketCollection.filterParameters.customer = customer;
                \tratedTicketCollection.filterParameters.priority = priority;
                \tratedTicketCollection.filterParameters.type = type;
                \tratedTicketCollection.filterParameters.group = group;
                \tratedTicketCollection.filterParameters.team = team;
\t\t\t\t\tratedTicketCollection.filterParameters.source = source;
\t\t\t    \tsideFilter.render()
\t            }
\t        });     
\t        router = new Router();
\t        Backbone.history.start({push_state:true});
\t    });
\t</script>
{% endblock %}
", "@UVDeskCoreFramework/Reports/kudos-insights.html.twig", "/home/lexcorp.xyz/public_html/uvdesk/vendor/uvdesk/core-framework/Resources/views/Reports/kudos-insights.html.twig");
    }
}
