<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title> Xeloro - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="MyraStudio" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="<?php bloginfo('template_url'); ?>/plantilla/admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo('template_url'); ?>>/plantilla/admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo('template_url'); ?>/plantilla/admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>

    <body>
            

        <!-- Begin page -->
        <div id="layout-wrapper">
            <div class="header-border"></div>

            <?php
                include ("include/menu.php");
            ?>
            

          
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
            <div class="page-content">
                        <div class="container-fluid">

                            <!-- start page title -->
                            <div class="row">
                                <div class="container-fluid row">
                                    <?php for ($i=0; $i < 10; $i++) {
                                        ?>
                                        <div class="col-lg-2 col-md-3 col-sm-6" >
                                            <div class="card">
                                                <img class="card-im-top img-fluid" src="https://mipclista.com.pe/5275-large_default/pc-gamer-haku-blue-ryzen-5-5600g.jpg" >
                                                <div class="card-body">
                                                    <h5 class="card-title">titulo</h5>
                                                    <p class="card-text">descripcion</p>                                                
                                                    </div>
                                                    </div>
                                                    </div>
                                    <?php  }?>
                                </div>
                            </div>
                            <!-- end page title -->

                        </div> <!-- container-fluid -->
                    </div>
            </div>
                
            
                </div>
                <!-- End Page-content -->

                <?php
                include ("include/pie_pagina.php");
            ?>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Overlay-->
        <div class="menu-overlay"></div>


        <!-- jQuery  -->
        <script src="<?php bloginfo('template_url'); ?>/plantilla/admin/vertical/assets/js/jquery.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/plantilla/admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/plantilla/admin/vertical/assets/js/metismenu.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/plantilla/admin/vertical/assets/js/waves.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/plantilla/admin/vertical/assets/js/simplebar.min.js"></script>

        <!-- App js -->
        <script src="plantilla/admin/vertical/assets/js/theme.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    </body>

</html>