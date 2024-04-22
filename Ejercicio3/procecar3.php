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

    <section class="eje3">
        <form method="post" enctype="multipart/form-data" action="#">
            <h2> Ejercicio 3 -- concatenar texto </h2>
            <img src="/programacionWeb2/cssEimagenes/Ejercicio3.png" >
            <label for="eje3a"> Ingrese oracion a </label>
            <input type="text"  name="eje3a" size="50"> <br>
            <label for="eje3b">Ingrese oracion b </label>
            <input type="text" name="eje3b" size="50" >
            <input type="submit" value="enviar">
        </form>
    </section>
   <section class="resultado">
       <h2> Resultado </h2>
    <?php

    require_once ("concatena.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST"){


        $t1 = $_POST [ 'eje3a'];
        $t2 = $_POST [ 'eje3b'];


        $c = concatenarCadena($t1, $t2);

        echo "la concatenacion quedo asi con las palabras que usted ingreso " . $c . "<br>";

    } else {
        echo "no se ingreso oracion";}

    echo ' <a href="http://localhost/programacionWeb2/inicio.php"><button> volver al home </button></a>';

    ?>

    </section>
</main>
</body>
</html>
<?php
?>








