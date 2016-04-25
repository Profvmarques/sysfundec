<?php
require_once('pessoas.php');
require_once('conexao.php');
require_once('logs.php');

class Funcionarios extends Pessoas {

    //Atributos da classe
    private $idfuncionarios;
        
       //Método
    public function IncluirFuncionario($idpessoas) {
        $insert = 'insert into funcionarios(idpessoas) values("'.$idpessoas.'")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'funcionarios', 'Inserir');
        
        $this->consultar("select max(idfuncionarios) as idF from funcionarios");
        $rs=$this->Result;
        $idfuncionarios=mysql_result($rs,0,'idF');
        return $idfuncionarios;
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
    public function Alterar($idfuncionarios,$idpessoas){
        $update = 'update funcionarios set idpessoas="'.$nome.'" where idfuncionarios="'.$idfuncionarios.'"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'funcionarios', 'Alterar');
    }

    public function verificar($email,$nome){
		
	$sql="select * from pessoas where email='".$email."' and nome='".$nome."'";

		
		$this->Consultar($sql);
		
		if ($this->Linha > 0) {
		   $Construcao = new ContrucaoPage();
		   $Construcao->msgbox('Este e-mail e nome encontram-se na base de dados!');
		  $this->Achou='sim';
		}else {
		$this->Achou='nao';
		}
	}
}

?>