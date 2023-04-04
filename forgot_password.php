<?php
// Incluir archivo de conexión a la base de datos
include_once('./connection.php');

// Verificar si se ha enviado el formulario de recuperación de contraseña
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener la dirección de correo electrónico proporcionada por el usuario
    $email = $_POST['email'];

    // Consultar la base de datos para verificar si hay un usuario con esa dirección de correo electrónico
    $query = "SELECT * FROM users WHERE user_email='$email'";
    $result = mysqli_query($conn, $query);

    // Verificar si hay algún registro en la base de datos que coincida con la dirección de correo electrónico proporcionada
    if (mysqli_num_rows($result) == 1) {
        // Generar un código de recuperación aleatorio
        $recovery_code = rand(100000, 999999);

        // Actualizar la base de datos con el código de recuperación generado
        $query = "UPDATE users SET recovery_code='$recovery_code' WHERE user_email='$email'";
        mysqli_query($conn, $query);

        // Enviar un correo electrónico al usuario con el código de recuperación generado
        $to = $email;
        $subject = 'Código de recuperación de contraseña';
        $message = 'Su código de recuperación de contraseña es: ' . $recovery_code;
        $headers = 'From: villasmiljuandiego@gmail.com';
        mail($to, $subject, $message, $headers);

        // Redirigir al usuario a la página donde puede ingresar el código de recuperación
        header('Location: enter_recovery_code.php');
    } else {
        // Mostrar un mensaje de error si no se encontró ningún usuario con la dirección de correo electrónico proporcionada
        $error = 'No se ha encontrado ninguna cuenta con esa dirección de correo electrónico';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/img/logo.png">
    <title>Document</title>
</head>

<body>
    <h1>Recuperar contraseña</h1>
    <form method="post" action="forgot_password.php">
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" required>
        <br>
        <input type="submit" value="Enviar código de recuperación">
    </form>
    <p>¿Ya tienes una cuenta? <a href="index.php">Inicia sesión aquí</a></p>

    <?php
        echo $error;
    ?>
</body>

</html>