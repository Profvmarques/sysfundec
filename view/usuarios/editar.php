<?php
require_once('controles/usuarios.php');
Processo('editar');
?>
<form class="form-horizontal" id="form" name="form" method="post">
  <table width="397" border="0">
    <tr>
      <td width="169" class="control-group"><label class="control-label">LOGIN</label></td>
      <td width="218"><span class="controls"><strong>
        <?php echo mysql_result($resultadoEditar,0,'login');?>
      </strong></span></td>
    </tr>
    <tr>
      <td width="169" class="control-group"><label class="control-label">SENHA </label></td>
      <td><span class="controls">
        <input name="senha" type="password" class="input-medium" id="senha" placeholder="" value="" title="O campo senha é obrigatório"/>
      </span></td>
    </tr>
  </table>
  <div class="form-actions">
                                  <button type="button" class="btn btn-primary" onClick="validar(document.form);">
                              </i> SALVAR</button>
                                  <button type="submit" class="btn" >CANCELAR</button>
                               <input name="ok" type="hidden" id="ok"/></div>
</form>
