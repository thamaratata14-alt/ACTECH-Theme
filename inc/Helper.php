<?php

/**
 * ACTECH Theme
 */

if (!defined('GLPI_ROOT')) {
    die('Acesso direto não permitido.');
}

/*
 * Carrega o autoload do Composer, se existir.
 */
$autoload = __DIR__ . '/vendor/autoload.php';

if (file_exists($autoload)) {
    require_once $autoload;
}

/*
 * Carrega a classe principal.
 */
require_once __DIR__ . '/inc/Bootstrap.php';

ActechTheme\Bootstrap::init();