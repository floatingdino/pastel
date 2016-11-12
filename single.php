<?php
get_header();
 ?>
<main>
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   <article>
      <section class="sidebar">
         <div class="preview">
            <span class="date"><?php the_date('M<\b\r><\b>j'); ?></b></span>
         </div>
         <span class="tags"><?php the_tags("#"," #"); ?>
      </section>
      <h2><?php the_title(); ?></h2>
      <h3>by <?php the_author();?></h3>
      <?php the_content(); ?>
   </article>
   <?php endwhile; else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
   <?php endif; ?>
</main>
<?php
get_footer();
 ?>
