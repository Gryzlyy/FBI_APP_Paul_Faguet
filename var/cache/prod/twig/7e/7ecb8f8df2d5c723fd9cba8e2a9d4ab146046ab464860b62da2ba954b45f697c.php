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

/* targets/showTarget.html.twig */
class __TwigTemplate_31eb280837951f5f75d9a7cdd6e648320034e5cc2f8fe88f5a5294b78719d941 extends Template
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
        $this->parent = $this->loadTemplate("missions/index.html.twig", "targets/showTarget.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "codeName", [], "any", false, false, false, 5), "html", null, true);
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
        $this->loadTemplate("_header.html.twig", "targets/showTarget.html.twig", 10)->display($context);
        // line 11
        echo "
    <h1 class=\"p-2 mt-4\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "codeName", [], "any", false, false, false, 12), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "firstname", [], "any", false, false, false, 12), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "lastname", [], "any", false, false, false, 12), "html", null, true);
        echo "</h1>

    <table class=\"table table-hover table-responsive text-justify align-middle mx-5\" style=\"max-width:40em\">
        <tbody>
        <tr>
            <th>Lastname</th>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "lastName", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Firstname</th>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "firstName", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Codename</th>
            <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "codeName", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nationality</th>
            <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "nationality", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.home");
        echo "\" style=\"color: black\">Missions</a></th>
            <td>
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "missions", [], "any", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
            // line 36
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission_details", ["id" => twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">
                            ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "title", [], "any", false, false, false, 37), "html", null, true);
            echo " <br/>
                        </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </td>
        </tr>
        </tbody>
    </table>

    ";
        // line 45
        $this->loadTemplate("_signInBtn.html.twig", "targets/showTarget.html.twig", 45)->display($context);
        // line 46
        echo "
    ";
        // line 47
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 48
            echo "        <button class=\"btn btn-md btn-success ms-5 mb-5\">
            <a href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("target_add");
            echo "\" style=\"color: white; text-decoration: none\">
                Add a target
            </a>
        </button>
        <button class=\"btn btn-md btn-warning mx-1 mb-5\">
            <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("target_update", ["id" => twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\" style=\"color: white; text-decoration: none\">
                Edit \"";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "codeName", [], "any", false, false, false, 55), "html", null, true);
            echo "\"
            </a>
        </button>
        <button class=\"btn btn-md btn-danger mx-1 mb-5\">
            <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("target_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\" style=\"color: white; text-decoration: none\">
                Delete \"";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "codeName", [], "any", false, false, false, 60), "html", null, true);
            echo "\"
            </a>
        </button>
    ";
        }
    }

    public function getTemplateName()
    {
        return "targets/showTarget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 60,  169 => 59,  162 => 55,  158 => 54,  150 => 49,  147 => 48,  145 => 47,  142 => 46,  140 => 45,  133 => 40,  124 => 37,  119 => 36,  115 => 35,  110 => 33,  104 => 30,  97 => 26,  90 => 22,  83 => 18,  70 => 12,  67 => 11,  65 => 10,  62 => 9,  58 => 8,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "targets/showTarget.html.twig", "/Users/paulfaguet/Desktop/FBI_APP/templates/targets/showTarget.html.twig");
    }
}
