<?php
class subnav_walker extends Walker_Page {
    function start_el(&$output, $page, $depth, $args, $current_page) {
		
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        extract($args, EXTR_SKIP);
        $classes = array('page_item', 'page-item-'.$page->ID);
        if (!empty($current_page)) {
            $_current_page = get_page( $current_page );
        if (isset($_current_page->ancestors) && in_array($page->ID, (array) $_current_page->ancestors) )
            $classes[] = 'current_page_ancestor';
        if ($page->ID == $current_page)
            $classes[] = 'current_page_item active';
        elseif ($_current_page && $page->ID == $_current_page->post_parent)
            $classes[] = 'current_page_parent';
        } elseif ($page->ID == get_option('page_for_posts') ) {
            $classes[] = 'current_page_parent';
        }
        if (get_children($page->ID))
            $classes[] = 'has-flyout';
		
        $classes = implode(' ', apply_filters('page_css_class', $classes, $page));
		
        $output .= $indent.'<dd class="'.$classes.'">';
        $output .= '<a href="'.get_page_link($page->ID).'" title="'.esc_attr(wp_strip_all_tags($page->post_title)).'">';
        $output .= $args['link_before'].$page->post_title.$args['link_after'];
        $output .= '</a>';
    }
    function end_el(&$output, $item, $depth) {
        $output .= "</dd>\n";
    }
    function start_lvl(&$output, $depth) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<dl class=\"sub-nav\">\n";
    }
    function end_lvl(&$output, $depth) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent</dl>\n";
    }
} // end page walker
?>