<?php
function im_chart( $atts ){
        extract( shortcode_atts( array(
                'width' => '960',
                'height' => '480',
                'page' => '',
                'margin_left' => '-100'
                ), $atts ) 
        );
        $output = '<iframe src="http://berkmancenter.github.io/internet_monitor/' . esc_attr($page) . '" allowfullscreen="" width="'. esc_attr($width) . '" frameborder="0" height="' . esc_attr($height) . '" scrolling="no" style="margin-left: ' . esc_attr($margin_left) . 'px;"></iframe>';
        return $output;
}
add_shortcode( 'imchart', 'im_chart' );
?>
