<?php
require_once('conexao.php');
require_once('logs.php');

class Avalicaoinstitucional {

    //Atributos da classe
    private $idusuarios;
    private $idquestionario;
    private $idresposta;
    private $observacao;
    private $dtreg;



    //Método
    public function Incluir($idquestionario,$idresposta,$observacao,$dtreg) {
        $insert = 'insert into avaliacaoconstitucional(idquestionario,idresposta,observacao,dtreg) values("'.$idusuarios.'","'.$idquestionario.'","'.$idresposta.'","'.$observacao.'","'.$dtreg.'")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'avaliacaoconstitucional', 'Inserir');
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
    public function Alterar($idusuarios,$idquestionario,$idresposta,$observacao,$dtreg){
        $update = 'update avaliacaoconstitucional set idquestionario="'.$idquestionario.'","'.$idresposta.'","'.$observacao.'","'.$dtreg.'"
            where avaliacaoconstitucional="'.$avaliacaoconstitucional.'"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'avaliacaoconstitucional', 'Alterar');
    }

}

?>