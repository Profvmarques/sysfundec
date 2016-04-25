<?php
require_once('conexao.php');
require_once('logs.php');

class Tipoquestao {

    //Atributos da classe
    private $idtipoquestao;
    private $descricao;

   
    //Método
    public function Incluir($descricao) {
        $insert = 'insert into tipoquestao(descricao) values("'.$descricao.'")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'tipoquestao', 'Inserir');
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
    public function Alterar($tipoquestao,$iddescricao){
        $update = 'update tipoquestao set descricao="'.$descricao.'"
            where idtipoquestao="'.$tipoquestao.'"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'tipoquestao', 'Alterar');
    }

}

?>