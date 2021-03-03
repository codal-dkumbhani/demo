<?php
/**
 * Plugin Name:Custom Field Dhrumil
 * Plugin URI: #
 * Description: A simple plugin for custom fields.
 * Version: 1.0
 * Author: Dhrumil Kumbhani
 * Author URI:#
 * License: GPL2
 */


 /**
 * Register meta boxes.
 */

$post_id = get_the_ID();
 
function lava_register_meta_boxes() {
    add_meta_box( 'lava-1', __( 'Custom Field', 'lava' ), 'lava_display_callback', 'page' );
}
add_action( 'add_meta_boxes', 'lava_register_meta_boxes' );

/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function lava_display_callback( $post ) {
    include plugin_dir_path( __FILE__ ) . './form.php';
}

/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function lava_save_meta_box( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( $parent_id = wp_is_post_revision( $post_id ) ) {
        $post_id = $parent_id;
    }
    $fields = [
        'title',
        'crate',
        'home-text',
        'home-starting-button',
        'home-starting-button-value',
        
        
    ];
    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
     }
}
add_action( 'save_post', 'lava_save_meta_box' );



/***********Add new block ******** */


/* Define the custom box */
add_action( 'add_meta_boxes', 'wp_editor_callback' );

/* Do something with the data entered */
add_action( 'save_post', 'myplugin_save_postdata' );

/* Adds a box to the main column on the Post and Page edit screens */
function wp_editor_callback() {
	add_meta_box( 'wp_editor_test_1_box', 'WP Editor FOR 3 BOX', 'wp_editor_meta_box' );
}

/* Prints the box content */
function wp_editor_meta_box( $post ) {
  wp_nonce_field( plugin_basename( __FILE__ ), 'myplugin_noncename' );
	
	$field_value = get_post_meta( $post->ID, 'wp_editor_1', false );
	wp_editor( $field_value[0], 'wp_editor_1' );
}

/* When the post is saved, saves our custom data */
function myplugin_save_postdata( $post_id ) {
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
      return;
  if ( ( isset ( $_POST['myplugin_noncename'] ) ) && ( ! wp_verify_nonce( $_POST['myplugin_noncename'], plugin_basename( __FILE__ ) ) ) )
      return;


  // OK, we're authenticated: we need to find and save the data
  if ( isset ( $_POST['wp_editor_1'] ) ) {
    update_post_meta( $post_id, 'wp_editor_1', $_POST['wp_editor_1'] );
    }
    
}


/***********Add new block ******** */

function add_custom_meta_box()
{
    add_meta_box("demo-meta-box", "dynemic meta box", "custom_meta_box_markup", "page");
}

add_action("add_meta_boxes", "add_custom_meta_box");

function custom_meta_box_markup($post){
    include plugin_dir_path( __FILE__ ) . './form2.php';
    
}

function save_meta_box($post_id) {
    // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    
 
    // if our current user can't edit this post, bail
    if ( $parent_id = wp_is_post_revision( $post_id ) ) {
        $post_id = $parent_id;
    }
 
    // now we can actually save the data
    $fields =[
        'side_img' => array('side_img'),
        'img' => array('img'),
        'title1' => array('title1'),
        'dis'=> array('dis')
    ];
    // If any value present in input field, then update the post meta
    if (isset($_POST['side_img'])){
        update_post_meta( $post_id, 'side_img', $_POST['side_img'] );
    }

    if(isset($_POST['img'])) {
        // $post_id, $meta_key, $meta_value
        update_post_meta( $post_id, 'img', $_POST['img'] );
    }
    if(isset($_POST['title1'])) {
        // $post_id, $meta_key, $meta_value
        update_post_meta( $post_id, 'title1', $_POST['title1'] );
    }
    if(isset($_POST['dis'])) {
        // $post_id, $meta_key, $meta_value
        
        update_post_meta( $post_id, 'dis', $_POST['dis'] );
    }
}
add_action('save_post', 'save_meta_box');



/***********Add new block ******** */


function add_custom_meta_box2()
{
    add_meta_box("testimonial_metabox", "Testimonial Meta Box", "custom_meta_box_testimonial", "page");
}

add_action("add_meta_boxes", "add_custom_meta_box2");

function custom_meta_box_testimonial($post){
    include plugin_dir_path( __FILE__ ) . './form3.php';
}

add_action('save_post', 'tes_save_meta');

function tes_save_meta($post_id) { 
    
    // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    
 
    // if our current user can't edit this post, bail
    if ( $parent_id = wp_is_post_revision( $post_iABCd ) ) {
        $post_id = $parent_id;
    }
 
    // now we can actually save the data
    $fields1 =[
        'tes_img' => array('tes_img'),
        'tes_title' => array('tes_title'),
        'tes_dis'=> array('tes_dis')
    ];
    // If any value present in input field, then update the post meta
        
    if(!empty($_POST['tes_img'])) {
        // $post_id, $meta_key, $meta_value
        update_post_meta( $post_id, 'tes_img', $_POST['tes_img'] );
    }
    if(!empty($_POST['tes_title'])) {
        // $post_id, $meta_key, $meta_value
        update_post_meta( $post_id, 'tes_title', $_POST['tes_title'] );
    }
    if(!empty($_POST['tes_dis'])) {
        // $post_id, $meta_key, $meta_value
        update_post_meta( $post_id, 'tes_dis', $_POST['tes_dis'] );
    }
}
add_action('save_post', 'tes_save_meta');


