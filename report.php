<?php
include_once('./connection.php');

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
                    <a class="nav-link" href="./products.php">Inventario</a>
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

            <div class="col-8">
                <div id="home1">
                    <br>
                    <div class="d-grid col-6 mx-auto">
                        <a class="btn btn-primary" href="./reportproducts.php" role="button">Reporte de productos</a>
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