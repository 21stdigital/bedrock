<?php

/**
 * Add ACF options page.
 */
add_action('init', function () {
    if (!function_exists('acf_add_options_page')) {
        return;
    }
    // acf_add_options_page([
    //     'page_title' => 'TITLE',
    //     'menu_title' => 'TITLE',
    //     'menu_slug' => 'main',
    //     'capability' => 'edit_posts',
    //     'parent_slug' => '',
    //     'position' => 2, // Below 'Dashboard' menu item
    //     'icon_url' => 'dashicons-admin-generic',
    // ]);
    // acf_add_options_sub_page([
    //     'page_title' => 'SUBOPTIONPAGE',
    //     'menu_title' => 'SUBOPTIONPAGE',
    //     'menu_slug' => 'sub1',
    //     'capability' => 'edit_pages',
    //     'parent_slug' => 'main',
    // ]);

});
