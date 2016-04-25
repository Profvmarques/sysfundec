<?php
require_once('controles/curso.php');
Processo('incluir');
?>
<form class="form-horizontal" id="form" name="form" method="post">
  <div style="margin-left:15px; background:#AECEF4">
    <?php if($linha3>0){  echo "<b>Período Letivo ".utf8_encode(mysql_result($rs3,$i,'pl.siglaperiodo'))."</b>";?>
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
          <th width="99">MATRÍCULA </th>
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
          <td width="44"><a class="btn btn-small show-tooltip" title="Editar" href="default.php?pg=view/turmas/editar.php&amp;form=Atualizar Dados da Turma&amp;idturmas=<?php echo mysql_result($rs3,$i,'t.idturma'); ?>&amp;idturno=<?php echo utf8_encode(mysql_result($rs3,$i,'t.idturno')); ?>&amp;idperiodoletivo=<?php echo utf8_encode(mysql_result($rs3,$i,'t.idperiodoletivo')); ?>&amp;matriculaprofessor=<?php echo utf8_encode(mysql_result($rs3,$i,'t.matriculaprofessor')); ?>&amp;idmatriz=<?php echo utf8_encode(mysql_result($rs3,$i,'t.idmatriz')); ?>&amp;sigladisciplina=<?php echo utf8_encode(mysql_result($rs3,$i,'t.sigladisciplina')); ?>&amp;idgrade_horario=<?php echo utf8_encode(mysql_result($rs3,$i,'t.idgrade_horario')); ?>&amp;siglacurso=<?php echo utf8_encode(mysql_result($rs3,$i,'t.siglacurso')); ?>"><i class="icon-edit"></i></a></td>
          <td width="29"><a href="view/turmas/rel_turmas.php?idturno=<?php echo utf8_encode(mysql_result($rs3,$i,'turno.idturno'));?>&amp;idperiodoletivo=<?php echo utf8_encode(mysql_result($rs3,$i,'pl.idperiodoletivo'));?>&amp;idturma=<?php echo utf8_encode(mysql_result($rs3,$i,'t.idturma'));?>&amp;siglacurso=<?php echo utf8_encode(mysql_result($rs3,$i,'t.siglacurso'));?>" title="" class="btn btn-circle show-tooltip" data-original-title="Imprimir lista de disciplina da turma <?php echo utf8_encode(mysql_result($rs3,$i,'t.idturma'));?>" target="_blank"><i class="icon-print"></i></a></td>
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
  <p>&nbsp;</p>
  <div class="form-actions">
                                  <button type="button" class="btn btn-primary" onClick="validar(document.form);">
                              </i> SALVAR</button>
                                  <button type="button" class="btn" >CANCELAR</button>
                               <input name="ok" type="hidden" id="ok"/></div>
</form>