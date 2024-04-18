<?php

require_once ("concatena.php");

if ($_SERVER["REQUEST_METHOD"] == "POST"){


    $t1 = $_POST [ 'eje3a'];
    $t2 = $_POST [ 'eje3b'];


    $c = concatenarCadena($t1, $t2);

    echo "la concatenacion quedo asi " . $c . "<br>";

} else {
   echo "no se ingreso oracion";}

echo ' <a href="http://localhost/programacionWeb2/inicio.php"><button> volver al home </button></a>';

?>




