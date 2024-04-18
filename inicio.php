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
            <label for="eje3a"> ingrese oracion a </label>
            <input type="text"  name="eje3a" size="50"> <br>
            <label for="eje3b">ingrese oracion b </label>
            <input type="text" name="eje3b" size="50" > <br>
            <input type="submit" value="enviar">
        </form>
    </section>
    <section class="eje4">
        <form method="post" enctype="multipart/form-data" action="Ejercicio4/procesar4.php">
            <h2> Ejercicio 4 -- incremento por referencia  </h2>
            <label for="num"> ingrese un numero </label>
            <input type="text"  name="num" size="50" > <br>
            <input type="submit" value="enviar">

        </form>
    </section>
    <section class="eje5">
        <form method="post" enctype="multipart/form-data" action="Ejercicio5/procesar5.php">
            <h2> Ejercicio 5 -- sumatoria de arrays  </h2>
            <label for="num_array"> ingrese algunos numero  con el formto 2,3,5,19 </label>
            <input type="text"  name="num_array" > <br>
            <input type="submit" value="enviar">

        </form>
    </section>
    <section class="eje6">
        <form method="post" enctype="multipart/form-data" action="Ejercicio6/procesar6.php">
            <h2> Ejercicio 6 saludo </h2>
            <label for="nombre"> ingrese su nombre </label>
            <input type="text"  name="nombre" > <br>
            <label for="apellido"> ingrese su apellido </label>
            <input type="text"  name="apellido" > <br>
            <label for="hora"> ingrese la hora en formato numero de 24 hs  </label>
            <input type="text" name="hora" > <br>
            <input type="submit" value="enviar">

        </form>
    </section>


</main>

</body>
</html>
<?php
    ?>




