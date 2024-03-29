<?php
/*
 * Plugin Name: Ceibwr Smart Bits
 * Description: Small formatting improvements to WP 2024 template.
 * Version: 1.1.2
 * Author: Alan Cameron Wills
 * Licence: GPLv2
 *
 */

function ceibwr_smart_bits_enqueue_script() {
    wp_enqueue_script("ceibwrsmartbits", "/wp-content/plugins/ceibwr-smart-bits/ceibwr-smart-bits.js");
	wp_enqueue_style("ceibwrsmartbitscss", "/wp-content/plugins/ceibwr-smart-bits/ceibwr-smart-bits.css");
}
add_action( 'wp_enqueue_scripts', 'ceibwr_smart_bits_enqueue_script' );

register_block_style(
    'core/post-template',
    array(
        'name'         => 'stonework',
        'label'        => __( 'Fix ht Rows', 'textdomain' ),
    )
);
register_block_style(
    'core/post-template',
    array(
        'name'         => 'masonry',
        'label'        => __( 'Fix wd Columns', 'textdomain' ),
    )
);
