<?php
require_once('conexao.php');
require_once('logs.php');

//Sempre primeira letra maiúscula
class Inscricao {

    //Atributos da classe
    private $idinscricao;
    private $idturma;
    private $matricula_aluno;
    private $sigladisciplina;
    private $idperiodoletivo;
    private $idturno;
    private $data_inscricao;
    private $av1;
    private $nota1;
    private $falta_api;
    private $av2;
    private $nota2;
    private $falta_apii;
    private $nota3;
    private $mediafinal;
    private $idsituacaoinscricao;
   
   //Método
    public function Incluir($idturma, $matricula_aluno, $sigladisciplina,$idperiodoletivo,$idturno,$data_inscricao, $nota1, $falta_api, $nota2, $falta_apii,$nota3, $mediafinal, $idsituacaoinscricao) {
       $insert = 'call cadInscricao("'.$idturma.'","'.$matricula_aluno.'","'.$sigladisciplina.'","'.$idperiodoletivo.'","'.$idturno.'","'.$data_inscricao.'","'.$nota1.'","'.$falta_api.'","'.$nota2.'","'.$falta_apii.'","'.$nota3.'","'.$mediafinal.'","'.$idsituacaoinscricao.'");';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'inscricao', 'Inserir');
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
    public function Alterar($idinscricao,$idturma, $matricula_aluno, $sigladisciplina,$idperiodoletivo,$idturno,$data_inscricao, $nota1, $falta_api, $nota2, $falta_apii,$nota3, $mediafinal, $idsituacaoinscricao){
      $update = 'update inscricao set idturma="'.$idturma.'", matricula_aluno="'.$matricula_aluno.'",data_inscricao="'.$data_inscricao.'",
            av1="'.$av1.'", nota1="'.$nota1.'",falta_api="'.$falta_api.'",av2="'.$av2.'",nota2="'.$nota2.'",falta_apii="'.$falta_apii.'",nota3="'.$nota3.'",mediafinal="'.$mediafinal.'",idsituacaoinscricao="'.$idsituacaoinscricao.'" 
                    where idinscricao="'.$idinscricao.'"'; 
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'inscricao', 'Alterar');
    }

}

?>