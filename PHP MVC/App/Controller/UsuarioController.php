<?php

class UsuarioController
{
    public static function index()
    {
        include "Model/UsuarioModel.php";

        $model = new UsuarioModel();

        $model->getAllRows();

        include "View/modules/Usuario/ListaUsuario.php";
    }

    public static function form()
    {
        include "View/modules/Usuario/FormUsuario.php";
    }

    public static function save()
    {

        // chamou a classe UsuarioModel
        include "Model/UsuarioModel.php";

        //Instaciou o objeto da classe
        $model = new UsuarioModel();

        // Preencheu as propriedades do objeto com os dados que veio do formulario
        $model->name = $_POST['name'];
        $model->cpf = $_POST['cpf'];
        $model->data_nascimento = $_POST['data_nascimento'];

        //Chamou o método save para inserir no banco
        $model->save();

        //Redireciona para a rota /pessoa
        header("Location: /usuario");
    }
}
