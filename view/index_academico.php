<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>4 Physio - Painel do Administrador</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!--base css styles-->
        <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/bootstrap/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/normalize/normalize.css">

        <!--page specific css styles-->

        <!--flaty css styles-->
        <link rel="stylesheet" href="../css/flaty.css">
        <link rel="stylesheet" href="../css/flaty-responsive.css">

        <link rel="shortcut icon" href="../img/favicon.html">

        <script src="../assets/modernizr/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- BEGIN Theme Setting -->
        <div id="theme-setting">
            <a href="#"><i class="icon-gears icon-2x"></i></a>
            <ul>
                <li>
                    <span>Skin</span>
                    <ul class="colors" data-target="body" data-prefix="skin-">
                        <li class="active"><a class="blue" href="#"></a></li>
                        <li><a class="red" href="#"></a></li>
                        <li><a class="green" href="#"></a></li>
                        <li><a class="orange" href="#"></a></li>
                        <li><a class="yellow" href="#"></a></li>
                        <li><a class="pink" href="#"></a></li>
                        <li><a class="magenta" href="#"></a></li>
                        <li><a class="gray" href="#"></a></li>
                        <li><a class="black" href="#"></a></li>
                    </ul>
                </li>
                <li>
                    <span>Navbar</span>
                    <ul class="colors" data-target="#navbar" data-prefix="navbar-">
                        <li class="active"><a class="blue" href="#"></a></li>
                        <li><a class="red" href="#"></a></li>
                        <li><a class="green" href="#"></a></li>
                        <li><a class="orange" href="#"></a></li>
                        <li><a class="yellow" href="#"></a></li>
                        <li><a class="pink" href="#"></a></li>
                        <li><a class="magenta" href="#"></a></li>
                        <li><a class="gray" href="#"></a></li>
                        <li><a class="black" href="#"></a></li>
                    </ul>
                </li>
                <li>
                    <span>Sidebar</span>
                    <ul class="colors" data-target="#main-container" data-prefix="sidebar-">
                        <li class="active"><a class="blue" href="#"></a></li>
                        <li><a class="red" href="#"></a></li>
                        <li><a class="green" href="#"></a></li>
                        <li><a class="orange" href="#"></a></li>
                        <li><a class="yellow" href="#"></a></li>
                        <li><a class="pink" href="#"></a></li>
                        <li><a class="magenta" href="#"></a></li>
                        <li><a class="gray" href="#"></a></li>
                        <li><a class="black" href="#"></a></li>
                    </ul>
                </li>
                <li>
                    <span></span>
                    <a data-target="navbar" href="#"><i class="icon-check-empty"></i> Fixed Navbar</a>
                    <a class="pull-right visible-desktop" data-target="sidebar" href="#"><i class="icon-check-empty"></i> Fixed Sidebar</a>
                </li>
            </ul>
        </div>
        <!-- END Theme Setting -->

        <!-- BEGIN Navbar -->
        <div id="navbar" class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <!-- BEGIN Brand -->
                    <a href="#" class="brand">
                        <small>
                            <i class="icon-desktop"></i>
                            4 Physio
                        </small>
                    </a>
                    <!-- END Brand -->

                    <!-- BEGIN Responsive Sidebar Collapse -->
                    <a href="#" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-reorder"></i>
                    </a>
                    <!-- END Responsive Sidebar Collapse -->

                    <!-- BEGIN Navbar Buttons -->
                  <ul class="nav flaty-nav pull-right">
                        <!-- BEGIN Button Tasks -->
                        <li class="hidden-phone">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-tasks"></i>
                                <span class="badge badge-warning">4</span>
                            </a>

                            <!-- BEGIN Tasks Dropdown -->
                            <ul class="pull-right dropdown-navbar dropdown-menu">
                                <li class="nav-header">
                                    <i class="icon-ok"></i>
                                    4 Tasks to complete
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Software Update</span>
                                            <span class="pull-right">75%</span>
                                        </div>

                                        <div class="progress progress-mini progress-warning">
                                            <div style="width:75%" class="bar"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Transfer To New Server</span>
                                            <span class="pull-right">45%</span>
                                        </div>

                                        <div class="progress progress-mini progress-danger">
                                            <div style="width:45%" class="bar"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Bug Fixes</span>
                                            <span class="pull-right">20%</span>
                                        </div>

                                        <div class="progress progress-mini">
                                            <div style="width:20%" class="bar"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Writing Documentation</span>
                                            <span class="pull-right">85%</span>
                                        </div>

                                        <div class="progress progress-mini progress-success progress-striped active">
                                            <div style="width:85%" class="bar"></div>
                                        </div>
                                    </a>
                                </li>

                                <li class="more">
                                    <a href="#">See tasks with details</a>
                                </li>
                            </ul>
                            <!-- END Tasks Dropdown -->
                        </li>
                        <!-- END Button Tasks -->

                        <!-- BEGIN Button Notifications -->
                        <li class="hidden-phone">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-bell-alt"></i>
                                <span class="badge badge-important">5</span>
                            </a>

                            <!-- BEGIN Notifications Dropdown -->
                            <ul class="dropdown-navbar dropdown-menu">
                                <li class="nav-header">
                                    <i class="icon-warning-sign"></i>
                                    5 Notifications
                                </li>

                                <li class="notify">
                                    <a href="#">
                                        <i class="icon-comment orange"></i>
                                        <p>New Comments</p>
                                        <span class="badge badge-warning">4</span>
                                    </a>
                                </li>

                                <li class="notify">
                                    <a href="#">
                                        <i class="icon-twitter blue"></i>
                                        <p>New Twitter followers</p>
                                        <span class="badge badge-info">7</span>
                                    </a>
                                </li>

                                <li class="notify">
                                    <a href="#">
                                        <img src="img/demo/avatar/avatar2.jpg" alt="Alex" />
                                        <p>David would like to become moderator.</p>
                                    </a>
                                </li>

                                <li class="notify">
                                    <a href="#">
                                        <i class="icon-bug pink"></i>
                                        <p>New bug in program!</p>
                                    </a>
                                </li>

                                <li class="notify">
                                    <a href="#">
                                        <i class="icon-shopping-cart green"></i>
                                        <p>You have some new orders</p>
                                        <span class="badge badge-success">+10</span>
                                    </a>
                                </li>

                                <li class="more">
                                    <a href="#">See all notifications</a>
                                </li>
                            </ul>
                            <!-- END Notifications Dropdown -->
                        </li>
                        <!-- END Button Notifications -->

                        <!-- BEGIN Button Messages -->
                        <li class="hidden-phone">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-envelope"></i>
                                <span class="badge badge-success">3</span>
                            </a>

                            <!-- BEGIN Messages Dropdown -->
                            <ul class="dropdown-navbar dropdown-menu">
                                <li class="nav-header">
                                    <i class="icon-comments"></i>
                                    3 Messages
                                </li>

                                <li class="msg">
                                    <a href="#">
                                        <img src="img/demo/avatar/avatar3.jpg" alt="Sarah's Avatar" />
                                        <div>
                                            <span class="msg-title">Sarah</span>
                                            <span class="msg-time">
                                                <i class="icon-time"></i>
                                                <span>a moment ago</span>
                                            </span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </a>
                                </li>

                                <li class="msg">
                                    <a href="#">
                                        <img src="img/demo/avatar/avatar4.jpg" alt="Emma's Avatar" />
                                        <div>
                                            <span class="msg-title">Emma</span>
                                            <span class="msg-time">
                                                <i class="icon-time"></i>
                                                <span>2 Days ago</span>
                                            </span>
                                        </div>
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ...</p>
                                    </a>
                                </li>

                                <li class="msg">
                                    <a href="#">
                                        <img src="img/demo/avatar/avatar5.jpg" alt="John's Avatar" />
                                        <div>
                                            <span class="msg-title">John</span>
                                            <span class="msg-time">
                                                <i class="icon-time"></i>
                                                <span>8:24 PM</span>
                                            </span>
                                        </div>
                                        <p>Duis aute irure dolor in reprehenderit in ...</p>
                                    </a>
                                </li>

                                <li class="more">
                                    <a href="#">See all messages</a>
                                </li>
                            </ul>
                            <!-- END Notifications Dropdown -->
                        </li>
                        <!-- END Button Messages -->

                        <!-- BEGIN Button User -->
                        <li class="user-profile">
                            <a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
                                <img class="nav-user-photo" src="img/demo/avatar/avatar1.jpg" alt="Penny's Photo" />
                                <span class="hidden-phone" id="user_info">
                                    Penny
                                </span>
                                <i class="icon-caret-down"></i>
                            </a>

                            <!-- BEGIN User Dropdown -->
                            <ul class="dropdown-menu dropdown-navbar" id="user_menu">
                                <li class="nav-header">
                                    <i class="icon-time"></i>
                                    Logined From 20:45
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="icon-cog"></i>
                                        Account Settings
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="icon-user"></i>
                                        Edit Profile
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="icon-question"></i>
                                        Help
                                    </a>
                                </li>

                                <li class="divider visible-phone"></li>

                                <li class="visible-phone">
                                    <a href="#">
                                        <i class="icon-tasks"></i>
                                        Tasks
                                        <span class="badge badge-warning">4</span>
                                    </a>
                                </li>
                                <li class="visible-phone">
                                    <a href="#">
                                        <i class="icon-bell-alt"></i>
                                        Notifications
                                        <span class="badge badge-important">8</span>
                                    </a>
                                </li>
                                <li class="visible-phone">
                                    <a href="#">
                                        <i class="icon-envelope"></i>
                                        Messages
                                        <span class="badge badge-success">5</span>
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="#">
                                        <i class="icon-off"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                            <!-- BEGIN User Dropdown -->
                        </li>
                        <!-- END Button User -->
                    </ul>
                    <!-- END Navbar Buttons -->
                </div><!--/.container-fluid-->
            </div><!--/.navbar-inner-->
        </div>
        <!-- END Navbar -->

        <!-- BEGIN Container -->
        <div class="container-fluid" id="main-container">
           <!-- BEGIN Sidebar -->
            <div id="sidebar" class="nav-collapse">
                <!-- BEGIN Navlist -->
                <ul class="nav nav-list">
                    <!-- BEGIN Search Form -->
                    <li>
                        <form target="#" method="GET" class="search-form">
                            <span class="search-pan">
                                <button type="submit">
                                    <i class="icon-search"></i>
                                </button>
                                <input type="text" name="search" placeholder="Pesquisar ..." autocomplete="off" />
                            </span>
                        </form>
                    </li>
                    <!-- END Search Form -->
                    <li>
                        <a href="index.php">
                            <i class="icon-dashboard"></i>
                            <span>Painel de controle</span>
                        </a>
                    </li>

                    

                    <li>
                        <li class="active">
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-desktop"></i>
                            <span>Cadastrar</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="cadastro_administrador.php">Administrador</a></li>
                            <li><a href="cadastro_supervisor.php">Supervisor</a></li>
                            <li><a href="cadastro_academico.php">Academico</a></li>
                            
                            <li><a href="cadastro_paciente.php">Paciente</a></li>
                            
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-edit"></i>
                            <span>Consultar</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="consultar_administrador.php">administrador</a></li>
                            <li><a href="consultar_supervisor.php">Supervisor</a></li>
                            <li><a href="consultar_academico.php">Academico</a></li>
                            <li><a href="consultar_paciente.php">Paciente</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-list"></i>
                            <span>Relatorios</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="atendimento_geral.html">Atendimentos geral</a></li>
                            <li><a href="atendimento_tto.html">Atendimentos por TTO</a></li>
                            <li><a href="consultas.html">Consultas</a></li>

