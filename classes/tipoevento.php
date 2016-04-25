<?php
require_once('conexao.php');
require_once('logs.php');

class Tipoevento {

    //Atributos da classe
    private $idtipoevento;
    private $descricao;

   
    //Método
    public function Incluir($descricao) {
        $insert = 'insert into tipoevento(descricao) values("'.$descricao.'")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'tipoevento', 'Inserir');
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
    public function Alterar($idtipoevento,$descricao){
        $update = 'update idtipoevento set descricao="'.$descricao.'"
            where idtipoevento="'.$idtipoevento.'"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'tipoevento', 'Alterar');
    }

}

?>