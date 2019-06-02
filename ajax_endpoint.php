<?php

use ShoAdmin\Ajax\PhotoReportHandler;

// Handle Adding Photo report functionality
add_action('wp_ajax_add_photo_report', function () {
    $params = json_decode(stripslashes($_POST['params']));
    echo (new PhotoReportHandler($params))->insertReport();
    wp_die();
});