<li><a href="academico_supervisor.html">Academicos por supervisor </a></li>

<li><a href="supervisor_academico.html">Supervisor por academico</a></li>

<li><a href="custos_geral.html">Custos geral</a></li>

<li><a href="custos_tto.html">Custos por TTO</a></li>



                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li>
                        <a href="tarefas.html">
                            <i class="icon-list-alt"></i>
                            <span>Tarefas</span>
                        </a>
                    </li>

                    <li>
                        <a href="calendario.html">
                            <i class="icon-calendar"></i>
                            <span>Calendario</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-list"></i>
                            <span>Galerias</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="galeria_fotos.html">Fotos</a></li>
                            <li><a href="galeria_videos.html">Videos</a></li>
                            



                        </ul>
                        <!-- END Submenu -->
                    </li>

                <!-- END Navlist -->

                <!-- BEGIN Sidebar Collapse Button -->
                <div id="sidebar-collapse" class="visible-desktop">
                    <i class="icon-double-angle-left"></i>
                </div>
                <!-- END Sidebar Collapse Button -->
            </div>
            <!-- END Sidebar -->

            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="icon-file-alt"></i> Painel do Administrador</h1>
                        <h4>Visão geral, estatísticas, entre outras ferramentas.</h4>
                    </div>
                </div>
                <!-- END Page Title -->

                <!-- BEGIN Breadcrumb -->
                <div id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li class="active"><i class="icon-home"></i> Home</li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->

                <!-- BEGIN Main Content -->
                <div class="row-fluid">
                    <div class="span7">
                        <div class="box">
                            <div class="box-title">
                                <h3><i class="icon-bar-chart"></i> Visitantes</h3>
                                <div class="box-tool">
                                    <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>
                                    <a data-action="close" href="#"><i class="icon-remove"></i></a>
                                </div>
                            </div>
                            <div class="box-content">
                                <div id="visitors-chart" style="margin-top:20px; position:relative; height: 290px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="span5">
                        <div class="box">
                            <div class="box-title">
                                <h3><i class="icon-bar-chart"></i> Visitantes da semana</h3>
                                <div class="box-tool">
                                    <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>
                                    <a data-action="close" href="#"><i class="icon-remove"></i></a>
                                </div>
                            </div>
                            <div class="box-content">
                                <ul class="weekly-stats">
                                    <li>
                                        <span class="inline-sparkline">134,178,264,196,307,259,287</span>
                                        Visits: <span class="value">376</span>
                                    </li>
                                    <li>
                                        <span class="inline-sparkline">89,124,197,138,235,169,186</span>
                                        Unique Visitors: <span class="value">238</span>
                                    </li>
                                    <li>
                                        <span class="inline-sparkline">625,517,586,638,669,698,763</span>
                                        Page Views: <span class="value">514</span>
                                    </li>
                                    <li>
                                        <span class="inline-sparkline">1.34,2.98,0.76,1.29,1.86,1.68,1.92</span>
                                        Pages / Visit: <span class="value">1.43</span>
                                    </li>
                                    <li>
                                        <span class="inline-sparkline">2.34,2.67,1.47,1.97,2.25,2.47,1.27</span>
                                        Avg. Visit Duration: <span class="value">00:02:34</span>
                                    </li>
                                    <li>
                                        <span class="inline-sparkline">70.34,67.41,59.45,65.43,78.42,75.92,74.29</span>
                                        Bounce Rate: <span class="value">73.56%</span>
                                    </li>
                                    <li>
                                        <span class="inline-sparkline">78.12,74.52,81.25,89.23,86.15,91.82,85.18</span>
                                        % New Visits: <span class="value">82.65%</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="span7">
                        <div class="box box-black">
                            <div class="box-title">
                                <h3><i class="icon-retweet"></i> Falta fazer</h3>
                                <div class="box-tool">
                                    <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>
                                    <a data-action="close" href="#"><i class="icon-remove"></i></a>
                                </div>
                            </div>
                            <div class="box-content">
                                <ul class="things-to-do">
                                    <li>
                                        <p>
                                            <i class="icon-user"></i>
                                            <span class="value">4</span>
                                            Aceitar usuário
                                            <a class="btn btn-success" href="#">Ir</a>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <i class="icon-comments"></i>
                                            <span class="value">14</span>
                                            Revisar comentário
                                            <a class="btn btn-success" href="#">Ir</a>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <i class="icon-shopping-cart blue"></i>
                                            <span class="value">7</span>
                                            Pedidos pendentes
                                            <a class="btn btn-success" href="#">Ir</a>
                                        </p>
                                    </li>
                                    
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="span5">
                        <div class="box box-orange">
                            <div class="box-title">
                                <h3><i class="icon-bar-chart"></i> Aterações semanais</h3>
                                <div class="box-tool">
                                    <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>
                                    <a data-action="close" href="#"><i class="icon-remove"></i></a>
                                </div>
                            </div>
                            <div class="box-content">
                                <ul class="weekly-changes">
                                    <li>
                                        <p>
                                            <i class="icon-arrow-up light-green"></i>
                                            <span class="light-green">186</span>
                                            Novos comentários
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <i class="icon-minus light-blue"></i>
                                            <span class="light-blue">53</span>
                                            Novos usuários
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <i class="icon-arrow-down light-red"></i>
                                            <span class="light-red">17</span>
                                            Novos artigos</p>
                                    </li>
                                   
                                    <li>
                                        <p>
                                            <i class="icon-arrow-down light-red"></i>
                                            <span class="light-red">74</span>
                                            Novos pedidos
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="span7">
                        <div class="box box-magenta">
                            <div class="box-title">
                                <h3><i class="icon-comment"></i> Últimos comentários</h3>
                                <div class="box-tool">
                                    <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>
                                    <a data-action="close" href="#"><i class="icon-remove"></i></a>
                                </div>
                            </div>
                            <div class="box-content">
                                <ul class="messages nice-scroll" style="height: 300px">
                                    <li>
                                        <img src="img/demo/avatar/avatar2.jpg" alt="">
                                        <div>
                                            <div>
                                            <h5>Rui</h5>
                                                <span class="time"><i class="icon-time"></i> 1 days ago</span>
                                                <h5>este sistema está muito bonito, só falta funcionar o back-end. Ou não!</h5></div>
                                            <div class="messages-actions">
                                                <a class="show-tooltip" href="#" title="Approve"><i class="icon-ok green"></i></a>
                                                <a class="show-tooltip" href="#" title="Disapprove"><i class="icon-remove orange"></i></a>
                                                <a class="show-tooltip" href="#" title="Remove"><i class="icon-trash red"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="img/demo/avatar/avatar3.jpg" alt="">
                                        <div>
                                            <div>
                                                <h5>Ana</h5>
                                                <span class="time"><i class="icon-time"></i> 1 days ago</span>
                                            </div>
                                            <p>blablablablablablablablablablablablabla</p>
                                            <div class="messages-actions">
                                                <a class="show-tooltip" href="#" title="Approve"><i class="icon-ok green"></i></a>
                                                <a class="show-tooltip" href="#" title="Disapprove"><i class="icon-remove orange"></i></a>
                                                <a class="show-tooltip" href="#" title="Remove"><i class="icon-trash red"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="img/demo/avatar/avatar4.jpg" alt="">
                                        <div>
                                          <div>
                                                <h5>Mara</h5>
                                                <span class="time"><i class="icon-time"></i> 4 days ago</span>
                                            </div>
                                            <p>blablablablablablablablabla</p>
                                            <div class="messages-actions">
                                                <a class="show-tooltip" href="#" title="Approve"><i class="icon-ok green"></i></a>
                                                <a class="show-tooltip" href="#" title="Disapprove"><i class="icon-remove orange"></i></a>
                                                <a class="show-tooltip" href="#" title="Remove"><i class="icon-trash red"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="img/demo/avatar/avatar5.jpg" alt="">
                                        <div>
                                          <div>
                                                <h5>Zé</h5>
                                                <span class="time"><i class="icon-time"></i> 2 weeks ago</span>
                                            </div>
                                            <p>blablablablablablablablablablablablablablablabla</p>
                                            <div class="messages-actions">
                                                <a class="show-tooltip" href="#" title="Approve"><i class="icon-ok green"></i></a>
                                                <a class="show-tooltip" href="#" title="Disapprove"><i class="icon-remove orange"></i></a>
                                                <a class="show-tooltip" href="#" title="Remove"><i class="icon-trash red"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="img/demo/avatar/avatar1.jpg" alt="">
                                        <div>
                                          <div>
                                                <h5>Penny <span class="label label-info">Admin</span></h5>
                                                <span class="time"><i class="icon-time"></i> 14 July</span>
                                            </div>
                                            <p>blablablablablablablablabla</p>
                                            <div class="messages-actions">
                                                <a class="show-tooltip" href="#" title="Approve"><i class="icon-ok green"></i></a>
                                                <a class="show-tooltip" href="#" title="Disapprove"><i class="icon-remove orange"></i></a>
                                                <a class="show-tooltip" href="#" title="Remove"><i class="icon-trash red"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="span5"></div>
                </div>

              <div class="row-fluid">
                <div class="span7">
                        <div class="box box-pink">
                            <div class="box-title">
                                <h3><i class="icon-comments"></i> Chat</h3>
                                <div class="box-tool">
                                    <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>
                                    <a data-action="close" href="#"><i class="icon-remove"></i></a>
                                </div>
                            </div>
                            <div class="box-content">
                                <ul class="messages messages-chat messages-stripped messages-zigzag nice-scroll" style="height:250px">
                                    <li>
                                        <img src="../img/demo/avatar/avatar1.jpg" alt="">
                                        <div>
                                            <div>
                                                <h5>Penny</h5>
                                                <span class="time"><i class="icon-time"></i> 2 minutes ago</span>
                                            </div>
                                            <p>hey Sarah</p>
                                            <p>how R U?</p>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="../img/demo/avatar/avatar3.jpg" alt="">
                                        <div>
                                            <div>
                                                <h5>Sarah</h5>
                                                <span class="time"><i class="icon-time"></i> 1 minutes ago</span>
                                            </div>
                                            <p>Hi Penny</p>
                                            <p>Thanks, how are you ?</p>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="../img/demo/avatar/avatar1.jpg" alt="">
                                        <div>
                                            <div>
                                                <h5>Penny</h5>
                                                <span class="time"><i class="icon-time"></i> 47 seconds ago</span>
                                            </div>
                                            <p>ey, I'm good</p>
                                            <p>what's up?</p>
                                            <p>what's your plan for dinner?</p>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="img/demo/avatar/avatar3.jpg" alt="">
                                        <div>
                                            <div>
                                                <h5>Sarah</h5>
                                                <span class="time"><i class="icon-time"></i> 12 seconds ago</span>
                                            </div>
                                            <p>Not much</p>
                                            <p>I haven't any plan, why ?</p>
                                        </div>
                                    </li>
                                </ul>

                                <div class="messages-input-form">
                                    <form method="POST" action="#">
                                        <div class="input">
                                            <input type="text" name="text" placeholder="Write here..." class="input-block-level">
                                        </div>
                                        <div class="buttons">
                                            <a class="show-tooltip" href="#" title="Take Picture"><i class="icon-camera"></i></a>
                                            <a class="show-tooltip" href="#" title="Attach File"><i class="icon-paper-clip"></i></a>
                                            <button type="submit" class="btn btn-primary"><i class="icon-share-alt"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                  </div>
                </div>
                <!-- END Main Content -->
                
                <footer>
                    <p>2013 ©4PHYSIO.</p>
                </footer>

                <a id="btn-scrollup" class="btn btn-circle btn-large" href="#"><i class="icon-chevron-up"></i></a>
            </div>
            <!-- END Content -->
        </div>
        <!-- END Container -->


        <!--basic scripts-->
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>-->
        <script>window.jQuery || document.write('<script src="../assets/jquery/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="../assets/bootstrap/bootstrap.min.js"></script>
        <script src="../assets/nicescroll/jquery.nicescroll.min.js"></script>

        <!--page specific plugin scripts-->
        <script src="../assets/flot/jquery.flot.js"></script>
        <script src="../assets/flot/jquery.flot.resize.js"></script>
        <script src="../assets/flot/jquery.flot.pie.js"></script>
        <script src="../assets/flot/jquery.flot.stack.js"></script>
        <script src="../assets/flot/jquery.flot.crosshair.js"></script>
        <script src="../assets/flot/jquery.flot.tooltip.min.js"></script>
        <script src="../assets/sparkline/jquery.sparkline.min.js"></script>

        <!--flaty scripts-->
        <script src="../js/flaty.js"></script>

    </body>
</html>
