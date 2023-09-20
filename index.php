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
$objRouter->get("/agenda/{data}", "App:schedule");
$objRouter->post("/deleta-agendamento/{id}", "App:delete_schedule");
$objRouter->get("/deleta-agendamento/{id}", "App:delete_schedule");
$objRouter->get("/register-agendamento/{data}/{hora}", "App:register_schedule");
$objRouter->post("/register-agendamento", "App:register_schedule");
$objRouter->get("/busca-usuarios/{chave}", "App:search_users");

//Rotas Esqueci Senha
$objRouter->get("/esqueci-senha", "Web:forget");
$objRouter->post("/esqueci-senha", "Web:forget");

//Rotas Erro
$objRouter->get("/error", "Web:error");

$objRouter->dispatch();

//ERROR REDIRECT - Controla caso do Dispatch não consiga entregar uma rota funcionando
if ($objRouter->error()){
    $objRouter->redirect(CONF_URL_BASE."/error");
}