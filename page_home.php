<?php
/**
 * Template Name: Home Page
 *
 * @package BoldGrid
 */

get_header(); ?>
	<div class="container">
			<?php dynamic_sidebar( 'boldgrid-widget-1' ); ?>
	</div>

	<div class="row mod-space-home">
		<div class="background-clear"></div>
		<div class="background-accent"></div>
	</div>

	<div class="row background-primary">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php endwhile; // end of the loop. ?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .background -->

<?php get_footer(); ?>
