<?php

include "includes/header.php";
include "../helpers/dataHelper.php";
include "../helpers/functions.php";

// Array asociativo del JSON de productos
$productos = getDataFromJSON('productos');

?>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Añadir Producto
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Descripcion</label>
                        <textarea class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Precio</label>
                        <input type="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Stock</label>
                        <input type="email" class="form-control">
                    </div>

                    <div class="form-group" style="display: flex; flex-direction: column;">
                        <label for="exampleInputEmail1">Subir Imagen</label>
                        <input type="file">
                    </div>

                    <button type="Enviar" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>

<?php
include 'includes/footer.php';
?>