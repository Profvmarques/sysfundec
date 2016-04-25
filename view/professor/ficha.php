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
.style2 {font-size: 14px}
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
<p align="center" class="style1">FICHA DE DADOS DO PROFESSOR </p>
<table width="871" align="center">
                <tbody><tr>
                    <td width="50" class="style2"><span class="style2">NOME:</span></td>
                    <td width="401" class="style2"><span class="style2"><b><?php echo utf8_encode(mysql_result($r,0,'p.nome')); ?></b></span></td>
                    <td width="46" class="style2"><span class="style2">SEXO:</span></td>
                    <td width="87" class="style2"><span class="style2"><b><?php echo mysql_result($r,0,'p.sexo'); ?></b></span></td>
                    <td width="118" class="style2"><span class="style2">NASCIMENTO</span></td>
                    <td width="141" class="style2"><span class="style2"><b><?php echo mysql_result($r,0,'dtnasc'); ?></b></span></td>
                </tr>
</tbody></table>

            <table width="871" align="center">
                <tbody><tr>
                    <td width="149" height="20" class="style2">NACIONALIDADE : </td>
                    <td width="710" class="style2"><b><?php echo mysql_result($r,0,'p.nacionalidade'); ?></b></td>
                    </tr>
</tbody></table>
            <table width="871" align="center">
                <tbody><tr>
                    <td width="145" class="style2">ENDERE&Ccedil;O :</td>
                    <td width="714" class="style2"><?php echo mysql_result($r,0,'p.endereco'); ?></td>
                    </tr>
</tbody></table>
           
            <table width="871" align="center">
                <tbody><tr>
                    <td width="105" class="style2">TELEFONE:</td>
                    <td width="139" class="style2"><b><?php echo utf8_encode(mysql_result($r,0,'p.telefone')); ?></b></td>
                    <td width="88" class="style2">CELULAR : </td>
                    <td width="179" class="style2"><b><?php echo utf8_encode(mysql_result($r,0,'p.celular')); ?></b></td>
                    <td width="62" class="style2">E-MAIL :</td>
                    <td width="290" class="style2"><b><?php echo utf8_encode(mysql_result($r,0,'p.email')); ?></b></td>
                </tr>
</tbody></table>
            <table width="871" align="center">
                <tbody><tr>
                    <td width="161" class="style2">TITULA&Ccedil;&Atilde;O : </td>
                    <td width="217" class="style2"><b><?php echo mysql_result($r,0,'t.descricao'); ?></b></td>
                    <td width="174" class="style2">LATTES :</td>
                    <td width="299" class="style2"><b></b></td>
                </tr>
                <tr>
                    <td width="161" class="style2">NOME DE GUERRA  : </td>
                    <td width="217" class="style2"><b><?php echo mysql_result($r,0,'prof.nome_guerra'); ?></b></td>
                    <td width="174" class="style2">COR (REPRENTATIVA)  :</td>
                    <td width="299" class="style2"><b><?php echo mysql_result($r,0,'prof.corfundo'); ?></b></td>
                </tr>
                <tr>
                  <td class="style2">LOGIN : </td>
                  <td class="style2"><b><?php echo mysql_result($r,0,'u.login'); ?></b></td>
                  <td class="style2">SENHA  : </td>
                  <td class="style2">xxxxxxxx</td>
                </tr>
</tbody></table>
	
		<br />
	
            <table width="871" align="center">
                                    <tbody>
									<?php for($i=0;$i<$ln;$i++){?>
									<tr>
                        <td width="105" class="style2"><span class="style2">MATR&Iacute;CULA: </span></td>
                        <td width="129" class="style2"><span class="style2"><b><?php echo mysql_result($r,$i,'mp.matriculaprofessor');?></b></span></td>
                        <td width="37" class="style2"><span class="style2">CH :</span></td>
                        <td width="134" class="style2"><span class="style2"><b><?php echo mysql_result($r,$i,'mp.carga_horaria');?></b></span></td>
                        <td width="59" class="style2"><span class="style2"> IN&Iacute;CIO :</span></td>
                        <td width="145" class="style2"><span class="style2"><b><?php echo mysql_result($r,$i,'inicio');?></b></span></td>
                        <td width="82" class="style2"><span class="style2">T&Eacute;RMINO :</span></td>
                        <td width="144" class="style2"><span class="style2"><b><?php echo mysql_result($r,$i,'termino');?></b></span></td>
                        </tr>
					<?php } ?>
</tbody></table>
		
		


		<br />
	
            <table width="871" align="center">
                                    <tbody>
									<?php for($i=0;$i<$ln2;$i++){?>
									<tr>
                        <td width="88" class="style2"><span class="style3">FUN&Ccedil;&Atilde;O: </span></td>
                        <td width="214" class="style2"><span class="style3"><b><?php echo utf8_encode(mysql_result($r2,$i,'funcao.funcao'));?></b></span></td>
                        
                        <td width="58" class="style2"><span class="style3">IN&Iacute;CIO :</span></td>
                        <td width="176" class="style2"><span class="style3"><b><?php echo mysql_result($r2,$i,'inicio');?></b></span></td>
                        <td width="95" class="style2"><span class="style3">T&Eacute;RMINO :</span></td>
                        <td width="212" class="style2"><span class="style3"><b><?php echo mysql_result($r2,$i,'termino');?></b></span></td>
                        </tr>
					<?php } ?>
</tbody></table>
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
	 
	 $mpdf->SetFooter('{DATE d/m/Y  H:i}|{PAGENO}/{nb}|FAETERJ - DUQUE DE CAXIAS / SYSDUQUE');
	 //bacana este rodape, nao eh mesmo?
	$mpdf->WriteHTML($html);
	// escreve definitivamente o conteudo no PDF
	 
	$mpdf->Output();
	// imprime
	 
exit();
?>