<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cunis
 */

?>

</div><!-- #content -->
<div class="w-full bg-primary-300 pt-16 pb-16 flex justify-center items-center">
	<div class="container flex flex-col lg:flex-row">
		<div class="w-full lg:w-8/12 flex justify-center items-center">
			<h2 class="text-primary-100 text-30 text-center lg:text-left">
				<?php echo esc_html__( 'We Listen, We Customize and We Explain', 'cunis' ); ?></h2>
		</div>
		<div class="w-full lg:w-4/12 text-center flex justify-center items-center">
			<a class="button outline-light button-lg"
				href="<?php echo esc_url( get_home_url() . '/contact-us' ); ?>"><?php echo esc_html__( 'Schedule Your Consultation', 'cunis' ); ?></a>
		</div>
	</div>
</div>

<footer id="colophon"
	class="flex flex-col md:flex-col justify-between col-span-1 w-full text-12 site-footer pt-16 lg:pt-16"
	itemscope="itemscope" itemtype="https://schema.org/WPFooter">
	<div class="container flex flex-col items-stretch md:flex-row pt-4">
		<div class="w-full lg:w-3/12 mb-4 lg:mb-0">
			<?php dynamic_sidebar( 'footer_1' ); ?>
		</div>
		<div class="w-full lg:w-2/12 mb-4 lg:mb-0">
			<?php dynamic_sidebar( 'footer_2' ); ?>
		</div>
		<div class="w-full lg:w-2/12 mb-4 lg:mb-0">
			<?php dynamic_sidebar( 'footer_3' ); ?>
		</div>
		<div class="w-full lg:w-4/12 pl-0 lg:pl-8 mb-4 lg:mb-0">
			<?php dynamic_sidebar( 'footer_4' ); ?>
		</div>
	</div>
	<div class="container text-center pb-4 pt-8 site-info text-gray-600 text-11">


		<div class="flex flex-col w-full py-2 md:flex-row">
			<div class="mb-2 md:mb-0 flex justify-center items-center md:w-6/12 text-center">
				<?php
					/* translators:*/
					printf( esc_html__( 'Copyright %1$s &copy; All rights reserved. %2$s.', 'cunis' ), esc_html( gmdate( 'Y' ) ), esc_html__( 'Ana M. Veliz P.A', 'cunis' ) );
				?>
			</div>
			<div class="w-full md:w-6/12 flex justify-center items-center">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'menu_class'     => 'footer-menu capitalize',
						'container'      => false,
					)
				);
				?>

			</div>
		</div>

	</div><!-- .site-info -->
</footer><!-- #colophon -->
<button class="to-top">
	<span class="sr-only">Scroll to Top</span>
	<svg width="20" height="20" viewBox="0 0 43 42" class="fill-current transform rotate-90" fill="none"
		xmlns="http://www.w3.org/2000/svg">
		<path d="M26.75 33.25L14.5 21L26.75 8.75" stroke="#404040" stroke-width="2" stroke-linecap="round"
			stroke-linejoin="round" />
	</svg>
</button>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
