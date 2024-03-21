<?php

class UsuarioController
{
    public static function index()
    {
        include_once "Model/UsuarioModel.php";

        $model = new UsuarioModel();

        $model->getAllRows();

        include "View/modules/Usuario/ListaUsuario.php";
    }

    public static function form()
    {
        include_once "Model/UsuarioModel.php";
        $model = new UsuarioModel();

        //if(isset($_GET['idUser']))

        $model = $model->getById((int) $_GET['idUser']);

        //var_dump($model);

        include "View/modules/Usuario/FormUsuario.php";
    }

    public static function save()
    {
    
        // chamou a classe UsuarioModel
        include "Model/UsuarioModel.php";

        //Instaciou o objeto da classe
        $model = new UsuarioModel();

        // Preencheu as propriedades do objeto com os dados que veio do formulario
        $model->idUser = $_POST['idUser'];
        $model->name = $_POST['name'];
        $model->cpf = $_POST['cpf'];
        $model->data_nascimento = $_POST['data_nascimento'];

        //Chamou o método save para inserir no banco
        $model->save();

        //Redireciona para a rota /usuario
        header("Location: /usuario");
    }

    public static function update()
    {
        include_once "Model/UsuarioModel.php";
        
        $model = new UsuarioModel();

        $model->idUser = $_POST['idUser'];
        $model->name = $_POST['name'];
        $model->cpf = $_POST['cpf'];
        $model->data_nascimento = $_POST['data_nascimento'];

        $model->update();

        header("Location: /usuario");
        
    }

    public static function delete()
    {
        include "Model/UsuarioModel.php";

        $model = new UsuarioModel();
        
        $model->deleteById( (int) $_GET['idUser']);

        header("Location: /usuario");
        
    }
}
