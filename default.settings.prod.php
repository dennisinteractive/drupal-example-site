<?php
/**
 * @file Settings for dev environment.
 *
 * This file gets copied as settings.dev.php when Drupal Console environment is 'prod'
 *
 */

// Errors.
error_reporting(0);
ini_set('display_errors', FALSE);
ini_set('html_errors', FALSE);
$conf['error_level'] = 0;
