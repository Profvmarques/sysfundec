<?php
require_once('controles/alunos.php');
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
      <td width="152"><a href="default.php?pg=view/adm_modulos/consulta.php&amp;form=Consulta de Módulos"><strong><i class="icon-search"> Consultar Aluno </i></strong></a> </td>
    </tr>
  </table>

                                
  <div class="form-wizard" id="form-wizard-2">
                                      <ul class="row-fluid steps steps-fill">
                                         <li class="span3 active">
                                            <a href="#tab2-1" data-toggle="tab" class="step active">
                                                <span class="number">1</span>
                                                <span class="desc"><i class="icon-ok"></i> Dados do aluno </span>                                            </a>                                         
										</li>
										
										      <li class="span3">
                                            <a href="#tab2-2" data-toggle="tab" class="step">
                                                <span class="number">2</span>
                                                <span class="desc"><i class="icon-ok"></i> Complemento</span>                                            </a>                                         
	</li>
										
                                         <li class="span3">
                                            <a href="#tab2-3" data-toggle="tab" class="step">
                                                <span class="number">3</span>
                                                <span class="desc"><i class="icon-ok"></i> Documentos</span>                                            </a>                                         
	</li>
	                                    <li class="span3">
                                            <a href="#tab2-4" data-toggle="tab" class="step">
                                                <span class="number">4</span>
                                                <span class="desc"><i class="icon-ok"></i> Escolar</span>                                            </a>                                         
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
                                                  <input name="nome" type="text" class="input-xxlarge" id="nome" placeholder="" value="<?php echo $_POST['nome']; ?>" title="O campo nome é obrigatório"/>
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
                                                  <input name="nascimento" type="text" class="input-medium" id="nascimento" onkeypress="return Mascaras_Format(document.form,'nascimento','99/99/9999',event);" size="20" maxlength="10" onblur="return valida_data1(document.form.nascimento,5);" value="<?php echo $_POST['nascimento']; ?>"  title="O campo nascimento é obrigatório"/>
                                                  <span class="textos_red"><a title="Calendário" onclick="selectDate('form','nascimento')"><img src="img/calendar.gif" width="18" height="18" /></a></span>
                                              | NACIONALIDADE  
												  <input name="nacionalidade" type="text" class="input-xlarge" id="nacionalidade" placeholder="" value="<?php echo $_POST['nacionalidade']; ?>"  title="O campo nacionalidade é obrigatório"/>
												
                                            </div>
											<br/>
										  <div style="margin-left:35px">
                                                <label for="lastname2" class="control-label"> ENDEREÇO &nbsp;</label>
                                                  
                                                  <input name="endereco" type="text" class="input-medium" id="endereco" placeholder="" value="<?php echo $_POST['endereco']; ?>"  title="O campo endereço é obrigatório"/>
                                                  
											  | TELEFONE 
                                              
                                              <input name="telefone" type="text" class="input-medium" id="telefone" title="Campo telefone &eacute; obrigat&oacute;rio" onkeypress="return Mascaras_Format(document.form,'telefone','(99) 9999-9999',event);" value="<?php echo $_POST['telefone']; ?>" maxlength="15" placeholder="" />
 | 
 CELULAR 
                                                <input name="celular" type="text" class="input-medium" id="celular" title="Campo celular &eacute; obrigat&oacute;rio" onkeypress="return Mascaras_Format(document.form,'celular','(99) 99999-9999',event);" value="<?php echo $_POST['celular']; ?>" maxlength="15" placeholder="" />
 
| E-MAIL  
                                                <input name="email" type="text" class="input-medium" id="email" placeholder="" data-rule-email="true" data-rule-required="true" value="<?php echo $_POST['email']; ?>"  title="O campo e-mail é obrigatório"/>
                                             
                                        </div>
										

						<br /> 
										 <div style="margin-left:112px">
                                               BAIRRO 
                                                 
                                                 <input name="bairro" type="text" class="input-xlarge" id="bairro" placeholder="" value="<?php echo $_POST['bairro']; ?>"  title="O campo bairro é obrigatório"/> 
