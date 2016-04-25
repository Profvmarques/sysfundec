<?php
require_once('controles/funcionarios.php');
Processo('consulta');
?>

<form class="form-horizontal" id="form" name="form" method="post">
  <br />
<br />
<br />
<br />
<div class="control-group">
 <div style="margin-left:45px; visibility:visible;">
                                                <label for="lastname2" class="control-label" id="mat"><span id="mat">NOME&nbsp;</span></label>
												<label for="lastname2" class="control-label" id="nom" style="display:none;"><span>NOME&nbsp;</span></label>
                  <input name="criterio" type="text" id="criterio" placeholder="" title="O campo nome é obrigatório" class="input-xxlarge" />  <button type="button" onClick="validar(document.form);"> <i class="icon-search"></i></button>
 </div>
 
</div>
		<?php if($linha>0){?>
								<table width="100%" class="table table-advance" id="table1">
                                  <thead>
                                    <tr>
                                      <th width="624">Funcionário</th>
                                      <th width="360">Função</th>
                                      <th width="92">Ação</th>
                                    </tr>
                                  </thead>
                                  <tbody>
								  <?php for($i=0;$i<$linha;$i++){?>
                                    <tr class="table-flag-blue">
                                      <td><?php echo utf8_encode(mysql_result($rs,$i,'p.nome'));?></td>
                                      <td><?php echo utf8_encode(mysql_result($rs,$i,'fun.funcao'));?></td>
                                      <td><a title="Visualizar" href="default.php?pg=view/funcionarios/visualizar.php&form=VISUALIZAÇÃO DOS DADOS DO FUNCIONÁRIO DO APOIO ADMINISTRATIVO&id=<?php echo mysql_result($rs,$i,'p.idpessoas');?>"><i class="icon-eye-open"></i>Visualizar</a></td>
                                    </tr>
									<?php }?>
                                  </tbody>
                                </table>
										<?php }elseif($_POST['ok']=="true"){?>
										<div class="alert alert-error">
                                            <button data-dismiss="alert" class="close">×</button>
                                            <h4>Mensagem!</h4>
                                            <p>Nenhum registro encontrado <center> <h4><a href="default.php?pg=view/funcionarios/incluir.php&form=Cadastro de Funcionário do Apoio Administrativo"><strong> <i class="icon-plus-sign">  Cadastrar novo Funcionário do Apoio Administrativo </i> </strong></a></h4>
                                            </center></p>
                                        </div>
										<?php }?>
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
    <input name="ok" type="hidden" id="ok"/>
  </div>
  </center>
</form>
