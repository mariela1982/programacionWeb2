<?php

// Incluir el archivo de funciones donde está definida la función Semaforo
require_once ("semaforo.php");

// Verificar si se recibió el color del semáforo
if (isset($_POST['color'])) {
    $color = $_POST['color'];

    // Llamar a la función Semaforo con el color seleccionado
    $estado = semaforo_a($color); // Cambia a semaforo_b o semaforo_c según corresponda
    $estado_b = semaforo_b($color);
    $estado_c = semaforo_c($color);
    // Mostrar el estado correspondiente
    echo "<p>Estado del semáforo: $estado</p> \n";
    print ("<p>Estado del semáforo : $estado_b </p>");
    print ("<p>Estado del semáforo : $estado_c<");
} else {
    echo "<p>Error: No se recibió el color del semáforo.</p>";
}
?>
