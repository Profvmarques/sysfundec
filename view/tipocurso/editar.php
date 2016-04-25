<?php
require_once('controles/tipocurso.php');
Processo('editar');
?>
<form class="form-horizontal" id="form" name="form" method="post">
  <table width="1010">
    <tr>
      <td width="817">&nbsp;</td>
      <td width="181"><a href="default.php?pg=view/tipocurso/consulta.php&form=Consulta de Período Letivo"><strong><i class="icon-search"> Consultar Tipo de Curso </i></strong></a> </td>
    </tr>
  </table>
  <table width="397" border="0">
    <tr>
      <td width="169" class="control-group"><label class="control-label">TIPO DE CURSO  </label></td>
      <td width="218"><span class="controls">
        <input name="descricao" type="text" class="input-medium" id="descricao" placeholder="" value="<?php echo utf8_encode(mysql_result($resultadoEditar,0,'descricao'));?>"/>
      </span></td>
    </tr>
  </table>
  <div class="form-actions">
                                  <button type="button" class="btn btn-primary" onClick="validar(document.form);">
                              </i> SALVAR</button>
                                  <button type="button" class="btn" >CANCELAR</button>
                               <input name="ok" type="hidden" id="ok"/></div>
</form>