<?php

include "includes/header.php";
include "../helpers/dataHelper.php";
include "../helpers/functions.php";

// Array asociativo del JSON de categorias
$categorias = getDataFromJSON('categorias');

// POST
if(isset($_POST['add'])){
    if(!empty($_GET['id'])){
        // Id del categoria
        $id = $_GET['id'];
        // Informacion del categoria
        $categoria = $categorias[$id];
    }
    else
    {
        // Generar nuevo Id de categoria
        $id = date('Ymdhis');
    }

    $categorias[$id] = [
        'id'=>$id,
        'nombre'=>$_POST['nombre'],
    ];

    setDataJSON('categorias', $categorias);

    redirect('categorias.php');
}

if(!empty($_GET['id'])){
    // Array asociativo del JSON de categorias
    $categorias = getDataFromJSON('categorias');
    // Informacion del categoria del id enviado por GET
    $categoria = $categorias[$_GET['id']];
}

$categorias = getDataFromJSON('categorias');

?>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="w-auto" style="display: flex; flex-direction: row; align-items: center;">
                    <a class="btn btn-primary" href="categorias.php"> <i class="fas fa-arrow-left"></i> </a>
                    <div class="text-primary" style="margin-left: 20px;">
                       Añadir Categoria
                    </div>
                </div>

            </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="<?php echo !empty($categoria['nombre']) ? $categoria['nombre'] : ''?>">
                    </div>
                    <button type="submit" name="add" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>

    </div>

<?php include 'includes/footer.php'; ?>