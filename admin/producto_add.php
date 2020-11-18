<?php

include "includes/header.php";
include "../helpers/dataHelper.php";
include "../helpers/functions.php";

// Array asociativo del JSON de productos
$data = getDataFromJSON('productos');

// POST
if(isset($_POST['add'])){
    if(!empty($_GET['id'])){
        // Id del producto
        $id = $_GET['id'];

        // Array asociativo del JSON de productos
        $data = getDataFromJSON('productos');

        // Informacion del producto
        $producto = $data[$id];
    }
    else
    {
        // Generar nuevo Id de producto
        $id = date('Ymdhis');
    }

    $data[$id] = [
        'id'=>$id,
        'nombre'=>$_POST['nombre'],
        'descripcion'=>$_POST['descripcion'],
        'precio'=>$_POST['precio'],
        'stock'=>$_POST['stock']
    ];

    setDataJSON('productos', $data);

    redirect('productos.php');
}

if(!empty($_GET['id'])){
    // Informacion del producto del id enviado por GET
    $producto = $data[$_GET['id']];
}

?>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="w-auto" style="display: flex; flex-direction: row; align-items: center;">
                    <a class="btn btn-primary" href="productos.php"> <i class="fas fa-arrow-left"></i> </a>
                    <div class="text-primary" style="margin-left: 20px;">
                        Añadir Producto
                    </div>
                </div>

            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="<?php echo !empty($producto['nombre']) ? $producto['nombre'] : ''?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Descripcion</label>
                        <textarea class="form-control" name="descripcion" value="<?php echo !empty($producto['descripcion'] ) ? $producto['descripcion'] : ''?>"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Precio</label>
                        <input type="text" class="form-control" name="precio" value="<?php echo !empty($producto) ? $producto['precio'] : ''?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Stock</label>
                        <input type="text" class="form-control" name="stock" value="<?php echo !empty($producto['stock']) ? $producto['stock'] : ''?>">
                    </div>

                    <div class="form-group" style="display: flex; flex-direction: column;">
                        <label for="exampleInputEmail1">Subir Imagen</label>
                        <input type="file">
                    </div>

                    <button type="submit" name="add" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>

    </div>

<?php
include 'includes/footer.php';
?>