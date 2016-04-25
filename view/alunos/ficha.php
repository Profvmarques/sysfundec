<?php
ob_start();  //inicia o buffer
require_once('../../controles/relatorio.php');
Processo('imprimirFicha');	
?><style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
.style1 {font-size: 16px}
.style2 {font-size: 13px}
.style3 {font-size: 14}
-->
</style>

<p align="center"><img src="../../img/logorj.jpg" width="65" height="84" /></p>
<p align="center" class="style1"><span class="style3"><strong>GOVERNO DO ESTADO DO RIO DE JANEIRO</strong><br />
    <strong>SECRETARIA DE ESTADO DE CI&Ecirc;NCIA E TECNOLOGIA</strong><br />
    <strong>FUNDA&Ccedil;&Atilde;O DE APOIO &Agrave; ESCOLA T&Eacute;CNICA</strong> <br />
    <strong>FACULDADES DE EDUCA&Ccedil;&Atilde;O TECNOL&Oacute;GICA DO ESTADO DO RIO DE JANEIRO &ndash;  DUQUE DE CAXIAS</strong><br />
    <strong>PARECER DE RECONHECIMENTO CEE/RJ N&ordm; 335/2013 DOERJ 28/05/2013</strong><br />
    <strong>RESOLU&Ccedil;&Atilde;O CNE/CP N&ordm; 1, DE  28/05/2013</strong></span></p>
<p align="center" class="style1">&nbsp;</p>
<p align="center" class="style1">FICHA DE DADOS DO ALUNO </p>
<table width="871" class="style2">
  <tbody>
    <tr>
      <td width="50">NOME:</td>
      <td width="340"><b><?php echo utf8_encode(@mysql_result($r,0,'p.nome')); ?></b></td>
      <td width="57">SEXO:</td>
      <td width="86"><b><?php echo @mysql_result($r,0,'p.sexo'); ?></b></td>
      <td width="191">DATA DE NASCIMENTO . </td>
      <td width="119"><b><?php echo @mysql_result($r,0,'dtnasc'); ?></b></td>
    </tr>
  </tbody>
</table>
<table width="852">
  <tbody>
    <tr>
      <td width="161" class="style2">NACIONALIDADE : </td>
      <td width="679" class="style2"><b><?php echo @mysql_result($r,0,'p.nacionalidade'); ?></b></td>
    </tr>
  </tbody>
</table>
<table width="725">
  <tbody>
    <tr>
      <td width="102" class="style2">ENDERE&Ccedil;O :</td>
      <td width="611" class="style2"><?php echo @mysql_result($r,0,'p.endereco'); ?></td>
    </tr>
  </tbody>
</table>
<table width="891">
  <tbody>
    <tr>
      <td width="105" class="style2">TELEFONE:</td>
      <td width="139" class="style2"><b><?php echo utf8_encode(@mysql_result($r,0,'p.telefone')); ?></b></td>
      <td width="88" class="style2">CELULAR : </td>
      <td width="179" class="style2"><b><?php echo utf8_encode(@mysql_result($r,0,'p.celular')); ?></b></td>
      <td width="62" class="style2">E-MAIL :</td>
      <td width="290" class="style2"><b><?php echo utf8_encode(@mysql_result($r,0,'p.email')); ?></b></td>
    </tr>
  </tbody>
