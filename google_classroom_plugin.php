<?php

/*
Plugin Name:  Google Classroom Plugin
Version: 1.0
Description: Adds a "Send to Google Classroom Button" for the page you insert the shortcode on.
Author: Ethan Hancock
Author URI: https://entelechyinteractive.com
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: google_classroom_plugin
*/

add_shortcode('classroom_button', 'gl_button');

function gl_button(){
        return '<g:sharetoclassroom url="'.get_permalink($post->ID).'" size="50"></g:sharetoclassroom>';
}

?>