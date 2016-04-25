<?php
require("controles/ouvidoria.php");

//VERIFICACAO DA PAGINA
$pagina_atual = explode ("/", $_SERVER['PHP_SELF']); 

Processo('consultar_new');
?>

<!doctype html>
<html class=" gecko win js" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Reserva Jardim</title>
<link href="../estilos-adm.css" rel="stylesheet" type="text/css" media="screen">
<link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
<meta name="keywords" content="cyrela, rjz, cidade jardim, reserva jardim, reserva do parque, majestic, barra da tijuca, condom�nio, portal, home show, im�veis, 2, 3 e 4 quartos, web, apartamentos, ascija, venda de im�veis, lazer completo, reservajardim, reservajardimrj, bairro planejado, plantas humanizadas, reserva jardim" />
<link rel="stylesheet" href="../core/js/jquery-fancybox/jquery.fancybox-1.3.1.css" type="text/css" media="screen" title="no title" charset="utf-8" />
<link href="../css/design.css" rel="stylesheet" type="text/css">
<style type="text/css"></style>
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

<script type="text/javascript">
$(document).ready(function(){

        // Evento change no campo idedificios  

         $("select[name=idedificios]").change(function(){

            // Exibimos no campo idapartamentos antes de concluirmos

			$("select[name=idapartamentos]").html('<option value="">Carregando edifícios...</option>');

            // Exibimos no campo marca antes de selecionamos a marca, serve tamb�m em caso

			// do usuario ja ter selecionado o tipo e resolveu trocar, com isso limpamos a

			// sele��o antiga caso tenha feito.

			// Passando tipo por parametro para a pagina ajax_edidficio.php

            $.post("../ajax/ajax_edificios.php",

                  {idedificios:$(this).val()},

                  // Carregamos o resultado acima para o campo marca

				  function(valor){

                     $("select[name=idapartamentos]").html(valor);

                  }

                  )

         });

	  });    
</script>
<script type="text/javascript">
                        <!--
                        function MM_showHideLayers() { //v9.0
                            var i,p,v,obj,args=MM_showHideLayers.arguments;
                            for (i=0; i<(args.length-2); i+=3) 
                            with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
                                if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
                                obj.visibility=v; }
                        }
                        //-->
                    </script>
<script type="text/javascript" charset="utf-8">
                        $(document).ready(function() {
                            $(document).pngFix();
                            $("a.fancy_img").fancybox({
                                'titlePosition'  : 'inside',
                                'transitionIn'   : 'elastic',
                                'transitionOut'	 : 'elastic'
                            });			
                        });
                    </script>
<script type="text/javascript">
                        function FormataCpf(campo, teclapres)
                        {
                            var tecla = teclapres.keyCode;
                            var vr = new String(campo.value);
                            vr = vr.replace(".", "");
                            vr = vr.replace("/", "");
                            vr = vr.replace("-", "");
                            tam = vr.length + 1;
                            if (tecla != 14)
                            {
                                if (tam == 4)
                                campo.value = vr.substr(0, 3) + '.';
                            if (tam == 7)
                            campo.value = vr.substr(0, 3) + '.' + vr.substr(3, 6) + '.';
                        if (tam == 11)
                        campo.value = vr.substr(0, 3) + '.' + vr.substr(3, 3) + '.' + vr.substr(7, 3) + '-' + vr.substr(11, 2);
                }
            }            //mascara para o telefone
            function mascara(o,f){
                v_obj= o
                v_fun= f
                setTimeout("execmascara()",1)
            }

            function execmascara(){
                v_obj.value=v_fun(v_obj.value)
            }

            function soNumeros(v){
                return v.replace(/\D/g,"")
            }

            function telefone1(v){
                v=v.replace(/\D/g,"")                 //Remove tudo o que n�o � d�gito
                v=v.replace(/^(\d\d)(\d)/g,"($1) $2") //Coloca par�nteses em volta dos dois primeiros d�gitos
                v=v.replace(/(\d{4})(\d)/,"$1-$2")    //Coloca h�fen entre o quarto e o quinto d�gitos
                return v
            }
            //fim da mascara para o telefone                    </script>
