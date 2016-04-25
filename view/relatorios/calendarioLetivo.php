<?php 
ob_start(); //inicia o buffer
require_once("../../controles/relatorios.php");
Processo('calendarioPeriodoletivo');
   
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<style type="text/css">
<!--
.style1 {font-size: 14px}
.style3 {font-size: 13px}
-->
</style>
</head>

<body>
<center>
<?php if($linha>0){?>
<p align="center"><img src="../../img/logorj.jpg" width="65" height="84" /></p>
<p align="center" class="style1"><span class="style3"><strong>GOVERNO DO ESTADO DO RIO DE JANEIRO</strong><br />
    <strong>SECRETARIA DE ESTADO DE CI&Ecirc;NCIA E TECNOLOGIA</strong><br />
    <strong>FUNDA&Ccedil;&Atilde;O DE APOIO &Agrave; ESCOLA T&Eacute;CNICA</strong> <br />
    <strong>FACULDADES DE EDUCA&Ccedil;&Atilde;O TECNOL&Oacute;GICA DO ESTADO DO RIO DE JANEIRO &ndash;  DUQUE DE CAXIAS</strong><br />
    <strong>PARECER DE RECONHECIMENTO CEE/RJ N&ordm; 335/2013 DOERJ 28/05/2013</strong><br />
    <strong>RESOLU&Ccedil;&Atilde;O CNE/CP N&ordm; 1, DE  28/05/2013</strong></span></p>
	<br />
	<table width="848">
      <tr>
        <td colspan="3" bgcolor="#999999"><strong>Curso : <?php echo mysql_result($rs,$i,'pl.siglacurso');?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Per&iacute;odo letivo : <?php echo mysql_result($rs,$i,'pl.siglaperiodo');?></strong></td>
      </tr>
      <tr>
        <td width="187" bgcolor="#999999"><span class="style1"><strong>Per&iacute;odo</strong></span></td>
        <td width="361" bgcolor="#999999"><center><div align="center"><span class="style1"><strong>Atividade</strong></span></div></center></td>
        <td width="221" bgcolor="#999999"><center><div align="center"><span class="style1"><strong>Tipo de Evento </strong></span></div></center></td>
      </tr>
	  <?php for($i=0;$i<$linha;$i++){?>  
      <tr>
        <td><?php echo mysql_result($rs,$i,'inicio')." - ".mysql_result($rs,$i,'final');?></td>
        <td><center><div align="center"><?php echo mysql_result($rs,$i,'ep.descricao');?></div></center></td>
        <td><center><div align="center"><?php echo mysql_result($rs,$i,'te.descricao');?></div></center></td>
      </tr>
	  <?php }?>  
    </table>
	<br />
<?php }else{  

    echo $msg;
	
	}
?>	
  
</center>
</body>
</html>
<?php 
$html = ob_get_clean();
	// pega o conteudo do buffer, insere na variavel e limpa a memória
	 
	$html = utf8_encode($html);
	// converte o conteudo para uft-8
	
	
	define('MPDF_PATH', '../../classes/mpdf/');
	include(MPDF_PATH.'mpdf.php');
	// inclui a classe
	 
	$mpdf = new mPDF();
	// cria o objeto
	 
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

</body>
</html>

