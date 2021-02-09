<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php 

    // WordPress 5.2 wp_body_open implementation
  if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  }

  ?>

  <div id="page" class="site">
   <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
   <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
   <header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
    <div class="container">
      <div class="row">
        <div class="main-header">
          <div class="navbar-brand logo">
            <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
              <a href="<?php echo esc_url( home_url( '/' )); ?>">
                <img src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
              </a>
              <?php else : ?>
                <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
              <?php endif; ?>

            </div>

            <div class="main-menu">
              <nav class="navbar navbar-expand-xl p-0">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                wp_nav_menu(array(
                  'theme_location'    => 'primary',
                  'container'       => 'div',
                  'container_id'    => 'main-nav',
                  'container_class' => 'collapse navbar-collapse',
                  'menu_id'         => false,
                  'menu_class'      => 'navbar-nav',
                  'depth'           => 3,
                  'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                  'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>

              </nav>
            </div>
            <div class="right-side">
              <a href="<?php echo home_url(); ?>/submit-your-voice/" class="btn btn-primary btn-lg active submit-btn" role="button" aria-pressed="true" >ပါဝင်မည်</a>
            </div>
          </div>
        </div>

      </div>
    </header><!-- #masthead -->
    <?php if(is_front_page() && !get_theme_mod( 'header_banner_visibility' )): ?>
<!-- <div id="page-sub-header" <?php if(has_header_image()) { ?>style="background-image: url('<?php header_image(); ?>');" <?php } ?>>
    <div class="container">
        


 </div>
</div> -->

<div class="container-fluid bg-overlay">
  <div class="row text-center">
    <div class="col-md-12">
      <div class="header-text">
        <h1>
         <?php  
         $args = array(
          'post_type' => 'post'
        );
         $the_query = new WP_Query( $args );
         echo $the_query->found_posts; 

         ?>
         <span class="voice"> Voices</span>
       </h1>
       <p>Our generation must be the last to live in fear. We will fight the dictator together.</p>
     </div>
     <div class="col-md-8">

     </div>


   </div>
        <!-- <h1>This is a beautiful background image<br> with a transparent overlay.</h1>
        <h4>You can just use the "<strong>.bg-overlay</strong>" class on any container/element,<br>
        and specify the image you want to use and its height.</h4>
        <br><br>
        <button type="button" class="btn btn-primary btn-lg">Get Started</button> -->
      </div>
    </div>
  <?php endif; ?>
  <div id="content" class="site-content">
    <div class="container">
     <div class="row">
      <?php endif; ?>