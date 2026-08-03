<?php

if (!defined('GLPI_ROOT')) {
    die("Sorry. You can't access this file directly");
}

/**
 * Inicialização do plugin
 */
function plugin_init_actechtheme()
{
    global $PLUGIN_HOOKS;

    $PLUGIN_HOOKS['csrf_compliant']['actechtheme'] = true;
}

/**
 * Informações do plugin
 */
function plugin_version_actechtheme()
{
    return [
        'name'           => 'ACTECH Theme',
        'version'        => '1.0.0',
        'author'         => 'Thamara Cristina',
        'license'        => 'GPL v3',
        'homepage'       => '',
        'requirements'   => [
            'glpi' => [
                'min' => '11.0.0',
                'max' => '11.99'
            ]
        ]
    ];
}