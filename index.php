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
include('includes/activation.php');
include('includes/tasks_post_type.php');
include('process/save-task-post-data.php');
include('process/filter-tasks-post-type-content.php');

// hooks
register_activation_hook(__FILE__, 'rb_activation');
add_action('save_post_task', 'save_tasks_post_type', 10, 3);
add_action('init', 'Task_init');
add_filter('the_content', 'filter_tasks_type_content');

// shortcodes