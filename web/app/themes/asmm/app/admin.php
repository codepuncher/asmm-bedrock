<?php

/**
 * Theme admin.
 */

declare(strict_types=1);

namespace App;

use WP_Customize_Manager;

use function Roots\asset;

/**
 * Register the `.brand` selector to the blogname.
 *
 * @param  \WP_Customize_Manager $wp_customize
 * @return void
 */
add_action('customize_register', static function (WP_Customize_Manager $wp_customize) {
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => static function () {
            bloginfo('name');
        },
    ]);
});

/**
 * Register the customizer assets.
 *
 * @return void
 */
add_action('customize_preview_init', static function () {
    wp_enqueue_script(
        'sage/customizer.js',
        asset('scripts/customizer.js')->uri(),
        ['customize-preview'],
        null,
        true,
    );
});
