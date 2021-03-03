<?php
/**
* Template Name: Dhrumil Home page
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
                        <h1><?php echo esc_attr( get_post_meta( get_the_ID(), 'title', true ) ); ?> 
                        <em><?php echo esc_attr( get_post_meta( get_the_ID(), 'crate', true ) ); ?></em></h1>
                        <p><?php echo esc_attr( get_post_meta( get_the_ID(), 'home-text', true ) ); ?></p> 
                        <a href="<?php echo esc_attr( get_post_meta( get_the_ID(), 'home-starting-button-value', true ) ); ?>" class="main-button-slider"><?php echo esc_attr( get_post_meta( get_the_ID(), 'home-starting-button', true ) ); ?></a>
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
            <div class="row">
            <?php echo get_post_meta($post->ID, 'wp_editor_1', true); ?>
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
                        $side_img = get_post_meta( get_the_ID(), 'side_img',true) ;
                        $url_to_my_attachment = $side_img[0];
                        $attachment_id = attachment_url_to_postid($url_to_my_attachment);
                            echo '<a href="'.$url_to_my_attachment.'"  rel="lightbox">'; 
                            echo "<img src='$url_to_my_attachment' alt=''>";
                            echo '</a>';
                    ?>
                </div>
                <div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix">
                    <ul>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                            <div class="text">  
                                <?php  
                                    $img = get_post_meta( 259, 'img',true) ;
                                    $title1 = get_post_meta( 259, 'title1',true) ;
                                    $dis = get_post_meta( 259, 'dis',true) ;
                                    $i=0;
                                    foreach ($title1 as $test ){
                                        $url_to_my_attachment = $img[$i];
                                        $attachment_id = attachment_url_to_postid($url_to_my_attachment);
                                        echo wp_get_attachment_image($attachment_id);
                                        echo "<h4>".$test."</h4>";
                                        echo "<p>".$dis[$i]."</p>";
                                        $i++;
                                    }
                                ?>
                            </div>
                        </li>
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
                        <h2>What They Think <em>About Us</em></h2>
                        <p>Suspendisse vitae laoreet mauris. Fusce a nisi dapibus, euismod purus non, convallis odio.
                            Donec vitae magna ornare, pellentesque ex vitae, aliquet urna.</p>
							
                    </div>
                </div>
                <div class="col-lg-10 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s"> 
                    <div class="owl-carousel owl-theme">
                        <?php  
                            $tes_img = get_post_meta( 259, 'tes_img',true) ; 
                            $tes_title = get_post_meta( 259, 'tes_title',true) ; 
                            $tes_dis = get_post_meta( 259, 'tes_dis',true) ; 
                            $i=0;
                            for ($i=0; $i<count($tes_title); $i++){
                            ?>     
                            <div class="item service-item">
                                <div class="author"><?php
                                            $url_to_my_attachment = $tes_img[$i];
                                            ?>
                                    <i><img src=<?php echo $url_to_my_attachment ?> alt="Author Third"></i>
                                </div>
                                <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                    <h4><?php echo $tes_title[$i]; ?></h4>
                                    <p><?php echo $tes_dis[$i]; ?></p>
                                </div>
                            </div>
                        <?php } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->
		

<?php

get_footer();




