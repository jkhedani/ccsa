<?php
/**
 * Template Name: Front Page with Slider
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
            get_template_part( 'content', 'front-page-one' );

        // End the loop.
        endwhile;
        ?>
    </div><!-- .intro -->

    <!-- VoterVoice -->
    <div class="voter-voice strip-cta">
        <?php $vvIconObject = get_field('voter_voice_icon'); ?>
        <img class="voter-voice-icon" src="<?php echo $vvIconObject[sizes][thumbnail]; ?>" />
        <div class="voter-voice-content">
            <h2 class="voter-voice-title"><?php echo get_field('voter_voice_title'); ?></h2>
            <p class="voter-voice-text"><?php echo get_field('voter_voice_text'); ?></p>
        </div>
        <a class="button" href="<?php echo get_field('voter_voice_link'); ?>">Take Action</a>
    </div>


    <!-- Featured Pages -->
    <?php $posts = get_field('featured_pages'); ?>
    <?php if( $posts ): ?>
        <div class="featured-pages section">
            <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                <?php setup_postdata($post); ?>
                <div class="member">
                    <div class="content">
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
                        <!-- <hr /> -->
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


    <!-- Latest News -->
    <?php
        $moreNewsTitle = get_field('more_news_link_title');
        $moreNewsLink = get_field('more_news_link');
    ?>
    <div class="section latest-news-container">
        <div class="title-container">
            <h1 class="section-title">Latest News</h1>
            <a class="view-all" href="<?php echo $moreNewsLink; ?>"><?php echo $moreNewsTitle; ?></a>
        </div>
        <?php
            $news = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'category_name' => array('featured', 'destacado'),
            ));
        ?>
        <div class="latest-news">
            <?php while ($news->have_posts()) : $news->the_post(); ?>
                <div class="news-post">
                    <div class="featured-image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <h2><?php the_title(); ?></h2>
                    <p><?php echo substr(get_the_excerpt(), 0, 110); ?>...</p>
                    <a class="button wire" href="<?php the_permalink(); ?>">Read more</a>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>


    <?php maisha_featured_page_one(); ?>
	<?php maisha_featured_page_two(); ?>
	<?php maisha_featured_page_three(); ?>
    <?php if ( is_active_sidebar( 'sidebar-7' ) ) : ?>
     <div class="block-four">
        <div class="columns clear">
            <?php get_sidebar( 'recentposts' ); ?>
        </div><!-- .child-pages -->
    </div><!-- .block-four -->
    <?php endif; ?>
<?php get_footer(); ?>
