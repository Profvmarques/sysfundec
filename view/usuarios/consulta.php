<?php
require_once('controles/curso.php');
Processo('consulta');
?>
<form class="form-horizontal" id="form" name="form" method="post">
<table width="1010">
  <tr>
    <td width="834">&nbsp;</td>
    <td width="164"><a href="default.php?pg=view/curso/incluir.php&form=Cadastro de Curso"><strong> <i class="icon-plus-sign">  Novo Curso </i> </strong></a></td>
  </tr>
</table>
<br />
<br />

                                <div class="control-group">
                                  <label class="control-label">Curso </label>
                                  <div class="controls">
                                    <input name="descricao" type="text" class="input-xlarge" id="descricao" placeholder="" title="O curso é obrigatório" />
									
									<button type="button" onClick="validar(document.form);"> <i class="icon-search"></i></button>
                                  </div>
                                </div>
								<table width="100%" class="table table-advance" id="table1">
                                  <thead>
                                    <tr>
                                      <th width="248">Sigla</th>
                                      <th width="585">Curso</th>
                                      <th width="80">Ação</th>
                                    </tr>
                                  </thead>
                                  <tbody>
								  <?php for($i=0;$i<$linha;$i++){?>
                                    <tr class="table-flag-blue">
                                      <td><?php echo utf8_encode(mysql_result($rs,$i,'siglacurso'));?></td>
                                      <td><?php echo utf8_encode(mysql_result($rs,$i,'descricao'));?></td>
                                      <td><a class="btn btn-small show-tooltip" title="Editar" href="default.php?pg=view/curso/editar.php&form=Atualizar Cadastro de Curso&id=<?php echo mysql_result($rs,$i,'siglacurso');?>"><i class="icon-edit"></i></a></td>
                                    </tr>
									<?php }?>
                                  </tbody>
                                </table>
								<br />
								<br />
  <div class="control-group">
    <label class="control-label"></label>
  </div>
                                <div class="control-group"><div class="control-group"></div>
                                  <div class="controls"></div>
  </div>
  <center>
  <div class="form-actions">
                                  <button type="button" class="btn btn-primary" onClick="validar(document.form);">
                              </i> SALVAR</button>
                                  <button type="button" class="btn" >CANCELAR</button>
                               <input name="ok" type="hidden" id="ok"/></div>
  </center>
</form>