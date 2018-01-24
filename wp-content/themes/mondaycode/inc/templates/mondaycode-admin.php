<h1>Mondaycode Cockpit</h1>
<?php settings_errors();?>
<?php
    $picture        = esc_attr( get_option('profile_picture') );
    $firstname      = esc_attr( get_option('first_name') );
    $lastname       = esc_attr( get_option('last_name') );
    $fullname       = $firstname . " " . $lastname;
    $description    = esc_attr( get_option('user_description') );
    $twitter        = esc_attr( get_option('twitter_handler') );
    $description    = esc_attr( get_option('user_description') );
    $facebook       = esc_attr( get_option('facebook_handler') );
    $gplus          = esc_attr( get_option('gplus_handler') );
?>

<div class="mondaycode-sidebar-priview">
    <div class="mondaycode-sidebar">
        <div class="image-container">
            <div class="profile-picture" style="background-image: url(<?php echo $picture;?>)"></div>
        </div>
        <h1 class="mondaycode-username"><?php echo $fullname;?></h1>
        <h2 class="mondaycode-description"><?php echo $description;?></h2>
        <div class="icons-wrapper">

        </div>
    </div>
</div>

<form method="post" action="options.php" class="mondaycode-general-form">
    <?php settings_fields( 'mondaycode-settings-group' );?>
    <?php do_settings_sections( 'mondaycode' );?>
    <?php submit_button();?>
</form>