<?php
/**
 * TEMPLATE NAME: Page Cookie 1 
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
<article style="background: #f00;">
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
jQuery.cookie('page1_cookie', 'you got to page 1',{ expires: 3, path: '/' });
jQuery('#cookie-stuff').append('<p>Cookie 1 value: '+ jQuery.cookie('page1_cookie') + '</p>');
}); //end window load
</script>
<?php get_footer(); ?>