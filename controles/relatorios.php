<?php

session_start();

function Processo($Processo) {


    /* Switch processos */
    switch ($Processo) {
        /* incluir */
        case 'calendarioPeriodoletivo':
            require_once('../../classes/util.php');
            $util = new Util();
            $util->Seguranca($_SESSION['idusuarios'], '../../index.php');
            require_once('../../classes/eventoperiodoletivo.php');
            global $linha;
            global $rs;
            global $msg;
            
            $eventoPeriodo = new EventoPeriodoletivo();
            $eventoPeriodo->consultar("select *, DATE_FORMAT(ep.data_inicio,'%d/%m/%Y') as inicio, DATE_FORMAT(ep.data_fim,'%d/%m/%Y') as final from eventoperiodoletivo ep inner join periodoletivo pl on(ep.idperiodoletivo = pl.idperiodoletivo) 
 inner join tipoevento te on(ep.idtipoevento = te.idtipoevento) 
 where ep.idperiodoletivo=".$_GET['id']." order BY ep.data_inicio, ep.data_fim, ep.descricao, te.descricao");
            $linha = $eventoPeriodo->Linha;
            $rs = $eventoPeriodo->Result;
            
            if ($linha == 0) {
              $msg="<H1><b>Eventos inexitentes para este per&iacute;odo letivo!</b></H1>";
             
            }

            break;
    }
}

?>