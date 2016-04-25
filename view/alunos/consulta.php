<?php
require_once('controles/alunos.php');
Processo('consulta');
?>
<script>
function aparecerCampo(param){

  if(param=='mat'){
  
   document.getElementById('mat').style.display="block";
   document.getElementById('criterio').className ='input-medium';
   document.getElementById('criterio').title='O campo matrícula é obrigatório';
   document.getElementById('nom').style.display="none";
  
  }else if(param=='nom'){
   document.getElementById('nom').style.display="block";
   document.getElementById('criterio').className ='input-xxlarge';
   document.getElementById('criterio').title='O campo nome é obrigatório';
   document.getElementById('mat').style.display="none";
  }

}
</script>
<form class="form-horizontal" id="form" name="form" method="post">
  <br />
<br />

                                <div style="margin-left:35px">
  ESCOLHA O TIPO DE CONSULTA</div>
										<br /> 
  <div style="margin-left:35px">
										<label class="radio inline">
<input type="radio" value="nome" name="tipo" onclick="aparecerCampo('nom');">
NOME
</label>
<label class="radio inline">
<input type="radio" checked="" value="matricula" name="tipo" onclick="aparecerCampo('mat');">
MATRÍCULA
</label>
  </div>
<br />
<div class="control-group">
 <div style="margin-left:45px; visibility:visible;">
                                                <label for="lastname2" class="control-label" id="mat"><span id="mat">MATRÍCULA&nbsp;</span></label>
												<label for="lastname2" class="control-label" id="nom" style="display:none;"><span>NOME&nbsp;</span></label>
                  <input name="criterio" type="text" id="criterio" placeholder="" title="O campo matrícula é obrigatório" />  <button type="button" onClick="validar(document.form);"> <i class="icon-search"></i></button>
 </div>
 
</div>
		<?php if($linha>0){?>
								<table width="100%" class="table table-advance" id="table1">
                                  <thead>
                                    <tr>
                                      <th width="155">Matrícula</th>
                                      <th width="833"><div align="left">Aluno</div></th>
                                      <th width="88">Ação</th>
                                    </tr>
                                  </thead>
                                  <tbody>
								  <?php for($i=0;$i<$linha;$i++){?>
                                    <tr class="table-flag-blue">
                                      <td><?php echo utf8_encode(mysql_result($rs,$i,'ma.matricula_aluno'));?></td>
                                      <td><?php echo utf8_encode(mysql_result($rs,$i,'p.nome'));?></td>
                                      <td><a title="Visualizar" href="default.php?pg=view/alunos/visualizar.php&form=VISUALIZAÇÃO DOS DADOS DO ALUNO&id=<?php echo mysql_result($rs,$i,'p.idpessoas');?>"><i class="icon-eye-open"></i>Visualizar</a></td>
                                    </tr>
									<?php }?>
                                  </tbody>
                                </table>
										<?php }elseif($_POST['ok']=="true"){?>
										<div class="alert alert-error">
                                            <button data-dismiss="alert" class="close">×</button>
                                            <h4>Mensagem!</h4>
                                            <p>Nenhum registro encontrado <center> <h4><a href="default.php?pg=view/alunos/incluir.php&form=Cadastro de Aluno"><strong> <i class="icon-plus-sign">  Cadastrar novo Aluno</i> </strong></a></h4></center></p>
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
