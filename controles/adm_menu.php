<?php
session_start();
require_once('classes/adm_menu.php');
require_once('classes/adm_acesso_usuario.php');
require_once('classes/adm_configuracao.php');
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
            $adm_menu = new Adm_menu();
            $adm_configuracao = new Adm_configuracao();
            $adm_acesso_usuario = new Adm_acesso_usuario();
            $util->Seguranca($_SESSION['idusuarios'], '../../index.php');

            $adm_menu->consultar("select * from adm_sistemas order by descricao");
            $linha = $adm_menu->Linha;
            $rs = $adm_menu->Result;

            $adm_menu->consultar("select * from usuarios order by login");
            $linha2 = $adm_menu->Linha;
            $rs2 = $adm_menu->Result;
            
              //para configuração dos perfis
                $adm_configuracao->consultar("select * from perfil p");
                $linhaP = $adm_configuracao->Linha;
                $rsP = $adm_configuracao->Result;
                
                //para configuração dos usuários de acordo com os perfis
                $adm_acesso_usuario->consultar("select * from perfil p inner join usuarios u on(p.idperfil=u.idperfil) order by u.idperfil, u.idusuarios");
                $linhaU = $adm_acesso_usuario->Linha;
                $rsU = $adm_acesso_usuario->Result;

            if ($_POST['idmodulos'] != '') {

                $adm_menu->consultar("select am.*,amod.nome from adm_menu am inner join adm_modulos amod 
                    ON(am.idmodulos=amod.idmodulos)
where amod.idmodulos=" . $_POST['idmodulos'] . " order by am.ordem_menu");
                $linha3 = $adm_menu->Linha;
                $rs3 = $adm_menu->Result;
 
            }
            if ($_POST['ok'] == 'true') {

                try {
                    $adm_menu->consultar("BEGIN");
                    $i = 0;
                    if (sizeof($_POST['id_pai']) > 0) {

                        foreach ($_POST['id_pai'] as $i => $v) {
                            $idmenu=$adm_menu->Incluir($_POST['modulo'], $_POST['id_pai'][$i], $_POST['ordem_menu'][$i], null, utf8_decode($_POST['nome_menu'][$i]), $_POST['class_css'][$i], null, utf8_decode($_POST['link_menu'][$i]), 1);
                          
                            /*para inserção dos perfis de configuração*/ 
                         if($linhaP>0){   
                           for($p=0;$p<$linhaP;$p++){
                            $idperfil = mysql_result($rsP, $p, 'p.idperfil');   
                            $adm_configuracao->Incluir($idperfil, $idmenu, 0, 0, 0, 0);
                           } 
                          }                             
                            /*para inserção dos usuários*/  
                          if($linhaU>0){   
                           for($u=0;$u<$linhaU;$u++){ 
                            $idusuarios = mysql_result($rsU, $u, 'u.idusuarios');
                            $adm_acesso_usuario->Incluir($idusuarios, $idmenu, 0, 0, 0, 0, 0);
                           } 
                          }  
                            $adm_menu->consultar("COMMIT");
                        }
                    }
                    $util->msgbox('REGISTRO SALVO COM SUCESSO!');
                    $util->redirecionamentopage('default.php?pg=view/adm_menu/incluir.php&form=Configuração de Menus&idmodulos=2');
                } catch (Exception $ex) {
                    $adm_menu->consultar("ROLLBACK");
                    $util->msgbox("Falha de operacao");
                }
            }
            break;
        /* Edição de dados */
        case 'editar':
            //query ok
            global $linhaEditar;
            global $resultadoEditar;

            $util = new Util();
            $adm_menu = new Adm_menu();
            $util->Seguranca($_SESSION['idusuarios'], '../../index.php');

            $adm_menu->consultar("select * from adm_menu am inner join adm_modulos amod on(am.idmodulos=amod.idmodulos) 
inner join adm_sistemas adms ON(amod.idsistemas=adms.idsistemas) 
where am.idmenu=" . $_GET['id']);
            $linhaEditar = $adm_menu->Linha;
            $resultadoEditar = $adm_menu->Result;
            if ($_POST['ok'] == 'true') {
                try {
                    //Chamar Alterar

                    $adm_menu->consultar("BEGIN");
                    $adm_menu->Alterar($_GET['id'], $_POST['id_pai'], $_POST['ordem_menu'], null, utf8_decode($_POST['nome_menu']), $_POST['class_css'], utf8_decode($_POST['link_menu']), $_POST['publico']);

                    $adm_menu->consultar("COMMIT");
                    $util->msgbox('REGISTRO EDITADO COM SUCESSO!');
                    $util->redirecionamentopage('default.php?pg=view/adm_menu/incluir.php&form=Configuração de Menu');
                } catch (Exception $ex) {
                    $adm_menu->consultar("ROLLBACK");
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