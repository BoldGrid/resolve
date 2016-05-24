<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
				<div class="col-md-8">
					<div id="primary" class="content-area">
						<main id="main" class="site-main" role="main">
							<?php if ( have_posts() ) : ?>
								<div class="page-header">
									<?php
										the_archive_title( '<h2 class="page-title">', '</h2>' );
										the_archive_description( '<div class="taxonomy-description">', '</div>' );
									?>
								</div><!-- .page-header -->

								<?php /* Start the Loop */ ?>
								<?php while ( have_posts() ) : the_post(); ?>

									<?php
										/* Include the Post-Format-specific template for the content.
					 					* If you want to override this in a child theme, then include a file
					 					* called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 					*/
										get_template_part( 'template-parts/content', get_post_format() );
									?>

							<?php endwhile; ?>
								<?php boldgrid_paging_nav(); ?>
							<?php else : ?>
								<?php get_template_part( 'template-parts/content', 'none' ); ?>
							<?php endif; ?>
						</main><!-- #main -->
					</div><!-- #primary -->
    			</div><!-- .col -->

				<div class="col-md-4">
					<?php get_sidebar(); ?>
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- container -->
	</div><!-- .background -->

<?php get_footer(); ?>
