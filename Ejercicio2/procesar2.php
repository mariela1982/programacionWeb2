<?php
require_once ("binomioCuadradoPerfecto.php");


if (isset($_POST['eje2a'] ) && isset($_POST['eje2b'])) {
    $valorA = $_POST['eje2a'];
    $valorB = $_POST['eje2b'];

    //llamo a la funcion
    $resultado = binomioCuadradoPerfecto_a($valorA,$valorB);
    $resultadob = binomioCuadradoPerfecto_b($valorA,$valorB);

    //imprimo resultado
    echo ("<p>el resultado es:  $resultado</p> \n");
    echo "el resultado es: " . $resultadob;
} else {
    echo "no se recibio vlores";
}
    echo ' <a href="http://localhost/programacionWeb2/inicio.php"><button> volver al home </button></a>';

?>
