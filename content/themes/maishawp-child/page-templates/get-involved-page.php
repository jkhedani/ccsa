<?php
/**
 * Template Name: Get Involved Page
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

    <div class="secondary-header">
        <?php
            // // Start the loop.
            // while ( have_posts() ) : the_post();
            //
            //     // Include the page content template.
            //     get_template_part( 'content', 'page' );
            //
            //     // If comments are open or we have at least one comment, load up the comment template.
            //     if ( comments_open() || get_comments_number() ) :
            //         comments_template();
            //     endif;
            //
            // // End the loop.
            // endwhile;
        ?>
    </div>

    <!-- Featured Two-Up -->
    <?php $posts = get_field('featured_two_up'); ?>
    <?php if( $posts ): ?>
        <div class="featured-two-up">
            <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                <?php setup_postdata($post); ?>
                <div class="member">
                    <div class="featured-image-container">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="content">
                        <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
                        <hr />
                        <?php the_content(); ?>
                        <?php $ctaLink = get_field('custom_cta_link'); ?>
                        <?php $ctaText = get_field('custom_cta_text'); ?>
                        <a class="button" href="<?php echo $ctaLink; ?>"><?php echo $ctaText; ?></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>


    <?php if( have_rows('three_up_links') ): ?>
    <div class="featured-three-up">

        <?php while ( have_rows('three_up_links') ) : the_row(); ?>
            <div class="member">
                <div class="content">
                    <i class="fa <?php the_sub_field('font_awesome_icon_class'); ?>"></i>
                    <h1><?php the_sub_field('title'); ?></h1>
                    <a class="Button" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('blurb'); ?></a>
                </div>
            </div>
        <?php endwhile; ?>

    <?php endif; ?>


        <!-- <div class="member">
            <div class="content">
                <i class="fa fa-pencil"></i>
                <h1>Sign Up</h1>
                <a class="Button" href="#">Subscribe to CCSA Families</a>
            </div>
        </div>
        <div class="member">
            <div class="content">
                <i class="fa fa-check"></i>
                <h1>Register To Vote</h1>
                <a class="Button" href="#">Register Now</a>
            </div>
        </div>
        <div class="member">
            <div class="content">
                <i class="fa fa-users"></i>
                <h1>Join Our Team</h1>
                <a class="Button" href="#">See Job Opportunities</a>
            </div>
        </div>
    </div> -->

    <!-- Featured Pages -->
    <?php $posts = get_field('featured_pages'); ?>
    <?php if( $posts ): ?>
        <div class="featured-pages section">
            <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                <?php setup_postdata($post); ?>
                <div class="member">
                    <?php the_post_thumbnail(); ?>
                    <div class="content">
                        <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>

<?php get_footer(); ?>
