<?php

use ShoAdmin\Ajax;

add_action('wp_ajax_add_photo_report', function () {
    $params = json_decode(stripslashes($_POST['params']));
    echo (new Ajax)->insertReport($params);
    wp_die();
});