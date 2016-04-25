<?php
require_once('conexao.php');
require_once('logs.php');

class Logs {

    //Atributos da classe
    private $idlogs;
    private $idusuarios;
    private $acao;
    private $nome_tabela;
    private $queryexecutada;
    private $dtreg;

    //Insert
    public function Incluir($idusuarios, $queryexecutada,$nome_tabela,$acao ) {
        $sql = str_replace("'", "\'", $queryexecutada);

        $insert = "insert into logs (idusuarios,queryexecutada,nome_tabela,acao,dtreg) values 
		('" . $idusuarios . "','" . $sql . "','" . $nome_tabela . "','" . $acao . "','" . date('Y-m-d H:i:s') . "')";

        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);
    }


    //consultar
    public function consultar($sql) {
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($sql);
        $this->Linha = @mysql_num_rows($Acesso->result);
        $this->Result = $Acesso->result;
    }  

    

}

?>