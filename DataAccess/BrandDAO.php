<?php

require_once('DAO.php');
require_once('../Modelos/BrandEntity.php');

class BrandDAO extends DAO{


    function __construct($con)
    {
        parent::__construct($con);
        $this->table = 'brands';
    }

    public function getOne($id){
        $sql = "SELECT brand_id,name FROM $this->table WHERE brand_id = $id";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'BrandEntity')->fetch();
        return $resultado;

    }

    public function getAll($where = array()){
        $sql = "SELECT brand_id,name FROM $this->table WHERE deleted_at IS NULL";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'BrandEntity')->fetchAll();
        return $resultado;
    }    
}
?>