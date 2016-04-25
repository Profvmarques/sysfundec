<?php
require_once('controles/alunos.php');
Processo('visualizarDados');
?>
<div align="right"><a href="view/alunos/ficha.php?id=<?php echo utf8_encode(mysql_result($r,0,'p.idpessoas')); ?>" title="" class="btn btn-circle show-tooltip" data-original-title="Imprimir ficha" target="_blank"><i class="icon-print"></i></a></div>
<br />
<fieldset style="background: none repeat scroll 0 0 #AECEF4;
    font-size: 100%; border: 1px solid #000000;">
<legend style="border: 1px solid #000000; background:#FFFFFF">            DADOS PESSOAIS DO ALUNO <b><?php echo utf8_encode(mysql_result($r,0,'p.nome')); ?></b></legend>
        <br>

        <div style="margin-left:15px; background:#AECEF4">
            <table width="871">
                <tbody><tr>
                    <td width="50">NOME:</td>
                    <td width="340"><b><?php echo utf8_encode(mysql_result($r,0,'p.nome')); ?></b></td>
                    <td width="57">SEXO:</td>
                    <td width="86"><b><?php echo mysql_result($r,0,'p.sexo'); ?></b></td>
                    <td width="191">DATA DE NASCIMENTO . </td>
                    <td width="119"><b><?php echo mysql_result($r,0,'dtnasc'); ?></b></td>
                </tr>
            </tbody></table>

            <table width="852">
                <tbody><tr>
                    <td width="161">NACIONALIDADE : </td>
                    <td width="679"><b><?php echo mysql_result($r,0,'p.nacionalidade'); ?></b></td>
                    </tr>
            </tbody></table>
            <table width="725">
                <tbody><tr>
                    <td width="102">ENDEREÇO :</td>
                    <td width="611"><?php echo mysql_result($r,0,'p.endereco'); ?></td>
                    </tr>
            </tbody></table>
           
            <table width="891">
                <tbody><tr>
                    <td width="105">TELEFONE:</td>
                    <td width="139"><b><?php echo utf8_encode(mysql_result($r,0,'p.telefone')); ?></b></td>
                    <td width="88">CELULAR : </td>
                    <td width="179"><b><?php echo utf8_encode(mysql_result($r,0,'p.celular')); ?></b></td>
                    <td width="62">E-MAIL :</td>
                    <td width="290"><b><?php echo utf8_encode(mysql_result($r,0,'p.email')); ?></b></td>
                </tr>
            </tbody></table>
            <table width="1059">
                <tbody><tr>
                    <td width="114">BAIRRO : </td>
                    <td width="279"><b><?php echo mysql_result($r,0,'p.bairro'); ?></b></td>
                    <td width="129">MUNÍCIPIO :</td>
                    <td width="291"><b><?php echo mysql_result($r,0,'p.cidade'); ?></b></td>
                    <td width="117">CEP : <b><?php echo mysql_result($r,0,'p.cep'); ?></b></td>
                    <td width="101">UF : <b><?php echo mysql_result($r,0,'p.uf'); ?></b></td>
                </tr>
                <tr>
                    <td width="114">ESTADO CIVIL   </td>
                    <td width="279"><b><?php echo mysql_result($r,0,'ec.descricao'); ?></b></td>
                    <td width="129">ETNIA / COR </td>
                    <td width="291"><b><?php echo mysql_result($r,0,'e.descricao'); ?></b></td>
                    <td width="117">&nbsp;</td>
                    <td width="101">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="6">NECESSIDADES ESPECIAIS </td>
                  </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>LOGIN : </td>
                  <td><b><?php echo mysql_result($r,0,'u.login'); ?></b></td>
                  <td>SENHA  : </td>
                  <td>&nbsp;</td>
                  <td>xxxxxxxx</td>
                  <td>xxxxxxxx</td>
                </tr>
            </tbody></table>
		
        </div>
		

</fieldset>

	<fieldset style="background: none repeat scroll 0 0 #AECEF4;
    font-size: 100%; border: 1px solid #000000;">
