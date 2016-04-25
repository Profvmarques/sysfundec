<?php
require_once('controles/professor.php');
Processo('editarAtividadeFuncional');
?>
<form class="form-horizontal" id="form" name="form" method="post">
  <table width="1010">
    <tr>
      <td width="846">&nbsp;</td>
      <td width="152"><a href="default.php?pg=view/adm_modulos/consulta.php&amp;form=Consulta de Módulos"><strong><i class="icon-search"> Consultar Professor </i></strong></a> </td>
    </tr>
  </table>

                                
  <p>&nbsp;</p>
  <table width="714" border="0" align="center" cellpadding="2" cellspacing="4">
    <tr>
      <td colspan="5" bgcolor="#AECEF4" class="bd_titulo"><div align="center"><strong>Atividades funcionais </strong></div></td>
    </tr>
    <tr>
      <td width="210" bgcolor="#AECEF4" class="bd_titulo">FUNÇÃO</td>
      <td width="246" bgcolor="#AECEF4" class="bd_titulo">DATA DE INÍCIO </td>
      <td colspan="2" bgcolor="#AECEF4" class="bd_titulo">DATA DE TÉRMINO </td>
    </tr>
    <tr class="linhas">
      <td><select name="idfuncao" class="input-medium" tabindex="1" id="idfuncao" title="O campo função é obrigatório">
          <option value="">Escolha a Função</option>
          <?php for($i=0;$i<$linha2;$i++){?>
          <option value="<?php echo mysql_result($rs2,$i,'f.idfuncao');?>"><?php echo utf8_encode(mysql_result($rs2,$i,'f.funcao'));?></option>
          <?php }?>
      </select></td>
      <td><input name="data_inicio" type="text" id="data_inicio" size="20" class="input-medium" value="<?php echo mysql_result($r2,0,'inicio'); ?>" onkeypress="return Mascaras_Format(document.form,'data_inicio','99/99/9999',event);" maxlength="10" onblur="return valida_data1(document.form.data_inicio,5);" />
      <a title="Calendário" onclick="selectDate('form','data_inicio')"><img src="img/calendar.gif" width="18" height="18" /></a></td>
      <td width="191"><input name="data_termino" type="text" id="data_termino" size="20" class="input-medium" value="<?php echo mysql_result($r2,0,'termino'); ?>" onkeypress="return Mascaras_Format(document.form,'data_termino','99/99/9999',event);" maxlength="10" onblur="return valida_data1(document.form.data_termino,5);"/>
      <a title="Calendário" onclick="selectDate('form','data_termino')"><img src="img/calendar.gif" width="18" height="18" /></a></td>
      <td width="31">&nbsp;</td>
    </tr>
  </table>
  </div>
<div class="form-actions">
                                     <div align="center">
                                       <button type="button" class="btn btn-primary" onClick="validar(document.form);">
                                       </i> SALVAR</button>
                                       <button type="button" class="btn" >CANCELAR</button>
                                       <input name="ok" type="hidden" id="ok"/>
                                     </div>
  </div>
</form>
<script>
document.form.idfuncao.value='<?php echo mysql_result($r2,0,'af.idfuncao'); ?>';
</script>