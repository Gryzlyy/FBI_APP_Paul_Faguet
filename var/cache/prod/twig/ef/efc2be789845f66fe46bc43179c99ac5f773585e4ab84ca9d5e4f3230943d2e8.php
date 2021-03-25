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

/* _signInBtn.html.twig */
class __TwigTemplate_7d774f9302eb827a4ad81d956fd17b93493f2318cd394ce45361006fe6b6b727 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") == false)) {
            // line 2
            echo "    <button class=\"btn btn-md btn-primary mx-4 mb-5\">
        <a href=\"";
            // line 3
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" style=\"color: white; text-decoration: none\">
            Sign in
        </a>
    </button>
";
        }
    }

    public function getTemplateName()
    {
        return "_signInBtn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_signInBtn.html.twig", "/Users/paulfaguet/Desktop/FBI_APP/templates/_signInBtn.html.twig");
    }
}
