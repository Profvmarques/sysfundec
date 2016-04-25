<!-- BEGIN Navlist -->
                <ul class="nav nav-list">
                  
                    <!-- END Search Form -->
<?php
session_start();

require_once('classes/usuarios.php');
$url = $_SERVER['PHP_SELF'];
$dir = explode("/", $url);

$usuarios = new Usuarios();
/*$sql = "SELECT adm_menu.publico, adm_modulos.nome, adm_menu.nome_menu, adm_menu.imagem,adm_menu.class_css,
		adm_menu.link_menu, adm_menu.link_externo, adm_menu.idmodulos, adm_menu.idmenu, 
		adm_menu.id_pai, adm_acesso_usuario.idusuarios, adm_menu.ordem_menu
		FROM adm_acesso_usuario RIGHT JOIN (adm_menu INNER JOIN adm_modulos ON 
		adm_menu.idmodulos = adm_modulos.idmodulos) ON adm_acesso_usuario.idmenu = adm_menu.idmenu
		WHERE (((adm_acesso_usuario.idusuarios)=" . $_SESSION["idusuarios"] . ")) and adm_menu.id_pai=0 and adm_menu.publico=1 
                    ORDER BY adm_menu.ordem_menu";*/
					
					
										$sql = "SELECT adm_menu.publico, adm_modulos.nome, adm_menu.nome_menu, adm_menu.imagem,adm_menu.class_css,
		adm_menu.link_menu, adm_menu.link_externo, adm_menu.idmodulos, adm_menu.idmenu, 
		adm_menu.id_pai, adm_acesso_usuario.idusuarios, adm_menu.ordem_menu
		FROM adm_acesso_usuario RIGHT JOIN (adm_menu INNER JOIN adm_modulos ON 
		adm_menu.idmodulos = adm_modulos.idmodulos) ON adm_acesso_usuario.idmenu = adm_menu.idmenu inner join adm_configuracao ac 
		on(adm_menu.idmenu = ac.idmenu)
		WHERE (((adm_acesso_usuario.idusuarios)=" . $_SESSION["idusuarios"] . ")) and adm_menu.id_pai=0 and adm_menu.publico=1 and ac.publico=1 and adm_acesso_usuario.publico=1 group by ac.idmenu ORDER BY adm_menu.ordem_menu";
					
$usuarios->Consultar($sql);
$rsmenu = $usuarios->Result;
$rstotal = $usuarios->Linha;
$i = 0;

//para imagens
//$caminho="http://localhost/reservateste/img/";
?>

<!-- <li>-->
     

<?php
for ($i = 0; $i < $rstotal; $i++) {
    $nome_menu = utf8_encode(mysql_result($rsmenu, $i, "nome_menu"));
    $imagem = '<img src="' . $caminho . mysql_result($rsmenu, $i, "imagem") . '"' . '>';

    $link_menu = mysql_result($rsmenu, $i, "link_menu");
    $idmodulos = mysql_result($rsmenu, $i, "idmodulos");
    $class_css = mysql_result($rsmenu, $i, "class_css");
    $idmenu = mysql_result($rsmenu, $i, "idmenu");
    $id_pai = mysql_result($rsmenu, $i, "id_pai");
    $pub = mysql_result($rsmenu, $i, "publico");

    //$id_usuario = mysql_result($rsmenu,$i,"id_usuario");
    $ordem_programa = mysql_result($rsmenu, $i, "ordem_menu");
    $externo = mysql_result($rsmenu, $i, "link_externo");

    /* -------------------------Para o submenu------------------------------------------------ */
    $sql = "SELECT adm_menu.publico, adm_modulos.nome, adm_menu.nome_menu, adm_menu.imagem,adm_menu.class_css,
		adm_menu.link_menu, adm_menu.link_externo, adm_menu.idmodulos, adm_menu.idmenu, 
		adm_menu.id_pai, adm_acesso_usuario.idusuarios, adm_menu.ordem_menu
		FROM adm_acesso_usuario RIGHT JOIN (adm_menu INNER JOIN adm_modulos ON 
		adm_menu.idmodulos = adm_modulos.idmodulos) ON adm_acesso_usuario.idmenu = adm_menu.idmenu 
		inner join adm_configuracao ac on(adm_menu.idmenu=ac.idmenu)
		WHERE (((adm_acesso_usuario.idusuarios)=" . $_SESSION["idusuarios"] . ")) and adm_menu.id_pai<>0 and adm_menu.idmodulos=" . $idmodulos . " and adm_menu.publico=1 and adm_acesso_usuario.publico=1 group by ac.idmenu ORDER BY adm_menu.ordem_menu";
    $usuarios->Consultar($sql);
    $rsmenu2 = $usuarios->Result;
    $rstotal2 = $usuarios->Linha;
	if($i==0){
	$classative='class="active"';
	}else{
	 $classative='';
	}
    ?>
   
<li <?php echo $classative;?>>
        <a href="#" class="dropdown-toggle">
            <i class="<?php echo $class_css; ?>"></i>
            <span><?php echo $nome_menu; ?></span>
            <b class="arrow icon-angle-right"></b>
        </a>
<!-- BEGIN Submenu -->
    <ul class="submenu">
        <?php
        for ($x = 0; $x < $rstotal2; $x++) {
            $nome_menu = utf8_encode(mysql_result($rsmenu2, $x, "nome_menu"));
            $imagem = '<img src="' . $caminho . mysql_result($rsmenu2, $x, "imagem") . '"' . '>';

            $link_menu = mysql_result($rsmenu2, $x, "link_menu");
            $idmodulos = mysql_result($rsmenu2, $x, "idmodulos");
            $class_css = mysql_result($rsmenu2, $x, "class_css");
            $idmenu = mysql_result($rsmenu2, $x, "idmenu");
            $id_pai = mysql_result($rsmenu2, $x, "id_pai");
            $pub = mysql_result($rsmenu2, $x, "publico");

            //$id_usuario = mysql_result($rsmenu,$i,"id_usuario");
            $ordem_programa = mysql_result($rsmenu2, $x, "ordem_menu");
            $externo = mysql_result($rsmenu2, $x, "link_externo");
            
            ?>
    
        <li><a href="<?php echo utf8_encode($link_menu);?>"><?php echo $nome_menu;?></a></li> 
   
   
	  <?php }?>
   </ul>
    <!-- END Submenu -->
</li>
<?php }?>
<!--<li> -->
      
