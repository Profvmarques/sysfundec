<?php
require_once('conexao.php');
require_once('logs.php');

class Matriz {

    //Atributos da classe
    private $idmatriz;
    private $siglacurso;
    private $parecer;
    private $data_vigencia;
   
    //Método
    public function Incluir($siglacurso,$parecer,$data_vigencia) {
        $insert = 'insert into matriz(siglacurso,parecer,data_vigencia) values("'.$siglacurso.'","'.$parecer.'","'.$data_vigencia.'")';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'matriz', 'Inserir');
        
        $this->consultar("select max(idmatriz) as idM from matriz");
        $rs = $this->Result;
        $idmatriz = mysql_result($rs, 0, 'idM');
        return $idmatriz;
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
    public function Alterar($idmatriz,$siglacurso,$parecer,$data_vigencia){
         $update = 'update matriz set siglacurso="'.$siglacurso.'",parecer="'.$parecer.'",data_vigencia="'.$data_vigencia.'"
            where idmatriz="'.$idmatriz.'"';
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'matriz', 'Alterar');
    }
    
        public function verificar($siglacurso,$parecer,$data_vigencia) {
        $sql ='select * from matriz where siglacurso="'.$siglacurso.'" and parecer="'.$parecer.'" and data_vigencia="'.$data_vigencia.'"';
        $this->consultar($sql);
        if ($this->Linha > 0) {
            $util = new Util();
            $util->Msgbox("A matriz já existe!");
            $this->Achou = 'sim';
        } else {
            $this->Achou = 'nao';
        }
    }

}

?>