<?php
/**
 * The sidebar containing the main widget area
 *
 * @package Maisha
 * @since Maisha 1.0
 */
 ?>

	<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
        <div class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar-5' ); ?>
        </div><!-- .widget-area -->
    <?php endif; ?>