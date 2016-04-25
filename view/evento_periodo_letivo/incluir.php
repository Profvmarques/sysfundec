<?php
require_once('controles/eventoperiodoletivo.php');
Processo('incluir');
?>

<form class="form-horizontal" id="form" name="form" method="post">
  <table width="684" border="0" align="center">
    <tr>
      <td width="263">CURSO</td>
      <td width="411"><b><?php echo $_GET['siglacurso'];?></b></td>
    </tr>
    <tr>
      <td>PERÍODO LETIVO </td>
      <td><select name="idperiodoletivo" class="input-medium" id="idperiodoletivo" title="O campo evento letivo é obrigatório">
          <?php for($i=0;$i<$linha6;$i++){ ?>
          <option value="<?php echo @mysql_result($rs6,$i,'p.idperiodoletivo');?>"><?php echo utf8_encode(mysql_result($rs6,$i,'p.siglaperiodo'));?></option>
          <?php } ?>
      </select></td>
    </tr>
    <tr>
      <td>EVENTO LETIVO </td>
      <td>
        <input name="descricao" type="text" class="input-xlarge" id="descricao" placeholder="" />     </td>
    </tr>
    <tr>
      <td>DATA DE INÍCIO </td>
      <td>
        <input name="data_inicio" type="text" class="input-medium" id="data_inicio" onkeypress="return Mascaras_Format(document.form,'data_inicio','99/99/9999',event);" size="20" maxlength="10" onblur="return valida_data1(document.form.data_inicio,5);" value="<?php echo $_POST['data_inicio']; ?>"  title="O campo data de início é obrigatório"/>
        <span class="textos_red"><a title="Calendário" onclick="selectDate('form','data_inicio')"><img src="img/calendar.gif" width="18" height="18" /></a></span></td>
    </tr>
    <tr>
      <td>DATA DE TÉRMINO </td>
      <td>
        <input name="data_fim" type="text" class="input-medium" id="data_fim" onkeypress="return Mascaras_Format(document.form,'data_fim','99/99/9999',event);" size="20" maxlength="10" onblur="return valida_data1(document.form.data_fim,5);" value="<?php echo $_POST['data_fim']; ?>"  title="O campo data de término é obrigatório"/>
        <span class="textos_red"><a title="Calendário" onclick="selectDate('form','data_fim')"><img src="img/calendar.gif" width="18" height="18" /></a></span></td>
    </tr>
    
    <tr>
      <td>TIPO DE EVENTO</td>
      <td><select name="idtipoevento" class="input-xlarge" id="idtipoevento" title="O campo curso é obrigatório">
          <option value="">Escolha o tipo de evento</option>
          <?php for($i=0;$i<$linha7;$i++){?>
          <option value="<?php echo mysql_result($rs7,$i,'idtipoevento');?>"><?php echo utf8_encode(mysql_result($rs7,$i,'descricao'));?></option>
          <?php }?>
        </select>
              </td>
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
<script>
document.form.idperiodoletivo.value='<?php echo $_GET['idperiodoletivo'];?>';
</script>