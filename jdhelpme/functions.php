<?php 
function theme_files(){
  //Scripts
  wp_enqueue_script('jquery','//code.jquery.com/jquery-3.3.1.min.js',NULL,'1.0',true);
  wp_enqueue_script('ajax','//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',NULL,'1.0',true);
  wp_enqueue_script('stackpath','//stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js',NULL,'1.0',true);
  wp_enqueue_script('calc', get_stylesheet_directory_uri() . '/js/app.js',NULL,'1.0',true);

  //Styles
  wp_enqueue_style('font-awesome','//use.fontawesome.com/releases/v5.0.13/css/all.css');

  wp_enqueue_style('google-fonts','//fonts.googleapis.com/css2?family=Abril+Fatface&family=Aguafina+Script&family=Open+Sans&display=swap');

  wp_enqueue_style('google-fonts-title','//fonts.googleapis.com/css2?family=Abril+Fatface&display=swap');

  wp_enqueue_style('google-fonts-cursive','//fonts.googleapis.com/css2?family=Aguafina+Script&display=swap');

  wp_enqueue_style('bootstrap-4','//stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
  
  wp_enqueue_style('theme_styles',get_stylesheet_uri(),['google-fonts-cursive','google-fonts','google-fonts-title']);

}
add_action('wp_enqueue_scripts','theme_files');


?>