<?php
require_once('controles/professor.php');
Processo('editar');
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
      <td width="152"><a href="default.php?pg=view/adm_modulos/consulta.php&amp;form=Consulta de Módulos"><strong><i class="icon-search"> Consultar Professor </i></strong></a> </td>
    </tr>
  </table>

                                
  <div class="form-wizard" id="form-wizard-2">
                                      <ul class="row-fluid steps steps-fill">
                                         <li class="span3">
                                            <a href="#tab2-1" data-toggle="tab" class="step active">
                                                <span class="number">1</span>
                                                <span class="desc"><i class="icon-ok"></i> Dados do professor</span>                                            </a>                                         
										</li>
										
										      <li class="span3">
                                            <a href="#tab2-2" data-toggle="tab" class="step">
                                                <span class="number">2</span>
                                                <span class="desc"><i class="icon-ok"></i> Matrícula(s)</span>                                            </a>                                         
	</li>
										
                                         <li class="span3">
                                            <a href="#tab2-3" data-toggle="tab" class="step">
                                                <span class="number">3</span>
                                                <span class="desc"><i class="icon-ok"></i> Atividades funcionais</span>                                            </a>                                         
	</li>
	                                    <li class="span3">
                                            <a href="#tab2-4" data-toggle="tab" class="step">
                                                <span class="number">4</span>
                                                <span class="desc"><i class="icon-ok"></i> Dados de Acesso</span>                                            </a>                                         
										</li>
                                       
  </ul>
                                      <div class="progress progress-primary progress-striped">
                                         <div class="bar"></div>
                                      </div>
                                      <div class="tab-content">
                                        <div class="tab-pane active" id="tab2-1">
                                            <div class="control-group">
                                                 <label  class="control-label">NOME</label>
                                               <div class="controls">
                                                  <input name="nome" type="text" class="input-xxlarge" id="nome" placeholder="" value="<?php echo mysql_result($r,0,'p.nome'); ?>"/>
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
                                               TITULAÇÃO 
                                                 
                                                 <select name="idtitulacao" class="input-medium" id="idtitulacao" title="O campo sexo é obrigatório">
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
										
										<div class="tab-pane" id="tab2-2">
                                            <table width="775" border="0" align="center" cellpadding="2" cellspacing="4">
          <tr>
            <td colspan="5" bgcolor="#AECEF4" class="bd_titulo"><div align="center"><strong>Adicionando Matrícula (máximo de duas sendo uma 20h e outra 40h) </strong></div></td>
          </tr>
          <tr>
            <td width="173" bgcolor="#AECEF4" class="bd_titulo">MATRÍCULA</td>
            <td width="173" bgcolor="#AECEF4" class="bd_titulo">CARGA HORÁRIA </td>
            
            <td width="202" bgcolor="#AECEF4" class="bd_titulo">DATA DE INÍCIO </td>
            <td width="191" bgcolor="#AECEF4" class="bd_titulo">DATA DE TÉRMINO </td>
            </tr>
			<?php for($i=0;$i<$ln;$i++){?>
          <tr>
            <td><input name="matricula<?php echo $i;?>" type="text" id="matricula<?php echo $i;?>" size="20" class="input-medium" value="<?php echo mysql_result($r,$i,'mp.matriculaprofessor'); ?>"/></td>
            <td><input name="ch<?php echo $i;?>" type="text" id="ch<?php echo $i;?>" size="10" class="input-mini" value="<?php echo mysql_result($r,$i,'mp.carga_horaria'); ?>"/> 
            HORAS</td>
            <td><input name="dtini<?php echo $i;?>" type="text" class="input-medium" id="dtini<?php echo $i;?>" onkeypress="return Mascaras_Format(document.form,'dtini<?php echo $i;?>','99/99/9999',event);"size="20" maxlength="10" onblur="return valida_data1(document.form.dtini<?php echo $i;?>,5);" value="<?php echo mysql_result($r,$i,'inicio'); ?>"/>
            <span class="textos_red"><a title="Calendário" onclick="selectDate('form','dtini<?php echo $i;?>')"><img src="img/calendar.gif" width="18" height="18" /></a></span></td>
            <td><input name="dtfim<?php echo $i;?>" type="text" class="input-medium" id="dtfim<?php echo $i;?>" onkeypress="return Mascaras_Format(document.form,'dtfim<?php echo $i;?>','99/99/9999',event);" value="<?php echo mysql_result($r,$i,'termino'); ?>" size="20" maxlength="10" onblur="return valida_data1(document.form.dtfim<?php echo $i;?>,5);"/>
            <a title="Calendário" onclick="selectDate('form','dtfim<?php echo $i;?>')"><img src="img/calendar.gif" width="18" height="18" /></a></td>
            </tr>
			<?php }?>
        </table>
											
                                        </div>
										 
                                         <div class="tab-pane" id="tab2-3">
                                            <table width="714" border="0" align="center" cellpadding="2" cellspacing="4">
          <tr>
            <td colspan="5" bgcolor="#AECEF4" class="bd_titulo"><div align="center"><strong>Atividades funcionais </strong></div></td>
          </tr>
          <tr>
            <td width="278" bgcolor="#AECEF4" class="bd_titulo">FUNÇÃO</td>
            
            <td width="162" bgcolor="#AECEF4" class="bd_titulo">DATA DE INÍCIO </td>
            <td colspan="2" bgcolor="#AECEF4" class="bd_titulo">DATA DE TÉRMINO </td>
            </tr>
			<?php for($i=0;$i<$ln2;$i++){?>
          <tr class="linhas">
            <td><select name="idfuncao<?php echo $i;?>" class="input-medium" tabindex="1" id="idfuncao<?php echo $i;?>" title="O campo função é obrigatório">
              <option value="">Escolha a Função</option>
              <?php for($i=0;$i<$linha2;$i++){?>
              <option value="<?php echo mysql_result($rs2,$i,'f.idfuncao');?>"><?php echo utf8_encode(mysql_result($rs2,$i,'f.funcao'));?></option>
              <?php }?>
            </select></td>
            <td><input name="data_inicio<?php echo $i;?>" type="text" id="data_inicio<?php echo $i;?>" size="20" class="input-medium" value="<?php echo mysql_result($r2,0,'inicio'); ?>"/></td>
            <td><input name="data_termino<?php echo $i;?>" type="text" id="data_termino<?php echo $i;?>" size="20" class="input-medium" value="<?php echo mysql_result($r2,0,'termino'); ?>"/></td>
            <td width="60"><a href="#" class="removerCampo" title="Remover linha"><i class="icon-trash"></i></a></td>
          </tr>
		   <?php }?>
          <tr class="linhas">
            <td>
              <select name="idfuncao[]" class="input-medium" tabindex="1" id="idfuncao[]" title="O campo sexo é obrigatório">
                <option value="">Escolha a Função</option>
				<?php for($i=0;$i<$linha2;$i++){?>
                <option value="<?php echo mysql_result($rs2,$i,'f.idfuncao');?>"><?php echo utf8_encode(mysql_result($rs2,$i,'f.funcao'));?></option>
                <?php }?>
              </select>            </td>
            <td><input name="data_inicio[]" type="text" id="data_inicio[]" size="20" class="input-medium"/></td>
           
            <td width="178"><input name="data_termino[]" type="text" id="data_termino[]" size="20" class="input-medium"/></td>
            <td width="60"><a href="#" class="removerCampo" title="Remover linha"><i class="icon-trash"></i></a></td>
          </tr>
          <tr>
            <td colspan="5"><a href="#" class="adicionarCampo" title="Adicionar item"><i class="icon-plus-sign"></i>Adicionar</a> </td>
          </tr>
        </table>
											
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
                                                    <input type="password" name="senha" id="senha" class="input-xlarge">
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
document.form.idtitulacao.value='<?php echo mysql_result($r,0,'prof.idtitulacao'); ?>';
<?php for($i=0;$i<$ln2;$i++){?>
document.form.idfuncao<?php echo $i;?>.value='<?php echo mysql_result($r2,0,'af.idfuncao'); ?>';
<?php } ?>
</script>