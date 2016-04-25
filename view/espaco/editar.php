<?php
require_once('controles/espaco.php');
Processo('editar');
?>
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>

<form class="form-horizontal" id="form" name="form" method="post">
  <table width="1010">
    <tr>
      <td width="817">&nbsp;</td>
      <td width="181"><a href="default.php?pg=view/periodoletivo/consulta.php&form=Consulta de Período Letivo"><strong><i class="icon-search"> Consultar Espaço </i></strong></a> </td>
    </tr>
  </table>
  <table width="844" border="0">
    <tr>
      <td width="174">NOME DA SALA </td>
      <td width="508"><span class="controls">
        <input name="descricao" type="text" class="input-medium" id="descricao" placeholder="" value="<?php echo mysql_result($rs,0,'descricao');?>"/>
Ex: <span class="style1">SALA 1 OU HÍBRIDA 1 </span></span></td>
    </tr>
    <tr>
      <td width="174">CAPACIDADE </td>
      <td><span class="controls">
        <input name="capacidade" type="text" class="input-medium" id="capacidade" placeholder="" value="<?php echo mysql_result($rs,0,'capacidade');?>"/>
      </span></td>
    </tr>
  </table>
  <center>
  <div class="form-actions">
                                  <button type="button" class="btn btn-primary" onClick="validar(document.form);">
                              </i> SALVAR</button>
                                  <button type="button" class="btn" >CANCELAR</button>
                               <input name="ok" type="hidden" id="ok"/></div>
  </center>
</form>