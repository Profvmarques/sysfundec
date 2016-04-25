<?php

session_start();
require_once('classes/ocorrencias.php');
require_once('classes/inscricao.php');
require_once('classes/util.php');
$util = new Util();
$util->Seguranca($_SESSION['idusuarios'], '../../index.php');

function Processo($Processo) {

    /* Switch processos */
    switch ($Processo) {
        /* incluir */
        case 'consultar':

            /* Atributos Globais */
            $util = new Util();
            $inscricao = new Inscricao();
            global $linha;
            global $rs;
            global $linha2;
            global $rs2;
            global $linha3;
            global $rs3;

            $inscricao->consultar("select * from curso order by siglacurso, descricao");
            $linha = $inscricao->Linha;
            $rs = $inscricao->Result;

            $inscricao->consultar("select * from pessoas p inner join professor prof on(p.idpessoas = prof.idpessoas) inner join matriculaprofessor mp 
on(prof.idpessoas = mp.idpessoas) order by p.nome, mp.matriculaprofessor, mp.carga_horaria");
            $linha2 = $inscricao->Linha;
            $rs2 = $inscricao->Result;


            if ($_POST['ok'] == 'true') {
                $inscricao->consultar("select * from turma t inner join curso c on(c.siglacurso=t.siglacurso) inner join disciplinas d on(t.sigladisciplina=d.sigladisciplina) 
inner join matriculaprofessor mp on(t.matriculaprofessor = mp.matriculaprofessor) inner join professor prof 
on(prof.idpessoas=mp.idpessoas) inner join pessoas p on(prof.idpessoas=p.idpessoas) 
inner join periodoletivo pl on(t.idperiodoletivo = pl.idperiodoletivo) 
inner join componentecurricular cc on(t.sigladisciplina=cc.sigladisciplina) inner join inscricao i on(t.idturma=i.idturma)
where t.siglacurso='" . $_POST['siglacurso'] . "' and t.idperiodoletivo='" . $_POST['idperiodoletivo'] . "' "
                        . "and t.matriculaprofessor='" . $_POST['matriculaprofessor'] . "' group by t.idturma order by t.idturma, d.descricao");
                $linha3 = $inscricao->Linha;
                $rs3 = $inscricao->Result;
            }
            break;
            
            case 'consultarProfessor':

            /* Atributos Globais */
            $util = new Util();
            $inscricao = new Inscricao();
            global $linha;
            global $rs;
            global $linha2;
            global $rs2;
            global $linha3;
            global $rs3;

            $inscricao->consultar("select * from curso order by siglacurso, descricao");
            $linha = $inscricao->Linha;
            $rs = $inscricao->Result;

            $inscricao->consultar("select * from pessoas p inner join professor prof on(p.idpessoas = prof.idpessoas) inner join matriculaprofessor mp 
on(prof.idpessoas = mp.idpessoas) where p.idpessoas=".$_SESSION['idpessoas']." order by mp.matriculaprofessor, p.nome, mp.carga_horaria");
            $linha2 = $inscricao->Linha;
            $rs2 = $inscricao->Result;


            if ($_POST['ok'] == 'true') {
                $inscricao->consultar("select * from turma t inner join curso c on(c.siglacurso=t.siglacurso) inner join disciplinas d on(t.sigladisciplina=d.sigladisciplina) 
inner join matriculaprofessor mp on(t.matriculaprofessor = mp.matriculaprofessor) inner join professor prof 
on(prof.idpessoas=mp.idpessoas) inner join pessoas p on(prof.idpessoas=p.idpessoas) 
inner join periodoletivo pl on(t.idperiodoletivo = pl.idperiodoletivo) 
inner join componentecurricular cc on(t.sigladisciplina=cc.sigladisciplina) inner join inscricao i on(t.idturma=i.idturma)
where t.siglacurso='" . $_POST['siglacurso'] . "' and t.idperiodoletivo='" . $_POST['idperiodoletivo'] . "' "
                        . "and t.matriculaprofessor='" . $_POST['matriculaprofessor'] . "' group by t.idturma order by t.idturma, d.descricao");
                $linha3 = $inscricao->Linha;
                $rs3 = $inscricao->Result;
            }
            break;

        case 'atualizarNotas':

            /* Atributos Globais */
            $util = new Util();
            $inscricao = new Inscricao();
            $ocorrencias = new Ocorrencias();
            global $linha;
            global $rs;
            global $linha2;
            global $rs2;
            global $linha3;
            global $rs3;
            global $avaliacao;


            $inscricao->consultar("select * from inscricao i inner join turma t on(i.idturma=t.idturma) inner JOIN matriculaaluno ma on(ma.matricula_aluno=i.matricula_aluno) 
inner join alunos a on(ma.idpessoas=a.idpessoas) inner join pessoas p on(p.idpessoas=a.idpessoas) 
inner join situacaoinscricao si on(i.idsituacaoinscricao=si.idsituacaoinscricao)
where i.idturma='" . $_GET['idturmas'] . "' AND t.idperiodoletivo='" . $_GET['idperiodoletivo'] . "' "
                    . "and i.sigladisciplina='" . $_GET['sigladisciplina'] . "' and t.siglacurso='" . $_GET['siglacurso'] . "' group by p.nome,i.matricula_aluno");
            $linha3 = $inscricao->Linha;
            $rs3 = $inscricao->Result;

            if ($_GET['tipo'] == "av1") {
                $avaliacao = "1° AVALIAÇÃO";
            }

            if ($_GET['tipo'] == "av2") {
                $avaliacao = "2° AVALIAÇÃO";
            }
            if ($_GET['tipo'] == "as") {
                $avaliacao = "VERIFICAÇÃO SEMESTRAL";
            }

            if ($_POST['ok'] == 'true') {

                try {

                    for ($i = 0; $i < $linha3; $i++) {

                        if ($_GET['tipo'] == 'av1') {
                            $idinscricao = mysql_result($rs3, $i, 'i.idinscricao');
                            $matricula_aluno = mysql_result($rs3, $i, 'ma.matricula_aluno');
                            //$data_inscricao=mysql_result($rs3, $i,'i.data_inscricao');                     
                            $av1 = $_POST['av1' . $i];
                            $nota1 = $_POST['nota1' . $i];
                            $falta_api = $_POST['falta_api' . $i];

                            $av2 = mysql_result($rs3, $i, 'i.av2');
                            $nota2 = mysql_result($rs3, $i, 'i.av2');
                            $falta_apii = mysql_result($rs3, $i, 'i.falta_apii');
                            $nota3 = mysql_result($rs3, $i, 'i.nota3');
                            $mediafinal = ($av1 + $nota1) / 2;
                            $idsituacaoinscricao = 1;
                            $pg = 'pg=view/lancamentos/avaliacao_notas_faltas.php&form=Atualizar Notas/Faltas&disciplina=' . $_GET['disciplina'] . '&idturmas=' . $_GET['idturmas'] . '&idturno=' . $_GET['idturno'] . '&idperiodoletivo=' . $_GET['idperiodoletivo'] . '&periodoletivo=' . $_GET['periodoletivo'] . '&matriculaprofessor=' . $_GET['matriculaprofessor'] . '&nome=' . $_GET['nome'] . '&sigladisciplina=' . $_GET['sigladisciplina'] . '&siglacurso=' . $_GET['siglacurso'] . '&tipo=av1';
                        }
                        if ($_GET['tipo'] == 'av2') {
                            $idinscricao = mysql_result($rs3, $i, 'i.idinscricao');
                            $matricula_aluno = mysql_result($rs3, $i, 'ma.matricula_aluno');
                            //$data_inscricao=mysql_result($rs3, $i,'i.data_inscricao');                     
                            $av1 = mysql_result($rs3, $i, 'i.av1');
                            $nota1 = mysql_result($rs3, $i, 'i.nota1');
                            $falta_api = mysql_result($rs3, $i, 'i.falta_api');

                            $av2 = $_POST['av2' . $i];
                            $nota2 = $_POST['nota2' . $i];
                            $falta_apii = $_POST['falta_apii' . $i];
                            $nota3 = mysql_result($rs3, $i, 'i.nota3');
                            $mediafinal = ((($av1 + $nota1) / 2) + (($av2 + $nota2) / 2)) / 2;

                            if ($mediafinal < 7) {
                                $idsituacaoinscricao = 8;
                            } else {
                                $idsituacaoinscricao = 5;
                            }

                            $pg = 'pg=view/lancamentos/avaliacao_notas_faltas.php&form=Atualizar Notas/Faltas&disciplina=' . $_GET['disciplina'] . '&idturmas=' . $_GET['idturmas'] . '&idturno=' . $_GET['idturno'] . '&idperiodoletivo=' . $_GET['idperiodoletivo'] . '&periodoletivo=' . $_GET['periodoletivo'] . '&matriculaprofessor=' . $_GET['matriculaprofessor'] . '&nome=' . $_GET['nome'] . '&sigladisciplina=' . $_GET['sigladisciplina'] . '&siglacurso=' . $_GET['siglacurso'] . '&tipo=av2';
                        }
                        if ($_GET['tipo'] == 'as') {
                            $idinscricao = mysql_result($rs3, $i, 'i.idinscricao');
                            $matricula_aluno = mysql_result($rs3, $i, 'ma.matricula_aluno');
                            //$data_inscricao=mysql_result($rs3, $i,'i.data_inscricao');                     
                            $av1 = mysql_result($rs3, $i, 'i.av1');
                            $nota1 = mysql_result($rs3, $i, 'i.nota1');
                            $falta_api = mysql_result($rs3, $i, 'i.falta_api');

                            $av2 = mysql_result($rs3, $i, 'i.av2');
                            $nota2 = mysql_result($rs3, $i, 'i.av2');
                            $falta_apii = mysql_result($rs3, $i, 'i.falta_apii');
                            $nota3 = $_POST['nota3' . $i];
                            $mediafinal = ((($av1 + $nota1) / 2) + (($av2 + $nota2) / 2) + $nota3) / 3;
                            if ($mediafinal < 6) {
                                $idsituacaoinscricao = 8;
                            } else {
                                $idsituacaoinscricao = 5;
                            }
                            $pg = 'pg=view/lancamentos/avaliacao_notas_faltas.php&form=Atualizar Notas/Faltas&disciplina=' . $_GET['disciplina'] . '&idturmas=' . $_GET['idturmas'] . '&idturno=' . $_GET['idturno'] . '&idperiodoletivo=' . $_GET['idperiodoletivo'] . '&periodoletivo=' . $_GET['periodoletivo'] . '&matriculaprofessor=' . $_GET['matriculaprofessor'] . '&nome=' . $_GET['nome'] . '&sigladisciplina=' . $_GET['sigladisciplina'] . '&siglacurso=' . $_GET['siglacurso'] . '&tipo=as';
                        }

                        $inscricao->consultar("BEGIN");
                        $inscricao->Alterar($idinscricao, $_GET['idturmas'], $matricula_aluno, $data_inscricao, $av1, $nota1, $falta_api, $av2, $nota2, $falta_apii, $nota3, $mediafinal, $idsituacaoinscricao);
                        $inscricao->consultar("COMMIT");
                    }
                    $descricao = "Realizado Lançamento de Notas/Faltas " . $_POST['nome'] . " pelo usuário <b>" . $_SESSION['login'] . " Para a turma" . $_GET['idturmas'] . ", disciplina " . $_GET['disciplina'] . " e Periodo Létivo " . $_GET['periodoletivo'] . "</b>";
                    $funcionalidade = "Lançamento de Notas / Faltas";
                    $ocorrencias->Incluir($_SESSION['idusuarios'], utf8_decode($descricao), utf8_decode($funcionalidade));
                    $util->msgbox('REGISTRO SALVO COM SUCESSO!');
                    $util->redirecionamentopage('default.php?' . $pg);
                } catch (Exception $ex) {
                    $inscricao->consultar("ROLLBACK");
                    $util->msgbox("Falha de operacao");
                }
            }

            break;
    }
}

?>