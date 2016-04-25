<?php
session_start();
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
            global $array;


            $util = new Util();
            $adm_configuracao = new Adm_configuracao();
            $adm_acesso_usuario = new Adm_acesso_usuario();
            $util->Seguranca($_SESSION['idusuarios'], '../../index.php');

            $adm_configuracao->consultar("select * from perfil order by descricao");
            $linha = $adm_configuracao->Linha;
            $rs = $adm_configuracao->Result;
            

            if ($_POST['idperfil'] != '') {
                $adm_configuracao->consultar("select * from perfil p inner join usuarios u "
                    . "on(p.idperfil=u.idperfil) where u.idperfil=" . $_POST['idperfil']);
            $linha3 = $adm_configuracao->Linha;
            $rs3 = $adm_configuracao->Result;
                
                $adm_configuracao->consultar("select am.idmenu,am.nome_menu,am.id_pai,am.ordem_menu,am.publico,amod.idmodulos, amod.nome,
 if(ac.incluir=1,'checked=\"checked\"','') as acao_incluir, if(ac.consultar=1,'checked=\"checked\"','') as acao_consultar, 
if(ac.alterar=1,'checked=\"checked\"','') as acao_alterar, if(ac.apagar=1,'checked=\"checked\"','') as acao_apagar,
if(am.publico=1,'icon-thumbs-up-alt','icon-thumbs-down') as situacao,if(ac.publico=1,'checked=\"checked\"','') as p from perfil p 
inner join adm_configuracao ac on(p.idperfil = ac.idperfil) inner join adm_menu am on(ac.idmenu = am.idmenu) 
inner join adm_modulos amod on(am.idmodulos = amod.idmodulos) where ac.idperfil=" . $_POST['idperfil'] . " order by amod.idmodulos,  am.id_pai;");
                $linha2 = $adm_configuracao->Linha;
                $rs2 = $adm_configuracao->Result;

                if ($linha2 > 0) {
                    for ($i = 0; $i < $linha2; $i++) {
                        $array[$i]['idmenu'] = mysql_result($rs2, $i, 'am.idmenu');
                        $array[$i]['menu'] = mysql_result($rs2, $i, 'am.nome_menu');
                        $array[$i]['id_pai'] = mysql_result($rs2, $i, 'am.id_pai');
                        $array[$i]['ordem'] = mysql_result($rs2, $i, 'am.ordem_menu');
                        $array[$i]['ordem'] = mysql_result($rs2, $i, 'am.publico');
                        $array[$i]['idmodulos'] = mysql_result($rs2, $i, 'amod.idmodulos');
                        $array[$i]['modulo'] = mysql_result($rs2, $i, 'amod.nome');

                        $array[$i]['incluir'] = mysql_result($rs2, $i, 'acao_incluir');
                        $array[$i]['consultar'] = mysql_result($rs2, $i, 'acao_consultar');
                        $array[$i]['alterar'] = mysql_result($rs2, $i, 'acao_alterar');
                        $array[$i]['apagar'] = mysql_result($rs2, $i, 'acao_apagar');
                        $array[$i]['publico'] = mysql_result($rs2, $i, 'p');
                        $array[$i]['situacao'] = mysql_result($rs2, $i, 'situacao');
                    }
                }
            }
            if ($_POST['ok'] == 'true') {               

                    Try {
                        
                        for ($i = 0; $i < $linha2; $i++) {

                    $incluir = $adm_configuracao->verificaCheckbox($_POST['incluir' . $i]);
                    $alterar = $adm_configuracao->verificaCheckbox($_POST['alterar' . $i]);
                    $apagar = $adm_configuracao->verificaCheckbox($_POST['apagar' . $i]);
                    $consultar = $adm_configuracao->verificaCheckbox($_POST['consultar' . $i]);
                    $publico = $adm_configuracao->verificaCheckbox($_POST['publico' . $i]);
                    
                        
                        //verifica se o menu já existe, caso exista ocorre uma atualização, caso contrário uma inclusão   
                        $adm_configuracao->consultar("BEGIN");
                        $adm_configuracao->Alterar($_POST['idperfil'], $array[$i]['idmenu'], $incluir, $consultar, $alterar, $apagar,$publico);
                        if ($linha3 > 0) {
                            for ($a = 0; $a < $linha3; $a++) {
                                $idusuarios=mysql_result($rs3,$a,'u.idusuarios');
                                //verifica se o usuários tem privilégio de acesso
                                $return=$adm_acesso_usuario->verificarAcesso($idusuarios,$array[$i]['idmenu']);
                                if($return=="nao"){
                                    
                                    $adm_acesso_usuario->Incluir($idusuarios, $array[$i]['idmenu'], $incluir, $consultar, $alterar, $apagar,$publico);
                                }
                                
                                $adm_acesso_usuario->Alterar($idusuarios, $array[$i]['idmenu'], $apagar, $alterar, $consultar, $incluir,$publico);
                            }
                        }
                        
                        $adm_configuracao->consultar("COMMIT");
                      }//fim for  
                      $util->msgbox("REGISTRO SALVO COM SUCESSO");
                    } catch (Exception $ex) {
                        $adm_configuracao->consultar("ROLLBACK");
                        $util->msgbox("Falha de operacao");
                    }
                
                
            }//fim if 
            break;

        /* Edição de dados */
        case 'editar':
            //query ok
            global $linhaEditar;
            global $resultadoEditar;
            $adm_configuracao->consultar($sql_consulta_id);
            $linhaEditar = $adm_configuracao->Linha;
            $resultadoEditar = $adm_configuracao->Result;
            if ($_POST['ok'] == 'true') {
                try {
                    //Chamar Alterar

                    $adm_configuracao->consultar("BEGIN");
                    $adm_configuracao->Alterar($_GET['idusuarios'], $_POST['idmenu'], $_POST['apagar'], $_POST['alterar'], $_POST['consultar'], $_POST['incluir']);
                    $adm_configuracao->consultar("COMMIT");
                    $util->msgbox('REGISTRO EDITADO COM SUCESSO!');
                    $util->redirecionamentopage('default.php?pg=view/adm_acesso_usuario/consulta.php');
                } catch (Exception $ex) {
                    $adm_configuracao->consultar("ROLLBACK");
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