<!---->
<script type="text/javaScript"> 
 
            function validaForm(){
                d = document.cadastro;
		  
                //validar nome
                if (d.nome.value == ""){
                    alert("O campo " + d.nome.name + " deve ser preenchido!");
                    d.nome.focus();
                    return false;
                }
                //validar cpf
                if (d.cpf.value == ""){
                    alert("O campo " + d.cpf.name + " deve ser preenchido!");
                    d.cpf.focus();
                    return false;
                }

                //validar email
                if (d.email.value == ""){
                    alert("O campo " + d.email.name + " deve ser preenchido!");
                    d.email.focus();
                    return false;
                }
                //validar email(verificao de endereco eletr�nico)
                parte1 = d.email.value.indexOf("@");
                parte2 = d.email.value.indexOf(".");
                parte3 = d.email.value.length;
                if (!(parte1 >= 3 && parte2 >= 6 && parte3 >= 9)) {
                    alert ("O campo " + d.email.name + " deve ser conter um endereco eletronico!");
                    d.email.focus();
                    return false;
                }
	
				
                //validar telefone
                if (d.telefone.value == ""){
                    alert("O campo " + d.telefone.name + " deve ser preenchido!");
                    d.telefone.focus();
                    return false;
                }
   			   
                //validar contato
                if (d.contato.value == ""){
                    alert("O campo " + d.contato.name + " deve ser preenchido!");
                    d.contato.focus();
                    return false;
                }
                          if ( (d.nome.value != "") && (d.cpf.value != "") && (d.email.value != "") && (d.telefone.value != "") && (d.contato.value != "")){        
                    d.submit();
                    alert("Mensagem enviada com sucesso!");  
		       
                } 
            }

                    </script>
