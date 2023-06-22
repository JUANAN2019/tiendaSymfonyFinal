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

/* home/index.html.twig */
class __TwigTemplate_f43a253a0d81390c1f21fb9a201b5cf5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
    <style>
        .jumbotron h1,.jumbotron h2{font-size:40px}.navbar{background-color:#202020}.navbar-brand img{max-height:60px;margin-right:10px}.jumbotron{background-image:url('";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/images/coche.jpg"), "html", null, true);
        echo "');background-size:cover;background-position:center;color:#fff;padding:4rem;height:100vh;display:flex;flex-direction:column;justify-content:center;align-items:center;text-shadow:2px 2px 4px rgba(0,0,0,.5)}.jumbotron h1{font-weight:700;margin-bottom:20px}.jumbotron .container.text-center{padding-top:5px}.title{text-align:center;color:#000;font-weight:700;text-decoration:none;margin:20px}.title:hover{color:#555;text-decoration:underline}.grid-container{display:grid;grid-template-columns:repeat(3,1fr);grid-template-rows:repeat(2,1fr);grid-gap:10px;margin-top:20px}.grid-item{position:relative;overflow:hidden}.grid-item img{width:100%;height:100%;object-fit:cover;transition:transform .3s}.overlay{position:absolute;top:0;left:0;width:100%;height:100%;display:flex;justify-content:center;align-items:center;background-color:rgba(0,0,0,.5);opacity:0;transition:opacity .3s}.grid-item:hover .overlay{opacity:1;transform:scale(1.1)}.overlay h3{color:#fff;font-size:20px;text-align:center}.footer{background-color:#2f2f2f;border-top:1px solid #ddd;padding-top:15px;color:#fff}.footer .social-icons a{color:#999;margin-right:10px}
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"#\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coches/logo.jpg"), "html", null, true);
        echo "\" alt=\"Logo\" />
               
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\"
                aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Home</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
        echo "\">Producto</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cliente_index");
        echo "\">Cliente</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fabricante_index");
        echo "\">Fabricante</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedido_index");
        echo "\">Pedido</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class=\"jumbotron\">
        <div class=\"container text-center\">
            <h1>BIENVENIDOS A ELITE MOTORS</h1>
            <h2>Donde tus sueños automotrices se hacen realidad</h2>
        </div>
         </div>
         <h1 class=\"title\"> Nuestra gama de coches de lujo</h1>
        <div class=\"grid-container\">
    <div class=\"grid-item\">
        <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coches/blanco.jpg"), "html", null, true);
        echo "\" alt=\"Image 1\">
        <div class=\"overlay\">
            <h3>Experiencia de lujo sin igual: Descubre nuestra selección de los coches más exclusivos</h3>
        </div>
    </div>
    <div class=\"grid-item\">
        <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coches/hermoso.jpg"), "html", null, true);
        echo "\" alt=\"Image 2\">
        <div class=\"overlay\">
            <h3>Eleva tu estilo de conducción con nuestra colección de coches de lujo\"</h3>
        </div>
    </div>
    <div class=\"grid-item\">
        <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coches/lujoso.jpg"), "html", null, true);
        echo "\" alt=\"Image 3\">
        <div class=\"overlay\">
            <h3>\"Descubre el lujo en movimiento: Los coches más deslumbrantes te esperan\"</h3>
        </div>
    </div>
    <div class=\"grid-item\">
        <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coches/rojo.jpg"), "html", null, true);
        echo "\" alt=\"Image 4\">
        <div class=\"overlay\">
            <h3>La definición del lujo sobre ruedas: Explora nuestra selección exclusiva y conquista la carretera con estilo</h3>
        </div>
    </div>
    <div class=\"grid-item\">
        <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coches/verde.jpg"), "html", null, true);
        echo "\" alt=\"Image 5\">
        <div class=\"overlay\">
            <h3>El pináculo del lujo automotriz: Descubre nuestra colección de coches exclusivos y déjate llevar por el refinamiento supremo</h3>
        </div>
    </div>
    <div class=\"grid-item\">
        <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coches/gris.jpg"), "html", null, true);
        echo "\" alt=\"Image 6\">
        <div class=\"overlay\">
            <h3>\"El arte de la elegancia en movimiento: Explora nuestra gama de coches lujosos y experimenta un viaje de alto nivel\"</h3>
        </div>
    </div>
