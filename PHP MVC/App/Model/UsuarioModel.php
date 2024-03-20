<?php

class UsuarioModel
{
    public $idUser, $name, $cpf, $data_nascimento;
    public $rows;

    public function save()
    {
        include "DAO/UsuarioDAO.php";

        $dao = new UsuarioDAO();

        $dao->insert($this);
    }

    public function getAllRows()
    {
        include "DAO/UsuarioDAO.php";

        $dao = new UsuarioDAO();

        $this->rows = $dao->select($this);
    }
}
