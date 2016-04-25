<?php
require_once('conexao.php');
require_once('logs.php');

class TipoComponente {

    //Atributos da classe
    private $idtipocomponente;
    private $descricao;
   
    //Método
    public function Incluir($descricao) {
        $insert = 'insert into tipocomponente(descricao) values("'.$descricao.'")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'tipocomponente', 'Inserir');
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
    public function Alterar($idtipocomponente,$descricao){
        $update = 'update tipocomponente set descricao="'.$descricao.'"
            where idtipocomponente="'.$idtipocomponente.'"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'tipocomponente', 'Alterar');
    }

}

?>