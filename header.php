<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<title><?=bloginfo('name')?></title>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?=wp_head()?>

</head>


<body <?=body_class()?>>

<!-- Telephone / Social Medias -->
<div id="contact-info">
<div class="container">
	<div class="row justify-content-between pl-2 pr-2 pl-lg-0 pr-lg-0">
		<div class="">
			<i class="fas fa-phone-alt mr-1"></i>
			<?=get_theme_mod('text_header_telephone', '(XX) XXXX.XXXX')?>
		</div>

		<div class="">
			<?=wp_nav_menu(array('theme_location' => 'social-links'))?>
		</div>
	</div>
</div>
</div>

<!-- MAIN MENU -->
<div class="container">
	<div id="header-menu" class="row justify-content-center justify-content-lg-between">
		<div class="">
			<a href="#">
				<img src="<?= get_template_directory_uri() . '/assets/images/logo.png' ?>" />
			</a>
		</div>

		<div class="align-self-center">
			<?=wp_nav_menu(array('theme_location' => 'header-menu'))?>

			<a href="#" class="icon-search">
				<i class="fas fa-search menu-primary-search-icon d-none d-lg-inline-block"></i>
			</a>
		</div>
	</div>
</div>