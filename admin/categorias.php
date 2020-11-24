<?php

include "includes/header.php";
include "../helpers/dataHelper.php";
include "../helpers/functions.php";

// Array asociativo del JSON de categorias
$categorias = getDataFromJSON('categorias');
if(!empty($_GET['del'])){
    unset($categorias[$_GET['del']]); //borra con el id
    setDataJSON('categorias', $categorias);
    redirect('categorias.php');
}

?>
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3" style="display: flex; flex-direction: row; justify-content: space-between; align-items: center;">
                <h6 class="m-0 font-weight-bold text-primary">categorias</h6>
                <a class="btn btn-primary" href="categoria_add.php">+</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th style="width: 115px;">Modificar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($categorias as $categoria): ?>
                        <tr>
                            <td><?php echo $categoria['id'] ?></td>
                            <td><?php echo $categoria['nombre'] ?></td>
                            <td style="display: flex; justify-content: space-around; width: 115px;">
                               <!-- boton de editar -->
                                <a class="btn btn-info" href="categoria_add.php?id=<?php echo $categoria['id'] ?>"><i class="fas fa-edit"></i></a>
                                <!-- boton de borrar -->
                                <a class="btn btn-danger" href="categorias.php?del=<?php echo $categoria['id'] ?>"><i class="fas fa-trash-alt"></i></a>
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