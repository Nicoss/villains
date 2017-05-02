<?php
// Routes ADMIN
$app->group('/admin', function () use ($app) {

    $app->get('/', \AdminController::class . ':index')->setName('admin_index');
    $app->get('/mongolo', \AdminController::class . ':mongolo')->setName('admin_mongolo');
});
