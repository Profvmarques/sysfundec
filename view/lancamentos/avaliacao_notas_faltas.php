<?php
require_once('controles/inscricao.php');
Processo('atualizarNotas');
?>
<script type="text/javascript">
var ultimaMediaFinalValida;
function formataNotaOnBlur(valor){
mediaFinal = valor.replace(',', '.'); //Troca virgula por ponto

mediaFinal = parseFloat(mediaFinal);
mediaFinal = mediaFinal.toFixed(1); //Formata para 00.0
if(mediaFinal > 10){
//mediaFinal = '10.0';
alert("Voce digitou uma nota acima de 10.0");
valor.focus();

}
mediaFinal = mediaFinal.replace('.', ','); //Troca ponto por virgula
if(mediaFinal == 'NaN'){
mediaFinal = '';
}
valor= mediaFinal;
}

function formataNotaFinalOnKeyUp(valor){
mediaFinal = valor;
if(mediaFinal == ''){
//Nao precisa validar
return;
}
if(mediaFinal.search(/\,[0-9]?\,/) >= 0){
//Formato incorreto ! (ex. 3,,0 ou 1,1,)
valor = '';
return;
}
} 

function SomenteNumero(e){
var tecla=(window.event)?event.keyCode:e.which;
if((tecla>47 && tecla<58)) return true;
else{
if (tecla==8 || tecla==0) return true;
else return false;
}
}
</script>
<form class="form-horizontal" id="form" name="form" method="post">
  <div class="form-actions">
  <center>
                                  
                                  <button type="button" class="btn btn-primary" onClick="validar(document.form);">
                              </i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SALVAR DADOS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
    </center>
							  
                                  
  </div>
  <div style="margin-left:15px; background:#AECEF4">
    <?php if($linha3>0 && $_GET['tipo']=='av1'){  	?>
    <table width="100%" border="0" align="center" cellpadding="2" cellspacing="0" style="border: 1px solid #000000;">
      <thead>
        <tr>
          <th width="80">CURSO</th>
          <th height="23" colspan="2"><div align="left"><strong><?php echo $_GET['siglacurso'];?></strong></div></th>
          <th colspan="2"><div align="left">PERÍODO LETIVO <strong><?php echo $_GET['periodoletivo'];?></strong></div></th>
        </tr>
        <tr>
          <th>TURMA</th>
          <th width="123" height="23"><div align="left"><strong><?php echo $_GET['idturmas'];?></strong></div></th>
          <th width="359"><div align="left"><strong><?php echo $_GET['disciplina'];?></strong></div></th>
          <th width="159"><div align="left">PROFESSOR</div></th>
          <th width="334"><div align="left"><strong><?php echo $_GET['nome'];?></strong></div></th>
        </tr>
        <tr>
          <th height="23" colspan="5"><?php echo $avaliacao;?></th>
        </tr>
      </thead>
    </table>
    <table width="100%" class="table table-advance" id="table1" border="0" align="center" cellpadding="2" cellspacing="0" style="border: 1px solid #000000;">
      <thead>
        <tr>
          <th width="119">MATRÍCULA </th>
          <th width="519" height="23">ALUNO</th>
          <th colspan="2"><center>
            AV1 (Ex: 9.5 , 10.0) 
          </center></th>
          <th width="123"><center>FALTAS</center></th>
          <th width="127"><center>MÉDIA</center></th>
        </tr>
      </thead>
      <tbody>
        <?php for($i=0;$i<$linha3;$i++){?>
        <tr class="table-flag-blue">
          <td><strong><?php echo utf8_encode(mysql_result($rs3,$i,'ma.matricula_aluno'));?></strong></td>
          <td><strong><?php echo utf8_encode(mysql_result($rs3,$i,'p.nome'));?></strong></td>
          <td width="82"><input name="av1<?php echo $i;?>" type="text" class="input-mini" id="av1<?php echo $i;?>" onblur="formataNotaOnBlur(document.form.av1<?php echo $i;?>.value);" onkeyup="javascript:this.value=this.value.replace(/[^0-9.]/g, '');formataNotaFinalOnKeyUp(document.form.av1<?php echo $i;?>.value);" value="<?php echo mysql_result($rs3, $i, 'i.av1'); ?>" size="10" maxlength="4" placeholder=""/></td>
          <td width="81"><input name="nota1<?php echo $i;?>" type="text" id="nota1<?php echo $i;?>" class="input-mini" value="<?php echo utf8_encode(mysql_result($rs3,$i,'i.nota1')); ?>" size="10" placeholder=""/ onblur="formataNotaOnBlur(document.form.nota1<?php echo $i;?>.value);" onkeyup="javascript:this.value=this.value.replace(/[^0-9.]/g, '');formataNotaFinalOnKeyUp(document.form.nota1<?php echo $i;?>.value);"/></td>
          <td><div align="center"><center>
            <input name="falta_api<?php echo $i;?>" type="text" class="input-mini" id="falta_api<?php echo $i;?>" onkeypress='return SomenteNumero(event)' value="<?php echo utf8_encode(mysql_result($rs3,$i,'i.falta_api')); ?>" size="10" maxlength="3" placeholder=""/>
          </center>
          </div></td>
          <td><center><strong><?php echo round((mysql_result($rs3,$i,'i.av1')+mysql_result($rs3,$i,'i.nota1'))/2,2);?></strong></center></td>
        </tr>
        <?php }?>
      </tbody>
    </table>
    <?php }?>
    
  </div>
 
  <div style="margin-left:15px; background:#AECEF4">
    <?php if($linha3>0 && $_GET['tipo']=='av2'){  	?>
    <table width="100%" border="0" align="center" cellpadding="2" cellspacing="0" style="border: 1px solid #000000;">
      <thead>
        <tr>
          <th width="80">CURSO</th>
          <th height="23" colspan="2"><div align="left"><strong><?php echo $_GET['siglacurso'];?></strong></div></th>
          <th colspan="2"><div align="left">PERÍODO LETIVO <strong><?php echo $_GET['periodoletivo'];?></strong></div></th>
        </tr>
        <tr>
          <th>TURMA</th>
          <th width="123" height="23"><div align="left"><strong><?php echo $_GET['idturmas'];?></strong></div></th>
          <th width="359"><div align="left"><strong><?php echo $_GET['disciplina'];?></strong></div></th>
          <th width="159"><div align="left">PROFESSOR</div></th>
          <th width="334"><div align="left"><strong><?php echo $_GET['nome'];?></strong></div></th>
        </tr>
        <tr>
          <th height="23" colspan="5"><?php echo $avaliacao;?></th>
        </tr>
      </thead>
    </table>
    <table width="100%" class="table table-advance" id="table1" border="0" align="center" cellpadding="2" cellspacing="0" style="border: 1px solid #000000;">
      <thead>
        <tr>
          <th width="117">MATRÍCULA </th>
          <th width="436">ALUNO</th>
          <th height="23" colspan="2"><center>AV1</center></th>
          <th><center>
            MÉDIA
          </center></th>
          <th colspan="2"><center>AV2 (Ex: 9.5 , 10.0)</center> </th>
          <th width="76"><center>
            FALTAS
          </center></th>
          <th width="70"><center>
            MÉDIA
          </center></th>
          <th width="108">SITUAÇÃO</th>
        </tr>
      </thead>
      <tbody>
        <?php for($i=0;$i<$linha3;$i++){?>
        <tr class="table-flag-blue">
          <td><strong><?php echo utf8_encode(mysql_result($rs3,$i,'ma.matricula_aluno'));?></strong></td>
          <td><strong><?php echo utf8_encode(mysql_result($rs3,$i,'p.nome'));?></strong></td>
          <td width="38"><center><div align="center"><strong><?php echo utf8_encode(mysql_result($rs3,$i,'i.av1'));?></strong></div></center></td>
          <td width="41"><center><div align="center"><strong><?php echo utf8_encode(mysql_result($rs3,$i,'i.nota1'));?></strong></div></center></td>
          <td width="83"><center><strong><?php echo round((utf8_encode(mysql_result($rs3,$i,'i.av1'))+utf8_encode(mysql_result($rs3,$i,'i.nota1')))/2,2);?></strong></center></td>
          <td width="83"><input name="av2<?php echo $i;?>" type="text" class="input-mini" id="av2<?php echo $i;?>" onblur="formataNotaOnBlur(document.form.av2<?php echo $i;?>.value);" onkeyup="javascript:this.value=this.value.replace(/[^0-9.]/g, '');formataNotaFinalOnKeyUp(document.form.av2<?php echo $i;?>.value);" value="<?php echo utf8_encode(mysql_result($rs3,$i,'i.av2')); ?>" size="10" maxlength="4" placeholder=""/></td>
          <td width="70"><input name="nota2<?php echo $i;?>" type="text" id="nota2<?php echo $i;?>" class="input-mini" value="<?php echo utf8_encode(mysql_result($rs3,$i,'i.nota2')); ?>" size="10" placeholder=""/ onblur="formataNotaOnBlur(document.form.nota2<?php echo $i;?>.value);" onkeyup="javascript:this.value=this.value.replace(/[^0-9.]/g, '');formataNotaFinalOnKeyUp(document.form.nota2<?php echo $i;?>.value);"/></td>
          <td><div align="center">
            <center>
                <input name="falta_apii<?php echo $i;?>" type="text" class="input-mini" id="falta_apii<?php echo $i;?>" onkeypress='return SomenteNumero(event)' value="<?php echo utf8_encode(mysql_result($rs3,$i,'i.falta_apii')); ?>" size="10" maxlength="3" placeholder=""/>
              </center>
          </div></td>
          <td><center>
            <strong><?php echo round((((utf8_encode(mysql_result($rs3,$i,'i.av1'))+utf8_encode(mysql_result($rs3,$i,'i.nota1')))/2)+((utf8_encode(mysql_result($rs3,$i,'i.av2'))+utf8_encode(mysql_result($rs3,$i,'i.nota2')))/2))/2,2);?></strong>
          </center></td>
          <td><center>
              <strong><?php echo utf8_encode(mysql_result($rs3,$i,'si.descricao'));?></strong>
          </center></td>
        </tr>
        <?php }?>
      </tbody>
    </table>
    <?php }?>
  </div>
  <div style="margin-left:15px; background:#AECEF4">
    <?php if($linha3>0 && $_GET['tipo']=='as'){  	?>
    <table width="100%" border="0" align="center" cellpadding="2" cellspacing="0" style="border: 1px solid #000000;">
      <thead>
        <tr>
          <th width="80">CURSO</th>
          <th height="23" colspan="2"><div align="left"><strong><?php echo $_GET['siglacurso'];?></strong></div></th>
          <th colspan="2"><div align="left">PERÍODO LETIVO <strong><?php echo $_GET['periodoletivo'];?></strong></div></th>
        </tr>
        <tr>
          <th>TURMA</th>
          <th width="123" height="23"><div align="left"><strong><?php echo $_GET['idturmas'];?></strong></div></th>
          <th width="359"><div align="left"><strong><?php echo $_GET['disciplina'];?></strong></div></th>
          <th width="159"><div align="left">PROFESSOR</div></th>
          <th width="334"><div align="left"><strong><?php echo $_GET['nome'];?></strong></div></th>
        </tr>
        <tr>
          <th height="23" colspan="5"><?php echo $avaliacao;?></th>
        </tr>
      </thead>
    </table>
    <table width="100%" class="table table-advance" id="table1" border="0" align="center" cellpadding="2" cellspacing="0" style="border: 1px solid #000000;">
      <thead>
        <tr>
          <th width="102">MATRÍCULA </th>
          <th width="478" height="23">ALUNO</th>
          <th width="53" colspan="2">AV1</th>
          <th width="56">MÉDIA</th>
          <th width="52" colspan="2">AV2</th>
          <th width="56">MÉDIA</th>
          <th width="65"><center>
A.S
          </center></th>
          <th width="72"><center>
            MÉDIA
          </center></th>
          <th width="105">SITUAÇÃO</th>
        </tr>
      </thead>
      <tbody>
        <?php for($i=0;$i<$linha3;$i++){?>
        <tr class="table-flag-blue">
          <td><strong><?php echo utf8_encode(mysql_result($rs3,$i,'ma.matricula_aluno'));?></strong></td>
          <td><strong><?php echo utf8_encode(mysql_result($rs3,$i,'p.nome'));?></strong></td>
          <td><center>
            <div align="center"><strong><?php echo utf8_encode(mysql_result($rs3,$i,'i.av1'));?></strong></div>
          </center></td>
          <td><center>
            <div align="center"><strong><?php echo utf8_encode(mysql_result($rs3,$i,'i.nota1'));?></strong></div>
          </center></td>
          <td><center>
            <strong><?php echo round((utf8_encode(mysql_result($rs3,$i,'i.av1'))+utf8_encode(mysql_result($rs3,$i,'i.nota1')))/2,2);?></strong>
          </center></td>
          <td><center>
            <div align="center"><strong><?php echo utf8_encode(mysql_result($rs3,$i,'i.av2'));?></strong></div>
          </center></td>
          <td><center>
            <div align="center"><strong><?php echo utf8_encode(mysql_result($rs3,$i,'i.nota2'));?></strong></div>
          </center></td>
          <td><center>
            <strong><?php echo round((utf8_encode(mysql_result($rs3,$i,'i.av2'))+utf8_encode(mysql_result($rs3,$i,'i.nota2')))/2,2);?></strong>
          </center></td>
          <td><center>
            <input name="nota3<?php echo $i;?>" type="text" class="input-mini" id="nota3<?php echo $i;?>" value="<?php echo utf8_encode(mysql_result($rs3,$i,'i.nota3')) ?>" size="10" maxlength="3" placeholder="" onblur="formataNotaOnBlur(document.form.nota3<?php echo $i;?>.value);" onkeyup="javascript:this.value=this.value.replace(/[^0-9.]/g, '');formataNotaFinalOnKeyUp(document.form.nota3<?php echo $i;?>.value);"/>
          </center></td>
          <td><center>
            <strong><?php echo round((((mysql_result($rs3,$i,'i.av1')+mysql_result($rs3,$i,'i.nota1'))/2)+((mysql_result($rs3,$i,'i.av2')+mysql_result($rs3,$i,'i.nota2'))/2)+mysql_result($rs3,$i,'i.nota3'))/2,2);?></strong>
          </center></td>
          <td><center>
            <strong><?php echo utf8_encode(mysql_result($rs3,$i,'si.descricao'));?></strong>
          </center></td>
        </tr>
        <?php }?>
      </tbody>
    </table>
    <?php }?>
  </div>

  <div class="form-actions">
  <center>
                                  <button type="button" class="btn btn-primary" onClick="validar(document.form);">
                              </i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SALVAR DADOS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
							  </center>
							  
                                  
                               </div><input name="ok" type="hidden" id="ok"/>
</form>