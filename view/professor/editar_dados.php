<?php
require_once('controles/professor.php');
Processo('editarDados');
?>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
$(function () {
	function removeCampo() {
		$(".removerCampo").unbind("click");
		$(".removerCampo").bind("click", function () {
			if($("tr.linhas").length > 1){
				$(this).parent().parent().remove();
			}
		});
	}
	//removeCampo();
	$(".adicionarCampo").click(function () {
		novoCampo = $("tr.linhas:first").clone();
		novoCampo.find("input").val("");
		novoCampo.insertAfter("tr.linhas:last");
		removeCampo();
	});
});
</script>
<form class="form-horizontal" id="form" name="form" method="post">
  <table width="1010">
    <tr>
      <td width="846">&nbsp;</td>
      <td width="152"><a href="default.php?pg=view/professor/consulta.php&form=Consulta de Professor"><strong><i class="icon-search"> Consultar Professor </i></strong></a> </td>
    </tr>
  </table>

                                
  <div class="form-wizard" id="form-wizard-2">
                                      <ul class="row-fluid steps steps-fill">
                                         <li class="span3 active">
                                            <a href="#tab2-1" data-toggle="tab" class="step active">
                                                <span class="number">1</span>
                                                <span class="desc"><i class="icon-ok"></i> Dados do professor</span>                                            </a></li>
										
								        <li class="span3">
                                            <a href="#tab2-4" data-toggle="tab" class="step">
                                                <span class="number">2</span>
                                                <span class="desc"><i class="icon-ok"></i> Dados de Acesso</span>                                            </a>										</li>
  </ul>
                                      <div class="progress progress-primary progress-striped">
                                         <div class="bar"></div>
                                      </div>
                                      <div class="tab-content">
                                        <div class="tab-pane active" id="tab2-1">
                                            <div class="control-group">
                                                 <label  class="control-label">NOME</label>
                                               <div class="controls">
                                                  <input name="nome" type="text" class="input-xxlarge" id="nome" placeholder="" value="<?php echo utf8_encode(mysql_result($r,0,'p.nome')); ?>"/>
                                              </div>
                                            </div>
                                            <div style="margin-left:auto">
                                                <label for="lastname2" class="control-label"> SEXO &nbsp;</label>
                                                  <select name="sexo" class="input-mini" id="sexo" title="O campo sexo é obrigatório">
                                                    <option value="">Escolha o Sexo</option>
                                                    <option value="M">M</option>
                                                    <option value="F">F</option>
                                              </select>
												  | NASCIMENTO 
                                                  <input name="nascimento" type="text" class="input-medium" id="nascimento" onkeypress="return Mascaras_Format(document.form,'nascimento','99/99/9999',event);" size="20" maxlength="10" onblur="return valida_data1(document.form.nascimento,5);" value="<?php echo mysql_result($r,0,'dtnasc'); ?>"/>
                                                  <span class="textos_red"><a title="Calendário" onclick="selectDate('form','nascimento')"><img src="img/calendar.gif" width="18" height="18" /></a></span>
                                              | NACIONALIDADE  
												  <input name="nacionalidade" type="text" class="input-xlarge" id="nacionalidade" placeholder="" value="<?php echo mysql_result($r,0,'p.nacionalidade'); ?>" />
												
                                            </div>
											<br/>
										  <div style="margin-left:35px">
                                                <label for="lastname2" class="control-label"> ENDEREÇO &nbsp;</label>
                                                  
                                                  <input name="endereco" type="text" class="input-xlarge" id="endereco" placeholder="" value="<?php echo mysql_result($r,0,'p.endereco'); ?>"/>
                                                  
											  | TELEFONE 
                                              
                                              <input name="telefone" type="text" class="input-medium" id="telefone" title="Campo telefone &eacute; obrigat&oacute;rio" onkeypress="return Mascaras_Format(document.form,'telefone','(99) 9999-9999',event);" value="<?php echo mysql_result($r,0,'p.telefone'); ?>" maxlength="15" placeholder="" />
XX99999999 
                                             
                                        </div>
										<br /> 
										 <div style="margin-left:112px">
                                               CELULAR 
                                                <input name="celular" type="text" class="input-medium" id="celular" title="Campo celular &eacute; obrigat&oacute;rio" onkeypress="return Mascaras_Format(document.form,'celular','(99) 99999-9999',event);" value="<?php echo mysql_result($r,0,'p.celular'); ?>" maxlength="15" placeholder="" />
XX99999999 
| E-MAIL  
                                                <input name="email" type="text" class="input-xlarge" id="email" placeholder="" data-rule-email="true" data-rule-required="true" value="<?php echo mysql_result($r,0,'p.email'); ?>"/><span for="email" class="help-inline">This field is required.</span>
</div>

						<br /> 
