<?php

function binomioCuadradoPerfecto_a($valorA,$valorB){
    //utilizo formula de potencia utilizo el valor a como base y el b como exponente
    if ($valorB < 0){
        return 1;
    } else{
       return  pow($valorA,$valorB);
    }
 }

 function binomioCuadradoPerfecto_b($valorA,$valorB){
    // utilizo la formula del binomio a2 + 2*a*b + b2

     $resA = pow($valorA,2);
     $resB = pow($valorB,2);
     $resc = 2 * $valorA * $valorB ;

     return $resA + $resB +$resc;
 }
?>