<script LANGUAGE="Javascript">

            //Aplica a m�scara no campo
            //Fun��o para ser utilizada nos eventos do input para formata��o din�mica
            function aplica_mascara_cpfcnpj(campo,tammax,teclapres) {
                var tecla = teclapres.keyCode;

                if ((tecla < 48 || tecla > 57) && (tecla < 96 || tecla > 105) && tecla != 46 && tecla != 8) {
                    return false;
                }

                var vr = campo.value;
                vr = vr.replace( /\//g, "" );
                vr = vr.replace( /-/g, "" );
                vr = vr.replace( /\./g, "" );
                var tam = vr.length;

                if ( tam <= 2 ) {
                    campo.value = vr;
                }
                if ( (tam > 2) && (tam <= 5) ) {
                    campo.value = vr.substr( 0, tam - 2 ) + '-' + vr.substr( tam - 2, tam );
                }
                if ( (tam >= 6) && (tam <= 8) ) {
                    campo.value = vr.substr( 0, tam - 5 ) + '.' + vr.substr( tam - 5, 3 ) + '-' + vr.substr( tam - 2, tam );
                }
                if ( (tam >= 9) && (tam <= 11) ) {
                    campo.value = vr.substr( 0, tam - 8 ) + '.' + vr.substr( tam - 8, 3 ) + '.' + vr.substr( tam - 5, 3 ) + '-' + vr.substr( tam - 2, tam );
                }
                if ( (tam == 12) ) {
                    campo.value = vr.substr( tam - 12, 3 ) + '.' + vr.substr( tam - 9, 3 ) + '/' + vr.substr( tam - 6, 4 ) + '-' + vr.substr( tam - 2, tam );
                }
                if ( (tam > 12) && (tam <= 14) ) {
                    campo.value = vr.substr( 0, tam - 12 ) + '.' + vr.substr( tam - 12, 3 ) + '.' + vr.substr( tam - 9, 3 ) + '/' + vr.substr( tam - 6, 4 ) + '-' + vr.substr( tam - 2, tam );
                }
            }

            //Verifica se CPF ou CGC e encaminha para a devida fun��o, no caso do cpf/cgc estar digitado sem mascara
            function verifica_cpf_cnpj(cpf_cnpj) {
                if (cpf_cnpj.length == 11) {
                    return(verifica_cpf(cpf_cnpj));
                } else if (cpf.length == 14) {
                    return(verifica_cnpj(cpf_cnpj));
                } else { 
                    return false;
                }
                return true;
            }

            //Verifica se o n�mero de CPF informado � v�lido
            function verifica_cpf(sequencia) {
                if ( Procura_Str(1,sequencia,'00000000000,11111111111,22222222222,33333333333,44444444444,55555555555,66666666666,77777777777,88888888888,99999999999,00000000191,19100000000') > 0 ) {
                    return false;
                }
                seq = sequencia;
                soma = 0;
                multiplicador = 2;
                for (f = seq.length - 3;f >= 0;f--) {
                    soma += seq.substring(f,f + 1) * multiplicador;
                    multiplicador++;
                }
                resto = soma % 11;
                if (resto == 1 || resto == 0) {
                    digito = 0;
                } else {
                    digito = 11 - resto;
                }
                if (digito != seq.substring(seq.length - 2,seq.length - 1)) {
                    return false;
                }
                soma = 0;
                multiplicador = 2;
                for (f = seq.length - 2;f >= 0;f--) {
                    soma += seq.substring(f,f + 1) * multiplicador;
                    multiplicador++;
                }
                resto = soma % 11;
                if (resto == 1 || resto == 0) {
                    digito = 0;
                } else {
                    digito = 11 - resto;
                }
                if (digito != seq.substring(seq.length - 1,seq.length)) {
                    return false;
                }
                return true;
            }

            //Verifica se o n�mero de CNPJ informado � v�lido
            function verifica_cnpj(sequencia) {
                seq = sequencia;
                soma = 0;
                multiplicador = 2;
                for (f = seq.length - 3;f >= 0;f-- ) {
                    soma += seq.substring(f,f + 1) * multiplicador;
                    if ( multiplicador < 9 ) {
                        multiplicador++;
                    } else {
                        multiplicador = 2;
                    }
                }
                resto = soma % 11;
                if (resto == 1 || resto == 0) {
                    digito = 0;
                } else {
                    digito = 11 - resto;
                }
                if (digito != seq.substring(seq.length - 2,seq.length - 1)) {
                    return false;
                }

                soma = 0;
                multiplicador = 2;
                for (f = seq.length - 2;f >= 0;f--) {
                    soma += seq.substring(f,f + 1) * multiplicador;
                    if (multiplicador < 9) {
                        multiplicador++;
                    } else {
                        multiplicador = 2;
                    }
                }
                resto = soma % 11;
                if (resto == 1 || resto == 0) {
                    digito = 0;
                } else {
                    digito = 11 - resto;
                }
                if (digito != seq.substring(seq.length - 1,seq.length)) {
                    return false;
                }
                return true;
            }

            //Procura uma string dentro de outra string
            function Procura_Str(param0,param1,param2) {
                for (a = param0 - 1;a < param1.length;a++) {
                    for (b = 1;b < param1.length;b++) {
                        if (param2 == param1.substring(b - 1,b + param2.length - 1)) {
                            return a;
                        }
                    }
                }
                return 0;
            }

            //Retira a m�scara do valor de cpf_cnpj
            function retira_mascara(cpf_cnpj) {
                return cpf_cnpj.replace(/\./g,'').replace(/-/g,'').replace(/\//g,'')
            }

 
                    </script>
                    
                    <script>
$(document).ready(function() {

$('.divs').hide();$('#d1').show();

});
</script>
</head>
<IFRAME id=gToday:normal:agenda.js:ctyPopCalendario style="Z-INDEX: 999; LEFT: -800px; VISIBILITY: visible; POSITION: absolute; TOP: 0px"  name=gToday:normal:agenda.js:ctyPopCalendario  src="mostra.htm" frameBorder=0 width=174 scrolling=no  height=189></IFRAME>
<style>
			.botaoCalendario { border:none; background-image: url("img/calendar.gif"); height: 18px; width: 18px; }

			#mudancas { margin:15px 0; }
			.campo-mudanca { margin:10px; }
		</style>
<body>
    <div id="geral">







                            <div id="topo">



                                <a href="index.php"><img src="../img/logo-system.png" width="392" height="110" alt="Reserva Jardim - Sistema "></a>



                            </div><!-- #topo -->







                            <div id="menu2">



                                <p class="reserva2">CADASTRAMENTO OUVIDORIA </p>



                            </div><!-- #menu -->







                            <div id="acessoMorador">



                                <p><? echo $_SESSION["nome"]; ?>, voc&ecirc; est&aacute; on! <a href="../includes/logout.php"> [DESCONECTAR]</a></p>



                            </div>







                            <div id="conteudo_admin">







                                <div id="left2">



                                    <div id="menul">



                                        <? include('include/menu-morador.php') ?>



                                    </div><!--#menul-->



                                </div><!--#left2-->







                                <div id="meio2"> 







                                    <div class="botao"><a href="cadastro_ouvidoria.php">Novo Cadastro </a></div>







                                    <div id="conteudo_meio">







                                        <div id="cadastro_morador">



                                            <form name="form" method="post" action="">



                                                <div id="consulta_admin">



                                                    <p class="criterio">Crit&eacute;rio de consulta</p>
                                                    <label>Filtro:<span class="textos_red">*</span></label>
                                                    <select name="filtro_criterio" onChange="$('.divs').hide();$('#'+this.value).show();">
                                                      <option>Crit&eacute;rio de consulta</option>
                                                      <option value="protocolo">Protocolo</option>
                                                      <option value="blocoApto">Bloco/Apto</option>
                                                      <option value="periodo">Per&iacute;odo</option>
                                                    </select>




                                                     
                                                        <div id="protocolo" class="divs" style="display:none;">
                                                          <label>Protocolo</label>
                                                          <input type="text" name="nProtocolo">
                                                          <input name="ok" type="hidden" id="ok" value="0"/>
                                                        <input name="Button2" type="button" class="btnBuscarEscuro" onMouseMove="this.className='btnBuscar'" onMouseOut="this.className='btnBuscarEscuro'" value="Pesquisa" onClick="validar(document.form);" title="Pesquisar"/>
                                                        </div>
              


                                                                <div id="blocoApto" class="divs" style="display:none;">
                                                                             <label>Bloco</label>
                                                                            <select name="idedificios" id="idedificios">
                                                                             <option value="" selected="selected">Selecione o bloco</option>
                                                                             <?php for($i=0;$i<$lnApt;$i++){?>
                                                                             <option value="<?php echo mysql_result($rsApt,$i,'idedificios');?>"><?php echo mysql_result($rsApt,$i,'descricao');?></option>
                                                                             <?php }?>
                                                                           </select>
                                                                             <label>Apto</label>
                                                                             <select name="idapartamentos" id="idapartamentos">
                                                                              <option value="" selected="selected">Aguardando edif&iacute;cio...</option>
                                                                            </select>
                                                                             <label>Situa&ccedil;&atilde;o</label>
                                                                             <select name="situacao1">
                                                                             <option value="">Selecione Situa&ccedil;&atilde;o</option>
                                                                             <option value="Cancelado">Cancelado</option>
                                                                             <option value="Em aberto">Em aberto</option>
                                                                             <option value="Finalizado">Finalizado</option>
                                                                             </select>
                                                                             <input name="ok" type="hidden" id="ok" value="0"/>
                                                                           <input name="Button2" type="button" class="btnBuscarEscuro" onMouseMove="this.className='btnBuscar'" onMouseOut="this.className='btnBuscarEscuro'" value="Pesquisa" onClick="validar(document.form);" title="Pesquisar"/>
                                                                           </div>
                                                                                        <div id="periodo" class="divs" style="display:none;">

                                                                                                     <label>Data In&iacute;cio</label>
                                                                                                    <input name="data_inicio" type="text" class="form_obrigatorio" id="data_inicio"
                                                                                       onkeypress="return Mascaras_Format(document.form,'data_inicio','99/99/9999',event);" value="<?php echo $_POST['data_inicio']; ?>" size="12" maxlength="10" onBlur="return valida_data1(document.form.data_inicio,5);"/>
                                                                                                     <input name="button" type="button" class="botaoCalendario"  title="Calend&aacute;rio" onClick="selectDate('form','data_inicio')"/>


                                                                                                     <label>Data Final</label>
                                                                                                     <input name="data_fim" type="text" class="form_obrigatorio" id="data_fim"
                                                                                       onkeypress="return Mascaras_Format(document.form,'data_fim','99/99/9999',event);" value="<?php echo $_POST['data_fim']; ?>" size="12" maxlength="10" onBlur="return valida_data2(document.form.data_fim,5);"/>
                                                                                                     <input name="button" type="button" class="botaoCalendario"  title="Calend&aacute;rio" onClick="selectDate('form','data_fim')"/>
                                                                                                   <label>Situa&ccedil;&atilde;o</label>
                                                                                                        <select name="situacao2">
                                                                                                       <option value="">Selecione Situa&ccedil;&atilde;o</option>
                                                                                                       <option value="Cancelado">Cancelado</option>
                                                                                                       <option value="Em aberto">Em aberto</option>
                                                                                                       <option value="Finalizado">Finalizado</option>
                                                                                                       </select>
                                                                                                       <input name="ok" type="hidden" id="ok" value="0"/>
                                                                                                     <input name="Button2" type="button" class="btnBuscarEscuro" onMouseMove="this.className='btnBuscar'" onMouseOut="this.className='btnBuscarEscuro'" value="Pesquisa" onClick="validar(document.form);" title="Pesquisar"/>

                                                                                                     </div>

                                                </div>



                                                <?php if ($linhaPesq > 0) { ?>

                                                    <table width="712" border="0" >



                                                         <tr bgcolor="#3366CC">

                                                                <td bgcolor="#A1AF49" ><font color="#FFFFFF"><strong>Protocolo</strong></font></td>

                                                                <td bgcolor="#A1AF49" ><font color="#FFFFFF"><strong>Nome<span class="style1"></span></strong></font></td>

                                                                <td bgcolor="#A1AF49" ><font color="#FFFFFF"><strong>Situacao<span class="style1"></span></strong></font></td>
                                                                
                                                                <td bgcolor="#A1AF49"></td>
                                                            </tr>

                                                        <?php
                                                       $i = 0;  
                                                        while ($i < $linhaPesq) {
                                                         
                                                            if ($idcor == 1) { //atribui um linha de cor de um tipo e outra de outro tipo
                                                                $cor = '#EEEEEE';

                                                                $idcor = 0;
                                                            } else {

                                                                $cor = '#FFFFFF';

                                                                $idcor = 1;
                                                            }
                                                            ?>

                                                            <tr bgcolor="<? print $cor; ?>">

                                                                <td height="20" class="textos"><?php echo mysql_result($rsPesq, $i, 'protocolo'); ?></td>

                                                                <td class="textos"><?php echo mysql_result($rsPesq, $i, 'nome'); ?></td>
                                                                
                                                                <td class="textos"><?php echo mysql_result($rsPesq, $i, 'situacao'); ?></td>

                                                                <td width="37">
                                                                  
                                                                      <?php 
                                                                        if($pagina_atual[1] == "restrito3"){?>  
                                                                            <a href="exibir_ouvidoria.php?id=<?php echo mysql_result($rsPesq, $i, 'idouvidoria'); ?>"><img src="img/ico_lupa_29x25.gif" alt="VISUALIZA&Ccedil;&Atilde;O/EDI&Ccedil;&Atilde;O" width="29" height="18" border="0"></a>
                                                                           <?php }else{ ?>
                                                                            <a href="editar_ouvidoria.php?id=<?php echo mysql_result($rsPesq, $i, 'idouvidoria'); ?>"><img src="img/ico_lupa_29x25.gif" alt="VISUALIZA&Ccedil;&Atilde;O/EDI&Ccedil;&Atilde;O" width="29" height="18" border="0"></a>
                                                                        <?php } ?>
                                                                
                                                                </td>

                                                            </tr>

                                                            <?php $i++;
                                                        }
                                                        ?>

                                                    </table>

                                                    <div align="right"><span class="textos_red"><?php echo 'Total de Registros: ' . $linhaPesq; ?></span></div>

                                                <?php } else {
                                                    if ($_POST['ok'] != '') {
                                                        ?>
                                                        <p class="red">Nenhum Registro encontrado!</p>
                                                    <?php
                                                    }
                                                }
                                                ?>
                                            </form>
                                            
                                            <?php if ($_POST['ok'] == '') { ?>
                                              
                                            <table width="712" border="0" >



                                                <tr bgcolor="#3366CC">

                                                    <td bgcolor="#A1AF49" ><font color="#FFFFFF"><strong>Protocolo</strong></font></td>

                                                    <td bgcolor="#A1AF49" ><font color="#FFFFFF"><strong>Nome<span class="style1"></span></strong></font></td>

                                                    <td bgcolor="#A1AF49" ><font color="#FFFFFF"><strong>Situacao<span class="style1"></span></strong></font></td>
                                                    
                                                    <td bgcolor="#A1AF49"></td>
                                                </tr>
                                                <?php
                                                
                                                // Conexão com o banco de dados
                                               //$conn = @mysql_connect("localhost", "root", "") or die("Problemas na conexão1");
                                                //$db = @mysql_select_db("reserva_reserva", $conn) or die("Problemas na conexão2");
                                                $conn = @mysql_connect("localhost", "reserva_reserva", "reserv@2013") or die ("Problemas na conexão1");
                                                $db = @mysql_select_db("reserva_reserva", $conn) or die ("Problemas na conex�o2");
                                                //A quantidade de valor a ser exibida
                                                $quantidade = 10;

                                                //a pagina atual
                                                $pagina = (isset($_GET['pagina'])) ? (int) $_GET['pagina'] : 1;

                                                //Calcula a pagina de qual valor será exibido
                                                $inicio = ($quantidade * $pagina) - $quantidade;

                                //Monta o SQL com LIMIT para exibição dos dados 
                                              if($_SESSION['idperfil']==4 || $_SESSION['idperfil']==15 || $_SESSION['idperfil']==6 || $_SESSION['idperfil']==10 ){
                                                $sql = "SELECT idouvidoria, protocolo,usuarios.nome AS nome, 
                                    situacao FROM 
                                    ouvidoria inner join usuarios on(ouvidoria.idusuarios = usuarios.id) 
                                    inner join classificacao on(ouvidoria.idclassificacao = classificacao.idclassificacao) 
                                     ORDER BY ouvidoria.dtreg  DESC LIMIT $inicio, $quantidade";
                                     }
									 
									  if($_SESSION['idperfil']==3){
									   $sql = "SELECT idouvidoria, protocolo,usuarios.nome AS nome, 
                                    classificacao.descricao AS descricao FROM 
                                    ouvidoria inner join usuarios on(ouvidoria.idusuarios = usuarios.id) 
                                    inner join classificacao on(ouvidoria.idclassificacao = classificacao.idclassificacao)
                                    where usuarios.id =".$_SESSION['id']." 
                                    ORDER BY ouvidoria.dtreg DESC LIMIT $inicio, $quantidade";
									  
									  }
                                    //Executa o SQL
                                                $qr = mysql_query($sql) or die(mysql_error());
                                                
                                               
                                                 //Percorre os campos da tabela
                                                while ($ln = mysql_fetch_assoc($qr)) {
                                                    $idouvidoria = $ln['idouvidoria'];
                                                    $protocolo = $ln['protocolo'];
                                                    $nome = $ln['nome'];
                                                    $situacao = $ln['situacao'];
                                                    if ($idcor == 1) { //atribui um linha de cor de um tipo e outra de outro tipo
                                                        $cor = '#EEEEEE';

                                                        $idcor = 0;
                                                    } else {

                                                        $cor = '#FFFFFF';

                                                        $idcor = 1;
                                                    }
                                                    ?>
                                                
                                                    <tr bgcolor="<? print $cor; ?>">

                                                        <td height="20" class="textos">&nbsp;<?php echo $protocolo; ?></td>

                                                        <td class="textos"><?php echo $nome; ?></td>

                                                        <td class="textos"><?php echo $situacao; ?></td>

                                                        <td width="37">
                                                          <?php 
                                                           if($pagina_atual[1] == "restrito3"){?>  
                                                            <a href="exibir_ouvidoria.php?id=<?php echo $idouvidoria; ?>"><img src="img/ico_lupa_29x25.gif" alt="VISUALIZA&Ccedil;&Atilde;O/EDI&Ccedil;&Atilde;O" width="29" height="18" border="0"></a>
                                                            <?php }else{ ?>
                                                            <a href="editar_ouvidoria.php?id=<?php echo $idouvidoria; ?>"><img src="img/ico_lupa_29x25.gif" alt="VISUALIZA&Ccedil;&Atilde;O/EDI&Ccedil;&Atilde;O" width="29" height="18" border="0"></a>
                                                            <?php } ?>
                                                        </td>

                                                    </tr>

                                                <?php
                                                $i++;
                                            }
                                            ?>
                                            </table>
                                            
                                            <div align="center" class="paginacao">
                                            <?php
                                            /* * * SEGUNDA PARTE DA PAGINAÇÃO */

                                            //SQL para saber o total
                                          $sqlTotal = "SELECT idouvidoria, protocolo,usuarios.nome AS nome, 
                                    classificacao.descricao AS descricao FROM 
                                    ouvidoria inner join usuarios on(ouvidoria.idusuarios = usuarios.id) 
                                    inner join classificacao on(ouvidoria.idclassificacao = classificacao.idclassificacao) 
                                     ORDER BY ouvidoria.dtreg  DESC";

                                            //Executa o SQL
                                            $qrTotal = mysql_query($sqlTotal) or die(mysql_error());

                                            //Total de Registro na tabela
                                            $numTotal = mysql_num_rows($qrTotal);

                                            //O calculo do Total de página ser exibido
                                            $totalPagina = ceil($numTotal / $quantidade);

                                            echo "<p class='pag'></p> ";
                                            if ($pagina > 2) {
                                                echo " <a href=\"?pagina=1\" >1</a>";
                                            }
                                            if ($pagina > 3) {
                                                echo "...";
                                            }

                                           //loop para mostra a os links da paginação
                                            for ($i = 1; $i < $totalPagina; $i++) {
                                                if ($i >= $pagina - 1 and $i <= $pagina + 1) {
                                                    if ($i == $pagina)
                                                        echo $i;
                                                    else
                                                        echo " <a href=\"?pagina=$i\">$i</a> ";
                                                }
                                            }
                                            //LOOP FINAL
                                            if ($totalPagina - $pagina > 2) {
                                                echo " ... ";
                                            }
                                            if ($i > $totalPagina - 3) {
                                                echo " <a href=\"?pagina=$i\">$i</a> ";
                                            }
                                            ?>
                                            </div>
                                            <?php } ?> 
                                        </div><!-- #cadastro_morador -->



                                    </div><!--$conteudo_meio-->



                                </div><!--#meio2"--> 







                            </div><!-- #conteudo_admin -->







                            <div id="rodape">



                                <div id="endereco">



                                    Condom&ocirc;nio Residencial Reserva Jardim<br >

                                        Av. Vice-Presidente Jos&eacute; Alencar, 1.500<br >

                                            Barra da Tijuca - Cep 22.775-033<br >

                                                Telefone: (21) 3497-6493 

                                                </div><!-- #endereco -->

                                                <div id="copyright">

                                                    &copy; 2010-2012. Todos os direitos reservados.<br>

                                                        Portal mantido por <a href="http://www.omegadobrasil.com.br" target="_blank"><img src="http://www.omegadobrasil.com.br/footer/omega1.png" alt="Omega do Brasil" ></a>

                                                </div><!-- #copyright -->

                                                </div><!-- #rodape -->

                                                </div> <!-- #geral --> 

                                                </body>

                                                </html>
 