<?php

function buscar($clave, $texto)
{
    $longitudClave = strlen($clave);
    $longitudTexto = strlen($texto);
    $ocurrencias = 0;

    // Recorrer el texto caracter por caracter

    for ($i = 0; $i <= $longitudTexto - $longitudClave; $i++) {
        $match = true;

        // Comparar la palabra clave con una subcadena del texto de longitud igual a la clave

        for ($j = 0; $j < $longitudClave; $j++) {
            // Comparar caracteres uno por uno
            if ($texto[$i + $j] !== $clave[$j]) {
                $match = false;
                break;
            }
        }

        // Si encontramos una coincidencia, aumentamos el contador de ocurrencias
        if ($match) {
            $ocurrencias++;
            // Avanzamos el índice para evitar contar solapamientos
            $i += $longitudClave - 1;
        }
    }

    return $ocurrencias;
}

?>
