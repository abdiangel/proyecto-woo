<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Proyecto
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

				<header id="masthead" class="site-header">
					<div class="site-branding">
					<header class="header">
				<div class="header__bluebar">
				<div class="header__bluebarWrapper">
					<span class="header__bluebar-el">Venta telefónica (+571) 560 4567</span>
					<span class="header__bluebar-el">Preguntas frecuentes</span>
					<span class="header__bluebar-el"><img src="<?php echo get_template_directory_uri(); ?>/assets/HEADER/HEADER-14.png" alt=""></span>
				</div>
				</div>
				<div class="header__main">
				<div class="header__logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/HEADER/HEADER-06.png" alt="">
				</div>
				<div class="header__products">
					<div class="header__productsBtn">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/HEADER/productsBtnplaceholder.png" alt="Botón de productos">
					</div>
					<div class="header__searchBar">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/HEADER/searchbarplaceholder.png" alt="">
					</div>
				</div>
				<div class="header__details">
					<div class="header__detailsUser">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/HEADER/HEADER-09.png" alt="">
					<div class="header__detailsUserSignIn">
						<span>Inicia sesión</span>
						<span>Mi cuenta</span>
					</div>
					</div>
					<div class="header__detailsUpload">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/HEADER/HEADER-11.png" alt="Subir archivos">
					<span>Sube tus archivos</span>
					</div>
					<div class="header__detailsHelp">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/HEADER/HEADER-12.png" alt="Soporte">
					<span>Ayuda</span>
					</div>
					<div class="header__detailsShoppingCart">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/HEADER/HEADER-13.png" alt="Carrito de compras">
					<span>Compras</span>
					</div>
				</div>
				</div>
				<div class="header__delivery">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/HEADER/HEADER-17.png" alt="Entregas express">
				</div>
			</header>

		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
		nav
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'proyecto' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?> -->
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
