<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <div class="site-inner">
            <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

            <header id="masthead" class="site-header" role="banner">
                <?php if ( get_header_image() ) : ?>
                    <?php
                    /**
                     * Filter the default twentysixteen custom header sizes attribute.
                     *
                     * @since Twenty Sixteen 1.0
                     *
                     * @param string $custom_header_sizes sizes attribute
                     * for Custom Header. Default '(max-width: 709px) 85vw,
                     * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
                     */
                    $custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
                    ?>
                    <div class="header-image">
                        <a href="<?php echo "http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI']; ?>" rel="home">
                            <img src="<?php header_image(); ?>">
                        </a>
                    </div><!-- .header-image -->
                <?php endif; // End header image check. ?>
                <div class="site-header-main">
                    <div class="site-branding">
                        <?php if ( is_front_page() && is_home() ) : ?>
                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php else : ?>
                        <?php endif;

                        $description = get_bloginfo( 'description', 'display' );
                        if ( $description || is_customize_preview() ) : ?>
                        <p class="site-description"><?php echo $description; ?></p>
                    <?php endif; ?>
                </div><!-- .site-branding -->

                <?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
                    <button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentysixteen' ); ?></button>

                    <div id="site-header-menu" class="site-header-menu">
                        <?php if ( has_nav_menu( 'primary' ) ) : ?>
                            <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
                                <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'primary',
                                    'menu_class'     => 'primary-menu',
                                    ) );
                                    ?>
                                </nav><!-- .main-navigation -->
                            <?php endif; ?>

                            <?php if ( has_nav_menu( 'social' ) ) : ?>
                                <nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
                                    <?php
                                    wp_nav_menu( array(
                                        'theme_location' => 'social',
                                        'menu_class'     => 'social-links-menu',
                                        'depth'          => 1,
                                        'link_before'    => '<span class="screen-reader-text">',
                                        'link_after'     => '</span>',
                                        ) );
                                        ?>
                                    </nav><!-- .social-navigation -->
                                <?php endif; ?>
                            </div><!-- .site-header-menu -->
                        <?php endif; ?>
                    </div><!-- .site-header-main -->
                    <div class="stl_login stl_logout">
                        <?php
                        if (is_user_logged_in()){
                            $home_url = home_url();
                            $ham_menu = "";
                            $ham_menu .="<div class='box-shadow-menu'></div><ul class='login-menu'>";
                            $ham_menu .="<li><a href='" .$home_url. "/change-password'>Settings</a></li>";
                            $ham_menu .="<li><a href='" .$home_url. "/about'>About</a></li>";
                            $ham_menu .="<li><a href='" .$home_url. "/about'>Support Us</a></li>";
                            $ham_menu .="<li><a href='" .$home_url. "/faqs'>FAQs</a></li>";
                            echo $ham_menu;
                            print('<li><a href="'); echo wp_logout_url(get_bloginfo('url')); print('" title="Logout">Logout</a>
                                </ul></div>');                               }
                                    else {
                                        print('<div><div class="login-trigger"><span>Login</span></div>');
                                        print('<div class="login-content">'); echo do_shortcode('[my-login-form]'); 
                                        print('</div></div>');
                                        print('<a href="');echo home_url(); print('/search"><img src="');echo home_url(); print('/wp-content/uploads/2016/04/search-home.png"></a>');
                                    }; ?>
                                </div>
                            </header><!-- .site-header -->
                            <div id="content" class="site-content">
