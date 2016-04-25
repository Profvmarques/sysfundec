<?php

require_once('conexao.php');
require_once('logs.php');

class Atividade_frequencia {

    //Atributos da classe
    private $idatividade_frequencia;
    private $idturma;
    private $matricula_aluno;
    private $data_freq;
    private $atividade;
    private $dtreg;

    //Insert
    public function Incluir($idturma, $matricula_aluno, $data_freq,$flag, $atividade) {
       $insert = 'insert into atividade_frequencia(idturma,matricula_aluno,data_freq,flag,atividade,dtreg)values("' . $idturma . '","' . $matricula_aluno . '","' . $data_freq . '","' . $flag . '","' . $atividade . '","' . date('Y-m-d') . '")';
       
       $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'atividade_frequencia', 'Inserir');
    }

    //Delete
    public function Deletar($id) {
        $delete = 'delete from  atividade_frequencia  where id=' . $id;
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($delete);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $delete, 'atividade_frequencia', 'Deletar');
    }

    //Desabilitar Registro
    public function Dasabilitar($id, $status) {
        $delete = 'update atividade_frequencia set status="' . $status . '" where id=' . $id;
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($delete);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $delete, 'atividade_frequencia', 'Desabilitar');
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
        $sql = " select '" . $result . "' from atividade_frequencia where '" . $consult . "'";
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
    public function Alterar($idatividade_frequencia, $idturma, $matricula_aluno, $data_freq, $atividade, $dtreg) {
        $update = ' update atividade_frequencia set idatividade_frequencia="' . $idatividade_frequencia . '",idturma="' . $idturma . '",matricula_aluno="' . $matricula_aluno . '",data_freq="' . $data_freq . '",atividade="' . $atividade . '",dtreg="' . $dtreg . '" where id="' . $id . '"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'atividade_frequencia', 'Alterar');
    }

}

?>