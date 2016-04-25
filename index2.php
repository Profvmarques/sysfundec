<?php
require("controles/index.php");
Processo('login');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class=" gecko win js" xmlns="http://www.w3.org/1999/xhtml"><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>SysDuque</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!--base css styles-->
        
        <link rel="stylesheet" href="assets/bootstrap/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/normalize/normalize.css">

        <!--page specific css styles-->

        <!--flaty css styles-->
        <link rel="stylesheet" href="css/flaty.css">
        <link rel="stylesheet" href="css/flaty-responsive.css">

        <link rel="shortcut icon" href="img/favicon.html">
<script src="js/Validacaoform.js"></script>
        <script src="assets/modernizr/modernizr-2.6.2.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style type="text/css">
    body,td,th {
	font-family: "Open Sans";
}
body {
	background-image: img/fundo_login.jpg;
	background-repeat: no-repeat;
}
    </style>
    </head>
<body class="login-page">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- BEGIN Main Content -->
        <div class="login-wrapper">
            <!-- BEGIN Login Form -->
            <form id="form" name="form" action="" method="post">
                <h3>Autenticação</h3>
                <hr/>
                <div class="control-group">
                    <div class="controls">
                        <input name="login" type="text" class="input-block-level" id="login" placeholder="" title="Informe seu login"/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                      <input name="senha" type="password" class="input-block-level" id="senha" placeholder="Senha" title="Informe sua senha"/>
                    </div>
                </div>
                <div class="control-group">
                  <div class="controls">
                        <button type="button" class="btn btn-primary input-block-level" onClick="validar(document.form);">Entrar</button>
						
                    </div>
                </div>
                <hr/>
                <p class="clearfix"><span class="form-actions">
                  <input name="ok" type="hidden" id="ok"/>
                </span>
                    <a href="#" class="goto-forgot pull-left">Perdeu a senha?</a>                </p>
            </form>
            <!-- END Login Form -->

    
                <h3>&nbsp;</h3>
        </div>
        <!-- END Main Content -->

       
    </body>
</html>
