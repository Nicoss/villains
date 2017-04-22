<?php
    
$app->get('/[{name}]', function ($request, $response, $args) {
    $this->logger->info("browsing FRONT /[{name}]");

    return $this->renderer->render($response, 'index.phtml', $args);
});