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

    <section class="resultado">
        <h2> Resultado </h2>

        <?php
        if (isset($_POST['cantidadDeDados'])){
            $cantidad = (int) $_POST['cantidadDeDados'];
            $suma = 0;
            echo 'cantidad de dados lanzados ' . $cantidad . '<br>';
            // muestro los dados
            for ($i = 0; $i < $cantidad; $i++) {
                $resultado = rand(1, 6); // Generar número aleatorio entre 1 y 6 (simulando lanzamiento de dado)
                $suma += $resultado;
                echo "<img src='ImagenDados/dado$resultado.jpeg' alt='Dado $resultado' style='margin-right: 10px;'>";

            }
            echo "<br>";
            echo 'LA suma de los dados es ' . $suma . '<br>';


        }



        echo ' <a href="http://localhost/programacionWeb2/inicio.php"><button> volver al home </button></a>';
        echo ' <a href="http://localhost/programacionWeb2/Ejercicio11/procesar11.php"><button> volver a tirar los dados </button></a>';
        ?>

    </section>
</main>
</body>
</html>

