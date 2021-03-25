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
class __TwigTemplate_854b4cb637f3f03a604c479bb087ed5a1a9e90db15a0444f943dc58647a2fd41 extends Template
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
        $this->parent = $this->loadTemplate("missions/index.html.twig", "hideouts/showHideout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hideout"] ?? null), "address", [], "any", false, false, false, 5), "html", null, true);
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
        $this->loadTemplate("_header.html.twig", "hideouts/showHideout.html.twig", 10)->display($context);
        // line 11
        echo "
    <h1 class=\"p-2 mt-4\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hideout"] ?? null), "address", [], "any", false, false, false, 12), "html", null, true);
        echo "</h1>

    <table class=\"table table-hover table-responsive text-justify align-middle mx-5\" style=\"max-width:40em\">
        <tbody>
        <tr>
            <th>Type</th>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hideout"] ?? null), "type", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Country</th>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hideout"] ?? null), "country", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hideout"] ?? null), "address", [], "any", false, false, false, 26), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["hideout"] ?? null), "missions", [], "any", false, false, false, 31));
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

    ";
        // line 41
        $this->loadTemplate("_signInBtn.html.twig", "hideouts/showHideout.html.twig", 41)->display($context);
        // line 42
        echo "
    ";
        // line 43
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 44
            echo "    <button class=\"btn btn-md btn-success ms-5 mb-5\">
        <a href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hideout_add");
            echo "\" style=\"color: white; text-decoration: none\">
            Add an hideout
        </a>
    </button>
    <button class=\"btn btn-md btn-warning mx-1 mb-5\">
        <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hideout_update", ["id" => twig_get_attribute($this->env, $this->source, ($context["hideout"] ?? null), "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" style=\"color: white; text-decoration: none\">
            Edit \"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hideout"] ?? null), "address", [], "any", false, false, false, 51), "html", null, true);
            echo "\"
        </a>
    </button>
    <button class=\"btn btn-md btn-danger mx-1 mb-5\">
        <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hideout_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["hideout"] ?? null), "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\" style=\"color: white; text-decoration: none\">
            Delete \"";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hideout"] ?? null), "address", [], "any", false, false, false, 56), "html", null, true);
            echo "\"
        </a>
    </button>
    ";
        }
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
        return array (  162 => 56,  158 => 55,  151 => 51,  147 => 50,  139 => 45,  136 => 44,  134 => 43,  131 => 42,  129 => 41,  122 => 36,  113 => 33,  108 => 32,  104 => 31,  99 => 29,  93 => 26,  86 => 22,  79 => 18,  70 => 12,  67 => 11,  65 => 10,  62 => 9,  58 => 8,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "hideouts/showHideout.html.twig", "/Users/paulfaguet/Desktop/FBI_APP/templates/hideouts/showHideout.html.twig");
    }
}
