<?php 
			 /* ----------------------------------------------
			 SWD
			 Criado em 26/06/2012
			 Autor: Vinícius Marques da Silva Ferreira
			 Contato: profvmarques@gmail.com
			 Projeto:sysduque  Criado em:05/03/2014
			 ----------------------------------------------*/ 
			 require_once('acesso.php');
			 require_once('logs.php');
			 
			 class Temposemanal{
			 //Atributos da classe
			private  $idtemposemanal;
			private  $siglacurso;
			private  $horainicio;
			private  $horafim;
			private  $diasemana;
			
			 //Insert
			 public function Incluir($idtemposemanal,$siglacurso,$horainicio,$horafim,$diasemana){
			 $insert='insert into temposemanal(idtemposemanal,siglacurso,horainicio,horafim,diasemana)values("'.$idtemposemanal.'","'.$siglacurso.'","'.$horainicio.'","'.$horafim.'","'.$diasemana.'")';
			 $Acesso = new Acesso();
			 $Acesso->Conexao();
			   $Acesso->Query($insert);
			  
			 $Logs = new Logs();
			 $Logs->Incluir($_SESSION['idusuarios'],$insert,'temposemanal','Inserir');
			 }
			 //Delete
			 public function Deletar($id){
			 $delete='delete from  temposemanal  where id='.$id;
			 $Acesso = new Acesso();
			 $Acesso->Conexao();
			 $Acesso->Query($delete);
			 $Logs = new Logs();
			 $Logs->Incluir($_SESSION['idusuarios'],$delete,'temposemanal','Deletar');
			  }
			 //Desabilitar Registro
			 public function Dasabilitar($id,$status){
			 $delete='update temposemanal set status="'.$status.'" where id='.$id;
			 $Acesso = new Acesso();
			 $Acesso->Conexao();
			 $Acesso->Query($delete);
			 $Logs = new Logs();
			 $Logs->Incluir($_SESSION['idusuarios'],$delete,'temposemanal','Desabilitar');
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
			 $sql= " select '".$result."' from temposemanal where '".$consult."'";
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
			 public function Alterar($idtemposemanal,$siglacurso,$horainicio,$horafim,$diasemana){
			 $update= ' update temposemanal set idtemposemanal="'.$idtemposemanal.'",siglacurso="'.$siglacurso.'",horainicio="'.$horainicio.'",horafim="'.$horafim.'",diasemana="'.$diasemana .'" where id="'.$id.'"';
			 $Acesso = new Acesso();
			 $Acesso->Conexao();
			 $Acesso->Query($update);
			 $Logs = new Logs();
			 $Logs->Incluir($_SESSION['idusuarios'],$update,'temposemanal','Alterar');
			   }
			
			   }
			?>