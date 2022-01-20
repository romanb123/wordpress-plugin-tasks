<?php


function rb_activation()
{


    if (version_compare(get_bloginfo('version'), '5.0', '<')) {
        wp_die('you need version 5.0 or more to use this plugin');
    }



    global $wpdb;
    $createSQL      =   "
    CREATE TABLE `" . $wpdb->prefix . "tasks` (
        `ID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        `task_id` BIGINT(20) UNSIGNED NOT NULL,
        `priority` FLOAT(3,2) UNSIGNED NOT NULL,
        `user_ip` VARCHAR(50) NOT NULL,
        PRIMARY KEY (`ID`)
    ) ENGINE=InnoDB " . $wpdb->get_charset_collate() . ";";


    require_once(ABSPATH . "/wp-admin/includes/upgrade.php");
    dbDelta($createSQL);
}