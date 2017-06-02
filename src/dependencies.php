<?php
// DIC configuration

$container = $app->getContainer();

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

// database
$container['db'] = function ($c) {
    $capsule = new \Illuminate\Database\Capsule\Manager;
    $capsule->addConnection($c->get('settings')['db']);

    $capsule->setAsGlobal();
    $capsule->bootEloquent();
    return $capsule;
};

// twig
$container['view'] = function ($c) {
    $templateDirectories = [
        __DIR__ . '/../templates',
        __DIR__ . '/../templates/common',
        __DIR__ . '/../templates/admin',
    ];

    $view = new \Slim\Views\Twig($templateDirectories, [
        'cache' => false
    ]);
    
    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $c['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($c['router'], $basePath));

    return $view;
};

// flash messages
$container['flash'] = function ($c) {
    return new \Slim\Flash\Messages();
};

/*$container['api'] = function($c) {
    // $models = array(
    //     'villain'   => new VillainController($c);
    // );

    $models = array();

    return $models;
};
*/