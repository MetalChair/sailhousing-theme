<?php
if( !function_exists('sailhousing_setup')):
    function sailhousing_setup(){
        //Register setting for primary menu
        register_nav_menus( array(
            'primary' => __('Primary Menu', 'sailhousing'),
        ));
        register_nav_menus( array(
            'secondary' => __('Footer Menu', 'sailhousing')
        ));
    }
endif;

function remove_dashboard_widgets() {
    global $wp_meta_boxes;
  
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']); 
}

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
function sailhousing_init_widgets(){
    register_sidebar( array(
        'name' => __("Footer Widget", "sailhousing"),
        "id" => "footer-bar",
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
function sailhousing_add_css(){
    //Add additional css files here
    wp_enqueue_style( 'sailhousing_style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
function sailhousing_add_js(){
    //Add additional script files here
    wp_enqueue_script( 'sailhousing_script',get_template_directory_uri() ."/assets/scripts/page_functions.js");
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
function remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
      show_admin_bar(false);
    }
}

// TODO: call this directly from the plugin
function is_due_paying_member() {
  if (!is_user_logged_in()) { return false; }
  global $wpdb;

  $userId = get_current_user_id();
  $user_query = "SELECT * FROM `sail_users` WHERE userId = ";
  $user_query .= $userId;

  $sail_user = $wpdb->get_row($user_query);

  if ($sail_user->isPaidMember) {
    return true;
  }
  else if ($sail_user->familyId != null) {
    $query = "SELECT * FROM `sail_users` WHERE familyId = ";
    $query .= $sail_user->familyId;
    $results = $wpdb->get_results($query);

    foreach($results as $fm) {
      if ($fm->userId != $sail_user->userId && $fm->isPaidMember) {
        return true;
      }
    }

    return false;
  }
  else {
    return false;
  }
}

add_filter( 'wp_nav_menu_objects', function( array $items,  stdClass $args ) {

    return array_filter( $items, function( $item ) {
        if ($item->title === "My Profile" && !is_user_logged_in()) return false;
        if ($item->title === "Logout" && !is_user_logged_in()) return false;
        if ($item->title === "Login" && is_user_logged_in()) return false;
        if ($item->title === "Join SAIL" && is_user_logged_in()) return false;
        if ($item->title === "Roadmap Resources" && !is_due_paying_member()) return false;
        return true;
    } );

}, 10, 2 );

// Makes it so we can access custom query params from urls (like when a user clicks a password reset link)
function add_custom_query_params( $qvars ) {
    $qvars[] = 'pw_reset_key';
    $qvars[] = 'user_email';
    return $qvars;
}
add_filter( 'query_vars', 'add_custom_query_params' );

add_action('wp_enqueue_scripts', 'sailhousing_add_css');
add_action('wp_enqueue_scripts', 'sailhousing_add_js');
add_action('widgets_init', 'sailhousing_init_widgets');
add_action('after_setup_theme', 'sailhousing_setup');
add_action('after_setup_theme', 'sailhousing_setup_custom_logo');
add_action('after_setup_theme', 'remove_admin_bar');

if (current_user_can('editor') || current_user_can('administrator')) {
    add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );
}
