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

/* missions/index.html.twig */
class __TwigTemplate_2963f8a42b2f49f96e2485deba811d9da47a95d5f6685c9c986b4b9a8d6def9c extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "missions/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "missions/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "missions/index.html.twig", 1);
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

        // line 4
        echo "    2021'S MISSIONS
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("_header.html.twig", "missions/index.html.twig", 9)->display($context);
        // line 10
        echo "
    <h1 class=\"p-2 mt-4\">Missions' index</h1>

    <table class=\"table table-hover table-responsive text-center align-middle\">
        <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Status</th>
                <th scope=\"col\">Title</th>
                <th scope=\"col\">Country</th>
                <th scope=\"col\">Type</th>
                <th scope=\"col\">Description</th>
                <th scope=\"col\">Start Date</th>
                <th scope=\"col\">End Date</th>
                <th scope=\"col\">Action</th>
            </tr>
        </thead>
        <tbody>

            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["missions"]) || array_key_exists("missions", $context) ? $context["missions"] : (function () { throw new RuntimeError('Variable "missions" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
            // line 30
            echo "
                <tr>

                    <th scope=\"row\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "</th>
                    <td style=
                        ";
            // line 35
            if ((twig_get_attribute($this->env, $this->source, $context["mission"], "status", [], "any", false, false, false, 35) == "Done")) {
                // line 36
                echo "                        \"background-color: lightgreen;\"
                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 37
$context["mission"], "status", [], "any", false, false, false, 37) == "Stand by")) {
                // line 38
                echo "                                \"background-color: gold;\"
                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 39
$context["mission"], "status", [], "any", false, false, false, 39) == "In progress")) {
                // line 40
                echo "                                \"background-color: orange;\"
                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 41
$context["mission"], "status", [], "any", false, false, false, 41) == "In preparation")) {
                // line 42
                echo "                                \"background-color: lightgray;\"
                        ";
            }
            // line 44
            echo "                            >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "status", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "title", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "country", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "type", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                    <td style=\"max-width: 20em\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "description", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "startDate", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "endDate", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission_details", ["id" => twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" style=\"color: black\">See more</a><br>
                        ";
            // line 53
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 54
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission_update", ["id" => twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 54)]), "html", null, true);
                echo "\" style=\"color: black; text-decoration: none;\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-square m-2 text-center\" viewBox=\"0 0 16 16\">
                                    <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
                                </svg>
                            </a> <br>
                            <a href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 60)]), "html", null, true);
                echo "\" style=\"color: red; text-decoration: none\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash text-center\" viewBox=\"0 0 16 16\">
                                    <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/>
                                </svg>
                            </a>
                        ";
            }
            // line 67
            echo "                    </td>

                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "
        </tbody>
    </table>

    <button class=\"btn btn-md btn-primary mx-4\">
        <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" style=\"color: white; text-decoration: none\">
            Sign in
        </a>
    </button>

  ";
        // line 82
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 83
            echo "        <button class=\"btn btn-md btn-success mx-2\">
            <a href=\"";
            // line 84
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission_add");
            echo "\" style=\"color: white; text-decoration: none\">
                Add a mission
            </a>
        </button>
  ";
        }
        // line 89
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "missions/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 89,  237 => 84,  234 => 83,  232 => 82,  224 => 77,  217 => 72,  207 => 67,  197 => 60,  187 => 54,  185 => 53,  181 => 52,  176 => 50,  172 => 49,  168 => 48,  164 => 47,  160 => 46,  156 => 45,  151 => 44,  147 => 42,  145 => 41,  142 => 40,  140 => 39,  137 => 38,  135 => 37,  132 => 36,  130 => 35,  125 => 33,  120 => 30,  116 => 29,  95 => 10,  93 => 9,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    2021'S MISSIONS
{% endblock %}

{% block body %}

    {% include '_header.html.twig' %}

    <h1 class=\"p-2 mt-4\">Missions' index</h1>

    <table class=\"table table-hover table-responsive text-center align-middle\">
        <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Status</th>
                <th scope=\"col\">Title</th>
                <th scope=\"col\">Country</th>
                <th scope=\"col\">Type</th>
                <th scope=\"col\">Description</th>
                <th scope=\"col\">Start Date</th>
                <th scope=\"col\">End Date</th>
                <th scope=\"col\">Action</th>
            </tr>
        </thead>
        <tbody>

            {% for mission in missions %}

                <tr>

                    <th scope=\"row\">{{ mission.id }}</th>
                    <td style=
                        {% if mission.status == 'Done' %}
                        \"background-color: lightgreen;\"
                            {% elseif mission.status == 'Stand by' %}
                                \"background-color: gold;\"
                            {% elseif mission.status == 'In progress' %}
                                \"background-color: orange;\"
                            {% elseif mission.status == 'In preparation' %}
                                \"background-color: lightgray;\"
                        {% endif %}
                            >{{ mission.status }}</td>
                    <td>{{ mission.title }}</td>
                    <td>{{ mission.country }}</td>
                    <td>{{ mission.type }}</td>
                    <td style=\"max-width: 20em\">{{ mission.description }}</td>
                    <td>{{ mission.startDate }}</td>
                    <td>{{ mission.endDate }}</td>
                    <td>
                        <a href=\"{{ path('mission_details', {'id': mission.id}) }}\" style=\"color: black\">See more</a><br>
                        {% if is_granted('ROLE_ADMIN') %}
                            <a href=\"{{ path('mission_update', {'id': mission.id}) }}\" style=\"color: black; text-decoration: none;\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-square m-2 text-center\" viewBox=\"0 0 16 16\">
                                    <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
                                </svg>
                            </a> <br>
                            <a href=\"{{ path('mission_delete', {'id': mission.id}) }}\" style=\"color: red; text-decoration: none\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash text-center\" viewBox=\"0 0 16 16\">
                                    <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/>
                                </svg>
                            </a>
                        {% endif %}
                    </td>

                </tr>

            {% endfor %}

        </tbody>
    </table>

    <button class=\"btn btn-md btn-primary mx-4\">
        <a href=\"{{ path('app_login') }}\" style=\"color: white; text-decoration: none\">
            Sign in
        </a>
    </button>

  {% if is_granted('ROLE_ADMIN') %}
        <button class=\"btn btn-md btn-success mx-2\">
            <a href=\"{{ path('mission_add') }}\" style=\"color: white; text-decoration: none\">
                Add a mission
            </a>
        </button>
  {% endif %}

{% endblock %}
", "missions/index.html.twig", "/Users/paulfaguet/Desktop/FBI_APP/templates/missions/index.html.twig");
    }
}
