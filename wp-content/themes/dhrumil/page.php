<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dhrumil
 */

 get_header(); ?>
 
 <br><br><br><br><br><br><br><br>
<div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                                <?php
                                // Start the loop.
                                while ( have_posts() ) : the_post();
                                                // Include the page content template.
                                                get_template_part( 'template-parts/content', 'page' );

                                endwhile;
                                ?>
                </main><!-- .site-main -->
                
</div><!-- .content-area -->


<?php get_footer(); ?>