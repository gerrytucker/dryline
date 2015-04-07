<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<title><?php wp_title('|', true, 'right'); ?></title>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="apple-mobile-web-app-title" content="<?php echo get_bloginfo('name'); ?>">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
