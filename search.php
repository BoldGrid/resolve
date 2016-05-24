<?php
/**
 * The template for displaying search results pages.
 *
 * @package BoldGrid
 */

get_header(); ?>

	<div class="row mod-space-default">
		<div class="background-clear"></div>
		<div class="background-accent"></div>
	</div>

	<div class="row background-primary">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="primary" class="content-area">
						<main id="main" class="site-main" role="main">
							<?php if ( have_posts() ) : ?>

								<div class="page-header">
									<h2 class="page-title"><?php printf( __( 'Search Results for: %s', 'boldgrid' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
								</div><!-- .page-header -->

								<?php /* Start the Loop */ ?>
								<?php while ( have_posts() ) : the_post(); ?>

								<?php
									/**
									 * Run the loop for the search to output the results.
									 * If you want to overload this in a child theme then include a file
									 * called content-search.php and that will be used instead.
									 */
									get_template_part( 'template-parts/content', 'search' );
								?>

								<?php endwhile; ?>
								<?php boldgrid_paging_nav(); ?>

							<?php else : ?>
								<?php get_template_part( 'template-parts/content', 'none' ); ?>
							<?php endif; ?>
						</main><!-- #main -->
					</div><!-- #primary -->
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- container -->
	</div><!-- .background -->

<?php get_footer(); ?>
