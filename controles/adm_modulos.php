<?php
session_start();
require_once('classes/adm_modulos.php');
require_once('classes/util.php');
$util = new Util();
$util->Seguranca($_SESSION['idusuarios'], '../../index.php');
/* Function Processos */
global $Adm_modulos;

function Processo($Processo) {

    /* Atributos Globais */
    $util = new Util();
    $adm_modulos = new Adm_modulos();

    /* Switch processos */
    switch ($Processo) {
        /* incluir */
        case 'incluir':
            global $linha;
            global $rs;

            $adm_modulos->consultar("select * from adm_modulos");
            $linha = $adm_modulos->Linha;
            $rs = $adm_modulos->Result;

            if ($_POST['ok'] == 'true') {
                try {
                    //Chamar Incluir

                    $adm_modulos->consultar("BEGIN");
                    $adm_modulos->Incluir($_POST['idmodulos'], $_POST['idsistemas'], $_POST['sigla_modulo'], $_POST['nome']);
                    $adm_modulos->consultar("COMMIT");

                    $util->msgbox('REGISTRO SALVO COM SUCESSO!');
                    $util->redirecionamentopage('default.php?pg=view/adm_modulos/consulta.php');
                } catch (Exception $ex) {
                    $adm_modulos->consultar("ROLLBACK");
                    $util->msgbox("Falha de operacao");
                }
            }
            break;

        case 'consulta':
            global $linha;
            global $rs;
            $adm_modulos->consultar("select * from adm_modulos order by nome");
            $linha = $adm_modulos->Linha;
            $rs = $adm_modulos->Result;

            if ($_POST['ok'] == 'true') {
                $adm_modulos->consultar("select * from adm_modulos where nome like '%" . $_POST['nome'] . "%' order by nome");
                $linha = $adm_modulos->Linha;
                $rs = $adm_modulos->Result;
            }
            break;

        /* Edição de dados */
        case 'editar':
            //query ok
            global $linhaEditar;
            global $resultadoEditar;
            $adm_modulos->consultar($sql_consulta_id);
            $linhaEditar = $adm_modulos->Linha;
            $resultadoEditar = $adm_modulos->Result;
            if ($_POST['ok'] == 'true') {
                try {
                    //Chamar Alterar

                    $adm_modulos->consultar("BEGIN");
                    $adm_modulos->Alterar($_GET['idmodulos'], $_POST['idsistemas'], $_POST['sigla_modulo'], $_POST['nome'], $_POST['dtreg']);
                    $adm_modulos->consultar("COMMIT");
                    $util->msgbox('REGISTRO EDITADO COM SUCESSO!');
                    $util->redirecionamentopage('default.php?pg=view/adm_modulos/consulta.php');
                } catch (Exception $ex) {
                    $adm_modulos->consultar("ROLLBACK");
                    $util->msgbox("Falha de operacao");
                }
            }
            break;
    }
}

?>