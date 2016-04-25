<?php
require_once('conexao.php');
require_once('logs.php');

class Perguntas {

    //Atributos da classe
    private $idperguntas;
    private $descricao;
    private $idtipoquestão;



    //Método
    public function Incluir($descricao,$idtipoperguntas) {
        $insert = 'insert into perguntas(descricao) values("'.$descricao.'","'.$idtipoperguntas.'")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'perguntas', 'Inserir');
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
    public function Alterar($idperguntas,$descricao,$idtipoquestao){
        $update = 'update idperguntas set idtipoperguntas="'.$descricao.'","'.$idtipoperguntas.'"
            where idperguntas="'.$idperguntas.'"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'perguntas','Alterar');
    }

}

?>