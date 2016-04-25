<?php

session_start();

require_once('classes/adm_acesso_usuario.php');
require_once('classes/util.php');

/* Function Processos */
global $Adm_acesso_usuario;

function Processo($Processo) {


    /* Switch processos */
    switch ($Processo) {
        /* login de identificação */
        case 'login':
            /* Atributos Globais */
            $util = new Util();
            $adm_acesso_usuario = new Adm_acesso_usuario();

            if ($_POST['ok'] == 'true') {
                $sql = "select * from usuarios u inner join pessoas p
                             on(u.idusuarios=p.idusuarios) where u.login='" . $_POST['login'] . "' and u.senha='" . base64_encode($_POST['senha']) . "'";
                $adm_acesso_usuario->consultar($sql);
                $rs = $adm_acesso_usuario->Result;
                $linha = $adm_acesso_usuario->Linha;
                if ($linha > 0) {
                    $_SESSION['idusuarios'] = mysql_result($rs, 0, 'u.idusuarios');
                    $_SESSION['idperfil'] = mysql_result($rs, 0, 'u.idperfil');
                    $_SESSION['idpessoas'] = mysql_result($rs, 0, 'p.idpessoas');
                    $_SESSION['professor'] = mysql_result($rs, 0, 'p.nome');
                    $_SESSION['linkPessoal'] = $adm_acesso_usuario->dadosAcessousuario($_SESSION['idperfil']);

                    if (mysql_result($rs, 0, 'p.foto') != '') {

                        $_SESSION['foto'] = mysql_result($rs, 0, 'p.foto');
                    } else {
                        $_SESSION['foto'] = "sem_foto.jpg";
                    }
                    $_SESSION['login'] = mysql_result($rs, 0, 'u.login');
                    $_SESSION['horalogado'] = "Logado em " . date('H:i');
                    $util->redirecionamentopage("default.php?pg=view/ocorrencias/ocorrencias.php&form=Ocorrências que merecem atenção");
                } else {
                    $util->msgbox("Login ou senha errado!");
                }
            }
            break;
            
            case 'esqueceuSenha':
            /* Atributos Globais */
                require_once('classes/usuarios.php');
            $usuarios = new Usuarios();    
            $util = new Util();
            $adm_acesso_usuario = new Adm_acesso_usuario();

            if ($_POST['ok'] == 'true') {
                $sql = "select * from usuarios u inner join pessoas p
                             on(u.idusuarios=p.idusuarios) inner join perfil on(u.idperfil=perfil.idperfil) where p.email='" . trim($_POST['email']) . "'";
                $adm_acesso_usuario->consultar($sql);
                $rs = $adm_acesso_usuario->Result;
                $linha = $adm_acesso_usuario->Linha;
                if ($linha > 0) {
                   $login = mysql_result($rs, 0, 'u.login');
                   $senha = mysql_result($rs, 0, 'u.senha');
                   $perfil = mysql_result($rs, 0, 'perfil.descricao');
                   
                   $usuarios->EnviarEmail($login, $senha, $_POST['email'],$perfil);
                   $util->MsgboxSimNaoNovoCad("Os dados de autenticação de acesso do sysduque foi enviado para o seguinte e-mail :".$_POST['email'], "index.php");
                    $util->redirecionamentopage("index.php");
                } else {
                    $util->msgbox("O e-mail informado não foi encontrado, por favor entre em contato com a secretaria!");
                }
            }
            break;
        case 'logoff':
            $util = new Util();
            @session_destroy();
            $util->redirecionamentopage("index.php");

            break;
    }
}

?>