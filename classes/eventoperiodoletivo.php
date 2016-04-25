<?php
require_once('conexao.php');
require_once('logs.php');

class EventoPeriodoletivo {

    //Atributos da classe
    private $idevento_periodo_letivo;
    private $idperiodoletivo;
    private $idtipoevento;
    private $data_inicio;
    private $data_fim;
    private $descricao;
    private $dtreg;


    //Método
    public function Incluir($idperiodoletivo,$idtipoevento,$data_inicio,$data_fim,$descricao) {
        $insert = 'insert into eventoperiodoletivo(idperiodoletivo,idtipoevento,data_inicio,data_fim,descricao,dtreg) values("'.$idperiodoletivo.'","'.$idtipoevento.'","'.$data_inicio.'","'.$data_fim.'","'.$descricao.'","'.date('Y-m-d H:i:s').'")';
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
    public function Alterar($idevento_periodo_letivo,$idtipoevento,$data_inicio,$data_fim,$descricao){
        $update = 'update eventoperiodoletivo set idtipoevento="'.$idtipoevento.'",data_inicio="'.$data_inicio.'",data_fim="'.$data_fim.'",descricao="'.$descricao.'"
            where idevento_periodo_letivo="'.$idevento_periodo_letivo.'"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'eventoperiodoletivo', 'Alterar');
    }

}

?>