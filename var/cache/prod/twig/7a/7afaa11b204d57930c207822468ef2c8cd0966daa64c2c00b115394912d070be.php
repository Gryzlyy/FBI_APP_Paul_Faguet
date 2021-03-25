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

/* agents/showAgent.html.twig */
class __TwigTemplate_6c31839aff9b3f306b4fb96f21b67470b00f8a320dc15f2ee47cce974843a61a extends Template
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
        $this->parent = $this->loadTemplate("missions/index.html.twig", "agents/showAgent.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "codeName", [], "any", false, false, false, 5), "html", null, true);
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
        $this->loadTemplate("_header.html.twig", "agents/showAgent.html.twig", 10)->display($context);
        // line 11
        echo "
    <h1 class=\"p-2 mt-4\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "codeName", [], "any", false, false, false, 12), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "firstname", [], "any", false, false, false, 12), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "lastname", [], "any", false, false, false, 12), "html", null, true);
        echo "</h1>

    <table class=\"table table-hover table-responsive text-justify align-middle mx-5\" style=\"max-width:40em\">
        <tbody>
        <tr>
            <th>Lastname</th>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "lastName", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Firstname</th>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "firstName", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Codename</th>
            <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "codeName", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nationality</th>
            <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "nationality", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("skills_index");
        echo "\" style=\"color: black\">Skills</a></th>
            <td>
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "skills", [], "any", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 36
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("skill_details", ["id" => twig_get_attribute($this->env, $this->source, $context["skill"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">
                    ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "name", [], "any", false, false, false, 37), "html", null, true);
            echo " <br>
                </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </td>
        </tr>
        <tr>
            <th><a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.home");
        echo "\" style=\"color: black\">Missions</a></th>
            <td>
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "missions", [], "any", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
            // line 46
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission_details", ["id" => twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">
                            ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "title", [], "any", false, false, false, 47), "html", null, true);
            echo " <br>
                        </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </td>
        </tr>
        </tbody>
    </table>

    ";
        // line 55
        $this->loadTemplate("_signInBtn.html.twig", "agents/showAgent.html.twig", 55)->display($context);
        // line 56
        echo "
    ";
        // line 57
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 58
            echo "    <button class=\"btn btn-md btn-success ms-5 mb-5\">
        <a href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_add");
            echo "\" style=\"color: white; text-decoration: none\">
            Add an agent
        </a>
    </button>
    <button class=\"btn btn-md btn-warning mx-1 mb-5\">
        <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_update", ["id" => twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\" style=\"color: white; text-decoration: none\">
            Edit \"";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "codeName", [], "any", false, false, false, 65), "html", null, true);
            echo "\"
        </a>
    </button>
    <button class=\"btn btn-md btn-danger mx-1 mb-5\">
        <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\" style=\"color: white; text-decoration: none\">
            Delete \"";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "codeName", [], "any", false, false, false, 70), "html", null, true);
            echo "\"
        </a>
    </button>
    ";
        }
    }

    public function getTemplateName()
    {
        return "agents/showAgent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 70,  197 => 69,  190 => 65,  186 => 64,  178 => 59,  175 => 58,  173 => 57,  170 => 56,  168 => 55,  161 => 50,  152 => 47,  147 => 46,  143 => 45,  138 => 43,  133 => 40,  124 => 37,  119 => 36,  115 => 35,  110 => 33,  104 => 30,  97 => 26,  90 => 22,  83 => 18,  70 => 12,  67 => 11,  65 => 10,  62 => 9,  58 => 8,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "agents/showAgent.html.twig", "/Users/paulfaguet/Desktop/FBI_APP/templates/agents/showAgent.html.twig");
    }
}
