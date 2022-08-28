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

/* @UVDeskSupportCenter/Knowledgebase/article.html.twig */
class __TwigTemplate_45194d0044fd8e9554fec1f0519d19f19cfa12bacc641b11bd9d81f2a385984a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'canonical' => [$this, 'block_canonical'],
            'ogcanonical' => [$this, 'block_ogcanonical'],
            'title' => [$this, 'block_title'],
            'ogtitle' => [$this, 'block_ogtitle'],
            'twtitle' => [$this, 'block_twtitle'],
            'metaDescription' => [$this, 'block_metaDescription'],
            'metaKeywords' => [$this, 'block_metaKeywords'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@UVDeskSupportCenter/Templates/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/article.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/article.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskSupportCenter/Templates/layout.html.twig", "@UVDeskSupportCenter/Knowledgebase/article.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_canonical($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "canonical"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "canonical"));

        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 4, $this->source); })()), "slug", [], "any", false, false, false, 4)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("helpdesk_knowledgebase_read_slug_article", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 4, $this->source); })()), "slug", [], "any", false, false, false, 4)]), "html", null, true);
            echo " ";
        }
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_ogcanonical($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogcanonical"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogcanonical"));

        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 5, $this->source); })()), "slug", [], "any", false, false, false, 5)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("helpdesk_knowledgebase_read_slug_article", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 5, $this->source); })()), "slug", [], "any", false, false, false, 5)]), "html", null, true);
            echo " ";
        }
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "metaTitle", [], "any", false, false, false, 8)) ? (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "metaTitle", [], "any", false, false, false, 8)) : (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8))), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_ogtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogtitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogtitle"));

        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 9, $this->source); })()), "metaTitle", [], "any", false, false, false, 9)) ? (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 9, $this->source); })()), "metaTitle", [], "any", false, false, false, 9)) : (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9))), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_twtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "twtitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "twtitle"));

        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 10, $this->source); })()), "metaTitle", [], "any", false, false, false, 10)) ? (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 10, $this->source); })()), "metaTitle", [], "any", false, false, false, 10)) : (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10))), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_metaDescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescription"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescription"));

        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 11, $this->source); })()), "metaDescription", [], "any", false, false, false, 11)) ? (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 11, $this->source); })()), "metaDescription", [], "any", false, false, false, 11)) : (twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["uvdesk_service"]) || array_key_exists("uvdesk_service", $context) ? $context["uvdesk_service"] : (function () { throw new RuntimeError('Variable "uvdesk_service" does not exist.', 11, $this->source); })()), "createConentToKeywords", [0 => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 11, $this->source); })()), "content", [], "any", false, false, false, 11), 1 => 255, 2 => true], "method", false, false, false, 11), " "))), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_metaKeywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaKeywords"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaKeywords"));

        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 12, $this->source); })()), "keywords", [], "any", false, false, false, 12)) ? (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 12, $this->source); })()), "keywords", [], "any", false, false, false, 12)) : (twig_get_attribute($this->env, $this->source, (isset($context["uvdesk_service"]) || array_key_exists("uvdesk_service", $context) ? $context["uvdesk_service"] : (function () { throw new RuntimeError('Variable "uvdesk_service" does not exist.', 12, $this->source); })()), "createConentToKeywords", [0 => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 12, $this->source); })()), "content", [], "any", false, false, false, 12)], "method", false, false, false, 12))), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "\t<div class=\"uv-paper-article\">
\t\t<div class=\"uv-paper-section\">
\t\t\t<section>
\t\t\t\t<h1 ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 18, $this->source); })()), "stared", [], "any", false, false, false, 18)) {
            echo "class=\"uv-starred\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "</h1>
\t\t\t\t<p>";
        // line 19
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 19, $this->source); })()), "content", [], "any", false, false, false, 19);
        echo "</p>
