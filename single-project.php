<?php
get_header();
 ?>
<main>
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   <article>
      <section class="sidebar">
         <?php if(get_field('logo')){
            $logo = get_field('logo')['sizes']['logo'];
             ?>
            <img class="logo" src="<?php echo $logo; ?>">
         <?php }else{?>
         <div class="preview">
         </div>
         <?php }?>
         <span class="tags"><?php the_tags("#"," #"); ?>
      </section>
      <h2><?php the_title(); ?></h2>
      <h3><?php echo esc_html(get_the_terms($post->ID, "category")[0]->name); ?></h3>
      <?php the_content(); ?>
   </article>
   <?php endwhile; else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
   <?php endif; ?>
</main>
<?php
get_footer();
 ?>