| MUNICÍPIO &nbsp;
<input name="cidade" type="text" class="input-xlarge" id="cidade" placeholder="" value="<?php echo $_POST['cidade']; ?>"  title="O campo cidade é obrigatório"/> 
| CEP &nbsp;
<input name="cep" type="text" class="input-mini" id="cep"  title="O campo cep é obrigatório" onkeypress="return Mascaras_Format(document.form,'cep','99999-999',event);" value="<?php echo $_POST['cep']; ?>" maxlength="9" placeholder=""/> 
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
<br/>
                                        </div>
                                        <div class="tab-pane" id="tab2-2">
                                          <div style="margin-left:112px">
										  ESTADO CIVIL(*) : 
                                                <select name="idestado_civil" class="input-medium" id="idestado_civil" title="O campo estado civil é obrigatório">
                                                  <option value="">Escolha o estado civil</option>
                                                  <?php for($i=0;$i<$linha;$i++){ ?>
                                                  <option value="<?php echo mysql_result($rs,$i,'ec.idestado_civil'); ?>"><?php echo utf8_encode(mysql_result($rs,$i,'ec.descricao')); ?></option>
												  <?php } ?>
                                            </select>
                                              | ETNIA / COR(*) :
                                              
                                                <select name="idetnia" class="input-medium" id="idetnia" title="O campo etnia/cor é obrigatório">
                                                  <option value="">Escolha a cor</option>
                                                 												  
												   <?php for($i=0;$i<$linha2;$i++){ ?>
                                                  <option value="<?php echo mysql_result($rs2,$i,'e.idetnia'); ?>"><?php echo utf8_encode(mysql_result($rs2,$i,'e.descricao')); ?></option>
												  <?php } ?>
                                            </select>
										  </div>
												<br />
										  <div style="margin-left:112px">
												 | NECESSIDADE ESPECIAL : &nbsp;
                                            <input name="deficiencia_auditiva" type="checkbox" id="deficiencia_auditiva" value="1">
												&nbsp;
AUDITIVA &nbsp;
<input name="deficiencia_visual" type="checkbox" id="deficiencia_visual" value="1">
&nbsp;
VISUAL &nbsp;
<input name="deficiencia_motora" type="checkbox" id="deficiencia_motora" value="1">
&nbsp;
MOTORA &nbsp;
<input name="deficiencia_mental" type="checkbox" id="deficiencia_mental" value="1">
&nbsp;
MENTAL </div>
                                              
                                        </div>
										 
                                         <div class="tab-pane" id="tab2-3">
                                           <div style="margin-left:10px">
                                               CPF &nbsp;                                             
                                              <input type="text" name="cpf" id="cpf" class="input-medium"  title="O campo cpf é obrigatório" />
											  | RG &nbsp;                                             
                                             <input type="text" name="rgnumero" id="rgnumero" class="input-medium" title="O campo rg é obrigatório"/>
                                             
                                             | ÓRGÃO EMISSOR 
                                             <input type="text" name="rgorgaoemissor" id="rgorgaoemissor" class="input-medium" title="O campo órgão emissor é obrigatório"/>
                                             | EMISSÃO
                                             <input name="rgdataemissao" type="text" class="input-medium" id="rgdataemissao" onblur="return valida_data1(document.form.rgdataemissao,5);" onkeypress="return Mascaras_Format(document.form,'rgdataemissao','99/99/9999',event);" value="<?php echo $_POST['rgdataemissao']; ?>" maxlength="10" title="O campo data de emissão é obrigatório"/>
                                             <span class="textos_red"><a title="Calendário" onclick="selectDate('form','rgdataemissao')"><img src="img/calendar.gif" width="18" height="18" /></a></span>                                           </div>
										   <br />
										   <div style="margin-left:10px">
                                             CERT. NASCIMENTO
                                             <input type="text" name="certidaonascimentonumero" id="certidaonascimentonumero" class="input-mini"  title="O campo certidão de nascimento é obrigatório" />
                                             
                                           | LIVRO &nbsp;
                                           <input type="text" name="certidaonascimentolivro" id="certidaonascimentolivro" class="input-mini"  title="O campo livro da certidão de nascimento é obrigatório" />
| FOLHA
<input type="text" name="certidaonascimentofolha" id="certidaonascimentofolha" class="input-mini"  title="O campo folha da certidão de nascimento é obrigatório" />
 | CIDADE &nbsp;                                             
                                              <input type="text" name="certidaonascimentocidade" id="certidaonascimentocidade" class="input-medium"  title="O campo cidade da certidão de nascimento é obrigatório"/>
                                             
                                             | SUB-DISTRITO
                                             <input type="text" name="certidaonascimentosubdistrito" id="certidaonascimentosubdistrito" class="input-mini" />
                                             
                                           | UF &nbsp;
                                           <span style="margin-left:auto">
                                           <select name="certidaonascimentouf" class="input-mini" id="certidaonascimentouf" title="O campo uf do nascimento da certidão do nascimento é obrigatório">
                                             <option value="">UF</option>
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
										   <div style="margin-left:10px">
                                              CERT. CASAMENTO &nbsp;                                             
                                              <input type="text" name="certidaocasamentonumero" id="certidaocasamentonumero" class="input-medium" />
                                             
                                             | LIVRO
                                             <input type="text" name="certidaocasamentolivro" id="certidaocasamentolivro" class="input-mini" />
                                             
                                           | FOLHA
                                           
										    <input type="text" name="certidaocasamentofolha" id="certidaocasamentofolha" class="input-mini" />
										    | CIDADE &nbsp;                                             
                                              <input type="text" name="certidaocasamentocidade" id="certidaocasamentocidade" class="input-medium" />
                                             
                                             | SUB-DISTRITO
                                             <input type="text" name="certidaocasamentosubdistrito" id="certidaocasamentosubdistrito" class="input-mini" />
                                             
                                           | UF &nbsp;
                                           <span style="margin-left:auto">
                                           <select name="certidaocasamentouf" class="input-mini" id="certidaocasamentouf" title="O campo uf da certidão de casamento é obrigatório">
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
                                           </span>