<legend style="border: 1px solid #000000; background:#FFFFFF">   DOCUMENTOS DO ALUNO </legend>
        <br>

        <div style="margin-left:15px; background:#AECEF4">
            <table width="1059">
                                    <tbody>
									<?php for($i=0;$i<$ln;$i++){?>
									<tr>
                                      <td width="154">CPF: </td>
									  <td width="162"><b><?php echo mysql_result($r,$i,'a.cpf');?></b></td>
									  <td width="91">RG: </td>
									  <td><b><?php echo mysql_result($r,$i,'a.rgnumero');?></b></td>
									  <td>ORGÃO EMISSOR  :</td>
									  <td><b><?php echo mysql_result($r,$i,'a.rgorgaoemissor');?></b></td>
									  <td>EMISSÃO :</td>
									  <td width="164"><b><?php echo mysql_result($r,$i,'dtemissao');?></b> </td>
									  </tr>
									<tr>
									  <td>CERT. NASCIMENTO</td>
									  <td><b><?php echo mysql_result($r,$i,'a.certidaonascimentonumero');?></b></td>
									  <td>LIVRO</td>
									  <td><b><?php echo mysql_result($r,$i,'a.certidaonascimentolivro');?></b></td>
									  <td>FOLHA</td>
									  <td><b><?php echo mysql_result($r,$i,'a.certidaonascimentofolha');?></b></td>
									  <td>CIDADE</td>
									  <td><b><?php echo mysql_result($r,$i,'a.certidaonascimentocidade');?></b></td>
									  </tr>
									<tr>
									  <td>SUB-DISTRITO</td>
									  <td><b><?php echo mysql_result($r,$i,'a.certidaonascimentosubdistrito');?></b></td>
									  <td>UF</td>
									  <td><b><?php echo mysql_result($r,$i,'a.certidaonascimentouf');?></b></td>
									  <td>&nbsp;</td>
									  <td>&nbsp;</td>
									  <td>&nbsp;</td>
									  <td>&nbsp;</td>
									  </tr>
									<tr>
									  <td>CERT. CASAMENTO</td>
									  <td><b><?php echo mysql_result($r,$i,'a.certidaocasamentonumero');?></b></td>
									  <td>LIVRO</td>
									  <td><b><?php echo mysql_result($r,$i,'a.certidaocasamentolivro');?></b></td>
									  <td>FOLHA</td>
									  <td><b><?php echo mysql_result($r,$i,'a.certidaocasamentofolha');?></b></td>
									  <td>CIDADE</td>
									  <td><b><?php echo mysql_result($r,$i,'a.certidaocasamentocidade');?></b></td>
									</tr>
									<tr>
									  <td>SUB-DISTRITO</td>
									  <td><b><?php echo mysql_result($r,$i,'a.certidaocasamentosubdistrito');?></b></td>
									  <td>UF</td>
									  <td><b><?php echo mysql_result($r,$i,'a.certidaocasamentouf');?></b></td>
									  <td>&nbsp;</td>
									  <td>&nbsp;</td>
									  <td>&nbsp;</td>
									  <td>&nbsp;</td>
									  </tr>
									<tr>
									  <td colspan="3">CERT. ALISTAMENTO MILITAR <b><?php echo mysql_result($r,$i,'a.certificado_alistamento_militar_numero');?></b></td>
									  <td>SÉRIE</td>
									  <td><b><?php echo mysql_result($r,$i,'a.certificado_alistamento_militar_serie');?></b></td>
									  <td>RM</td>
									  <td><b><?php echo mysql_result($r,$i,'a.certificado_alistamento_militar_rm');?></b></td>
									  <td>&nbsp;</td>
									  </tr>
									<tr>
									  <td>CSM</td>
									  <td><b><?php echo mysql_result($r,$i,'a.certificado_alistamento_militar_csm');?></b></td>
									  <td>DATA</td>
									  <td><b><?php echo mysql_result($r,$i,'dtalistamento');?></b></td>
									  <td>&nbsp;</td>
									  <td>&nbsp;</td>
									  <td>&nbsp;</td>
									  <td>&nbsp;</td>
									  </tr>
									<tr>
									  <td colspan="3">CERT. RESERVISTA <b><?php echo mysql_result($r,$i,'a.certificado_reservista_numero');?></b></td>
									  <td>SÉRIE</td>
									  <td><b><?php echo mysql_result($r,$i,'a.certificado_reservista_serie');?></b></td>
									  <td>RM</td>
									  <td><b><?php echo mysql_result($r,$i,'a.certificado_reservista_rm');?></b></td>
									  <td>&nbsp;</td>
									  </tr>
									<tr>
									  <td>CSM</td>
									  <td><b><?php echo mysql_result($r,$i,'a.certificado_reservista_csm');?></b></td>
									  <td>DATA</td>
									  <td><b><?php echo mysql_result($r,$i,'dtcertreservista');?></b></td>
									  <td>&nbsp;</td>
									  <td>&nbsp;</td>
									  <td>&nbsp;</td>
									  <td>&nbsp;</td>
									  </tr>
									<tr>
									  <td>TÍTULO DE ELEITOR </td>
									  <td><b><?php echo mysql_result($r,$i,'a.titulo_eleitor_numero');?></b></td>
									  <td>ZONA</td>
									  <td><b><?php echo mysql_result($r,$i,'a.titulo_eleitor_zona');?></b></td>
									  <td>SEÇÃO   </td>
									  <td><b><?php echo mysql_result($r,$i,'a.titulo_eleitor_secao');?></b></td>
									  <td>EMISSÃO</td>
									  <td><b><?php echo mysql_result($r,$i,'dttitulo');?></b></td>
									  </tr>
									<tr>
									  <td colspan="2">CARTEIRA DE TRABALHO <b><?php echo mysql_result($r,$i,'a.carteira_trabalho');?></b></td>
									  <td>&nbsp;</td>
									  <td width="94">&nbsp;</td>
									  <td width="141">&nbsp;</td>
									  <td width="108">&nbsp;</td>
									  <td width="109">&nbsp;</td>
									  <td>&nbsp;</td>
									  </tr>
					<?php } ?>
                                      <tr>
                                        <td colspan="8">&nbsp;</td>
                                      </tr>
                                      <tr>
                        
                        </tr>
            </tbody></table>
		
		<table width="1064">
  <tr>
    <td><center>
                    <a class="btn btn-small show-tooltip" title="Editar" href="default.php?pg=view/alunos/editar_dados.php&form=Atualização dos dados do aluno&id=<?php echo mysql_result($r,0,'p.idpessoas');?>"><i class="icon-edit"> <b>EDITAR DADOS DO ALUNO </b></i></a>
                  </center></td>
  </tr>
