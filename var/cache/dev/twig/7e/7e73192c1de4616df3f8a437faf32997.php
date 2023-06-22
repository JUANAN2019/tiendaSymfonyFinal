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
        .navbar {
            background-color: #202020;
        }

        .navbar-brand img {
            max-height: 60px;
            margin-right: 10px;
         
        }
  .jumbotron {
            background-image: url('";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/images/coche.jpg"), "html", null, true);
        echo "');
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 4rem;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            
            
        }

  .jumbotron h1 {
    font-size: 40px;
    font-weight: bold;
    margin-bottom: 20px;
  }

  .jumbotron h2 {
    font-size: 40px;
  }

     .jumbotron .container.text-center {
    padding-top: 5px; /* Ajusta el valor según sea necesario */
  }
     
    .title {
    text-align: center;
    color: black;
    font-weight: bold;
    text-decoration: none;
    margin: 20px;
  }

  .title:hover {
    color:  #555555;
    text-decoration: underline;
  }
       
     .grid-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: repeat(2, 1fr);
    grid-gap: 10px;
    margin-top: 20px;
}

.grid-item {
    position: relative;
    overflow: hidden;
   
 
}

.grid-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
      transition: transform 0.3s ease;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgba(0, 0, 0, 0.5);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.grid-item:hover .overlay {
    opacity: 1;
     transform: scale(1.1);
    
}

.overlay h3 {
    color: #fff;
    font-size: 20px;
    text-align: center;
}


footer{
\tdisplay: inline-flex;
  \tflex-wrap: nowrap;
\twidth: 100%;
\tbackground-color: rgb(179, 179, 179);
\ttext-align: center;
}
footer h2{
\tfont-size: 1.7em;
}
footer p{
\ttext-emphasis: center;
\tpadding: 30px;
}
footer a{
\tcolor: black;
    text-decoration: none;
}
footer div{
\twidth: 33%;
\tmargin: 10px;
\tpadding: 15px;
}
footer div ul{
    margin-top: 20px;
\tlist-style-type: none;
}
footer div ul li{
\tmargin: 5px;
    font-size: 1em;
}
footer div input{
\tpadding: 2px;
\tmargin-top: 1px;
    margin-bottom: -2px;
\tfont-size: 1em;
\twidth: 200px;
    height: 30px;
    background-color: #df6c00;
}
footer div button{
\tbackground-color:#df6c00;
\tcolor: white;
\tpadding: 2px;
\tmargin-top: 5px;
\tfont-size: 1.1em;
\twidth: 200px;
\tborder: none;
}
.last{
\ttext-align: center;
}

.color{
\tcolor: rgba(108, 100, 100, 1);
\tdisplay: flex;
  \tflex-wrap: wrap;
\tjustify-content: space-between;
\tborder-top: 1px solid #3f3f3f;
\tfont-size: 0.8em;
}

/* ajustes de la zona de copyright y grupo de creación por SANTI */
.color div{
    color: #3a3a3a;
    text-align: justify;
    margin: 10px;
    margin-left: 10%;
}

