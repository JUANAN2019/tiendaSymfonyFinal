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

/* fabricante/index.html.twig */
class __TwigTemplate_69c3857e5f407fd2545e05925528b4c5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fabricante/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fabricante/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Fabricante index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1 class=\"text-center mb-3\">Listado Fabricantes</h1>
     <a class=\"btn btn-success\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fabricante_new");
        echo "\">Create new</a>
    <table class=\"table table-dark table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Fabricante</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fabricantes"]) || array_key_exists("fabricantes", $context) ? $context["fabricantes"] : (function () { throw new RuntimeError('Variable "fabricantes" does not exist.', 17, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["fabricante"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fabricante"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fabricante"], "fabricante", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-primary\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fabricante_show", ["id" => twig_get_attribute($this->env, $this->source, $context["fabricante"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\">show</a>
                    <a class=\"btn btn-warning\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fabricante_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["fabricante"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "            <tr>
                <td colspan=\"3\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fabricante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>
    <a class=\"btn btn-success\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fabricante_new");
        echo "\">Create new</a>
   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "fabricante/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 33,  128 => 31,  119 => 27,  110 => 23,  106 => 22,  101 => 20,  97 => 19,  94 => 18,  89 => 17,  76 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Fabricante index{% endblock %}

{% block body %}
    <h1 class=\"text-center mb-3\">Listado Fabricantes</h1>
     <a class=\"btn btn-success\" href=\"{{ path('app_fabricante_new') }}\">Create new</a>
    <table class=\"table table-dark table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Fabricante</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for fabricante in fabricantes %}
            <tr>
                <td>{{ fabricante.id }}</td>
                <td>{{ fabricante.fabricante }}</td>
                <td>
                    <a class=\"btn btn-primary\" href=\"{{ path('app_fabricante_show', {'id': fabricante.id}) }}\">show</a>
                    <a class=\"btn btn-warning\" href=\"{{ path('app_fabricante_edit', {'id': fabricante.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"3\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <a class=\"btn btn-success\" href=\"{{ path('app_fabricante_new') }}\">Create new</a>
   
{% endblock %}
", "fabricante/index.html.twig", "C:\\xampp\\htdocs\\F5\\simphony\\ProyectoGrupo\\tiendasymfony-1\\templates\\fabricante\\index.html.twig");
    }
}
