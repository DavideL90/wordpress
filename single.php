<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   <div class="article_cnt">
      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
       <?php the_content(); ?>
      <small><?php the_author(); ?></small>
      <small><?php the_date(); ?></small>

   </div>
<?php endwhile; else :
         _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
      endif; ?>

<?php get_footer(); ?>
