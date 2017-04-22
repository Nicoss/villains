<?php
// Routes ADMIN
$app->group('/admin', function () use ($app) {

    $app->get('/blaireau', \AdminController::class . ':blaireau')->setName('admin_blaireau');
    $app->get('/mongolo', \AdminController::class . ':mongolo')->setName('admin_mongolo');
});
