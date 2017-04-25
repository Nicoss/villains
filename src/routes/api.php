<?php
// Routes API
$app->group('/api', function () use ($app) {
    // Abstract
    $app->get('/blaireau', \AbstractController::class . ':blaireau')->setName('api_abstract_blaireau');
    $app->get('/mongolo', \AbstractController::class . ':mongolo')->setName('api_abstract_mongolo');

    // Creator
    $app->get('/creator', \CreatorController::class . ':get')->setName('api_creator_get');

    // Hero
    $app->get('/hero', \HeroController::class . ':get')->setName('api_hero_get');

    // Media
    $app->get('/media', \MediaController::class . ':get')->setName('api_media_get');

    // Organization
    $app->get('/organization', \OrganizationController::class . ':get')->setName('api_organization_get');

    // Physical Distinction
    $app->get('/physical_distinction', \PhysicalDistinctionController::class . ':get')->setName('api_physical_distinction_get');

    // Saga
    $app->get('/saga', \SagaController::class . ':get')->setName('api_saga_get');

    // Species
    $app->get('/species', \SpeciesController::class . ':get')->setName('api_species_get');

    // Universe
    $app->get('/universe', \UniverseController::class . ':get')->setName('api_universe_get');

    // Villain
    $app->get('/villain', \VillainController::class . ':get')->setName('api_villainc_get');

});
