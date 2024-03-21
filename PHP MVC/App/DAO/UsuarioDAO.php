<?php

/*
    As classes DAO (Data Acess Object) são responsáveis por executar os SQL junto ao banco de dados
*/

class UsuarioDAO
{

    private $conection;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=php;";

        $this->conection = new PDO($dsn, 'root', 'Fern@ndo123456');
    }

    public function insert(UsuarioModel $model)
    {
        // Preparated statement

        // Utiliza o ? devido a preparar a string para ser substituida pelos valores
        $sql = "INSERT INTO usuario (name, cpf, data_nascimento) VALUES (?, ?, ?)";

        // Prepara com o metodo prepare
        $stmt = $this->conection->prepare($sql);

        // Substitui os valores
        $stmt->bindValue(1, $model->name);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->data_nascimento);

        //Salva no banco de dados
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM usuario";

        $stmt = $this->conection->prepare($sql);

        $stmt->execute();

        // Retorna um array de objetos
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function update(UsuarioModel $model)
    {
        $sql = "UPDATE usuario SET name=?, cpf=?, data_nascimento=? where idUser=?";
        $stmt =  $this->conection->prepare($sql);
        $stmt->bindValue(1, $model->name);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->data_nascimento);
        $stmt->bindValue(4, $model->idUser);
        $stmt->execute();

    }

    public function selectById(int $idUser)
    {
        include_once "Model/UsuarioModel.php";
        $sql = "SELECT * FROM usuario where idUser = ?";
        $stmt = $this->conection->prepare($sql);
        $stmt->bindValue(1, $idUser);
        $stmt->execute();

        return $stmt->fetchObject("UsuarioModel");
    }

    public function delete (int $idUser)
    {
        
        $sql = "DELETE FROM usuario where idUser = ?";

        $stmt = $this->conection->prepare($sql);

        $stmt->bindValue(1, $idUser);

        $stmt->execute();
    }
}
