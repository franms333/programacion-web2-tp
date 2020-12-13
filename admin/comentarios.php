<?php

include "includes/header.php";
include "../helpers/dataHelper.php";
include "../helpers/functions.php";

// Array asociativo del JSON de categorias
$comentarios = getDataFromJSON('comentarios');
$productos = getDataFromJSON('productos');

?>
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3" style="display: flex; flex-direction: row; justify-content: space-between; align-items: center;">
                <h6 class="m-0 font-weight-bold text-primary">Comentarios</h6>
                <form action="">
                <select name="id_producto">
                    <option value="0">
                        Adasdsad
                    </option>
                    <option value="1">
                        Adasdsad
                    </option>
                </select>
                <button class = "btn btn-primary">
                    Ver 
                </button>
                </form>
                
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th style="width: 115px;">Producto</th>
                            <th>Comentario</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($comentarios as $comentario): ?>
                        <tr>
                            <td><?php echo $comentario['id'] ?></td>
                            <td><?php echo $comentario['nombre'] ?></td>
                            <td><?php echo $productos[$comentario['id_producto']]['nombre'] ?></td>
                            <td><?php echo $comentario['comentario'] ?></td>
                                                      

                            
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