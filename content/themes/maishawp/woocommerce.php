<?php
/**
 * Template Name: WooCommerce Shop Page
 *
 * @package Maisha
 */
?>
<?php get_header(); ?>
    <div class="hfeed site default-page">
        <div class="content site-content">
            <main class="main site-main" role="main">
                <div class="single-themes-page clear news">
					<?php woocommerce_content(); ?>
                </div><!-- .single-themes-page -->
            </main><!-- .main -->
        </div><!-- .content -->
    </div><!-- .site -->
<?php get_footer(); ?>