<?php
require_once('../../controles/relatorio.php');
Processo('imprimirFichaFuncionarios');
ob_start();  //inicia o buffer	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title></title>
</head>

<body>
<p align="center"><img src="../../img/logorj.jpg" width="65" height="84" /></p>
<p align="center"><strong>GOVERNO DO ESTADO DO RIO DE JANEIRO</strong><br />
  <strong>SECRETARIA DE ESTADO DE CIÊNCIA E TECNOLOGIA</strong><br />
  <strong>FUNDAÇÃO DE APOIO À ESCOLA TÉCNICA</strong><strong> </strong><br />
  <strong>FACULDADES DE EDUCAÇÃO TECNOLÓGICA DO ESTADO DO RIO DE JANEIRO –  DUQUE DE CAXIAS</strong><br />
  <strong>PARECER DE RECONHECIMENTO CEE/RJ Nº 335/2013 DOERJ 28/05/2013</strong><br />
  <strong> RESOLUÇÃO CNE/CP Nº 1, DE  28/05/2013 <br /><br /><br />FICHA DE FUNCIONÁRIO DE APOIO ADMINISTRATIVO</strong></p>
<br />
            <table width="871" align="center">
                <tbody><tr>
                    <td width="50">NOME:</td>
                    <td width="401"><b><?php echo utf8_encode(mysql_result($r,0,'p.nome')); ?></b></td>
                    <td width="46">SEXO:</td>
                    <td width="87"><b><?php echo mysql_result($r,0,'p.sexo'); ?></b></td>
                    <td width="184">DATA DE NASCIMENTO . </td>
                    <td width="75"><b><?php echo mysql_result($r,0,'dtnasc'); ?></b></td>
                </tr>
</tbody></table>

            <table width="871" align="center">
                <tbody><tr>
                    <td width="161">NACIONALIDADE : </td>
                    <td width="679"><b><?php echo mysql_result($r,0,'p.nacionalidade'); ?></b></td>
                    </tr>
</tbody></table>
            <table width="871" align="center">
                <tbody><tr>
                    <td width="102">ENDEREÇO :</td>
                    <td width="611"><?php echo mysql_result($r,0,'p.endereco'); ?></td>
                    </tr>
</tbody></table>
           
            <table width="871" align="center">
              <tbody>
                <tr>
                  <td width="104">MUNICÍPIO:</td>
                  <td width="368"><b><?php echo utf8_encode(mysql_result($r,0,'p.cidade')); ?></b></td>
                  <td width="45">CEP : </td>
                  <td width="121"><b><?php echo utf8_encode(mysql_result($r,0,'p.cep')); ?></b></td>
                  <td width="92">ESTADO :</td>
                  <td width="113"><b><?php echo utf8_encode(mysql_result($r,0,'p.uf')); ?></b></td>
                </tr>
              </tbody>
            </table>
            <table width="871" align="center">
                <tbody><tr>
                    <td width="105">TELEFONE:</td>
                    <td width="139"><b><?php echo utf8_encode(mysql_result($r,0,'p.telefone')); ?></b></td>
                    <td width="88">CELULAR : </td>
                    <td width="179"><b><?php echo utf8_encode(mysql_result($r,0,'p.celular')); ?></b></td>
                    <td width="62">E-MAIL :</td>
                    <td width="290"><b><?php echo utf8_encode(mysql_result($r,0,'p.email')); ?></b></td>
                </tr>
</tbody></table>
            <table width="871" align="center">
                <tbody><tr>
                    <td width="210">FUNÇÃO</td>
                    <td width="156"><b><?php echo mysql_result($r,0,'fun.funcao'); ?></b></td>
                    <td width="74">LOGIN : </td>
                    <td width="204"><b><?php echo mysql_result($r,0,'u.login'); ?></b></td>
                    <td width="101">SENHA  : </td>
                    <td width="102">xxxxxxxx</td>
                </tr>
</tbody></table>
	
		<br />
	
            <table width="871" align="center">
                                    <tbody>
									<?php for($i=0;$i<$ln;$i++){?>
									<tr>
                        <td width="105">MATRÍCULA: </td>
                        <td width="77"><b><?php echo mysql_result($r,$i,'mp.matriculaprofessor');?></b></td>
                        <td width="154">CARAGA HORÁRIA :</td>
                        <td width="69"><b><?php echo mysql_result($r,$i,'mp.carga_horaria');?></b></td>
                        <td width="136">DATA DE INÍCIO :</td>
                        <td width="89"><b><?php echo mysql_result($r,$i,'inicio');?></b></td>
                        <td width="108">TÉRMINO :</td>
                        <td><b><?php echo mysql_result($r,$i,'termino');?></b></td>
                        </tr>
					<?php } ?>
            </tbody></table>
		
		


		<br />
	
            <table width="871" align="center">
                                    <tbody>
									<?php for($i=0;$i<$ln2;$i++){?>
									<tr>
                        <td width="88">FUNÇÃO: </td>
                        <td width="214"><b><?php echo utf8_encode(mysql_result($r2,$i,'fun.funcao'));?></b></td>
                        
                        <td width="136">DATA DE INÍCIO :</td>
                        <td width="98"><b><?php echo mysql_result($r2,$i,'inicio');?></b></td>
                        <td width="95">TÉRMINO :</td>
                        <td><b><?php echo mysql_result($r2,$i,'termino');?></b></td>
                        </tr>
					<?php } ?>
            </tbody></table>	
</body>
</html>	
  <?php
 ini_set('memory_limit','200M');
  $html = ob_get_clean();
	// pega o conteudo do buffer, insere na variavel e limpa a mem�ria
	 
	$html = utf8_encode($html);
	// converte o conteudo para uft-8
	
	
	define('MPDF_PATH', '../../classes/mpdf/');
	include(MPDF_PATH.'mpdf.php');
	// inclui a classe
	 
	$mpdf=new mPDF('pt','A4',3,'',15,15,16,16,9,9,'L'); 
	// cria o objeto
	$mpdf->AddPage('L'); 
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