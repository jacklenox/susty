<?php
/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Susty
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'susty' ); ?></a>

	<header id="masthead">
		<div class="logo">
			<?php
			if ( has_custom_logo() ) :
				the_custom_logo();
			else :
				?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo file_get_contents( get_stylesheet_directory() . '/images/eco-chat.svg' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Home', 'susty' ); ?></span></a>
				<?php
			endif;
			?>
		</div>

		<?php
		if ( is_front_page() && is_home() && ! get_query_var( 'menu' ) ) :
			?>
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php
		else :
			?>
			<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
		endif;

		if ( has_nav_menu( 'menu-1' ) ) :

			if ( get_query_var( 'menu' ) ) :
				?>
				<a id="susty-back-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">&#x2716;<span class="screen-reader-text"><?php esc_html_e( 'Close menu', 'susty' ); ?></span></a>
				<script>
					var susty_home_url = '<?php echo esc_url( home_url( '/' ) ); ?>';
					if ( 0 === document.referrer.indexOf( susty_home_url ) ) {
						document.getElementById( 'susty-back-link' ).href = document.referrer;
					}
				</script>
				<?php
			else :
				?>
				<a href="<?php echo esc_url( ( get_option( 'permalink_structure' ) ? home_url( '/menu/' ) : home_url( '/?menu' ) ) ); ?>"><?php esc_html_e( 'Menu', 'susty' ); ?></a>
				<?php
			endif;
		
		endif;
		?>
	</header>

	<div id="content">
