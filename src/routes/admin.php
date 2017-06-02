<?php
// Routes ADMIN
$app->group('/admin', function () use ($app) {

    $app->get('/', \AdminController::class . ':index')->setName('admin_index');
    $app->get('/creator', \AdminController::class . ':creator')->setName('admin_creator');
});
