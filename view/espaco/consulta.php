<?php
require_once('controles/espaco.php');
Processo('consulta');
?>
<form class="form-horizontal" id="form" name="form" method="post">
<table width="1010">
  <tr>
    <td width="815">&nbsp;</td>
    <td width="183"><a href="default.php?pg=view/espaco/incluir.php&form=Cadastro de Espaço"><strong> <i class="icon-plus-sign">  Novo Espaço </i> </strong></a></td>
  </tr>
</table>
<br />
<br />
<?php if($linha>0){?>
<table width="100%" class="table table-advance" id="table1">
                                  <thead>
                                    <tr>
                                      <th width="406">Descrição </th>
                                      <th width="430">Capacidade</th>
                                      <th width="257">Ação</th>
                                    </tr>
                                  </thead>
                                  <tbody>
								  <?php for($i=0;$i<$linha;$i++){?>
                                    <tr class="table-flag-blue">
                                      <td><?php echo utf8_encode(mysql_result($rs,$i,'descricao'));?></td>
                                      <td><?php echo utf8_encode(mysql_result($rs,$i,'capacidade'));?></td>
                                      <td><a class="btn btn-small show-tooltip" title="Editar" href="default.php?pg=view/espaco/editar.php&form=Atualizar Cadastro do Espaço&id=<?php echo mysql_result($rs,$i,'idespaco');?>"><i class="icon-edit"></i><b>Editar espaço</b></a></td>
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