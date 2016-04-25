<?php
require_once('conexao.php');
require_once('logs.php');

class Usuarios {

    //Atributos da classe
    private $idusuarios;
    private $login;
    private $senha;
    private $idperfil;
    private $dtreg;

    //Método
    public function Incluir($login,$senha,$idperfil) {
        $insert = 'insert into usuarios(login,senha,situacao,idperfil,dtreg)values("'.$login.'","'.$senha.'","SIM","'.$idperfil.'","'.date('Y-m-d H:i:s').'")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert); 

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'usuarios', 'Inserir');
        
        $this->consultar("select max(idusuarios) as idU from usuarios");
        $rs=  $this->Result;
        $idusuarios=mysql_result($rs,0,'idU');
        return $idusuarios;
    }

    
 
    //consultar
    public function consultar($sql) {
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($sql);
        $this->Linha = @mysql_num_rows($Acesso->result);
        $this->Result = $Acesso->result;
    }

    
       //Editar
    public function Alterar($idusuarios,$login,$senha,$idperfil){
        $update = ' update usuarios set login="'.$login.'",senha="'.base64_encode($senha).'",
            idperfil="'.$idperfil.'" where idusuarios="'.$idusuarios.'"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'usuarios', 'Alterar');
    }
    
      public function alteraSenha($idusuarios,$senha,$perfil){
        $update = 'update usuarios set senha="'.base64_encode($senha).'" where idusuarios="'.$idusuarios.'"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'usuarios', 'alterar senha');
    }
    
    	  public function EnviarEmail($login,$senha,$email,$perfil){
            
            
                    $to = $email;

                    // subject
                     
                    $subject = "Dados de acesso ao sistema Sysduque";

                    // message
                    $message ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema Acadêmico da FAETERJ Duque de Caxias</title>
</head>
<body>
<div id="all" style="width:550px; background:#121A04; margin-top:20px; text-align:center; margin:0 auto; font-family:Arial; font-size:12px">

	<div id="logo"><img src="http://faeterj-caxias.net/sysduque/img/logoCaxiasBranco.jpg" width="392" height="85" /></div>
    <div id="content" style="width:460px; background:#fff; text-align:left; margin:-32px 14px 20px ; padding:30px ">
    	<p>Olá <strong style="color:#000000"><?= $nome; ?></strong></p>
        <p style=" background-color:#000; color:#fff; padding:5px;">Detalhes do seu acesso ao sistema como '.$perfil.'</p>
        <p><strong>Login : </strong>'.$login.'</p>
        <p><strong>Senha : </strong>'.base64_decode($senha).'</p>
            
        <p style="margin-top:40px">Por favor, não passe estas informações para terceiros.</p>
        <p>Agora você pode acessar no: <a href="http://faeterj-caxias.net/sysduque/index.php" target="_blank" style="color:#f00; text-decoration:none;">http://faeterj-caxias.net/sysduque/</a></p>
        
        
    </div>
</div>
</body>
</html>';
            
         // To send HTML mail, the Content-type header must be set
                    $headers = 'MIME-Version: 1.0 ' . "\r\n";
                    $headers.='X-Priority: 3' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

                    // Additional headers

                    $headers .= 'From: Sysduque <sysduque@faeterj-caxias.net>' . "\r\n";
                    $headers.='Return-Path: ' . $email;
                     
                    // Mail it
                        try {
                            mail($email, $subject,  $message, $headers);
                            
                        } catch (Exception $e) {
                            

                           echo $msg = "erro no servi&ccedil;o de envio de e-mail (SMTP) \n \r" . $e->getMessage();
                        }   
            
            
        }

}

?>