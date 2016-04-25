<?php
ob_start();  //inicia o buffer
require_once('../../controles/relatorio.php');
Processo('imprimirFichaAluno');	
?>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
.style1 {font-size: 16px}
.style3 {font-size: 14}
.style4 {font-weight: bold}
-->
</style>
<p align="center"><img src="../../img/logorj.jpg" width="65" height="84" /></p>
<p align="center" class="style1"><span class="style3"><strong>GOVERNO DO ESTADO DO RIO DE JANEIRO</strong><br />
      <strong>SECRETARIA DE ESTADO DE CI&Ecirc;NCIA E TECNOLOGIA</strong><br />
      <strong>FUNDA&Ccedil;&Atilde;O DE APOIO &Agrave; ESCOLA T&Eacute;CNICA</strong> <br />
      <strong>FACULDADES DE EDUCA&Ccedil;&Atilde;O TECNOL&Oacute;GICA DO ESTADO DO RIO DE JANEIRO &ndash;  DUQUE DE CAXIAS</strong><br />
      <strong>PARECER DE RECONHECIMENTO CEE/RJ N&ordm; 335/2013 DOERJ 28/05/2013</strong><br />
      <strong>RESOLU&Ccedil;&Atilde;O CNE/CP N&ordm; 1, DE  28/05/2013</strong></span></p>
<p align="center" class="style4">FICHA DE ALUNO	</p>
<br />
<table width="890">
  <tbody>
    <tr>
      <td width="55"><strong>NOME:</strong></td>
      <td width="344"><strong><?php echo utf8_encode(@mysql_result($r,0,'p.nome')); ?></strong></td>
      <td width="61"><strong>SEXO:</strong></td>
      <td width="82"><strong><?php echo @mysql_result($r,0,'p.sexo'); ?></strong></td>
      <td width="203"><strong>DATA DE NASCIMENTO . </strong></td>
      <td width="117"><strong><?php echo @mysql_result($r,0,'dtnasc'); ?></strong></td>
    </tr>
  </tbody>
</table>
<table width="852">
  <tbody>
    <tr>
      <td width="161"><strong>NACIONALIDADE : </strong></td>
      <td width="679"><strong><?php echo @mysql_result($r,0,'p.nacionalidade'); ?></strong></td>
    </tr>
  </tbody>
</table>
<table width="725">
  <tbody>
    <tr>
      <td width="112"><strong>ENDEREÇO :</strong></td>
      <td width="601"><strong><?php echo @mysql_result($r,0,'p.endereco'); ?></strong></td>
    </tr>
  </tbody>
</table>
<table width="911">
  <tbody>
    <tr>
      <td width="105"><strong>TELEFONE:</strong></td>
      <td width="139"><strong><?php echo utf8_encode(@mysql_result($r,0,'p.telefone')); ?></strong></td>
      <td width="88"><strong>CELULAR : </strong></td>
      <td width="179"><strong><?php echo utf8_encode(@mysql_result($r,0,'p.celular')); ?></strong></td>
      <td width="92"><strong>E-MAIL :</strong></td>
      <td width="280"><strong><?php echo utf8_encode(@mysql_result($r,0,'p.email')); ?></strong></td>
    </tr>
  </tbody>
</table>
<table width="1059">
  <tbody>
    <tr>
      <td width="114"><strong>BAIRRO : </strong></td>
      <td width="279"><strong><?php echo @mysql_result($r,0,'p.bairro'); ?></strong></td>
      <td width="129"><strong>MUNÍCIPIO :</strong></td>
      <td width="291"><strong><?php echo @mysql_result($r,0,'p.cidade'); ?></strong></td>
      <td width="117"><strong>CEP : <?php echo @mysql_result($r,0,'p.cep'); ?></strong></td>
      <td width="101"><strong>UF : <?php echo @mysql_result($r,0,'p.uf'); ?></strong></td>
    </tr>
    <tr>
      <td width="114"><strong>ESTADO CIVIL </strong></td>
      <td width="279"><strong><?php echo @mysql_result($r,0,'ec.descricao'); ?></strong></td>
      <td width="129"><strong>ETNIA / COR </strong></td>
      <td width="291"><strong><?php echo @mysql_result($r,0,'e.descricao'); ?></strong></td>
      <td width="117">&nbsp;</td>
      <td width="101">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="6"><strong>NECESSIDADES ESPECIAIS </strong></td>
    </tr>
    <tr>
      <td><strong>LOGIN : </strong></td>
      <td><strong><?php echo @mysql_result($r,0,'u.login'); ?></strong></td>
      <td><strong>SENHA  : </strong></td>
      <td>&nbsp;</td>
      <td><strong>xxxxxxxx</strong></td>
      <td><strong>xxxxxxxx</strong></td>
    </tr>
  </tbody>
