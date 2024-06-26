<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> JHORDY TU PAPI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="<?php bloginfo('template_url'); ?>/plantilla/admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/plantilla/admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/plantilla/admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <div class="header-border"></div>






        <header id="page-topbar">
            <div class="navbar-header">

                <div class="d-flex align-items-left">
                    <button type="button" class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>



                    <div class="d-flex align-items-center">

                        <div class="dropdown d-none d-sm-inline-block ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-search-dropdown">

                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>







                    </div>
                </div>
        </header>
        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <div class="navbar-brand-box">
                    <a href="index.php" class="logo">
                        <i class="mdi mdi-album"></i>
                        <span>
                            TECNO-PRO
                        </span>
                    </a>
                </div>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu izquierdo',
                        'container' => 'div',
                        'container_id' => 'sidebar-menu',
                        'items_wrap' => ' <ul class="metismenu list-unstyled" id="side-menu">%3$s</ul>'
                    )
                );
                ?>
                
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                       <!-- <li class="menu-title">Menu</li>

                        <li>
                            <a href="audio.php" class="waves-effect"><i class="mdi mdi-home"></i><span>Audio</span></a>

                        </li>
                        <li>
                            <a href="preguntas_frecuentes.php" class="waves-effect"><i class="mdi mdi-home"></i><span>Preguntas frecuentes</span></a>

                        </li>
                        <li>
                            <a href="cuestionario.php" class="waves-effect"><i class="mdi mdi-home"></i><span>Cuestionario</span></a>

                        </li>
                        <li>
                            <a href="nosotros.php" class="waves-effect"><i class="mdi mdi-home"></i><span>nosotros</span></a>

                        </li>


                        <li>
                            <a href="javascript: void(0);" class="waves-effect"><i class="mdi mdi-diamond-stone"></i><span>Celulares y Accesorio</span></a>

                        </li>

                        <li>
                            <a href="javascript: void(0);" class="waves-effect"><i class="mdi mdi-table-merge-cells"></i><span>Gamer</span></a>

                        </li>

                        <li>
                            <a href="javascript: void(0);" class="waves-effect"><i class="mdi mdi-poll"></i><span>Computo</span></a>

                        </li>

                        <li>
                            <a href="javascript: void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted-type"></i><span>Smart Home</span></a>

                        </li>

                        <li>
                            <a href="javascript: void(0);" class="waves-effect"><i class="mdi mdi-black-mesa"></i><span>Camaras y drones</span></a>

                        </li>






                        <li>
                            <a href="javascript: void(0)" class="waves-effect"><i class="mdi mdi-map-marker-radius"></i><span>Ubicación</span></a>

                        </li>-->



                    </ul>
                </div> 

                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->
        