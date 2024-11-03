<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cornerstone-healthcare
 */

$group_footer = get_field('group_footer', 'option');
$group_general_info = get_field('group_general_info', 'option');



$copyright_message = '&copy; Corerstone Healthcare Group. All rights reserved.';


if ($message = $group_general_info['copyright_message']) {
	$copyright_message = str_replace('[year]', date("Y"), $message);
}
?>

<footer class="footer pt-5 pb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="footer-column-1">
					<?php
					if ($logo_id = $group_footer['logo']) {
						echo '<div class="footer--logo">';
						echo '<a href="' . get_site_url() . '">';
						echo wp_get_attachment_image($logo_id, 'full');
						echo '</a>';
						echo '</div>';
					}

					if ($description = $group_footer['description']) {
						echo "<p>{$description}</p>";
					}
					?>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-6 col-md-6">
						<div class="footer-menu">
							<?php echo wp_nav_menu(array(
								'theme_location'  => 'footer_1',
								'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
								'container'       => 'ul',
							)); ?>
						</div>
					</div>
					<div class="col-6 col-md-6">
						<div class="footer-menu">
							<?php echo wp_nav_menu(array(
								'theme_location'  => 'footer_2',
								'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
								'container'       => 'ul',
							)); ?>
							<?php echo wp_nav_menu(array(
								'theme_location'  => 'footer_3',
								'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
								'container'       => 'ul',
								'menu_class' => 'other-links'
							)); ?>
							<!-- <ul class="other-links">
								<li><a href="#">Specialty Hospitals </a></li>
								<li><a href="#">Senior Living </a></li>
								<li><a href="#">Behavioral Health</a></li>
							</ul> -->
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="footer-column">
					<?php if ($group_footer['social_links']) : ?>

						<div class="footer--social-links">
							<ul>
								<?php
								foreach ($group_footer['social_links'] as $network) {

									$icon_class = '';

									switch ($network['network']) {
										case 'facebook';
											$icon_class = 'fa-facebook-f';
											break;
										case 'twitter';
											$icon_class = 'fa-twitter';
											break;
										case 'linkedin';
											$icon_class = 'fa-linkedin-in';
											break;
									}

									echo '<li><a href="' . $network['url']  . '" class="' . $network['network'] . '"><i class="fab ' . $icon_class . '"></i> </a></li>';
								}
								?>
							</ul>
						</div>

					<?php endif; ?>

					<?php
					if ($address = $group_general_info['address']) {
						echo '<div class="footer--contact-details">';
						echo	$address;
						echo '</div>';
					}
					?>
				</div>
			</div>
		</div>
	</div>
</footer>
<div class="copyright-bar">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6"><?php echo $copyright_message; ?></div>
			<div class="col-12 col-md-6 text-md-right">
				<div class="disclaimer-menu">
					<?php echo wp_nav_menu(array(
						'theme_location'  => 'disclaimer_menu',
						'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
						'container'       => 'ul',
					)); ?>

				</div>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>

</html>