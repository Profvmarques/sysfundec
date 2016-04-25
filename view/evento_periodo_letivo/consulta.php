<?php
require_once('controles/eventoperiodoletivo.php');
Processo('consulta');
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
<table width="655" border="0" align="center">
  <tr>
    <td width="191"><strong>CURSO </strong></td>
    <td><select name="siglacurso" class="input-xxlarge" id="siglacurso" title="O campo curso é obrigatório">
      <option value="">Escolha o curso</option>
      <?php for($i=0;$i<$linha2;$i++){?>
      <option value="<?php echo mysql_result($rs2,$i,'siglacurso');?>"><?php echo utf8_encode(mysql_result($rs2,$i,'descricao'));?></option>
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
    <td colspan="2"><center>
      <button type="button" onclick="validar(document.form);"> <i class="icon-search"> PESQUISA</i></button>
      <span class="form-actions">
      <input name="ok" type="hidden" id="ok"/>
      </span>
    </center></td>
  </tr>
</table>
<br />
<?php if($linha>0 && $_POST['ok']=='true'){?>
<table width="1010">
  <tr>
    <td width="594">&nbsp;</td>
    <td width="404"><a href="default.php?pg=view/evento_periodo_letivo/incluir.php&amp;form=Novo Cadastro de Eventos do Período Letivo&siglacurso=<?php echo $_POST['siglacurso'];?>&idperiodoletivo=<?php echo $_POST['idperiodoletivo'];?>"><strong> <i class="icon-plus-sign"> Cadastrar novo Evento do período letivo </i> </strong></a> </td>
  </tr>
</table>
<br />
<fieldset style="background: none repeat scroll 0 0 #AECEF4;
    font-size: 100%; border: 1px solid #000000;">
<legend style="border: 1px solid #000000; background:#FFFFFF">            Relação de cadastro dos Eventos do período letivo <b><?php echo utf8_encode(@mysql_result($rs,0,'pl.siglaperiodo')); ?></b></legend>
        <br>

<div style="margin-left:15px; background:#AECEF4">
  <table width="100%" class="table table-advance" id="table1">
              <thead>
                <tr>
                  <th width="95">Sigla Curso </th>
                  <th width="280">Atividade</th>
                  <th width="155">Data de In&iacute;cio </th>
                  <th width="146">Data de T&eacute;rmino </th>
                  <th width="237">Tipo de Evento  </th>
                  <th colspan="2">A&ccedil;&atilde;o</th>
                </tr>
              </thead>
              <tbody>
                <?php for($i=0;$i<$linha;$i++){?>
                <tr class="table-flag-blue">
                  <td><?php echo utf8_encode(mysql_result($rs,$i,'pl.siglacurso'));?></td>
                  <td><?php echo utf8_encode(mysql_result($rs,$i,'epl.descricao'));?></td>
                  <td><?php echo utf8_encode(mysql_result($rs,$i,'inicio'));?></td>
                  <td><?php echo utf8_encode(mysql_result($rs,$i,'final'));?></td>
                  <td><?php echo utf8_encode(mysql_result($rs,$i,'te.descricao'));?></td>
                  <td width="62"><a class="btn btn-small show-tooltip" title="Editar" href="default.php?pg=view/evento_periodo_letivo/editar.php&form=Atualizar Cadastro do Período Letivo&id=<?php echo mysql_result($rs,$i,'epl.idevento_periodo_letivo');?>&siglacurso=<?php echo utf8_encode(mysql_result($rs,$i,'c.siglacurso'))." - ".utf8_encode(mysql_result($rs,$i,'c.descricao'));?>&idperiodoletivo=<?php echo mysql_result($rs,$i,'epl.idperiodoletivo');?>"><i class="icon-edit"></i></a></td>
                  <td width="68"><a class="btn btn-small show-tooltip" title="Editar" href="#" onclick="document.form.ok.value='excluir',submit();"><i class="icon-trash"></i></a></td>
                </tr>
                <?php }?>
              </tbody>
  </table>
			
</div>
</fieldset>
</div>
<?php }elseif($_POST['ok']=='true'){
?>
										<div class="alert alert-error">
                                            <button data-dismiss="alert" class="close">×</button>
                                            <h4>Mensagem!</h4>
                                            <p>Nenhum registro encontrado <center> <h4><a href="default.php?pg=view/evento_periodo_letivo/incluir.php&form=Novo Cadastro de Eventos do Período Letivo&siglacurso=<?php echo $_POST['siglacurso'];?>&idperiodoletivo=<?php echo $_POST['idperiodoletivo'];?>"><strong> <i class="icon-plus-sign">  Cadastrar novo Evento do período letivo </i> </strong></a></h4></center></p>
                                        </div>
										<?php }?>
								<br />
								<br />
</form>