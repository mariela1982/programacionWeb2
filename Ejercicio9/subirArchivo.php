<?php

if ($_FILES["file"]["error"] > 0) {
    echo "Error: " . $_FILES["file"]["error"] . "<br>";
} else {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br>";
    echo "Stored in: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("im/" . $_FILES["file"]["name"])) {
        echo $_FILES["file"]["name"] . " already exists. ";
    } else {
        $imagenesDir = "im/";
        move_uploaded_file($_FILES['file']['tmp_name'], $imagenesDir . $_POST["nombre"]);
        echo "El archivo : " . $_FILES["file"]["name"] . "se subio exitosamente<br>";
    }
// 302
    header("location: procesar9.php"); //con esto me cargo en el mismo archivo
    exit(); // debo ponerlo siempre para terminar el ciclo
}
