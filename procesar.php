<?php
 if(!empty($_POST['name']) && !empty($_POST['password'])){
    $name = $_POST['name'];
    $password = $_POST['password'];

    if($name == "admin" && $password == "admin" || $name == "facundo" && $password == "123456"){
        echo "Accedio a la administracion";
        header("Location: admin/index.php");
    }else{
        /* echo "Error usuario o contraseña no valida"; */
        header("Location: index.php");
    }

}else{
    echo "Los datos estan vacios";
}
?>