<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Maisha
 * @since Maisha 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
    <?php if(get_theme_mod('maisha_favicon')) : ?>
	<link rel="shortcut icon" href="<?php echo esc_url( get_theme_mod('maisha_favicon') ); ?>" />
	<?php endif; ?>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-20854919-1', 'auto');
ga('send', 'pageview');

</script>
</head>

<body <?php body_class(); ?>>

<!-- CUSTOM: Subscribe form -->
<div class="subscribe-form" data-state="closed">


	<?php if(ICL_LANGUAGE_CODE=='es'): ?>

		<div class="text">
			<h1>Inscríbase</h1>
			<p>¡Recibe nuestro boletín mensual, invitaciones a eventos y alertas de acción!</p>
		</div>
		<form id="form-subscribe" action="http://www.clicktools.com/survey">
			<input type="hidden" name="iv" value="thvanipsa0t94" />
			<div class="form-group">
				<input type="text" name="q1" placeholder="Nombre" class="form-control" />
				<input type="text" name="q2" placeholder="Apellido" class="form-control" />
				<input type="text" name="q3" placeholder="Email" class="form-control" />
				<input type="text" name="q7" placeholder="Código Postal" class="form-control" />
				<button>Enviar</button>
			</div>
		</form>
		<?php echo do_shortcode( '[contact-form-7 id="1337" title="Contact form 1 - ES"]' ); ?>
		<?php //echo do_shortcode( '[contact-form-7 id="751" title="Contact form 1"]' ); ?>
		<div class="form-group">
			<input type="checkbox" name="volunteer" />
			<label>Quiero que un organizador de mi área me contacte.</label>
		</div>

	<?php else: ?>

		<div class="text">
			<h1>Sign Up</h1>
			<p>Get our monthly newsletter, event invitations and action alerts!</p>
		</div>
		<form id="form-subscribe" action="http://www.clicktools.com/survey">
			<input type="hidden" name="iv" value="thvanipsa0t94" />
			<div class="form-group">
				<input type="text" name="q1" placeholder="First Name" class="form-control" />
				<input type="text" name="q2" placeholder="Last Name" class="form-control" />
				<input type="text" name="q3" placeholder="Your Email Address" class="form-control" />
				<input type="text" name="q7" placeholder="Your Zip Code" class="form-control" />
				<button>Submit</button>
			</div>
		</form>
		<?php echo do_shortcode( '[contact-form-7 id="1161" title="Contact form 1"]' ); ?>
		<?php //echo do_shortcode( '[contact-form-7 id="751" title="Contact form 1"]' ); ?>
		<div class="form-group">
			<input type="checkbox" name="volunteer" />
			<label>I want to be contacted by an Organizer in my area</label>
		</div>

	<?php endif; ?>


</div><!-- subscribe-form -->

