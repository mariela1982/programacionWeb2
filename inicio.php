<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="cssEimagenes/estilo.css">
    <title>Trabajos Practicos</title>
</head>
<body>
<?php include ('header.php'); ?>

<main class="contenedor">
    <section class="eje1">
        <h2> Ejercicio 1 -- el semaforo </h2>
        <img src="cssEimagenes/Ejercicio1.png" >
    <form method="post" enctype="multipart/form-data" action="Ejercicio1/procesar1.php" >
        <label for="ejercicio1"> Semaforo color  </label>
        <select name="ejercicio1" id="ejercicio1">
            <option value="noAnda" selected>No funciona</option>
            <option value="rojo">rojo</option>
            <option value="amarillo">amarillo</option>
            <option value="verde">verde</option>
        </select>
        <input type="submit" value="enviar">
    </form>
    </section>
    <section class="eje2">
        <form method="post" enctype="multipart/form-data" action="Ejercicio2/procesar2.php">
            <h2>Ejercicio 2-- Binomio cuadrado Perfecto </h2>
            <img src="cssEimagenes/Ejercicio2.png" >
            <label for="eje2a"> Ingrese numero para el valor a </label>
            <input type="text" name="eje2a" size="10"> <br>
            <label for="eje2b"> Ingrese numero para el valor b </label>
            <input type="text" name="eje2b" size="10">
            <input type="submit" value="enviar">
        </form>
    </section>
    <section class="eje3">
        <form method="post" enctype="multipart/form-data" action="Ejercicio3/procecar3.php">
            <h2> Ejercicio 3 -- concatenar texto </h2>
            <img src="cssEimagenes/Ejercicio3.png" >
            <label for="eje3a"> Ingrese oracion a </label>
            <input type="text"  name="eje3a" size="50"> <br>
            <label for="eje3b">Ingrese oracion b </label>
            <input type="text" name="eje3b" size="50" >
            <input type="submit" value="enviar">
        </form>
    </section>
    <section class="eje4">
        <form method="post" enctype="multipart/form-data" action="Ejercicio4/procesar4.php">
            <h2> Ejercicio 4 -- Incremento por referencia  </h2>
            <img src="cssEimagenes/Ejercicio4.png" >
            <label for="num"> Ingrese un numero </label>
            <input type="text"  name="num" size="50" >
            <input type="submit" value="enviar">

        </form>
    </section>
    <section class="eje5">
        <form method="post" enctype="multipart/form-data" action="Ejercicio5/procesar5.php">
            <h2> Ejercicio 5 -- sumatoria de arrays  </h2>
            <img src="cssEimagenes/Ejercicio5.png" >
            <label for="num_array"> Ingrese algunos numero  con el formato 2,3,5,19(entre comas) </label><br>
            <input type="text"  name="num_array" size="50" >
            <input type="submit" value="enviar">

        </form>
    </section>
    <section class="eje6">
        <form method="post" enctype="multipart/form-data" action="Ejercicio6/procesar6.php">
            <h2> Ejercicio 6 -- Saludo </h2>
            <img src="cssEimagenes/Ejercicio6.png" >
            <label for="nombre"> Ingrese su nombre </label>
            <input type="text"  name="nombre" size="50" > <br>
            <label for="apellido"> Ingrese su apellido </label>
            <input type="text"  name="apellido" size="49" > <br>
            <label for="hora"> Ingrese la hora en formato numero de 24 hs  </label>
            <input type="text" name="hora" size="27" >
            <input type="submit" value="enviar">

        </form>
    </section>



</main>

</body>
</html>
<?php
    ?>




