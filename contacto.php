<?php $pg = "contacto"; 

if($_POST){
    $nombre = $_POST¨["txtNombre"];
    $correo = $_POST ["txtCorreo"];
    $telefono = $_POST["txtTelefono"];
    $mensaje = $_POST["txtMensaje"];

    //Varios destinatarios
    $para = "nicomau@gmail.com";
    $titulo = 'Recibiste un mensaje desde tu Web';

    //mensaje
    $cuerpo = "
    Nombre: $nombre <br>
    Correo: $correo <br>
    Telefono: $telefono <br>
    Mensaje: $mensaje
    ";

    // Para enviar un correo HTML, debe establecerce la cabecera Content-type
    $cabeceras = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

    // Cabecera adicionales
    $cabeceras .= 'To: nicomau@gmail.com' . "\r\n";
    $cabeceras .= 'From: contacto@nmaure.com.ar' . "\r\n";

    // Enviarlo
    // mail($para, $titulo, $cuerpo, $cabeceras);
    header("Location: confirmacion-envio.php");
}


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
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6"> <!-- para celular col 12 o 6 para tablet en adalante-->
                <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
            </div>
            <div class="col-12 col-sm-6"><!-- para celular col 12 o 6 para tablet en adalante-->
                <form action="" method="POST"> <!-- se escribe POST en Mayus-->
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre"
                            class="form-control shadow">
                        <!-- class="form-control" estira y redondea las filas del formulario-->
                        <!-- formulario parte Nombre, caputra mame php y id javascrpit, placeholder para poner Nombre dentro-->
                    </div>
                    <div class="pb-3"> <!-- padding button 3 para bajar -->
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo"
                            class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/Whatsapp"
                            class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje"
                            class="form-control shadow"></textarea>
                    </div>
                    <div class="pb-3">
                        <button type="submit" name="btnEnviar" id=btnEnviar class="btn btn-blanco px-3">ENVIAR</button>
                        <!-- class btn para sacar recuadro del boton-->
                    </div>
                </form>
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