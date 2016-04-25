<?php
require_once('conexao.php');
require_once('logs.php');
class Ouvidoria{
 //Atributos
    private $idusuarios;
    private $classificacao;
    private $basedeconhecimento;
    private $protocolo;
    private $assunto;
    private $observacao;
    private $foto;
    private $situacao;
    private $dtreg;
    private $idapartamento;
    
   	public function Incluir($idusuarios,$classificacao,$basedeconhecimento,$protocolo, $assunto, $observacao, $foto, $situacao, $idapartamentos){

	
     $insert='insert into ouvidoria (idusuarios, idclassificacao, idbaseconhecimentos, protocolo, assunto, observacao, foto, situacao, dtreg, idapartamentos) 
           values ("'.$idusuarios.'","'.$classificacao.'","'.$basedeconhecimento.'", "'.$protocolo.'" , "'.$assunto.'" , "'.$observacao.'",  "'.$foto.'", "'.$situacao.'",NOW(),"'.$idapartamentos.'")';
				
		$Acesso = new Acesso();
		$Acesso->Conexao();
		$Acesso->Query($insert,$Acesso->cnx);
		
		$Logs = new Logs();
		$Logs->IncluirReg($_SESSION["id"],$insert,'ouvidoria','Inserir');
	}
	
	/*
	+-------------------------------------------------------------------------------------------------------+
	|	Fim do metodo responsavel de incluir um novo registro. 												|
	+-------------------------------------------------------------------------------------------------------+	
	*/
	
	/*
	+-------------------------------------------------------------------------------------------------------+
	|	Este metodo � responsavel de editar um registro.	 												|
	+-------------------------------------------------------------------------------------------------------+	
	*/
	
	public function Alterar($idouvidoria, $classificacao,$basedeconhecimento,$protocolo, $assunto, $observacao, $foto){
		
	$update='update ouvidoria set idclassificacao="'.$classificacao.'", idbaseconhecimentos = "'.$basedeconhecimento.'", protocolo="'.$protocolo.'", assunto = "'.$assunto.'", observacao = "'.$observacao.'", foto = "'.$foto.'"
                     where idouvidoria='.$idouvidoria;		
		
		
		$Acesso = new Acesso();
		$Acesso->Conexao();
		$Acesso->Query($update,$Acesso->cnx);
		
		$Logs = new Logs();
                
		$Logs->IncluirReg($_SESSION["id"],$update,'ouvidoria','Atualizar');

	}
        
        	public function AtulizarSituacaoProtocolo($idouvidoria,$situacao){
		
		 $update='update ouvidoria set situacao="'.$situacao.'" where idouvidoria='.$idouvidoria;		
		
		
		$Acesso = new Acesso();
		$Acesso->Conexao();
		$Acesso->Query($update,$Acesso->cnx);
		
		$Logs = new Logs();
                
		$Logs->IncluirReg($_SESSION["id"],$update,'ouvidoria','Atualizar');

	}
	
	/*
	+-------------------------------------------------------------------------------------------------------+
	|	Fim do metodo responsavel de editar um registro.	 												|
	+-------------------------------------------------------------------------------------------------------+	
	*/
	
	/*
	+-------------------------------------------------------------------------------------------------------+
	|	Este metodo � responsavel de deletar um registro.	 												|
	+-------------------------------------------------------------------------------------------------------+	
	*/
	
	public function Excluir($id, $situacaoid){
		
		$delete='update usuarios set status="'.$situacaoid.'" where id='.$id;
		
		$Acesso = new Acesso();
		$Acesso->Conexao();
		$Acesso->Query($delete,$Acesso->cnx);
		
		$Logs = new Logs();
		$Logs->Incluir($_SESSION['idusuario'],$delete,'Usuarios','Deletar');
			
	}
	
	/*
	+-------------------------------------------------------------------------------------------------------+
	|	Fim do metodo responsavel de deletar um registro.	 												|
	+-------------------------------------------------------------------------------------------------------+	
	*/
	
	/*
	+-------------------------------------------------------------------------------------------------------+
	|	Este metodo � responsavel de consultar registro(s).	 												|
	+-------------------------------------------------------------------------------------------------------+	
	*/
	
	public function Consultar($sql){
		
		$Acesso = new Acesso();
		$Acesso->Conexao();
		$Acesso->Query($sql,$Acesso->cnx);
		
		$this->Linha=@mysql_num_rows($Acesso->result);
		$this->Result=$Acesso->result;
		
	}
	
	// este m�todo compara se o usu�rio j� est� cadastrado e impede o cadastro duplicar-se
	public function verificar($espaco){
		
	$sql="select * from ouvidoria where espaco='".$espaco."'";
		
		$this->Consultar($sql);
		
		if ($this->Linha > 0) {
		   $Construcao = new ContrucaoPage();
		   $Construcao->msgbox('Este espaco ja existe na base de dados!');
		  $this->Achou='sim';
		}else {
		$this->Achou='nao';
		}
	} 
    
}
?>
