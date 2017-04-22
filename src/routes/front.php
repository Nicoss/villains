<?php
// Routes FRONT
$app->group('/front', function () use ($app) {
    
    $app->get('/[{name}]', function ($request, $response, $args) {
        $this->logger->info("browsing FRONT /[{name}]");

        return $this->renderer->render($response, 'index.phtml', $args);
    });
});