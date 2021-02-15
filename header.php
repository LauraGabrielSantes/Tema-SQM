<?php

/**
 * Header file for the SQM WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage SQM
 * @since SQM 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="profile" href="https://gmpg.org/xfn/11">
<!-- Add this to <head> -->

<!-- Load required Bootstrap and BootstrapVue CSS -->
<link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap/dist/css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css" />

<!-- Load polyfills to support older browsers -->
<script src="//polyfill.io/v3/polyfill.min.js?features=es2015%2CIntersectionObserver" crossorigin="anonymous"></script>

<!-- Load Vue followed by BootstrapVue -->
<script src="//unpkg.com/vue@latest/dist/vue.min.js"></script>
<script src="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js"></script>

<!-- Load the following for BootstrapVueIcons support -->
<script src="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue-icons.min.js"></script>
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<?php
	
	wp_body_open();
	?>

	
	<div class="row pt-2 pl-3 m-0 mb-2   m-0 rounded mb-0 ">
			<div class="col-2  p-2 col-md-1 align-self-center m-0  py-2 "><a href="https://sqm.org.mx/"><img src="<?php echo wp_get_attachment_url( get_theme_mod('imagen1')); ?>"  alt="Fluid image" class="img-fluid w-100">  </a></div>
			<div class="col-5 col-md-3  align-self-center px-4 border-right border-gray "><a href="https://espinshop.sqm.org.mx/"><img src="<?= wp_get_attachment_url(get_theme_mod('imagen2')); ?>"  alt="Fluid image" class="img-fluid w-100"></a></div>
			<div class=" col-5 col-md-3 align-self-center px-4 border-right border-gray"><a href="https://www.jmcs.org.mx/"><img src="<?= wp_get_attachment_url(get_theme_mod('imagen3')); ?>"  alt="Fluid image" class="img-fluid w-100"></a></div>
			<div class=" offset-md-0 offset-2 col-5 col-md-3  align-self-center px-4 border-right border-gray "><a href="http://www.bsqm.org.mx/"><img src="<?= wp_get_attachment_url(get_theme_mod('imagen4')); ?>"  alt="Fluid image" class="img-fluid w-100"></a></div>
			<div class=" px-3  col-5 col-md-2  align-self-center">
				<div>
					<div class="text-black">
						<div><b>Correo</b></div>
						soquimex@sqm.org.mx
					</div>
				</div>
			</div>
		</div>

	<header id="site-header" class="header-footer-group" role="banner">

		<div class="header-inner section-inner">

			<div class="header-titles-wrapper">

				<?php

				// Check whether the header search is activated in the customizer.
				$enable_header_search = get_theme_mod('enable_header_search', true);

				if (true === $enable_header_search) {
				?>

					<button class="toggle search-toggle mobile-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
						<span class="toggle-inner">
							<span class="toggle-icon">
								<?php SQM_the_theme_svg('search'); ?>
							</span>
							<span class="toggle-text"><?php _ex('Search', 'toggle text', 'SQM'); ?></span>
						</span>
					</button><!-- .search-toggle -->

				<?php } ?>
<?php /*
				<div class="header-titles">

					<?php
					// Site title or logo.
					SQM_site_logo();

					// Site description.
					SQM_site_description();
					?>

				</div><!-- .header-titles -->
				*/
?>
				<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
					<span class="toggle-inner">
						<span class="toggle-icon">
							<?php SQM_the_theme_svg('ellipsis'); ?>
						</span>
						<span class="toggle-text"><?php _e('Menu', 'SQM'); ?></span>
					</span>
				</button><!-- .nav-toggle -->

			</div><!-- .header-titles-wrapper -->

			<div class="header-navigation-wrapper">

				<?php
				if (has_nav_menu('primary') || !has_nav_menu('expanded')) {
				?>

					<nav class="primary-menu-wrapper" aria-label="<?php echo esc_attr_x('Horizontal', 'menu', 'SQM'); ?>" role="navigation">

						<ul class="primary-menu reset-list-style">

							<?php
							if (has_nav_menu('primary')) {

								wp_nav_menu(
									array(
										'container'  => '',
										'items_wrap' => '%3$s',
										'theme_location' => 'primary',
									)
								);
							} elseif (!has_nav_menu('expanded')) {

								wp_list_pages(
									array(
										'match_menu_classes' => true,
										'show_sub_menu_icons' => true,
										'title_li' => false,
										'walker'   => new TwentyTwenty_Walker_Page(),
									)
								);
							}
							?>

						</ul>

					</nav><!-- .primary-menu-wrapper -->

				<?php
				}

				if (true === $enable_header_search || has_nav_menu('expanded')) {
				?>

					<div class="header-toggles hide-no-js">

						<?php
						if (has_nav_menu('expanded')) {
						?>

							<div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">

								<button class="toggle nav-toggle desktop-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
									<span class="toggle-inner">
										<span class="toggle-text"><?php _e('Menu', 'SQM'); ?></span>
										<span class="toggle-icon">
											<?php SQM_the_theme_svg('ellipsis'); ?>
										</span>
									</span>
								</button><!-- .nav-toggle -->

							</div><!-- .nav-toggle-wrapper -->

						<?php
						}

						if (true === $enable_header_search) {
						?>

							<div class="toggle-wrapper search-toggle-wrapper">

								<button class="toggle search-toggle desktop-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
									<span class="toggle-inner">
										<?php SQM_the_theme_svg('search'); ?>
										<span class="toggle-text"><?php _ex('Search', 'toggle text', 'SQM'); ?></span>
									</span>
								</button><!-- .search-toggle -->

							</div>

						<?php
						}
						?>

					</div><!-- .header-toggles -->
				<?php
				}
				?>

			</div><!-- .header-navigation-wrapper -->

		</div><!-- .header-inner -->

		<?php
		// Output the search modal (if it is activated in the customizer).
		if (true === $enable_header_search) {
			get_template_part('template-parts/modal-search');
		}
		?>

	</header><!-- #site-header -->

	<?php
	// Output the menu modal.
	get_template_part('template-parts/modal-menu');
