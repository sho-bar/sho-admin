<?php

use ShoAdmin\Ajax\PhotoReportHandler;

// Handle Adding Photo report functionality
add_action('wp_ajax_add_photo_report', function () {
    echo (new PhotoReportHandler)->insertReport();
    wp_die();
});