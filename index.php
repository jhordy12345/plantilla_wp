<?php
get_header();

?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">


                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block img-fluid" src="https://i.blogs.es/7f1111/monitor-4k/1366_2000.webp" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="https://wallpapers-clan.com/wp-content/uploads/2024/02/beautiful-fantasy-landscape-desktop-wallpaper-preview.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="https://wallpapers-clan.com/wp-content/uploads/2024/05/serene-mountain-lake-village-desktop-wallpaper-preview.jpg" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- start page title -->
            <div class="row">
                <div class="container-fluid row">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();



                    ?>
                            <div class="col-lg-3 col-md-2 ">
                                <div class="card">
                                    
                                    <a style="margin-left: 60px;" href="<?php the_permalink(); ?>"><?php  
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('thumbnail', array( 'class' => 'card-im-top img-fluid' ));
                                    }
                                    ?></a>
                                    <img class="card-im-top img-fluid" src="">
                                    <div class="card-body">
                                        <h5 class="card-title"><?PHP the_title();?></h5>
                                        <p class="card-text"><?php the_excerpt();?></p>
                                                                               
                                    </div>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    else :
                        _e('No se encontraron productos en la categoria seleccíonada.', 'textdomain');
                    endif;
                    ?>
                </div>
            </div>
            <!-- end page title -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <?php
    get_footer()
    ?>