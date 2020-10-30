<?php
/* 
 *
 *  @package design+code demo
 *  @since 1.0.0
 *  
*/

function add_theme_scripts() {
    //Google Fonts
    wp_enqueue_style( 'cabin', '"https://fonts.googleapis.com/css2?family=Cabin:wght@400;700&display=swap" rel="stylesheet"',false);
    wp_enqueue_style( 'raleway', 'https://fonts.googleapis.com/css2?family=Raleway:wght@400;600&display=swap" rel="stylesheet"',false);

    //styles
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css', false, '1.0','all');
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    
    //scripts
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1.1, true);
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


function theme_setup() {

    /** automatic feed link*/
    add_theme_support( 'automatic-feed-links' );

    /** post formats **/ 
    $post_formats = array('aside','image','gallery','video','audio','link','quote','status');
    add_theme_support( 'post-formats', $post_formats);

    /** post thumbnail **/
    add_theme_support( 'post-thumbnails' );

    /** title-tag **/
    add_theme_support( 'title-tag' );

    /** HTML5 support **/
    add_theme_support( 'html5', array( 'comment-list', 'comment-form',
    'search-form', 'gallery', 'caption' ) );

    /** refresh widgest **/
    add_theme_support( 'customize-selective-refresh-widgets' );

    /** custom background **/
    $bg_defaults = array(
    'default-image' => '',
    'default-preset' => 'default',
    'default-size' => 'cover',
    'default-repeat' => 'no-repeat',
    'default-attachment' => 'scroll',
    );
    add_theme_support( 'custom-background', $bg_defaults );

    /** custom header **/
    $header_defaults = array(
    'default-image' => '',
    'width' => 300,
    'height' => 60,
    'flex-height' => true,
    'flex-width' => true,
    'default-text-color' => '',
    'header-text' => true,
    'uploads' => true,
    );
    add_theme_support( 'custom-header', $header_defaults );
    
    /** custom logo **/
    add_theme_support( 'custom-logo', array(
    'height' => 100,
    'width' => 400,
    'flex-height' => true,
    'flex-width' => true,
    'header-text' => array( 'site-title', 'site-description' ),
    ) );

}
add_action('after_setup_theme', 'theme_setup');

/** REGISTER MENU **/  
function register_menus() {
    register_nav_menus(
        array(
            'main-menu' => 'Main Menu', // primary menu
            'footer-menu-1' => 'Footer Menu 1', // footer left menu
            'footer-menu-2' => 'Footer Menu 2', // left middle
            'footer-menu-3' => 'Footer Menu 3', // left right
        )
    );
}
add_action( 'init', 'register_menus' );

/*** INCLUDES AREA ****/
$dc_includes = array(
    '/widgets.php', // Register widget area.
);


foreach ( $dc_includes as $file ) {
    $filepath = locate_template( 'includes' . $file );
    if ( ! $filepath ) {
        trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
    }
    require_once $filepath;
}