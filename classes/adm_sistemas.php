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

class Adm_sistemas {

    //Atributos da classe
    private $idsistemas;
    private $descricao;
    private $dtreg;

    //Insert
    public function incluir($descricao) {
        $insert = 'insert into adm_sistemas(descricao,dtreg)values("'.$descricao.'","'.date('Y-m-d H:i:s').'")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'adm_sistemas', 'Inserir');
    }

    //Delete
    public function Deletar($id) {
        $delete = 'delete from  adm_sistemas  where id=' . $id;
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($delete);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $delete, 'adm_sistemas', 'Deletar');
    }

    //Desabilitar Registro
    public function Dasabilitar($id, $status) {
        $delete = 'update adm_sistemas set status="' . $status . '" where id=' . $id;
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($delete);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $delete, 'adm_sistemas', 'Desabilitar');
    }

    //consultar
    public function consultar($sql) {

        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($sql, $Acesso->cnx);

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
        $sql = " select '" . $result . "' from adm_sistemas where '" . $consult . "'";
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
    public function Alterar($idsistemas, $descricao, $dtreg) {
        $update = ' update adm_sistemas set descricao="' . $descricao . '" where idsistemas="'.$idsistemas. '"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'adm_sistemas', 'Alterar');
    }

}

?>