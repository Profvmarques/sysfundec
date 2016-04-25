<?php
require_once('controles/periodoletivo.php');
Processo('incluir');
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
      <td width="181"><a href="default.php?pg=view/periodoletivo/consulta.php&form=Consulta de Período Letivo"><strong><i class="icon-search"> Consultar Período Letivo </i></strong></a> </td>
    </tr>
  </table>
  <table width="844" border="0">
    <tr>
      <td width="174">CURSO</td>
      <td width="508"><span class="controls">
        <select name="siglacurso" class="input-xxlarge" tabindex="1" id="siglacurso" title="O campo curso é obrigatório">
          <option value="">Escolha o curso</option>
          <?php for($i=0;$i<$linha;$i++){?>
		   <option value="<?php echo mysql_result($rs,$i,'siglacurso');?>"><?php echo utf8_encode(mysql_result($rs,$i,'siglacurso'))." - ".utf8_encode(mysql_result($rs,$i,'descricao'));?></option>
		  <?php }?>
        </select>
      </span></td>
    </tr>
    <tr>
      <td width="174">SIIGLA PERÍODO </td>
      <td><span class="controls">
        <input name="siglaperiodo" type="text" class="input-medium" id="siglaperiodo" placeholder="" />
        Ex: <span class="style1">2001.1</span>
      </span></td>
    </tr>
    <tr>
      <td>DATA DE INÍCIO </td>
      <td><span class="controls">
        <input name="data_inicio" type="text" class="input-medium" id="data_inicio" onkeypress="return Mascaras_Format(document.form,'data_inicio','99/99/9999',event);" size="20" maxlength="10" onblur="return valida_data1(document.form.data_inicio,5);" value="<?php echo $_POST['data_inicio']; ?>"  title="O campo data de início é obrigatório"/>
        <span class="textos_red"><a title="Calendário" onclick="selectDate('form','data_inicio')"><img src="img/calendar.gif" width="18" height="18" /></a></span></span></td>
    </tr>
    <tr>
      <td>DATA DE TÉRMINO </td>
      <td><span class="controls">
        <input name="data_fim" type="text" class="input-medium" id="data_fim" onkeypress="return Mascaras_Format(document.form,'data_fim','99/99/9999',event);" size="20" maxlength="10" onblur="return valida_data1(document.form.data_fim,5);" value="<?php echo $_POST['data_fim']; ?>"  title="O campo data de término é obrigatório"/>
        <span class="textos_red"><a title="Calendário" onclick="selectDate('form','data_fim')"><img src="img/calendar.gif" width="18" height="18" /></a></span></span></td>
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