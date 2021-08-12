<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container-fluid">
        <h3 class="text-center py-3">Logo</h3>
    </div>

    <div class="container-fluid">
        <div class="container bg-light">
            <ul class="nav nav-justified py-2 nav-pills">

                <?php if (isset($_GET["ruta"])) : ?>
                    <?php if ($_GET["ruta"] == "registro") : ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?ruta=registro"> Registro</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?ruta=registro"> Registro</a>
                        </li>
                    <?php endif ?>

                    <?php if ($_GET["ruta"] == "ingreso") : ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?ruta=ingreso"> Ingreso</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?ruta=ingreso"> Ingreso</a>
                        </li>
                    <?php endif ?>

                    <?php if ($_GET["ruta"] == "inicio") : ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?ruta=inicio"> Inicio</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?ruta=inicio"> Inicio</a>
                        </li>
                    <?php endif ?>

                    <?php if ($_GET["ruta"] == "salir") : ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?ruta=salir">Salir</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?ruta=salir">Salir</a>
                        </li>
                    <?php endif ?>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link  active" href="index.php?ruta=registro"> Registro</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?ruta=ingreso"> Ingreso</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?ruta=inicio"> Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?ruta=salir"> Salir</a>
                    </li>

                <?php endif ?>
            </ul>

        </div>
    </div>

    <!-- contenido -->
    <div class="container-fluid">
        <div class="container py-5">
            <?php
            if (isset($_GET["ruta"])) {
                if (
                    $_GET["ruta"] == "registro" ||
                    $_GET["ruta"] == "ingreso" ||
                    $_GET["ruta"] == "editar" ||
                    $_GET["ruta"] == "inicio" ||
                    $_GET["ruta"] == "salir") {
                    include "pages/" . $_GET["ruta"] . ".php";
                    } else {
                    include "pages/error.php";
                    }
               
                }else{
                    include "pages/registro.php";
                }
            ?>
        </div>
    </div>
</body>

<script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>
</html>