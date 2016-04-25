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
			 
			 class Aloca_espaco{
			 //Atributos da classe
			private  $idtemposemanal;
			private  $sigladisciplina;
			private  $idespaco;
			
			 //Insert
			 public function Incluir($idtemposemanal,$sigladisciplina,$idespaco){
			 $insert='insert into aloca_espaco(idtemposemanal,sigladisciplina,idespaco)values("'.$idtemposemanal.'","'.$sigladisciplina.'","'.$idespaco.'")';
			 $Acesso = new Acesso();
			 $Acesso->Conexao();
			   $Acesso->Query($insert);
			  
			 $Logs = new Logs();
			 $Logs->Incluir($_SESSION['idusuarios'],$insert,'aloca_espaco','Inserir');
			 }
			 //Delete
			 public function Deletar($id){
			 $delete='delete from  aloca_espaco  where id='.$id;
			 $Acesso = new Acesso();
			 $Acesso->Conexao();
			 $Acesso->Query($delete);
			 $Logs = new Logs();
			 $Logs->Incluir($_SESSION['idusuarios'],$delete,'aloca_espaco','Deletar');
			  }
			 //Desabilitar Registro
			 public function Dasabilitar($id,$status){
			 $delete='update aloca_espaco set status="'.$status.'" where id='.$id;
			 $Acesso = new Acesso();
			 $Acesso->Conexao();
			 $Acesso->Query($delete);
			 $Logs = new Logs();
			 $Logs->Incluir($_SESSION['idusuarios'],$delete,'aloca_espaco','Desabilitar');
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
			 $sql= " select '".$result."' from aloca_espaco where '".$consult."'";
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
			 public function Alterar($idtemposemanal,$sigladisciplina,$idespaco){
			 $update= ' update aloca_espaco set idtemposemanal="'.$idtemposemanal.'",sigladisciplina="'.$sigladisciplina.'",idespaco="'.$idespaco .'" where id="'.$id.'"';
			 $Acesso = new Acesso();
			 $Acesso->Conexao();
			 $Acesso->Query($update);
			 $Logs = new Logs();
			 $Logs->Incluir($_SESSION['idusuarios'],$update,'aloca_espaco','Alterar');
			   }
			
			   }
			?>