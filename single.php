<?php get_header(); ?>
<main class="wrapper">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <section class="article_body">
         <h1 class="article_title"><?php the_title(); ?></h1>
         <div class="article_txt">
            <?php the_content(); ?>
            <small><?php the_author(); ?></small>
            <small><?php the_date(); ?></small>
         </div>
      </section>
   <?php endwhile; else :
      _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
   endif; ?>

   <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
