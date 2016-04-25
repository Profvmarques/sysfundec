<?php
require_once('controles/professor.php');
Processo('incluir');
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
                                                  <input name="nome" type="text" class="input-xxlarge" id="nome" placeholder="" value="<?php echo $_POST['nome']; ?>"/>
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
                                                  <input name="nascimento" type="text" class="input-medium" id="nascimento" onkeypress="return Mascaras_Format(document.form,'nascimento','99/99/9999',event);" size="20" maxlength="10" onblur="return valida_data1(document.form.nascimento,5);" value="<?php echo $_POST['nascimento']; ?>"/>
                                                  <span class="textos_red"><a title="Calendário" onclick="selectDate('form','nascimento')"><img src="img/calendar.gif" width="18" height="18" /></a></span>
                                              | NACIONALIDADE  
												  <input name="nacionalidade" type="text" class="input-xlarge" id="nacionalidade" placeholder="" value="<?php echo $_POST['nacionalidade']; ?>" />
												
                                            </div>
											<br/>
										  <div style="margin-left:35px">
                                                <label for="lastname2" class="control-label"> ENDEREÇO &nbsp;</label>
                                                  
                                                  <input name="endereco" type="text" class="input-xlarge" id="endereco" placeholder="" value="<?php echo $_POST['endereco']; ?>"/>
                                                  
											  | TELEFONE 
                                              
                                              <input name="telefone" type="text" class="input-medium" id="telefone" title="Campo telefone &eacute; obrigat&oacute;rio" onkeypress="return Mascaras_Format(document.form,'telefone','(99) 9999-9999',event);" value="<?php echo $_POST['telefone']; ?>" maxlength="15" placeholder="" />
XX99999999 
                                             
                                        </div>
										<br /> 
										 <div style="margin-left:112px">
                                               CELULAR 
                                                <input name="celular" type="text" class="input-medium" id="celular" title="Campo celular &eacute; obrigat&oacute;rio" onkeypress="return Mascaras_Format(document.form,'celular','(99) 99999-9999',event);" value="<?php echo $_POST['celular']; ?>" maxlength="15" placeholder="" />
XX99999999 
| E-MAIL  
                                                <input name="email" type="text" class="input-xlarge" id="email" placeholder="" data-rule-email="true" data-rule-required="true" value="<?php echo $_POST['email']; ?>"/><span for="email" class="help-inline">This field is required.</span>
</div>
<br />
 <div style="margin-left:112px">
| MUNICÍPIO &nbsp;
<input name="cidade" type="text" class="input-xlarge" id="cidade" placeholder="" value="<?php echo $_POST['cidade']; ?>"/> 
| CEP &nbsp;
<input name="cep" type="text" class="input-mini" id="cep" placeholder="" value="<?php echo $_POST['cep']; ?>"/> 
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
</div>
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
| CV LATTES &nbsp;<input name="cvlattes" type="text" class="input-xlarge" id="cvlattes" placeholder="" value="<?php echo $_POST['cvlattes']; ?>"/>
</div>
<br/>
 <div style="margin-left:112px">
                                               NOME DE GUERRA 
                                                 
                                                 <input name="nome_guerra" type="text" class="input-medium" id="nome_guerra" placeholder="" value="<?php echo $_POST['nome_guerra']; ?>"/>
                                                
XX99999999 
| COR DE FUNDO &nbsp;<input name="corfundo" type="text" class="input-xlarge" id="corfundo" placeholder="" value="<?php echo $_POST['cor_fundo']; ?>" />
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
          <tr class="linhas0">
            <td><input name="matricula1" type="text" id="matricula1" size="20" class="input-medium" title="Pelo menos uma matrícula deve ser informada"/></td>
            <td><input name="ch1" type="text" id="ch1" size="10" class="input-mini" /> 
            HORAS</td>
            <td><input name="dtini1" type="text" class="input-medium" id="dtini1" onkeypress="return Mascaras_Format(document.form,'dtini1','99/99/9999',event);" value="" size="20" maxlength="10" onblur="return valida_data1(document.form.dtini1,5);"/>
            <span class="textos_red"><a title="Calendário" onclick="selectDate('form','dtini1')"><img src="img/calendar.gif" width="18" height="18" /></a></span></td>
            <td><input name="dtfim1" type="text" class="input-medium" id="dtfim1" onkeypress="return Mascaras_Format(document.form,'dtfim1','99/99/9999',event);" value="" size="20" maxlength="10" onblur="return valida_data1(document.form.dtfim1,5);"/>
            <a title="Calendário" onclick="selectDate('form','dtfim1')"><img src="img/calendar.gif" width="18" height="18" /></a></td>
            </tr>
          <tr class="linhas0">
            <td><input name="matricula2" type="text" id="matricula2" size="20" class="input-medium"/></td>
            <td><input name="ch2" type="text" id="ch2" size="10" class="input-mini" />
              HORAS</td>
            <td><input name="dtini2" type="text" class="input-medium" id="dtini2" onkeypress="return Mascaras_Format(document.form,'dtini2','99/99/9999',event);" value="" size="20" maxlength="10" onblur="return valida_data1(document.form.dtini2,5);"/>
                <span class="textos_red"><a title="Calendário" onclick="selectDate('form','dtini2')"><img src="img/calendar.gif" width="18" height="18" /></a></span></td>
            <td><input name="dtfim2" type="text" class="input-medium" id="dtfim2" onkeypress="return Mascaras_Format(document.form,'dtfim2','99/99/9999',event);" value="" size="20" maxlength="10" onblur="return valida_data1(document.form.dtfim2,5);"/>
            <a title="Calendário" onclick="selectDate('form','dtfim2')"><img src="img/calendar.gif" width="18" height="18" /></a></td>
            </tr>
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
          <tr class="linhas">
            <td>
              <select name="idfuncao[]" class="input-medium" tabindex="1" id="idfuncao[]" title="O campo função é obrigatório">
                <option value="">Escolha a Função</option>
				<?php for($i=0;$i<$linha2;$i++){?>
                <option value="<?php echo mysql_result($rs2,$i,'f.idfuncao');?>"><?php echo utf8_encode(mysql_result($rs2,$i,'f.funcao'));?></option>
                <?php }?>
              </select>
            </td>
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
                                                    <input type="text" name="login" id="login" class="input-xlarge">
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