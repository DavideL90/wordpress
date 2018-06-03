<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   <div class="article_cnt">
      <h2><?php the_title(); ?></h2>
       <?php the_excerpt(); ?>
      <small><?php the_author(); ?></small>
      <small><?php the_date(); ?></small>

   </div>
<?php endwhile; else :
         _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
      endif; ?>

<?php get_footer(); ?>
