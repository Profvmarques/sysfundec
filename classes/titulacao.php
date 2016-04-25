<?php
require_once('conexao.php');
require_once('logs.php');

class Titulacao {

    //Atributos da classe
    private $idtitulacao;
    private $descricao;
   
    //Método
    public function Incluir($descricao) {
        $insert = 'insert into disciplinas(descricao) values("'.$descricao.'")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'titulacao', 'Inserir');
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
    public function Alterar($idtitulacao,$descricao){
        $update = 'update titulacao set descricao="'.$descricao.'"
            where idtitulacao="'.$idtitulacao.'"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'titulacao', 'Alterar');
    }

}

?>