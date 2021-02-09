<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php

// set the "paged" parameter (use 'page' if the query is on a static front page)
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
$args = array (
    'nopaging'               => false,
    'paged'                  => $paged,
    'posts_per_page'         => '10',
    'post_type'              => 'post',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {

    while ( $query->have_posts() ) {
        $query->the_post();
    ?>
    	<div class="col-xs-12 no-padding entry">
			<div class="our-voice">

				<div class="flex-container">
					<div class="thumbnail">
						<img src="<?php echo (!empty(get_field('upload_image'))) ?  get_field('upload_image'): 'https://www.savemyanmar.org/wp-content/uploads/2021/02/savemyanmar.png';?>" />	
						<p class="user-name"><?php echo get_field('name');?></p>  
						<p class="location"><?php echo strtoupper(get_field('current_country'));?></p> 		
					</div>
					<div class="information">
						<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>

						<?php echo get_field('your_voice_for_us');?>
					</div>
					<div class="date">
						<p>
							<?php echo get_the_date('d M Y', get_the_ID())." - ".get_the_time( '', get_the_ID() );?>
						</p>
					</div>  
				</div>

			</div><!-- #post-## -->
		</div>

    <?php
    }
    post_pagination();
    //next_posts_link( 'Older Entries »', $query->max_num_pages );

} else {
    // no posts found
    echo '<h1 class="page-title screen-reader-text">No Posts Found</h1>';
}

// Restore original Post Data
wp_reset_postdata();

?>

