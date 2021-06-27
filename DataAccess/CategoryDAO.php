<?php

require_once('DAO.php');
require_once('../Modelos/CategoryEntity.php');

class CategoryDAO extends DAO{


    function __construct($con)
    {
        parent::__construct($con);
        $this->table = 'categories';
    }

    public function getOne($id){
        $sql = "SELECT category_id,name FROM $this->table WHERE category_id = $id";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'CategoryEntity')->fetch();
        return $resultado;

    }

    public function getAll($where = array()){
        $sql = "SELECT category_id,name FROM $this->table WHERE deleted_at IS NULL";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'CategoryEntity')->fetchAll();
        return $resultado;
    }
        
}
?>