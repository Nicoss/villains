<?php
if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}

require __DIR__ . '/../vendor/autoload.php';

spl_autoload_register(function ($class) {
    if (file_exists(__DIR__ . '/../src/middleware/' . $class . '.php'))
        require __DIR__ . '/../src/middleware/' . $class . '.php';
    elseif (file_exists(__DIR__ . '/../src/controller/api/' . $class . '.php'))
        require __DIR__ . '/../src/controller/api/' . $class . '.php';
    elseif (file_exists(__DIR__ . '/../src/controller/admin/' . $class . '.php'))
        require __DIR__ . '/../src/controller/admin/' . $class . '.php';
    else
        echo 'Could not load class ' . $class;
});

session_start();

// Instantiate the app
$settings = require __DIR__ . '/../src/settings.php';
$app = new \Slim\App($settings);

// Set up dependencies
require __DIR__ . '/../src/dependencies.php';

// Register middleware
require __DIR__ . '/../src/middleware.php';

// Register routes
require __DIR__ . '/../src/routes/main.php';
require __DIR__ . '/../src/routes/front.php';
require __DIR__ . '/../src/routes/api.php';
require __DIR__ . '/../src/routes/admin.php';

// Run app
$app->run();
