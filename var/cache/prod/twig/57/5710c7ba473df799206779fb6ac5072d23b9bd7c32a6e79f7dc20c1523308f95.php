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

/* contacts/showContact.html.twig */
class __TwigTemplate_aa139bcadbad5243854af4ffb6bc87a4c71724aad65a7c557355e0cca7cc01cd extends Template
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
        $this->parent = $this->loadTemplate("missions/index.html.twig", "contacts/showContact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "codeName", [], "any", false, false, false, 5), "html", null, true);
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
        $this->loadTemplate("_header.html.twig", "contacts/showContact.html.twig", 10)->display($context);
        // line 11
        echo "
    <h1 class=\"p-2 mt-4\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "codeName", [], "any", false, false, false, 12), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "firstname", [], "any", false, false, false, 12), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "lastname", [], "any", false, false, false, 12), "html", null, true);
        echo "</h1>

    <table class=\"table table-hover table-responsive text-justify align-middle mx-5\" style=\"max-width:40em\">
        <tbody>
        <tr>
            <th>Lastname</th>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "lastName", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Firstname</th>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "firstName", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Codename</th>
            <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "codeName", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nationality</th>
            <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "nationality", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Birth Date</th>
            <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "birthDate", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th><a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.home");
        echo "\" style=\"color: black\">Missions</a></th>
            <td>
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "missions", [], "any", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
            // line 40
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission_details", ["id" => twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">
                            ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "title", [], "any", false, false, false, 41), "html", null, true);
            echo " <br>
                        </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </td>
        </tr>
        </tbody>
    </table>

    ";
        // line 49
        $this->loadTemplate("_signInBtn.html.twig", "contacts/showContact.html.twig", 49)->display($context);
        // line 50
        echo "
    ";
        // line 51
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 52
            echo "    <button class=\"btn btn-md btn-success ms-5 mb-5\">
        <a href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_add");
            echo "\" style=\"color: white; text-decoration: none\">
            Add a contact
        </a>
    </button>
    <button class=\"btn btn-md btn-warning mx-1 mb-5\">
        <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_update", ["id" => twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\" style=\"color: white; text-decoration: none\">
            Edit \"";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "codeName", [], "any", false, false, false, 59), "html", null, true);
            echo "\"
        </a>
    </button>
    <button class=\"btn btn-md btn-danger mx-1 mb-5\">
        <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\" style=\"color: white; text-decoration: none\">
            Delete \"";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "codeName", [], "any", false, false, false, 64), "html", null, true);
            echo "\"
        </a>
    </button>
    ";
        }
    }

    public function getTemplateName()
    {
        return "contacts/showContact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 64,  176 => 63,  169 => 59,  165 => 58,  157 => 53,  154 => 52,  152 => 51,  149 => 50,  147 => 49,  140 => 44,  131 => 41,  126 => 40,  122 => 39,  117 => 37,  111 => 34,  104 => 30,  97 => 26,  90 => 22,  83 => 18,  70 => 12,  67 => 11,  65 => 10,  62 => 9,  58 => 8,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contacts/showContact.html.twig", "/Users/paulfaguet/Desktop/FBI_APP/templates/contacts/showContact.html.twig");
    }
}
