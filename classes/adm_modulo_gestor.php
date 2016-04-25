<?php

/* ----------------------------------------------
  SWD
  Criado em 26/06/2012
  Autor: Vinícius Marques da Silva Ferreira
  Contato: profvmarques@gmail.com
  Projeto:sysduque  Criado em:25/09/2013
  ---------------------------------------------- */
require_once('conexao.php');
require_once('logs.php');

class Adm_modulo_gestor {

    //Atributos da classe
    private $idmodulos;
    private $idusuarios;
    private $dtreg;

    //Insert
    public function Incluir($idmodulos, $idusuarios, $dtreg) {
        $insert = 'insert into adm_modulo_gestor(idmodulos,idusuarios,dtreg)values("' . $idmodulos . '","' . $idusuarios . '","' . $dtreg . '")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'adm_modulo_gestor', 'Inserir');
    }

    //Delete
    public function Deletar($id) {
        $delete = 'delete from  adm_modulo_gestor  where id=' . $id;
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($delete);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $delete, 'adm_modulo_gestor', 'Deletar');
    }

    //Desabilitar Registro
    public function Dasabilitar($id, $status) {
        $delete = 'update adm_modulo_gestor set status="' . $status . '" where id=' . $id;
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($delete);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $delete, 'adm_modulo_gestor', 'Desabilitar');
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
        $sql = " select '" . $result . "' from adm_modulo_gestor where '" . $consult . "'";
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
    public function Alterar($idmodulos, $idusuarios, $dtreg) {
        $update = ' update adm_modulo_gestor set idmodulos="' . $idmodulos . '",idusuarios="' . $idusuarios . '",dtreg="' . $dtreg . '" where id="' . $id . '"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'adm_modulo_gestor', 'Alterar');
    }

}

?>