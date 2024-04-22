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
        <h1>Menu de entrada </h1>

        <form action="menu.php" method="post">
            <label for="entrada[]">Entrada</label>
            <input type="checkbox" name="entrada[]" value="entrada" >
            <label for="entrada[]">Plato principal</label>
            <input type="checkbox" name="entrada[]" value="plato_principal">
            <label for="entrada[]">Acompañamiento</label>
            <input type="checkbox" name="entrada[]" value="acompañamiento">
            <label for="entrada[]">Postre</label>
            <input type="checkbox" name="entrada[]" value="postre">


            <button type="submit">Mostrar menu </button>
        </form>
    </section>



</main>

</body>
</html>
