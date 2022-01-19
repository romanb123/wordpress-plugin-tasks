<?php

/**
 * Plugin Name: tasks management
 * Description: manage tasks for the webmaster.
 */

if (!function_exists('add_action')) {
    echo 'direct acsess to this file is forbidden';
    exit;
}

// setup

// includes

// hooks
register_activation_hook(__FILE__, 'rb_activation');
// shortcodes