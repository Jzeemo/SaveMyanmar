<?php
/**
 * Template Name: create post
 *
 * 
 */
acf_form_head();
get_header(); ?>

<div class="col-md-12">
	
	<?php //echo do_shortcode('[user-submitted-posts]');?>
	<?php acf_form('submit-post'); ?>
</div>


<?php
//get_sidebar();
get_footer();