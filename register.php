<?php

    /* @var INSIDE boolean constant, to track if the request comes from within the game */
    define('INSIDE', true);

    // register autoloader
    require_once 'core/autoload.php';

    Config::init();

    $controller = new C_Register($_GET, $_POST);


    $controller->display();