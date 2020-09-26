<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cunis
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope="itemscope" itemtype="https://schema.org/WebPage" dir="ltr">
	<?php cunis_body_open(); ?>
	<div id="page" class="grid grid-rows-layout site min-h-screen overflow-auto relative">
		<div>
			<a class="skip-link text-gray-600 border-none" href="#main"
				tabindex="0"><?php echo esc_html__( 'Skip to Content', 'cunis' ); ?></a>
		</div>
		<header id="header" class="items-center flex flex-col col-span-1 site-header" itemscope="itemscope"
			itemtype="https://schema.org/WPHeader">

			<div class="flex lg:flex-row justify-between container  padding w-full relative py-2">
				<div class="w-full lg:w-1/2 flex justify-center items-center lg:justify-start">
				
					<?php 
						if(get_theme_mod( 'custom_logo' )):
							echo get_custom_logo(); 	
						else:
							echo '<img src="https://via.placeholder.com/150x75.jpg?text=logo" />'; 
						endif;?>
					</div>
				<div class="w-1/2 hidden justify-end order-last lg:flex" itemscope
					itemtype="http://schema.org/LocalBusiness">
					<a href="tel:3052509917" class="flex items-center header-contact-num flex-shrink mt-0 pr-8">
						<svg class="inline-block text-primary-300" width="32" height="32" viewBox="0 0 24 24" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path
								d="M3 5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H8.28C8.48979 3.00016 8.69422 3.0663 8.86436 3.18905C9.03449 3.3118 9.1617 3.48496 9.228 3.684L10.726 8.177C10.8019 8.40534 10.7929 8.65339 10.7007 8.87564C10.6085 9.0979 10.4393 9.27945 10.224 9.387L7.967 10.517C9.07332 12.9655 11.0345 14.9267 13.483 16.033L14.613 13.776C14.7205 13.5607 14.9021 13.3915 15.1244 13.2993C15.3466 13.2071 15.5947 13.1981 15.823 13.274L20.316 14.772C20.5152 14.8383 20.6885 14.9657 20.8112 15.136C20.934 15.3064 21.0001 15.511 21 15.721V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H18C9.716 21 3 14.284 3 6V5Z"
								stroke="#204D8C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
						<span class="text-primary-300 text-24 font-bold"
							itemprop="telephone"><?php echo esc_html( __( '(305)250-9917', 'cunis' ) ); ?></span>
					</a>
					<ul class="flex items-center list-none mt-0 ml-0">
						<li class="pr-4">
							<a href="https://www.facebook.com/Miami-Medicaid-Law-213619918981385/timeline"
								class="text-primary-300 hover:text-gray-600" target="_BLANK">
								<span class="sr-only"><?php echo esc_html__( 'Facebook', 'cunis' ); ?></span>
								<svg width="30" height="30" viewBox="0 0 30 30" fill="none" class="fill-current"
									xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M11.3142 14.7055V28.4035C11.3142 28.5975 11.4708 28.7542 11.6648 28.7542H16.6705C16.8645 28.7542 17.0211 28.5975 17.0211 28.4035V14.7055H20.6502C20.832 14.7055 20.9846 14.5651 21 14.3833L21.349 10.2559C21.3661 10.0513 21.2046 9.876 20.9992 9.876H17.0211V6.94742C17.0211 6.26073 17.5779 5.70478 18.2638 5.70478H21.0609C21.2549 5.70478 21.4116 5.54727 21.4116 5.35328V1.2259C21.4116 1.03272 21.2549 0.875244 21.0609 0.875244H16.3345C13.5617 0.875244 11.3142 3.12278 11.3142 5.8963V9.876H8.81092C8.61774 9.876 8.45947 10.0327 8.45947 10.2267V14.354C8.45947 14.5472 8.61774 14.7055 8.81092 14.7055H11.3142Z" />
								</svg>
								<!-- Facebook -->
							</a>
						</li>
						<li class="pr-0">
							<a href="https://www.linkedin.com/in/ana-veliz-7ba8b02b"
								class="text-primary-300 hover:text-gray-600" target="_BLANK">
								<span
									class="sr-only text-gray-600"><?php echo esc_html__( 'Linkedin', 'cunis' ); ?></span>
								<svg width="30" height="30" viewBox="0 0 30 30" class="fill-current" fill="none"
									xmlns="http://www.w3.org/2000/svg">
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
						</li>
					</ul>
				</div>
			</div>
			<div class="bg-primary-300 w-full">
				<nav id="site-navigation" class="main-menu container order-2">
					<button id="menu-toggle" class="hamburger hamburger--collapse z-50 lg:hidden"
						aria-controls="primary-menu" aria-expanded="false" type="button" aria-label="Main Menu">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_id'        => 'primary-menu',
							'menu_class'     => 'main-menu__list',
							'container'      => false,
						)
					);
					?>
					<script>
						var supportsTouch = (typeof Touch == "object");
						if(supportsTouch){ 
							document.addEventListener("touchstart", function() {}, false);
						}
					</script>

					<a href="tel:3052509917" class="flex items-center header-contact-num flex-shrink lg:hidden">
						<span class="text-primary-100 text-24 font-bold"
							itemprop="telephone"><?php echo esc_html( __( '(305)250-9917', 'cunis' ) ); ?></span>
					</a>
					<ul class="flex items-center list-none m-0 lg:hidden">
						<li class="m-0">
							<a href="https://www.facebook.com/Miami-Medicaid-Law-213619918981385/timeline"
								target="_BLANK">
								<span class="sr-only"><?php echo esc_html__( 'Facebook', 'cunis' ); ?></span>
								<svg width="30" height="30" viewBox="0 0 30 30" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M11.3142 14.7055V28.4035C11.3142 28.5975 11.4708 28.7542 11.6648 28.7542H16.6705C16.8645 28.7542 17.0211 28.5975 17.0211 28.4035V14.7055H20.6502C20.832 14.7055 20.9846 14.5651 21 14.3833L21.349 10.2559C21.3661 10.0513 21.2046 9.876 20.9992 9.876H17.0211V6.94742C17.0211 6.26073 17.5779 5.70478 18.2638 5.70478H21.0609C21.2549 5.70478 21.4116 5.54727 21.4116 5.35328V1.2259C21.4116 1.03272 21.2549 0.875244 21.0609 0.875244H16.3345C13.5617 0.875244 11.3142 3.12278 11.3142 5.8963V9.876H8.81092C8.61774 9.876 8.45947 10.0327 8.45947 10.2267V14.354C8.45947 14.5472 8.61774 14.7055 8.81092 14.7055H11.3142Z"
										fill="#E9EEF5" />
								</svg>
								<!-- Facebook -->
							</a>
						</li>
						<li class="m-0">
							<a href="https://www.linkedin.com/in/ana-veliz-7ba8b02b" target="_BLANK">
								<span
									class="sr-only text-primary-100"><?php echo esc_html__( 'Linkedin', 'cunis' ); ?></span>
								<svg width="30" height="30" viewBox="0 0 30 30" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0)">
										<path
											d="M2.16094 27.0953H6.75426C6.97426 27.0953 7.15259 26.9169 7.15259 26.6977V11.2803C7.15259 11.0594 6.97426 10.8811 6.75426 10.8811H2.16094C1.94178 10.8811 1.76343 11.0594 1.76343 11.2803V26.6977C1.76343 26.9169 1.94178 27.0953 2.16094 27.0953ZM26.5892 17.7977V26.6977C26.5892 26.9169 26.4109 27.0953 26.1909 27.0953H21.5967C21.3767 27.0953 21.1984 26.9169 21.1984 26.6977V18.4203C21.1984 16.2428 20.4201 14.7552 18.4684 14.7552C16.9793 14.7552 16.0934 15.7561 15.7026 16.7261C15.5618 17.0727 15.5251 17.5536 15.5251 18.0394V26.6977C15.5251 26.9169 15.3467 27.0953 15.1259 27.0953H10.5326C10.3126 27.0953 10.1343 26.9178 10.1351 26.6969C10.1459 24.4928 10.1918 13.7978 10.1451 11.2844C10.1409 11.0619 10.3201 10.8811 10.5426 10.8811H15.1267C15.3467 10.8811 15.5251 11.0594 15.5251 11.2803V13.1794C15.5142 13.1969 15.4984 13.2152 15.4892 13.2319H15.5251V13.1794C16.2417 12.0769 17.5193 10.5011 20.3834 10.5011C23.9309 10.5011 26.5892 12.8177 26.5892 17.7977Z"
											fill="#E9EEF5" />
										<path
											d="M7.1833 5.93455C7.1833 7.52872 5.89079 8.82039 4.29746 8.82039C2.7033 8.82039 1.41162 7.52872 1.41162 5.93455C1.41162 4.34122 2.7033 3.04871 4.29746 3.04871C5.89079 3.04871 7.1833 4.34122 7.1833 5.93455Z"
											fill="#E9EEF5" />
									</g>
									<defs>
										<clipPath id="clip0">
											<rect width="30" height="30" fill="white" />
										</clipPath>
									</defs>
								</svg>
								<!-- Linkedin -->
							</a>
						</li>
					</ul>
				</nav>
				<!-- #site-navigation -->
			</div>
		</header>
		<!-- #masthead -->
		<?php
			$cunis_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ), 'thumbnail' );
		?>
		<?php
		$cunis_title_option = get_post_meta( get_the_ID(), '_page_setting_title_metafield', true );
		if ( ! is_front_page() ) :
			if ( 'no-title' !== $cunis_title_option && ! is_404() ) :
				if ( 'title' === $cunis_title_option || 'title-breadcrumb' === $cunis_title_option ) :
					?>
		<div class="w-full flex flex-col py-4 items-center justify-center  bg-cover bg-no-repeat bg-fixed relative z-0"
			style="background-image:url(<?php echo esc_url( $cunis_url ); ?>);">
			<div class="h-full w-full absolute left-0 top-0 bg-primary-300 opacity-75 z-10"></div>
			<div class="container flex flex-col md:flex-row justify-between z-20">


				<h1 class="text-gray-100 my-0 text-36">
					<?php echo esc_html( get_the_title( get_the_ID() ) ); ?>
				</h1>


				<!-- Breadcrumbs -->
					<?php

					if ( ! empty( $cunis_title_option ) &&
					( 'title-breadcrumb' === $cunis_title_option ||
					'breadcrumb' === $cunis_title_option ) ) :
						if ( is_active_sidebar( 'breadcrumb' ) ) :
							?>
				<div class="flex flex-col">
							<?php dynamic_sidebar( 'breadcrumb' ); ?>
				</div>
							<?php
									endif;
						cunis_get_breadcrumb();
	endif;
					?>
			</div>
		</div>
					<?php
				endif;
			endif;
	endif;
		?>

		<!-- Main -->
		<div id="content" class="col-span-1 site-content">
