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

/* hideouts/showHideout.html.twig */
class __TwigTemplate_94723f517d493f049bfa3777e81868ad0008670e5f04520030796d1112b57985 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hideouts/showHideout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hideouts/showHideout.html.twig"));

        $this->parent = $this->loadTemplate("missions/index.html.twig", "hideouts/showHideout.html.twig", 1);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hideout"]) || array_key_exists("hideout", $context) ? $context["hideout"] : (function () { throw new RuntimeError('Variable "hideout" does not exist.', 5, $this->source); })()), "address", [], "any", false, false, false, 5), "html", null, true);
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
        $this->loadTemplate("_header.html.twig", "hideouts/showHideout.html.twig", 10)->display($context);
        // line 11
        echo "
    <h1 class=\"p-2 mt-4\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hideout"]) || array_key_exists("hideout", $context) ? $context["hideout"] : (function () { throw new RuntimeError('Variable "hideout" does not exist.', 12, $this->source); })()), "address", [], "any", false, false, false, 12), "html", null, true);
        echo "</h1>

    <table class=\"table table-hover table-responsive text-justify align-middle mx-5\" style=\"max-width:40em\">
        <tbody>
        <tr>
            <th>Type</th>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hideout"]) || array_key_exists("hideout", $context) ? $context["hideout"] : (function () { throw new RuntimeError('Variable "hideout" does not exist.', 18, $this->source); })()), "type", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Country</th>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hideout"]) || array_key_exists("hideout", $context) ? $context["hideout"] : (function () { throw new RuntimeError('Variable "hideout" does not exist.', 22, $this->source); })()), "country", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hideout"]) || array_key_exists("hideout", $context) ? $context["hideout"] : (function () { throw new RuntimeError('Variable "hideout" does not exist.', 26, $this->source); })()), "address", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th><a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.home");
        echo "\" style=\"color: black\">Missions</a></th>
            <td>
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["hideout"]) || array_key_exists("hideout", $context) ? $context["hideout"] : (function () { throw new RuntimeError('Variable "hideout" does not exist.', 31, $this->source); })()), "missions", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
            // line 32
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission_details", ["id" => twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">
                            ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "title", [], "any", false, false, false, 33), "html", null, true);
            echo " <br>
                        </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </td>
        </tr>
        </tbody>
    </table>
    <button class=\"btn btn-md btn-primary mx-5 mb-5\">
        <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" style=\"color: white; text-decoration: none\">
            Sign in
        </a>
    </button>

    ";
        // line 46
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 47
            echo "    <button class=\"btn btn-md btn-success mx-2 mb-5\">
        <a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hideout_add");
            echo "\" style=\"color: white; text-decoration: none\">
            Add an hideout
        </a>
    </button>
    <button class=\"btn btn-md btn-warning mx-1 mb-5\">
        <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hideout_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["hideout"]) || array_key_exists("hideout", $context) ? $context["hideout"] : (function () { throw new RuntimeError('Variable "hideout" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\" style=\"color: white; text-decoration: none\">
            Edit \"";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hideout"]) || array_key_exists("hideout", $context) ? $context["hideout"] : (function () { throw new RuntimeError('Variable "hideout" does not exist.', 54, $this->source); })()), "address", [], "any", false, false, false, 54), "html", null, true);
            echo "\"
        </a>
    </button>
    <button class=\"btn btn-md btn-danger mx-1 mb-5\">
        <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hideout_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["hideout"]) || array_key_exists("hideout", $context) ? $context["hideout"] : (function () { throw new RuntimeError('Variable "hideout" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\" style=\"color: white; text-decoration: none\">
            Delete \"";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hideout"]) || array_key_exists("hideout", $context) ? $context["hideout"] : (function () { throw new RuntimeError('Variable "hideout" does not exist.', 59, $this->source); })()), "address", [], "any", false, false, false, 59), "html", null, true);
            echo "\"
        </a>
    </button>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "hideouts/showHideout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 59,  191 => 58,  184 => 54,  180 => 53,  172 => 48,  169 => 47,  167 => 46,  159 => 41,  152 => 36,  143 => 33,  138 => 32,  134 => 31,  129 => 29,  123 => 26,  116 => 22,  109 => 18,  100 => 12,  97 => 11,  95 => 10,  92 => 9,  82 => 8,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'missions/index.html.twig' %}


{% block title %}
    {{ hideout.address }}
{% endblock %}

{% block body %}

    {% include \"_header.html.twig\" %}

    <h1 class=\"p-2 mt-4\">{{ hideout.address }}</h1>

    <table class=\"table table-hover table-responsive text-justify align-middle mx-5\" style=\"max-width:40em\">
        <tbody>
        <tr>
            <th>Type</th>
            <td>{{ hideout.type }}</td>
        </tr>
        <tr>
            <th>Country</th>
            <td>{{ hideout.country }}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{ hideout.address }}</td>
        </tr>
        <tr>
            <th><a href=\"{{ path('app.home') }}\" style=\"color: black\">Missions</a></th>
            <td>
                {% for mission in hideout.missions %}
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

    {% if is_granted('ROLE_ADMIN') %}
    <button class=\"btn btn-md btn-success mx-2 mb-5\">
        <a href=\"{{ path('hideout_add') }}\" style=\"color: white; text-decoration: none\">
            Add an hideout
        </a>
    </button>
    <button class=\"btn btn-md btn-warning mx-1 mb-5\">
        <a href=\"{{ path('hideout_update', {'id': hideout.id}) }}\" style=\"color: white; text-decoration: none\">
            Edit \"{{ hideout.address }}\"
        </a>
    </button>
    <button class=\"btn btn-md btn-danger mx-1 mb-5\">
        <a href=\"{{ path('hideout_delete', {'id': hideout.id}) }}\" style=\"color: white; text-decoration: none\">
            Delete \"{{ hideout.address }}\"
        </a>
    </button>
    {% endif %}
{% endblock %}", "hideouts/showHideout.html.twig", "/Users/paulfaguet/Desktop/FBI_APP/templates/hideouts/showHideout.html.twig");
    }
}
