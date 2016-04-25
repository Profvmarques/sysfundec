<?php

require_once('conexao.php');
require_once('logs.php');

class Espaco {

    //Atributos da classe
    private $idespaco;
    private $descricao;
    private $capacidade;

    //Insert
    public function Incluir($descricao, $capacidade) {
        $insert = 'insert into espaco(descricao,capacidade)values("'.$descricao.'","'.$capacidade.'")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'espaco', 'Inserir');
    }

    //Delete
    public function Deletar($id) {
        $delete = 'delete from  espaco  where id=' . $id;
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($delete);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $delete, 'espaco', 'Deletar');
    }

    //Desabilitar Registro
    public function Dasabilitar($id, $status) {
        $delete = 'update espaco set status="' . $status . '" where id=' . $id;
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($delete);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $delete, 'espaco', 'Desabilitar');
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
        $sql = " select '" . $result . "' from espaco where '" . $consult . "'";
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
    public function Alterar($idespaco, $descricao, $capacidade) {
        $update = 'update espaco set idespaco="' . $idespaco . '",descricao="' . $descricao . '",capacidade="' . $capacidade . '" where idespaco="' . $idespaco . '"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'espaco', 'Alterar');
    }

}

?>