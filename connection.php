<?php
// Crear una conexión a la base de datos
$conn = mysqli_connect("localhost","root","","ejercicio5");

// Comprobar si la conexión fue exitosa
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

?>