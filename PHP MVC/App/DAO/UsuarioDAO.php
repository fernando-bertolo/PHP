<?php

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
    public function update(UsuarioModel $model)
    {
    }

    public function select()
    {
        $sql = "SELECT * FROM usuario";

        $stmt = $this->conection->prepare($sql);

        $stmt->execute();

        // Retorna um array de objetos
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}
