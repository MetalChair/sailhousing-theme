<?php
/**
 * Header for the sail housing solutions website
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Roboto&display=swap" rel="stylesheet"> 
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div class = "nav-container">
		<div class = "brand-container">
			<?php 
				if(has_custom_logo()):
					the_custom_logo();
					echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
				else:
					echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
				endif;
			?>
		</div>
		<?php wp_nav_menu(array(
			'container_class' => 'nav-text',
			'items_wrap' => '%3$s'
		));?>
	</div>