\t\t\t\t<div class=\"uv-author\">
\t\t\t\t\t";
        // line 21
        if ((array_key_exists("articleAuthor", $context) &&  !twig_test_empty((isset($context["articleAuthor"]) || array_key_exists("articleAuthor", $context) ? $context["articleAuthor"] : (function () { throw new RuntimeError('Variable "articleAuthor" does not exist.', 21, $this->source); })())))) {
            // line 22
            echo "\t\t\t\t\t\t<div class=\"uv-author-avatar\">
\t\t\t\t\t\t\t";
            // line 23
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleAuthor"] ?? null), "user", [], "any", false, true, false, 23), "profileImage", [], "any", true, true, false, 23) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["articleAuthor"]) || array_key_exists("articleAuthor", $context) ? $context["articleAuthor"] : (function () { throw new RuntimeError('Variable "articleAuthor" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "profileImage", [], "any", false, false, false, 23))) {
                // line 24
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["articleAuthor"]) || array_key_exists("articleAuthor", $context) ? $context["articleAuthor"] : (function () { throw new RuntimeError('Variable "articleAuthor" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "profileImage", [], "any", false, false, false, 24), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
            } else {
                // line 26
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_customer_image_path"]) || array_key_exists("default_customer_image_path", $context) ? $context["default_customer_image_path"] : (function () { throw new RuntimeError('Variable "default_customer_image_path" does not exist.', 26, $this->source); })())), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
            }
            // line 28
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"uv-author-info\">
\t\t\t\t\t\t\t<p>";
            // line 30
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["articleAuthor"]) || array_key_exists("articleAuthor", $context) ? $context["articleAuthor"] : (function () { throw new RuntimeError('Variable "articleAuthor" does not exist.', 30, $this->source); })()), "firstName", [], "any", false, false, false, 30)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["articleAuthor"]) || array_key_exists("articleAuthor", $context) ? $context["articleAuthor"] : (function () { throw new RuntimeError('Variable "articleAuthor" does not exist.', 30, $this->source); })()), "lastName", [], "any", false, false, false, 30)), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p><span>";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Published on"), "html", null, true);
            echo " -</span> ";
            echo twig_escape_filter($this->env, (isset($context["dateAdded"]) || array_key_exists("dateAdded", $context) ? $context["dateAdded"] : (function () { throw new RuntimeError('Variable "dateAdded" does not exist.', 31, $this->source); })()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 34
        echo "

\t\t\t\t</div>
\t\t\t</section>


\t\t\t";
        // line 40
        if ((array_key_exists("feedbacks", $context) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["feedbacks"]) || array_key_exists("feedbacks", $context) ? $context["feedbacks"] : (function () { throw new RuntimeError('Variable "feedbacks" does not exist.', 40, $this->source); })()), "enabled", [], "any", false, false, false, 40), true)))) {
            // line 41
            echo "\t\t\t\t<section id=\"feedbacks\" class=\"article-feedbacks\">
\t\t\t\t\t";
            // line 42
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["feedbacks"]) || array_key_exists("feedbacks", $context) ? $context["feedbacks"] : (function () { throw new RuntimeError('Variable "feedbacks" does not exist.', 42, $this->source); })()), "submitted", [], "any", false, false, false, 42), true))) {
                // line 43
                echo "\t\t\t\t\t\t<p>Thank you for your feedback!</p>
\t\t\t\t\t";
            }
            // line 45
            echo "\t\t\t\t</section>
\t\t\t";
        }
        // line 47
        echo "
\t\t\t";
        // line 69
        echo "\t\t</div>

\t\t";
        // line 71
        $this->loadTemplate("@UVDeskSupportCenter/Templates/sidepanel.html.twig", "@UVDeskSupportCenter/Knowledgebase/article.html.twig", 71)->display($context);
        // line 72
        echo "\t</div>
\t";
        // line 73
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 77
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "

\t";
        // line 80
        echo "\t";
        if (((array_key_exists("feedbacks", $context) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["feedbacks"]) || array_key_exists("feedbacks", $context) ? $context["feedbacks"] : (function () { throw new RuntimeError('Variable "feedbacks" does not exist.', 80, $this->source); })()), "enabled", [], "any", false, false, false, 80), true))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["feedbacks"]) || array_key_exists("feedbacks", $context) ? $context["feedbacks"] : (function () { throw new RuntimeError('Variable "feedbacks" does not exist.', 80, $this->source); })()), "submitted", [], "any", false, false, false, 80), false)))) {
            // line 81
            echo "\t\t<script id=\"article_feedback_template\" type=\"text/template\">
\t\t\t<p>Was this article helpful?</p>
\t\t\t<ul>
\t\t\t\t<li class=\"uv-btn-small article-badge-pta\" data-feedback=\"positive\">Yes</li>
\t\t\t\t<li class=\"uv-btn-small article-badge-pta\" data-feedback=\"negative\">No</li>
\t\t\t</ul>
\t\t</script>

\t\t<script type=\"text/javascript\">
\t\t\t\$(function() {
\t\t\t\tvar ArticleFeedback = Backbone.View.extend({
\t\t\t\t\tel: \$(\"#feedbacks\"),
\t\t\t\t\tfeedbacks: {positive: 0, negative: 0, collection: []},
\t\t\t\t\ttemplate: _.template(\$(\"#article_feedback_template\").html()),
\t\t\t\t\tevents: {
\t\t\t\t\t\t'click .article-badge-pta': 'ratingsPTA',
\t\t\t\t\t},
\t\t\t\t\tinitialize: function() {
\t\t\t\t\t\t";
            // line 99
            if ((array_key_exists("feedbacks", $context) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["feedbacks"]) || array_key_exists("feedbacks", $context) ? $context["feedbacks"] : (function () { throw new RuntimeError('Variable "feedbacks" does not exist.', 99, $this->source); })()), "article", [], "any", false, false, false, 99)))) {
                // line 100
                echo "\t\t\t\t\t\t\tthis.feedbacks = ";
                echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["feedbacks"]) || array_key_exists("feedbacks", $context) ? $context["feedbacks"] : (function () { throw new RuntimeError('Variable "feedbacks" does not exist.', 100, $this->source); })()), "article", [], "any", false, false, false, 100));
                echo ";
\t\t\t\t\t\t";
            }
            // line 102
            echo "
\t\t\t\t\t\tthis.render();
\t\t\t\t\t},
\t\t\t\t\trender: function() {
\t\t\t\t\t\tthis.\$el.html(this.template());
\t\t\t\t\t},
\t\t\t\t\tratingsPTA: function(e) {
\t\t\t\t\t\tvar self = this;
\t\t\t\t\t\tvar feedbackType = \$(e.currentTarget).data('feedback');

\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: \"";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("helpdesk_knowledgebase_rate_article", ["articleId" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 113, $this->source); })()), "id", [], "any", false, false, false, 113)]), "html", null, true);
            echo "\",
