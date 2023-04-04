<?php
include_once('./connection.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_product = $_POST['id_product'];
    
    // eliminar el usuario de la base de datos
    $sql = "DELETE FROM products WHERE id_product = $id_product";
    mysqli_query($conn, $sql);
    
    // redirigir al usuario de vuelta a la página de usuarios
    header('Location: products.php');
    exit();
  }

?>