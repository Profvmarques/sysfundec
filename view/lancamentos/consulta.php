<?php
require_once('controles/inscricao.php');
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
<form class="form-horizontal" id="form" name="form" method="post">
  <br />
  <span class="form-actions">
  <input name="ok" type="hidden" id="ok"/>
  </span><br />
  <fieldset style="background: none repeat scroll 0 0 #AECEF4; font-size: 100%; border: 1px solid #000000;" >
<legend style="border: 1px solid #000000; background:#FFFFFF"> LANÇAMENTO DE NOTAS / FALTAS        </legend>
        <br>
  <div style="margin-left:15px; background:#AECEF4">
    <table width="655" border="0" align="center">
      <tr>
        <td width="191"><strong>CURSO </strong></td>
        <td><select name="siglacurso" class="input-xxlarge" id="siglacurso" title="O campo curso é obrigatório">
          <option value="">Escolha o curso</option>
          <?php for($i=0;$i<$linha;$i++){?>
          <option value="<?php echo mysql_result($rs,$i,'siglacurso');?>"><?php echo utf8_encode(mysql_result($rs,$i,'descricao'));?></option>
          <?php }?>
        </select></td>
      </tr>
      <tr>
        <td width="191"><strong>PERÍODO LETIVO </strong></td>
        <td width="454"><select name="idperiodoletivo" class="input-medium" id="idperiodoletivo" title="O campo período letivo é obrigatório">
          <option value="">Escolha o tipo de curso</option>
          <option value="" selected="selected">Aguardando ...</option>
        </select></td>
      </tr>
      <tr>
        <td width="191"><strong>PROFESSOR</strong></td>
        <td><select name="matriculaprofessor" class="input-xxlarge" id="matriculaprofessor" title="O campo professor é obrigatório">
          <option value="">Escolha o professor</option>
          <?php for($i=0;$i<$linha2;$i++){?>
          <option value="<?php echo mysql_result($rs2,$i,'mp.matriculaprofessor');?>"><?php echo mysql_result($rs2,$i,'mp.matriculaprofessor')." - ".utf8_encode(mysql_result($rs2,$i,'p.nome'))."  ".utf8_encode(mysql_result($rs2,$i,'mp.carga_horaria'))."h";?></option>
          <?php }?>
        </select></td>
      </tr>
      <tr>
        <td colspan="2"><center>
        <button type="button" onClick="validar(document.form);"> <i class="icon-search"> PESQUISA</i></button>
      </center></td>
      </tr>
    </table>
	<br />
    <?php if($linha3>0){  ?>
    <table width="100%" class="table table-advance" id="table1">
      <thead>
        <tr>
          <th width="98">CURSO</th>
          <th width="299" height="23"><div align="left"><strong><?php echo utf8_encode(mysql_result($rs3,0,'c.descricao'));?></strong></div></th>
          <th width="155"><div align="left">PERÍODO LETIVO</div></th>
          <th width="156"><div align="left"><strong><?php echo utf8_encode(mysql_result($rs3,0,'pl.siglaperiodo'));?></strong></div></th>
          <th width="116"><div align="left">PROFESSOR</div></th>
          <th width="223"><div align="left"><strong><?php echo utf8_encode(mysql_result($rs3,0,'p.nome'));?></strong></div></th>
        </tr>
      </thead>
      </table>
    <table width="100%" class="table table-advance" id="table1">
      <thead>

        <tr>
          <th width="71">TURMA</th>
          <th width="91">PERÍODO</th>
          <th width="403" height="23"><div align="left">SIGLA - DISCIPLINA</div></th>
          <th width="197">&nbsp;</th>
          <th width="151">&nbsp;</th>
          <th width="71">&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        <?php for($i=0;$i<$linha3;$i++){?>
        <tr class="table-flag-blue">
          <td><strong><?php echo utf8_encode(mysql_result($rs3,$i,'t.idturma'));?></strong></td>
          <td><strong><?php echo utf8_encode(mysql_result($rs3,$i,'cc.periodo'))."°";?></strong></td>
          <td><strong><?php echo utf8_encode(mysql_result($rs3,$i,'d.sigladisciplina'))." - ".utf8_encode(mysql_result($rs3,$i,'d.descricao'));?></strong></td>
          <td><a class="btn btn-small show-tooltip" title="Atualizar notas/faltas da Av1" href="default.php?pg=view/lancamentos/avaliacao_notas_faltas.php&amp;form=Atualizar Notas/Faltas&disciplina=<?php echo utf8_encode(mysql_result($rs3,$i,'d.descricao')); ?>&idturmas=<?php echo mysql_result($rs3,$i,'t.idturma'); ?>&idturno=<?php echo utf8_encode(mysql_result($rs3,$i,'t.idturno')); ?>&idperiodoletivo=<?php echo utf8_encode(mysql_result($rs3,$i,'t.idperiodoletivo')); ?>&periodoletivo=<?php echo utf8_encode(mysql_result($rs3,$i,'pl.siglaperiodo')); ?>&matriculaprofessor=<?php echo utf8_encode(mysql_result($rs3,$i,'t.matriculaprofessor')); ?>&nome=<?php echo utf8_encode(mysql_result($rs3,$i,'p.nome')); ?>&sigladisciplina=<?php echo utf8_encode(mysql_result($rs3,$i,'t.sigladisciplina')); ?>&siglacurso=<?php echo utf8_encode(mysql_result($rs3,$i,'t.siglacurso')); ?>&tipo=av1"><i class="icon-edit"></i></a><strong>1° AVALIAÇÃO</strong></td>
		  
          <td><a class="btn btn-small show-tooltip" title="Atualizar notas/faltas da Av1" href="default.php?pg=view/lancamentos/avaliacao_notas_faltas.php&amp;form=Atualizar Notas/Faltas&disciplina=<?php echo utf8_encode(mysql_result($rs3,$i,'d.descricao')); ?>&idturmas=<?php echo mysql_result($rs3,$i,'t.idturma'); ?>&idturno=<?php echo utf8_encode(mysql_result($rs3,$i,'t.idturno')); ?>&idperiodoletivo=<?php echo utf8_encode(mysql_result($rs3,$i,'t.idperiodoletivo')); ?>&periodoletivo=<?php echo utf8_encode(mysql_result($rs3,$i,'pl.siglaperiodo')); ?>&matriculaprofessor=<?php echo utf8_encode(mysql_result($rs3,$i,'t.matriculaprofessor')); ?>&nome=<?php echo utf8_encode(mysql_result($rs3,$i,'p.nome')); ?>&sigladisciplina=<?php echo utf8_encode(mysql_result($rs3,$i,'t.sigladisciplina')); ?>&siglacurso=<?php echo utf8_encode(mysql_result($rs3,$i,'t.siglacurso')); ?>&tipo=av2"><i class="icon-edit"></i></a><strong>2° AVALIAÇÃO</strong></td>
          <td><a class="btn btn-small show-tooltip" title="Atualizar notas/faltas da Av1" href="default.php?pg=view/lancamentos/avaliacao_notas_faltas.php&amp;form=Atualizar Notas/Faltas&disciplina=<?php echo utf8_encode(mysql_result($rs3,$i,'d.descricao')); ?>&idturmas=<?php echo mysql_result($rs3,$i,'t.idturma'); ?>&idturno=<?php echo utf8_encode(mysql_result($rs3,$i,'t.idturno')); ?>&idperiodoletivo=<?php echo utf8_encode(mysql_result($rs3,$i,'t.idperiodoletivo')); ?>&periodoletivo=<?php echo utf8_encode(mysql_result($rs3,$i,'pl.siglaperiodo')); ?>&matriculaprofessor=<?php echo utf8_encode(mysql_result($rs3,$i,'t.matriculaprofessor')); ?>&nome=<?php echo utf8_encode(mysql_result($rs3,$i,'p.nome')); ?>&sigladisciplina=<?php echo utf8_encode(mysql_result($rs3,$i,'t.sigladisciplina')); ?>&siglacurso=<?php echo utf8_encode(mysql_result($rs3,$i,'t.siglacurso')); ?>&tipo=as"><i class="icon-edit"></i></a><strong>A.S</strong></td>
        </tr>
        <?php }?>
      </tbody>
    </table>
	
    <?php }elseif($_POST['ok']=="true"){?>
    <div class="alert alert-error">
      <button data-dismiss="alert" class="close">×</button>
      <h4>Mensagem!</h4>
      <p>Nenhum registro encontrado </p>
      <center>
        <h4>&nbsp;</h4>
      </center>
      </div>
    <?php }?>
  </div>
  </fieldset>
  <p>&nbsp;</p>
  </form>