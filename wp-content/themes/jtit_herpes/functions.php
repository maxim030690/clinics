<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 20.12.2016
 * Time: 10:30
 */

//register_nav_menus(array(
//    'header_menu' => 'Header menu',
//    'home_footer_menu' => 'Home footer menu',
//    'tests_footer_menu' => 'Tests footer menu',
//    'resources_footer_menu' => 'Resources footer menu',
//));

function jtit_herpes_scripts(){
//    wp_enqueue_script('jquery');
//    wp_enqueue_script('bootstrap',  get_template_directory_uri().'css/bootstrap/js/bootstrap.js');
    wp_enqueue_script('jtit_jquery', get_template_directory_uri().'js/jquery-3.1.1.js', array(), null );

    wp_enqueue_script('jquery-ui-datepicker');
    wp_enqueue_script('uap-public-functions');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'css/bootstrap/js/bootstrap.js', array(), null );
    wp_enqueue_script('npm.js', get_template_directory_uri().'css/bootstrap/js/npm.js', array(), null );
    wp_enqueue_script('jtit_orbit', get_template_directory_uri().'js/orbit/jquery.orbit-1.2.3.min.js', array(), null );

    wp_enqueue_style('jtit_herpes_style', get_template_directory_uri().'style.css');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri().'css/bootstrap/css/bootstrap.css');
    wp_enqueue_style('bootstrap.css.map', get_template_directory_uri().'css/bootstrap/css/bootstrap.css.map');
    wp_enqueue_style('bootstrap-theme.css', get_template_directory_uri().'css/bootstrap/css/bootstrap-theme.css');
    wp_enqueue_style('bootstrap-theme.css.map', get_template_directory_uri().'css/bootstrap/css/bootstrap-theme.css.map');
    wp_enqueue_style('bootstrap-theme.css.map', get_template_directory_uri().'js/orbit/orbit-1.2.3.css');

}

add_action('wp_enqueue_script', 'jtit_herpes_scripts');


function jtit_herpes_styles(){
    wp_enqueue_style('jtit_herpes_style', get_template_directory_uri().'style.css');
//    wp_enqueue_style('bootstrap', get_template_directory_uri().'css/bootstrap/css/bootstrap.css');
//    wp_enqueue_style();

}

add_action('wp_enqueue_style', 'jtit_herpes_styles');

function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu', 'jtit_herpes' ),
            'footer-menu' => __( 'Footer home Menu' ),
            'footer-tests-menu' => __( 'Footer tests Menu' ),
            'footer-resources-menu' => __( 'Footer Resources Menu' ),
        )
    );
}
//add_action( 'init', 'register_my_menus' );

//add_theme_support('custom-logo', array('height' => 67, 'width' => 255, 'flex-height'=>true));

//function jtit_herpes_setup(){
//    load_theme_textdomain('jtit_herpes');
//    add_theme_support('title-tag');
//    add_theme_support('custom-logo', array('height' => 67, 'width' => 255, 'flex-height'=>true));
//    add_theme_support('post-thumbnails');
//    set_post_thumbnail_size(730, 446);
//    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
//    add_theme_support('post-formats', array('aside', 'image', 'video', 'gallery', 'link', 'quote', 'status', 'chat', 'audio'));
//    //add_theme_support('menus');
//    register_nav_menu('primary', 'Primary menu');
//    register_nav_menu('footer-nav', 'Footer nav menu');
//    // Post formats
//    add_theme_support( 'post-formats', array( 'video', 'aside', 'quote' ) );
//}

function jtit_herpes_setup(){
    load_theme_textdomain('jtitherp');

    add_theme_support('title-tag');

    add_theme_support('custom-logo', array('height'=> 47, 'width' => 266, 'flex-height' => true, 'default' => get_template_directory_uri().'/assets/logo.png'));

    add_theme_support('post-thumbnails');
//    set_post_thumbnail_size(730, 446);

    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    add_theme_support('post-formats', array('aside', 'image', 'video', 'gallery', 'link', 'quote', 'status', 'chat', 'audio'));

    $defaults = array(
        'default-color'          => '',
        'default-image'          => '',
        'wp-head-callback'       => '_custom_background_cb',
        'admin-head-callback'    => '',
        'admin-preview-callback' => ''
    );
    add_theme_support( 'custom-background', $defaults );

//    add_theme_support('menus');

    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer home Menu' ),
            'footer-tests-menu' => __( 'Footer tests Menu' ),
            'footer-resources-menu' => __( 'Footer Resources Menu' ),
        )
    );

}

