<?php
/*
    ==============================
        Admin Page
    ==============================
*/

function monday_add_admin_page(){
    // Generate Admin Page
    add_menu_page( 'Mondaycode Theme Options', 'Mondaycode', 'manage_options', 'mondaycode', 'mondaycode_theme_create_page',
                    get_template_directory_uri() . '/img/mondaycode-icon.png', 120 );

    // Generate Admin Sub Pages
    add_submenu_page( 'mondaycode', 'Mondaycode Theme Options', 'General', 'manage_options', 'mondaycode', 'mondaycode_theme_create_page' );
    add_submenu_page( 'mondaycode', 'Mondaycode Custom CSS', 'Custom CSS', 'manage_options', 'mondaycode_custom_css', 'mondaycode_theme_settings_page' );

    // Active custom settings
    add_action( 'admin_init', 'mondaycode_custom_settings' );
}

// Trigger function
add_action( 'admin_menu', 'monday_add_admin_page' );

function mondaycode_custom_settings(){
    // Register group
    register_setting( 'mondaycode-settings-group', 'profile_picture' );
    register_setting( 'mondaycode-settings-group', 'first_name' );
    register_setting( 'mondaycode-settings-group', 'last_name' );
    register_setting( 'mondaycode-settings-group', 'user_description' );
    register_setting( 'mondaycode-settings-group', 'twitter_handler', 'mondaycode_sanitize_twitter_handler' );
    register_setting( 'mondaycode-settings-group', 'facebook_handler' );
    register_setting( 'mondaycode-settings-group', 'gplus_handler' );

    // Settings Section for Sidebar
    add_settings_section( 'mondaycode-sidebar-options', 'Sidebar Option', 'mondaycode_sidebar_options', 'mondaycode' );

    add_settings_field( 'sidebar-profile-picture', 'Profile Picture', 'mondaycode_sidebar_profile', 'mondaycode', 'mondaycode-sidebar-options' );
    add_settings_field( 'sidebar-name', 'Full Name', 'mondaycode_sidebar_name', 'mondaycode', 'mondaycode-sidebar-options' );
    add_settings_field( 'sidebar-description', 'Description', 'mondaycode_sidebar_description', 'mondaycode', 'mondaycode-sidebar-options' );
    add_settings_field( 'sidebar-twitter', 'Twitter', 'mondaycode_sidebar_twitter', 'mondaycode', 'mondaycode-sidebar-options' );
    add_settings_field( 'sidebar-facebook', 'Facebook', 'mondaycode_sidebar_facebook', 'mondaycode', 'mondaycode-sidebar-options' );
    add_settings_field( 'sidebar-gplus', 'Google Plus', 'mondaycode_sidebar_gplus', 'mondaycode', 'mondaycode-sidebar-options' );
}

function mondaycode_sidebar_options(){
    echo 'Customize your sidebar';
}

function mondaycode_sidebar_profile(){
    $picture    = esc_attr( get_option('profile_picture') );
    echo '<input type="button" class="button button-secondary" value="Upload Picture" id="upload-button"><input type="hidden" name="profile_picture" value="'.$picture.'" id="profile_picture"/>';
}

function mondaycode_sidebar_name(){
    $firstname  = esc_attr( get_option('first_name') );
    $lastname   = esc_attr( get_option('last_name') );
    echo '<input type="text" name="first_name" value="'.$firstname.'" placeholder="First Name"/>';
    echo '<input type="text" name="last_name" value="'.$lastname.'" placeholder="Last Name"/>';
}

// Sosial Media handler
function mondaycode_sidebar_twitter(){
    $twitter   = esc_attr( get_option('twitter_handler') );
    echo '<input type="text" name="twitter_handler" value="'.$twitter.'" placeholder="Twitter"/>';
    echo '<p class="description">Input your Twitter username <b>without</b> the @ character.</p>';
}

function mondaycode_sidebar_description(){
    $description    = esc_attr( get_option('user_description') );
    echo '<input type="text" name="user_description" value="'.$description.'" placeholder="Description"/>';
    echo '<p class="description">Write something about you.</p>';
}

function mondaycode_sidebar_facebook(){
    $facebook   = esc_attr( get_option('facebook_handler') );
    echo '<input type="text" name="facebook_handler" value="'.$facebook.'" placeholder="Facebook"/>';
}

function mondaycode_sidebar_gplus(){
    $gplus      = esc_attr( get_option('gplus_handler') );
    echo '<input type="text" name="gplus_handler" value="'.$gplus.'" placeholder="Google Plus"/>';
}
// END: Sosial Media handler

// Sanitization Settings
function mondaycode_sanitize_twitter_handler( $input ){
    $output     = sanitize_text_field( $input );
    $output     = str_replace('@', '', $output);
    return $output;
}

function mondaycode_theme_create_page(){
    // Generation of our admin page
    require_once( get_template_directory() . '/inc/templates/mondaycode-admin.php' );
}

function mondaycode_theme_settings_page(){
    // Generation of our admin page
    echo '<h1>Mondaycode Custom CSS</h1>';
}