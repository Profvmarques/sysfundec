<?php
session_start();
require_once('classes/espaco.php');
require_once('classes/util.php');
$util = new Util();
$util->Seguranca($_SESSION['idusuarios'], '../../index.php');


function Processo($Processo) {

    /* Atributos Globais */
    $util = new Util();
    $espaco = new Espaco();

    /* Switch processos */
    switch ($Processo) {
        /* incluir */
        case 'incluir':
                    
            if ($_POST['ok'] == 'true') {
                try {
                    //Chamar Incluir

                    $espaco->consultar("BEGIN");
                    $espaco->Incluir(utf8_decode($_POST['descricao']), $_POST['capacidade']);
                    $espaco->consultar("COMMIT");

                    $util->msgbox('REGISTRO SALVO COM SUCESSO!');
                    $util->redirecionamentopage('default.php?pg=view/espaco/consulta.php&form=Lista de Espaço');
                } catch (Exception $ex) {
                    $espaco->consultar("ROLLBACK");
                    $util->msgbox("Falha de operacao");
                }
            }
            break;

        case 'consulta':
            global $linha;
            global $rs;
            $espaco->consultar("select * from espaco order by descricao");
            $linha = $espaco->Linha;
            $rs = $espaco->Result;

           
            break;

        /* Edição de dados */
        case 'editar':
            global $linha;
            global $rs;
           
            $espaco->consultar("select * from espaco where idespaco='".$_GET['id']."'");
            $linha = $espaco->Linha;
            $rs = $espaco->Result;
            
            if ($_POST['ok'] == 'true') {
                try {
                    //Chamar Alterar

                    $espaco->consultar("BEGIN");
                    $espaco->Alterar($_GET['id'], utf8_decode($_POST['descricao']), $_POST['capacidade']);
                    $espaco->consultar("COMMIT");
                    $util->msgbox('REGISTRO EDITADO COM SUCESSO!');
                    $util->redirecionamentopage('default.php?pg=view/espaco/consulta.php&form=Lista de espaço');
                } catch (Exception $ex) {
                    $espaco->consultar("ROLLBACK");
                    $util->msgbox("Falha de operacao");
                }
            }
            break;
    }
}

?>