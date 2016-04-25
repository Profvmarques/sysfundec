<?php
require_once('controles/professor.php');
Processo('editarMatricula');
?>
<form class="form-horizontal" id="form" name="form" method="post">
  <table width="1010">
    <tr>
      <td width="846">&nbsp;</td>
      <td width="152"><a href="default.php?pg=view/adm_modulos/consulta.php&amp;form=Consulta de Módulos"><strong><i class="icon-search"> Consultar Professor </i></strong></a> </td>
    </tr>
  </table>

                                
  <p>&nbsp;</p>
  <table width="775" border="0" align="center" cellpadding="2" cellspacing="4">
    <tr>
      <td colspan="5" bgcolor="#AECEF4" class="bd_titulo"><div align="center"><strong>Adicionando Matrícula (máximo de duas sendo uma 20h e outra 40h) </strong></div></td>
    </tr>
    <tr>
      <td width="173" bgcolor="#AECEF4" class="bd_titulo">MATRÍCULA</td>
      <td width="173" bgcolor="#AECEF4" class="bd_titulo">CARGA HORÁRIA </td>
      <td width="202" bgcolor="#AECEF4" class="bd_titulo">DATA DE INÍCIO </td>
      <td width="191" bgcolor="#AECEF4" class="bd_titulo">DATA DE TÉRMINO </td>
    </tr>
    
    <tr>
      <td><input name="matricula" type="text" id="matricula" size="20" class="input-medium" value="<?php echo mysql_result($r,0,'mp.matriculaprofessor'); ?>"/></td>
      <td><input name="ch" type="text" id="ch" size="10" class="input-mini" value="<?php echo mysql_result($r,0,'mp.carga_horaria'); ?>"/>
        HORAS</td>
      <td><input name="dtini" type="text" class="input-medium" id="dtini" onkeypress="return Mascaras_Format(document.form,'dtini','99/99/9999',event);"size="20" maxlength="10" onblur="return valida_data1(document.form.dtini,5);" value="<?php echo mysql_result($r,0,'inicio'); ?>"/>
          <span class="textos_red"><a title="Calendário" onclick="selectDate('form','dtini')"><img src="img/calendar.gif" width="18" height="18" /></a></span></td>
      <td><input name="dtfim" type="text" class="input-medium" id="dtfim" onkeypress="return Mascaras_Format(document.form,'dtfim','99/99/9999',event);" value="<?php echo mysql_result($r,0,'termino'); ?>" size="20" maxlength="10" onblur="return valida_data1(document.form.dtfim,5);"/>
        <a title="Calendário" onclick="selectDate('form','dtfim')"><img src="img/calendar.gif" width="18" height="18" /></a></td>
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
document.form.sexo.value='<?php echo mysql_result($r,0,'p.sexo'); ?>';
document.form.idtitulacao.value='<?php echo mysql_result($r,0,'prof.idtitulacao'); ?>';
<?php for($i=0;$i<$ln2;$i++){?>
document.form.idfuncao<?php echo $i;?>.value='<?php echo mysql_result($r2,0,'af.idfuncao'); ?>';
<?php } ?>
</script>