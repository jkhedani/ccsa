<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package Maisha
 * @since Maisha 1.0
 */
?>

<div class="threecolumn clearfix">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Post thumbnail.
		// maisha_post_thumbnail();
	?>
    <a class="post-thumbnail">
        <?php if ( get_the_post_thumbnail() ) : ?>
        <?php echo the_post_thumbnail(); ?>
        <?php endif; ?>
    </a>

	<header class="entry-header">
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
		?>
	</header><!-- .entry-header -->

    <hr class="short">

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
	        echo substr(get_the_excerpt(), 0, 110);

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'maisha' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'maisha' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

    <?php if(!get_theme_mod('maisha_post_footer')) : ?>
    <footer class="entry-footer">
		<?php
			if ( is_sticky() && is_home() && ! is_paged() ) {
				printf( '<span class="sticky-post">%s</span>', esc_html__( 'Featured', 'maisha' ) );
			}

			$format = get_post_format();
			if ( current_theme_supports( 'post-formats', $format ) ) {
				printf( '<span class="entry-format">%1$s<a href="%2$s">%3$s</a></span>',
					sprintf( '<span class="screen-reader-text">%s </span>', esc_html_x( 'Format', 'Used before post format.', 'maisha' ) ),
					esc_url( get_post_format_link( $format ) ),
					get_post_format_string( $format )
				);
			}

			if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {
				$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

				if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
					$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
				}

				$time_string = sprintf( $time_string,
					esc_attr( get_the_date( 'c' ) ),
					esc_html( get_the_date(), 'maisha' ),
					esc_attr( get_the_modified_date( 'c' ) ),
					esc_html( get_the_modified_date(), 'maisha' )
				);

				printf( '<span class="posted-on"><span class="screen-reader-text">%1$s </span><a href="%2$s" rel="bookmark">%3$s</a></span>',
					esc_html_x( 'Posted on', 'Used before publish date.', 'maisha' ),
					esc_url( get_permalink() ),
					$time_string
				);

			}

			if ( 'post' == get_post_type() ) {
				if ( is_singular() || is_multi_author() ) {
					printf( '<span class="byline"><span class="author vcard"><span class="screen-reader-text">%1$s </span><a class="url fn n" href="%2$s">%3$s</a></span></span>',
						esc_html_x( 'Author', 'Used before post author name.', 'maisha' ),
						esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
						get_the_author()
					);
				}

				$categories_list = get_the_category_list( esc_html_x( ', ', 'Used between list items, there is a space after the comma.', 'maisha' ) );
				if ( $categories_list && maisha_categorized_blog() ) {
					// printf( '<span class="cat-links"><span class="screen-reader-text">%1$s </span>%2$s</span>',
					// 	esc_html_x( 'Categories', 'Used before category names.', 'maisha' ),
					// 	$categories_list
					// );
				}

				$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'Used between list items, there is a space after the comma.', 'maisha' ) );
				if ( $tags_list ) {
					// printf( '<span class="tags-links"><span class="screen-reader-text">%1$s </span>%2$s</span>',
					// 	esc_html_x( 'Tags', 'Used before tag names.', 'maisha' ),
					// 	$tags_list
					// );
				}
			}

			if ( is_attachment() && wp_attachment_is_image() ) {
				// Retrieve attachment metadata.
				$metadata = wp_get_attachment_metadata();

				printf( '<span class="full-size-link"><span class="screen-reader-text">%1$s </span><a href="%2$s">%3$s &times; %4$s</a></span>',
					esc_html_x( 'Full size', 'Used before full size attachment link.', 'maisha' ),
					esc_url( wp_get_attachment_url() ),
					$metadata['width'],
					$metadata['height']
				);
			}

			if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
				echo '<span class="comments-link">';
				comments_popup_link( esc_html__( 'Leave a comment', 'maisha' ), esc_html__( '1 Comment', 'maisha' ), esc_html__( '% Comments', 'maisha' ) );
				echo '</span>';
			}
		?>
		<?php edit_post_link( esc_html__( 'Edit', 'maisha' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
    <?php endif; ?>

    <?php
		// Related Posts
		if ( is_single()) :
			get_template_part( 'related_posts' );
		endif;
	?>

	<?php
		// Author bio.
		if ( is_single() && get_the_author_meta( 'description' ) ) :
			get_template_part( 'author-bio' );
		endif;
	?>

</article><!-- #post-## -->
</div>