</div>

										   <br />
										   
										   <div style="margin-left:10px">
                                              CERT. ALISTAMENTO MILITAR &nbsp;                                             
                                              <input type="text" name="certificado_alistamento_militar_numero" id="certificado_alistamento_militar_numero" class="input-medium" />
                                             
                                             | SÉRIE
                                             <input type="text" name="certificado_alistamento_militar_serie" id="certificado_alistamento_militar_serie" class="input-mini" />
                                             
                                           | RM &nbsp;
                                           <input type="text" name="certificado_alistamento_militar_rm" id="certificado_alistamento_militar_rm" class="input-mini" />
										  | CSM &nbsp;                                             
                                              <input type="text" name="certificado_alistamento_militar_csm" id="certificado_alistamento_militar_csm" class="input-medium" />
                                             
                                             | DATA
                                             <input type="text" name="certificado_alistamento_militar_data" id="certificado_alistamento_militar_data" class="input-medium" onblur="return valida_data1(document.form.certificado_alistamento_militar_data,5);" onkeypress="return Mascaras_Format(document.form,'certificado_alistamento_militar_data','99/99/9999',event);"/>
                                             <a title="Calendário" onclick="selectDate('form','certificado_alistamento_militar_data')"><img src="img/calendar.gif" width="18" height="18" /></a>
										   </div>
										   
										   <br />
										   
									   
										   										   
										   <div style="margin-left:10px">
                                              CERT. RESERVISTA &nbsp;                                             
                                              <input type="text" name="certificado_reservista_numero" id="certificado_reservista_numero" class="input-medium" />
                                             
                                             | SÉRIE
                                             <input type="text" name="certificado_reservista_militar_serie" id="certificado_reservista_militar_serie" class="input-mini" />
                                             
                                           | RM &nbsp;
                                           <input type="text" name="certificado_reservista_rm" id="certificado_reservista_rm" class="input-mini" />
										   |  CSM &nbsp;                                             
                                              <input type="text" name="certificado_reservista_militar_csm" id="certificado_reservista_militar_csm" class="input-medium" />
                                             
                                             | DATA
                                             <input type="text" name="certificado_reservista_data" id="certificado_reservista_data" class="input-medium" onblur="return valida_data1(document.form.certificado_reservista_data,5);" onkeypress="return Mascaras_Format(document.form,'certificado_reservista_data','99/99/9999',event);"/>
                                             <a title="Calendário" onclick="selectDate('form','certificado_reservista_data')"><img src="img/calendar.gif" width="18" height="18" /></a>
										   </div>
										   
										  
										   
									     
										   <br />
									       <div style="margin-left:10px">
                                              T. DE ELEITOR &nbsp;                                             
                                              <input type="text" name="titulo_eleitor_numero" id="titulo_eleitor_numero" class="input-medium" />
                                             
                                             | ZONA
                                             <input type="text" name="titulo_eleitor_zona" id="titulo_eleitor_zona" class="input-mini" />
                                             
                                           | SEÇÃO &nbsp;
                                           <input type="text" name="titulo_eleitor_secao" id="titulo_eleitor_secao" class="input-mini" /> 
										   |  EMISSÃO
                                             <input name="titulo_eleitor_data" type="text" class="input-medium" id="titulo_eleitor_data" onblur="return valida_data1(document.form.titulo_eleitor_data,5);" onkeypress="return Mascaras_Format(document.form,'titulo_eleitor_data','99/99/9999',event);" value="<?php echo $_POST['titulo_eleitor_data']; ?>" maxlength="10"/>
                                             <span class="textos_red"><a title="Calendário" onclick="selectDate('form','titulo_eleitor_data')"><img src="img/calendar.gif" width="18" height="18" /></a></span> 
											 | CART. DE TRABALHO &nbsp;                                             
                                              <input type="text" name="carteira_trabalho" id="carteira_trabalho" class="input-medium" />
									       </div>
										   
										   <br />
										   
										   
                                         </div>	
										 
										 <div class="tab-pane" id="tab2-4">
										 
										  <div style="margin-left:10px">
                                              MODALIDADE <span style="margin-left:auto">
                                              <select name="modalidade" class="input-medium" id="modalidade" title="O campo uf é obrigatório">
                                                <option value="ENSINO MEDIO">ENSINO MÉDIO</option>
                                                <option value="SUPLETIVO">SUPLETIVO</option>
                                                <option value="GRADUACAO">GRADUAÇÃO</option>
												<option value="OUTROS">OUTROS</option>
                                              </select>
                                              </span>| INSTITUIÇÃO DE ENSINO &nbsp;                                             
                                              <input type="text" name="instituicao" id="instituicao" class="input-medium" />
										   | ANO DE CONCLUSÃO &nbsp;
                                           <input type="text" name="ano_conclusao" id="ano_conclusao" class="input-mini" />
										   |  UF &nbsp; <span style="margin-left:auto">
                                           <select name="uf_ensino" class="input-mini" id="uf_ensino" title="O campo uf da modalidade de ensino é obrigatório">
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
										   <div style="margin-left:10px">
                                              CURSO
                                                <span style="margin-left:auto">
                                                <select name="siglacurso" class="input-xlarge" id="siglacurso" title="O campo uf é obrigatório">
                                                  <option value="">Escolha o curso</option>
                                                   <?php for($i=0;$i<$linha4;$i++){ ?>
                                                  <option value="<?php echo mysql_result($rs4,$i,'c.siglacurso');?>"><?php echo utf8_encode(mysql_result($rs4,$i,'c.descricao'));?></option>
												   <?php } ?>
                                                </select>
                                              </span>                                             |											  MATRÍCULA
                                                <input type="text" name="matricula_aluno" id="matricula_aluno" class="input-medium" />
