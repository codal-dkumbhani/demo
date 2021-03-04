<?php
/**
* Template Name: Dhrumil Home page 2
*
* @package WordPress
* @subpackage Dhrumil
* @since Dhrumil 1.0
*/

get_header();
?>

	<main id="primary" class="site-main">

	<!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1><?php  the_field("home_starting",291); ?></h1>
                        <a href="<?php  the_field("starting_button",291); ?>" class="main-button-slider"><?php  the_field("stating_button_lable",291); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->
	<!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row"><?php
                    // Check rows exists.
                    if( have_rows('3box') ):
                        // Loop through rows.
                        while( have_rows('3box') ) : the_row();
                            // Load sub field value.
                            $box_no = get_sub_field('no');
                            $box_img = get_sub_field('image');
                            $box_title = get_sub_field('3_box_title');
                            $box_dis = get_sub_field('3box_discription');?>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                                data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                                <div class="features-item">
                                    <div class="features-icon">
                                        <h2><?php echo $box_no; ?></h2>
                                        <img src='<?php echo $box_img ?>' alt="">
                                        <h4><?php echo $box_title ?></h4>
                                        <p><?php echo $box_dis ?></p>
                                        <a href="#testimonials" class="main-button">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endwhile;
                    endif; ?>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->
	<div class="left-image-decor"></div>

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="promotion">
        <div class="container">
            <div class="row">
                <div class="left-image col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <?php   
                            //side image 
                             if( get_field('side_image_') ):?>
                                <img src="<?php the_field('side_image_'); ?>" />
                            <?php endif; ?>
                </div>
                <div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix">
                    <ul> 
                        <?php
                            if( have_rows('side_field') ):
                                while( have_rows('side_field') ) : the_row();
                                    $side_list_img = get_sub_field('side_list_image');
                                    $side_list_title = get_sub_field('side_list_title');
                                    $side_list_dis = get_sub_field('side_list_discription'); ?>

                                    <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                                        <img src='<?php echo $side_list_img ?>' alt="">
                                        <div class="text">
                                            <h4><?php echo $side_list_title ?></h4>
                                            <p><?php echo $side_list_dis ?></p>
                                        </div>
                                    </li>
                                    <?php
                                endwhile;
                            endif;
                            ?>
                            
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <div class="right-image-decor"></div>

    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2><?php  the_field("about_title",291); ?></h2>
                        <p><?php  the_field("about_title_description",291); ?></p>
							
                    </div>
                </div>
                <div class="col-lg-10 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s"> 
                    <div class="owl-carousel owl-theme">
                            <?php
                                if( have_rows('testimonial_slider') ):
                                    while( have_rows('testimonial_slider') ) : the_row();
                                        $tes_image = get_sub_field('testimonial_image');
                                        $tes_name = get_sub_field('testimonial_name');
                                        $tes_review = get_sub_field('testimonial_review');
                                        
                                        ?>
                                        <div class="item service-item">
                                        <div class="author">
                                            <i><img src='<?php echo $tes_image ?>' alt=""></i>
                                        </div>
                                        <div class="testimonial-content">
                                        <ul class="stars">
                                            <?php $star = get_sub_field('star'); 
                                                for($i = 0;$i<$star; $i++){
                                                    echo "<li><i class='fa fa-star'></i></li>";
                                                }
                                            ?>
                                        </ul>
                                            <h4><?php echo $tes_name ?></h4>
                                            <p><?php echo $tes_review ?></p>
                                        </div>
                                        </div>
                                        <?php
                                    endwhile;
                                endif; 
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->

<?php

get_footer();




