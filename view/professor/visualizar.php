<?php
require_once('controles/professor.php');
Processo('visualizarDados');
?>
<div align="right"><a href="view/professor/ficha.php?id=<?php echo utf8_encode(mysql_result($r,0,'p.idpessoas')); ?>" title="" class="btn btn-circle show-tooltip" data-original-title="Imprimir ficha" target="_blank"><i class="icon-print"></i></a></div>
<br />
<fieldset style="background: none repeat scroll 0 0 #AECEF4;
    font-size: 100%; border: 1px solid #000000;">
<legend style="border: 1px solid #000000; background:#FFFFFF">            DADOS PESSOAIS DO PROFESSOR <b><?php echo utf8_encode(mysql_result($r,0,'p.nome')); ?></b></legend>
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
            <table width="790">
                <tbody><tr>
                    <td width="210">TITULAÇÃO : </td>
                    <td width="156"><b><?php echo mysql_result($r,0,'t.descricao'); ?></b></td>
                    <td width="190">LATTES :</td>
                    <td width="214"><b></b></td>
                </tr>
                <tr>
                    <td width="210">NOME DE GUERRA  : </td>
                    <td width="156"><b><?php echo mysql_result($r,0,'prof.nome_guerra'); ?></b></td>
                    <td width="190">COR (REPRENTATIVA)  :</td>
                    <td width="214"><b><?php echo mysql_result($r,0,'prof.corfundo'); ?></b></td>
                </tr>
                <tr>
                  <td>LOGIN : </td>
                  <td><b><?php echo mysql_result($r,0,'u.login'); ?></b></td>
                  <td>SENHA  : </td>
                  <td>xxxxxxxx</td>
                </tr>
                <tr>
                  <td colspan="4"><center><a class="btn btn-small show-tooltip" title="Editar" href="default.php?pg=view/professor/editar_dados.php&form=Atualização dos dados do professor&id=<?php echo mysql_result($r,0,'p.idpessoas');?>"><i class="icon-edit"> <b>EDITAR DADOS DO PROFESSOR</b></i></a></center></td>
                  </tr>
            </tbody></table>
		
        </div>
		

</fieldset>

	<br />
	
	<fieldset style="background: none repeat scroll 0 0 #AECEF4;
    font-size: 100%; border: 1px solid #000000;">
<legend style="border: 1px solid #000000; background:#FFFFFF">   MATRÍCULAS DO PROFESSOR</legend>
        <br>

        <div style="margin-left:15px; background:#AECEF4">
            <table width="1059">
                                    <tbody>
									<?php for($i=0;$i<$ln;$i++){?>
									<tr>
                        <td width="105">MATRÍCULA: </td>
                        <td width="77"><b><?php echo mysql_result($r,$i,'mp.matriculaprofessor');?></b></td>
                        <td width="154">CARGA HORÁRIA :</td>
                        <td width="69"><b><?php echo mysql_result($r,$i,'mp.carga_horaria');?></b></td>
                        <td width="136">DATA DE INÍCIO :</td>
                        <td width="89"><b><?php echo mysql_result($r,$i,'inicio');?></b></td>
                        <td width="108">TÉRMINO :</td>
                        <td width="108"><b><?php echo mysql_result($r,$i,'termino');?></b></td>
                        <td width="173"> 
						<a class="btn btn-small show-tooltip" title="Editar" href="default.php?pg=view/professor/editar_matricula.php&form=Atualizar Dados da Matrícula do professor <?php echo utf8_encode(mysql_result($r,$i,'p.nome')); ?>&id=<?php echo utf8_encode(mysql_result($r,0,'p.idpessoas')); ?>&mat=<?php echo mysql_result($r,$i,'mp.matriculaprofessor');?>"><i class="icon-edit"> <b>EDITAR MATRÍCULA</b></i></a>						</td>

                    </tr>
					<?php } ?>
                                      <tr>
                                        <td colspan="9">&nbsp;</td>
                                      </tr>
                                      <tr>
                        <td colspan="9">	<p align="left">
<a class="btn btn-small show-tooltip" title="Cadastro de nova Matrícula" href="default.php?pg=view/professor/incluir_matricula.php&form=Cadastro de nova matricula do professor <?php echo utf8_encode(mysql_result($r,0,'p.nome')); ?>&id=<?php echo utf8_encode(mysql_result($r,0,'p.idpessoas')); ?>"><i class="icon-plus-sign"> <b>NOVA MATRÍCULA</b></i></a>
</p></td>
                        </tr>
            </tbody></table>
		
		

        </div>
		

    </fieldset>
		<br />
	
	<fieldset style="background: none repeat scroll 0 0 #AECEF4;
    font-size: 100%; border: 1px solid #000000;">
<legend style="border: 1px solid #000000; background:#FFFFFF">   ATIVIDADES FUNCIONAIS</legend>
        <br>

        <div style="margin-left:15px; background:#AECEF4">
            <table width="1059">
                                    <tbody>
									<?php for($i=0;$i<$ln2;$i++){?>
									<tr>
                        <td width="88">FUNÇÃO: </td>
                        <td width="214"><b><?php echo utf8_encode(mysql_result($r2,$i,'funcao.funcao'));?></b></td>
                        
                        <td width="136">DATA DE INÍCIO :</td>
                        <td width="98"><b><?php echo mysql_result($r2,$i,'inicio');?></b></td>
                        <td width="95">TÉRMINO :</td>
                        <td width="102"><b><?php echo mysql_result($r2,$i,'termino');?></b></td>
                        <td width="294"> 
						<a class="btn btn-small show-tooltip" title="Editar" href="default.php?pg=view/professor/editar_atividades_funcionais.php&form=Atualizar Dados da Atividade Funcional do professor <?php echo utf8_encode(mysql_result($r,0,'p.nome')); ?>&id=<?php echo utf8_encode(mysql_result($r2,$i,'af.idatividadesfuncionais')); ?>"><i class="icon-edit"> <b>EDITAR ATIVIDADE FUNCIONAL </b></i></a>						</td>
                    </tr>
					<?php } ?>
                                      <tr>
                                        <td colspan="9">&nbsp;</td>
                                      </tr>
                                      <tr>
                        <td colspan="9">	<p align="left">
<a class="btn btn-small show-tooltip" title="Cadastro de nova atividade funcional" href="default.php?pg=view/professor/incluir_atividades_funcionais.php&form=Cadastro de Nova Atividade Funcional do professor <?php echo utf8_encode(mysql_result($r,0,'p.nome')); ?>&id=<?php echo utf8_encode(mysql_result($r,0,'p.idpessoas')); ?>"><i class="icon-plus-sign"> <b>NOVA MATRÍCULA</b></i></a>
</p></td>
                        </tr>
            </tbody></table>
		
		

        </div>
		

    </fieldset>