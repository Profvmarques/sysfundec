<?php
require_once('conexao.php');
require_once('logs.php');

//Sempre primeira letra maiúscula
class AtividadeFuncionais {

    //Atributos da classe
    private $idatividadesfuncionais;
    private $idfuncionarios;
    private $idfuncao;
    private $data;
    private $dtreg;
    
   
    //Método
    public function Incluir($idfuncionarios,$idfuncao,$data_inicio,$data_termino) {
         $insert = 'insert into atividadesfuncionais(idfuncionarios,idfuncao,data_inicio,data_termino,dtreg) values("'.$idfuncionarios.'","'.$idfuncao.'","'.$data_inicio.'","'.$data_termino.'",
                "'.date('Y-m-d H:i:s').'")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'atividadesfuncionais', 'Inserir');
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
    public function Alterar($idatividadesfuncionais,$idfuncionarios,$idfuncao,$data_inicio,$data_termino) {
        $update = 'update atividadesfuncionais set idfuncionarios="'.$idfuncionarios.'",
            idfuncao="'.$idfuncao.'",data_inicio="'.$data_inicio.'",data_termino="'.$data_termino.'" where idatividadesfuncionais="'.$idatividadesfuncionais.'"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'atividadesfuncionais', 'Alterar');
    }

}

?>