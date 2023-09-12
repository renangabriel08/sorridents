<?php

namespace Source\Models;
use Source\Core\Session;

class Login extends User
{
    private $session;
    public function __construct()
    {
        parent::__construct("user",["id"],["email","password"]);
        $this->session = new Session();
    }
    
    public static function user(){
        $session = new Session();
        if(!$session->has('idUser')){
            return null;
        }

        return (new User())->findById($session->get("idUser"));
    }

    public static function logout(){
        $session = new Session();
        $session->unset("idUser");
        
    }
    
    public function logar(string $email, string $pass){
       
        $user = new User();
        $result = $user->find("email = :email", "email=".$email)->fetch();
       
       if(!$result){
        $message = "Usuário não existe";
        return $message;
       }
       
       if(!password_verify($pass, $result->senha)){
        $message = "Senha incorreta";
        return $message;
       }
       $message = [
        'type'=> 'sucess',
        'message'=> 'Login efetuado com sucesso.'
       ];

       $this->session->set("message", $message);
       $this->session->set("idUser", $result->id);
       $message = "ok";
       return $message;

    }

}
