<?php
require_once('conexao.php');
require_once('logs.php');

class SituacaoMatricula {

    //Atributos da classe
    private $idsituacao_matricula;
    private $descricao;

   
    //Método
    public function Incluir($descricao) {
        $insert = 'insert into situacaomatricula(descricao) values("'.$descricao.'")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'situacaomatricula', 'Inserir');
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
    public function Alterar($idsituacao_matricula,$descricao){
        $update = 'update idsituacao_matricula set descricao="'.$descricao.'"
            where idsituacao_matricula="'.$idsituacao_matricula.'"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'situacaomatricula', 'Alterar');
    }

}

?>