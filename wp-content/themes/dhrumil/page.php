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
                <div class="pagebox">
                                <?php
                                // Start the loop.
                                while ( have_posts() ) : the_post();
                                                // Include the page content template.

                                                $page_id = get_the_ID();  //Page ID
                                                $page_data = get_page( $page_id ); 

                                                //store page title and content in variables
                                                $title = $page_data->post_title; 
                                                $content = apply_filters('the_content', $page_data->post_content);
                                                ?><h2><?php echo $title; ?></h2><br> <?php

                                                echo $content;

                                endwhile;
                                ?>
                </div>
                </main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer(); ?>