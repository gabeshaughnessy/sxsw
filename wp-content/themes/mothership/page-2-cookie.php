<?php
/**
 * TEMPLATE NAME: Page Cookie 2 
 * The no title Page.
 * 
 * @package WordPress
 * @subpackage mothership
 * @since The Mothership 1.0
 */
?>
<?php get_header(); ?>
<div id="content" class="twelve columns">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<article>
	<div class="post-content">
		<?php the_content(); ?>
		<div id="cookie-stuff"></div>
	</div>
</article>
<?php endwhile; ?>
<?php endif; ?>
</div><!-- end of content -->
	<?php //get_template_part('sidebar'); ?>
</div><!-- end of main content container -->
<script type="text/javascript">
/* --------- WINDOW LOAD --------- */
jQuery(window).load(function($){
if(jQuery.cookie('page1_cookie') != undefined){

jQuery('#cookie-stuff').append('<p>Cookie 1 value: '+ jQuery.cookie('page1_cookie') + '</p>');
jQuery.cookie('page2_cookie', 'you got to page 2', { expires: 3, path: '/' });
jQuery('#cookie-stuff').append('<p>Cookie 2 value: '+ jQuery.cookie('page2_cookie') + '</p>');

}
else {
	jQuery('#cookie-stuff').append('<p>Go find the first page and scan it, then come back.</p>');

}
}); //end window load
</script>
<?php get_footer(); ?>