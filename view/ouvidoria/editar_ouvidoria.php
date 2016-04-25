<?php



require("../controles/ouvidoria.php");

Processo('editar');



?>

<!doctype html>
<html class=" gecko win js" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Reserva Jardim</title>
<link href="../estilos-adm.css" rel="stylesheet" type="text/css" media="screen">
<link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
<meta name="keywords" content="cyrela, rjz, cidade jardim, reserva jardim, reserva do parque, majestic, barra da tijuca, condomï¿½nio, portal, home show, imï¿½veis, 2, 3 e 4 quartos, web, apartamentos, ascija, venda de imï¿½veis, lazer completo, reservajardim, reservajardimrj, bairro planejado, plantas humanizadas, reserva jardim" />
<link rel="stylesheet" href="../core/js/jquery-fancybox/jquery.fancybox-1.3.1.css" type="text/css" media="screen" title="no title" charset="utf-8" />
<link href="../css/design.css" rel="stylesheet" type="text/css">
<style type="text/css">
.ticketrow {
	background-color: #F5FFFA;
	border: 1px dotted #748AAF;
	color: #4A5571;
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	font-size: 12px;
	padding: 6px;
}
</style>
<script src="../core/js/jquery-1.4.2.min.js" type="text/javascript" charset="utf-8"></script>
<script src="../core/js/jquery-fancybox/jquery.fancybox-1.3.1.pack.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="../js/validacaoform.js"></script>
<script src="../js/formulario.js" type="text/javascript"></script>
<script src="../core/js/jquery-fancybox/jquery.easing-1.3.pack.js" type="text/javascript" charset="utf-8"></script>
<script src="../core/js/pngFix/jquery.pngFix.pack.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="../js/jquery-1.6.1.min.js"></script>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<!-- incluindo a biblioteca jquery -->
<script type="text/javascript" src="../js/jquery-1.3.2.js" ></script>
<script src="../js/jquery-1.3.2.js" type=text/javascript></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="geral">
  <div id="topo"><a href="index.php"><img src="../img/logo-system.png" width="392" height="110" alt="Reserva Jardim - Sistema "></a></div>
  <!-- #topo -->
  <div id="menu2">
    <p class="reserva2">CADASTRAMENTO OUVIDORIA</p>
  </div>
  <!-- #menu2 -->
  <div id="acessoMorador">
    <p><?php echo $_SESSION["nome"]; ?>, voc&ecirc; est&aacute; on! <a href="../includes/logout.php"> [DESCONECTAR]</a></p>
  </div>
  <div id="conteudo_admin">
    <div id="left2">
      <div id="menul">
        <? include ("include/menu-morador.php") ?>
      </div>
      <!--#menul-->
    </div>
    <!--#left2-->
    <div id="meio2">
      <div class="botao"> <a href="consulta_ouvidoria.php">Consulta Ouvidoria</a> </div>
      <div id="conteudo_meio">
        <form action="" method="post" enctype="multipart/form-data" name="form" id="form">
          <center>
            <table width="501" border="0" align="center">
              <tr>
                <td><b>Assunto : <?php echo mysql_result($rs, 0, 'assunto'); ?></b></td>
                <td width="16"><?php if($_SESSION['idperfil']==1 || $_SESSION['idperfil']==2 || $_SESSION['idperfil']==4){ ?>
                  <?php if(mysql_result($rs,0,'ouv.situacao')<>"Finalizado"){ ?>
                  <a href="#">
                  <input type="button" name="enviar" value="" class="fechado" onClick="document.form.ok.value='fecharprotocolo', document.form.submit();" title="Fechamento de protocolo">
                  </a>
                  <?php }?>
                  <?php } ?></td>
                <td width="16"><?php if(mysql_result($rs,0,'ouv.situacao')<>"Cancelado"){ ?>
                  <!--<a href="#">
                  <input type="button" name="enviar" value="" class="cancelar" onClick="document.form.ok.value='cancelarprotocolo', document.form.submit();" title="Cancelamento de protocolo">
                  </a>-->
                  <?php }?></td>
              </tr>
            </table>
          </center>
          <div id="cadastro_morador">
            <div id="consulta_admin">
              <table width="100%" border="0">
                <tr>
                  <td colspan="2">Protocolo : <b><?php echo mysql_result($rs,0,'ouv.protocolo'); ?></b></td>
                </tr>
                <tr>
                  <td colspan="2">Criado em : <?php echo mysql_result($rs,0,'data_hora'); ?></td>
                </tr>
                <tr>
                  <td colspan="2">Situa&ccedil;&atilde;o do protocolo : <?php echo mysql_result($rs,0,'ouv.situacao'); ?></td>
                </tr>
                <tr>
                  <td colspan="2"><?php echo @mysql_result($rs,0,'e.descricao'); ?> Apto: <?php echo @mysql_result($rs,0,'a.descricao'); ?></td>
                </tr>
                <tr>
                  <td colspan="2">Respostas : <?php echo $linha3; ?></td>
                </tr>
                <!--<tr>
                  <td colspan="2">Atualizado em : <?php //echo mysql_result($rs3, $i, 'data_hora'); ?></td>
                </tr>-->
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td width="10"> Classifica&ccedil;&atilde;o
                    <select name="classificacao" id="classificacao" disabled="disabled">
                      <option value="">Selecione uma op&ccedil;&atilde;o</option>
                      <?php for($i=0;$i<$linha2;$i++){?>
                      <option value="<?php echo mysql_result($rs2,$i,'idclassificacao');?>"  ><?php echo mysql_result($rs2,$i,'descricao');?></option>
                      <?php  



                         }?>
                    </select></td>
                  <td width="10"> Categoria
                    <select name="baseconhecimentos" id="baseconhecimentos" >
                      <option value="" selected="selected">Selecione uma op&ccedil;&atilde;o</option>
                      <?php for($i=0;$i<$linha;$i++){



                         if(mysql_result($rs ,0,'idbaseconhecimentos') <> mysql_result($rs1,$i,'idbaseconhecimentos')){ ?>
                      <option value="<?php echo mysql_result($rs1, $i ,'idbaseconhecimentos');?>"><?php echo mysql_result($rs1 ,$i,'descricao');?></option>
                      <?php }else { ?>
                      <option value="<?php echo mysql_result($rs1, $i ,'idbaseconhecimentos');?>" selected="" ><?php echo mysql_result($rs1 ,$i,'descricao');?></option>
                      <?php }



                       }?>
                    </select></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </table>
              <table width="492">
                <tr>
                  <td colspan="2"></td>
                </tr>
              </table>
              <div style="-moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px; background: none repeat scroll 0% 0% rgb(247, 247, 247); border: 1px solid rgb(0, 0, 0); color: black; height: auto; margin: 10px; padding: 20px; width: 400px;"> Interessado : <?php echo mysql_result($rs,0,'u.nome'); ?><br />
                E-mail : <?php echo mysql_result($rs,0,'u.email'); ?><br />
                <?php if (mysql_result($rs, 0, 'ouv.foto') != '../restrito3/fotos/' && mysql_result($rs, 0, 'ouv.foto') != '' ){ ?>
                Imagem : <br>
                <img src="<?php echo mysql_result($rs, 0, 'ouv.foto'); ?>" style="height:100px"><br/>
                <?php } ?>
                <br>
                <b>Mensagem </b> <br>
                <?php echo mysql_result($rs, 0, 'observacao'); ?><br>
                <br>
                <?php 



