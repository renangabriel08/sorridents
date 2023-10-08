<?php
    $this->layout('base', $data);

    use Source\Models\User;

    $msg = $data['msg'];

    if(isset($_POST['btn']) && empty($msg)){

        if(empty($_POST['email']) || empty($_POST['cpf']) || empty($_POST['senha'])) {
            $msg = 'Preencha todos os dados';
        } else {
            //Dados do usuário
            $cpf = $_POST['cpf'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
        
            //Enviando dados para o construtor
            $model = new User();
            $user = $model->find("email = :email AND cpf = :cpf", "email={$email}&cpf={$cpf}")->fetch();

            if($user != null) {
                $user->senha = password_hash($senha,CONF_PASSWD_ALGO, CONF_PASSWD_OPTION);
                $user->save();
                $msg = 'Senha alterada com sucesso!';
            } else {
                $msg = 'Usuário não encontrado';
            }
        }
    }

?>

<div class="mainlogin">
    <div class="leftlogin">
        <h1>Redefina sua senha <br>e faça login</h1>
        <img src="/sorridents/views/Assets/images/imgLogin.png" class="left-login-image" alt="">
    </div>
    <div class="rightlogin">
        <form action="" method="post" class="cardlogin">
            <h1>Redefinir Senha</h1>
            <br>
            <div class="textfield">
                <label for="email">Informe seu e-mail</label>
                <input type="text" name="email" id="">
            </div>
            <div class="textfield">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="">
            </div>
            <div class="textfield">
                <label for="senha">Crie uma nova senha</label>
                <input type="text" name="senha" id="">
            </div>
            <br>
            <div class="cardbuttons">
                <input type="submit" class="btn-login" name="btn" value="Redefinir">
                <button class="btn-login"><a href="/sorridents/"></a>Voltar</button>
            </div>
            <?=$msg?>
        </form>
    </div>
</div>