<?php
/**
 * Template Name: About Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package Maisha
 * @since Maisha 1.0
 */

get_header(); ?>
    <div class="aboutpage">
    <?php if ( has_post_thumbnail() ): ?>
		<?php $image_id = get_post_thumbnail_id(); ?>
        <?php $image_url = wp_get_attachment_image_src($image_id,'full');   ?>
        <div class="cd-fixed-bg-one cd-bg-1" style="background-image:url(<?php echo esc_url( $image_url[0] ); ?>);">
        <div class="entry-content">
            <h1><?php the_title(); ?></h1>
            <hr class="short">
        </div>
        <span class="overlay"></span>
        </div>
    <?php endif; ?>
    </div>

    <!-- Standard content -->
    <!-- <div class="hfeed site default-page">
        <div class="content site-content">
            <main class="main site-main" role="main">
                <div class="single-themes-page clear news">
                    <div id="primary" class="content-area"> -->
						  <?php
                            //   // Start the loop.
                            //   while ( have_posts() ) : the_post();
                              //
                            //       // Include the page content template.
                            //       get_template_part( 'content', 'page' );
                              //
                            //       // If comments are open or we have at least one comment, load up the comment template.
                            //       if ( comments_open() || get_comments_number() ) :
                            //           comments_template();
                            //       endif;
                              //
                            //   // End the loop.
                            //   endwhile;
                          ?>
                    <!-- </div> -->
                <!-- </div> -->
            <!-- </main> -->
        <!-- </div> -->
    <!-- </div> -->

    <!-- Featured Pages -->
    <?php $posts = get_field('featured_pages'); ?>
    <?php if( $posts ): ?>
        <div class="featured-pages">
            <?php foreach( $posts as $index=>$post): // variable must be called $post (IMPORTANT) ?>
                <?php setup_postdata($post); ?>
                <div class="featured-page <?php if ( $index % 2 === 0 ) { echo "left"; } else { echo "right"; } ?>">
                    <div class="featured-page-image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="featured-page-content">
                        <h1><?php the_title(); ?></h1>
                        <?php
                            global $more;    // Declare global $more (before the loop).
                            $more = 1;       // Set (inside the loop) to display all content, including text below more.
                            the_content();
                        ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>

    <!-- Our Team Teaser -->
    <?php
        $staffPages = new WP_Query(array(
            'post_type' => 'page',
            'post_parent' => 412 // Our Team page
        ));
    ?>
    <div class="footer-teaser">
        <div class="teaser-content">
            <h2>Our Team</h2>
            <p>Meet the passionate organizers working for California students and families.</p>
            <a class="<?php echo site_url('/our-team/'); ?>">Check our team</a>
        </div>
        <div class="teaser-image">
            <?php while ($staffPages->have_posts()) : $staffPages->the_post(); ?>
                <?php the_post_thumbnail(); ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>

<?php get_footer(); ?>
