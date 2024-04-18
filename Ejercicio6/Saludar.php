<?php

class Saludar{
private $nombre;
private $apellido;

//constructor
public function __construct($nombre, $apellido){
    //asignacion de variables
    $this->nombre = $nombre;
    $this->apellido = $apellido;
}
public function saludoFormal($horario){
    if (4< $horario && $horario <14){
        echo "Buenos Dias  " . $this ->nombre . $this ->apellido . "<br>";
    } elseif (14 < $horario && $horario <21){
        echo "Buenas Tardes  " . $this ->nombre . $this ->apellido. "<br>";
    } elseif (21 < $horario && $horario <5){
        echo "Buenas Noches  " . $this ->nombre . $this ->apellido. "<br>";
    }
}
    public function saludoInFormal($horario){
        if (4< $horario && $horario <14){
            echo "Hola  " . $this ->nombre . "  que tengas un buen dia <br>";
        } elseif (14 < $horario && $horario <21){
            echo "Hola " . $this ->nombre . "  que tengas unas buenas tardes <br>";
        } elseif (21 < $horario && $horario <5){
            echo "Hola " . $this ->nombre . "  que tengas unas noches <br>";
        }
    }
}
?>