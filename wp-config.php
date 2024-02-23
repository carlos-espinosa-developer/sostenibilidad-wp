<?php

define('WP_CONTENT_DIR', getenv('WP_CONTENT_DIR'));
define('DBI_AWS_ACCESS_KEY_ID', getenv('USER_S3_ACCESS_KEY_ID'));
define('DBI_AWS_SECRET_ACCESS_KEY', getenv('USER_S3_ACCESS_KEY_SECRET'));

$table_prefix  = getenv('TABLE_PREFIX') ?: 'wp_';

foreach ($_ENV as $key => $value) {
    $capitalized = strtoupper($key);
    if (!defined($capitalized)) {
        define($capitalized, $value);
    }
}

if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

require_once(ABSPATH . 'wp-secrets.php');
require_once(ABSPATH . 'wp-settings.php');
