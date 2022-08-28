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

/* @UVDeskAutomation/tickets/quick-actions/prepared-responses.html.twig */
class __TwigTemplate_432eb1afe5191e68a9d4616e137608ea0ac772759897b3108d6fe41826a7afee extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskAutomation/tickets/quick-actions/prepared-responses.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskAutomation/tickets/quick-actions/prepared-responses.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1, $this->source); })()), "isAccessAuthorized", [0 => "ROLE_AGENT_APPLY_WORKFLOW"], "method", false, false, false, 1)) {
            // line 2
            echo "    <div class=\"uv-dropdown\">
        <div class=\"uv-dropdown-btn\">";
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Prepared Responses"), "html", null, true);
            echo "</div>
        <div class=\"uv-dropdown-list uv-top-left\">
            <div class=\"uv-dropdown-container prepared-responses\">
                <label>";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Prepared Responses"), "html", null, true);
            echo "</label>
                <ul>
                    <li>
                        <a class=\"create-new\" href=\"";
            // line 9
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prepare_response_action");
            echo "\" target=\"_blank\" style=\"color: #2750C4\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create New"), "html", null, true);
            echo "</a>
                    </li>
                    
                    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 12, $this->source); })()), "getManualWorkflow", [], "method", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["preparedResponse"]) {
                // line 13
                echo "                        <li>
                            <a href=\"";
                // line 14
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_prepared_response_xhr");
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["ticketId"]) || array_key_exists("ticketId", $context) ? $context["ticketId"] : (function () { throw new RuntimeError('Variable "ticketId" does not exist.', 14, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["preparedResponse"], "id", [], "any", false, false, false, 14), "html", null, true);
                echo "\">
                                ";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["preparedResponse"], "name", [], "any", false, false, false, 15), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['preparedResponse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                </ul>
            </div>
        </div>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@UVDeskAutomation/tickets/quick-actions/prepared-responses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 19,  83 => 15,  75 => 14,  72 => 13,  68 => 12,  60 => 9,  54 => 6,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if user_service.isAccessAuthorized('ROLE_AGENT_APPLY_WORKFLOW') %}
    <div class=\"uv-dropdown\">
        <div class=\"uv-dropdown-btn\">{{ 'Prepared Responses'|trans }}</div>
        <div class=\"uv-dropdown-list uv-top-left\">
            <div class=\"uv-dropdown-container prepared-responses\">
                <label>{{ 'Prepared Responses'|trans }}</label>
                <ul>
                    <li>
                        <a class=\"create-new\" href=\"{{path('prepare_response_action')}}\" target=\"_blank\" style=\"color: #2750C4\">{{ 'Create New'|trans }}</a>
                    </li>
                    
                    {% for preparedResponse in ticket_service.getManualWorkflow() %}
                        <li>
                            <a href=\"{{ path('helpdesk_member_ticket_prepared_response_xhr') }}/{{ ticketId }}/{{ preparedResponse.id }}\">
                                {{ preparedResponse.name }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>
{% endif %}", "@UVDeskAutomation/tickets/quick-actions/prepared-responses.html.twig", "/home/lexcorp.xyz/public_html/uvdesk/vendor/uvdesk/automation-bundle/Resources/views/tickets/quick-actions/prepared-responses.html.twig");
    }
}
