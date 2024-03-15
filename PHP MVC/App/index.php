<?php

include "./Controller/PessoaController.php";
// Pega URL que o usuário esta tentando acessar
$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH); 

switch($url){
    case "/":
        echo "Página inicial";
    break;

    case "/pessoa":
        PessoaController::index();
    break;

    case "/pessoa/form":
        PessoaController::form();
    break;

    case "pessoa/form/save":
        PessoaController::save();
    break;




    default:
        echo "Erro 404";
}