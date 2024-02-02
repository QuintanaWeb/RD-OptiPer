<?php

/**
 * Plugin Name:       RD-OptiPer
 * Update URI:        https://github.com/QuintanaWeb/RD-OptiPer
 * Plugin URI:        https://quintanaweb.com/plugin/
 * Description:       Este plugin, claramente sobrevalorado, no solo optimiza tu WordPress hasta hacerlo volar (casi literalmente), sino que también lo embellece hasta dejarlo irreconocible. ¿Mejorar rendimiento y estética al mismo tiempo? Exagerado, pero hey, aquí lo tienes. Úsalo, o no, y sigue siendo el héroe anónimo de tu sitio web.
 * Version:           1.2
 * Requires at least: 6.0
 * Requires PHP:      7.4
 * Author:            QuintanaWeb
 * Author URI:        https://quintanaweb.com/
 * License:           GPL v2 o posterior
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       quintanaweb
 **/

   
    require 'plugin-update-checker/plugin-update-checker.php';
    use YahnisElsts\PluginUpdateChecker\v5\PucFactory;
    $myUpdateChecker = PucFactory::buildUpdateChecker(
        'https://github.com/QuintanaWeb/RD-OptiPer',
        __FILE__,
        'RD-OptiPer'
    );
    


    ////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////


    //COLORES COORPORATIVOS ESCRITORIO
    
    function wptutsplus_admin_styles() {
        wp_register_style( 'wptuts_admin_stylesheet', plugins_url( '/css/style.css', __FILE__ ) );
        wp_enqueue_style( 'wptuts_admin_stylesheet' );
    }
    add_action( 'admin_enqueue_scripts', 'wptutsplus_admin_styles' );

 ////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////


//CAMBIO ICO DENTRO ADMIN
function ico_admin_wp() {
    echo '
        <style type="text/css">
            #wpadminbar #wp-admin-bar-wp-logo>.ab-item {
                padding: 0 7px;
                background-image: url(/wp-content/plugins/RD-OptiPer/img/admin_ico.png)!important;
                background-size: 50%;
                background-position: center;
                background-repeat: no-repeat;
                opacity: 0.8;
            }
            #wpadminbar #wp-admin-bar-wp-logo>.ab-item .ab-icon:before {
                content: " ";
                top: 2px;
            }
        </style>
    ';
}
add_action('wp_before_admin_bar_render', 'ico_admin_wp');

//CAMBIO DE MENSAJE DE ERROR
function error_msn_qw() {
    return '¡Ups! Hay algo que no pusiste bien';
}
add_filter('login_errors', 'error_msn_qw');


// CAMBIAR PIE ADMINISTRACIÓN
function footer_admin_wp() {
    return '<b>Somos <a target="_blank" href="https://www.reseteodigital.es">ReseteoDigital.es</a> | Oficina: <a target="_blank" href="tel:+34670907657">670907657</a> | Soporte por WhatsApp: <a target="_blank" href="https://api.whatsapp.com/send?phone=34644062375&text=%C2%A1Necesito%20ayuda%20con%20mi%20web!">644062375</a> | Email: <a target="_blank" href="mailto:soporte@reseteodigital.es">soporte@reseteodigital.es</a></b>';
    }
    add_action( 'admin_footer_text', 'footer_admin_wp' );

// CAMBIO ENLACE LOGO HOME
function logo_admin_url_logo() {
    return home_url();
    }
    add_filter( 'login_headerurl', 'logo_admin_url_logo' );

//CAMBIO DE ENLACE DE wp
function link_vip_wp() { ?>
    <style>
        .caja-vip {
            text-align: center;
            margin-top: 10em;
            color: black;
            background: white;
            border: 3px solid #9806AC!important;
            width: 302px;
            margin: auto;
            padding: 20px 24px;
            border-radius: 8px;
            top: 50%;
            font-family: Hind, Sans-serif;
            text-decoration: none;
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
        }
        .caja-vip:hover {
            box-shadow: 8px 8px 0px 0px #F2315B !important;
        }
    </style>
    <p class="caja-vip">
        <span style="font-weight: bold;">¿TIENES ALGÚN PROBLEMA CON TU WEB?</span></br>&#129094;<a target="_blank" href="https://api.whatsapp.com/send?phone=34644062375&text=%C2%A1Necesito%20ayuda%20con%20mi%20web!" style="color: black; text-decoration: none; font-weight: lighter;"> Contáctanos por WhatsApp </a>&#129092;
    </p>
<?php }
add_action('login_footer','link_vip_wp');


////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////

// CAMBIAR FONDO VIDEO PANTALLA ADMIN
function custom_login_video_background() {
    ?>
        <div class="video-background">
        <div class="video-overlay"></div><!-- Agrega la capa de fondo aquí -->
            <video autoplay muted loop>
                <source src="/wp-content/plugins/RD-OptiPer/vid/background.mp4" type="video/mp4">
            </video>
        </div>
    <?php
}
add_action('login_footer', 'custom_login_video_background');

