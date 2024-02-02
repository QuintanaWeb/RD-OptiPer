<?php

/**
 * Plugin Name:       RD-OptiPer
 * Update URI:        https://github.com/QuintanaWeb/RD-OptiPer
 * Plugin URI:        https://quintanaweb.com/plugin/
 * Description:       Este plugin, claramente sobrevalorado, no solo optimiza tu WordPress hasta hacerlo volar (casi literalmente), sino que también lo embellece hasta dejarlo irreconocible. ¿Mejorar rendimiento y estética al mismo tiempo? Exagerado, pero hey, aquí lo tienes. Úsalo, o no, y sigue siendo el héroe anónimo de tu sitio web.
 * Version:           1.3
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

