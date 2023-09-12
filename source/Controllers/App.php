<?php

namespace Source\Controllers;

use Source\Core\Controller;
use Source\Models\Schedule;
use Source\Models\Settings;
use Source\Models\Login;

class App extends Controller
{
    public function __construct()
    {
        parent::__construct(CONF_VIEW_PATH);

        if(!$this->user = Login::user()){
            header('Location: http://localhost/sorridents/');
        }
    }


    public function home()
    {
        $data = [
            'title'=> "Home - ". CONF_SITE_NAME,
            'description'=> CONF_SITE_DESC,
            'url'=> "/home"
        ];

        echo $this->objView->render('home', ["data"=> $data]);
    }

    public function schedule(array $form)
    {
        if(empty($form['data']) || !$form){
            $pesquisa = date('Y-m-d');
        }
        else {
            $pesquisa = $form['data'];
        }

        //trás a estrutura da agenda referente ao dia da semana, da data pesquisada para preecher na tela
        $dSemana = date('w', strtotime($pesquisa));
        $objSettings = new Settings();
        $estruturaAgenda = $objSettings->find("dia_semana = :dia", "dia=".$dSemana)->fetch();

        //trás os dados da agenda referente a data pesquisada
        $objSchedule = new Schedule();
        $dadosAgenda = $objSchedule->find("data = :data", "data=".$pesquisa)->fetch(true);

        $data = [
            'title'=> "Agenda - ". CONF_SITE_NAME,
            'description'=> CONF_SITE_DESC,
            'url'=> "/agenda",
            'pesquisa'=>$pesquisa,
            'estrutura'=>$estruturaAgenda,
            'agenda'=>$dadosAgenda
        ];
        echo $this->objView->render('schedule', ["data"=> $data]);
    }

    public function logout(){

        $this->user = Login::logout();

        $data = [
            'title'=> "Login - ". CONF_SITE_NAME,
            'description'=> CONF_SITE_DESC,
            'url'=> "/"
        ];

        echo $this->objView->render('login', ["data"=> $data]);
    }

 }