@media screen and (max-width:900px){
    footer{
        display: block;
        padding: 1px;
    }
    footer div{
        width: auto;
    }
    .color div{
        margin: 5px 10px;
        padding: 5px 10px;
    }
    .last{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
}
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 201
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 202
        echo "    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"#\">
                <img src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coches/em2.png"), "html", null, true);
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
        // line 215
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Home</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 218
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
        echo "\">Producto</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 221
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cliente_index");
        echo "\">Cliente</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 224
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fabricante_index");
        echo "\">Fabricante</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 227
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
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coches/blanco.jpg"), "html", null, true);
        echo "\" alt=\"Image 1\">
        <div class=\"overlay\">
            <h3>Experiencia de lujo sin igual: Descubre nuestra selección de los coches más exclusivos</h3>
        </div>
    </div>
    <div class=\"grid-item\">
        <img src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coches/vintage.jpg"), "html", null, true);
        echo "\" alt=\"Image 2\">
        <div class=\"overlay\">
            <h3>Eleva tu estilo de conducción con nuestra colección de coches de lujo\"</h3>
        </div>
    </div>
    <div class=\"grid-item\">
        <img src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coches/lujoso.jpg"), "html", null, true);
        echo "\" alt=\"Image 3\">
        <div class=\"overlay\">
            <h3>\"Descubre el lujo en movimiento: Los coches más deslumbrantes te esperan\"</h3>
        </div>
    </div>
    <div class=\"grid-item\">
        <img src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coches/rojo.jpg"), "html", null, true);
        echo "\" alt=\"Image 4\">
        <div class=\"overlay\">
            <h3>La definición del lujo sobre ruedas: Explora nuestra selección exclusiva y conquista la carretera con estilo</h3>
        </div>
    </div>
    <div class=\"grid-item\">
        <img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coches/bugatti.jpg"), "html", null, true);
        echo "\" alt=\"Image 5\">
        <div class=\"overlay\">
            <h3>El pináculo del lujo automotriz: Descubre nuestra colección de coches exclusivos y déjate llevar por el refinamiento supremo</h3>
        </div>
    </div>
    <div class=\"grid-item\">
        <img src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coches/mclaren.jpg"), "html", null, true);
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
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coches/Santi.jpg"), "html", null, true);
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
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coches/Juanan.jpg"), "html", null, true);
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
        // line 306
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coches/Fran.jpg"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"Miembro del equipo 3\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Fran Ramírez</h5>
                                <p class=\"card-text\">Director<br>técnico</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card\">
                            <img src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coches/Marcela.jpg"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"Miembro del equipo 1\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Marcela Romero</h5>
                                <p class=\"card-text\">Directora de Marketing</p>
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
        // line 328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coches/mantenimiento.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Servicio 1\">
                        <p>Mantenimiento y reparación de vehículos</p>
                    </div>
                    <div class=\"col-md-6\">
                        <img src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coches/repuestos.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Servicio 2\">
                        <p>Venta de repuestos y accesorios</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>  

    <footer>
    \t<div>
            <h2>Sobre EM</h2>
            <ul>
                <li>Historia</li>
                <li><a href=\"\">Protección de datos</a></li>
                <li><a href=\"\">Cookies</a></li>
            </ul>
        </div>
        <div>
            <h2>Engánchate al motor</h2>
            <ul>
                <li>Selección de vehículos</li>
            </ul>
        </div>
        <div>
            <h2>¡Síguenos! :)</h2>
            <ul>
                <li><a href=\"\" target=\"_blank\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i> Facebook</a></li>
                <li><a href=\"https://www.instagram.com/b.santiago12/\" target=\"_blank\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i> Instagram</a></li>
            </ul>
        </div>
        <div class=\"last\">
            <h2>¿Quieres comprar un deportivo?<br> ¡Déjanos tu contacto!</h2>
            <form class=\"formulario\"action=\"\" method=\"get\">
                <input type=\"email\" placeholder=\"Email\" required id=\"emailField\">
                <button id=\"buttonValidar\" type=\"submit\">Solicitar</button>
            </form>
        </div>
    </footer>
    <footer class=\"color\">
        <div>Developed by Grupo EM</div>
        <div>Copyright 2023 © Every rigths reserved.</div>
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
        return array (  469 => 332,  462 => 328,  446 => 315,  434 => 306,  422 => 297,  410 => 288,  392 => 273,  383 => 267,  374 => 261,  365 => 255,  356 => 249,  347 => 243,  328 => 227,  322 => 224,  316 => 221,  310 => 218,  304 => 215,  291 => 205,  286 => 202,  279 => 201,  91 => 19,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
    <style>
        .navbar {
            background-color: #202020;
        }

        .navbar-brand img {
            max-height: 60px;
            margin-right: 10px;
         
        }
  .jumbotron {
            background-image: url('{{ asset('css/images/coche.jpg') }}');
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 4rem;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            
            
        }

  .jumbotron h1 {
    font-size: 40px;
    font-weight: bold;
    margin-bottom: 20px;
  }

  .jumbotron h2 {
    font-size: 40px;
  }

     .jumbotron .container.text-center {
    padding-top: 5px; /* Ajusta el valor según sea necesario */
  }
     
    .title {
    text-align: center;
    color: black;
    font-weight: bold;
    text-decoration: none;
    margin: 20px;
  }

  .title:hover {
    color:  #555555;
    text-decoration: underline;
  }
       
     .grid-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: repeat(2, 1fr);
    grid-gap: 10px;
    margin-top: 20px;
}

.grid-item {
    position: relative;
    overflow: hidden;
   
 
}

.grid-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
      transition: transform 0.3s ease;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgba(0, 0, 0, 0.5);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.grid-item:hover .overlay {
    opacity: 1;
     transform: scale(1.1);
    
}

.overlay h3 {
    color: #fff;
    font-size: 20px;
    text-align: center;
}


