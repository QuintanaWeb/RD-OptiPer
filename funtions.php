<?php

/**
 * Plugin Name:       RD-OptiPer
 * Update URI:        https://github.com/QuintanaWeb/RD-OptiPer
 * Plugin URI:        https://quintanaweb.com/plugin/
 * Description:       Este plugin, claramente sobrevalorado, no solo optimiza tu WordPress hasta hacerlo volar (casi literalmente), sino que también lo embellece hasta dejarlo irreconocible. ¿Mejorar rendimiento y estética al mismo tiempo? Exagerado, pero hey, aquí lo tienes. Úsalo, o no, y sigue siendo el héroe anónimo de tu sitio web.
 * Version:           1.20
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


// CAMBIAR IMAGEN QUE APARECE EN WP-LOGIN
function admin_display_wp() { 
    ?>
        <style type="text/css">

            /* Cambio de fondo Login */
            body{
                background-color: #482D70!important;
                /*background-image: url("/wp-content/plugins/RD-OptiPer/img/Diseno-sin-titulo.png")!important;
                background-attachment: fixed!important;
                background-size: cover!important;*/
            }
            /*Estilo de video administración*/
            .video-background {
                position: absolute;
                right: 0;
                bottom: 0;
                min-width: 100%;
                min-height: 100%;
                width: auto;
                height: auto;
                z-index: -100;
                overflow: hidden;
            }

            /*Estilo de video administración 2*/
            .video-background iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }

            /*Capa superior video administración*/
            .video-overlay {
                position: absolute; /* Para que la capa de fondo tenga posición absoluta en el contenedor */
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(50, 30, 84, 0.6); /* Color negro con una opacidad del 50% (ajusta el valor del último componente rgba para cambiar la opacidad) */
                z-index: 1; /* Asegura que la capa de fondo esté encima del video */
            }

            /* Cambio de logo Login */
            #login h1 a, .login h1 a {
                background-image: url("/wp-content/plugins/RD-OptiPer/img/logo-admin.png");
                height:150px;
                width:190px;
                background-size: 180px 150px;
                background-repeat: no-repeat;
                padding-bottom: 1px;
            }

            /* Ensanchar caja acceso Login */
            #login {
                width: 350px!important;
            }

            /* Centrado olvidar contraseña y volver web */
            .login #nav, .login #backtoblog {
                text-align: center!important;
            }

            /* Texto Color de olvidar contraseña y volver a web */
            .login #nav a, .login #backtoblog a {
                color: #fcfcfc!important;
                font-family: "Hind", Sans-serif;
                text-decoration: none;
                font-size: 10px;
                font-weight: 700;
                text-transform: uppercase;
                text-align: center!important;
            }

            /* Color Ojito de contraseña */
            .wp-core-ui .button, .wp-core-ui .button-secondary{
                color:#482D70!important;
            }

            /* Cuadrado ojo al pulsar */
            .login .button.wp-hide-pw:focus{
                border-color:#482D70!important;
            }

            .wp-core-ui .button, .wp-core-ui .button-secondary{
                color:#fcfcfc!important;
            }
        
            /* Boton de entrar */
            #wp-submit {
                font-family: "Hind", Sans-serif;
                text-decoration: none;
                font-size: 10px;
                font-weight: 700;
                text-transform: uppercase;
                line-height: 1.5em;
                letter-spacing: 2px;
                color: #EDF1FC;
                background-color: #F2295B;
                box-shadow: 8px 8px 0px 0px #22223B;
                border: 3px solid #22223B;
                border-radius: 8px;
                padding: 8px;
            }   

            #wp-submit:hover {
                color: #22223B!important;
                background-color: #EDF1FC;
                box-shadow: 8px 8px 0px 0px #F2295B;
                border-style: solid;
                border-width: 3px 3px 3px 3px;
                border-color: #22223B;
            }

            /*BORDE MENSAJE*/
            .login .message{
                font-family: 'Khand', sans-serif;
                font-size: 10px;
                font-weight: 700;
                text-transform: uppercase;
                border: 3px solid #9806AC!important;
                border-left: 4px solid #F2315B!important;
                border-radius: 8px 8px 8px 8px;
                box-shadow: 6px 6px 0px 0px #22223B!important;
            }

            /* Cambia la sombra */
            .login .message:hover {
                box-shadow: 8px 8px 0px 0px #F2315B!important; 
            }

            /* Colores input formulario */
            input[type=checkbox]:focus, input[type=color]:focus, input[type=date]:focus, input[type=datetime-local]:focus, input[type=datetime]:focus, input[type=email]:focus, input[type=month]:focus, input[type=number]:focus, input[type=password]:focus, input[type=radio]:focus, input[type=search]:focus, input[type=tel]:focus, input[type=text]:focus, input[type=time]:focus, input[type=url]:focus, input[type=week]:focus, select:focus, textarea:focus {
                border-color: #482D70!important;
                box-shadow: 0 0 0 1px #482D70!important;
            }

            /* Estilo caja formulario */
            .login form {
                padding: 46px 44px!important;
                font-weight: 500;
                border-radius: 8px;
                border: 3px solid #9806AC!important;
                box-shadow: 6px 6px 0px 0px #22223B!important;
            }

            .login form .input{
                font-family: 'Khand', sans-serif;
                font-size: 16px;
                font-weight: 400;
            }
            .login form:hover{
                box-shadow: 8px 8px 0px 0px #F2315B!important;
            }

            /*  Oculta enlace a politicas*/
            .privacy-policy-page-link a{
                color: white!important;
            }

            /*texto Label, nombre, email y recuerdame */
            .login label{
                font-family: 'Khand', sans-serif;
                font-size: 10px!important;
                font-weight: 700!important;
                text-transform: uppercase;
            }

        </style>
<?php 
}

add_action( 'login_enqueue_scripts', 'admin_display_wp' );

//QUITAR IDIOMA VENTANA ADMIN
add_filter( 'login_display_language_dropdown', '__return_false' );

//SiteGround Security
/* Controlar periodo de vaciado de tablas de registro de SG Security */
add_filter( 'sgs_set_activity_log_lifetime', 'set_custom_log_lifetime' );
function set_custom_log_lifetime() {
return '5';
}

/* Quitar menús principales de admin de WordPress */
/*function remove_menus(){
  
    remove_menu_page( 'et_divi_options' ); //Divi
    remove_menu_page( 'sg-security' );     //SG Security
    remove_menu_page( 'snippets' );        //Code Snippets  
  }
  add_action( 'admin_menu', 'remove_menus', 999 );*/

    