<?php
// Routes API
$app->group('/api', function () use ($app) {
    // Abstract
    $app->get('/blaireau', \AbstractController::class . ':blaireau')->setName('api_abstract_blaireau');
    $app->get('/mongolo', \AbstractController::class . ':mongolo')->setName('api_abstract_mongolo');

    // Creator
    $app->get('/creator', \CreatorController::class . ':get')->setName('api_creator_get');
    $app->post('/creator', \CreatorController::class . ':create')->setName('api_creator_post');

    // Hero
    $app->get('/hero', \HeroController::class . ':get')->setName('api_hero_get');
    $app->post('/hero', \HeroController::class . ':create')->setName('api_hero_post');

    // Media
    $app->get('/media', \MediaController::class . ':get')->setName('api_media_get');
    $app->post('/media', \MediaController::class . ':create')->setName('api_media_post');

    // Organization
    $app->get('/organization', \OrganizationController::class . ':get')->setName('api_organization_get');
    $app->post('/organization', \OrganizationController::class . ':create')->setName('api_organization_post');

    // Physical Distinction
    $app->get('/physical_distinction', \PhysicalDistinctionController::class . ':get')->setName('api_physical_distinction_get');
    $app->post('/physical_distinction', \PhysicalDistinctionController::class . ':create')->setName('api_physical_distinction_post');

    // Saga
    $app->get('/saga', \SagaController::class . ':get')->setName('api_saga_get');
    $app->post('/saga', \SagaController::class . ':create')->setName('api_saga_post');

    // Species
    $app->get('/species', \SpeciesController::class . ':get')->setName('api_species_get');
    $app->post('/species', \SpeciesController::class . ':create')->setName('api_species_post');

    // Universe
    $app->get('/universe', \UniverseController::class . ':get')->setName('api_universe_get');
    $app->post('/universe', \UniverseController::class . ':create')->setName('api_universe_post');

    // Villain
    $app->get('/villain', \VillainController::class . ':get')->setName('api_villainc_get');
    $app->post('/villain', \VillainController::class . ':create')->setName('api_villainc_post');

});