\t\t\t\t\t\t\tmethod: 'POST',
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tfeedback: feedbackType,
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(response) {
\t\t\t\t\t\t\t\tthis.\$el.html('');
\t\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(response) {
\t\t\t\t\t\t\t\tresponse = \$.parseJSON(response.responseText);

\t\t\t\t\t\t\t\t// app.appView.hideLoader();
\t\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t},
\t\t\t\t});

\t\t\t\tvar articleFeedback = new ArticleFeedback();
\t\t\t});
\t\t</script>
\t";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@UVDeskSupportCenter/Knowledgebase/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 113,  370 => 102,  364 => 100,  362 => 99,  342 => 81,  339 => 80,  333 => 77,  323 => 76,  311 => 73,  308 => 72,  306 => 71,  302 => 69,  299 => 47,  295 => 45,  291 => 43,  289 => 42,  286 => 41,  284 => 40,  276 => 34,  268 => 31,  262 => 30,  258 => 28,  252 => 26,  246 => 24,  244 => 23,  241 => 22,  239 => 21,  234 => 19,  226 => 18,  221 => 15,  211 => 14,  192 => 12,  173 => 11,  154 => 10,  135 => 9,  116 => 8,  91 => 5,  66 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@UVDeskSupportCenter/Templates/layout.html.twig\" %}


{% block canonical %} {% if article.slug %} {{ url('helpdesk_knowledgebase_read_slug_article', {'slug':article.slug }) }} {% endif %} {% endblock %}
{% block ogcanonical %} {% if article.slug %} {{ url('helpdesk_knowledgebase_read_slug_article', {'slug':article.slug }) }} {% endif %} {% endblock %}


{% block title %}{{ article.metaTitle ? article.metaTitle : article.name }}{% endblock %}
{% block ogtitle %}{{ article.metaTitle ? article.metaTitle : article.name }}{% endblock %}
{% block twtitle %}{{ article.metaTitle ? article.metaTitle : article.name }}{% endblock %}
{% block metaDescription %}{{ article.metaDescription ? article.metaDescription : uvdesk_service.createConentToKeywords(article.content, 255, true)|join(' ') }}{% endblock %}
{% block metaKeywords %}{{ article.keywords ? : uvdesk_service.createConentToKeywords(article.content) }}{% endblock %}

