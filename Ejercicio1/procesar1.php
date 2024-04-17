
<?php
// Inclui el archivo de funciones donde está definida la función Semaforo
require_once ("semaforo.php");

// Verifica si se recibió el color del semáforo
if (isset($_POST['ejercicio1'])) {
    $color = $_POST['ejercicio1'];

    // Llamar a la función Semaforo con el color seleccionado
    $estado = semaforo_a($color);
   // $estado_b = semaforo_b($color); no me salio
    $estado_c = semaforo_c($color);
    // Mostrar el estado correspondiente
    echo "<p>Estado del semáforo: $estado</p> \n";
  //  print ("<p>Estado del semáforo : $estado_b </p>"); es del ifinLine
    print ("<p>Estado del semáforo : $estado_c</p> \n");
} else {
    echo "<p>Error: No se recibio el color del semaforo.</p>";
}

 // vuelve al principio
    echo '<a href="http://localhost/programacionWeb2/inicio.php"><button>Volver al home </button></a>';

?>
