<?php

include "./Controller/UsuarioController.php";
include "./Controller/HomeController.php";
// Pega URL que o usuário esta tentando acessar
$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch ($url) {
    case "/":
        HomeController::home();
        UsuarioController::form();
        break;

    case "/usuario":
        UsuarioController::index();
        break;

    // case "/usuario/form":
    //     UsuarioController::form();
    //     break;

    case "/usuario/form/save":
        UsuarioController::save();
        break;

    case "/usuario/edit":
        UsuarioController::update();
        break;

    case "/usuario/delete":
        UsuarioController::delete();
        break;

    default:
        echo "Erro 404";
}
