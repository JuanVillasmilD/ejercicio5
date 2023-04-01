<?php
include_once('./connection.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'];
    
    // eliminar el usuario de la base de datos
    $sql = "DELETE FROM users WHERE id = $user_id";
    mysqli_query($conn, $sql);
    
    // redirigir al usuario de vuelta a la página de usuarios
    header('Location: users.php');
    exit();
  }

?>