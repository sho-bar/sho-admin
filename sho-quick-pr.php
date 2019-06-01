<?php
/*
Plugin Name: Sho Quick Photo Report
Author: Serhii Cho
Author URI: https://www.linkedin.com/in/serhii-chornenkyi-573005187/
Description: Custom plugin for shobar.com.ua
Version: 0.1
License: no
License URI: https://www.linkedin.com/in/serhii-chornenkyi-573005187/
Text Domain: sho-qpr
Tags: custom-background, custom-logo, custom-menu, featured-images, threaded-comments, translation-ready
*/

defined('ABSPATH') || exit;
define('SHO_QUICK_PR_PATH', plugin_dir_path(__FILE__));
define('SHO_QUICK_PR_URL', plugin_dir_url(__FILE__));

require_once('vendor/autoload.php');
require_once('bootstrap.php');
