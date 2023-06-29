<?php
$pg = "inicio";

?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Inicio</title>
</head>

<body id="inicio" class="d-flex flex-column h-100">
    <header class="container">
    <?php include_once("menu.php");?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-4 text-center div-cohete">
                <a href="proyectos.html"><img src="images/cohete.svg"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center mb-3 offset-sm-3">
                <p class="py-1">Bienvenid@ a mi sitio web sobre desarrollo de sistemas.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="proyectos.php" class="btn btn-blanco">Conoce mis proyectos</a>
            </div>
        </div>
    </main>

    <footer class="container mt-auto py-4">
        <div class="whatsapp">
            <a href="https://api.whatsapp.com/send?phone=573103064152" target="_blank" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
        </div>
        <div class="row">
            <div class="col-12 col-sm-3">
                <a href="https://github.com/davidliduena" target="_blank" title="Github"><i class="fab fa-github"></i></a>

                <a href="https://www.linkedin.com/in/david-lidueña-39b8551a1/" target="_blank" title="Linkedin"><i
                        class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3">
             Sponsor <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE">DePC Suite</a>
            </div>
            <div class="col-12 col-sm-3 text-sm-start">
                <a href="mailto:davidliduena13@gmail.com">davidliduena13@gmail.com</a>
            </div>
        </div>
    </footer>
</body>

</html>