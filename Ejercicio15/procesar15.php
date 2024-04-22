
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
        <h2> Buscando texto  </h2>

        <form method="post" enctype="multipart/form-data" action="#" >
            <label for="busca"> Palabra a buscar  </label>
            <input type="text" name="busca" size="10">
            <label for="texto" >Escriba un texto donde incluya la palabra arriba mencionada</label>
            <textarea id="texto" name="texto" rows="4" cols="50" required></textarea><br><br>
            <input type="submit" value="Buscar">
        </form>
    </section>
    <section class="resultado">
        <h2> Resultado </h2>
        <?php
        include ('buscar.php');

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $clave = $_POST["busca"];
            $texto = $_POST["texto"];

            $resultado = buscar($clave, $texto);


            echo "La palabra clave $clave aparece $resultado veces en el texto <br>";
        } else{
            echo 'no se encontro texto';
        }

        echo '<a href="http://localhost/programacionWeb2/inicio.php"><button>Volver al home </button></a>';

        ?>
    </section>
</main>

</body>
</html>
<?php
?>
