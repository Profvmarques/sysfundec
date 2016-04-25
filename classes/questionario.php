<?php
require_once('conexao.php');
require_once('logs.php');

class Questionario {

    //Atributos da classe
    private $idquestionarios;
    private $idevento_periodo_letivo;
    private $idperguntas;
    private $periodoletivo;
    private $dtreg;


    //Método
    public function Incluir($idevento_periodo_letivo,$idperguntas,$periodoletivo,$dtreg) {
        $insert = 'insert into questionario(idevento_periodo_letivo,idperguntas,periodoletivo,dtreg) values("'.$idevento_periodo_letivo.'","'.$idperguntas.'","'.$periodoletivo.'","'.$dtreg.'")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'questionario', 'Inserir');
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
    public function Alterar($idquestionarios,$idevento_periodo_letivo,$idperguntas,$periodoletivo,$dtreg){
        $update = 'update questionario set idevento_periodo_letivo="'.$idevento_periodo_letivo.'",idperguntas="'.$idperguntas.'",periodoletivo="'.$periodoletivo.'"
            where idquestionarios="'.$idquestionarios.'"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'questionario', 'Alterar');
    }

}

?>