<?php

require_once('conexao.php');
require_once('logs.php');

//Sempre primeira letra maiúscula
class Turma {

    //Atributos da classe
    private $idturma;
    private $siglacurso;
    private $sigladisciplina;
    private $idmatriz;
    private $matriculaprofessor;
    private $idgrade_horario;
    private $idperiodoletivo;
    private $idturno;
    private $idsituacaoturma;
    private $qtdetotal;

    //Insert
    public function Incluir($idturma, $siglacurso, $sigladisciplina, $idmatriz, $matriculaprofessor, $idgrade_horario, $idperiodoletivo, $idturno, $idsituacaoturma, $qtdetotal) {
        $insert = 'insert into turma(idturma,siglacurso,sigladisciplina,idmatriz,matriculaprofessor,idgrade_horario,idperiodoletivo,idturno,idsituacaoturma,qtdetotal)values("' . $idturma . '","' . $siglacurso . '","' . $sigladisciplina . '","' . $idmatriz . '","' . $matriculaprofessor . '","' . $idgrade_horario . '","' . $idperiodoletivo . '","' . $idturno . '","' . $idsituacaoturma . '","' . $qtdetotal . '")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'turma', 'Inserir');
    }

    //Delete
    public function Deletar($id) {
        $delete = 'delete from  turma  where id=' . $id;
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($delete);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $delete, 'turma', 'Deletar');
    }

    //Desabilitar Registro
    public function Dasabilitar($id, $status) {
        $delete = 'update turma set status="' . $status . '" where id=' . $id;
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($delete);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $delete, 'turma', 'Desabilitar');
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
    public function verificar($idturma, $siglacurso, $idmatriz, $idgrade_horario, $idperiodoletivo, $idturno, $idsituacaoturma) {
        $sql = 'select * from turma where idturma="'.$idturmaF.'" and siglacurso="'.$siglacurso.'" '
                . 'and idperiodoletivo="'.$idperiodoletivoF.'" and idmatriz="'.$idmatriz.'" '
                . 'and idturno="'.$idturno.'" and idgrade_horario="'.$idgrade_horario.'" and idsituacaoturma="'.$idsituacaoturma.'"';
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
    public function Alterar($idturmaF,$idmatrizF,$siglacursoF,$sigladisciplinaF,$idperiodoletivoF,$idgrade_horarioF,$idturma, $siglacurso, $sigladisciplina, $idmatriz, $matriculaprofessor, $idgrade_horario, $idperiodoletivo, $idturno, $idsituacaoturma, $qtdetotal) {
        $update = 'update turma set idturma="' . $idturma . '",siglacurso="' . $siglacurso . '",sigladisciplina="' . $sigladisciplina . '",idmatriz="' . $idmatriz . '",'
                . 'matriculaprofessor="' . $matriculaprofessor . '",idgrade_horario="' . $idgrade_horario . '",'
                . 'idperiodoletivo="'.$idperiodoletivo.'",idturno="' . $idturno . '",'
                . 'idsituacaoturma="' . $idsituacaoturma . '",qtdetotal="' . $qtdetotal . '" where idturma="'.$idturmaF.'" and siglacurso="'.$siglacursoF.'" '
                . 'and sigladisciplina="'.$sigladisciplinaF.'" and idperiodoletivo="'.$idperiodoletivoF.'" and idmatriz="'.$idmatrizF.'" '
                . 'and idturno="'.$idturno.'" and idgrade_horario="'.$idgrade_horarioF.'"';
        
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'turmaDisciplina', 'Alterar');
    }
    
       //Editar
    public function AlterarTurma($idturmaF,$idmatrizF,$siglacursoF,$idperiodoletivoF,$idgrade_horarioF,$idturma, $siglacurso, $idmatriz, $idgrade_horario, $idperiodoletivo, $idturno, $idsituacaoturma, $qtdetotal) {
        $update = 'update turma set idturma="' . $idturma . '",siglacurso="' . $siglacurso . '",idmatriz="' . $idmatriz . '",'
                . 'idgrade_horario="' . $idgrade_horario . '",'
                . 'idperiodoletivo="'.$idperiodoletivo.'",idturno="' . $idturno . '",'
                . 'idsituacaoturma="' . $idsituacaoturma . '",qtdetotal="' . $qtdetotal . '" '
                . 'where idturma="'.$idturmaF.'" and siglacurso="'.$siglacursoF.'" '
                . 'and idperiodoletivo="'.$idperiodoletivoF.'" and idmatriz="'.$idmatrizF.'" '
                . 'and idturno="'.$idturno.'" and idgrade_horario="'.$idgrade_horarioF.'"';
        
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'turma', 'Alterar');
    }

}

?>