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

/* missions/showMission.html.twig */
class __TwigTemplate_b11a3a78ba2cf11e7c9a70a4e9146879f1e75727059f4bbb99d3dd9889db5f6f extends Template
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
        $this->parent = $this->loadTemplate("missions/index.html.twig", "missions/showMission.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mission"] ?? null), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "
";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
    ";
        // line 10
        $this->loadTemplate("_header.html.twig", "missions/showMission.html.twig", 10)->display($context);
        // line 11
        echo "
    <h1 class=\"p-2 mt-4\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mission"] ?? null), "title", [], "any", false, false, false, 12), "html", null, true);
        echo "</h1>
<div>
    <table class=\"table table-hover table-responsive text-justify align-middle mx-5\" style=\"max-width:40em\">
        <tbody>
            <tr>
                <th>Title</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mission"] ?? null), "title", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mission"] ?? null), "description", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mission"] ?? null), "status", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mission"] ?? null), "type", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mission"] ?? null), "country", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Start date</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mission"] ?? null), "startDate", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>End date</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mission"] ?? null), "endDate", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th><a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("skills_index");
        echo "\" style=\"color: black\">Skills</a> required</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mission"] ?? null), "skills", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th><a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agents_index");
        echo "\" style=\"color: black\">Agents</a></th>
                <td>
                    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["mission"] ?? null), "agents", [], "any", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 52
            echo "
                            <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_details", ["id" => twig_get_attribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\">
                                ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "codeName", [], "any", false, false, false, 54), "html", null, true);
            echo " <br>
                            </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                </td>
            </tr>
            <tr>
                <th><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("targets_index");
        echo "\" style=\"color: black\">Targets</a></th>
                <td>
                    ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["mission"] ?? null), "targets", [], "any", false, false, false, 62));
        foreach ($context['_seq'] as $context["_key"] => $context["target"]) {
            // line 63
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("target_details", ["id" => twig_get_attribute($this->env, $this->source, $context["target"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\">
                                ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["target"], "codeName", [], "any", false, false, false, 64), "html", null, true);
            echo " <br>
                            </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['target'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                </td>
            </tr>
            <tr>
                <th><a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacts_index");
        echo "\" style=\"color: black\">Contacts</a></th>
                <td>
                    ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["mission"] ?? null), "contacts", [], "any", false, false, false, 72));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 73
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_details", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\">
                                ";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "codeName", [], "any", false, false, false, 74), "html", null, true);
            echo " <br>
                            </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                    </td>
            </tr>
        </tbody>
    </table>

    ";
        // line 82
        $this->loadTemplate("_signInBtn.html.twig", "missions/showMission.html.twig", 82)->display($context);
        // line 83
        echo "
    ";
        // line 84
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 85
            echo "        <button class=\"btn btn-md btn-success ms-5 mb-5\">
            <a href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission_add");
            echo "\" style=\"color: white; text-decoration: none\">
                Add a mission
            </a>
        </button>
        <button class=\"btn btn-md btn-warning mx-1 mb-5\">
            <a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission_update", ["id" => twig_get_attribute($this->env, $this->source, ($context["mission"] ?? null), "id", [], "any", false, false, false, 91)]), "html", null, true);
            echo "\" style=\"color: white; text-decoration: none\">
                Edit ";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mission"] ?? null), "title", [], "any", false, false, false, 92), "html", null, true);
            echo "
            </a>
        </button>
        <button class=\"btn btn-md btn-danger mx-1 mb-5\">
            <a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["mission"] ?? null), "id", [], "any", false, false, false, 96)]), "html", null, true);
            echo "\" style=\"color: white; text-decoration: none\">
                Delete ";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mission"] ?? null), "title", [], "any", false, false, false, 97), "html", null, true);
            echo "
            </a>
        </button>
    ";
        }
    }

    public function getTemplateName()
    {
        return "missions/showMission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 97,  254 => 96,  247 => 92,  243 => 91,  235 => 86,  232 => 85,  230 => 84,  227 => 83,  225 => 82,  218 => 77,  209 => 74,  204 => 73,  200 => 72,  195 => 70,  190 => 67,  181 => 64,  176 => 63,  172 => 62,  167 => 60,  162 => 57,  153 => 54,  149 => 53,  146 => 52,  142 => 51,  137 => 49,  131 => 46,  127 => 45,  121 => 42,  114 => 38,  107 => 34,  100 => 30,  93 => 26,  86 => 22,  79 => 18,  70 => 12,  67 => 11,  65 => 10,  62 => 9,  58 => 8,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "missions/showMission.html.twig", "/Users/paulfaguet/Desktop/FBI_APP/templates/missions/showMission.html.twig");
    }
}
