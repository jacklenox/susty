<?php
get_header();
?>

		<nav id="site-navigation" class="main-navigation">
			<h1>Menu</h1>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->

<?php
get_footer();
