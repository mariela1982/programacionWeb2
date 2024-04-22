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
<?php include ('\xampp\htdocs\programacionWeb2\header.php'); ?>


<main class="contenedor">
    <section class="eje6">
        <form method="post" enctype="multipart/form-data" action="#">
            <h2> Ejercicio 6 -- Saludo </h2>
            <img src="/programacionWeb2/cssEimagenes/Ejercicio6.png" >
            <label for="nombre"> Ingrese su nombre </label>
            <input type="text"  name="nombre" size="50" > <br>
            <label for="apellido"> Ingrese su apellido </label>
            <input type="text"  name="apellido" size="49" > <br>
            <label for="hora"> Ingrese la hora en formato numero de 24 hs  </label>
            <input type="text" name="hora" size="27" >
            <input type="submit" value="enviar">

        </form>
    </section>
    <section class="resultado">
        <h2> Resultado </h2>

        <?php

        require_once ("Saludar.php");

        if ($_SERVER ["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $hora = $_POST["hora"];

            $saludo = new Saludar($nombre,$apellido);

            $saludo->saludoInFormal($hora) . "<br>";
            $saludo->saludoFormal($hora) . "<br>";

        } else echo "no hubo datos <br>";

        echo ' <a href="http://localhost/programacionWeb2/inicio.php"><button> volver al home </button></a>';
        ?>

    </section>
</main>
</body>
</html>
<?php
?>

