<?php get_header(); ?>
<main>
   <div class="articles_cnt">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         <div class="singleArticle">
            <div class="img_cnt">
               <?php the_post_thumbnail(); ?>
            </div>
            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
         </div>
      <?php endwhile; else :
         _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
      endif; ?>
   </div>
</main>

<?php get_footer(); ?>
