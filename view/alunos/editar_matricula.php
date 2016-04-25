<?php
require_once('controles/alunos.php');
Processo('editarMatricula');
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
      <td width="846">&nbsp;</td>
      <td width="152"><a href="default.php?pg=view/alunos/consulta.php&form=Cadastro de Aluno"><strong><i class="icon-search"> Consultar Alunos </i></strong></a> </td>
    </tr>
  </table>

                                
  <br />
  <table width="729" border="0" align="center">

    <tr>
      <td class="control-group">MATRÍCULA</td>
      <td><input name="matricula" type="text" id="matricula" size="20" class="input-medium" value="<?php echo @mysql_result($r,0,'ma.matricula_aluno'); ?>"/></td>
    </tr>
    <tr>
      <td width="197" class="control-group"><label class="control-label">
          <div align="left">CURSO</div>
        </label></td>
      <td width="522"><select name="siglacurso" class="input-xxlarge" id="siglacurso" title="O campo curso é obrigatório">
          <option value="">Escolha o curso</option>
          <?php for($i=0;$i<$linha;$i++){?>
          <option value="<?php echo mysql_result($rs,$i,'siglacurso');?>"><?php echo utf8_encode(mysql_result($rs,$i,'descricao'));?></option>
          <?php }?>
        </select>      </td>
    </tr>
    <tr>
      <td width="197" class="control-group"><label class="control-label">
          <div align="left">PERÍODO LETIVO </div>
        </label></td>
      <td><select name="idperiodoletivo" class="input-medium" id="idperiodoletivo" title="O campo período letivo é obrigatório">
          <option value="">Escolha o Período</option>
          <?php for($i=0;$i<$linha3;$i++){?>
          <option value="<?php echo mysql_result($rs3,$i,'idperiodoletivo');?>"><?php echo utf8_encode(mysql_result($rs3,$i,'siglaperiodo'));?></option>
          <?php }?>
        </select>      </td>
    </tr>
    <tr>
      <td><div align="left">MATRIZ</div></td>
      <td><select name="idmatriz" class="input-medium"id="idmatriz" title="O campo matriz é obrigatório">
          <option value="">Escolha a matriz</option>
          <?php for($i=0;$i<$linha4;$i++){?>
          <option value="<?php echo mysql_result($rs4,$i,'idmatriz');?>"><?php echo utf8_encode(mysql_result($rs4,$i,'vigencia'));?></option>
          <?php }?>
      </select></td>
    </tr>

    <tr>
      <td class="control-group"><div align="left">TURNO</div></td>
      <td><select name="idturno" class="input-medium"id="idturno" title="O campo turno é obrigatório">
          <option value="">Escolha o turno</option>
          <?php for($i=0;$i<$linha2;$i++){?>
          <option value="<?php echo mysql_result($rs2,$i,'idturno');?>"><?php echo utf8_encode(mysql_result($rs2,$i,'descricao'));?></option>
          <?php }?>
      </select></td>
    </tr>
    <tr>
      <td class="control-group"><div align="left">FORMA DE INGRESSO  </div></td>
      <td><select name="idformaingresso" class="input-xlarge" id="idformaingresso" title="O campo forma de ingresso é obrigatório">
          <option value="">Escolha a forma de ingresso</option>
          <?php for($i=0;$i<$linha6;$i++){?>
          <option value="<?php echo mysql_result($rs6,$i,'idformaingresso');?>"><?php echo utf8_encode(mysql_result($rs6,$i,'descricao'));?></option>
          <?php }?>
      </select></td>
    </tr>


    <tr>
      <td class="control-group">DATA DA MATRÍCULA </td>
      <td>
        <input type="text" name="data_matricula" id="data_matricula" class="input-medium" onblur="return valida_data1(document.form.data_matricula,5);" onkeypress="return Mascaras_Format(document.form,'data_matricula','99/99/9999',event);" value="<?php echo @mysql_result($r,0,'inicio'); ?>"/><a title="Calendário" onclick="selectDate('form','data_matricula')"><img src="img/calendar.gif" width="18" height="18" /></a>      </td>
    </tr>
    <tr>
      <td class="control-group">DATA DE CONCLUSÃO </td>
      <td><input type="text" name="data_conclusao" id="data_conclusao" class="input-medium" onblur="return valida_data1(document.form.data_conclusao,5);" onkeypress="return Mascaras_Format(document.form,'data_conclusao','99/99/9999',event);" value="<?php echo @mysql_result($r,0,'conclusao'); ?>"/>
      <a title="Calendário" onclick="selectDate('form','data_matricula')"><img src="img/calendar.gif" width="18" height="18" /></a></td>
    </tr>
    <tr>
      <td class="control-group">PONTUAÇÃO</td>
      <td>
        <input type="text" name="pontos_concursos" id="pontos_concursos" class="input-mini" value="<?php echo @mysql_result($r,0,'ma.pontos_concursos'); ?>" />
      </td>
    </tr>
    <tr>
      <td class="control-group">CLASSIFICAÇÃO</td>
      <td>
        <input type="text" name="classificacao_concurso" id="classificacao_concurso" class="input-mini" value="<?php echo @mysql_result($r,0,'ma.classificacao_concurso'); ?>" />
      </td>
    </tr>
    <tr>
      <td class="control-group">
          <div align="left">SITUAÇÃO</div>       </td>
      <td><select name="idsituacao_matricula" class="input-xlarge" id="idsituacao_matricula" title="O campo situação é obrigatório">
          <option value="">Escolha a situação</option>
          <?php for($i=0;$i<$linha5;$i++){?>
          <option value="<?php echo mysql_result($rs5,$i,'idsituacao_matricula');?>"><?php echo utf8_encode(mysql_result($rs5,$i,'descricao'));?></option>
          <?php }?>
        </select>      </td>
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
<script>
document.form.siglacurso.value='<?php echo mysql_result($r,0,'ma.siglacurso');?>';
document.form.idperiodoletivo.value='<?php echo mysql_result($r,0,'ma.idperiodoletivo');?>';
document.form.idmatriz.value='<?php echo mysql_result($r,0,'ma.idmatriz');?>';
document.form.idturno.value='<?php echo mysql_result($r,0,'ma.idturno');?>';
document.form.idformaingresso.value='<?php echo mysql_result($r,0,'ma.idformaingresso');?>';
document.form.idsituacao_matricula.value='<?php echo mysql_result($r,0,'ma.idsituacao_matricula');?>';
</script>