</table>


        </div>
		

    </fieldset>
		<br />
	
	<fieldset style="background: none repeat scroll 0 0 #AECEF4;
    font-size: 100%; border: 1px solid #000000;">
<legend style="border: 1px solid #000000; background:#FFFFFF">   MATRÍCULAS DO ALUNO </legend>
        <br>

        <div style="margin-left:15px; background:#AECEF4">
            <table width="1059">
                                    <tbody>
									<?php for($i=0;$i<$ln2;$i++){?>
									<tr>
                        <td width="105">MATRÍCULA: </td>
                        <td width="77"><b><?php echo mysql_result($r2,$i,'ma.matricula_aluno');?></b></td>
                        <td width="77">PONTOS :</td>
                        <td width="77"><b><?php echo mysql_result($r2,$i,'ma.pontos_concursos');?></b></td>
                        <td width="144">CLASSIFICAÇÃO :</td>
                        <td width="77"><b><?php echo mysql_result($r2,$i,'ma.classificacao_concurso');?></b></td>
                        <td width="181">DATA DA MATRÍCULA:</td>
                        <td width="108"><b><?php echo mysql_result($r2,$i,'dtmatricula');?></b></td>
                        <td width="173"> 
						<a class="btn btn-small show-tooltip" title="Editar" href="default.php?pg=view/alunos/editar_matricula.php&form=Atualizar Dados da Matrícula do aluno <?php echo utf8_encode(mysql_result($r2,$i,'p.nome')); ?>&id=<?php echo utf8_encode(mysql_result($r2,0,'p.idpessoas')); ?>&mat=<?php echo mysql_result($r2,$i,'ma.matricula_aluno');?>"><i class="icon-edit"> <b>EDITAR MATRÍCULA</b></i></a>						</td>

                    </tr>
					<?php } ?>
                                      <tr>
                                        <td colspan="9">&nbsp;</td>
                                      </tr>
                                      <tr>
                        <td colspan="9">	<p align="left">
<a class="btn btn-small show-tooltip" title="Cadastro de nova Matrícula" href="default.php?pg=view/alunos/incluir_matricula.php&form=Cadastro de nova matricula do aluno <b><?php echo utf8_encode(mysql_result($r,0,'p.nome')); ?></b>&id=<?php echo utf8_encode(mysql_result($r,0,'p.idpessoas')); ?>"><i class="icon-plus-sign"> <b>NOVA MATRÍCULA</b></i></a>
</p></td>
                        </tr>
            </tbody></table>
		
		

        </div>
		

    </fieldset>
		<br />