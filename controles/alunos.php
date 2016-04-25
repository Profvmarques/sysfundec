<?php
session_start();
require_once('classes/alunos.php');
require_once('classes/usuarios.php');
require_once('classes/matriculaaluno.php');
require_once('classes/inscricao.php');
require_once('classes/ocorrencias.php');
require_once('classes/util.php');

function Processo($Processo) {
    /* Switch processos */
    switch ($Processo) {
        /* incluir */
        case 'incluir':
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

            $util = new Util();
            $alunos = new Alunos();
            $ocorrencias = new Ocorrencias();
            $usuarios = new Usuarios();
            $inscricao = new Inscricao();
            $matriculaaluno = new MatriculaAluno();

            $util->Seguranca($_SESSION['idusuarios'], '../../index.php');

            $alunos->consultar("select * from estado_civil ec order by ec.descricao");
            $linha = $alunos->Linha;
            $rs = $alunos->Result;

            $alunos->consultar("select * from etnia e order by e.descricao");
            $linha2 = $alunos->Linha;
            $rs2 = $alunos->Result;

            $alunos->consultar("select * from curso c order by c.descricao");
            $linha4 = $alunos->Linha;
            $rs4 = $alunos->Result;

            $alunos->consultar("select * from turno t order by t.descricao");
            $linha5 = $alunos->Linha;
            $rs5 = $alunos->Result;

            $alunos->consultar("select * from formaingresso f order by f.descricao");
            $linha6 = $alunos->Linha;
            $rs6 = $alunos->Result;

            $alunos->consultar("select * from periodoletivo p order by p.siglaperiodo desc");
            $linha7 = $alunos->Linha;
            $rs7 = $alunos->Result;

            if ($_POST['ok'] == 'true') {

                $matriculaaluno->verificarMatriculaAluno($_POST['matricula_aluno']);
                if ($matriculaaluno->Achou == 'nao') {
                    try {

                        $alunos->consultar("BEGIN");
                        //inserindo usuário (perfil=> 1-ADMINISTRADOR, 2- SECRETARIA ACADÊMICA, 3-PROFESSOR, 4-ALUNO)
                        $idusuarios = $usuarios->Incluir($_POST['matricula_aluno'], base64_encode($_POST['senha']), 4);
                        //inserindo pessoas (Professor)
                        $idpessoas = $alunos->IncluirPessoas($_POST['nome'], $_POST['sexo'], $_POST['endereco'], $_POST['bairro'], $_POST['cidade'], $_POST['cep'], $_POST['uf'], $util->formatoDataYMD($_POST['nascimento']), $_POST['nacionalidade'], $_POST['telefone'], $_POST['celular'], $_POST['email'], $foto, $idusuarios);

                        $alunos->Incluir($idpessoas, $_POST['idestado_civil'], $_POST['idetnia'], $_POST['cpf'], $_POST['rgnumero'], $util->formatoDataYMD($_POST['rgdataemissao']), $_POST['rgorgaoemissor'], $_POST['certidaonascimentonumero'], $_POST['certidaonascimentolivro'], $_POST['certidaonascimentofolha'], $_POST['certidaonascimentocidade'], $_POST['certidaonascimentosubdistrito'], $_POST['certidaonascimentouf'], $_POST['certidaocasamentonumero'], $_POST['certidaocasamentolivro'], $_POST['certidaocasamentofolha'], $_POST['certidaocasamentocidade'], $_POST['certidaocasamentosubdistrito'], $_POST['certidaocasamentouf'], $_POST['estabcursoorigem'], $_POST['estabcursoorigemuf'], $_POST['curso_origem_ano_conclusao'], $_POST['modalidade_curso_origem'], $_POST['ctps'], $_POST['deficiencia_visual'], $_POST['deficiencia_motora'], $_POST['deficiencia_auditiva'], $_POST['deficiencia_mental'], $_POST['responsavel_legal'], $_POST['rg_responsavel'], $_POST['titulo_eleitor_numero'], $util->formatoDataYMD($_POST['titulo_eleitor_data']), $_POST['titulo_eleitor_zona'], $_POST['titulo_eleitor_secao'], $_POST['certificado_alistamento_militar_numero'], $_POST['certificado_alistamento_militar_serie'], $util->formatoDataYMD($_POST['certificado_alistamento_militar_data']), $_POST['certificado_alistamento_militar_rm'], $_POST['certificado_alistamento_militar_csm'], $_POST['certificado_reservista_numero'], $_POST['certificado_reservista_serie'], $util->formatoDataYMD($_POST['certificado_reservista_data']), $_POST['certificado_reservista_cat'], $_POST['certificado_reservista_rm'], $_POST['certificado_reservista_csm'], $_POST['carteira_trabalho'], $_POST['inistituicao'], $_POST['modalidade'], $_POST['ano_conclusao'], $_POST['uf_ensino']);

                        //obtem o idmatriz
                        $alunos->consultar("select * from matriz WHERE siglacurso='" . $_POST['siglacurso'] . "'");
                        $rm = $alunos->Result;
                        $lm = $alunos->Linha;

                        $idmatriz = mysql_result($rm, 0, 'idmatriz');
                        $idperiodoletivo = $_POST['idperiodoletivo'];

                        $matriculaaluno->Incluir($_POST['matricula_aluno'], $idpessoas, $_POST['siglacurso'], $idmatriz, $idperiodoletivo, 1, $_POST['idformaingresso'], $util->formatoDataYMD($_POST['data_matricula']), $_POST['idturno'], $_POST['pontos_concursos'], $_POST['classificacao_concurso'], $util->formatoDataYMD($_POST['data_conclusao']));

                        $alunos->consultar("select * from turma t inner join componentecurricular cc on(t.sigladisciplina= cc.sigladisciplina and t.siglacurso= cc.siglacurso) "
                                . "where t.idperiodoletivo=" . $_POST['idperiodoletivo'] . " and cc.periodo=1 and t.idturno=" . $_POST['idturno']);
                        $ln = $alunos->Linha;
                        $r = $alunos->Result;

                        for ($i = 0; $i < $ln; $i++) {
                            $idturma = mysql_result($r, $i, 't.idturma');
                            $matricula_aluno = $_POST['matricula_aluno'];
                            $sigladisciplina = mysql_result($r, $i, 't.sigladisciplina');
                            $idperiodoletivo = mysql_result($r, $i, 't.idperiodoletivo');

                            $inscricao->Incluir($idturma, $matricula_aluno, $sigladisciplina, $idperiodoletivo,$idturno, $util->formatoDataYMD($_POST['data_matricula']), $nota1, $falta_api, $nota2, $falta_apii, $nota3, $mediafinal, 1);
                        }

                        $descricao = "Realizado Cadastro do Aluno " . $_POST['nome'] . " pelo usuário <b>" . $_SESSION['login'] . "</b>";
                        $funcionalidade = "Cadastro de novo aluno";


                        $ocorrencias->Incluir($_SESSION['idusuarios'], utf8_decode($descricao), utf8_decode($funcionalidade));
                        $alunos->consultar("COMMIT");
                        $util->msgbox('REGISTRO SALVO COM SUCESSO!');
                        $util->redirecionamentopage('default.php?pg=view/alunos/consulta.php&form= Cadastro de Professor&idmodulos=2');
                    } catch (Exception $ex) {
                        $alunos->consultar("ROLLBACK");
                        $util->msgbox("Falha de operacao");
                    }
                }
            }
            break;

        case 'incluirMatricula':
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
            global $ln;
            global $r;

            $util = new Util();
            $alunos = new Alunos();
            $ocorrencias = new Ocorrencias();
            $usuarios = new Usuarios();
            $matriculaaluno = new MatriculaAluno();
            $inscricao = new Inscricao();

            $util->Seguranca($_SESSION['idusuarios'], '../../index.php');

            $alunos->consultar("select * from curso order by siglacurso, descricao");
            $linha = $alunos->Linha;
            $rs = $alunos->Result;

            $alunos->consultar("select * from turno order by descricao");
            $linha2 = $alunos->Linha;
            $rs2 = $alunos->Result;

            $alunos->consultar("select * from periodoletivo order by siglaperiodo desc");
            $linha3 = $alunos->Linha;
            $rs3 = $alunos->Result;

            $alunos->consultar("select *, DATE_FORMAT(data_vigencia,'%d/%m/%Y') as vigencia from matriz order by data_vigencia desc");
            $linha4 = $alunos->Linha;
            $rs4 = $alunos->Result;

            $alunos->consultar("select * from situacaomatricula order by descricao");
            $linha5 = $alunos->Linha;
            $rs5 = $alunos->Result;

            $alunos->consultar("select * from formaingresso order by descricao");
            $linha6 = $alunos->Linha;
            $rs6 = $alunos->Result;

            $alunos->consultar("select *from pessoas p inner join alunos a on(p.idpessoas=a.idpessoas) 
inner join matriculaaluno ma on(a.idpessoas=ma.idpessoas) where p.idpessoas=" . $_GET['id']);
            $ln2 = $alunos->Linha;
            $r2 = $alunos->Result;

            if ($_POST['ok'] == 'true') {

                $matriculaaluno->verificarMatriculaAluno($_POST['matricula_aluno']);
                if ($matriculaaluno->Achou == 'nao') {
                    try {
                        $alunos->consultar("BEGIN");
                        $idpessoas = mysql_result($r2, 0, 'p.idpessoas');
                        $nome = utf8_encode(mysql_result($r2, 0, 'p.nome'));

                        $matriculaaluno->Incluir($_POST['matricula_aluno'], $idpessoas, $_POST['siglacurso'], $_POST['idmatriz'], $_POST['idperiodoletivo'], $_POST['idsituacao_matricula'], $_POST['idformaingresso'], $util->formatoDataYMD($_POST['data_matricula']), $_POST['idturno'], $_POST['pontos_concursos'], $_POST['classificacao_concurso'], $util->formatoDataYMD($_POST['data_conclusao']));
                        $descricao = "Realizado novo cadastro de matricula do aluno(a) " . $nome . " pelo usuário <b>" . $_SESSION['login'] . "</b>";
                        $funcionalidade = "Cadastro de nova matrícula";

                        $alunos->consultar("select * from turma t inner join componentecurricular cc on(t.sigladisciplina= cc.sigladisciplina and t.siglacurso= cc.siglacurso) "
                                . "where t.idperiodoletivo=" . $_POST['idperiodoletivo'] . " and cc.periodo=1 and t.idturno=" . $_POST['idturno']);
                        $ln = $alunos->Linha;
                        $r = $alunos->Result;

                        for ($i = 0; $i < $ln; $i++) {
                            $idturma = mysql_result($r, $i, 't.idturma');
                            $matricula_aluno = $_POST['matricula_aluno'];
                            $sigladisciplina = mysql_result($r, $i, 't.sigladisciplina');

                            $inscricao->Incluir($idturma, $matricula_aluno, $sigladisciplina, $util->formatoDataYMD($_POST['data_matricula']), $nota1, $falta_api, $nota2, $falta_apii, $nota3, $mediafinal, 1);
                        }

                        $ocorrencias->Incluir($_SESSION['idusuarios'], utf8_decode($descricao), utf8_decode($funcionalidade));
                        $alunos->consultar("COMMIT");
                        $util->msgbox('REGISTRO SALVO COM SUCESSO!');
                        $util->redirecionamentopage('default.php?pg=view/alunos/consulta.php&form=Cadastro de Aluno');
                    } catch (Exception $ex) {
                        $alunos->consultar("ROLLBACK");
                        $util->msgbox("Falha de operacao");
                    }
                }//fim if verificação  
            }
            break;

        case 'editarDados':
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

            $util = new Util();
            $alunos = new Alunos();
            $ocorrencias = new Ocorrencias();
            $usuarios = new Usuarios();
            $matriculaaluno = new MatriculaAluno();

            $util->Seguranca($_SESSION['idusuarios'], '../../index.php');

            $alunos->consultar("select *,  DATE_FORMAT(p.nascimento,'%d/%m/%Y') AS dtnasc, DATE_FORMAT(a.rgdataemissao,'%d/%m/%Y') AS dtemissao, DATE_FORMAT(ma.data_matricula,'%d/%m/%Y') AS dtmatricula,
                DATE_FORMAT(a.certificado_alistamento_militar_data,'%d/%m/%Y') AS dtalistamento,DATE_FORMAT(a.certificado_reservista_data,'%d/%m/%Y') AS dtcertreservista, 
                DATE_FORMAT(a.titulo_eleitor_data,'%d/%m/%Y') AS dttitulo from usuarios u inner join pessoas p ON(p.idusuarios = u.idusuarios) 
inner JOIN alunos a on(p.idpessoas = a.idpessoas) inner join matriculaaluno ma ON(ma.idpessoas= a.idpessoas) 
inner join curso c ON(c.siglacurso = ma.siglacurso) inner join turno t on(ma.idturno = t.idturno) 
inner join formaingresso fi on(ma.idformaingresso = fi.idformaingresso) inner join periodoletivo pl on(ma.idperiodoletivo = pl.idperiodoletivo) 
inner join matriz m on(ma.idmatriz = m.idmatriz) inner join situacaomatricula sm on(sm.idsituacao_matricula = ma.idsituacao_matricula) 
inner join etnia e on(a.idetnia = e.idetnia) inner join estado_civil ec on(a.idestado_civil = ec.idestado_civil)
WHERE p.idpessoas=" . $_GET['id']);
            $ln = $alunos->Linha;
            $r = $alunos->Result;

            $alunos->consultar("select * from estado_civil ec order by ec.descricao");
            $linha = $alunos->Linha;
            $rs = $alunos->Result;

            $alunos->consultar("select * from etnia e order by e.descricao");
            $linha2 = $alunos->Linha;
            $rs2 = $alunos->Result;

            $alunos->consultar("select * from curso c order by c.descricao");
            $linha4 = $alunos->Linha;
            $rs4 = $alunos->Result;

            $alunos->consultar("select * from turno t order by t.descricao");
            $linha5 = $alunos->Linha;
            $rs5 = $alunos->Result;

            $alunos->consultar("select * from formaingresso f order by f.descricao");
            $linha6 = $alunos->Linha;
            $rs6 = $alunos->Result;

            $alunos->consultar("select * from periodoletivo p order by p.siglaperiodo desc");
            $linha7 = $alunos->Linha;
            $rs7 = $alunos->Result;

            if ($_POST['ok'] == 'true') {
                $idusuarios = mysql_result($r, 0, 'p.idusuarios');
                $idpessoas = mysql_result($r, 0, 'p.idpessoas');

                try {
                    $alunos->consultar("BEGIN");
                    //atualizando usuário (perfil=> 1-ADMINISTRADOR, 2- SECRETARIA ACADÊMICA, 3-PROFESSOR, 4-ALUNO)
                    $usuarios->Alterar($idusuarios, $_POST['login'], base64_encode($_POST['senha']), 4);

                    //atualizando pessoas (Alunos)
                    $alunos->alterarPessoas($idpessoas, utf8_decode($_POST['nome']), utf8_decode($_POST['sexo']), $_POST['endereco'], $_POST['bairro'], $_POST['cidade'], $_POST['cep'], $_POST['uf'], $util->formatoDataYMD($_POST['nascimento']), $_POST['nacionalidade'], $_POST['telefone'], $_POST['celular'], $_POST['email'], $foto, $idusuarios);
                    //atualizando alunos
                    $alunos->Alterar($idpessoas, $_POST['idestado_civil'], $_POST['idetnia'], $_POST['cpf'], $_POST['rgnumero'], $util->formatoDataYMD($_POST['rgdataemissao']), $_POST['rgorgaoemissor'], $_POST['certidaonascimentonumero'], $_POST['certidaonascimentolivro'], $_POST['certidaonascimentofolha'], $_POST['certidaonascimentocidade'], $_POST['certidaonascimentosubdistrito'], $_POST['certidaonascimentouf'], $_POST['certidaocasamentonumero'], $_POST['certidaocasamentolivro'], $_POST['certidaocasamentofolha'], $_POST['certidaocasamentocidade'], $_POST['certidaocasamentosubdistrito'], $_POST['certidaocasamentouf'], $_POST['estabcursoorigem'], $_POST['estabcursoorigemuf'], $_POST['curso_origem_ano_conclusao'], $_POST['modalidade_curso_origem'], $_POST['ctps'], $_POST['deficiencia_visual'], $_POST['deficiencia_motora'], $_POST['deficiencia_auditiva'], $_POST['deficiencia_mental'], $_POST['responsavel_legal'], $_POST['rg_responsavel'], $_POST['titulo_eleitor_numero'], $util->formatoDataYMD($_POST['titulo_eleitor_data']), $_POST['titulo_eleitor_zona'], $_POST['titulo_eleitor_secao'], $_POST['certificado_alistamento_militar_numero'], $_POST['certificado_alistamento_militar_serie'], $util->formatoDataYMD($_POST['certificado_alistamento_militar_data']), $_POST['certificado_alistamento_militar_rm'], $_POST['certificado_alistamento_militar_csm'], $_POST['certificado_reservista_numero'], $_POST['certificado_reservista_serie'], $util->formatoDataYMD($_POST['certificado_reservista_data']), $_POST['certificado_reservista_cat'], $_POST['certificado_reservista_rm'], $_POST['certificado_reservista_csm'], $_POST['carteira_trabalho'], $_POST['inistituicao'], $_POST['modalidade'], $_POST['ano_conclusao'], $_POST['uf_ensino']);

                    $descricao = "Realizado a Atualização do cadastro de aluno " . $_POST['nome'] . " pelo usuário <b>" . $_SESSION['login'] . "</b>";
                    $funcionalidade = "Atualização dos dados do aluno";


                    $ocorrencias->Incluir($_SESSION['idusuarios'], utf8_decode($descricao), utf8_decode($funcionalidade));
                    $alunos->consultar("COMMIT");
                    $util->msgbox('REGISTRO SALVO COM SUCESSO!');
                    $util->redirecionamentopage('default.php?pg=view/alunos/consulta.php&form= Cadastro de Aluno&idmodulos=2');
                } catch (Exception $ex) {
                    $alunos->consultar("ROLLBACK");
                    $util->msgbox("Falha de operacao");
                }
            }
            break;

        case 'editarMatricula':
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
            global $ln;
            global $r;

            $util = new Util();
            $alunos = new Alunos();
            $ocorrencias = new Ocorrencias();
            $usuarios = new Usuarios();
            $matriculaaluno = new MatriculaAluno();
            $util->Seguranca($_SESSION['idusuarios'], '../../index.php');

            $matriculaaluno->consultar("select *, DATE_FORMAT(p.nascimento,'%d/%m/%Y') AS dtnasc, DATE_FORMAT(ma.data_matricula,'%d/%m/%Y') AS inicio, DATE_FORMAT(ma.data_conclusao,'%d/%m/%Y') AS conclusao from pessoas p inner join alunos a on(a.idpessoas = p.idpessoas) 
inner join matriculaaluno ma on(a.idpessoas = ma.idpessoas) inner join usuarios u on(p.idusuarios = u.idusuarios) 
where ma.matricula_aluno=" . $_GET['mat']);
            $ln = $matriculaaluno->Linha;
            $r = $matriculaaluno->Result;

            $alunos->consultar("select * from curso order by siglacurso, descricao");
            $linha = $alunos->Linha;
            $rs = $alunos->Result;

            $alunos->consultar("select * from turno order by descricao");
            $linha2 = $alunos->Linha;
            $rs2 = $alunos->Result;

            $alunos->consultar("select * from periodoletivo order by siglaperiodo desc");
            $linha3 = $alunos->Linha;
            $rs3 = $alunos->Result;

            $alunos->consultar("select *, DATE_FORMAT(data_vigencia,'%d/%m/%Y') as vigencia from matriz order by data_vigencia desc");
            $linha4 = $alunos->Linha;
            $rs4 = $alunos->Result;

            $alunos->consultar("select * from situacaomatricula order by descricao");
            $linha5 = $alunos->Linha;
            $rs5 = $alunos->Result;

            $alunos->consultar("select * from formaingresso order by descricao");
            $linha6 = $alunos->Linha;
            $rs6 = $alunos->Result;

            if ($_POST['ok'] == 'true') {
                $idusuarios = mysql_result($r, 0, 'p.idusuarios');
                $idpessoas = mysql_result($r, 0, 'p.idpessoas');
                $nome = mysql_result($r, 0, 'p.nome');
                try {
                    $alunos->consultar("BEGIN");

                    $matriculaaluno->Alterar($_GET['mat'], $_POST['matricula'], $idpessoas, $_POST['siglacurso'], $_POST['idmatriz'], $_POST['idperiodoletivo'], $_POST['idsituacao_matricula'], $_POST['idformaingresso'], $util->formatoDataYMD($_POST['data_matricula']), $_POST['idturno'], $_POST['pontos_concursos'], $_POST['classificacao_concurso'], $util->formatoDataYMD($_POST['data_conclusao']));
                    $descricao = "Realizado a Atualização dos dados da matrícula do aluno(a) " . utf8_encode($nome) . " pelo usuário <b>" . $_SESSION['login'] . "</b>";
                    $funcionalidade = "Atualização dos dados da matricula do Aluno";

                    $ocorrencias->Incluir($_SESSION['idusuarios'], utf8_decode($descricao), utf8_decode($funcionalidade));
                    $alunos->consultar("COMMIT");
                    $util->msgbox('REGISTRO SALVO COM SUCESSO!');
                    $util->redirecionamentopage('default.php?pg=view/alunos/consulta.php&form=Cadastro de Aluno');
                } catch (Exception $ex) {
                    $alunos->consultar("ROLLBACK");
                    $util->msgbox("Falha de operacao");
                }
            }
            break;


        case 'visualizarDados':
            global $linha;
            global $rs;
            global $linha2;
            global $rs2;
            global $linha3;
            global $rs3;
            global $ln;
            global $r;
            global $ln2;
            global $r2;

            $util = new Util();
            $alunos = new Alunos();
            $ocorrencias = new Ocorrencias();
            $usuarios = new Usuarios();
            $matriculaaluno = new MatriculaAluno();

            $util->Seguranca($_SESSION['idusuarios'], '../../index.php');

            $alunos->consultar("select *,  DATE_FORMAT(p.nascimento,'%d/%m/%Y') AS dtnasc, DATE_FORMAT(a.rgdataemissao,'%d/%m/%Y') AS dtemissao, DATE_FORMAT(ma.data_matricula,'%d/%m/%Y') AS dtmatricula,
                DATE_FORMAT(a.certificado_alistamento_militar_data,'%d/%m/%Y') AS dtalistamento,DATE_FORMAT(a.certificado_reservista_data,'%d/%m/%Y') AS dtcertreservista, 
                DATE_FORMAT(a.titulo_eleitor_data,'%d/%m/%Y') AS dttitulo from usuarios u inner join pessoas p ON(p.idusuarios = u.idusuarios) 
inner JOIN alunos a on(p.idpessoas = a.idpessoas) inner join matriculaaluno ma ON(ma.idpessoas= a.idpessoas) 
inner join curso c ON(c.siglacurso = ma.siglacurso) inner join turno t on(ma.idturno = t.idturno) 
inner join formaingresso fi on(ma.idformaingresso = fi.idformaingresso) inner join periodoletivo pl on(ma.idperiodoletivo = pl.idperiodoletivo) 
inner join matriz m on(ma.idmatriz = m.idmatriz) inner join situacaomatricula sm on(sm.idsituacao_matricula = ma.idsituacao_matricula) 
inner join etnia e on(a.idetnia = e.idetnia) inner join estado_civil ec on(a.idestado_civil = ec.idestado_civil)
WHERE p.idpessoas=" . $_GET['id']);
            $ln = $alunos->Linha;
            $r = $alunos->Result;

            $alunos->consultar("select *, DATE_FORMAT(ma.data_matricula,'%d/%m/%Y') AS dtmatricula from matriculaaluno ma inner join pessoas p on(p.idpessoas=ma.idpessoas) WHERE ma.idpessoas=" . $_GET['id']);
            $ln2 = $alunos->Linha;
            $r2 = $alunos->Result;


            break;

        case 'consulta':
            global $linha;
            global $rs;

            $alunos = new Alunos();
            $util = new Util();

            if ($_POST['ok'] == 'true') {

                if ($_POST['tipo'] == 'matricula') {
                    $alunos->consultar("select * from alunos a inner join pessoas p on(p.idpessoas = a.idpessoas) 
inner join matriculaaluno ma on(ma.idpessoas=a.idpessoas) where ma.matricula_aluno='" . $_POST['criterio'] . "'");
                    $linha = $alunos->Linha;
                    $rs = $alunos->Result;
                    if ($linha > 0) {
                        $idpessoas = mysql_result($rs, 0, 'p.idpessoas');
                        $util->redirecionamentopage('default.php?pg=view/alunos/visualizar.php&form=VISUALIZAÇÃO DOS DADOS DO ALUNO&id=' . $idpessoas);
                    }
                }

                if ($_POST['tipo'] == 'nome') {
                    $alunos->consultar("select * from alunos a inner join pessoas p on(p.idpessoas = a.idpessoas) 
inner join matriculaaluno ma on(ma.idpessoas=a.idpessoas) where p.nome like '%" . $_POST['criterio'] . "%' order by p.nome");
                    $linha = $alunos->Linha;
                    $rs = $alunos->Result;
                }
            }
            break;
    }
}

?>