</table>
<table width="1059">
  <tbody>
    <tr>
      <td width="114" class="style2">BAIRRO : </td>
      <td width="279" class="style2"><b><?php echo @mysql_result($r,0,'p.bairro'); ?></b></td>
      <td width="129" class="style2">MUN&Iacute;CIPIO :</td>
      <td width="291" class="style2"><b><?php echo @mysql_result($r,0,'p.cidade'); ?></b></td>
      <td width="117" class="style2">CEP : <b><?php echo @mysql_result($r,0,'p.cep'); ?></b></td>
      <td width="101" class="style2">UF : <b><?php echo @mysql_result($r,0,'p.uf'); ?></b></td>
    </tr>
    <tr>
      <td width="114" class="style2">ESTADO CIVIL </td>
      <td width="279" class="style2"><b><?php echo @mysql_result($r,0,'ec.descricao'); ?></b></td>
      <td width="129" class="style2">ETNIA / COR </td>
      <td width="291" class="style2"><b><?php echo @mysql_result($r,0,'e.descricao'); ?></b></td>
      <td width="117" class="style2">&nbsp;</td>
      <td width="101" class="style2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="6" class="style2">NECESSIDADES ESPECIAIS </td>
    </tr>
    <tr>
      <td class="style2">&nbsp;</td>
      <td class="style2">&nbsp;</td>
      <td class="style2">&nbsp;</td>
      <td class="style2">&nbsp;</td>
      <td class="style2">&nbsp;</td>
      <td class="style2">&nbsp;</td>
    </tr>
    <tr>
      <td class="style2">LOGIN : </td>
      <td class="style2"><b><?php echo @mysql_result($r,0,'u.login'); ?></b></td>
      <td class="style2">SENHA  : </td>
      <td class="style2">xxxxxxxx</td>
      <td class="style2">&nbsp;</td>
      <td class="style2">&nbsp;</td>
    </tr>
  </tbody>
</table>

