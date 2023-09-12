<?php

//Carregamento automatico de arquivos
require __DIR__."/vendor/autoload.php";

//Configurações do sistema de rotas
use CoffeeCode\Router\Router;
$objRouter = new Router(CONF_URL_BASE);
$objRouter->namespace("Source\Controllers");

//Rotas Login
$objRouter->get("/", "Web:login");
$objRouter->post("/", "Web:login");
$objRouter->get("/sair", "App:logout");

//Rotas Home
$objRouter->get("/home", "App:home");
$objRouter->post("/home", "App:home");

//Rotas Registro
$objRouter->get("/cadastro", "Web:register");
$objRouter->post("/cadastro", "Web:register");

//Rotas Agenda
$objRouter->get("/agenda", "App:schedule");
$objRouter->post("/agenda", "App:schedule");

//Rotas Esqueci Senha
$objRouter->get("/esqueci-senha", "Web:forget");
$objRouter->post("/esqueci-senha", "Web:forget");

//Rotas Erro
$objRouter->get("/error", "Web:error");

$objRouter->dispatch();

//ERROR REDIRECT - Controla caso do Dispatch não consiga entregar uma rota funcionando
if ($objRouter->error()){
    $objRouter->redirect("http://localhost/sorridents/error");
}