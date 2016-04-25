<?php
require_once('controles/processo_rematricula.php');
Processo('consultar');
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
<form id="form" name="form" method="post">
<span class="form-actions">
<input name="ok" type="hidden" id="ok"/>
</span><fieldset style="background: none repeat scroll 0 0 #AECEF4; font-size: 100%; border: 1px solid #000000;" >
<legend style="border: 1px solid #000000; background:#FFFFFF"> REMATRÍCULA DE ALUNOS</legend>
        <br>

<div style="margin-left:15px; background:#AECEF4">
  <table width="690" border="0" align="center">
    <tr>
      <td width="188" class="control-group"><label class="control-label"><strong>CURSO</strong></label></td>
      <td width="492"><span class="controls">
        <select name="siglacurso" class="input-xxlarge" tabindex="1" id="siglacurso" title="O campo curso é obrigatório">
          <option value="">Escolha o curso</option>
          <?php for($i=0;$i<$linha;$i++){?>
          <option value="<?php echo mysql_result($rs,$i,'siglacurso');?>"><?php echo utf8_encode(mysql_result($rs,$i,'descricao'));?></option>
          <?php }?>
        </select>
      </span></td>
    </tr>
    <tr>
      <td width="188" class="control-group"><label class="control-label"><strong>PERÍODO LETIVO </strong></label></td>
      <td><span class="controls">
        <select name="idperiodoletivo" class="input-medium" tabindex="1" id="idperiodoletivo" title="O campo período letivo é obrigatório">
          <option value="">Escolha o tipo de curso</option>
          <option value="" selected="selected">Aguardando ...</option>
        </select>
      </span></td>
    </tr>

    <tr>
      <td width="188" class="control-group"><label class="control-label"><strong>TURNO </strong></label></td>
      <td><span class="controls">
        <select name="idturno" class="input-medium" tabindex="1" id="idturno" title="O campo turno é obrigatório">
          <option value="">Escolha o turno</option>
		   <option value="TODOS">TODOS</option>
          <?php for($i=0;$i<$linha2;$i++){?>
          <option value="<?php echo mysql_result($rs2,$i,'idturno');?>"><?php echo utf8_encode(mysql_result($rs2,$i,'descricao'));?></option>
          <?php }?>
        </select>
      </span></td>
    </tr>
    <tr>
      <td class="control-group">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" class="control-group"><center>
        <button type="button" onClick="validar(document.form);"> <i class="icon-search"> PESQUISA</i></button>
      </center></td>
    </tr>
  </table>
</div>	
<br />
        <br>

<div style="margin-left:15px; background:#AECEF4">
  <?php if($linha3>0){  echo "<b>Período Letivo ".utf8_encode(mysql_result($rs3,$i,'pl.siglaperiodo'))."</b>";?>
  
								<table width="100%" class="table table-advance" id="table1">
                                  <thead>
                                    <tr>
                                      <th width="99">Cód. Turma </th>
                                      <th width="236" height="23">Turno</th>
                                      <th width="209">Grade</th>
                                      <th width="231">Período</th>
                                      <th width="197">Situação</th>
                                      <th colspan="2">Ação</th>
                                    </tr>
                                  </thead>
                                  <tbody>
								  <?php for($i=0;$i<$linha3;$i++){?>
                                    <tr class="table-flag-blue">
                                      <td><strong><?php echo utf8_encode(mysql_result($rs3,$i,'t.idturma'));?></strong></td>
                                      <td><strong><?php echo utf8_encode(mysql_result($rs3,$i,'turno.descricao'));?></strong></td>
                                      <td><strong><?php echo utf8_encode(mysql_result($rs3,$i,'gh.descricao'));?></strong></td>
                                      <td><strong><?php echo utf8_encode(mysql_result($rs3,$i,'cc.periodo'))."°";?></strong></td>
                                      <td><strong><?php echo utf8_encode(mysql_result($rs3,$i,'st.descricao'));?></strong></td>
                                      <td width="44"><a class="btn btn-small show-tooltip" title="Editar" href="default.php?pg=view/turmas/editar.php&form=Atualizar Dados da Turma&idturmas=<?php echo mysql_result($rs3,$i,'t.idturma'); ?>&idturno=<?php echo utf8_encode(mysql_result($rs3,$i,'t.idturno')); ?>&idperiodoletivo=<?php echo utf8_encode(mysql_result($rs3,$i,'t.idperiodoletivo')); ?>&matriculaprofessor=<?php echo utf8_encode(mysql_result($rs3,$i,'t.matriculaprofessor')); ?>&idmatriz=<?php echo utf8_encode(mysql_result($rs3,$i,'t.idmatriz')); ?>&sigladisciplina=<?php echo utf8_encode(mysql_result($rs3,$i,'t.sigladisciplina')); ?>&idgrade_horario=<?php echo utf8_encode(mysql_result($rs3,$i,'t.idgrade_horario')); ?>&siglacurso=<?php echo utf8_encode(mysql_result($rs3,$i,'t.siglacurso')); ?>"><i class="icon-edit"></i></a></td>
                                      <td width="29"><a href="view/turmas/rel_turmas.php?idturno=<?php echo utf8_encode(mysql_result($rs3,$i,'turno.idturno'));?>&idperiodoletivo=<?php echo utf8_encode(mysql_result($rs3,$i,'pl.idperiodoletivo'));?>&idturma=<?php echo utf8_encode(mysql_result($rs3,$i,'t.idturma'));?>&siglacurso=<?php echo utf8_encode(mysql_result($rs3,$i,'t.siglacurso'));?>" title="" class="btn btn-circle show-tooltip" data-original-title="Imprimir lista de disciplina da turma <?php echo utf8_encode(mysql_result($rs3,$i,'t.idturma'));?>" target="_blank"><i class="icon-print"></i></a></td>
                                    </tr>
									<?php }?>
                                  </tbody>
                                </table>
										<?php }elseif($_POST['ok']=="true"){?>
										<div class="alert alert-error">
                                            <button data-dismiss="alert" class="close">×</button>
                                            <h4>Mensagem!</h4>
                                            <p>Nenhum registro encontrado <center> <h4><a href="default.php?pg=view/turmas/incluir.php&form=Cadastro de Turmas&siglacurso=<?php echo $_POST['siglacurso'];?>&idturno=<?php echo $_POST['idturno'];?>&idperiodoletivo=<?php echo $_POST['idperiodoletivo'];?>"><strong> <i class="icon-plus-sign">  Cadastrar nova Turma</i> </strong></a></h4></center></p>
                                        </div>
										<?php }?>
</div>	
</form>