</div>

<section id=\"equipo-servicio\" class=\"bg-light py-5\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h2 class=\"mb-4\">Nuestro Equipo</h2>
                <div class=\"row\">
                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card\">
                            <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coches/asesor.jpg"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"Miembro del equipo 1\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Santiago Andrade</h5>
                                <p class=\"card-text\">Asesor de Ventas</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card\">
                            <img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coches/coordinador.jpg"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"Miembro del equipo 2\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Juan Antonio</h5>
                                <p class=\"card-text\">Coordinador de Servicio al Cliente</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card\">
                            <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coches/jefe.jpg"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"Miembro del equipo 3\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Fran Ramírez</h5>
                                <p class=\"card-text\">Jefe de Financiamiento</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <h2 class=\"mb-4\">Nuestros Servicios</h2>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coches/mantenimiento.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Servicio 1\">
                        <p>Mantenimiento y reparación de vehículos</p>
                    </div>
                    <div class=\"col-md-6\">
                        <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coches/repuestos.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Servicio 2\">
                        <p>Venta de repuestos y accesorios</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>  

  <footer class=\"footer mt-auto py-3 bg-dark\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
              
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-12 text-center\">
                <span class=\"text-muted\">@2023</span>
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-12 text-center social-icons\">
                <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                <a href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
            </div>
        </div>
    </div>
</footer>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 135,  262 => 131,  246 => 118,  234 => 109,  222 => 100,  204 => 85,  195 => 79,  186 => 73,  177 => 67,  168 => 61,  159 => 55,  140 => 39,  134 => 36,  128 => 33,  122 => 30,  116 => 27,  103 => 17,  98 => 14,  91 => 13,  81 => 9,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
    <style>
        .jumbotron h1,.jumbotron h2{font-size:40px}.navbar{background-color:#202020}.navbar-brand img{max-height:60px;margin-right:10px}.jumbotron{background-image:url('{{ asset('css/images/coche.jpg') }}');background-size:cover;background-position:center;color:#fff;padding:4rem;height:100vh;display:flex;flex-direction:column;justify-content:center;align-items:center;text-shadow:2px 2px 4px rgba(0,0,0,.5)}.jumbotron h1{font-weight:700;margin-bottom:20px}.jumbotron .container.text-center{padding-top:5px}.title{text-align:center;color:#000;font-weight:700;text-decoration:none;margin:20px}.title:hover{color:#555;text-decoration:underline}.grid-container{display:grid;grid-template-columns:repeat(3,1fr);grid-template-rows:repeat(2,1fr);grid-gap:10px;margin-top:20px}.grid-item{position:relative;overflow:hidden}.grid-item img{width:100%;height:100%;object-fit:cover;transition:transform .3s}.overlay{position:absolute;top:0;left:0;width:100%;height:100%;display:flex;justify-content:center;align-items:center;background-color:rgba(0,0,0,.5);opacity:0;transition:opacity .3s}.grid-item:hover .overlay{opacity:1;transform:scale(1.1)}.overlay h3{color:#fff;font-size:20px;text-align:center}.footer{background-color:#2f2f2f;border-top:1px solid #ddd;padding-top:15px;color:#fff}.footer .social-icons a{color:#999;margin-right:10px}
    </style>
{% endblock %}

{% block body %}
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"#\">
                <img src=\"{{ asset('css/coches/logo.jpg') }}\" alt=\"Logo\" />
               
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\"
                aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_home') }}\">Home</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_producto_index') }}\">Producto</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_cliente_index') }}\">Cliente</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_fabricante_index') }}\">Fabricante</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_pedido_index') }}\">Pedido</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class=\"jumbotron\">
        <div class=\"container text-center\">
            <h1>BIENVENIDOS A ELITE MOTORS</h1>
            <h2>Donde tus sueños automotrices se hacen realidad</h2>
        </div>
         </div>
         <h1 class=\"title\"> Nuestra gama de coches de lujo</h1>
        <div class=\"grid-container\">
    <div class=\"grid-item\">
        <img src=\"{{ asset('css/coches/blanco.jpg') }}\" alt=\"Image 1\">
        <div class=\"overlay\">
            <h3>Experiencia de lujo sin igual: Descubre nuestra selección de los coches más exclusivos</h3>
        </div>
    </div>
    <div class=\"grid-item\">
        <img src=\"{{ asset('css/coches/hermoso.jpg') }}\" alt=\"Image 2\">
        <div class=\"overlay\">
            <h3>Eleva tu estilo de conducción con nuestra colección de coches de lujo\"</h3>
        </div>
    </div>
    <div class=\"grid-item\">
        <img src=\"{{ asset('css/coches/lujoso.jpg') }}\" alt=\"Image 3\">
        <div class=\"overlay\">
            <h3>\"Descubre el lujo en movimiento: Los coches más deslumbrantes te esperan\"</h3>
        </div>
    </div>
    <div class=\"grid-item\">
        <img src=\"{{ asset('css/coches/rojo.jpg') }}\" alt=\"Image 4\">
        <div class=\"overlay\">
            <h3>La definición del lujo sobre ruedas: Explora nuestra selección exclusiva y conquista la carretera con estilo</h3>
        </div>
    </div>
    <div class=\"grid-item\">
        <img src=\"{{ asset('css/coches/verde.jpg') }}\" alt=\"Image 5\">
        <div class=\"overlay\">
            <h3>El pináculo del lujo automotriz: Descubre nuestra colección de coches exclusivos y déjate llevar por el refinamiento supremo</h3>
        </div>
    </div>
    <div class=\"grid-item\">
        <img src=\"{{ asset('css/coches/gris.jpg') }}\" alt=\"Image 6\">
        <div class=\"overlay\">
            <h3>\"El arte de la elegancia en movimiento: Explora nuestra gama de coches lujosos y experimenta un viaje de alto nivel\"</h3>
        </div>
    </div>