<?php if(get_theme_mod('maisha_header_layout') == 'standard-header') : ?>
    <div class="headerblock standard">
        <div class="content site-content">
            <a class="skip-link screen-reader-text" href="#site"><?php esc_html_e( 'Skip to content', 'maisha' ); ?></a>
            <header id="masthead" class="site-header" role="banner">
                <div class="header-inner">
                <?php if ( get_theme_mod( 'maisha_logo' ) ) : ?>
                    <div class="site-logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url( get_theme_mod( 'maisha_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
                    </div><!-- .site-logo -->
                <?php else : ?>
                    <div class="site-branding">
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                    </div><!-- .site-branding -->
                <?php endif; ?>
                <?php if ( has_nav_menu( 'primary' ) ) : ?>
                    <div id="secondary">
                    <nav id="site-navigation" class="navigation-main" role="navigation">
                    <button class="menu-toggle anarielgenericon" aria-controls="primary-menu" aria-expanded="false"><span><?php esc_html_e( 'Primary Menu', 'maisha' ); ?></span></button>
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'nav-menu' ) ); ?>
                    </nav><!-- #site-navigation -->
                    </div>
                <?php endif; ?>
                </div>

				<!-- CUSTOM: Add Language Switcher here -->
				<div class="language-select">
					<a href="<?php echo strtok($_SERVER["REQUEST_URI"],'?'); ?>?lang=en" class="language">
						<!-- <i class="flag en"></i> -->
						<span class="language-name">English</span>
					</a>
					<a href="<?php echo strtok($_SERVER["REQUEST_URI"],'?'); ?>?lang=es" class="language">
						<!-- <i class="flag es"></i> -->
						<span class="language-name">Español</span>
					</a>
				</div>

				<?php if ( has_nav_menu( 'social' ) ) : ?>
					<nav id="social-navigation-header" class="social-navigation" role="navigation">
						<?php
							// Social links navigation menu.
							wp_nav_menu( array(
								'theme_location' => 'social',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>',
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif; ?>

            </header><!-- .site-header -->
        </div><!-- .site-content -->
    </div><!-- .headerblock -->
    <?php if(!get_theme_mod('maisha_search_top')) : ?>
    <div class="search-toggle">
      <a href="#search-container" class="screen-reader-text" aria-expanded="false" aria-controls="search-container"><?php esc_html_e( 'Search', 'maisha' ); ?></a>
    </div>
    <div id="search-container" class="search-box-wrapper hide">
      <div class="search-box">
          <?php get_search_form(); ?>
      </div>
    </div>
    <?php endif; ?>
<?php elseif(get_theme_mod('maisha_header_layout') == 'alternative-header') : ?>
    <div class="headerblock alternative site">
        <div class="content site-content">
            <a class="skip-link screen-reader-text" href="#site"><?php esc_html_e( 'Skip to content', 'maisha' ); ?></a>
            <header id="masthead" class="site-header" role="banner">
                <?php if ( get_theme_mod( 'maisha_logo' ) ) : ?>
                    <div class="site-logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url( get_theme_mod( 'maisha_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
                    </div><!-- .site-logo -->
                <?php else : ?>
                    <div class="site-branding">
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                    </div><!-- .site-branding -->
                <?php endif; ?>
                <?php if ( has_nav_menu( 'primary' ) ) : ?>
                    <div id="secondary">
                    <nav id="site-navigation" class="navigation-main" role="navigation">
                    <button class="menu-toggle anarielgenericon" aria-controls="primary-menu" aria-expanded="false"><span><?php esc_html_e( 'Primary Menu', 'maisha' ); ?></span></button>
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'nav-menu' ) ); ?>
                    </nav><!-- #site-navigation -->
                    </div>
                <?php endif; ?>

				<!-- CUSTOM: Add Language Switcher here -->
				<div class="language-select">
					<a href="<?php echo strtok($_SERVER["REQUEST_URI"],'?'); ?>?lang=en" class="language">
						<!-- <i class="flag en"></i> -->
						<span class="language-name">English</span>
					</a>
					<a href="<?php echo strtok($_SERVER["REQUEST_URI"],'?'); ?>?lang=es" class="language">
						<!-- <i class="flag es"></i> -->
						<span class="language-name">Español</span>
					</a>
				</div>

				<?php if ( has_nav_menu( 'social' ) ) : ?>
					<nav id="social-navigation-header" class="social-navigation" role="navigation">
						<?php
							// Social links navigation menu.
							wp_nav_menu( array(
								'theme_location' => 'social',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>',
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif; ?>

            </header><!-- .site-header -->
        </div><!-- .site-content -->
    </div><!-- .headerblock -->
    <?php if(!get_theme_mod('maisha_search_top')) : ?>
    <div class="search-toggle">
      <a href="#search-container" class="screen-reader-text" aria-expanded="false" aria-controls="search-container"><?php esc_html_e( 'Search', 'maisha' ); ?></a>
    </div>
    <div id="search-container" class="search-box-wrapper hide">
      <div class="search-box">
          <?php get_search_form(); ?>
      </div>
    </div>
    <?php endif; ?>
<?php else: ?>
    <div class="fixed">
        <div class="headerblock">
            <div class="content site-content">
                <a class="skip-link screen-reader-text" href="#site"><?php esc_html_e( 'Skip to content', 'maisha' ); ?></a>
                <header id="masthead" class="site-header" role="banner">
                    <div class="header-inner">
                    <?php if ( get_theme_mod( 'maisha_logo' ) ) : ?>
                        <div class="site-logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url( get_theme_mod( 'maisha_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
                        </div><!-- .site-logo -->
                    <?php else : ?>
                        <div class="site-branding">
                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                            <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                        </div><!-- .site-branding -->
                    <?php endif; ?>
                    <?php if ( has_nav_menu( 'primary' ) ) : ?>
                        <div id="secondary">
                        <nav id="site-navigation" class="navigation-main" role="navigation">
                        <button class="menu-toggle anarielgenericon" aria-controls="primary-menu" aria-expanded="false"><span><?php esc_html_e( 'Primary Menu', 'maisha' ); ?></span></button>
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'nav-menu' ) ); ?>
                        </nav><!-- #site-navigation -->
                        </div>
                    <?php endif; ?>
                    </div>

                    <!-- CUSTOM: Add Language Switcher here -->
    				<div class="language-select">
    					<a href="<?php echo strtok($_SERVER["REQUEST_URI"],'?'); ?>?lang=en" class="language">
    						<!-- <i class="flag en"></i> -->
    						<span class="language-name">English</span>
    					</a>
    					<a href="<?php echo strtok($_SERVER["REQUEST_URI"],'?'); ?>?lang=es" class="language">
    						<!-- <i class="flag es"></i> -->
    						<span class="language-name">Español</span>
    					</a>
    				</div>

					<?php if ( has_nav_menu( 'social' ) ) : ?>
			            <nav id="social-navigation-header" class="social-navigation" role="navigation">
			                <?php
			                    // Social links navigation menu.
			                    wp_nav_menu( array(
			                        'theme_location' => 'social',
			                        'depth'          => 1,
			                        'link_before'    => '<span class="screen-reader-text">',
			                        'link_after'     => '</span>',
			                    ) );
			                ?>
			            </nav><!-- .social-navigation -->
			        <?php endif; ?>

                </header><!-- .site-header -->
            </div><!-- .site-content -->
        </div><!-- .headerblock -->
        <?php if(!get_theme_mod('maisha_search_top')) : ?>
        <div class="search-toggle">
          <a href="#search-container" class="screen-reader-text" aria-expanded="false" aria-controls="search-container"><?php esc_html_e( 'Search', 'maisha' ); ?></a>
        </div>
        <div id="search-container" class="search-box-wrapper hide">
          <div class="search-box">
              <?php get_search_form(); ?>
          </div>
        </div>
        <?php endif; ?>
    </div>
<?php endif; ?>
<div class="aboutpage">
	<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) { ?>
        <div class="cd-fixed-bg-one cd-bg-1" style="background-image:url(<?php echo esc_url( header_image() ); ?>);">
        <div class="entry-content">
		<?php
		if( is_home() && get_option('page_for_posts') ) {
			$blog_page_id = get_option('page_for_posts');
			echo '<h1>'.get_post(($blog_page_id))->post_title.'</h1>';
		}
		?>
		<hr class="short">
		</div>
		<span class="overlay"></span>
		</div>
    <?php } ?>
</div>
<div id="site">
