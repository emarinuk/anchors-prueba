<?php
/*
Plugin Name: Stellar Anchor Integration
Description: Integra Stellar Anchors con WordPress
Version: 1.0
Author: Eduardo Marín
*/

// Asegúrate de que este archivo no sea accesible directamente
if (!defined('ABSPATH')) {
    exit;
}

// Configuración del Anchor
define('STELLAR_ANCHOR_DOMAIN', 'localhost'); // Usa 'localhost' para desarrollo local
define('STELLAR_NETWORK_PASSPHRASE', 'Test SDF Network ; September 2015'); // Red de prueba para desarrollo

// Inicialización del plugin
function stellar_anchor_init() {
    // Aquí irá el código de inicialización
    // Por ejemplo, registrar hooks, crear menús de administración, etc.
}
add_action('init', 'stellar_anchor_init');

// Función para obtener la configuración del Anchor
function get_stellar_anchor_config() {
    return [
        'domain' => STELLAR_ANCHOR_DOMAIN,
        'network_passphrase' => STELLAR_NETWORK_PASSPHRASE,
    ];
}

// Otras funciones del plugin irán aquí