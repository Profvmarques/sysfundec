<?php
require_once('conexao.php');
require_once('logs.php');

class Tipoquestionario {

    //Atributos da classe
    private $idtipoquestionario;
    private $descricao;

   
    //Método
    public function Incluir($descricao) {
        $insert = 'insert into tipoquestionario(descricao) values("'.$descricao.'")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'tipoquestionario', 'Inserir');
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
    public function Alterar($idtipoquetionario,$iddescricao){
        $update = 'update tipoquestionario set descricao="'.$descricao.'"
            where idmatriz="'.$idtipoquestionario.'"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'tipoquestionario', 'Alterar');
    }

}

?>