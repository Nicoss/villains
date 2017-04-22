<?php
// Routes API
$app->group('/api', function () use ($app) {

    $app->get('/blaireau', \TurboController::class . ':blaireau')->setName('api_blaireau');
    $app->get('/mongolo', \TurboController::class . ':mongolo')->setName('api_mongolo');
});
