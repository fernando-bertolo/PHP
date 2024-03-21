<?php

class UsuarioModel
{
    public $idUser, $name, $cpf, $data_nascimento;
    public $rows;

    public function save()
    {
        include_once "DAO/UsuarioDAO.php";

        $dao = new UsuarioDAO();
        $dao->insert($this);

        // if(empty($this->idUser)){
        //     $dao->insert($this);
        // } else {
        //     $dao->update($this);
        // }

    }

    public function update(){
        include_once "DAO/UsuarioDAO.php";

        $dao = new UsuarioDAO();

        $dao->update($this);
    }

    public function getAllRows()
    {
        include_once "DAO/UsuarioDAO.php";

        $dao = new UsuarioDAO();

        $this->rows = $dao->select($this);
    }

    public function getById(int $idUser)
    {
        include_once "DAO/UsuarioDAO.php";

        $dao = new UsuarioDAO();

        $obj = $dao->selectById($idUser);

        return ($obj) ? $obj : new UsuarioModel();

        /*
        if($obj){
            return $obj;
        } else {
            return new UsuarioModel();
        }
        */
    }


    public function deleteById(int $idUser)
    {
        include "DAO/UsuarioDAO.php";

        $dao = new UsuarioDAO();

        $dao->delete($idUser);

    }
}
