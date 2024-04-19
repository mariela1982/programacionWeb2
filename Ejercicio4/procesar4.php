<?php
require_once ("parametro.php");

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $a = $_POST ['$num'];
    $resultado = incrementar($a);
    echo 'usted ingreso este valor ' . $a;
    echo 'el valor es ' . $resultado ;
} else
    echo 'no se ha ingresado valor';

echo ' <a href="http://localhost/programacionWeb2/inicio.php"><button> volver al home </button></a>';
?>