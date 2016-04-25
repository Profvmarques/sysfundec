<?php
require_once('conexao.php');
require_once('logs.php');

//Sempre primeira letra maiúscula
class Solicitacaodocumento {

    //Atributos da classe
    private $idsolicitacaodocumento;
    private $idusuarios;
    private $idtipodocumento;
    private $datasolicitacao;
    private $idsituacaodocumento;
    private $observacaoo;
    private $dtreg;
    
   
   
   //Método
    public function Incluir($idusuarios, $idtipodocumento, $datasolicitacao, $idsituacaodocumento, $observacao, $dtreg ) {
        $insert = 'insert into solicitacaodocumento(idusuarios, idtipodocumento, datasolicitacao, idsituacaodocumento, observacao, dtreg) values("'.$usuarios.'","'.$idtipodocumento.'","'.$datasolicitacao.'",
                "'.$idsituacaodocumento.'","'.$observacao.'","'.dtreg.'")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'solicitacaodocumento', 'Inserir');
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
    public function Alterar($idsolicitacaodocumento, $idusuarios, $idtipodocumento, $datasolicitacao, $idsituacaodocumento, $observacao, $dtreg){
        $update = 'update solicitacaodocumnento set idusuarios="'.$idusuarios.'",idtipodocumento="'.$idtipodocumento.'",
            datasolicitacao="'.$datasolicitacao.'",idsituacaodocumento="'.$idsituacaodocumento.'",observacao="'.$observacao.'",dtreg="'.$dtreg.'"
                    where idsolicitacaodocumento="'.$idsolicitacaodocumento.'"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'solicitacaodocumento', 'Alterar');
    }

}

?>