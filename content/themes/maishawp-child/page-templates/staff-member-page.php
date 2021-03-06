<?php
/**
 * Template Name: Staff Member Template
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
        <?php $title = get_field('title'); ?>
        <?php $phoneNumber = get_field('phone_number'); ?>
        <?php $emailAddress = get_field('email_address'); ?>
        <ul class="contact-info">
            <li class="title"><?php echo $title; ?></li>
            <li class="mail"><strong>MAIL</strong> <?php echo $emailAddress; ?></li>
            <li class="phone"><strong>TEL</strong> <?php echo $phoneNumber; ?></li>
        </ul>

    <?php
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
	?>
    <div class="hfeed site default-page">
        <div class="content site-content">
            <div class="content-area">
                <div class="main site-main" role="main">
                    <?php comments_template(); ?>
                </div><!-- .site-main -->
            </div><!-- .content-area -->
        </div><!-- .site-content -->
    </div><!-- .site -->
    <?php endif; ?>
<?php get_footer(); ?>
