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

/* skills/showSkill.html.twig */
class __TwigTemplate_7d88fc321d329ed6ec17e968019fae867026db02058beef8e05f98db1c0f03a0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "missions/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "skills/showSkill.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "skills/showSkill.html.twig"));

        $this->parent = $this->loadTemplate("missions/index.html.twig", "skills/showSkill.html.twig", 1);
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

        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["skill"]) || array_key_exists("skill", $context) ? $context["skill"] : (function () { throw new RuntimeError('Variable "skill" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
    ";
        // line 10
        $this->loadTemplate("_header.html.twig", "skills/showSkill.html.twig", 10)->display($context);
        // line 11
        echo "
    <h1 class=\"p-2 mt-4\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["skill"]) || array_key_exists("skill", $context) ? $context["skill"] : (function () { throw new RuntimeError('Variable "skill" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
        echo " </h1>

    <table class=\"table table-hover table-responsive text-justify align-middle mx-5\" style=\"max-width:40em\">
        <tbody>
        <tr>
            <th>Name</th>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["skill"]) || array_key_exists("skill", $context) ? $context["skill"] : (function () { throw new RuntimeError('Variable "skill" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["skill"]) || array_key_exists("skill", $context) ? $context["skill"] : (function () { throw new RuntimeError('Variable "skill" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Agents controlling ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["skill"]) || array_key_exists("skill", $context) ? $context["skill"] : (function () { throw new RuntimeError('Variable "skill" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), "html", null, true);
        echo "</th>
            <td>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["skill"]) || array_key_exists("skill", $context) ? $context["skill"] : (function () { throw new RuntimeError('Variable "skill" does not exist.', 27, $this->source); })()), "agents", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 28
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_details", ["id" => twig_get_attribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">
                        ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "codeName", [], "any", false, false, false, 29), "html", null, true);
            echo " <br>
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </td>
        </tr>
        <tr>
            <th><a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.home");
        echo "\">Missions </a> requiring <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["skill"]) || array_key_exists("skill", $context) ? $context["skill"] : (function () { throw new RuntimeError('Variable "skill" does not exist.', 35, $this->source); })()), "name", [], "any", false, false, false, 35), "html", null, true);
        echo "</strong></th>
            <td>
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["skill"]) || array_key_exists("skill", $context) ? $context["skill"] : (function () { throw new RuntimeError('Variable "skill" does not exist.', 37, $this->source); })()), "missions", [], "any", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
            // line 38
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission_details", ["id" => twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">
                        ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "title", [], "any", false, false, false, 39), "html", null, true);
            echo " <br>
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </td>
        </tr>
        </tbody>
    </table>
    <button class=\"btn btn-md btn-primary mx-5 mb-5\">
        <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" style=\"color: white; text-decoration: none\">
            Sign in
        </a>
    </button>

    ";
        // line 53
        echo "    <button class=\"btn btn-md btn-success mx-2 mb-5\">
        <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("skill_add");
        echo "\" style=\"color: white; text-decoration: none\">
            Add a skill
        </a>
    </button>
    <button class=\"btn btn-md btn-warning mx-1 mb-5\">
        <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("skill_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["skill"]) || array_key_exists("skill", $context) ? $context["skill"] : (function () { throw new RuntimeError('Variable "skill" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
        echo "\" style=\"color: white; text-decoration: none\">
            Edit \"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["skill"]) || array_key_exists("skill", $context) ? $context["skill"] : (function () { throw new RuntimeError('Variable "skill" does not exist.', 60, $this->source); })()), "name", [], "any", false, false, false, 60), "html", null, true);
        echo "\"
        </a>
    </button>
    <button class=\"btn btn-md btn-danger mx-1 mb-5\">
        <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("skill_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["skill"]) || array_key_exists("skill", $context) ? $context["skill"] : (function () { throw new RuntimeError('Variable "skill" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64)]), "html", null, true);
        echo "\" style=\"color: white; text-decoration: none\">
            Delete \"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["skill"]) || array_key_exists("skill", $context) ? $context["skill"] : (function () { throw new RuntimeError('Variable "skill" does not exist.', 65, $this->source); })()), "name", [], "any", false, false, false, 65), "html", null, true);
        echo "\"
        </a>
    </button>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "skills/showSkill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 65,  212 => 64,  205 => 60,  201 => 59,  193 => 54,  190 => 53,  182 => 47,  175 => 42,  166 => 39,  161 => 38,  157 => 37,  150 => 35,  145 => 32,  136 => 29,  131 => 28,  127 => 27,  122 => 25,  116 => 22,  109 => 18,  100 => 12,  97 => 11,  95 => 10,  92 => 9,  82 => 8,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'missions/index.html.twig' %}


{% block title %}
    {{ skill.name }}
{% endblock %}

{% block body %}

    {% include \"_header.html.twig\" %}

    <h1 class=\"p-2 mt-4\">{{ skill.name }} </h1>

    <table class=\"table table-hover table-responsive text-justify align-middle mx-5\" style=\"max-width:40em\">
        <tbody>
        <tr>
            <th>Name</th>
            <td>{{ skill.name }}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{ skill.description }}</td>
        </tr>
        <tr>
            <th>Agents controlling {{ skill.name }}</th>
            <td>
                {% for agent in skill.agents %}
                    <a href=\"{{ path('agent_details', {'id': agent.id}) }}\">
                        {{ agent.codeName }} <br>
                    </a>
                {% endfor %}
            </td>
        </tr>
        <tr>
            <th><a href=\"{{ path('app.home') }}\">Missions </a> requiring <strong>{{ skill.name }}</strong></th>
            <td>
                {% for mission in skill.missions %}
                    <a href=\"{{ path('mission_details', {'id': mission.id}) }}\">
                        {{ mission.title }} <br>
                    </a>
                {% endfor %}
            </td>
        </tr>
        </tbody>
    </table>
    <button class=\"btn btn-md btn-primary mx-5 mb-5\">
        <a href=\"{{ path('app_login') }}\" style=\"color: white; text-decoration: none\">
            Sign in
        </a>
    </button>

    {#  {% if is_granted('ROLE_ADMIN') %} #}
    <button class=\"btn btn-md btn-success mx-2 mb-5\">
        <a href=\"{{ path('skill_add') }}\" style=\"color: white; text-decoration: none\">
            Add a skill
        </a>
    </button>
    <button class=\"btn btn-md btn-warning mx-1 mb-5\">
        <a href=\"{{ path('skill_update', {'id': skill.id}) }}\" style=\"color: white; text-decoration: none\">
            Edit \"{{ skill.name }}\"
        </a>
    </button>
    <button class=\"btn btn-md btn-danger mx-1 mb-5\">
        <a href=\"{{ path('skill_delete', {'id': skill.id}) }}\" style=\"color: white; text-decoration: none\">
            Delete \"{{ skill.name }}\"
        </a>
    </button>
    {#  {% endif %}#}
{% endblock %}", "skills/showSkill.html.twig", "/Users/paulfaguet/Desktop/FBI_APP/templates/skills/showSkill.html.twig");
    }
}
