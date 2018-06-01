<?php
   if(!function_exists('mytheme_setup')){
      function mytheme_setup(){
         register_nav_menus(
               array('header' => esc_html__('Header', fullbase))
         );
      }
      add_action('after_setup_theme', 'mytheme_setup');
   }


   if(!function_exists('import_style')){
      function import_style(){
         wp_enqueue_style('my-style', get_template_directory_uri() . '/style.css');
      }
      add_action('wp_enqueue_scripts', 'import_style');
   }
?>
