<?php

include "includes/header.php";
include "../helpers/dataHelper.php";
include "../helpers/functions.php";

// Array asociativo del JSON de productos
$productos = getDataFromJSON('productos');
?>
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3" style="display: flex; flex-direction: row; justify-content: space-between;">
                <h6 class="m-0 font-weight-bold text-primary">Productos</h6>
                <a class="btn btn-secondary" href="producto_add.php">+</a>
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
                            <th>Imagen</th>
                            <th style="width: 130px;">Modificar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($productos as $producto): ?>
                        <tr>
                            <td><?php echo $producto['id'] ?></td>
                            <td><?php echo $producto['nombre'] ?></td>
                            <td>descripcion</td>
                            <td><?php echo "$".number_format($producto['precio'], 2, ',', '.') ?></td>
                            <td>61</td>
                            <td>imagen</td>
                            <td style="display: flex; justify-content: space-around; width: 130px;">
                                <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
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