<?php

/**
 Plugin Name: Youtube NoCookie
 Plugin URI: http://github.com/benignware-labs/wp-youtube-nocookie
 Description: Swap youtube embed urls with related no-cookie service
 Version: 0.0.2
 Author: Rafael Nowrotek, Benignware
 Author URI: http://benignware.com
 License: MIT
*/

add_filter('embed_oembed_html', 'embed_handler_oembed_youtube_nocookie', 10, 4);
function embed_handler_oembed_youtube_nocookie($html = '', $url = '', $attr = null, $post_ID = null) {
  if (strpos($url, 'youtube.com') !== false) {
    $new_html = str_replace('www.youtube.com', 'www.youtube-nocookie.com', $html);
    return $new_html;
  }
  return $html;
}
