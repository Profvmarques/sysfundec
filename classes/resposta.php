<?php
require_once('conexao.php');
require_once('logs.php');

class Respostas {

    //Atributos da classe
    private $idresposta;
    private $descricao;

   
    //Método
    public function Incluir($descricao) {
        $insert = 'insert into respostas(descricao) values("'.$descricao.'")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'resposta', 'Inserir');
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
    public function Alterar($idresposta,$iddescricao){
        $update = 'update respostas set siglacurso="'.$descricao.'"
            where idresposta="'.$idresposta.'"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'resposta', 'Alterar');
    }

}

?>