<div style="margin-left:112px">						
| MUNICÍPIO &nbsp;
<input name="cidade" type="text" class="input-xlarge" id="cidade" placeholder="" value="<?php echo mysql_result($r,0,'p.cidade'); ?>"/> 
| CEP &nbsp;
<input name="cep" type="text" class="input-medium" id="cep" placeholder="" value="<?php echo mysql_result($r,0,'p.cep'); ?>"/> 
| ESTADO &nbsp;<span style="margin-left:auto">
<select title="O campo uf é obrigatório" id="uf" class="input-mini" name="uf">
              <option class="textos" value="">Uf</option>
              <option class="textos" value="AC">AC</option>
              <option class="textos" value="AL">AL</option>
              <option class="textos" value="AP">AP</option>
              <option class="textos" value="AM">AM</option>
              <option class="textos" value="BA">BA</option>
              <option class="textos" value="CE">CE</option>
              <option class="textos" value="DF">DF</option>
              <option class="textos" value="GO">GO</option>
              <option class="textos" value="ES">ES</option>
              <option class="textos" value="MA">MA</option>
              <option class="textos" value="MT">MT</option>
              <option class="textos" value="MS">MS</option>
              <option class="textos" value="MG">MG</option>
              <option class="textos" value="PA">PA</option>
              <option class="textos" value="PB">PB</option>
              <option class="textos" value="PR">PR</option>
              <option class="textos" value="PE">PE</option>
              <option class="textos" value="PI">PI</option>
              <option class="textos" value="RJ">RJ</option>
              <option class="textos" value="RN">RN</option>
              <option class="textos" value="RS">RS</option>
              <option class="textos" value="RO">RO</option>
              <option class="textos" value="RR">RR</option>
              <option class="textos" value="SP">SP</option>
              <option class="textos" value="SC">SC</option>
              <option class="textos" value="SE">SE</option>
              <option class="textos" value="TO">TO</option>
            </select>
</span></div>
<br />
										 <div style="margin-left:112px">
                                               TITULAÇÃO 
                                                 
                                                 <select name="idtitulacao" class="input-medium" id="idtitulacao" title="O campo titulação é obrigatório">
                                                   <option value="">Escolha a Titulação</option>
                                                   <?php for($i=0;$i<$linha;$i++){?>
                                                    <option value="<?php echo utf8_encode(mysql_result($rs,$i,'t.idtitulacao'));?>"><?php echo mysql_result($rs,$i,'t.descricao');?></option>
                                                   <?php }?>
                                                 </select>
                                                
XX99999999 
| CV LATTES &nbsp;<input name="cvlattes" type="text" class="input-xlarge" id="cvlattes" placeholder="" value="<?php echo mysql_result($r,0,'prof.cvlattes'); ?>"/>
</div>
<br/>
 <div style="margin-left:112px">
                                               NOME DE GUERRA 
                                                 
                                                 <input name="nome_guerra" type="text" class="input-medium" id="nome_guerra" placeholder="" value="<?php echo mysql_result($r,0,'prof.nome_guerra'); ?>"/>
                                                
XX99999999 
| COR DE FUNDO &nbsp;<input name="corfundo" type="text" class="input-xlarge" id="corfundo" placeholder="" value="<?php echo mysql_result($r,0,'prof.corfundo'); ?>" />
</div>
											
                                        </div>
										
										<div class="tab-pane" id="tab2-4">
                                            <div class="control-group">
                                                <label for="country2" class="control-label">LOGIN</label>
                                                <div class="controls">
                                                    <input type="text" name="login" id="login" class="input-xlarge" value="<?php echo mysql_result($r,0,'u.login'); ?>">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label for="city2" class="control-label">SENHA</label>
                                                <div class="controls">
                                                    <input type="password" name="senha" id="senha" class="input-xlarge" title="O campo senha é obrigatório">
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                     </div>
                                           
  </div>					 
                                     </div>
									 
									 
								   
                              
                                   <div class="form-actions">
                                     <div align="center">
                                       <button type="button" class="btn btn-primary" onClick="validar(document.form);">
                                       </i> SALVAR</button>
                                       <button type="button" class="btn" >CANCELAR</button>
                                       <input name="ok" type="hidden" id="ok"/>
                                     </div>
  </div>
</form>
<script>
document.form.sexo.value='<?php echo mysql_result($r,0,'p.sexo'); ?>';
document.form.uf.value='<?php echo mysql_result($r,0,'p.uf'); ?>';
document.form.idtitulacao.value='<?php echo mysql_result($r,0,'prof.idtitulacao'); ?>';
<?php for($i=0;$i<$ln2;$i++){?>
document.form.idfuncao<?php echo $i;?>.value='<?php echo mysql_result($r2,0,'af.idfuncao'); ?>';
<?php } ?>
</script>