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

/* targets/index.html.twig */
class __TwigTemplate_755078e1011423ca0ebfe112390b100533cea8f3f34c3adf107a4303e23e3728 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "targets/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    2021'S TARGETS
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
        $this->loadTemplate("_header.html.twig", "targets/index.html.twig", 9)->display($context);
        // line 10
        echo "
    <h1 class=\"p-2 mt-4\">Targets' index</h1>

    <table class=\"table table-hover table-responsive text-center align-middle\">
        <thead>
        <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Codename</th>
            <th scope=\"col\">Nationality</th>
            <th scope=\"col\">Missions</th>
            <th scope=\"col\">Actions</th>
        </tr>
        </thead>
        <tbody>

        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["targets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["target"]) {
            // line 26
            echo "
            <tr>

                <th scope=\"row\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["target"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</th>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["target"], "codeName", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["target"], "nationality", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["target"], "missions", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
                // line 34
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "title", [], "any", false, false, false, 34), "html", null, true);
                echo " <br>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                </td>
                <td>
                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("target_details", ["id" => twig_get_attribute($this->env, $this->source, $context["target"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" style=\"color: black\">See more</a><br>
                    ";
            // line 39
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 40
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("target_update", ["id" => twig_get_attribute($this->env, $this->source, $context["target"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\" style=\"color: black; text-decoration: none;\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-square m-2 text-center\" viewBox=\"0 0 16 16\">
                                <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
                                <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
                            </svg>
                        </a> <br>
                        <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("target_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["target"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\" style=\"color: red; text-decoration: none\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash text-center\" viewBox=\"0 0 16 16\">
                                <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
                                <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/>
                            </svg>
                        </a>
                    ";
            }
            // line 53
            echo "                    </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['target'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        </tbody>
    </table>

    ";
        // line 59
        $this->loadTemplate("_signInBtn.html.twig", "targets/index.html.twig", 59)->display($context);
        // line 60
        echo "
    ";
        // line 61
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 62
            echo "        <button class=\"btn btn-md btn-success mx-5 mb-5\">
            <a href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("target_add");
            echo "\" style=\"color: white; text-decoration: none\">
                Add a target
            </a>
        </button>
    ";
        }
        // line 68
        echo "
";
    }

    public function getTemplateName()
    {
        return "targets/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 68,  170 => 63,  167 => 62,  165 => 61,  162 => 60,  160 => 59,  155 => 56,  147 => 53,  137 => 46,  127 => 40,  125 => 39,  121 => 38,  117 => 36,  108 => 34,  104 => 33,  99 => 31,  95 => 30,  91 => 29,  86 => 26,  82 => 25,  65 => 10,  63 => 9,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "targets/index.html.twig", "/Users/paulfaguet/Desktop/FBI_APP/templates/targets/index.html.twig");
    }
}
