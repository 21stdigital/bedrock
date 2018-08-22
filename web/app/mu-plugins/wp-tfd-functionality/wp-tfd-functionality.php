<?php
/**
 * Plugin Name:       HYROX functionality
 * Plugin URI:        https://hyrox.com
 * Description:       This plugin adds site specific data to the HYROX webiste
 * Version:           1.0.0
 * Author:            21st digital GmbH
 * Author URI:        https://21st.digital
 * Text Domain:       hyrox
 * Domain Path:       /languages.
 */
if (!defined('WPINC')) {
    die;
}

$directories = glob(dirname(__FILE__).'/*', GLOB_ONLYDIR);

foreach ($directories as $index => $path) {
    $filename = $path.'/_main.php';
    if (file_exists($filename)) {
        require_once $filename;
    }
}
