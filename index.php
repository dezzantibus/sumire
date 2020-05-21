<?php

session_start();

require_once __DIR__ . '/tools/class_finder.php';

spl_autoload_register( 'class_finder::getClassFile' );

/**
 * This will have to load the user data every time a page is loaded
 * or fill the session class with empty classes
 */

if( empty( $_SESSION['user_id'] ) && empty( $_COOKIE['user_id'] ) )
{
    session::$user = null;
}
else
{

    if( empty( $_SESSION['user_id'] ) )
    {
        $_SESSION['user_id'] = $_COOKIE['user_id'];
    }

    session::$user = model_user::getById( $_SESSION['user_id'] );

}

/** @var handler $page */
$page = router::run();
$page->run();