footer{
\tdisplay: inline-flex;
  \tflex-wrap: nowrap;
\twidth: 100%;
\tbackground-color: rgb(179, 179, 179);
\ttext-align: center;
}
footer h2{
\tfont-size: 1.7em;
}
footer p{
\ttext-emphasis: center;
\tpadding: 30px;
}
footer a{
\tcolor: black;
    text-decoration: none;
}
footer div{
\twidth: 33%;
\tmargin: 10px;
\tpadding: 15px;
}
footer div ul{
    margin-top: 20px;
\tlist-style-type: none;
}
footer div ul li{
\tmargin: 5px;
    font-size: 1em;
}
footer div input{
\tpadding: 2px;
\tmargin-top: 1px;
    margin-bottom: -2px;
\tfont-size: 1em;
\twidth: 200px;
    height: 30px;
    background-color: #df6c00;
}
footer div button{
\tbackground-color:#df6c00;
\tcolor: white;
\tpadding: 2px;
\tmargin-top: 5px;
\tfont-size: 1.1em;
\twidth: 200px;
\tborder: none;
}
.last{
\ttext-align: center;
}

.color{
\tcolor: rgba(108, 100, 100, 1);
\tdisplay: flex;
  \tflex-wrap: wrap;
\tjustify-content: space-between;
\tborder-top: 1px solid #3f3f3f;
\tfont-size: 0.8em;
}

/* ajustes de la zona de copyright y grupo de creación por SANTI */
.color div{
    color: #3a3a3a;
    text-align: justify;
    margin: 10px;
    margin-left: 10%;
}

@media screen and (max-width:900px){
    footer{
        display: block;
        padding: 1px;
    }
    footer div{
        width: auto;
    }
    .color div{
        margin: 5px 10px;
        padding: 5px 10px;
    }
    .last{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
}
    </style>
{% endblock %}

{% block body %}
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"#\">
                <img src=\"{{ asset('css/coches/em2.png') }}\" alt=\"Logo\" />
               
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
        <img src=\"{{ asset('css/coches/vintage.jpg') }}\" alt=\"Image 2\">
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
        <img src=\"{{ asset('css/coches/bugatti.jpg') }}\" alt=\"Image 5\">
        <div class=\"overlay\">
            <h3>El pináculo del lujo automotriz: Descubre nuestra colección de coches exclusivos y déjate llevar por el refinamiento supremo</h3>
        </div>
    </div>
    <div class=\"grid-item\">
        <img src=\"{{ asset('css/coches/mclaren.jpg') }}\" alt=\"Image 6\">
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
                            <img src=\"{{ asset('css/coches/Santi.jpg') }}\" class=\"card-img-top\" alt=\"Miembro del equipo 1\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Santiago Andrade</h5>
                                <p class=\"card-text\">Asesor de Ventas</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card\">
                            <img src=\"{{ asset('css/coches/Juanan.jpg') }}\" class=\"card-img-top\" alt=\"Miembro del equipo 2\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Juan Antonio</h5>
                                <p class=\"card-text\">Coordinador de Servicio al Cliente</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card\">
                            <img src=\"{{ asset('css/coches/Fran.jpg') }}\" class=\"card-img-top\" alt=\"Miembro del equipo 3\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Fran Ramírez</h5>
                                <p class=\"card-text\">Director<br>técnico</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card\">
                            <img src=\"{{ asset('css/coches/Marcela.jpg') }}\" class=\"card-img-top\" alt=\"Miembro del equipo 1\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Marcela Romero</h5>
                                <p class=\"card-text\">Directora de Marketing</p>
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

    <footer>
    \t<div>
            <h2>Sobre EM</h2>
            <ul>
                <li>Historia</li>
                <li><a href=\"\">Protección de datos</a></li>
                <li><a href=\"\">Cookies</a></li>
            </ul>
        </div>
        <div>
            <h2>Engánchate al motor</h2>
            <ul>
                <li>Selección de vehículos</li>
            </ul>
        </div>
        <div>
            <h2>¡Síguenos! :)</h2>
            <ul>
                <li><a href=\"\" target=\"_blank\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i> Facebook</a></li>
                <li><a href=\"https://www.instagram.com/b.santiago12/\" target=\"_blank\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i> Instagram</a></li>
            </ul>
        </div>
        <div class=\"last\">
            <h2>¿Quieres comprar un deportivo?<br> ¡Déjanos tu contacto!</h2>
            <form class=\"formulario\"action=\"\" method=\"get\">
                <input type=\"email\" placeholder=\"Email\" required id=\"emailField\">
                <button id=\"buttonValidar\" type=\"submit\">Solicitar</button>
            </form>
        </div>
    </footer>
    <footer class=\"color\">
        <div>Developed by Grupo EM</div>
        <div>Copyright 2023 © Every rigths reserved.</div>
    </footer>

{% endblock %}", "home/index.html.twig", "C:\\Users\\bryam santiago\\Desktop\\tiendaSymfonyFinal\\templates\\home\\index.html.twig");
    }
}
