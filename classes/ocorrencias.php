<?php
require_once('conexao.php');
require_once('logs.php');

class Ocorrencias {

    //Atributos da classe
    private $idocorrencias;
    private $idusuarios;
    private $descricao;    
    private $funcionalidade;
    private $data_hora;
    private $situacao;
      
    //Método
    public function Incluir($idusuarios,$descricao,$funcionalidade) {
        $insert = 'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) 
            values("'.$idusuarios.'","'.strtoupper($descricao).'","'.strtoupper($funcionalidade).'","'.date('Y-m-d H:i:s').'","A VALIDAR")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'Ocorrencias', 'Inserir');
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
    public function Alterar($idocorrencias,$situacao) {
        $update = 'update ocorrencias set situacao="'.$situacao.'"
                where idocorrencias='.$idocorrencias;
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'Ocorrencias', 'Alterar');
    }

}
?>