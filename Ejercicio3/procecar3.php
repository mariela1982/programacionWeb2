<?php

require_once ("concatena.php");

if( isset($_POST['$textA']) && isset($_POST['$textB'])){
    $text1 = $_POST['$textA'];
    $text2 = $_POST['$textB'];


    $c = concatenarCadena($text1, $text2);

    echo "la concatenacion quedo asi " . $c . "<br>";
    echo $text1;
    echo $text2;
} else {
   echo "no se ingreso oracion";}

echo ' <a href="http://localhost/programacionWeb2/inicio.php"><button> volver al home </button></a>';

?>




