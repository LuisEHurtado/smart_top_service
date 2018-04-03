<?php
function apk_load_styles(){

 wp_register_style('theme_style',get_stylesheet_uri(),'','1.0','all');
 wp_enqueue_style('theme_style');
}

add_action('wp_enqueue_scripts','apk_load_styles');

function apk_register_sidebars(){
  register_sidebar(array(
    'name' => __('Sidebar principal','apk'),
    'id' => 'main_sidebar',
    'description' => __('Este es el sidebar principal', 'apk'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' =>  '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'
  ));
}

add_action('widgets_init','apk_register_sidebars');


//cambia logo de cabecera

function my_custom_logo() {
   echo '
      <style type="text/css">
         #header-logo { background-image: url('.get_bloginfo('template_directory').'/images/logo-cliente.png) !important; }
      </style>
   ';
}
add_action('admin_head', 'my_custom_logo');

?>
