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
    <h1>Paso de control </h1>

    <form action="listar.php" method="post">
        <label for="nombre">Nombre del Visitante:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="planeta">Planeta de Origen:</label>
        <select id="planeta" name="planeta" required>
            <option value="Tierra">Tierra</option>
            <option value="Marte">Marte</option>
            <option value="Venus">Venus</option>
            <option value="Júpiter">Júpiter</option>
            <option value="Saturno">Saturno</option>
            <option value="Pluton">Saturno</option>
            <option value="Urano">Urano</option>
        </select><br><br>

        <button type="submit">Registrar Visita</button>
    </form>
 </section>
    <section>
        <?php
        // Leer el archivo de visitas
        $archivo = 'visitas.json';
        if (file_exists($archivo)) {
            $visitas = json_decode(file_get_contents($archivo), true);

            // Mostrar cada visita
            echo "<ul>";
            $totalNoTierra = 0;
            echo '<h2> Lista </h2>';
            foreach ($visitas as $visita) {
                echo "<li>{$visita['nombre']} desde {$visita['planeta']}</li>";
                if ($visita['planeta'] !== 'Tierra') {
                    $totalNoTierra++;
                }
            }
            echo "</ul>";

            // Mostrar el contador de visitas no pertenecientes a la Tierra
            echo "<p>Total de visitas extraterrestres: $totalNoTierra</p>";
        } else {
            echo "<p>No hay visitas registradas.</p>";
        }

        if ($totalNoTierra >10){

// Ruta del archivo de visitas
            $archivo = 'visitas.json';

// Verificar si el archivo existe
            if (file_exists($archivo)) {
                // Vaciar el archivo
                file_put_contents($archivo, '');
                $totalNoTierra = 0;

                // Redireccionar al formulario principal
              //  header("Location: index.php");
               // exit();
            } else {
                echo "El archivo de visitas no existe.";
            }

        } echo '<a href="http://localhost/programacionWeb2/inicio.php"><button>Volver al home </button></a>';

        ?>
    </section>


</main>

</body>
</html>