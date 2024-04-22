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
        <form method="post" enctype="multipart/form-data" action="mostrarDado.php">
            <h2> Ejercicio 11 -- lanzar dados </h2>

            <label for="cantidadDeDados"> Seleccione la cantidad de dados que quiere tirar </label>
           <select name="cantidadDeDados" id="cantidadDeDados">
               <option value="1">Dados 1</option>
               <option value="2">Dados 2 </option>
               <option value="3">Dados 3 </option>
               <option value="4">Dados 4 </option>
               <option value="5">Dados 5 </option>
               <option value="6">Dados 6 </option>

            <input type="submit" value="Lanzar dados">

        </form>
    </section>
    <section class="resultado">


        <?php

        echo ' <a href="http://localhost/programacionWeb2/inicio.php"><button> volver al home </button></a>';
        ?>

    </section>
</main>
</body>
</html>



