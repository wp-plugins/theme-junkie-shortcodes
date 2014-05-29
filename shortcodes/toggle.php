<?php
/**
 * Toggle shortcode
 *
 * @package    Theme_Junkie_Shortcodes
 * @since      0.1.0
 * @author     Theme Junkie
 * @copyright  Copyright (c) 2014, Theme Junkie & ThemeZilla
 * @license    http://www.gnu.org/licenses/gpl-2.0.html
 */

function junkie_toggle_shortcode( $atts, $content = null ) {

    extract( shortcode_atts( array(
		'title' => __( 'Title goes here', 'junkie-shortcodes' ),
		'state' => 'open'
    ), $atts ) );

	return "<div data-id='" . $state . "' class=\"junkie-toggle\"><span class=\"junkie-toggle-title\">" . esc_attr( $title ) . "</span><div class=\"junkie-toggle-inner\">" . do_shortcode( wp_filter_post_kses( $content ) ) . "</div></div>";

}

add_shortcode( 'junkie-toggle', 'junkie_toggle_shortcode' );