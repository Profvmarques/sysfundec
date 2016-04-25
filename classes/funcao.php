<?php
require_once('conexao.php');
require_once('logs.php');

class Funcao {

    //Atributos da classe
    private $idfuncao;
    private $funcao;
    private $descricao;
   
    //Método
    public function Incluir($funcao,$descricao) {
        $insert = 'insert into funcao(funcao,descricao) values("'.$funcao.'","'.$descricao.'")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'funcao', 'Inserir');
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
    public function Alterar($idfuncao,$funcao,$descricao){
        $update = ' update funcao set funcao="'.$funcao.'",descricao="'.$descricao.'"
            where idfuncao="'.$idfuncao.'"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'funcao', 'Alterar');
    }

}

?>