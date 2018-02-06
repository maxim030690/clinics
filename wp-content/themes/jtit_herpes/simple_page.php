<?php
/**
* Template Name: Simple Page
 */

get_header();
//get_sidebar();
echo '<section>';
echo '<div class="row">';


   if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
       <article id="post-<?php the_ID(); ?>">

           <?php if ( ! is_front_page() ) { ?>
               <h2 class="entry-title"></h2>
           <?php } ?>
           <section class="entry-content">
               <?php the_content(); ?>
           </section><!-- .entry-content -->
       </article>
       <!-- #post-## -->

   <?php endwhile; ?>
<?php
echo '</div>';
echo '</section>';
get_footer();
