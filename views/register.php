<?php
    $this->layout('base', $data);

    use Source\Models\User;

    $msg = $data['msg'];

    if(isset($_POST['btn']) && empty($msg)){
        
        //Dados do usuário
        $nome = $_POST['nome'];
        $cep = $_POST['cep'];
        $logradouro = $_POST['logradouro'];
        $numero = $_POST['numero'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $rg = $_POST['rg'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $crm = $_POST['crm'];
        $tipo = 3;
        $convenio = $_POST['convenio'];
        $conv_numero = $_POST['conv_numero'];
        $complemento = $_POST['complemento'];
        $celular = $_POST['celular'];
      
        //Enviando dados para o construtor
        $user = new User();
        $user->nome = $nome;
        $user->cep = $cep;
        $user->logradouro = $logradouro;
        $user->numero = $numero;
        $user->bairro = $bairro;
        $user->cidade = $cidade;
        $user->estado = $estado;
        $user->rg = $rg;
        $user->cpf = $cpf;
        $user->email = $email;
        $user->senha = password_hash($senha,CONF_PASSWD_ALGO, CONF_PASSWD_OPTION);

        $user->crm = $crm;
        $user->tipo = $tipo;
        $user->convenio = $convenio;
        $user->conv_numero = $conv_numero;
        $user->complemento = $complemento;

        $user->celular = $celular;

        //usa metodo save para salvar esse usuário no banco de dados
        $user->save();
        $userId = $user->id;

        if(!empty($userId)){
            $msg = "Cadastro realizado com sucesso!";
        }
        else{
            $msg = "Erro ao cadastrar usuário, tente novamente.";
        }
    }

?>

<div class="mainlogin">
    <div class="leftlogin">
        <h1>Se registre <br>E agende sua consulta</h1>
        <img src="/sorridents/views/Assets/images/imgLogin.png"
            class="left-login-image" alt="">
    </div>
    <div class="rightlogin">
        <form action="" method="post" class="cardlogin">
            <h1>Registro</h1>
            <div class="textfield">
                <label for="nome">Nome</label>
                <input type="text" name="nome" placeholder="Nome" id="">
            </div>
            <div class="textfield">
                <label for="cep">Cep</label>
                <input type="number" name="cep" placeholder="00000111" id="cep" onchange="chamarDados()">
            </div>
            <div class="end" style="display: flex; gap: 10px; width: 100%;">
                <div class="textfield" style="width: 400%;">
                    <label for="logradouro">Logradouro</label>
                    <input type="text" name="logradouro" placeholder="Rua Legal" id="logradouro">
                </div>
                <div class="textfield">
                    <label for="numero">Número</label>
                    <input type="number" name="numero" placeholder="Nº" id="">
                </div>
            </div>
            
            <div class="end" style="display: flex; gap: 10px; width: 100%;">
                <div class="textfield" style="width: 50%;">
                    <label for="cidade">Cidade</label>
                    <input type="text" name="cidade" placeholder="Cidade" id="cidade">
                </div>
                <div class="textfield" style="width: 50%;">
                    <label for="estados">Estado</label>
                    <select name="estado" id="estados">
                        <option value="">Selecione</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                        </select>
                </div>
            </div>
            <div class="end" style="display: flex; gap: 10px; width: 100%;">
                <div class="textfield" style="width: 50%;">
                    <label for="bairro">Bairro</label>
                    <input type="text" name="bairro" placeholder="Bairro" id="bairro">
                </div>
                <div class="textfield" style="width: 50%;">
                    <label for="complemento">Complemento</label>
                    <input type="text" name="complemento" placeholder="Complemento" id="complemento">
                </div>
            </div>
            <div class="end" style="display: flex; gap: 10px; width: 100%;">
                <div class="textfield" style="width: 33%;">
                    <label for="rg">Rg</label>
                    <input type="number" name="rg" placeholder="00.000.000-0" id="">
                </div>
                <div class="textfield" style="width: 33%;">
                    <label for="cpf">CPF</label>
                    <input type="number" name="cpf" placeholder="000.000.000-00" id="">
                </div>
                <div class="textfield" style="width: 33%;">
                    <label for="celular">Celular</label>
                    <input type="number" name="celular" placeholder="14999999999" id="" maxlength="11" minlength="11" required>
                </div>
            </div>
            <div class="textfield">
                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="exemplo@gmail.com" id="">
            </div>
            <div class="textfield">
                <label for="senha">Senha</label>
                <input type="password" name="senha" placeholder="********" id="">
            </div>
            <div class="end" style="display: flex; gap: 10px; width: 100%;">
                <div class="textfield">
                    <label for="crm">CRM</label>
                    <input type="text" name="crm" placeholder="CRM" id="">
                </div>
                <div class="textfield">
                    <label for="convenio">Convenio</label>
                    <input type="text" name="convenio" placeholder="Convenio" id="">
                </div>
                <div class="textfield">
                    <label for="conv_numero">Nº convenio</label>
                    <input type="text" name="conv_numero" placeholder="Nº convenio" id="">
                </div>
            </div>
            <input type="submit" class="btn-login" name="btn" value="Registrar">
            <p style="color: #576975;">Já possui conta? <a href="/sorridents/"  style="color: #576975; text-decoration: none;">Clique aqui</a></p>
            <?=$msg?>
        </form>
    </div>
</div>