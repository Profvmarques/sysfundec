<?php
require_once('conexao.php');
require_once('logs.php');

//Sempre primeira letra maiúscula
class Adm_configuracao {

    //Atributos da classe
    private $idperfil;
    private $idmenu;
    private $incluir;
    private $consultar;
    private $alterar;
    private $apagar;
    private $dtreg;
    
   
   //Método
    public function Incluir($idperfil, $idmenu, $incluir, $consultar, $alterar, $apagar) {
         $insert = 'insert into adm_configuracao(idperfil, idmenu, incluir, consultar, alterar, apagar) values("'.$idperfil.'","'.$idmenu.'","'.$incluir.'",
                "'.$consultar.'","'.$alterar.'","'.$apagar.'")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'adm_configuracao', 'Inserir');
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
    public function Alterar($idperfil, $idmenu, $incluir, $consultar, $alterar, $apagar,$publico){
        $update = 'update adm_configuracao set incluir="'.$incluir.'",
            consultar="'.$consultar.'",alterar="'.$alterar.'",apagar="'.$apagar.'",publico="'.$publico.'" where idperfil="'.$idperfil.'" and idmenu="'.$idmenu.'"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'adm_configuracao', 'Alterar');
    }
    
    public function verificaCheckbox($checkbox){
        
        if($checkbox =='on'){
           $checkbox=1; 
        }else{
         $checkbox=0;   
        }
      return $checkbox;   
    }

}

?>