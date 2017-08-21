<?php
/**
 * The Header template for IAMSocial
 *
 * Displays all of the <head> section and everything up till <section>
 *
 * @package WordPress
 * @subpackage IAMSocial 1.1.1
 * @since IAMSocial 1.0.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<nav id="top-menu" class="navbar navbar-default">
		<header id="header">
			<div class="col-sm-12">
			<?php if ( get_header_image() ) { ?>
				<div class="sitelogo">
					<a href="<?php echo esc_url( home_url() ); ?>">
						<img src="<?php header_image(); ?>" height="<?php esc_attr( get_custom_header()->height,'iamsocial' ); ?>" width="<?php esc_attr( get_custom_header()->width, 'iamsocial' ); ?>" alt="<?php esc_attr_e( 'Logo', 'iamsocial' ); ?>" class="img-responsive"  id='logo' />
					</a>
				</div>
			<?php } ?>
				<div class="sitetitle">
					<h1><a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
					<h2><a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'description' ); ?></a></h2>
				</div>
			</div>
		</header>
		<div class="container">
			<div class="row">
				<div class="col-sm-8 visible-sm-inline-block visible-md-inline-block visible-lg-inline-block ">
					<?php get_sidebar( 'top-bar-left' ); ?>
				</div>
				<div class="col-sm-8 visible-sm-inline-block visible-md-inline-block visible-lg-inline-block ">
					<?php get_sidebar( 'top-bar-right' ); ?>
				</div>



			</div>
		</div>
	</nav>



	<nav id="main-menu" class="navbar navbar-default" role="navigation">
		<div class="row">
			<div class="col-md-12">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu-list">
					<span class="sr-only"><?php _e('Toggle navigation','iamsocial'); ?></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<?php
					wp_nav_menu( array(
						'theme_location'    => 'primary',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'main-menu-list',
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker())
					);
				?>
			</div>
		</div>
	</nav>
<?php if(is_front_page()){?>
                <section id="slider">
                        <?php get_template_part( 'part' , 'slider' ); ?>
                </section>
<?php } ?>
	<div class="container" role="main"> <!-- this will close in footer.php -->



