<?php
    $this->layout("base", $data);
    use Source\Models\User;
    use Source\Models\Agreement;
    use Source\Models\Login;
    $estrutura = $data['estrutura'];
    $agenda = $data['agenda'];
    $pesquisa = $data['pesquisa'];
    $tipo = Login::user()->tipo;
    $idUser = Login::user()->id;
    $consultasAgendadas = 0;

    if($estrutura) {
        $horaInicial = $estrutura->agenda_inicio;
        $horaFinal = $estrutura->agenda_fim;
        $tempoConsulta = $estrutura->tempo_consulta;
        $horaInicialAlmoco = $estrutura->agenda_inicio_almoco;
        $horaFinalAlmoco = $estrutura->agenda_fim_almoco;
    }
    if($agenda) {
        $consultasAgendadas = count($agenda);
    }
    $contagemConsultasAgendadas = 0;
?>
<div class="containerAgenda content">
<div class="app_launch_header">
    <form class="app_launch_form_filter app_form" action="<?=CONF_URL_BASE?>/agenda" method="post">

        <input list="datelist" type="date" class="radius mask-month" name="data" value="<?= $pesquisa ?>">
        <button class="filter radius transition icon-filter icon-notext"></button>
    </form>
</div>

    <?php
    if($tipo == "3"){
        ?>
        <section class="app_launch_box">
            <div class="app_launch_item header">
                <p class="hora">Horário</p>
                <p class="category">Paciente</p>
                <p class="enrollment">Convênio</p>
                <p class="price">Contato</p>
                <p class="agendar">Agendar</p>
            </div>
            <?php
            if($estrutura){
                while ($horaInicial <= $horaFinal){
                    if(($horaInicial < $horaInicialAlmoco || $horaInicial >= $horaFinalAlmoco)){
                        if($consultasAgendadas > 0 && $contagemConsultasAgendadas < $consultasAgendadas && $horaInicial == $agenda[$contagemConsultasAgendadas]->hora){
                            $codPaciente = $agenda[$contagemConsultasAgendadas]->paciente;
                            $codConvenio = $agenda[$contagemConsultasAgendadas]->convenio;
                            $contagemConsultasAgendadas++;

                            //Processo para pegar os dados do usuário para serem exibidos
                            $dadosPaciente = (new User())->find("id = :uid", "uid={$codPaciente}")->fetch();
                            $nomePaciente = $dadosPaciente->nome;
                            $celular =  "<a class='icon icon-fsphp-32 link-whatsapp' href='https://api.whatsapp.com/send?phone=55".$dadosPaciente->celular."'>".formata_celular($dadosPaciente->celular)."</a>";

                            //Processo para pegar os dados do convenio para serem exibidos
                            $dadosConvenio = (new Agreement())->find("id = :cid", "cid={$codConvenio}")->fetch();
                            $nomeConvenio = $dadosConvenio->nome;
                        }
                        else{
                            $nomePaciente = "Livre";
                            $nomeConvenio = "Livre";
                            $celular = "Livre";
                        }
                        ?>
                        <article class="app_launch_item">
                            <p class="hora"><?= $horaInicial ?></p>
                            <p class="enrollment"><?= $nomePaciente ?></p>
                            <p class="enrollment"><?= $nomeConvenio ?></p>
                            <p class="enrollment"><?= $celular ?></p>
                            <p class="agendar">
                                <?php if( $nomePaciente == "Livre" ){ ?>
                                    <a href="<?=CONF_URL_BASE?>/register-agendamento/<?=$pesquisa?>/<?=$horaInicial?>"><span title="Agendar" class="check income icon-thumbs-o-up transition"></span></a>
                                <?php } else { ?>
                                    <a href="<?=CONF_URL_BASE?>/deleta-agendamento/<?=$agenda[$contagemConsultasAgendadas-1]->id?>"><span title="Cancelar Agendamento"  class="check expense icon-thumbs-o-down transition"></span></a>
                                <?php } ?>
                            </p>
                        </article>

                        <?php
                    }
                    $horaInicial =  date('H:i:s', strtotime('+'.$tempoConsulta.' minute', strtotime($horaInicial)));

                }
            }
            else { ?>
                <article class="app_launch_item">
                    <p class="">Dia sem agenda!!!</p>
                </article>
                <?php
            }
            ?>
        </section>
    <?php } ?>









<?php
if($tipo == "1"){
    ?>
    <section class="app_launch_box">
        <div class="app_launch_item header">
            <p class="hora">Horário</p>
            <p class="category">Paciente</p>
            <p class="enrollment">Convênio</p>
            <p class="price">Contato</p>
            <p class="agendar">Agendar</p>
        </div>
        <?php
        if($estrutura){
            while ($horaInicial <= $horaFinal){
                if($horaInicial < $horaInicialAlmoco || $horaInicial >= $horaFinalAlmoco){
                    if($consultasAgendadas > 0 && $contagemConsultasAgendadas < $consultasAgendadas && $horaInicial == $agenda[$contagemConsultasAgendadas]->hora){
                        $codPaciente = $agenda[$contagemConsultasAgendadas]->paciente;
                        $codConvenio = $agenda[$contagemConsultasAgendadas]->convenio;
                        $contagemConsultasAgendadas++;

                        //Processo para pegar os dados do usuário para serem exibidos
                        $dadosPaciente = (new User())->find("id = :uid", "uid={$codPaciente}")->fetch();
                        $nomePaciente = $dadosPaciente->nome;
                        $celular =  "<a class='icon icon-fsphp-32 link-whatsapp' href='https://api.whatsapp.com/send?phone=55".$dadosPaciente->celular."'>".formata_celular($dadosPaciente->celular)."</a>";

                        //Processo para pegar os dados do convenio para serem exibidos
                        $dadosConvenio = (new Agreement())->find("id = :cid", "cid={$codConvenio}")->fetch();
                        $nomeConvenio = $dadosConvenio->nome;
                    }
                    else{
                        $nomePaciente = "Livre";
                        $nomeConvenio = "Livre";
                        $celular = "Livre";
                    }
                ?>
                <article class="app_launch_item">
                    <p class="hora"><?= $horaInicial ?></p>
                    <p class="enrollment"><?= $nomePaciente ?></p>
                    <p class="enrollment"><?= $nomeConvenio ?></p>
                    <p class="enrollment"><?= $celular ?></p>
                    <p class="agendar">
                        <?php if( $nomePaciente == "Livre" ){ ?>
                            <a href="<?=CONF_URL_BASE?>/register-agendamento/<?=$pesquisa?>/<?=$horaInicial?>"><span title="Agendar" class="check income icon-thumbs-o-up transition"></span></a>
                        <?php } else { ?>
                            <a href="<?=CONF_URL_BASE?>/deleta-agendamento/<?=$agenda[$contagemConsultasAgendadas-1]->id?>"><span title="Cancelar Agendamento"  class="check expense icon-thumbs-o-down transition"></span></a>
                        <?php } ?>
                    </p>
                </article>

            <?php
            }
                $horaInicial =  date('H:i:s', strtotime('+'.$tempoConsulta.' minute', strtotime($horaInicial)));

            }
        }
        else { ?>
            <article class="app_launch_item">
                    <p class="">Dia sem agenda!!!</p>
            </article>
        <?php
        }
            ?>
    </section>
<?php } ?>
</div>