<?php 

$categorias = [
    ['id'=> 1, 'nombre' => 'Malla de cuero'],
    ['id'=> 2, 'nombre' => 'Malla de metal'],
    ['id'=> 3, 'nombre' => 'Malla de goma']
];

$productos = [
    ['id'=> 1, 'nombre' => 'Thermo Ball Etip Gloves', 'precio' => '45.600', 'imagen' => 'popular1.png', 'categoria'=>2],
    ['id'=> 2, 'nombre' => 'Thermo Ball Etip Gloves', 'precio' => '60000000', 'imagen' => 'popular2.png', 'categoria'=>1],
    ['id'=> 3, 'nombre' => 'Thermo Ball Etip Gloves', 'precio' => '45.600', 'imagen' => 'popular3.png', 'categoria'=>1],
    ['id'=> 4, 'nombre' => 'Thermo Ball Etip Gloves', 'precio' => '45.600', 'imagen' => 'popular4.png', 'categoria'=>2],
    ['id'=> 5, 'nombre' => 'Thermo Ball Etip Gloves', 'precio' => '60000000', 'imagen' => 'popular5.png', 'categoria'=>3],
    ['id'=> 6, 'nombre' => 'Thermo Ball Etip Gloves', 'precio' => '45.600', 'imagen' => 'popular6.png', 'categoria'=>1]
];

?>
        
<!-- Latest Products Start -->
<section id="productos" class="popular-items latest-padding" style="padding-top: 50px!important;">
    <div class="container">
        <div class="row product-btn justify-content-between mb-40">
            <div class="properties__button">
                <!--Nav Button  -->
                <nav>                                                      
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link <?php if(empty($_GET['categoria'])) echo "active"; ?>"  href="shop.php?#productos">Todos</a>
                        <a class="nav-item nav-link <?php if(!empty($_GET['categoria']) && $_GET['categoria'] == 1) echo "active"; ?>"  href="shop.php?categoria=1#productos">Malla de Cuero</a>
                        <a class="nav-item nav-link <?php if(!empty($_GET['categoria']) && $_GET['categoria'] == 2) echo "active"; ?>"  href="shop.php?categoria=2#productos"> Malla de Metal</a>
                        <a class="nav-item nav-link <?php if(!empty($_GET['categoria']) && $_GET['categoria'] == 3) echo "active"; ?>" href="shop.php?categoria=3#productos"> Malla de Goma </a>
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
                    <?php foreach($productos as $producto): ?>

                        <?php if( isset($_GET['categoria']) && $producto['categoria'] == $_GET['categoria']): ?>
                        
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="assets/img/gallery/<?php echo $producto['imagen'] ?>" alt="">
                                        <div class="img-cap">
                                            <span>Añadir al carrito</span>
                                        </div>
                                        <div class="favorit-items">
                                            <span class="flaticon-heart"></span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="product_details.php"><?php echo $producto['nombre'] ?></a></h3>
                                        <span>$ <?php echo $producto['precio'] ?></span>
                                    </div>
                                </div>
                            </div>

                        <?php elseif( !isset($_GET['categoria'])): ?>
                        
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="assets/img/gallery/<?php echo $producto['imagen'] ?>" alt="">
                                        <div class="img-cap">
                                            <span>Añadir al carrito</span>
                                        </div>
                                        <div class="favorit-items">
                                            <span class="flaticon-heart"></span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="product_details.php"><?php echo $producto['nombre'] ?></a></h3>
                                        <span>$ <?php echo $producto['precio'] ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                            
                            
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- End Nav Card -->
    </div>
</section>