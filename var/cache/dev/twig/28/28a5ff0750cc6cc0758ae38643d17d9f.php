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

/* _aside.html.twig */
class __TwigTemplate_66d9a3e08f9995c52c3562cb3f7129ce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_aside.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_aside.html.twig"));

        // line 1
        echo "<div class=\"p-3 mb-3 bg-dark text-white rounded\">
\t<p>
\t\tLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
\t</p>
\t<p class=\"mb-0\">
\t\tWhen an unknown printer took a galley of type and scrambled it to make a type specimen book.
\t</p>
</div>

<p>
\tIt has survived not
\t<strong>only five centuries</strong>, but also the leap into electronic typesetting,
\t<strong>remaining essentially</strong>
\tunchanged.
</p>

<a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comments");
        echo "\" class=\"btn btn-warning btn-lg\">Comentarios</a>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_aside.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"p-3 mb-3 bg-dark text-white rounded\">
\t<p>
\t\tLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
\t</p>
\t<p class=\"mb-0\">
\t\tWhen an unknown printer took a galley of type and scrambled it to make a type specimen book.
\t</p>
</div>

<p>
\tIt has survived not
\t<strong>only five centuries</strong>, but also the leap into electronic typesetting,
\t<strong>remaining essentially</strong>
\tunchanged.
</p>

<a href=\"{{ path('app_comments') }}\" class=\"btn btn-warning btn-lg\">Comentarios</a>
", "_aside.html.twig", "/Users/crivera/Desktop/www/symfonyDB/templates/_aside.html.twig");
    }
}
