<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="robots" content="noindex,nofollow">
    <title>Buscoinfluencers.com - ADMIN</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/niceadmin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon2.ico">
    <!-- Custom CSS -->
    <link href="../lib/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">

    <link href="../css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
            <!-- <div class="preloader">
                    <div class="lds-ripple">
                        <div class="lds-pos"></div>
                        <div class="lds-pos"></div>
                    </div>
                </div>--> 
                <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
        data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <a href="index.html" class="logo">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Light Logo icon -->
                                <img style="width: 50px;" src="../img/logo-blue.png" alt="Binf" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- Light Logo text -->
                                <span class="user-decription-black" style="margin-left: 25px; font-size: 18px; font-weight: bold;">
                                ADMIN
                            </span>
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ==================================================
                        <li class="nav-item search-box">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-magnify font-20 me-1"></i>
                                    <div class="ms-1 d-none d-sm-block">
                                        <span>Search</span>
                                    </div>
                                </div>
                            </a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter">
                                <a class="srh-btn">
                                    <i class="ti-close"></i>
                                </a>
                            </form>
                        </li>============ -->
                        <li class="text-center text-title-normal" style="border: none;">
                            <b>LOS SEGUIDORES QUE TU MARCA NECESITA SIGUEN A UN INFLUENCER</b>
                        </li>
                    </ul>
                    <h5><?= $usuario?></h5>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../img/mas1.png" alt="user" class="rounded-circle" width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item user-decription-black" href="javascript:void(0)"><i class="ti-user me-1 ms-1"></i>
                                    Mi Perfil</a>
                                
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-back-right me-1 ms-1"></i>
                                    Cerrar Sesion</a>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link user-decription-black waves-effect waves-dark sidebar-link" href="/dashboard"
                                aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">DASHBOARD</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link user-decription-black waves-effect waves-dark sidebar-link" href="<?= route_to('noticiasdash') ?>"
                                aria-expanded="false">
                                <i class="mdi mdi-newspaper"></i>
                                <span class="hide-menu">NOTICIAS</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link user-decription-black waves-effect waves-dark sidebar-link" href="<?= route_to('representantesdash') ?>"
                                aria-expanded="false">
                                <i class="mdi mdi-account-search"></i>
                                <span class="hide-menu">SOLICITUD REPRESENTANTE</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link user-decription-black waves-effect waves-dark sidebar-link" href="<?= route_to('influencerdash') ?>"
                                aria-expanded="false">
                                <i class="mdi mdi-account-multiple"></i>
                                <span class="hide-menu">REGISTRO INFLUENCERS</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link user-decription-black waves-effect waves-dark sidebar-link" href="<?= route_to('visitantesdash') ?>"
                                aria-expanded="false">
                                <i class="mdi mdi-briefcase"></i>
                                <span class="hide-menu">REGISTRO VISITANTES</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link user-decription-black waves-effect waves-dark sidebar-link" href="<?= route_to('mensajesdash') ?>"
                                aria-expanded="false">
                                <i class="mdi mdi-message"></i>
                                <span class="hide-menu">MENSAJES</span>
                            </a>
                        </li>
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
