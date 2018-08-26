<?php
// Routes ADMIN
$app->group('/admin', function () use ($app) {

    $app->get('/',                  \AdminController::class . ':index')             ->setName('admin_index');

    $app->get('/creator',           \AdminCreatorController::class . ':index')      ->setName('admin_creator_index');
    $app->post('/creator',          \AdminCreatorController::class . ':create')     ->setName('admin_creator_create');
    $app->post('/creator/{id}',     \AdminCreatorController::class . ':delete')     ->setName('admin_creator_delete');

    $app->get('/hero',              \AdminHeroController::class . ':index')         ->setName('admin_hero_index');
    $app->post('/hero',             \AdminHeroController::class . ':create')        ->setName('admin_hero_create');
    $app->post('/hero/{id}',        \AdminHeroController::class . ':delete')        ->setName('admin_hero_delete');
});