add_action('after_setup_theme', 'jtit_herpes_setup');

function jtit_remove_pages(){
    $post[] = get_page_by_title('HERPES');
    $post[] = get_page_by_title('CHLAMYDIA');
    $post[] = get_page_by_title('FIND A LAB');
    $post[] = get_page_by_title('GONORRHEA');
    $post[] = get_page_by_title('HEPATITIS');
    $post[] = get_page_by_title('HOW IT WORKS');
    $post[] = get_page_by_title('SYPHILIS');
    $post[] = get_page_by_title('WHY US');
    $post[] = get_page_by_title('HOME PAGE');
    $post[] = get_page_by_title('GET TESTED NOW');
    $post[] = get_page_by_title('TESTS AND PRICING');

    Dump::out($post);
    foreach ($post as $item){
        wp_delete_post( $item->ID, $force_delete = false );
        Dump::out($item->ID);
    }

}
//add_action('switch_theme', 'jtit_remove_pages');

//add_action('admin_menu', function(){
//    add_theme_page('Settings', 'settings', 'edit_theme_options', 'customize.php');
//});

//Dump::out(get_page_by_title('HERPES'));

//
//register_sidebar( array(
//    'name' => __( 'Contacts in header', '' ),
//    'id' => 'right-header-info',
//    'description' => __( 'header_contacts', '' ),
//    'before_widget' => '',
//    'after_widget' => '',
//    'before_title' => '<h4>',
//    'after_title' => '</h4>',
//) );
//
//register_sidebar( array(
//    'name' => __( 'Info in header', '' ),
//    'id' => 'left-header-info',
//    'description' => __( 'left_header_info', '' ),
//    'before_widget' => '',
//    'after_widget' => '',
//    'before_title' => '<h4>',
//    'after_title' => '</h4>',
//) );
//
//register_sidebar( array(
//    'name' => __( 'Contacts info footer', '' ),
//    'id' => 'footer-contacts-info',
//    'description' => __( 'Contacts footer', '' ),
//    'before_widget' => '',
//    'after_widget' => '',
//    'before_title' => '<h4>',
//    'after_title' => '</h4>',
//) );

//function jtit_herpes_customize_register($wp_customize){
//    $wp_customize->add_setting( 'header_textcolor' , array(
//        'default'     => __('some text'),
//        'transport'   => 'postMessage',
////        'transport'   => 'refresh',
//    ) );
//
//    $wp_customize->add_section( 'mytheme_new_section_name' , array(
//        'title'      => __( 'Visible Section Name', 'mytheme' ),
//        'priority'   => 30,
//    ) );
//
//    $wp_customize->add_control(  'header_textcolor', array(
//        'label'        => __( 'Header Color', 'mytheme' ),
//        'section'    => 'mytheme_new_section_name',
//        'settings'   => 'header_textcolor',
//        'type' => 'text'
//    ));
//}

require_once 'lib/customizer.php';

add_action('customize_register', 'jtit_herpes_customize_register');
//remove_filter( 'the_content', 'wpautop' );
require_once 'lib/create_page.php';

if (!session_id()){
    session_start();
}


