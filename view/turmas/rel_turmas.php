<?php
ob_start();  //inicia o buffer
require_once('../../controles/relatorio.php');
Processo('imprimirRelatorioTurma');	
?><style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
.style1 {font-size: 16px}
.style3 {font-size: 14}
.style4 {
	font-size: 18px;
	font-weight: bold;
}
.style6 {font-size: 16px; }
.style7 {font-size: 16px; font-weight: bold; }
-->
</style>
<?php if($linha3>0){?>
<p align="center"><img src="../../img/logorj.jpg" width="65" height="84" /></p>
<p align="center" class="style1"><span class="style3"><strong>GOVERNO DO ESTADO DO RIO DE JANEIRO</strong><br />
    <strong>SECRETARIA DE ESTADO DE CI&Ecirc;NCIA E TECNOLOGIA</strong><br />
    <strong>FUNDA&Ccedil;&Atilde;O DE APOIO &Agrave; ESCOLA T&Eacute;CNICA</strong> <br />
    <strong>FACULDADES DE EDUCA&Ccedil;&Atilde;O TECNOL&Oacute;GICA DO ESTADO DO RIO DE JANEIRO &ndash;  DUQUE DE CAXIAS</strong><br />
    <strong>PARECER DE RECONHECIMENTO CEE/RJ N&ordm; 335/2013 DOERJ 28/05/2013</strong><br />
    <strong>RESOLU&Ccedil;&Atilde;O CNE/CP N&ordm; 1, DE  28/05/2013</strong></span></p>
	<br />
<table width="936" align="center">
  <tr>
    <td width="327" bgcolor="#999999" class="style6"><center><strong>Curso</strong></center></td>
    <td width="130" bgcolor="#999999" class="style6"><center><strong>Turma</strong></center></td>
    <td width="154" bgcolor="#999999" class="style6"><center><strong>Per&iacute;odo Letivo </strong></center></td>
    <td width="135" bgcolor="#999999" class="style6"><center><strong>Turno</strong></div></td>
    <td width="166" bgcolor="#999999" class="style6"><center><strong>Grade Hor&aacute;ria </strong></center></td>
  </tr>
  <tr>
    <td class="style6"><div align="left"><strong><span class="style3"><?php echo utf8_encode(mysql_result($rs3,0,'c.descricao'));?></span></strong></div></td>
    <td class="style7"><center><span class="style3"><?php echo utf8_encode(mysql_result($rs3,0,'t.idturma'));?></span></center></td>
    <td class="style7"><center><span class="style3"><?php echo utf8_encode(mysql_result($rs3,0,'pl.siglaperiodo'));?></span></center></td>
    <td class="style7"><center><span class="style3"><?php echo utf8_encode(mysql_result($rs3,0,'turno.descricao'));?></span></center></td>
    <td class="style7"><center><span class="style3"><?php echo utf8_encode(mysql_result($rs3,0,'gh.descricao'));?></span></center></td>
  </tr>
</table>
<br /><br />
<table width="1115" align="center">
  <tr>
    <td width="108" bgcolor="#999999"><div align="center" class="style4">Sigla</div></td>
    <td width="585" bgcolor="#999999"><div align="center" class="style4">Disciplina</div></td>
    <td width="230" bgcolor="#999999"><div align="center" class="style4">
      <center>Per&iacute;odo</center>
    </div></td>
    <td width="172" bgcolor="#999999"><div align="center" class="style4">
      <center>Situa&ccedil;&atilde;o</center>
    </div></td>
  </tr>
  <?php for($i=0;$i<$linha3;$i++){?>
  <tr>
    <td class="style3"><span class="style6"><?php echo utf8_encode(mysql_result($rs3,$i,'t.sigladisciplina'));?></span></td>
    <td class="style3"><span class="style6"><?php echo mysql_result($rs3,$i,'d.descricao');?></span></td>
    <td class="style3"><center><span class="style6"><?php echo utf8_encode(mysql_result($rs3,$i,'cc.periodo'))."°";?></span></center></td>
    <td class="style3"><center><span class="style6"><?php echo utf8_encode(mysql_result($rs3,$i,'st.descricao'));?></span></center></td>
  </tr>
  <?php }?>
</table>
<p>&nbsp;</p>
<p><br />
 <?php }?>
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
</p>
