<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" 
					class="site-header <?php 
					if(is_front_page()){ 
						echo 'a';
					};
					if( is_page_template('page-about.php')){
						echo 'a';
					};
					if( is_archive('archive-product.php')){
						echo 'green-header';
					};

					if( is_home()){
						echo 'green-header';
					};

					if( is_page('find-us')){
						echo 'green-header';
					};

					if( is_single('')){
						echo 'green-header';
					};

					?>" 
					role="banner">
			<div class="site-branding-container">
				<?php
					$logoClass = '';
					
					if(is_front_page()){ 
						$logoClass = 'logo';
					};

					if( is_page_template('page-about.php')){
						$logoClass = 'logo';
					};

					if( is_archive('archive-product.php')){
						$logoClass = 'logo-green';
					};

					if( is_home()){
						$logoClass = 'logo-green';
					};

					if( is_page('find-us')){
						$logoClass = 'logo-green';
					};

					if( is_single('')){
						$logoClass = 'logo-green';
					};
				?>
				<div class="site-branding <?php echo $logoClass; ?>">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-tent.svg'; ?>" class="logo-green-img" alt="inhabitent logo tent green " />
						<img src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-tent-white.svg'; ?>" class="logo-img" alt="inhabitent logo tent" />
					</a>

					
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				
				</nav><!-- #site-navigation -->
			</div>
			</header><!-- #masthead -->
			<div class="page-container">
			<div id="content" class="site-content">


			<!-- <div id="sidebar" 
			class="<?php if (is_page('find-us')) : ?>logo<?php else : ?>logo-green<?php endif; ?>"> -->