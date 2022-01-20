<?php

function rb_enqueue_scripts()
{
    wp_register_style('rb_tasks', plugins_url('/assets/rateit/rateit.css', Tasks_PLUGIN_URI));
    wp_enqueue_style('rb_tasks');

    wp_register_script(
        'rb_tasks',
        plugins_url('/assets/rateit/jquery.rateit.min.js', Tasks_PLUGIN_URI),
        ['jquery'],
        '1.0.0',
        true
    );
    wp_register_script(
        'rb_main',
        plugins_url('/assets/js/main.js', Tasks_PLUGIN_URI),
        ['jquery'],
        '1.0.0',
        true
    );



    wp_enqueue_script('rb_tasks');
    wp_enqueue_script('rb_main');
}