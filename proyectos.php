<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Proyecto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css"> <!-- vinculo con bootstrap-->
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script><!-- para el javascrit del bootstrap nav-->
    <link rel="stylesheet" href="css/estilos.css"><!-- vinculo con estilos.css en css-->
    <link rel="shortcut icon" href="images/favicon.ico">
</head>

<body id="proyectos" class="d-flex flex-column h-100">
    <header class="container"><!-- etiquetas semanticas-->
        <nav class="navbar navbar-expand-md mb-4">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- boton hamburgesa que se despliega-->
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link px-4" href="index.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4" href="sobre-mi.html">Sobre mí</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active px-4" href="proyectos.html">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4" href="contacto.html">Contacto</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav"><!-- boton para curriculum-->
                        <li class="float-sm-end">
                            <a class="btn btn-rojo" href="contacto.html">Descargar mi CV <i
                                    class="fas fa-download"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-4 pb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 pb-3">
                <p>Los siguientes son algunos de los trabajos que he realizado:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-4 mb-3"><!-- AMB CLIENTES-->
                <div class="proyecto border">
                    <img src="images/abmclientes.png" alt="AMB Clientes" class="img-fluid"><!-- imagen-fluid aplica 100 al ancho del div-->
                    <h2 class="px-3 py-2">ABM CLIENTES</h2>
                    <p class="px-3 py-1">Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.
                    </p>
                    <div class="row px-3 py-4 pb-3"><!-- sector ver online y codigo fuente-->
                        <div class="col-6">
                            <a href="#" class="btn btn-rojo">Ver online</a> 
                        </div>
                        <div class="col-6 text-center">
                         <a href="#" class="link-rojo" target="_blank">Código fuente</a>
                        </div>                    
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 mb-3"><!-- SISTEMAS DE GESTION DE VENTAS-->
                <div class="proyecto border">
                    <img src="images/abmventas.png" alt="AMB Ventas" class="img-fluid">
                    <h2 class="px-3 py-2">SISTEMA DE GESTIÓN DE VENTAS </h2>
                    <p class="px-3 py-1">Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js,
                    Ajax, jQuery y MySQL de base de datos.</p>
                    <div class="row px-3 py-4 pb-3"><!-- sector ver online y codigo fuente-->
                        <div class="col-6">
                            <a href="#" class="btn btn-rojo">Ver online</a> <!-- boton rojo -->
                        </div>
                        <div class="col-6 text-center">
                           <a href="#" class="link-rojo" target="_blank">Código fuente</a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 mb-3"><!-- PROYECTO INTEGRADOR-->
                <div class="proyecto border">
                    <img src="images/proyecto-integrador.png" alt="Proyecto integrador" class="img-fluid">
                    <h2 class="px-3 py-2">PROYECTO INTEGRADOR</h2><!-- separo 2 alto y bajo y de los costados-->
                    <p class="px-3 py-1">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago
                    con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.</p>
                    <div class="row px-3 py-4 pb-3"><!-- sector ver online y codigo fuente-->
                        <div class="col-6">
                            <a href="#" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="http://" class="link-rojo" target="_blank">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <footer class="container mt-auto py-4">
        <!-- class magic top automatico para ajustar por boostrap - padding boton 3-->
        <!-- redes sociales para google class container para decir que es en bootstrap-->
        <div class="row">

            <div class="col-12 col-sm-3">
                <a href="https://github.com" title="Github" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/nicol%C3%A1s-maure-3b895511a/" title="Linkedin" target="_blank"><i
                        class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3">
                Sponsor <a href="https://depcsuite.com" target="_blank">DePC Suite</a>
            </div>
            <div class="col-12 col-sm-3">
                <a href="mailto:nicomau@gmail.com">nicomau@gmail.com</a>
            </div>
        </div>
        <a href="https://api.whatsapp.com/send?phone=+542613315566" target="_blank"><i
                class="fa-brands fa-whatsapp px-3 pt-3 pb-4"></i></a>
    </footer>
</body>

</html>