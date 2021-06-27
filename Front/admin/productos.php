<?php

include "includes/header.php";
include "../helpers/dataHelper.php";
include "../helpers/functions.php";

require __DIR__."/../helpers/connection.php";

// Array asociativo del JSON de productos
// $productos = getDataFromJSON('productos');

// // Array asociativo del JSON de categorias
// $categorias = getDataFromJSON('categorias');
$sqlProducts = "SELECT P.*, C.name as category FROM products P
INNER JOIN categories C on P.category_id = C.category_id WHERE P.deleted_at is NULL";

$products = $con->query($sqlProducts);

if(!empty($_GET['del'])){
    $sql = "UPDATE products SET deleted_at = NOW() WHERE product_id = ".$_GET['del'];
    $con->query($sql);
    // unset($productos[$_GET['del']]);
    // setDataJSON('productos', $productos);
    redirect('productos.php');
}

?>
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3" style="display: flex; flex-direction: row; justify-content: space-between; align-items: center;">
                <h6 class="m-0 font-weight-bold text-primary">Productos</h6>
                <a class="btn btn-primary" href="producto_add.php">+</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Categoria</th>
                            <th>Imagen</th>
                            <th style="width: 115px;">Modificar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($products as $producto): ?>
                        
                        <tr>
                            <td><?php echo $producto['product_id'] ?></td>
                            <td><?php echo $producto['name'] ?></td>
                            <td><?php echo $producto['description'] ?></td>
                            <td><?php echo "$".number_format($producto['price'], 2, ',', '.') ?></td>
                            <td><?php echo $producto['stock'] ?></td>
                            <td><?php echo $producto['category']?></td>
                            <td style="padding:3px;">
                                <div class="d-flex justify-content-center align-items-center" style="height: 100%; width: 100%;">
                                    <?php if(!empty($producto['image'])): ?>
                                        <img src="../imagenes/<?php echo $producto['image'] ?>" width="70">
                                    <?php endif; ?>
                                </div>
                            </td>
                            <td style="width: 115px;">
                                <a class="btn btn-info" href="producto_add.php?id=<?php echo $producto['product_id'] ?>"><i class="fas fa-edit"></i></a>
                                <a class="btn btn-danger" href="productos.php?del=<?php echo $producto['product_id'] ?>"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

<?php
include 'includes/footer.php';
?>