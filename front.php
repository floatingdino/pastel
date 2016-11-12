<?php
/* Template Name: Home */
get_header();
 ?>
<section class="top">
   <img class="logo" src="/wp-content/themes/pastel/samhaakman.svg">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   <?php the_content();?>
<a class="button" href="#main">Check me out</a>
</section>
<main id="main">
<nav>
<?php wp_nav_menu(array('theme_location'=> 'header-menu'));?>
</nav>

   <h1>I am:</h1>
   <?php
      $post_object = get_field('featured');
      if($post_object):
         $post = $post_object;
         setup_postdata($post);

   ?>
   <div class="icon build">build icon</div>
   <h3>Building stuff<br>like this</h3>
   <a href="<?php echo the_permalink(); ?>">
      <?php the_post_thumbnail(); ?>
      <h1><?php the_title(); ?></h1>
   </a>
   <?php wp_reset_postdata();endif;?>
   <div class="icon peace">peace icon</div>
   <h3>Working with people<br>like this</h3>
   <a href="https://pixelpalace.com.au/" class="studio"><img src="/wp-content/themes/pastel/pixel-logo.svg"></a>
   <a href="http://www.oneiota.com/" class="studio"><img src="/wp-content/themes/pastel/one-iota-logo.svg"></a>
   <a href="https://madewithply.com/" class="studio"><img src="/wp-content/themes/pastel/ply-logo.svg"></a>
   <div class="clear"></div>
   <div class="icon loud">shout icon</div>
   <h3>saying things<br>like this</h3>
   <?php
   $args = array( 'numberposts' => 1 );
   $lastposts = get_posts( $args );
   foreach($lastposts as $post) : setup_postdata($post); ?>

   <article>
      <section class="sidebar">
         <div class="preview">
            <span class="date"><?php the_date('M<\b\r><\b>j'); ?></b></span>
         </div>
      </section>
      <h2><?php the_title();?></h2>
      <?php the_excerpt();?>
      <a class="button" href="<?php the_permalink();?>">Read the rest</a>
   </article>

   <?php endforeach;?>
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<a class="button" href="/contact">Get in touch</a>
</main>
<?php
get_footer();
 ?>
