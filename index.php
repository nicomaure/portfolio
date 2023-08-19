<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css"> <!-- vinculo con bootstrap-->
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script><!-- para el javascrit del menu contraible del bootstrap nav-->
    <link rel="stylesheet" href="css/estilos.css"><!-- vinculo con estilos.css en css-->
    <link rel="shortcut icon" href="images/favicon.ico">
</head>
<body id="inicio" class="d-flex flex-column h-100">
    <header class="container"><!-- etiquetas semanticas-->
        <nav class="navbar navbar-expand-md">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- boton hamburgesa que se despliega-->
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active px-4" href="index.html">Inicio</a> <!-- para que se vea mas oscuro el link donde me encuentro-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4" href="sobre-mi.html">Sobre mí</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4" href="proyectos.html">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4" href="contacto.html">Contacto</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
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
            <div class="col-12 mt-4 text-center div-cohete">
                <a href="proyectos.html"><img src="images/cohete.svg" alt="cohete"></a>    
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center mb-3 offset-sm-3">
                <p class="py-1">Bienvenid@ a mi sitio web sobre desarrollo de sistemas.</p>
                
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="proyectos.html" class="btn btn-blanco">Conoce mis proyectos</a>
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
