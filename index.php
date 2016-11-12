<?php
get_header();
 ?>
<main>
<h1><?php single_cat_title();?></h1>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   <article>
      <a href="<?php the_permalink();?>">
      <div class="preview <?php if (!has_post_thumbnail()) echo "border"; ?>">
         <div class="overlay">

         </div>
         <span class="date">
            <?php the_date('M<\b\r><\b>j'); ?></b>
         </span>
      </div>
      <h1><?php the_title();?></h1>
      </a>
   </article>
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<div class="clear"></div>
</main>
<?php
get_footer();
 ?>
