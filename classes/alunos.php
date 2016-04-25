<?php
require_once('pessoas.php');
require_once('conexao.php');
require_once('logs.php');

class Alunos extends Pessoas{

    //Atributos da classe
    private $idestado_civil;
    private $idetnia;
    private $cpf;
    private $rgnumero;
    private $rgdataemissao;
    private $rgorgaoemissor;
    private $certidaonascimentonumero;
    private $certidaonascimentolivro;
    private $certidaonascimentofolha;
    private $certidaonascimentocidade;
    private $certidaonascimentosubdistrito;
    private $certidaonascimentouf;
    private $certidaocasamentonumero;
    private $certidaocasamentolivro;
    private $certidaocasamentofolha;
    private $certidaocasamentocidade;
    private $certidaocasamentosubdistrito;
    private $certidaocasamentouf;
    private $estabcursoorigem;
    private $estabcursoorigemuf;
    private $curso_origem_ano_conclusao;
    private $modalidade_curso_origem;
    private $ctps;
    private $deficiencia_visual;
    private $deficiencia_motora;
    private $deficiencia_auditiva;
    private $deficiencia_mental;
    private $responsavel_legal;
    private $rg_responsavel;
    private $titulo_eleitor_numero;
    private $titulo_eleitor_data;
    private $titulo_eleitor_zona;
    private $titulo_eleitor_secao;
    private $certificado_alistamento_militar_numero;
    private $certificado_alistamento_militar_serie;
    private $certificado_alistamento_militar_data;
    private $certificado_alistamento_militar_rm;
    private $certificado_alistamento_militar_csm;
    private $certificado_reservista_numero;
    private $certificado_reservista_serie;
    private $certificado_reservista_data;
    private $certificado_reservista_cat;
    private $certificado_reservista_rm;
    private $certificado_reservista_csm;
    private $carteira_trabalho;
    private $instituicao;
    private $modalidade;
    private $ano_conclusao;
    private $uf_ensino;

