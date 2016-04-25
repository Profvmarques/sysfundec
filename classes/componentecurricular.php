<?php
require_once('conexao.php');
require_once('logs.php');

//Sempre primeira letra maiúscula
class ComponenteCurricular {

    //Atributos da classe
    private $idmatriz;
    private $siglacurso;
    private $sigladisciplina;
    private $descricao;
    private $creditos;
    private $ch;
    private $periodo;
    private $idtipocomponente;
    
 
    //Método
    public function Incluir($idmatriz,$siglacurso,$sigladisciplina,$descricao,$creditos,$ch,$periodo,$idtipocomponente) {
        $insert = 'insert into componentecurricular(idmatriz,siglacurso,sigladisciplina,descricao,creditos,
            ch,periodo,idtipocomponente) values("'.$idmatriz.'","'.$siglacurso.'","'.strtoupper($sigladisciplina).'","'.strtoupper($descricao).'","'.$creditos.'",
                "'.$ch.'","'.$periodo.'","'.$idtipocomponente.'")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'componentecurricular', 'Inserir');
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
    public function Alterar($idmatriz,$siglacursoAntes,$sigladisciplinaAntes,$siglacurso,$sigladisciplina,$descricao,$creditos,$ch,$periodo,$idtipocomponente){
          $update = 'update componentecurricular set siglacurso="'.$siglacurso.'",
            sigladisciplina="'.strtoupper($sigladisciplina).'",descricao="'.strtoupper($descricao).'",creditos="'.$creditos.'"
            ,ch="'.$ch.'",periodo="'.$periodo.'",idtipocomponente="'.$idtipocomponente.'"
                    where idmatriz="'.$idmatriz.'" and siglacurso="'.$siglacursoAntes.'" and sigladisciplina="'.$sigladisciplinaAntes.'"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'componentecurricular', 'Alterar');
    }

}

?>