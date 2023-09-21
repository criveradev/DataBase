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

/* _menu.html.twig */
class __TwigTemplate_07450ab640e43888ac02be18e424b0d7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_menu.html.twig"));

        // line 1
        echo "<header class=\"navbar navbar-dark bg-dark mb-5\">
    <div class=\"container\">
        <span class=\"navbar-brand mb-0 h1\">Symfony DB</span>

        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"nav-link text-white\">
                    Home
                </a>
            </li>
        </ul>
    </div>
</header>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"navbar navbar-dark bg-dark mb-5\">
    <div class=\"container\">
        <span class=\"navbar-brand mb-0 h1\">Symfony DB</span>

        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a href=\"{{ path('app_home') }}\" class=\"nav-link text-white\">
                    Home
                </a>
            </li>
        </ul>
    </div>
</header>", "_menu.html.twig", "/Users/crivera/Desktop/www/symfonyDB/templates/_menu.html.twig");
    }
}
