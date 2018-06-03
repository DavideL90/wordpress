<?php
//initialize nav menù
   if(!function_exists('mytheme_setup')){
      function mytheme_setup(){
         register_nav_menus(
               array('header' => esc_html__('Header', fullbase))
         );
      }
      add_action('after_setup_theme', 'mytheme_setup');
   }

   //import style.css
   if(!function_exists('import_style')){
      function import_style(){
         wp_enqueue_style('my-style', get_template_directory_uri() . '/style.css');
      }
      add_action('wp_enqueue_scripts', 'import_style');
   }

   // Import google fonts
   if(!function_exists('import_fonts')){
      function import_fonts(){
         wp_enqueue_style('title-font', 'https://fonts.googleapis.com/css?family=Berkshire+Swash');
         wp_enqueue_style('nav-font', 'https://fonts.googleapis.com/css?family=Oxygen+Mono');
      }
      add_action('wp_enqueue_scripts', 'import_fonts');
   }

   //initialize footer sidebar
   if(!function_exists('footer_sidebar')){
      function footer_sidebar(){
         register_sidebar(array(
            'name'          => __('Footer sidebar'),
            'id'            => 'footer_sidebar',
            'class'         => 'footer_cnt'
         ));
      }
      add_action('widgets_init', 'footer_sidebar');
   }
?>
