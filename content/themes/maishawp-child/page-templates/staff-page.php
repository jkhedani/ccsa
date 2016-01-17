<?php
/**
 * Template Name: Staff Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package Maisha
 * @since Maisha 1.0
 */

get_header(); ?>
    <div class="intro">
		<?php
        // Start the loop.
        while ( have_posts() ) : the_post();

            // Include the page content template.
            get_template_part( 'content', 'about-page' );

        // End the loop.
        endwhile;
        ?>
    </div><!-- .intro -->

    <!-- CUSTOM: Staff Bio Feed -->
    <?php
        $child_pages = new WP_Query( array(
            'post_type'      => 'page',
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
            'post_parent'    => $post->ID,
            'posts_per_page' => 999,
            'no_found_rows'  => true,
        ) );
    ?>
    <div class="staff row">
    <?php while ( $child_pages->have_posts() ) : $child_pages->the_post(); ?>
        <div class="member col-xs-6 col-sm-4">
            <div class="post-thumbnail"><?php the_post_thumbnail(); ?></div>
            <div class="info">
                <h1><?php the_title(); ?></h1>
                <?php $title = get_field('title'); ?>
                <?php $phoneNumber = get_field('phone_number'); ?>
                <?php $emailAddress = get_field('email_address'); ?>
                <ul class="contact-info">
                    <li class="title"><?php echo $title; ?></li>
                    <?php if ( $phoneNumber ) : ?>
                        <li><!-- <i class="fa fa-envelope"></i>--> <?php echo $emailAddress; ?></li>
                    <?php endif; ?>
                    <?php if ( $emailAddress ) : ?>
                        <li><!--i class="fa fa-phone"></i>--> <?php echo $phoneNumber; ?></li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="content">
                <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    </div><!-- .staff -->

<?php get_footer(); ?>