</div>

<section id=\"equipo-servicio\" class=\"bg-light py-5\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h2 class=\"mb-4\">Nuestro Equipo</h2>
                <div class=\"row\">
                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card\">
                            <img src=\"{{ asset('css/coches/asesor.jpg') }}\" class=\"card-img-top\" alt=\"Miembro del equipo 1\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Santiago Andrade</h5>
                                <p class=\"card-text\">Asesor de Ventas</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card\">
                            <img src=\"{{ asset('css/coches/coordinador.jpg') }}\" class=\"card-img-top\" alt=\"Miembro del equipo 2\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Juan Antonio</h5>
                                <p class=\"card-text\">Coordinador de Servicio al Cliente</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card\">
                            <img src=\"{{ asset('css/coches/jefe.jpg') }}\" class=\"card-img-top\" alt=\"Miembro del equipo 3\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Fran Ramírez</h5>
                                <p class=\"card-text\">Jefe de Financiamiento</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <h2 class=\"mb-4\">Nuestros Servicios</h2>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <img src=\"{{ asset('css/coches/mantenimiento.jpg') }}\" class=\"img-fluid\" alt=\"Servicio 1\">
                        <p>Mantenimiento y reparación de vehículos</p>
                    </div>
                    <div class=\"col-md-6\">
                        <img src=\"{{ asset('css/coches/repuestos.jpg') }}\" class=\"img-fluid\" alt=\"Servicio 2\">
                        <p>Venta de repuestos y accesorios</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>  

  <footer class=\"footer mt-auto py-3 bg-dark\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
              
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-12 text-center\">
                <span class=\"text-muted\">@2023</span>
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-12 text-center social-icons\">
                <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                <a href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
            </div>
        </div>
    </div>
</footer>

{% endblock %}
", "home/index.html.twig", "C:\\xampp\\htdocs\\F5\\simphony\\ProyectoGrupo\\tiendaSymfonyFinal\\templates\\home\\index.html.twig");
    }
}
