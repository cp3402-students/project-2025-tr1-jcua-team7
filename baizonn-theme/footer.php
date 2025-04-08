<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package baizonn-theme
 */

?>

	</div><footer id="colophon" class="site-footer">

		<div class="site-info">

			<div class="footer-logo">
				<p>
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/Centre Logo 1.jpg' ); ?>" alt="Baizonn Learning Centre Logo" style="max-width: 150px; height: auto;">
				</p>
			</div>

			<div class="footer-navigation">
				<?php
				if ( has_nav_menu( 'footer' ) ) {
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_id'        => 'footer-menu',
							'menu_class'     => 'footer-navigation-list',
						)
					);
				}
				?>
			</div>

			<div class="copyright">
				&copy; <?php echo date( 'Y' ); ?> Baizonn Learning Centre. All rights reserved.
			</div>

		</div></footer></div><?php wp_footer(); ?>

</body>
</html>