if($linha3>0){



for($i=0;$i<$linha3;$i++){?>
                <b>Mensagem </b>
                <div class="ticketrow"> Data / Hora : <?php echo mysql_result($rs3, $i, 'data_hora'); ?> <br>
                  Nome : <?php echo mysql_result($rs3, $i, 'u.nome'); ?> <br>
                  Perfil : <?php echo mysql_result($rs3, $i, 'p.descricao'); ?><br>
                  <br>
                  <b>Mensagem :</b><br>
                  <br>
                  <?php echo mysql_result($rs3, $i, 'ip.resposta'); ?> <br>
                  <br>
                </div>
                <br>
                <?php } }?>
              </div>
              <?php if(mysql_result($rs,0,'ouv.situacao')=="Em aberto"){ ?>
              <table width="492">
                <tr>
                  <td><strong>Resposta</strong></td>
                </tr>
                <tr>
                  <td><textarea name="resposta" rows="3" cols="53" id="resposta" title="O campo responder é obrigatório"><?php echo $_POST['resposta']; ?></textarea></td>
                </tr>
                <tr>
                  <td width="82">&nbsp;</td>
                </tr>
                <!-- <tr>



                    <td><img src="../classes/captcha.php" alt="cÃ³digo captcha" /></td>



                    <td><label for="captcha">Digite o c&oacute;digo</label><input type="text" name="captcha" id="captcha" />



                    </td>



                </tr>-->
                <tr>
                  <td colspan="2"><div align="center">
                      <input type="button" name="enviar" value="Responder" id="botao_normal" onClick="validar(document.form);">
                      <input type="hidden" name="ok" id="ok" value=""/>
                    </div></td>
                </tr>
              </table>
              <?php }?>
              <label></label>
            </div>
          </div>
          <!-- #cadastro -->
        </form>
      </div>
      <!--#conteudo_meio-->
    </div>
    <!--#meio2-->
  </div>
  <!-- #conteudo -->
  <div id="rodape">
    <div id="endereco"> Condom&iacute;nio Residencial Reserva Jardim<br >
      Av. Vice-Presidente Jos&eacute; Alencar, 1.500<br >
      Barra da Tijuca - Cep 22.775-033<br >
      Telefone: (21) 3497-6493 </div>
    <!-- #endereco -->
    <div id="copyright"> &copy; 2010-2012. Todos os direitos reservados.<br>
      Portal mantido por <a href="http://www.omegadobrasil.com.br" target="_blank"><img src="http://www.omegadobrasil.com.br/footer/omega1.png" alt="Omega do Brasil" ></a> </div>
    <!-- #copyright -->
  </div>
  <!-- #rodape -->
</div>
<!-- #geral -->
</body>
</html><script>



document.form.classificacao.value='<?php echo mysql_result($rs ,0,'idclassificacao');?>';



</script>
