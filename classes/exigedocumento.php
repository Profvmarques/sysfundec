<?php
require_once('conexao.php');
require_once('logs.php');

class EventoPeriodoletivo {

    //Atributos da classe
    private $idevento_periodo_letivo;
    private $idperiodoletivo;
    private $idtipoevento;
    private $data;
    private $descricao;
    private $detreg;


    //Método
    public function Incluir($idperiodoletivo,$idtipoevento,$data,$descricao,$detreg) {
        $insert = 'insert into eventoperiodoletivo(idperiodoletivo,idtipoevento,data,descricao,dtreg) values("'.$idperiodoletivo.'","'.$idtipoevento.'","'.$data.'","'.$descricao.'","'.$detreg.'")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'eventoperiodoletivo', 'Inserir');
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
    public function Alterar($idevento_periodo_letivo,$idevento_periodo_letivo,$idtipoevento,$periodoletivo,$data,$descricao,$detreg){
        $update = 'update eventoperiodoletivo set idperiodoletivo="'.$idperiodoletivo.'",idtipoevento="'.$idtipoevento.'",data="'.$data.'",descricao="'.$descricao.'",dtreg="'.$dtreg.'"
            where idevento_periodo_letivo="'.$idevento_periodo_letivo.'"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'eventoperiodoletivo', 'Alterar');
    }

}

?>