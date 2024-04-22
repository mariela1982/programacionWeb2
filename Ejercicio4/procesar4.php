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
    <section class="eje4">
        <form method="post" enctype="multipart/form-data" action="#">
            <h2> Ejercicio 4 -- Incremento por referencia  </h2>
            <img src="/programacionWeb2/cssEimagenes/Ejercicio4.png" >
            <label for="num"> Ingrese un numero </label>
            <input type="text"  name="num" size="50" >
            <input type="submit" value="enviar">

        </form>
    </section>
    <section class="resultado">
        <h2> Resultado </h2>
        <?php
        require_once ("parametro.php");

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            // recorda pasar si $ !!!!
            $a = $_POST ['num'];
            echo 'usted ingreso este valor ' . $a . "<br>";
            $resultado = incrementar($a);
            echo 'ahora su valor es  ' . $resultado . "<br>";
        } else
            echo 'no se ha ingresado valor';

        echo ' <a href="http://localhost/programacionWeb2/inicio.php"><button> volver al home </button></a>';
        ?>

    </section>
</main>
</body>
</html>
<?php
?>