| DATA &nbsp;
<input type="text" name="data_matricula" id="data_matricula" class="input-medium" onblur="return valida_data1(document.form.data_matricula,5);" onkeypress="return Mascaras_Format(document.form,'data_matricula','99/99/9999',event);"/>
<a title="Calendário" onclick="selectDate('form','data_matricula')"><img src="img/calendar.gif" width="18" height="18" /></a> | PERÍODO LETIVO &nbsp;
                                              <span style="margin-left:auto">
                                              <select name="idperiodoletivo" class="input-medium" id="idperiodoletivo" title="O campo período letivo é obrigatório">
                                               <?php for($i=0;$i<$linha7;$i++){ ?>
                                                 <option value="<?php echo mysql_result($rs7,$i,'p.idperiodoletivo');?>"><?php echo utf8_encode(mysql_result($rs7,$i,'p.siglaperiodo'));?></option>
												<?php } ?>
                                              </select>
                                              </span>	</div>
										   <br />
										    <div style="margin-left:10px"> TURNO  &nbsp;
                                              <span style="margin-left:auto">
                                              <select name="idturno" class="input-medium" id="idturno" title="O campo uf é obrigatório">
                                               <?php for($i=0;$i<$linha5;$i++){ ?>
                                                 <option value="<?php echo mysql_result($rs5,$i,'t.idturno');?>"><?php echo utf8_encode(mysql_result($rs5,$i,'t.descricao'));?></option>
												<?php } ?>
                                              </select>
                                              </span>										   |  FORMA DE INGRESSO &nbsp; <span style="margin-left:auto">
                                           <select name="idformaingresso" class="input-medium" id="idformaingresso" title="O campo uf é obrigatório">
                                             <?php for($i=0;$i<$linha6;$i++){ ?>
											  <option value="<?php echo mysql_result($rs6,$i,'f.idformaingresso');?>"><?php echo utf8_encode(mysql_result($rs6,$i,'f.descricao'));?></option>
											 <?php } ?>
                                           </select>
										   </span> | PONTUAÇÃO 
										   <input type="text" name="pontos_concursos" id="pontos_concursos" class="input-mini" /> 
										     &nbsp;|  CLASSIFICAÇÃO &nbsp;
										     <input type="text" name="classificacao_concurso" id="classificacao_concurso" class="input-mini" />
										    </div>
										
										   <br />
										    <div style="margin-left:10px"> LOGIN 
										     <input type="text" name="login" id="login" class="input-medium"> 
										     &nbsp;|  SENHA
										      <input type="password" name="senha" id="senha" class="input-medium">
										   </div>
										   <br />
										   
										                                              
                                            
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