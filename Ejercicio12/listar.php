<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  href="/programacionWeb2/cssEimagenes/estilo.css" rel="stylesheet">
    <title>Extraterrestres</title>
</head>
<body>
<?php include ('/xampp/htdocs/programacionWeb2/header.php') ?>
<main class="contenedor">
    <section class="eje1">
        <h2>Resultados </h2>
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $nombre = $_POST["nombre"];
            $planeta = $_POST["planeta"];

            // creo un array
            $visita = [
                'nombre' => $nombre,
                'planeta' => $planeta
            ];

            // Leer el archivo de visitas existente o crear uno nuevo si no existe

            $archivo = 'visitas.json';
            $visitas = [];
            if (file_exists($archivo)) {
                $visitas = json_decode(file_get_contents($archivo), true);
            }

            // Agregar la nueva visita al array
            $visitas[] = $visita;

            // Guardar el array de visitas en el archivo JSON
            file_put_contents($archivo, json_encode($visitas));

            // Redireccionar a la página de listado de visitas
            header("Location: procesar12.php");
            exit();
        }
        ?>



    </section>

</main>

</body>
</html>
