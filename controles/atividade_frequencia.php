<?php

session_start();
require_once('classes/atividade_frequencia.php');
require_once('classes/ocorrencias.php');
require_once('classes/util.php');
$util = new Util();
$util->Seguranca($_SESSION['idusuarios'], '../../index.php');

function Processo($Processo) {

    /* Atributos Globais */
    $util = new Util();
    $frequencia = new Atividade_frequencia();
    $ocorrencias = new Ocorrencias();
    global $linha;
    global $rs;
    global $linha2;
    global $rs2;
    global $linha3;
    global $rs3;
    global $linha4;
    global $rs4;
    global $linha5;
    global $rs5;
    global $linha6;
    global $rs6;
    global $linha7;
    global $rs7;

    /* Switch processos */
    switch ($Processo) {
        /* incluir */
        case 'incluir':

            $frequencia->consultar("select * from curso order by siglacurso, descricao");
            $linha = $frequencia->Linha;
            $rs = $frequencia->Result;

            $frequencia->consultar("select * from turno order by descricao");
            $linha2 = $frequencia->Linha;
            $rs2 = $frequencia->Result;

            $frequencia->consultar("select * from disciplinas order by descricao");
            $linha3 = $frequencia->Linha;
            $rs3 = $frequencia->Result;

            $frequencia->consultar("select *, DATE_FORMAT(data_vigencia,'%d/%m/%Y') as vigencia from matriz order by data_vigencia desc");
            $linha4 = $frequencia->Linha;
            $rs4 = $frequencia->Result;

            $frequencia->consultar("select * from situacaoturma order by descricao");
            $linha5 = $frequencia->Linha;
            $rs5 = $frequencia->Result;

            $frequencia->consultar("select * from grade_horario order by descricao");
            $linha6 = $frequencia->Linha;
            $rs6 = $frequencia->Result;

            $frequencia->consultar("select * from pessoas p inner join professor prof on(p.idpessoas = prof.idpessoas) inner join matriculaprofessor mp 
on(prof.idpessoas = mp.idpessoas) order by mp.matriculaprofessor, p.nome");
            $linha7 = $frequencia->Linha;
            $rs7 = $frequencia->Result;

            if ($_POST['ok'] == 'true') {
                try {
                    //Chamar Incluir

                    $frequencia->consultar("BEGIN");
                    $frequencia->Incluir($_POST['idturma'], $_POST['siglacurso'], $_POST['sigladisciplina'], $_POST['idmatriz'], $_POST['matriculaprofessor'], $_POST['idgrade_horario'], $_POST['idperiodoletivo'], $_POST['idturno'], $_POST['idsituacaoturma'], $_POST['qtdetotal']);
                    $frequencia->consultar("COMMIT");

                    $util->Msgbox('REGISTRO SALVO COM SUCESSO!');
                    $util->redirecionamentopage('default.php?pg=view/turmas/consulta.php&form=Consulta de Turmas');
                } catch (Exception $ex) {
                    $frequencia->consultar("ROLLBACK");
                    $util->msgbox("Falha de operacao");
                }
            }
            break;

        /* Consulta de dados */
        case 'consultar':
            global $linha;
            global $rs;
            global $linha2;
            global $rs2;
            global $linha3;
            global $rs3;
            global $prof;


            $frequencia->consultar("select * from periodoletivo order by siglaperiodo desc");
            $linha = $frequencia->Linha;
            $rs = $frequencia->Result;

            $frequencia->consultar("select * from turno order by descricao");
            $linha2 = $frequencia->Linha;
            $rs2 = $frequencia->Result;

            if ($_POST['ok'] == 'consulta') {

                $frequencia->consultar("select * from turma t inner join inscricao i on(t.idturma = i.idturma) inner join matriculaaluno ma 
 on(ma.matricula_aluno=i.matricula_aluno) inner join alunos a on(ma.idpessoas = a.idpessoas) 
 inner join pessoas p on(p.idpessoas = a.idpessoas) inner join periodoletivo pl on(pl.idperiodoletivo = t.idperiodoletivo) 
 inner join disciplinas d on(t.sigladisciplina = d.sigladisciplina)
 where t.idturma='" . $_POST['idturma'] . "' and t.idperiodoletivo=" . $_POST['idperiodoletivo'] . " "
                        . "and t.sigladisciplina='" . $_POST['sigladisciplina'] . "' group by p.nome order by p.nome");
                $linha3 = $frequencia->Linha;
                $rs3 = $frequencia->Result;
             
                $frequencia->consultar("select * from pessoas p inner join matriculaprofessor mp on(p.idpessoas = mp.idpessoas) "
                        . "inner join turma t on(t.matriculaprofessor=mp.matriculaprofessor) where t.idturma='" . $_POST['idturma'] . "' and t.idperiodoletivo=" . $_POST['idperiodoletivo']." and t.sigladisciplina='" . $_POST['sigladisciplina'] . "'");                
                $linhaprof = $frequencia->Linha;
                $rsprof = $frequencia->Result;
                
               if($linhaprof>0 && @mysql_result($rsprof, 0,'p.nome')!=''){
                   $prof= mysql_result($rsprof, 0,'p.nome'); 
               }else{
                    $prof= "Professor inexistente na Turma !";
               }
                
            }


            if ($_POST['ok'] == 'true') {

                try {
                    $frequencia->consultar("BEGIN");
                    for ($i = 0; $i < $linha; $i++) {

                        if ($_POST['ch' . $i] == "on") {
                            $flag = 1;
                            $frequencia->Incluir($_POST['idturmah'], $_POST['matricula' . $i], $util->formatoDataYMD($_POST['data_freq']), $flag, null);
                            
                            $descricao = "Realizado Lançamento de Frequência e Atividade Acadêmica da Turma" . $_POST['idturmah'] . " e disciplina <b>".$_POST['sigladisciplina']."</b> pelo usuário <b>" . $_SESSION['login'] . "</b>";
                            $funcionalidade = "Cadastro de novo aluno";
                            $ocorrencias->Incluir($_SESSION['idusuarios'], utf8_decode($descricao), utf8_decode($funcionalidade));

                            $util->msgbox('REGISTRO SALVO COM SUCESSO!');
                            $util->redirecionamentopage('default.php?pg=view/ocorrencias/ocorrencias.php&form= Ocorrências que merecem atenção&idmodulos=2');
                            $frequencia->consultar("COMMIT");
                        }
                    }
                } catch (Exception $ex) {
                    
                }
            }
            break;

        /* Edição de dados */
        case 'editar':
            //query ok
            global $linha;
            global $rs;
            global $linha2;
            global $rs2;
            global $linha3;
            global $rs3;
            global $linha4;
            global $rs4;
            global $linha5;
            global $rs5;
            global $linha6;
            global $rs6;
            global $linha7;
            global $rs7;
            global $ln;
            global $r;

            $frequencia->consultar("select * from turma t inner join periodoletivo pl on(t.idperiodoletivo = pl.idperiodoletivo) inner join situacaoturma st 
on(t.idsituacaoturma = st.idsituacaoturma) INNER join turno on(t.idturno=turno.idturno) 
inner join disciplinas d on(t.sigladisciplina=d.sigladisciplina) 
left join matriculaprofessor mp on(t.matriculaprofessor = mp.matriculaprofessor) 
inner join grade_horario gh on(t.idgrade_horario = gh.idgrade_horario)
 where t.sigladisciplina='" . $_GET['sigladisciplina'] . "' and t.idmatriz='" . $_GET['idmatriz'] . "' and t.idturma='" . $_GET['idturmas'] . "' and t.siglacurso='" . $_GET['siglacurso'] . "' and t.idperiodoletivo=" . $_GET['idperiodoletivo'] . " and t.idturno=" . $_GET['idturno'] . " and t.idgrade_horario=" . $_GET['idgrade_horario'] . " order by gh.descricao,turno.descricao, d.descricao, st.descricao");


            $ln = $frequencia->Linha;
            $r = $frequencia->Result;


            $frequencia->consultar("select * from curso order by siglacurso, descricao");
            $linha = $frequencia->Linha;
            $rs = $frequencia->Result;

            $frequencia->consultar("select * from turno order by descricao");
            $linha2 = $frequencia->Linha;
            $rs2 = $frequencia->Result;

            $frequencia->consultar("select * from disciplinas order by descricao");
            $linha3 = $frequencia->Linha;
            $rs3 = $frequencia->Result;

            $frequencia->consultar("select *, DATE_FORMAT(data_vigencia,'%d/%m/%Y') as vigencia from matriz order by data_vigencia desc");
            $linha4 = $frequencia->Linha;
            $rs4 = $frequencia->Result;

            $frequencia->consultar("select * from situacaoturma order by descricao");
            $linha5 = $frequencia->Linha;
            $rs5 = $frequencia->Result;

            $frequencia->consultar("select * from grade_horario order by descricao");
            $linha6 = $frequencia->Linha;
            $rs6 = $frequencia->Result;

            $frequencia->consultar("select * from pessoas p inner join professor prof on(p.idpessoas = prof.idpessoas) inner join matriculaprofessor mp 
on(prof.idpessoas = mp.idpessoas) order by mp.matriculaprofessor, p.nome");
            $linha7 = $frequencia->Linha;
            $rs7 = $frequencia->Result;

            if ($_POST['ok'] == 'true') {
                try {
                    //Chamar Alterar

                    $frequencia->consultar("BEGIN");
                    $frequencia->Alterar($_GET['idturmas'], $_GET['idmatriz'], $_GET['siglacurso'], $_GET['sigladisciplina'], $_GET['idperiodoletivo'], $_GET['idgrade_horario'], $_POST['idturma'], $_POST['siglacurso'], $_POST['sigladisciplina'], $_POST['idmatriz'], $_POST['matriculaprofessor'], $_POST['idgrade_horario'], $_POST['idperiodoletivo'], $_POST['idturno'], $_POST['idsituacaoturma'], $_POST['qtdetotal']);
                    $frequencia->consultar("COMMIT");
                    $util->Msgbox('REGISTRO EDITADO COM SUCESSO!');
                    $util->redirecionamentopage('default.php?pg=view/turmas/consulta.php&form=Consulta de Turmas');
                } catch (Exception $ex) {
                    $frequencia->consultar("ROLLBACK");
                    $util->msgbox("Falha de operacao");
                }
            }
            break;
    }
}

?>