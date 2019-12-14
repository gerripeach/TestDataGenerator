<?php

use Slim\App;

return function (App $app) {
    $container = $app->getContainer();

    // view renderer
    $container['renderer'] = function ($c) {
        $settings = $c->get('settings')['renderer'];
        return new \Slim\Views\PhpRenderer($settings['template_path']);
    };

    // monolog
    $container['logger'] = function ($c) {
        $settings = $c->get('settings')['logger'];
        $logger = new \Monolog\Logger($settings['name']);
        $logger->pushProcessor(new \Monolog\Processor\UidProcessor());
        $logger->pushHandler(new \Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
        return $logger;
    };

    $container['view'] = function ($container) {
        $view = new \Slim\Views\Twig('../templates/');
        return $view;
    };

    // database connection
    $container['database'] = function ($c) {
        $settings = $c->get('settings')['database'];
        return new \RandomData\DatabaseHelper($settings['host'], $settings['port'],
            $settings['user'], $settings['pass'], $settings['base']);
    };
};
