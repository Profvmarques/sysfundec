<?php
require_once('controles/atividade_frequencia.php');
Processo('consultar');
?>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
 // COMENTÁRIO DESSA FUNÇÃO *********************************
      $(document).ready(function(){
        // Evento change no campo siglacurso  
         $("select[name=idturno]").change(function(){
            
			$("select[name=idturma]").html('<option value="">Carregando Turma...</option>');
            // Exibimos o campo sistemas antes de selecionamos o módulo, serve também em caso
			// do usuario ja ter selecionado o tipo e resolveu trocar, com isso limpamos a
			// seleção antiga caso tenha feito.
			// Passando tipo por parametro para a pagina ajax_modulos.php
            $.post("ajax/ajax_turma.php",
                  {idturno:$(this).val(),idperiodoletivo:$(idperiodoletivo).val()},
                  // Carregamos o resultado acima para o campo marca
				  function(valor){
                     $("select[name=idturma]").html(valor);
                  }
                  )
         });
	  });      	  
	   // COMENTÁRIO DESSA FUNÇÃO *********************************
</script>

<script type="text/javascript">
 // COMENTÁRIO DESSA FUNÇÃO *********************************
      $(document).ready(function(){
        // Evento change no campo siglacurso  
         $("select[name=idturma]").change(function(){
            
			$("select[name=sigladisciplina]").html('<option value="">Carregando disciplina...</option>');
            // Exibimos o campo sistemas antes de selecionamos o módulo, serve também em caso
			// do usuario ja ter selecionado o tipo e resolveu trocar, com isso limpamos a
			// seleção antiga caso tenha feito.
			// Passando tipo por parametro para a pagina ajax_modulos.php
            $.post("ajax/ajax_disciplina.php",
                  {idturma:$(this).val(),idperiodoletivo:$(idperiodoletivo).val()},
                  // Carregamos o resultado acima para o campo marca
				  function(valor){
                     $("select[name=sigladisciplina]").html(valor);
                  }
                  )
         });
	  });      	  
	   // COMENTÁRIO DESSA FUNÇÃO *********************************
