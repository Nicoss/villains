<?php
// Routes ADMIN
$app->group('/admin', function () use ($app) {

    $app->get('/',                  \AdminController::class . ':index')             ->setName('admin_index');

    $app->get('/creator',           \AdminCreatorController::class . ':index')      ->setName('admin_creator_index');
    $app->post('/creator',          \AdminCreatorController::class . ':create')     ->setName('admin_creator_create');
    $app->post('/creator/{id}',   \AdminCreatorController::class . ':delete')     ->setName('admin_creator_delete');
});
