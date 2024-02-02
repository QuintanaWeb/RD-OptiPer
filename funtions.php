/**
 * Plugin Name:       RD-OptiPer
 * Update URI:        https://github.com/QuintanaWeb/RD-OptiPer
 * Plugin URI:        https://quintanaweb.com/plugin/
 * Description:       Este plugin, claramente sobrevalorado, no solo optimiza tu WordPress hasta hacerlo volar (casi literalmente), sino que también lo embellece hasta dejarlo irreconocible. ¿Mejorar rendimiento y estética al mismo tiempo? Exagerado, pero hey, aquí lo tienes. Úsalo, o no, y sigue siendo el héroe anónimo de tu sitio web.
 * Version:           1.1
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

// CAMBIAR PIE ADMINISTRACIÓN
function footer_admin_wp() {
    return '<b>Somos <a target="_blank" href="https://www.reseteodigital.es">ReseteoDigital.es</a> | Oficina: <a target="_blank" href="tel:+34670907657">670907657</a> | Soporte por WhatsApp: <a target="_blank" href="https://api.whatsapp.com/send?phone=34644062375&text=%C2%A1Necesito%20ayuda%20con%20mi%20web!">644062375</a> | Email: <a target="_blank" href="mailto:soporte@reseteodigital.es">soporte@reseteodigital.es</a></b>';
    }
    add_action( 'admin_footer_text', 'footer_admin_wp' );
