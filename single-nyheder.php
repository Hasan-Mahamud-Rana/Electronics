<?php get_header(); ?>
<!-- content goes here Nyheders-->
<div class="tShadow"><div class="row ind">
  <?php do_action( 'bordingweb_before_content' ); ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
   <div class="small-12 medium-12 large-12 columns entry-content">
   <p><span class="time"><?php the_time('F j, Y'); ?></span></p>
   <h2><?php the_title(); ?></h2>  
   <?php the_content(); ?>
 </div> 
 <div class="post-footer">
  <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'bordingweb' ), 'after' => '</p></nav>' ) ); ?>
  <p><?php the_tags(); ?></p>
</div>
</article>
<?php endwhile;?>
<?php do_action( 'bordingweb_after_content' ); ?>
</div>
</div>
<?php get_footer(); ?>