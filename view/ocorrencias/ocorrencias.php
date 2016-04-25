<?php
require_once('controles/ocorrencias.php');
Processo('incluir');
?>
<form class="form-horizontal" id="form" name="form" method="post">
<?php if($linha>0){?>
  <table width="73%" class="table table-advance" id="table1">
                                  <thead>
                                    <tr>
                                      <th width="36"><input type="checkbox"></th>
                                      <th width="118">Data / Hora </th>
                                      <th width="379">Descrição </th>
                                      <th width="266">Funcionalidade</th>
                                    </tr>
                                  </thead>
                                  <tbody>
								  <?php for($i=0;$i<$linha;$i++){?>
                                    <tr class="table-flag-blue">
                                      <td width="36"><input name="ch<?php echo $i;?>" type="checkbox" id="ch<?php echo $i;?>"></td>
                                      <td><?php echo utf8_encode(mysql_result($rs,$i,'dh'));?></td>
                                      <td><?php echo utf8_encode(mysql_result($rs,$i,'descricao'));?></td>
                                      <td><?php echo utf8_encode(mysql_result($rs,$i,'funcionalidade'));?></td>
                                    </tr>
									<?php }?>
                                  </tbody>
  </table> 
   <center>
  <div class="form-actions">
                                  <button type="button" class="btn btn-primary" onClick="validar(document.form);">
                              </i> VALIDAR</button>
                                
                               <input name="ok" type="hidden" id="ok"/></div>
  </center>
								<?php }else{?>
										<div class="alert alert-error">
                                            <button data-dismiss="alert" class="close">×</button>
                                            <h4>Mensagem!</h4>
                                            <p>Não há ocorrências <center>
                                        </div>
										<?php }?>
  <div class="control-group">
    <label class="control-label"></label>
  </div>
                                <div class="control-group"><div class="control-group"></div>
                                  <div class="controls"></div>
  </div>

</form>