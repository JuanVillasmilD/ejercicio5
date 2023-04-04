<?php
include_once('./connection.php');
if (isset($_GET['id'])) {
    $id_product = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM products WHERE id_product = '$id_product'");
    if ($result) {
        $product = mysqli_fetch_assoc($result);
    }
}

if (isset($_POST['submit'])) {
    $new_name = $_POST['name'];
    $new_cant = $_POST['cant'];
    $new_price = $_POST['price'];
    $id_product = $_POST['id'];

    $update_query = "UPDATE products SET name_product = '$new_name', price_product = '$new_price', cant_product = '$new_cant' WHERE id_product = '$id_product'";
    $update_result = mysqli_query($conn, $update_query);

    if ($update_result) {
        header("Location: ./products.php");
        exit;
    } else {
        echo "Error updating product: " . mysqli_error($conn);
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

            <div class="container col-8">
                <div id="home1">
                    <br>
                    <h2>Editar Producto</h1>
                        <div id="formproduct">
                            <?php if (isset($product)) : ?>
                                <form method="POST">
                                    <div>
                                        <label class="form-label" for="name">Nombre:</label>
                                        <input type="text" name="name" id="name" class="form-control" value="<?php echo $product['name_product'] ?>">
                                    </div>
                                    <br>
                                    <div>
                                        <label class="form-label" for="price">Cantidad:</label>
                                        <input type="number" name="price" id="price" class="form-control" value="<?php echo $product['price_product'] ?>">
                                    </div>
                                    <br>
                                    <div>
                                        <label class="form-label" for="cant">Cantidad:</label>
                                        <input type="number" name="cant" id="cant" class="form-control" value="<?php echo $product['cant_product'] ?>">
                                    </div>
                                    <br>
                                    <input type="hidden" name="id" value="<?php echo $product['id_product'] ?>">
                                    <button class="btn btn-primary" type="submit" name="submit">Actualizar</button>
                                </form>
                            <?php else : ?>
                                <p>Producto no encontrado</p>
                            <?php endif; ?>
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