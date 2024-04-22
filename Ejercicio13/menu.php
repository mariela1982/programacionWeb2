<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  href="/programacionWeb2/cssEimagenes/estilo.css" rel="stylesheet">
    <title>ini</title>
</head>
<body>
<?php include ('/xampp/htdocs/programacionWeb2/header.php') ?>
<main class="contenedor">
    <section class="eje1">
        <h2>Menu  </h2>
        <?php
       // al array entrada[] para verificar el post no le pongo []
        if (isset($_POST['entrada'])) {

            $menu = parse_ini_file('menuLista.ini', true);

            //muestro lo elegido
            echo "<ul>";
            foreach ($_POST['entrada'] as $paso) {
                if (array_key_exists($paso, $menu)) {
                    echo "<li>{$menu[$paso]}</li>";
                }
            }
            echo "</ul>";
        } else {
            echo "<p>No se ha seleccionado ningún paso del menú.</p>";
        }
        echo '<a href="http://localhost/programacionWeb2/inicio.php"><button>Volver al home </button></a>';
        echo '<a href="http://localhost/programacionWeb2/Ejercicio13/procesar13.php"><button>modificar el menu</button></a>';
        ?>



    </section>



</main>
