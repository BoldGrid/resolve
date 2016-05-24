<?php
/**
 * The template for the WooCommerce shop page.
 *
 * @package wpb
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
                            <?php woocommerce_content(); ?>
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
