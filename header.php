<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta name="Description" content= <?php bloginfo('description'); ?>>
      <?php wp_head(); ?>
      <title></title>
   </head>
   <body <?php body_class(); ?> >
      <header>
         <div id="parallax">
            <div class="overlay">
               <h1 id="blog-title">My personal blog</h1>
            </div>
         </div>
         <?php
            wp_nav_menu(array(
                  'theme_location' => 'header',
                  'depth' => 2,
                  'container' => 'div',
                  'menu_class' => 'nav_items'
            ));
         ?>
      </header>
