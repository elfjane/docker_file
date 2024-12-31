<?php
/**
 * CRON_BASE_PATH
 *
 * Dynamically figure out where in the filesystem we are located.
 * @global string WEB_BASE_PATH Absolute path to our framework
 */

define('CRON_DEBUG_MODE', 1);
define('CRON_DEBUG_MODE_TIME', 1);

define('CRON_BASE_PATH', __DIR__);
define('CRON_BASE_PATH_KEY', 'key');

define('CRON_CHANGE_IP', 1);

define('CRON_DOC_ROOT', CRON_BASE_PATH . '/swagger');
define('CRON_DOC_ROOT_YML', 'docs');
define('CRON_DOC_FOLDER', 'api');
?>