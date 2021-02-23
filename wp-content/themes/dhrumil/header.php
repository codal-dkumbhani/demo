<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dhrumil
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title><?php wp_title(''); ?></title>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/templatemo-lava.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl-carousel.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'dhrumil' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			

		<header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
						
                        <?php the_custom_logo(); ?>
					    
                        
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
						
                        <ul>
						    <li class="scroll-to-section"><?php  wp_nav_menu( array(
									'menu' => 'main',
									'menu_class' => 'nav',
									'menu_id' => 'primary-menu'
									
								) ); ?></li>
                            
								

                        </ul>
                        
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
		
			

