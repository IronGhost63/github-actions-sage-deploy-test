<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

add_filter('acf/fields/google_map/api', fn( $api ) => array_merge($api, ['key' => 'AIzaSyDpOfnPF5yuqBoiXSHtz2r4EprXaaT71ds']) );
