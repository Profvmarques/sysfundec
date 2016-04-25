<?php
require_once('conexao.php');
require_once('logs.php');

//Sempre primeira letra maiúscula
class PeriodoLetivo {

    //Atributos da classe
    private $idperiododletivo;
    private $siglacurso;
    private $semestre;
    private $siglaperiodo;
    private $data_inicio;
    private $data_fim;
    private $dtreg;
   
    //Método
    public function Incluir($siglacurso,$semestre,$siglaperiodo,$data_inicio,$data_fim) {
        
        $insert = 'insert into periodoletivo(siglacurso,semestre,siglaperiodo,data_inicio,data_fim,dtreg) 
            values("'.$siglacurso.'","'.$semestre.'","'.$siglaperiodo.'","'.$data_inicio.'","'.$data_fim.'","'.date('Y-m-d H:i:s').'")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'periodoletivo', 'Inserir');
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
    public function Alterar($idperiodoletivo,$semestre,$siglacurso,$siglaperiodo,$data_inicio,$data_fim){
         $update = 'update periodoletivo set siglacurso="'.$siglacurso.'",semestre="'.$semestre.'",
            siglaperiodo="'.$siglaperiodo.'",data_inicio="'.$data_inicio.'"
            ,data_fim="'.$data_fim.'" where idperiodoletivo="'.$idperiodoletivo.'"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'periodoletivo', 'Alterar');
    }
    
    public function verificarPeriodoLetivo($siglacurso,$siglaperiodo) {
        $sql = " select * from periodoletivo where siglacurso='".$siglacurso."' and siglaperiodo='".$siglaperiodo."'";
        $this->consultar($sql);
        if ($this->Linha > 0) {            
            $this->Achou = 'sim';
            $util = new Util();
            $util->Msgbox("Este periodo letivo($siglaperiodo) já existe  para este curso de ".$siglacurso);
        } else {
            $this->Achou = 'nao';
        }
    }

}

?>