<?php
require_once('controles/curso.php');
Processo('incluir');
?>
<form class="form-horizontal" id="form" name="form" method="post">
  <table width="1010">
    <tr>
      <td width="817">&nbsp;</td>
      <td width="181"><a href="default.php?pg=view/curso/consulta.php&amp;form=Consulta de Curso"><strong><i class="icon-search"> Consultar Curso </i></strong></a> </td>
    </tr>
  </table>
  <table width="397" border="0">
    <tr>
      <td width="169" class="control-group"><label class="control-label">SIGLA CURSO</label></td>
      <td width="218"><span class="controls">
        <input name="siglacurso" type="text" class="input-medium" id="siglacurso" placeholder="" />
      </span></td>
    </tr>
    <tr>
      <td width="169" class="control-group"><label class="control-label">DESCRIÇÃO </label></td>
      <td><span class="controls">
        <input name="descricao" type="text" class="input-xxlarge" id="descricao" placeholder="" />
      </span></td>
    </tr>
    <tr>
      <td class="control-group"><label class="control-label">TIPO CURSO </label></td>
      <td><span class="controls">
        <select name="idtipocurso" class="input-medium" tabindex="1" id="idtipocurso" title="O campo sistema é obrigatório">
          <option value="">Escolha o tipo de curso</option>
          <?php for($i=0;$i<$linha;$i++){?>
          <option value="<?php echo mysql_result($rs,$i,'idtipocurso');?>"><?php echo utf8_encode(mysql_result($rs,$i,'descricao'));?></option>
          <?php }?>
        </select>
      </span></td>
    </tr>
  </table>
  <div class="form-actions">
                                  <button type="button" class="btn btn-primary" onClick="validar(document.form);">
                              </i> SALVAR</button>
                                  <button type="button" class="btn" >CANCELAR</button>
                               <input name="ok" type="hidden" id="ok"/></div>
</form>