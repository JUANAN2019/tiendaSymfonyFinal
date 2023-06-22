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

/* fabricante/show.html.twig */
class __TwigTemplate_72e87f03ff1267c4e9459ebaa0c90198 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fabricante/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fabricante/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Fabricante";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1 class=\"text-center mb-4\">Fabricante</h1>
    <a class=\"btn btn-success \"href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fabricante_index");
        echo "\">back to list</a>

    <a class=\"btn btn-warning\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fabricante_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["fabricante"]) || array_key_exists("fabricante", $context) ? $context["fabricante"] : (function () { throw new RuntimeError('Variable "fabricante" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\">edit</a>
    <table class=\"table table-dark table-striped mt-2\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fabricante"]) || array_key_exists("fabricante", $context) ? $context["fabricante"] : (function () { throw new RuntimeError('Variable "fabricante" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fabricante</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fabricante"]) || array_key_exists("fabricante", $context) ? $context["fabricante"] : (function () { throw new RuntimeError('Variable "fabricante" does not exist.', 18, $this->source); })()), "fabricante", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    

    ";
        // line 25
        echo twig_include($this->env, $context, "fabricante/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "fabricante/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 25,  96 => 18,  89 => 14,  81 => 9,  76 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Fabricante{% endblock %}

{% block body %}
    <h1 class=\"text-center mb-4\">Fabricante</h1>
    <a class=\"btn btn-success \"href=\"{{ path('app_fabricante_index') }}\">back to list</a>

    <a class=\"btn btn-warning\" href=\"{{ path('app_fabricante_edit', {'id': fabricante.id}) }}\">edit</a>
    <table class=\"table table-dark table-striped mt-2\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ fabricante.id }}</td>
            </tr>
            <tr>
                <th>Fabricante</th>
                <td>{{ fabricante.fabricante }}</td>
            </tr>
        </tbody>
    </table>

    

    {{ include('fabricante/_delete_form.html.twig') }}
{% endblock %}
", "fabricante/show.html.twig", "C:\\Users\\34692\\Desktop\\PROYECTOS\\tiendasymfonyfinal\\tiendaSymfonyFinal\\templates\\fabricante\\show.html.twig");
    }
}
