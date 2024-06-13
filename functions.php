<?php 
// registrar menu
function register_my_menus() {
    register_nav_menus(
      array(
        //a¿creando menu
        'menu izquierdo' => __( 'Menu Principal izquierdo' ),
        'menu superior' => __( 'Menu superior' ),
       )
     );
   }
   add_action( 'init', 'register_my_menus' );
//agragar estilos a las <a> del menu
   add_filter('nav_menu_link_attributes','clases_menu',10,3);
   function clases_menu($atts,$item,$args){
    $class = 'waves-effect';
    $atts['class'] = $class;
    return $atts;

   }

?>