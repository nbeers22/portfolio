<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package TA Portfolio
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="google-site-verification" content="nD3b-DE_9i1cUed3gbevnLOldYZJkEqxL0rcLqDNd6o" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php $fav = ta_option( 'custom_favicon', false, 'url' ); ?>
<?php if ( $fav !== '' ) { ?>
<link rel="icon" type="image/png" href="<?php echo ta_option( 'custom_favicon', false, 'url' ); ?>" />
<?php } ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64782477-1', 'auto');
  ga('send', 'pageview');

</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="sr-only" href="#content"><?php _e( 'Skip to content', 'ta-portfolio' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
	<nav role="navigation">
		<div class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
				<div class="navbar-header page-scroll">
					<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/NB_logo.png" alt="logo"></a>
					<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'secondary' ) ) { ?>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<?php } ?>

					<?php $logo = ta_option( 'custom_logo', false, 'url' ); ?>

					<?php if( $logo !== '' ) { ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr( bloginfo( 'name' ) ); ?>" rel="homepage"><img class="header-logo" src="<?php echo $logo ?>" alt="<?php bloginfo( 'name' ) ?>"></a>
					<?php } else { ?>
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr( bloginfo( 'name' ) ); ?>" rel="homepage"><?php bloginfo( 'name' ) ?></a>
					<?php } ?>
				</div>

				<!-- Main navigation -->
				<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'secondary' ) ) { ?>
				<div class="navbar-collapse collapse navbar-responsive-collapse">
					<?php if ( is_front_page() ) {
						$args = array(
							'theme_location' => 'primary',
							'depth'          => 2,
							'container'      => false,
							'menu_class'     => 'nav navbar-nav navbar-right',
							'walker'         => new wp_bootstrap_navwalker()
						);

						if ( has_nav_menu( 'primary' ) ) {
							wp_nav_menu( $args );
						}
					} else {
						$args = array(
							'theme_location' => 'secondary',
							'depth'          => 2,
							'container'      => false,
							'menu_class'     => 'nav navbar-nav navbar-right',
							'walker'         => new wp_bootstrap_navwalker()
						);

						if ( has_nav_menu( 'secondary' ) ) {
							wp_nav_menu( $args );
						}
					} ?>
				</div>
				<?php } ?>
				<!-- End main navigation -->
			</div>
		</div>           
	</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">