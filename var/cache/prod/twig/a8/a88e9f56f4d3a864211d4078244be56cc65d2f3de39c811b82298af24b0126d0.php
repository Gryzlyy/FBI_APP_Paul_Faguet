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
class __TwigTemplate_f6010c64c5d1269db4f6bb7c7ebca4950437f900a0d1e602f8157a75dc5d443f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "missions/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    2021'S MISSIONS
";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(($context["missions"] ?? null));
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
    ";
        // line 75
        $this->loadTemplate("_signInBtn.html.twig", "missions/index.html.twig", 75)->display($context);
        // line 76
        echo "
  ";
        // line 77
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 78
            echo "        <button class=\"btn btn-md btn-success mx-5 mb-5\">
            <a href=\"";
            // line 79
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission_add");
            echo "\" style=\"color: white; text-decoration: none\">
                Add a mission
            </a>
        </button>
  ";
        }
        // line 84
        echo "
    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "error"], "method", false, false, false, 85));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 86
            echo "        <div class=\"flash-notice\">
            ";
            // line 87
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "
";
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
        return array (  229 => 90,  220 => 87,  217 => 86,  213 => 85,  210 => 84,  202 => 79,  199 => 78,  197 => 77,  194 => 76,  192 => 75,  187 => 72,  177 => 67,  167 => 60,  157 => 54,  155 => 53,  151 => 52,  146 => 50,  142 => 49,  138 => 48,  134 => 47,  130 => 46,  126 => 45,  121 => 44,  117 => 42,  115 => 41,  112 => 40,  110 => 39,  107 => 38,  105 => 37,  102 => 36,  100 => 35,  95 => 33,  90 => 30,  86 => 29,  65 => 10,  63 => 9,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "missions/index.html.twig", "/Users/paulfaguet/Desktop/FBI_APP/templates/missions/index.html.twig");
    }
}
