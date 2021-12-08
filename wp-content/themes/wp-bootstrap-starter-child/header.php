<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	<header class="site-header navbar-static-top" role="banner">
        <div class="container">
            <nav class="navbar navbar-expand-xl p-0">
                <div class="navbar-brand">
                    <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img src="<?php echo esc_attr(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
                    <?php else : ?>
                        <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                    <?php endif; ?>

                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="11.4545" height="11.4545" rx="1" fill="#5E5E5E"/>
                        <rect y="15.5461" width="11.4545" height="11.4545" rx="1" fill="#5E5E5E"/>
                        <rect x="15.5454" width="11.4545" height="11.4545" rx="1" fill="#5E5E5E"/>
                        <rect x="15.5454" y="15.5461" width="11.4545" height="11.4545" rx="1" fill="#5E5E5E"/>
                    </svg>
                </button>
                
                <div class="gf-site-header-menu menu-close">
                    <div class="gf-site-header-menu__inner">
                        <div class="gf-site-menu-close-icon d-block d-xl-none">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.83545 2L26 26.1646" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M26 2L1.83545 26.1646" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h2 class="gf-site-menu-title d-block d-xl-none">Grey Films India Pvt. Ltd.</h2>

                        <?php
                        wp_nav_menu(array(
                        'theme_location'    => 'primary',
                        'container'       => 'div',
                        'container_id'    => 'main-nav',
                        'container_class' => 'collapse navbar-collapse justify-content-end',
                        'menu_id'         => false,
                        'menu_class'      => 'navbar-nav',
                        'depth'           => 3,
                        'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                        'walker'          => new wp_bootstrap_navwalker()
                        ));
                        ?>
                    </div>
                    <div class="gf-mob-menu">
                        <a href="/subbiah-nallamuthu-portfolio" class="btn btn-dark d-none d-xl-block">Subbiah Nallamuthu</a>
                        <div class="gf-nall-header-content d-block d-xl-none">
                            <div class="gf-nall-header-heading">
                                <img src="http://greyfilm.notionprojects.tech/wp-content/uploads/2021/11/subbiah-nallamuthu-img.png" alt="" class="imag-fluid">
                                <h2 class="gf-nall-header-title">Subbiah <br/>Nallamuthu</h2>
                            </div>
                            <p class="gf-nall-header-description">Cinematographer, Producer & Director</p>
                            <a href="#" class="btn btn-danger gf-nall-header-btn">+ Know More</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
	</header><!-- #masthead -->
	<div id="content" class="site-content">
        <?php endif; ?>