<?php
/*
Plugin Name: flickr-exif 
Plugin URI: http://fukata.org/dev/wp-plugin/flickr-exif/
Description: Flickr photo's exif information embed plugin.
Version: 0.0.1 
Author: Tatsuya Fukata
Author URI: http://fukata.org
*/

function do_flickr_exif($atts, $content=null) {
    $atts = shortcode_atts(array(
        'photo_id' => null,
    ), $atts);

    $photo_id = $atts['photo_id'];
    $html =<<< END_HTML
<script type="text/javascript">var flickr_exif_params={photo_id: "$photo_id"};</script>
<script type="text/javascript" src="//flickrexif.fukata.org/v1/widget.js"></script>
END_HTML;

    return $html;
}

add_shortcode('flickr-exif', 'do_flickr_exif');
