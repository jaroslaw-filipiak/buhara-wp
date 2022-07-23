<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jfilipiak
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div data-scroll-container id="page" class="site">

        <section class="buhara-header">
            <div class="container-fluid">
                <div class="container">
                    <div data-scroll data-scroll-speed="1" class="row ">
                        <div class="col bl-dark d-flex justify-content-center">
                            <img class="buhara-header--logo"
                                src="<?php echo get_theme_file_uri() ?>/public/img/logo.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section data-scroll data-scroll-speed="1" class="buhara-info-box">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-3 bl-dark ps-4">
                            <h5>BUHARA SEAFOOD</h5>
                            <p>Fisch Groß- und Einzelhandel GmbH <br>
                                Telefon: 06074 91 40 56</p>

                        </div>
                        <div class="col-12 col-lg-3 bl-dark ps-4">
                            <h5>ÖFFNUNGSZEITEN</h5>
                            <p>Montag ist ruhetag<br>
                                Dienstag - Freitag 08:00 BIS 18:00<br>
                                Samstag 08:00 bis 16:00<br>
                            </p>
                        </div>
                        <div class="col-12 col-lg-6 d-flex align-items-center justify-content-lg-end">
                            <button href="tel:06074914056" class="button button-default">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                                    <g clip-path="url(#clip0_36_166)">
                                        <path
                                            d="M13.85 10.6171C13.3288 9.63191 11.5191 8.56365 11.4394 8.51694C11.2069 8.38457 10.9642 8.3145 10.7371 8.3145C10.3994 8.3145 10.123 8.46918 9.95562 8.75052C9.69089 9.06716 9.36258 9.43726 9.2829 9.49462C8.66623 9.91299 8.18349 9.8655 7.64936 9.33137L4.66831 6.35006C4.13756 5.8193 4.08876 5.33059 4.50428 4.7173C4.56242 4.6371 4.93252 4.30853 5.24916 4.04354C5.45108 3.92337 5.58967 3.74481 5.6504 3.52576C5.73112 3.2343 5.67168 2.89145 5.48118 2.55743C5.43628 2.4806 4.36751 0.670585 3.38282 0.149692C3.19907 0.0523651 2.99195 0.000976562 2.78432 0.000976562C2.44225 0.000976562 2.12043 0.134379 1.87854 0.376009L1.21983 1.03446C0.178043 2.07598 -0.199066 3.25662 0.0983649 4.54341C0.346483 5.61582 1.06956 6.75701 2.24786 7.93505L6.06437 11.7516C7.55567 13.2429 8.97742 13.9992 10.2902 13.9992C10.2902 13.9992 10.2902 13.9992 10.2904 13.9992C11.2559 13.9992 12.156 13.5888 12.965 12.7799L13.6234 12.1214C14.0236 11.7215 14.1145 11.1167 13.85 10.6171Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_36_166">
                                            <rect width="14" height="14" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                                <div>Telefon: 06074 91 40 56</div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu"
                aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'jfilipiak' ); ?></button>
            <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
        </nav><!-- #site-navigation -->