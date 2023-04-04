<?php
include_once('./connection.php');

if (isset($_POST['submit'])) {
    $user_name = $_POST['user_name'];
    $user_surname = $_POST['user_surname'];
    $username = $_POST['username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    // Verificar si ya existe un registro con el mismo nombre de producto
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    if (mysqli_num_rows($result) > 0) {
        // Si ya existe un registro con el mismo nombre, mostrar un mensaje de error
        $error_message = "Ya existe ese nombre de usuario.";
    } else {
        // Si no existe un registro con el mismo nombre, insertar el nuevo registro en la base de datos
        $insert_query = "INSERT INTO users (user_name, user_surname, username, user_email, user_password) VALUES ('$user_name', '$user_surname', '$username', '$user_email', '$user_password')";
        mysqli_query($conn, $insert_query);
        header("Location: ./users.php"); // Redirigir al usuario a la página de inventario
        exit();
    }
}
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
    <title>CasaHogar</title>
</head>

<body id="home">
    <nav id="navbar" class="navbar">
        <div id="logo1" class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./assets/img/logo.png" alt="Logo" width="60" class="d-inline-block align-text-top">
                <span class="h4 fw-bold mb-0">CasaHogar</span>
            </a>
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./home.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./users.php">Inventario</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Sistema</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./users.php">Usuarios</a></li>
                        <li><a class="dropdown-item" href="./report.php">Reportes</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="./logout.php">Cerrar sesión</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav nav-underline">
            </ul>
        </div>
    </nav>
    <br>
    <div class="container text-center">
        <div class="row">
            <div class="col-2">
                <div id="banners1">
                    <img width="250px" src="./assets/img/1.png" alt="">

                    <img width="250px" src="./assets/img/3.png" alt="">

                    <img width="250px" src="./assets/img/5.png" alt="">
                </div>
            </div>

            <div class="container col-8">
                <div id="home1">
                    <br>
                    <h2>Agregar usuario</h1>
                        <div id="formproduct">
                            <?php if (isset($error_message)) { ?>
                                <p><?php echo $error_message ?></p>
                            <?php } ?>
                            <br>
                            <form method="post">
                                <label for="user_name">Nombre:</label>
                                <input type="text" class="form-control" id="user_name" name="user_name">
                                <br>
                                <label for="user_surname">Apellido:</label>
                                <input type="text" class="form-control" id="user_surname" name="user_surname">
                                <br>
                                <label for="username">Nombre de usuario:</label>
                                <input type="text" class="form-control" id="username" name="username">
                                <br>
                                <label for="user_password"> Contraseña:</label>
                                <input type="text" class="form-control" id="user_password" name="user_password">
                                <br>
                                <label for="user_email">Correo eléctronico:</label>
                                <input type="text" class="form-control" id="user_email" name="user_email">
                                <br>
                                <button class="btn btn-primary" type="submit" name="submit">Agregar</button>
                            </form>
                        </div>
                        <br>
                </div>
            </div>

            <div class="col-2">
                <div id="banners2">
                    <img width="250px" src="./assets/img/2.png" alt="">

                    <img width="250px" src="./assets/img/4.png" alt="">

                    <img width="250px" src="./assets/img/6.png" alt="">
                </div>
            </div>
        </div>
    </div>
</body>

</html>