<?php

require_once('conexao.php');
require_once('logs.php');

class Adm_acesso_usuario {

    //Atributos da classe
    private $idusuarios;
    private $idmenu;
    private $apagar;
    private $alterar;
    private $consultar;
    private $incluir;

    //Insert
    public function Incluir($idusuarios, $idmenu, $apagar, $alterar, $consultar, $incluir,$publico) {
        $insert = 'insert into adm_acesso_usuario(idusuarios,idmenu,apagar,alterar,consultar,incluir,publico)values("' . $idusuarios . '","' . $idmenu . '","' . $apagar . '","' . $alterar . '","' . $consultar . '","' . $incluir . '","' . $publico . '")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'adm_acesso_usuario', 'Inserir');
    }

    //Delete
    public function Deletar($id) {
        $delete = 'delete from  adm_acesso_usuario  where id=' . $id;
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($delete);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $delete, 'adm_acesso_usuario', 'Deletar');
    }

    //Desabilitar Registro
    public function Dasabilitar($id, $status) {
        $delete = 'update adm_acesso_usuario set status="' . $status . '" where id=' . $id;
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($delete);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $delete, 'adm_acesso_usuario', 'Desabilitar');
    }

    //consultar
    public function consultar($sql) {
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($sql);
        $this->Linha = @mysql_num_rows($Acesso->result);
        $this->Result = $Acesso->result;
    }

    //Paginar
    public function Paginar($sql) {
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($sql);
        $this->Linha = mysql_fetch_assoc($Acesso->result);
        $this->Result = $Acesso->result;
    }

    //Verificar
    public function verificarMenu($idmenu,$idusuarios) {
       $sql = " select * from adm_acesso_usuario where idmenu=".$idmenu." and idusuarios=".$idusuarios;
        $this->consultar($sql);
        if ($this->Linha > 0) {
            $util = new Util();
            //$util->Msgbox($msg);
            $this->Achou = 'sim';
        } else {
            $this->Achou = 'nao';
        }
    }
    
    public function verificaCheckbox($checkbox){
      
        if($checkbox=="on"){
          $checkbox=1;  
        }else{
         $checkbox=0;   
        }
       return $checkbox; 
    }

    //Editar
    public function Alterar($idusuarios, $idmenu, $apagar, $alterar, $consultar, $incluir,$publico) {
        $update = 'update adm_acesso_usuario set apagar="'.$apagar.'",alterar="'.$alterar.'",consultar="'.$consultar.'",incluir="'.$incluir.'",publico="'.$publico.'" 
            where idmenu="'.$idmenu.'" and idusuarios="'.$idusuarios.'"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'adm_acesso_usuario', 'Alterar');
    }

    
      public function verificarAcesso($idusuarios,$idmenu) {
        $sql = "select * from adm_acesso_usuario where idusuarios=".$idusuarios." and idmenu=".$idmenu;
        $this->consultar($sql);
        if ($this->Linha > 0) {
           $return="sim";
        } else {
            $return="nao";
        }
        return $return;
    }
    
       public function dadosAcessousuario($idperfil) {
       
           switch ($idperfil){
               case 1: //adm
                $retorno="default.php?pg=view/funcionarios/visualizar.php&form=VISUALIZAÇÃO DOS DADOS DO FUNCIONÁRIO DO APOIO ADMINISTRATIVO&id=".$_SESSION['idpessoas'];  
                   
               break;  
           
               case 2: //secretaria acadêmica
                $retorno="default.php?pg=view/funcionarios/visualizar.php&form=VISUALIZAÇÃO DOS DADOS DO FUNCIONÁRIO DO APOIO ADMINISTRATIVO&id=".$_SESSION['idpessoas'];  
                   
               break;
           
           case 3: //professor
                $retorno="default.php?pg=view/professor/visualizar.php&form=VISUALIZAÇÃO DOS DADOS DO PROFESSOR&id=".$_SESSION['idpessoas'];  
                   
               break;
           
           case 4: //Aluno
                $retorno="default.php?pg=view/alunos/visualizar.php&form=VISUALIZAÇÃO DOS DADOS DO ALUNO&id=".$_SESSION['idpessoas'];  
                   
               break;
           }
               
           
           return $retorno;
    }
}

?>