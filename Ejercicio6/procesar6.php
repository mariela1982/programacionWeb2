<?php

require_once ("Saludar.php");

if ($_SERVER ["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $hora = $_POST["hora"];

    $saludo = new Saludar($nombre,$apellido);

   $saludo->saludoInFormal($hora) . "<br>";
   $saludo->saludoFormal($hora) . "<br>";

} else echo "no hubo datos <br>";

echo ' <a href="http://localhost/programacionWeb2/inicio.php"><button> volver al home </button></a>';
?>