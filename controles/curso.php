<?php
session_start();
require_once('classes/curso.php');
require_once('classes/util.php');
$util = new Util();
$util->Seguranca($_SESSION['idusuarios'], '../../index.php');
/* Function Processos */
global $Adm_modulos;

function Processo($Processo) {

    /* Atributos Globais */
    $util = new Util();
    $curso = new Curso();

    /* Switch processos */
    switch ($Processo) {
        /* incluir */
        case 'incluir':
            global $linha;
            global $rs;
            
            $curso->consultar("select * from tipocurso order by descricao");
            $linha=$curso->Linha;
            $rs=$curso->Result;
            
            if ($_POST['ok'] == 'true') {
                try {
                    //Chamar Incluir

                    $curso->consultar("BEGIN");
                    $curso->Incluir(utf8_decode($_POST['siglacurso']), utf8_decode($_POST['descricao']), $_POST['idtipocurso']);
                    $curso->consultar("COMMIT");

                    $util->msgbox('REGISTRO SALVO COM SUCESSO!');
                    $util->redirecionamentopage('default.php?pg=view/curso/consulta.php&form=Consulta de Curso');
                } catch (Exception $ex) {
                    $curso->consultar("ROLLBACK");
                    $util->msgbox("Falha de operacao");
                }
            }
            break;

        case 'consulta':
            global $linha;
            global $rs;
            $curso->consultar("select * from curso order by descricao");
            $linha = $curso->Linha;
            $rs = $curso->Result;

            if ($_POST['ok'] == 'true') {
                $curso->consultar("select * from curso where descricao like '%" . $_POST['descricao'] . "%' order by descricao");
                $linha = $curso->Linha;
                $rs = $curso->Result;
            }
            break;

        /* Edição de dados */
        case 'editar':
            //query ok
            global $linhaEditar;
            global $resultadoEditar;
            global $linha;
            global $rs;
            
            $curso->consultar("select * from tipocurso order by descricao");
            $linha = $curso->Linha;
            $rs = $curso->Result;
         
            $curso->consultar("select * from curso where siglacurso='".$_GET['id']."'");
            $linhaEditar = $curso->Linha;
            $resultadoEditar = $curso->Result;
            
            if ($_POST['ok'] == 'true') {
                try {
                    //Chamar Alterar

                    $curso->consultar("BEGIN");
                    $curso->Alterar(utf8_decode($_POST['siglacurso']), utf8_decode($_POST['descricao']), $_POST['idtipocurso']);
                    $curso->consultar("COMMIT");
                    $util->msgbox('REGISTRO EDITADO COM SUCESSO!');
                    $util->redirecionamentopage('default.php?pg=view/curso/consulta.php&form=Consulta de Tipo de Curso');
                } catch (Exception $ex) {
                    $curso->consultar("ROLLBACK");
                    $util->msgbox("Falha de operacao");
                }
            }
            break;
    }
}

?>