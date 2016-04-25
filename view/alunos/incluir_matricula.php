<?php
require_once('controles/alunos.php');
Processo('incluirMatricula');
?>
<form class="form-horizontal" id="form" name="form" method="post">
  <table width="1010">
    <tr>
      <td width="846">&nbsp;</td>
      <td width="152"><a href="default.php?pg=view/alunos/consulta.php&form=Cadastro de Aluno"><strong><i class="icon-search"> Consultar Aluno </i></strong></a> </td>
    </tr>
  </table>

                                
  <p>&nbsp;</p>
  <table width="729" border="0" align="center">
    <tr>
      <td class="control-group">MATRÍCULA</td>
      <td><input name="matricula_aluno" type="text" id="matricula_aluno" size="20" class="input-medium" value="<?php echo $_POST['matricula_aluno'];?>"/></td>
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
        </select>
      </td>
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
        </select>
      </td>
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
      <td class="control-group"><div align="left">FORMA DE INGRESSO </div></td>
      <td><select name="idformaingresso" class="input-xlarge" id="idformaingresso" title="O campo forma de ingresso é obrigatório">
          <option value="">Escolha a forma de ingresso</option>
          <?php for($i=0;$i<$linha6;$i++){?>
          <option value="<?php echo mysql_result($rs6,$i,'idformaingresso');?>"><?php echo utf8_encode(mysql_result($rs6,$i,'descricao'));?></option>
          <?php }?>
      </select></td>
    </tr>
    <tr>
      <td class="control-group">DATA DA MATRÍCULA </td>
      <td><input type="text" name="data_matricula" id="data_matricula" class="input-medium" onblur="return valida_data1(document.form.data_matricula,5);" onkeypress="return Mascaras_Format(document.form,'data_matricula','99/99/9999',event);" value="" title="O campo data da matrícula é obrigatório"/>
        <a title="Calendário" onclick="selectDate('form','data_matricula')"><img src="img/calendar.gif" width="18" height="18" /></a> </td>
    </tr>
    <tr>
      <td class="control-group">DATA DE CONCLUSÃO </td>
      <td><input type="text" name="data_conclusao" id="data_conclusao" class="input-medium" onblur="return valida_data1(document.form.data_conclusao,5);" onkeypress="return Mascaras_Format(document.form,'data_conclusao','99/99/9999',event);" value=""/>
        <a title="Calendário" onclick="selectDate('form','data_matricula')"><img src="img/calendar.gif" width="18" height="18" /></a></td>
    </tr>
    <tr>
      <td class="control-group">PONTUAÇÃO</td>
      <td><input type="text" name="pontos_concursos" id="pontos_concursos" class="input-mini" value="" />
      </td>
    </tr>
    <tr>
      <td class="control-group">CLASSIFICAÇÃO</td>
      <td><input type="text" name="classificacao_concurso" id="classificacao_concurso" class="input-mini" value="" />
      </td>
    </tr>
    <tr>
      <td class="control-group"><div align="left">SITUAÇÃO</div></td>
      <td><select name="idsituacao_matricula" class="input-xlarge" id="idsituacao_matricula" title="O campo situação é obrigatório">
          <option value="">Escolha a situação</option>
          <?php for($i=0;$i<$linha5;$i++){?>
          <option value="<?php echo mysql_result($rs5,$i,'idsituacao_matricula');?>"><?php echo utf8_encode(mysql_result($rs5,$i,'descricao'));?></option>
          <?php }?>
        </select>
      </td>
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
document.form.siglacurso.value='<?php echo $_POST['siglacurso'];?>';
document.form.idperiodoletivo.value='<?php echo $_POST['idperiodoletivo'];?>';
document.form.idmatriz.value='<?php echo $_POST['idmatriz'];?>';
document.form.idturno.value='<?php echo $_POST['idturno'];?>';
document.form.idformaingresso.value='<?php echo $_POST['idformaingresso'];?>';
</script>