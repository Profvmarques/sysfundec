<?php 
			 session_start();
			 /* ----------------------------------------------
			 SWD 1.0
			 Criado em 04/11/2011
			 Autor: Vinícius Marques da Silva Ferreira
			 Contato:profvmarques@gmail.com
			 Projeto:sysduque  Criado em:25/09/2013
			 ----------------------------------------------*/ 
			 require_once('classes/adm_modulo_gestor.php');
			 require_once('classes/util.php');
			 $util = new Util();
			$util->Seguranca($_SESSION['idusuarios'],'../../index.php');
			 /*Function Processos*/
			 global $Adm_modulo_gestor;
			 function Processo($Processo){
			 
			 /*Atributos Globais*/
			$util = new Util();
			$adm_modulo_gestor=new Adm_modulo_gestor();
			
			 /* Switch processos*/
			 switch ($Processo){
			/*incluir*/
			 case 'incluir':
			if($_POST['ok']=='true'){
			try{
			  //Chamar Incluir
			
			 $adm_modulo_gestor->consultar("BEGIN");
			$adm_modulo_gestor->Incluir( $_POST['idmodulos'],$_POST['idusuarios'],$_POST['dtreg'] );
			 $adm_modulo_gestor->consultar("COMMIT");
			 
			$util->msgbox('REGISTRO SALVO COM SUCESSO!');
			$util->redirecionamentopage('default.php?pg=view/adm_modulo_gestor/consulta.php');
			}catch (Exception $ex) {
			 $adm_modulo_gestor->consultar("ROLLBACK");
			$util->msgbox("Falha de operacao");
			}
			 }
			 break;
			   /* Edição de dados */ 
			 case 'editar':
			 //query ok
			 global $linhaEditar;
			 global $resultadoEditar;
			$adm_modulo_gestor->consultar($sql_consulta_id);
			$linhaEditar =  $adm_modulo_gestor->Linha;
			$resultadoEditar =  $adm_modulo_gestor->Result;
			if($_POST['ok']=='true'){
			 try{
			  //Chamar Alterar
			
			 $adm_modulo_gestor->consultar("BEGIN");
			$adm_modulo_gestor->Alterar( $_GET['idmodulos'],$_POST['idusuarios'],$_POST['dtreg'] );
			 $adm_modulo_gestor->consultar("COMMIT");
			$util->msgbox('REGISTRO EDITADO COM SUCESSO!');
			$util->redirecionamentopage('default.php?pg=view/adm_modulo_gestor/consulta.php');
			}catch (Exception $ex) {
			 $adm_modulo_gestor->consultar("ROLLBACK");
			$util->msgbox("Falha de operacao");
			}
			 } 
			 break; 
			       
			 } 
			 } 
			?>