<?php

include "includes/header.php";
include "../helpers/dataHelper.php";
include "../helpers/functions.php";

// Array asociativo del JSON de marcas
$marcas = getDataFromJSON('marcas');

// POST
if(isset($_POST['add'])){
    if(!empty($_GET['id'])){
        // Id del marca
        $id = $_GET['id'];
        // Informacion del marca
        $marca = $marcas[$id];
    }
    else
    {
        // Generar nuevo Id de marcas
        $id = date('Ymdhis');
    }

    $marcas[$id] = [
        'id'=>$id,
        'nombre'=>$_POST['nombre'],
    ];

    setDataJSON('marcas', $marcas);

    redirect('marcas.php');
}

if(!empty($_GET['id'])){
    // Array asociativo del JSON de marcas
    $marcas = getDataFromJSON('marcas');
    // Informacion del marca del id enviado por GET
    $marca = $marcas[$_GET['id']];
}

$marcas = getDataFromJSON('marcas');

?>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="w-auto" style="display: flex; flex-direction: row; align-items: center;">
                    <a class="btn btn-primary" href="marcas.php"> <i class="fas fa-arrow-left"></i> </a>
                    <div class="text-primary" style="margin-left: 20px;">
                       Añadir Marcas
                    </div>
                </div>

            </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="<?php echo !empty($marca['nombre']) ? $marca['nombre'] : ''?>">
                    </div>
                    <button type="submit" name="add" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>

    </div>

<?php include 'includes/footer.php'; ?>