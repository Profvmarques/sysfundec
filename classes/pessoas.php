<?php

require_once('conexao.php');
require_once('logs.php');

class Pessoas {

    //Atributos da classe
    protected $idpessoas;
    protected $nome;
    protected $sexo;
    protected $endereco;
    protected $bairro;
    protected $cidade;
    protected $cep;
    protected $nascimento;
    protected $nacionalidade;
    protected $telefone;
    protected $celular;
    protected $email;
    protected $foto;
    protected $idusuarios;

    //Método
    public function IncluirPessoas($nome, $sexo, $endereco,$bairro,$cidade, $cep, $uf,$nascimento, $nacionalidade, $telefone, $celular, $email, $foto, $idusuarios) {
       $insert = 'insert into pessoas(nome,sexo,endereco,bairro,cidade,cep,uf,nascimento,nacionalidade,telefone,celular,email,foto,idusuarios)
            values("' . strtoupper($nome) . '","' . strtoupper($sexo) . '","' . strtoupper($endereco) . '","' . strtoupper($bairro) . '","' . strtoupper($cidade) . '","' . strtoupper($cep) . '","' . strtoupper($uf) . '","' . $nascimento . '","' . strtoupper($nacionalidade) . '",
                "' . $telefone . '","' . $celular . '","' . $email . '","' . $foto . '","' . $idusuarios . '")';
        $insert = str_replace("'", "\'", $insert);
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'pessoas', 'Inserir');

        $this->consultar("select max(idpessoas) as idP from pessoas");
        $rs = $this->Result;
        $idpessoas = mysql_result($rs, 0, 'idP');
        return $idpessoas;
    }

    //Editar
    public function alterarPessoas($idpessoas, $nome, $sexo, $endereco,$bairro,$cidade,$cep,$uf, $nascimento, $nacionalidade, $telefone, $celular, $email, $foto, $idusuarios) {
        $update = 'update pessoas set nome="' . strtoupper($nome) . '",sexo="' . strtoupper($sexo) . '",
            endereco="' . strtoupper($endereco) . '",bairro="' . strtoupper($bairro) . '",cidade="' . strtoupper($cidade) . '",cep="' . strtoupper($cep) . '",uf="' . strtoupper($uf) . '",celular="' . $celular . '",telefone="' . $telefone . '",
            email="' . $email . '",foto="' . $foto . '" where idpessoas="' . $idpessoas . '"';
        $update = str_replace("'", "\'", $update);
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'pessoas', 'Alterar');
    }

}

?>