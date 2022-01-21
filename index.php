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
define('Tasks_PLUGIN_URI', __FILE__);
// includes
include('includes/activation.php');
include('includes/tasks_post_type.php');
include('process/save-task-post-data.php');
include('process/set-task-priority.php');
include('process/filter-tasks-post-type-content.php');
include('frontend/enqueue-scripts-and-files.php');


// hooks
register_activation_hook(__FILE__, 'rb_activation');
add_action('save_post_task', 'save_tasks_post_type', 10, 3);
add_action('init', 'Task_init');
add_filter('the_content', 'filter_tasks_type_content');
add_action('wp_enqueue_scripts', 'rb_enqueue_scripts', 100);
add_action('wp_ajax_set_task_priority', 'set_task_priority');

// shortcodes