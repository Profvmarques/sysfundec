<?php
require_once('funcionarios.php');
require_once('conexao.php');
require_once('logs.php');

class Professor extends Funcionarios {

    //Atributos da classe
    private $idtitulacao;
    private $cvlattes;
    private $nome_guerra;
    private $corfundo;
   
    
   
    //Método
    public function Incluir($idpessoas,$idtitulacao,$cvlattes,$nome_guerra,$corfundo) {
       $insert = 'insert into professor(idpessoas,idtitulacao,cvlattes,nome_guerra,corfundo) 
            values("'.$idpessoas.'","'.$idtitulacao.'","'.$cvlattes.'","'.strtoupper($nome_guerra).'","'.$corfundo.'")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'professor', 'Inserir');
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
    public function Alterar($idpessoas,$idtitulacao,$cvlattes,$nome_guerra,$corfundo){
        $update = 'update professor set idtitulacao="'.$idtitulacao.'",
            cvlattes="'.$cvlattes.'",nome_guerra="'.$nome_guerra.'",
                corfundo="'.$corfundo.'" where idpessoas="'.$idpessoas.'"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'professor', 'Alterar');
    }

}

?>