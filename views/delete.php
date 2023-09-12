<?php
use Source\Models\User;

//pegando os dados vindo do controller
$msg = $data['msg']; 

    //Verifico se o botão foi precionado e se a mensagem vem em branco
    //lá do controller, pois se vier alguma mensagem de erro não posso entrar aqui
    //neste caso a mensagem é apresentada no fim do formulário.
    //Caso o botão tenha sido precionado e não tenha mensagem de erro,
    //ele entra aqui.
    if(isset($_POST['btn']) && empty($msg)){
        //recupera a informação do formulário.
        $id = $_POST['id'];
        //cria um objeto usuário setando o usuário com o id informado no formulário        
        $user = (new User())->findById($id);

        //Verifico se o usuário com o id passado foi encontrado
        if(!empty($user)){
        //usa metodo destroy do datalayer para excluir esse usuario setado do banco de dados.
            $result = $user->destroy();
            $msg = "Usuário {$id}, excluido com sucesso.";
        }
        else{
            $msg = "Usuário informado não existe em nossos cadastros.";
        }       
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Código:
        <input type="text" name="id" id="id"><br>
        <input type="submit" value="Ir" name="btn">
    </form>
    <?=$msg?>
</body>
</html>