</table>
<br />
<table width="1059">
  <tbody>
    <?php for($i=0;$i<$ln;$i++){?>
    <tr>
      <td width="154" class="style3"><strong>CPF: </strong></td>
      <td width="162" class="style3"><strong><?php echo @mysql_result($r,$i,'a.cpf');?></strong></td>
      <td width="91" class="style3"><strong>RG: </strong></td>
      <td class="style3"><strong><?php echo @mysql_result($r,$i,'a.rgnumero');?></strong></td>
      <td class="style3"><strong>ORGÃO EMISSOR  :</strong></td>
      <td class="style3"><strong><?php echo @mysql_result($r,$i,'a.rgorgaoemissor');?></strong></td>
      <td class="style3"><strong>EMISSÃO :</strong></td>
      <td width="164" class="style3"><strong><?php echo @mysql_result($r,$i,'dtemissao');?> </strong></td>
    </tr>
    <tr>
      <td class="style3"><strong>CERT. NASCIMENTO</strong></td>
      <td class="style3"><strong><?php echo @mysql_result($r,$i,'a.certidaonascimentonumero');?></strong></td>
      <td class="style3"><strong>LIVRO</strong></td>
      <td class="style3"><strong><?php echo @mysql_result($r,$i,'a.certidaonascimentolivro');?></strong></td>
      <td class="style3"><strong>FOLHA</strong></td>
      <td class="style3"><strong><?php echo @mysql_result($r,$i,'a.certidaonascimentofolha');?></strong></td>
      <td class="style3"><strong>CIDADE</strong></td>
      <td class="style3"><strong><?php echo @mysql_result($r,$i,'a.certidaonascimentocidade');?></strong></td>
    </tr>
    <tr>
      <td class="style3"><strong>SUB-DISTRITO</strong></td>
      <td class="style3"><strong><?php echo @mysql_result($r,$i,'a.certidaonascimentosubdistrito');?></strong></td>
      <td class="style3"><strong>UF</strong></td>
      <td class="style3"><strong><?php echo @mysql_result($r,$i,'a.certidaonascimentouf');?></strong></td>
      <td class="style3">&nbsp;</td>
      <td class="style3">&nbsp;</td>
      <td class="style3">&nbsp;</td>
      <td class="style3">&nbsp;</td>
    </tr>
    <tr>
      <td class="style3"><strong>CERT. CASAMENTO</strong></td>
      <td class="style3"><strong><?php echo @mysql_result($r,$i,'a.certidaocasamentonumero');?></strong></td>
      <td class="style3"><strong>LIVRO</strong></td>
      <td class="style3"><strong><?php echo @mysql_result($r,$i,'a.certidaocasamentolivro');?></strong></td>
      <td class="style3"><strong>FOLHA</strong></td>
      <td class="style3"><strong><?php echo @mysql_result($r,$i,'a.certidaocasamentofolha');?></strong></td>
      <td class="style3"><strong>CIDADE</strong></td>
      <td class="style3"><strong><?php echo @mysql_result($r,$i,'a.certidaocasamentocidade');?></strong></td>
    </tr>
    <tr>
      <td class="style3"><strong>SUB-DISTRITO</strong></td>
      <td class="style3"><strong><?php echo @mysql_result($r,$i,'a.certidaocasamentosubdistrito');?></strong></td>
      <td class="style3"><strong>UF</strong></td>
      <td class="style3"><strong><?php echo @mysql_result($r,$i,'a.certidaocasamentouf');?></strong></td>
      <td class="style3">&nbsp;</td>
      <td class="style3">&nbsp;</td>
      <td class="style3">&nbsp;</td>
      <td class="style3">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" class="style3"><strong>CERT. ALISTAMENTO MILITAR <?php echo @mysql_result($r,$i,'a.certificado_alistamento_militar_numero');?></strong></td>
      <td class="style3"><strong>SÉRIE</strong></td>
      <td class="style3"><strong><?php echo @mysql_result($r,$i,'a.certificado_alistamento_militar_serie');?></strong></td>
      <td class="style3"><strong>RM</strong></td>
      <td class="style3"><strong><?php echo @mysql_result($r,$i,'a.certificado_alistamento_militar_rm');?></strong></td>
      <td class="style3">&nbsp;</td>
    </tr>
    <tr>
      <td class="style3"><strong>CSM</strong></td>
      <td class="style3"><strong><?php echo @mysql_result($r,$i,'a.certificado_alistamento_militar_csm');?></strong></td>
      <td class="style3"><strong>DATA</strong></td>
      <td class="style3"><strong><?php echo @mysql_result($r,$i,'dtalistamento');?></strong></td>
      <td class="style3">&nbsp;</td>
      <td class="style3">&nbsp;</td>
      <td class="style3">&nbsp;</td>
      <td class="style3">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" class="style3"><strong>CERT. RESERVISTA <?php echo @mysql_result($r,$i,'a.certificado_reservista_numero');?></strong></td>
      <td class="style3"><strong>SÉRIE</strong></td>
      <td class="style3"><strong><?php echo @mysql_result($r,$i,'a.certificado_reservista_serie');?></strong></td>
      <td class="style3"><strong>RM</strong></td>
      <td class="style3"><strong><?php echo @mysql_result($r,$i,'a.certificado_reservista_rm');?></strong></td>
      <td class="style3">&nbsp;</td>
    </tr>
    <tr>
      <td class="style3"><strong>CSM</strong></td>
      <td class="style3"><strong><?php echo @mysql_result($r,$i,'a.certificado_reservista_csm');?></strong></td>
      <td class="style3"><strong>DATA</strong></td>
      <td class="style3"><strong><?php echo @mysql_result($r,$i,'dtcertreservista');?></strong></td>
      <td class="style3">&nbsp;</td>
      <td class="style3">&nbsp;</td>
      <td class="style3">&nbsp;</td>
      <td class="style3">&nbsp;</td>
    </tr>
    <tr>
      <td class="style3"><strong>TÍTULO DE ELEITOR </strong></td>
      <td class="style3"><strong><?php echo @mysql_result($r,$i,'a.titulo_eleitor_numero');?></strong></td>
      <td class="style3"><strong>ZONA</strong></td>
      <td class="style3"><strong><?php echo @mysql_result($r,$i,'a.titulo_eleitor_zona');?></strong></td>
      <td class="style3"><strong>SEÇÃO   </strong></td>
      <td class="style3"><strong><?php echo @mysql_result($r,$i,'a.titulo_eleitor_secao');?></strong></td>
      <td class="style3"><strong>EMISSÃO</strong></td>
      <td class="style3"><strong><?php echo @mysql_result($r,$i,'dttitulo');?></strong></td>
    </tr>
    <tr>
      <td colspan="2" class="style3"><strong>CARTEIRA DE TRABALHO <?php echo @mysql_result($r,$i,'a.carteira_trabalho');?></strong></td>
      <td class="style3">&nbsp;</td>
      <td width="94" class="style3">&nbsp;</td>
      <td width="141" class="style3">&nbsp;</td>
      <td width="108" class="style3">&nbsp;</td>
      <td width="109" class="style3">&nbsp;</td>
      <td class="style3">&nbsp;</td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="8">&nbsp;</td>
    </tr>
    <tr> </tr>
  </tbody>
</table>
<br />
<table width="1059">
  <tbody>
    <?php for($i=0;$i<$ln2;$i++){?>
    <tr>
      <td width="118" class="style4"><strong>MATRÍCULA: </strong></td>
      <td width="101" class="style4"><strong><?php echo @mysql_result($r2,$i,'ma.matricula_aluno');?></strong></td>
      <td width="95" class="style4"><strong>PONTOS :</strong></td>
      <td width="91" class="style4"><strong><?php echo @mysql_result($r2,$i,'ma.pontos_concursos');?></strong></td>
      <td width="160" class="style4"><strong>CLASSIFICAÇÃO :</strong></td>
      <td width="106" class="style4"><strong><?php echo @mysql_result($r2,$i,'ma.classificacao_concurso');?></strong></td>
      <td width="196" class="style4"><strong>DATA DA MATRÍCULA:</strong></td>
      <td width="156" class="style4"><strong><?php echo @mysql_result($r2,$i,'dtmatricula');?></strong></td>
    </tr>

    <?php } ?>
  </tbody>
</table>
</body>
</html>
 <?php
  $html = ob_get_clean();
	// pega o conteudo do buffer, insere na variavel e limpa a mem?ria
	 
	$html = utf8_encode($html);
	// converte o conteudo para uft-8
	
	
	define('MPDF_PATH', '../../classes/mpdf/');
	include(MPDF_PATH.'mpdf.php');
	// inclui a classe
	 
	$mpdf=new mPDF('pt','A4',3,'',15,15,16,16,9,9,'L'); 
	// cria o objeto
	$mpdf->AddPage('P'); 
	$mpdf->allow_charset_conversion=true;
	// permite a conversao (opcional)
	$mpdf->charset_in='UTF-8';
	// converte todo o PDF para utf-8
	 $mpdf->SetDisplayMode('fullpage');
	 // modo de visualiza??o
	 
	 $mpdf->SetFooter('{DATE j/m/Y  H:i}|{PAGENO}/{nb}|FAETERJ - DUQUE DE CAXIAS / SYSDUQUE');
	 //bacana este rodape, nao eh mesmo?
	$mpdf->WriteHTML($html);
	// escreve definitivamente o conteudo no PDF
	 
	$mpdf->Output();
	// imprime
	 
exit();
?>