    //Insert
    public function Incluir($idpessoas, $idestado_civil, $idetnia, $cpf, $rgnumero, $rgdataemissao, $rgorgaoemissor, $certidaonascimentonumero, $certidaonascimentolivro, $certidaonascimentofolha, $certidaonascimentocidade, $certidaonascimentosubdistrito, $certidaonascimentouf, $certidaocasamentonumero, $certidaocasamentolivro, $certidaocasamentofolha, $certidaocasamentocidade, $certidaocasamentosubdistrito, $certidaocasamentouf, $estabcursoorigem, $estabcursoorigemuf, $curso_origem_ano_conclusao, $modalidade_curso_origem, $ctps, $deficiencia_visual, $deficiencia_motora, $deficiencia_auditiva, $deficiencia_mental, $responsavel_legal, $rg_responsavel, $titulo_eleitor_numero, $titulo_eleitor_data, $titulo_eleitor_zona, $titulo_eleitor_secao, $certificado_alistamento_militar_numero, $certificado_alistamento_militar_serie, $certificado_alistamento_militar_data, $certificado_alistamento_militar_rm, $certificado_alistamento_militar_csm, $certificado_reservista_numero, $certificado_reservista_serie, $certificado_reservista_data, $certificado_reservista_cat, $certificado_reservista_rm, $certificado_reservista_csm, $carteira_trabalho, $instituicao, $modalidade, $ano_conclusao, $uf_ensino) {
         $insert = 'insert into alunos(idpessoas,idestado_civil,idetnia,cpf,rgnumero,rgdataemissao,rgorgaoemissor,certidaonascimentonumero,certidaonascimentolivro,certidaonascimentofolha,certidaonascimentocidade,certidaonascimentosubdistrito,certidaonascimentouf,certidaocasamentonumero,certidaocasamentolivro,certidaocasamentofolha,certidaocasamentocidade,certidaocasamentosubdistrito,certidaocasamentouf,estabcursoorigem,estabcursoorigemuf,curso_origem_ano_conclusao,modalidade_curso_origem,ctps,deficiencia_visual,deficiencia_motora,deficiencia_auditiva,deficiencia_mental,responsavel_legal,rg_responsavel,titulo_eleitor_numero,titulo_eleitor_data,titulo_eleitor_zona,titulo_eleitor_secao,certificado_alistamento_militar_numero,certificado_alistamento_militar_serie,certificado_alistamento_militar_data,certificado_alistamento_militar_rm,certificado_alistamento_militar_csm,certificado_reservista_numero,certificado_reservista_serie,certificado_reservista_data,certificado_reservista_cat,certificado_reservista_rm,certificado_reservista_csm,carteira_trabalho,instituicao,modalidade,ano_conclusao,uf_ensino) '
                 . 'values("' . $idpessoas . '","' . $idestado_civil . '","' . $idetnia . '","' . $cpf . '","' . $rgnumero . '","' . $rgdataemissao . '","' . $rgorgaoemissor . '","' . $certidaonascimentonumero . '","' . $certidaonascimentolivro . '","' . $certidaonascimentofolha . '","' . $certidaonascimentocidade . '","' . $certidaonascimentosubdistrito . '","' . $certidaonascimentouf . '","' . $certidaocasamentonumero . '","' . $certidaocasamentolivro . '","' . $certidaocasamentofolha . '","' . $certidaocasamentocidade . '","' . $certidaocasamentosubdistrito . '","' . $certidaocasamentouf . '","' . $estabcursoorigem . '","' . $estabcursoorigemuf . '","' . $curso_origem_ano_conclusao . '","' . $modalidade_curso_origem . '","' . $ctps . '","' . $deficiencia_visual . '","' . $deficiencia_motora . '","' . $deficiencia_auditiva . '","' . $deficiencia_mental . '","' . $responsavel_legal . '","' . $rg_responsavel . '","' . $titulo_eleitor_numero . '","' . $titulo_eleitor_data . '","' . $titulo_eleitor_zona . '","' . $titulo_eleitor_secao . '","' . $certificado_alistamento_militar_numero . '","' . $certificado_alistamento_militar_serie . '","' . $certificado_alistamento_militar_data . '","' . $certificado_alistamento_militar_rm . '","' . $certificado_alistamento_militar_csm . '","' . $certificado_reservista_numero . '","' . $certificado_reservista_serie . '","' . $certificado_reservista_data . '","' . $certificado_reservista_cat . '","' . $certificado_reservista_rm . '","' . $certificado_reservista_csm . '","' . $carteira_trabalho . '","' . $inistituicao . '","' . $modalidade . '","' . $ano_conclusao . '","' . $uf_ensino . '")';
        
        $insert = str_replace("'", "\'", $insert);
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);

        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'alunos', 'Inserir');
    }

    //Delete
    public function Deletar($id) {
        $delete = 'delete from  alunos  where id=' . $id;
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($delete);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $delete, 'alunos', 'Deletar');
    }

    //Desabilitar Registro
    public function Dasabilitar($id, $status) {
        $delete = 'update alunos set status="' . $status . '" where id=' . $id;
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($delete);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $delete, 'alunos', 'Desabilitar');
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
        $sql = " select '" . $result . "' from alunos where '" . $consult . "'";
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
    public function Alterar($idpessoas, $idestado_civil, $idetnia, $cpf, $rgnumero, $rgdataemissao, $rgorgaoemissor, $certidaonascimentonumero, $certidaonascimentolivro, $certidaonascimentofolha, $certidaonascimentocidade, $certidaonascimentosubdistrito, $certidaonascimentouf, $certidaocasamentonumero, $certidaocasamentolivro, $certidaocasamentofolha, $certidaocasamentocidade, $certidaocasamentosubdistrito, $certidaocasamentouf, $estabcursoorigem, $estabcursoorigemuf, $curso_origem_ano_conclusao, $modalidade_curso_origem, $ctps, $deficiencia_visual, $deficiencia_motora, $deficiencia_auditiva, $deficiencia_mental, $responsavel_legal, $rg_responsavel, $titulo_eleitor_numero, $titulo_eleitor_data, $titulo_eleitor_zona, $titulo_eleitor_secao, $certificado_alistamento_militar_numero, $certificado_alistamento_militar_serie, $certificado_alistamento_militar_data, $certificado_alistamento_militar_rm, $certificado_alistamento_militar_csm, $certificado_reservista_numero, $certificado_reservista_serie, $certificado_reservista_data, $certificado_reservista_cat, $certificado_reservista_rm, $certificado_reservista_csm, $carteira_trabalho, $instituicao, $modalidade, $ano_conclusao, $uf_ensino) {
        $update = ' update alunos set idpessoas="' . $idpessoas . '",idestado_civil="' . $idestado_civil . '",idetnia="' . $idetnia . '",cpf="' . $cpf . '",rgnumero="' . $rgnumero . '",rgdataemissao="' . $rgdataemissao . '",rgorgaoemissor="' . $rgorgaoemissor . '",certidaonascimentonumero="' . $certidaonascimentonumero . '",certidaonascimentolivro="' . $certidaonascimentolivro . '",certidaonascimentofolha="' . $certidaonascimentofolha . '",certidaonascimentocidade="' . $certidaonascimentocidade . '",certidaonascimentosubdistrito="' . $certidaonascimentosubdistrito . '",certidaonascimentouf="' . $certidaonascimentouf . '",certidaocasamentonumero="' . $certidaocasamentonumero . '",certidaocasamentolivro="' . $certidaocasamentolivro . '",certidaocasamentofolha="' . $certidaocasamentofolha . '",certidaocasamentocidade="' . $certidaocasamentocidade . '",certidaocasamentosubdistrito="' . $certidaocasamentosubdistrito . '",certidaocasamentouf="' . $certidaocasamentouf . '",estabcursoorigem="' . $estabcursoorigem . '",estabcursoorigemuf="' . $estabcursoorigemuf . '",curso_origem_ano_conclusao="' . $curso_origem_ano_conclusao . '",modalidade_curso_origem="' . $modalidade_curso_origem . '",ctps="' . $ctps . '",deficiencia_visual="' . $deficiencia_visual . '",deficiencia_motora="' . $deficiencia_motora . '",deficiencia_auditiva="' . $deficiencia_auditiva . '",deficiencia_mental="' . $deficiencia_mental . '",responsavel_legal="' . $responsavel_legal . '",rg_responsavel="' . $rg_responsavel . '",titulo_eleitor_numero="' . $titulo_eleitor_numero . '",titulo_eleitor_data="' . $titulo_eleitor_data . '",titulo_eleitor_zona="' . $titulo_eleitor_zona . '",titulo_eleitor_secao="' . $titulo_eleitor_secao . '",certificado_alistamento_militar_numero="' . $certificado_alistamento_militar_numero . '",certificado_alistamento_militar_serie="' . $certificado_alistamento_militar_serie . '",certificado_alistamento_militar_data="' . $certificado_alistamento_militar_data . '",certificado_alistamento_militar_rm="' . $certificado_alistamento_militar_rm . '",certificado_alistamento_militar_csm="' . $certificado_alistamento_militar_csm . '",certificado_reservista_numero="' . $certificado_reservista_numero . '",certificado_reservista_serie="' . $certificado_reservista_serie . '",certificado_reservista_data="' . $certificado_reservista_data . '",certificado_reservista_cat="' . $certificado_reservista_cat . '",certificado_reservista_rm="' . $certificado_reservista_rm . '",certificado_reservista_csm="' . $certificado_reservista_csm . '",carteira_trabalho="' . $carteira_trabalho . '",instituicao="' . $instituicao . '",modalidade="' . $modalidade . '",ano_conclusao="' . $ano_conclusao . '",uf_ensino="' . $uf_ensino . '" where idpessoas="' . $idpessoas . '"';
        
        $update = str_replace("'", "\'", $update);
        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($update);
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $update, 'alunos', 'Alterar');
    }

}

?>