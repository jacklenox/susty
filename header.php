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
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo file_get_contents( get_stylesheet_directory() . '/images/eco-chat.svg' ); ?></a>
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
			<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'hame' ); ?></a></p>
			<?php
		endif;

		if ( get_query_var( 'menu' ) ) :
			if ( 0 === strpos( filter_input( INPUT_SERVER, 'HTTP_REFERER', FILTER_SANITIZE_URL ), home_url() ) ) {
				$prev_url = filter_input( INPUT_SERVER, 'HTTP_REFERER', FILTER_SANITIZE_URL );
			} else {
				$prev_url = home_url( '/' );
			}
			?>
			<a href="<?php echo esc_url( $prev_url ); ?>" rel="home"><?php echo file_get_contents( get_stylesheet_directory() . '/images/noun_1746502.svg' ); ?></a>
			<?php
		else :
			?>
			<a href="<?php echo esc_url( ( get_option( 'permalink_structure' ) ? home_url( '/menu/' ) : home_url( '/?menu' ) ) ); ?>">Menu</a>
			<?php
		endif;
		?>
	</header>

	<div id="content">
