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

/* cliente/index.html.twig */
class __TwigTemplate_40456420ce0078f60aa6e90e143c57ab extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cliente/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cliente/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Cliente index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1 class=\"text-center mb-5\">Listado de Clientes</h1>
    <a class=\"btn btn-success\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cliente_new");
        echo "\">Crear cliente</a>
    <div class=\"table-responsive\">
    <table class=\"table table-dark table-striped \">
        <thead>
            <tr>
                <th class=\"text-center\">Id</th>
                <th class=\"text-center\">Nombre</th>
                <th class=\"text-center\">Apellido1</th>
                <th class=\"text-center\">Apellido2</th>
                <th class=\"text-center\">Direccion</th>
                <th class=\"text-center\">actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clientes"]) || array_key_exists("clientes", $context) ? $context["clientes"] : (function () { throw new RuntimeError('Variable "clientes" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "nombre", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "apellido1", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "apellido2", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "direccion", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-primary\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cliente_show", ["id" => twig_get_attribute($this->env, $this->source, $context["cliente"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">show</a>
                    <a class=\"btn btn-warning\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cliente_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["cliente"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>
    </div>

    <a class=\"btn btn-success\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cliente_new");
        echo "\">Crear cliente</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "cliente/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 42,  144 => 38,  135 => 34,  126 => 30,  122 => 29,  117 => 27,  113 => 26,  109 => 25,  105 => 24,  101 => 23,  98 => 22,  93 => 21,  76 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Cliente index{% endblock %}

{% block body %}
    <h1 class=\"text-center mb-5\">Listado de Clientes</h1>
    <a class=\"btn btn-success\" href=\"{{ path('app_cliente_new') }}\">Crear cliente</a>
    <div class=\"table-responsive\">
    <table class=\"table table-dark table-striped \">
        <thead>
            <tr>
                <th class=\"text-center\">Id</th>
                <th class=\"text-center\">Nombre</th>
                <th class=\"text-center\">Apellido1</th>
                <th class=\"text-center\">Apellido2</th>
                <th class=\"text-center\">Direccion</th>
                <th class=\"text-center\">actions</th>
            </tr>
        </thead>
        <tbody>
        {% for cliente in clientes %}
            <tr>
                <td>{{ cliente.id }}</td>
                <td>{{ cliente.nombre }}</td>
                <td>{{ cliente.apellido1 }}</td>
                <td>{{ cliente.apellido2 }}</td>
                <td>{{ cliente.direccion }}</td>
                <td>
                    <a class=\"btn btn-primary\" href=\"{{ path('app_cliente_show', {'id': cliente.id}) }}\">show</a>
                    <a class=\"btn btn-warning\" href=\"{{ path('app_cliente_edit', {'id': cliente.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    </div>

    <a class=\"btn btn-success\" href=\"{{ path('app_cliente_new') }}\">Crear cliente</a>
{% endblock %}
", "cliente/index.html.twig", "C:\\xampp\\htdocs\\F5\\simphony\\ProyectoGrupo\\tiendasymfony-1\\templates\\cliente\\index.html.twig");
    }
}
