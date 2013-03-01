<?php 
/*
http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
*/
register_nav_menus(array(
    'utility' => 'Utility Menu', // registers the menu in the WordPress admin menu editor
   
));
function foundation_utility_nav() {
   $utility_menu = wp_nav_menu(array( 
        'container' => false,             // remove menu container
        'container_class' => '',          // class of container
        'menu' => '',                     // menu name
        'menu_class' => 'sub-nav',        // adding custom nav class
        'theme_location' => 'utility',  // where it's located in the theme
        'before' => '<dd>',                   // before each link <a>
        'after' => '</dd>', 
        'items_wrap' => '<dl id="%1$s" class="%2$s myclass">%3$s</dl>',                   // after each link </a>
        'link_before' => '',              // before each link text
        'link_after' => '',               // after each link text
        'depth' => 1,                     // limit the depth of the nav
    	'fallback_cb' => 'utility_nav_fb',   // fallback function (see below)
        'walker' => new utility_walker() ,   // walker to customize menu (see foundation-nav-walker)
        'echo' => false,   //don't print the menu
	));
	
	$search  = array('<ul', '</ul>', '<li', '</li>');
	$replace = array('<dl', '</dl>', '<dd', '</dd>');
	echo str_replace($search, $replace, $utility_menu);
	}
	
	/*
	http://codex.wordpress.org/Template_Tags/wp_list_pages
	*/
	function utility_nav_fb() {
		echo '<dl class="sub-nav"><dt></dt>';
		wp_list_pages(array(
			'depth'        => 2,
			'child_of'     => 0,
			'exclude'      => '',
			'include'      => '',
			'title_li'     => '',
			'echo'         => 1,
			'authors'      => '',
			'sort_column'  => 'menu_order, post_title',
			'link_before'  => '',
			'link_after'   => '',
			'walker'       => new subnav_walker(),
			'post_type'    => 'page',
			'post_status'  => 'publish' 
		));
		echo '</dl>';
	}
	
?>