<?php
/*
    ==============================
        Admin Enqueue Function
    ==============================
*/

function mondaycode_load_admin_scripts( $hook ){
    if( 'toplevel_page_mondaycode' != $hook ){
        return;
    }
    wp_register_style( 'mondaycode_admin', get_template_directory_uri() . '/css/mondaycode.admin.css', array(), 'all' );
    wp_enqueue_style( 'mondaycode_admin' );

    wp_enqueue_media();

    wp_register_script( 'mondaycode_admin_script', get_template_directory_uri() . '/js/mondaycode.admin.js', array(), 'all' );
    wp_enqueue_script( 'mondaycode_admin_script' );
}

add_action( 'admin_enqueue_scripts', 'mondaycode_load_admin_scripts' );