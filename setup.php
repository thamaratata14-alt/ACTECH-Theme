<?php

/**
 * -------------------------------------------------------------------------
 * ACTECH Theme
 * -------------------------------------------------------------------------
 *
 * Plugin de personalização visual para GLPI 11.
 *
 * @author      Thamara Cristina
 * @copyright   ACTECH Soluções Tecnológicas
 * @license     GPL v3
 * @link        https://github.com
 * -------------------------------------------------------------------------
 */

define('PLUGIN_ACTECHTHEME_VERSION', '1.0.0');

/**
 * Inicializa o plugin
 */
function plugin_init_actechtheme()
{
    global $PLUGIN_HOOKS;

    // Plugin compatível com proteção CSRF do GLPI
    $PLUGIN_HOOKS['csrf_compliant']['actechtheme'] = true;
}

/**
 * Informações do plugin
 */
function plugin_version_actechtheme()
{
    return [
        'name'           => 'ACTECH Theme',
        'version'        => PLUGIN_ACTECHTHEME_VERSION,
        'author'         => 'Thamara Cristina',
        'license'        => 'GPL v3',
        'homepage'       => 'https://github.com',
        'requirements'   => [
            'glpi' => [
                'min' => '11.0.0',
                'max' => '11.99.99'
            ],
            'php' => [
                'min' => '8.2'
            ]
        ]
    ];
}

/**
 * Verifica os requisitos antes da instalação
 */
function plugin_actechtheme_check_prerequisites()
{
    return true;
}

/**
 * Verifica se o plugin está configurado
 */
function plugin_actechtheme_check_config($verbose = false)
{
    return true;
}