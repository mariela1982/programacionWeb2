<?php

require_once ("concatena.php");

//if( isset($_POST['$textA']) && isset($_POST['$textB'])){
    $oracionA = $_POST['$textA'];
    $oracionB = $_POST['$textB'];

    $c = concatenarCadena($oracionA, $oracionB);

    echo "la concatenacion quedo asi " . $c . "<br>";
//} else {
 //   echo "no se ingreso oracion";}

echo ' <a href="http://localhost/programacionWeb2/inicio.php"><button> volver al home </button></a>';

?>




