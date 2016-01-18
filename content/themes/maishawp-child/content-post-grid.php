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
                the_excerpt();

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
		<?php maisha_entry_meta(); ?>
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
