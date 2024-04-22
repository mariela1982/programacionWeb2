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
    <section class="eje5">
        <form method="post" enctype="multipart/form-data" action="#">
            <h2> Ejercicio 5 -- sumatoria de arrays  </h2>
            <img src="/programacionWeb2/cssEimagenes/Ejercicio5.png" >
            <label for="num_array"> Ingrese algunos numero  con el formato 2,3,5,19(entre comas) </label><br>
            <input type="text"  name="num_array" size="50" >
            <input type="submit" value="enviar">

        </form>
    </section>
    <section class="resultado">
        <h2> Resultado </h2>
        <?php
        require_once ("sumatoriaArray.php");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $input_array = $_POST['num_array'];

            //paso la cadena al array
            $numbers = explode(',', $input_array);

            $sum = sumatoria_a($numbers);
            $sum_b = sumatoria_b($numbers);
            $sum_c = sumatoria_c($numbers);

            // Imprime la suma
            echo "La suma de los elementos es con for : " . $sum . "<br></n>";
            echo "La suma de los elementos es con foreach: " . $sum_b . "<br></n>";
            echo "La suma de los elementos es while: " . $sum_c . "<br></n>";
        }
        echo ' <a href="http://localhost/programacionWeb2/inicio.php"><button> volver al home </button></a>';
        ?>

    </section>
</main>
</body>
</html>
<?php
?>




