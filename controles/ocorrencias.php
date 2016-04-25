<?php

session_start();
require_once('classes/ocorrencias.php');
require_once('classes/util.php');

function Processo($Processo) {
    /* Switch processos */
    switch ($Processo) {
        /* incluir */
        case 'incluir':
            global $linha;
            global $rs;
            global $linha2;
            global $rs2;
            global $linha3;
            global $rs3;

            $util = new Util();
            $ocorrencias = new Ocorrencias();
            
            $util->Seguranca($_SESSION['idusuarios'], '../../index.php');

              $ocorrencias->consultar("select *, date_format(data_hora,'%d/%m/%Y %H:%i:%s') as dh from ocorrencias where situacao<>'VALIDADA' order by  data_hora desc");  
              $linha=$ocorrencias->Linha;
              $rs=$ocorrencias->Result;
           
            if ($_POST['ok'] == 'true') {
                 try {
                   $ocorrencias->consultar("BEGIN");
                   for($i=0;$i<$linha;$i++){
                    $idocorrencias=mysql_result($rs,$i,'idocorrencias');
                    if($_POST['ch'.$i]=="on"){
                     $ocorrencias->Alterar($idocorrencias, "VALIDADA");
                     $ocorrencias->consultar("COMMIT");   
                    }                    
                   }
                   
                    $util->msgbox('REGISTRO SALVO COM SUCESSO!');
                    $util->redirecionamentopage('default.php?pg=view/ocorrencias/ocorrencias.php&form= Ocorrências que merecem atenção&idmodulos=2');
                 } catch (Exception $ex) {

                 }
                    

            }
            break;
        /* Edição de dados */
        case 'editar':
            //query ok
            global $linhaEditar;
            global $resultadoEditar;

            $util = new Util();
            $ocorrencias = new Adm_menu();
            $util->Seguranca($_SESSION['idusuarios'], '../../index.php');

            $ocorrencias->consultar("select * from adm_menu am inner join adm_modulos amod on(am.idmodulos=amod.idmodulos) 
inner join adm_sistemas adms ON(amod.idsistemas=adms.idsistemas) 
where am.idmenu=" . $_GET['id']);
            $linhaEditar = $ocorrencias->Linha;
            $resultadoEditar = $ocorrencias->Result;
            if ($_POST['ok'] == 'true') {
                
            
            }
            break;

        case 'consulta':
            global $linha;
            global $rs;
            
            $ocorrencias = new Ocorrencias();

           
              $ocorrencias->consultar("select * from ocorrencias where situacao<>'VALIDADA'");  
              $linha=$ocorrencias->Linha;
              $rs=$ocorrencias->Result;                 
            
            break;
    }
}

?>