<?php 
 session_start();

require_once('classes/adm_sistemas.php');
require_once('classes/util.php');
$util = new Util();
$util->Seguranca($_SESSION['idusuarios'], '../../index.php');
/* Function Processos */
global $Adm_sistemas;

function Processo($Processo) {

    /* Atributos Globais */
    $util = new Util();
    $adm_sistemas = new Adm_sistemas();

    /* Switch processos */
    switch ($Processo) {
        /* incluir */
        case 'incluir':
            if ($_POST['ok'] == 'true') {
                try {
                    //Chamar Incluir

                    $adm_sistemas->consultar("BEGIN");
                    $adm_sistemas->Incluir($_POST['descricao']);
                    $adm_sistemas->consultar("COMMIT");

                    $util->msgbox('REGISTRO SALVO COM SUCESSO!');
                    $util->redirecionamentopage('default.php?pg=view/adm_sistemas/consulta.php&form= Cadastro de Sistemas');
                } catch (Exception $ex) {
                    $adm_sistemas->consultar("ROLLBACK");
                    $util->msgbox("Falha de operacao");
                }
            }
            break;
            
            case 'consulta':
                global $linha;
                global $rs;
                $adm_sistemas->consultar("select * from adm_sistemas order by descricao");
                $linha=$adm_sistemas->Linha;
                $rs=$adm_sistemas->Result;                
                
            if ($_POST['ok'] == 'true') {
                    $adm_sistemas->consultar("select * from adm_sistemas where descricao like '%".$_POST['descricao']."%' order by descricao");
                    $linha=$adm_sistemas->Linha;
                    $rs=$adm_sistemas->Result;
                   
             }
            break;
            
        /* Edição de dados */
        case 'editar':
            //query ok
            global $linha;
            global $rs;
            $adm_sistemas->consultar("select * from adm_sistemas where idsistemas=".$_GET['id']);
            $linha = $adm_sistemas->Linha;
            $rs = $adm_sistemas->Result;
            if ($_POST['ok'] == 'true') {
                try {
                    //Chamar Alterar

                    $adm_sistemas->consultar("BEGIN");
                    $adm_sistemas->Alterar($_GET['id'], $_POST['descricao']);
                    $adm_sistemas->consultar("COMMIT");
                    $util->msgbox('REGISTRO EDITADO COM SUCESSO!');
                    $util->redirecionamentopage('default.php?pg=view/adm_sistemas/consulta.php$form=Consulta de Sistemas');
                } catch (Exception $ex) {
                    $adm_sistemas->consultar("ROLLBACK");
                    $util->msgbox("Falha de operacao");
                }
            }
            break;
    }
}

?>