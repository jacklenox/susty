<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Susty
 */

get_header();
?>

	<div id="primary">
		<main id="main">

			<section>
				<header>
					<h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'susty' ); ?></h1>
				</header><!-- .page-header -->

				<div>
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'susty' ); ?></p>

					<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'susty' ); ?></h2>
						<ul>
							<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
							?>
						</ul>
					</div><!-- .widget -->

					<?php
					/* translators: %1$s: smiley */
					$susty_wp_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'susty' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$susty_wp_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
