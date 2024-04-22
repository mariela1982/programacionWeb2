
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
<?php
include ('\xampp\htdocs\programacionWeb2\header.php');
?>


<main class="contenedor">
    <h3> Imagenes que estan en mi carpeta de imagenes </h3>

            <?php

        // Obtener lista de imágenes en la carpeta "imagenes"
        $imagenesDir = 'im/';
            if (is_dir($imagenesDir)) {
                $imagenes = scandir($imagenesDir);
                if ($imagenes !== false) {

                        foreach ($imagenes as $imagen) {
                            if ($imagen != '.' && $imagen != '..') {
                                echo '<a href="/programacionWeb2/Ejercicio10/procesar10.php?imagen=', urlencode($imagen), '">' . str_replace(".jpg", "", $imagen) . '</a>';
                            }
                        }

                        echo '</div>';
                        }
                 else
                    echo 'No se pudo obtener la lista de imágenes.';

            } else
                echo 'El directorio de imágenes no existe o no se puede acceder.';

        ?>
<section class = "formulario">

    <form  action="subirArchivo.php" enctype="multipart/form-data"  method="post">
        <input name="file" type="file"value="elegirArchivo">
        Nombre: <input name="nombre" type="text">
        <input type="submit" name="submit" value="subir archivo">

    </form>
</section>
    <?php

    echo ' <a href="http://localhost/programacionWeb2/inicio.php"><button> volver al home </button></a>';

   ?>
</main>

</body>
</html>
