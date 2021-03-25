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
class __TwigTemplate_21f58d5e429a567d62991185aea93ccc1c85e2ceb7415dc5afe36d702abb5d38 extends Template
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
        $this->parent = $this->loadTemplate("missions/index.html.twig", "skills/showSkill.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["skill"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
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
        $this->loadTemplate("_header.html.twig", "skills/showSkill.html.twig", 10)->display($context);
        // line 11
        echo "
    <h1 class=\"p-2 mt-4\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["skill"] ?? null), "name", [], "any", false, false, false, 12), "html", null, true);
        echo " </h1>

    <table class=\"table table-hover table-responsive text-justify align-middle mx-5\" style=\"max-width:40em\">
        <tbody>
        <tr>
            <th>Name</th>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["skill"] ?? null), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["skill"] ?? null), "description", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agents_index");
        echo "\" style=\"color: black\">Agents</a> controlling \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["skill"] ?? null), "name", [], "any", false, false, false, 25), "html", null, true);
        echo "\"</th>
            <td>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["skill"] ?? null), "agents", [], "any", false, false, false, 27));
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
        echo "\" style=\"color: black\">Missions </a> requiring \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["skill"] ?? null), "name", [], "any", false, false, false, 35), "html", null, true);
        echo "\"</th>
            <td>
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["skill"] ?? null), "missions", [], "any", false, false, false, 37));
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

    ";
        // line 47
        $this->loadTemplate("_signInBtn.html.twig", "skills/showSkill.html.twig", 47)->display($context);
        // line 48
        echo "
    ";
        // line 49
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 50
            echo "        <button class=\"btn btn-md btn-success ms-5 mb-5\">
            <a href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("skill_add");
            echo "\" style=\"color: white; text-decoration: none\">
                Add a skill
            </a>
        </button>
        <button class=\"btn btn-md btn-warning mx-1 mb-5\">
            <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("skill_update", ["id" => twig_get_attribute($this->env, $this->source, ($context["skill"] ?? null), "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\" style=\"color: white; text-decoration: none\">
                Edit \"";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["skill"] ?? null), "name", [], "any", false, false, false, 57), "html", null, true);
            echo "\"
            </a>
        </button>
        <button class=\"btn btn-md btn-danger mx-1 mb-5\">
            <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("skill_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["skill"] ?? null), "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\" style=\"color: white; text-decoration: none\">
                Delete \"";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["skill"] ?? null), "name", [], "any", false, false, false, 62), "html", null, true);
            echo "\"
            </a>
        </button>
    ";
        }
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
        return array (  187 => 62,  183 => 61,  176 => 57,  172 => 56,  164 => 51,  161 => 50,  159 => 49,  156 => 48,  154 => 47,  147 => 42,  138 => 39,  133 => 38,  129 => 37,  122 => 35,  117 => 32,  108 => 29,  103 => 28,  99 => 27,  92 => 25,  86 => 22,  79 => 18,  70 => 12,  67 => 11,  65 => 10,  62 => 9,  58 => 8,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "skills/showSkill.html.twig", "/Users/paulfaguet/Desktop/FBI_APP/templates/skills/showSkill.html.twig");
    }
}
