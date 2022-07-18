<?php
/**
 * The template for displaying the about-page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" 
        <div class="site-content" role="main">
			<?php 
                while ( have_posts() ) :the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; // end of the loop. ?>
            
		</main><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
