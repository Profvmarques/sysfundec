<?php

session_start();
/* ----------------------------------------------

  Autor: Vinícius Marques da Silva Ferreira
  Contato:profvmarques@gmail.com
  Projeto:sysduque  Criado em:25/09/2013
  ---------------------------------------------- */
require_once('classes/usuarios.php');
require_once('classes/util.php');
require_once('classes/ocorrencias.php');
$util = new Util();
$util->Seguranca($_SESSION['idusuarios'], '../../index.php');
/* Function Processos */
global $Usuarios;

function Processo($Processo) {

    /* Atributos Globais */
    $util = new Util();
    $usuarios = new Usuarios();
    $ocorrencias = new Ocorrencias();

    /* Switch processos */
    switch ($Processo) {
        /* incluir */
        case 'incluir':
            if ($_POST['ok'] == 'true') {
                try {
                    //Chamar Incluir

                    $usuarios->consultar("BEGIN");
                    $usuarios->Incluir($_POST['id'], $_POST['nome'], $_POST['email'], $_POST['cpf'], $_POST['login'], $_POST['senha'], $_POST['formapagamento'], $_POST['data'], $_POST['ativo'], $_POST['publicar'], $_POST['idperfil'], $_POST['status'], $_POST['dtreg'], $_POST['idtesteimport']);
                    $usuarios->consultar("COMMIT");

                    $util->msgbox('REGISTRO SALVO COM SUCESSO!');
                    $util->redirecionamentopage('default.php?pg=view/usuarios/consulta.php');
                } catch (Exception $ex) {
                    $usuarios->consultar("ROLLBACK");
                    $util->msgbox("Falha de operacao");
                }
            }
            break;
        /* Edição de dados */
        case 'editar':
            //query ok
            global $linhaEditar;
            global $resultadoEditar;
         
            $usuarios->consultar("select * from usuarios where idusuarios=".$_SESSION['idusuarios']);
            $linhaEditar = $usuarios->Linha;
            $resultadoEditar = $usuarios->Result;
            if ($_POST['ok'] == 'true') {
                try {
                    //Chamar Alterar

                    $usuarios->consultar("BEGIN");
                    $usuarios->alteraSenha($_SESSION['idusuarios'], $_POST['senha']); 
                    $descricao = "Atualização de senha do usuário " . mysql_result($resultadoEditar,0,'login') . " pelo usuário <b>" . $_SESSION['login'] . "</b>";
                    $funcionalidade = "Atualização de senha";
                    $ocorrencias->Incluir($_SESSION['idusuarios'], utf8_decode($descricao), utf8_decode($funcionalidade));
                    
                    $usuarios->consultar("COMMIT");
                    $util->msgbox('REGISTRO EDITADO COM SUCESSO!');
                    $util->redirecionamentopage('default.php?pg=view/usuarios/msg.php');
                } catch (Exception $ex) {
                    $usuarios->consultar("ROLLBACK");
                    $util->msgbox("Falha de operacao");
                }
            }
            break;
    }
}

?>