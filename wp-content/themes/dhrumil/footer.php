<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dhrumil
 */

?>

	<footer id="colophon" class="site-footer">
	<footer id="contact-us">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <!-- ***** Contact Form Start ***** -->
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="contact-form">
                            <form id="contact" action="" method="post">
                                <div class="row">
                                <div class="col-sm-12">
									<fieldset style="background-color: rgba(250,250,250,0.3);"><?php $post_7 = get_post( 37 ); 
												$title = $post_7->post_title;
												$content = $post_7->post_content;
												echo do_shortcode($content);
                                                
										?></fieldset>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- ***** Contact Form End ***** -->
                    <div class="right-content col-lg-6 col-md-12 col-sm-12">

						<?php 
							$post_7 = get_post( 32 );
							$title = $post_7->post_title;
							$content = $post_7->post_content;
						?>
                        <p><?php echo $content ?></p>
                        <ul class="social">
                        <?php dynamic_sidebar( 'Social share' ); ?>
                           
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sub-footer">
						<?php dynamic_sidebar( 'in-header-widget-area' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl-carousel.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/scrollreveal.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/waypoints.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.counterup.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/imgfix.min.js"></script>
	
	<!-- Global Init -->
	<script src="/assets/js/custom.js"></script>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
