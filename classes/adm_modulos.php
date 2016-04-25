<?php
require_once('conexao.php');
require_once('logs.php');

class Adm_modulos {

    //Atributos da classe
    private $idmodulos;
    private $idsistemas;
    private $sigla_modulo;
    private $nome;
    private $dtreg;

    //Insert
    public function Incluir($idsistemas, $sigla_modulo, $nome) {
        $insert = 'insert into adm_modulos(idsistemas,sigla_modulo,nome,dtreg)values("' . $idsistemas . '","' . $sigla_modulo . '","' . $nome . '","' . date('Y-m-d H:i:s') . '")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'adm_modulos', 'Inserir');
    }

    //Delete
    public function Deletar($id) {
        $delete = 'delete from  adm_modulos  where id=' . $id;
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($delete);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $delete, 'adm_modulos', 'Deletar');
    }

    //Desabilitar Registro
    public function Dasabilitar($id, $status) {
        $delete = 'update adm_modulos set status="' . $status . '" where id=' . $id;
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($delete);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $delete, 'adm_modulos', 'Desabilitar');
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
        $sql = " select '" . $result . "' from adm_modulos where '" . $consult . "'";
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
    public function Alterar($idmodulos, $idsistemas, $sigla_modulo, $nome, $dtreg) {
        $update = 'update adm_modulos set idsistemas="' . $idsistemas . '",sigla_modulo="' . $sigla_modulo . '",nome="' . $nome . '" where idmodulos="' . $idmodulos . '"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'adm_modulos', 'Alterar');
    }

}

?>