function chekout(){
    $url = $_SERVER['REQUEST_URI'];
    $get_path = explode('?', $url);
    $url_path = explode('/', trim($get_path[0], '/'));
    $action = array_pop($url_path);
    session_start();


    if($action == 'get_tested_now'){
        if(!isset($_SESSION['product_id']) || empty($_SESSION['product_id'])) {
            add_action('template_redirect', function () {
                wp_redirect(site_url() . '/tests-and-pricing/', 301);
                exit;

            });
        }
    }

    if($action == 'tests-and-pricing'){
        if(isset($_SESSION['product_id']) || !empty($_SESSION['product_id'])) {

            if (isset($_SESSION['center']) || !empty($_SESSION['center'])){

                add_action('template_redirect', function () {
                    wp_redirect(site_url() . '/get_tested_now/', 301);
                    exit;

                });
            }

        }
    }

    if($action == 'remove_test'){
        $_SESSION['product_id'];
        $get = explode('=', $get_path[1]);
        if ($get[0] == 'product_id'){
            if ($get[1] == 'all_tests'){
                $_SESSION['product_id']='';
            } else {
                foreach ($_SESSION['product_id'] as $k => $item){
                    if ($item == $get[1]){
                        unset($_SESSION['product_id'][$k]);
                    }
                }
            }
        }

        if(!isset($_SESSION['product_id']) || empty($_SESSION['product_id'])){
            Dump::out($_SESSION, 'session');
            add_action( 'template_redirect', function() {
                wp_redirect( site_url().'/tests-and-pricing', 301 );
                exit;
            } );
        } else {
            add_action( 'template_redirect', function() {
                wp_redirect( site_url().'/get_tested_now', 301 );
                exit;

            } );
        }

    }


}

chekout();


/* Yura 15.02.2017 start */
// added possibility to change bg-image on Home page via customizer
function jtit_herpes_register_theme_customizer( $wp_customize ){
	if ( ! isset( $wp_customize ) ) {
		return;
	}
	$wp_customize->add_section(
		// $id
		'jtit_herpes_section__home_page_bgimage_',
		// $args
		array(
			'title'			=> __( 'Home Page background image', 'theme-slug' ),
			// 'description'	=> __( 'Some description for the options in the Home Top section', 'theme-slug' ),
			'active_callback' => 'is_front_page',
		)
	);
	$wp_customize->add_setting(
		'jtit_herpes_home_page_bgimage_background_image',
		array(
			'default'		=> get_stylesheet_directory_uri() . '/assets/doctor3.jpg',
			'sanitize_callback'	=> 'esc_url_raw',
			'transport'		=> 'postMessage'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'jtit_herpes_home_page_bgimage_background_image',
			array(
				'settings'		=> 'jtit_herpes_home_page_bgimage_background_image',
				'section'		=> 'jtit_herpes_section__home_page_bgimage_',
				'label'			=> __( 'Home Page Background Image', 'theme-slug' ),
				'description'	=> __( 'Select the image to be used for Home Page Background Image.', 'theme-slug' )
			)
		)
	);

}
add_action( 'customize_register', 'jtit_herpes_register_theme_customizer' );

function jtit_herpes_customizer_css() {
?>
	<style type="text/css">
		<?php
			if ( get_theme_mod( 'jtit_herpes_home_page_bgimage_background_image' ) ) {
				$home_page_bgimage_background_image_url = get_theme_mod( 'jtit_herpes_home_page_bgimage_background_image' );
			} else {
				$home_page_bgimage_background_image_url = get_stylesheet_directory_uri() . '/assets/doctor3.jpg';
			}
			// if ( 0 < count( strlen( ( $home_top_background_image_url = get_theme_mod( 'jtit_herpes_home_page_bgimage_background_image', sprintf( '%s/assets/doctor3.jpg', get_stylesheet_directory_uri() ) ) ) ) ) ) { ?>
			.cover-image-container {
				background-image: url( <?php echo $home_page_bgimage_background_image_url; ?> ) !important;
			}
		<?php // } // end if ?>
	 </style>
<?php
}
add_action( 'wp_head', 'jtit_herpes_customizer_css');

function jtit_herpes_customizer_live_preview() {
	wp_enqueue_script(
		'jtit_herpes-theme-customizer',
		get_stylesheet_directory_uri() . '/js/theme-customizer.js',
		array( 'customize-preview' ),
		'0.1.0',
		true
	);
}
add_action( 'customize_preview_init', 'jtit_herpes_customizer_live_preview' );
/* Yura 15.02.2017 end */