</script>
<style type="text/css">
<!--
.style4 {color: #006600}
.style5 {font-size: large}
-->
</style>

<form id="form" name="form" method="post">
<span class="form-actions">
<input name="ok" type="hidden" id="ok"/>
</span>
<input name="idturnoh" type="hidden" id="idturnoh" value="<?php echo $_POST['idturno'];?>" />
<input name="idturmah" type="hidden" id="idturmah" value="<?php echo $_POST['idturma'];?>"/>
<input name="sigladisciplinah" type="hidden" id="sigladisciplinah" value="<?php echo $_POST['sigladisciplina'];?>" />
<input name="idperiodoletivoh" type="hidden" id="idperiodoletivoh" value="<?php echo $_POST['idperiodoletivo'];?>" />
<br />
<fieldset style="background: none repeat scroll 0 0 #AECEF4; font-size: 100%; border: 1px solid #000000;" >
<legend style="border: 1px solid #000000; background:#FFFFFF"> LANÇAMENTO DE FREQUÊNCIA           </legend>
        <br>

<div style="margin-left:15px; background:#AECEF4">
  <table width="690" border="0" align="center">
    <tr>
      <td width="188" class="control-group"><label class="control-label"><strong>PERÍODO LETIVO </strong></label></td>
      <td><span class="controls">
        <select name="idperiodoletivo" class="input-medium" tabindex="1" id="idperiodoletivo" title="O campo período letivo é obrigatório">
                    <option value="">Escolha o periodo Letivo</option>
          <?php for($i=0;$i<$linha;$i++){?>
          <option value="<?php echo mysql_result($rs,$i,'idperiodoletivo');?>"><?php echo utf8_encode(mysql_result($rs,$i,'siglaperiodo'));?></option>
          <?php }?>
        </select>
      </span></td>
    </tr>
    <tr>
      <td class="control-group"><strong>TURNO</strong></td>
      <td class="control-group"><span class="controls">
        <select name="idturno" class="input-medium" tabindex="1" id="idturno" title="O campo turno é obrigatório">
          <option value="">Escolha o Turno</option>
          <?php for($i=0;$i<$linha2;$i++){?>
          <option value="<?php echo mysql_result($rs2,$i,'idturno');?>"><?php echo utf8_encode(mysql_result($rs2,$i,'descricao'));?></option>
          <?php }?>
        </select>
      </span></td>
    </tr>
    <tr>
      <td width="188" class="control-group"><label class="control-label"><strong>TURMA</strong></label></td>
      <td width="492"><span class="controls">
        <select name="idturma" class="input-mini" id="idturma" title="O campo turma é obrigatório">
                    <option value="" selected="selected">Aguardando ...</option>
        </select>
      </span></td>
    </tr>
    <tr>
      <td width="188" class="control-group"><label class="control-label"><strong>DISCIPLINA  </strong></label></td>
      <td><span class="controls">
        <select name="sigladisciplina" class="input-xxlarge" id="sigladisciplina" title="O campo disciplina é obrigatório">
          <option value="">Escolha a disciplina</option>
          <option value="" selected="selected">Aguardando ...</option>
        </select>
      </span></td>
    </tr>
    <tr>
      <td colspan="2" class="control-group"><center>
        <button type="button" onClick="document.form.ok.value='consulta'; submit();"> <i class="icon-search"><strong> PESQUISA</strong></i></button>
      </center></td>
    </tr>
  </table>
</div>	
<br />
        <br>

<div style="margin-left:15px; background:#AECEF4">
<?php if($linha3>0){?>
  <table width="1014" border="1" bordercolor="#000000" >
    <tr>
      <th width="224"><div align="center" class="style5">REFERENTE AO PERÍODO LETIVO: <span class="style4"><?php echo utf8_encode(mysql_result($rs3,0,'pl.siglaperiodo'));?></span></div></th>
      </tr>
    <tr>
      <th class="table table-advance"><div align="left">TURMA: <span class="style4"><?php echo utf8_encode(mysql_result($rs3,0,'t.idturma'));?> </span> | DISCIPLINA: <span class="style4"><?php echo utf8_encode(mysql_result($rs3,0,'d.sigladisciplina')." - ".mysql_result($rs3,0,'d.descricao'));?></span> | PROFESSOR: <span class="style4"><?php echo utf8_encode($prof);?></span> </div></th>
      </tr>
    <tr>
      <th class="table table-advance"><div align="left"></div></th>
      </tr>
    <tr>
      <th class="table table-advance"><div align="left">DATA<span style="margin-left:auto">
:        
      <input name="data_freq" type="text" class="input-medium" id="data_freq" onkeypress="return Mascaras_Format(document.form,'data_freq','99/99/9999',event);" size="20" maxlength="10" onblur="return valida_data1(document.form.data_freq,5);" value="<?php echo date('d/m/Y'); ?>"  title="O campo data da frequência / atividade acadêmica é obrigatório"/>
        <span class="textos_red"><a title="Calendário" onclick="selectDate('form','data_freq')"><img src="img/calendar.gif" width="18" height="18" /></a></span></span> | ATIVIDADE ACADÊMICA: 
        <textarea name="atividade" rows="3" class="span6" id="atividade" title="O campo atividade é obrigatório"></textarea>
      </div> </th>
      </tr>
  </table>
  <BR />
  <p align="center">
    <button type="button" class="btn btn-primary" onClick="validar(document.form);">
                                       </i> SALVAR DADOS DA FREQUÊNCIA / ATIVIDADE ACADÊMICA </button>
  </p>
  <table width="73%" align="center" class="table table-advance" id="table1">
                                  <thead>
                                    <tr>
                                      <th width="114"><input type="checkbox">
                                      PRESENÇA</th>
                                      <th width="150">MATRÍCULA</th>
                                      <th width="506">NOME</th>
                                    </tr>
                                  </thead>
                                  <tbody>
								  <?php for($i=0;$i<$linha;$i++){?>
                                    <tr class="table-flag-blue">
                                      <td width="114"><input name="ch<?php echo $i;?>" type="checkbox" id="ch<?php echo $i;?>"></td>
                                      <td><?php echo utf8_encode(mysql_result($rs3,$i,'ma.matricula_aluno'));?></td>
                                      <td><?php echo utf8_encode(mysql_result($rs3,$i,'p.nome'));?>
                                      <input name="matricula<?php echo $i;?>" type="hidden" id="matricula<?php echo $i;?>" value="<?php echo utf8_encode(mysql_result($rs3,$i,'ma.matricula_aluno'));?>" /></td>
                                    </tr>
									<?php }?>
                                  </tbody>
  </table> 
  <BR />
  <p align="center"><button type="button" class="btn btn-primary" onClick="validar(document.form);">
                                       </i>SALVAR DADOS DA FREQUÊNCIA / ATIVIDADE ACADÊMICA </button>

										<?php }elseif($_POST['ok']=="true" && $linha3==0){?>
	<div class="alert alert-error">
                                            <button data-dismiss="alert" class="close">×</button>
                                            <h4>Mensagem!</h4>
                                            <p>Nenhum registro encontrado <center> <h4>&nbsp;</h4>
                                            </center>
	</div>
										<?php }?>
</div>	
</form>