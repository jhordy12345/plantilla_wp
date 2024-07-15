<?php
get_header();
?>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="card" style="width: 100%;">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('medium', array('class' => 'card-img img-fluid w-100'));
                                    }
                                    ?>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php the_title(); ?></h5>
                                        <p class="card-text"><?php the_content(); ?></p>
                                        
                                        <h5 class="text-danger"><?php the_excerpt(); ?></h5>
                                        <p class="card-text"><del>S/ 2,019.00</del> <span class="text-success">-29%</span></p>
                                        <div class="row mb-3">
                                            <button class="btn btn-danger mr-2" onclick="reducir_cantidad();">-</button>
                                            <input type="number" value="1" class="form-control col-2 text-center" id="cantidad">
                                            <button class="btn btn-primary ml-2" onclick="agregar_cantidad();">+</button>
                                        </div>
                                        <a href="#" class="btn btn-primary">Agregar al carrito</a>
                                        <p class="card-author">Autor: <?php the_author(); ?></p>
                                        <p class="card-date">Hora: <?php the_time(); ?></p>
                                        <p class="card-date">Fecha: <?php the_date(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
            <?php endwhile; else : ?>
                <p><?php _e('No se encontraron productos en la categoría seleccionada.', 'textdomain'); ?></p>
            <?php endif; ?>
        </div> <!-- container-fluid -->
    </div> <!-- page-content -->
</div>

<script>
    function agregar_cantidad() {
        var cantidad_actual = document.getElementById('cantidad').value;
        var cantidad_nueva = parseInt(cantidad_actual) + 1;
        document.getElementById('cantidad').value = cantidad_nueva;
    }
    function reducir_cantidad() {
        var cantidad_actual = document.getElementById('cantidad').value;
        var cantidad_nueva = parseInt(cantidad_actual) - 1;
        if (cantidad_nueva < 1) cantidad_nueva = 1; // Prevent negative or zero quantity
        document.getElementById('cantidad').value = cantidad_nueva;
    }
</script>

<!-- End Page-content -->
<?php
get_footer();
?>
