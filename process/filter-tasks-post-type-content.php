<?php
function filter_tasks_type_content($content)
{ {
        if (is_singular('Task')) {
            return $content;
        }
    }

    global $post, $wpdb;
    $task_data = get_post_meta($post->ID, 'Task_info', true);
    $task_html = file_get_contents('tasks_template.php', true);
    $task_html = str_replace('TP', __('Task Priority', 'rb-plugin'), $task_html);
    $task_html = str_replace('task_ID', $post->ID, $task_html);
    $task_html = str_replace('Task-Priority', __('task_PRIORITY', 'rb-plugin'), $task_html);
    $task_html = str_replace('task_PRIORITY', $task_data['priority'], $task_html);

    $user_IP            =   $_SERVER['REMOTE_ADDR'];

    $rating_priority       =   $wpdb->get_var(
        "SELECT COUNT(*) FROM `" . $wpdb->prefix . "tasks` WHERE task_id='" . $post->ID . "' AND user_ip='" . $user_IP . "'"
    );


    if ($rating_priority > 0) {
        $task_html    =   str_replace(
            'READONLY_PLACEHOLDER',
            'data-rateit-readonly="true"',
            $task_html
        );
    } else {
        $task_html    =   str_replace('READONLY_PLACEHOLDER', '', $task_html);
    }


    return $task_html . $content;
}