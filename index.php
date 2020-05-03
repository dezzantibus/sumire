<?php

require_once __DIR__ . '/tools/class_finder.php';

spl_autoload_register( 'class_finder::getClassFile' );

/**
 * This will have to load the user data every time a page is loaded
 * or fill the session class with empty classes
 */
session::$user = new data_user();

/** @var handler $page */
$page = router::run();
$page->run();
