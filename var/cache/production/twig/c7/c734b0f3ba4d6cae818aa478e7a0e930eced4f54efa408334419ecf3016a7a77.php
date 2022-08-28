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

/* @UVDeskCoreFramework/Templates/pagination.html.twig */
class __TwigTemplate_b474e4644284debac5a5949374e31279fef23527fbcade1d1bef633fc921960b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Templates/pagination.html.twig"));

        // line 1
        echo "<script id=\"pagination_tmp\" type=\"text/template\">
    <% if(pageCount > 1) { %>
        <div class=\"uv-pagination\">
            <% if(previous) { %>
                <a data-page=\"<%= previous %>\" href=\"<%= url.replace('replacePage', previous) %>\" id=\"previous\" class=\"uv-pagination-previous\">
                </a>
            <% } else { %>
                <a class=\"uv-pagination-previous\">
                </a>
            <% } %>

            <% if(startPage > 1) { %>
                <a data-page=\"1\" href=\"<%= url.replace('replacePage', 1) %>\">1</a>
                <% if(startPage == 3) { %>
                    <a data-page=\"2\" href=\"<%= url.replace('replacePage', 2) %>\">2</a>
                <% } else if(startPage != 2) { %>
                    <a class=\"uv-page-active\" style=\"text-decoration: none\">&hellip;</a>
                <% } %>
            <% } %>

            <% _.each(pagesInRange, function(page) { %>
                <% if(page != current) { %>
                    <a data-page=\"<%= page %>\" href=\"<%= url.replace('replacePage', page) %>\">
                        <%= page %>
                    </a>
                <% } else { %>
                    <a class=\"uv-page-active\"><%= page %></a>
                <% } %>
            <% }) %>

            <% if(pageCount > endPage) { %>
                <% if(pageCount > (endPage + 1) ) { %>
                    <% if(pageCount > (endPage + 2) ) { %>
                        <a class=\"uv-page-active\" style=\"text-decoration: none\">&hellip;</a>
                    <% } else { %>
                        <a data-page=\"<%= pageCount - 1 %>\" href=\"<%= url.replace('replacePage', pageCount - 1) %>\">
                            <%= pageCount - 1 %>
                        </a>
                    <% } %>
                <% } %>
                <a data-page=\"<%= pageCount %>\" href=\"<%= url.replace('replacePage', pageCount) %>\">
                    <%= pageCount %>
                </a>
            <% } %>

            <% if(next) { %>
                <a href=\"<%= url.replace('replacePage',next) %>\" data-page=\"<%= next %>\" id=\"next\" class=\"uv-pagination-next\">
                </a>
            <% } else { %>
                <a class=\"uv-pagination-next\">
                </a>
            <% } %>
        </div>
    <% } %>
</script>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@UVDeskCoreFramework/Templates/pagination.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script id=\"pagination_tmp\" type=\"text/template\">
    <% if(pageCount > 1) { %>
        <div class=\"uv-pagination\">
            <% if(previous) { %>
                <a data-page=\"<%= previous %>\" href=\"<%= url.replace('replacePage', previous) %>\" id=\"previous\" class=\"uv-pagination-previous\">
                </a>
            <% } else { %>
                <a class=\"uv-pagination-previous\">
                </a>
            <% } %>

            <% if(startPage > 1) { %>
                <a data-page=\"1\" href=\"<%= url.replace('replacePage', 1) %>\">1</a>
                <% if(startPage == 3) { %>
                    <a data-page=\"2\" href=\"<%= url.replace('replacePage', 2) %>\">2</a>
                <% } else if(startPage != 2) { %>
                    <a class=\"uv-page-active\" style=\"text-decoration: none\">&hellip;</a>
                <% } %>
            <% } %>

            <% _.each(pagesInRange, function(page) { %>
                <% if(page != current) { %>
                    <a data-page=\"<%= page %>\" href=\"<%= url.replace('replacePage', page) %>\">
                        <%= page %>
                    </a>
                <% } else { %>
                    <a class=\"uv-page-active\"><%= page %></a>
                <% } %>
            <% }) %>

            <% if(pageCount > endPage) { %>
                <% if(pageCount > (endPage + 1) ) { %>
                    <% if(pageCount > (endPage + 2) ) { %>
                        <a class=\"uv-page-active\" style=\"text-decoration: none\">&hellip;</a>
                    <% } else { %>
                        <a data-page=\"<%= pageCount - 1 %>\" href=\"<%= url.replace('replacePage', pageCount - 1) %>\">
                            <%= pageCount - 1 %>
                        </a>
                    <% } %>
                <% } %>
                <a data-page=\"<%= pageCount %>\" href=\"<%= url.replace('replacePage', pageCount) %>\">
                    <%= pageCount %>
                </a>
            <% } %>

            <% if(next) { %>
                <a href=\"<%= url.replace('replacePage',next) %>\" data-page=\"<%= next %>\" id=\"next\" class=\"uv-pagination-next\">
                </a>
            <% } else { %>
                <a class=\"uv-pagination-next\">
                </a>
            <% } %>
        </div>
    <% } %>
</script>", "@UVDeskCoreFramework/Templates/pagination.html.twig", "/home/support.telenet.com.np/public_html/vendor/uvdesk/core-framework/Resources/views/Templates/pagination.html.twig");
    }
}
