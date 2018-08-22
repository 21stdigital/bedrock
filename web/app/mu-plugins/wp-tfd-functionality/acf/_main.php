<?php

/*
 * Place ACF JSON in field-groups directory
 */
add_filter('acf/settings/save_json', function ($path) {
    return dirname(__FILE__);
});

add_filter('acf/settings/load_json', function ($paths) {
    unset($paths[0]);
    $paths[] = dirname(__FILE__);

    return $paths;
});
