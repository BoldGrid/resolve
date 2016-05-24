<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package BoldGrid
 */
?><!DOCTYPE html>
<?php do_action( 'boldgrid_html_before' ); ?>
<html <?php language_attributes(); ?>>
<head>
<?php
	do_action( 'boldgrid_head_top' );
	wp_head(  );
	do_action( 'boldgrid_head_bottom' );
?>
</head>

<body <?php body_class(  ); ?> <?php BoldGrid_Framework_Schema::body( true ); ?>>
<?php do_action( 'boldgrid_body_top' ); ?>
<div id="page" class="hfeed site">
	<?php BoldGrid::skip_link(  ); ?>
	<?php do_action( 'boldgrid_header_before' ); ?>
		<header id="masthead" class="site-header" role="banner" <?php BoldGrid_Framework_Schema::header( true ); ?>> 
		<div class="container">
			<?php do_action( 'boldgrid_header_top' ); ?>
			<?php do_action('boldgrid_menu_secondary'); ?>
			<div class="row">
				<div class="col-sm-6 col-md-8 col-lg-9">
					<nav id="site-navigation" class="navbar navbar-default" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-navbar">
							<span class="sr-only">Toggle navigation</span>
                    		<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div><!-- .navbar-header -->
					<?php do_action('boldgrid_menu_primary'); ?>
				</nav><!-- #site-navigation -->
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="social-icons">
						<?php do_action('boldgrid_menu_social') ?>
					</div>
				</div><!-- .col -->
			</div><!-- .row -->
					<div class="row">
							<div class="col-md-12">
								<?php dynamic_sidebar( 'boldgrid-widget-2' ); ?>
							</div>
						</div>
			<div class="site-branding">
				<div class="row">
					<div class="col-xs-5 col-md-3">
						<div class="line-lg"></div>
					</div><!-- .col -->
				</div><!-- .row -->
				<div class="row">
					<div class="col-md-6">
						<?php do_action('boldgrid_site_title'); ?>
						<?php do_action('boldgrid_print_tagline');?>
					</div>
			</div>	
			
			<?php do_action( 'boldgrid_header_bottom' ); ?>
			<?php do_action('boldgrid_menu_tertiary'); ?>
		</div><!-- .container -->
	</header><!-- #masthead -->
	<?php do_action( 'boldgrid_header_after' ); ?>
	<div id="content" class="site-content">
		<div class="container-fluid">
