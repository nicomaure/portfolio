<?php $pg = "sobre-mi"; 
?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sobre mí</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css"> <!-- vinculo con bootstrap-->
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script><!-- para el javascrit del bootstrap nav-->
    <link rel="stylesheet" href="css/estilos.css"><!-- vinculo con estilos.css en css-->
    <link rel="shortcut icon" href="images/favicon.ico">
</head>

<body id="sobre-mi" class="d-flex flex-column h-100">
    <header class="container"><!-- etiquetas semanticas-->
        <?php include_once("menu.php"); ?>
    </header>
    <main>
        <section id="bio" class="container">
            <div class="row">
                <div class="col-12 col-sm-7">
                    <h1 class="col-12 py-5">Sobre mí</h1>
                    <p class="">Apasionado por la tecnología y la informática. Estudiante del curso de programación Full
                        Stack
                        DepcSuite.</p>
                    <a href="contacto.php" class="btn btn-rojo my-5 d-none d-sm-block w-25">Enviar mensaje</a>
                </div>
                <div class="col-10 col-sm-3 py-5 pe-5 d-none d-sm-block">
                    <img src="images/perfil.png" alt="Nico" class="img-fluid">
                </div>
                <div class="col-6 d-sm-block d-sm-none py-3">
                    <img src="images/perfil.png" alt="Nico" class="img-fluid">
                </div>
                <div class="col-6 d-sm-block d-sm-none py-3">
                    <a href="contacto.html" class="btn btn-rojo my-5 d-sm-none d-sm-block">Enviar mensaje</a>
                </div>
            </div>
        </section>
        <section id="stack">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="py-5">Stack tecnológico</h2>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Javascript</h3>
                            <i class="fa-brands fa-js pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">PHP</h3>
                            <i class="fa-brands fa-php pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">HTML</h3>
                            <i class="fa-brands fa-html5 pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">API Rest</h3>
                            <i class="fa-solid fa-gears pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Laravel</h3>
                            <i class="fa-brands fa-laravel pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Bootstrap</h3>
                            <i class="fa-brands fa-bootstrap pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">MySQL</h3>
                            <i class="fa-solid fa-database pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">CSS</h3>
                            <i class="fa-brands fa-css3-alt pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Git</h3>
                            <i class="fa-brands fa-git pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">React.js</h3>
                            <i class="fa-brands fa-react pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Mercadopago</h3>
                            <i class="fa-solid fa-wallet pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Amazon AWS</h3>
                            <i class="fa-brands fa-aws pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Linux</h3>
                            <i class="fa-brands fa-linux pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Apache</h3>
                            <i class="fa-solid fa-server pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Paypal</h3>
                            <i class="fa-brands fa-paypal pb-5"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="experiencia" class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="pt-5 pb-4">Experiencia laboral</h2>
                </div>
            </div>
            <div class="row shadow">
                <div class="col-sm-2 d-none d-sm-block p-5"><!-- d-none no muestra en movile la imagen y d-sm-block muestra en tables en adelante-->
                    <img src="images/logo-dge.png" alt="DGE Direccion General de Escuelas" class="img-fluid">
                </div>
                <div class="col-sm-10 col-12 my-3">
                    <h3>Administrador de Red</h3>
                    <h4>Dirección General de Escuelas - Provincia de Mendoza</h4>
                    <h5>2011 - presente</h5>
                    <p>Responsable de la gestión del servidor escolar Debian y del soporte
                        informático. Formación de estudiantes y docentes en TIC. Gestión de la
                        plataforma Moodle y dominio avanzado del sistema GEM.</p>
                </div>
                <div class="col-sm-2 d-none d-sm-block p-5">
                    <img src="images/logo-ecipsa.png" alt="Grupo ECIPSA" class="img-fluid">
                </div>
                <div class="col-sm-10 col-12 my-3">
                    <h3>Soporte Informático</h3>
                    <h4>ECIPSA - Provincia de Mendoza</h4>
                    <h5>ene 2005 - ene 2006</h5>
                    <p>Responsable del departamento de sistemas en Mendoza, brindando soporte
                        informático a las oficinas administrativas y en la oficina técnica de ECIPSA.
                        Configuración de puntos de acceso, routers, software contable, redes, respaldo
                        de documentos y correos electrónicos, laptops, etc.</p>
                </div>
                <div class="col-sm-2 d-none d-sm-block p-5">
                    <img src="images/cocacola-logo.png" alt="Coca-Cola" class="img-fluid">
                </div>
                <div class="col-sm-10 col-12 my-3">
                    <h3>Field Support</h3>
                    <h4>Coca-Cola Argentina - Provincia de Mendoza</h4>
                    <h5>jul 2004 - jun 2005</h5>
                    <p>Soporte en campo dentro del departamento de sistemas, brindando asistencia
                        técnica a los empleados de Coca-Cola en problemas relacionados con
                        programas, redes y PC.</p>
                </div>
               
            </div>
        </section>
        <section id="formacion" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2>Formación académica</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded p-1">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 px-1 my-auto d-none d-sm-block">
                            <img src="images/logo-uncu.png" class="img-fluid baw" title="UNC">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Técnico en Higiene y Seguridad Industrial</h3>
                            <h4>Univeridad Nacional de Cuyo</h4>
                            <h5>2007 – 2008</h5>
                            <p>https://www.uncuyo.edu.ar/</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 px-0  my-auto d-none d-sm-block">
                            <img src="images/logo-aconcagua.png" class="img-fluid baw" title="Aconcagua">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Licenciatura en Higiene y Seguridad Industrial</h3>
                            <h4>Universidad del Aconcagua</h4>
                            <h5>2008 – 2011</h5>
                            <p>Cursado completo - 3 materias para completar<br>
                                https://www.uda.edu.ar/</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block text-center">
                            <i class="fa-solid fa-landmark" alt="San Pablo"></i>
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Técnico Electricista Industrial</h3>
                            <h4>Instituto San Pablo</h4>
                            <h5>1993 – 1999</h5>
                            <p>http://isanpablo.com/</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section id="formacion" class="container mb-5">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2>Cursos de desarrollo profesional</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded p-1">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/logo-dge.png" class="img-fluid baw" title="DGE">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Integración Digital Educativa,</h3>
                            <h4>Dirección General de Escuelas</h4>
                            <h5>Expedición: may 2016</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/logo-ibm.png" class="img-fluid baw" title="IBM">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Operador de PC</h3>
                            <h4>IBM Training Center</h4>
                            <h5>Expedición: dic 1995</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/logo-argprograma.png" class="img-fluid baw" title="Argentina Programa">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>#SéProgramar</h3>
                            <h4>Argentina Programa</h4>
                            <h5>Expedición: may 2022</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/egg-logo.png" class="img-fluid baw" title="Egg">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Programación Web desde cero</h3>
                            <h4>Egg</h4>
                            <h5>Expedición: may 2023</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/logo-coderhouse.png" class="img-fluid baw" title="Inglés">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Inglés Nivel Elementary</h3>
                            <h4>CODERHOUSE</h4>
                            <h5>Expedición: jul 2023</h5>
                            <p></p>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block text-center">
                            <i class="fa-solid fa-landmark" alt="Francés"></i>
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Francés A2</h3>
                            <h4>Alianza Francesa</h4>
                            <h5>Expedición: ago 2023</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>         
        </section>
        <section id="idiomas">
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row mr-sm-1 bg-white card-idioma shadow me-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="col-8 p-5 pb-3">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>ESPAÑOL - Nativo</li>
                                    <li>INGLÉS - Técnico</li>
                                    <li>FRANCÉS - A2</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="row ml-sm-2 bg-white card-idioma shadow ms-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>HOBBIES</h2>
                                <ul>
                                    <li>Bicicleta</li>
                                    <li>Futbol</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </section>
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
                Sponsor <a href="https://lujantech.com.ar" target="_blank">lujantech</a>
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