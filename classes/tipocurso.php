<?php
require_once('conexao.php');
require_once('logs.php');

class TipoCurso {

    //Atributos da classe
    private $idtipocurso;
    private $descricao;

   
    //Método
    public function Incluir($descricao) {
        $insert = 'insert into tipocurso(descricao) values("'.$descricao.'")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'tipocurso', 'Inserir');
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
    public function Alterar($idtipocurso,$descricao){
        $update = 'update tipocurso set descricao="'.$descricao.'"
            where idtipocurso="'.$idtipocurso.'"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'tipocurso', 'Alterar');
    }

}

?>