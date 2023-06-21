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

/* cliente/show.html.twig */
class __TwigTemplate_bcf9b9f427ae956555a2c1c774b2a761 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cliente/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cliente/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Cliente";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1 class=\"text-center mb-4\">Cliente</h1>
    <a class=\"btn btn-success \"href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cliente_index");
        echo "\">back to list</a>

    <a class=\"btn btn-warning \"href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cliente_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\">edit</a>
    <table class=\"table table-dark table-striped mt-2\">
    
        <tbody >
            <tr>
                <th>Id</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 19, $this->source); })()), "nombre", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apellido1</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 23, $this->source); })()), "apellido1", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apellido2</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 27, $this->source); })()), "apellido2", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Direccion</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 31, $this->source); })()), "direccion", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    

    ";
        // line 38
        echo twig_include($this->env, $context, "cliente/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "cliente/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 38,  118 => 31,  111 => 27,  104 => 23,  97 => 19,  90 => 15,  81 => 9,  76 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Cliente{% endblock %}

{% block body %}
    <h1 class=\"text-center mb-4\">Cliente</h1>
    <a class=\"btn btn-success \"href=\"{{ path('app_cliente_index') }}\">back to list</a>

    <a class=\"btn btn-warning \"href=\"{{ path('app_cliente_edit', {'id': cliente.id}) }}\">edit</a>
    <table class=\"table table-dark table-striped mt-2\">
    
        <tbody >
            <tr>
                <th>Id</th>
                <td>{{ cliente.id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ cliente.nombre }}</td>
            </tr>
            <tr>
                <th>Apellido1</th>
                <td>{{ cliente.apellido1 }}</td>
            </tr>
            <tr>
                <th>Apellido2</th>
                <td>{{ cliente.apellido2 }}</td>
            </tr>
            <tr>
                <th>Direccion</th>
                <td>{{ cliente.direccion }}</td>
            </tr>
        </tbody>
    </table>

    

    {{ include('cliente/_delete_form.html.twig') }}
{% endblock %}
", "cliente/show.html.twig", "C:\\xampp\\htdocs\\F5\\simphony\\ProyectoGrupo\\tiendasymfony-1\\templates\\cliente\\show.html.twig");
    }
}