{% block body %}
\t<div class=\"uv-paper-article\">
\t\t<div class=\"uv-paper-section\">
\t\t\t<section>
\t\t\t\t<h1 {% if article.stared %}class=\"uv-starred\"{% endif %}>{{ article.name }}</h1>
\t\t\t\t<p>{{ article.content |raw }}</p>
\t\t\t\t<div class=\"uv-author\">
\t\t\t\t\t{% if articleAuthor is defined and articleAuthor is not empty %}
\t\t\t\t\t\t<div class=\"uv-author-avatar\">
\t\t\t\t\t\t\t{% if articleAuthor.user.profileImage is defined and articleAuthor.user.profileImage %}
\t\t\t\t\t\t\t\t<img src=\"{{articleAuthor.user.profileImage}}\">
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<img src=\"{{ asset(default_customer_image_path) }}\">
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"uv-author-info\">
\t\t\t\t\t\t\t<p>{{ articleAuthor.firstName | capitalize }} {{ articleAuthor.lastName | capitalize }}</p>
\t\t\t\t\t\t\t<p><span>{{\"Published on\"|trans}} -</span> {{dateAdded}}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}


\t\t\t\t</div>
\t\t\t</section>


\t\t\t{% if feedbacks is defined and feedbacks.enabled == true %}
\t\t\t\t<section id=\"feedbacks\" class=\"article-feedbacks\">
\t\t\t\t\t{% if feedbacks.submitted == true %}
\t\t\t\t\t\t<p>Thank you for your feedback!</p>
\t\t\t\t\t{% endif %}
\t\t\t\t</section>
\t\t\t{% endif %}

\t\t\t{# {% set companyDisqus = application_service.getCompanyDisqus() %}
\t\t\t{% if companyDisqus is defined and companyDisqus is not empty %}
\t\t\t\t{% if companyDisqus.ticketConversion is defined and companyDisqus.ticketConversion == true %}
\t\t\t\t\t<section class=\"disqus-thread\">
\t\t\t\t\t\t{{ knp_disqus_render(companyDisqus.website, {'id': \"article-{{ article.id }}\", 'limit': 10, 'newCommentCallbackFunctionName': 'disqusCommentCallback'}) }}
\t\t\t\t\t</section>

\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\tfunction disqusCommentCallback() {
\t\t\t\t\t\t\t// Set delay for disqus to update comments
\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\t\$.get(\"{{ url('app_webhook_callback', {'applicationRouteName': 'disqus-engage'}) }}\");
\t\t\t\t\t\t\t}, 2000);
\t\t\t\t\t\t}
\t\t\t\t\t</script>
\t\t\t\t{% else %}
\t\t\t\t\t<section class=\"disqus-thread\">
\t\t\t\t\t\t{{ knp_disqus_render(companyDisqus.website, {'id': \"article-{{ article.id }}\", 'limit': 10}) }}
\t\t\t\t\t</section>
\t\t\t\t{% endif %}
\t\t\t{% endif %} #}
\t\t</div>

\t\t{% include \"@UVDeskSupportCenter/Templates/sidepanel.html.twig\" %}
\t</div>
\t{{ parent() }}
{% endblock %}

{% block footer %}
\t{{ parent() }}

\t{# Article Feedbacks #}
\t{% if feedbacks is defined and feedbacks.enabled == true and feedbacks.submitted == false %}
\t\t<script id=\"article_feedback_template\" type=\"text/template\">
\t\t\t<p>Was this article helpful?</p>
\t\t\t<ul>
\t\t\t\t<li class=\"uv-btn-small article-badge-pta\" data-feedback=\"positive\">Yes</li>
\t\t\t\t<li class=\"uv-btn-small article-badge-pta\" data-feedback=\"negative\">No</li>
\t\t\t</ul>
\t\t</script>

\t\t<script type=\"text/javascript\">
\t\t\t\$(function() {
\t\t\t\tvar ArticleFeedback = Backbone.View.extend({
\t\t\t\t\tel: \$(\"#feedbacks\"),
\t\t\t\t\tfeedbacks: {positive: 0, negative: 0, collection: []},
\t\t\t\t\ttemplate: _.template(\$(\"#article_feedback_template\").html()),
\t\t\t\t\tevents: {
\t\t\t\t\t\t'click .article-badge-pta': 'ratingsPTA',
\t\t\t\t\t},
\t\t\t\t\tinitialize: function() {
\t\t\t\t\t\t{% if feedbacks is defined and feedbacks.article is not empty %}
\t\t\t\t\t\t\tthis.feedbacks = {{ feedbacks.article|json_encode|raw }};
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\tthis.render();
\t\t\t\t\t},
\t\t\t\t\trender: function() {
\t\t\t\t\t\tthis.\$el.html(this.template());
\t\t\t\t\t},
\t\t\t\t\tratingsPTA: function(e) {
\t\t\t\t\t\tvar self = this;
\t\t\t\t\t\tvar feedbackType = \$(e.currentTarget).data('feedback');

\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: \"{{ url('helpdesk_knowledgebase_rate_article', {'articleId': article.id}) }}\",
\t\t\t\t\t\t\tmethod: 'POST',
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tfeedback: feedbackType,
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(response) {
\t\t\t\t\t\t\t\tthis.\$el.html('');
\t\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(response) {
\t\t\t\t\t\t\t\tresponse = \$.parseJSON(response.responseText);

\t\t\t\t\t\t\t\t// app.appView.hideLoader();
\t\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t},
\t\t\t\t});

\t\t\t\tvar articleFeedback = new ArticleFeedback();
\t\t\t});
\t\t</script>
\t{% endif %}
{% endblock %}
", "@UVDeskSupportCenter/Knowledgebase/article.html.twig", "/home/lexcorp.xyz/public_html/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Knowledgebase/article.html.twig");
    }
}
