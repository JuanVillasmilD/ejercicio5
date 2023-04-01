<?php
include_once('./connection.php');

// Recibir los datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

// Validar los datos
if (empty($nombre) || empty($correo) || empty($contraseña)) {
  echo "Por favor complete todos los campos";
  exit;
}

// Insertar el usuario en la base de datos
$sql = "INSERT INTO users (nombre, correo, contraseña) VALUES ('$nombre', '$correo', '$contraseña')";
if (mysqli_query($conn, $sql)) {
  echo "Usuario agregado con éxito";
} else {
  echo "Error al agregar usuario: " . mysqli_error($conn);
}

// Redirigir al usuario a la página de administrar usuarios
header('Location: administrar_usuarios.php');
exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/styles.css?v=<?php echo time(); ?>">
    <title>Login</title>
</head>

<body id="login">
    <section class="">
        <div class="px-4 py-5 px-md-5 text-center text-lg-start">
            <div class="container">
                <div class="row gx-lg-5 align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h1 class="my-5 display-3 fw-bold ls-tight">
                            Los mejores <br />
                            <span class="text-primary">productos para tu hogar</span>
                        </h1>
                    </div>

                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="card">
                            <div class="card-body py-5 px-md-5">
                                <form method="post" action="index.php">
                                    <div id="logo1" class="form-outline mb-4">
                                        <img src="./assets/img/logo.png" width="90px">
                                        <span class="h1 fw-bold mb-0">CasaHogar</span>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" name="username" required id="form3Example3" class="form-control" />
                                        <label class="form-label" for="form3Example3">Nombre de usuario</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="password" required type="password" id="form3Example4" class="form-control" />
                                        <label class="form-label" for="form3Example4">Contraseña</label>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block mb-4">
                                        Iniciar sesión
                                    </button>

                                    <div class="form-outline mb-4">
                                        <p class="small mb-5 pb-lg-2"><a class="text-muted" href="forgot_password.php">¿Olvidaste tu contraseña?</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>