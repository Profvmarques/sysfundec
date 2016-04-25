<?php
session_start();
require_once('classes/eventoperiodoletivo.php');
require_once('classes/util.php');
$util = new Util();
$util->Seguranca($_SESSION['idusuarios'], '../../index.php');
/* Function Processos */
global $Adm_modulos;

function Processo($Processo) {

    /* Atributos Globais */
    $util = new Util();
    $evento = new EventoPeriodoletivo();

    /* Switch processos */
    switch ($Processo) {
        /* incluir */
        case 'incluir':
            global $linha;
            global $rs;
            global $linha6;
            global $rs6;
            global $linha7;
            global $rs7;
            
            $evento->consultar("select * from curso order by siglacurso,descricao");
            $linha=$evento->Linha;
            $rs=$evento->Result;
            
            $evento->consultar("select * from periodoletivo p order by p.siglaperiodo desc");
            $linha6=$evento->Linha;
            $rs6=$evento->Result;
            
            $evento->consultar("select * from tipoevento order by descricao");
            $linha7=$evento->Linha;
            $rs7=$evento->Result;
            
            if ($_POST['ok']=='true') {
              
                try {
                    //Chamar Incluir
                    $semestre=substr($_POST['siglaperiodo'], -1);         
                    $evento->consultar("BEGIN");
                    $evento->Incluir($_POST['idperiodoletivo'], $_POST['idtipoevento'], $util->formatoDataYMD($_POST['data_inicio']), $util->formatoDataYMD($_POST['data_fim']), $_POST['descricao']);
                    $evento->consultar("COMMIT");

                    $util->msgbox('REGISTRO SALVO COM SUCESSO!');
                    $util->redirecionamentopage('default.php?pg=view/evento_periodo_letivo/consulta.php&form=Consulta de Calendário de Período Letivo');
                } catch (Exception $ex) {
                    $evento->consultar("ROLLBACK");
                    $util->msgbox("Falha de operacao");
                }
           
           } 
            break;

        case 'consulta':
            global $linha;
            global $rs;
            global $linha2;
            global $rs2;            
               
            $evento->consultar("select * from curso order by siglacurso,descricao");
            $linha2=$evento->Linha;
            $rs2=$evento->Result;
            
            if ($_POST['ok'] == 'true') {
       
                $evento->consultar("select *, DATE_FORMAT(epl.data_inicio,'%d/%m/%Y') as inicio, DATE_FORMAT(epl.data_fim,'%d/%m/%Y') as final from curso c inner join periodoletivo pl on(c.siglacurso=pl.siglacurso) inner join eventoperiodoletivo epl on(pl.idperiodoletivo = epl.idperiodoletivo) inner join tipoevento te on(epl.idtipoevento=te.idtipoevento)
  where pl.siglacurso ='".$_POST['siglacurso']."' and epl.idperiodoletivo='".$_POST['idperiodoletivo']."' order by pl.siglacurso, epl.data_inicio desc, epl.data_fim desc, te.descricao");
                $linha= $evento->Linha;
                $rs= $evento->Result;
            }
            break;

        /* Edição de dados */
        case 'editar':
            global $linha;
            global $rs;
            global $linha6;
            global $rs6;
            global $linha7;
            global $rs7;
             global $linha8;
            global $rs8;
            
            $evento->consultar("select * from curso order by siglacurso,descricao");
            $linha=$evento->Linha;
            $rs=$evento->Result;
            
            $evento->consultar("select * from periodoletivo p order by p.siglaperiodo desc");
            $linha6=$evento->Linha;
            $rs6=$evento->Result;
            
            $evento->consultar("select * from tipoevento order by descricao");
            $linha7=$evento->Linha;
            $rs7=$evento->Result;
            
            $evento->consultar("select *,date_format(data_inicio,'%d/%m/%Y') as inicio, date_format(data_fim,'%d/%m/%Y') as final from eventoperiodoletivo where idevento_periodo_letivo=".$_GET['id']);
            $linha8=$evento->Linha;
            $rs8=$evento->Result;
            
            if ($_POST['ok'] == 'true') {
                try {
                    //Chamar Incluir

                    $evento->consultar("BEGIN");
                    $semestre=substr($_POST['siglaperiodo'], -1); 
                    $evento->Alterar($_GET['id'],$_POST['idtipoevento'], $util->formatoDataYMD($_POST['data_inicio']), $util->formatoDataYMD($_POST['data_fim']),$_POST['descricao']);
                    $evento->consultar("COMMIT");

                    $util->msgbox('REGISTRO SALVO COM SUCESSO!');
                    $util->redirecionamentopage('default.php?pg=view/evento_periodo_letivo/consulta.php&form=Consulta de Período Letivo');
                } catch (Exception $ex) {
                    $evento->consultar("ROLLBACK");
                    $util->msgbox("Falha de operacao");
                }
            }
            break;

    }
}

?>