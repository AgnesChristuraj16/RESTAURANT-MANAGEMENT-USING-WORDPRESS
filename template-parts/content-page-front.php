<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dojo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<div class="section-content">
			<div class="front-content text float-l">
				<h2 class="section-subtitle">
					<?php
						$section1_subtitle = get_field('section_1_subtitle');
						echo $section1_subtitle;
					?>
				</h2>
				<h1 class="section-title">
					<?php
						$section1_title = get_field('section_1_title');
						echo $section1_title;
					?>
				</h1>
				<img class="stars-front" src="wp-content/themes/dojo/assets/stars.png">
				<p class="section-text">
					<?php
						$section1_text = get_field('section_1_text');
						echo $section1_text;
					?>
				</p>
				<a class="button button-secondary" href="#">
					<?php $front_button = get_field( 'button' );
						if ($front_button) {
							echo $front_button;
						}
					?>
				</a>
			</div>
			<div class="front-content float-r">
				<img src="wp-content/themes/dojo/assets/pizza.png" class="float-r" width="468">
			</div>
		</div>

		<div class="clearfix"></div>



		<div class="section-divider full" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url( <?php echo the_field('section_1_divider_bg_img'); ?>); background-size: cover">
			<div class="section-divider-text">
				<div class="section-divider-subtitle">
					<?php $section_subtitle = get_field( 'section_1_divider_subtitle' );
						if ($section_subtitle) {
							echo $section_subtitle;
						}
						else {
							echo "Welcome";
						}
					?>
				</div>
				<div class="section-divider-title">
					<?php $section_title = get_field( 'section_1_divider_title' );
						if ($section_title) {
							echo $section_title;
						}
						else {
							echo bloginfo( 'name' );
						}
					?>
				</div>
				<img src="wp-content/themes/dojo/assets/stars.png" class="stars-front">
			</div>
		</div>



		<div class="section-content">
			<div class="front-content float-l">
				<img src="wp-content/themes/dojo/assets/table.jpg" class="float-l" height="360" style="background-size: cover">
			</div>
			<div class="front-content text float-r">
				<h2 class="section-subtitle">
					<?php
						$section2_subtitle = get_field('section_2_subtitle');
						echo $section2_subtitle;
					?>
				</h2>
				<h1 class="section-title">
					<?php
						$section2_title = get_field('section_2_title');
						echo $section2_title;
					?>
				</h1>
				<img class="stars-front" src="wp-content/themes/dojo/assets/stars.png">
				<p class="section-text">
					<?php
						$section2_text = get_field('section_2_text');
						echo $section2_text;
					?>
				</p>
				<a class="button button-secondary" href="#">
					<?php $front_button = get_field( 'button' );
						if ($front_button) {
							echo $front_button;
						}
					?>
				</a>
			</div>
		</div>

		<div class="clearfix"></div>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dojo' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'dojo' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>

</article><!-- #post-## -->
