<?php


function rb_activation()
{


    if (version_compare(get_bloginfo('version'), '5.0', '<')) {
        wp_die('you need version 5.0 or more to use this plugin');
    }
}