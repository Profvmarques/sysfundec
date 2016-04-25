<?php
require_once('conexao.php');
require_once('logs.php');

class Adm_menu {

    //Atributos da classe
    private $idmenu;
    private $idmodulos;
    private $id_pai;
    private $ordem_menu;
    private $imagem;
    private $nome_menu;
    private $class_css;
    private $link_externo;
    private $link_menu;
    private $publico;

    //Insert
    public function Incluir($idmodulos, $id_pai, $ordem_menu, $imagem, $nome_menu, $class_css, $link_externo, $link_menu, $publico) {
      $insert = 'insert into adm_menu(idmodulos,id_pai,ordem_menu,imagem,nome_menu,class_css,link_externo,link_menu,publico) 
            values("' . $idmodulos . '","' . $id_pai . '","' . $ordem_menu . '","' . $imagem . '","' . $nome_menu . '","' . $class_css . '","' . $link_externo . '","' . $link_menu . '","' . $publico . '")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'adm_menu', 'Inserir');
        
        $this->consultar("select max(idmenu) as idM from adm_menu");
        $rs=  $this->Result;
        $idmenu=mysql_result($rs,0,'idM');
        return $idmenu;
    }

    //Delete
    public function Deletar($id) {
        $delete = 'delete from  adm_menu  where id=' . $id;
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($delete);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $delete, 'adm_menu', 'Deletar');
    }

    //Desabilitar Registro
    public function Dasabilitar($id, $status) {
        $delete = 'update adm_menu set status="' . $status . '" where id=' . $id;
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($delete);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $delete, 'adm_menu', 'Desabilitar');
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
    public function verificar($consult, $result, $msg) {
        $sql = " select '" . $result . "' from adm_menu where '" . $consult . "'";
        $this->consultar($sql);
        if ($this->Linha > 0) {
            $util = new Util();
            $util->Msgbox($msg);
            $this->Achou = 'sim';
        } else {
            $this->Achou = 'nao';
        }
    }

    //Editar
    public function Alterar($idmenu, $id_pai, $ordem_menu, $imagem, $nome_menu, $class_css, $link_menu, $publico) {
        $update = 'update adm_menu set id_pai="'.$id_pai.'",
          ordem_menu="'.$ordem_menu.'",imagem="'.$imagem.'",
                nome_menu="'.$nome_menu.'",class_css="' . $class_css . '",
                    link_menu="' . $link_menu . '",publico="' . $publico . '"
                        where idmenu="' . $idmenu . '"'; 
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'adm_menu', 'Alterar');
    }

}

?>