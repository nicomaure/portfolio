<?php $pg = "contacto"; 




?>

<!DOCTYPE html>
<html lang="es" class="h-100"> <!-- height de 100 para que tome un alto todo el documento de 100-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css"> <!-- vinculo con bootstrap-->
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script><!-- para el javascrit del bootstrap nav-->
    <link rel="stylesheet" href="css/estilos.css"><!-- vinculo con estilos.css en css-->
    <link rel="shortcut icon" href="images/favicon.ico">
</head>

<body id="contacto" class="d-flex flex-column h-100"> <!-- id para referenciar 100 para el body -->
    <header class="container"><!-- etiquetas semanticas-->
        <?php include_once("menu.php"); ?>
    </header>
    <main class="container">
        <div class="row"> <!-- div.row -->
            <div class="col-12 pt-4 pb-5"> <!-- separo contacto con padding top(Arriba) y button(Abajo) -->
                <h1>Gracias por contactarte,</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6"> <!-- para celular col 12 o 6 para tablet en adalante-->
                <p>Te estare respondiendo a la brevedad.</p>
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