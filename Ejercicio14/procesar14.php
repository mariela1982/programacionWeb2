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
    <section class="eje1">
        <h2> La Matrix </h2>
        // no debo poner enctype porque no me lo toma no se por que
        <form method="post"  action="#"  >
            <label for="matrix"> Dimension de la matriz  </label>
            <input type="number" id="matrix" name="matrix" min="1" required>
            <input type="submit" value="Crear Matriz">
        </form>
    </section>
<section class="resultado">
    <h2> Resultado </h2>
    <?php
    // creo la matriz
    if (isset($_POST['matrix'])) {
        $n = $_POST['matrix'];

        $matriz = [];
        $contador = 1;
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $matriz[$i][$j] = $contador;
                $contador++;
            }
        }

        // Mostrar la matriz

        echo "<h2>Matriz Generada de $n x $n</h2>";

        print_r($matriz);

        echo "<h2>Diagonal Principal</h2>";
        for ($i = 0; $i < $n; $i++) {
            echo $matriz[$i][$i] . " ";
        }


        echo "<h2>Diagonal Secundaria</h2>";
        for ($i = 0; $i < $n; $i++) {
            echo $matriz[$i][$n - 1 - $i] . " ";
        }


        $sumaTotal = 0;
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $sumaTotal += $matriz[$i][$j];
            }
        }
        echo "<h2>Suma de todos los valores de la matriz:</h2>";
        echo "<p>$sumaTotal</p>";

    } else {
        echo "<p>Error: No se recibió la dimensión de la matriz.</p>";
    }



    // vuelve al principio

    echo '<a href="http://localhost/programacionWeb2/inicio.php"><button>Volver al home </button></a>';

    ?>
</section>
</main>

</body>
</html>
<?php
?>