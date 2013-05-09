<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'toolbox' ), max( $paged, $page ) );

	?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>
<!--top-nav -->
<body <?php body_class(); ?>>
   <?php if (has_nav_menu('topnav', 'toolbox')) { ?>
   <div class='navigation'>

  <div class="navbar navbar-inverse navbar-fixed-top <?php echo (is_admin_bar_showing())?"navbar-admin-adjustment":"" ?>">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <span class="brand"><?php bloginfo( 'name' ); ?></span>

                <?php wp_nav_menu(
                     	array( 'theme_location' => 'topnav',
                     		  'container_class' => 'nav-collapse collapse top-nav main-menu pull-right',
                     		   'menu_class'      => 'nav'

                     )); ?>
           <!--/.nav-collapse -->
        </div>
    </div>

    </div>
    </div>
<?php } ?>
<!--/top-nav -->


  <!--This is the website's container -->
<div id="page" class="hfeed  container">
    <?php do_action( 'before' ); ?>


     <?php if (has_nav_menu('primary', 'toolbox')) { ?>
    <div class="masthead">
 <!--regular-nav -->
 	<div class="header-nav justified-navbar">
         <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                     <?php wp_nav_menu(
                     	array( 'theme_location' => 'primary',
                     		  'container_class' => 'main-menu',
                     		   'menu_class'      => 'nav'

                     )); ?>
                </div>
            </div>
        </div>
   </div>
  <!--/regular-nav -->
  </div>
  <?php } ?>

