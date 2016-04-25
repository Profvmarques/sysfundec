<?php
require_once('conexao.php');
require_once('logs.php');
require_once('util.php');

//Sempre primeira letra maiúscula
class MatriculaAluno {

    //Atributos da classe
    private $matricula_aluno;
    private $idpessoas;
    private $siglacurso;
    private $idmatriz;
    private $periodoletivo;
    private $idsituacao_matricula;
    private $idformaingresso;
    private $data_matricula;
    private $turno_ingresso;
    private $pontos_concurso;
    private $classificacao_concurso;
    private $data_conclusao;

    //Método
    public function Incluir($matricula_aluno, $idpessoas, $siglacurso, $idmatriz, $idperiodoletivo, $idsituacao_matricula, $idformaingresso, $data_matricula, $idturno, $pontos_concursos, $classificacao_concurso, $data_conclusao) {

         $insert = 'insert into matriculaaluno(matricula_aluno,idpessoas,siglacurso,idmatriz,
            idperiodoletivo,idsituacao_matricula,idformaingresso,data_matricula,
            idturno, pontos_concursos, classificacao_concurso, data_conclusao) 
            values("' . $matricula_aluno . '","' . $idpessoas . '","' . $siglacurso . '","' . $idmatriz . '",
                "' . $idperiodoletivo . '","' . $idsituacao_matricula . '","' . $idformaingresso . '","' . $data_matricula . '"
                    ,"' . $idturno . '","' . $pontos_concursos . '","' . $classificacao_concurso . '","' . $data_conclusao . '")';

        $insert = str_replace("'", "\'", $insert);
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'matriculaaluno', 'Inserir');
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
    public function Alterar($matricula_alunoF, $matricula_aluno, $idpessoas, $siglacurso, $idmatriz, $idperiodoletivo, $idsituacao_matricula, $idformaingresso, $data_matricula, $idturno, $pontos_concurso, $classificacao_concurso, $data_conclusao) {

         $update = 'update matriculaaluno set matricula_aluno="' . $matricula_aluno . '", idpessoas="' . $idpessoas . '",siglacurso="' . $siglacurso . '",
            idmatriz="' . $idmatriz . '",idperiodoletivo="' . $idperiodoletivo . '",
            idsituacao_matricula="' . $idsituacao_matricula . '",idformaingresso="' . $idformaingresso . '",
                data_matricula="' . $data_matricula . '",idturno="' . $idturno . '",pontos_concursos="' . $pontos_concurso . '",classificacao_concurso="' . $classificacao_concurso . '",data_conclusao="' . $data_conclusao . '" 
                    where matricula_aluno="' . $matricula_alunoF . '"';

        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'matriculaaluno', 'Alterar');
    }

    public function verificarMatriculaAluno($matricula_aluno) {
        $sql = " select * from matriculaaluno where matricula_aluno=".$matricula_aluno;
        $this->consultar($sql);
        if ($this->Linha > 0) {            
            $this->Achou = 'sim';
            $util = new Util();
            $util->Msgbox("Esta Matricula já existe : ".$matricula_aluno);
        } else {
            $this->Achou = 'nao';
        }
    }

}

?>