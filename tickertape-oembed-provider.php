<?php
/**
 * Plugin Name: Tickertape oEmbed Provider
 * Plugin URI: https://www.tickertape.in/shortcode
 * Description: The plugin extends Wordpress's automatic embed feature, allowing you to directly embed stock and ETF cards from Tickertape Shortcode URL
 * Version: 1.1
 * Author: tickertape
 * Author URI: https://www.tickertape.in
 * License: GPLv2
 * Requires at least: 2.9
 */

function add_tickertape_oembed_provider () {
  // This adds a URL format and oEmbed provider URL pair
  // More at https://developer.wordpress.org/reference/functions/wp_oembed_add_provider/
  wp_oembed_add_provider('#https://(www\.)?gateway-tt\.in/trade*#i', "https://www.gateway-tt.in/oembed", true);
}

add_action( 'init', 'add_tickertape_oembed_provider' );
