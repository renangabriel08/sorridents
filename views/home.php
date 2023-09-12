<?=
    $this->layout('base', $data);
?>

<header>
    <div class="container" style="justify-content: space-between; align-items: center; padding: 2% 2% 0 2%;">
        <div class="logo"><img src="/sorridents/views/assets/images/logo.png" height="70"></div><!--logo-->

        <nav class="menu-desktop">
            <ul>
                <li><a href="/sorridents/agenda">Agendamento</a></li>
                <li><a href="#servicos">Serviços</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#contato">Contato</a></li>
                <li><a href="/sorridents/sair">Sair</a></li>
            </ul>
        </nav>

        <nav id="openMenu" class="menu-mobile">
            <ul id="menu">
                <li><a href="/sorridents/agenda">Agendamento</a></li>
                <li><a href="#servicos">Serviços</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#contato">Contato</a></li>
                <li><a href="/sorridents/sair">Sair</a></li>
            </ul>
        </nav>
    </div><!--container-->
</header>

<section class="mosaico" style="padding: 1% 3% 2% 3%;"> <!-- <div class="container"> -->

    <div class="mosaico-wraper" style="justify-content: center; align-items: center; display: flex;">

        <div class="mosaico-single">

            <div style="background-image: url('/sorridents/views/assets/images/1.png');" class="img-single"></div><!--img-single-->
            <div style="background-image: url('/sorridents/views/assets/images/2.jpg');" class="img-single"></div><!--img-single-->

        </div><!--mosaico-single-->

        <div class="mosaico-single">

            <div style="background-image: url('/sorridents/views/assets/images/3.jpeg');" class="img-single"></div><!--img-single-->
            <div style="background-image: url('/sorridents/views/assets/images/4.jpg');" class="img-single"></div><!--img-single-->

        </div><!--mosaico-single-->

        <div class="mosaico-single">

            <div style="background-image: url('/sorridents/views/assets/images/5.jpg');" class="img-single"></div><!--img-single-->
            <div style="background-image: url('/sorridents/views/assets/images/6.jpg');" class="img-single"></div><!--img-single-->

        </div><!--mosaico-single-->

        <div class="mosaico-single">

            <div style="background-image: url('/sorridents/views/assets/images/1.png');" class="img-single"></div><!--img-single-->
            <div style="background-image: url('/sorridents/views/assets/images/3.jpeg');" class="img-single"></div><!--img-single-->

        </div><!--mosaico-single-->

        <div class="mosaico-single">

            <div style="background-image: url('/sorridents/views/assets/images/5.jpg');" class="img-single"></div><!--img-single-->
            <div style="background-image: url('/sorridents/views/assets/images/1.png');" class="img-single"></div><!--img-single-->

        </div><!--mosaico-single-->

    </div><!--mosaico-wraper-->
    <!-- </div> -->


    <div class="clear"></div>
</section>

