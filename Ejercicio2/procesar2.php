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
    <section class="eje2">
        <form method="post" enctype="multipart/form-data" action="#">
            <h2>Ejercicio 2-- Binomio cuadrado Perfecto </h2>
            <img src="/programacionWeb2/cssEimagenes/Ejercicio2.png" >
            <label for="eje2a"> Ingrese numero para el valor a </label>
            <input type="text" name="eje2a" size="10"> <br>
            <label for="eje2b"> Ingrese numero para el valor b </label>
            <input type="text" name="eje2b" size="10">
            <input type="submit" value="enviar">
        </form>
    </section>
    <section class="resultado">
        <h2> Resultado </h2>
        <?php
        require_once ("binomioCuadradoPerfecto.php");


        if (isset($_POST['eje2a'] ) && isset($_POST['eje2b'])) {
            $valorA = $_POST['eje2a'];
            $valorB = $_POST['eje2b'];

            //llamo a la funcion
            $resultado = binomioCuadradoPerfecto_a($valorA,$valorB);
            $resultadob = binomioCuadradoPerfecto_b($valorA,$valorB);

            //imprimo resultado
            echo ("<p>el resultado es calculado por potencia :  $resultado</p> \n");
            echo "el resultado es calculado con la formula de binomio: " . $resultadob ."<br>";
        } else {
            echo "no se recibio vlores";
        }
        echo ' <a href="http://localhost/programacionWeb2/inicio.php"><button> volver al home </button></a>';

        ?>

    </section>
</main>
</body>
</html>
<?php
?>

