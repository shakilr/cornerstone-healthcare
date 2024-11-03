<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cornerstone-healthcare
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'cornerstone-healthcare'); ?></a>

	<?php
	 $logo_markup = '<img src="' .get_template_directory_uri()  . '/assets/img/Cornerstone-Healthcare-Group-Logo.png' . '/>';

	 if ( $logo_id = get_field('group_header', 'option')['logo'] ) {
		$logo_markup = wp_get_attachment_image($logo_id, 'full');
	 }
	?>
	<header>
		<div class="navigation">
			<nav class="navbar navbar-expand-lg navbar-light bg-white js-header">
				<a class="navbar-brand font-weight-bolder mr-3" href="<?php site_url(); ?>">
					<?php echo $logo_markup; ?>
				</a>
				<button class="navbar-light navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-default" aria-controls="navbars-default" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<?php echo wp_nav_menu(array(
					'theme_location'  => 'primary',
					'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
					'container'       => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'navbars-default',
					'menu_class'      => 'navbar-nav mr-auto',
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					'walker'          => new WP_Bootstrap_Navwalker(),
				)); ?>
			</nav>

		</div>
	</header>


	<main role="main">