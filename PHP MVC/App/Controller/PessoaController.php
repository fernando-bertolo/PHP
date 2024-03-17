<?php

class PessoaController
{
    public static function index()
    {
        include "Model/PessoaModel.php";

        $model = new PessoaModel();

        $model->name = $_GET['name'];
        $model->cpf = $_GET['cpf'];
        $model->data_nascimento = $_GET['data_nascimento'];
    }

    public static function form()
    {
        include "View/modules/Pessoa/FormPessoa.php";
    }

    public static function save()
    {

        // chamou a classe PessoaModel
        include "Model/PessoaModel.php";

        //Instaciou o objeto da classe
        $model = new PessoaModel();

        // Preencheu as propriedades do objeto com os dados que veio do formulario
        $model->name = $_POST['name'];
        $model->cpf = $_POST['cpf'];
        $model->data_nascimento = $_POST['data_nascimento'];

        //Chamou o método save para inserir no banco
        $model->save();

        //Redireciona para a rota /pessoa
        header("Location: /pessoa");
    }
}
