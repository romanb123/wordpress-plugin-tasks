<?php

function save_tasks_post_type($post_id, $post, $update)
{
    $task_info          =   get_post_meta($post_id, 'Task_info', true);
    $task_info            =   empty($task_info) ? [] : $task_info;
    $task_info['priority']  =   isset($task_info['priority']) ? absint($task_info['priority'])  : 0;
    $task_info['priority_count']  =   isset($task_info['priority_count']) ? absint($task_info['priority_count'])  : 0;

    update_post_meta($post_id, 'Task_info', $task_info);
}