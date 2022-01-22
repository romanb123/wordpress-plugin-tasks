<?php

function set_task_priority()
{
    global $wpdb;

    $output             =   ['status' => 1];
    $post_ID            =   absint($_POST['rid']);
    $priority             =   round($_POST['rating'], 1);
    $user_IP            =   $_SERVER['REMOTE_ADDR'];

    $priority_count       =   $wpdb->get_var(
        "SELECT COUNT(*) FROM `" . $wpdb->prefix . "tasks`
        WHERE task_id='" . $post_ID . "' AND user_ip='" . $user_IP . "'"
    );

    if ($priority_count > 0) {
        wp_send_json($output);
    }

    // Insert priority into database
    $wpdb->insert(
        $wpdb->prefix . 'tasks',
        [
            'task_id' =>  $post_ID,
            'priority'    =>  $priority,
            'user_ip'   =>  $user_IP
        ],
        ['%d', '%f', '%s']
    );

    // Update Recipe Metadata
    $post_date        =   get_post_meta($post_ID, 'Task_info', true);
    $post_date['priority_count']++;
    $post_date['priority']  =   round($wpdb->get_var(
        "SELECT AVG(`priority`) FROM `" . $wpdb->prefix . "tasks`
        WHERE task_id='" . $post_ID . "'"
    ), 1);

    update_post_meta($post_ID, 'Task_info', $post_date);

    $output['status']   =   2;
    wp_send_json($output);
}
