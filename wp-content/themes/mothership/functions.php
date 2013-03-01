<?php  /* Theme Functions */

//Initialize Admin Pages 
require_once('lib/admin-page-class/admin-page-class.php');
require_once('lib/admin-page-class/theme-options.php');

//enqueue foundation js
function ms_enqueue_scripts() {
	
	//jQuery
	wp_enqueue_script(
		'jquery'
	);
	//Foundation
	wp_register_script(
		'foundation',
		get_template_directory_uri() . '/lib/foundation/javascripts/foundation.min.js',
		array('jquery')
	);
	//Foundation App
	wp_register_script(
		'foundation-app',
		get_template_directory_uri() . '/lib/foundation/javascripts/app.js',
		array('foundation')
	);
	//Uniform - sexy forms
	wp_register_script(
		'uniform',
		get_template_directory_uri() . '/lib/uniform/jquery.uniform.js',
		array('jquery')
	);
	//Local Scroll and smooth scroll
	wp_register_script(
		'scrollTo',
		get_template_directory_uri() . '/js/jquery.scrollTo-1.4.3.1-min.js',
		array('jquery')
	);
	wp_register_script(
		'localScroll',
		get_template_directory_uri() . '/js/jquery.localscroll-1.2.7-min.js',
		array('jquery', 'scrollTo')
	);
	//Global JS
	wp_register_script(
		'global_scripts',
		get_template_directory_uri() . '/js/global.js',
		array('foundation', 'jquery')
	
	);
	wp_enqueue_script(
		'foundation'
	);
	wp_enqueue_script(
		'foundation-app'
	);
	/*wp_enqueue_script(
		'uniform'
	);*/
	wp_enqueue_script('scrollTo');
	wp_enqueue_script('localScroll');
	wp_enqueue_script(//do this last
		'global_scripts'
	);
}
add_action('wp_enqueue_scripts', 'ms_enqueue_scripts');

/* USER PROFILES */
require_once('user-fields.php');

/* ------ MENUS ----------*/
require_once('lib/foundation/foundation-topbar-menu.php');
require_once('lib/foundation/foundation-topbar-walker.php');
require_once('lib/foundation/foundation-navbar-menu.php');
require_once('lib/foundation/foundation-navbar-walker.php');
require_once('lib/foundation/foundation-page-walker.php');
require_once('lib/foundation/foundation-subnav-walker.php');
require_once('lib/foundation/foundation-utility-walker.php');
require_once('lib/foundation/foundation-utility-menu.php');

//add_filter('wp_nav_menu_items', 'add_search_to_nav', 10, 2);

function add_search_to_nav($items, $args)
{
    $items .= '<li class="search"><form role="search" method="get" id="searchform" action="'.get_bloginfo("url").'">
  
    	<input type="search" id="searchsubmit" value="Search">

    	</form></li>';
    return $items;
}


/* ___________ SIDEBARS _______________ */
 $main_sidebar = array(
	'name'          => __( 'Main Sidebar', 'mothership' ),
	'id'            => 'main-sidebar',
	'description'   => 'The default sidebar, on the right hand side of the page',
        'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>' ); 
	
register_sidebar( $main_sidebar);

$header_sidebar = array(
	'name'          => __( 'Header Sidebar', 'mothership' ),
	'id'            => 'header-sidebar',
	'description'   => 'The sidebar in the site header',
        'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s six columns">',
	'after_widget'  => '</li>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>' ); 
	
register_sidebar( $header_sidebar);

$footer_sidebar = array(
	'name'          => __( 'Footer Sidebar', 'mothership' ),
	'id'            => 'footer-sidebar',
	'description'   => 'The sidebar across the site footer',
        'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s three columns">',
	'after_widget'  => '</li>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>' ); 
	
register_sidebar( $footer_sidebar);

/**
SHORTCODES
* Creates sharethis shortcode
*/
if (function_exists('st_makeEntries')) :
add_shortcode('sharethis', 'st_makeEntries');
endif;

/* ___________ WIDGETS_______________ */
//require_once('widgets.php');
?>
