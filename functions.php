<?php
if( !function_exists('sailhousing_setup')):
    function sailhousing_setup(){
        //Register setting for primary menu
        register_nav_menus( array(
            'primary' => __('Primary Menu', 'sailhousing')
        ));
    }
endif;

function sailhousing_customize_register($wp_customize){
 	// // Add primary color hue setting and control.
    //  $wp_customize->add_setting(
	// 	'bg_color',
	// 	array(
	// 		'default'           => 199,
	// 		'transport'         => 'postMessage',
	// 		'sanitize_callback' => 'absint',
	// 	)
	// );

	// $wp_customize->add_control(
	// 	new WP_Customize_Color_Control(
	// 		$wp_customize,
	// 		'bg_color',
	// 		array(
	// 			'description' => __( 'Apply a custom color for buttons, links, featured images, etc.', 'twentynineteen' ),
	// 			'section'     => 'colors',
	// 			'mode'        => 'hue',
	// 		)
	// 	)
	// );
}
add_action('customize_register', 'sailhousing_customize_register' );

function sailhousing_setup_custom_logo(){
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
       'unlink-homepage-logo' => true, 
        );
    add_theme_support( 'custom-logo', $defaults );
}
function sailhousing_add_css(){
    //Add additional css files here
    wp_enqueue_style( 'sailhousing_style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
function get_menu_array($current_menu){
    return wp_get_nav_menu_items($current_menu);
}
function get_custom_logo_tag(){
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    if ( has_custom_logo() ) {
            echo '<img src="'.esc_url( $logo).'" alt="'.get_bloginfo( 'name' ).'">';
    } else {
            echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
    }
}
add_action('wp_enqueue_scripts', 'sailhousing_add_css');
add_action('after_setup_theme', 'sailhousing_setup');
add_action('after_setup_theme', 'sailhousing_setup_custom_logo');