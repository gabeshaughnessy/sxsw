<?php global $search_label; 
//The Default search form called up with get_search_form();
echo '<form method="get" role="search" class="search-form" action="'.esc_url( home_url( '/' ) ).'"><input name="search" type="text" placeholder="'.$search_label.' the site" size="40" /></form>';
?>