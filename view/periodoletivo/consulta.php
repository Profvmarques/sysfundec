<?php
require_once('controles/periodoletivo.php');
Processo('consulta');
?>
<form class="form-horizontal" id="form" name="form" method="post">
<table width="1010">
  <tr>
    <td width="815">&nbsp;</td>
    <td width="183"><a href="default.php?pg=view/periodoletivo/incluir.php&form=Cadastro de Período Letivo"><strong> <i class="icon-plus-sign">  Novo Período Letivo </i> </strong></a></td>
  </tr>
</table>
<br />
<br />

                                <div class="control-group">
                                  <label class="control-label">CURSO</label>
                                  <div class="controls">
                                    <select name="siglacurso" class="input-xxlarge" tabindex="1" id="siglacurso" title="O campo curso é obrigatório">
                                      <option value="">Escolha o curso</option>
                                      <?php for($i=0;$i<$linha2;$i++){?>
                                      <option value="<?php echo mysql_result($rs2,$i,'siglacurso');?>"><?php echo utf8_encode(mysql_result($rs2,$i,'siglacurso'))." - ".utf8_encode(mysql_result($rs2,$i,'descricao'));?></option>
                                      <?php }?>
                                    </select>
                                    <button type="button" onClick="validar(document.form);"> <i class="icon-search"></i></button>
                                  </div>
                                </div>
								<?php if($linha>0){?>
								<table width="100%" class="table table-advance" id="table1">
                                  <thead>
                                    <tr>
                                      <th width="79">Sigla Curso </th>
                                      <th width="136">Período Letivo </th>
                                      <th width="211">Data de Início </th>
                                      <th width="289">Data de Término </th>
                                      <th colspan="3">Ação</th>
                                    </tr>
                                  </thead>
                                  <tbody>
								  <?php for($i=0;$i<$linha;$i++){?>
                                    <tr class="table-flag-blue">
                                      <td><?php echo utf8_encode(mysql_result($rs,$i,'siglacurso'));?></td>
                                      <td><?php echo utf8_encode(mysql_result($rs,$i,'siglaperiodo'));?></td>
                                      <td><?php echo utf8_encode(mysql_result($rs,$i,'dtini'));?></td>
                                      <td><?php echo utf8_encode(mysql_result($rs,$i,'dtfim'));?></td>
                                      <td width="48"><a class="btn btn-small show-tooltip" title="Editar" href="default.php?pg=view/periodoletivo/editar.php&form=Atualizar Cadastro do Período Letivo&id=<?php echo mysql_result($rs,$i,'idperiodoletivo');?>"><i class="icon-edit"></i></a></td>
                                      <td width="162"><a class="btn btn-small show-tooltip" title="Emitir Calendário de Período de Letivo" href="default.php?pg=view/evento_periodo_letivo/consulta.php&form=Lista de Eventos do Período Letivo&siglaperiodo=<?php echo mysql_result($rs,$i,'siglaperiodo');?>&idperiodoletivo=<?php echo mysql_result($rs,$i,'idperiodoletivo');?>"><i class="icon-calendar"></i> <b>Calendário Letivo</b></a></td>
                                      <td width="152"><a class="btn btn-small show-tooltip" title="Cadastro de Eventos do Período Letivo" href="default.php?pg=view/evento_periodo_letivo/incluir.php&form=Novo Cadastro de Eventos do Período Letivo&siglaperiodo=<?php echo mysql_result($rs,$i,'siglaperiodo');?>&idperiodoletivo=<?php echo mysql_result($rs,$i,'idperiodoletivo');?>&siglacurso=<?php echo utf8_encode(mysql_result($rs,$i,'siglacurso'));?>"><i class="icon-save"></i> <b>Cadastrar Evento</b></a></td>
                                    </tr>
									<?php }?>
                                  </tbody>
                                </table>
								
								<br />
								<br />
								 <?php }?>
  <div class="control-group">
    <label class="control-label"></label>
  </div>
                                <center>
  <div class="form-actions">
    <input name="ok" type="hidden" id="ok"/>
  </div>
  
  </center>
</form>