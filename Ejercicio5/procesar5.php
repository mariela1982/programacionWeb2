<?php
require_once ("sumatoriaArray.php");



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $input_array = $_POST['num_array'];

    //paso la cadena al array
    $numbers = explode(',', $input_array);


    $sum = sumatoria_a($numbers);
    $sum_b = sumatoria_b($numbers);
    $sum_c = sumatoria_c($numbers);


    // Imprime la suma
    echo "La suma de los elementos es con for : " . $sum . "<br></n>";
    echo "La suma de los elementos es con foreach: " . $sum_b . "<br></n>";
    echo "La suma de los elementos es while: " . $sum_c . "<br></n>";
}
echo ' <a href="http://localhost/programacionWeb2/inicio.php"><button> volver al home </button></a>';


?>
