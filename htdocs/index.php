<?php

/**
 * Application entry point
 *
 * @author Benoit.S « Benpro » <benpro@benprobox.fr>
 * @version 0.0.1
 * 
 * Licence : blabla
 *                            
 */

// Path
define('PROJECT_BASE','./');

// Get URI request
$uri = $_SERVER['REQUEST_URI'];

// Handle ROUTES
switch ($uri) {
    case (preg_match('#^/example/dosomething#', $uri)):
        echo "Hello World !";
        break;
    default:
       header('HTTP/1.1 404 Not found.');
       die();
}

?>