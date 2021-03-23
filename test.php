<?php 
    include_once 'wp-load.php';
    global $wpdb;
    $get = $wpdb->get_results("SELECT * FROM".$wpdb->prefix."_app_user" );
    echo "<pre>".$get."<pre>";

?>