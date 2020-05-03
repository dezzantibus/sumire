<?php

require_once __DIR__ . '/tools/class_finder.php';

spl_autoload_register( 'class_finder::getClassFile' );

/**
 * This will have to load the user data every time a page is loaded
 * or fill the session class with empty classes
 */
// these are hard-coded until we have a registration form and login procedure
session::$user = new data_user();
session::$user->id = 1;
session::$user->blog = 'rie';

/** @var handler $page */
$page = router::run();
$page->run();
