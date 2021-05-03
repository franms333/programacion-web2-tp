<?php

include_once "helpers/dataHelper.php";
require __DIR__."/../helpers/connection.php";

$sqlCategories = "SELECT * FROM categories WHERE deleted_at IS NULL";

$sqlBrands = "SELECT * FROM brands WHERE deleted_at IS NULL";

$sqlproducts = "SELECT * FROM products WHERE deleted_at IS NULL";

$categories = $con->query($sqlCategories);

$brands = $con->query($sqlBrands);

$products = $con->query($sqlproducts);


?>

<?php

include('config/db.php');
?> 

<?php include('helpers/connection.php')?>
        
<!-- Latest Products Start -->
<section id="productos" class="popular-items latest-padding" style="padding-top: 50px!important;">
    <div class="container">
        <div class="row product-btn justify-content-between mb-40">
            <div class="properties__button w-100" >
                <!--Nav Button  -->
                <nav style="display: flex; justify-content: space-around">
                    <div>
                        <h3>Categorias</h3>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link <?php if(empty($_GET['categoria'])) echo "active"; ?>"  href="shop.php?#productos">Todos</a>

                            <?php foreach($categories as $categoria): ?>
                                <a class="nav-item nav-link <?php if(!empty($_GET['categoria']) && $_GET['categoria'] == $categoria['category_id']) echo "active"; ?>"
                                   href="shop.php?categoria=<?php echo $categoria['category_id'] ?><?php echo !empty($_GET['marca']) ? "&marca=".$_GET['marca'] : '' ?>#productos"
                                >
                                    <?php echo $categoria['name'] ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div>
                        <h3>Marcas</h3>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link <?php if(empty($_GET['marca'])) echo "active"; ?>"  href="shop.php?#productos">Todos</a>

                            <?php foreach($brands as $marca): ?>
                                <a class="nav-item nav-link <?php if(!empty($_GET['marca']) && $_GET['marca'] == $marca['brand_id']) echo "active"; ?>"
                                   href="shop.php?<?php echo !empty($_GET['categoria']) ? 'categoria='.$_GET['categoria'].'&' : '' ?>marca=<?php echo $marca['brand_id'] ?>#productos"
                                >
                                    <?php echo $marca['name'] ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>

                </nav>
                <!--End Nav Button  -->
            </div>
        </div>
        <!-- Nav Card -->
        <div class="tab-content" id="nav-tabContent">
            <!-- card one -->
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">

                    <?php foreach($products as $producto){?>

                        <?php if(
                                ( isset($_GET['categoria']) && $producto['category_id'] == $_GET['categoria'] ) &&
                                ( isset($_GET['marca']) && $producto['brand_id'] == $_GET['marca'] )
                            ):
                        ?>

                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="imagenes/<?php echo $producto['image'] ?>" alt="" style="width: 120px !important;">
                                        <div class="img-cap">
                                            <span>Añadir al carrito</span>
                                        </div>
                                        <div class="favorit-items">
                                            <span class="flaticon-heart"></span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="product_details.php?prodId=<?php echo $producto['product_id']?>"><?php echo $producto['name'] ?></a></h3>
                                        <span>$ <?php echo number_format($producto['price'], 2, ",", ".")  ?></span>
                                    </div>
                                </div>
                            </div>

                        <?php elseif( (isset($_GET['categoria']) && $producto['category_id'] == $_GET['categoria']) && !isset($_GET['marca'])    ): ?>

                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="imagenes/<?php echo $producto['image'] ?>" alt="" style="width: 120px !important;">
                                        <div class="img-cap">
                                            <span>Añadir al carrito</span>
                                        </div>
                                        <div class="favorit-items">
                                            <span class="flaticon-heart"></span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="product_details.php?prodId=<?php echo $producto['product_id']?>"><?php echo $producto['name'] ?></a></h3>
                                        <span>$ <?php echo number_format($producto['price'], 2, ",", ".")  ?></span>
                                    </div>
                                </div>
                            </div>

                        <?php elseif( (isset($_GET['marca']) && $producto['brand_id'] == $_GET['marca']) && !isset($_GET['categoria'])   ): ?>

                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="imagenes/<?php echo $producto['image'] ?>" alt="" style="width: 120px !important;">
                                        <div class="img-cap">
                                            <span>Añadir al carrito</span>
                                        </div>
                                        <div class="favorit-items">
                                            <span class="flaticon-heart"></span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="product_details.php?prodId=<?php echo $producto['product_id']?>"><?php echo $producto['name'] ?></a></h3>
                                        <span>$ <?php echo number_format($producto['price'], 2, ",", ".")  ?></span>
                                    </div>
                                </div>
                            </div>

                        <?php elseif( !isset($_GET['marca']) && !isset($_GET['categoria'])): ?>

                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="imagenes/<?php echo $producto['image'] ?>" alt="" style="width: 120px !important;">
                                        <div class="img-cap">
                                            <span>Añadir al carrito</span>
                                        </div>
                                        <div class="favorit-items">
                                            <span class="flaticon-heart"></span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="product_details.php?prodId=<?php echo $producto['product_id']?>"><?php echo $producto['name'] ?></a></h3>
                                        <span>$ <?php echo number_format($producto['price'], 2, ",", ".")  ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- End Nav Card -->
    </div>
</section>