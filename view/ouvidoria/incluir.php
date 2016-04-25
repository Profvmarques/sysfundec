<?php
require("controles/ouvidoria.php");

Processo('incluir');
?>
<center>
<form class="form-horizontal" id="form" name="form" method="post" enctype="multipart/form-data">

            <div id="consulta_admin">
              <!--<table>
                <tr>
                  <td width="174" height="57"><div id="esquerda">
                      <div id="retorno"></div>
                      <div id="mensagem"></div>
                      <div id="arquivos"></div>
                    </div>
                    <div id="direita">
                      <div id="foto">
                        <button id="botao_enviar_arquivo">Escolher Foto</button>
                      </div>
                    </div></td>
                  <td width="599"></td>
                </tr>
              </table>-->
              <table width="66%" border="0">

                <tr>
                  <td width="10"> Classificação
                    <select name="classificacao" id="classificacao">
                        <option value="" selected="selected">Selecione uma op&ccedil;&atilde;o</option>
                        <?php for($i=0;$i<$linhaConsulta;$i++){?>
                        <option value="<?php echo mysql_result($rs,$i,'idclassificacao');?>"><?php echo utf8_encode(mysql_result($rs,$i,'descricao'));?></option>
                        <?php }?>
                    </select></td>
                  <td width="10"> Categoria
                    <select name="baseconhecimentos" id="baseconhecimentos">
                        <option value="" selected="selected">Selecione uma op&ccedil;&atilde;o</option>
                        <?php for($i=0;$i<$linha;$i++){?>
                        <option value="<?php echo mysql_result($rs1, $i ,'idbaseconhecimentos');?>"><?php echo utf8_encode(mysql_result($rs1 ,$i,'descricao'));?></option>
                        <?php }?>
                    </select></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </table>
              <table width="66%">
                <tr>
                  <td colspan="2">Assunto:
                    <input type="text" name="assunto" size="45" value="" ></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </table>
              <table width="66%">
                <tr>
                  <td width="82">Observa&ccedil;&atilde;o
                    <textarea name="observacao" rows="3" cols="28" id="observacao"><?php echo $_POST['descricao']; ?></textarea></td>
                    
                    <td>
                    	<div id="esquerda" style=" min-height:50px;">
                      <div id="retorno"></div>
                      <div id="mensagem" style="text-align:center;"></div>
                      <div id="arquivos"></div>
                    </div>
                    <div id="direita" style="text-align:center;">
                      <div id="foto">
                        <button id="botao_enviar_arquivo">Escolher Foto</button>
                      </div>
                    </div>
                    </td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><img src="controles/captcha.php" alt="código captcha" /></td>
                  <td><label for="captcha">Digite o c&oacute;digo</label>
                    <input type="text" name="captcha" id="captcha" /></td>
                </tr>
                <tr>
                  <td colspan="2"><div align="center">
                      <input type="button" name="enviar" value="Cadastrar" id="botao_normal" onClick="validar(document.form);">
                      <input type="hidden" name="ok" value=""/>
                    </div></td>
                </tr>
              </table>
              <label></label>
    </div>
  </form>
		  </center>
