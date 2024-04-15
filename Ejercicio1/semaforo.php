<?php
function semaforo_a ($color){
    if ($color === "rojo"){
        return "frene";
}    elseif ($color === "verde") {
    return "avance";
}
        elseif($color === "amarillo") {
            return "precaucion";
        }    else {
        return "estado desconocido";
        }
}

//funcion con if in line
function semaforo_b($color){
    return ($color === "rojo") ? "frene":
        ($color === "amarillo") ? "precaucion" :
            ($color === "verde") ? "avance" :
                "estado desconocido" ;

}

//funcion con switch

function semaforo_c ($color){
    switch ($color){
        case "rojo" :
            return "frene";
        case "amarillo" :
            return "precaucion";
        case "verde":
            return "avance";
        default "estado desconocido";
    }
}

?>


