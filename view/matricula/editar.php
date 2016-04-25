<?php
require_once('controles/turmas.php');
Processo('editar');
?>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
 // COMENTÁRIO DESSA FUNÇÃO *********************************
      $(document).ready(function(){
        // Evento change no campo siglacurso  
         $("select[name=siglacurso]").change(function(){
            
			$("select[name=idperiodoletivo]").html('<option value="">Carregando Período Letivo...</option>');
            // Exibimos o campo sistemas antes de selecionamos o módulo, serve também em caso
			// do usuario ja ter selecionado o tipo e resolveu trocar, com isso limpamos a
			// seleção antiga caso tenha feito.
			// Passando tipo por parametro para a pagina ajax_modulos.php
            $.post("ajax/ajax_periodoletivo.php",
                  {siglacurso:$(this).val()},
                  // Carregamos o resultado acima para o campo marca
				  function(valor){
                     $("select[name=idperiodoletivo]").html(valor);
                  }
                  )
         });
	  });      	  
	   // COMENTÁRIO DESSA FUNÇÃO *********************************
</script>
<form class="form-horizontal" id="form" name="form" method="post">
  <table width="1010">
    <tr>
      <td width="817">&nbsp;</td>
      <td width="181"><a href="default.php?pg=view/turmas/consulta.php&amp;form=Consulta de Turmas"><strong><i class="icon-search"> Consultar Turmas </i></strong></a> </td>
    </tr>
  </table>
  <br />
  <center>
  <table width="787" border="0">
    <tr>
      <td class="control-group"><div align="left">CÓDIGO DA TURMA </div></td>
      <td><input name="idturma" type="text" class="input-mini" id="idturma" placeholder="" value="<?php echo mysql_result($r,0,'t.idturma'); ?>" title="O campo código da turma é obrigatório"/>
        <strong>Ex: Composto por Turno, PeríodoLetivo e Período da disciplina</strong></td>
    </tr>
    <tr>
      <td width="197" class="control-group"><label class="control-label">
      <div align="left">CURSO</div>
      </label></td>
      <td width="522">
        <select name="siglacurso" class="input-xxlarge" id="siglacurso" title="O campo curso é obrigatório">
          <option value="">Escolha o curso</option>
          <?php for($i=0;$i<$linha;$i++){?>
          <option value="<?php echo mysql_result($rs,$i,'siglacurso');?>"><?php echo utf8_encode(mysql_result($rs,$i,'descricao'));?></option>
          <?php }?>
        </select>    </td>
    </tr>
    <tr>
      <td width="197" class="control-group"><label class="control-label">
        <div align="left">PERÍODO LETIVO </div>
      </label></td>
      <td>
        <select name="idperiodoletivo" class="input-medium" id="idperiodoletivo" title="O campo período letivo é obrigatório">
          <option value="">Escolha o tipo de curso</option>
          <option value="" selected="selected">Aguardando ...</option>
        </select>      </td>
    </tr>
    <tr>
      <td class="control-group"><div align="left">MATRIZ</div></td>
      <td><select name="idmatriz" class="input-medium"id="idmatriz" title="O campo matriz é obrigatório">
        <option value="">Escolha a matriz</option>
        <?php for($i=0;$i<$linha4;$i++){?>
        <option value="<?php echo mysql_result($rs4,$i,'idmatriz');?>"><?php echo utf8_encode(mysql_result($rs4,$i,'vigencia'));?></option>
        <?php }?>
      </select></td>
    </tr>
    <tr>
      <td class="control-group"><div align="left">DISCIPLINA</div></td>
      <td><select name="sigladisciplina" class="input-xxlarge"id="sigladisciplina" title="O campo disciplina é obrigatório">
        <option value="">Escolha a disciplina</option>
        <?php for($i=0;$i<$linha3;$i++){?>
        <option value="<?php echo mysql_result($rs3,$i,'sigladisciplina');?>"><?php echo utf8_encode(mysql_result($rs3,$i,'sigladisciplina'))." - ".utf8_encode(mysql_result($rs3,$i,'descricao'));?></option>
        <?php }?>
      </select></td>
    </tr>
    <tr>
      <td class="control-group"><div align="left">TURNO</div></td>
      <td>
        <select name="idturno" class="input-medium"id="idturno" title="O campo turno é obrigatório">
          <option value="">Escolha o turno</option>
          <?php for($i=0;$i<$linha2;$i++){?>
          <option value="<?php echo mysql_result($rs2,$i,'idturno');?>"><?php echo utf8_encode(mysql_result($rs2,$i,'descricao'));?></option>
          <?php }?>
        </select></td>
    </tr>
    <tr>
      <td class="control-group"><div align="left">GRADE DE HORÁRIO </div></td>
      <td><select name="idgrade_horario" class="input-medium"id="idgrade_horario" title="O campo grade de horário é obrigatório">
        <option value="">Escolha a grade</option>
        <?php for($i=0;$i<$linha6;$i++){?>
        <option value="<?php echo mysql_result($rs6,$i,'idgrade_horario');?>"><?php echo utf8_encode(mysql_result($rs6,$i,'descricao'));?></option>
        <?php }?>
      </select></td>
    </tr>
    <tr>
      <td class="control-group"><div align="left">PROFESSOR</div></td>
      <td><select name="matriculaprofessor" class="input-xxlarge" id="matriculaprofessor" title="O campo professor é obrigatório">
        <option value="">Escolha o professor</option>
        <?php for($i=0;$i<$linha7;$i++){?>
        <option value="<?php echo mysql_result($rs7,$i,'mp.matriculaprofessor');?>"><?php echo mysql_result($rs7,$i,'mp.matriculaprofessor')." - ".utf8_encode(mysql_result($rs7,$i,'p.nome'));?></option>
        <?php }?>
      </select></td>
    </tr>
    <tr>
      <td class="control-group"><div align="left">QUANTIDADE DE VAGAS </div></td>
      <td>
        <input name="qtdetotal" type="text" class="input-mini" id="qtdetotal" placeholder="" value="<?php echo mysql_result($r,0,'t.qtdetotal');?>" title="O campo quantidade de vagas é obrigatório"/>     </td>
    </tr>
    <tr>
      <td class="control-group"><label class="control-label">
        <div align="left">SITUAÇÃO</div>
      </label></td>
      <td>
        <select name="idsituacaoturma" class="input-medium" id="idsituacaoturma" title="O campo situação é obrigatório">
          <option value="">Escolha a situação</option>
          <?php for($i=0;$i<$linha5;$i++){?>
          <option value="<?php echo mysql_result($rs5,$i,'idsituacaoturma');?>"><?php echo utf8_encode(mysql_result($rs5,$i,'descricao'));?></option>
          <?php }?>
        </select>      </td>
    </tr>
  </table>
  </center>
  <center>
  <div class="form-actions">
                                  <button type="button" class="btn btn-primary" onClick="validar(document.form);">
                              </i> SALVAR</button>
                                  <button type="button" class="btn" >CANCELAR</button>
                               <input name="ok" type="hidden" id="ok"/></div>
  </center>
</form>
<script>
document.form.siglacurso.value='<?php echo mysql_result($r,0,'t.siglacurso');?>';
document.form.idperiodoletivo.value='<?php echo mysql_result($r,0,'t.idperiodoletivo');?>';
document.form.idmatriz.value='<?php echo mysql_result($r,0,'t.idmatriz');?>';
document.form.sigladisciplina.value='<?php echo mysql_result($r,0,'t.sigladisciplina');?>';
document.form.idturno.value='<?php echo mysql_result($r,0,'t.idturno');?>';
document.form.idgrade_horario.value='<?php echo mysql_result($r,0,'t.idgrade_horario');?>';
document.form.matriculaprofessor.value='<?php echo mysql_result($r,0,'t.matriculaprofessor');?>';
document.form.idsituacaoturma.value='<?php echo mysql_result($r,0,'t.idsituacaoturma');?>';
</script>