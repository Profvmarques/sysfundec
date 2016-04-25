<?php 
			 /* ----------------------------------------------
			 SWD
			 Criado em 26/06/2012
			 Autor: Vinícius Marques da Silva Ferreira
			 Contato: profvmarques@gmail.com
			 Projeto:sysduque  Criado em:25/09/2013
			 ----------------------------------------------*/ 
			 require_once('conexao.php');
			 require_once('logs.php');
			 
			 class Perfil{
			 //Atributos da classe
			private  $idperfil;
			private  $descricao;
			private  $dtreg;
			
			 //Insert
			 public function Incluir($idperfil,$descricao,$dtreg){
			 $insert='insert into perfil(idperfil,descricao,dtreg)values("'.$idperfil.'","'.$descricao.'","'.$dtreg.'")';
			 $Acesso = new Acesso();
			 $Acesso->Conexao();
			   $Acesso->Query($insert);
			  
			 $Logs = new Logs();
			 $Logs->Incluir($_SESSION['idusuarios'],$insert,'perfil','Inserir');
			 }
			 //Delete
			 public function Deletar($id){
			 $delete='delete from  perfil  where id='.$id;
			 $Acesso = new Acesso();
			 $Acesso->Conexao();
			 $Acesso->Query($delete);
			 $Logs = new Logs();
			 $Logs->Incluir($_SESSION['idusuarios'],$delete,'perfil','Deletar');
			  }
			 //Desabilitar Registro
			 public function Dasabilitar($id,$status){
			 $delete='update perfil set status="'.$status.'" where id='.$id;
			 $Acesso = new Acesso();
			 $Acesso->Conexao();
			 $Acesso->Query($delete);
			 $Logs = new Logs();
			 $Logs->Incluir($_SESSION['idusuarios'],$delete,'perfil','Desabilitar');
			  }
			 //consultar
			 public function consultar($sql){
			 $Acesso = new Acesso();
			 $Acesso->Conexao();
			 $Acesso->Query($sql);
			 $this->Linha=@mysql_num_rows($Acesso->result);
			 $this->Result=$Acesso->result;
			 }
			 //Paginar
			 public function Paginar($sql){
			 $Acesso = new Acesso();
			 $Acesso->Conexao();
			 $Acesso->Query($sql);
			 $this->Linha=mysql_fetch_assoc($Acesso->result);
			 $this->Result=$Acesso->result;
			 }
			 //Verificar
			 public function verificar($consult,$result,$msg){
			 $sql= " select '".$result."' from perfil where '".$consult."'";
			 $this->consultar($sql);
			 if ($this->Linha > 0){
			 $util = new Util();
			 $util->Msgbox($msg);
			 $this->Achou='sim';
			}else{
			 $this->Achou='nao';
			}
			  }
			 //Editar
			 public function Alterar($idperfil,$descricao,$dtreg){
			 $update= ' update perfil set idperfil="'.$idperfil.'",descricao="'.$descricao.'",dtreg="'.$dtreg .'" where id="'.$id.'"';
			 $Acesso = new Acesso();
			 $Acesso->Conexao();
			 $Acesso->Query($update);
			 $Logs = new Logs();
			 $Logs->Incluir($_SESSION['idusuarios'],$update,'perfil','Alterar');
			   }
			
			   }
			?>