<?php
require_once('conexao.php');
require_once('logs.php');

class MatriculaProfessor {

    //Atributos da classe
    private $matriculaprofessor;
    private $idpessoas;    
    private $carga_horaria;
    private $data_inicio;
    private $data_fim;
   
    
   
    //Método
    public function Incluir($matriculaprofessor,$idpessoas,$carga_horaria,$data_inicio,$data_fim) {
        $insert = 'insert into matriculaprofessor(matriculaprofessor,idpessoas,carga_horaria,data_inicio,data_fim) 
            values("'.$matriculaprofessor.'","'.$idpessoas.'","'.$carga_horaria.'","'.$data_inicio.'","'.$data_fim.'")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'matriculaprofessor', 'Inserir');
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
    public function Alterar($matriculaprofessor,$idpessoas,$carga_horaria,$data_inicio,$data_fim){
        $update = 'update matriculaprofessor set matriculaprofessor="'.$matriculaprofessor.'",
            idpessoas="'.$idpessoas.'",carga_horaria="'.$carga_horaria.'",
                data_inicio="'.$data_inicio.'", data_fim="'.$data_fim.'" where matriculaprofessor="'.$_GET['mat'].'"';
       
       $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'matriculaprofessor', 'Alterar');
    }
    
    public function verificarMatriculaProfessor($matriculaprofessor) {
        $sql = " select * from matriculaprofessor where matriculaprofessor=".$matriculaprofessor;
        $this->consultar($sql);
        if ($this->Linha > 0) {            
            $this->Achou = 'sim';
            $util = new Util();
            $util->Msgbox("Esta Matricula já existe : ".$matriculaprofessor);
        } else {
            $this->Achou = 'nao';
        }
    }

}

?>