
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
        <h2> Ejercicio 1 -- el semaforo </h2>
        <img src="/programacionWeb2/cssEimagenes/Ejercicio1.png" >
        <form method="post" enctype="multipart/form-data" action="#" >
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
<section class="resultado">
    <h2> Resultado </h2>
    <?php
    // Inclui el archivo de funciones donde está definida la función Semaforo
    require_once ("semaforo.php");

    // Verifica si se recibió el color del semáforo
    if (isset($_POST['ejercicio1'])) {
        $color = $_POST['ejercicio1'];

        // Llamar a la función Semaforo con el color seleccionado
        $estado = semaforo_a($color);
        // $estado_b = semaforo_b($color); no me salio
        $estado_c = semaforo_c($color);
        // Mostrar el estado correspondiente
        echo "<p>Usted eligio el color : ".$color."</p>";
        echo "<p>Estado del semáforo: $estado</p> \n";
        //  print ("<p>Estado del semáforo : $estado_b </p>"); es del ifinLine
        print ("<p>Estado del semáforo : $estado_c</p> \n");

    } else {
        echo "<p>Error: No se recibio el color del semaforo.</p>";
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





