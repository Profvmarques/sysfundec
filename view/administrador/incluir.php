<?php

//require_once('controle/administrador_ctrl_adm.php');
//Processo('incluir');
?>
<form class="form-horizontal" id="form" name="form" method="post">
                                <div class="control-group">
                                  <label class="control-label">CPF</label>
                                  <div class="controls">
                                    <input name="cpfAdm" type="text" class="input-medium" id="cpfAdm" placeholder="" title="CPF obrigatório" />
                                    <span class="help-inline">Somente números</span> </div>
                                </div>
                                <div class="control-group">
                                  <label class="control-label">RG</label>
                                  <div class="controls">
                                    <input name="rgAdm" type="text" class="input-medium" id="rgAdm" placeholder="" />
                                    <span class="help-inline">Somente números</span> </div>
                                </div>
                                <div class="control-group">
                                  <label class="control-label">NOME</label>
                                  <div class="controls">
                                    <input name="nomeAdm" type="text" class="input-xxlarge" id="nomeAdm" placeholder="" />
                                  </div>
                                </div>
                                <div class="control-group">
                                  <label class="control-label"> SEXO</label>
                                  <div class="controls">
                                    <select name="sexoAdm" class="input-medium" tabindex="1" id="sexoAdm">
                                      <option value="M">MASCULINO</option>
                                      <option value="F">FEMININO</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="control-group">
                                  <div class="control-group">
                                    <label class="control-label">DATA DE REGISTRO</label>
                                    <div class="controls">
                                      <input name="dataAdm" type="text" class="date-picker" id="dataAdm" value="12-02-2013" size="16" />
                                      | DATA DE NASCIMENTO
                                      <input name="nascAdm" type="text" class="input-medium" id="nascAdm" placeholder="" />
                                    </div>
                                  </div>
                                  <label class="control-label">ENDEREÇO</label>
                                  <div class="controls">
                                    <p>
                                      <input name="enderecoAdm" type="text" class="input-xxlarge" id="enderecoAdm" placeholder="" />
                                    </p>
                                    <p><span class="page-header"> | NÚMERO</span>
                                      <input name="numAdm" type="text" class="input-mini" id="numAdm" placeholder="" />
                                      | COMPLEMENTO
                                      <input name="complementoAdm" type="text" class="input-mini" id="complementoAdm" placeholder="" />
                                      | CEP
                                      <input name="cepAdm" type="text" class="input-medium" id="cepAdm" value="99.999-999" size="10" maxlength="10" placeholder="" />
                                    </p>
                                  </div>
                                </div>
                                <div class="control-group">
                                  <label class="control-label"> ESTADO</label>
                                  <div class="controls">
                                    <select name="ufAdm" class="input-medium" tabindex="1" id="ufAdm">
                                      <option value="RJ">RIO DE JANEIRO</option>
                                      <option value="SP">SÃO PAULO</option>
                                      <option value="MG">MINAS GERAIS</option>
                                      <option value="ES">ESPIRITO SANTO</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="control-group">
                                  <label class="control-label"> BAIRRO</label>
                                  <div class="controls">
                                    <input name="bairroAdm" type="text" class="input-xxlarge" id="bairroAdm" placeholder="" />
                                  </div>
                                </div>
                                <div class="control-group">
                                  <label class="control-label">CIDADE</label>
                                  <div class="controls">
                                    <p>
                                      <input name="cidadeAdm" type="text" class="input-xxlarge" id="cidadeAdm" placeholder="" />
                                  </div>
                                </div>
                                <div class="control-group">
                                  <label class="control-label">TELEFONE </label>
                                  <div class="controls">
                                    <input name="telefoneResidencialAdm" type="text" class="input-medium" id="telefoneResidencialAdm" placeholder="" />
                                    XX99999999 </div>
                                </div>
                                <div class="control-group">
                                  <label class="control-label">TELEFONE TRABALHO</label>
                                  <div class="controls">
                                    <input name="telefoneTrabAdm" type="text" class="input-medium" id="telefoneTrabAdm" placeholder="" />
                                    XX99999999 </div>
                                </div>
                                <div class="control-group">
                                  <label class="control-label">TELEFONE CELULAR</label>
                                  <div class="controls">
                                    <input name="celularAdm" type="text" class="input-medium" id="celularAdm" placeholder="" />
                                    XX99999999
                                    ou XX<span class="DDD">9</span>99999999</div>
                                </div>
                                <div class="control-group">
                                  <div class="control-group">
                                    <label class="control-label">USUÁRIO</label>
                                    <div class="controls">
                                      <input name="usuarioAdm" type="text" class="input-xlarge" id="usuarioAdm" placeholder="" />
                                      Estagiário digite seu usuário aqui. </div>
                                  </div>
                                  <div class="control-group">
                                    <label class="control-label">SENHA</label>
                                    <div class="controls">
                                      <div class="input-append">
                                        <input name="senhaAdm" type="password" class='input-medium' id="senhaAdm" placeholder="Letras e números">
                                        <span class="add-on"><i class="icon-key"></i></span> Estagiário digite sua senha aqui. </div>
                                    </div>
                                  </div>
                                  <div class="control-group">
                                    <label class="control-label">FOTO</label>
                                    <div class="controls">
                                      <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"> <img src="wamp/www/4physio/img;text=no+image" alt="" /> </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div> <span class="btn btn-file"><span class="fileupload-new"></span><span class="fileupload-exists"></span>
                                          <input name="fotoAdm" type="file" class="default" id="fotoAdm" />
                                        </span> <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remover</a> </div>
                                      </div>
                                      <span class="label label-important">NOTA!</span> <span> Imagens suportadas nas últimas versões doFirefox, Chrome, Opera, 
                                        Safari e Internet Explorer 10. </span> </div>
                                  </div>
                                  <div class="controls"></div>
                                </div>
  <div class="form-actions">
                                  <button type="button" class="btn btn-primary" onClick="validar(document.form);">
                              </i> SALVAR</button>
                                  <button type="button" class="btn" >CANCELAR</button>
                               <input name="ok" type="hidden" id="ok"/></div>
                              </form>