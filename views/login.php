<?=
    $this->layout('base', $data);

    use Source\Models\Login;

    $msg = $data['msg']; 

    if(isset($_POST['btn']) && empty($msg)){

        $email = $_POST['email'];
        $senha = $_POST['senha'];
    
        $objLogin = new Login();
        $list = $objLogin->logar($email, $senha);
    
        if($list == "ok"){
            $msg = "Login realizado com sucesso";
            header('Location:home');
        } else {
            $msg = "Usuário ou senha incorretos";
        }
    }
?>

<div class="mainlogin">
    <div class="leftlogin">
        <h1>Faça Login <br>E agende sua consulta</h1>
        <img src="/sorridents/views/Assets/images/imgLogin.png" class="left-login-image" alt="">
    </div>
    <div class="rightlogin">
        <form action="" method="post" class="cardlogin">
            <h1>LOGIN</h1>
            <div class="textfield">
                <label for="email">E-mail</label>
                <input type="text" name="email" id="" required/>
            </div>
            <div class="textfield">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="" required/>
            </div>
            <div class="esqueciSenha">
                <a href="/sorridents/esqueci-senha" style="color: #576975; font-size: 13px;">Esqueci a senha</a>
            </div>
            <input type="submit" class="btn-login" name="btn" value="Login">
            <p style="color: #576975; margin-top: 10px;">Não possui conta? <a href="/sorridents/cadastro" style="color: #576975;">Registre-se</a></p>
        <?=$msg?>
        </form>
    </div>
</div>