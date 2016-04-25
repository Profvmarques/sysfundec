<?php
require_once('conexao.php');
require_once('logs.php');

class ExigeDocumentos {

    //Atributos da classe
    private $siglacurso;
    private $matricula_aluno;
    private $idtipodocumento;
    private $isento;
    private $dataentrega;


    //Método
    public function Incluir($matricula_aluno,$idtipodocumento,$isento,$dataentrega){
        $insert = 'insert into exigedocumentos(matricula_aluno,idtipodocumento,isento,dataentrega,) values("'.$matricula_aluno.'","'.$idtipodocumento.'","'.$isento.'","'.$dataentrega.'",)';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'exigedocumentos', 'Inserir');
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
    public function Alterar($siglacurso,$matricula_aluno,$idtipodocumento,$isento,$dataentrega){
        $update = 'update exigedocumento set matricula_aluno="'.$matricula_aluno.'",idtipodocumento="'.$idtipodocumento.'",isento="'.$isento.'",dataentrega="'.$dataentrega.'"
            where idevento_periodo_letivo="'.$idevento_periodo_letivo.'"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'exigedocumentos', 'Alterar');
    }

}

?>