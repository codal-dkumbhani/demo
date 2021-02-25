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
function hcf_register_meta_boxes() {
    add_meta_box( 'hcf-1', __( 'Custom Field', 'hcf' ), 'hcf_display_callback', 'page' );
}
add_action( 'add_meta_boxes', 'hcf_register_meta_boxes' );

/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function hcf_display_callback( $post ) {
    include plugin_dir_path( __FILE__ ) . './form.php';
}

/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function hcf_save_meta_box( $post_id ) {
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
add_action( 'save_post', 'hcf_save_meta_box' );



/***********Add new block ******** */


function diwp_add_wysiwyg_editor_metabox(){
 
    add_meta_box(
                    'editor1',
                    'My Custom Editor 2',
                    'diwp_custom_html_code_editor',
                    'page'
              );
 
}
 
add_action('add_meta_boxes', 'diwp_add_wysiwyg_editor_metabox');

    // Callback function for our custom metabox
 
    function diwp_custom_html_code_editor(){
     
        // function that will add the wp editor in the metabox.
        wp_editor( $content, 'diwp_custom_editor', array() );
        
    }
  
    function diwp_save_custom_wp_editor_content(){
 
        global $post;
     
        if(isset($_POST['diwp_custom_editor'])){
            update_post_meta($post->ID, 'diwp_custom_editor', $_POST['diwp_custom_editor']);
            
        }
     
    }
     
    add_action( 'save_post', 'diwp_save_custom_wp_editor_content' );


    
    
    