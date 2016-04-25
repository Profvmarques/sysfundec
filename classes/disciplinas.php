<?php
require_once('conexao.php');
require_once('logs.php');

class Disciplinas {

    //Atributos da classe
    private $sigladisciplina;
    private $descricao;
   
    //Método
    public function Incluir($sigladisciplina,$descricao) {
       $insert = 'insert into disciplinas(sigladisciplina,descricao) values("'.strtoupper($sigladisciplina).'","'.strtoupper($descricao).'")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'disciplinas', 'Inserir');
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
    public function Alterar($sigladisciplinaAntes,$sigladisciplina,$descricao){
        $update = 'update disciplinas set sigladisciplina="'.strtoupper($sigladisciplina).'",descricao="'.strtoupper($descricao).'"
            where sigladisciplina="'.strtoupper($sigladisciplinaAntes).'"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'disciplinas', 'Alterar');
    }
    
    public function verificar($sigladisciplina,$descricao) {
        $sql ='select * from disciplinas where sigladisciplina="'.$sigladisciplina.'" and descricao="'.$descricao.'"';
        $this->consultar($sql);
        if ($this->Linha > 0) {
            $util = new Util();
            $util->Msgbox("Disciplina já existente : ".$sigladisciplina." - ".$descricao);
            $this->Achou = 'sim';
        } else {
            $this->Achou = 'nao';
        }
    }

}

?>