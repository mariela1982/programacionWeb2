<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trabajos Practicos</title>
</head>
<body>
<header> <h1>Trabajos Practicos / Mariela Manrique </h1>  </header>
<main>
    <section class="eje1">
        <h2> Ejercicio 1 -- el semaforo </h2>
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
            <label for="eje2a"> ingrese numero para el valor a </label>
            <input type="text" name="eje2a" size="10"> <br>
            <label for="eje2b"> ingrese numero para el valor b </label>
            <input type="text" name="eje2b" size="10">
            <input type="submit" value="enviar">
        </form>
    </section>
    <section class="eje3">
        <form method="post" enctype="multipart/form-data" action="Ejercicio3/procecar3.php">
            <h2> Ejercicio 3 -- concatenar texto </h2>
            <label for="textA"> ingrese oracion a </label>
            <input type="text" size="100" name="textA" placeholder="ingrese una oracion"> <br>
            <label for="textB">ingrese oracion b </label>
            <input type="text" size="100" name="textB" placeholder="ingrese una orarion "> <br>
            <input type="submit" value="enviar">
        </form>
    </section>

</main>

</body>
</html>
<?php
    ?>




