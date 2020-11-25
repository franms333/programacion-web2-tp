<?php
include_once "helpers/dataHelper.php";

$productos = getDataFromJSON('productos');

?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Time Zones Relojes</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php include('includes/navbar.php'); ?>

    <main>
        <?php include('includes/header.php') ?>
        <div class="product_image_area">
            <div class="container">
                <div class="row justify-content-center">
                    <img src="imagenes/<?php echo $productos[$_GET['id']]['imagen'] ?>" alt="Gato">
                </div>
                <div class="col-lg-12">
                    <div class="single_product_text text-center">
                        <h3><?php echo $productos[$_GET['id']]['nombre'] ?> </h3>
                        <p><?php echo $productos[$_GET['id']]['descripcion'] ?>
                        </p>

                        <div class="card_area">
                            <div class="product_count_area">
                                <?php echo "$" . number_format($productos[$_GET['id']]['precio'], 2, ',', '.') ?>
                            </div>
                            <div class="add_to_cart">
                                <a href="#" class="btn_3">Añadir al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>

    <?php include('includes/footer.php') ?>
</body>

</html>