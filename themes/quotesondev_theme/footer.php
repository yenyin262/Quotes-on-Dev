<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>

			</div><!-- #content --><i class="fas fa-quote-right fa-7x  quoteRight"></i>
</div> 
			<footer id="colophon" class="site-footer" role="contentinfo">
		
				 <div class="site-info">
				 <nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
				</div>

				<p class ="redAcademyWebsite"> Brought to you by<a href="https://redacademy.com">  RED Academy</a></p>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
