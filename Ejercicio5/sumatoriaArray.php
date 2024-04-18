<?php

function sumatoria_a($array){ //suma con el for
   $suma_b = 0;
   for ($i=0; $i < count($array); $i++) { //cuenta los elementos del array el count
       $suma_b = $suma_b + $array[$i];
   }
   return $suma_b;
    }

function sumatoria_b($array){ //suma con el foreach
    $suma_a = 0;
    foreach ($array as $value){
        $suma_a = $suma_a+$value;
}
    return $suma_a;
}

function sumatoria_c($array)
{ //con el while
    $suma_c = 0;
    $i = 0;
    while ($i < count($array)) {
        $suma_c = $suma_c + $array[$i];
        $i++;
    }
    return $suma_c;
}
 ?>

