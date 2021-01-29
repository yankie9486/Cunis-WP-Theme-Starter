<?php
/**
 * The front page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cunis
 */

get_header();
?>

<!--- Start of banner -->
<div class="w-full bg-gray-400 h-90 lg:h-125 xl:h-175 bg-no-repeat bg-cover bg-bottom relative"
	style="background-image:url(<?php echo esc_url( get_home_url() . '' ); ?>);">
	<div class="w-full mx-auto flex flex-col h-full py-4 justify-end pb-8 items-center"></div>
</div>

<div class="w-full bg-gray-100 py-4">
	<div class="flex justify-around flex-col lg:flex-row container z-20 relative">

		<h2 class="text-primary-500 text-center mb-4 mr-4">
				<?php echo esc_html__( 'Call Us now', 'cunis' ); ?></h2>

		<div class="text-center flex justify-center items-center">
			<a class="button outline-dark max-w-auto button-md" href="<?php echo esc_url( get_home_url() . '/contact' ); ?>"><?php echo esc_html__( 'Schedule Your Consultation', 'cunis' ); ?></a>
		</div>
	</div>
</div>

<!--- End of banner -->

<!--- Start of front page main-->
<div class="bg-gray-900">
<div class="container">
	<main id="main">
		<article class="flex flex-col md:flex-row relative py-8 lg:py-24">
			<div class="w-full lg:w-5/12 flex justify-center items-center">
				<div class="p-4" itemscope itemtype="http://schema.org/Person">
					<img src="<?php echo esc_url( 'https://blog.cunisinc.com/wp-content/uploads/2019/08/Giancarlo-Cunis.jpg' ); ?>"
						alt="Placeholder" class="mb-1 border-4 rounded-4 rounded-full" itemprop="image" />
					<div class="flex justify-around items-center">
						<span itemprop="name"><?php echo esc_html__( 'Giancarlo Cunis', 'cunis' ); ?></span>
						<a href="https://www.linkedin.com/in/giancarlocunis"
							class="text-primary-500 hover:text-gray-600" itemprop="url" target="_BLANK">
							<span class="sr-only"><?php echo esc_html__( 'Linkedin', 'cunis' ); ?></span>
							<svg width="20" height="20" viewBox="0 0 30 30" fill="none"
								xmlns="http://www.w3.org/2000/svg" class="fill-current">
								<g clip-path="url(#clip0)">
									<path
										d="M2.16094 27.0953H6.75426C6.97426 27.0953 7.15259 26.9169 7.15259 26.6977V11.2803C7.15259 11.0594 6.97426 10.8811 6.75426 10.8811H2.16094C1.94178 10.8811 1.76343 11.0594 1.76343 11.2803V26.6977C1.76343 26.9169 1.94178 27.0953 2.16094 27.0953ZM26.5892 17.7977V26.6977C26.5892 26.9169 26.4109 27.0953 26.1909 27.0953H21.5967C21.3767 27.0953 21.1984 26.9169 21.1984 26.6977V18.4203C21.1984 16.2428 20.4201 14.7552 18.4684 14.7552C16.9793 14.7552 16.0934 15.7561 15.7026 16.7261C15.5618 17.0727 15.5251 17.5536 15.5251 18.0394V26.6977C15.5251 26.9169 15.3467 27.0953 15.1259 27.0953H10.5326C10.3126 27.0953 10.1343 26.9178 10.1351 26.6969C10.1459 24.4928 10.1918 13.7978 10.1451 11.2844C10.1409 11.0619 10.3201 10.8811 10.5426 10.8811H15.1267C15.3467 10.8811 15.5251 11.0594 15.5251 11.2803V13.1794C15.5142 13.1969 15.4984 13.2152 15.4892 13.2319H15.5251V13.1794C16.2417 12.0769 17.5193 10.5011 20.3834 10.5011C23.9309 10.5011 26.5892 12.8177 26.5892 17.7977Z" />
									<path
										d="M7.1833 5.93455C7.1833 7.52872 5.89079 8.82039 4.29746 8.82039C2.7033 8.82039 1.41162 7.52872 1.41162 5.93455C1.41162 4.34122 2.7033 3.04871 4.29746 3.04871C5.89079 3.04871 7.1833 4.34122 7.1833 5.93455Z" />
								</g>
								<defs>
									<clipPath id="clip0">
										<rect width="30" height="30" fill="white" />
									</clipPath>
								</defs>
							</svg>
							<!-- Linkedin -->
						</a>
					</div>
				</div>
			</div>
			<div class="w-full lg:w-7/12 flex flex-col justify-center items-center">
				<h2 class="mb-10 text-30 text-gray-300"><?php echo esc_html( 'Tailwind CSS Based WP Theme' ); ?></h2>
				<p class="text-gray-400"><?php echo esc_html( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus egestas accumsan condimentum. Donec malesuada dolor eu quam ornare accumsan. Praesent ut orci quis justo tempor pulvinar. Vivamus posuere neque vel auctor imperdiet. Integer dictum imperdiet mattis. Fusce facilisis cursus mi sed fermentum. Mauris justo justo, dictum sit amet cursus ut, fringilla a neque. Proin risus urna, rhoncus ut mauris sed, dignissim ultricies neque. Suspendisse est ligula, finibus at odio quis, gravida ullamcorper nisl. Phasellus quis sagittis odio, ut sollicitudin nunc.' ); ?>
				</p>

			</div>
		</article>
	</main>
</div>
</div>
<!--- End of front page main -->


<!--- Start of Testimonals -->
<div class="bg-cover bg-no-repeat bg-center"
	style="background-image:url(<?php echo esc_url( CUNIS_URL . '' ); ?>);">
	<div class="flex flex-col lg:container pt-8 pb-16">
		<div class="w-10/12 mr-auto ml-auto">
			<h2 class=" text-48 font-bold text-gray-700 text-center mb-16">
				<?php echo esc_html__( 'Our Testimony', 'cunis' ); ?></h2>
		</div>
		<div class="flex flex-col items-center md:flex-row relative">
			<!-- add slider -->
			<?php require_once CUNIS_DIR . '/template-parts/components/testimonial.php'; ?>
		</div>
	</div>
</div>
<!--- End of Testimonals -->

<?php
get_footer();
