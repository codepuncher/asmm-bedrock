<?php

/**
 * Theme filters.
 */

declare(strict_types=1);

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', static function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'asmm'));
});

add_filter('body_class', function (array $classes): array {
    $classes[] = 'bg-blue-dark';
    $classes[] = 'text-white';

    return $classes;
});
