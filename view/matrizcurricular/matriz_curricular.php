<?php
ob_start();  //inicia o buffer
require_once('../../controles/relatorio.php');
Processo('gerarMatriz');	
?><style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
.style1 {font-size: 16px}
.style2 {font-size: 14px}
.style3 {font-size: 14}
.style10 {color: #000000; font-weight: bold; }
.style11 {font-size: 16px; font-weight: bold; }
.style14 {font-size: 18; font-weight: bold; }
.style16 {
	font-size: 20px;
	font-weight: bold;
}
.style19 {color: #000000; font-weight: bold; font-size: 24px; }
.style20 {font-size: 22px}
.style21 {font-size: 20px}
.style22 {font-size: 18px}
.style23 {font-size: 18px; font-weight: bold; }
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
<p align="center" class="style23">MATRIZ CURRICULAR </p>
<table width="979" align="center">
                <tbody><tr>
                    <td width="110" class="style23 style22">CURSO</td>
                    <td width="532" class="style14"><span class="style22"><?php echo mysql_result($rs3,0,'c.siglacurso')." - ".mysql_result($rs3,0,'c.descricao');?></span></td>
                    <td width="205" class="style23">VIG&Ecirc;NCIA DA MATRIZ </td>
                    <td width="112" class="style2"><span class="style22"><?php echo mysql_result($rs3,$i,'vigencia');?></span></td>
                    </tr>
</tbody></table>

            <table width="979" border="0" align="center" cellpadding="2" cellspacing="0" style="border: 1px solid #000000;">
                <tbody><tr>
                    <td width="86" bgcolor="#999999" class="style19 style21">SIGLA</td>
                    <td width="373" bgcolor="#999999" class="style19 style21">DICIPLINA</td>
                  <td width="111" bgcolor="#999999" class="style10"><div align="center" class="style16 style20">PER&Iacute;ODO</div></td>
                    <td width="114" bgcolor="#999999" class="style10"><div align="center" class="style19 style21">
                      <div align="center">CR&Eacute;DITO</div>
                  </div></td>
                    <td width="53" bgcolor="#999999" class="style10"><div align="center" class="style19 style21">
                      <div align="center">C.H</div>
                  </div></td>
                  <td width="214" bgcolor="#999999" class="style10"><div align="center" class="style21">TIPO COMPONENTE </div></td>
                    </tr>
					<?php for($i=0;$i<$linha3;$i++){?>
                  <tr>
                    <td class="style11"><span class="style22"><?php echo mysql_result($rs3,$i,'cc.sigladisciplina');?></span></td>
                    <td class="style11"><span class="style22"><?php echo mysql_result($rs3,$i,'cc.descricao');?></span></td>
                    <td class="style11"><div align="center" class="style22"><center><?php echo mysql_result($rs3,$i,'cc.periodo');?></center></div></td>
                    <td class="style11"><div align="center" class="style22"><center><?php echo mysql_result($rs3,$i,'cc.creditos');?></center></div></td>
                    <td class="style11"><div align="center" class="style22"><center><?php echo mysql_result($rs3,$i,'cc.ch');?></center></div></td>
                    <td class="style11"><div align="center" class="style22"><center><?php echo mysql_result($rs3,$i,'tc.descricao');?></center></div></td>
                  </tr>
				  <?php 
				    $totalCreditos+=mysql_result($rs3,$i,'cc.creditos');
					$totalCh+=mysql_result($rs3,$i,'cc.ch');
				  }?>
				  <tr>
                    <td colspan="3" class="style11">&nbsp;</td>
                    <td class="style11"><div align="center" class="style22">
                      <center>
                        <?php echo $totalCreditos;?>
                      </center>
                    </div></td>
                    <td class="style11"><div align="center" class="style22"><?php echo $totalCh;?></div></td>
                    <td class="style11">&nbsp;</td>
				  </tr>
</tbody></table>
            <br />
		<br />
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
