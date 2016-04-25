<?php
require_once('controles/relatorio.php');
Processo('consultarMatriz');
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
<style type="text/css">
<!--
.style2 {color: #000000}
.style3 {
	color: #006600;
	font-weight: bold;
}
-->
</style>

<form id="form" name="form" method="post">
<span class="form-actions">
<input name="ok" type="hidden" id="ok"/>
</span>
<table width="1010">
  <tr>
    <td width="771">&nbsp;</td>
    <td width="227"><a href="default.php?pg=view/matrizcurricular/incluir.php&form=Cadastro de Matriz Curricular"><strong><i class="icon-plus-sign"> Cadastrar Matriz curricular </i></strong></a> </td>
  </tr>
</table>
<br />
<fieldset style="background: none repeat scroll 0 0 #AECEF4; font-size: 100%; border: 1px solid #000000;" >
<legend style="border: 1px solid #000000; background:#FFFFFF"> MATRIZ CURRICULAR           </legend>
        <br>

<div style="margin-left:15px; background:#AECEF4">
  <table width="690" border="0" align="center">
    <tr>
      <td width="188" class="control-group"><label class="control-label"><strong>CURSO</strong></label></td>
      <td width="492"><span class="controls">
        <select name="siglacurso" class="input-xxlarge" id="siglacurso" title="O campo curso é obrigatório">
          <option value="">Escolha o curso</option>
          <?php for($i=0;$i<$linha;$i++){?>
          <option value="<?php echo mysql_result($rs,$i,'siglacurso');?>"><?php echo utf8_encode(mysql_result($rs,$i,'descricao'));?></option>
          <?php }?>
        </select>
      </span></td>
    </tr>
    <tr>
      <td width="188" class="control-group"><label class="control-label"><strong>MATRIZ CURRICULAR </strong></label></td>
      <td><span class="controls">
        <select name="idmatriz" class="input-xxlarge" id="idmatriz" title="O campo matriz curricular é obrigatório">
          <option value="">Escolha o tipo de curso</option>
          <option value="" selected="selected">Aguardando ...</option>
        </select>
      </span></td>
    </tr>
    <tr>
      <td colspan="2" class="control-group"><center>
          <button type="button" onclick="validar(document.form);"> <i class="icon-search"><strong> PESQUISA</strong></i></button>
      </center></td>
    </tr>
  </table>
</div>	
<br />

        <br>

<div style="margin-left:15px; background:#AECEF4">
<?php if($linha3>0){?>
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
<?php }?>

										<?php if($_POST['ok']=="true" && $linha3==0){?>
										<div class="alert alert-error">
                                            <button data-dismiss="alert" class="close">×</button>
                                            <h4>Mensagem!</h4>
                                            <p>Nenhum registro encontrado <center> <h4>&nbsp;</h4>
                                            </center>
										</div>
										<?php }?>
</div>	
</form>