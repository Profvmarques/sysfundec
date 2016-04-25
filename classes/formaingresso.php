<?php
require_once('conexao.php');
require_once('logs.php');

class FormaIngresso {

    //Atributos da classe
    private $idformaingresso;
    private $descricao;

   
    //Método
    public function Incluir($descricao) {
        $insert = 'insert into formaingresso(descricao) values("'.$descricao.'")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'formaingresso', 'Inserir');
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
    public function Alterar($idformaingresso,$descricao){
        $update = 'update idformaingresso set descricao="'.$descricao.'"
            where idformaingresso="'.$idformaingresso.'"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'formaingresso', 'Alterar');
    }

}

?>