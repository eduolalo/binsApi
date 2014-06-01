<?php
    require 'Slim/Slim.php';

    \Slim\Slim::registerAutoloader();

    $app = new \Slim\Slim();

    $app->get('/', function() {
        echo 'hola';
    });

    $app->run();
?>