<section id="sobre" class="tratamentos">
    <h2>Tratamentos</h2>
    <div class="container">

        <div class="tratamento-container">

            <div class="tratamento-single">
                <h2>Facetas ou lentes de contato dental</h2>
                <p>Geralmente são recomendas por motivos estéticos e envolvem apenas a face frontal dos dentes,
                    estão cada vez mais finas e necessitam pouco desgaste. São utilizadas nos casos de dentes
                    manchados ou restaurados, quando o paciente quer melhorar a estética. </p>
            </div><!--tratamento-single-->

            <div class="tratamento-single">
                <h2>Restaurações estéticas</h2>
                <p>Troque suas restaurações antigas, escuras e manchadas por materiais estéticos e sofisticados.
                </p>
            </div><!--tratamento-single-->

            <div class="tratamento-single">
                <h2>Clareamento Dental</h2>
                <p>Qualquer pessoa pode ter seus dentes naturais clareados. Em alguns casos, quando o paciente tem
                    muitas restaurações e/ou próteses poderá ser necessário associar outros tratamentos para que o
                    resultado estético seja satisfatório. </p>
            </div><!--tratamento-single-->

        </div><!--tratamento-container-->


        <div class="tratamento-container">

            <div class="tratamento-single">
                <h2>Halitose (mau hálito)</h2>
                <p>É uma doença que acomete mais de 40% da população, mas a maioria das pessoas não sentem a sua
                    halitose. Quase 90% são de origem bucal, mas também pode ser um sinal de alguma desordem ou
                    doença sistêmica. Existe SIM tratamento e nós podemos ajudar! </p>
            </div><!--tratamento-single-->

            <div class="tratamento-single">
                <h2>Prótese Total</h2>
                <p>São utilizadas quando existe ausência total dos dentes, neste caso sempre indicamos a colocação
                    de implantes para confecção de prótese do tipo Protocolo sobre Implantes (veja o video acima).
                </p>
            </div><!--tratamento-single-->

            <div class="tratamento-single">
                <h2>Próteses sobre Implantes</h2>
                <p>As próteses fixadas sobre os implantes tem como maior vantagem o fato de não se soltarem durante
                    a mastigação propiciando maior conforto, segurança e eficácia além de maior retenção e estética
                    em relação às próteses móveis. </p>
            </div><!--tratamento-single-->

        </div><!--tratamento-container-->


        <div class="tratamento-container">

            <div class="tratamento-single">
                <h2>Prótese Fixa</h2>
                <p>É o método mais utilizado para se devolver o conforto e estética para os pacientes que necessitam
                    substituir um ou mais dentes. Atualmente, em sua maioria, são feitas em porcelana pura. </p>
            </div><!--tratamento-single-->

            <div class="tratamento-single">
                <h2>Implantes Osseointegrados</h2>
                <p>São feitos de Titânio e colocados por meio de cirurgia para substituição de dentes faltantes.
                    Com a comodidade que a nossa clínica oferece, o paciente poderá optar pelo uso de anestésico
                    local ou sedação intravenosa aplicada pro médico anestesiologista. </p>
            </div><!--tratamento-single-->

            <div class="tratamento-single">
                <h2>Periodontia </h2>
                <p>Doença periodontal é o comprometimento dos tecidos que envolvem os dentes e que leva a inflamação
                    do tecido gengival e/ou reabsorção do osso que está ao redor das raízes dos dentes. A consulta
                    regular ao periodontista é fundamental para a saúde bucal. </p>
            </div><!--tratamento-single-->

        </div><!--tratamento-container-->

        <!-- <div class="clear"></div> -->

    </div><!--container-->
</section>

<section id="contato" class="formulario">
    <h2>contato</h2>
    <form>
        <div class="form">
            <p>Seu Nome</p>
            <input type="text" required>
        </div><!--form-->

        <div class="form">
            <p>Seu E-mail</p>
            <input type="email" required>
        </div><!--form-->

        <div class="form">
            <p>Seu Telefone</p>
            <input type="text" required>
        </div><!--form-->

        <div class="txt-area">
            <p>Mensagem</p>
            <textarea required></textarea>
        </div>

        <div class="btn">
            <input type="submit" value="ENVIAR">
        </div>
    </form>
</section>


<section class="info-geral" style="justify-content: center; display: flex;">
    <div class="rodape-container" style="justify-content: space-between; display: flex;">
        <div class="box-rodape">
            <h1>Telefones</h1>
            <p>Consultas: <a href="#">(14)99829-7799</a></p>
            <p>Fixo: <a href="#">(14)3488-1391</a></p>
            <p>WhatsApp: <a href="#">(14)99829-7799</a></p>
        </div><!--box-rodape-->

        <div class="box-rodape">
            <h1>Horários</h1>
            <p>Segunda a Sexta <br>

                09:00 - 11:30 - 14:00 - 18:30
            </p>
        </div><!--box-rodape-->

        <div class="box-rodape">
            <h1>Endereço</h1>
            <p>Av. Trompowsky, 291. Torre 1 sala 103 <br>

                Cep 88015-300 - Florianópolis, SC.
            </p>
        </div><!--box-rodape-->
    </div><!--rodape-container-->
</section>