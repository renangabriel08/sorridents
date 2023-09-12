<?=
    $this->layout('base', $data);
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
                <label for="senha">Crie uma nova senha</label>
                <input type="text" name="senha" id="">
            </div>
            <br>
            <div class="cardbuttons">
                <input type="submit" class="btn-login" name="btn" value="Redefinir">
                <button class="btn-login"><a href="/sorridents"></a>Voltar</button>
            </div>
        </form>
    </div>
</div>