<?php
class UniverseController extends AbstractController {

    public function get($request, $response, $args) {
        $this->container->get('logger')->info("browsing API /universe [GET]");

        $data = array(
            'universe' => 'get'
        );
        return $response->withJson($data, 201);
    }
}
