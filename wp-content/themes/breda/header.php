<?php
/**
 * The header for our theme
 *
 * @package Breda
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php the_title(); ?> - <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="header" class="header">
    <div class="barra_topo">
        <div class="caixa">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'categorias',
					'menu_id'        => 'menu-principal-topo',
					'menu' => 'Menu Principal',
					'container'      => false,
					'fallback_cb'    => false,
				)
			);
			?>
        </div>
    </div>
	<div class="barra_logo_topo">
		<div class="caixa">
			<div class="logo">
				<!-- <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo"> -->
				<?php the_custom_logo(); ?>
			</div>
			<div class="div_busca">
				<?php get_search_form(); ?>
			</div>
			<div class="div_login_carrinho_topo">
				<a href="#" class="">
					Login
				</a>
				<a href="#" class="">
					Carrinho
				</a>
			</div>
		</div>
	</div>
	<div class="div_menu_categorias">
		<div class="caixa">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'categorias',
					'menu_id'        => 'menu-menu-categorias',
					'menu' => 'Menu Categorias',
					'container'      => false,
					'fallback_cb'    => false,
				)
			);
			?>
		</div>
	</div>
	<div class="div_barra_desconto">
		<div class="caixa">
			5% de desconto na primeira compra.
		</div>
	</div>
</header>

