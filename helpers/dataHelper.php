<?php

function getDataFromJSON($nombre){
    $data = file_get_contents("../db/$nombre.json");
    return json_decode($data,true);
}

function setDataJSON($nombre, $data){
    $fp = fopen("../db/$nombre.json",'w');
    //convierto a json string
    $datosString = json_encode($data);
    //guardo el archivo
    fwrite($fp, $datosString);
    fclose($fp);
}
