<?php
require_once ("parametro.php");

if (isset($_POST['$num'])){

    $a = $_POST[ '$num'];
    $resultado = incrementar($num);
    echo 'el valor es ' . $resultado ;
} else
    echo 'no se ha ingresado valor';

echo ' <a href="http://localhost/programacionWeb2/inicio.php"><button> volver al home </button></a>';
?>