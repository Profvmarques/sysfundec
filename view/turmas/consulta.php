<?php
require_once('controles/turmas.php');
Processo('consultar');
?>
<script type="text/javascript">
 function visualizarDisciplina() {
 document.getElementById('divturma').style.display='block';
document.getElementById('divturma').style.visibility='visible';
document.getElementById('visualizar').style.visibility='hidden';
document.getElementById('ocultar').style.visibility='visible';
document.getElementById('up').style.visibility='hidden';
document.getElementById('down').style.visibility='visible';

}
function ocultarDiciplina() {
document.getElementById('divturma').style.visibility='hidden';
document.getElementById('idturma').style.visibility='hidden';
document.getElementById('ocultar').style.visibility='hidden';
document.getElementById('visualizar').style.visibility='visible';
}
</script>

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
<style type="text/css">
<!--
.style2 {color: #000000}
.style3 {
	color: #006600;
	font-weight: bold;
}
.style4 {color: #000000; font-weight: bold; }
-->
</style>

<form id="form" name="form" method="post">
<span class="form-actions">
<input name="ok" type="hidden" id="ok"/>
</span>
<table width="1010">
  <tr>
    <td width="817">&nbsp;</td>
    <td width="181"><a href="default.php?pg=view/turmas/incluir.php&form=Cadastrar de Turmas"><strong><i class="icon-plus-sign"> Cadastrar Turmas </i></strong></a> </td>
  </tr>
</table>
<br />
<fieldset style="background: none repeat scroll 0 0 #AECEF4; font-size: 100%; border: 1px solid #000000;" >
<legend style="border: 1px solid #000000; background:#FFFFFF"> TURMAS            </legend>
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
        <button type="button" onClick="validar(document.form);"> <i class="icon-search"><strong> PESQUISA</strong></i></button>
      </center></td>
    </tr>
  </table>
</div>	
<br />
        <br>

<div style="margin-left:15px; background:#AECEF4">
  <?php if($linha3>0){ ?>
  
								<table width="100%" class="table table-advance" id="table1">
                                  <thead>
                                    <tr>
                                      <th width="151"><div align="center"><span class="style2">Cód. Turma </span></div></th>
                                      <th width="164" height="23"><div align="center"><span class="style2">Turno</span></div></th>
                                      <th width="197"><div align="center"><span class="style2">Grade</span></div></th>
                                      <th width="134"><div align="center"><span class="style2">Período</span></div></th>
                                      <th width="236"><span class="style2">Situação</span></th>
                                      <th colspan="2"><span class="style2">Ação</span></th>
                                    </tr>
                                  </thead>
                                  <tbody>
								  <?php for($i=0;$i<$linha3;$i++){?>
                                    <tr class="table-flag-blue">
                                      <td><div align="center"><a href="#" id="visualizar" data-action="collapse" onclick="document.form.divturma.style.visibility='visible'"><i class="icon-chevron-down" id="down"></i> </a><span class="style2"><strong><?php echo utf8_encode(mysql_result($rs3,$i,'t.idturma'));?></strong></span> </div>									  </td>
                                      <td><div align="center"><span class="style2"><strong><?php echo utf8_encode(mysql_result($rs3,$i,'turno.descricao'));?></strong></span></div></td>
                                      <td><div align="center"><span class="style2"><strong><?php echo utf8_encode(mysql_result($rs3,$i,'gh.descricao'));?></strong></span></div></td>
                                      <td><div align="center"><span class="style2"><strong><?php echo utf8_encode(mysql_result($rs3,$i,'cc.periodo'))."°";?></strong></span></div></td>
                                      <td><span class="style2"><strong><?php echo utf8_encode(mysql_result($rs3,$i,'st.descricao'));?></strong></span></td>
                                      <td><a href="view/turmas/rel_turmas.php?idturno=<?php echo utf8_encode(mysql_result($rs3,$i,'turno.idturno'));?>&idperiodoletivo=<?php echo utf8_encode(mysql_result($rs3,$i,'pl.idperiodoletivo'));?>&idturma=<?php echo utf8_encode(mysql_result($rs3,$i,'t.idturma'));?>&siglacurso=<?php echo utf8_encode(mysql_result($rs3,$i,'t.siglacurso'));?>" title="" class="btn btn-circle show-tooltip" data-original-title="Imprimir lista de disciplina da turma <?php echo utf8_encode(mysql_result($rs3,$i,'t.idturma'));?>" target="_blank"><i class="icon-print"></i></a></td>
                                      <td><a class="btn btn-small show-tooltip" title="Editar" href="default.php?pg=view/turmas/editarTurma.php&form=Atualizar Dados da Turma&idturmas=<?php echo mysql_result($rs3,$i,'t.idturma'); ?>&idturno=<?php echo utf8_encode(mysql_result($rs3,$i,'t.idturno')); ?>&idperiodoletivo=<?php echo utf8_encode(mysql_result($rs3,$i,'t.idperiodoletivo')); ?>&idmatriz=<?php echo utf8_encode(mysql_result($rs3,$i,'t.idmatriz')); ?>&idgrade_horario=<?php echo utf8_encode(mysql_result($rs3,$i,'t.idgrade_horario')); ?>&siglacurso=<?php echo utf8_encode(mysql_result($rs3,$i,'t.siglacurso')); ?>"><i class="icon-edit"> Editar Turma</i></a></td>
                                    </tr>
									
                                    <tr class="table-flag-blue" id="divturma">
                                      <td>&nbsp;</td>
                                      <td><div align="center" class="style2"><strong>Sigla</strong></div></td>
                                      <td><span class="style4">Disciplina</span></td>
                                      <td><div align="center" class="style2"><strong>Período</strong></div></td>
                                      <td><span class="style4">Professor</span></td>
                                      <td width="48">&nbsp;</td>
                                      <td width="115">&nbsp;</td>
                                    </tr>
									<?php for($a=0;$a<$count;$a++){
									
									 if($arr[$a]['idturma']==mysql_result($rs3, $i, 't.idturma')){
									?>
                                    <tr class="table-flag-blue" id="divturma">
                                      <td>&nbsp;</td>
                                      <td><div align="center"><span class="style3"><?php echo utf8_encode($arr[$a]['sigla']);?></span></div></td>
                                      <td><span class="style3"><?php echo utf8_encode($arr[$a]['disciplina']);?></span></td>
                                      <td><div align="center"><span class="style3"><?php echo utf8_encode($arr[$a]['periodo']);?></span></div></td>
                                      <td><span class="style3"><?php echo utf8_encode($arr[$a]['professor']);?></span></td>
                                      <td><a class="btn btn-small show-tooltip" title="Editar" href="default.php?pg=view/turmas/editar.php&form=Atualizar Dados da Turma relacionado a Disciplina&idturmas=<?php echo mysql_result($rs3,$i,'t.idturma'); ?>&idturno=<?php echo utf8_encode(mysql_result($rs3,$i,'t.idturno')); ?>&idperiodoletivo=<?php echo utf8_encode(mysql_result($rs3,$i,'t.idperiodoletivo')); ?>&matriculaprofessor=<?php echo utf8_encode($arr[$a]['matriculaprof']); ?>&idmatriz=<?php echo utf8_encode(mysql_result($rs3,$i,'t.idmatriz')); ?>&sigladisciplina=<?php echo  utf8_encode($arr[$a]['sigla']); ?>&idgrade_horario=<?php echo utf8_encode(mysql_result($rs3,$i,'t.idgrade_horario')); ?>&siglacurso=<?php echo utf8_encode(mysql_result($rs3,$i,'t.siglacurso')); ?>"><i class="icon-edit"></i></a></td>
                                      <td>&nbsp;</td>
                                    </tr>
									
									<?php 
									}
									}?>
									
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