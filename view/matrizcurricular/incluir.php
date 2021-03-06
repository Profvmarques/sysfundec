﻿<?php
require_once('controles/matriz.php');
Processo('incluir');
?>
<script type="text/javascript">
		// Adicionar linhas para edifícios, moradores de unidades, funcionaários diretos da unidade, etc...
		$(function () {
		  function removeCampo() {
			$(".removerCampo").unbind("click");

			$(".removerCampo").bind("click", function () {
			   if($("tr.linhas").length > 1){
				$(this).parent().parent().remove();
			   }
			});
		  }		 
		  $(".adicionarCampo").click(function () {
			novoCampo = $("tr.linhas:first").clone();
			novoCampo.find("input").val("");
			novoCampo.insertAfter("tr.linhas:last");
			removeCampo();
		  });
		});		
</script>

<form class="form-horizontal" id="form" name="form" method="post">
  <table width="1010">
    <tr>
      <td width="768">&nbsp;</td>
      <td width="230"><a href="default.php?pg=view/matrizcurricular/consulta.php&amp;form=Consulta de Curso"><strong><i class="icon-search"> Consultar Matriz Curricular </i></strong></a> </td>
    </tr>
  </table>
  <table width="932" border="0">
    <tr>
      <td colspan="5">&nbsp;<strong>CURSO</strong></td>
      <td width="813"><select name="siglacurso" class="input-xxlarge" tabindex="1" id="siglacurso" title="O campo curso é obrigatório">
        <option value="">Escolha o curso</option>
        <?php for($i=0;$i<$linha;$i++){?>
        <option value="<?php echo mysql_result($rs,$i,'siglacurso');?>"><?php echo utf8_encode(mysql_result($rs,$i,'descricao'));?></option>
        <?php }?>
      </select></td>
    </tr>
    <tr>
      <td colspan="5">&nbsp;<strong>PARECER</strong></td>
      <td><span style="margin-left:auto">
        <input name="parecer" type="text" class="input-medium" id="parecer" placeholder="" value="" title="O campo vigência é obrigatório"/>
      </span>&nbsp;<strong>VIGÊNCIA</strong><span style="margin-left:auto"><strong>
      <input name="data_vigencia" type="text" class="input-medium" id="data_vigencia" onkeypress="return Mascaras_Format(document.form,'data_vigencia','99/99/9999',event);" size="20" maxlength="10" onblur="return valida_data1(document.form.data_vigencia,5);" value=""  title="O campo nascimento é obrigatório"/>
      <a title="Calendário" onclick="selectDate('form','data_vigencia')"><img src="img/calendar.gif" width="18" height="18" /></a></strong></span></td>
    </tr>
  </table>
  <table width="1267" border="0">
    <tr>
      <td width="152"><div align="center"><strong>SIGLA</strong></div></td>
      <td width="285"><strong>DISCIPLINA</strong></td>
      <td width="157"><div align="center"><strong>CH</strong></div></td>
      <td width="155"><div align="center"><strong>CRÉDITO</strong></div></td>
      <td width="168"><div align="center"><strong>PERÍODO</strong></div></td>
      <td width="189"><strong>TIPO DE COMPONENTE </strong></td>
      <td width="131"><a href="#" class="adicionarCampo" title="Adicionar item"><i class="icon-plus"> Adicionar</i></a></td>
    </tr>
    <tr class="linhas">
      <td><div align="center"><span style="margin-left:auto">
          <input name="sigladisciplina[]" type="text" class="input-mini" id="sigladisciplina[]" placeholder="" value=""  title="O campo sigla disciplina é obrigatório"/>
      </span></div></td>
      <td><span style="margin-left:auto">
        <input name="descricao[]" type="text" class="input-xlarge" id="descricao[]" placeholder="" value=""  title="O campo disciplina é obrigatório"/>
      </span></td>
      <td><div align="center"><span style="margin-left:auto">
        <input name="ch[]" type="text" class="input-mini" id="ch[]" placeholder="" value=""  title="O campo ch é obrigatório"/>
      </span></div></td>
      <td><div align="center"><span style="margin-left:auto">
        <input name="creditos[]" type="text" class="input-mini" id="creditos[]" placeholder="" value=""  title="O campo credito é obrigatório"/>
        
      </span></div></td>
      <td><div align="center"><span style="margin-left:auto">
        <input name="periodo[]" type="text" class="input-mini" id="periodo[]" placeholder="" value=""  title="O campo periodo é obrigatório"/>
      </span></div></td>
      <td>
        <select name="idtipocomponente[]" class="input-medium" id="idtipocomponente[]" title="O campo tipo de componente é obrigatório">
          <option value="">Escolha o componente</option>
          <?php for($i=0;$i<$linha3;$i++){?>
          <option value="<?php echo mysql_result($rs3,$i,'idtipocomponente');?>"><?php echo utf8_encode(mysql_result($rs3,$i,'descricao'));?></option>
          <?php }?>
        </select>      </td>
      <td><a href="#" class="removerCampo" title="Remover linha"><i class="icon-minus"> Remover</i></a></td>
    </tr>
  </table>
  <div class="form-actions">
                                  <div align="center">
                                    <button type="button" class="btn btn-primary" onClick="validar(document.form);">
                                    </i> SALVAR</button>
                                    <button type="button" class="btn" >CANCELAR</button>
                                    <input name="ok" type="hidden" id="ok"/>
                                  </div>
  </div>
</form>