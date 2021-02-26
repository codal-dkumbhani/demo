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

/* Adds a box to the main column on the Post and Page edit screens *//*
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

function save_meta_box($post_id){
    
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ){
        return;
    }
    if ( $parent_id = wp_is_post_revision( $post_id ) ) {
        $post_id = $parent_id;
    }
    $fields = [
        'img',
        'title',
        'dis'
        
        
        
    ];
    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
           echo $_POST[$field]; 
        }
     }
     
}


