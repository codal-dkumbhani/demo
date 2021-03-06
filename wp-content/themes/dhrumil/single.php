<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dhrumil
 */

get_header();
?>
 
<br><br><br><br><br><br><br>
	<main id="primary" class="site-main">
	<div class="pagebox">
		<?php
		while ( have_posts() ) :
			the_post();?>
			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"></a></h2><?php
			get_template_part( 'template-parts/content', get_post_type() );
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'dhrumil' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'dhrumil' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
