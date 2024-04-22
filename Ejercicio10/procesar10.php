<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/programacionWeb2/cssEimagenes/estilo.css">
    <title>Trabajos Practicos</title>
</head>
<body>
<?php
include ('\xampp\htdocs\programacionWeb2\header.php');
?>


<main class="contenedor">
    <h3> Imagen Elegida</h3>

    <?php


    $imagen = isset($_GET["imagen"]) ? $_GET["imagen"] : "";
    echo "<p>" . str_replace(".jpg", "", $imagen) . "</p>";
    echo '<img src="' . "../Ejercicio9/im/" . $imagen . '" alt="' . $imagen . '" style="width: 300px; margin: 20px 0px 5px 0px">';

    ?>

    <?php

    echo ' <a href="http://localhost/programacionWeb2/inicio.php"><button> Home </button></a>';
    echo ' <a href="http://localhost/programacionWeb2/Ejercicio9/procesar9.php"><button> Volver a ver imagenes  </button></a>';
    ?>
</main>

</body>
</html>

