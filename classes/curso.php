<?php
require_once('conexao.php');
require_once('logs.php');

class Curso {

    //Atributos da classe
    private $siglacurso;
    private $descricao;    
    private $idtipocurso;
      
    //Método
    public function Incluir($siglacurso,$descricao,$idtipocurso) {
        $insert = 'insert into curso(siglacurso,descricao,idtipocurso) 
            values("'.strtoupper($siglacurso).'","'.strtoupper($descricao).'","'.$idtipocurso.'")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'curso', 'Inserir');
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
    public function Alterar($siglacurso,$descricao,$idtipocurso){
        $update = 'update curso set siglacurso="'.strtoupper($siglacurso).'",
            descricao="'.strtoupper($descricao).'",idtipocurso="'.$idtipocurso.'"
                where siglacurso="'.$_GET['id'].'"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'curso', 'Alterar');
    }

}

?>