<?php

session_start();
require_once('classes/adm_acesso_usuario.php');
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

            $util = new Util();
            $adm_acesso_usuario = new Adm_acesso_usuario();
            $util->Seguranca($_SESSION['idusuarios'], '../../index.php');

            $adm_acesso_usuario->consultar("select * from adm_sistemas order by descricao");
            $linha = $adm_acesso_usuario->Linha;
            $rs = $adm_acesso_usuario->Result;

            $adm_acesso_usuario->consultar("select * from usuarios where idperfil <> 4 order by login");
            $linha2 = $adm_acesso_usuario->Linha;
            $rs2 = $adm_acesso_usuario->Result;

            if ($_POST['modulos'] != '') {
                
                $adm_acesso_usuario->consultar("select aau.idusuarios,aau.idmenu, am.*, if(aau.incluir=1,'checked=\"checked\"','') as acao_incluir, if(aau.consultar=1,'checked=\"checked\"','') as acao_consultar, 
if(aau.alterar=1,'checked=\"checked\"','') as acao_alterar, if(aau.apagar=1,'checked=\"checked\"','') as acao_apagar,if(aau.publico=1,'icon-thumbs-up-alt','icon-thumbs-down') as situacao,amod.nome 
from adm_acesso_usuario aau right join adm_menu am on(aau.idmenu=am.idmenu) inner join adm_modulos amod ON(am.idmodulos=amod.idmodulos)
where amod.idmodulos=" . $_POST['idmodulos'] . " and aau.idusuarios=" . $_POST['idusuarios'] . " order by am.ordem_menu");
                   
                $linha3 = $adm_acesso_usuario->Linha;
                $rs3 = $adm_acesso_usuario->Result;
            }
            if ($_POST['ok'] == 'true') {

                for ($i = 0; $i < $linha3; $i++) {

                   $incluir = $adm_acesso_usuario->verificaCheckbox($_POST['incluir'.$i]);
                    $alterar = $adm_acesso_usuario->verificaCheckbox($_POST['alterar'.$i]);
                    $apagar = $adm_acesso_usuario->verificaCheckbox($_POST['apagar'.$i]);
                    $consultar = $adm_acesso_usuario->verificaCheckbox($_POST['consultar'.$i]);

                    Try {
                        //verifica se o menu já existe, caso exista ocorre uma atualização, caso contrário uma inclusão   
                        $adm_acesso_usuario->consultar("BEGIN");
                        $adm_acesso_usuario->verificarMenu($_POST['idmenu'.$i], $_POST['idusuarios']);
                        if ($adm_acesso_usuario->Achou == "sim") {
                           $adm_acesso_usuario->consultar("BEGIN");
                            $adm_acesso_usuario->Alterar($_POST['idusuarios'], $_POST['idmenu'.$i], $apagar, $alterar, $consultar, $incluir,1);
                            $adm_acesso_usuario->consultar("COMMIT");
                                                        
                        } elseif ($adm_acesso_usuario->Achou == "nao" && ($incluir == 1 || $apagar == 1 || $alterar == 1 || $consultar == 1)) {
                           
                            $adm_acesso_usuario->consultar("BEGIN");
                            $adm_acesso_usuario->Incluir($_POST['idusuarios'], $_POST['idmenu' . $i], $apagar, $alterar, $consultar, $incluir);
                            $adm_acesso_usuario->consultar("COMMIT");
                        }
                    } catch (Exception $ex) {
                        $adm_acesso_usuario->consultar("ROLLBACK");
                        $util->msgbox("Falha de operacao");
                    }
                }//fim for
                $util->msgbox("Dados salvos com sucesso!");
            }//fim if 
            break;
        /* Edição de dados */
        case 'editar':
            //query ok
            global $linhaEditar;
            global $resultadoEditar;
            $adm_acesso_usuario->consultar($sql_consulta_id);
            $linhaEditar = $adm_acesso_usuario->Linha;
            $resultadoEditar = $adm_acesso_usuario->Result;
            if ($_POST['ok'] == 'true') {
                try {
                    //Chamar Alterar

                    $adm_acesso_usuario->consultar("BEGIN");
                    $adm_acesso_usuario->Alterar($_GET['idusuarios'], $_POST['idmenu'], $_POST['apagar'], $_POST['alterar'], $_POST['consultar'], $_POST['incluir']);
                    $adm_acesso_usuario->consultar("COMMIT");
                    $util->msgbox('REGISTRO EDITADO COM SUCESSO!');
                    $util->redirecionamentopage('default.php?pg=view/adm_acesso_usuario/consulta.php');
                } catch (Exception $ex) {
                    $adm_acesso_usuario->consultar("ROLLBACK");
                    $util->msgbox("Falha de operacao");
                }
            }
            break;

        case 'consulta':
            global $linha;
            global $rs;
            $adm_configuracao->consultar("select * from adm_modulos order by nome");
            $linha = $adm_configuracao->Linha;
            $rs = $adm_configuracao->Result;

            if ($_POST['ok'] == 'true') {
                $adm_configuracao->consultar("select * from adm_modulos where nome like '%" . $_POST['nome'] . "%' order by nome");
                $linha = $adm_configuracao->Linha;
                $rs = $adm_configuracao->Result;
            }
            break;
    }
}

?>