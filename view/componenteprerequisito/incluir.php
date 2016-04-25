<?php
require_once('controles/matriz.php');
Processo('incluir');
?>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
 // COMENTÁRIO DESSA FUNÇÃO *********************************
      $(document).ready(function(){
        // Evento change no campo siglacurso  
         $("select[name=siglacurso]").change(function(){
            
			$("select[name=idmatriz]").html('<option value="">Carregando Matriz curricular...</option>');
            // Exibimos o campo sistemas antes de selecionamos o módulo, serve também em caso
			// do usuario ja ter selecionado o tipo e resolveu trocar, com isso limpamos a
			// seleção antiga caso tenha feito.
			// Passando tipo por parametro para a pagina ajax_modulos.php
            $.post("ajax/ajax_matriz.php",
                  {siglacurso:$(this).val()},
                  // Carregamos o resultado acima para o campo marca
				  function(valor){
                     $("select[name=idmatriz]").html(valor);
                  }
                  )
         });
	  });      	  
	   // COMENTÁRIO DESSA FUNÇÃO *********************************
</script>
<form class="form-horizontal" id="form" name="form" method="post">
  <table width="1010">
    <tr>
      <td width="768">&nbsp;</td>
      <td width="230"><a href="default.php?pg=view/matrizcurricular/consulta.php&amp;form=Consulta de Curso"><strong><i class="icon-search"> Consultar Matriz Curricular </i></strong></a> </td>
    </tr>
  </table>
  <table width="932" border="0">
    <tr>
      <td colspan="5">&nbsp;<strong>CURSO</strong></td>
      <td width="709"><select name="siglacurso" class="input-xxlarge" tabindex="1" id="siglacurso" title="O campo curso é obrigatório">
        <option value="">Escolha o curso</option>
        <?php for($i=0;$i<$linha;$i++){?>
        <option value="<?php echo mysql_result($rs,$i,'siglacurso');?>"><?php echo utf8_encode(mysql_result($rs,$i,'descricao'));?></option>
        <?php }?>
      </select></td>
    </tr>
    <tr>
      <td colspan="5">&nbsp;<strong>MATRIZ CURRICULAR </strong></td>
      <td><span class="controls">
        <select name="idmatriz" class="input-medium" id="idmatriz" title="O campo matriz curricular é obrigatório">
          <option value="">Escolha o tipo de curso</option>
          <option value="" selected="selected">Aguardando ...</option>
        </select>
      </span></td>
    </tr>
  </table>
  <table width="1132" border="0">
    <tr>
      <td colspan="5">&nbsp;</td>
      <td><div align="center"><strong>REQUISITO</strong></div></td>
    </tr>
    <tr>
      <td width="144"><div align="center"><strong>SIGLA</strong></div></td>
      <td width="144"><strong>DISCIPLINA</strong></td>
      <td width="144"><div align="center"><strong>CH</strong></div></td>
      <td width="144"><div align="center"><strong>CRÉDITO</strong></div></td>
      <td width="159"><div align="center"><strong>PERÍODO</strong></div></td>
      <td width="371"><strong>DISCIPLINA </strong></td>
    </tr>
    <tr class="linhas">
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <div class="form-actions">
                                  <div align="center">
                                    <button type="button" class="btn btn-primary" onClick="validar(document.form);">
                                    </i> SALVAR</button>
                                    <button type="button" class="btn" >CANCELAR</button>
                                    <input name="ok" type="hidden" id="ok"/>
                                  </div>
  </div>
</form>