<table width="1059">
  <tbody>
    <?php for($i=0;$i<$ln;$i++){?>
    <tr>
      <td width="154" class="style2">CPF: </td>
      <td width="162" class="style2"><b><?php echo @mysql_result($r,$i,'a.cpf');?></b></td>
      <td width="91" class="style2">RG: </td>
      <td class="style2"><b><?php echo @mysql_result($r,$i,'a.rgnumero');?></b></td>
      <td class="style2">ORG&Atilde;O EMISSOR  :</td>
      <td class="style2"><b><?php echo @mysql_result($r,$i,'a.rgorgaoemissor');?></b></td>
      <td class="style2">EMISS&Atilde;O :</td>
      <td width="164" class="style2"><b><?php echo @mysql_result($r,$i,'dtemissao');?></b> </td>
    </tr>
    <tr>
      <td class="style2">CERT. NASCIMENTO</td>
      <td class="style2"><b><?php echo @mysql_result($r,$i,'a.certidaonascimentonumero');?></b></td>
      <td class="style2">LIVRO</td>
      <td class="style2"><b><?php echo @mysql_result($r,$i,'a.certidaonascimentolivro');?></b></td>
      <td class="style2">FOLHA</td>
      <td class="style2"><b><?php echo @mysql_result($r,$i,'a.certidaonascimentofolha');?></b></td>
      <td class="style2">CIDADE</td>
      <td class="style2"><b><?php echo @mysql_result($r,$i,'a.certidaonascimentocidade');?></b></td>
    </tr>
    <tr>
      <td class="style2">SUB-DISTRITO</td>
      <td class="style2"><b><?php echo @mysql_result($r,$i,'a.certidaonascimentosubdistrito');?></b></td>
      <td class="style2">UF</td>
      <td class="style2"><b><?php echo @mysql_result($r,$i,'a.certidaonascimentouf');?></b></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td class="style2">CERT. CASAMENTO</td>
      <td class="style2"><b><?php echo @mysql_result($r,$i,'a.certidaocasamentonumero');?></b></td>
      <td class="style2">LIVRO</td>
      <td class="style2"><b><?php echo @mysql_result($r,$i,'a.certidaocasamentolivro');?></b></td>
      <td class="style2">FOLHA</td>
      <td class="style2"><b><?php echo @mysql_result($r,$i,'a.certidaocasamentofolha');?></b></td>
      <td class="style2">CIDADE</td>
      <td class="style2"><b><?php echo @mysql_result($r,$i,'a.certidaocasamentocidade');?></b></td>
    </tr>
    <tr>
      <td class="style2">SUB-DISTRITO</td>
      <td class="style2"><b><?php echo @mysql_result($r,$i,'a.certidaocasamentosubdistrito');?></b></td>
      <td class="style2">UF</td>
      <td class="style2"><b><?php echo @mysql_result($r,$i,'a.certidaocasamentouf');?></b></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" class="style2">CERT. ALISTAMENTO MILITAR <b><?php echo @mysql_result($r,$i,'a.certificado_alistamento_militar_numero');?></b></td>
      <td class="style2">S&Eacute;RIE</td>
      <td class="style2"><b><?php echo @mysql_result($r,$i,'a.certificado_alistamento_militar_serie');?></b></td>
      <td class="style2">RM</td>
      <td class="style2"><b><?php echo @mysql_result($r,$i,'a.certificado_alistamento_militar_rm');?></b></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td class="style2">CSM</td>
      <td class="style2"><b><?php echo @mysql_result($r,$i,'a.certificado_alistamento_militar_csm');?></b></td>
      <td class="style2">DATA</td>
      <td class="style2"><b><?php echo @mysql_result($r,$i,'dtalistamento');?></b></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" class="style2">CERT. RESERVISTA <b><?php echo @mysql_result($r,$i,'a.certificado_reservista_numero');?></b></td>
      <td class="style2">S&Eacute;RIE</td>
      <td class="style2"><b><?php echo @mysql_result($r,$i,'a.certificado_reservista_serie');?></b></td>
      <td class="style2">RM</td>
      <td class="style2"><b><?php echo @mysql_result($r,$i,'a.certificado_reservista_rm');?></b></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td class="style2">CSM</td>
      <td class="style2"><b><?php echo @mysql_result($r,$i,'a.certificado_reservista_csm');?></b></td>
      <td class="style2">DATA</td>
      <td class="style2"><b><?php echo @mysql_result($r,$i,'dtcertreservista');?></b></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td class="style2">T&Iacute;TULO DE ELEITOR </td>
      <td class="style2"><b><?php echo @mysql_result($r,$i,'a.titulo_eleitor_numero');?></b></td>
      <td class="style2">ZONA</td>
      <td class="style2"><b><?php echo @mysql_result($r,$i,'a.titulo_eleitor_zona');?></b></td>
      <td class="style2">SE&Ccedil;&Atilde;O   </td>
      <td class="style2"><b><?php echo @mysql_result($r,$i,'a.titulo_eleitor_secao');?></b></td>
      <td class="style2">EMISS&Atilde;O</td>
      <td class="style2"><b><?php echo @mysql_result($r,$i,'dttitulo');?></b></td>
    </tr>
    <tr>
      <td colspan="2" class="style2">CARTEIRA DE TRABALHO <b><?php echo @mysql_result($r,$i,'a.carteira_trabalho');?></b></td>
      <td>&nbsp;</td>
      <td width="94">&nbsp;</td>
      <td width="141">&nbsp;</td>
      <td width="108">&nbsp;</td>
      <td width="109">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="8">&nbsp;</td>
    </tr>
    <tr> </tr>
  </tbody>
</table>

<table width="1059">
  <tbody>
    <?php for($i=0;$i<$ln2;$i++){?>
    <tr>
      <td width="105" class="style2">MATR&Iacute;CULA: </td>
      <td width="77" class="style2"><b><?php echo @mysql_result($r2,$i,'ma.matricula_aluno');?></b></td>
      <td width="77" class="style2">PONTOS :</td>
      <td width="77" class="style2"><b><?php echo @mysql_result($r2,$i,'ma.pontos_concursos');?></b></td>
      <td width="144" class="style2">CLASSIFICA&Ccedil;&Atilde;O :</td>
      <td width="77" class="style2"><b><?php echo @mysql_result($r2,$i,'ma.classificacao_concurso');?></b></td>
      <td width="181" class="style2">DATA DA MATR&Iacute;CULA:</td>
      <td width="108" class="style2"><b><?php echo @mysql_result($r2,$i,'dtmatricula');?></b></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php
  $html = ob_get_clean();
	// pega o conteudo do buffer, insere na variavel e limpa a mem�ria
	 
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
	 // modo de visualiza��o
	 
	 $mpdf->SetFooter('{DATE j/m/Y  H:i}|{PAGENO}/{nb}|FAETERJ - DUQUE DE CAXIAS / SYSDUQUE');
	 //bacana este rodape, nao eh mesmo?
	$mpdf->WriteHTML($html);
	// escreve definitivamente o conteudo no PDF
	 
	$mpdf->Output();
	// imprime
	 
exit();
?>
