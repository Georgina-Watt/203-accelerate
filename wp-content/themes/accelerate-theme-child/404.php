<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

   <div id="primary" class="hero-404">
      <div class="main-content" role="main">
         <div class="content-404">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/map.png" ?>
               <div class='display-content'>
                  <h1> Whoops, Took a Wrong Turn...</h1>
                   <p> Sorry, this page no longer exists, never existed or has been moved.  We feel like complete jerks for totally misleading you.</p>

                  <p>Feel free to take a look around our <b><a href="http://localhost:8888/accelerate/blog/" target="blank>">blog</a></b> or some of our featured <b><a href="http://localhost:8888/accelerate/about/" target="blank>">work</a></b>
            </div>
         </div>
      </div>
   </div><!-- .main-content -->
</div><!-- #primary -->

<?php get_footer(); ?>

      </div><!-- .main-content -->

      

   </div><!-- #primary -->

<?php get_footer(); ?>    
