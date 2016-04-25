<?php
require_once('controles/funcionarios.php');
Processo('visualizarDados');
?>
<div align="right"><a href="view/funcionarios/ficha.php?id=<?php echo utf8_encode(mysql_result($r,0,'p.idpessoas')); ?>" title="" class="btn btn-circle show-tooltip" data-original-title="Imprimir ficha" target="_blank"><i class="icon-print"></i></a></div>
<br />
<fieldset style="background: none repeat scroll 0 0 #AECEF4;
    font-size: 100%; border: 1px solid #000000;">
<legend style="border: 1px solid #000000; background:#FFFFFF">            DADOS PESSOAIS DO FUNCIONÁRIO DO APOIO ADMINISTRATIVO <b><?php echo utf8_encode(mysql_result($r,0,'p.nome')); ?></b></legend>
        <br>

        <div style="margin-left:15px; background:#AECEF4">
            <table width="871">
                <tbody><tr>
                    <td width="50">NOME:</td>
                    <td width="340"><b><?php echo utf8_encode(mysql_result($r,0,'p.nome')); ?></b></td>
                    <td width="57">SEXO:</td>
                    <td width="86"><b><?php echo mysql_result($r,0,'p.sexo'); ?></b></td>
                    <td width="191">DATA DE NASCIMENTO . </td>
                    <td width="119"><b><?php echo mysql_result($r,0,'dtnasc'); ?></b></td>
                </tr>
            </tbody></table>

            <table width="852">
                <tbody><tr>
                    <td width="161">NACIONALIDADE : </td>
                    <td width="679"><b><?php echo mysql_result($r,0,'p.nacionalidade'); ?></b></td>
                    </tr>
            </tbody></table>
            <table width="725">
                <tbody><tr>
                    <td width="102">ENDEREÇO :</td>
                    <td width="611"><?php echo mysql_result($r,0,'p.endereco'); ?></td>
                    </tr>
            </tbody></table>
           
            <table width="891">
              <tbody>
                <tr>
                  <td width="105">MUNICÍPIO:</td>
                  <td width="139"><b><?php echo utf8_encode(mysql_result($r,0,'p.cidade')); ?></b></td>
                  <td width="88">CEP : </td>
                  <td width="179"><b><?php echo utf8_encode(mysql_result($r,0,'p.cep')); ?></b></td>
                  <td width="78">ESTADO :</td>
                  <td width="274"><b><?php echo utf8_encode(mysql_result($r,0,'p.uf')); ?></b></td>
                </tr>
              </tbody>
            </table>
            <table width="891">
                <tbody><tr>
                    <td width="105">TELEFONE:</td>
                    <td width="139"><b><?php echo utf8_encode(mysql_result($r,0,'p.telefone')); ?></b></td>
                    <td width="88">CELULAR : </td>
                    <td width="179"><b><?php echo utf8_encode(mysql_result($r,0,'p.celular')); ?></b></td>
                    <td width="62">E-MAIL :</td>
                    <td width="290"><b><?php echo utf8_encode(mysql_result($r,0,'p.email')); ?></b></td>
                </tr>
            </tbody></table>
            <table width="888">
                <tbody>
                <tr>
                  <td width="103">FUNÇÃO : </td>
                  <td width="297"><b><?php echo utf8_encode(mysql_result($r,0,'fun.funcao')); ?></b></td>
                  <td width="70">LOGIN : </td>
                  <td width="118"><b><?php echo mysql_result($r,0,'u.login'); ?></b></td>
                  <td width="82">SENHA  : </td>
                  <td width="190">xxxxxxxx</td>
                </tr>
                <tr>
                  <td colspan="6"><center><a class="btn btn-small show-tooltip" title="Editar" href="default.php?pg=view/funcionarios/editar_dados.php&form= ATUALIZAÇÃO DOS DADOS DO FUNCIONÁRIO DO APOIO ADMINISTRATIVO&id=<?php echo mysql_result($r,0,'p.idpessoas');?>"><i class="icon-edit"> <b>EDITAR DADOS DO FUNCIONÁRIO DO APOIO ADMINISTRATIVO</b></i></a></center></td>
                  </tr>
            </tbody></table>
		
        </div>
		

</fieldset>

